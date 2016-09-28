<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view("partials/adminNav");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<form id="adminSearchOrders">
				<div class="form-group">
					<input type="text" class="form-control" id="adminOrderSearch" placeholder="Search">
				</div>
			</form>
		</div>
		<div class="col-sm-3 pull-right">
			<select name="status" class="form-control">
				<option>Show All</option>
				<option>Submitted</option>
				<option>Processing</option>
				<option>Shipped</option>
				<option>Cancelled</option>
			</select>
		</div>
	</div>
	<div class="row">
		<table class="table">
			<tr>
				<th>Order ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>Billing Address</th>
				<th>Total</th>
				<th>Status</th>
			</tr>
			<tr>
				<td><a href="/dashboard/orders/show/100">100</a></td>
				<td>Josh</td>
				<td>09/30/2016</td>
				<td>123 street st, CA 92801</td>
				<td>$145.99</td>
				<td>
					<select name="status" class="form-control">
						<option>Show All</option>
						<option>Submitted</option>
						<option>Processing</option>
						<option>Shipped</option>
						<option>Cancelled</option>
					</select>
				</td>
			</tr>
		</table>
	</div>





</div>
