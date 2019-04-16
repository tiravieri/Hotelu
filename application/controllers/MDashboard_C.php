<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MDashboard_C extends CI_Controller {
	public function index()
	{
		$user = $this->session->userdata('email');
		$this->load->model('Staff_M');
		$data = array(
				'title' => 'Data member',
				'staff' => $this->Staff_M->dapat()
			);
		$this->load->view('admin/dashboard', $data);
		
	}
}
