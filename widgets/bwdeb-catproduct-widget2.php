<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_thecpgcatproduct_widgets extends Widget_Base {

	public function get_name() {
		return esc_html__( 'thecpg-catproduct', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Product Category Grid', 'bwd-elementor-addons' );
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
			'thecpg_content_section',
			[
				'label' => esc_html__( 'All Style Here', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		//Select Style
		$this->add_control(
			'thecpg_select_style_selection',
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
				'description' => 'See <a href="https://bestwpdeveloper.com/woocommerce-product-category-grid" target="_blank"><b>DEMO</b></a>. Get <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>PRO...</b></a>.',
			]
		);
		$this->add_responsive_control(
			'thecpg_box_column',
			[
				'label' => esc_html__( 'Choose Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'column1' => esc_html__( 'One Column', 'bwd-elementor-addons' ),
					'column2' => esc_html__( 'Two Column', 'bwd-elementor-addons' ),
					'column3' => esc_html__( 'Three Column', 'bwd-elementor-addons' ),
					'column4'  => esc_html__( 'Four Column', 'bwd-elementor-addons' ),
                    'column5' => esc_html__( 'Five Column', 'bwd-elementor-addons' ),
                    'column6' => esc_html__( 'Six Column', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'thecpg-grid%s-'
			]
		);
		$this->add_responsive_control(
			'thecpg_col_alignment',
			[
				'label' => esc_html__( 'Column Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				'default' => 'center',
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
		$this->add_responsive_control(
			'thecpg_products_column_gap',
			[
				'label' => esc_html__( 'Column Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 300,
						'step' => 1,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .row .thecpg_the_gap_col' => 'padding-left: {{SIZE}}{{UNIT}}; padding-right: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'thecpg_blog_row_gap',
			[
				'label' => esc_html__( 'Row Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .row .column_number' => 'margin-bottom: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_settings',
			[
				'label' => esc_html__( 'Category Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'thecpg_image',
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
			'thecpg_image_link',
			[
				'label' => esc_html__( 'Hide Image Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'condition' => [
					'thecpg_image' => 'yes',
				],
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'thecpg_title',
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
			'thecpg_description',
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
			'thecpg_button',
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
			'thecpg_button_text',
			[
				'label' => esc_html__( 'Value', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'SHOP NOW', 'bwd-elementor-addons' ),
				'condition' => [
					'thecpg_button' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		// 
		$this->add_control(
			'thecpg_review',
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
			'thecpg_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'thecpg_review' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_query_content_section',
			[
				'label' => esc_html__( 'Category Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			"thecpg_categories_per_page", 
			[
            "label" => esc_html__("Per Page", "cat-product-grid"),
            "type" => Controls_Manager::NUMBER,
            "default" => 4,
        ]);
		$this->add_control(
			'thecpg_empty_cat',
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
			'thecpg_exclude_text',
			[
				'label' => esc_html__( 'Exclude Cat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html__( 'Type category ID only and separate with using comma (19, 16).', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'thecpg_include_text',
			[
				'label' => esc_html__( 'Include Cat', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'description' => esc_html__( 'Type category ID only and separate with using comma (19, 16).', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'thecpg_the_cat_filter',
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
			'thecpg_the_order_by',
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
			'thecpg_blog_order',
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
			'thecpg_content_style',
			[
				'label' => esc_html__( 'Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'thecpg_content_alignment',
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
			'thecpg_box_content_bg_color',
			[
				'label' => esc_html__( 'Content BG', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catacory-content, {{WRAPPER}} .thecpg_catagory_image_overlay_one' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thecpg_content_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catacory-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catacory-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_image_style',
			[
				'label' => esc_html__( 'Image', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_image' => 'yes'
				],
			]
		);
		$this->add_responsive_control(
			'thecpg_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-img img' => 'height: {{SIZE}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'thecpg_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overlay', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-img a:before, {{WRAPPER}} .thecpg_catagory_image_overlay' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'thecpg_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-img img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_title_style',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_title' => 'yes'
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'thecpg_title_style_post'
		);
		$this->start_controls_tab(
			'thecpg_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_title_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-title',
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title' => 'color: {{VALUE}} !important',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_title_hover_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-title:hover',
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-title:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_title' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thecpg_titlee_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_title' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'thecpg_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_title' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_review_style',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_review' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'thecpg_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'thecpg_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Star', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_responsive_control(
			'thecpg_review_icon_size',
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
					'{{WRAPPER}} .thecpg-star-rating .thecpg-star-icons' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thecpg_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg-star-rating .thecpg-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_responsive_control(
			'thecpg_review_icon_hover_size',
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
					'{{WRAPPER}} .thecpg-star-rating:hover .thecpg-star-icons' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_control(
			'thecpg_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg-star-rating:hover .thecpg-star-icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_description_style',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_description' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'thecpg_description_style_post'
		);
		$this->start_controls_tab(
			'thecpg_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_description_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-disce',
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_description_hover_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-disce:hover',
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce:hover' => 'color: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'thecpg_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-disce:hover' => 'background: {{VALUE}}',
				],
				'condition' => [
					'thecpg_description' => 'yes',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'thecpg_desc_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-disce' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-disce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_description' => 'yes',
				],
            ]
        );
		$this->add_responsive_control(
            'thecpg_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-disce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
				'condition' => [
					'thecpg_description' => 'yes',
				],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_button_style',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'thecpg_button' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'thecpg_button_style_post'
		);
		$this->start_controls_tab(
			'thecpg_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_button_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton',
			]
		);
		$this->add_control(
			'thecpg_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thecpg_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'thecpg_button_hover_typography',
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover',
			]
		);
		$this->add_control(
			'thecpg_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'thecpg_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'thecpg_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}} !important;',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_catagory-bttn .thecpg_Cbutton' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'thecpg_catproduct_carousel_box_style',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for box
		$this->start_controls_tabs(
			'thecpg_box_style_post'
		);
		$this->start_controls_tab(
			'thecpg_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thecpg_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thecpg_catagory_6 .thecpg_cat_n_bg:before, {{WRAPPER}} .thecpg_cat_box_common, {{WRAPPER}} .thecpg_box_bg',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thecpg_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common, {{WRAPPER}} .thecpg_box_shadow',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common, {{WRAPPER}} .thecpg_border_type',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'thecpg_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'thecpg_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .thecpg_catagory_7 .thecpg_cat_h_bg:before, {{WRAPPER}} .thecpg_cat_box_common:hover, {{WRAPPER}} .thecpg_box_bg:hover, {{WRAPPER}} .thecpg_box_hover_bg:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'thecpg_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'thecpg_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .thecpg_cat_box_common:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'thecpg_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
				'separator' => 'before',
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_cat_box_common' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_cat_box_common' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'thecpg_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .thecpg_cat_box_common' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}

	protected function render(){
		$settings = $this->get_settings_for_display();
		$thecpg_cat_image = $settings['thecpg_image'];
		$thecpg_cat_image_link = $settings['thecpg_image_link'];
		$thecpg_cat_title = $settings['thecpg_title'];
		$thecpg_cat_description = $settings['thecpg_description'];
		$thecpg_cat_button = $settings['thecpg_button'];
		$thecpg_button_text = $settings['thecpg_button_text'];

		$thecpg_the_cat_filter = $settings['thecpg_the_cat_filter'];
		$thecpg_orderby = $settings['thecpg_the_order_by'];
		$thecpg_order_only = $settings['thecpg_blog_order'];
		$thecpg_empty_cat = $settings['thecpg_empty_cat'];

		$thecpg_categories_per_page = $settings['thecpg_categories_per_page'];
		$thecpg_exclude_text = $settings['thecpg_exclude_text'];
		$thecpg_include_text = $settings['thecpg_include_text'];

            $product_args = [
                "taxonomy" => "product_cat",
				'number' => $thecpg_categories_per_page,
                "orderby" => $thecpg_orderby,
                "hide_empty" => ( 'yes' === $thecpg_empty_cat ) ? false : true,
                "order" => $thecpg_order_only,
				'exclude' => $thecpg_exclude_text,
				'include' => $thecpg_include_text,
            ];
            $product_parent_args = [
                "taxonomy" => "product_cat",
				'number' => $thecpg_categories_per_page,
                "orderby" => $thecpg_orderby,
                "hide_empty" => ( 'yes' === $thecpg_empty_cat ) ? false : true,
                "order" => $thecpg_order_only,
				'exclude' => $thecpg_exclude_text,
				'include' => $thecpg_include_text,
				"parent" => 0,
            ];
			$product_cat_args = ( 'top_label' === $thecpg_the_cat_filter ) ? $product_parent_args : $product_args;
            $categories = get_terms($product_cat_args);

		$thecpg_cont_alignment = $settings['thecpg_content_alignment'];
		if('left' === $thecpg_cont_alignment){
			$thecpg_cont_align = 'thecpg_taxo_align_left thecpg_taxo_align_left_j';
		} elseif('center' === $thecpg_cont_alignment){
			$thecpg_cont_align = 'thecpg_taxo_align_center thecpg_taxo_align_center_j';
		} elseif('right' === $thecpg_cont_alignment){
			$thecpg_cont_align = 'thecpg_taxo_align_right thecpg_taxo_align_right_j';
		} else{ $thecpg_cont_align = ' '; }

		$thecpg_col_alignment = $settings['thecpg_col_alignment'];
		if('left' === $thecpg_col_alignment){
			$thecpg_col_align = 'justify-content-start';
		} elseif('center' === $thecpg_col_alignment){
			$thecpg_col_align = 'justify-content-center';
		} elseif('right' === $thecpg_col_alignment){
			$thecpg_col_align = 'justify-content-end';
		} else{ $thecpg_col_align = ' '; }

		$thecpg_style_selection = $settings['thecpg_select_style_selection'];
		if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ):
		if($thecpg_style_selection == 'style1' || $thecpg_style_selection == 'style2'){
			include( __DIR__ . '/wpcattemplates/'.$thecpg_style_selection.'.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
		else: ?><div class="text-center"><?php echo '<b>'.esc_html__('Product Category', 'bwd-elementor-addons').'</b>'.esc_html__(' requires WooCommerce to be activated.', 'bwd-elementor-addons'); ?></div><?php endif;
	}
}
