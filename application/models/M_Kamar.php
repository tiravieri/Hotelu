<?php

	Class M_Kamar extends CI_Model{
		
		function getKamar(){
			$query = $this->db->get('kamar');
			return $query->result_array();
		}
		
		public function getInfoKamar($id)
		{
			$this->db->where('id_kamar',$id);
			$query = $this->db->get('kamar');
			return $query->result_array();

		}
		
		public function getInfoFasilitas($id)
		{
			$this->db->where('id_kamar',$id);
			$query = $this->db->get('fasilitas');
			return $query->result_array();

		}
		
		public function getInfoFoto($id)
		{
			$this->db->where('id_kamar',$id);
			$query = $this->db->get('kamarfoto');
			return $query->result_array();

		}
	}

?>