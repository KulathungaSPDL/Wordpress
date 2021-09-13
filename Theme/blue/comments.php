<div class="col-md-12">
        <div id="blog-comments" class="blog-post-comments">
                <?php 
                    if(! have_Comments()) {
                    ?>
                      <h3> <?php echo "No Comments"; ?></h3>
                    <?php
                    } else {
                    ?>
                      <h3> <?php echo get_comments_number(). " comments";  ?></h3>
                    <?php
                    } 
                ?>
            <div class="blog-comments-content">
                <div class="media">
                <?php 
                    wp_list_comments(
                        array(
                            'avatar_size' => 120,
                            'style' => 'div',
                        )  
                    );
                ?>
                    <!-- <div class="pull-left">
                        <img class="media-object" src="images/includes/comment1.jpg" alt="">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4>Linda Wilson</h4> 
                            <a href="#"><span>4 weeks ago</span><span>Reply</span></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet lorem, elit. Sequi, nam magni repellendus! <span class="label label-primary">New</span></p>
                        <div class="media">
                            <div class="pull-left">
                                <img class="media-object" src="images/includes/comment2.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>Stephen</h4> 
                                    <a href="#"><span>5 weeks ago</span><span>Reply</span></a>
                                </div>
                                <p>Temporibus, ea, praesentium eaque totam vel quos laboriosam quia sit dolore at consequatur beatae aliquam debitis porro quasi cupiditate quod!</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div> <!-- /.blog-comments-content -->
        </div> <!-- /.blog-post-comments -->
</div> <!-- /.col-md-12 -->


    <div class="col-md-12">
        <!-- <div class="comment-form"> -->
            <h3>Leave a comment</h3>
            <!-- <div class="widget-inner"> -->
                <?php
                    if(comments_open()) {
                        comment_form(
                            array(
                                'class_form' => 'comment-form',
                                'title_reply_before' => '<div id="reply-title" class="widget-inner">',
                                'title_reply_after' => '</div>'
                            )
                        );
                    }
                ?>
    </div> <!-- /.col-md-12 -->
