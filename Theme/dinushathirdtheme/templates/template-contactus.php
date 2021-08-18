<?php
    /*
        Template Name: Contact Us
    */
?>
 <!-- connect with header page -->
 <?php
    get_header();
 ?>
<section class="page-wapper">
    <div class="container">
        <h1>
            <!-- get page title -->
            <?php
                the_title();
            ?>
    </h1>
        <div class="row">
            <div class="col-6">
                this contain left details
            </div>
            <div class="col-6">
                <!-- get include deatails of page -->
                <?php 
                    get_template_part('inc/section', 'content');
                ?>
            </div>
        </div>
    </div>
</section>
<!-- connect with footer page -->
<?php
    get_footer();
 ?>