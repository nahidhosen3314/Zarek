<?php 

class ElementorLoader {

    private static $_instance = null;
    public static function instance() {
        
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }


    public function register_widgets( $widgets_manager ) {
        // Sec-title
        require_once( __DIR__ . '/widgets/SecTitle.php' );
        $widgets_manager->register( new \SecTitle() );
        // Property
        require_once( __DIR__ . '/widgets/Property.php' );
        $widgets_manager->register( new \Property() );
        // Recent post
        require_once( __DIR__ . '/widgets/RecentPost.php' );
        $widgets_manager->register( new \RecentPost() );
        // Icon list
        require_once( __DIR__ . '/widgets/IconLists.php' );
        $widgets_manager->register( new \IconLists() );
        // Gallery
        require_once( __DIR__ . '/widgets/WPGallery.php' );
        $widgets_manager->register( new \WPGallery() );
        // Icon Card
        require_once( __DIR__ . '/widgets/IconCard.php' );
        $widgets_manager->register( new \IconCard() );
        // Process Card
        require_once( __DIR__ . '/widgets/ProcessCard.php' );
        $widgets_manager->register( new \ProcessCard() );
        // Slider Team
        require_once( __DIR__ . '/widgets/SliderTeam.php' );
        $widgets_manager->register( new \SliderTeam() );
        // WP Client
        require_once( __DIR__ . '/widgets/WPClient.php' );
        $widgets_manager->register( new \WPClient() );
        // Expert Clider
        require_once( __DIR__ . '/widgets/ExpertClider.php' );
        $widgets_manager->register( new \ExpertClider() );
    
    }


    public function __construct() {
		add_action( 'elementor/init',[ $this, 'init' ] );
        add_action( 'elementor/widgets/register', [$this, 'register_widgets'] );

    }

    public function init($elements_manager) {

        \Elementor\plugin::instance()->elements_manager->add_category(
            'wptheme_element',
            [
                'title'     => esc_html__( "WPTheme's Element", "wptheme")
            ]
        );
    }

}
\ElementorLoader::instance();





?>