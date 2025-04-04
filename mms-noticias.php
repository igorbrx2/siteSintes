<div class="colunaNoticias" id="newsContainer">
            <?php 

// Busca o post mais recente
$query = new WP_Query(array(
    'posts_per_page' => 1,
    'category__not_in' => array(get_cat_ID('Artigo'), get_cat_ID('documentos')),
));

if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
?>
    <div class="noticiaPrincipal">
        <a href="<?php the_permalink(); ?>">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
            <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.jpg" alt="Imagem não disponível">
            <?php endif; ?>

            <span class="cidadeNoticia">
                <?php 
                $categories = get_the_category();
                if (!empty($categories)) {
                    echo esc_html($categories[0]->name);
                }
                ?>
            </span>

            <h2><?php the_title(); ?></h2>
            
            <span class="autorNoticia">publicado por <?php the_author(); ?></span>

            <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
        </a>
    </div>
<?php 
endwhile; 
wp_reset_postdata(); 
endif;
?>

<ul class="outrasNoticias">
    <?php 
    // Busca os 6 posts mais recentes (excluindo o primeiro, se já mostrado antes)
    $query = new WP_Query(array(
        'posts_per_page' => 6,
        'offset' => 1,
        'category__not_in' => array(get_cat_ID('Artigo'), get_cat_ID('documentos')),
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

                <div>
                    <span class="cidadeNoticia">
                        <?php 
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo esc_html($categories[0]->name);
                        }
                        ?>
                    </span>

                    <h3><?php the_title(); ?></h3>
                    
                    <span class="autorNoticia">publicado por <?php the_author(); ?></span>
                </div>
            </a>
        </li>
    <?php 
        endwhile; 
        wp_reset_postdata(); 
    endif;
    ?>
</ul>

            </div>