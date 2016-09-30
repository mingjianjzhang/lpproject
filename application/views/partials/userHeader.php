<body class="fullBackground">
	<nav class="navbar navbar-inverse ">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">Bootcamp Supply</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="" data-toggle="modal" data-target="#adminlogin"></a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/goToCart">Shopping Cart (<?= count($this->session->cart) ?>) <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
 

	<div id="adminlogin" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Please enter your admin username and password:</h4>
				</div>
				<div class="modal-body">
					<form action="/dashboard" method="post">
						Admin: <input type="text" name="name">
						Password: <input type="password" name="password">
						<input type="submit" class="btn btn-default" value="Login">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Nevermind, I'm not an admin!</button>
				</div>
			</div>
		</div>
	</div>