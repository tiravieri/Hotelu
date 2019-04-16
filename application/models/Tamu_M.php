<?php
	class Tamu_M extends CI_Model{
		const TABLE = 'tamu';
		
		public function getData()
		{
			$query = $this->db->get(self::TABLE);
			return $query->result();
        }
        
        public function delData($id)
		{
			$this->db->where('id', $id);
			$this->db->delete(self::TABLE);
		}
    }
?>