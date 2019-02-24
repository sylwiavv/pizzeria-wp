 <?php /* Template Name: galeria*/ ?>
<?php get_header(); ?>
<header class="major"><h2><?php the_title(); ?></h2></header>
<article class="box post">
<?php
  // TO SHOW THE PAGE CONTENTS
  while ( have_posts() ) : the_post(); //Because the_content() works only inside a WP Loop -->
    echo the_content();
  endwhile
  ?>
</article>
<?php	get_footer(); ?>
