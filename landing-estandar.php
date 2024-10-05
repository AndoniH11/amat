<?php
/**
 * Template Name: Landing Estandar
 * Description: Page template with Sidebar on the left side.
 *
 */

get_header();
?>
<!-- Hero -->
<div class="hero" style="background-image: url('<?php the_field('bg_img'); ?>') ;">
	<div class="hero__wrapper">
		<!-- Logo -->
		<?php if(get_field('imagen_logo')): ?>
			<?php $logo = get_field('imagen_logo'); ?>
			<img class="hero-logo" src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		<?php endif; ?>

		<!-- Content -->
		<?php if(get_field('titulo')): ?>
			<h1 class="hero-title"><?php the_field('titulo'); ?></h1>
		<?php endif; ?>

		<?php if(get_field('subtitulo')): ?>
			<p class="hero-subtitle"><?php the_field('subtitulo'); ?></p>
		<?php endif; ?>

		<!-- Formulario -->
		<script>
			function applyNewAddress() {
				document.getElementById("valoracion").href = "https://www.trovimap.com/valora/agente/503470/search?address=" + document.getElementById("label_text").value + "&lang=ca" 
			}
		</script>
		<div class='trovimap-form' id="box">
			<div class="trovimap-input-container"> <input class="trovimap-input" id="label_text" type="text" name="address" maxlength="200" onchange="applyNewAddress()"/> </div>
			<div class="trovimap-button-container"> 
				<a class="trovimap-button" id="valoracion" href="https://www.trovimap.com/valora/agente/503470/search?lang=ca" rel="noopener" target="_blank" >
					<?php the_field('hero_button_text');?>
					 <!-- valorar ahora -->
				</a> 
			</div>
		</div>
	</div>
</div>

<!-- Icon text grid -->
 <div class="icon_text_grid">
	<div class="icon_text_grid__wrapper">

		<!-- Text Content -->
		<?php if(get_field('icon_grid_title')):?>
			<h2 class="icon-grid-title"><?php the_field('icon_grid_title'); ?></h2>
		<?php endif;?>
		<?php if(get_field('icon_grid_description')):?>
			<p class="icon-grid-description"><?php the_field('icon_grid_description'); ?></p>
		<?php endif;?>

		<!-- Grid -->
		<?php if(have_rows('icon_grid_items')): ?>
			<div class="icon-grid-items">
				<?php while(have_rows('icon_grid_items')): the_row(); ?>
					<div class="icon-grid-item">
						<?php if(get_sub_field('icon')): ?>
							<?php $icon = get_sub_field('icon');?>
							<img class="icon-grid-item-icon" src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>"/>
						<?php endif;?>
						<p class="icon-grid-item-description"><?php the_sub_field('description'); ?></p>
					</div>
				<?php endwhile;?>
			</div>
		<?php endif;?>
	</div>
 </div>

 <!-- Icon text grid + image -->
<div class="icon_text_grid_image">
	<div class="icon_text_grid_image__wrapper">

		<!-- Image -->
		<?php if(get_field('icon_grid_image_image')): ?>
			<div class="icon_grid_image_image__container">
				<?php $image = get_field("icon_grid_image_image");?>
				<img class="icon_grid_image_image" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'];?>"/>
			</div>
		<?php endif;?>

		<!-- Content -->
		 <div class="icon_grid_image_content">

			<!-- Text content -->
			 <div class="icon_grid-image-text-content">
			 	<?php if(get_field('icon_grid_image_title')):?>
					<h2 class="icon_grid_image_title"><?php the_field('icon_grid_image_title');?></h2>
				<?php endif;?>	
				<?php if(get_field('icon_grid_image_description')):?>
					<p class="icon_grid_image_description"><?php the_field('icon_grid_image_description');?></p>
				<?php endif;?>
			 </div>
				

			<!-- Items grid -->
			<?php if(have_rows('icon_grid_image_items')): ?>
				<div class="icon_grid_image_items">
					<?php while(have_rows('icon_grid_image_items')): the_row(); ?>
						<div class="icon_grid_image_item">

							<!-- Icon -->
							<?php if(get_sub_field('icon')):?>
								<?php $icon = get_sub_field('icon');?>
								<img class="icon_grid_image_item-icon" src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>"/>
							<?php endif;?>

							<!-- Description -->
							<p class="icon_grid_image_item_description"><?php the_sub_field('description');?></p>
						</div>
					<?php endwhile;?>	
				</div>
			<?php endif;?>
		 </div>
		

	</div>							
