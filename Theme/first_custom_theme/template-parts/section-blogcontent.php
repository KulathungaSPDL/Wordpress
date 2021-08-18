<section id="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lx-12 col-lg-12 col-md-12 col-sm-12">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>

                <!-- get the title -->
                <h1><?php the_title(); ?></h1>
                <!-- get date -->
                <p><?php echo get_the_date('l jS F, Y'); ?></p>
                <br>
            </div>
            <div class="col-lx-12 col-lg-12 col-md-12 col-sm-12">
                <!-- get thimbnail image -->
                <img src="<?php the_post_thumbnail_url(); ?>" class=" blogImg image-fluid" alt="">        
                <br>
            </div>
            <div class="col-lx-12 col-lg-12 col-md-12 col-sm-12">
                <br>
                <?php the_content() ?>
            </div>
            <div class="col-lx-12 col-lg-12 col-md-12 col-sm-12">                    
                <!-- get author det: fname, lname -->
                <?php
                    $fname = get_the_author_meta('first_name');
                    $lname = get_the_author_meta('last_name');
                ?>
                <p>Posted By <?php echo $fname ?> <?php echo $lname ?></p>

                <!-- get tag -->
                <?php
                    $tags = get_the_tags();
                        if ($tags) {
                            foreach($tags as $tag): ?>
                            <a href="<?php echo get_tag_link($tag->term_id);?>" class="badge bg-success">
                                <?php echo $tag->name; ?>
                            </a>
                <?php endforeach;  }?>

                <!-- add catogory -->
                <?php
                    $categories = get_the_category();
                    if ($categories) {
                        foreach($categories as $cat): ?>
                        <a href="<?php echo get_category_link($cat->term_id);?>" class="badge bg-warning">
                            <?php echo $cat->name; ?>
                        </a>
                <?php endforeach;} ?>
                <br><br>
            </div>
            <div class="col-lx-12 col-lg-12 col-md-12 col-sm-12">
                <!-- comment section -->
                <?php
                    comments_template();
                ?>
                <?php endwhile; elase: endif; ?>
            </div>
        </div>   
    </div>
</section>
