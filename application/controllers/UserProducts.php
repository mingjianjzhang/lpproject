<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserProducts extends CI_Controller {

	public function index() {
		$this->load->view('store');
	}

	public function viewProduct() {
		$this->load->view('showProduct');
	}










}

