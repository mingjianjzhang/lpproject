<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	// Link to full category store
	public function store()
	{
		$this->load->view('store');
	}

	public function cart()
	{
		$this->load->view('cart');
	}

	public function product()
	{
		$this->load->view('showProduct');
	}
}
