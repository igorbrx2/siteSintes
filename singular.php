<?php
// Template Name: singular
?>

<?php get_header(); ?>

<ul class="linksPosts">
    <li><a href="/home">Home</a></li>
    <li><span>|</span></li>
    <li><a href="/noticias">Notícias</a></li>
</ul>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<article id="corpoPosts">

	<div class="tituloPost">
	<?php the_title(); ?>
	</div>

	<div class="divisorTitulo"></div>
    <span class="cidadeNoticia">
	<?php 
        $categories = get_the_category();
        if ( ! empty( $categories ) ) {
            echo esc_html( $categories[0]->name ); 
        }
        ?>
	</span>
    <span class="autorNoticia">publicado por <?php the_author(); ?></span>

	<div class="corpoTexto">
	<?php the_content(); ?>
	</div>

	</article>


<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>