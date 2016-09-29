<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('partials/head'); 
$this->load->view('partials/userHeader');
?>
	<?php var_dump($categories) ?>
<div class="container">
	<div class="col-md-3 col-md-offset-1 outlined">
		<form class="navbar-form navbar-left">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
		</form>
		<h3>Categories</h3>
		<?php foreach ($categories as $parent) { ?>
			<h5><?= $parent['category_name'] ?></h5>
			<ul class="subcategories">
			<?php foreach($parent['children'] as $child) { ?>
				<li><?= $child['name'] ?></li>
			<?php } ?>
			</ul>
		<?php } ?>
		
	</div>
	<div class="col-md-6 col-xs-12 col-md-offset-1 outlined">
		<div class="row">
		<?php for ($i = 0; $i < count($products); $i++) { ?>
		<div class="col-xs-6 col-md-4">
			<a href="/product/<?= $products[$i]['id'] ?>" class="thumbnail">
				<img src="assets/img/products/<?= $products[$i]['img'] ?>" alt="placeholder">
			</a>
		</div>
		<?php if (($i != 0) && (($i+1)%3 == 0)) { ?>
		</div>
		<div class="row">
		<?php } ?>
		<?php } ?>
	</div>
</div>