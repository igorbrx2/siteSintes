<?php
// Template Name: Midias Sociais
?>

<?php get_header(); ?>

<h2 class="midiash2">MÍDIAS SOCIAIS</h2>

<ul class="botoesMidias">
	<li><a href="#midiasMMM">MMS</a></li>
	<li><a href="#midiasSGA">São Gonçalo do Amarante</a></li>
	<li><a href="#midiasCM">Ceará-Mirim</a></li>
	<li><a href="#midiasUZL">Umarizal</a></li>
</ul>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>