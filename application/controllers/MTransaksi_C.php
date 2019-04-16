<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTransaksi_C extends CI_Controller {

	public function index()
	{
		$this->load->model('Transaksi_M');
		$data['data'] = $this->Transaksi_M->getData();
		$this->load->view('admin/transaksi_V', $data);
    }
}
