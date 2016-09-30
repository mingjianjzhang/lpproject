<script>
	$('.refresh').click(function() {
		$.post("/AdminProducts/refresh/"+$('#productID').val(), function(res) {
			$('#productImageUpload').html(res);
		});
	});
	$('.imageCheck').change(function() {
	if ($('.imageCheck').is(':checked')) {
		$('.imageCheck').not(this).prop('disabled', true);
	} else {
		$('.imageCheck').not(this).prop('disabled', false);
	}
	});
	$('#uploadImage').submit(function() {
        window.open('', 'formpopup', 'width=200,height=200,resizeable,scrollbars');
        this.target = 'formpopup';
    });
    $('.deleteImage').click(function(e){
    	e.preventDefault();
    	$.post("/AdminProducts/deleteImage/"+$(this).attr("image-id")+"/"+$('#productID').val(), function(res) {
    		$('#productImageUpload').html(res);	
    	})
    })
</script>
	<table id="adminProductImageUpload" class="table">

		<?php 
		if($product != "add") {
			foreach ($product['images'] as $image) { ?>
		
		<tr>
			<td><img width="50" height="50" src="/assets/img/products/<?= $image['src'] ?>"></td>
			<td><p><?= $image['src'] ?></p></td>
			<td><p><a href="" class="deleteImage" image-id ="<?= $image['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a></p></td>
			<td>
				<div class="checkbox">
				    <label>
				      <input class="imageCheck" name="image" value="<?= $image['id'] ?>" type="checkbox" <?= ($image['is_main']) ? "checked" : "disabled" ?>>Main
				    </label>
			  </div>
			</td>
		</tr>
		<?php } ?>
		<?php } else {
			foreach ($tempImages as $image) { ?>

		<tr>
			<td><img width="50" height="50" src="/assets/img/products/<?= $image['src'] ?>"></td>
			<td><p><?= $image['src'] ?></p></td>
			<td><?php if ($image['id'] != 9999) { ?>
				<p><a href="" class="deleteImage" image-id ="<?= $image['id'] ?>"><span class="glyphicon glyphicon-trash"></span></a>
				</p>
			</td>
				<?php } ?>
			<td>
				<div class="checkbox">
				    <label>
				      <input class="imageCheck" name="image" value="<?= $image['id'] ?>" type="checkbox" <?= ($image['is_main'] == 2) ? "checked" : "disabled" ?>>Main
				    </label>
			  </div>
			</td>
		</tr>
		<?php } ?>
		<?php } ?>
	</table>
	</form>
	<form id="uploadImage" action="/AdminProducts/uploadImage" method="post" target="_blank" enctype="multipart/form-data">
		<input id="productID" type="hidden" name="productID" value="<?= ($product == 'add') ? 9999 : $product['id'] ?>">
		<label id="fileLabel" for="userfile"> Images </label>
		<input class="form-control" id="userfile" type="file" name="userfile" size="20" />
		<button type="submit" class="btn btn-success">Upload</button>
		<a class ="refresh btn btn-info"> Refresh </a>	
	</form>


