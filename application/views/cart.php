<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view('partials/userHeader');
?>

<body>

	<table class="table">
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
	<button>Continue Shopping</button>
</div>

<h1>Shipping Information</h1>
<form>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">First Name:</span>
		<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Last Name:</span>
		<input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Address:</span>
		<input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">City:</span>
		<input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">State:</span>
		<input type="text" class="form-control" placeholder="State" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Zipcode:</span>
		<input type="text" class="form-control" placeholder="Zipcode" aria-describedby="basic-addon1">
	</div>
</form>

<h1>Billing Information</h1>
<p><input type="checkbox">Same as shipping</p>
<form>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">First Name:</span>
		<input type="text" class="form-control" placeholder="First Name" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Last Name:</span>
		<input type="text" class="form-control" placeholder="Last Name" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Address:</span>
		<input type="text" class="form-control" placeholder="Address" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">City:</span>
		<input type="text" class="form-control" placeholder="City" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">State:</span>
		<input type="text" class="form-control" placeholder="State" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Zipcode:</span>
		<input type="text" class="form-control" placeholder="Zipcode" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Card:</span>
		<input type="text" class="form-control" placeholder="Card" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="basic-addon1">Security Code:</span>
		<input type="text" class="form-control" placeholder="Security Code" aria-describedby="basic-addon1">
	</div>
	<div class="input-group">  <!-- need to set expiration to have month and year -->
		<span class="input-group-addon" id="basic-addon1">Expiration:</span>
		<input type="text" class="form-control" placeholder="Expiration" aria-describedby="basic-addon1">
	</div>
</div>
</form>

<button>Pay</button>

</body>
</html>