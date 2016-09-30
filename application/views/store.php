<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('partials/head'); 
$this->load->view('partials/userHeader');
?>

<div class="container">
	<div class="col-md-3 col-md-offset-1 outlined">

		<h3>Categories</h3>

		<div id="MainMenu">
			<div class="list-group panel">
				<?php foreach ($categories as $parent) { ?>
				<a href="#<?= $parent['category_name'] ?>" class="list-group-item list-group-item-info" data-toggle="collapse" data-parent="#MainMenu"><?= $parent['category_name'] ?><i class="fa fa-caret-down"></i></a>
				<div class="collapse" id="<?= $parent['category_name'] ?>">
					<?php foreach($parent['children'] as $child) { ?>
					<a href="/getProductsByCategory/<?= $child['id'] ?>" class="categorySearch list-group-item" category-id="<?= $child['id'] ?>"><?= $child['name'] ?></a>
					<?php } ?>
					<a href="/getProductsByCategory/<?= $parent['id'] ?>"  class="categorySearch list-group-item" category-id="<?= $parent['id'] ?>">All <?= $parent['category_name'] ?></a>
				</div>
				<?php } ?>

				<a href="" class="categorySearch list-group-item list-group-item-success" data-parent="#MainMenu" category-id="0">All Items</a>


			</div>
		</div>
		
	</div>


<div id="viewingProducts" class="col-md-6 col-xs-12 col-md-offset-1">

	</div>