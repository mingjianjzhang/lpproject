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
			<p><a class="btn btn-success btn-lg" href="store" role="button">Start Shopping</a></p>
		</div>
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="/assets/img/placeholder-thumb.jpg" alt="category image">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="/assets/img/placeholder-thumb.jpg" alt="category image">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="/assets/img/placeholder-thumb.jpg" alt="category image">
				</a>
			</div>
			<div class="col-xs-6 col-md-3">
				<a href="#" class="thumbnail">
					<img src="/assets/img/placeholder-thumb.jpg" alt="category image">
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
			$(".fullBackground").css("height", $(window).height());

</script>