<?php get_header(); ?>
<div class="catogory-header">
    <h1>Under Catogory: '<?php echo single_cat_title(); ?>'</h1>
</div>
<?php 
    get_template_part('template-parts/section', 'archive');
?>
<div class="d-flex justify-content-center">
    <div class="mt-2 mb-2">
        <?php 
            global $wp_query;
            $big = 999999999;

            echo paginate_links( array(
                'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $wp_query->max_num_pages
            ) );
        ?>
    </div>
</div>


<?php get_footer(); ?>