<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStaff_C extends CI_Controller {

	public function index()
	{
		$this->load->model('Staff_M');
		$data['data'] = $this->Staff_M->getData();
		$this->load->view('admin/staff_V', $data);
	}

	public function hapus($id)
	{	
		$this->load->model('Staff_M');
		$this->Staff_M->delData($id);
		redirect('MStaff_C');
	}
	
	public function hapustamu($id)
	{	
		$this->load->model('Staff_M');
		$this->Staff_M->deletetamu($id);
		redirect('MTamu_C');
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->load->model("Staff_M");
		$this->Staff_M->upData($data, $id);
		redirect('MStaff_C');
	}

	public function input(){
		$data = $this->input->post();
		$config['upload_path'] = base_url().'/assets/plugins/images/';
		$this->load->library('upload', $config);

		$this->rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->load->model('Staff_M');
			$data = $this->Staff_M->getData();
			$this->load->view('admin/staff_V', array('error' => '', 'data' => $data));
		}else
		{
			$this->load->model('Staff_M');
			$this->Staff_M->input($data);
			$this->upload->do_upload('image');
			redirect('MStaff_C');
		}
	}
	
	public function register(){
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$jabatan = $this->input->post('jabatan');
			$jk = $this->input->post('jk');
			$umur = $this->input->post('umur');
			
			$data = array(
				"nama"=>$nama,
				"email"=>$email,
				"password"=>$pass,
				"jabatan"=>$jabatan,
				"jeniskelamin"=>$jk,
				"umur"=>$umur
			);
			
			$this->load->model('Staff_M');
			$this->Staff_M->insert($data,'staff');
			redirect('MStaff_C');
	}
	
	public function ubah(){
					
			$config = array(
				'upload_path'     => "./assets/plugins/images/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => true,
				'max_size' => "2048000",
				'max_height' => "768",
				'max_width' => "1024"
				);
			
			$this->load->library('upload', $config);
			
			if (! $this->upload->do_upload('foto')) //jika gagal upload
			{
				$this->load->model('Staff_M');
				$data = $this->Staff_M->getData();
				$this->load->view('admin/staff_V', array('error' => '', 'data' => $data));
			} else
			//jika berhasil upload
			{
				
				$file = $this->upload->data();
				//mengambil data di form
				$data = $file['file_name'];
				$this->load->model('Staff_M');
				$this->Staff_M->uploadfoto($data); //memasukan data ke database
				redirect('MStaff_C'); //mengalihkan halaman
			}
		}

	public function rules()
	{
		$this->form_validation->set_error_delimiters('<div style="font-color:#dc3545">', '</div>');

		$this->form_validation->set_message('required', '{field} tidak boleh kosong');
		$this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari 6 karakter');

		$this->form_validation->set_rules('nama', 'Nama Pegawai', 'required|min_length[6]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('umur', 'Umur', 'required');
	}
}