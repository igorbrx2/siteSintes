<?php
// Template Name: Multimidia
?>

<?php get_header(); ?>
	
<main id="multimidia">
    <h2>MULTIMÍDIA</h2>

    <div class="linksMultimidia">
        <span>FOTOS</span>
        <p>|</p>
        <span>VÍDEOS</span>
    </div>

    <iframe class="albuns" src="/fotos-multimidia" width="100%" style="border:none;"></iframe>
    <iframe class="videos-multimidia" src="/videos-multimidia" width="100%" style="border:none;"></iframe>
</main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div><?php the_content(); ?></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>