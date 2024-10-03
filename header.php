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
</head>

<?php
$navbar_scheme   = get_theme_mod('navbar_scheme', 'navbar-light bg-light'); // Get custom meta-value.
$navbar_position = get_theme_mod('navbar_position', 'static'); // Get custom meta-value.

$search_enabled  = get_theme_mod('search_enabled', '1'); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e('Skip to main content', 'amat-immo'); ?></a>

	<div id="wrapper">
		<header>
			<nav id="header" class="navbar navbar-expand-xl <?php echo esc_attr($navbar_scheme);
															if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' fixed-top';
															elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' fixed-bottom';
															endif;
															if (is_home() || is_front_page()) : echo ' home';
															endif; ?>">
				<div class="container">
					<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
						<a class="navbar-brand " href="https://www.amatimmobiliaris.com/en/" rel="home">
					<?php } elseif (ICL_LANGUAGE_CODE == 'ca') { ?>
						<a class="navbar-brand " href="https://www.amatimmobiliaris.com/ca/" rel="home">
					<?php } elseif (ICL_LANGUAGE_CODE == 'es') { ?>
						<a class="navbar-brand " href="https://www.amatimmobiliaris.com/es/" rel="home">
					<?php } ?>
						<?php
						$header_logo = get_theme_mod('header_logo'); // Get custom meta-value.

						if (!empty($header_logo)) :
						?>
							<img src="<?php echo esc_url($header_logo); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" />
						<?php
						else :
							echo esc_attr(get_bloginfo('name', 'display'));
						endif;
						?>
					</a>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'amat-immo'); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div id="navbar" class="collapse navbar-collapse">
						<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav me-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ('1' === $search_enabled) :
						?>
							<!--<form class="search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php esc_attr_e('Buscar', 'amat-immo'); ?>" title="<?php esc_attr_e('Search', 'amat-immo'); ?>" />
									<button type="submit" name="submit" class="btn btn-outline-secondary"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/01/search.png"/></button>
								</div>
							</form>-->
						<?php
						endif;
						?>
						
						<div class="top-bar">
							<div class="container">
								<?php do_action('wpml_add_language_selector'); ?>
								<div class="btns" style="display:none">
									<a class="admin-btn" href="#"><?php esc_html_e('Administración Online', 'amat-immo'); ?></a>
									<!--<a class="login-btn" href="#"><?php esc_html_e('Iniciar sesión', 'amat-immo'); ?></a>-->
								</div>
							</div>
						</div>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav><!-- /#header -->



		</header>
		<!--Add breadcrumbs-->
		<?php the_breadcrumb();	?>
		<!--END Add breadcrumbs-->

		<?php if (is_home() && !is_front_page()) { ?>
			<h1 style="font-size: 30px !important; font-weight: 300 !important; position: absolute !important; left: 50% !important; transform: translate(-50%, 0px) !important;">Blog</h1>
		<?php } ?>

		<main id="main" class="container" <?php if (isset($navbar_position) && 'fixed_top' === $navbar_position) : echo ' style="padding-top: 100px;"';
											elseif (isset($navbar_position) && 'fixed_bottom' === $navbar_position) : echo ' style="padding-bottom: 100px;"';
											endif; ?> style="margin-top: 62px;">
			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if (is_single() || is_archive()) :
			?>
				<div class="row">
					<div class="col-md-8 col-sm-12">
					<?php
				endif;
					?>