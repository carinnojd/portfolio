<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portfolio - Carin
 * @subpackage Portfolio - Carin
 * @since Portfolio - Carin 1.0
 */
?>

<!--header-->
<?php get_header(); ?>



<?php

//https://www.youtube.com/watch?v=3fgEgzPx7QM

//THE LOOP
if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post">
		<div class="thumbnail">
			<?php the_post_thumbnail('small-thumbnail'); ?>
		</div>
		<h1><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h1>

		<?php if($post->post_excerpt) { ?>
			<p>
			<?php echo get_the_excerpt(); ?>
			<a href="<?php the_permalink(); ?>">Läs mer &raquo;</a>
			</p>
		<?php } else {
			the_content();
		} ?>
		
	</article>
	<?php endwhile; ?>

<?php else : ?>
	<p><?php _e( 'Inga inlägg.' ); ?></p>
	<?php
endif;
?>

<!--footer-->
<?php get_footer(); ?>



