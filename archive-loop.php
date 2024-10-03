<?php
/**
 * The template for displaying the archive loop.
 */

//amat_immo_content_nav( 'nav-above' );
?>
<div class="fluid-container">
<div class="row posts">
	<div class="col-md-8 col-sm-12 entry-content">
		<?php
		if ( have_posts() ) :
		?>
			<div class="row blog-all">
			<?php
				while ( have_posts() ) :
					the_post();

					/**
					 * Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', 'index' ); // Post format: content-index.php
				endwhile;
			?>
			</div>
		<?php
		endif;
		wp_reset_postdata(); ?>
	</div>
	<div class="col-md-4 col-sm-12 sidebar">
		<?php get_sidebar('Primary'); ?>
	</div>
</div>
</div>

<?php
wp_pagenavi(); 
//amat_immo_content_nav( 'nav-below' );