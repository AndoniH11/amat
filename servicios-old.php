<?php
/**
 * The  Template for displaying 
 *
 * Template Name: Amat Immo - Servicios old
 * Template Post Type: page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<div id="content" class="site-content servicios">
		<div class="fluid-container">
			<div class="banner-servicios">
				<div class="banner ">
					<?php if( get_field('banner') ): ?>
						<img class="imagen" style="max-width: 100%;" src="<?php the_field('banner'); ?>" />
					<?php endif; ?>
				</div>
			</div>
		</div><!--end container fluid-->
		

		<div class="container">
			<div class="section-1-servicios">
				<nav>
				  <div class="nav nav-tabs" id="nav-tab" role="tablist">
				    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
				    	<?php if( get_field('pestana_1') ): ?>
							<?php the_field('pestana_1'); ?>
						<?php endif; ?>
				    </button>
				    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
				    	<?php if( get_field('pestana_2') ): ?>
							<?php the_field('pestana_2'); ?>
						<?php endif; ?>
				    </button>
				    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
				    	<?php if( get_field('pestana_3') ): ?>
							<?php the_field('pestana_3'); ?>
						<?php endif; ?>
				    </button>
				    
				  </div>
				</nav>
				<div class="tab-content" id="nav-tabContent">
				  <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1">
				  		<div class="pestana-texto">
					  		<?php if( get_field('pestana_1_texto') ): ?>
								<p><?php the_field('pestana_1_texto'); ?></p>
							<?php endif; ?>
						</div>
						<section class="ourwork-tab-wrap">
						  <div class="container2">
						    <ul id="tabs" class="nav nav-tabs" role="tablist">
						      <li class="nav-item">
						        <a id="tab-A" href="#pane-A" class="nav-link active" data-toggle="tab" role="tab">
						        	<?php if( get_field('1_tab_1') ): ?>
										<?php the_field('1_tab_1'); ?>
									<?php endif; ?>
								</a>
						      </li>
						      <li class="nav-item">
						        <a id="tab-B" href="#pane-B" class="nav-link" data-toggle="tab" role="tab">
						        	<?php if( get_field('1_tab_2') ): ?>
										<?php the_field('1_tab_2'); ?>
									<?php endif; ?>
						        </a>
						      </li>
						      <li class="nav-item">
						        <a id="tab-C" href="#pane-C" class="nav-link" data-toggle="tab" role="tab">
						        	<?php if( get_field('1_tab_3') ): ?>
										<?php the_field('1_tab_3'); ?>
									<?php endif; ?>
						        </a>
						      </li>
						    </ul>

						    <div id="content" class="tab-content" role="tablist">
						      <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
						        <div class="card-header" role="tab" id="heading-A">
						          <h5 class="mb-0">
						            <a data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
						              <?php if( get_field('1_tab_1') ): ?>
											<?php the_field('1_tab_1'); ?>
									  <?php endif; ?>
						            </a>
						          </h5>
						        </div>

						        <div id="collapse-A" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A">
						          <div class="card-body new-card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('contenido_tab_1') ): ?>
											<?php the_field('contenido_tab_1'); ?>
										<?php endif; ?>
										<!--gestión de patrimonio y alquileres-->
											<?php
												$args_patrimonio = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-patrimonio-alquileres' );
												$the_query_patrimonio = new WP_Query( $args_patrimonio );
											?>

											
											<?php if ( $the_query_patrimonio->have_posts() ): ?>
												
												<div id="slider-empleados-patrimonio" class="row dots servicios-empleados">
														<?php while ( $the_query_patrimonio->have_posts() ) : $the_query_patrimonio->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="empleado-img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	<!--end gestión de patrimonio y alquileres-->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>

						      <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
						        <div class="card-header" role="tab" id="heading-B">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
						                <?php if( get_field('1_tab_2') ): ?>
											<?php the_field('1_tab_2'); ?>
										<?php endif; ?>
						              
						            </a>
						          </h5>
						        </div>
						        <div id="collapse-B" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('contenido_tab_2') ): ?>
											<?php the_field('contenido_tab_2'); ?>
										<?php endif; ?>
										<!--administración de fincas en comunidades de propietarios-->
											<?php
													$args_admin = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'administracion-fincas' );
														$the_query_admin = new WP_Query( $args_admin );
													?>
														<?php if ( $the_query_admin->have_posts() ): ?>
													<div id="slider-empleados-admin" class="row dots servicios-empleados">
														<?php while ( $the_query_admin->have_posts() ) : $the_query_admin->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="empleado-img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	<!--end administración de fincas en comunidades de propietarios-->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>

						      <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
						        <div class="card-header" role="tab" id="heading-C">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-C" aria-expanded="false" aria-controls="collapse-C">
						                <?php if( get_field('1_tab_3') ): ?>
											<?php the_field('1_tab_3'); ?>
										<?php endif; ?>
						              
						            </a>
						          </h5>
						        </div>
						        <div id="collapse-C" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('contenido_tab_3') ): ?>
											<?php the_field('contenido_tab_3'); ?>
										<?php endif; ?>
										<!--mantenimiento y rehabilitación de fincas-->
											<?php
												$args_mantenimiento = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'mantenimiento-fincas' );
														$the_query_mantenimiento = new WP_Query( $args_mantenimiento );
												?>
														<?php if ( $the_query_mantenimiento->have_posts() ): ?>
													<div id="slider-empleados-mantenimiento" class="row dots servicios-empleados">
														<?php while ( $the_query_mantenimiento->have_posts() ) : $the_query_mantenimiento->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="empleado-img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	<!--end mantenimiento y rehabilitación de fincas-->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>
						      
						    </div>
						  </div>
						</section>

				  </div>
				  <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2">
				  		<div class="pestana-texto">
					  		<?php if( get_field('pestana_2_texto') ): ?>
								<p><?php the_field('pestana_2_texto'); ?></p>
							<?php endif; ?>
						</div>
				  		<section class="ourwork-tab-wrap">
						  <div class="container2">
						    <ul id="tabs" class="nav nav-tabs" role="tablist">
						      <li class="nav-item">
						        <a id="tab-A-2" href="#pane-A-2" class="nav-link active" data-toggle="tab" role="tab">
						        	<?php if( get_field('2_tab_1') ): ?>
										<?php the_field('2_tab_1'); ?>
									<?php endif; ?>
								</a>
						      </li>
						      <li class="nav-item">
						        <a id="tab-B-2" href="#pane-B-2" class="nav-link" data-toggle="tab" role="tab">
						        	<?php if( get_field('2_tab_2') ): ?>
										<?php the_field('2_tab_2'); ?>
									<?php endif; ?>
						        </a>
						      </li>
						      <li class="nav-item">
						        <a id="tab-C-2" href="#pane-C-2" class="nav-link" data-toggle="tab" role="tab">
						        	<?php if( get_field('2_tab_3') ): ?>
										<?php the_field('2_tab_3'); ?>
									<?php endif; ?>
						        </a>
						      </li>
						    </ul>

						    <div id="content" class="tab-content" role="tablist">
						      <div id="pane-A-2" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A-2">
						        <div class="card-header" role="tab" id="heading-A-2">
						          <h5 class="mb-0">
						            <a data-toggle="collapse" href="#collapse-A-2" aria-expanded="true" aria-controls="collapse-A-2">
						              <?php if( get_field('2_tab_1') ): ?>
											<?php the_field('2_tab_1'); ?>
									  <?php endif; ?>
						              
						            </a>
						          </h5>
						        </div>

						        <div id="collapse-A-2" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A-2">
						          <div class="card-body new-card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('2_contenido_tab_1') ): ?>
											<?php the_field('2_contenido_tab_1'); ?>
										<?php endif; ?>
										<!--gestión de venta de inmuebles de segunda mano-->
										<?php
												$args_segunda = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-segunda-mano' );
												
												$the_query_segunda = new WP_Query( $args_segunda );
											?>

											
											<?php if ( $the_query_segunda->have_posts() ): ?>
												
												<div id="slider-empleados-segunda" class="row dots servicios-empleados">
														<?php while ( $the_query_segunda->have_posts() ) : $the_query_segunda->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	
										<!--gestión de venta de inmuebles de segunda mano-->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>

						      <div id="pane-B-2" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
						        <div class="card-header" role="tab" id="heading-B-2">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-B-2" aria-expanded="false" aria-controls="collapse-B-2">
						                <?php if( get_field('2_tab_2') ): ?>
											<?php the_field('2_tab_2'); ?>
										<?php endif; ?>
						              
						            </a>
						          </h5>
						        </div>
						        <div id="collapse-B-2" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B-2">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('2_contenido_tab_2') ): ?>
											<?php the_field('2_contenido_tab_2'); ?>
										<?php endif; ?>
										<!--gestión de venta de inmbuebles de obra nueva-->
										<?php
												$args_ventas = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-de-venta' );
												$the_query_ventas = new WP_Query( $args_ventas );
										?>

											
											<?php if ( $the_query_ventas->have_posts() ): ?>
												
												<div id="slider-empleados-venta" class="row dots servicios-empleados">
														<?php while ( $the_query_ventas->have_posts() ) : $the_query_ventas->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	
										<!--end gestión de venta de inmbuebles de obra nueva-->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>

						      <div id="pane-C-2" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C-2">
						        <div class="card-header" role="tab" id="heading-C-2">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-C-2" aria-expanded="false" aria-controls="collapse-C-2">
						                <?php if( get_field('2_tab_3') ): ?>
											<?php the_field('2_tab_3'); ?>
										<?php endif; ?>
						              
						            </a>
						          </h5>
						        </div>
						        <div id="collapse-C-2" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C-2">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('2_contenido_tab_3') ): ?>
											<?php the_field('2_contenido_tab_3'); ?>
										<?php endif; ?>
										<!---->
										<?php
												$args_alquiler = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-alquiler-inmuebles' );
												$the_query_alquiler = new WP_Query( $args_alquiler );
										?>

											
											<?php if ( $the_query_alquiler->have_posts() ): ?>
												
												<div id="slider-empleados-alquiler" class="row dots servicios-empleados">
														<?php while ( $the_query_alquiler->have_posts() ) : $the_query_alquiler->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	<!---->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>
						      
						    </div>
						  </div>
						</section>

				  </div>

				  <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3">
				  		<div class="pestana-texto">
					  		<?php if( get_field('pestana_3_texto') ): ?>
								<p><?php the_field('pestana_3_texto'); ?></p>
							<?php endif; ?>
						</div>
				  		<section class="ourwork-tab-wrap">
						  <div class="container2">
						    <ul id="tabs" class="nav nav-tabs" role="tablist">
						      <li class="nav-item">
						        <a id="tab-A-3" href="#pane-A-3" class="nav-link active" data-toggle="tab" role="tab">
						        	<?php if( get_field('3_tab_1') ): ?>
										<?php the_field('3_tab_1'); ?>
									<?php endif; ?>
								</a>
						      </li>
						      <li class="nav-item">
						        <a id="tab-B-3" href="#pane-B-3" class="nav-link" data-toggle="tab" role="tab">
						        	<?php if( get_field('3_tab_2') ): ?>
										<?php the_field('3_tab_2'); ?>
									<?php endif; ?>
						        </a>
						      </li>
						      <li class="nav-item">
						        <a id="tab-C-3" href="#pane-C-3" class="nav-link" data-toggle="tab" role="tab">
						        	<?php if( get_field('3_tab_3') ): ?>
										<?php the_field('3_tab_3'); ?>
									<?php endif; ?>
						        </a>
						      </li>
						    </ul>

						    <div id="content" class="tab-content" role="tablist">
						      <div id="pane-A-3" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A-3">
						        <div class="card-header" role="tab" id="heading-A-3">
						          <h5 class="mb-0">
						            <a data-toggle="collapse" href="#collapse-A-3" aria-expanded="true" aria-controls="collapse-A-3">
						              <?php if( get_field('3_tab_1') ): ?>
											<?php the_field('3_tab_1'); ?>
									  <?php endif; ?>
									  
						            </a>
						          </h5>
						        </div>

						        <div id="collapse-A-3" class="collapse show" data-parent="#content" role="tabpanel" aria-labelledby="heading-A-3">
						          <div class="card-body new-card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('3_contenido_tab_1') ): ?>
											<?php the_field('3_contenido_tab_1'); ?>
										<?php endif; ?>
										<!--consultoría-->
										<?php
												$args_consultoria = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'consultoria' );
												$the_query_consultoria = new WP_Query( $args_consultoria );
										?>

											
											<?php if ( $the_query_consultoria->have_posts() ): ?>
												
												<div id="slider-empleados-consultoria" class="row dots servicios-empleados">
														<?php while ( $the_query_consultoria->have_posts() ) : $the_query_consultoria->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	<!--consultoría-->
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>

						      <div id="pane-B-3" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
						        <div class="card-header" role="tab" id="heading-B-3">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-B-3" aria-expanded="false" aria-controls="collapse-B-3">
						                <?php if( get_field('3_tab_2') ): ?>
											<?php the_field('3_tab_2'); ?>
										<?php endif; ?>

						            </a>
						          </h5>
						        </div>
						        <div id="collapse-B-3" class="collapse" data-parent="#content" role="tabpanel" aria-labelledby="heading-B-3">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('3_contenido_tab_2') ): ?>
											<?php the_field('3_contenido_tab_2'); ?>
										<?php endif; ?>
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>

						      <div id="pane-C-3" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C-3">
						        <div class="card-header" role="tab" id="heading-C-3">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-C-3" aria-expanded="false" aria-controls="collapse-C-3">
						                <?php if( get_field('3_tab_3') ): ?>
											<?php the_field('3_tab_3'); ?>
										<?php endif; ?>

						            </a>
						          </h5>
						        </div>
						        <div id="collapse-C-3" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C-3">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('3_contenido_tab_3') ): ?>
											<?php the_field('3_contenido_tab_3'); ?>
										<?php endif; ?>
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>
						      <div id="pane-C-4" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C-4">
						        <div class="card-header" role="tab" id="heading-C-4">
						          <h5 class="mb-0">
						            <a class="collapsed" data-toggle="collapse" href="#collapse-C-4" aria-expanded="false" aria-controls="collapse-C-4">
						                <?php if( get_field('3_tab_4') ): ?>
											<?php the_field('3_tab_4'); ?>
										<?php endif; ?>

						            </a>
						          </h5>
						        </div>
						        <div id="collapse-C-4" class="collapse" role="tabpanel" data-parent="#content" aria-labelledby="heading-C-4">
						          <div class="card-body">
						            <div class="row">
						              <div class="col-md-12">
						                <?php if( get_field('3_contenido_tab_4') ): ?>
											<?php the_field('3_contenido_tab_4'); ?>
										<?php endif; ?>
						              </div>
						            </div>
						          </div>
						        </div>
						      </div>
						    </div>
						  </div>
						</section>

				  </div>
				</div>
			</div>

			<!--empleados-->
			<!--<div class="servicios-empleados">
				<div  style="margin-top:3em;">
					
					<?php
					$args = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order');

					$the_query = new WP_Query( $args );
				?>

				<?php if ( $the_query->have_posts() ): ?>
				<div id="slider-empleados" class="row dots">
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="empleado">
							<div class="empleado-img">
								<?php if( get_field('foto') ): ?>
									<img class="empleado-img" src="<?php the_field('foto'); ?>" />
								<?php endif; ?>
							</div>
							<?php if( get_field('nombre') ): ?>
								<h3 class="name"><?php the_field('nombre'); ?></h3>
							<?php endif; ?>
							<?php if( get_field('cargo') ): ?>
								<p class="cargo"><?php the_field('cargo'); ?></p>
							<?php endif; ?>
							<?php if( get_field('oficina') ): ?>
								<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
							<?php endif; ?>
							<?php if( get_field('telefono') ): ?>
								<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
							<?php endif; ?>
							<?php if( get_field('email') ): ?>
								<div class="mail">
									<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
								</div>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					</div>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
				</div>
			</div>--><!--end empleados-->
			

			<!--end empleados pos categorías--><!--

											<?php
												$args_admin = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'administracion-fincas' );
												$args_consultoria = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'consultoria' );
												$args_alquiler = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-alquiler-inmuebles' );
												$args_patrimonio = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-patrimonio-alquileres' );
												$args_venta = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-de-venta' );
												$args_segunda = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'gestion-segunda-mano' );
												$args_mantenimiento = array( 'post_type' => 'empleados', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order', 'taxonomy' => 'categoria_empleado', 'term' => 'mantenimiento-fincas' );

												$the_query_admin = new WP_Query( $args_admin );
												$args_consultoria = new WP_Query( $args_consultoria );
												$args_alquiler = new WP_Query( $args_alquiler );
												$the_query_patrimonio = new WP_Query( $args_patrimonio );
												$the_query_venta = new WP_Query( $args_venta );
												$the_query_segunda = new WP_Query( $args_segunda );
												$the_query_mantenimiento = new WP_Query( $args_mantenimiento );
											?>

											
											<?php if ( $the_query_admin->have_posts() ): ?>
												
												<div id="slider-empleados-admin" class="row dots servicios-empleados">
														<?php while ( $the_query_admin->have_posts() ) : $the_query_admin->the_post(); ?>
														<div class="empleado">
															<div class="empleado-img">
																<?php if( get_field('foto') ): ?>
																	<img class="empleado-img" src="<?php the_field('foto'); ?>" />
																<?php endif; ?>
															</div>
															<?php if( get_field('nombre') ): ?>
																<h3 class="name"><?php the_field('nombre'); ?></h3>
															<?php endif; ?>
															<?php if( get_field('cargo') ): ?>
																<p class="cargo"><?php the_field('cargo'); ?></p>
															<?php endif; ?>
															<?php if( get_field('oficina') ): ?>
																<div class="oficina"><?php esc_html_e( 'Oficina:', 'amat-immo' ); ?> <?php the_field('oficina'); ?></div>
															<?php endif; ?>
															<?php if( get_field('telefono') ): ?>
																<div class="telf"><?php esc_html_e( 'Tel:', 'amat-immo' ); ?> <?php the_field('telefono'); ?></div>
															<?php endif; ?>
															<?php if( get_field('email') ): ?>
																<div class="mail">
																	<a class="email" href="mailto:<?php the_field('email'); ?>"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/mail.png"/></a>
																</div>
															<?php endif; ?>
														</div>
														<?php endwhile; ?>
													</div>
												<?php wp_reset_postdata(); ?>
												<?php endif; ?>	
											--><!--end empleados pos categorías-->


			<div class="destacada">
				<?php if( get_field('frase_destacada_general') ): ?>
					<p><strong><?php the_field('frase_destacada_general'); ?></strong></p>
				<?php endif; ?>
			</div>




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



			<!--contador prefooter-->
			<div class="col-md-12 pre-footer">
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
										<p class="mas">+</p>
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
												<p class="mas">+</p>
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
												<p class="mas">+</p>
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

		jQuery('#slider-empleados').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 4,
						slidesToScroll: 4,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
			      });

		jQuery('#slider-empleados-admin').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 4,
						slidesToScroll: 4,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
			      });

	jQuery('#slider-empleados-patrimonio').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 4,
						slidesToScroll: 4,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
			      });
	jQuery('#slider-empleados-mantenimiento').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 2,
						slidesToScroll: 2,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
	 });
	jQuery('#slider-empleados-segunda').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 4,
						slidesToScroll: 4,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
	});
	jQuery('#slider-empleados-venta').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 3,
						slidesToScroll: 3,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
	});
	jQuery('#slider-empleados-alquiler').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 3,
						slidesToScroll: 3,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
						      settings: {
						        slidesToShow: 1,
						        slidesToScroll: 1
						      }
						    }
						]
	});
	
	jQuery('#slider-empleados-consultoria').slick({
			        	dots: true,
			        	infinite: true,
						slidesToShow: 4,
						slidesToScroll: 4,
						autoplay: true,
						autoplaySpeed: 5000,
						focusOnSelect: false,
						responsive: [
						    {
						      breakpoint: 992,
						      settings: {
						        slidesToShow: 3,
						        slidesToScroll: 3
						      }
						    },
						    {
						      breakpoint: 768,
						      settings: {
						        slidesToShow: 2,
						        slidesToScroll: 2
						      }
						    },
						    {
						      breakpoint: 350,
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