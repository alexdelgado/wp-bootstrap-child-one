<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<header id="js-primary-nav" class="primary-nav navbar navbar-expand-lg navbar-light">
			<button class="btn--sm btn--transparent d-lg-none" type="button" data-toggle="collapse" data-target="#js-navbar" aria-controls="js-navbar" aria-expanded="false" aria-label="Toggle navigation">
				<span class="lni-menu"></span>
			</button>
			<nav id="js-navbar" class="collapse navbar-collapse">
				<?php
					wp_nav_menu(
						array(
							'menu_class'     => 'nav',
							'menu_id'        => false,
							'container'      => false,
							'walker'         => Child_One_Walker_Nav_Menu::singleton(),
							'theme_location' => 'utility',
							'items_wrap'     => '<ul class="%2$s">%3$s</ul>'
						)
					);
				?>
			</nav>
		</header>
