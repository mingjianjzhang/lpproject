<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProducts extends CI_Controller {

	public function index() {
		$this->load->model('Product');
		// var_dump($this->Product->getCategories());
		$data = array('categories' => $this->Product->getCategories(), 'products' => $this->Product->getAll());
		$this->load->view('store', $data);
	}

	public function viewProduct($id) {
		$this->load->model('Product');
		$data = array('info' => $this->Product->getItemDetails($id), 'similar' => $this->Product->getSimilarItems($id));
		$this->load->view('showProduct', $data);
	}

	public function displayProductsByCategory($id) {
		$this->load->model('Product');
		$data = array('categories' => $this->Product->getCategories(), 'products' => $this->Product->getProductsByCategory($id));
		$this->load->view('store', $data);
	}

	public function updateDisplayByCategory($id) {
		$this->load->model('Product');
		if ($id) {
			$this->load->view('partials/searchProductsView', array("products" => $this->Product->getProductsByCategoryA($id)));
		} else {
			$this->load->view('partials/searchProductsView', array("products" => $this->Product->getAll()));
		}
	}

	public function paginate($id, $limit) {
		$this->load->model('Product');
		$this->load->view('partials/searchProductsview', $this->Product->paginateCategories($id, $limit));
	}
}

