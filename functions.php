<?php

// REQUISIÇÃO CROSS ORIGIN
function adicionar_cors_headers() {
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
    header("Access-Control-Allow-Headers: Content-Type");
}
add_action('init', 'adicionar_cors_headers');



// HABILITA SUPORTE A THUMBNAILS
add_theme_support('post-thumbnails');

// REMOÇÃO DE LINKS DESNECESSÁRIOS NO HEAD
function clean_up_head() {
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
}
add_action('init', 'clean_up_head');

// CARREGAMENTO DE SCRIPTS E DADOS ACF
function enqueue_custom_scripts() {
    // Carrega o script.js com jQuery como dependência
    wp_enqueue_script(
        'custom-script', // Nome do script
        get_stylesheet_directory_uri() . '/script.js', // Caminho do script
        array('jquery'), // Dependências
        null, // Versão
        true // Carregar no footer
    );

    // Recupera o valor do campo ACF
    $compromissos = get_field('compromissos', 'option'); // Use 'option' se for um campo global

    // Passa o valor do campo ACF para o JavaScript
    wp_localize_script('custom-script', 'acfData', array(
        'compromissos' => $compromissos,
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

// ENDPOINT REST API PERSONALIZADO
function custom_posts_endpoint() {
    register_rest_route('custom/v1', '/posts', array(
        'methods' => 'GET',
        'callback' => 'get_filtered_posts',
        'permission_callback' => '__return_true'
    ));
}
add_action('rest_api_init', 'custom_posts_endpoint');