<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminOrders extends CI_Controller {

	public function index() {
		$this->load->model('Order');
		$data = array('orders' => $this->Order->getAllOrders());
		$this->load->view('adminOrdersView', $data);
	}



	public function showOrder($orderID) {
		$this->load->model('Order');
		$info = $this->Order->getOrder($orderID);
		$item = $this->Order->getOrderItems($orderID);
		$data = array('items' => $item, 'info' => $info);
		$this->load->view('adminShowOrderView', $data);
	}

	public function test() {
		$this->load->view('upload');
	}

	public function deleteOrder() {
		$this->load->model('Order');
		$this->Order->deleteOrder($this->input->post('id'));
		redirect("/AdminOrders");
	}

}