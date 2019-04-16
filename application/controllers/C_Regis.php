<?php

	class C_Regis extends CI_Controller {
		public function __construct(){
			parent:: __construct();
			$this->load->model('M_Regis');
		}
		
		public function index(){
			$this->load->view('navsementara');
			$this->load->view('Register');
			$this->load->view('footer');
		}
		
		public function register(){
			$user = $this->input->post('username');
			$email = $this->input->post('email');
			$pass = $this->input->post('password');
			$nama = $this->input->post('nama');
			$jk = $this->input->post('jk');
			$umur = $this->input->post('umur');
			
			$data = array(
				"username"=>$user,
				"email"=>$email,
				"password"=>$pass,
				"nama"=>$nama,
				"jeniskelamin"=>$jk,
				"umur"=>$umur
			);
			
			$this->M_Regis->insert($data,'tamu');
			redirect('C_Akun/index');
		}
	}

?>