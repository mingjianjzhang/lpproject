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

		$('#addingProduct').click(function(e){
			e.preventDefault();

			$.post('/AdminProducts/addProduct', $('#addsProduct').serialize(), function(res) {
 		$('#submittedInfo').html("<h5 class='bg-success'>You have successfully added a product</h5>");
			})

		})		
		$('#editingProduct').click(function(e){
			e.preventDefault();

			$.post('/AdminProducts/editProduct', $('#editsProduct').serialize(), function(res) {
 		$('#submittedInfo').html("<h5 class='bg-success'>You have successfully edited a product</h5>");
			})

		})		
		

// $('#addingProduct').click(function(e){
// 	e.preventDefault();
// 	$.post("/AdminProducts/addProduct", $('#productInformation').serialize(), function(res) {
// 		$('#submittedInfo').html("<h5 class='bg-success'>You have successfully added a product</h5>");
// 	})
// })	


</script>
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"><?= ($product == "add") ? "Add Product" : "Edit Product: Product ID {$product['id']}" ?></h4>
			</div>

			<div class="modal-body">


				<div id="submittedInfo"></div>
					<!-- <form id="productInformation">	 -->
					<form id="<?= ($product == "add") ? "addsProduct" : "editsProduct" ?>" method="POST">
					<input type="hidden" name="product_id" value=<?= ($product != "add") ? $product['id'] : NULL ?>>
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
					
					<div id="productImageUpload">
						<?php $this->load->view('partials/uploadedImages', array("product" => $product, "tempImages" => $tempImages)); ?>



				
					
					 

			</div>
			<a class="btn btn-default" data-dismiss="modal" href=""> Cancel </a>
					<a class="btn btn-primary" id="<?= ($product == "add") ? "addingProduct" : "editingProduct" ?>"><?= ($product == "add") ? "Add" : "Update" ?></a>
