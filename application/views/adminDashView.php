<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->view("partials/adminNav");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<h2> Recently Submitted Orders</h2>
			<div class="col-md-12">
			<table class="table table-striped outlined">
			<tr>
				<th>Order ID</th>
				<th>Name</th>
				<th>Date</th>
				<th>Billing Address</th>
				<th>Total</th>
			</tr>
				<?php foreach ($orders as $order) { ?>
			<tr>
				<td><a href="/dashboard/orders/show/<?=$order['id']?>"><?=$order['id']?></a></td>
				<td><?=$order['first_name']?> <?=$order['last_name']?></td>
				<td><?=$order['date']?></td>
				<td><?=$order['billing_address'] ?></td>
				<td><?= $order['total'] ?></td>
			</tr>
			<?php } ?>
			</table>
			</div>
		</div>
		<div class="col-sm-6">
			<h2> Daily Earnings Report </h2>
			<img src="/assets/img/dashboard.jpg" alt="dashboard">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<h2> Most Popular Products </h2>
			<div class="col-md-12">
				<table class="table table-striped outlined">
				<tr>
					<th>Product ID</th>
					<th>Name</th>
					<th>Inventory</th>
					<th>Quantity Ordered</th>
					<th>Unit Price</th>
				</tr>
					<?php foreach ($products as $product) { ?>
				<tr>
					<td><?=$product['id']?></td>
					<td><?=$product['name']?></td>
					<td><?=$product['inventory']?></td>
					<td><?=$product['quantity'] ?></td>
					<td><?=$product['price'] ?></td>
				</tr>
				<?php } ?>
				</table>
			</div>
		</div>
		<div class="col-sm-6">
			<h2> Site KPIs </h2>
			<h4>New Customers</h4>
			<div class="progress">
			  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 48%">
			    <span class="sr-only">48% Complete (success)</span>
			  </div>
			</div>
			<h4>Abandoned Carts</h4>
			<div class="progress">
			  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
			    <span class="sr-only">15% Complete</span>
			  </div>
			</div>
			<h4>Orders Over Projection</h4>
			<div class="progress">
			  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
			    <span class="sr-only">60% Complete (warning)</span>
			  </div>
			</div>
			<h4>Repeat Business</h4>
			<div class="progress">
			  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
			    <span class="sr-only">87% Complete (danger)</span>
			  </div>
			</div>
		</div>
	</div>
</div>