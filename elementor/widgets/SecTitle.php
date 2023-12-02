<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class SecTitle extends \Elementor\Widget_Base {

    public function get_name() {
		return 'sec-title';
	}

    public function get_title() {
		return esc_html__( 'Section Title', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-heading';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'heading','sec-title','wptheme','title' ];
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
			'sec_title',
			[
				'label' => esc_html__( 'Title', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Section title', 'wptheme' ),
				'placeholder' => esc_html__( 'Type your title here', 'wptheme' ),
			]
		);

        $this->add_control(
			'sec_desc',
			[
				'label' => esc_html__( 'Description', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'placeholder' => esc_html__( 'Type your description here', 'wptheme' ),
			]
		);

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
            <div class="max-w-xl text-center m-auto mb-5">
                <h3 class="mb-2"><?php echo $settings['sec_title'] ?></h3>
                <p><?php echo $settings['sec_desc'] ?></p>
            </div>
        <?php


    }

    
}


















?>