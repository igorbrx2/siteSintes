<?php
// Template Name: Noticias
?>

<?php get_header(); ?>

<main id="pageNoticias">

<h2 class="noticiash2">NOTÍCIAS</h2>

<?php 
$query = new WP_Query(array(
    'posts_per_page' => 1,
    'category__not_in' => array(get_cat_ID('Artigo'), get_cat_ID('documentos')),
));

if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); 
?>
    <div class="noticiaPrincipalpage">
        <a href="<?php the_permalink(); ?>">
            <div class="imagemNoticia">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
            <?php else : ?>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.jpg" alt="Imagem não disponível">
            <?php endif; ?>
            </div>

            <div class="corpoNoticia">
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

            <p><?php echo wp_trim_words(get_the_excerpt(), 150, '...'); ?></p>
            </div>
        </a>
    </div>
<?php 
endwhile; 
wp_reset_postdata(); 
endif;
?>

</main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div id="noticiasContainer">
    <ul class="noticiasLista">
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Obtém a página atual
        $query = new WP_Query(array(
            'posts_per_page' => 6, // Limita a 6 posts por página
            'paged' => $paged, // Define a página atual
            'category__not_in' => array(get_cat_ID('Artigo'), get_cat_ID('documentos')), // Exclui categorias específicas
        ));

        if ($query->have_posts()) : 
            while ($query->have_posts()) : $query->the_post(); 
        ?>
            <li class="noticiaCard">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php else : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.jpg" alt="Imagem não disponível">
                    <?php endif; ?>
                    <div class="titulonotCard">
                        <h2><?php the_title(); ?></h2>
                        <span class="autorNoticia">publicado por <?php the_author(); ?></span>
                    </div>
                </a>
            </li>
        <?php 
            endwhile; 
        ?>
    </ul>

    <!-- Paginação -->
    <div class="pagination">
        <?php 
        echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => __('&laquo; Anterior'),
            'next_text' => __('Próximo &raquo;'),
        ));
        ?>
    </div>

    <?php 
        wp_reset_postdata(); 
        else : 
    ?>
        <p>Nenhum post encontrado.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>