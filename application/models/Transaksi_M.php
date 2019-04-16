<?php
	class Transaksi_M extends CI_Model{
        const TABLE = 'transaksi';
        const TABLE1 = 'tamu';
        const TABLE2 = 'kamar';
		
		public function getData()
		{
            $this->db->select('transaksi.id, tamu.nama AS user, kamar.tipe AS kamar, 
                              durasi, totalbayar, jenis, transaksi.status, tanggal')
                     ->from(self::TABLE1)
                     ->join(self::TABLE, 'tamu.username = transaksi.username')
                     ->join(self::TABLE2, 'transaksi.id_kamar = kamar.id_kamar');

            $query = $this->db->get();
			return $query->result();
        }

        public function input($data)
        {
            $dt = $data['transaksi'];
            $data = array(
                'id' => $dt['id'],
                'username' => $dt['username'],
                'id_kamar' => $dt['id_kamar'],
                'durasi' => $dt['durasi'],
                'totalbayar' => $dt['totalbayar'],
                'jenis' => $dt['jenis'],
                'status' => $dt['status'],
                'tanggal' => $dt['tanggal']
            );

            $this->db->insert(self::TABLE, $data);
        }
    }
?>