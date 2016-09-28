<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Model { // for cart page
	public function showCart()
	{
		// use session data
	}
	public function recordInfo() // for cart page
	{

		$sql = "INSERT INTO addresses  (street, city, state, zip)  VALUES ()";
	}



}