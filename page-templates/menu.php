<?php /* Template Name: menu */ ?>
<?php get_header(); ?>

<?php
	$args = array('category_name' => 'menu', 'numberposts' => -1);
	$menu_items = get_posts($args);
	//var_dump(count($menu_items));
	global $wp_query;
	//var_dump($wp_query->post->ID);
?>

<!-- MENU PIZZAS -->

<div class="container">

<header class="major"><h2>Menu</h2>  </header>
	<article class="box post">
<section>
	<div class="row">
<?php foreach ($menu_items as $item){
		echo '<div class="col-4 col-6-medium col-12-small">
					<section class="box">

					<header class="food-menu"><img class="imagePizza" src="' . get_stylesheet_directory_uri() . '/images/pizzapice.png'  . '" />'
					  	.  '<h2>' . $item->post_title . '</h2>'
                . '<p>' . $item->post_content . '</p>'
								. '<div class="size-title"><h3>Mała<br><span class="pizza-size">26cm</span></br></h3> ' . '<div class="kind-pizza">' . get_field('mała_26cm', $item->ID) . '</div></div>'
								. '<div class="size-title"><h3>Duża<br><span class="pizza-size">32cm</span></br></h3> ' . '<div class="kind-pizza">' . get_field('duża_32cm', $item->ID) . '</div></div>'
								. '<div class="size-title"><h3>Gigant<br><span class="pizza-size">45cm</span></br></h3> ' . '<div class="kind-pizza">' . get_field('gigant_45cm', $item->ID) . '</div></div>

						 </header>
					</section>
				</div>';
/*var_dump($item);*/
						};?>
					</div>
					</section>

</div>
</article>


<?php get_footer(); ?>
2
