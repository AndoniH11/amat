<?php
/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immo - Contacto
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="content" class="site-content contacto">
		<div class="fluid-container">
			<div class="banner">
				<?php if( get_field('banner_imagen') ): ?>
					<img class="banner-imagen" style="max-width: 100%;" src="<?php the_field('banner_imagen'); ?>" />
				<?php endif; ?>
			</div>
		</div><!--end container fluid-->
			
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="card-form">
						<!--<div class="titulo-principal">
							<?php if( get_field('titulo_principal') ): ?>
								<?php the_field('titulo_principal'); ?>
							<?php endif; ?>
						</div>-->
						<div class="form">
							<!--<small>*<?php esc_html_e( 'Campos requeridos', 'amat-immo' ); ?></small>-->
							<div class="form "><?php echo do_shortcode( '[contact-form-7 id="16508" title="Contact form services"]' ); ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<br>
			<div class="oficinas">
				<div class="oficinas-titulo">
						<?php if( get_field('titulo_oficinas') ): ?>
							<h3><?php the_field('titulo_oficinas'); ?></h3>
						<?php endif; ?>
				</div>
			
				<div class="row">
					<div class="col-lg-6 col-xs-12 col-md-12">
						<div class="acordeon-oficina">
							<div class="accordion" id="accordionOne">
							  <div class="accordion-item">
							    <h2 class="accordion-header" id="headingOne">
							      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							        <?php if( get_field('titulo_oficina_1') ): ?>
										<p><?php the_field('titulo_oficina_1'); ?></p>
									<?php endif; ?>
							      </button>
							    </h2>
							    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionOne">
							      <div class="accordion-body">
							        <div class="direccion-horario">
							        	<?php if( get_field('oficina_1_direccion') ): ?>
										<p><?php the_field('oficina_1_direccion'); ?></p>
										<?php endif; ?>
										<?php if( get_field('oficina_1_horario') ): ?>
											<p><?php the_field('oficina_1_horario'); ?></p>
										<?php endif; ?>
									</div>
									<iframe width="450" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('mapa_1'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							      </div>
							    </div>
							  </div>
							</div>
						</div><!--end acordion-->
						<div class="acordeon-oficina">
							<div class="accordion" id="accordionThree">
							  <div class="accordion-item">
							    <h2 class="accordion-header" id="headingOne">
							      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
							        <?php if( get_field('titulo_oficina_3') ): ?>
										<p><?php the_field('titulo_oficina_3'); ?></p>
									<?php endif; ?>
							      </button>
							    </h2>
							    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionThree">
							      <div class="accordion-body">
							      	<div class="direccion-horario">
								        <?php if( get_field('oficina_3_direccion') ): ?>
											<p><?php the_field('oficina_3_direccion'); ?></p>
										<?php endif; ?>
										<?php if( get_field('oficina_3_horario') ): ?>
											<p><?php the_field('oficina_3_horario'); ?></p>
										<?php endif; ?>
									</div>
									<iframe width="450" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('mapa_3'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							      </div>
							    </div>
							  </div>
							</div>
						</div><!--end acordion-->
					</div><!--end row-->
					<div class="col-lg-6 col-xs-12 col-md-12">
						<div class="acordeon-oficina">
							<div class="accordion" id="accordionTwo">
							  <div class="accordion-item">
							    <h2 class="accordion-header" id="headingTwo">
							      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
							        <?php if( get_field('titulo_oficina_2') ): ?>
										<p><?php the_field('titulo_oficina_2'); ?></p>
									<?php endif; ?>
							      </button>
							    </h2>
							    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionTwo">
							      <div class="accordion-body">
							      	<div class="direccion-horario">
								        <?php if( get_field('oficina_2_direccion') ): ?>
											<p><?php the_field('oficina_2_direccion'); ?></p>
										<?php endif; ?>
										<?php if( get_field('oficina_2_horario') ): ?>
											<p><?php the_field('oficina_2_horario'); ?></p>
										<?php endif; ?>
									</div>
									<iframe width="450" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('mapa_2'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							      </div>
							    </div>
							  </div>
							</div>
						</div><!--end acordion-->
						<div class="acordeon-oficina">
							<div class="accordion" id="accordionFour">
							  <div class="accordion-item">
							    <h2 class="accordion-header" id="headingFour">
							      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
							        <?php if( get_field('titulo_oficina_4') ): ?>
										<p><?php the_field('titulo_oficina_4'); ?></p>
									<?php endif; ?>
							      </button>
							    </h2>
							    <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionFour">
							      <div class="accordion-body">
							        <div class="direccion-horario">
							        	<?php if( get_field('oficina_4_direccion') ): ?>
										<p><?php the_field('oficina_4_direccion'); ?></p>
										<?php endif; ?>
										<?php if( get_field('oficina_4_horario') ): ?>
											<p><?php the_field('oficina_4_horario'); ?></p>
										<?php endif; ?>
									</div>
									<iframe width="450" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php the_field('mapa_4'); ?>" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							      </div>
							    </div>
							  </div>
							</div>
						</div><!--end acordion 4-->
					</div><!--end row-->
				</div><!--end principal row-->
			</div>

			<!--contador prefooter-->
			<div class="col-md-12 pre-footer" style="display: none">
						<div>
							
							<div id="contadores" class="row contadores">
								
								<div class="col-4">
									 <h3 class="num-fondo">
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
									 
									<div class="contador">
										<!-- <p class="mas">+</p> -->
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
								<div class="col-4">
									<?php if( get_field('numero_de_dias_2') ): ?>
											<h3 class="num-fondo"><?php the_field('numero_de_dias_2'); ?></h3>
									<?php endif; ?>
									<div class="contador">
										<?php if( get_field('numero_de_dias_2') ): ?>
												<!-- <p class="mas">+</p> -->
												<h3 class="num"><?php the_field('numero_de_dias_2'); ?></h3>
										<?php endif; ?>
										<?php if( get_field('frase_2') ): ?>
												<p class="cantidad"><?php the_field('frase_2'); ?></p>
										<?php endif; ?>
									</div>
								</div>
								<div class="col-4">
									<?php if( get_field('numero_de_dias_3') ): ?>
											<h3 class="num-fondo"><?php the_field('numero_de_dias_3'); ?></h3>
									<?php endif; ?>
									<div class="contador">
										<?php if( get_field('numero_de_dias_3') ): ?>
												<!-- <p class="mas">+</p> -->
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
<?php

get_footer();