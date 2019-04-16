<?php

	class C_Kamar extends CI_Controller{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('M_Kamar');
		}
		
		public function index(){
			$data['kamar'] = $this->M_Kamar->getKamar();
			$user = $this->session->userdata('email');
			
			if($user){
				$this->load->view('navlogout');
				$this->load->view('HotelKamar',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('navsementara');
				$this->load->view('HotelKamar',$data);
				$this->load->view('footer');
			}
		}
		
		public function halKamar($id){
			$dpthasil = $this->M_Kamar->getInfoKamar($id);
			$data['kamar'] = $dpthasil;
			$data['fasilitas'] = $this->M_Kamar->getInfoFasilitas($id);
			$data['kamarfoto'] = $this->M_Kamar->getInfoFoto($id);
			$user = $this->session->userdata('email');
			
			if($user){
				$this->load->view('navlogout');
				$this->load->view('detailKamar',$data);
				$this->load->view('footer');
			} else{
				$this->load->view('navsementara');
				$this->load->view('detailKamar',$data);
				$this->load->view('footer');
			}
		}
}