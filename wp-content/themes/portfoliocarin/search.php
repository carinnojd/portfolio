<!--header-->
<?php get_header(); ?>



<?php

//https://www.youtube.com/watch?v=3fgEgzPx7QM

//THE LOOP
if (have_posts()) : ?>
	<h2>Sökresultat för: <?php the_search_query(); ?></h2>
	<?php
	while (have_posts()) : the_post(); ?>

	<article class="post">
		<div class="thumbnail">
			<?php the_post_thumbnail('small-thumbnail'); ?>
		</div>
		<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>

		<?php the_excerpt(); ?>
		
	</article>
	<?php endwhile; ?>

<?php else : ?>
	<p><?php _e( 'Inga inlägg.' ); ?></p>
	<?php
endif;
?>

<!--footer-->
<?php get_footer(); ?>