<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="col-md-12">
        <div class="post-blog">
            <div class="blog-image">
                <a href="blog-single.html">
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                </a>
            </div> <!-- /.blog-image -->
            <?php
                $fname = get_the_author_meta('first_name');
                $lname = get_the_author_meta('last_name');
            ?>
            <div class="blog-content">
                <span class="meta-date"><a href="#"><?php echo get_the_date('j F Y'); ?></a></span>
                <span class="meta-comments"><a href="#"><?php echo get_comments_number(). " omments"; ?></a></span>
                <span class="meta-author"><a href="#"><?php echo $fname ?> <?php echo $lname ?></a></span>
                <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
                <p class="light-text"><?php the_excerpt() ?><a href="<?php the_permalink();?>">Continue Reading...</a></p>
            </div> <!-- /.blog-content -->
        </div> <!-- /.post-blog -->
    </div> <!-- /.col-md-12 -->
    <?php endwhile; elase: endif; ?>

        