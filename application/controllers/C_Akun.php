<?php

	class C_Akun extends CI_Controller{
			public function __construct(){
				parent:: __construct();
				$this->load->model('M_Login');
				$this->load->model('Staff_M');
			}
			
			public function index(){
				$data = array(
					'title' => 'Login To hotelu',
					'filename' => 'Login'
				);
				$this->load->view('navsementara');
				$this->load->view('Login',$data);
				$this->load->view('footer');
			}
			
			public function check(){
				$data = $this->input->post(null,TRUE);
				$login = $this->M_Login->check($data);
				$admin = $this->Staff_M->isAdmin($data);
				
				if($admin){
					$data = array(
						'email' => $login['email'],
						'username' => $login['username']
					);
					$this->session->set_flashdata('admin', 'bener');
					$this->session->set_userdata($data);
					redirect('MDashboard_C');
				}else if ($login){	
					$data = array(
						'email' => $login->email,
						'username' => $login->username
					);
					$this->session->set_userdata($data);
					redirect('C_Profile/index');
				}else{
					$this->session->set_flashdata('message','Error Login');
					redirect('C_Akun/index');
				}
			}
			
			public function logout(){
				$this->session->sess_destroy();
				redirect('C_Akun/index');
			}
			
	}	

?>