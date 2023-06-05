<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Auth_model extends Model
{

	public function login($email, $password)
	{				
    	$row = $this->db->table('user')
						->select('user.id as user_id, user.email, user.user_type, user.password')					
    					->where('email =? and status =?', [$email, 1])
    					->get();
		if($row)
		{
			if(password_verify($password, $row['password'])) {
				return $row;
			} else {
				return false;
			}
		}
	}

	public function is_user_verified($email) {
		$this->db->table('user')
				->select('user.status')
				->where('email', $email)
				->where('status', 1)
				->get();
		return $this->db->row_count();
	}
	
	public function passwordhash($password)
	{
		$options = array(
			'cost' => 4,
		);
		return password_hash($password, PASSWORD_BCRYPT, $options);
	}

	public function register($email, $password, $token, $user_type)
	{
		$data = array(
			'email' => $email,
			'password' => $this->passwordhash($password),
			'token' => $token,
			'user_type' => $user_type
		);
		return $this->db->table('user')->insert($data);
	}
}
