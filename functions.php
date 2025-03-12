<?php

// REQUISIÇÃO CROSS ORIGIN
function adicionar_cors_headers() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
}
add_action('init', 'adicionar_cors_headers');


// CARREGAMENTO DE SCRIPTS
function enqueue_custom_scripts() {
    // Carrega o script.js com jQuery como dependência
    wp_enqueue_script(
        'custom-script', // Nome do script
        get_stylesheet_directory_uri() . '/script.js', // Caminho do script
        array('jquery'), // Dependências (jQuery é incluído aqui)
        null, // Versão do script (não é necessário)
        true // Carregar no footer (antes do fechamento do </body>)
    );
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_theme_support('post-thumbnails');

function custom_posts_endpoint() {
    register_rest_route('custom/v1', '/posts', array(
        'methods' => 'GET',
        'callback' => 'get_filtered_posts',
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'custom_posts_endpoint');

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');


?>