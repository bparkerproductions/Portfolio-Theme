<?php
/* Custom comment content callback */
function comment_content($comment, $args, $depth) {
    ?>
    <li
      <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?>
      id="comment-<?php comment_ID() ?>"
    >
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
        <div class="comment-meta">
            <!-- Author -->
            <div>
                <?php printf( __( '<cite class="author">%s</cite>' ), get_comment_author_link() ); ?>
                <?php edit_comment_link( __( 'Edit Comment' ), '  ', '' ); ?>
            </div>

             <!-- Date -->
            <p class="date">Posted on <time><?php printf(
                    __('%1$s'), 
                    get_comment_date(),
                    get_comment_time()
                ); ?></time></p>
        </div>

    
        <?php comment_text(); ?>

        <div class="reply"><?php
                comment_reply_link(
                    array_merge(
                        $args,
                        array(
                            'add_below' => 'comment',
                            'depth'     => $depth,
                            'max_depth' => $args['max_depth']
                        )
                    )
                ); ?>
        </div>
    </li>
    <?php
}