<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="author" content="templatemo">
	<?php wp_head(); ?>

</head>
<body>
	<div class="responsive_menu">
        <ul class="main_menu">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Portfolio</a>
            	<ul>
            		<li><a href="portfolio.html">Portfolio Grid</a></li>
            		<li><a href="project-image.html">Project Image</a></li>
            		<li><a href="project-slideshow.html">Project Slideshow</a></li>
            	</ul>
            </li>
            <li><a href="#">Blog</a>
				<ul>
					<li><a href="blog.html">Blog Standard</a></li>
					<li><a href="blog-single.html">Blog Single</a></li>
                    <li><a href="#">visit templatemo</a></li>
				</ul>
            </li>
            <li><a href="archives.html">Archives</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul> <!-- /.main_menu -->
    </div> <!-- /.responsive_menu -->

	<header class="site-header clearfix">
		<div class="container">

			<div class="row">

				<div class="col-md-12">

					<div class="pull-left logo">
						<a href="index.html">
							<?php if (function_exists('the_custom_logo')) { ?>
								<?php the_custom_logo(); ?>
							<?php } else { ?>
								<?php bloginfo('name'); ?> 
							<?php } ?>
						</a>
					</div>	<!-- /.logo -->

					<div class="main-navigation pull-right">
						<nav class="main-nav visible-md visible-lg">
							<?php
								//diaplay navigation menu
								if (has_nav_menu('primary')) {
									wp_nav_menu(array(
										'theme_location' => 'primary',
										'container' => '',
										'items_wrap' => '<ul class="sf-menu" >%3$s</ul>',
										 'add_li_class'  => ''
									));
								}
							?>
						</nav> <!-- /.main-nav -->

						<!-- This one in here is responsive menu for tablet and mobiles -->
					    <div class="responsive-navigation visible-sm visible-xs">
					        <a href="#nogo" class="menu-toggle-btn">
					            <i class="fa fa-bars"></i>
					        </a>
					    </div> <!-- /responsive_navigation -->

					</div> <!-- /.main-navigation -->

				</div> <!-- /.col-md-12 -->

			</div> <!-- /.row -->

		</div> <!-- /.container -->
	</header> <!-- /.site-header -->
