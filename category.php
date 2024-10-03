<?php
/**
 * The Template for displaying Category Archive pages.
 */

get_header();

if ( have_posts() ) :
?>
	<header class="container page-header p-3" style="margin-top: 70px">
		<h1 class="page-title"><?php printf( esc_html__( 'Category Archives: %s', 'amat-immo' ), single_cat_title( '', false ) ); ?></h1>
		<?php
			$category_description = category_description();
			if ( ! empty( $category_description ) ) :
				echo apply_filters( 'category_archive_meta', '<div class="m-3 category-archive-meta" style="max-width: 600px">' . $category_description . '</div>' );
			endif;
		?>
	</header>
<?php
	get_template_part( 'archive', 'loop' );
else :
	// 404.
	get_template_part( 'content', 'none' );
endif;

wp_reset_postdata(); // End of the loop.

get_footer();