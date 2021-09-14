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
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
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
				<div class="col program">
					<a href="<?php bloginfo('url') ?>">
						<?php bloginfo('name') ?>
					</a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
			</div>

		</div>

		<nav aria-label="Main" class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<div class="collapse navbar-collapse" id="navbarNav">
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
			</div>
		</nav>
	</header>
