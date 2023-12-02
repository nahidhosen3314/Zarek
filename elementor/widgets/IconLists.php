<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class IconLists extends \Elementor\Widget_Base {

    public function get_name() {
		return 'icon-lists';
	}

    public function get_title() {
		return esc_html__( 'Icon List', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-editor-list-ul';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'icon-list','icon','wptheme','list' ];
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
						'list_content' => esc_html__( 'Item content. Click the edit button to change this text.', 'wptheme' ),
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
            
			<?php foreach (  $settings['list'] as $item ) { ?>
				<div class="sm:flex gap-5 pb-6">
					<div class="h-14 w-14 flex items-center p-3 rounded-lg bg-primary/30">
						<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
					</div>
					<div class="mt-4 sm:mt-0">
						<h4 class=" mb-2"><?php echo $item['title'] ?></h4>
						<p><?php echo $item['desc'] ?></p>
					</div>
				</div>
			<?php } ?>
            
        <?php

		


    }

    
}

