<?php  get_header();  ?>

<div id="primary" class="content-area">
<div id="content" class="site-content" role="main">

<header class="page-header">
    <h1 class="page-title"><?php _e( 'Not Found', 'dinushathirdtheme' ); ?></h1>
</header>

            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="page-wrapper">
                            <div class="page-content">
                                <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'dinushathirdtheme' ); ?></h2>
                                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'dinushathirdtheme' ); ?></p>
            
                                <?php get_search_form(); ?>
                            </div><!-- .page-content -->
                        </div><!-- .page-wrapper -->
                    </div>
                </div>
            </div> 
    </div><!-- #content -->
</div><!-- #primary -->


<?php  get_footer();  ?>