<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
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
			<a class="btn btn-default btn-primary pull-right" data-toggle="modal" data-target="#editAddProductModal"> Add new product </a>
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
			<tr>
				<td><img width="50" height="50" src="/assets/img/product.gif"></td>
				<td>1</td>
				<td>Computer</td>
				<td>100</td>
				<td>10</td>
				<td>
					<a data-toggle="modal" data-target="#editAddProductModal">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<tr>
				<td><img width="50" height="50" src="/assets/img/product.gif"></td>
				<td>1</td>
				<td>Computer</td>
				<td>100</td>
				<td>10</td>
				<td>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<tr>
				<td><img width="50" height="50" src="/assets/img/product.gif"></td>
				<td>1</td>
				<td>Computer</td>
				<td>100</td>
				<td>10</td>
				<td>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
			<tr>
				<td><img width="50" height="50" src="/assets/img/product.gif"></td>
				<td>1</td>
				<td>Computer</td>
				<td>100</td>
				<td>10</td>
				<td>
					<a href="">Edit</a>
					<a href="">Delete</a>
				</td>
			</tr>
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
		<div class="modal fade" id="editAddProductModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Product - Product ID 1 </h4>
					</div>
	
				<div class="modal-body">
					<?php var_dump($categories) ?>
					<form action="" method="POST">
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" type="text" name="name" id="name">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description">Description</textarea>
					</div>
					<div class="form-group">
						<p> Categories </p>
						<select name="category" id="adminCategorySelect">
  							<option class="l1" value="1">Option 1</option>
  							<option class="l2">Suboption 1</option>
  							<option class="l2">Suboption 2</option>
  							<option class="l2">Suboption 3</option>
  							<option class="l1">Option 2</option>
						</select>

					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					<div class="form-group">
						<label for="newCategory">Add New Category</label>
						<input class="form-control" type="text" name="newCategory" id="newCategory">
					</div>
					<div>
						<h5> Images </h5>
						<a class="btn btn-default">Upload</a>
					</div>
					<div>
						<table id="adminProductImageUpload" class="table">
							<tr>
								<td><img width="50" height="50" src="/assets/img/product.gif"></td>
								<td><p>product.gif</p></td>
								<td><p><span class="glyphicon glyphicon-trash"></span></p></td>
								<td>
									<div class="checkbox">
									    <label>
									      <input type="checkbox"> Check me out
									    </label>
								  </div>
								</td>
							</tr>
						</table>
							
					</div>
					<a class="btn btn-default" href=""> Cancel </a>
					<a class="btn btn-info" href=""> Preview </a>
					<a class="btn btn-primary" href=""> Update </a>
				</div>
			</div>
			</div>
		</div>

	</div>
</div>