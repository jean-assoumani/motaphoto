
<?php
add_theme_support('title-tag');

// Enregistre les emplacements des menus
function mota_photo_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Menu principal', 'mota-photo'),
        'footer'  => __('Menu footer', 'mota-photo'),
    ));
}
add_action('init', 'mota_photo_register_menus');

// Enqueue des scripts et des styles
function mota_photo_enqueue_scripts()
{
    wp_enqueue_style('mota-photo-style', get_stylesheet_uri());
    wp_enqueue_script('mota-photo-script', get_template_directory_uri() . '/assets/js/toggle.js', array('jquery'), null, true);
    wp_enqueue_script('contact-modal-script', get_template_directory_uri() . '/assets/js/contact-modal.js', ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', 'mota_photo_enqueue_scripts');
