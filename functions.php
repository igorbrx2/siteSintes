<?php
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



?>