<?php

/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Videos
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<div id="content" class="site-content videos">
	<div class="container">
	</div>

	<div class="container">


		<div class="video">
			<ul class="nav nav-tabs" id="myTab" role="tablist" style="padding-top: 40px">
				<li class="nav-item" role="presentation">
					<button class="nav-link active" id="proper-tab" data-bs-toggle="tab" data-bs-target="#proper" type="button" role="tab" aria-controls="proper" aria-selected="true">
						<?php if (get_field('tab_1')) : ?>
							<?php the_field('tab_1'); ?>
						<?php endif; ?>
					</button>
				</li>
				<li class="nav-item" role="presentation">
					<button class="nav-link" id="worlde-tab" data-bs-toggle="tab" data-bs-target="#world" type="button" role="tab" aria-controls="world" aria-selected="false">
						<?php if (get_field('tab_2')) : ?>
							<?php the_field('tab_2'); ?>
						<?php endif; ?>
					</button>
				</li>

			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="proper" role="tabpanel" aria-labelledby="proper-tab">
					<?php if (get_field('tab_content:_video_1')) : ?>
						<?php the_field('tab_content:_video_1'); ?>
					<?php endif; ?>
				</div>
				<div class="tab-pane fade" id="world" role="tabpanel" aria-labelledby="world-tab">
					<?php if (get_field('tab_content:_video_2')) : ?>
						<?php the_field('tab_content:_video_2'); ?>
					<?php endif; ?>
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
	<!--container-->
</div>



<?php
get_footer();
