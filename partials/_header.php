<!doctype html>
<head>
	<?php
		include (get_template_directory_uri() . '/ore/ore_t-head.php');
	?>

	<meta name="author" content="http://github.com/totum">

	<!--[if lt IE 9]>
    	<script src="//cdn.jsdelivr.net/html5shiv/3.7.1/html5shiv-printshiv.min.js"></script>
		<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

<div class="site-header">
	<header role="banner" class="site-banner">
		<a href="<?php echo site_url(); ?>" class="logo">
			<?php
			// Only use h1 for logo on homepage, else span - for SEO.
			if ( is_front_page() ) { ?>
				<h1><?php bloginfo('name'); ?></h1>
			<?php } else { ?>
				<?php bloginfo('name'); ?>
			<?php } ?>
		</a>

		<h2 class="site-tagline"><?php bloginfo('description'); ?></h2>
	</header>

	<nav role="navigation" class="nav-main">
		<input class="nav-main__checkbox" type="checkbox" id="toggle-nav" aria-hidden="true">
		<label class="nav-main__label" for="toggle-nav" aria-hidden="true" onclick></label>
		<?php wp_nav_menu( array( 'container' => false, 'menu_class' => 'nav-main__list', 'theme_location' => 'nav-main' ) ); ?>
	</nav>
</div>