<?php
/*
Template Name: Testa
*/
?>

<!--header-->
<?php get_header(); ?>

<?php
//THE LOOP
if (have_posts()) :
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">

		<?php 
		if(has_children() OR $post->post_parent > 0) { ?>
			<nav class="navbar children-links">
				<span class="parent-link">
					<a href="<?php echo get_the_permalink(get_child_li());?>">
						<?php echo get_the_title(get_child_li()); ?>	
					</a>
				</span>
				<ul>
					<?php 
					$childNav = array(
						'child_of' => get_child_li(),
						'title_li' => ''
						);
					 ?>

					<?php wp_list_pages($childNav); ?>
				</ul>
			</nav>
		<?php } ?>
		<h1><?php the_title(); ?></h1>
		<h3><?php the_author(); ?></h3>
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