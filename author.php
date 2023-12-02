<?php get_header(); ?>

    <div class="relative pt-16 pb-24">
        <div class="bg-[#000]/60 absolute h-full w-full left-0 top-0 -z-10"></div>
        <img class="absolute h-full w-full left-0 top-0 object-cover -z-20" src="<?php echo 
        get_template_directory_uri(); ?>/assets/img/author.jpg" alt="">
        <div class="flex flex-col items-center max-w-3xl m-auto">
            <?php echo get_avatar(get_the_author_meta('ID'), 90, '', '', array(
                'class' => 'rounded-full border-2 border-primary'
            )); ?>
            <h2 class="mt-8 uppercase font-serif text-white">
                <?php echo get_the_author(); ?>
            </h2>
            <div class="flex items-center mt-4 gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="-2 -2 24 24"><path fill="white" d="m5.72 14.456l1.761-.508l10.603-10.73a.456.456 0 0 0-.003-.64l-.635-.642a.443.443 0 0 0-.632-.003L6.239 12.635l-.52 1.82zM18.703.664l.635.643c.876.887.884 2.318.016 3.196L8.428 15.561l-3.764 1.084a.901.901 0 0 1-1.11-.623a.915.915 0 0 1-.002-.506l1.095-3.84L15.544.647a2.215 2.215 0 0 1 3.159.016zM7.184 1.817c.496 0 .898.407.898.909a.903.903 0 0 1-.898.909H3.592c-.992 0-1.796.814-1.796 1.817v10.906c0 1.004.804 1.818 1.796 1.818h10.776c.992 0 1.797-.814 1.797-1.818v-3.635c0-.502.402-.909.898-.909s.898.407.898.91v3.634c0 2.008-1.609 3.636-3.593 3.636H3.592C1.608 19.994 0 18.366 0 16.358V5.452c0-2.007 1.608-3.635 3.592-3.635h3.592z"/></svg>
                <span class="text-white"><?php the_author_posts(); ?> posts</span>
            </div>
            <p class="mt-4 text-center text-white leading-relaxed">
                <?php the_author_description(); ?>
            </p>
        </div>
    </div> 

    <div class="bg-bgColor py-16">
        <div class="container">
            <div class=" grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-7">
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