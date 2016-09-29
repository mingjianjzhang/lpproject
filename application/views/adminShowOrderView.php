<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view("partials/adminNav");
?>
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<p> Order ID: <?= $billing['id'] ?> </p>
			<h5> Customer Shipping Info </h5>
			<ul class="nav">
				<li>asdf</li>
				<li>asdf</li>
				<li>asdf</li>
			</ul>
			<h5> Customer Billing Info </h5>
			<ul class="nav">
				<li><?= $billing['first_name'] ?> <?= $billing['last_name'] ?></li>
				<li><?= $billing['billing_address'] ?></lfi>
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
					<p class="bg-success">Status: <?php if($billing['status'] == 1) {
															echo 'Submitted';
														}
														if($billing['status'] == 2) {
															echo 'Processing';
														}
														if($billing['status'] == 3) {
															echo 'Shipped';
														}
														if($billing['status'] == 0) {
															echo 'Cancelled';
														} ?></p>
				</div>
				<div class="col-sm-5 pull-right">
					<ul class="nav">
						<li>Sub-total: $<?= $billing['total'] ?> </li>
						<li>Shipping: $1.00</li>
						<li>Total Price: $<?= $billing['total']+1 ?> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
	