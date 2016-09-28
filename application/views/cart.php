<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view('partials/userHeader');
?>
<body>
	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped outlined">
				<tr>
					<th>Item</th>
					<th>Price</th> 
					<th>Quantity</th>
					<th>Total</th>
				</tr>
				<tr>
					<td>Belt</td>
					<td>$1</td> 
					<td>5 <a href="">Update</a><img src="/assets/img/trash.png" width="25"></td>
					<td>$5</td>
				</tr>
				<tr>
					<td>Belt</td>
					<td>$1</td> 
					<td>5 <a href="">Update</a><img src="/assets/img/trash.png" width="25"></td>
					<td>$5</td>
				</tr>
				<tr>
					<td>Belt</td>
					<td>$1</td> 
					<td>5 <a href="">Update</a><img src="/assets/img/trash.png" width="25"></td>
					<td>$5</td>
				</tr>
			</table>
			<p>Total:</p>
			<button class="btn btn-success">Continue Shopping</button>
		</div>
		<div class="col-md-5 col-md-offset-1">
			<h1>Shipping Information</h1>
			<form class="form-horizontal">
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">First Name:</span>
					<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Last Name:</span>
					<input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Address:</span>
					<input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">City:</span>
					<input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">State:</span>
					<input type="text" class="form-control" placeholder="State" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Zipcode:</span>
					<input type="text" class="form-control" placeholder="Zipcode" aria-describedby="basic-addon1">
				</div>
			</form>
		</div>
		<div class="col-md-5">
			<h1>Billing Information</h1>
			<p><input type="checkbox"> Same as shipping</p>
			<form>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">First Name:</span>
					<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Last Name:</span>
					<input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Address:</span>
					<input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">City:</span>
					<input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">State:</span>
					<input type="text" class="form-control" placeholder="State" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Zipcode:</span>
					<input type="text" class="form-control" placeholder="Zipcode" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Card:</span>
					<input type="text" class="form-control" placeholder="Card" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Security Code:</span>
					<input type="text" class="form-control" placeholder="Security Code" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">  <!-- need to set expiration to have month and year -->
					<span class="input-group-addon" id="basic-addon1">Expiration:</span>
					<div class="col-xs-3">
						<select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
							<option>Month</option>
							<option value="01">Jan (01)</option>
							<option value="02">Feb (02)</option>
							<option value="03">Mar (03)</option>
							<option value="04">Apr (04)</option>
							<option value="05">May (05)</option>
							<option value="06">June (06)</option>
							<option value="07">July (07)</option>
							<option value="08">Aug (08)</option>
							<option value="09">Sep (09)</option>
							<option value="10">Oct (10)</option>
							<option value="11">Nov (11)</option>
							<option value="12">Dec (12)</option>
						</select>
					</div>
					<div class="col-xs-3">
						<select class="form-control" name="expiry-year">
							<option value="16">2016</option>
							<option value="17">2017</option>
							<option value="18">2018</option>
							<option value="19">2019</option>
							<option value="20">2020</option>
							<option value="21">2021</option>
							<option value="22">2022</option>
							<option value="23">2023</option>
						</select>
					</div>
				</div>
			</form>
			<div class="col-md-10 clear-bottom clear-top">
				<button class="btn btn-success pull-right">Pay</button>
			</div>
		</div>
	</div>
</body>
</html>