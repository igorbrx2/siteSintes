<?php
// Template Name: noticias
?>

<?php get_header(); ?>


<main id="todasNoticias">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
    <?php the_content(); ?>
    
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    
</main>


<?php get_footer(); ?>

