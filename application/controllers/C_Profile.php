<?php

	class C_Profile extends CI_Controller {
		public function __construct(){
			parent::__construct();
			$this->load->model('M_Profile');
			$this->load->helper('url','form');
			
		}
		
		public function index(){
			$user = $this->session->userdata('email');
			$data = array(
				'title' => 'Data member',
				'mmbr' => $this->M_Profile->get_data()
			);
			
			$this->load->view('navlogout');
			$this->load->view('profil',$data);
			$this->load->view('footer');
		}
		
		public function updateCustomer() {
			$data = $this->input->post(null,TRUE);
			$edit = $this->M_Profile->updateCustomer($data);
			if($edit){
				$this->session->set_flashdata('alert', 'sukses_edit');
				redirect('C_Profile/index');
			}else{
				echo "<script>alert('Gagal Edit Data');</script>";

			}
		}
		
		public function delete(){
			$data = $this->input->post(null,TRUE);
			$this->M_Profile->deleteCustomer($data['email']);
			$this->session->sess_destroy();
			redirect('C_Akun/index');
		}
		
		public function ubahfoto(){
			$user = $this->session->userdata('email');
			$data = array(
				'title' => 'Data member',
				'mmbr' => $this->M_Profile->get_data()
			);
			$this->load->view('navlogout');
			$this->load->view('ubahfoto',$data);
			$this->load->view('footer');
		}
		
		public function ubah(){
					
			$config = array(
				'upload_path'     => "./image",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => true,
				'max_size' => "2048000",
				'max_height' => "768",
				'max_width' => "1024"
				);
			
			$this->load->library('upload', $config);
			
			if (! $this->upload->do_upload('foto')) //jika gagal upload
			{
				$data = array(
					'title' => 'Data member',
					'mmbr' => $this->M_Profile->get_data(),
					'error' => $this->upload->display_errors()
				);
				$this->load->view('navlogout');
				$this->load->view('ubahfoto', $data);
				$this->load->view('footer');
			} else
			//jika berhasil upload
			{
				
				$file = $this->upload->data();
				//mengambil data di form
				$data = $file['file_name'];
				$this->M_Profile->upload($data); //memasukan data ke database
				redirect('C_Profile/index'); //mengalihkan halaman
			}
		}
		
		public function tambah(){
		$config = [
			'upload_path' => '.assets/image',
			'allowed_types' => 'gif|jpg|png',
			'max_size' => 1000
		  ];
		  $this->load->library('upload', $config);
		  if (!$this->upload->do_upload('foto')) //jika gagal upload
		  {
			  $error = array('error' => $this->upload->display_errors()); //tampilkan error
			  $this->load->view('navlogout');
			  $this->load->view('ubahfoto', $data);
			  $this->load->view('footer');
		  } else
		  //jika berhasil upload
		  {
			  $file = $this->upload->data();
			  //mengambil data di form
			  $data = $file['file_name'];
			  $this->M_Profile->upload($data); //memasukan data ke database
			  redirect('C_Profile/index'); //mengalihkan halaman

		  }
  }
	}

?>