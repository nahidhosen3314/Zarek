<?php 
/*
* Template Name: Homepage

*/

get_header(); 
?>

<div class=" relative text-center">
    <img src="<?php header_image(); ?>" alt="image" class="absolute h-full w-full left-0 top-0 object-cover">
    <div class="bg-slate-800/70 relative z-10 py-40 text-white">
        <div class="container ">
            <h2 class="mb-5"> 
                <?php bloginfo( 'title' ); ?>
            </h2>
            <p class="text-lg">
                <?php bloginfo( 'description' ) ?>
            </p>
            <a href="<?php echo home_url('/about-us'); ?>" class="btn btn-primary mt-6">
                Explore our servics
            </a>
        </div>
    </div>
</div>

<div class="bg-[#fcfcfc] pt-10">
    <div class="container">
        <h3 class="mb-6"><?php echo esc_html__( 'Popular Categories', 'wptheme' ); ?></h3>
        <div class="grid xl:grid-cols-6 md:grid-cols-3 sm:grid-cols-1 gap-5">
            
            <?php 
                $cats = get_categories(array(
                    'orderby'   => 'count',
                    'order'     =>  'DESC',
                    'number'     =>  6,
                    'taxonomy'   => 'category',
                    'fields'     => 'all'
                ));
                foreach( $cats as $cat ){
                    ?>
                        <a href="<?php echo esc_url(get_category_link( $cat ->term_id));?>" 
                        class="text-xl text-white bg-slate-700 px-5 py-5 flex flex-col justify-center text-center rounded-lg font-bold relative z-10 overflow-hidden">
                            <?php
                                $image = get_field('cat_image',  'category_' . $cat->term_id);
                                if( $image ){
                                    echo wp_get_attachment_image( $image['id'], 'medium', false, [
                                        'class' => 'w-full absolute h-full left-0 top-0 object-cover -z-10 opacity-30'
                                    ] );
                                }                                
                            ?>
                            <span class="block font-normal text-base mb-1">
                                <?php echo $cat -> count; ?>
                                <?php echo esc_html__( 'posts', 'wptheme' ); ?>
                            </span>
                            <?php echo $cat -> name; ?>
                        </a>
                    <?php
                }
                
            
            
            ?>
        </div>
        
    </div>
</div>



<div class="bg-[#fcfcfc] py-10">
    <div class="container">
        <h3 class="mb-6"><?php echo esc_html__( 'Our Properties ', 'wptheme' ); ?></h3>
        <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2  gap-6">
            <?php 
                $property  = new WP_Query(array(
                    'post_type'     => 'property',
                    'posts_per_page' => 3
                ));
                while($property -> have_posts()){
                    $property -> the_post();

                    get_template_part( "template-parts/property-card" );
                }
                wp_reset_postdata();
            
            ?>

        </div>
        <div class="mt-8 text-center">
            <a href="<?php echo home_url('/propertise');?>" class="btn btn-primary">
                <?php echo esc_html__( 'See all properties', 'wptheme'); ?>
            </a>
        </div>
    </div>
</div>



<div class="bg-[#fcfcfc] py-10">
    <div class="container">
        <h3 class="mb-6"><?php echo esc_html__( 'Latest Posts ', 'wptheme' ); ?></h3>
        <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2  gap-6">
            <?php 
                $the_query = new WP_Query(array(
                    'post_type'     => 'post',
                    'posts_per_page' => 3
                ));
                while($the_query-> have_posts()){
                    $the_query-> the_post();

                    get_template_part( "template-parts/postcard" );
                }
                wp_reset_postdata();
            
            ?>

        </div>
        <div class="mt-8 text-center">
            <a href="<?php echo home_url('/');?> blog" class="btn btn-primary">
                <?php echo esc_html__( 'See all posts', 'wptheme'); ?>
            </a>
        </div>
    </div>
</div>






<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
        </div>
    </div>
</div>












<?php get_footer(); ?>