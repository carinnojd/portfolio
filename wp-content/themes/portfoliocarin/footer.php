	<footer class="footer">
		<nav class="navbarFooter">
		<?php 
			 $navbar = array (
			 	'theme_location' => 'footer' 
			 	);
			 ?>	 	
			 <?php wp_nav_menu($navbar); ?>
		</nav>

		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>
	</footer>
</div> <!-- /wrapper -->

<?php wp_footer(); ?>

</body>
</html>