<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	public function getItemDetails($id) {
		$sql="SELECT name, price, img, description FROM products WHERE id = $id";
		return $this->db->query($sql);
	}
	public function getSimilarItems() {
		// get pic name and price for items in the same category
	}

	public function getCategories() {
		$results = array();
		$results = $this->db->query("select id, name as category_name FROM categories WHERE parent_id IS null")->result_array();
		for ($i = 0; $i < count($results); $i++) {
			$results[$i]['children'] = $this->db->query("SELECT id, name FROM categories WHERE parent_id = {$results[$i]['id']}")->result_array();
		}
		return $results;
	}





}