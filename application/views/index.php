<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('partials/head'); 
$this->load->view('partials/userHeader');
?>

<div class="container">
	<div class="col-md-12">
		<div class="jumbotron" id="banner">
			<h1>BootCamp Supply Store</h1>
			<p>We have all you need to start your very own coding bootcamp.</p>
			<p><a class="btn btn-success btn-lg" href="store" role="button">Shop All Products</a></p>
		</div>
		<div class="row">
			<h3>Or shop a category:</h3>
			<div class="col-xs-6 col-md-3">
				<a href="/UserProducts/displayProductsByCategory/1" class="thumbnail">
				<h4 class="text-center">Electronics</h4>
					<img src="/assets/img/products/lg-monitor.jpg" alt="category image">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="/UserProducts/displayProductsByCategory/2" class="thumbnail">
				<h4 class="text-center">Food</h4>
					<img src="/assets/img/products/cheez-it.jpg" alt="category image">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="/UserProducts/displayProductsByCategory/3" class="thumbnail">
				<h4 class="text-center">Furniture</h4>
					<img src="/assets/img/products/desk.jpg" alt="category image">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="/UserProducts/displayProductsByCategory/4" class="thumbnail">
				<h4 class="text-center">Instructors</h4>
					<img src="/assets/img/products/chrisb.jpeg" alt="category image">
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
	$(".fullBackground").css("height", $(window).height());

</script>