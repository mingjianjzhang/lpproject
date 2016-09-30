<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view("partials/head");
?>
<nav class="navbar navbar-default">
	
		<div class="navbar-header">
			<a class="navbar-brand" href="/dashboard">Dashboard</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/dashboard/orders">Orders</a></li>
				<li><a href="/dashboard/products">Products</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/">Logout of Admin</a></li>
			</ul>
		</div>
	
</nav>
