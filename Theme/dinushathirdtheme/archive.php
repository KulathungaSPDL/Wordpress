 <!-- connect with header page -->
 <?php
    get_header();
 ?>
<section class="page-wapper">
   <div class="container">

        <h1><?php echo single_cat_title(); ?></h1>
      <!-- get include deatails of page -->
      <?php 
         get_template_part('template-parts/section', 'archive');
         previous_posts_link();
         next_posts_link();
      ?>
   </div>
</section>
<!-- connect with footer page -->
<?php
    get_footer();
 ?>