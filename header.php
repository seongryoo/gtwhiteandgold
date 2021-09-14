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
	<link href="https://fonts.googleapis.com/css2?family=Abel&family=Roboto:wght@400;700&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header>
		<div class="skip-content">
			<a href="#content">Skip to main content</a>
		</div>
		<div class="header">
			<!-- Top Header -->
			<div id="top-header" class="top-background-wrapper">

				<div class="container">
					<div class="row stripes justify-content-between">
						<div class="col-5 col-sm-4 col-md-3 p-0 d-flex flex-row top-angle-wrapper">
							<div class="top-background"></div>
							<div class="top-background-angle"></div>
						</div>
						<div class="col p-0 d-flex flex-row ctn-background">
							<div class="ctn-angle d-none d-lg-block"></div>
							<!--  CTN Logo -->
							<div class="ctn d-none d-lg-block">
								<a href="https://www.gatech.edu/about/creating-next" title="">
									<img src="<?php bloginfo( 'template_url' ); ?>/images/creating_the_next.svg"
									style="max-height:1rem" alt="Creating the Next"/>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="bottom-header bottom-background-wrapper">
				<div class="container row">
					<div class="institute col-5 col-sm-4 col-md-3 p-0 d-flex flex-row gt-logo-wrapper justify-content-between">
						<a href="https://www.gatech.edu/" aria-label="noopener" target="_blank" style="display:block">
							<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							if (has_custom_logo()) {
								echo '<img class="img-fluid gt-logo" src="' . esc_url($logo[0]) . '" alt="Georgia Tech">';
							}
							?>
						</a>
						<div class="gt-logo-angle"></div>
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
