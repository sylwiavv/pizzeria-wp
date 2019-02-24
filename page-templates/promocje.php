<?php /* Template Name: promocje */ ?>
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

          <!-- Promocje -->
          <div class="container">
          <header class="major"><h2>Aktualne promocje</h2>  </header>
          <article class="box post">
            <section>
            <div class="row">
          <?php foreach ($menu_items as $item){
              echo '<div class="col-4 col-6-medium col-12-small">
                    <section class="box">
                      <a href="#" class="image featured"><img width="340px" heigt="236,35px" src="' . get_field("image", $item->ID) . '" />' . '</a>
                      <header>'
                          .  '<h1>' . $item->post_title . '</h1>'

                            . '<h3>Cena przed promocją:' . get_field('przed_promocja',  $item->ID) . '</h3>'
                            . '<h3>Cena po promocji:' . get_field('po_promocji', $item->ID) . '</h3>
                       </header>'
                      . '<p>' . $item->post_content . '</p>
                    <footer>
                        <ul class="actions">
                          <li><a href="#" class="button alt">Find out more</a></li>
                        </ul>
                      </footer>
                    </section>
                  </div>';
                      };?>
                    </div>
                    </section>
                  </div>


<?php get_footer(); ?>
