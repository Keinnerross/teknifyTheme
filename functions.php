<?php

function init_template()
{
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");

    register_nav_menus(
        array(
            'top-menu' => 'Menú Principal'
        )
    );
}

add_action("after_setup_theme", "init_template");















function assets()
{
    wp_register_style("tailwind", get_template_directory_uri() . "/src/output.css", "", "1.0", 'all');
    wp_register_style("montserrat", "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap", "", "1.0", "all");

    wp_enqueue_style('estilos', get_stylesheet_uri(), array("tailwind", "montserrat"), "1.0", "all");

    wp_enqueue_script("custom", get_template_directory_uri() . "/assets/js/custom.js", "", "1.0", true);
    

}


add_action("wp_enqueue_scripts", "assets");



// The shortcode only works in WordPress front page 

// Shortcode Creation
add_action('init', 'dcms_add_shortcode');

function dcms_add_shortcode()
{
    add_shortcode('particles-background', 'dcms_particles_background');
}

function dcms_particles_background($atts, $content)
{
    $str = '<div id="particles-js">' . $content . '</div>';
    return $str;
}

// Javascript library and configuration
add_action('wp_footer', 'dcms_footer_scripts');

function dcms_footer_scripts()
{
    if (!is_front_page())
        return;
    ?>
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script type="text/javascript">
            particlesJS("particles-js",
                    //Configuracion JSON
                     {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true}
                    );
        </script>
        <?php
}

// CSS configuration
add_action('wp_footer', 'dcms_footer_styles');

function dcms_footer_styles()
{
    if (!is_front_page())
        return;
    ?>
        <style>
            #particles-js {
                display: flex;
                align-items: center;
                justify-content: center;
                position: relative;
                width: 100%;
                min-height: 400px;
            }

            .particles-js-canvas-el{
                z-index: 2;
            }
    

        </style>
        <?php
}


function load_font_awesome() {
    // Registra el script de Font Awesome
    wp_register_script('font-awesome', 'https://kit.fontawesome.com/b829081f82.js', array(), null, true);
    
    // Lo encola para cargarlo en el front-end
    wp_enqueue_script('font-awesome');
}
// Agrega la función a la acción wp_enqueue_scripts
add_action('wp_enqueue_scripts', 'load_font_awesome');  