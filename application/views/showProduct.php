<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
$this->load->view('partials/userHeader');
?>

<script type="">
	
</script>
<div class="container">
	<div class="col-md-12">
		<a class="outlined" href="/store"><span class="glyphicon glyphicon-arrow-left"></span> Go Back</a>
		<div class="row">
			<h2><?= $info['name'] ?></h2>
			<div class="col-md-5">
				<img class="img-rounded col-md-12"  src="/assets/img/products/<?= $info['img']?>">
				<div class="row">
					<ul class="inline-list">

					<!-- need to set this up to get all other images -->
<!-- 					<?php foreach ($pictures as $picture) { ?> 
						<li><a href="#"><img src="/assets/img/products/<?= $info['img']?>1" width="90" data-toggle="modal" data-target="#showPic" id="1"></a></li>
						<?php } ?> -->

					</ul>
				</div>
			</div>
			<div class="col-md-7">
				<h3>Product Description:</h3>
				<p><?= $info['description'] ?></p>
				<div class="btn-group" role="group" aria-label="...">
					<div class="btn-group" role="group">
						<form action="/addToCart" method="post" class="form-inline">
							<input type="hidden" name="price" value="<?= $info['price'] ?>">
							<input type="hidden" name="name" value="<?= $info['name'] ?>">
							<input type="hidden" name="id" value="<?= $info['id'] ?>">
							<select class="form-control" name="quantity">
								<?php for ($i=1; $i<=$info['inventory']; $i++) { ?>
								<option value="<?= $i ?>"><a href="#"><?= $i ?> ($<?= $i * $info['price'] ?>)</a></option> 
								<?php } ?>
							</select>
							<input type="submit" value="Buy" class="btn btn-default">
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<h3>Similar Items</h3>
			<? foreach ($similar as $similarThing) { ?>
			<div class="col-md-2">
				<a href="/product/<?= $similarThing['id'] ?>"><img width="100%" src="/assets/img/products/<?= $similarThing['img'] ?>"></a>
				<p><?= $similarThing['name'] ?>, $<?= $similarThing['price'] ?></p>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- Modal -->
<div id="showPic" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Product details:</h4>
			</div>
			<div class="modal-body">
				<img src="/assets/img/products/<?= $info['img']?>" width="500">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
</body>
</html>