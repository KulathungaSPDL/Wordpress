 <!-- connect with header page -->
 <?php
    get_header();
 ?>
<section class="page-wapper">
   <div class="container">

      <!-- get image thumbnail -->
      <?php if(has_post_thumbnail()): ?>
         <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" 
         class="img-fluid mb-3 img-thumbnail">
      <?php endif; ?>

       <!-- get page title -->
      <h1>
      <?php
         the_title();
      ?>
      </h1>
      <br>
      <!-- get include deatails of page -->
      <?php 
         get_template_part('template-parts/section', 'blogcontent');
      ?>
   </div>
</section>
<!-- connect with footer page -->
<?php
    get_footer();
 ?>