<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {


	public function index()
	{

		if(!$this->session->has_userdata('user')){

			redirect('admin/login');

		}else{

			$data['sliders'] = $this->M_Slider->get();

			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/slider/index', $data);
			$this->load->view('admin/template/footer');
		}
		
	}

	public function create()
	{
		if($this->session->has_userdata('user')){

			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/slider/create');
			$this->load->view('admin/template/footer');
			
		}else{

			redirect('admin/login');
		}
		
	}


	public function store()
	{
		if($this->session->has_userdata('user')){

			$config['upload_path'] = './uploads/';

			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			

			$this->form_validation->set_rules('title', 'Title', 'required');

			$this->form_validation->set_rules('description', 'Description', 'required');

			//$this->form_validation->set_rules('image', 'Image', 'required');

			if($this->form_validation->run() == true){

				$this->upload->do_upload('image');

				$file = $this->upload->data();

				$data = [ 

					'title' => $this->input->post('title'),

					'description' => $this->input->post('description'),

					'image' => $file['file_name']
				];

				$this->M_Slider->create($data);

				//$this->upload->do_upload('image');

				$this->session->set_flashdata('message', 'Your data has been inserted');

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

			$data['edit'] = $this->M_Slider->first($id);

			$this->load->view('admin/template/header');
			$this->load->view('admin/template/sidebar');
			$this->load->view('admin/slider/edit', $data);
			$this->load->view('admin/template/footer');

		}else{

			redirect('admin/login');
		}
		
	}

	public function update()
	{
		if($this->session->has_userdata('user')){

			$id = $this->input->get('id');

			$this->form_validation->set_rules('title', 'Title', 'required');

			$this->form_validation->set_rules('description', 'Description', 'required');

		if($this->form_validation->run() == true){

			// data

			$data = [ 

				'title' => $this->input->post('title'),

				'description' => $this->input->post('description'),
			];



			// check image file

			if(!empty($_FILES['image']['name'])){
				
				
				$config['upload_path'] = './uploads/';

				$config['allowed_types'] = 'gif|jpg|png';

				$this->load->library('upload', $config);

				$this->upload->do_upload('image');

				$file = $this->upload->data();

				$data['image'] = $file['file_name'];	

			}

			$this->M_Slider->update($id, $data);

			

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

			$data = $this->M_Slider->first($id);


			if($this->M_Slider->delete($id)){

				
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