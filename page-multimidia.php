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

    <div class="albuns" id="fotos-multimidia"><?php the_content(); ?></div>

    <div class="divisorTitulo"></div>

    <div class="videos-multimidia" id="videos-multimidia" width="100%" style="border:none;">
    <?php echo do_shortcode('[youtube-feed feed=1]'); ?>
    </div>
</main>

<?php get_footer(); ?>