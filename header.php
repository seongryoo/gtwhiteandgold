<?php
/**
 * Header file for the GT White and Gold WordPress theme.
 *
 * @package GT_White_and_Gold
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta name="apple-mobile-web-app-capable" content="yes" >
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link type="text/css" rel="stylesheet" href="https://use.typekit.net/ela2mmm.css?family=Din:400,400italic,600,600italic,700,700italic" media="all" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,400,400italic,500,500italic,700,700italic" media="all" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" media="all" />
	<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" media="all" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<div class="skip-content">
			<a href="#content">Skip to main content</a>
		</div>
		<div class="header">
			<div class="container row">
				<div class="institute gt-logo-wrapper">
					<a href="https://www.gatech.edu/" aria-label="noopener" target="_blank" style="display:block">
						<?php
							$logo_url = get_template_directory_uri() . "/images/logo_white.png";
							echo '<img class="img-fluid gt-logo" src="' . esc_url($logo_url) . '" alt="Georgia Tech">';
						?>
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

		</div>
		<div class="below-header container program">
			<a href="<?php bloginfo('url') ?>">
				<?php bloginfo('name') ?>
			</a>
		</div>

		<nav aria-label="Main" class="navbar navbar-expand-lg navbar-light collapse navbar-collapse" id="navbarNav">
			<div class="container">
				<?php 
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_class' => 'navbar-nav',
						'li_class'  => 'nav-item'
					)
				);
				?>
			</div>
		</nav>
	</header>
