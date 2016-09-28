<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('partials/head'); 
$this->load->view('partials/userHeader');
?>

<div class="container">
	<div class="col-md-3 col-md-offset-1 outlined">
		<form class="navbar-form navbar-left">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		</form>
		<h3>Categories</h3>
		<?php foreach ($categories as $category) { ?>
		<div class="dropdown">
			<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<?= $category['category_name'] ?>
				<span class="caret"></span>
			</button>
			<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
				<?php foreach ($category['children'] as $name) {?>
				<li><a href="#"><?=  $name['name'] ?></a></li>
				<?php } ?>
				<li><a href="#">All <?=  $category['category_name'] ?></a></li>
			</ul>
		</div>
		<?php } ?>
	</div>
	<div class="col-md-6 col-xs-12 col-md-offset-1 outlined">
		<div class="col-xs-6 col-md-4">
			<a href="#" class="thumbnail">
				<img src="assets/img/placeholder-thumb.jpg" alt="placeholder">
			</a>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" class="thumbnail">
				<img src="assets/img/placeholder-thumb.jpg" alt="placeholder">
			</a>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" class="thumbnail">
				<img src="assets/img/placeholder-thumb.jpg" alt="placeholder">
			</a>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" class="thumbnail">
				<img src="assets/img/placeholder-thumb.jpg" alt="placeholder">
			</a>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" class="thumbnail">
				<img src="assets/img/placeholder-thumb.jpg" alt="placeholder">
			</a>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" class="thumbnail">
				<img src="assets/img/placeholder-thumb.jpg" alt="placeholder">
			</a>
		</div>
	</div>
</div>