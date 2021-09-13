<?php get_header(); ?>

	<div class="first-widget parallax" id="blogId">
		<div class="parallax-overlay">
			<div class="container pageTitle">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<h2 class="page-title">Blog Single</h2>
					</div> <!-- /.col-md-6 -->
					<div class="col-md-6 col-sm-6 text-right">
						<span class="page-location">Home / Blog Single</span>
					</div> <!-- /.col-md-6 -->
				</div> <!-- /.row -->
			</div> <!-- /.container -->
		</div> <!-- /.parallax-overlay -->
	</div> <!-- /.pageTitle -->

	<div class="container">	
		<div class="row">

        
			<div class="col-md-8 blog-posts">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
				<div class="row">
					<div class="col-md-12">
						<div class="post-blog">
							<div class="blog-image">
                            <?php if ( has_post_thumbnail() ) {  ?>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
                            <?php } else {
                                // nothoing show here
                            } ?>
							</div> <!-- /.blog-image -->
							<div class="blog-content">
                            <?php
                                $fname = get_the_author_meta('first_name');
                                $lname = get_the_author_meta('last_name');
                                $description = get_the_author_meta('user_description');
                                $get_author_id = get_the_author_meta('ID');
                                $get_author_gravatar = get_avatar_url($get_author_id);
                            ?>
								<span class="meta-date"><a href="#"><?php echo get_the_date('l jS F, Y'); ?></a></span>
								<span class="meta-comments"><a href="#blog-comments"><?php echo get_comments_number(); ?></a></span>
								<span class="meta-author"><a href="#blog-author"><?php echo $fname ?> <?php echo $lname ?></a></span>
								<h3><?php the_title(); ?></h3>
								<p><?php the_content() ?></p>
								
								<div class="tag-items">
                                    <span class="small-text">Tags:</span>
                                    <?php
                                        $tags = get_the_tags();
                                            if ($tags) {
                                                foreach($tags as $tag): ?>
                                                <a href="<?php echo get_tag_link($tag->term_id);?>" rel="tag" class="ml-3 mr-3">
                                                    <?php echo $tag->name; ?> 
                                                </a>
                                    <?php endforeach;  }?>
                                </div>
							</div> <!-- /.blog-content -->
						</div> <!-- /.post-blog -->
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
					<div class="col-md-12">
						<div id="blog-author" class="clearfix">
                            <a href="#" class="blog-author-img pull-left">
                                <img src="<?php echo $get_author_gravatar ?>" alt="">
                            </a>
                            <div class="blog-author-info">
                                <h4 class="author-name"><a href="#"><?php echo $fname ?> <?php echo $lname ?></a></h4>
                                <p><?php echo $description ?></p>
                            </div>
                        </div>
					</div> <!-- /.col-md-12 -->
				</div> <!-- /.row -->
				<div class="row">
                    <!-- comments -->
                    <?php
                        comments_template();
                    ?>
                </div>
                <?php endwhile; elase: endif; ?>
			</div> <!-- /.col-md-8 -->


		</div> <!-- /.row -->
	</div> <!-- /.container -->	

	<?php get_footer(); ?>