<!DOCTYPE html>
<body class="homepage is-preload">
	<div id="page-wrapper">
<html <?php language_attributes(); ?>>
	<head>
   <title><?php wp_title(''); bloginfo( 'name' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css' ?>" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/xampp/htdocs/wordpress2/wp-content/nggallerystyle.css' ?>" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
		integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
		<link rel='stylesheet' id='fontawesome-css' href='https://use.fontawesome.com/releases/v5.0.1/css/all.css?ver=4.9.1' type='text/css' media='all' />



	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<body class="homepage is-preload">
			<div id="page-wrapper">
	<!-- Header -->
		<section id="header">

			<!-- Logo -->
				<h1><a href="index.html<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></h1>

				<!-- Nav -->
				<?php	wp_nav_menu( array(
						 'theme_location' => 'primary',
						 'container' => 'nav',
						 'container_id' => 'nav',
				 ) );
				?>

				<nav id="nav"></nav>


			<!-- Banner -->
				<section id="banner">
					<header>
						<?php
							while ( have_posts() ) : the_post();
								echo "<h2>" . get_field("slogan_big") . "</h2>"
								. "<p>" . get_field('slogan_description') . "</p>";
							endwhile
						?>
					</header>
				</section>

			</body>
