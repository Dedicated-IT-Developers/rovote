<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Vote extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function student($STUDID)
    {
        $data['studid'] = $STUDID;
        $this->call->model('Candidate_model', 'candidate_model');
        $this->call->model('Student_model', 'student_model');

        $data['candidates'] = $this->candidate_model->candidates();
        $data['voter'] = $this->student_model->student_info($STUDID);

        $this->call->view('vote/vote_view', $data);
    }

    public function ballot($studid)
    {
        $this->call->model('Vote_model', 'vote_model');

        $votes = $_SESSION['candidates_voted_by_' . $studid];

        if ($this->vote_model->check_voting_status($studid)) {
            unset($_SESSION['candidates_voted_by_' . $studid]);
            $this->session->set_flashdata(['alert' => 'warning', 'message' => 'You already voted!']);
        } else {
            foreach ($votes as $key => $value) {
                if ($key == 'studid') {
                    continue;
                }

                $data = [
                    'user_id' => $studid,
                    'candidate_id' => $value,
                ];
                // show($data);
                $this->vote_model->add_vote($data);
            }
            unset($_SESSION['candidates_voted_by_' . $studid]);
            $this->session->set_flashdata(['alert' => 'success', 'message' => 'Thank you for voting! Your vote matters.']);
        }
        redirect('dashboard/vote');
    }

    public function save_candidates()
    {
        $candidates = [];
        foreach ($_POST as $key => $value) {
            $candidates[$key] = $value;
        }
        unset($_SESSION['candidates_voted_by_' . $candidates['studid']]);
        $this->session->set_userdata('candidates_voted_by_' . $candidates['studid'], $candidates);
        $this->session->set_flashdata(['alert' => 'success', 'message' => 'Voted candidates successfully saved!']);
        echo json_encode(['status' => 'success']);
    }
}
