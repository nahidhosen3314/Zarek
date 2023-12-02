<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SliderTeam extends \Elementor\Widget_Base {

    public function get_name() {
		return 'slider-team';
	}

    public function get_title() {
		return esc_html__( 'WPSlider Team', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-slider-vertical';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'slider','team','wptheme','slider-card' ];
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
			'slider',
			[
				'label' => esc_html__( 'Repeater List', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
                    [
						'name' => 'image_slid',
						'label' => esc_html__( 'Image', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
						'default' => [],
                    ],
                    [
						'name' => 'slide_content',
						'label' => esc_html__( 'Content', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Slider Content' , 'wptheme' ),
						'show_label' => false,
                    ],
					[
						'name' => 'slide_title',
						'label' => esc_html__( 'Slider Title', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'Slider Title' , 'wptheme' ),
						'label_block' => true,
					],
				],
				'default' => [
					[
						'slide_title' => esc_html__( 'Slide title one', 'wptheme' ),
						'slide_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'wptheme' ),
                    ],
                    [
						'slide_title' => esc_html__( 'Slide title two', 'wptheme' ),
						'slide_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'wptheme' ),
					]
				],
				'title_field' => '{{{ slide_title }}}',
			]
		);
        $this->end_controls_section();
    }


    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="hero-slider owl-carousel">
        <?php
        foreach( $settings['slider'] as $slide ){
        ?>
            <div class="bg-white p-6 rounded-lg text-center group hover:shadow-xl transition-all duration-300 flex flex-col flex-grow">
                <div class="inline-block m-auto relative mb-5">
                <div class="absolute h-14 w-14 rounded-full bg-[#DFDFDF]/60 -left-5  top-12 group-hover:bg-primary/40 transition-all duration-300"></div>
                    <?php 
                        $id = $slide['image_slid']['id'];
                        $url = $slide['image_slid']['url'];
                        if( $id ){
                            echo wp_get_attachment_image( $id, 'thumbnail', false, array(
                                'class' => '!h-24 !w-24 !rounded-full object-cover'
                            ) );
                        }else{
                            echo '<img class="h-24 !w-24 !rounded-full object-cover" src="'.$url.'" alt="">';
                        }
                    ?>
                </div>
                <div class="flex-grow">
                    <?php echo $slide['slide_content']; ?>
                </div>
                <div class="mt-6">
                    <?php echo $slide['slide_title']; ?>
                </div>
            </div>
        <?php
            }
        ?>
        </div>
        <script>
            jQuery(document).ready(function($){
                $('.hero-slider').owlCarousel({
                    arrows: false,
                    dots: true,
                    margin: 20,
                    smartSpeed: 1000,
                    animateOut: 'fadeOut',
                    responsive: {
                        0:{
                            items: 1,
                        },
                        700:{
                            items: 2,

                        },
                        1050:{
                            items: 4,
                        }
                    }

                });
            });
        </script>
        <?php
    }
}



