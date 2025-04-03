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
$query = new WP_Query([
    'category_name'  => 'documentos',
    'posts_per_page' => 10
]);

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post(); ?>

<main class="todosDoc">
    <div class="cardDoc">

    <a href="<?php the_permalink(); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?> "alt="<?php the_title(); ?>">
            <?php endif; ?>
        </a>

    <h2><?php the_title(); ?></h2>
    <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
    <a href="<?php the_permalink(); ?>">Acessar o doc...</a>
    </div>
</main>

<?php endwhile;
wp_reset_postdata();
endif; ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>