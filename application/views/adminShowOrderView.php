<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view("partials/adminNav");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<p> Order ID: 1 </p>
			<h5> Customer Shipping Info </h5>
			<ul class="nav">
				<li>asdf</li>
				<li>asdf</li>
				<li>asdf</li>
			</ul>
			<h5> Customer Billing Info </h5>
			<ul class="nav">
				<li>asd</li>
				<li>asdf</lfi>
				<li>asdf</li>
			</ul>

		</div>
		<div class="col-sm-9">
			<div class="row">
				<table class="table">
					<tr>
						<td>ID</td>
						<td>Item</td>
						<td>Price</td>
						<td>Quantity</td>
						<td>Total</td>
					</tr>
					<tr>
						<td>1</td>
						<td>Computer</td>
						<td>$145.99</td>
						<td>1</td>
						<td>$145.99</td>
				</table>
			</tr>
			<div class="row">
				<div class="col-sm-5">
					<p class="bg-success">Status: shipped</p>
				</div>
				<div class="col-sm-5 pull-right">
					<ul class="nav">
						<li>Sub-total: $145.99</li>
						<li>Shipping: $1:00</li>
						<li>Total Price: $146.99</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	