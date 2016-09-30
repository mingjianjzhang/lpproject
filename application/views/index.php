<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('partials/head'); 
$this->load->view('partials/userHeader');
?>

<div class="container" id="homeContainer">
	<div class="col-md-12">
		<div class="jumbotron dropshadow" id="banner">
			<h1 class="white">BootCamp Supply Store</h1>
			<p class="white">We have all you need to start your very own coding bootcamp.</p>
			<p><a class="btn btn-default btn-lg" href="store" role="button">Shop All Products</a></p>
		</div>
		<div class="col-md-12">
			<h3>Shop by Category:</h3>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					<img class="thumbnail dropshadow" src="/assets/img/electronics-cat.jpg" height="240" alt="category image">
					<div class="overlay">
						<h2>< Electronics /></h2>
						<a class="info" href="/UserProducts/displayProductsByCategory/1" >Shop Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					<img class="thumbnail dropshadow" src="/assets/img/food-cat.jpg" height="240" alt="category image">
					<div class="overlay">
						<h2>< Food /></h2>
						<a class="info" href="/UserProducts/displayProductsByCategory/2">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					<img class="thumbnail dropshadow" src="/assets/img/furniture-cat.jpg" height="240" alt="category image">
					<div class="overlay">
					    <h2>< Furniture /></h2>
					    <a class="info" href="/UserProducts/displayProductsByCategory/3">Shop Now</a>
		        	</div>
	        	</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
				<div class="hovereffect">
					<img class="thumbnail dropshadow" src="/assets/img/instructors-cat.jpg" height="240" alt="category image">
					<div class="overlay">
					    <h2>< Instructors /></h2>
						<a class="info" href="/UserProducts/displayProductsByCategory/4">Shop Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$(".fullBackground").css("height", $(window).height());

</script>