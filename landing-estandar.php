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