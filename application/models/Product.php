<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
	public function getAll() 
	{
		return $this->db->query("SELECT products.id, images.src AS img FROM products JOIN images ON products.id=images.product_id")->result_array();
	}
	public function getItemDetails($id)
	{
		$sql="SELECT name, price, images.src AS img, description, inventory FROM products JOIN images ON products.id=images.product_id WHERE products.id = $id";
		return $this->db->query($sql)->row_array();
	}
	public function getSimilarItems($id) 
	{
		
	}

	public function addProduct($productInfo) {
		$query = "INSERT INTO products (name, price, img, inventory, description, category_id) VALUES (?, ?, ?, ?, ?, ?)";
		$values = array($productInfo['name'], $productInfo['price'], $productInfo['img'], $productInfo['inventory'], $productInfo['description'], $productInfo['category_id']);
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