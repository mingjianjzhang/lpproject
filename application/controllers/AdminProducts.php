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










}
