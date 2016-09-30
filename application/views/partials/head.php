<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>BootCamp Supply</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Jquery Theme -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/hot-sneaks/jquery-ui.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/css/select2.css" rel="stylesheet"/>
	
	<!-- Personal CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">
	<!-- Less -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
	<!-- Jquery --> 
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Jquery UI -->
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.0/js/select2.js"></script>
	<script src="/assets/js/app.js"></script>
	

	<!-- Bootstrap JS -->

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){


		$('.status').change(function() {
			console.log($(this).parents('form'));
			$.post('/UserOrders/updateOrder', $(this).parents('form').serialize(), function(res) {

			});
	
		})


		
	})

		 

	</script>
</head>