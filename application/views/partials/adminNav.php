<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
?>
<nav class="navbar navbar-default">
	<div class="container">
		<div class="navbar-header">
			<a class="navbar-brand" href="">Dashboard</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="">Orders</a></li>
				<li><a href="">Products</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="">Logout</a></li>
			</ul>
		</div>
	</div>
</nav>
