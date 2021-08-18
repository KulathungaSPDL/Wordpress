 <!-- connect with header page -->
 <?php
    get_header();
 ?>
<section class="page-wapper">
   <div class="container">
      <div class="row">
         <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
            <!-- add sidebar-->
            <?php if(is_active_sidebar('Blog-sidebar')): ?>
               <?php dynamic_sidebar('blog-sidebar'); ?>
            <?php endif; ?>
         </div>
         <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
         <h1><?php echo single_cat_title(); ?></h1>
            <!-- get include deatails of page -->
            <?php 
               get_template_part('template-parts/section', 'archive');
               previous_posts_link();
               next_posts_link();
            ?>
         </div>
      </div>
   </div>
</section>
<!-- connect with footer page -->
<?php
    get_footer();
 ?>