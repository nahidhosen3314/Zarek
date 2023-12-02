<?php 
/**
 * Template Name: Proterty
 */

get_header();
?>


<div class="py-16">
    <div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-6">

            <?php 
            $property = new WP_Query(array(
                'post_type'         => 'property',
                'posts_per_page'    => -1
            ));
                while($property -> have_posts()){
                    $property -> the_post();
                    get_template_part('template-parts/property-card');
                }  
                wp_reset_postdata();
            ?>            

        </div>
    </div>
</div>












<?php get_footer(); ?>