<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convention extends CI_Controller {

	public function index()
	{
		if($this->session->has_userdata('user')){

			$data['rules'] = $this->M_Convention->get();

			$this->load->view('admin/template/header');

			$this->load->view('admin/template/sidebar');

			$this->load->view('admin/convention/index', $data);

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

			$this->load->view('admin/convention/create');

			$this->load->view('admin/template/footer');

		}else{

			redirect('admin/login');
		}
	}

	public function store()
	{
		if($this->session->has_userdata('user')){

			$this->form_validation->set_rules('name', 'Rules', 'required');

			if($this->form_validation->run() == true){

				$data = [ 
					'name' => $this->input->post('name')
				];

				$this->M_Convention->create($data);

				$this->session->set_flashdata('message', 'Your data has been successfully inserted');

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

			$data['edit'] = $this->M_Convention->show($id);

			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/convention/edit', $data);
			$this->load->view('admin/template/footer');

		}else{

			redirect('admin/login');
		}
	}




	public function update()
	{
		if($this->session->has_userdata('user')){
			$id = $this->input->get('id');

			$this->form_validation->set_rules('name', 'Rule', 'required');

			if($this->form_validation->run() == true){

				$data = [

					'name' => $this->input->post('name')

				];

				$this->M_Convention->update($id, $data);

				$this->session->set_flashdata('message', 'Your data has been updated successfully');

				$this->index();

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

			

			if($this->M_Convention->delete($id)){

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
