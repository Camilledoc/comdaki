
<!doctype html>
<html lang="fr">
<head>
	<meta charset="uft-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<script src="https://kit.fontawesome.com/4d354bce74.js" crossorigin="anonymous"></script>
</head>

<header>
	<div class="header">
		<a href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_template_directory_uri() . '\assets\images\favicon.webp'; ?> " alt="favicon comdaki">
		</a>

	<a href="#menu-toggle" id="nav-buger">
		<span></span>
		<span></span>
		<span></span>
	</a>

	<nav id="menu-toggle">
		<?php /*affiche mon menu header */
		wp_nav_menu([
			'theme_location' => 'main-menu'
		]); 
		?>
	</nav>
	</div>
</header>

<body>