<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Profile extends Controller {

	public function __construct()
    {
        parent::__construct();

    }

    public function index() {
		$this->call->view('profile/profile_view');
	}

}