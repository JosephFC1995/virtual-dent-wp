<?php
/**
 *
 * Codestar Framework
 * A Lightweight and easy-to-use WordPress Options Framework
 *
 */

require_once get_template_directory() . '/framework_admin/cs-framework.php';

add_action('wp_enqueue_scripts', 'template_scripts');
function template_scripts()
{

    /**
     *
     *FancyBox JS
     *
     */
    wp_enqueue_script('FancyBox_js', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.js', array('jquery'), 'false', 'true');

    /**
     *
     *FancyBox CSS
     *
     */
    wp_enqueue_style('FancyBox_css', '//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css', null, false, all);

    /**
     *
     *Animate CSS
     *
     */
    wp_enqueue_style('Animate_CSS', get_template_directory_uri() . '/assets/animatecss/css/animate.min.css', null, false, all);

    /**
     *
     *Bootstrap CSS
     *
     */
    wp_enqueue_style('BootstrapCSS', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', null, false, all);

    /**
     *
     *Style Template CSS
     *
     */
    wp_enqueue_style('Style', get_template_directory_uri() . '/style.css', null, false, all);
    /**
     *
     *Style Responsive Template CSS
     *
     */
    wp_enqueue_style('Style_responsive', get_template_directory_uri() . '/assets/responsive_dental.css', null, false, all);

    /**
     *
     *Font Awesome CSS
     *
     */
    wp_enqueue_style('FontAwesome', get_template_directory_uri() . '/assets/font_awesome/css/fontawesome-all.min.css', null, false, all);

    /**
     *
     *Bootstrap JS
     *
     */
    wp_enqueue_script('BootstrapJS', '//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js', array('jquery'), 'false', 'true');

    /**
     *
     *Google Map API
     *
     */
    wp_enqueue_script('Googlemapapi', '//maps.googleapis.com/maps/api/js?key=AIzaSyCY98qROGP5Dk95s1kzDK06RObx89BZrzw', array('jquery'), false, true);

    /**
     *
     *Index JS
     *
     */
    wp_enqueue_script('themeJS', get_template_directory_uri() . '/assets/theme/js/theme.js', array('jquery'), 'false', 'true');

    /**
     *
     *OWL Carousel JS
     *
     */
    wp_enqueue_script('OwlCarousel_js', '//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js', array('jquery'), false, true);

    /**
     *
     *OWL Carousel CSS
     *
     */
    wp_enqueue_style('OwlCarousel_css', get_template_directory_uri() . '/assets/owl/css/owl.carousel.min.css', null, false, all);

    /**
     *
     *OWL Carousel Theme CSS
     *
     */
    wp_enqueue_style('OwlCarousel_theme_css', get_template_directory_uri() . '/assets/owl/css/owl.theme.default.min.css', null, false, all);

    /**
     *
     *Slick Carousel JS
     *
     */
    wp_enqueue_script('Swiper_master_js', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.0/slick.min.js', array('jquery'), false, true);

    /**
     *
     *Slick Carousel CSS
     *
     */
    wp_enqueue_style('Swiper_master_css', get_template_directory_uri() . '/assets/slick_carousel/css/slick.css', null, false, all);

    /**
     *
     *MArker JS
     *
     */
    wp_enqueue_script('nn', '//s3-us-west-2.amazonaws.com/s.cdpn.io/134893/SVGMarker.js', array('jquery'), false, true);

}

// Google fonts
function dentalclinic_fonts_url()
{
    $fonts_url = '';

    /* Translators: If there are characters in your language that are not
     * supported by Open Sans, translate this to 'off'. Do not translate
     * into your own language.
     */
    $open_sans = _x('on', 'Open Sans font: on or off', 'dentalcare');

    /* Translators: If there are characters in your language that are not
     * supported by Raleway, translate this to 'off'. Do not translate
     * into your own language.
     */
    $raleway = _x('on', 'Raleway font: on or off', 'dentalcare');

    /* Translators: If there are characters in your language that are not
     * supported by Montserrat, translate this to 'off'. Do not translate
     * into your own language.
     */
    $montserrat = _x('on', 'Montserrat font: on or off', 'dentalcare');

    /* Translators: If there are characters in your language that are not
     * supported by PT+Sans, translate this to 'off'. Do not translate
     * into your own language.
     */
    $PTSans = _x('on', 'PT Sans font: on or off', 'dentalcare');

    if ('off' !== $raleway || 'off' !== $open_sans || 'off' !== $montserrat || 'off' !== $PTSans) {
        $font_families = array();
        if ('off' !== $raleway) {
            $font_families[] = 'Raleway:300,400,700,800';
        }
        if ('off' !== $open_sans) {
            $font_families[] = 'Open Sans:300,300i,400,400i,600,600i,700,700i,800';
        }
        if ('off' !== $montserrat) {
            $font_families[] = 'Montserrat:100,300,400,500,700,900';
        }
        if ('off' !== $PTSans) {
            $font_families[] = 'PT Sans:100,300,400,500,700,900';
        }

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext'),
        );
        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }
    return esc_url_raw($fonts_url);
}

function dentalclinic_scripts_styles()
{
    wp_enqueue_style('fonts', dentalclinic_fonts_url(), array(), null);
}
add_action('wp_enqueue_scripts', 'dentalclinic_scripts_styles');

function mis_menus()
{
    register_nav_menus(
        array(
            'navegation' => __('Menú de navegación'),
        )
    );
}
add_action('init', 'mis_menus');

/**
 *
 *Widget Footer_1
 *
 */

add_action('widgets_init', 'sidebar_principal');

function sidebar_principal()
{
    $args = array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar_principal',
        'description'   => '',
        'before_widget' => '<div class="sidebar_dental space_1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>');
    register_sidebar($args);
}

/**
 *
 *Widget Footer_1
 *
 */

add_action('widgets_init', 'widget_footer_1');

function widget_footer_1()
{
    $args = array(
        'name'          => 'Zona para widget 1 de footer',
        'id'            => 'widget_footer_1',
        'description'   => '',
        'before_widget' => '<div class="footer_space space_1">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>');
    register_sidebar($args);
}

/**
 *
 *Widget Footer_2
 *
 */

add_action('widgets_init', 'widget_footer_2');

function widget_footer_2()
{
    $args = array(
        'name'          => 'Zona para widget 2 de footer',
        'id'            => 'widget_footer_2',
        'description'   => '',
        'before_widget' => '<div class="footer_space space_2">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>');
    register_sidebar($args);
}

/**
 *
 *Widget Footer_3
 *
 */
add_action('widgets_init', 'widget_footer_3');

function widget_footer_3()
{
    $args = array(
        'name'          => 'Zona para widget 3 de footer',
        'id'            => 'widget_footer_3',
        'description'   => '',
        'before_widget' => '<div class="footer_space space_3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6 class="titulo_calendario_front">',
        'after_title'   => '</h6>');
    register_sidebar($args);
}
/**
 *
 *Widget Calendario
 *
 */
add_action('widgets_init', 'widget_calendario_front');

function widget_calendario_front()
{
    $args = array(
        'name'          => 'Zona para calendario',
        'id'            => 'widget_calendario_front',
        'description'   => '',
        'before_widget' => '<div class="widget_calendar space_3">',
        'after_widget'  => '</div>',
        'before_title'  => '<h6>',
        'after_title'   => '</h6>');
    register_sidebar($args);
}

/**
 *
 *Imagen Destacada
 *
 */
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

function theme_pagination_fn($pages = '', $range = 2)
{
    $showitems = ($range * 2) + 1; // This is the items range, that we can pass it as parameter depending on your necessary.

    global $paged; // Global variable to catch the page counts
    if (empty($paged)) {
        $paged = 1;
    }

    if ($pages == '') {
        // paged is not defined than its first page. just assign it first page.
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }

    }

    if (1 != $pages) {
        //For other pages, make the pagination work on other page queries
        echo "<div class='theme_jf_pagination'>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
            echo "<a href='" . get_pagenum_link(1) . "'>&laquo;</a>";
        }

        if ($paged > 1 && $showitems < $pages) {
            echo "<a href='" . get_pagenum_link($paged - 1) . "' class='current'>&lsaquo;</a>";
        }

        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class='current active'>" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class='inactive current' >" . $i . "</a>";
            }

        }

        if ($paged < $pages && $showitems < $pages) {
            echo "<a href='" . get_pagenum_link($paged + 1) . "' class='current'>&rsaquo;</a>";
        }

        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) {
            echo "<a href='" . get_pagenum_link($pages) . "' class='current'>&raquo;</a>";
        }

        echo "</div>\n";
    }
}

