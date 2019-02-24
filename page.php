<?php get_header(); ?>
<!-- Content -->

<header class="major"><h2><?php the_title(); ?></h2>  </header>

<article class="box post">
<div class="container">
<?php
	// TO SHOW THE PAGE CONTENTS WAY 1 (prefferd for posts)
	/*while ( have_posts() ) : the_post(); //Because the_content() works only inside a WP Loop -->
		echo the_content();
	endwhile*/
	// TO SHOW THE PAGE CONTENTS WAY 2 (probalby better for pages)
	global $wp_query;
	$page = get_post($wp_query->post->ID);
	echo $page->post_content;
?>
</div>
</article>

<script>
	// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
	if (document.body.scrollTop > 140 || document.documentElement.scrollTop > 140) {
		document.getElementById("back2Top").style.display = "block";
	} else {
		document.getElementById("back2Top").style.display = "none";
	}
}

</script>

<?php get_footer(); ?>
