<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view("partials/adminNav");
?>
<script>
 



</script>
<div class="container">
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
				<form action="/UserOrders/updateOrder" class="statusy" method="post">
					<input type="hidden" name="orderID" value="<?= $order['id']?>">
					<select name="status" class="status form-control">
						<option value = "1" <?= ($order['status'] == 1) ? "selected" : null ?>>Submitted</option>
						<option value = "2" <?= ($order['status'] == 2) ? "selected" : null ?>>Processing</option>
						<option value = "3" <?= ($order['status'] == 3) ? "selected" : null ?>>Shipped</option>
						<option value = "0" <?= ($order['status'] == 0) ? "selected" : null ?>>Cancelled</option>
					</select>
				</form>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>





</div>
