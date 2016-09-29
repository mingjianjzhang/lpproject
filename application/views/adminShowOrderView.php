<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view("partials/adminNav");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<p> Order ID: <?= $info['id'] ?> </p>
			<h5> Customer Name </h5>
				<p><?= $info['first_name'] ?> <?= $info['last_name'] ?></p>
			<h5> Customer Shipping Address </h5>
		
			<ul class="nav">
				<li><?= $info['shipping_address']?></li>

			</ul>
			<h5> Customer Billing Info </h5>
			<ul class="nav">
				<li>Address</li>
				<li><?= $info['billing_address'] ?></li>
				<li>Credit Card</li>
				<li><?= $info['card'] ?></li>
				<li>Expiration Date</li>
				<li><?= $info['expiration'] ?></li>
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
				<?php foreach($items as $item) { ?>
					<tr>
						<td><?= $item['product_id'] ?></td>
						<td><?= $item['name'] ?></td>
						<td>$<?= $item['price'] ?></td>
						<td><?= $item['quantity'] ?></td>
						<td>$<?= $item['price']*$item['quantity'] ?></td>
					</tr>
				<?php } ?>
			</table>
			<div class="row">
				<div class="col-sm-5">
					<p class="<?php if($info['status'] == 1) {
															echo 'bg-warning';
														}
														if($info['status'] == 2) {
															echo 'bg-info';
														}
														if($info['status'] == 3) {
															echo 'bg-success';
														}
														if($info['status'] == 0) {
															echo 'bg-danger';
														} ?>">

					Status: <?php if($info['status'] == 1) {
															echo 'Submitted';
														}
														if($info['status'] == 2) {
															echo 'Processing';
														}
														if($info['status'] == 3) {
															echo 'Shipped';
														}
														if($info['status'] == 0) {
															echo 'Cancelled';
														} ?></p>
				</div>
				<div class="col-sm-5 pull-right">
					<ul class="nav">
						<li>Sub-total: $<?= $info['total'] ?> </li>
						<li>Shipping: $1.00</li>
						<li>Total Price: $<?= $info['total']+1 ?> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	