<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Auth extends Controller {

	public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if (is_logged_in())
            user_type();
        else
            redirect('auth/login');
    }

	public function login() 
	{
        if (is_logged_in())
            user_type();

        if ($this->form_validation->submitted()) {

            $this->form_validation
                    ->name('email')->required()
                                ->min_length(8)
                                ->max_length(100)
                                ->valid_email()
                    ->name('password')->required()
                                ->min_length(8)
                                ->max_length(25);

            if ($this->form_validation->run()) 
            {
                $email = $this->io->post('email');
                $password = $this->io->post('password');

                $this->call->model('Auth_model', 'auth_model');

                // if (!$this->auth_model->is_user_verified($email))
                // {
                //     set_flash_alert('danger', 'Account not yet verified. Check your email or forgot your password.');
                //     redirect('auth/verify/');
                // }

                $data = $this->auth_model->login($email, $password);
                if (empty($data)) 
                {
                    set_flash_alert('danger', 'Invalid email or password.');
                } 
                else 
                {
                    // set sessions when logged in using session library
                    $this->session->set_userdata(
                        array(
                            'logged_in' => 1,
                            'user_id' => $data['user_id'],
                            'email' => $data['email'],
                            'user_type' => $data['user_type']
                        )
                    );
                    set_flash_alert('success', 'Welcome '.$this->session->userdata('email'));
                    // then redirect in Home page depends on user type , check the user_type() function
                    user_type();
                }

            } 
            else 
            {
                set_flash_alert('danger', $this->form_validation->get_errors());
            }
        }

		$this->call->view('auth/login_view');
	}

    public function logout()
    {

        // clear sessions when logged out using session library
        $this->session->unset_userdata(
            array(
                'logged_in',
                'user_id',
                'email',
                'user_type'
            )
        );
        $this->session->sess_destroy();
        redirect();
    }

    // public function register() 
	// {
	// 	if (is_logged_in())
    //         user_type();

    //     if ($this->form_validation->submitted()) {

	// 		$email = $this->io->post('email');
    //         $this->form_validation
	// 			->name('user_type')->required('Choose your desired account type.')
    //             ->name('email')
    //             ->required('Email is required.')
    //             ->valid_email()
    //             ->max_length(100)
    //             ->min_length(8)
    //             ->is_unique('user', 'email', $email, 'Email was already taken.')
    //             ->name('password')
    //             ->required('Password must not be empty.')
    //             ->min_length(8, 'Password must be atleast 8 charaters in length.')
    //             ->max_length(25)
    //             ->name('confirm_password')
    //             ->required('Confirm your password.')
    //             ->matches('password', 'Password do not match!');

    //         if ($this->form_validation->run()) {
    //             $password = $this->io->post('password');
    //             $user_type = $this->io->post('user_type');
    //             $token = random_string('alnum', 45);

    //             $this->call->model('Auth_model','auth_model');

    //             if ($this->auth_model->register($email, $password, $token, $user_type)) {

	// 				//verify_email($email, $token, 'user', $email);
    //                 set_flash_alert('success', 'You were successfully registered! Please check your email for verification.');

    //                 redirect('auth/verify/');
    //             }

    //         } else {
    //             set_flash_alert('danger', $this->form_validation->errors());
    //         }
    //     }

	// 	$this->call->view('landing/register_view');
	// }

    public function verify() 
	{
        if (is_logged_in())
            user_type();

    }

    public function recover() 
	{
        if (is_logged_in())
            user_type();

            
    }
}
?>