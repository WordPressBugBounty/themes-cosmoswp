<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * WooCommerce Header Cart Header Customizer Options
 * @package CosmosWP
 */

if ( ! class_exists( 'CosmosWP_WooCommerce_Wishlist_Header' ) ) :

	class CosmosWP_WooCommerce_Wishlist_Header {

		/**
		 * Panel ID
		 *
		 * @var string
		 * @access public
		 * @since 1.0.2
		 *
		 */
		public $element = 'cosmoswp_woo_wishlist_header';

		/**
		 * Main Instance
		 *
		 * Insures that only one instance of CosmosWP_WooCommerce_Wishlist_Header exists in memory at any one
		 * time. Also prevents needing to define globals all over the place.
		 *
		 * @since    1.0.0
		 * @access   public
		 *
		 * @return object
		 */
		public static function instance() {

			// Store the instance locally to avoid private static replication
			static $instance = null;

			// Only run these methods if they haven't been ran previously
			if ( null === $instance ) {
				$instance = new CosmosWP_WooCommerce_Wishlist_Header;
			}

			// Always return the instance
			return $instance;
		}

		/**
		 *  Run functionality with hooks
		 *
		 * @since    1.0.0
		 * @access   public
		 *
		 * @return void
		 */
		public function run() {

			add_filter( 'cosmoswp_default_theme_options', array( $this, 'add_defaults' ) );
			add_filter( 'cosmoswp_header_builder_item', array( $this, 'add_cosmoswp_header_builder_item' ) );
			add_filter( 'customize_register', array( $this, 'customize_register' ), 99 );
			add_filter( 'cosmoswp_dynamic_css', array( $this, 'dynamic_css' ) );
			add_filter( 'cosmoswp_get_template_part', array( $this, 'get_template_part' ), 10, 2 );
			add_filter( 'cosmoswp_customize_partial_header_setting', array( $this, 'customize_header_partial' ) );

			/*https://gist.github.com/mikejolley/2044109*/
			add_filter( 'woocommerce_add_to_cart_fragments', array( $this, 'cart_fragment' ) );
		}

		/**
		 * Callback functions for cosmoswp_default_theme_options,
		 * Add Header Builder defaults values
		 *
		 * @since    1.0.2
		 * @access   public
		 *
		 * @param array $default_options
		 * @return array
		 */
		public function add_defaults( $default_options = array() ) {
			$defaults = array(
				'cwp-enable-woo-wishlist'       => 1,
				'cwp-woo-wishlist-icon'         => 'fas fa-heart', /*change on get*/
				'cwp-woo-wishlist-icon-align'   => 'cwp-flex-align-right',

				'cwp-woo-wishlist-icon-size'    => '18',
				'cwp-woo-wishlist-icon-padding' => json_encode(
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
							'top'         => '',
							'right'       => '',
							'bottom'      => '',
							'left'        => '',
							'cssbox_link' => true,
						),
					)
				),
				'cwp-woo-wishlist-icon-margin'  => json_encode(
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
							'top'         => '',
							'right'       => '',
							'bottom'      => '',
							'left'        => '',
							'cssbox_link' => true,
						),
					)
				),
				'cwp-woo-wishlist-icon-styling' => json_encode(
					array(
						'normal-text-color'       => '#333',
						'normal-bg-color'         => '',
						'normal-border-style'     => 'none',
						'normal-border-color'     => '',
						'normal-box-shadow-color' => '',
						'hover-text-color'        => '#275cf6',
						'hover-bg-color'          => '',
						'hover-border-style'      => 'none',
						'hover-border-color'      => '',
						'hover-box-shadow-color'  => '',
						'normal-border-width'     => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'normal-box-shadow-css'   => array(
							'desktop' => array(
								'x'           => '',
								'Y'           => '',
								'BLUR'        => '',
								'SPREAD'      => '',
								'cssbox_link' => true,
							),
						),
						'normal-border-radius'    => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'hover-border-width'      => array(
							'desktop' => array(
								'top'         => '',
								'right'       => '',
								'bottom'      => '',
								'left'        => '',
								'cssbox_link' => true,
							),
						),
						'hover-box-shadow-css'    => array(
							'desktop' => array(
								'x'           => '',
								'Y'           => '',
								'BLUR'        => '',
								'SPREAD'      => '',
								'cssbox_link' => true,
							),
						),
						'hover-border-radius'     => array(
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
			);

			return array_merge( $default_options, $defaults );
		}

		/**
		 * Add Item on Header Builder.
		 *
		 * @since    1.0.2
		 */
		public function add_cosmoswp_header_builder_item( $cosmoswp_header_builder_item ) {
			$cosmoswp_header_builder_item[ $this->element ] = array(
				'icon'    => 'dashicons dashicons-heart',
				'name'    => esc_html__( 'WishList', 'cosmoswp' ),
				'id'      => $this->element,
				'col'     => 0,
				'width'   => '2',
				'section' => $this->element,
			);

			return $cosmoswp_header_builder_item;
		}

		/**
		 * Callback functions for customize_register,
		 * Add control for Dropdown_Menu
		 *
		 * @since    1.0.2
		 * @access   public
		 *
		 * @param WP_Customize_Manager $wp_customize
		 * @return void
		 */
		public function customize_register( $wp_customize ) {

			$header_defaults = $this->add_defaults( array() );

			/*button two section*/
			$wp_customize->add_section(
				$this->element,
				array(
					'title' => esc_html__( 'WooCommerce Wishlist', 'cosmoswp' ),
					'panel' => cosmoswp_header_builder()->panel,
				//'active_callback_'   => 'cosmoswp_header_layout_if_horizontal'
				)
			);

			/*Enable Icon */
			$wp_customize->add_setting(
				'cwp-enable-woo-wishlist',
				array(
					'default'           => $header_defaults['cwp-enable-woo-wishlist'],
					'sanitize_callback' => 'cosmoswp_sanitize_checkbox',
					'transport'         => 'refresh',
				)
			);

			$wp_customize->add_control(
				'cwp-enable-woo-wishlist',
				array(
					'label'    => esc_html__( 'Enable Wishlist', 'cosmoswp' ),
					'section'  => $this->element,
					'settings' => 'cwp-enable-woo-wishlist',
					'type'     => 'checkbox',
				)
			);

			/*Icon
			TODO active callback*/
			$wp_customize->add_setting(
				'cwp-woo-wishlist-icon',
				array(
					'sanitize_callback' => 'cosmoswp_sanitize_field_default_css_box',
					'default'           => $header_defaults['cwp-woo-wishlist-icon'],
					'transport'         => 'refresh',
				)
			);
			$wp_customize->add_control(
				new CosmosWP_Customize_Icons_Control(
					$wp_customize,
					'cwp-woo-wishlist-icon',
					array(
						'label'    => esc_html__( 'Icon', 'cosmoswp' ),
						'section'  => $this->element,
						'settings' => 'cwp-woo-wishlist-icon',
					)
				)
			);

			/*Icon align*/
			$wp_customize->add_setting(
				'cwp-woo-wishlist-icon-align',
				array(
					'default'           => $header_defaults['cwp-woo-wishlist-icon-align'],
					'sanitize_callback' => 'cosmoswp_sanitize_select',
					'transport'         => 'refresh',
				)
			);
			$choices = cosmoswp_flex_align();
			$wp_customize->add_control(
				new CosmosWP_Custom_Control_Buttonset(
					$wp_customize,
					'cwp-woo-wishlist-icon-align',
					array(
						'choices'  => $choices,
						'label'    => esc_html__( 'Icon Alignment', 'cosmoswp' ),
						'section'  => $this->element,
						'settings' => 'cwp-woo-wishlist-icon-align',
					)
				)
			);

			/*Icon Size*/
			$wp_customize->add_setting(
				'cwp-woo-wishlist-icon-size',
				array(
					'default'           => $header_defaults['cwp-woo-wishlist-icon-size'],
					'sanitize_callback' => 'cosmoswp_sanitize_number',
					'transport'         => 'refresh',
				)
			);
			$wp_customize->add_control(
                'cwp-woo-wishlist-icon-size',
                array(
                    'label'       => esc_html__( 'Icon Size (px)', 'cosmoswp' ),
                    'section'     => $this->element,
                    'settings'    => 'cwp-woo-wishlist-icon-size',
                    'type'    => 'number',
                    'input_attrs' => array(
                        'min'  => 8,
                        'max'  => 400,
                        'step' => 1,
                    ),
                )
			);

			/*Margin*/
			$wp_customize->add_setting(
				'cwp-woo-wishlist-icon-margin',
				array(
					'sanitize_callback' => 'cosmoswp_sanitize_field_default_css_box',
					'default'           => $header_defaults['cwp-woo-wishlist-icon-margin'],
					'transport'         => 'refresh',
				)
			);
			$wp_customize->add_control(
				new CosmosWP_Custom_Control_Cssbox(
					$wp_customize,
					'cwp-woo-wishlist-icon-margin',
					array(
						'label'    => esc_html__( 'Margin', 'cosmoswp' ),
						'section'  => $this->element,
						'settings' => 'cwp-woo-wishlist-icon-margin',
					),
					array(),
					array()
				)
			);

			/*Padding*/
			$wp_customize->add_setting(
				'cwp-woo-wishlist-icon-padding',
				array(
					'sanitize_callback' => 'cosmoswp_sanitize_field_default_css_box',
					'default'           => $header_defaults['cwp-woo-wishlist-icon-padding'],
					'transport'         => 'refresh',
				)
			);
			$wp_customize->add_control(
				new CosmosWP_Custom_Control_Cssbox(
					$wp_customize,
					'cwp-woo-wishlist-icon-padding',
					array(
						'label'    => esc_html__( 'Padding', 'cosmoswp' ),
						'section'  => $this->element,
						'settings' => 'cwp-woo-wishlist-icon-padding',
					),
					array(),
					array()
				)
			);
			/*Tabs*/
			$wp_customize->add_setting(
				'cwp-woo-wishlist-icon-styling',
				array(
					'sanitize_callback' => 'cosmoswp_sanitize_field_tabs',
					'default'           => $header_defaults['cwp-woo-wishlist-icon-styling'],
					'transport'         => 'refresh',
				)
			);
			$border_style_choices = cosmoswp_header_border_style();
			$wp_customize->add_control(
				new CosmosWP_Custom_Control_Tabs(
					$wp_customize,
					'cwp-woo-wishlist-icon-styling',
					array(
						'label'    => esc_html__( 'Icon Styling', 'cosmoswp' ),
						'section'  => $this->element,
						'settings' => 'cwp-woo-wishlist-icon-styling',
					),
					array(
						'tabs'   => array(
							'cwp-woo-wishlist-icon-normal-style' => array(
								'label' => esc_html__( 'Normal', 'cosmoswp' ),
							),
							'cwp-woo-wishlist-icon-hover-style'  => array(
								'label' => esc_html__( 'Hover', 'cosmoswp' ),
							),
						),
						'fields' => array(
							'normal-text-color'       => array(
								'type'  => 'color',
								'label' => esc_html__( 'Text Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-normal-style',
							),
							'normal-bg-color'         => array(
								'type'  => 'color',
								'label' => esc_html__( 'Background Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-normal-style',
							),
							'normal-border-style'     => array(
								'type'    => 'select',
								'label'   => esc_html__( 'Border Style', 'cosmoswp' ),
								'options' => $border_style_choices,
								'tab'     => 'cwp-woo-wishlist-icon-normal-style',
							),
							'normal-border-width'     => array(
								'type'  => 'cssbox',
								'label' => esc_html__( 'Border Width (px)', 'cosmoswp' ),
								'class' => 'cwp-element-show',
								'tab'   => 'cwp-woo-wishlist-icon-normal-style',
								'attr'  => array(
									'min'       => 0,
									'max'       => 1000,
									'step'      => 1,
									'link'      => 1,
									'devices'   => array(
										'desktop' => array(
											'icon' => 'dashicons-laptop',
										),
									),
									'link_text' => esc_html__( 'Link', 'cosmoswp' ),
								),
							),
							'normal-border-color'     => array(
								'type'  => 'color',
								'label' => esc_html__( 'Border Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-normal-style',
							),
							'normal-border-radius'    => array(
								'type'  => 'cssbox',
								'label' => esc_html__( 'Border Radius (px)', 'cosmoswp' ),
								'class' => 'cwp-element-show',
								'tab'   => 'cwp-woo-wishlist-icon-normal-style',
								'attr'  => array(
									'min'       => 0,
									'max'       => 1000,
									'step'      => 1,
									'link'      => 1,
									'devices'   => array(
										'desktop' => array(
											'icon' => 'dashicons-laptop',
										),
									),
									'link_text' => esc_html__( 'Link', 'cosmoswp' ),
								),
							),
							'normal-box-shadow-color' => array(
								'type'  => 'color',
								'label' => esc_html__( 'Box Shadow Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-normal-style',
							),
							'normal-box-shadow-css'   => array(
								'type'       => 'cssbox',
								'tab'        => 'cwp-woo-wishlist-icon-normal-style',
								'class'      => 'cwp-element-show',
								'box_fields' => array(
									'x'      => true,
									'Y'      => true,
									'BLUR'   => true,
									'SPREAD' => true,
								),
								'attr'       => array(
									'min'         => 0,
									'max'         => 1000,
									'step'        => 1,
									'link'        => 1,
									'link_toggle' => false,
									'devices'     => array(
										'desktop' => array(
											'icon' => 'dashicons-laptop',
										),
									),
									'link_text'   => esc_html__( 'INSET', 'cosmoswp' ),
								),
							),
							'hover-text-color'        => array(
								'type'  => 'color',
								'label' => esc_html__( ' Text Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-hover-style',
							),
							'hover-bg-color'          => array(
								'type'  => 'color',
								'label' => esc_html__( 'Background Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-hover-style',
							),
							'hover-border-style'      => array(
								'type'    => 'select',
								'label'   => esc_html__( 'Border Style', 'cosmoswp' ),
								'options' => $border_style_choices,
								'tab'     => 'cwp-woo-wishlist-icon-hover-style',
							),
							'hover-border-width'      => array(
								'type'  => 'cssbox',
								'label' => esc_html__( 'Border Width (px)', 'cosmoswp' ),
								'class' => 'cwp-element-show',
								'tab'   => 'cwp-woo-wishlist-icon-hover-style',
								'attr'  => array(
									'min'       => 0,
									'max'       => 1000,
									'step'      => 1,
									'link'      => 1,
									'devices'   => array(
										'desktop' => array(
											'icon' => 'dashicons-laptop',
										),
									),
									'link_text' => esc_html__( 'Link', 'cosmoswp' ),
								),
							),
							'hover-border-color'      => array(
								'type'  => 'color',
								'label' => esc_html__( 'Border Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-hover-style',
							),
							'hover-border-radius'     => array(
								'type'  => 'cssbox',
								'label' => esc_html__( 'Border Radius (px)', 'cosmoswp' ),
								'class' => 'cwp-element-show',
								'tab'   => 'cwp-woo-wishlist-icon-hover-style',
								'attr'  => array(
									'min'       => 0,
									'max'       => 1000,
									'step'      => 1,
									'link'      => 1,
									'devices'   => array(
										'desktop' => array(
											'icon' => 'dashicons-laptop',
										),
									),
									'link_text' => esc_html__( 'Link', 'cosmoswp' ),
								),
							),
							'hover-box-shadow-color'  => array(
								'type'  => 'color',
								'label' => esc_html__( 'Box Shadow Color', 'cosmoswp' ),
								'tab'   => 'cwp-woo-wishlist-icon-hover-style',
							),
							'hover-box-shadow-css'    => array(
								'type'       => 'cssbox',
								'class'      => 'cwp-element-show',
								'tab'        => 'cwp-woo-wishlist-icon-hover-style',
								'box_fields' => array(
									'x'      => true,
									'Y'      => true,
									'BLUR'   => true,
									'SPREAD' => true,
								),
								'attr'       => array(
									'min'         => 0,
									'max'         => 1000,
									'step'        => 1,
									'link'        => 1,
									'link_toggle' => false,
									'devices'     => array(
										'desktop' => array(
											'icon' => 'dashicons-laptop',
										),
									),
									'link_text'   => esc_html__( 'INSET', 'cosmoswp' ),
								),
							),
						),
					)
				)
			);
		}

		/**
		 * Customize Partial Header.
		 *
		 * @since    1.0.2
		 */
		public function customize_header_partial( $output ) {

			$cosmoswp_header_settings = array(

				'cwp-enable-woo-wishlist',

			);

			if ( $output ) {
				return array_merge( $output, $cosmoswp_header_settings );
			}
			return $output;

		}

		/**
		 * Add Dynamic CS.
		 *
		 * @since    1.0.2
		 */
		public function dynamic_css( $dynamic_css ) {

			/* device type */
			$local_dynamic_css['all']     = '';
			$local_dynamic_css['tablet']  = '';
			$local_dynamic_css['desktop'] = '';

			$cwp_woo_icon_css = $cwp_woo_icon_hover_css = $cwp_woo_icon_tablet_css = $cwp_woo_icon_desktop_css = '';

			/* Added dynamic CSS */
			$size    = cosmoswp_get_theme_options( 'cwp-woo-wishlist-icon-size' );
			$styling = cosmoswp_get_theme_options( 'cwp-woo-wishlist-icon-styling' );
			$styling = json_decode( $styling, true );

			if ( $size ) {
				$cwp_woo_icon_css .= 'font-size:' . $size . 'px;';
			}
			/*Margin Padding*/

			/* margin */
			$dss_margin = cosmoswp_get_theme_options( 'cwp-woo-wishlist-icon-margin' );
			$dss_margin = json_decode( $dss_margin, true );

			// desktop margin
			$dss_margin_desktop = cosmoswp_cssbox_values_inline( $dss_margin, 'desktop' );
			if ( strpos( $dss_margin_desktop, 'px' ) !== false ) {
				$cwp_woo_icon_desktop_css .= 'margin:' . $dss_margin_desktop . ';';
			}
			// tablet marign
			$dss_margin_tablet = cosmoswp_cssbox_values_inline( $dss_margin, 'tablet' );
			if ( strpos( $dss_margin_tablet, 'px' ) !== false ) {
				$cwp_woo_icon_tablet_css .= 'margin:' . $dss_margin_tablet . ';';
			}
			// mobile margin
			$dss_margin_mobile = cosmoswp_cssbox_values_inline( $dss_margin, 'mobile' );
			if ( strpos( $dss_margin_mobile, 'px' ) !== false ) {
				$cwp_woo_icon_css .= 'margin:' . $dss_margin_mobile . ';';
			}
			/* padding */
			$dds_padding = cosmoswp_get_theme_options( 'cwp-woo-wishlist-icon-padding' );
			$dds_padding = json_decode( $dds_padding, true );

			// desktop padding
			$dds_padding_desktop = cosmoswp_cssbox_values_inline( $dds_padding, 'desktop' );
			if ( strpos( $dds_padding_desktop, 'px' ) !== false ) {
				$cwp_woo_icon_desktop_css .= 'padding:' . $dds_padding_desktop . ';';
			}
			//tablet padding
			$dds_padding_tablet = cosmoswp_cssbox_values_inline( $dds_padding, 'tablet' );
			if ( strpos( $dds_padding_tablet, 'px' ) !== false ) {
				$cwp_woo_icon_tablet_css .= 'padding:' . $dds_padding_tablet . ';';
			}
			//mobile padding
			$dds_padding_mobile = cosmoswp_cssbox_values_inline( $dds_padding, 'mobile' );
			if ( strpos( $dds_padding_mobile, 'px' ) !== false ) {
				$cwp_woo_icon_css .= 'padding:' . $dds_padding_mobile . ';';
			}
			//txt color
			$dds_txt_color = cosmoswp_ifset( $styling['normal-text-color'] );
			if ( $dds_txt_color ) {
				$cwp_woo_icon_css .= 'color:' . $dds_txt_color . ';';
			}
			//bg color
			$dds_bg_color = cosmoswp_ifset( $styling['normal-bg-color'] );
			if ( $dds_bg_color ) {
				$cwp_woo_icon_css .= 'background:' . $dds_bg_color . ';';
			} else {
				$cwp_woo_icon_css .= 'background:transparent;';
			}
			//border style
			$dds_border_style = cosmoswp_ifset( $styling['normal-border-style'] );
			if ( $dds_border_style ) {
				$cwp_woo_icon_css .= 'border-style:' . $dds_border_style . ';';
			}
			//border color
			$dds_border_color = cosmoswp_ifset( $styling['normal-border-color'] );
			if ( $dds_border_color ) {
				$cwp_woo_icon_css .= 'border-color:' . $dds_border_color . ';';
			}
			//border width
			$dds_border_width = cosmoswp_cssbox_values_inline( cosmoswp_ifset( $styling['normal-border-width'] ), 'desktop' );
			if ( strpos( $dds_border_width, 'px' ) !== false ) {
				$cwp_woo_icon_css .= 'border-width:' . $dds_border_width . ';';
			}
			//border radius
			$dds_border_radius = cosmoswp_cssbox_values_inline( cosmoswp_ifset( $styling['normal-border-radius'] ), 'desktop' );
			if ( strpos( $dds_border_radius, 'px' ) !== false ) {
				$cwp_woo_icon_css .= 'border-radius:' . $dds_border_radius . ';';
			}
			//bx shadow
			$dds_shadow_css = cosmoswp_boxshadow_values_inline( cosmoswp_ifset( $styling['normal-box-shadow-css'] ), 'desktop' );
			if ( strpos( $dds_shadow_css, 'px' ) !== false ) {
				$dds_shadow_color  = cosmoswp_ifset( $styling['normal-box-shadow-color'] );
				$dds_bx_shadow     = $dds_shadow_css . ' ' . $dds_shadow_color;
				$cwp_woo_icon_css .= '-webkit-box-shadow:' . $dds_bx_shadow . ';';
				$cwp_woo_icon_css .= '-moz-box-shadow:' . $dds_bx_shadow . ';';
				$cwp_woo_icon_css .= 'box-shadow:' . $dds_bx_shadow . ';';
			}

			/* normal css */
			if ( ! empty( $cwp_woo_icon_css ) ) {
				$dds_search_dynamic_css    = '.cwp-wc-wishlist-icon{
		' . $cwp_woo_icon_css . '
	}';
				$local_dynamic_css['all'] .= $dds_search_dynamic_css;
			}
			/*hover css*/
			//txt color
			$dds_hover_txt_color = cosmoswp_ifset( $styling['hover-text-color'] );
			if ( $dds_hover_txt_color ) {
				$cwp_woo_icon_hover_css .= 'color:' . $dds_hover_txt_color . ';';
			}
			//bg color
			$dds_hover_bg_color = cosmoswp_ifset( $styling['hover-bg-color'] );
			if ( $dds_hover_bg_color ) {
				$cwp_woo_icon_hover_css .= 'background-color:' . $dds_hover_bg_color . ';';
			}
			//border style
			$dds_hover_border_style = cosmoswp_ifset( $styling['hover-border-style'] );
			if ( $dds_hover_border_style ) {
				$cwp_woo_icon_hover_css .= 'border-style:' . $dds_hover_border_style . ';';
			}
			//border color
			$dds_hover_border_color = cosmoswp_ifset( $styling['hover-border-color'] );
			if ( $dds_hover_border_color ) {
				$cwp_woo_icon_hover_css .= 'border-color:' . $dds_hover_border_color . ';';
			}
			//border width
			$dds_hover_border_width = cosmoswp_cssbox_values_inline( cosmoswp_ifset( $styling['hover-border-width'] ), 'desktop' );
			if ( strpos( $dds_hover_border_width, 'px' ) !== false ) {
				$cwp_woo_icon_hover_css .= 'border-width:' . $dds_hover_border_width . ';';
			}
			//border radius
			$dds_hover_border_radius = cosmoswp_cssbox_values_inline( cosmoswp_ifset( $styling['hover-border-radius'] ), 'desktop' );
			if ( strpos( $dds_hover_border_radius, 'px' ) !== false ) {
				$cwp_woo_icon_hover_css .= 'border-radius:' . $dds_hover_border_radius . ';';
			}
			//bx shadow
			$dds_hover_shadow_css = cosmoswp_boxshadow_values_inline( cosmoswp_ifset( $styling['hover-box-shadow-css'] ), 'desktop' );
			if ( strpos( $dds_hover_shadow_css, 'px' ) !== false ) {
				$dds_hover_shadow_color  = cosmoswp_ifset( $styling['hover-box-shadow-color'] );
				$dds_hover_bx_shadow     = $dds_hover_shadow_css . ' ' . $dds_hover_shadow_color;
				$cwp_woo_icon_hover_css .= '-webkit-box-shadow:' . $dds_hover_bx_shadow . ';';
				$cwp_woo_icon_hover_css .= '-moz-box-shadow:' . $dds_hover_bx_shadow . ';';
				$cwp_woo_icon_hover_css .= 'box-shadow:' . $dds_hover_bx_shadow . ';';
			}
			if ( ! empty( $cwp_woo_icon_hover_css ) ) {
				$dds_search_hover_dynamic_css = '.cwp-wc-wishlist-icon:hover{
		' . $cwp_woo_icon_hover_css . '
	}';
				$local_dynamic_css['all']    .= $dds_search_hover_dynamic_css;
			}
			/* tablet css */
			if ( ! empty( $cwp_woo_icon_tablet_css ) ) {
				$dds_icon_tablet_dynamic_css  = '.cwp-wc-wishlist-icon{
		' . $cwp_woo_icon_tablet_css . '
	}';
				$local_dynamic_css['tablet'] .= $dds_icon_tablet_dynamic_css;
			}
			/* desktop css */
			if ( ! empty( $cwp_woo_icon_desktop_css ) ) {
				$dds_icon_desktop_dynamic_css  = '.cwp-wc-wishlist-icon{
		' . $cwp_woo_icon_desktop_css . '
	}';
				$local_dynamic_css['desktop'] .= $dds_icon_desktop_dynamic_css;
			}
			/* Added CSS to global*/
			if ( is_array( $dynamic_css ) && ! empty( $dynamic_css ) ) {
				$all_css = array_merge_recursive( $dynamic_css, $local_dynamic_css );
				return $all_css;
			} else {
				return $local_dynamic_css;
			}
		}

		/**
		 * Load template part
		 *
		 * @since    1.0.2
		 */
		function get_template_part( $template, $id ) {
			if ( ! $template && file_exists( COSMOSWP_PATH . "/cwp-woo/templates/{$id}.php" ) ) {
				$template = COSMOSWP_PATH . "/cwp-woo/templates/{$id}.php";
			}
			return $template;
		}

	}
endif;

/**
 * Create Instance for CosmosWP_WooCommerce_Wishlist_Header
 *
 * @since    1.0.2
 * @access   public
 *
 * @param
 * @return object
 */
if ( ! function_exists( 'CosmosWP_WooCommerce_Wishlist_Header' ) ) {

    function CosmosWP_WooCommerce_Wishlist_Header() {
        return CosmosWP_WooCommerce_Wishlist_Header::instance();
    }
    if( class_exists( 'YITH_WCWL' ) && cosmoswp_is_woocommerce_active()){
        CosmosWP_WooCommerce_Wishlist_Header()->run();
    }
}
