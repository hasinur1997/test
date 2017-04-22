<?php
 
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->M_User->get();
		
		$this->load->view('user/index', $data);
	}
	
	public function store()
	{	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name', 'Name', 'required');
		
		$this->form_validation->set_rules('email', 'Email', 'required');
		
		$this->form_validation->set_rules('phone', 'Phone', 'required');
		
		if($this->form_validation->run() == false){
			
			$this->load->view('user/index');
			
		}else{
			
			$data = [
			
				'name' => $this->input->post('name'),
				
				'email' => $this->input->post('email'),
				
				'phone' => $this->input->post('phone')
			];
			
			$this->M_User->create($data);
			
			// set session flash message 
			
			$this->session->set_flashdata("message", "Your data has been inserted");
			
			
			// redirect 
			
			 redirect('user/index');
			
		}
	}
}

?>