<?php

/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Home block WIDGET
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
	<!--tipography-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<!--tabs libreria-->
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>



	<script src="../path-to/jquery.min.js"></script>
	<script src="../path-to/multislider.min.js"></script>

	<base href="https://www.amatimmobiliaris.com" target="_PARENT">

</head>

<?php
$navbar_scheme   = get_theme_mod('navbar_scheme', 'navbar-light bg-light'); // Get custom meta-value.
$navbar_position = get_theme_mod('navbar_position', 'static'); // Get custom meta-value.

$search_enabled  = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div id="content" class="site-content home-block">
		<div class="fluid-container">

		</div>
		<!--end container fluid-->

		<div class="container">
			<div class="row titulo-principal">

				<div class="col-md-12">
					<?php if (get_field('titulo')) : ?>
						<h4><?php the_field('titulo'); ?></h4>
					<?php endif; ?>
				</div>
			</div>




			<!--slider grid-->
			<!--<div class="row grid">
					<?php while (have_rows('grid')) : the_row(); ?>
						<?php if (get_row_layout() == 'grid_1') : ?>
						<div class="col-md-6">
							<div class="foto">
								<a href="<?php the_sub_field('url'); ?>" class="url">
									<img class="img" src="<?php the_sub_field('imagen'); ?>" />
									<p><?php the_sub_field('texto'); ?></p>
								</a>
							</div>
						</div>
						<?php endif; ?>
					<?php endwhile; ?>
			</div>-->
			<!--end slider-->

			<!--slider-->
			<div id="slider">
				<?php while (have_rows('grid')) : the_row(); ?>
					<?php if (get_row_layout() == 'grid_1') : ?>
						<div class="col-md-6">
							<div class="foto">
								<a href="<?php the_sub_field('url'); ?>" class="url">
									<img class="img" src="<?php the_sub_field('imagen'); ?>" />
									<p><?php the_sub_field('texto'); ?></p>
								</a>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>

			<!--
			<div class="btn-slider">
				<a href="<?php the_field('btn_url'); ?>" class="button gray">
				<?php if (get_field('boton_slider')) : ?>
					<?php the_field('boton_slider'); ?>
				<?php endif; ?>
				</a>
			</div> -->


			<!--end slider-->

			<!--slider servicios-1-->
			<div class="servicios-1">
				<div class="titulo-servicios-1">
					<?php if (get_field('titulo_servicios')) : ?>
						<h3><?php the_field('titulo_servicios'); ?></h3>
					<?php endif; ?>
				</div>
				<div id="slider-3" class="row servicios-1">
					<?php while (have_rows('slide_servicios')) : the_row(); ?>
						<?php if (get_row_layout() == 'servicios') : ?>
							<div class="servicios col-md-4">
								<h3 class="servicios-title"><?php the_sub_field('titulo_servicio'); ?></h3>
								<?php the_sub_field('texto'); ?>

								<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
									<a href="<?php the_sub_field('boton'); ?>" class="url">
										<?php esc_html_e('See more', 'amat-immo'); ?>
									</a>
								<?php } elseif (ICL_LANGUAGE_CODE == 'ca') { ?>
									<a href="<?php the_sub_field('boton'); ?>" class="url">
										<?php esc_html_e('Veure més', 'amat-immo'); ?>
									</a> 
								<?php } elseif (ICL_LANGUAGE_CODE == 'es') { ?>
									<a href="<?php the_sub_field('boton'); ?>" class="url">
										<?php esc_html_e('Ver más', 'amat-immo'); ?>
									</a>
								<?php } ?>

								<a style="display: none" href="<?php the_sub_field('boton'); ?>" class="url">
									<?php esc_html_e('Ver más', 'amat-immo'); ?>
								</a>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<div class="btn-slider">
					<a href="<?php the_field('btn_url'); ?>" class="button gray">
						<?php if (get_field('boton_slider3')) : ?>
							<?php the_field('boton_slider3'); ?>
						<?php endif; ?>
					</a>
				</div>
			</div>
			<!--end slider servicios-1-->

			<!--formularios-->
			<div class="formularios">
				<div id="slider-4" class="row">
					<div class="col-md-6 col-sm-12">
						<?php if (get_field('titulo_formulario_izquierda')) : ?>
							<h3><?php the_field('titulo_formulario_izquierda'); ?></h3>
						<?php endif; ?>
						<?php if (get_field('texto_formulario_izquierda')) : ?>
							<h6 class="form-text"><?php the_field('texto_formulario_izquierda'); ?></h6>
						<?php endif; ?>
						<?php echo do_shortcode(get_field('formulario_izquierda')); ?>
					</div>
					<div class="col-md-6 col-sm-12">
						<?php if (get_field('titulo_formulario_derecha')) : ?>
							<h3><?php the_field('titulo_formulario_derecha'); ?></h3>
						<?php endif; ?>
						<?php if (get_field('texto_formulario_derecha')) : ?>
							<h6 class="form-text"><?php the_field('texto_formulario_derecha'); ?></h6>
						<?php endif; ?>
						<?php echo do_shortcode(get_field('formulario_derecha')); ?>
					</div>
				</div>
			</div>
			<!--formularios-->

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
		jQuery(document).ready(function() {
			jQuery('#slider-3').slick({
				infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3,
				dots: true,
				arrows: false,
				draggable: true,
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
							slidesToScroll: 1,
							infinite: true,
							dots: true
						}
					},
					{
						breakpoint: 480,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true,
							dots: true
						}
					}
				]
			});
			// jQuery('#slider-4').slick({
			// 	infinite: true,
			// 	slidesToShow: 1,
			// 	slidesToScroll: 1,
			// 	dots: false,
			// 	arrows: true,
			// 	draggable: true,
			// 	responsive: [{
			// 			breakpoint: 1024,
			// 			settings: {
			// 				slidesToShow: 1,
			// 				slidesToScroll: 1,
			// 				infinite: true,
			// 				dots: true
			// 			}
			// 		},
			// 		{
			// 			breakpoint: 600,
			// 			settings: {
			// 				slidesToShow: 1,
			// 				slidesToScroll: 1,
			// 				infinite: true,
			// 				dots: true
			// 			}
			// 		},
			// 		{
			// 			breakpoint: 480,
			// 			settings: {
			// 				slidesToShow: 1,
			// 				slidesToScroll: 1,
			// 				infinite: true,
			// 				dots: true
			// 			}
			// 		}
			// 	]
			// });
			jQuery('#slider').slick({
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				dots: true,
				arrows: false,
				draggable: true
			});
		});
	</script>