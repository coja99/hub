<?php
$cart_count = 0;
if (!empty($_SESSION["cart"])) {
	$cart_count = count(array_keys($_SESSION["cart"]));
}
if (!empty($_SESSION["cart2"])) {
	$cart_count += count(array_keys($_SESSION["cart2"]));
}
?>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<a class="navbar-brand" href="index.php"><img src="images/logo.png"></a>
				<li class="nav-item"><a href="index.php" class="nav-link">Početna Strana</a></li>
				<li class="nav-item"><a href="index.php#o-nama" class="nav-link">O nama</a></li>


				<li class="nav-item"><a href="jelovnik.php" class="nav-link">Jelovnik</a></li>
				<li class="nav-item"><a href="kartapica.php" class="nav-link">Karta pića</a></li>
				<li class="nav-item"><a href="kontakt.php" class="nav-link">Kontakt</a></li>
				<li class="nav-item cart"><a href="cart.php" class="nav-link"><span class="icon icon-shopping_cart"></span>
				<?php 
				if ($cart_count!=0) {
				echo "<span class=\"bag d-flex justify-content-center align-items-center\"><small> $cart_count </small></span>";
				}
				?>
				</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
