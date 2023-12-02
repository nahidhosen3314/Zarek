<?php get_header(); ?>



<div class="py-12 bg-slate-100">
    <div class="container">
        <?php 
           while( have_posts() ){
                the_post();
                ?>
                <h2 class="mb-4"><?php the_title(); ?></h2>
                <?php
                the_content();
           }
        ?>
    </div>
</div>





<?php get_footer(); ?>