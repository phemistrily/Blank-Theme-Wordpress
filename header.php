<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo ('charset')?>">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
        <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<div class="content">
		<header class="header">
			<a href="<?php echo esc_url( home_url( '/') ); ?>" rel="Strona Główna">
				<img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo" />
			</a>
		</header>
		<nav class="nav">
			<?php wp_nav_menu(); ?>
		</nav>
		