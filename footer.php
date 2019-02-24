
<?php
	$args = array('category_name' => 'Zdjecie w stopce');
	$menu_items = get_posts($args);
	//var_dump($menu_items);
?>
			<!-- Footer -->

				<section id="footer" href="#footer">
					<div class="container">
						<div class="row">
								<div class="col-12">
							<header>
								<h1>Pizzeria Lorem Ipsum</h1>
							</header>
						</div>
								<div class="col-4 col-12-medium">
							<section>

									<ul class="social">
										<li><a class="icon fa fa-facebook-square" href="#"><span class="label"></span></a></li>
										<li><a class="icon fa fa-twitter" aria-hidden="true" href="#"><span class="label"></span></a></li>
                  	<li><a class="icon fa fa-youtube" aria-hidden="true" href="#"><span class="label"></span></a></li>
									</ul>


									<ul class="contact">
										<li>
											<h3>Addres</h3>
											<p>
												Pizzeria Lorem Ipsum</br>
                       ul. Ocean Indyjski 2</br>
											 00-000 Ocean</br>
											</p>
										</li>
										<li>
											<h3>Mail</h3>
											<p><a href="#">kontakt@pizzeria.pl</a></p>
										</li>
										<li>
											<h3>Telefon</h3>
											<p> 000 000 000</p>
										</li>
										<li>
											<h3>Godziny</br> otwarcia</h3>
											<p> pon. – czw.: 11:00 – 22:00</br>
												piąt. – sob.: 11:00 – 23:00</br>
												niedz.: 12:00 – 22:00</br>
												</p>
										</li>
									</ul>
								</section>
							</div>

							<?php foreach ($menu_items as $item){
							echo	'<div class="col-8 col-12-medium col-12-small">
								<section class="box2">
									<div class="imagefooter"><img src="' . get_field("zdjecie_w_stopce", $item->ID) . '" />' . '</div>
							</section>
							</div>';
									};?>

							<div class="col-12">

								<!-- Copyright -->
									<div id="copyright">
										<ul class="links">
											<li>&copy; Untitled. All rights reserved.</li><li>Design: Sylwia</a></li>
										</ul>
										<a id="back2Top" title="Back to top" href="#"></a>
									</div>

							</div>
						</div>
					</div>
				</section>

			</div>



	<script src="<?php echo get_stylesheet_directory_uri() . '/js/jquery.min.js' ?>" /></script>
		<!-- Scripts -->
					<script src="<?php echo get_stylesheet_directory_uri() . '/js/jquery.min.js' ?>"></script>
					<script src="<?php echo get_stylesheet_directory_uri() . '/js/jquery.dropotron.min.js' ?>"></script>
					<script src="<?php echo get_stylesheet_directory_uri() . '/js/browser.min.js' ?>"></script>
					<script src="<?php echo get_stylesheet_directory_uri() . '/js/breakpoints.min.js' ?>"></script>
					<script src="<?php echo get_stylesheet_directory_uri() . '/js/util.js' ?>"></script>
					<script src="<?php echo get_stylesheet_directory_uri() . '/js/main.js' ?>"></script>

		<?php	wp_footer(); ?>

    </body>
</html>
