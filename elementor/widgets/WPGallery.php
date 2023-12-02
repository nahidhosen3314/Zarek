<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPGallery extends \Elementor\Widget_Base {

    public function get_name() {
		return 'wpgallery';
	}

    public function get_title() {
		return esc_html__( 'Gallery', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-instagram-nested-gallery';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'gallery', 'list-gallery', 'wptheme', 'grid-gallary' ];
	}

    protected function register_controls() {
        $this->start_controls_section(
			'content',
			[
				'label' => esc_html__( 'Content', 'wptheme' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'gallery',
			[
				'label' => esc_html__( 'Choose Image', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
                'show_label' => false,
				'default' => [],
			]
		);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $gallery = $settings['gallery'];
        ?>
        <div class="flex flex-wrap -mx-2">
            <?php
                foreach( $gallery as $image ){
                ?>
                <div class="w-1/2 flex-grow p-2">
                    <?php
                        echo wp_get_attachment_image( $image['id'] , 'medium_large', false, array(
                            'class' => 'w-full !rounded-lg'
                        ) );
                    ?>
                </div>
                <?php
                }
            ?>
        </div>
        <?php
    }

    
}



