<?php
/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Página genérica
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="content" class="site-content generica">
		<div class="fluid-container">
			<div class="banner">
				<?php if( get_field('banner') ): ?>
					<img class="banner-imagen" style="max-width: 100%;" src="<?php the_field('banner'); ?>" />
				<?php endif; ?>
			</div>
		</div>

		<div class="container">
			
			<div class="titulo-principal">
				<?php if( get_field('titulo') ): ?>
					<h1><?php the_field('titulo'); ?></h1>
				<?php endif; ?>
			</div>
			<div class="texto">
				<?php if( get_field('texto') ): ?>
					<?php the_field('texto'); ?>

				<?php endif; ?>
			</div>

			<!--contador prefooter-->
			<?php if( get_field('frase_1') ): ?>
			<div class="col-md-12 pre-footer" >
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
			<?php endif; ?>

		</div><!--container-->
	</div>



<?php
get_footer();