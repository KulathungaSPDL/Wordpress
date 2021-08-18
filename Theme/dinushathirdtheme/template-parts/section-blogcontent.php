<?php if(have_posts()): while(have_posts()): the_post(); ?>

<!-- get date -->
<p><?php echo get_the_date(); ?></p>

<?php the_content() ?>

<!-- get author det: fname, lname -->
<?php
    $fname = get_the_author_meta('first_name');
    $lname = get_the_author_meta('last_name');
?>
<p>Posted By <?php echo $fname ?> <?php echo $lname ?></p>

<!-- get tag -->
<?php
    $tags = get_the_tags();
    if ($tags) {
    foreach($tags as $tag): ?>
    <a href="<?php echo get_tag_link($tag->term_id);?>" class="btn btn-success">
        <?php echo $tag->name; ?>
    </a>
<?php endforeach; } ?>

<!-- comment section -->
<?php
    comments_template();
?>

<?php endwhile; elase: endif; ?>