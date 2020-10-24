<?php 

class Barang extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        // load model Barang_model 
        $this->load->model('Barang_model');
    }

    function index() {
        // get Data barang from model
        $data = $this->Barang_model->getData('tbl_barang');

        // passing data to view
        $this->load->view('list',["list" => $data]);
    }
}


?>