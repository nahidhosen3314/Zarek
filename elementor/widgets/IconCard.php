


<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class IconCard extends \Elementor\Widget_Base {

    public function get_name() {
		return 'icon-card';
	}

    public function get_title() {
		return esc_html__( 'Icon Card', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-gallery-grid';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'icon-card','card','wptheme','card-list' ];
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
			'list',
			[
				'label' => esc_html__( 'Repeater List', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
                    [
                        'name' => 'icon',
                        'label' => esc_html__( 'Icon', 'wptheme' ),
                        'type' => \Elementor\Controls_Manager::ICONS,
                        'default' => [],
                    ],
					[
						'name' => 'title',
						'label' => esc_html__( 'Title', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::TEXT,
						'default' => esc_html__( 'List Title' , 'wptheme' ),
						'label_block' => true,
					],
					[
						'name' => 'desc',
						'label' => esc_html__( 'Content', 'wptheme' ),
						'type' => \Elementor\Controls_Manager::WYSIWYG,
						'default' => esc_html__( 'List Content' , 'wptheme' ),
						'show_label' => false,
                    ]
				],
				'default' => [
					[
						'title' => esc_html__( 'Title #1', 'wptheme' ),
						'desc' => esc_html__( 'Item content. Click the edit button to change this text.', 'wptheme' ),
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
            
			<div class="grid lg:grid-cols-4 md:grid-cols-2 gap-5">
				<?php foreach (  $settings['list'] as $item ) { ?>
					<div class=" bg-white p-6 rounded-lg hover:shadow-lg transition-all">
						<div class="h-14 w-14 p-2 mb-4 flex items-center justify-center rounded-lg bg-[#EEFCF8]">
							<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
						</div>
						<h5 class=" mb-3"><?php echo $item['title']; ?></h5>
						<p><?php echo $item['desc']; ?></p>
					</div>
				<?php } ?>
			</div>
            
        <?php

		


    }

    
}

