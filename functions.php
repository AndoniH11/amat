<?php
function enqueue_parent_styles() {
 $parent_style = 'parent-style'; // Estos son los estilos del tema padre recogidos por el tema hijo.
 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
 wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version')  );
}
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
?>
<?php
function the_breadcrumb() {

    $sep = ' > ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}
?>
<?php
if ( ! function_exists( 'amat_immo_article_posted_on' ) ) :
    /**
     * "Theme posted on" pattern.
     *
     * @since v1.0
     */
    function amat_immo_article_posted_on() {
        printf(
            wp_kses_post( __( '
                <span class="by-author"> 
                <span class="sep"> By </span> 
                <span class="author-meta vcard"><a class="url fn n" href="%5$s" title="%6$s" rel="author">%7$s</a>
                </span>
                </span>
                <span class="sep"></span>
                <a class="date-post" href="%1$s" title="%2$s" rel="bookmark">
                <time class="entry-date" datetime="%3$s">%4$s</time>
                </a>', 'amat-immo' ) ),
            esc_url( get_the_permalink() ),
            esc_attr( get_the_date()),
            esc_attr( get_the_date( 'c' ) ),
            esc_html( get_the_date()),
            esc_url( get_author_posts_url( (int) get_the_author_meta( 'ID' ) ) ),
            sprintf( esc_attr__( 'View all posts by %s', 'amat-immo' ), get_the_author() ),
            get_the_author()
        );
    }
endif;

//añadir archivo de javascript amat-immo-child/assets/js

function my_scripts_method() {
    wp_enqueue_script(
        'custom-script', // Identificador único para el script
        get_stylesheet_directory_uri() . '/assets/js/custom.js', // Ruta al archivo
        array('jquery'), // Dependencias (jQuery en este caso)
        null, // Versión del archivo (null para desactivar el control de versiones)
        true // Cargar en el footer
    );
    
    // Pasar datos de PHP a JavaScript
    wp_localize_script('custom-script', 'pageData', array(
        'title' => get_the_title()
    ));
}
add_action('wp_enqueue_scripts', 'my_scripts_method');

function add_custom_counter_landing() {
    // Reemplaza con el ID de la página específica
    $page_id = 35404; 
    
    if (is_page($page_id)) {
        ?>
        <script>
            // Fecha y hora del evento (hora de Madrid)
            const eventDate = new Date('2024-07-04T09:00:00+01:00'); // Ajusta la fecha y hora aquí

            function updateCountdown() {
                const now = new Date();
                const timeDifference = eventDate - now;

                if (timeDifference > 0) {
                    const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
                    const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                    document.getElementById('days').textContent = days;
                    document.getElementById('hours').textContent = hours;
                    document.getElementById('minutes').textContent = minutes;
                    document.getElementById('seconds').textContent = seconds;
                } else {
                    document.getElementById('countdown').textContent = '¡El evento ya ha comenzado!';
                }
            }

            setInterval(updateCountdown, 1000);

            // Para depurar y verificar la zona horaria y fechas
            console.log('Fecha del evento:', eventDate);
            console.log('Fecha actual:', new Date());
        </script>
        <?php
    }
}
add_action('wp_footer', 'add_custom_counter_landing');

?>
