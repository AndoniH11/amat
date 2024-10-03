<?php

/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Inmuebles Interactivos
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div id="content" class="site-content visitas-360">
	<div class="container">

		<div class="visitas">
			<div class="row">
			<?php while( have_rows('visitas') ): the_row(); ?>
				<?php if( get_row_layout() == 'visita_360'): ?>
					<div class="col-lg-4 visita_360">
						<?php if( get_sub_field('id_tour') ): ?>
							<div class="casavo-iframe">
								<iframe src="https://viewer.realisti.co/<?php the_sub_field('id_tour'); ?>/?viewMode=embed&hideLogo=true&alwaysAutorotate=true" width="100%" height="450px" allowfullscreen></iframe>
							</div>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
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
	<!--container-->
</div>



<?php
get_footer();
