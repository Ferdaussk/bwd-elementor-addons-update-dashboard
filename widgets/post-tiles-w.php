<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BPTLS_Post_Tiles extends Widget_Base {

	public function get_name() {
		return esc_html__( 'BlogPost_Tiles', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Post Tiles', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle icon-posttiles';
	}

	public function get_categories() {
		return [ 'bwdeb_post_category' ];
	}


	protected function register_controls() {
		$this->start_controls_section(
			'bptls_blog_content_layout_section',
			[
				'label' => esc_html__( 'Post Layout', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bptls_style_selection',
			[
				'label' => esc_html__( 'Post Styles', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'one',
				'options' => [
					'one' => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'two' => esc_html__( 'Style 2', 'bwd-elementor-addons' ),
					'three' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
					'four' => esc_html__( 'Style 4 (PRO)', 'bwd-elementor-addons' ),
					'five' => esc_html__( 'Style 5 (PRO)', 'bwd-elementor-addons' ),
					'six' => esc_html__( 'Style 6 (PRO)', 'bwd-elementor-addons' ),
					'seven' => esc_html__( 'Style 7 (PRO)', 'bwd-elementor-addons' ),
					'eight' => esc_html__( 'Style 8 (PRO)', 'bwd-elementor-addons' ),
					'nine' => esc_html__( 'Style 9 (PRO)', 'bwd-elementor-addons' ),
					'ten' => esc_html__( 'Style 10 (PRO)', 'bwd-elementor-addons' ),
					'eleven' => esc_html__( 'Style 11 (PRO)', 'bwd-elementor-addons' ),
					'twelve' => esc_html__( 'Style 12 (PRO)', 'bwd-elementor-addons' ),
					'thirteen' => esc_html__( 'Style 13 (PRO)', 'bwd-elementor-addons' ),
					'fourteen' => esc_html__( 'Style 14 (PRO)', 'bwd-elementor-addons' ),
					'fifteen' => esc_html__( 'Style 15 (PRO)', 'bwd-elementor-addons' ),
					'sixteen' => esc_html__( 'Style 16 (PRO)', 'bwd-elementor-addons' ),
					'seventeen' => esc_html__( 'Style 17 (PRO)', 'bwd-elementor-addons' ),
					'eighteen' => esc_html__( 'Style 18 (PRO)', 'bwd-elementor-addons' ),
					'nineteen' => esc_html__( 'Style 19 (PRO)', 'bwd-elementor-addons' ),
					'twenty' => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons' ),
					'twentyOne' => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a href="https://bestwpdeveloper.com/post-tiles" target="_blank"><b>DEMO</b></a>. Get <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>PRO...</b></a>.',
			]
		);
		$this->add_control(
			'bptls_the_blog_type',
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
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_content_section',
			[
				'label' => esc_html__( 'Post Settings', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bptls_image_link_show_switcher',
			[
				'label' => esc_html__( 'Image Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bptls_title_show_switcher',
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
			'bptls_title_link_show_switcher',
			[
				'label' => esc_html__( 'Title Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'bptls_title_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_title_tags',
			[
				'label' => esc_html__( 'Title HTML Tag', 'bwdib-icon-box' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'h2',
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
			'bptls_description_show_switcher',
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
			'bptls_the_post_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bptls_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_blog_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bptls_description_show_switcher' => 'yes',
				],
			]
		);
		$this->add_control(
			'bptls_taxo_icon',
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
			'bptls_date_show_switcher',
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
			'bptls_blog_date_format',
			[
				'label' => esc_html__( 'Date Format', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'j M y', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bptls_date_show_switcher' => 'yes',
				],
				'description' => '<span class="pro-feature">Use WordPress date format. <a href="https://wordpress.org/support/article/formatting-date-and-time/" target="_blank">More...</a></span>',
			]
		);
		$this->add_control(
			'bptls_author_show_switcher',
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
			'bptls_author_indicator',
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
					'bptls_author_show_switcher' => 'yes',
				],
			]
		);
		$this->add_responsive_control(
			'bptls_blog_gravader_height',
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
					'{{WRAPPER}} .bptls_author-img img' => 'height: {{SIZE}}{{UNIT}} !important; width: {{SIZE}}{{UNIT}} !important;',
				],
				'condition' => [
					'bptls_author_show_switcher' => 'yes',
					'bptls_author_indicator' => 'gravatar',
				],
			]
		);
		$this->add_control(
			'bptls_author_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-user-alt',
					'library' => 'solid',
				],
				'condition' => [
					'bptls_author_show_switcher' => 'yes',
					'bptls_author_indicator' => 'icon',
				],
			]
		);
		$this->add_control(
			'bptls_comments_show_switcher',
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
			'bptls_blog_query_section',
			[
				'label' => esc_html__( 'Post Query', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		// For Author Filter
		$bptls_array = get_users();
		foreach ($bptls_array as $bptls_author){
			$bptls_id = $bptls_author->ID;
			$bptls_name = $bptls_author->display_name;
			$bptls_get_array[$bptls_id] = $bptls_name;
		}
		$this->add_control(
			'bptls_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $bptls_get_array,
			]
		);
		$this->add_control(
			'bptls_the_all_date',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'd' => esc_html__( 'Today', 'bwd-elementor-addons' ),
					'm' => esc_html__( 'Current Month', 'bwd-elementor-addons' ),
					'coustom' => esc_html__( 'Coustom', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bptls_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bptls_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bptls_blog_coustom_month',
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
					'bptls_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bptls_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'bptls_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bptls_the_order_by',
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
			'bptls_blog_order',
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
			'bptls_the_post_per_page',
			[
				'label' => esc_html__( 'Post Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 4,
				'separator' => 'after',
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bptls_categories_show_switcher',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bptls_the_cat_show_status',
			[
				'label' => esc_html__( 'Show Status', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'show_main_cat',
				'options' => [
					'show_multiple_cat' => esc_html__( 'Show Multiple Category', 'bwd-elementor-addons' ),
					'show_main_cat' => esc_html__( 'Show Main Category', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bptls_categories_show_switcher' => 'yes',
				],
			]
		);
		// For Category Filter
		$bptls_idObj = get_category_by_slug('category-slug');
		$bptls_order_options = array($bptls_idObj => 'All Categories');
		$bptls_categories = get_categories('orderby=name&hide_empty=0');
		foreach ($bptls_categories as $category):
			$bptls_catids = $category->slug;
			$bptls_catname = $category->name;
			$bptls_order_options[$bptls_catids] = $bptls_catname;
		endforeach;
		$this->add_control(
			'bptls_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 0,
				'options' => $bptls_order_options,
			]
		);
		$this->add_control(
			'bptls_tags_show_switcher',
			[
				'label' => esc_html__( 'Tag', 'creative-blog-post' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'creative-blog-post' ),
				'label_off' => esc_html__( 'Hide', 'creative-blog-post' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		// For tag Filter
		$bptls_idObj = get_tag('tags-slug');
		$bptls_order_optionst = array($bptls_idObj => 'All Tags');
		$bptls_ta = get_tags('orderby=name&hide_empty=0');
		foreach ($bptls_ta as $tag):
			$bptls_tagids = $tag->slug;
			$bptls_tagname = $tag->name;
			$bptls_order_optionst[$bptls_tagids] = $bptls_tagname;
		endforeach;
		$this->add_control(
			'bptls_the_tag_filter',
			[
				'label' => esc_html__( 'Filter Tags', 'creative-blog-post' ),
				'type' => Controls_Manager::SELECT,
				'default' => $bptls_idObj,
				'options' => $bptls_order_optionst,
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bptls_content_alignment',
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
			'bptls_blog_content_bg_color',
			[
				'label' => esc_html__( 'Content Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-content-wrapper::before, {{WRAPPER}} .bptls-style-eleven .bptls-content-wrapper::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bptls-img-wrapper::after' => 'border-left: 55px solid {{VALUE}};',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-meta' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_title_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bptls_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_title_typography',
				'selector' => '{{WRAPPER}} .bptls-title .bptls-h2-title',
			]
		);
		$this->add_control(
			'bptls_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-title .bptls-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-title .bptls-h2-title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_title_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-title .bptls-h2-title',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_title_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-title .bptls-h2-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title',
			]
		);
		$this->add_control(
			'bptls_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-title .bptls-h2-title' => 'background-image: linear-gradient(to bottom,{{VALUE}} 0%,{{VALUE}} 98%)',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_title_hover_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_title_hover_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-title .bptls-h2-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End

		$this->add_responsive_control(
            'bptls_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-title .bptls-h2-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-title .bptls-h2-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_description_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bptls_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_description_typography',
				'selector' => '{{WRAPPER}} .bptls-desc p',
			]
		);
		$this->add_control(
			'bptls_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-desc p',
			]
		);
		$this->add_control(
			'bptls_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-desc p' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-desc p' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-desc p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-desc p' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bptls_the_post_image_size',
			[
				'label' => esc_html__( 'Thumbnail Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper img' => 'height: {{SIZE}}{{UNIT}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bptls_image_overlay_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bptls-img-wrapper::before, {{WRAPPER}} .bptls-style-twelve .bptls-img-wrapper::after',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_author_options',
			[
				'label' => esc_html__( 'Author', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_author_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-author span, {{WRAPPER}} .bptls-img-wrapper .bptls-author .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-author span, {{WRAPPER}} .bptls-img-wrapper .bptls-author .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-author .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-author .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-author' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bptls_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-author' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_date_style_section',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_date_show_switcher' => 'yes'
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-date span, {{WRAPPER}} .bptls-img-wrapper .bptls-date .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-date span, {{WRAPPER}} .bptls-img-wrapper .bptls-date .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-date span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-date .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-date span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-date .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-date' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_comment_style_section',
			[
				'label' => esc_html__( 'Comment', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_comments_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper .bptls-comment .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper .bptls-comment .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment span, {{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-comment' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-comment' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_category_style_section',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_categories_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper .bptls-cat',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bptls_blog_taxonomy_categories_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover .bptls-cat' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bptls_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper .bptls-cat' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_tags_style_section',
			[
				'label' => esc_html__( 'Tags', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bptls_tags_show_switcher' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bptls_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'creative-blog-post' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bptls_blog_tag, {{WRAPPER}} .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_tag .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_tag, {{WRAPPER}} .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_tag .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_tag, {{WRAPPER}} .bptls_blog_tag::before, {{WRAPPER}} .bptls_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'creative-blog-post' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bptls_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag .bptls_icons',
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag a, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag .bptls_icons' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bptls_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'creative-blog-post' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag, {{WRAPPER}} .bptls_blog_box:hover .bptls_blog_tag::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bptls_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls_blog_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'creative-blog-post'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls_blog_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bptls_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bptls_the_collumn_gap_size',
			[
				'label' => esc_html__( 'Collumn Gap', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .bptls-main-wrapper' => 'gap: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bptls_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bptls_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bptls_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bptls_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		$this->add_control(
			'bptls_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bptls-style-six .bptls-img-wrapper:hover::after, {{WRAPPER}} .bptls-style-twelve .bptls-img-wrapper::after' => 'background: {{VALUE}}',
					'condition' => [
						'bptls_style_selection' => ['six', 'twelve'],
					],
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bptls_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bptls_blog_box_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bptls-img-wrapper:hover',
			]
		);
		$this->add_responsive_control(
            'bptls_blog_the_box_border_radius_hover',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bptls_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bptls_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bptls-img-wrapper' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bptls_title_tags = $settings['bptls_title_tags'];
		$bptls_styles = $settings['bptls_style_selection'];
		$bptls_post_per_page = $settings['bptls_the_post_per_page'];
		$bptls_post_description_words = $settings['bptls_the_post_description_words'];
		$bptls_blog_word_trim_indi = $settings['bptls_blog_word_trim_indi'];
		$bptls_blog_date_format = $settings['bptls_blog_date_format'];

		$bptls_author_indicator = $settings['bptls_author_indicator'];
		$bptls_taxo_icon = $settings['bptls_taxo_icon'];

		$bptls_cont_align = $settings['bptls_content_alignment'];
		if('left' === $bptls_cont_align){
			$bptls_cont_align = 'bptls_taxo_align_left bptls_taxo_align_left_j';
		} elseif('center' === $bptls_cont_align){
			$bptls_cont_align = 'bptls_taxo_align_center bptls_taxo_align_center_j';
		} elseif('right' === $bptls_cont_align){
			$bptls_cont_align = 'bptls_taxo_align_right bptls_taxo_align_right_j';
		} else{ $bptls_cont_align = ' '; }

		$bptls_image_link_show = $settings['bptls_image_link_show_switcher'];
		$bptls_title_swtcher = $settings['bptls_title_show_switcher'];
		$bptls_title_link_show = $settings['bptls_title_link_show_switcher'];
		$bptls_description_swtcher = $settings['bptls_description_show_switcher'];
		$bptls_date_swtcher = $settings['bptls_date_show_switcher'];
		$bptls_author_swtcher = $settings['bptls_author_show_switcher'];
		$bptls_comments_swtcher = $settings['bptls_comments_show_switcher'];
		$bptls_categories_swtcher = $settings['bptls_categories_show_switcher'];
		$bptls_tags_swtcher = $settings['bptls_tags_show_switcher'];
		$bptls_tags_filter = $settings['bptls_the_tag_filter'];
		$bptls_cat_show_status = $settings['bptls_the_cat_show_status'];

		$bptls_categorys_dataa = $settings['bptls_the_cat_columnsdd'];
		$bptls_the_blog_type = $settings['bptls_the_blog_type'];
		$bptls_blog_order = $settings['bptls_blog_order'];
		$bptls_author = $settings['bptls_the_all_author'];
		$bptls_order_by = $settings['bptls_the_order_by'];
		
		$bptls_the_all_date = $settings['bptls_the_all_date'];
		if('d' === $bptls_the_all_date){
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bptls_the_all_date){
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bptls_the_all_date){
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bptls_the_all_date){
			$bptls_coustom_year = $settings['bptls_blog_coustom_year'];
			$bptls_coustom_month = $settings['bptls_blog_coustom_month'];
			$bptls_coustom_day = $settings['bptls_blog_coustom_day'];
			$wdbp_time = '';
		} else{
			$bptls_coustom_day = $bptls_coustom_month = $bptls_coustom_year = $wdbp_time = '';
		}
		
		$bptls_args = array(
			'post_type'=> $bptls_the_blog_type,
			'author__in' => $bptls_author,
			'orderby'   => $bptls_order_by,
			'order' => $bptls_blog_order,
			'post_status' => 'publish',
			'posts_per_page' => $bptls_post_per_page,
			'category_name' => $bptls_categorys_dataa,
			'date_query' => $wdbp_time,
			'year' => $bptls_coustom_year,
			'monthnum' => $bptls_coustom_month,
			'day' => $bptls_coustom_day,
		);
		$bptls_yes_value = 'yes';
		if($bptls_styles == 'one' || $bptls_styles == 'two'){
			include( __DIR__ . '/ptilestemplates/bptls_styles_main.php' );
		}else{
			echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
		}
	}
	public function bptls_post_categories() {
		$bptls_categories_list = get_the_category_list(', ');
		if ($bptls_categories_list) {
			echo esc_html($bptls_categories_list);
		}
	}
	public function bptls_post_thumbnail_here(){
		if(has_post_thumbnail()){
			the_post_thumbnail('large'); 
			} else{ 
			echo '<h2 class="text-center ">' . esc_html__('No Thumbnail', 'bwd-elementor-addons') . '</h2>';
			}
	}
}
