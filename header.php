<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ethbinary</title>
	<link rel="icon" type="image/png" href="img/favicon.png" />
	<!-- -->
	<link rel="stylesheet" href="css/app.css">
	<link rel="stylesheet" href="css/custom.css">
	<!--  -->
</head>

<body>

	<header class="container-fluid">

		<div class="row">

			<div class="logo col-sm-6 col-md-3">
				<div class="imgLiquid imgLiquidNoFill">
					<img src="img/ethbinary-logo.png" alt="">
				</div>
			</div>
			<?php
			// $menu_item = array('Trade', 'FAQ', 'About Us', 'Contract', 'Join our ICO', 'Whitepaper');//original order
			$menu_item = array('About Us','Trade', 'Contract', 'Join our ICO', 'Whitepaper', 'FAQ');
			$menu_item_link = array('#', '#', '#', '#', '#', '#');
			$active = 0;//meanwhile to test active class
			?>
			<nav class="navbar navbar-expand-lg col-sm-6 col-md-9">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav mr-auto col-12">
						<?php for ($i=0; $i < 6 ; $i++):?>

							<li class="col-md-2 align-self-center">
								<a class="<?php echo ($i === $active ? 'active':null);?>" href="<?php echo $menu_item_link[$i]?>">
									<?php echo $menu_item[$i] ?>
								</a>
							</li>

						<?php endfor; ?>
					</ul>
				</div>

			</nav>

		</div>

	</header>

	<main class="main container">
