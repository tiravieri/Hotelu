<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_C extends CI_Controller {

	public function index($id)
	{
		$this->load->model('Kamar_M');
		$data['data'] = $this->Kamar_M->getKamarData($id);
		$this->load->view('navlogout');
		$this->load->view('transaksi', $data);
		$this->load->view('footer');
	}
	
	public function input()
	{
		$this->load->model('Transaksi_M');
		$data = $this->session->flashdata();
		$this->Transaksi_M->input($data);
		$this->session->set_userdata('query', 'success');
		redirect('C_Kamar');
	}
}