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
			<?php foreach ($orders as $order) { ?>
			<tr>
				<td><a href="/dashboard/orders/show/<?=$order['id']?>"><?=$order['id']?></a></td>
				<td><?=$order['first_name']?> <?=$order['last_name']?></td>
				<td><?=$order['date']?></td>
				<td><?=$order['billing_address'] ?></td>
				<td><?= $order['total'] ?></td>
				<td>
					<select name="status" class="form-control">
						<option value = "1" <?= ($order['status'] == 1) ? "selected" : null ?>>Submitted</option>
						<option value = "2" <?= ($order['status'] == 2) ? "selected" : null ?>>Processing</option>
						<option value = "3" <?= ($order['status'] == 3) ? "selected" : null ?>>Shipped</option>
						<option value = "0" <?= ($order['status'] == 0) ? "selected" : null ?>>Cancelled</option>
					</select>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>





</div>
