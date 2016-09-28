<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProducts extends CI_Controller {

	public function index() {
		$this->load->model('Product');
		$data = array('categories' => $this->Product->getCategories());
		$this->load->view('store', $data);
	}

	public function viewProduct() {
		$this->load->model('Product');
		$data = array('info' => $this->Product->getItemDetails($id)); // need to set $id to product asked for
		$this->load->view('showProduct', $data);
	}










}

