<?php /* Template Name: promocje2*/ ?>
<?php get_header(); ?>

					<!-- Intro -->
          <?php
            // TO SHOW THE PAGE CONTENTS
            while ( have_posts() ) : the_post(); //Because the_content() works only inside a WP Loop -->
              echo the_content();
            endwhile
          ?>
          <?php
          	$args = array('category_name' => 'promocje');
          	$menu_items = get_posts($args);
          	//var_dump($menu_items);
          ?>
          <?php foreach($menu_items as $item){
          	echo "<div><h1>" . $item->post_title . "</h1>"
            . "<h2>Cena XXL:" . get_field("price_xxl", $item->ID) . "</h2>"
          		. "<p>" . $item->post_content . "</p></div>";
          		var_dump($item);
          };?>


          <?php foreach ($menu_items as $item){
          echo '<div><h1>' . $item->post_title . '</h1>'
          . '<h3>Cena przed promocją:' . get_field('cena_przed',  $item->ID) . '</h3>'
          . '<h3>Cena przed promocją:' . get_field('cena_po', $item->ID) . '</h3>'
          . '<p>' . $item->post_content . '</p>
          </div>';
          };?>

                    <!-- Promocje -->

                  <?php foreach ($menu_items as $item){
                    echo '<section>
                      <header class="major">
                        <h2>My Portfolio</h2>
                      </header>
                      <div class="row">
                        <div class="col-4 col-6-medium col-12-small">
                          <section class="box">
                            <a href="#" class="image featured"><img src="' . get_field('zdjecie', $item->ID) . '" alt="" /></a>
                            <header>
                                   <h1>' . $item->post_title . '</h1>'
                                  . '<h3>Cena przed promocją:' . get_field('cena_przed',  $item->ID) . '</h3>'
                                  . '<h3>Cena przed promocją:' . get_field('cena_po', $item->ID) . '</h3>'
                                  . '<p>' . $item->post_content . '</p>'
                            . '</header>
                            <p>tresc postu</p>
                            <footer>
                              <ul class="actions">
                                <li><a href="#" class="button alt">Find out more</a></li>
                              </ul>
                            </footer>
                          </section>
                        </div>
                      </div>
                    </section>'
          };?>

<?php get_footer(); ?>
