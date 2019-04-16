<?php
	class M_Profile extends CI_Model{
		public function getCustomer(){
			$data = $this->session->userdata('username');
			$this->db->where('username',$data);
			$query = $this->db->get('tamu');
			return $query->result();
		}
		
		public function get_data()
		{
			$data = $this->session->userdata('email');
			$this->db->where('email',$data);
			$query = $this->db->get('tamu');
			return $query->result();
		}
		
		function updateCustomer($data){  
  		$tabel = 'tamu'; 
		  $lolo = array (
				"email"=>$data['email'],
				"username"=>$data['username'],
				"nama"=>$data['nama'],
				"umur"=>$data['umur'],
				"jeniskelamin"=>$data['jk'],
				"password"=>$data['password'],
			);  
			$this->db->where('email', $data['email']);
			$update = $this->db->update($tabel,$lolo); 
			if ($update){
				return TRUE;
			}else{
				return FALSE;
			}
		}
		
		public function deleteCustomer($id)
		{
			$this->db->where('email',$id);
			$this->db->delete('tamu');
		}
		
		public function upload($data){
		  $this->db->set('foto',$data);
		  $this->db->where('email',$this->session->userdata('email'));
		  $this->db->update('tamu');
		  return true;
	  }
	}
?>