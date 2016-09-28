<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOrders extends CI_Controller {

	public function index() {
		$this->load->view('adminOrdersView');
	}

	public function showOrder($orderID) {
		$this->load->view('adminShowOrderView');
	}










}