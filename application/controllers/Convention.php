<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convention extends CI_Controller {

	public function index()
	{
		$data['rules'] = $this->M_Convention->get();

		$this->load->view('admin/template/header');

		$this->load->view('admin/template/sidebar');

		$this->load->view('admin/convention/index', $data);

		$this->load->view('admin/template/footer');


	}

	public function create()
	{
		$this->load->view('admin/template/header');

		$this->load->view('admin/template/sidebar');

		$this->load->view('admin/convention/create');

		$this->load->view('admin/template/footer');
	}

	public function store()
	{
		$this->form_validation->set_rules('name', 'Rules', 'required');

		if($this->form_validation->run() == true){

			$data = [ 
				'name' => $this->input->post('name')
			];

			$this->M_Convention->create($data);

			$this->session->set_flashdata('message', 'Your data has been successfully inserted');

		}

		$this->create();
	}




	public function edit()
	{
		$id = $this->input->get('id');

		$data['edit'] = $this->M_Convention->show($id);

		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/convention/edit', $data);
		$this->load->view('admin/template/footer');
	}




	public function update()
	{
		$id = $this->input->get('id');

		$this->form_validation->set_rules('name', 'Rule', 'required');

		if($this->form_validation->run() == true){

			$data = [

				'name' => $this->input->post('name')

			];

			$this->M_Convention->update($id, $data);

			$this->session->set_flashdata('message', 'Your data has been updated successfully');

			$this->index();
		}

		$this->edit();
	}

	public function destroy()
	{

	}
	
	
}
