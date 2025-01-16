<?php
/**
 * CosmosWP Starter Content Handler
 *
 * @author  CosmosWP
 * @package CosmosWP
 * @since   1.4.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * Class CosmosWP_Starter_Content
 */
class CosmosWP_Starter_Content {

	/**
	 * Constructor.
	 */
	public function __construct() {
		// Register starter content.
		add_action( 'after_setup_theme', array( $this, 'register_starter_content' ) );
	}

	/**
	 * Gets an instance of this object.
	 *
	 * @static
	 * @access public
	 * @since 1.4.0
	 * @return object
	 */
	public static function instance() {
		// Store the instance locally to avoid private static replication.
		static $instance = null;

		// Only create an instance if it doesn't already exist.
		if ( null === $instance ) {
			$instance = new self();
		}

		// Always return the instance.
		return $instance;
	}

	/**
	 * Register starter content.
	 */
	public function register_starter_content() {
		// Define navigation menu items.
		$nav_items_header = array(
			'home'     => array(
				'type'      => 'post_type',
				'object'    => 'page',
				'object_id' => '{{home}}',
			),
			'about'    => array(
				'type'  => 'custom',
				'title' => esc_html__( 'About us', 'cosmoswp' ),
				'url'   => '#about',
			),
			'services' => array(
				'type'  => 'custom',
				'title' => esc_html__( 'Services', 'cosmoswp' ),
				'url'   => '#services',
			),
			'team'     => array(
				'type'  => 'custom',
				'title' => esc_html__( 'Team', 'cosmoswp' ),
				'url'   => '#team',
			),
			'blog'     => array(
				'type'  => 'custom',
				'title' => esc_html__( 'Blog', 'cosmoswp' ),
				'url'   => '#blog',
			),
			'contact'  => array(
				'type'  => 'custom',
				'title' => esc_html__( 'Contact', 'cosmoswp' ),
				'url'   => '#contact',
			),
		);

		// Define starter content.
		$starter_content = array(
			'attachments' => array(
				'logo' => array(
					'post_title' => _x( 'Logo', 'Theme starter content', 'cosmoswp' ),
					'file'       => 'assets/img/cosmoswp-white-logo.png',
				),
			),
			'theme_mods'  => array(
				'custom_logo'                       => '{{logo}}',
				'blogname'                          => _x( 'CosmosWP', 'Theme starter title', 'cosmoswp' ),
				'page-elements-sorting-with-title'  => array( 'content' ),
				'general-setting-h1-typography'     => '',
				'general-setting-h2-typography'     => '',
				'general-setting-h3-typography'     => '',
				'general-setting-h4-typography'     => '',
				'general-setting-h5-typography'     => '',
				'general-setting-h6-typography'     => '',
				'general-setting-body-p-typography' => '',
				'page-main-content-padding'         => wp_json_encode(
					array(
						'desktop' => array(
							'top'         => '0',
							'right'       => '0',
							'bottom'      => '0',
							'left'        => '0',
							'cssbox_link' => true,
						),
						'tablet'  => array(
							'top'         => '0',
							'right'       => '0',
							'bottom'      => '0',
							'left'        => '0',
							'cssbox_link' => true,
						),
						'mobile'  => array(
							'top'         => '0',
							'right'       => '0',
							'bottom'      => '0',
							'left'        => '0',
							'cssbox_link' => true,
						),
					)
				),
				'header-position-options'           => 'cwp-overlay-fixed',
				'header-general-width'              => 'cwp-full-width-header',
				'header-general-background-options' => wp_json_encode(
					array(
						'background-color'      => '',
						'background-image'      => '',
						'background-size'       => 'cover',
						'background-position'   => 'center',
						'background-repeat'     => 'no-repeat',
						'background-attachment' => 'scroll',
					)
				),
				'sticky-header-options'             => 'scroll-down',
				'sticky-header-bg-color'            => 'rgba(59,65,80,0.8)',
				'sticky-header-include-top'         => false,
				'site-logo-position'                => wp_json_encode(
					array(
						'desktop' => '',
						'tablet'  => '',
						'mobile'  => 'cwp-left',
					)
				),
				'site-identity-styling'             => wp_json_encode(
					array(
						'site-title-color'         => '#fff',
						'site-tagline-color'       => '#fff',
						'hover-site-title-color'   => '#ee396a',
						'hover-site-tagline-color' => '#ee396a',
					)
				),
				'primary-menu-styling'              => wp_json_encode(
					array(
						'normal-text-color'    => '#fff',
						'normal-bg-color'      => '',
						'normal-border-style'  => 'none',
						'normal-border-color'  => '',
						'hover-text-color'     => '#ee396a',
						'hover-bg-color'       => '',
						'hover-border-style'   => 'none',
						'hover-border-color'   => '',
						'active-text-color'    => '#ee396a',
						'active-bg-color'      => '',
						'active-border-style'  => 'none',
						'active-border-color'  => '',
						'normal-border-width'  => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'normal-border-radius' => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'hover-border-width'   => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'hover-border-radius'  => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'active-border-width'  => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'active-border-radius' => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
					)
				),
				'main-content-general-padding'      => wp_json_encode(
					array(
						'desktop' => array(
							'top'         => '',
							'right'       => '',
							'bottom'      => '',
							'left'        => '',
							'cssbox_link' => true,
						),
						'tablet'  => array(
							'top'         => '',
							'right'       => '',
							'bottom'      => '',
							'left'        => '',
							'cssbox_link' => true,
						),
						'mobile'  => array(
							'top'         => 0,
							'right'       => '',
							'bottom'      => '',
							'left'        => '',
							'cssbox_link' => true,
						),
					)
				),
				'cosmoswp-banner-options-page'      => 'hide',

			),

			'nav_menus'   => array(
				'header-primary-menu' => array(
					'name'  => esc_html__( 'Header Primary Menu', 'cosmoswp' ),
					'items' => $nav_items_header,
				),
				'footer-menu'         => array(
					'name'  => esc_html__( 'Footer Menu ( Support First Level Only )', 'cosmoswp' ),
					'items' => array(
						'privacy' => array(
							'type'  => 'custom',
							'title' => 'Privacy Policy',
							'url'   => '#privacy',
						),
					),
				),
			),
			'options'     => array(
				'show_on_front' => 'page',
				'page_on_front' => '{{home}}',
			),
			'posts'       => require_once trailingslashit( __DIR__ ) . 'content.php',
		);

		// Add starter content support.
		add_theme_support( 'starter-content', apply_filters( 'cosmoswp_starter_content', $starter_content ) );
	}
}

/**
 * Initializes the CosmosWP Starter Content class.
 *
 * @since 1.4.0
 * @return CosmosWP_Starter_Content
 */
function cosmoswp_starter_content() {
	return CosmosWP_Starter_Content::instance();
}
cosmoswp_starter_content();
