<?php
add_action('wp_enqueue_scripts', 'add_styles');

function add_styles()
{

    wp_register_style(
        'google-fonts_style',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap',
        array(),
        '1.0'
    );


    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    wp_enqueue_style(
        'main_style',
        get_template_directory_uri() . '/css/main.css',
        array('reset_style', 'google-fonts_style'),
        '1.0'
    );
}

add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts() {
wp_deregister_script('jquery');


wp_register_script(
    'jquery_script',
    'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
    array(),
    '1.0'
);

wp_enqueue_script(
    'main_script',
    get_template_directory_uri() . '/js/main.js',
    array('jquery_script'),
    '1.0',
    true
);
}

function add_favicon() {
    echo '<link rel="icon" type="image/webp" href="' . get_template_directory_uri() . '/img/favicon.webp">';
    echo '<link rel="icon" type="image/png" href="' . get_template_directory_uri() . '/img/favicon.png">';
}
add_action('wp_head', 'add_favicon');
?>