<?php
/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Home block amat
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="content" class="site-content home-block">
		<div class="fluid-container">
			
		</div><!--end container fluid-->
			
		<div class="container">
			<div class="row titulo-principal">
				
				<div class="col-md-12">
					<?php if( get_field('titulo') ): ?>
							<h4><?php the_field('titulo'); ?></h4>
					<?php endif; ?>
				</div>
			</div>




			<!--slider grid-->
			<!--<div class="row grid">
					<?php while( have_rows('grid') ): the_row(); ?>
						<?php if( get_row_layout() == 'grid_1' ): ?>
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
				<?php while( have_rows('grid') ): the_row(); ?>
						<?php if( get_row_layout() == 'grid_1' ): ?>
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
			<div class="btn-slider">
				<a href="<?php the_field('btn_url'); ?>" class="button gray">
				<?php if( get_field('boton_slider') ): ?>
					<?php the_field('boton_slider'); ?>
				<?php endif; ?>
				</a>
			</div>
			<!--end slider-->


			<!--slider servicios-1-->
			<div class="servicios-1">
				<div class="titulo-servicios-1">
					<?php if( get_field('titulo_servicios') ): ?>
						<h3><?php the_field('titulo_servicios'); ?></h3>
					<?php endif; ?>
				</div>
				<div id="slider-3" class="row servicios-1">
					<?php while( have_rows('slide_servicios') ): the_row(); ?>
						<?php if( get_row_layout() == 'servicios' ): ?>
							<div  class="servicios col-md-4">
								<h3 class="servicios-title"><?php the_sub_field('titulo_servicio'); ?></h3>
								<?php the_sub_field('texto'); ?>
								<a href="<?php the_sub_field('boton'); ?>" class="url"><?php esc_html_e( 'Ver más', 'amat-immo' ); ?> <span class="arrow">&rarr;</span></a>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<div class="btn-slider">
				<a href="<?php the_field('btn_url'); ?>" class="button gray">
				<?php if( get_field('boton_slider3') ): ?>
					<?php the_field('boton_slider3'); ?>
				<?php endif; ?>
				</a>
			</div>
			</div><!--end slider servicios-1-->

			<!--slider servicios-2-->
			<div class="servicios-slide">
				<div id="slider-4" class="row servicios-2">
					<?php while( have_rows('slide_servicios_2') ): the_row(); ?>
						<?php if( get_row_layout() == 'servicios' ): ?>
							<div  class="col-md-6 ">
								<h3><?php the_sub_field('titulo_servicio_2'); ?></h3>
								<div  class="row">
									<div id="servicios-txt" class="col-md-6 left txt">
										<?php the_sub_field('texto'); ?>
										<a href="<?php the_sub_field('boton'); ?>" class="url"><?php esc_html_e( 'Ver más', 'amat-immo' ); ?> <span class="arrow">&rarr;</span></a>
									</div>
									<div class="col-md-6 right">
										<img class="img" src="<?php the_sub_field('imagen'); ?>" />
									</div>
								</div>
							</div>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
			</div><!--end slider servicios-1-->
			
			<!--contador prefooter-->
			<div class="col-md-12 pre-footer">
						<div>
							
							<div id="contadores" class="row contadores">
								
								<div class="col-md-4">
									<div class="contador">
										<h3 class="num">
											<script>
											var f1 = new Date();
											var f2 = f1.getDate() + "/" + (f1.getMonth() +1) + "/" + f1.getFullYear();
											var f3='01/10/1948';

											restaFechas = function(f2,f3)
												 {
												 var aFecha1 = f2.split('/'); 
												 var aFecha2 = f3.split('/'); 
												 var fFecha1 = Date.UTC(aFecha1[2],aFecha1[1]-1,aFecha1[0]); 
												 var fFecha2 = Date.UTC(aFecha2[2],aFecha2[1]-1,aFecha2[0]); 
												 var dif = fFecha2 - fFecha1;
												 var dias = Math.floor(dif / (1000 * 60 * 60 * 24)); 
												 return dias;
												 }
											document.write(restaFechas(f3,f2));
										</script>
										</h3>
										
										<?php if( get_field('frase_1') ): ?>
												<p class="cantidad"><?php the_field('frase_1'); ?></p>
										<?php endif; ?>
									</div>
								</div>
								<div class="col-md-4">
									<div class="contador">
										<?php if( get_field('numero_de_dias_2') ): ?>
												<h3 class="num"><?php the_field('numero_de_dias_2'); ?></h3>
										<?php endif; ?>
										<?php if( get_field('frase_2') ): ?>
												<p class="cantidad"><?php the_field('frase_2'); ?></p>
										<?php endif; ?>
									</div>
								</div>
								<div class="col-md-4">
									<div class="contador">
										<?php if( get_field('numero_de_dias_3') ): ?>
												<h3 class="num"><?php the_field('numero_de_dias_3'); ?></h3>
										<?php endif; ?>
										<?php if( get_field('frase_3') ): ?>
												<p class="cantidad"><?php the_field('frase_3'); ?></p>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
			</div><!--end contador-->



		</div><!--end container-->
	</div>

<script>
	jQuery(document).ready(function(){
		jQuery('#slider-3').slick({
		  infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          dots: true,
          arrows: false,
          draggable: true,
          responsive: [
		    {
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
        jQuery('#slider-4').slick({
		  infinite: true,
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: false,
          arrows: false,
          draggable: true,
          responsive: [
		    {
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
<?php
get_footer();