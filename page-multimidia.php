<?php
// Template Name: Multimidia
?>

<?php get_header(); ?>
	
<main id="multimidia">
    <h2>MULTIMÍDIA</h2>

    <div class="linksMultimidia">
        <a href="#fotos-multimidia"><span>FOTOS</span></a>
        <p>|</p>
        <a href="#videos-multimidia"><span>VÍDEOS</span></a>
    </div>

    <iframe class="albuns" id="fotos-multimidia" src="/fotos-multimidia" width="100%" style="border:none;"></iframe>

    <div class="divisorTitulo"></div>

    <iframe class="videos-multimidia" id="videos-multimidia" src="/videos-multimidia" width="100%" style="border:none;"></iframe>
</main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div><?php the_content(); ?></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>