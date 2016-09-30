<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/adminNav");
?>

<div class="container">

	<div class="row"> 
		<div class="col-sm-6">
			<form id="adminSearchProducts">
				<div class="form-group">
					<input type="text" class="form-control" id="adminProductSearch" placeholder="Search">
				</div>
			</form>
		</div>
		<div class="col-sm-6">
<form id="hello">
	<input type="hidden" name="key" value="value">
</form>
			<a class="addEdit btn btn-default btn-primary pull-right" product-id="0" data-toggle="modal" data-target="#editAddProductModal"> Add new product </a>
		</div>
	</div>

	<div class="row">
		<table class="table">
			<tr>
				<th>Picture</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inventory Count</th>
				<th>Quantity Sold</th>
				<th>Action</th>
			</tr>
			<?php foreach ($products as $product) { ?>
			<tr>
				<td><img width="50" height="50" src="/assets/img/products/<?= $product['img']?>"></td>
				<td><?= $product['id']?></td>
				<td><?= $product['name']?></td>
				<td><?= $product['inventory']?></td>
				<td><?= $product['sold'] ?></td>
				<td>
					<a class="addEdit" product-id="<?= $product['id'] ?>" data-toggle="modal" data-target="#editAddProductModal">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<?php } ?>
		</table>

			<ul id="adminProductsPages" class="pages nav text-center">
				<li><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li><a href="">5</a></li>
				<li><a href="">6</a></li>
				<li><a href="">7</a></li>
			</ul>
	</div>
<script>
	$(".addEdit").click(function(){
		$.post('/AdminProducts/displayAddEdit', { 'id': $(this).attr('product-id')}, function(res) {
			$('.modal-content').html(res);
		});
	})

</script>
	<div class="modal fade" id="editAddProductModal" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			</div>
		</div>
	</div>
	</div>
</div> <!-- container -->
