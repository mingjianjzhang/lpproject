<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {
	public function getAllItems() // for store page
	{

	}
	public function getItemDetails($id) // for product details page
	{
		$sql="SELECT name, price, img, description FROM products WHERE id = $id";
		return $this->db->query($sql);
	}
	public function getSimilarItems() // for product details page
	{
		// get pic name and price for items in the same category
	}




}