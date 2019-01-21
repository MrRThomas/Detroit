<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
	
</head>
<body>
	<div class="wrap">
		
		<header class="main-header">
			<div class="container">
				 <h1 color="#fce7db"><?php bloginfo('name'); ?></h1>
				<?php
				
				    $defaults = array(
				      'container' => false,
				      'theme_location' => 'primary-menu',
				      'menu_class' => 'main-nav'
				    );
				    
				    wp_nav_menu( $defaults );
				
				?>
				
			</div><!-- ends header container -->
			
		</header>