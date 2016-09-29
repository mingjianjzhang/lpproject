<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminProducts extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Product');
	}

	public function index() {
		$data = array("products" => $this->Product->getAll(), "categories" => $this->Product->getCategories());
		$this->load->view('adminProductsView', $data);
	}

	public function addProduct() {

		$config['upload_path']          = './assets/img/products/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;       
		$this->load->library('upload', $config);
		$this->upload->do_upload('userfile');
		$productInfo = $this->input->post();
		$productInfo['img'] = $this->upload->data('file_name');

		var_dump($this->Product->addProduct($productInfo));

		$productID=$this->db->insert_id();
        $imageInfo = array("productID" => $productID, "src" => $this->upload->data('file_name'), "is_main" => 1);
        $this->Product->addImage($imageInfo);

	}


	public function displayAddEdit() {
		if ($this->input->post('id') == 0) {
			$this->load->view("partials/addEditProductModal", array("product" => "add", "categories" => $this->Product->getCategories()));
		} else {
			$this->load->view("partials/addEditProductModal", array("product" => $this->Product->getItemDetails($this->input->post('id')),"categories" => $this->Product->getCategories()));
		}
		
	}

	public function uploadImage() {

		$config['upload_path']          = './assets/img/products/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;       
		$this->load->library('upload', $config);
		$this->upload->do_upload('userfile');
		echo $this->upload->data('file_name');

	}







}
