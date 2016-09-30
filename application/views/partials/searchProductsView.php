
<?php $this->load->view('partials/paginating', array("numItems" => $numItems, "catID" => $catID)) ?>
		<div class="row outlined">
		<div class="row">
			<?php for ($i = 0; $i < count($products); $i++) { ?>
			<div class="col-xs-6 col-md-4">
				<a href="/product/<?= $products[$i]['id'] ?>" class="thumbnail">
					<img src="/assets/img/products/<?= $products[$i]['img'] ?>" alt="<?= $products[$i]['img'] ?>">
				</a>
			</div>
			<?php if (($i != 0) && (($i+1)%3 == 0)) { ?>
		</div>
		<div class="row">
			<?php } ?>
			<?php } ?>
	