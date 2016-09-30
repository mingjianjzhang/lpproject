<script>
	$('.paginator').click(function(e){
		e.preventDefault();
		$.post("/paginate/"+$(this).attr('category-id')+"/"+$(this).text(), function(res){
			$('#viewingProducts').html(res);
		});

	});
</script>

	<div id="paginating">
		<ul class="pages text-center">
			<?php for ($i=1; $i<=ceil($numItems/9); $i++) { ?>
			<li><a class="paginator" category-id="<?= $catID ?>"><?= $i ?></a></li>
			<?php } ?>
		</ul>
	</div>