<?php 
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title('Home'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Amatic+SC:wght@400;700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

		<!-- INCLUDE GOOGLE ANALYTICS/TAGMANAGER -->
		<?php if(get_field('gtm_head_script','options')) {
			the_field('gtm_head_script','options');
		} ?>
		<!-- INCLUDE GOOGLE ANALYTICS/TAGMANAGER -->

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
	<!-- header -->
	<header class="header clear scroll" role="banner">

	<div class="superheader">
<?php
	wp_nav_menu( [ 
								'theme_location' 	=> 'superheader-menu', 
								'container_class' 	=> '',
								'menu_class'		=> '',
								'items_wrap'      	=> '<ul>%3$s</ul>',
								'walker' => new Findlay_Menu_Walker()
							] ); 
							?>
	</div>

	<div class="header__wrap">
			<!-- logo -->
			<div class="logo">
				<a href="/">
					<?php 
					$logo = get_field('logo','options'); 
					?>
					<img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title']; ?>" class="logo-img" />
				</a>
			</div>
			<!-- /logo -->

					<div class="header__right">
<!--
						<div class="header__nav-toggle">
							<span></span>
							<span></span>
						</div>
	-->
					</div>

					<!-- nav -->
					<nav class="nav" role="navigation">

						<?php 
							wp_nav_menu( [ 
								'theme_location' 	=> 'header-menu', 
								'container_class' 	=> '',
								'menu_class'		=> '',
								'items_wrap'      	=> '<ul>%3$s</ul>',
								'walker' => new Findlay_Menu_Walker()
							] ); 
					    ?>
					</nav>
					<!-- /nav -->
	</div>
			</header>
			<!-- /header -->
  <!-- smooth scroll -->
  <div id="smooth-wrapper">
    <div id="smooth-content">

		<!-- wrapper -->
		<div class="wrapper">