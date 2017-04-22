<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Abs extends CI_Controller {

	public function index(){

		$data['abs'] = $this->M_Abstract->all();

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/abstract/index', $data);
		$this->load->view('admin/template/footer');
	}


	public function create()
	{
		$this->load->view('admin/template/header');

		$this->load->view('admin/template/sidebar');

		$this->load->view('admin/abstract/create');

		$this->load->view('admin/template/footer');
	}


	public function store()
	{
		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() == true){

			$data = [ 
				'description' => $this->input->post('description')
			];

			$this->M_Abstract->create($data);
			$this->session->set_flashdata('message', 'Your data has been successfully submited');

			$this->create();
		}

		$this->create();
	}


	public function edit()
	{
		$id = $this->input->get('id');
		$data['edit'] = $this->M_Abstract->show($id);
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/abstract/edit', $data);
		$this->load->view('admin/template/footer');
	}


	public function update()
	{

		$id = $this->input->get('id');

		$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() == true){

			$data = [

				'description' => $this->input->post('description')
			];

			$this->M_Abstract->update($id, $data);

			$this->session->set_flashdata('message', 'Your data has been updated');

			$this->edit();
		}

		$this->edit();
	}
}