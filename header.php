<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimento Muda Sinte - Oposição ao Sinte/RN</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/responsivo.css" media="screen" />

    <?php wp_head(); ?>
</head>

<body>

    <header>
        <nav>
            <div class="menuBtn">
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line1"></div>
                <div class="line1"></div>
            </div>
            <span>MENU</span>
        </div>
            <ul class="nav-list">
                <li><a href="/noticias">Notícias</a></li>
                <li><a href="/">Documentos</a></li>
                <li><a href="/multimidia">Multimídia</a></li>
                <li><a href="/midias-sociais">Mídias Sociais</a></li>
                <li><a href="/privacidade">Política de Privacidade</a></li>
            </ul>
            <a class="logo" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>./img/logo.png" alt=""></a>

            <div class="pesquisa">
    <button id="searchIcon">
        <img class="pesquisaIcone" src="<?php echo get_stylesheet_directory_uri(); ?>/img/pesquisar.png" alt="Pesquisar">
    </button>
    <form id="searchForm" action="<?php echo home_url('/'); ?>" method="get" class="search-hidden">
        <input type="text" style="border-radius: 45px; border:none; width: 15vw; box-sizing:border-box;text-align:center;" name="s" placeholder="Buscar no site..." required>
        <!-- <button type="submit"></button> -->
    </form>
</div>


        </nav>

    </header>
    