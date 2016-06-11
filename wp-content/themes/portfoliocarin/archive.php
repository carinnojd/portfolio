<!--header-->
<?php get_header(); ?>

<?php
//THE LOOP
if (have_posts()) :
	?>
	<h2>
		<?php 
		if(is_category()) {
			single_cat_title();
		} elseif (is_tag()) {
			single_tag_title();
		} elseif (is_author()) {
			the_post();
			echo 'Arkiv för författare ' . get_the_author();
		} elseif (is_day()) {
			echo 'Dagarkiv' . get_the_date();
		} elseif (is_month()) {
			echo 'Månadsarkiv' . get_the_date('F Y');
		} elseif (is_year()) {
			echo 'Årsarkiv' . get_the_date('Y');
		} else {
			echo 'Arkiv: ';
		}
		?>
	</h2>
	<?php
	while (have_posts()) : the_post(); ?>
	
	<article class="post page">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<p class="post-info"><?php the_time('F jS, Y'); ?> | by 
			<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a> | Posted in 
				<?php 
				$categories = get_the_category();
				$separator = ', ';
				$output = '';

				if($categories) {
					foreach($categories as $category) {
						$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>' . $separator;
					}
					echo trim($output, $separator);
				}
				?>
		</p>
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