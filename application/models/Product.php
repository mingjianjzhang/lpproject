<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
	public function getAll() 
	{
		return $this->db->query("SELECT products.id, images.src AS img FROM products LEFT JOIN images ON products.id=images.product_id")->result_array();
	}
	public function getItemDetails($id)
	{
		$sql="SELECT products.id as id, name, price, images.src AS img, description, inventory FROM products JOIN images ON products.id=images.product_id WHERE products.id = $id";
		return $this->db->query($sql)->row_array();
	}
	public function getSimilarItems($id) 
	{
		$cat = $this->db->query("SELECT category_id FROM Products WHERE id = $id")->row_array();
		return $this->db->query("SELECT products.id id, name, price, images.src AS img FROM products JOIN images ON products.id=images.product_id WHERE category_id = {$cat['category_id']} AND products.id != $id")->result_array();
	}
	public function addImage($imageInfo) {
		$query = "INSERT INTO images (product_id, src, is_main, created_at, updated_at) VALUES(?, ?, 1, now(), now())";
		$values = array($imageInfo['productID'], $imageInfo['src']);
		return $this->db->query($query, $values);
	}
	public function addProduct($productInfo) {
		$query = "INSERT INTO products (name, price, inventory, description, category_id) VALUES (?, ?, ?, ?, ?)";
		$values = array($productInfo['name'], intval($productInfo['price']), intval($productInfo['inventory']), $productInfo['description'], intval($productInfo['category']));
		return $this->db->query($query, $values);
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