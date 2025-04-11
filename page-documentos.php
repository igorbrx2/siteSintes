<?php
// Template Name: documentos
?>

<?php get_header(); ?>

<h2 class="documentosh2">DOCUMENTOS</h2>

<?php
$query = new WP_Query([
    'category_name'  => 'documentos',
    'posts_per_page' => 1
]);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>
        <article class="documentoRecente">

            <a href="<?php the_permalink(); ?>">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
            </a>
            <div class="descricaoDoc">
                <h2><?php the_title(); ?></h2>
                <p><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                <a href="<?php the_permalink(); ?>">Acessar o doc...</a>
            </div>
        </article>
    <?php endwhile;
    wp_reset_postdata();
endif; ?>

<?php
$args = array(
    'category_name' => 'documentos',
    'posts_per_page' => -1,
    'post_status' => 'publish'
);

$documentos_query = new WP_Query($args);

if ($documentos_query->have_posts()) : ?>
    
    
    <main class="todosDoc">
        <?php while ($documentos_query->have_posts()) : $documentos_query->the_post(); ?>
            <div class="cardDoc">
                <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                    <?php else : ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </a>
                
                <h2><?php the_title(); ?></h2>
                
                <p>
                    <?php 
                    echo wp_trim_words(get_the_content(), 20, '...'); 
                    ?>
                </p>
                
                <a href="<?php the_permalink(); ?>" class="btn-doc">Acessar o doc...</a>
            </div>
        <?php endwhile; ?>
    </main>
    
    <?php wp_reset_postdata(); ?>
<?php else : ?>
    <p>Nenhum documento encontrado.</p>
<?php endif; ?>


<?php get_footer(); ?>