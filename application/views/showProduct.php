<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view('partials/userHeader');
?>
<div class="container">
	<div class="col-md-12">
		<a class="outlined" href="/"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</a>
		<div class="row">
			<h2><?= $info['name'] ?></h2>
			<div class="col-md-5">
				<img class="img-rounded col-md-12"  src="/assets/img/placeholder.jpg">
				<div class="row">
					<ul class="inline-list">
						<li><a href="#"><img src="/assets/img/placeholder-icon.jpg"></a></li>
						<li><a href="#"><img src="/assets/img/placeholder-icon.jpg"></a></li>
						<li><a href="#"><img src="/assets/img/placeholder-icon.jpg"></a></li>
						<li><a href="#"><img src="/assets/img/placeholder-icon.jpg"></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<h3>Product Description:</h3>
				<p><?= $info['description'] ?></p>
				<div class="btn-group" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Select
							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu">
							<?php for ($i=1; $i<=$info['inventory']; $i++) { ?>
							<li><a href="#"><?= $i ?> ($<?= $i * $info['price'] ?>)</a></li> 
							<?php } ?>
						</ul>
					</div>
					<form action="" method=post><input type="submit" value="Buy" class="btn btn-default"></form>
				</div>
			</div>
		</div>
		<div class="row">
			<h3>Similar Items</h3>
			<div class="col-md-1">
				<a href=""><img src="/assets/img/imgPlaceholder.png"></a>
				<p>Description</p>
			</div>
			<div class="col-md-1">
				<a href=""><img src="/assets/img/imgPlaceholder.png"></a>
				<p>Description</p>
			</div>
			<div class="col-md-1">
				<a href=""><img src="/assets/img/imgPlaceholder.png"></a>
				<p>Description</p>
			</div>
			<div class="col-md-1">
				<a href=""><img src="/assets/img/imgPlaceholder.png"></a>
				<p>Description</p>
			</div>
			<div class="col-md-1">
				<a href=""><img src="/assets/img/imgPlaceholder.png"></a>
				<p>Description</p>
			</div>
			<div class="col-md-1">
				<a href=""><img src="/assets/img/imgPlaceholder.png"></a>
				<p>Description</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>