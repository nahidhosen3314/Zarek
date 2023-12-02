<?php
/**
 * Single page template
 *
 * @package wptheme
 */

get_header(); ?>

    <div class="py-16">
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="overflow-hidden">
                    <?php get_template_part( 'template-parts/property-gallary' ); ?>
                </div>
                    <div class="">
                        <h3><?php the_title(); ?></h3>
                        <?php 
                            if( get_field('location_name') ){
                        ?>
                            <div class="flex items-center gap-1 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="none" stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M256 48c-79.5 0-144 61.39-144 137c0 87 96 224.87 131.25 272.49a15.77 15.77 0 0 0 25.5 0C304 409.89 400 272.07 400 185c0-75.61-64.5-137-144-137Z"/><circle cx="256" cy="192" r="48" fill="none" stroke="#7c3aed" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                <a target="_blank" href="<?php the_field('location_link'); ?>" class="text-primary underline" >
                                    <?php the_field('location_name'); ?>
                                </a>
                            </div>
                        <?php } ?>

                        <?php 
                            get_template_part( 'template-parts/property-features' );
                        ?>

                    <?php if( get_field('property_price') ){ ?>
                        <h4 class="py-2">Price: <span class="text-primary font-bold text-3xl">
                            $<?php the_field('property_price'); ?>
                        </span></h4>
                    <?php  }?>
                    <p><?php the_content(); ?></p>
                   <?php get_template_part( 'template-parts/property-info-table' );?>

                </div>
                
            </div>
        </div>
    </div>



<?php get_footer(); ?>

