<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
	public function getAll() 
	{

		return $this->db->query("SELECT products.id, images.src AS img, products.name, inventory, SUM(quantity) as sold FROM products LEFT JOIN images ON products.id=images.product_id AND images.is_main = 1 LEFT JOIN orders_products ON products.id = orders_products.product_id WHERE products.id != 9999 GROUP BY products.id ")->result_array();

	}
	public function getItemDetails($id)
	{
		$sql="SELECT products.id as id, name, price, images.src AS img, description, inventory FROM products LEFT JOIN images ON products.id=images.product_id WHERE products.id = $id AND is_main = 1 OR is_main = 2";
		$result = $this->db->query($sql)->row_array();
		$result['images'] = $this->db->query("SELECT * FROM images WHERE product_id = {$result['id']}")->result_array();
		return $result;
	}
	public function getDummyProductImages() {
		return $this->db->query("SELECT * FROM images WHERE product_id = 9999")->result_array();
	}

	public function deleteImage($id) {
		return $this->db->query("DELETE FROM images WHERE id = $id");
	}
	public function getSimilarItems($id) 
	{
		$cat = $this->db->query("SELECT parent_id FROM categories JOIN products ON products.category_id = categories.id WHERE products.id = $id")->row_array();
		return $this->db->query("SELECT products.id id, products.name, price, images.src AS img FROM products JOIN images ON products.id=images.product_id JOIN categories ON products.category_id=categories.id WHERE parent_id = {$cat['parent_id']} AND products.id != $id")->result_array();
	}
	public function linkImage($imageID, $productID) {
		$this->db->query("UPDATE images SET product_id = $productID, is_main = 1 WHERE id = $imageID");
	}

	public function deleteTempImages() {
		return $this->db->query("DELETE FROM images WHERE product_id = 9999 AND is_main != 2");
	}
	public function addImage($imageInfo) {
		$query = "INSERT INTO images (product_id, src, is_main, created_at, updated_at) VALUES(?, ?, 0, now(), now())";
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

	public function getProductsByCategory($categoryID) {
		$query = "SELECT products.id as id, images.src as img, categories.id as cat_id, parent_id FROM products LEFT JOIN images ON products.id = images.product_id AND images.is_main = 1 LEFT JOIN categories ON categories.id = products.category_id WHERE categories.id = $categoryID OR parent_id = $categoryID";
		return $this->db->query($query)->result_array();
	}
	public function getProductsByCategoryA($categoryID) {
		$query = "SELECT products.id as id, images.src as img, categories.id as cat_id, parent_id FROM products LEFT JOIN images ON products.id = images.product_id AND images.is_main = 1 LEFT JOIN categories ON categories.id = products.category_id WHERE categories.id = $categoryID OR parent_id = $categoryID";
		return $this->db->query($query)->result_array();
	}
	public function paginateCategories($id, $limit)
	{
		if ($id == 0) {
			$query = "SELECT products.id as id, images.src as img, categories.id as cat_id, parent_id FROM products LEFT JOIN images ON products.id = images.product_id AND images.is_main = 1 LEFT JOIN categories ON categories.id = products.category_id";
			$numRows = $this->db->query($query)->num_rows();
			$lim = ($limit-1)*9;
			$query.=" LIMIT $lim, 9";
			$result = $this->db->query($query)->result_array();
		}
		else {
			$query = "SELECT products.id as id, images.src as img, categories.id as cat_id, parent_id FROM products LEFT JOIN images ON products.id = images.product_id AND images.is_main = 1 LEFT JOIN categories ON categories.id = products.category_id WHERE categories.id = $id OR parent_id = $id";
			$numRows = $this->db->query($query)->num_rows();
			$lim = ($limit-1)*9;
			$query.=" LIMIT $lim, 9";
			$result =  $this->db->query($query)->result_array();
		}
		return array("numItems" => $numRows, "products" => $result, "catID" => $id);

	}
	public function paginateAllProducts($limit) {
		$query ="SELECT products.id, images.src AS img, products.name, inventory, SUM(quantity) as sold FROM products LEFT JOIN images ON products.id=images.product_id AND images.is_main = 1 LEFT JOIN orders_products ON products.id = orders_products.product_id WHERE products.id != 9999 GROUP BY products.id ";
		$numRows = $this->db->query($query)->num_rows();
		$limit = ($limit-1) * 6;
		$query.=" LIMIT $lim, 6";
		$result = $this->db->query($query)->result_array();
		return array("numItems" => $numRows, "products" => $result);
	}
	public function deleteProduct($id) {
		$this->db->query("DELETE FROM products WHERE id = $id");
	}

}