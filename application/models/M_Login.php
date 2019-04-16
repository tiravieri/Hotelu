<?php
	class M_Login extends CI_Model{
		
		public function check($data){
			$this->db->where('email', $data['email']);
			$this->db->where('password', $data['password']);
			
			$query = $this->db->get('tamu');
			
			if($query->num_rows()==1) {
				return $query->row(0);
			}else {
				return FALSE;
			}
			
			
		}
	}
?>