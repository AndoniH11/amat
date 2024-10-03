<?php

/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Trabajar en Amat
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div id="content" class="site-content trabajar-amat">
	<div class="fluid-container">
		<div class="banner">
			<?php if (get_field('banner_imagen')) : ?>
				<img class="banner-imagen" style="max-width: 100%;" src="<?php the_field('banner_imagen'); ?>" />
			<?php endif; ?>
		</div>
	</div>
	<!--end container fluid-->

	<div class="container">
		<div class="row trabajar">
			<div class="col-md-8">
				<?php if (get_field('titulo')) : ?>
					<h3><?php the_field('titulo'); ?></h3>
				<?php endif; ?>
				<?php if (get_field('texto')) : ?>
					<?php the_field('texto'); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-4">
			</div>
		</div>
		<div class="seccion-trabajo-testimonios">
			<div class="row">
				<div class="col-md-6 trabajo">
					<?php while (have_rows('seccion_trabaja')) : the_row(); ?>
						<div class="">
							<?php if (get_row_layout() == 'trabaja_nosotros') : ?>
								<h2 class="titulo-seccion"><?php the_sub_field('titulo_trabaja'); ?></h2>
								<p><?php the_sub_field('subtitulo_trabaja'); ?></p>
								<div class="accordion accordion-flush" id="accordionFlushExample">
									<div class="accordion-item">
										<h2 class="accordion-header" id="flush-headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
												<?php the_sub_field('tab_1_trabaja'); ?>
											</button>
										</h2>
										<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">
												<?php the_sub_field('tab_1_contenido'); ?>
											</div>
										</div>
									</div>
									<div class="accordion-item">
										<h2 class="accordion-header" id="flush-headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
												<?php the_sub_field('tab_2_trabaja'); ?>
											</button>
										</h2>
										<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
											<div class="accordion-body">
												<?php the_sub_field('tab_2_contenido'); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="send-cv">
									<p><?php the_sub_field('texto_cv'); ?></p>
									<a href="mailto:trinitat.ropero@amatimmo.cat"><?php the_sub_field('email'); ?></a>
								<?php endif; ?>
								</div>
						</div>
					<?php endwhile; ?>
				</div>
				<div class="col-md-6 testimonios">
					<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						<h2 class="titulo-seccion"><?php esc_html_e('Amat Experiencies', 'amat-immo'); ?></h2>

					<?php } elseif (ICL_LANGUAGE_CODE == 'ca') { ?>
						<h2 class="titulo-seccion"><?php esc_html_e('Experiències Amat', 'amat-immo'); ?></h2>

					<?php } elseif (ICL_LANGUAGE_CODE == 'es') { ?>
						<h2 class="titulo-seccion"><?php esc_html_e('Experiencias Amat', 'amat-immo'); ?></h2>

					<?php } ?>
					<!-- testimonios-->
					<div>
						<?php
						$args = array('post_type' => 'testimonios', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order');

						$the_query = new WP_Query($args);
						?>

						<?php if ($the_query->have_posts()) : ?>
							<div id="slider-testimonios" class="row dots">
								<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
									<div class="testimonions">
										<div class="testimonio-img">
											<?php if (get_field('imagen')) : ?>
												<img class="testimonio-img-principal" src="<?php the_field('imagen'); ?>" />
											<?php endif; ?>
										</div>
										<h3 class="testimonio-nombre"><?php the_field('nombre'); ?></h3>
										<?php if (get_field('cargo')) : ?>
											<span class="job-post"><?php the_field('cargo'); ?></span>
										<?php endif; ?>
										<?php if (get_field('opinion')) : ?>
											<div class="testimonio-description"><?php the_field('opinion'); ?></div>
										<?php endif; ?>
									</div>
								<?php endwhile; ?>
							</div>
							<?php wp_reset_postdata(); ?>
						<?php endif; ?>
					</div>
					<!--end testimonios-->

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
</div>
<script>
	jQuery(document).ready(function() {

		jQuery('#slider-testimonios').slick({
			dots: false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			slidesToScroll: 1,
			responsive: [{
					breakpoint: 1024,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						infinite: true,
						dots: true
					}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
	});
</script>
<?php
get_footer();
