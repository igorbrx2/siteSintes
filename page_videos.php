<?php
// Template Name: Videos
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimento Muda Sinte - Oposição ao Sinte/RN</title>

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/responsivo.css" media="screen" />

    <?php wp_head(); ?>
</head>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

<?php endwhile; else: ?>

<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>

</html>