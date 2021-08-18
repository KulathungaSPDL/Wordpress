 <!-- connect with header page -->
 <?php
    get_header();
 ?>
<section class="page-wapper">
   <div class="container">
      <div class="row">
        <h1>Search Results for '<?php echo get_search_query(); ?>'</h1>
         <div class="col">
         <h1><?php echo single_cat_title(); ?></h1>
            <!-- get include deatails of page -->
            <?php 
               get_template_part('template-parts/section', 'searchresult');
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