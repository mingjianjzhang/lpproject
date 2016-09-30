<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/adminNav");
?>

<div class="container">

	<div class="row" style="margin-bottom: 1em"> 
		<div class="col-sm-6">
<!-- 			<form id="adminSearchProducts">
				<div class="form-group">
					<input type="text" class="form-control" id="adminProductSearch" placeholder="Search">
				</div>
			</form> -->
		</div>
		<div class="col-sm-6">

			<a class="addEdit btn btn-default btn-primary pull-right" product-id="0" data-toggle="modal" data-target="#editAddProductModal"> Add new product </a>
		</div>
	</div>

	<div id ="allProductsAdmin" class="row">
		 <?php $this->load->view('partials/allProductsAdmin', array("products" => $products, "categories" => $categories)); ?>
	</div>
<script>
	$(".addEdit").click(function(){
		$.post('/AdminProducts/displayAddEdit', {'id': $(this).attr('product-id')}, function(res) {
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
