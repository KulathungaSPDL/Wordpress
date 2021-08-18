<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="comments-header">
                        <h2 class="comment-reply-title">
                            <?php 
                                if(! have_Comments()) {
                                    echo "Leave a comments";
                                } else {
                                    echo get_comments_number(). "comments";
                                }
                            ?>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="comments-inner">
                        <?php 
                            wp_list_comments(
                                array(
                                    'avatar_size' => 120,
                                    'style' => 'div',
                                )  
                            );
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <hr class="" aria-hidden="true">
                            <?php
                                if(comments_open()) {
                                    comment_form(
                                        array(
                                            'class_form' => '',
                                            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
                                            'title_reply_after' => '</h2>'
                                        )
                                    );
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>     
    </div>
</div>