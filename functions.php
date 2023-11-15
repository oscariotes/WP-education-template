<?php
function university_files() {
    // Favicon
    wp_enqueue_style("university_favicon", get_theme_file_uri("/img/favicon.ico"), array(), '1.0');

    // Enqueue Google Fonts preconnect styles
    wp_enqueue_style("preconnect_google_fonts", false);
    wp_style_add_data("preconnect_google_fonts", "href", "https://fonts.googleapis.com");
    wp_enqueue_style("preconnect_google_fonts_crossorigin", false);
    wp_style_add_data("preconnect_google_fonts_crossorigin", "href", "https://fonts.gstatic.com");
    wp_style_add_data("preconnect_google_fonts_crossorigin", "crossorigin", true);

    // Enqueue Google Fonts
    wp_enqueue_style("heebo_nunito_fonts", "//fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap", array(), '1.0');

    // Enqueue Icons Fonts
    wp_enqueue_style("bootstrap_icons_cdn", "//cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css", array(), '1.4.1');
    wp_enqueue_style("font_awesome_cdn", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css", array(), '5.10.0');

    // Library Style Sheets
    wp_register_style("university_animate", get_theme_file_uri("/lib/animate/animate.min.css"), array(), '3.7.2', 'all');
    wp_enqueue_style("university_animate");

    wp_register_style("university_carousel", get_theme_file_uri("/lib/owlcarousel/assets/owl.carousel.min.css"), array(), '2.3.4', 'all');
    wp_enqueue_style("university_carousel");

    // Library Style Sheets
    //wp_enqueue_style("university_animate", get_theme_file_uri("/lib/animate/animate.min.css"), array(), '3.5.2', 'all');
    //p_enqueue_style("university_carousel", get_theme_file_uri("/lib/owlcarousel/assets/owl.carousel.min.css"), array(), '2.2.1', 'all');

    // Enqueue Theme Styles
    wp_enqueue_style("bootstrap_styles", get_theme_file_uri("/css/bootstrap.min.css"), array(), '5.1.3');
    wp_enqueue_style("university_main_styles", get_theme_file_uri("/css/style.css"), array(), '1.0');


// jQuery
wp_register_script("university_jquery_code", "//code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1', true);
wp_enqueue_script("university_jquery_code");

// Bootstrap (with jQuery as a dependency)
wp_register_script("university_bootstrap_cdn", "//cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js", array('jquery'), '5.0.0', true);
wp_enqueue_script("university_bootstrap_cdn");

// Wow.js
wp_register_script("university_wow", get_theme_file_uri("/lib/wow/wow.min.js"), array(), '1.3.0', true);
wp_enqueue_script("university_wow");

// Easing.js
wp_register_script("university_easing", get_theme_file_uri("/lib/easing/easing.min.js"), array(), '1.4.5', true);
wp_enqueue_script("university_easing");

// Waypoints.js
wp_register_script("university_waypoints", get_theme_file_uri("/lib/waypoints/waypoints.min.js"), array(), '4.0.1', true);
wp_enqueue_script("university_waypoints");

//Owl carousel

wp_register_script("university_carousel_script", get_theme_file_uri("lib/owlcarousel/owl.carousel.min.js"), array(), '2.2.1', true);
wp_enqueue_script("university_carousel_script");

// Main JS
wp_register_script("university_main_script", get_theme_file_uri("/js/main.js"), array("jquery"), '1.0', true);
wp_enqueue_script("university_main_script");





}

add_action("wp_enqueue_scripts", "university_files");





?>