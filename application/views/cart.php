<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view('partials/userHeader');
?>
<body>

	<script>
		$(document).ready(function(){
			// $('#pay').click(function(){
			// 	$.post('/empty', function(res) {
			// 		$('#success').html('<h2>Thanks for your order!</h2><a href="/store"><button href="/store" class="btn btn-success">Continue Shopping</button></a>');
			// 	});
			// 	return false;
			// });
			$("#same_as_billing").click(function(){
				if($(this).is(":checked")) {
					$("[name='billFirstName']").val($("[name='shipFirstName']").val());
					$("[name='billLastName']").val($("[name='shipLastName']").val());
					$("[name='billStreet']").val($("[name='shipStreet']").val());
					$("[name='billCity']").val($("[name='shipCity']").val());
					$("[name='billState']").val($("[name='shipState']").val());
					$("[name='billZip']").val($("[name='shipZip']").val());
				}
			});
		});
	</script>

	<div class="container">
		<div class="col-md-12">
			<div id="success">
				<?php if($this->session->cart == null){ ?>
				<h3>
					<?php echo 'Your cart is empty.'; ?>
				</h3>
				<?php } else { ?>
				<table class="table table-striped outlined">
					<tr>
						<th>Item</th>
						<th>Price</th> 
						<th>Quantity</th>
						<th>Total</th>
					</tr>
					<?php  $cart = $this->session->cart; for ($i=0; $i<count($cart); $i++) { ?>
					<tr>
						<td><?= $cart[$i]['name'] ?></td>
						<td>$<?= $cart[$i]['price'] ?></td> 
						<td><?= $cart[$i]['quantity'] ?></td> 
		<!-- 				<td>
							<form action="/UserOders/update" method="post" class="form-inline">
								<input type="hidden" name="price" value="<?= $cart[$i]['price'] ?>">
								<input type="hidden" name="name" value="<?= $cart[$i]['name'] ?>">
								<input type="hidden" name="id" value="<?= $cart[$i]['id'] ?>">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<?= $cart[$i]['quantity'] ?> (<?= $cart[$i]['price'] ?>)
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">

									<?php for ($j=1; $j<=$cart[$i]['inventory']; $j++) { ?>
									<li><?= $i ?>"><a href="#"><?= $i ?> ($<?= $i * $cart[$i]['price'] ?>)</a></li> 
									<?php } ?>

								</ul>
							<a href=""><img src="/assets/img/trash.png" width="25"></a>
							</form>
						</td> -->
						<td>$<?= $cart[$i]['price']*$cart[$i]['quantity'] ?></td>
					</tr>
					<?php } ?>
				</table>
				<?php $cash = 0; for ($i = 0; $i < count($this->session->cart); $i++) {
					$cash += ($this->session->cart[$i]['price']*$this->session->cart[$i]['quantity']);
				}?>
				<h4 class="pull-right">Total: <?= $cash ?></h4>	
				<a href="/empty"><button class="btn btn-danger">Empty Cart</button></a>
				<?php }?>
				<a href="/store"><button href="/store" class="btn btn-success">Continue Shopping</button></a>
			</div>	
		</div>
		<div class="col-md-5 col-md-offset-1">
			<h1>Shipping Information</h1>
			<form action="/UserOrders/cartkill" class="form-horizontal" method="post">
				<input type="hidden" name="numProducts" value=<?= count($this->session->cart) ?>>
				<?php for ($i = 0; $i < count($this->session->cart); $i++) { ?>
				<input type="hidden" name="product_id<?= $i ?>" value="<?= $this->session->cart[$i]['id'] ?>">
				<input type="hidden" name="quantity<?= $i ?>" value="<?= $this->session->cart[$i]['quantity'] ?>">
				<?php } ?>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">First Name:</span>
					<input type="text" class="form-control" name="shipFirstName" placeholder="First Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Last Name:</span>
					<input type="text" class="form-control" name="shipLastName" placeholder="Last Name" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Street:</span>
					<input type="text" class="form-control" name="shipStreet" placeholder="Street" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">City:</span>
					<input type="text" class="form-control" name="shipCity" placeholder="City" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">State:</span>
					<input type="text" class="form-control" name="shipState" placeholder="State" aria-describedby="basic-addon1">
				</div>
				<div class="input-group clear-bottom">
					<span class="input-group-addon" id="basic-addon1">Zip:</span>
					<input type="text" class="form-control" name="shipZip" placeholder="Zip" aria-describedby="basic-addon1">
				</div>
			</div>
			<div class="col-md-5">
				<h1>Billing Information</h1>
				<p><input type="hidden" value="notSame" name="isSame">
					<label><input type="checkbox" value="same" name="isSame" id="same_as_billing"> Same as shipping</label></p>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">First Name:</span>
						<input type="text" class="form-control" name="billFirstName" placeholder="First Name" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">Last Name:</span>
						<input type="text" class="form-control" name="billLastName" placeholder="Last Name" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">Street:</span>
						<input type="text" class="form-control" name="billStreet" placeholder="Street" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">City:</span>
						<input type="text" class="form-control" name="billCity" placeholder="City" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">State:</span>
						<input type="text" class="form-control" name="billState" placeholder="State" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">Zip:</span>
						<input type="text" class="form-control" name="billZip" placeholder="Zip" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">Card:</span>
						<input type="text" class="form-control" name="card" placeholder="Card" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom">
						<span class="input-group-addon" id="basic-addon1">Security Code:</span>
						<input type="text" class="form-control" name="securityCode" placeholder="Security Code" aria-describedby="basic-addon1">
					</div>
					<div class="input-group clear-bottom"> 
						<span class="input-group-addon" id="basic-addon1">Expiration:</span>
						<div class="col-xs-5">
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
								<option>Year</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
							</select>
						</div>
					</div>						
					<div class="col-md-10 clear-bottom clear-top">
						<button  id="pay" class="btn btn-success pull-right">Pay</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>


