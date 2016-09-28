<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
	public function getItemDetails() {
		$sql="SELECT name, price, img, description FROM products WHERE";

	public function getItemDetails($id) {
		$sql="SELECT name, price, img, description FROM products WHERE id = $id";
		return $this->db->query($sql);
	}
	public function getSimilarItems() {
		// get pic name and price for items in the same category
	}





}