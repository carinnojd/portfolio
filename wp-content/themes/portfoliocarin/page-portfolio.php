<!--header-->
<?php get_header(); ?>

<?php
//THE LOOP
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
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