
<h2 class="comment-title">
    <?php 

        $comment_num = get_comments_number();
        if( 1== $comment_num ){
            echo esc_html__( '1 Comment', 'wptheme' );
        }else{
          echo  $comment_num . " " . esc_html__( 'Comments', 'wptheme' );
        }


    ?>
</h2>



<?php


comment_form(); 
wp_list_comments();
the_comments_pagination( array(
    'prev_text'     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 9"><path fill="#7c3aed" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5Z"/><path fill="#fff" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0c.2.2.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z"/></svg>',
    
    'next_text'     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 9"><g            transform="translate(16 0) scale(-1 1)"><path fill="#7c3aed" d="M12.5 5h-9c-.28 0-.5-.22-.5-.5s.22-.5.5-.5h9c.28 0 .5.22.5.5s-.22.5-.5.5Z"/><path fill="#fff" d="M6 8.5a.47.47 0 0 1-.35-.15l-3.5-3.5c-.2-.2-.2-.51 0-.71L5.65.65c.2-.2.51-.2.71 0c.2.2.2.51 0 .71L3.21 4.51l3.15 3.15c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z"/></g></svg>'
));




?>