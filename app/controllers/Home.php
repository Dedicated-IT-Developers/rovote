<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {
	
	public function index() {
		$this->call->model('Candidate_model', 'candidate_model');
		$data['candidates'] = $this->candidate_model->candidates();
		$this->call->view('home_view', $data);
	}
}
