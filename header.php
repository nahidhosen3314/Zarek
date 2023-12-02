<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="py-5 bg-primary text-white">
    <div class="container">
        <div class="flex items-center justify-between">
            <div class="h-logo">
                <?php 
                    if(has_custom_logo()){
                        the_custom_logo();
                    }else{
                        ?>
                            <a href="<?php echo home_url('/'); ?>" class="text-xl text-white"><?php bloginfo('site-title'); ?></a>
                        <?php
                    }
                
                ?>
            </div>
            <div class="hidden sm:block">
                
                <?php  
                    wp_nav_menu( array(
                        'theme_location' => 'header_menu',
                        'menu_class'     => 'flex flex-wrap items-center gap-4'
                    ) );
                ?>
            </div>
            <div class="cursor-pointer sm:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
            </div>
        </div>
    </div>
</div>