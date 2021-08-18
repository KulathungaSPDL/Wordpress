<?php if(have_posts()): while(have_posts()): the_post(); ?>

<div class="card mb-3">
    <div class="card-body">
        <h3> <?php the_title(); ?></h3>
        <?php the_excerpt() ?>

        <a href="<?php the_permalink();?>" class= "btn btn-success">Read More...</a>
    </div>
</div>

<?php endwhile; else: ?>
    <h3>There are no result for '<?php echo get_search_query(); ?>'</h3>   
<?php endif; ?>