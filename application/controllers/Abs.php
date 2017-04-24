<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abs extends CI_Controller {

	public function index(){
		if($this->session->has_userdata('user')){

			$data['abs'] = $this->M_Abstract->all();

			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/abstract/index', $data);
			$this->load->view('admin/template/footer');

		}else{

			redirect('admin/login');
		}
	}


	public function create()
	{
		if($this->session->has_userdata('user')){
			$this->load->view('admin/template/header');

			$this->load->view('admin/template/sidebar');

			$this->load->view('admin/abstract/create');

			$this->load->view('admin/template/footer');

		}else{

			redirect('admin/login');
		}
	}


	public function store()
	{
		if($this->session->has_userdata('user')){

			$this->form_validation->set_rules('description', 'Description', 'required');

			if($this->form_validation->run() == true){

				$data = [ 
					'description' => $this->input->post('description')
				];

				$this->M_Abstract->create($data);
				$this->session->set_flashdata('message', 'Your data has been successfully submited');

				$this->create();
				
			}else{

				$this->create();
			}

		}else{
			redirect('admin/login');
		}
	}


	public function edit()
	{
		if($this->session->has_userdata('user')){

			$id = $this->input->get('id');
			$data['edit'] = $this->M_Abstract->show($id);
			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/abstract/edit', $data);
			$this->load->view('admin/template/footer');

		}else{

			redirect('admin/login');
		}
	}


	public function update()
	{
		if($this->session->has_userdata('user')){

			$id = $this->input->get('id');

			$this->form_validation->set_rules('description', 'Description', 'required');

			if($this->form_validation->run() == true){

				$data = [

					'description' => $this->input->post('description')
				];

				$this->M_Abstract->update($id, $data);

				$this->session->set_flashdata('message', 'Your data has been updated');

				$this->edit();

			}else{

				$this->edit();
			}

		}else{

			redirect('admin/login');
		}
		
	}


	public function destroy()
	{
		if($this->session->has_userdata('user')){

			$id = $this->input->get('id');

			if($this->M_Abstract->delete($id)){

				$this->session->set_flashdata('message', 'Your data has been deleted');

				$this->index();

			}else{

				$this->index();
			}
		}else{

			redirect('admin/login');
		}
	}
}