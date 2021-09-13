<?php  get_header();  ?>

<div id="errorpage">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div id="primary" class="content-area">
                    <div id="content" class="site-content" role="main">
            
                        <header class="page-header">
                            <h1 class="page-title"><?php _e( 'Not Found', 'blue' ); ?></h1>
                        </header>
            
                        <div class="page-wrapper">
                            <div class="page-content">
                                <h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'blue' ); ?></h2>
                                <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'blue' ); ?></p>
            
                                <?php get_search_form(); ?>
                            </div>
                        </div>
            
                    </div><!-- #content -->
                </div><!-- #primary -->
            </div>
        </div> 
    </div>
</div>

<?php  get_footer();  ?>