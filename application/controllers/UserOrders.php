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
		$this->load->model('Product');
		$inventory = $this->Product->getInventory($this->session->cart); // to bring over product inventory numbers to cart page
		$this->load->view('cart');
	}

	public function update($rowid) // for cart update functionality
	{
		$data=$this->cart->update(array(
			'rowid'=>$rowid,
			'qty'=> $this->input->post('quantity')));
		$this->cart->update($data);  
		redirect('cart/shipping');
	}

	public function cartKill() {
		$this->load->model('Order');
		$post = $this->input->post();
		// var_dump($post);
		// die();
		$this->Order->processOrder($post);
		$this->session->sess_destroy();
		redirect('UserOrders/shoppingCart');
	}

	public function updateOrder() {
		$this->load->model('Order');

		$this->Order->updateStatus($this->input->post('status'), $this->input->post('orderID'));

	}
	

}





