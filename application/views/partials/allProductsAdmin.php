
<table class="table">
			<tr>
				<th>Picture</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inventory Count</th>
				<th>Quantity Sold</th>
				<th>Action</th>
			</tr>
			<?php foreach ($products as $product) { ?>
			<tr>
				<td><img width="50" height="50" src="/assets/img/products/<?= $product['img']?>"></td>
				<td><?= $product['id']?></td>
				<td><?= $product['name']?></td>
				<td><?= $product['inventory']?></td>
				<td><?= $product['sold'] ?></td>
				<td>
					<a class="addEdit" product-id="<?= $product['id'] ?>" data-toggle="modal" data-target="#editAddProductModal">Edit</a>
					<a href="/deleteProduct/<?= $product['id'] ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
</table>

