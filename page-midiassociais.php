<?php
// Template Name: Midias Sociais
?>

<?php get_header(); ?>

<h2 class="midiash2">MÍDIAS SOCIAIS</h2>

<ul class="botoesMidias">
	<li><a href="#midiasMMS">MMS</a></li>
	<li><a href="#midiasSGA">São Gonçalo do Amarante</a></li>
	<li><a href="#midiasCM">Ceará-Mirim</a></li>
	<li><a href="#midiasUZL">Umarizal</a></li>
</ul>

<main class="todasMidias">


<h2 class="midiash2" style="padding-top: 5vh; font-weight: bold;" >MOVIMENTO MUDA SINTE</h2>
<div id="midiasMMS">

	<div class="ig">
	<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
	</div>

	<div class="fb">
	<?php echo do_shortcode('[custom-facebook-feed feed=1]'); ?>
	</div>

</div>

<h2 class="midiash2" style="padding-top: 5vh; font-weight: bold;">São Gonçalo do Amarante</h2>
<div id="midiasSGA">
<div class="ig">

	<?php echo do_shortcode('[instagram-feed feed=2]'); ?>
	</div>

	<div class="fb">
	<?php echo do_shortcode('[custom-facebook-feed feed=2]'); ?>
	</div>

</div>

<h2 class="midiash2" style="padding-top: 5vh; font-weight: bold;">Ceará-Mirim</h2>
<div id="midiasCM">

	<div class="ig">
	<?php echo do_shortcode('[instagram-feed feed=1]'); ?>
	</div>

	<div class="fb">
	<?php echo do_shortcode('[custom-facebook-feed feed=3]'); ?>
	</div>

</div>

<h2 class="midiash2" style="padding-top: 5vh; font-weight: bold;">Umarizal</h2>
<div id="midiasUZL">

	<div class="ig">
	<?php echo do_shortcode('[instagram-feed feed=3]'); ?>
	</div>

</div>


</main>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>