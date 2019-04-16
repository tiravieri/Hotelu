<?php 

defined('BASEPATH') or exit('No direct script access allowed');

/**

* 

*/

class Home_model extends CI_Model

{    

	public $table = 'kamar';

    public $order = 'DESC';

	public function get_data()

	{

		$this->db->select('*');

        $this->db->from('kamar');



        $query = $this->db->get();

        return $query;

	}   

}



?>