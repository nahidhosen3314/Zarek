


<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class WPClient extends \Elementor\Widget_Base {

    public function get_name() {
		return 'wp-client';
	}

    public function get_title() {
		return esc_html__( 'WPClient', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-image-box';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'client-image','client','wptheme','image-list' ];
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
			'client',
			[
				'label' => esc_html__( 'Repeater List', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
                    [
                        'name' => 'client_img',
                        'label' => esc_html__( 'Choose Image', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => [
                            'url' => \Elementor\Utils::get_placeholder_image_src(),
                        ]
                    ]
                ],                
			]
		);

		
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $wpclient = $settings['client'];
        ?>
            
			<div class="flex flex-wrap items-center justify-center gap-6">
				<?php foreach ( $wpclient as $item ) { ?>
					<div class="">
                        <?php
                            echo wp_get_attachment_image( $item['client_img']['id'] , 'medium', false, array(
                                'class' =>'!w-24 !h-24 !rounded-full !object-cover'
                            ) );
                        ?>
					</div>
				<?php } ?>
			</div>
            
        <?php

		


    }

    
}