add_action('init', 'custom_post_type_cuestionario');

function custom_post_type_cuestionario()
{

    $labels = array(

        'name'               => _x('Cuestionario', 'post type general name'),

        'singular_name'      => _x('Cuestionario', 'post type singular name'),

        'add_new'            => _x('Añadir custionario', 'book'),

        'add_new_item'       => __('Añadir nuevo custionario'),

        'edit_item'          => __('Editar custionario'),

        'new_item'           => __('Nuevo custionario'),

        'view_item'          => __('Ver custionario'),

        'search_items'       => __('Buscar'),

        'not_found'          => __('No se han encontrado custionario'),

        'not_found_in_trash' => __('No se han encontrado custionario'),

        'parent_item_colon'  => '',

    );

    // Creamos un array para $args

    $args = array('labels' => $labels,

        'public'               => true,

        'publicly_queryable'   => true,

        'show_ui'              => true,

        'query_var'            => false,

        'rewrite'              => array('slug' => 'cuestionario', 'with_front' => false),

        'has_archive'          => 'cuestionario',

        'capability_type'      => 'post',

        'hierarchical'         => false,

        'menu_position'        => null,

        'supports'             => array('title', 'author', 'thumbnail'),

    );

    register_post_type('cuestionario', $args);

}

function my_page_template_redirect()
{
    if ((is_page('questionario') && !is_user_logged_in())
        || (is_post_type_archive('cuestionario') && !is_user_logged_in())

    ) {
        wp_redirect(home_url(''));
        die;
    }
}
add_action('template_redirect', 'my_page_template_redirect');

add_filter('acf/load_field/key=field_5d3003eca55bc', 'my_acf_load_field');

function my_acf_load_field($field)
{

    $field['choices'] = array(
        '1' => '<img src="http://virtualdent.net/wp-content/uploads/2019/07/erika.jpg" alt="image" class="imag_label" />',
        '2' => '<img src="http://virtualdent.net/wp-content/uploads/2019/07/elizabet.jpg" alt="image" class="imag_label" />',
    );

    return $field;
}

add_action('admin_menu', 'linked_url');
function linked_url()
{
    add_menu_page('linked_url', 'Cuestionario', 'read', 'my_slug_e', '', 'dashicons-text', 3);
}

add_action('admin_menu', 'linkedurl_function');

function linkedurl_function()
{
    global $menu;
    $menu[3][2] = "//virtualdent.net/questionario/";
}
