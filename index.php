<?php 
/**
 * Index template
 * 
 * @package wptheme
 * 
 */
get_header(); 
?>
<div class="bg-[#fcfcfc] py-10">
    <div class="container">
        <div class="max-w-lg m-auto text-center">
            <h2 class="mb-5">
                <?php echo esc_html__( 'WpThemes Blog', 'wptheme'); ?>
            </h2>
            <p class="mb-7 text-lg text-slate-500">
                <?php echo esc_html__( 'Stay up to date with our most recent news and updates', 'wptheme' ); ?>
            </p>
        </div>
        <div class="max-w-lg m-auto text-center mb-16">
            <?php  get_search_form(); ?>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2 gap-6">

           <div class="sm:col-span-2">
                <div class="grid md:grid-cols-2 gap-5">
                    <?php 
                    while(have_posts()){
                        the_post();

                        get_template_part( "template-parts/postcard" );
                    }
                    ?>
                </div>
           </div>
            <div class="blog-sidebar">
                <?php dynamic_sidebar('blog_sidebar'); ?>
            </div>
        </div>
        
        <?php the_posts_pagination( array(
            'prev_text'     => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M11.03 8.53a.75.75 0 1 0-1.06-1.06l-4 4a.748.748 0 0 0 0 1.06l4 4a.75.75 0 1 0 1.06-1.06l-2.72-2.72H18a.75.75 0 0 0 0-1.5H8.31l2.72-2.72Z"/></svg>',

            'next_text'    => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g transform="translate(24 0) scale(-1 1)"><path fill="#fff" d="M11.03 8.53a.75.75 0 1 0-1.06-1.06l-4 4a.748.748 0 0 0 0 1.06l4 4a.75.75 0 1 0 1.06-1.06l-2.72-2.72H18a.75.75 0 0 0 0-1.5H8.31l2.72-2.72Z"/></g></svg>'
        )); ?>
    </div>
</div>








<?php get_footer(); ?>