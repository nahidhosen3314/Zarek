

<?php echo do_shortcode( '[mc4wp_form id=358]' ); ?>



<div class="bg-gray-300 py-8">
    <div class="container">
        <div class="grid lg:grid-cols-4 md:grid-cols-3 grid-cols-1 gap-5">
            <div class="">
                <?php dynamic_sidebar('footer_widget1'); ?>
            </div>
            <div class="">
                <?php dynamic_sidebar('footer_widget2'); ?>
            </div>
            <div class="">
                <?php dynamic_sidebar('footer_widget3'); ?>
            </div>
            <div class="">
                <?php dynamic_sidebar('footer_widget4'); ?>
            </div>
        </div>
    </div>
</div>

<div class="py-6 bg-indigo-950 text-white">
    <div class="container">
        <div class="flex justify-between">
            <p>© 2023 WpTheme. All rights reserved.</p>
            <?php  
                wp_nav_menu( array(
                    'theme_location' => 'footer_menu',
                    'menu_class'     => 'flex flex-wrap gap-x-4'
                ) );
            ?>
        </div>
    </div>
</div>















<?php wp_footer(); ?>
</body>
</html>