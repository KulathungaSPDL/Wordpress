<!-- work start -->
<section id="work">
<div class="container-fluid p-0">
    <div class="row g-0">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="col-lg-3 col-md-4 col-sm-6 col-sx-12">
        <a href="#"></a>
        <div class="image-content">
            <img src="<?php the_post_thumbnail_url(); ?>" class="art image-fluid" alt="">
            <div class="overlay">
                <div class="text">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_excerpt() ?></p>
                    <a href="<?php the_permalink();?>" class= "btn btn-danger">Read More...</a>
                </div>
            </div>
        </div>
        </a>
    </div>
    <?php endwhile; elase: endif; ?>
</div>
</div>
</section>
<!-- work end -->
