<?php
	class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('navlogout');
		$this->load->view('home/home');
		$this->load->view('footer');
	}
}
?>