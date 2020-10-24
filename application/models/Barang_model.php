<?php 


class Barang_model extends CI_Model{

    public function getData() {
        $data = $this->db->get('tbl_barang')->result();
        return $data;
    }
    
}


?>