<?php

/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immo - Servicios
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>



<div id="content" class="site-content servicios">

	<div class="fluid-container">

		<div class="navegacion">
			<?php while (have_rows('amat_servicios')) : the_row(); ?>
				<?php if (get_row_layout() == 'servicios') : ?>
					<?php while (have_rows('link_nom')) : the_row(); ?>
						<?php if (get_row_layout() == 'link') : ?>
							<a class="serv-link" href="<?php the_sub_field('url_link'); ?>"><?php the_sub_field('titulo_del_link'); ?></a>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>

		<h1><?php single_post_title(); ?></h1>

		<div class="banner-servicios">
			<?php if (get_field('frase_banner')) : ?>
				<?php the_field('frase_banner'); ?>
			<?php endif; ?>
		</div>

	</div>
	<!--end container fluid-->


	<div class="container">


		<!--botón sticky-->
		<div class="sticky">
			<a href="#contacto" class="button red for">
				<?php if (get_field('boton_info')) : ?>
					<?php the_field('boton_info'); ?>
				<?php endif; ?>
			</a>
		</div>

		<!--servicios-->
		<div class="section-servicios-principales">

			<?php while (have_rows('amat_servicios')) : the_row(); ?>
				<div id="<?php the_sub_field('url_link'); ?>" class="amat-servicios">
					<div class="myServ" id="<?php the_sub_field('url_link'); ?>">
						<div class="single-service">
							<div class="row">
								<?php if (get_row_layout() == 'servicios') : ?>

									<div class="col-md-6 uno">
										<h2><?php the_sub_field('titulo'); ?></h2>
										<p><?php the_sub_field('texto'); ?></p>
									</div>
									<div class="col-md-6 dos">
										<img class="item" width="100%" alt="servicio" src="<?php the_sub_field('imagen'); ?>" />
									</div>

									<div class="caracteristica">
										<div id="slider" class="row slider">
											<?php while (have_rows('caracteristicas_servicios')) : the_row(); ?>
												<?php if (get_row_layout() == 'car_servicios') : ?>
													<div class="col-md-4">
														<div><img class="icon" alt="icono" src="<?php the_sub_field('icono'); ?>" /></div>
														<h4><?php the_sub_field('titulo'); ?></h4>
														<p><?php the_sub_field('texto'); ?></p>
													</div>
												<?php endif; ?>
											<?php endwhile; ?>
										</div>
									</div>
								<?php endif; ?>
							</div>
							<!--end row-->
						</div>
						<!--end single service-->
					</div>
					<!--end div myServ-->
				</div>
				<!--end amat-servicios-->
			<?php endwhile; ?>

		</div>

		<!-- seccion video -->
		<div class="seccion-video">

			<?php while (have_rows('amat_video')) : the_row(); ?>
				<div id="<?php the_sub_field('url_link'); ?>">
					<div class="myServ" id="<?php the_sub_field('url_link'); ?>">
						<div class="single-service">
							<div class="row">
								<?php if (get_row_layout() == 'video') : ?>
									<div class="col-md-4 uno">
										<h2><?php the_sub_field('titulo'); ?></h2>
										<p><?php the_sub_field('texto'); ?></p>
									</div>
									<div class="col-md-8 dos">
										<?php the_sub_field('video'); ?>
									</div>
								<?php endif; ?>
							</div>
							<!--end row-->
						</div>
						<!--end single service-->
					</div>
					<!--end div myServ-->
				</div>
				<!--end amat-servicios-->
			<?php endwhile; ?>
		</div>

		<!--form-->
		<div id="contacto" style="scroll-margin-top: 100px">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="card-form">
						<div class="form">
							<div class="form ">
								<div class="form "><?php echo do_shortcode('[contact-form-7 id="16510" title="contact form servicios"]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>

		<!--contador prefooter-->
		<div class="col-md-12 pre-footer">
			<div>

				<div id="contadores" class="row contadores">

					<div class="col-md-4">
						<div class="contador">
							<h3 class="num">
								<script>
									var f1 = new Date();
									var f2 = f1.getDate() + "/" + (f1.getMonth() + 1) + "/" + f1.getFullYear();
									var f3 = '01/10/1948';

									restaFechas = function(f2, f3) {
										var aFecha1 = f2.split('/');
										var aFecha2 = f3.split('/');
										var fFecha1 = Date.UTC(aFecha1[2], aFecha1[1] - 1, aFecha1[0]);
										var fFecha2 = Date.UTC(aFecha2[2], aFecha2[1] - 1, aFecha2[0]);
										var dif = fFecha2 - fFecha1;
										var dias = Math.floor(dif / (1000 * 60 * 60 * 24));
										return dias;
									}
									document.write(restaFechas(f3, f2));
								</script>
							</h3>

							<?php if (get_field('frase_1')) : ?>
								<p class="cantidad"><?php the_field('frase_1'); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contador">
							<?php if (get_field('numero_de_dias_2')) : ?>
								<h3 class="num"><?php the_field('numero_de_dias_2'); ?></h3>
							<?php endif; ?>
							<?php if (get_field('frase_2')) : ?>
								<p class="cantidad"><?php the_field('frase_2'); ?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contador">
							<?php if (get_field('numero_de_dias_3')) : ?>
								<h3 class="num"><?php the_field('numero_de_dias_3'); ?></h3>
							<?php endif; ?>
							<?php if (get_field('frase_3')) : ?>
								<p class="cantidad"><?php the_field('frase_3'); ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end contador-->

	</div>
	<!--end container-->
</div>

<script>
	//SOLO mobile slick slider
	mobileOnlySlider(".slider", true, false, 767);

	function mobileOnlySlider($slidername, $dots, $arrows, $breakpoint) {
		var slider = $($slidername);
		var settings = {
			mobileFirst: true,
			dots: $dots,
			arrows: $arrows,
			responsive: [{
				breakpoint: $breakpoint,
				settings: "unslick"
			}]
		};

		slider.slick(settings);

		$(window).on("resize", function() {
			if ($(window).width() > $breakpoint) {
				return;
			}
			if (!slider.hasClass("slick-initialized")) {
				return slider.slick(settings);
			}
		});
	}
	//end

	//scroll botón flotante contáctanos
	jQuery(document).ready(function($) {
		$(window).scroll(function() {
			var heigthformfooter = $(".form ").innerHeight();
			var formfooter = $(".form ").offset().top - heigthformfooter;
			if ($(window).scrollTop() >= formfooter) {
				$('.button.red.for').fadeOut();
			} else {
				$('.button.red.for').fadeIn();
			}
		});
	});




	//color del link cuando está activo
	jQuery(document).ready(function() {

		jQuery(".serv-link").click(function() {
			jQuery(".serv-link").removeClass('active');
			jQuery(this).addClass('active');
		});

	});
</script>


<?php
get_footer();
