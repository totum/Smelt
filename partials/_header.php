<?php include (TEMPLATEPATH . '/ore/ore_template-head.php'); ?>
<body>
	<header class="site-header  lc">
		<h1 class="site-logo"><a href="http://www.aleo.dk"><?php bloginfo('name'); ?></a></h1>
		<h2 class="site-tagline"><?php bloginfo('description'); ?></h2>
	</header>
	<nav class="main-nav  lc">
		<?php wp_nav_menu( array( 'container' => false ) ); ?>
	</nav>