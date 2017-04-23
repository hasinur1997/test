<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['rules'] =  $this->M_Convention->get();


		$data['abs'] = $this->M_Abstract->get();


		$data['sliders'] = $this->M_Slider->get();

		$this->load->view('home/index', $data);
	}
	
	public function test()
	{
		$this->load->view('welcome');
	}
}
