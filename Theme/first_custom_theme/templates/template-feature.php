<?php
/*
        Template Name: Feature
    */
?>
<?php get_header(); ?>

<section id="single-page-content">
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
          <div class="col-lx-12 col-lg-12 col-sm-12 col-sx-12">
            <div class="content-head">
              <h1><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lx-6 col-lg-6 col-sm-6 col-sx-12">

            <br>
            <?php if (has_post_thumbnail()) {  ?>
              <div class="card">
                <img src="<?php the_post_thumbnail_url() ?>" class="" alt="responsive thumbnail">
              </div>
            <?php } else {
            } ?>
          </div>
          <div class="col-lx-6 col-lg-6 col-sm-6 col-sx-12">
            <br>
            <?php the_content(); ?>
          </div>
      <?php endwhile;
      elase:
    endif; ?>
        </div>
  </div>
</section>


<?php get_footer(); ?>