
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav class="footer-nav clearfix">
						<?php
							//diaplay navigation menu
							if (has_nav_menu('footer')) {
								wp_nav_menu(array(
									'theme_location' => 'footer',
									'container' => '',
									'items_wrap' => '<ul class="footer-menu" >%3$s</ul>',
									'add_li_class'  => ''
								));
							}
						?>
					</nav> <!-- /.footer-nav -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
			<div class="row">
				<div class="col-md-12">
					<?php if(get_theme_mod('Footer_text_field')): ?>
						<p class="copyright-text"><?php echo get_theme_mod('Footer_text_field'); ?></p>
					<?php Endif; ?>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</footer> <!-- /.site-footer -->

	<!-- Scripts -->
	<?php wp_footer(); ?>

</body>
</html>