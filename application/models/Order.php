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
}