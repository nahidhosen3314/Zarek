<div class="bg-slate-100 p-3 hover:bg-white hover:shadow-xl transition-all duration-100 flex flex-col">
    
    <div class="overflow-hidden rounded-lg">
        <a href="<?php the_permalink(); ?>">
            <?php 
                the_post_thumbnail( 'medium', array(
                    'class' => " mb-2 hover:rotate-2 hover:scale-105 w-full aspect-[7/4.3] relative rounded-lg object-cover hover:transform transition-all duration-500"
                ));
            ?>
        </a>
    </div>
    <div class="py-4 sm:px-5 flex flex-col flex-grow">
        <div class="flex-grow">
            <div class="flex items-center gap-2 ">
                    <a class="flex items-center gap-2.5" href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>">
                        <?php
                            echo get_avatar(get_the_author_meta('ID'), 40, '', '' , array(
                                'class' => 'rounded-full'
                            ));
                        ?>
                        <?php echo get_the_author(); ?>
                    </a>
                    /
                    <span class="mr-2"><?php echo get_the_date(); ?></span>
            </div>
            <h4 class="mb-4 ">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
        </div>
        <div class="flex flex-wrap gap-3">
            <?php 

                $count = 0;
                $cats = get_the_category();
                foreach( $cats as $cat){
                    $count++

                     ?>
                        <a href="<?php echo get_category_link($cat); ?>" class="text-sm border border-slate-500 rounded-full px-3 py-1 hover:bg-violet-900 hover:text-white hover:border-transparent transition-all"><?php echo $cat->name; ?></a>
                     <?php
                   
                   if($count == 2){
                        break;
                   }
                }
            
            ?>

        </div>
    </div>
</div>


