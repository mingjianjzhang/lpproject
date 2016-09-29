<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProducts extends CI_Controller {

	public function index() {
		$this->load->model('Product');
		$data = array('categories' => $this->Product->getCategories(), 'products' => $this->Product->getAll());
		$this->load->view('store', $data);
	}

	public function viewProduct($id) {
		$this->load->model('Product');
		$data = array('info' => $this->Product->getItemDetails($id), 'similar' => $this->Product->getSimilarItems($id));
		$this->load->view('showProduct', $data);
	}

	public function displayProductsByCategory($id) {

	}
}

