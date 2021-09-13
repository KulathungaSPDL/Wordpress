<?php get_header(); ?>

	<div class="first-widget parallax" id="blog">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Blog</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Blog</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	   
		<div class="row">
			<div class="col-md-8 blog-posts">
    			<div class="row">
					<?php 
						get_template_part('templates/temp/section', 'archive');
					?>
			    </div> <!-- /.row -->
			</div> <!-- /.col-md-8 -->

			<div class="col-md-4">
				<div class="sidebar">
					<div class="sidebar-widget">
						<!-- add dynamic sidebar for the blog page -->
						<?php  if(is_active_sidebar( 'right-sidebar' )): ?>	
							<?php dynamic_sidebar( 'right-sidebar' )  ?>
						<?php endif; ?>
					</div> <!-- /.sidebar-widget -->
				</div> <!-- /.sidebar -->
			</div> <!-- /.col-md-4 -->

			<div class="col-md-12">
				<ul class="pages">
					<li>
						<?php 
							global $wp_query;
							$big = 999999999;

							echo paginate_links( array(
								'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
								'format' => '?paged=%#%',
								'current' => max(1, get_query_var('paged')),
								'total' => $wp_query->max_num_pages
							) );
						?>
					</li>
				</ul>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->	

<?php get_footer(); ?>