<!doctype html>
<head>
	<?php
		include (TEMPLATEPATH . '/ore/ore_t-head.php');

		/*
		Target IE browsers specifically. Place outside php tags if needed.
		<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
		<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
		<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
		<!--[if IE 9 ]>    <body class="ie9"> <![endif<]-->
		<!--[if (gt IE 9)|!(IE)]><!-->  <!--<![endif]-->
		*/

		// Add any other head stuff here, ie. google analytics, misc. styles, etc.
	?>
</head>
<body>
	<header class="site-header  lc">
		<h1 class="site-logo"><a href="http://www.aleo.dk"><?php bloginfo('name'); ?></a></h1>
		<h2 class="site-tagline"><?php bloginfo('description'); ?></h2>
	</header>
	<nav class="main-nav  lc">
		<?php wp_nav_menu( array( 'container' => false ) ); ?>
	</nav>