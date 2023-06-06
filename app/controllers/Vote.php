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
        $this->call->model('Candidate_model', 'candidate_model');
        $this->call->model('Student_model', 'student_model');

        $data['candidates'] = $this->candidate_model->candidates();
        $data['voter'] = $this->student_model->students($STUDID);

        $this->call->view('vote/vote_view', $data);
    }
}
