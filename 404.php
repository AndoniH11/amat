<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found.
 *
 */

get_header();

$search_enabled = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>
<div id="post-0" class="content error404 not-found">
	<!--<h1 class="entry-title"><?php esc_html_e( 'Not found', 'amat-immo' ); ?></h1>-->
	<div class="entry-content">
		<div class="container-404-custom">
            <div class="text-404">
            	<?php if (ICL_LANGUAGE_CODE == 'en') { ?>
            		<h1><?php esc_html_e( 'OOPS! ERROR 404', 'amat-immo' ); ?></h1>
            		<h3 style="margin-top: 3em; max-width:800px; margin:auto;"><?php esc_html_e( "The page you're looking for doesn't exist or has changed its address.", 'amat-immo' ); ?></h3>
            		<a style="margin-top: 1.25em;" href="/en/" class="btn btn-primary"><?php esc_html_e( 'Go to homepage', 'amat-immo' ); ?></a>
            	<?php } elseif (ICL_LANGUAGE_CODE == 'ca') { ?>
            		<h1><?php esc_html_e( '¡UPS! ERROR 404', 'amat-immo' ); ?></h1>
            		<h3 style="margin-top: 3em; max-width:800px; margin:auto;"><?php esc_html_e( "La pàgina que busques no existeix o ha canviat d'adreça.", 'amat-immo' ); ?></h3>
            		<a style="margin-top: 1.25em;" href="/ca/" class="btn btn-primary"><?php esc_html_e( "Anar a l'inici", 'amat-immo' ); ?></a>
            	<?php } elseif (ICL_LANGUAGE_CODE == 'es') { ?>
            		<h1><?php esc_html_e( '¡UPS! ERROR 404', 'amat-immo' ); ?></h1>
            		<h3 style="margin-top: 3em; max-width:800px; margin:auto;"><?php esc_html_e( 'La página que buscas no existe o ha cambiado de dirección.', 'amat-immo' ); ?></h3>
            		<a style="margin-top: 1.25em;" href="/es/" class="btn btn-primary"><?php esc_html_e( 'Ir al inicio', 'amat-immo' ); ?></a>
            	<?php } ?>
            </div>
            <div class="image-404">
                <img src="/w/wp-content/uploads/2024/01/icon-404-amat.png" alt="Imagen de 404">
            </div> 
        </div>
	</div><!-- /.entry-content -->
</div><!-- /#post-0 -->

<style type="text/css">
    .container-404-custom{
        display: flex;
        align-items: center;
        gap: 1.5em;
        justify-content: center;
        margin-top: 4.5em;
        height: calc(50vh - 1px);
    }
    .container-404-custom .image-404 img{
       width: 175px
    }
    .container-404-custom .text-404{
        text-align: left;
    }
    .text-404{
        max-width: 350px;
    }
    .text-404 h1{
        font-weight: bold !important;
        font-size: 28px !important;
        color: #da291c;
        margin-bottom: 0.25em;
        margin-top: 0;
    }
    .text-404 h3{
    	font-size: 20px !important;
    }
    .text-404 a{
        border-radius: 50px;
        background: #da291c;
        border-color: #da291c;
        font-weight: 600;
        font-size: 14px !important;
    }
    .text-404 a:hover{
        background: #da291c;
        border-color: #da291c;
    }
    @media only screen and (max-width: 540px) {
        .container-404-custom{
            flex-direction: column;
        }
        .text-404{
            order: 2;
        }
        .image-404{
            order: 1;
        }
    }
</style>

<?php
get_footer();
