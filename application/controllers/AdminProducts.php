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

		$productInfo = $this->input->post();
		var_dump($productInfo);
		$this->Product->addProduct($productInfo);
		$productID = $this->db->insert_id();
		$imageID = $this->input->post('image');
		var_dump($imageID);
        $this->Product->linkImage($imageID, $productID);
        $this->Product->deleteTempImages();

	}
	public function editProduct() {
		var_dump($this->input->post());
		$this->Product->editProduct($this->input->post());

	}
	public function viewAllProducts() {
		$data = array("products" => $this->Product->getAll(), "categories" => $this->Product->getCategories());
		$this->load->view('partials/allProductsAdmin', $data);
	}

	public function displayAddEdit() {
		if ($this->input->post('id') == 0) {
			$this->load->view("partials/addEditProductModal", array("product" => "add", "categories" => $this->Product->getCategories(), "tempImages" => $this->Product->getDummyProductImages()));
		} else {
			$this->load->view("partials/addEditProductModal", array("product" => $this->Product->getItemDetails($this->input->post('id')),"categories" => $this->Product->getCategories(), "tempImages" => array()));
		}
		
	}

	public function deleteImage($id, $refreshID) {
		$this->Product->deleteImage($id);
		$this->refresh($refreshID);

	}
	public function uploadImage() {
		$config['upload_path']          = './assets/img/products/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';      
		$this->load->library('upload', $config);
		$this->upload->do_upload('userfile');
		$imageInfo = array("productID" => $this->input->post('productID'), "src" => $this->upload->data('file_name'));
		$this->Product->addImage($imageInfo);
		echo "<h2 class='bg-success'>You have successfully uploaded an image!</h2>";
				
	}
	public function refresh($id) {
		if ($id == 9999) {
			$this->load->view("partials/uploadedImages", array("product" => "add", "tempImages" => $this->Product->getDummyProductImages()));
		} else {
			$this->load->view("partials/uploadedImages", array("product" => $this->Product->getItemDetails($id), "tempImages" => array()));
		}
	}
	public function deleteProduct($id) {
		$this->Product->deleteProduct($id);
		redirect('/AdminProducts');
	}







}
