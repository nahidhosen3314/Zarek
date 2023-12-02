<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Property extends \Elementor\Widget_Base {

    public function get_name() {
		return 'property';
	}

    public function get_title() {
		return esc_html__( 'Property', 'wptheme' );
	}

    public function get_icon() {
		return 'eicon-flip-box';
	}

    public function get_categories() {
		return [ 'wptheme_element' ];
	}

    public function get_keywords() {
		return [ 'property','wptheme'];
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
			'number',
			[
				'label' => esc_html__( 'Number of porperties to display', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 3,
				'max' => 9,
				'step' => 3,
				'default' => 3,
			]
		);

		$this->add_control(
			'all_property_link',
			[
				'label' => esc_html__( 'See all property link', 'wptheme' ),
				'type' => \Elementor\Controls_Manager::URL,
				'label_block' => true,
			]
		);
		$this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$property = new WP_Query(array(
			'post_type'			=> 'property',
			'posts_per_page'	=>	$settings['number'],
		));

        ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-2  gap-6">
				<?php 	
					while ( $property->have_posts() ){
						$property->the_post();
						get_template_part( "template-parts/property-card" );
					}
				?>
            </div>
			<?php 
			if ( ! empty( $settings['all_property_link']['url'] ) ) {
			?>
				<div class="mt-8 text-center">
					<a href="<?php echo $settings['all_property_link']['url'];?>" class="btn btn-primary">
						<?php 
							echo esc_html__( 'See all property', 'wptheme' );
						?>
				</a>
				</div>
			<?php } ?>	
        <?php


    }
   


}


















?>