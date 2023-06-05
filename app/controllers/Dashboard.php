<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Dashboard extends Controller {

	public function __construct()
    {
        parent::__construct();

    }

    public function index() {
		$this->call->view('overview_view');
	}

    public function org() {
        $this->call->model('Organization_model','organization_model');

        $data['organizations'] = $this->organization_model->organizations();
		$this->call->view('org/organization_view', $data);
	}

    public function filing() {
		$this->call->view('filing/applicant_view');
	}

    public function candidates() {
		$this->call->model('Candidate_model','candidate_model');

        $data['candidates'] = $this->candidate_model->candidates();

		$this->call->view('candidate/list_candidate_view', $data);
	}

    public function add_candidate() {

		if ($this->form_validation->submitted()) {

            $this->form_validation
				->name('full_name')
                ->required('Candidate name is required.')
                ->max_length(70)
                ->min_length(1)
                ->name('bio')
                ->max_length(300)
				->name('program')->required()
				->name('college')->required()
				->name('organization_id')->required()
				->name('year_level')->required()
				->name('section')->required();

            if ($this->form_validation->run()) {
                $data['full_name'] = $this->io->post('full_name');
                $data['organization_id'] = $this->io->post('organization_id');
                $data['college'] = $this->io->post('college');
                $data['program'] = $this->io->post('program');
                $data['bio'] = $this->io->post('bio');
                $data['position'] = $this->io->post('position');
                $data['year_level'] = $this->io->post('year_level');
                $data['section'] = $this->io->post('section');
                $data['semester'] = 1; // settings
                $data['academic_year'] = '2023-2024'; // settings

                $picture = null;
                if ($_FILES["picture"]['tmp_name'] != '' or $_FILES["picture"]['name'] != '') {
                    $this->call->library('upload', $_FILES["picture"]);
                    $this->upload->max_size(20)
                        ->set_dir('public/candidate/picture/')
                        ->allowed_extensions(array('png', 'jpg', 'jpeg'))
                        ->encrypt_name(); //encrypted filename
                    if ($this->upload->do_upload()) {
                        $data['picture'] = $this->upload->get_filename();
                    } else {
                        $err = '';
                        foreach ($this->upload->get_errors() as $error) {
                            $err = $err . ', ' . $error . '<br>';
                        }
                        $this->session->set_flashdata(array('alert' => 'danger', 'message' => $err));
                        redirect();
                    }
                }

                $video = null;
                if ($_FILES["video"]['tmp_name'] != '' or $_FILES["video"]['name'] != '') {
                    $this->call->library('upload', $_FILES["covideover"]);
                    $this->upload->max_size(20)
                        ->set_dir('public/candidate/video/')
                        ->allowed_extensions(array('png', 'jpg', 'jpeg'))
                        ->encrypt_name(); //encrypted filename
                    if ($this->upload->do_upload()) {
                        $data['video'] = $this->upload->get_filename();
                    } else {
                        $err = '';
                        foreach ($this->upload->get_errors() as $error) {
                            $err = $err . ', ' . $error . '<br>';
                        }
                        $this->session->set_flashdata(array('alert' => 'danger', 'message' => $err));
                        redirect();
                    }
                }
                
                $this->call->model('Candidate_model','candidate_model');

                if($this->candidate_model->add_candidate($data)){
                    set_flash_alert('success', 'Candidate added successfuly.');
					redirect('dashboard/candidates/');
                }

            } else {
                set_flash_alert('danger', $this->form_validation->errors());
            }
        }

		$this->call->view('candidate/add_candidate_view');
	}

    public function vote() {

        $STUDID = null;
        if ($this->form_validation->submitted()) {
            $this->form_validation
				->name('STUDID')
                ->required('ID Number is required.');
            if ($this->form_validation->run()) {
                $STUDID = $this->io->post('STUDID');
            } else {
                set_flash_alert('danger', $this->form_validation->errors());
            }
        }

        $this->call->model('Student_model','student_model');
        $data['students'] = $this->student_model->students($STUDID);

		$this->call->view('vote/students_view', $data);
	}

    public function results() {
		$this->call->view('results/results_view');
	}

}

?>