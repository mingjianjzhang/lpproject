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
		$sql = "INSERT INTO orders (user_id, status, created_at, updated_at) VALUES (?, 0, NOW(), NOW())";
		$values = array($userID);
		$this->db->query($sql, $values);
		$orderID = $this->db->insert_id();
		for ($i = 0; $i < $post['numProducts']; $i++) {
			$sql = "INSERT INTO orders_products (order_id, product_id, quantity) VALUES (?, ?, ?)";
			$values = array($orderID, $post["product_id$i"], $post["quantity$i"]);
			$this->db->query($sql, $values);
		}

	}
}