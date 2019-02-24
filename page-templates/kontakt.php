<?php /* Template Name: kontakt */ ?>
<?php get_header(); ?>
<?php
	$args = array('category_name' => 'Zdjecie w stopce');
	$menu_items = get_posts($args);
	//var_dump($menu_items);
?>
<!-- Footer -->
<?php get_footer(); ?>
