<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOrders extends CI_Controller {

	public function index() {
		$this->load->model('Order');
		$data = array('orders' => $this->Order->getAllOrders());
		$this->load->view('adminOrdersView', $data);
	}

	public function showOrder($orderID) {
		$this->load->view('adminShowOrderView');
	}







}