</div>

<?php if(have_rows('testimonies')) :?> 
	<!-- Testimonies -->
	<div class="quotes">
		<div class="quotes__wrapper">
			<!-- Text Content -->
			<div class="quotes__text-content">
				<?php if (get_field('testimonies_title')): ?> <h2 class="quotes-text-content__title"><?php the_field('testimonies_title') ?></h2> <?php endif ?>
			</div>

			<!-- Quotes -->
			<div class="quotes__slider">
				<div class="quotes-slider__wrapper">
					<?php while(have_rows('testimonies')) : the_row(); ?>
						<!-- Quote -->
						<div class="quote">
							<!-- Quote Header -->
							<div class="quote__header">
								<?php if(get_sub_field('image')) : ?>
									<?php $image = get_sub_field('image') ?>
									<div class="quote__image">
										<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>"/>
									</div>
								<?php endif ?>

								<div class="quote__info">
									<p class="quote__name"><?php the_sub_field('name') ?></p>
									<?php if(get_sub_field('position')) : ?> 
										<p class="quote__position"><?php the_sub_field('position') ?></p>
									<?php endif ?>
								</div>
							</div>

							<!-- Quote Body -->
							<div class="quote__body">
								<p><?php the_sub_field('quote') ?></p>
							</div>
					
						</div>
					<?php endwhile ?>
				</div>
			</div>

			<!-- Pagination -->
			<div class="quotes__pagination">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/assets/js/quotes-slider.js'?>"></script>
<?php endif ?>

<!-- FAQs -->
<div class="faqs">
	<div class="faqs__wrapper">

		<!-- Text Content -->
		<div class="faqs__text-content">
			<?php if (get_field('faq_title')): ?> <h2 class="faqs-text-content__title"><?php the_field('faq_title') ?></h2> <?php endif ?>
			<?php if (get_field('faq_subtitle')): ?> <p class="faqs-text-content__subtitle"><?php the_field('faq_subtitle') ?></p> <?php endif ?>
		</div>
		
		<!-- Faqs -->
		<?php if(have_rows('faqs')) : ?>
			<div class="faqs__accordion accordion accordion-flush">
				<?php while(have_rows('faqs')) : the_row(); ?>
					<div class="faq accordion-item">
						<div class="faq__title accordion-header">
							<h3>											
								<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo get_row_index() ?>" aria-expanded="false" aria-controls="echo flush-collapse<?php get_row_index() ?>">
									<?php echo get_sub_field('question') ?>
								</button>
							</h3>
						</div>
						<div id="flush-collapse<?php echo get_row_index() ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?php echo get_row_index() ?>" data-bs-parent="#accordionFlushExample">
							<div class="accordion-body">
								<?php echo get_sub_field('answer') ?>
							</div>
						</div>
					</div>
				<?php endwhile ?>
			</div>
		<?php endif ?>
	</div>
</div>

<!-- Banner -->
<div class="banner">
	<div class="banner__wrapper">
		<div class="banner__content">
			<h2 class="banner-content__title"><?php the_field('banner_title')?> </h2>
			<?php if(get_field('banner_subtitle')): ?><p class="banner-content__subtitle"><?php the_field('banner_subtitle')?> </p><?php endif ?>
		</div>
		<div class="banner__button">
			<!-- Formulario -->
			<script>
				function applyNewAddress() {
					document.getElementById("valoracion").href = "https://www.trovimap.com/valora/agente/503470/search?address=" + document.getElementById("banner_label_text").value + "&lang=ca" 
				}
			</script>
				<div> <input id="banner_label_text" type="text" name="address" maxlength="200" placeholder="Carrer de Casp, 82 Barcelona" onchange="applyNewAddress()"/> </div>
				<div> 
					<a id="valoracion" href="https://www.trovimap.com/valora/agente/503470/search?lang=ca" rel="noopener" target="_blank" ><?php the_field('banner_text_button') ?></a> 
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
?>