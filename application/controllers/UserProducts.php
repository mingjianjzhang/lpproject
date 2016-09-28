<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProducts extends CI_Controller {

	public function index() {
		$this->load->model('Product');
		$data = array('categories' => $this->Product->getCategories());
		$this->load->view('store', $data);
	}

	public function viewProduct() {
		$this->load->view('showProduct');
	}










}

