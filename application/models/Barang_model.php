<?php 


class Barang_model extends CI_Model{

    // process query data barang
    public function getData() {
        $data = $this->db->get('tbl_barang')->result();
        return $data;
    }
    
}


?>