<!--header-->
<?php get_header(); ?>

<?php
//THE LOOP
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h1><?php the_title(); ?></h1>
		<?php the_post_thumbnail('banner-image'); ?>
		<?php the_content(); ?>
	</article>
	<?php endwhile; ?>

<?php else : ?>
	<p><?php _e( 'Inga inlägg.' ); ?></p>
	<?php
endif;
?>

<!--footer-->
<?php get_footer(); ?>