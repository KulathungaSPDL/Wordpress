 <!-- connect with header page -->
 <?php
    get_header();
 ?>
<section class="page-wapper">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
            <!-- get page title -->
            <h1>
            <?php
               the_title();
            ?>
            </h1>
         </div>
            <?php if ( has_post_thumbnail() ) {  ?> 
            <div class="card"> 
               <img src="<?php the_post_thumbnail_url() ?>" class="img-fluid thumbnail-image" alt="responsive thumbnail">                 
            </div>
            <?php } else {} ?>
         </div>
         <div class="col-lg-12 col-md-12 col-sm-12 col-sx-12">
         <br>
            <!-- get include deatails of page -->
            <?php 
               get_template_part('template-parts/section', 'content');
            ?>
         </div>
      </div>
   </div>
</section>
<!-- connect with footer page -->
<?php
    get_footer();
 ?>