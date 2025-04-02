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

    <div class="albuns" id="fotos-multimidia" width="100%" style="border:none;">
    <?php echo do_shortcode('[foogallery-album id="123"] [foogallery-album id="122"]'); ?>
    </div>

    <div class="divisorTitulo"></div>

    <div class="videos-multimidia" id="videos-multimidia" width="100%" style="border:none;">
    <?php echo do_shortcode('[youtube-feed feed=1]'); ?>
    </div>
</main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div><?php the_content(); ?></div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>