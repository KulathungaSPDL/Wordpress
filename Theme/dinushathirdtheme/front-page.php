 <!-- connect with header page -->
 <?php
    get_header();
 ?>

<section id="searchbar">
   <div class="container">
      <div class="row">
            <div class="col">
               <!-- add search form -->
               <?php get_search_form(); ?>
            </div>
      </div>
   </div>
</section>

<div class="section hero text-center background-dark dark-bg">
   <div class="background-image" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg) no-repeat center center; background-size: cover; opacity: .2;"></div>
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h2>
                  <?php
                    if (have_posts()) {
                      while (have_posts()) {
                        the_post();
                        the_title();
                  ?>      
            </h2>
            <p class="lead"><?php
                        the_content();
                      }
                    }
                  ?></p>
            <ul class="list-inline">
               <li><a href="#" title="Learn More" class="btn btn-md btn-info">Learn More</a></li><br>
               <li><a href="#" title="Learn More" class="btn btn-md btn-primary">Download Now</a></li>
            </ul>
         </div>
      </div>
   </div>
</div>

<!-- connect with footer page -->
<?php
    get_footer();
 ?>

