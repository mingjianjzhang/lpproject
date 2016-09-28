<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProducts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Product');
	}

	public function index() {
		$data = $this->Product->getCategories();
		$this->load->view('adminProductsView', array("categories" => $data));
	}

	public function uploadImage() {

        $config['upload_path']          = './assets/img/products/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;       
        $this->load->library('upload', $config);
        $this->upload->do_upload('userfile');
        $productInfo = $this->input->post();
        $productInfo['img'] = $this->upload->data('file_name');
        $this->Product->addProduct($productInfo);


	}










}
