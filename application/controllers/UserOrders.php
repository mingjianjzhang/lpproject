<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserOrders extends CI_Controller {

	public function index() {
		$this->load->view('cart');
	}

	public function purchase() {
		$post = $this->input->post();
		$post['total'] = $post['price']*$post['quantity'];
		
		if(isset($_SESSION['cart'])) {
			$tempCart = $this->session->cart;
			$same = false;
			for($i=0; $i<count($tempCart); $i++) {
				if($post['name'] == $tempCart[$i]['name']) {
					$tempCart[$i]['quantity']+=$post['quantity'];
					$same = true;
				}
			}
			if(!$same){
				$tempCart[] = $post;
			}
			$this->session->set_userdata('cart', $tempCart);
		}
		else {
			$cart = array($post);
			$this->session->set_userdata('cart', $cart);
		}
		redirect('product/'.intval($post['id']));
	}

	public function shoppingCart() {
		$this->load->view('cart');
	}

	public function cartKill() {
		$this->session->sess_destroy();
		redirect('UserOrders/shoppingCart');
	}
	public function pay() {
		$this->load->model('Order');
		$post = $this->input->post();
		$this->Order->processOrder($post);

	}

}





