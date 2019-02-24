<?php get_header(); ?>


<!-- Main -->
	<div id="main">
<h1 href="<?php echo the_permalink(); ?> "><?php the_title(); ?> </a></h1>
<?php
	// TO SHOW THE PAGE CONTENTS
	/*while ( have_posts() ) : the_post(); //Because the_content() works only inside a WP Loop -->
		echo the_content();
	endwhile*/
?>

<?php get_footer(); ?>
