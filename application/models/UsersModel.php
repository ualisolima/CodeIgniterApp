<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UsersModel extends CI_Model {

	public function checkLogin($email, $password) {
		$this->db->from('users');
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$users = $this->db->get();

		if ($users->num_rows()) {
			$user = $users->result_array();
			return $user[0];
		}
		else {
			return FALSE;
		}
	}	
}
