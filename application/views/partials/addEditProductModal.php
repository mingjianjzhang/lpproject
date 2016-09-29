<script>
$('#adminCategorySelect').select2({
 			 templateResult: function (data) {    
    // We only really care if there is an element to pull classes from
    if (!data.element) {
      return data.text;
    }

    var $element = $(data.element);

    var $wrapper = $('<span></span>');
    $wrapper.addClass($element[0].className);

    $wrapper.text(data.text);

    return $wrapper;
  }
});

$('.imageCheck').change(function() {
	if ($('.imageCheck').is(':checked')) {
		$('.imageCheck').not(this).prop('disabled', true);
	} else {
		$('.imageCheck').not(this).prop('disabled', false);
	}
});


	



</script>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?= ($product == "add") ? "Add Product" : "Edit Product: Product ID {$product['id']}" ?></h4>
			</div>

			<div class="modal-body">
				<?php var_dump($product) ?>
						
					<div class="form-group">
						<label for="name">Name</label>
						<input class="form-control" type="text" name="name" id="name" value="<?= ($product != 'add') ? $product['name'] : NULL ?>">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
						<textarea class="form-control" name="description" id="description"><?= ($product != 'add') ? $product['description'] : NULL ?></textarea>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="form-group">
							<label for="price"> Price </label>
							<input type="text" id="price" name="price" class="form-control" value="<?= ($product != 'add') ? $product['price'] : NULL ?>">
							</div>
						</div>
						<div class="col-sm-3 pull-right">
							<div class="form-group">
							<label for="inventory"> Inventory </label>
							<input type="text" id="inventory" name="inventory" class="form-control" value="<?= ($product != 'add') ? $product['inventory'] : NULL ?>">
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="adminCategorySelect">
								Categories
								</label>
								<select name="category" id="adminCategorySelect">
	<?php foreach ($categories as $parent) { ?>
  									<option class="l1" value=<?= $parent['id']?>> <?= $parent['category_name'] ?></option>
	<?php foreach($parent['children'] as $child) { ?>
  									<option class="l2" value=<?= $child['id']?>> <?= $child['name'] ?></option>
  	<?php } ?>
	<?php } ?>
								</select>

							</div>
						</div>
					</div>
						<form action="/AdminProducts/uploadImage" method="post" enctype="multipart/form-data">
							<label id="fileLabel" for="userfile"> Images </label>
							<input class="form-control" id="userfile" type="file" name="userfile" size="20" />
							<button type="submit" class="btn btn-success">Upload</button>	
						</form>



				
					<div>
						<table id="adminProductImageUpload" class="table">
							<?php 
							if($product != "add") {
								foreach ($product['images'] as $image) { ?>
							
							<tr>
								<td><img width="50" height="50" src="/assets/img/products/<?= $image['src'] ?>"></td>
								<td><p><?= $image['src'] ?></p></td>
								<td><p><span class="glyphicon glyphicon-trash"></span></p></td>
								<td>
									<div class="checkbox">
									    <label>
									      <input class="imageCheck" type="checkbox" <?= ($image['is_main']) ? "checked" : "disabled" ?>>
									    </label>
								  </div>
								</td>
							</tr>
							<?php } ?>
							<?php } ?>
						</table>
							
					</div>
					<a class="btn btn-default" href=""> Cancel </a>
					<a class="btn btn-info" href=""> Preview </a>
					<a class="btn btn-primary" href=""> Update </a>

			</div>
