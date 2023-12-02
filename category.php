<?php 
/**
 * Category template
 * 
 * @package wptheme
 * 
 */
get_header(); 
    ?>
        <div class="relative z-10 overflow-hidden">
            <?php 
                $cat_img = get_field('cat_image',  'category_' . get_queried_object_id() );

                if( $cat_img ){
                    echo wp_get_attachment_image( $cat_img['id'], 'medium', false, [
                        'class' =>'absolute w-full absolute h-full left-0 top-0 object-cover -z-10'
                    ] );
                } 
            ?>
            <div class="mx-5">
                <div class="text-center ml-auto mr-auto sm:my-16 my-12 bg-white/60 max-w-3xl px-14 py-10">
                    <h3 class="mb-4">
                        <?php single_cat_title(); ?>
                    </h3>
                    <p class="font-bold text-lg">
                        <?php echo current_category_posts() . " posts"; ?>
                    </p>
                    <p class="text-lg mt-4">
                        <?php echo category_description(); ?>
                    </p>
                </div>
            </div>
        </div>
    <?php
    


    ?>
    <div class="bg-[#fcfcfc] py-14">
        <div class="border border-primary/20 mb-12"></div>
        <div class="container">
            <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2  gap-6">
                <?php 
                    while(have_posts()){
                        the_post();

                        get_template_part( "template-parts/postcard" );
                    }
                ?>
            </div>
            <?php the_posts_pagination( array(
                'prev_text'     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M11.03 8.53a.75.75 0 1 0-1.06-1.06l-4 4a.748.748 0 0 0 0 1.06l4 4a.75.75 0 1 0 1.06-1.06l-2.72-2.72H18a.75.75 0 0 0 0-1.5H8.31l2.72-2.72Z"/></svg>',

                'next_text'    => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="translate(24 0) scale(-1 1)"><path fill="#fff" d="M11.03 8.53a.75.75 0 1 0-1.06-1.06l-4 4a.748.748 0 0 0 0 1.06l4 4a.75.75 0 1 0 1.06-1.06l-2.72-2.72H18a.75.75 0 0 0 0-1.5H8.31l2.72-2.72Z"/></g></svg>'
            )); ?>
        </div>
    </div>








<?php get_footer(); ?>