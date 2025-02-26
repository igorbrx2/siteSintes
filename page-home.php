<?php
// Template Name: Home
?>

<?php get_header(); ?>

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
                <li><a href="./">Notícias</a></li>
                <li><a href="">Documentos</a></li>
                <li><a href="">Multimídia</a></li>
                <li><a href="">Canais e Redes Sociais</a></li>
                <li><a href="">Política de Privacidade</a></li>
            </ul>
            <a class="logo" href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>./img/logo.png" alt=""></a>
            <img class="pesquisa" src="<?php echo get_stylesheet_directory_uri(); ?>./img/pesquisar.png" alt="">
        </nav>
    </header>

    <main>

        <div class="paginaAtiva">
            <a class="btnPage" href="./">MMS</a>
            <h1 class="page">GERAL</h1>
        </div>

        <div class="conteudo">

            <div class="colunas">
            <div class="colunaNoticias">
                <div class="noticiaPrincipal">
                    <a href="">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/professorabebida.jpg" alt="">
                    <span class="cidadeNoticia">São Gonçalo</span>
                    <h2>Professora só dorme depois de tomar uma dose de cachaça</h2>
                    <span class="autorNoticia">Por J.Linfonodo</span>
                    <p>A narrativa ainda traz dilemas existenciais: será que é a cachaça que ajuda a dormir, ou é o sono que ajuda a preciar melhor a cachaça? É uma mistura de filosofia de boteco com determinação de maratonista!</p>
                    </a>
                </div>
                <ul class="outrasNoticias">
                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/telacinza.jpeg" alt="">
                        <div>
                            <span class="cidadeNoticia">Natal</span>
                            <h3>Sem saúde, energia e água: Brasil vive o caos das privatizações</h3>
                            <span class="autorNoticia">Por Bruxo da Frasqueira</span>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/telacinza.jpeg" alt="">
                        <div>
                            <span class="cidadeNoticia">Natal</span>
                            <h3>Sem saúde, energia e água: Brasil vive o caos das privatizações</h3>
                            <span class="autorNoticia">Por Bruxo da Frasqueira</span>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/telacinza.jpeg" alt="">
                        <div>
                            <span class="cidadeNoticia">Natal</span>
                            <h3>Sem saúde, energia e água: Brasil vive o caos das privatizações</h3>
                            <span class="autorNoticia">Por Bruxo da Frasqueira</span>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/telacinza.jpeg" alt="">
                        <div>
                            <span class="cidadeNoticia">Natal</span>
                            <h3>Sem saúde, energia e água: Brasil vive o caos das privatizações</h3>
                            <span class="autorNoticia">Por Bruxo da Frasqueira</span>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/telacinza.jpeg" alt="">
                        <div>
                            <span class="cidadeNoticia">Natal</span>
                            <h3>Sem saúde, energia e água: Brasil vive o caos das privatizações</h3>
                            <span class="autorNoticia">Por Bruxo da Frasqueira</span>
                        </div>
                        </a>
                    </li>
                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/telacinza.jpeg" alt="">
                        <div>
                            <span class="cidadeNoticia">Natal</span>
                            <h3>Sem saúde, energia e água: Brasil vive o caos das privatizações</h3>
                            <span class="autorNoticia">Por Bruxo da Frasqueira</span>
                        </div>
                        </a>
                    </li>
                
                </ul>
            </div>

            <div class="colunaArtigos">
                <ul>

                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/etvarginha.jpg" alt="">
                        <span class="categoria">Artigo</span>
                        <h3>ET de Varginha foi realmente visto no bairro das Rocas?</h3>
                        <span class="autorNoticia">Por Paulinho PSTU</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/fotosmonalisa.jpg" alt="">
                        <span class="categoria">Artigo</span>
                        <h3>Das massas às bolhas: problemas conceituais em uma noção difusa</h3>
                        <span class="autorNoticia">Por Elba Tiúma</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/macacodedo.jpg" alt="">
                        <span class="categoria">Artigo</span>
                        <h3>O homem ainda faz o que o macaco fazia</h3>
                        <span class="autorNoticia">Por Kuka Beludo</span>
                        </a>
                    </li>

                    <li>
                        <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>./img/bruno.jpg" alt="">
                        <span class="categoria">Artigo</span>
                        <h3>O time até que é bom, o que mata é o goleiro</h3>
                        <span class="autorNoticia">Por Balan Sah Hola</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="colunaCalendario">
                <div class="container" id="agenda">
                    <div class="calendar">
                      <div class="month">
                        <i class="prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>./img/setaEsquerda.png" alt=""></i>
                        <div class="date">
                          <h1></h1>
                          <p class="montserrat-font"></p>
                        </div>
                        <i class="next"><img src="<?php echo get_stylesheet_directory_uri(); ?>./img/setaDireita.png" alt=""></i>
                      </div>
                      <div class="weekdays" style="font-size: .5rem; font-weight: 900; color: rgb(43, 43, 43);">
                        <div style="color: rgb(253, 39, 39)">D</div>
                        <div>S</div>
                        <div>T</div>
                        <div>Q</div>
                        <div>Q</div>
                        <div>S</div>
                        <div>S</div>
                      </div>
                      <div class="days" style="font-size: .7rem; font-weight: 900; color: rgb(43, 43, 43);"></div>
                    </div>
                    <div class="agenda">
                      <!-- <div class="prox-eventos"><span class="montserrat-font">PRÓXIMOS EVENTOS</span></div> -->
                      <div class="events montserrat-font" style="line-height: 1.1;"></div>
                    </div>
                  </div>
            </div>
            </div>

        </div>

        <section id="videos">
        <h2>VÍDEOS</h2>

        <div class="videosMMS">
        <iframe src="/videos" width="100%" style="border:none;"></iframe>
        </div>

        </section>

    </main>

    <?php get_footer(); ?>