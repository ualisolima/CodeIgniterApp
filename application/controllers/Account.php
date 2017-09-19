<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function login(){
		$alert = null;
		if ($this->input->post('login') === 'login') {
			if ($this->input->post('captcha'))
				redirect('Account/login');

			$this->form_validation->set_rules('email', 'EMAIL', 'required|valid_email');
			$this->form_validation->set_rules('password', 'PASSWORD', 'required|min_length[6]|max_length[20]');
		}
		if($this->form_validation->run()){

			$this->load->model('UsersModel');

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$exists = $this->UsersModel->checkLogin($email, $password);

			if ($exists) {
				$user = $exists;
				$session = array(
        			'email'  => $user["email"],
        			'reg_date' => $user["reg_date"],
        			'logged_in' => TRUE
				);

				$this->session->set_userdata($session);
				redirect('welcome');
			}

			else {
				$alert = array(
					"class" => "danger",
					"message" => "email or password incorrect"
				);
			}

		}else {
			$alert = array(
				"class" => "danger",
				"message" => "The form validation failed"
			);
		}

		$data = array(
			"alert" => $alert
		);

		$this->load->view('account/login', $data);

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
