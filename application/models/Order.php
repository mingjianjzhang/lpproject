<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {
	public function processOrder($post)
	{
		$sql = "INSERT INTO addresses  (street, city, state, zip) VALUES (?, ?, ?, ?)";
		$values = array($post['shipStreet'], $post['shipCity'], $post['shipState'], $post['shipZip']);
		$this->db->query($sql, $values);
		$addressId = $this->db->insert_id();
		$sql = "INSERT INTO users (first_name, last_name, shipping_address_id) VALUES (?, ?)";
		$values = array($post['shipFirstName'], $post['shipLastName'], $addressId);
		$this->db->query($sql, $values);
		if ($post['isSame']=='same') {
			$billingAddressId = $this->db->insert_id();
		} else {
			$sql = "INSERT INTO addresses (street, city, state, zip) VALUES (?, ?, ?, ?)";
			$values = array($post['billStreet'], $post['billCity'], $post['billState'], $post['billZip']);
			$this->db->query($sql, $values);
			$billingAddressId = $this->db->insert_id();
			$sql = "INSERT INTO users (first_name, last_name) VALUES (?, ?)";
			$values = array($post['shipFirstName'], $post['shipLastName']);
			$this->db->query($sql, $values);
		}
		$sql = "INSERT INTO billing (card, security_code, billing_address_id) VALUES (?, ?, ?)";
		$values = array($post['card'], $post['securityCode'], $billingAddressId);
		$this->db->query($sql, $values);
		// adjust inventory
	}
	public function getAllOrders()
	{
		return $this->db->query("SELECT orders.id, users.first_name, users.last_name, orders.created_at, street, city, state, zip FROM orders JOIN users ON orders.user_id=users.id JOIN billing ON users.billing_id=billing.id JOIN addresses ON billing_address_id=addresses.id JOIN orders_products ON orders_products.order_id = orders.id JOIN products ON products.id=orders_products.product_id")->result_array();
	}

}