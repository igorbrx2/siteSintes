<?php
// Template Name: Posts
?>

<?php get_header(); ?>

<ul class="linksPosts">
    <li><a href="/home">HOME</a></li>
    <li><span>|</span></li>
    <li><a href="/noticias">Notícias</a></li>
</ul>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_title(); ?>
    <div class="divisorTitulo"></div>
    <span class="cidadeNoticia">São Gonçalo</span>
    <span class="autorNoticia">Por J.Linfonodo</span>

    <article id="corpoPosts">
	<?php the_content(); ?>
    </article>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>