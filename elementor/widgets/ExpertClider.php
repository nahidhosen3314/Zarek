<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ExpertClider extends \Elementor\Widget_Base {

    public function get_name() {
		return 'expert-clider';
	}

    public function get_title() {
		return esc_html__( 'Expert Slider', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-import-export';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'expert-slider','slider','wptheme','slider' ];
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
			'wpslider',
			[
				'label' => esc_html__( 'Repeater List', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
                    [
						'name' => 'img_slid',
						'label' => esc_html__( 'Slider Image', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [],
                    ],
                    [
						'name' => 'content',
						'label' => esc_html__( 'Content', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Slider Content' , 'wptheme' ),
						'show_label' => false,
                    ],

					[
						'name' => 'title',
						'label' => esc_html__( 'Title', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Slider Title' , 'wptheme' ),
						'label_block' => true,
					],
					
				],
				'default' => [
					[
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'wptheme' ),
                        'title' => esc_html__( 'Title #1', 'wptheme' ),
					]
				],
				'title_field' => '{{{ title }}}',
			]
		);

		
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="expert-slider owl-carousel">
        <?php
        foreach( $settings['wpslider'] as $slide ){
        ?>
            <div class="lg:flex justify-center lg:max-w-4xl lg:mx-auto gap-9  sm:px-16 lg:px-0">
                <div class="flex justify-center sm:block">
                    <?php 
                        $id = $slide['img_slid']['id'];
                        $url = $slide['img_slid']['url'];
                        if( $id ){
                            echo wp_get_attachment_image( $id, 'thumbnail', false, array(
                                'class' => 'lg:!h-48 lg:!w-48 !h-40 !w-40 !rounded-t-full !rounded-br-full !object-cover'
                            ) );
                        }else{
                            echo '<img class="lg:!h-48 lg:!w-48 !h-40 !w-40 !rounded-t-full !rounded-br-full !object-cover" src="'.$url.'" alt="">';
                        }
                    ?>
                </div>
                <div class="flex-1">
                    <svg class="mx-auto sm:mx-0 w-16 h-16 rounded-full p-4 mt-6 lg:mt-0 mb-5 bg-primary/70" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16"><path fill="#082f36" d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388c0-.351.021-.703.062-1.054c.062-.372.166-.703.31-.992c.145-.29.331-.517.559-.683c.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992a4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612c0-.351.021-.703.062-1.054c.062-.372.166-.703.31-.992c.145-.29.331-.517.559-.683c.227-.186.516-.279.868-.279V3c-.579 0-1.085.124-1.52.372a3.322 3.322 0 0 0-1.085.992a4.92 4.92 0 0 0-.62 1.458A7.712 7.712 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/></svg>
                    <div class="mb-3 text-center sm:text-left">
                        <?php echo $slide['content']; ?>
                    </div>
                    <div class="text-center sm:text-left">
                        <?php echo $slide['title']; ?>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
        <script>
            jQuery(document).ready(function($){
                $('.expert-slider').owlCarousel({
                    items:1,
                    nav:true,
                    dots:false,
                    smartSpeed: 1000,
                    navText: [
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><path fill="#082f36" d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.592 30.592 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.592 30.592 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0z"/></svg>',
                        '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 1024 1024"><g transform="translate(1024 0) scale(-1 1)"><path fill="#082f36" d="M609.408 149.376L277.76 489.6a32 32 0 0 0 0 44.672l331.648 340.352a29.12 29.12 0 0 0 41.728 0a30.592 30.592 0 0 0 0-42.752L339.264 511.936l311.872-319.872a30.592 30.592 0 0 0 0-42.688a29.12 29.12 0 0 0-41.728 0z"/></g></svg>'
                    ],
                    responsive: {
                        0:{
                            items: 1,
                            nav: false,
                            dots: true,
                            
                        },
                        640:{
                            items: 1,
                        },
                    }
                    
                });
            });
        </script>
        <?php
    }
		
}




