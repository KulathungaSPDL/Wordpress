<?php get_header();  ?>

	<?php if(get_theme_mod('header_image')): ?>
	<section id="homeIntro" class="parallax first-widget" style="background-image: url('<?php echo get_theme_mod('header_image'); ?>');" >
	<?php Endif; ?>	
	<div class="parallax-overlay">
				<div class="container home-intro-content">
					<div class="row">
						<div class="col-md-12">
							<?php if(get_theme_mod('header_text_field')): ?>
								<h2><?php echo get_theme_mod('header_text_field'); ?></h2>
							
							<p><?php echo get_theme_mod('header_para1_field'); ?><br> <?php echo get_theme_mod('header_para2_field'); ?> </p>
							<a href="#" class="large-button white-color">Download Free <i class="icon-button fa fa-download"></i></a>
							<?php Endif; ?>
						</div> <!-- /.col-md-12 -->
					</div> <!-- /.row -->
				</div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#homeIntro -->

	<section class="light-content services">
		<div class="container">
			<div class="row">
				<?php  if(is_active_sidebar( 'service-b1r' )): ?>	
					<?php dynamic_sidebar( 'service-b1r' )  ?>
				<?php endif; ?>
			</div>
				<?php  if(is_active_sidebar( 'service-b2r' )): ?>	
					<?php dynamic_sidebar( 'service-b2r' )  ?>
				<?php endif; ?>
			<div class="row">
				
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</section> <!-- /.services -->

	<?php if(get_theme_mod('blog_background_image')): ?>
	<section id="blogPosts" class="parallax" style="background-image: url('<?php echo get_theme_mod('blog_background_image'); ?>');">
	<?php Endif; ?>	
	    <div class="parallax-overlay">
		    <div class="container">
		        <div class="row">
		        	<div class="col-md-12">
		        		<div class="section-header">
							<?php if(get_theme_mod('Blog_text_field')): ?>
								<h2 class="section-title"><?php echo get_theme_mod('Blog_text_field'); ?></h2>
								<p class="section-desc"><?php echo get_theme_mod('Blog_content_text_field'); ?></p>
							<?php Endif; ?>
						</div> <!-- /.section-header -->
		        	</div> <!-- /.col-md-12 -->
		        </div> <!-- /.row -->

		    </div> <!-- /.container -->
	    </div> <!-- /.parallax-overlay -->
	</section> <!-- /#blogPosts -->

	<section class="light-content our-team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header">
					<?php if(get_theme_mod('Team_text_field')): ?>
						<h2 class="section-title"><?php echo get_theme_mod('Team_text_field'); ?></h2>
						<p class="section-desc"><?php echo get_theme_mod('Team_content_text_field'); ?></p>
						<?php Endif; ?>
					</div> <!-- /.section-header -->
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
		<div class="team-members">
			<div class="container">
				<div class="row">
				<?php  if(is_active_sidebar( 'team-member' )): ?>	
					<?php dynamic_sidebar( 'team-member' )  ?>
				<?php endif; ?>
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.team-members -->
	</section> <!-- /.our-team -->
	



	<?php get_footer(); ?>