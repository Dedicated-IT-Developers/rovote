<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Vote extends Controller {

	public function __construct()
    {
        parent::__construct();

    }

    public function student($STUDID) {
		$this->call->view('vote/vote_view');
	}

}