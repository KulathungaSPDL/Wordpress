<section id="single-page-content">
    <div class="container">
        <div class="row">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="col-lx-12 col-lg-12 col-sm-12 col-sx-12">
                <div class="content-head">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
            <div class="col-lx-12 col-lg-12 col-sm-12 col-sx-12">    
                <br>
                <?php if ( has_post_thumbnail() ) {  ?>
                <div class="card">               
                     <img src="<?php the_post_thumbnail_url() ?>" class="singlePageThumbnail" alt="responsive thumbnail">                 
                </div>
                <?php } else {
                    // nothing show here
                } ?>
            </div>
            <div class="col-lx-12 col-lg-12 col-sm-12 col-sx-12">
                <br><br>    
                <p><?php the_content(); ?></p>
                <br>
            </div>
            <?php endwhile; elase: endif; ?>
        </div>
    </div>
</section>
