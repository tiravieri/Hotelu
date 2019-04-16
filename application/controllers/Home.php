<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {

	public function __construct(){

            parent::__construct();            

            $this->load->helper('url');

            $this->load->model('Home_model');

        }



        public function index()

        {  		

                $data = array(

                        'title' => 'Data kamar',

                        'kamar' => $this->Home_model->get_data()

                        ); 

                             

                $this->load->view('home/home', $data);

        }

}