<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKamar_C extends CI_Controller {

	public function index()
	{
		$this->load->model('Kamar_M');
		$data['data'] = $this->Kamar_M->getData();
		$this->load->view('admin/kamar_V', $data);
	}

	public function delete($id)
	{	
		$this->load->model('Kamar_M');
		$this->Kamar_M->delData($id);
		redirect('MKamar_C');
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->load->model("Kamar_M");
		$this->Kamar_M->upData($data, $id);
		redirect('MKamar_C');
	}

	public function inputKamar(){
		$data = $this->input->post();
		$config['upload_path'] = base_url().'/assets/image';
		$this->load->library('upload', $config);

		$this->rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->load->model('Kamar_M');
			$data = $this->Kamar_M->getData();
			$this->load->view('admin/kamar_V', array('error' => '', 'data' => $data));
		}else
		{
			$this->load->model('Kamar_M');
			$this->Kamar_M->inputKamar($data);
			$this->upload->do_upload('image');
			redirect('MKamar_C');
		}
	}

	public function rules()
	{
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		$this->form_validation->set_message('required', '{field} tidak boleh kosong');
		$this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari 1 karakter');

		
		$this->form_validation->set_rules('tipe', 'Tipe', 'required');
		$this->form_validation->set_rules('status', 'Status Pemesanan', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required');
	}
}