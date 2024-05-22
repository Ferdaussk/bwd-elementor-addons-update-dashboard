<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_bwdcpcatproduct_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'bwdcp-catproduct', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Product Category Carousel', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'eicon-product-categories bwdeb-elementor-bundle';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	protected function register_controls(){
		
		//tab-content
		$this->start_controls_section(
			'bwdcp_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'bwdcp_select_style_selection',
			[
				'label' => esc_html__( 'Select Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'style4' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'style5' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'style6' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'style7' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'style8' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'style9' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'style10' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'style11' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'style12' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'style13' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'style14' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
					'style15' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
					'style16' => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons' ),
					'style17' => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons' ),
					'style18' => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a href="https://bestwpdeveloper.com/product-category-carousel" target="_blank"><b>DEMO</b></a>. Get <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>PRO...</b></a>.',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_settings',
			[
				'label' => esc_html__( 'Category Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcp_image',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcp_image_link',
			[
				'label' => esc_html__( 'Hide Image Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcp_image' => 'yes',
				],
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcp_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcp_description',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcp_button',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcp_button_text',
			[
				'label' => esc_html__( 'Value', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'SHOP NOW', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcp_button' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// 
		$this->add_control(
			'bwdcp_review',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcp_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'bwdcp_review' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_query_content_section',
			[
				'label' => esc_html__( 'Category Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control("bwdcp_categories", [
            "label" => esc_html__("Categories", "bwdcp-catproduct-td"),
            "type" => Controls_Manager::SELECT,
            "default" => "woo",
            "options" => [
                "post" => "Post Categories",
                "woo" => "WooCommerce Categories",
            ],
        ]);
		$this->add_control(
			'bwdcp_empty_cat',
			array(
				'label'        => esc_html__( 'Show Empty Categories', 'bwd-elementor-addons' ),
				'type'         => Controls_Manager::SWITCHER,
				'default'      => '',
				'label_on'     => 'Yes',
				'label_off'    => 'No',
				'return_value' => 'yes',
			)
		);
		$this->add_control(
			'bwdcp_exclude_text',
			[
				'label' => esc_html__( 'Exclude Cat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html__( 'Type category ID only and separate with using comma (19, 16).', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcp_include_text',
			[
				'label' => esc_html__( 'Include Cat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html__( 'Type category ID only and separate with using comma (19, 16).', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdcp_the_cat_filter',
			[
				'label'             => __( 'Category Filter', 'bwd-elementor-addons' ),
				'type'              => Controls_Manager::SELECT,
				'options'           => [
					'all'        => __( 'All', 'bwd-elementor-addons' ),
					'top_label'        => __( 'Top Label', 'bwd-elementor-addons' ),
				],
				'default'           => 'all',
			]
		);
		$this->add_control(
			'bwdcp_the_order_by',
			[
				'label'             => __( 'Order By', 'bwd-elementor-addons' ),
				'type'              => Controls_Manager::SELECT,
				'options'           => [
					'name'        => __( 'Name', 'bwd-elementor-addons' ),
					'slug'        => __( 'Slug', 'bwd-elementor-addons' ),
					'id'          => __( 'ID', 'bwd-elementor-addons' ),
					'count'       => __( 'Taxonomy Count', 'bwd-elementor-addons' ),
					'description' => __( 'Description', 'bwd-elementor-addons' ),
				],
				'default'           => 'name',
			]
		);
		$this->add_responsive_control(
			'bwdcp_blog_order',
			[
				'label' => esc_html__( 'Order', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC' => esc_html__( 'Descending', 'bwd-elementor-addons' ),
					'ASC' => esc_html__( 'Ascending', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdcp-catproduct-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'catproduct-id', 'bwd-elementor-addons' ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdcp_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 10,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdcp_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdcp_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdcp_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdcp_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdcp_aupoplay_popover',
			[
				'label' => esc_html__( 'Carousel Controls', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdcp_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcp_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcp_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcp_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
						'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdcp_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 3000,
					]
				);

				$this->add_control(
					'bwdcp_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdcp_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 0,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdcp_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdcp_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdcp_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'bwd-elementor-addons' ),
						'text'  => esc_html__( 'Text', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdcp_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdcp_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdcp_nav_type' => 'icon',
						'bwdcp_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdcp_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdcp_nav_type' => 'icon',
						'bwdcp_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdcp_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdcp_nav_type' => 'text',
						'bwdcp_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdcp_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwd-elementor-addons' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdcp_nav_type' => 'text',
						'bwdcp_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdcp_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdcp_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
					'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdcp_dots_type',
				[
					'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'bwd-elementor-addons' ),
						'numbers'  => esc_html__( 'Numbers', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdcp_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdcp_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'bwd-elementor-addons' ),
						'bwdcp_dots1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
						'bwdcp_dots2'  => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
						'bwdcp_dots3'  => esc_html__( 'Style 3', 'bwd-elementor-addons' ),
						'bwdcp_dots4'  => esc_html__( 'Style 4', 'bwd-elementor-addons' ),
						'bwdcp_dots5'  => esc_html__( 'Style 5', 'bwd-elementor-addons' ),
						'bwdcp_dots6'  => esc_html__( 'Style 6', 'bwd-elementor-addons' ),
						'bwdcp_dots7'  => esc_html__( 'Style 7', 'bwd-elementor-addons' ),
						'bwdcp_dots8'  => esc_html__( 'Style 8', 'bwd-elementor-addons' ),
						'bwdcp_dots9'  => esc_html__( 'Style 9', 'bwd-elementor-addons' ),
						'bwdcp_dots10'  => esc_html__( 'Style 10', 'bwd-elementor-addons' ),
					],
					'condition' => [
						'bwdcp_dots_switcher' => 'yes',
						'bwdcp_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_content_style',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_nav_switcher' => 'yes'
				],
			]
		);
		$this->add_responsive_control(
			'bwdcp_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdcp_box_content_bg_color',
			[
				'label' => esc_html__( 'Content BG', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catacory-content' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcp_content_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catacory-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catacory-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_image_style',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_image' => 'yes'
				],
			]
		);
		$this->add_responsive_control(
			'bwdcp_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'creative-products' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-img img' => 'height: {{SIZE}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'bwdcp_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overlay', 'creative-products' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-img a:before, {{WRAPPER}} .bwdcp_catagory_image_overlay' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcp_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'creative-products'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_title_style',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_title' => 'yes'
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdcp_title_style_post'
		);
		$this->start_controls_tab(
			'bwdcp_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_title_typography',
				'selector' => '{{WRAPPER}} .bwdcp_catagory-title',
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-title' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-title' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcp_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcp_catagory-title:hover',
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-title:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-title:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdcp_titlee_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'bwdcp_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'bwdcp_title' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_review_style',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_review' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdcp_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdcp_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'bwdcp_review_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-star-rating .bwdcp-star-icons' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcp_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp-star-rating .bwdcp-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcp_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_responsive_control(
			'bwdcp_review_icon_hover_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 500,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-star-rating:hover .bwdcp-star-icons' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'bwdcp_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp-star-rating:hover .bwdcp-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_description_style',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_description' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdcp_description_style_post'
		);
		$this->start_controls_tab(
			'bwdcp_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_description_typography',
				'selector' => '{{WRAPPER}} .bwdcp_catagory-disce',
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-disce' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-disce' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcp_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcp_catagory-disce:hover',
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-disce:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcp_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-disce:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdcp_desc_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-disce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-disce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'bwdcp_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-disce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'bwdcp_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_button_style',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_button' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdcp_button_style_post'
		);
		$this->start_controls_tab(
			'bwdcp_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_button_typography',
				'selector' => '{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton',
			]
		);
		$this->add_control(
			'bwdcp_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcp_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcp_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton:hover',
			]
		);
		$this->add_control(
			'bwdcp_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcp_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bwdcp_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_catagory-bttn .bwdcp_Cbutton' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_carousel_box_style',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdcp_box_style_post'
		);
		$this->start_controls_tab(
			'bwdcp_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcp_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcp_catagory_6 .bwdcp_cat_n_bg:before, {{WRAPPER}} .bwdcp_cat_box_common, {{WRAPPER}} .bwdcp_box_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcp_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp_cat_box_common, {{WRAPPER}} .bwdcp_box_shadow',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp_cat_box_common, {{WRAPPER}} .bwdcp_border_type',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcp_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcp_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcp_catagory_7 .bwdcp_cat_h_bg:before, {{WRAPPER}} .bwdcp_cat_box_common:hover, {{WRAPPER}} .bwdcp_box_bg:hover, {{WRAPPER}} .bwdcp_box_hover_bg:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcp_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp_cat_box_common:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp_cat_box_common:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bwdcp_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_cat_box_common' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_cat_box_common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcp_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcp_cat_box_common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcp_catproduct_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_nav_switcher' => 'yes'
				],
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdcp_arrow_color',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdcp_arrow_background_color',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdcp_arrow_size',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdcp_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdcp_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev span, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next span',
					'condition' => [
						'bwdcp_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdcp_arrow_width',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdcp_arrow_height',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdcp_arrow_border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdcp_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdcp_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdcp_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdcp_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdcp_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdcp_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcp_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdcp_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdcp_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcp_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdcp_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

			//arrow-color
			$this->add_control(
				'bwdcp_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdcp_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdcp_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdcp_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover span, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover span',
					'condition' => [
						'bwdcp_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdcp_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdcp_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => 0,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => 0,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdcp_arrow_border_hover',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdcp_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdcp_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-prev:hover, {{WRAPPER}} .bwdcp-owl-nav button.bwdcp-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdcp_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdcp_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-prev, {{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdcp_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdcp_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcp_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdcp_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdcp_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcp_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdcp_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => Controls_Manager::SLIDER,
						'size_units' => [ 'px', '%' ],
						'range' => [
							'px' => [
								'min' => -1000,
								'max' => 1000,
								'step' => 1,
							],
							'%' => [
								'min' => -1000,
								'max' => 1000,
							],
						],
						'selectors' => [
							'{{WRAPPER}} .bwdcp-owl.bwdcp-owl-carousel:hover .bwdcp-owl-nav button.bwdcp-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'bwdcp_catproduct_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcp_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdcp_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'bwdcp_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdcp_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => Controls_Manager::SLIDER,
					'size_units' => [ 'px', '%' ],
					'range' => [
						'px' => [
							'min' => -1000,
							'max' => 1000,
							'step' => 1,
						],
						'%' => [
							'min' => -1000,
							'max' => 1000,
						],
					],
					'selectors' => [
						'{{WRAPPER}} .bwdcp-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdcp_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdcp_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:not(:last-child) ' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdcp_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots' => 'text-align: {{VALUE}}',
				],
				'toggle' => true,
				'default' => 'center',
			]
		);

		//norlam-hover-tab
		$this->start_controls_tabs(
			'style_tabs_dots',
			[
				'separator' => 'before',
			]
		);

		//highlight-normal-style------------------------------------------
		$this->start_controls_tab(
			'style_normal_tab_dots',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdcp_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcp_dots_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot span',
				'condition' => [
					'bwdcp_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcp_dots_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcp_dots_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_dots_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcp_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcp_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot',
			]
		);


		$this->end_controls_tab();



		//highlight-active-style------------------------------------------
		$this->start_controls_tab(
			'style_active_tab_dots',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdcp_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcp_dots_background_color_active',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active span',
				'condition' => [
					'bwdcp_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcp_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcp_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_dots_border_active',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcp_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcp_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot.active',
			]
		);

		$this->end_controls_tab();



		//highlight-hover-style------------------------------------------
		$this->start_controls_tab(
			'style_hover_tab_dots',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);

		//dots-color
		$this->add_control(
			'bwdcp_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcp_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcp_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcp_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover span',
				'condition' => [
					'bwdcp_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcp_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcp_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 1,
					],
					'%' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcp_dots_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcp_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcp_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcp-owl-dots .bwdcp-owl-dot:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();

	}

	protected function render(){
		$settings = $this->get_settings_for_display();

		// for-owl-carousel-start
		$bwdcp_slide_margin = $settings['bwdcp_slide_margin'];
		$bwdcp_slide_mobile_view = $settings['bwdcp_slide_mobile_view'];
		$bwdcp_slide_tablet_view = $settings['bwdcp_slide_tablet_view'];
		$bwdcp_slide_desktop_view = $settings['bwdcp_slide_desktop_view'];
		$bwdcp_infinite_autoplay_switcher = $settings['bwdcp_infinite_autoplay_switcher'];
		$bwdcp_infinite_loop_switcher = $settings['bwdcp_infinite_loop_switcher'];
		$bwdcp_HoverPause_switcher = $settings['bwdcp_HoverPause_switcher'];
		$bwdcp_centermode_switcher = $settings['bwdcp_centermode_switcher'];
		$bwdcp_autoplay_timeout = $settings['bwdcp_autoplay_timeout'];
		$bwdcp_autoplay_speed = $settings['bwdcp_autoplay_speed'];
		$bwdcp_stace_padding = $settings['bwdcp_stace_padding'];
		//nav--------------------------------------------------
		$bwdcp_nav_switcher = $settings['bwdcp_nav_switcher'];
		$bwdcp_nav_type = $settings['bwdcp_nav_type'];

		if( $bwdcp_nav_switcher == 'yes' ) {
			if( $bwdcp_nav_type == 'icon' ) {
				$prev = $settings['bwdcp_nav_prev_arrow']['value'];
				$next = $settings['bwdcp_nav_next_arrow']['value'];
			} else if( $bwdcp_nav_type == 'text' ) {
				$prev = $settings['bwdcp_nav_prev_text'];
				$next = $settings['bwdcp_nav_next_text'];
			} 
		}
		$bwdcp_dots_switcher = $settings['bwdcp_dots_switcher'];
		$bwdcp_dots_type = $settings['bwdcp_dots_type'];
		// for-owl-carousel-end

		// Functions start from here to Ferdaussk 
		$bwdcp_cat_image = $settings['bwdcp_image'];
		$bwdcp_cat_image_link = $settings['bwdcp_image_link'];
		$bwdcp_cat_title = $settings['bwdcp_title'];
		$bwdcp_cat_description = $settings['bwdcp_description'];
		$bwdcp_cat_button = $settings['bwdcp_button'];
		$bwdcp_button_text = $settings['bwdcp_button_text'];

		$bwdcp_the_cat_filter = $settings['bwdcp_the_cat_filter'];
		$bwdcp_orderby = $settings['bwdcp_the_order_by'];
		$bwdcp_order_only = $settings['bwdcp_blog_order'];
		$bwdcp_empty_cat = $settings['bwdcp_empty_cat'];

		$bwdcp_exclude_text = $settings['bwdcp_exclude_text'];
		$bwdcp_include_text = $settings['bwdcp_include_text'];

        if ($settings["bwdcp_categories"] == "woo") {
            $product_args = [
                "taxonomy" => "product_cat",
                "orderby" => $bwdcp_orderby,
                "hide_empty" => ( 'yes' === $bwdcp_empty_cat ) ? false : true,
                "order" => $bwdcp_order_only,
				'exclude' => $bwdcp_exclude_text,
				'include' => $bwdcp_include_text,
            ];
            $product_parent_args = [
                "taxonomy" => "product_cat",
                "orderby" => $bwdcp_orderby,
                "hide_empty" => ( 'yes' === $bwdcp_empty_cat ) ? false : true,
                "order" => $bwdcp_order_only,
				'exclude' => $bwdcp_exclude_text,
				'include' => $bwdcp_include_text,
				"parent" => 0,
            ];
			$product_cat_args = ( 'top_label' === $bwdcp_the_cat_filter ) ? $product_parent_args : $product_args;
            $categories = get_terms($product_cat_args);
        } else {
            $product_args = get_categories([
                "orderby" => $bwdcp_orderby,
                "hide_empty" => ( 'yes' === $bwdcp_empty_cat ) ? false : true,
                "order" => $bwdcp_order_only,
				'exclude' => $bwdcp_exclude_text,
				'include' => $bwdcp_include_text,
            ]);
            $product_parent_args = get_categories([
                "orderby" => $bwdcp_orderby,
                "hide_empty" => ( 'yes' === $bwdcp_empty_cat ) ? false : true,
                "order" => $bwdcp_order_only,
				'exclude' => $bwdcp_exclude_text,
				'include' => $bwdcp_include_text,
				"parent" => 0,
            ]);
			$categories = ( 'top_label' === $bwdcp_the_cat_filter ) ? $product_parent_args : $product_args;
        }

		// Style start
		$bwdcp_cont_alignment = $settings['bwdcp_content_alignment'];
		if('left' === $bwdcp_cont_alignment){
			$bwdcp_cont_align = 'bwdcp_taxo_align_left bwdcp_taxo_align_left_j';
		} elseif('center' === $bwdcp_cont_alignment){
			$bwdcp_cont_align = 'bwdcp_taxo_align_center bwdcp_taxo_align_center_j';
		} elseif('right' === $bwdcp_cont_alignment){
			$bwdcp_cont_align = 'bwdcp_taxo_align_right bwdcp_taxo_align_right_j';
		} else{ $bwdcp_cont_align = ' '; }
		// Style end
		// Functions end from here to Ferdaussk 

		$bwdcp_style_selection = $settings['bwdcp_select_style_selection'];
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
		if($bwdcp_style_selection == 'style1' || $bwdcp_style_selection == 'style2'){
			include( __DIR__ . '/bwdeb-templates/'.$bwdcp_style_selection.'.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
		else: ?><div class="text-center"><?php echo '<b>'.esc_html__('Product Category', 'bwd-elementor-addons').'</b>'.esc_html__(' requires WooCommerce to be activated.', 'bwd-elementor-addons'); ?></div><?php endif;
	}
}
