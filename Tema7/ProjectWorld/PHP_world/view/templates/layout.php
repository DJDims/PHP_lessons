<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Сountries of the world</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link href="public/css/templatemo-style.css" rel="stylesheet">
	<link href="public/css/style.css" rel="stylesheet">
	<link href="public/css/search.css" rel="stylesheet">
	<link href="public/css/login.css" rel="stylesheet">
</head>

<body style="margin-top:50px;">
	<div id="container">
		<div id="header">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a href="./" class="navbar-brand"><strong>Сountries of the World</strong></a>
						<br>
						<hr>
					</div>
					<div class="row">
						<div class="search">
							<form class="form-search" action="search" method="GET">
								<input type="text" name="text" class="form-control input-sm" maxlength="64" placeholder="Enter country name or code">
								<button type="submit" class="btn btn-primary btn-sm">Search</button>
							</form>
						</div>
					</div>
					<ul class="nav navbar-nav navbar-right" id="login">
						<?php
						if (!isset($_SESSION['sessionId'])) {
							echo '<li><a href="login">LogIn</a></li>';
						} else {
							echo '<li><a href="logout">'.$_SESSION['name'].' - LogOut</a></li>';
						}
						?>
					</ul>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right tnav">
							<?php
							echo '<li><a href="./">Главная</a></li>';
							echo '<li><a href="states">Государства</a></li>';
							echo '<li><a href="cities">Города</a></li>';
							echo '<li><a href="continent">Континенты</a></li>';
							if (isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin') {
								echo '<li><a href="countryList">Manage</a></li>';
								echo '<li><a href="cityListManage">ManageCity</a></li>';
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div id="body">
			<section class="templatemo-section ">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-uppercase text-center">
								<?php
								if (isset($title)) {
									echo $title;
								}
								?>
							</h2>
							<hr>
							<?php
							if (isset($content)) {
								echo $content;
							}
							?>
						</div>
					</div>
				</div>
			</section>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy; 2021 Сountries of the world IVKHK JPTV20 Kreivald Dmitrii</p>
						<hr>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>