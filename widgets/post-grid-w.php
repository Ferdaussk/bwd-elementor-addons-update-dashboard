<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDBPBlog extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameBlog', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Post Grid', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-posts-grid';
	}

	public function get_categories() {
		return [ 'bwdeb_post_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdbp_blog_content_layout_section',
			[
				'label' => esc_html__( 'Post Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_style_selection',
			[
				'label' => esc_html__( 'Post Styles', 'bwd-elementor-addons' ),
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
					'style19' => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a href="https://bestwpdeveloper.com/post-grid-elementor-addon" target="_blank"><b>DEMO</b></a>. Get <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>PRO...</b></a>.',
			]
		);
		$this->add_control(
			'bwdbp_the_blog_type',
			[
				'label' => esc_html__( 'Blog Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'post',
				'options' => [
					'post' => esc_html__( 'Post', 'bwd-elementor-addons' ),
					'page' => esc_html__( 'Page', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_column_layout',
			[
				'label' => esc_html__( 'Choose Column', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'column1' => esc_html__( '1 Column', 'bwd-elementor-addons' ),
					'column2' => esc_html__( '2 Column', 'bwd-elementor-addons' ),
					'column3'  => esc_html__( '3 Column', 'bwd-elementor-addons' ),
                    'column4' => esc_html__( '4 Column', 'bwd-elementor-addons' ),
                    'column5' => esc_html__( '5 Column', 'bwd-elementor-addons' ),
                    'column6' => esc_html__( '6 Column', 'bwd-elementor-addons' ),
				],
				'prefix_class' => 'bwdbp-grid%s-'
			]
		);
		$this->add_control(
			'bwdbp_the_section_width',
			[
				'label' => esc_html__( 'Content Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'full_width',
				'options' => [
					'boxed' => esc_html__( 'Boxed', 'bwd-elementor-addons' ),
					'full_width' => esc_html__( 'Full Width', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_col_alignment',
			[
				'label' => esc_html__( 'Column Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
			'bwdbp_box_column_gap',
			[
				'label' => esc_html__( 'Columns Gap', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => esc_html__( 'Default', 'bwdib-icon-box' ),
					'gx-0' => esc_html__( 'No Gap', 'bwdib-icon-box' ),
					'gx-1' => esc_html__( 'Narrow', 'bwdib-icon-box' ),
					'gx-2' => esc_html__( 'Extended', 'bwdib-icon-box' ),
					'gx-3' => esc_html__( 'Wide', 'bwdib-icon-box' ),
					'gx-4' => esc_html__( 'Wider', 'bwdib-icon-box' ),
					'gx-5' => esc_html__( 'Extra Wider', 'bwdib-icon-box' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_row_gap',
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
					'{{WRAPPER}} .row' => 'row-gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_responsive_control(
			'bwdbp_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
				// 'default' => 'center',
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
			'bwdbp_title_show_switcher',
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
			'bwdbp_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'div',
				'options' => [
					'div'  => esc_html__( 'Div', 'bwdib-icon-box' ),
					'h1' => esc_html__( 'H1', 'bwdib-icon-box' ),
					'h2' => esc_html__( 'H2', 'bwdib-icon-box' ),
					'h3' => esc_html__( 'H3', 'bwdib-icon-box' ),
					'h4' => esc_html__( 'H4', 'bwdib-icon-box' ),
					'h5' => esc_html__( 'H5', 'bwdib-icon-box' ),
					'h6' => esc_html__( 'H6', 'bwdib-icon-box' ),
					'p' => esc_html__( 'p', 'bwdib-icon-box' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_description_show_switcher',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdbp_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdbp_taxo_icon',
			[
				'label' => esc_html__( 'All Taxo Icons', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'separator' => 'before',
				'default' => 'show',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'show' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_date_show_switcher',
			[
				'label' => esc_html__( 'Publish Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'separator' => 'before',
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdbp_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bwdbp_author_show_switcher',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'bwdbp_author_indicator',
			[
				'label' => esc_html__( 'Author Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'gravatar' => esc_html__( 'Gravatar', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Author Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_gravader_height',
			[
				'label' => esc_html__( 'Gravader Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbp_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
					'bwdbp_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bwdbp_author_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
					'bwdbp_author_indicator' => 'icon',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_author_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdbp_author-img i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbp_author_show_switcher' => 'yes',
					'bwdbp_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_comments_show_switcher',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'separator' => 'before',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blogs_button',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_button_show_switcher',
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
			'bwdbp_button_types',
			[
				'label' => esc_html__( 'Button Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text_icon',
				'options' => [
					'text_icon' => esc_html__( 'Text Icon', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_title',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__('Read More', 'bwd-elementor-addons'),
				'label_block' => true,
				'condition' => [
					'bwdbp_button_show_switcher' => 'yes',
				],
				'condition' => [
					'bwdbp_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_button_icon_align',
			[
				'label' => esc_html__( 'Icon Align', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'right',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'left' => esc_html__( 'Left', 'bwd-elementor-addons' ),
					'right' => esc_html__( 'Right', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdbp_button_types' => 'text_icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_button_indicator_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-arrow-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbp_button_types' => 'text_icon',
					'bwdbp_button_icon_align' => ['left', 'right'],
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-caret-right',
					'library' => 'solid',
				],
				'condition' => [
					'bwdbp_button_types' => 'icon',
				],
			]
		);
		$this->add_control(
			'bwdbp_button_open_switcher',
			[
				'label' => esc_html__( 'Open in new window', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Yes', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'No', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
				'condition' => [
					'bwdbp_button_show_switcher' => 'yes',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$bwdbp_array = get_users();
		foreach ($bwdbp_array as $bwdbp_author){
			$bwdbp_id = $bwdbp_author->ID;
			$bwdbp_name = $bwdbp_author->display_name;
			$bwdbp_get_array[$bwdbp_id] = $bwdbp_name;
		}
		$this->add_control(
			'bwdbp_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $bwdbp_get_array,
			]
		);
		$this->add_control(
			'bwdbp_the_all_date',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'd' => esc_html__( 'Today', 'bwd-elementor-addons' ),
					'm' => esc_html__( 'Current Month', 'bwd-elementor-addons' ),
					'coustom' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_coustom_month',
			[
				'label' => esc_html__( 'Select Month', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'multiple' => true,
				'default' => '0',
				'options' => [
					'0' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'1' => esc_html__( 'Jan', 'bwd-elementor-addons' ),
					'2' => esc_html__( 'Feb', 'bwd-elementor-addons' ),
					'3' => esc_html__( 'Mar', 'bwd-elementor-addons' ),
					'4' => esc_html__( 'Apr', 'bwd-elementor-addons' ),
					'5' => esc_html__( 'May', 'bwd-elementor-addons' ),
					'6' => esc_html__( 'Jun', 'bwd-elementor-addons' ),
					'7' => esc_html__( 'Jul', 'bwd-elementor-addons' ),
					'8' => esc_html__( 'Aug', 'bwd-elementor-addons' ),
					'9' => esc_html__( 'Sep', 'bwd-elementor-addons' ),
					'10' => esc_html__( 'Oct', 'bwd-elementor-addons' ),
					'11' => esc_html__( 'Nov', 'bwd-elementor-addons' ),
					'12' => esc_html__( 'Dec', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdbp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdbp_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdbp_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'author' => esc_html__( 'Author', 'bwd-elementor-addons' ),
					'title' => esc_html__( 'Title', 'bwd-elementor-addons' ),
					'id' => esc_html__( 'ID', 'bwd-elementor-addons' ),
					'date' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_order',
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
		$this->add_control(
			'bwdbp_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bwdbp_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdbp_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_multiple_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'bwd-elementor-addons' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdbp_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$bwdbp_idObj = get_category_by_slug('category-slug');
		$bwdbp_order_options = array($bwdbp_idObj => 'All Categories');
		$bwdbp_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($bwdbp_categories as $category):
			$bwdbp_catids = $category->slug;
			$bwdbp_catname = $category->name;
			$bwdbp_order_options[$bwdbp_catids] = $bwdbp_catname;
		endforeach;
		$this->add_control(
			'bwdbp_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $bwdbp_order_options,
			]
		);
		$this->add_control(
			'bwdbp_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$bwdbp_idObj = get_tag('tags-slug');
		$bwdbp_order_optionst = array($bwdbp_idObj => 'All Tags');
		$bwdbp_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($bwdbp_ta as $tag):
			$bwdbp_tagids = $tag->slug;
			$bwdbp_tagname = $tag->name;
			$bwdbp_order_optionst[$bwdbp_tagids] = $bwdbp_tagname;
		endforeach;
		$this->add_control(
			'bwdbp_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => $bwdbp_idObj,
				'options' => $bwdbp_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_content_pagination_section',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdbp_the_pagination_type',
			[
				'label' => esc_html__( 'Pagination', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'number-and-text',
				'options' => [
					'none' => esc_html__( 'None', 'bwd-elementor-addons' ),
					'number-and-text' => esc_html__( 'Number and Text', 'bwd-elementor-addons' ),
					'number' => esc_html__( 'Number', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_pagination_items_align',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::CHOOSE,
				'default' => 'filter_center',
				'options' => [
					'filter_left' => [
						'title' => esc_html__( 'Left', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-left',
					],
					'filter_center' => [
						'title' => esc_html__( 'Center', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'bwd-elementor-addons' ),
						'icon' => 'eicon-text-align-right',
					],
				],
				'condition' => [
					'bwdbp_the_pagination_type' => ['number-and-text', 'number'],
				],
				'toggle' => true,
			]
		);
		$this->add_control(
			'bwdbp_blog_next_format',
			[
				'label' => esc_html__( 'Next Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Next »', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_prev_format',
			[
				'label' => esc_html__( 'Prev Text', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '« Prev', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdbp_the_pagination_type' => 'number-and-text',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbp_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdbp_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_title_typography',
				'selector' => '{{WRAPPER}} .bwdbp_title',
			]
		);
		$this->add_control(
			'bwdbp_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_title',
			]
		);
		$this->add_control(
			'bwdbp_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbp_blog_title_divider',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbp_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_description_typography',
				'selector' => '{{WRAPPER}} .bwdbp_desce',
			]
		);
		$this->add_control(
			'bwdbp_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_desce',
			]
		);
		$this->add_control(
			'bwdbp_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_button_style_section',
			[
				'label' => esc_html__( 'Button Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbp_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdbp_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_button_typography',
				'selector' => '{{WRAPPER}} .bwdbp_button, {{WRAPPER}} .bwdbp_button a',
			]
		);
		$this->add_control(
			'bwdbp_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button, {{WRAPPER}} .bwdbp_button a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_bttn .bwdbp_button, {{WRAPPER}} .bwdbp_blogPost_4 .bwdbp_blog_meta',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_button, {{WRAPPER}} .bwdbp_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'bwdbp_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_button:hover a',
			]
		);
		$this->add_control(
			'bwdbp_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_bttn .bwdbp_button:hover, {{WRAPPER}} .bwdbp_blogPost_4 .bwdbp_blog_meta:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_button:hover, {{WRAPPER}} .bwdbp_blog_bttn:hover, {{WRAPPER}} .bwdbp_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_post_image_height_size',
			[
				'label' => esc_html__( 'Thumbnail Height', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd_blog_area .bwd_blog_img img, {{WRAPPER}} .bwdbp_blog_image img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_the_post_image_width_size',
			[
				'label' => esc_html__( 'Thumbnail Width', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwd_blog_area .bwd_blog_img img, {{WRAPPER}} .bwdbp_blog_image img' => 'width: {{SIZE}}%;',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_image_overly_b::before, {{WRAPPER}} .bwdbp_image_overly_a::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon Overly', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_overlay_icon .bwdbp_icons' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdbp_style_selection' => ['style5', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_image img, {{WRAPPER}} .bwdbp_blog_image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_taxonomies_style_section',
			[
				'label' => esc_html__( 'Taxonomy And Others', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdbp_blog_author_options',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_user .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_author-img, {{WRAPPER}} .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_user .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_user::after, {{WRAPPER}} .bwdbp_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'bwdbp_blog_author_image_height',
			[
				'label' => esc_html__( 'Admin Image Size', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdbp_author img, {{WRAPPER}} .bwdbp_author-img img' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdbp_style_selection' => 'style1',
				]
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_user' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_author',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_date_options',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_date .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_date .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_date::before, {{WRAPPER}} .bwdbp_blogPost_17 .bwdbp_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_date',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_comment_options',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_comment .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_comment .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_comment' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_comment',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_tags_options',
			[
				'label' => esc_html__( 'Tags', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_tag .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_tag .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_tag::before, {{WRAPPER}} .bwdbp_blog_tag::after' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bwdbp_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_tags',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_control(
			'bwdbp_blog_categories_options',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
				// 'separator' => 'before',
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdbp_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdbp_category li, {{WRAPPER}} .bwdbp_category li a, {{WRAPPER}} .bwdbp_category .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_category li, {{WRAPPER}} .bwdbp_category li a, {{WRAPPER}} .bwdbp_category .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_category li, {{WRAPPER}} .bwdbp_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_category li:hover, {{WRAPPER}} .bwdbp_category:hover li a, {{WRAPPER}} .bwdbp_category:hover .bwdbp_icons',
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box .bwdbp_category li:hover, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li a, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li .bwdbp_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_box .bwdbp_category li:hover, {{WRAPPER}} .bwdbp_blog_box .bwdbp_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_category li' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdbp_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_category li' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_category li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->add_control(
			'bwdbp_blog_taxonomy_divider_categories',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$this->add_responsive_control(
			'bwdbp_blog_taxo_gap',
			[
				'label' => esc_html__( 'Taxo Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'separator' => 'after',
				'selectors' => [
					'{{WRAPPER}} .bwdbp_blog_meta' => 'gap: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .bwdbp-btm-gap' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdbp_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdbp_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_n_bg_b:before, {{WRAPPER}} .bwdbp_n_bg, {{WRAPPER}} .bwdbp_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbp_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:before, {{WRAPPER}} .bwdbp_g_bg, {{WRAPPER}} .bwdbp_box_style_cmn, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbp_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:before, {{WRAPPER}} .bwdbp_box_sha, {{WRAPPER}} .bwdbp_box_style_cmn',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_box',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_box_margin_cmn' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_blog_bottom_part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_box_padding',
            [
                'label' => esc_html__('Box Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_box_padding_cmn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdbp_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_n_bg_b:hover:before, {{WRAPPER}} .bwdbp_n_bg:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdbp_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:hover:before, {{WRAPPER}} .bwdbp_g_bg:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover, {{WRAPPER}} .bwdbp_blog_box:hover .bwdbp_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdbp_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbp_g_bg_b:hover:before, {{WRAPPER}} .bwdbp_box_sha:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdbp_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdbp_blog_box:hover',
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_box_radi:hover, {{WRAPPER}} .bwdbp_box_style_cmn:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdbp_blog_pagination_style_section',
			[
				'label' => esc_html__( 'Pagination Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_button_box_pagi_margin_top',
			[
				'label' => esc_html__( 'Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%', 'rem' ],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
					'rem' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);
		// Hover control start for pagination
		$this->start_controls_tabs(
			'bwdbp_blog_pagination_style_post'
		);
		$this->start_controls_tab(
			'bwdbp_blog_pagination_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_pagination_typography',
				'selector' => '{{WRAPPER}} .bwdbp_pagination_item a',
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item a' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdbp_blog_pagination_hover_tab',
			[
				'label' => esc_html__( 'Active', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdbp_blog_pagination_hover_typography',
				'selector' => '{{WRAPPER}} .bwdbp_pagination_item span, {{WRAPPER}} .bwdbp_pagination_item a:hover',
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_hover_color',
			[
				'label' => esc_html__( 'Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item span, {{WRAPPER}} .bwdbp_pagination_item a:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdbp_blog_pagination_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdbp_pagination_item span, {{WRAPPER}} .bwdbp_pagination_item a:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
			'bwdbp_blog_button_box_width',
			[
				'label' => esc_html__( 'Box Width', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
			'bwdbp_blog_button_box_height',
			[
				'label' => esc_html__( 'Box Height', 'bwd-elementor-addons' ),
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
					'{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->add_responsive_control(
            'bwdbp_blog_the_pagination_page',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
									'{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdbp_blog_the_pagination_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdbp_pagination_item a, {{WRAPPER}} .bwdbp_pagination_item span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bwdbp_title_tags = $settings['bwdbp_title_tags'];
		$bwdbp_styles = $settings['bwdbp_style_selection'];
		$bwdbp_post_per_page = $settings['bwdbp_the_post_per_page'];
		$bwdbp_post_description_words = $settings['bwdbp_the_post_description_words'];
		$bwdbp_blog_word_trim_indi = $settings['bwdbp_blog_word_trim_indi'];
		$bwdbp_blog_date_format = $settings['bwdbp_blog_date_format'];

		$bwdbp_the_section_width = $settings['bwdbp_the_section_width'];
		if('boxed' === $bwdbp_the_section_width){
			$bwdbp_the_section = 'container';
		} elseif('full_width' === $bwdbp_the_section_width){
			$bwdbp_the_section = 'container-fluid';
		}

		$bwdbp_author_indicator = $settings['bwdbp_author_indicator'];
		$bwdbp_button_icon_align = $settings['bwdbp_button_icon_align'];
		// Button Icon only bwdbp_blog_button_icon
		$bwdbp_taxo_icon = $settings['bwdbp_taxo_icon'];
		$bwdbp_button_types = $settings['bwdbp_button_types'];

		if('left' === $settings['bwdbp_col_alignment']){
			$bwdbp_align = 'justify-content-start';
		} elseif('center' === $settings['bwdbp_col_alignment']){
			$bwdbp_align = 'justify-content-center';
		} elseif('right' === $settings['bwdbp_col_alignment']){
			$bwdbp_align = 'justify-content-end';
		} else{ $bwdbp_align = ' '; }

		$bwdbp_box_column_gap = $settings['bwdbp_box_column_gap'];

		$bwdbp_cont_align = $settings['bwdbp_content_alignment'];
		if('left' === $bwdbp_cont_align){
			$bwdbp_cont_align = 'bwdbp_taxo_align_left';
			$bwdbp_cont_align_j = 'bwdbp_taxo_align_left_j';
		} elseif('center' === $bwdbp_cont_align){
			$bwdbp_cont_align = 'bwdbp_taxo_align_center';
			$bwdbp_cont_align_j = 'bwdbp_taxo_align_center_j';
		} elseif('right' === $bwdbp_cont_align){
			$bwdbp_cont_align = 'bwdbp_taxo_align_right';
			$bwdbp_cont_align_j = 'bwdbp_taxo_align_right_j';
		} else{ $bwdbp_cont_align_j = ' '; $bwdbp_cont_align = ' '; }

		$bwdbp_title_swtcher = $settings['bwdbp_title_show_switcher'];
		$bwdbp_description_swtcher = $settings['bwdbp_description_show_switcher'];
		$bwdbp_date_swtcher = $settings['bwdbp_date_show_switcher'];
		$bwdbp_author_swtcher = $settings['bwdbp_author_show_switcher'];
		$bwdbp_comments_swtcher = $settings['bwdbp_comments_show_switcher'];
		$bwdbp_categories_swtcher = $settings['bwdbp_categories_show_switcher'];
		$bwdbp_tags_swtcher = $settings['bwdbp_tags_show_switcher'];
		$bwdbp_tags_filter = $settings['bwdbp_the_tag_filter'];
		$bwdbp_cat_show_status = $settings['bwdbp_the_cat_show_status'];

		$bwdbp_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bwdbp_categorys_dataa = $settings['bwdbp_the_cat_columnsdd'];
		$bwdbp_the_blog_type = $settings['bwdbp_the_blog_type'];
		$bwdbp_blog_order = $settings['bwdbp_blog_order'];
		$bwdbp_author = $settings['bwdbp_the_all_author'];
		$bwdbp_order_by = $settings['bwdbp_the_order_by'];
		
		$bwdbp_the_all_date = $settings['bwdbp_the_all_date'];
		if('d' === $bwdbp_the_all_date){
			$bwdbp_coustom_day = $bwdbp_coustom_month = $bwdbp_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdbp_the_all_date){
			$bwdbp_coustom_day = $bwdbp_coustom_month = $bwdbp_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdbp_the_all_date){
			$bwdbp_coustom_day = $bwdbp_coustom_month = $bwdbp_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdbp_the_all_date){
			$bwdbp_coustom_year = $settings['bwdbp_blog_coustom_year'];
			$bwdbp_coustom_month = $settings['bwdbp_blog_coustom_month'];
			$bwdbp_coustom_day = $settings['bwdbp_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$bwdbp_coustom_day = $bwdbp_coustom_month = $bwdbp_coustom_year = $wdbp_time = '';
		}
		
		$bwdbp_args = array(
			'post_type'=> $bwdbp_the_blog_type,
			'author__in' => $bwdbp_author,
			'orderby'   => $bwdbp_order_by,
			'order' => $bwdbp_blog_order,
			'post_status' => 'publish',
			'tag' => $bwdbp_tags_filter,
			'posts_per_page' => $bwdbp_post_per_page,
			'category_name' => $bwdbp_categorys_dataa,
			'paged' => $bwdbp_paged,
			'date_query' => $wdbp_time,
			'year' => $bwdbp_coustom_year,
			'monthnum' => $bwdbp_coustom_month,
			'day' => $bwdbp_coustom_day,
		);
		$bwdbp_the_pagination_type = $settings['bwdbp_the_pagination_type'];
		$bwdbp_the_pagination_items_align = $settings['bwdbp_the_pagination_items_align'];
		if('filter_left' === $bwdbp_the_pagination_items_align){
			$bwdbp_pagination_position = 'text-start';
		} elseif('filter_center' === $bwdbp_the_pagination_items_align){
			$bwdbp_pagination_position = 'text-center';
		} elseif('right' === $bwdbp_the_pagination_items_align){
			$bwdbp_pagination_position = 'text-end';
		} else{ $bwdbp_pagination_position = ''; }

		$bwdbp_yes_value = 'yes';
		$bwdbp_blog_next_format = $settings['bwdbp_blog_next_format'];
		$bwdbp_blog_prev_format = $settings['bwdbp_blog_prev_format'];
		if($bwdbp_styles == 'style1' || $bwdbp_styles == 'style2'){
			include( __DIR__ . '/pgridtemplates/'.$bwdbp_styles.'.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
	public function bwdbp_post_categories() {
        $bwdbp_categories_list = get_the_category_list(', ');
        if ($bwdbp_categories_list) {
            echo esc_html($bwdbp_categories_list);
        }
    }
	public function bwdbp_post_thumbnail_here(){
		?>
		<a class="bwdbp_imgnot" href="<?php echo esc_url(get_permalink()); ?>" style="text-decoration:none;">
		<?php 
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'bwd-elementor-addons') . '</h2>';
			} 
			?>
		</a>
		<?php
	}
	public function bwdbp_post_thumbnail_with_css(){
		$bwdbp_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
		list($bwdbp_thumbnail_url) = $bwdbp_thumbnail;
		if(has_post_thumbnail()){
		?>
		<div class="bwdbp_blog_image bwdbp_image_overly_b bwdbp_image_overly_a" style="background-image: url(<?php echo esc_url($bwdbp_thumbnail_url); ?>);">
		<?php
		} else{
			echo '<div class="bwdbp_text_no bwdbp_blog_image bwdbp_image_overly_b bwdbp_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'bwd-elementor-addons');
		}
	}
}
