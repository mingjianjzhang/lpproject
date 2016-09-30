<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model {
	public function processOrder($post)
	{
		//shipping address
		$sql = "INSERT INTO addresses  (street, city, state, zip) VALUES (?, ?, ?, ?)";
		$values = array($post['shipStreet'], $post['shipCity'], $post['shipState'], $post['shipZip']);
		$this->db->query($sql, $values);
		$addressId = $this->db->insert_id();
		//billing address
		if ($post['isSame']=='same') {
			$billingAddressId = $this->db->insert_id();
		} else {
			$sql = "INSERT INTO addresses (street, city, state, zip) VALUES (?, ?, ?, ?)";
			$values = array($post['billStreet'], $post['billCity'], $post['billState'], $post['billZip']);
			$this->db->query($sql, $values);
			$billingAddressId = $this->db->insert_id();
			// $sql = "INSERT INTO users (first_name, last_name) VALUES (?, ?)";
			// $values = array($post['billFirstName'], $post['billLastName']);
			// $this->db->query($sql, $values);
		}
		//billing info;
		$sql = "INSERT INTO billing (card, security_code, billing_address_id, expiration) VALUES (?, ?, ?, ?)";
		$expDate = $post['expiry-year']."-".$post['expiry-month']."-"."01";
		$values = array($post['card'], $post['securityCode'], $billingAddressId, $expDate);
		$this->db->query($sql, $values);
		$billingID = $this->db->insert_id();
		//create user:
		$sql = "INSERT INTO users (first_name, last_name, shipping_address_id, billing_id, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = array($post['shipFirstName'], $post['shipLastName'], $addressId, $billingID);
		$this->db->query($sql, $values);
		$userID = $this->db->insert_id();
		// create order
		$sql = "INSERT INTO orders (user_id, status, created_at, updated_at) VALUES (?, 1, NOW(), NOW())";
		$values = array($userID);
		$this->db->query($sql, $values);
		$orderID = $this->db->insert_id();
		for ($i = 0; $i < $post['numProducts']; $i++) {
			$sql = "INSERT INTO orders_products (order_id, product_id, quantity) VALUES (?, ?, ?)";
			$values = array($orderID, $post["product_id$i"], $post["quantity$i"]);
			$this->db->query($sql, $values);
		}

	}
	public function getAllOrders()
	{
		return $this->db->query("SELECT orders.id, users.first_name, users.last_name, DATE_FORMAT(orders.created_at, '%m-%d-%Y') as date, CONCAT(street, ', ', city, ', ', state, ' ', zip) as billing_address, SUM(products.price * orders_products.quantity) as total, orders.status FROM orders JOIN users ON orders.user_id=users.id JOIN billing ON users.billing_id=billing.id JOIN addresses ON billing_address_id=addresses.id JOIN orders_products ON orders_products.order_id = orders.id JOIN products ON products.id=orders_products.product_id GROUP BY orders.id")->result_array();
	}

	public function getOrder($orderID) {
		return $this->db->query("SELECT orders.id, billing.card, billing.expiration, users.first_name, users.last_name, DATE_FORMAT(orders.created_at, '%m-%d-%Y') as date, CONCAT(billadd.street, ', ', billadd.city, ', ', billadd.state, ' ', billadd.zip) as billing_address, CONCAT(shipadd.street, ', ', shipadd.city, ', ', shipadd.state, ' ', shipadd.zip) as shipping_address, SUM(products.price * orders_products.quantity) as total, orders.status FROM orders JOIN users ON orders.user_id=users.id JOIN billing ON users.billing_id=billing.id JOIN addresses as billadd ON billing_address_id=billadd.id JOIN addresses as shipadd ON shipadd.id=users.shipping_address_id JOIN orders_products ON orders_products.order_id = orders.id JOIN products ON products.id=orders_products.product_id WHERE orders.id = {$orderID}")->row_array();
	}

	public function getOrderItems($orderID) {
		return $this->db->query("SELECT * FROM orders_products
			JOIN products ON orders_products.product_id = products.id
				WHERE order_id = {$orderID}")->result_array();
	}

	public function getAllOrdersLimited()
	{
		return $this->db->query("SELECT orders.id, users.first_name, users.last_name, DATE_FORMAT(orders.created_at, '%m-%d-%Y') as date, CONCAT(street, ', ', city, ', ', state, ' ', zip) as billing_address, SUM(products.price * orders_products.quantity) as total, orders.status FROM orders JOIN users ON orders.user_id=users.id JOIN billing ON users.billing_id=billing.id JOIN addresses ON billing_address_id=addresses.id JOIN orders_products ON orders_products.order_id = orders.id JOIN products ON products.id=orders_products.product_id GROUP BY orders.id ORDER BY orders.id DESC LIMIT 3 ")->result_array();
	}
	public function topProducts() {
		$query ="SELECT * FROM products
			JOIN orders_products ON products.id = orders_products.product_id
			GROUP BY products.id
			order by quantity DESC
			limit 4";
		return $this->db->query($query)->result_array();
	}


	public function updateStatus($statusID, $orderID) {
		$query = "UPDATE orders SET status = $statusID WHERE id=$orderID";
		$this->db->query($query);
	}

	public function deleteOrder($orderID) {
		$query = "DELETE FROM orders WHERE id=$orderID";
		$this->db->query($query);
		$query = "DELETE FROM orders_products WHERE orders_products.order_id = $orderID";
		$this->db->query($query);


	}
}