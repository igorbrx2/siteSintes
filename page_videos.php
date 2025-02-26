<?php
// Template Name: Videos
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_title(); ?>
	<?php the_content(); ?>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>

</html>