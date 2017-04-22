<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/slider/index');
		$this->load->view('admin/template/footer');
	}

	public function create()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/slider/create');
		$this->load->view('admin/template/footer');
	}


	public function store()
	{
		$this->form_validation->set_rules('title', 'Title', 'required');

		$this->form_validation->set_rules('description', 'Description', 'required');

		$this->form_validation->set_rules('image', 'Image', 'required');

		if($this->form_validation->run() == true){

			$data = [ 

				'title' => $this->input->post('title'),

				'description' => $this->input->post('description'),

				'image' => $this->input->post('image'),
			];


			$this->create();
		}

		$this->create();
	}

	public function edit()
	{

	}

	public function update()
	{

	}

	public function destroy()
	{

	}

}