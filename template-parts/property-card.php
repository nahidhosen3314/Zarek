

<div class="transition-all flex flex-col">
    <div class="relative">
       
        <?php 
            the_post_thumbnail('postcard', array(
                'class' => "w-full aspect-[7/5.1] object-cover"
            ));
        ?>

        <div class="flex flex-wrap items-center justify-between absolute left-0 bottom-0 w-full p-4">
            <div class="flex items-center gap-2">
                <img class="border border-white w-12 h-12 rounded-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/man.jpg" alt="image">
                <div class="text-white">
                    <h6 class="leading-none">Jack</h6>
                    <span>auctor sapien</span>
                </div>
            </div>
            
           <?php 
              $cats = get_the_terms( $post->ID, 'property-type' );   
                foreach ( $cats as $cat ){
                     ?>
                     
                         <a href="" class="py-1 px-2 btn btn-primary">
                            <?php echo 'For ' . $cat->name; ?>
                         </a>
                     
                     <?php
                }
           ?>
        </div>
    </div>
    <div class="bg-slate-200 p-3 flex-grow">
        <a href="<?php the_permalink(); ?>" class="mb-2 block">
            <h4><?php the_title(); ?></h4>
        </a>

       
       
        <?php 
            if( get_field('location_name') ){
        ?>
            <div class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="none" stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137c0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137Z"/><circle cx="256" cy="192" r="48" fill="none" stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                <a target="_blank" href="<?php the_field('location_link'); ?>" class="text-primary underline" >
                    <?php the_field('location_name'); ?>
                </a>
            </div>
        <?php } ?>





        <p class="py-3">Added: 
            <?php echo get_the_date(); ?>
        </p>
        <div class="flex items-center justify-between">
        <?php if( get_field('property_price') ){ ?>
            <h5 class="text-primary">
                $<?php the_field('property_price'); ?>
            </h5>
        <?php } ?>

            <div class="flex items-center gap-3">
               <?php 
                    get_template_part( 'template-parts/property-features' );
                 ?>
            </div>
        </div>
    </div>
</div>