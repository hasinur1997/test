<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $user_data;

	public function index()
	{
		if($this->auth_check()){

			$this->load->view('admin/index');

		}else{

			$this->login();
		}

		
	
		
		
	}


	public function login()
	{
		$this->load->view('admin/login');
	}

	public function loggedIn()
	{

		$this->form_validation->set_rules('user_name', 'Username', 'required');

		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() == false){

			$this->load->view('admin/login');

		}else{

			$user_name = $this->input->post('user_name');

			$password = $this->input->post('password');



			if($this->M_Admin->get_user($user_name, $password)){

				$data = $this->M_Admin->user_data($user_name, $password);

				$this->user_data = $data->id;

				$this->session->set_userdata('user', $this->user_data);

				$this->session->set_userdata('is_loggin', true);

				redirect('admin/index');


			}else{

				$this->session->set_flashdata('message', 'Your user name and password doesn\'t');

				$this->login();
			}
		}

		
	}

	public function auth_check()
	{
		if($this->session->has_userdata('user')){
			
			return true;
		}
	}


	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect('admin/login');
	}
	
	
}
