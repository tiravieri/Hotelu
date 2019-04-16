<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTamu_C extends CI_Controller {

	public function index()
	{
		$this->load->model('Tamu_M');
		$data['data'] = $this->Tamu_M->getData();
		$this->load->view('admin/tamu_V', $data);
    }
    
    public function delete($id)
	{	
		$this->load->model('Tamu_M');
		$this->Tamu_M->delData($id);
		redirect('MTamu_C');
	}
}