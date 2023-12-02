

<div class="wetheme-gallery">

        <?php 
            $gallary = get_field('property_gallary');
        ?>
        
        <?php 
            if( !empty($gallary) ){
            foreach ( $gallary as $image ){
        ?>
            <div class="item">
                <?php 
                    echo wp_get_attachment_image( $image['id'], 'postcard', false, array(
                        'class'     => 'w-full',
                    ) );
                ?>
            </div>
        <?php 
            }
        }
        ?>

    </div>
    <div class="wptheme-gallery-nav">

        <?php 
            if( !empty($gallary) ){
            foreach ( $gallary as $image ){
        ?>
            <div class="item">
                <?php 
                    echo wp_get_attachment_image( $image['id'], 'thumbnail', false, array(
                        'class'     => 'w-full object-cover',
                    ) );
                ?>
            </div>
        <?php 
            }
        }
    ?>
</div>