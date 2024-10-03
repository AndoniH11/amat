<?php
/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immobiliaris - Quiénes somos
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="content" class="site-content quienes-somos">
		<div class="container">
			<div class="row cabecera">
				<div class="col-md-6">
					<div class="titulo-principal">
						<?php if( get_field('titulo') ): ?>
							<h3><?php the_field('titulo'); ?></h3>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-6">
					<?php if( get_field('imagen_cabecera') ): ?>
						<img class="imagen" style="max-width: 100%;" src="<?php the_field('imagen_cabecera'); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="tabs-servicios container">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <button class="nav-link active" id="nav-nosotros-tab" data-bs-toggle="tab" data-bs-target="#nav-nosotros" type="button" role="tab" aria-controls="nav-nosotros" aria-selected="true">
			    	<?php if( get_field('tab_1') ): ?>
							<?php the_field('tab_1'); ?>
						<?php endif; ?>
			    </button>
			    <button class="nav-link" id="nav-filosofia-tab" data-bs-toggle="tab" data-bs-target="#nav-filosofia" type="button" role="tab" aria-controls="nav-filosofia" aria-selected="false">
			    	<?php if( get_field('tab_2') ): ?>
							<?php the_field('tab_2'); ?>
						<?php endif; ?>
			    </button>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			   <!--about us-->
			   <div class="tab-pane fade show active" id="nav-nosotros" role="tabpanel" aria-labelledby="nav-nosotros-tab">
			  		<div class="content-tab row">
			  			<div >
				  			<?php if( get_field('titulo_sobre_nosotros') ): ?>
								<h3 class="titulo-about"><?php the_field('titulo_sobre_nosotros'); ?></h3>
							<?php endif; ?>
				  			<?php if( get_field('texto_principal_sobre_nosotros') ): ?>
								<p><?php the_field('texto_principal_sobre_nosotros'); ?></p>
							<?php endif; ?>
						</div>
						<!--desplegables about us-->
						<div class="row">
							<div class="col-lg-4 col-xs-12 col-md-12">
						  		<div class=" accordion" id="accordionAbout1">
									<div class=" accordion-item">
										  	<?php while( have_rows('desplegable_sobre_nosotros_1') ): the_row(); ?>
										    <h2 class="accordion-header" id="headingAbout1">
										      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbout1" aria-expanded="true" aria-controls="collapseAbout1">
										        
										        	<?php if( get_row_layout() == 'desplegable_1' ): ?>
										        		<?php the_sub_field('titulo'); ?>
										      </button>
										    </h2>
										    <div id="collapseAbout1" class="accordion-collapse collapse show" aria-labelledby="headingAbout1" data-bs-parent="#accordionAbout1">
										      <div class="accordion-body">
										        <ul> <li><?php the_sub_field('texto'); ?></li></ul>
												<?php endif; ?>
										      </div>
										    </div>
										    <?php endwhile; ?>
									</div>
								</div><!--end acordion-->
							</div>
							<div class="col-lg-4 col-xs-12 col-md-12">
								<div class=" accordion" id="accordionAbout2">
										  <div class="accordion-item">
										  	<?php while( have_rows('desplegable_sobre_nosotros_2') ): the_row(); ?>
										    <h2 class="accordion-header" id="headingAbout2">
										      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbout2" aria-expanded="true" aria-controls="collapseAbout2">
										        
										        	<?php if( get_row_layout() == 'desplegable_1' ): ?>
										        		<?php the_sub_field('titulo'); ?>
										      </button>
										    </h2>
										    <div id="collapseAbout2" class="accordion-collapse collapse show" aria-labelledby="headingAbout2" data-bs-parent="#accordionAbout2">
										      <div class="accordion-body">
										        <ul> <li><?php the_sub_field('texto'); ?></li></ul>
												<?php endif; ?>
										      </div>
										    </div>
										    <?php endwhile; ?>
										  </div>
								</div><!--end acordion-->
							</div>
							<div class="col-lg-4 col-xs-12 col-md-12">
								<div class="accordion" id="accordionAbout3">
										  <div class="accordion-item">
										  	<?php while( have_rows('desplegable_sobre_nosotros_3') ): the_row(); ?>
										    <h2 class="accordion-header" id="headingAbout3">
										      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbout3" aria-expanded="true" aria-controls="collapseAbout3">
										        <?php if( get_row_layout() == 'desplegable_1' ): ?>
										        		<?php the_sub_field('titulo'); ?>
										      </button>
										    </h2>
										    <div id="collapseAbout3" class="accordion-collapse collapse show" aria-labelledby="headingAbout3" data-bs-parent="#accordionAbout3">
										      <div class="accordion-body">
										        <ul> <li><?php the_sub_field('texto'); ?></li></ul>
												<?php endif; ?>
										      </div>
										    </div>
										    <?php endwhile; ?>
										  </div>
								</div><!--end acordion-->
							</div>

							</div>
							<div class="row">
							<div class="col-lg-4 col-xs-12 col-md-12">
						  		<div class=" accordion" id="accordionAbout4">
									<div class=" accordion-item">
										  	<?php while( have_rows('desplegable_sobre_nosotros_4') ): the_row(); ?>
										    <h2 class="accordion-header" id="headingAbout4">
										      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbout4" aria-expanded="true" aria-controls="collapseAbout4">
										        
										        	<?php if( get_row_layout() == 'desplegable_1' ): ?>
										        		<?php the_sub_field('titulo'); ?>
										      </button>
										    </h2>
										    <div id="collapseAbout4" class="accordion-collapse collapse show" aria-labelledby="headingAbout4" data-bs-parent="#accordionAbout4">
										      <div class="accordion-body">
										        <ul> <li><?php the_sub_field('texto'); ?></li></ul>
												<?php endif; ?>
										      </div>
										    </div>
										    <?php endwhile; ?>
									</div>
								</div><!--end acordion-->
							</div>
							<div class="col-lg-4 col-xs-12 col-md-12">
								<div class=" accordion" id="accordionAbout5">
										  <div class="accordion-item">
										  	<?php while( have_rows('desplegable_sobre_nosotros_5') ): the_row(); ?>
										    <h2 class="accordion-header" id="headingAbout5">
										      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbout5" aria-expanded="true" aria-controls="collapseAbout5">
										        
										        	<?php if( get_row_layout() == 'desplegable_1' ): ?>
										        		<?php the_sub_field('titulo'); ?>
										      </button>
										    </h2>
										    <div id="collapseAbout5" class="accordion-collapse collapse show" aria-labelledby="headingAbout5" data-bs-parent="#accordionAbout5">
										      <div class="accordion-body">
										        <ul> <li><?php the_sub_field('texto'); ?></li></ul>
												<?php endif; ?>
										      </div>
										    </div>
										    <?php endwhile; ?>
										  </div>
								</div><!--end acordion-->
							</div>
							<div class="col-lg-4 col-xs-12 col-md-12">
								<div class="accordion" id="accordionAbout6">
										  <div class="accordion-item">
										  	<?php while( have_rows('desplegable_sobre_nosotros_6') ): the_row(); ?>
										    <h2 class="accordion-header" id="headingAbout6">
										      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseAbout6" aria-expanded="true" aria-controls="collapseAbout6">
										        <?php if( get_row_layout() == 'desplegable_1' ): ?>
										        		<?php the_sub_field('titulo'); ?>
										      </button>
										    </h2>
										    <div id="collapseAbout6" class="accordion-collapse collapse show" aria-labelledby="headingAbout6" data-bs-parent="#accordionAbout6">
										      <div class="accordion-body">
										        <ul> <li><?php the_sub_field('texto'); ?></li></ul>
												<?php endif; ?>
										      </div>
										    </div>
										    <?php endwhile; ?>
										  </div>
								</div><!--end acordion-->
							</div>

							</div>
						<!--end desplegables about us-->
					</div>
					<div class="row publicaciones">
						<div class="col-lg-12 col-xs-12 col-md-12">
							<div class="titulo">
								<?php if( get_field('titulo_publicaciones') ): ?>
									<p><?php the_field('titulo_publicaciones'); ?></p>
								<?php endif; ?>
							</div>
							<div class="subtitulo">
								<?php if( get_field('subtitulo_publicaciones') ): ?>
									<p><?php the_field('subtitulo_publicaciones'); ?></p>
								<?php endif; ?>
							</div>
							<div id="slider">
								<?php while( have_rows('publicacion') ): the_row(); ?>
									<div class="">
											<?php if( get_row_layout() == 'anadir_publicaciones' ): ?>
												<a href="<?php the_sub_field('url_imagen'); ?>" target="_blank"><img class="item" src="<?php the_sub_field('imagen_publicacion'); ?>" /></a>
											<?php endif; ?>
									</div>
								<?php endwhile; ?> 
							</div>
						</div>
					</div> <!--end row-->
				</div>
			<!--philosophy-->
			<div class="tab-pane fade" id="nav-filosofia" role="tabpanel" aria-labelledby="nav-filosofia-tab">
			  	<div class="row">
				<div class="col-lg-4 col-xs-12 col-md-12">
			  		<div class=" accordion" id="accordionOne">
						<div class=" accordion-item">
							  	<?php while( have_rows('desplegable_filosofia_1') ): the_row(); ?>
							    <h2 class="accordion-header" id="headingOne">
							      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							        
							        	<?php if( get_row_layout() == 'desplegable_1' ): ?>
							        		<?php the_sub_field('titulo'); ?>
							      </button>
							    </h2>
							    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
							      <div class="accordion-body">
							        <?php the_sub_field('texto'); ?>
									<?php endif; ?>
							      </div>
							    </div>
							    <?php endwhile; ?>
						</div>
					</div><!--end acordion-->
				</div>
				<div class="col-lg-4 col-xs-12 col-md-12">
					<div class=" accordion" id="accordionTwo">
							  <div class="accordion-item">
							  	<?php while( have_rows('desplegable_filosofia_2') ): the_row(); ?>
							    <h2 class="accordion-header" id="headingTwo">
							      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							        
							        	<?php if( get_row_layout() == 'desplegable_1' ): ?>
							        		<?php the_sub_field('titulo'); ?>
							      </button>
							    </h2>
							    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionTwo">
							      <div class="accordion-body">
							        <?php the_sub_field('texto'); ?>
									<?php endif; ?>
							      </div>
							    </div>
							    <?php endwhile; ?>
							  </div>
					</div><!--end acordion-->
				</div>
				<div class="col-lg-4 col-xs-12 col-md-12">
					<div class="accordion" id="accordionThree">
							  <div class="accordion-item">
							  	<?php while( have_rows('desplegable_filosofia_3') ): the_row(); ?>
							    <h2 class="accordion-header" id="headingThree">
							      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							        <?php if( get_row_layout() == 'desplegable_1' ): ?>
							        		<?php the_sub_field('titulo'); ?>
							      </button>
							    </h2>
							    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionThree">
							      <div class="accordion-body">
							        <?php the_sub_field('texto'); ?>
									<?php endif; ?>
							      </div>
							    </div>
							    <?php endwhile; ?>
							  </div>
					</div><!--end acordion-->
				</div>

				</div>
			</div>

			<!--AWARDS-->
			<div class="awards">
				<div class="titulo">
						<?php if( get_field('titulo_premios') ): ?>
							<?php the_field('titulo_premios'); ?>
						<?php endif; ?>
				</div>
				<div id="galeria-slider" class="row dots">
					<?php while( have_rows('contenido_awards') ): the_row(); ?>
					  	<div>
							<?php if( get_row_layout() == 'anadir_filosofia' ): ?>
								<div  class="galeria-1">
									<h3><?php the_sub_field('titulo'); ?></h3>
									<h5><?php the_sub_field('subtitulo'); ?></h5>
										
											<?php while( have_rows('galeria_de_imagenes') ): the_row(); ?>
												
													<?php if( get_row_layout() == 'anadir_imagenes' ): ?>
														<div class="items">
															<img class="item" src="<?php the_sub_field('imagen'); ?>" />
														</div>
													<?php endif; ?>
												
											<?php endwhile; ?>
								</div>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div><!--END AWARDS-->

			
			<div class="seccion-trabajo-testimonios">
				<div class="row">
					<div class="col-md-6 trabajo">
						<?php while( have_rows('seccion_trabaja') ): the_row(); ?>
							<div class="">
									<?php if( get_row_layout() == 'trabaja_nosotros' ): ?>
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
										<a href="mailto:"><?php the_sub_field('email'); ?></a>
										<?php endif; ?>
									</div>
							</div>
						<?php endwhile; ?> 
					</div>
					<div class="col-md-6 testimonios">
						<h2 class="titulo-seccion"><?php esc_html_e( 'Experiencias Amat', 'amat-immo' ); ?></h2>
						<!-- testimonios-->
						<div>
							<?php
							$args = array( 'post_type' => 'testimonios', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order');

							$the_query = new WP_Query( $args );
							?>

							<?php if ( $the_query->have_posts() ): ?>
							<div id="slider-testimonios" class="row dots">
								<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="testimonions">
									<div class="testimonio-img">
										<?php if( get_field('imagen') ): ?>
											<img class="testimonio-img-principal" src="<?php the_field('imagen'); ?>" />
										<?php endif; ?>
									</div>
									<h3 class="testimonio-nombre"><?php the_field('nombre'); ?></h3>
									<?php if( get_field('cargo') ): ?>
										<span class="job-post"><?php the_field('cargo'); ?></span>
									<?php endif; ?>
									<?php if( get_field('opinion') ): ?>
										<div class="testimonio-description"><?php the_field('opinion'); ?></div>
									<?php endif; ?>
								</div>
								<?php endwhile; ?>
							</div>
							<?php wp_reset_postdata(); ?>
							<?php endif; ?>
						</div><!--end testimonios-->
					</div>
				</div>
			</div>

			<!--<script>
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
					</script>-->

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

		</div><!--container-->
	</div>

<script>
	jQuery(document).ready(function(){
		jQuery('#slider').slick({
		  dots: true,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 5,
		  slidesToScroll: 5,
		  responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
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
		jQuery('#galeria-slider').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
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
		jQuery('#slider-testimonios').slick({
		  dots: false,
		  infinite: true,
		  speed: 300,
		  slidesToShow: 1,
		  slidesToScroll: 1,
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