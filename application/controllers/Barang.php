<?php 

class Barang extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    function index() {
        $data = $this->Barang_model->getData('tbl_barang');
        $this->load->view('list',["list" => $data]);
    }
}


?>