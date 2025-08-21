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

<?php get_footer(); ?>