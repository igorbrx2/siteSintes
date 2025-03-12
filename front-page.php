<?php
// Template Name: Home
?>

<?php get_header(); ?>

    <main>

        <div class="paginaAtiva">

        <div class="dropdown">
    <button class="btnPage" id="dropdownButton">MMS</button>
    <div class="dropdown-content">
        <a href="#" data-value="MMS">MMS</a>
        <a href="#" data-value="São Gonçalo">São Gonçalo</a>
        <a href="#" data-value="Ceará-Mirim">Ceará-Mirim</a>
        <a href="#" data-value="Umarizal">Umarizal</a>
    </div>
</div>

            <h1 class="page">GERAL</h1>
        </div>

        <div class="conteudo">

            <div class="colunas">
            
            <div class="mmsNoticias">
            <?php get_template_part('mms-noticias'); ?>
            </div>

            <div class="sgaNoticias">
            <?php get_template_part('sga-noticias'); ?>
            </div>

            <div class="cmNoticias">
            <?php get_template_part('cm-noticias'); ?>
            </div>

            <div class="uzlNoticias">
            <?php get_template_part('uzl-noticias'); ?>
            </div>


            <div class="colunaArtigos">
            <ul id="articlesContainer">
    <?php 
    // Busca os 4 posts mais recentes da categoria "Artigo"
    $query = new WP_Query(array(
        'category_name'  => 'artigo', // Filtra pela categoria "Artigo"
        'posts_per_page' => 4, // Limita a 4 posts
    ));

    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post(); 
    ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>">
                <?php else : ?>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.jpg" alt="Imagem não disponível">
                <?php endif; ?>

                <span class="categoria">
                    <?php 
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        echo esc_html($categories[0]->name);
                    }
                    ?>
                </span>

                <h3><?php the_title(); ?></h3>
                
                <span class="autorNoticia">Por <?php the_author(); ?></span>
            </a>
        </li>
    <?php 
        endwhile; 
        wp_reset_postdata(); 
    endif;
    ?>
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