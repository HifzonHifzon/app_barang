<?php 


class Barang_model extends CI_Models{

    public function getData() {
        $data = $this->db->get('tbl_barang')->result();
        return $data;
    }
    
}


?>