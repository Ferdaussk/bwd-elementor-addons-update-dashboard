<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_BWDCRTPLSTProductsListcarousel extends Widget_Base {

	public function get_name() {
		return esc_html__( 'CreativeProductsListcarousel', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Creative Products List Carousel', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle product-list-carousel';
	}

	public function get_categories() {
		return [ 'bwdeb_woocommerce_category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdcrtplst_products_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdcrtplst_products_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
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
					'style20' => esc_html__( 'Style 20 (PRO)', 'bwd-elementor-addons' ),
					'style21' => esc_html__( 'Style 21 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a href="https://bestwpdeveloper.com/creative-product-list-carousel" target="_blank"><b>DEMO</b></a>. Get <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>PRO...</b></a>.',
			]
		);
		
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'bwdcrtplst_products_settings_section',
			[
				'label' => esc_html__( 'Product Settings', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_title',
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
			'bwdcrtplst_title_tags',
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
			'bwdcrtplst_description',
			[
				'label' => esc_html__( 'Short Description', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_description_words',
			[
				'label' => esc_html__( 'Word Length', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 15,
				'condition' => [
					'bwdcrtplst_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_word_trim_indi',
			[
				'label' => esc_html__( 'Word Trim Indicator', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '......', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdcrtplst_description' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_price',
			[
				'label' => esc_html__( 'Price', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_date',
			[
				'label' => esc_html__( 'Publish Date', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_review',
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
			'bwdcrtplst_review_star_number',
			[
				'label' => esc_html__( 'Star Number', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5,
				'condition' => [
					'bwdcrtplst_review' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_sale',
			[
				'label' => esc_html__( 'Total Sale', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_sale_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Total Sale:-', 'bwd-elementor-addons'),
				'condition' => [
					'bwdcrtplst_sale' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_type',
			[
				'label' => esc_html__( 'Product Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_type_label',
			[
				'label' => esc_html__('Label', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Type:-', 'bwd-elementor-addons'),
				'condition' => [
					'bwdcrtplst_type' => 'yes',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'bwdcrtplst_products_actions_section',
			[
				'label' => esc_html__( 'Product Action', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_cart_btn',
			[
				'label' => esc_html__( 'Cart Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'bwdcrtplst_the_cart_type',
			[
				'label' => esc_html__( 'Button Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'text',
				'options' => [
					'text' => esc_html__( 'Text', 'bwd-elementor-addons' ),
					'icon' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_cart_button',
			[
				'label' => esc_html__('Cart Button', 'bwd-elementor-addons'),
				'type' => Controls_manager::TEXT,
				'default' => esc_html__('Add To Cart', 'bwd-elementor-addons'),
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
					'bwdcrtplst_the_cart_type' => 'text',
				],
				'dynamic' => [
					'active' => true,
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_cart_button_icon',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-shopping-cart',
					'library' => 'solid',
				],
				'condition' => [
					'bwdcrtplst_cart_btn' => 'yes',
					'bwdcrtplst_the_cart_type' => 'icon',
				],
			]
		);
		$this->end_controls_section(); 
		
		$this->start_controls_section(
			'bwdcrtplst_products_query_section',
			[
				'label' => esc_html__( 'Product Query', 'bwd-elementor-addons' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'bwdcrtplst_the_product_per_page',
			[
				'label' => esc_html__( 'Product Per Page', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 6,
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
			]
		);
		// For Author Filter
		$bwdcrtplst_array = get_users();
		foreach ($bwdcrtplst_array as $bwdcrtplst_author){
			$bwdcrtplst_id = $bwdcrtplst_author->ID;
			$bwdcrtplst_name = $bwdcrtplst_author->display_name;
			$bwdcrtplst_get_array[$bwdcrtplst_id] = $bwdcrtplst_name;
		}
		$this->add_control(
			'bwdcrtplst_the_all_author',
			[
				'label' => esc_html__( 'Choose Author', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'options' => $bwdcrtplst_get_array,
			]
		);
		$this->add_control(
      'bwdcrtplst_the_product_stock_or_not',
      [
        'label' => esc_html__( 'Stock Check', 'bwd-elementor-addons' ),
        'type' => Controls_Manager::SELECT,
        'default' => 'both',
        'options' => [
          'both' => esc_html__( 'Both', 'bwd-elementor-addons' ),
          'outofstock' => esc_html__( 'Out of Stock', 'bwd-elementor-addons' ),
          'instock' => esc_html__( 'In Stock', 'bwd-elementor-addons' ),
        ],
      ]
    );
		$this->add_control(
			'bwdcrtplst_the_all_date',
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
			'bwdcrtplst_blog_coustom_year',
			[
				'label' => esc_html__( 'Type 4 Digit Year Only', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( '2022', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( 'Type Your Year Only', 'bwd-elementor-addons' ),
				'label_block' => true,
				'condition' => [
					'bwdcrtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_coustom_month',
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
					'bwdcrtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_coustom_day',
			[
				'label' => esc_html__( 'Day Only (Date)', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::NUMBER,
				'separator' => 'after',
				'default' => esc_html__( '00', 'bwd-elementor-addons' ),
				'placeholder' => esc_html__( '00', 'bwd-elementor-addons' ),
				'condition' => [
					'bwdcrtplst_the_all_date' => 'coustom',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_the_order_by',
			[
				'label' => esc_html__( 'Order By', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all',
				'options' => [
					'all' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'author' => esc_html__( 'Author', 'bwd-elementor-addons' ),
					'title' => esc_html__( 'Title', 'bwd-elementor-addons' ),
					'meta_value_num' => esc_html__( 'Price', 'bwd-elementor-addons' ),
					'id' => esc_html__( 'ID', 'bwd-elementor-addons' ),
					'date' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_blog_order',
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
			'bwdcrtplst_cat',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		// For product category filter
		function bwdcrtplst_get_cat_terms_array( $tax = array( 'category' ), $return_key = 'slug' ) {
			$terms = array();
			$tax = is_array( $tax ) ? $tax : array( $tax ) ;

			foreach ( $tax as $key => $value ) {
				if ( ! taxonomy_exists( $value ) ) {
					unset( $tax[ $key ] );
				}
			}
			$all_bwdcrtplst_terms = (array) get_terms( $tax, array(
				'hide_empty'   => 0,
				'hierarchical' => 0,
			) );

			if ( empty( $all_bwdcrtplst_terms ) || is_wp_error( $all_bwdcrtplst_terms ) ) {
				return '';
			}
			foreach ( $all_bwdcrtplst_terms as $term ) {
				$terms[ $term->$return_key ] = $term->name;
			}
			return $terms;
		}
		$this->add_control(
			'bwdcrtplst_the_cat_show',
			[
				'label' => esc_html__( 'Display Category', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'bwdcrtplst_cat' => 'yes',
				],
				'default' => 'Select To Display Category',
				'options' => bwdcrtplst_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		$this->add_control(
			'bwdcrtplst_tag',
			[
				'label' => esc_html__( 'Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'bwdcrtplst_the_select_cat_columnsdd',
			[
				'label' => esc_html__( 'Products Filter By', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'all_filter',
				'options' => [
					'all_filter' => esc_html__( 'All', 'bwd-elementor-addons' ),
					'all_cat' => esc_html__( 'By Category', 'bwd-elementor-addons' ),
					'all_tags' => esc_html__( 'By Tag', 'bwd-elementor-addons' ),
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_the_cat_columnsdd',
			[
				'label' => esc_html__( 'Filter Categories', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'bwdcrtplst_the_select_cat_columnsdd' => 'all_cat',
				],
				'default' => 0,
				'options' => bwdcrtplst_get_cat_terms_array( array( 'product_cat' ) ),
			]
		);
		function bwdcrtplst_get_tag_terms_array() {
			$tags = get_terms( 'product_tag' );
			if ( empty( $tags ) || ! is_array( $tags ) ) {
				return array();
			}
			return wp_list_pluck( $tags, 'name', 'slug' );
		}
		$this->add_control(
			'bwdcrtplst_the_tag_columnsdd',
			[
				'label' => esc_html__( 'Filter Tag', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'condition' => [
					'bwdcrtplst_the_select_cat_columnsdd' => 'all_tags',
				],
				'default' => 0,
				'options' => bwdcrtplst_get_tag_terms_array( array( 'product_tag' ) ),
			]
		);
	
		$this->end_controls_section();







		$this->start_controls_section(
			'bwdcrtplst_blogpost_carousel',
			[
				'label' => esc_html__( 'Carousel Settings', 'bwdcrtplst-flip-box' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		
		$this->add_control(
			'bwdcrtplst-blogpost-custom-id',
			[
				'label' => esc_html__( 'Custom Id', 'bwdcrtplst-flip-box' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'post-id', 'bwdcrtplst-flip-box' ),
			]
		);

		//item-gap
		$this->add_control(
			'bwdcrtplst_slide_margin',
			[
				'label' => esc_html__( 'Item Gap', 'bwdcrtplst-flip-box' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 20,
			]
		);

		//popover-responsive-device
		$this->add_control(
			'bwdcrtplst_popover_responsive_device',
			[
				'label' => esc_html__( 'Responsive Device', 'bwdcrtplst-flip-box' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdcrtplst-flip-box' ),
				'label_on' => esc_html__( 'Custom', 'bwdcrtplst-flip-box' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

			$this->add_control(
				'bwdcrtplst_slide_desktop_view',
				[
					'label' => esc_html__( 'Desktop View', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 3,
				]
			);
			$this->add_control(
				'bwdcrtplst_slide_tablet_view',
				[
					'label' => esc_html__( 'Tablet View', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 2,
				]
			);
			$this->add_control(
				'bwdcrtplst_slide_mobile_view',
				[
					'label' => esc_html__( 'Mobile View', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::NUMBER,
					'min' => 1,
					'max' => 100,
					'step' => 1,
					'default' => 1,
				]
			);

		$this->end_popover();


		//popover-autoplay
		$this->add_control(
			'bwdcrtplst_aupoplay_popover',
			[
				'label' => esc_html__( 'More Controlls', 'bwdcrtplst-flip-box' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdcrtplst-flip-box' ),
				'label_on' => esc_html__( 'Custom', 'bwdcrtplst-flip-box' ),
				'return_value' => 'yes',

			]
		);
		$this->start_popover();

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_infinite_autoplay_switcher',
					[
						'label' => esc_html__( 'Autoplay', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdcrtplst-flip-box' ),
						'label_off' => esc_html__( 'Hide', 'bwdcrtplst-flip-box' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_infinite_loop_switcher',
					[
						'label' => esc_html__( 'Infinite Loop', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdcrtplst-flip-box' ),
						'label_off' => esc_html__( 'Hide', 'bwdcrtplst-flip-box' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_HoverPause_switcher',
					[
						'label' => esc_html__( 'Hover Pause', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdcrtplst-flip-box' ),
						'label_off' => esc_html__( 'Hide', 'bwdcrtplst-flip-box' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				//infinite_loop_switcher
				$this->add_control(
					'bwdcrtplst_centermode_switcher',
					[
						'label' => esc_html__( 'Center Mode', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::SWITCHER,
						'label_on' => esc_html__( 'Show', 'bwdcrtplst-flip-box' ),
						'label_off' => esc_html__( 'Hide', 'bwdcrtplst-flip-box' ),
						'return_value' => 'yes',
						'default' => 'yes',
					]
				);

				$this->add_control(
					'bwdcrtplst_autoplay_timeout',
					[
						'label' => esc_html__( 'Autoplay TimeOut (ms)', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdcrtplst_autoplay_speed',
					[
						'label' => esc_html__( 'Autoplay Speeds (ms)', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 1,
						'max' => 100000,
						'step' => 1,
						'default' => 2000,
					]
				);

				$this->add_control(
					'bwdcrtplst_stace_padding',
					[
						'label' => esc_html__( 'Stage Padding (px)', 'bwdcrtplst-flip-box' ),
						'type' => \Elementor\Controls_Manager::NUMBER,
						'min' => 0,
						'max' => 100000,
						'step' => 1,
						'default' => 8,
					]
				);

		$this->end_popover();


		//popover-//Arrow Navigation
		$this->add_control(
			'bwdcrtplst_arrow_popover',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwdcrtplst-flip-box' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdcrtplst-flip-box' ),
				'label_on' => esc_html__( 'Custom', 'bwdcrtplst-flip-box' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//Arrow Navigation switcher
			$this->add_control(
				'bwdcrtplst_nav_switcher',
				[
					'label' => esc_html__( 'Arrow Navigation ?', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwdcrtplst-flip-box' ),
					'label_off' => esc_html__( 'Hide', 'bwdcrtplst-flip-box' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//arrow type
			$this->add_control(
				'bwdcrtplst_nav_type',
				[
					'label' => esc_html__( 'Arrow Type', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'icon',
					'options' => [
						'icon'  => esc_html__( 'Icon', 'bwdcrtplst-flip-box' ),
						'text'  => esc_html__( 'Text', 'bwdcrtplst-flip-box' ),
					],
					'condition' => [
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//prev icon
			$this->add_control(
				'bwdcrtplst_nav_prev_arrow',
				[
					'label' => esc_html__( 'Previous Icon', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-left',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'icon',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//next icon
			$this->add_control(
				'bwdcrtplst_nav_next_arrow',
				[
					'label' => esc_html__( 'Next Icon', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::ICONS,
					'default' => [
						'value' => 'fas fa-chevron-right',
						'library' => 'fa-solid',
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'icon',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//prev text
			$this->add_control(
				'bwdcrtplst_nav_prev_text',
				[
					'label' => esc_html__( 'Previous Text', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Prev', 'bwdcrtplst-flip-box' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);
			//next text
			$this->add_control(
				'bwdcrtplst_nav_next_text',
				[
					'label' => esc_html__( 'Next Text', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::TEXT,
					'default' => esc_html__( 'Next', 'bwdcrtplst-flip-box' ),
					'dynamic' => [
						'active' => true,
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
						'bwdcrtplst_nav_switcher' => 'yes',
					],
				]
			);

		$this->end_popover();



		//popover-//dots
		$this->add_control(
			'bwdcrtplst_dots_popover',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwdcrtplst-flip-box' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwdcrtplst-flip-box' ),
				'label_on' => esc_html__( 'Custom', 'bwdcrtplst-flip-box' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//dots switcher
			$this->add_control(
				'bwdcrtplst_dots_switcher',
				[
					'label' => esc_html__( 'Active Dots ?', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::SWITCHER,
					'label_on' => esc_html__( 'Show', 'bwdcrtplst-flip-box' ),
					'label_off' => esc_html__( 'Hide', 'bwdcrtplst-flip-box' ),
					'return_value' => 'yes',
					'default' => 'yes',
				]
			);
			//dots type
			$this->add_control(
				'bwdcrtplst_dots_type',
				[
					'label' => esc_html__( 'Type', 'bwdcrtplst-flip-box' ),
					'type' => \Elementor\Controls_Manager::SELECT,
					'default' => 'dots',
					'options' => [
						'dots'  => esc_html__( 'Dots', 'bwdcrtplst-flip-box' ),
						'numbers'  => esc_html__( 'Numbers', 'bwdcrtplst-flip-box' ),
					],
					'condition' => [
						'bwdcrtplst_dots_switcher' => 'yes',
					],
				]
			);

			//dots type
			$this->add_control(
				'bwdcrtplst_dots_type_style',
				[
					'label' => esc_html__( 'Dot Style', 'bwdcrtplst-flip-box' ),
					'type' => Controls_Manager::SELECT,
					'default' => '',
					'options' => [
						''  => esc_html__( 'Default', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots1'  => esc_html__( 'Style 1', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots2'  => esc_html__( 'Style 2', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots3'  => esc_html__( 'Style 3', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots4'  => esc_html__( 'Style 4', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots5'  => esc_html__( 'Style 5', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots6'  => esc_html__( 'Style 6', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots7'  => esc_html__( 'Style 7', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots8'  => esc_html__( 'Style 8', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots9'  => esc_html__( 'Style 9', 'bwdcrtplst-flip-box' ),
						'bwdcrtplst_dots10'  => esc_html__( 'Style 10', 'bwdcrtplst-flip-box' ),
					],
					'condition' => [
						'bwdcrtplst_dots_switcher' => 'yes',
						'bwdcrtplst_dots_type' => 'dots',
					],
				]
			);

		$this->end_popover();
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_content_style_section',
			[
				'label' => esc_html__( 'Content Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_content_alignment',
			[
				'label' => esc_html__( 'Content Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
            'bwdcrtplst_blog_content_padding',
            [
                'label' => esc_html__('Content Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_bottom_part' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_the_box_content_border_radius',
            [
                'label' => esc_html__('Content Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_bottom_part' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_title_options',
			[
				'label' => esc_html__( 'Title', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_title' => 'yes',
				],
			]
		);
		// Hover control start for title
		$this->start_controls_tabs(
			'bwdcrtplst_blog_title_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_title_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_title_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_p_title',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_title_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_title_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_title_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_title_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_title_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_title',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_title_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_title' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_title_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_title' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_description_options',
			[
				'label' => esc_html__( 'Description', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_description' => 'yes',
				],
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdcrtplst_blog_description_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_description_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_description_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_desce',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_description_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_description_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_desc_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_desce' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_desc_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_desce' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_description_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_desce',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_description_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_desce' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_description_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_desce' => 'background: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		

		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_button_style_section',
			[
				'label' => esc_html__( 'Action Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_options',
			[
				'label' => esc_html__( 'Button', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::HEADING,
			]
		);
		// Hover control start for description
		$this->start_controls_tabs(
			'bwdcrtplst_blog_button_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_button_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_button_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_button a, {{WRAPPER}} .bwdcrtplst_button i',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_button a, {{WRAPPER}} .bwdcrtplst_button i' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_blog_button_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_bttn .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_blogPost_4 .bwdcrtplst_blog_meta',
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_button_bg_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_button, {{WRAPPER}} .bwdcrtplst_blog_bttn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->add_responsive_control(
            'bwdcrtplst_blog_button_icon_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_button' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_button_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_button_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_button:hover a',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_button:hover a' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_bg_hover_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_button::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_blog_button_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_bttn .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_blogPost_4 .bwdcrtplst_blog_meta:hover',
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_button_bg_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_button:hover, {{WRAPPER}} .bwdcrtplst_blog_bttn:hover, {{WRAPPER}} .bwdcrtplst_button::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_image_style_section',
			[
				'label' => esc_html__( 'Image Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'bwdcrtplst_the_post_image_height_size',
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
					'{{WRAPPER}} .bwdcrtplst_blog_image' => 'height: {{SIZE}}{{UNIT}}% !important; width: {{SIZE}}% !important;',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_image_overly_color',
			[
				'label' => esc_html__( 'Image Overly', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_image_overly_b::before, {{WRAPPER}} .bwdcrtplst_image_overly_a::after, {{WRAPPER}} .bwdcrtplst_blogPost_list_40 .bwdcrtplst_blog_bottom_part::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_button_icon_overly_color',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_overlay_icon i' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_style_selection' => ['style4', 'style5', 'style24'],
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_image_border_radius',
            [
                'label' => esc_html__('Image Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blogPost_list_32 .bwdcrtplst_blog_image, {{WRAPPER}} .bwdcrtplst_blog_image img, {{WRAPPER}} .bwdcrtplst_blog_image, {{WRAPPER}} .bwdcrtplst_blog_image::before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_type_options',
			[
				'label' => esc_html__( 'Type', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_type' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy author
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_author_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_author_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_author_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_user a, {{WRAPPER}} .bwdcrtplst_blog_user, {{WRAPPER}} .bwdcrtplst_blog_user .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_author_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_author-img, {{WRAPPER}} .bwdcrtplst_blog_user a, {{WRAPPER}} .bwdcrtplst_blog_user, {{WRAPPER}} .bwdcrtplst_blog_user .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_user::after, {{WRAPPER}} .bwdcrtplst_blog_user::before' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_author_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_author_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_user' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_author_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_author_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_author_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_author_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_user' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_author_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_user:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
			'bwdcrtplst_blog_author_image_height',
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
					'{{WRAPPER}} .bwdcrtplst_author img, {{WRAPPER}} .bwdcrtplst_author-img img' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'bwdcrtplst_author_indicator' => 'gravatar',
				]
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_author_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_user' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_author_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_user' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_date_options',
			[
				'label' => esc_html__( 'Date', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_date' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_date_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_date_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_date_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_date, {{WRAPPER}} .bwdcrtplst_blog_date .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_date_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_date, {{WRAPPER}} .bwdcrtplst_blog_date .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_date_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_date::before, {{WRAPPER}} .bwdcrtplst_blogPost_17 .bwdcrtplst_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_date_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_date' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_date_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_date' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_date_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_date' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_date_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_date_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_date_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_date_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_date::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_date_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_date:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_reg_price_options',
			[
				'label' => esc_html__( 'Reqular Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_reg_price_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_reg_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_reg_price_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_reguler_price',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_reg_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_reg_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_reg_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_reg_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_reg_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_reg_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_reg_price_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_reguler_price',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_reg_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_reg_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_reg_price_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_reguler_price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_new_price_options',
			[
				'label' => esc_html__( 'New Price', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for taxonomy date
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_new_price_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_new_price_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_new_price_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_sale_price',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_new_price_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_new_price_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_new_price_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_new_price_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_new_price_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_new_price_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_new_price_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_sale_price',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_new_price_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_new_price_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_new_price_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_price .bwdcrtplst_sale_price' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_comment_options',
			[
				'label' => esc_html__( 'Review', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_review' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy comment
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_comment_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_comment_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_comment_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_comment, {{WRAPPER}} .bwdcrtplst_blog_comment a, {{WRAPPER}} .bwdcrtplst_blog_comment .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_comment_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_comment, {{WRAPPER}} .bwdcrtplst_blog_comment a, {{WRAPPER}} .bwdcrtplst_blog_comment .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_comment_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_comment, {{WRAPPER}} .bwdcrtplst_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_comment_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_comment_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_comment_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_comment_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_comment_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_comment_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_comment' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_responsive_control(
            'bwdcrtplst_blog_comment_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_comment' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_comment_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_comment' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_tags_options',
			[
				'label' => esc_html__( 'Sale', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_sale' => 'yes',
				],
			]
		);
		// Hover control start for taxonomy tags
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_tags_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_tags_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_tags_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_tag, {{WRAPPER}} .bwdcrtplst_blog_tag a, {{WRAPPER}} .bwdcrtplst_blog_tag .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_tags_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_tag, {{WRAPPER}} .bwdcrtplst_blog_tag a, {{WRAPPER}} .bwdcrtplst_blog_tag .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_tags_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_tags_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_tag_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_tag' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_tags_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_tags_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_tags_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_tags_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_the_tags' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_tags_hover_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_tag' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
	
		$this->add_responsive_control(
            'bwdcrtplst_taxonomy_tags_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_tag' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_categories_options',
			[
				'label' => esc_html__( 'Category', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		// Hover control start for taxonomy categories
		$this->start_controls_tabs(
			'bwdcrtplst_blog_taxonomy_categories_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_categories_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_categories_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_category li, {{WRAPPER}} .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_category .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_categories_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li, {{WRAPPER}} .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_category .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_category::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_categories_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_category li, {{WRAPPER}} .bwdcrtplst_category li::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_taxonomy_categories_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_blog_taxonomy_categories_hover_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst_category li:hover, {{WRAPPER}} .bwdcrtplst_category:hover li a, {{WRAPPER}} .bwdcrtplst_category:hover .bwdcrtplst_icons',
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_categories_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blog_box .bwdcrtplst_category li:hover, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_category li a, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_category li .bwdcrtplst_icons' => 'color: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_category li::after' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'bwdcrtplst_blog_taxonomy_categories_hover_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_category li a:hover, {{WRAPPER}} .bwdcrtplst_blog_box .bwdcrtplst_category li:hover, {{WRAPPER}} .bwdcrtplst_blog_box .bwdcrtplst_category li:hover::before' => 'background: {{VALUE}}',
					'{{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_category li::before' => 'border-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		
		$this->add_responsive_control(
            'bwdcrtplst_blog_taxonomy_categories_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_category li a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_cat_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_category li a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_taxonomy_cat_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_category li a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->end_controls_section();

		$this->start_controls_section(
			'bwdcrtplst_blog_style_section',
			[
				'label' => esc_html__( 'Box Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		// Hover control start for box
		$this->start_controls_tabs(
			'bwdcrtplst_blog_box_style_post'
		);
		$this->start_controls_tab(
			'bwdcrtplst_blog_box_normal_post',
			[
				'label' => esc_html__( 'Normal', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$this->add_control(
			'bwdcrtplst_blog_box_bg_color',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blogPost_list_40 .bwdcrtplst_blog_box, {{WRAPPER}} .bwdcrtplst_n_bg_b:before, {{WRAPPER}} .bwdcrtplst_n_bg, {{WRAPPER}} .bwdcrtplst_box_style_cmn' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_blog_box_bg_grediant_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcrtplst_blogPost_list_40 .bwdcrtplst_blog_box, {{WRAPPER}} .bwdcrtplst_g_bg_b:before, {{WRAPPER}} .bwdcrtplst_g_bg, {{WRAPPER}} .bwdcrtplst_box_style_cmn, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_blog_box_boxshadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_g_bg_b:before, {{WRAPPER}} .bwdcrtplst_box_sha, {{WRAPPER}} .bwdcrtplst_box_style_cmn, {{WRAPPER}} .bwdcrtplst_blog_box',
			]
		);
		$this->end_controls_tab();
		$this->start_controls_tab(
			'bwdcrtplst_blog_box_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$this->add_control(
			'bwdcrtplst_blog_box_bg_color_hover',
			[
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst_blogPost_list_40 .bwdcrtplst_blog_box:hover, {{WRAPPER}} .bwdcrtplst_n_bg_b:hover:before, {{WRAPPER}} .bwdcrtplst_n_bg:hover, {{WRAPPER}} .bwdcrtplst_box_style_cmn:hover' => 'background: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_blog_box_bg_grediant_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .bwdcrtplst_blogPost_list_40 .bwdcrtplst_blog_box:hover, {{WRAPPER}} .bwdcrtplst_g_bg_b:hover:before, {{WRAPPER}} .bwdcrtplst_g_bg:hover, {{WRAPPER}} .bwdcrtplst_box_style_cmn:hover, {{WRAPPER}} .bwdcrtplst_blog_box:hover .bwdcrtplst_blog_bottom_part',
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_blog_box_boxshadow_hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box:hover',
			]
		);
		$this->end_controls_tab();
		$this->end_controls_tabs();
		// Hover Control End
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_blog_box_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst_blog_box',
			]
		);
		$this->add_responsive_control(
            'bwdcrtplst_blog_the_box_border_radius',
            [
                'label' => esc_html__('Border Radius', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_box' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_the_box_border_bottom',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_blog_box' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'bwdcrtplst_blog_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .bwdcrtplst_box_padding_cmn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		
		$this->end_controls_section();

		
		$this->start_controls_section(
			'bwdcrtplst_catproduct_carousel_arrow_style',
			[
				'label' => esc_html__( 'Navigation :: Arrow', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_nav_switcher' => 'yes'
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
				'bwdcrtplst_arrow_color',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_background_color',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdcrtplst_arrow_size',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next' => 'font-size: {{SIZE}}{{UNIT}};',
					],
					'condition' => [
						'bwdcrtplst_nav_type' => 'icon',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_tetx_typography',
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev span, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next span',
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdcrtplst_arrow_width',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//height
			$this->add_responsive_control(
				'bwdcrtplst_arrow_height',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_border',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdcrtplst_arrow_border-radius',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_box-shadow',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ',
				]
			);

			//opacity
			$this->add_control(
				'bwdcrtplst_arrow_opacity',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdcrtplst_photostack_visibility',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdcrtplst_arrow_popover_style',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow
				$this->add_control(
					'bwdcrtplst_arrow_left_heading',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow
				$this->add_control(
					'bwdcrtplst_arrow_right_heading',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_Right_position_vertical',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdcrtplst_arrow_right_position_horizontal',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
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
				'bwdcrtplst_arrow_color_hover',
				[
					'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::COLOR,
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover' => 'color: {{VALUE}}',
					],
				]
			);

			//arrow-background
			$this->add_group_control(
				\Elementor\Group_Control_Background::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_background_color_hover',
					'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
					'types' => [ 'classic', 'gradient'],
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover',
				]
			);

			//size
			$this->add_responsive_control(
				'bwdcrtplst_arrow_size_hover',
				[
					'label' => esc_html__( 'Size', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover' => 'font-size: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//typography
			$this->add_group_control(
				\Elementor\Group_Control_Typography::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_tetx_typography_hover',
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover span, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover span',
					'condition' => [
						'bwdcrtplst_nav_type' => 'text',
					],
				]
			);

			//width
			$this->add_responsive_control(
				'bwdcrtplst_arrow_width_hover',
				[
					'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover ' => 'width: {{SIZE}}{{UNIT}};',
					],
				]
			);
			//height
			$this->add_responsive_control(
				'bwdcrtplst_arrow_height_hover',
				[
					'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover ' => 'height: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//border
			$this->add_group_control(
				\Elementor\Group_Control_Border::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_border_hover',
					'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover',
				]
			);

			//Border Radius
			$this->add_responsive_control(
				'bwdcrtplst_arrow_border-radius_hover',
				[
					'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::DIMENSIONS,
					'size_units' => [ 'px', '%', 'em' ],
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
					],
				]
			);

			//Box Shadow
			$this->add_group_control(
				\Elementor\Group_Control_Box_Shadow::get_type(),
				[
					'name' => 'bwdcrtplst_arrow_box-shadow_hover',
					'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
					'selector' => '{{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev:hover, {{WRAPPER}} .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next:hover',
				]
			);

			//opacity
			$this->add_control(
				'bwdcrtplst_arrow_opacity_hover',
				[
					'label'       => esc_html__('Arrow Opacity', 'bwd-elementor-addons'),
					'type'        => Controls_Manager::NUMBER,
					'min'         => 0,
					'max'         => 100,
					'step'        => .1,
					'selectors'   => [
						'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'opacity: {{SIZE}}',
					],
				]
			);

			//visibility
			$this->add_responsive_control(
				'bwdcrtplst_photostack_visibility_hover',
				[
					'label'     => esc_html__('Visibility', 'bwd-elementor-addons'),
					'type'      => Controls_Manager::SELECT,
					'options'   => [
						'visible' => esc_html__('Visible', 'bwd-elementor-addons'),
						'hidden'  => esc_html__('Hidden', 'bwd-elementor-addons'),
					],
					'default'   => 'visible',
					'selectors' => [
						'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev, {{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'visibility: {{VALUE}}',
					],
				]
			);

			//popover-//Arrow Navigation
			$this->add_control(
				'bwdcrtplst_arrow_popover_style_hover',
				[
					'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
					'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
					'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
					'return_value' => 'yes',

				]
			);

			$this->start_popover();

				//left-arrow-heading
				$this->add_control(
					'bwdcrtplst_arrow_left_heading_hover',
					[
						'label' => esc_html__( 'Left Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//left
				$this->add_responsive_control(
					'bwdcrtplst_arrow_left_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-prev ' => 'left: {{SIZE}}{{UNIT}};',
						],
					]
				);


				//right-arrow-heading
				$this->add_control(
					'bwdcrtplst_arrow_right_heading_hover',
					[
						'label' => esc_html__( 'Right Arrow', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::HEADING,
						'separator' => 'before',
					]
				);

				//top
				$this->add_responsive_control(
					'bwdcrtplst_arrow_Right_position_vertical_hover',
					[
						'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'top: {{SIZE}}{{UNIT}};',
						],
					]
				);

				//right
				$this->add_responsive_control(
					'bwdcrtplst_arrow_right_position_horizontal_hover',
					[
						'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
						'type' => \Elementor\Controls_Manager::SLIDER,
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
							'{{WRAPPER}} .bwdcrtplst-owl.bwdcrtplst-owl-carousel:hover .bwdcrtplst-owl-nav button.bwdcrtplst-owl-next ' => 'right: {{SIZE}}{{UNIT}};',
						],
					]
				);

			$this->end_popover();

		$this->end_controls_tab();
		$this->end_controls_tabs();



		$this->end_controls_section();




		$this->start_controls_section(
			'bwdcrtplst_catproduct_carousel_dots_style',
			[
				'label' => esc_html__( 'Navigation :: Dots', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'bwdcrtplst_dots_switcher' => 'yes'
				],
			]
		);

		//popover-//dots Navigation
		$this->add_control(
			'bwdcrtplst_dots_popover_style',
			[
				'label' => esc_html__( 'Position', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::POPOVER_TOGGLE,
				'label_off' => esc_html__( 'Default', 'bwd-elementor-addons' ),
				'label_on' => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				'return_value' => 'yes',

			]
		);

		$this->start_popover();

			//top
			$this->add_responsive_control(
				'bwdcrtplst_dots_Right_position_vertical',
				[
					'label' => esc_html__( 'Vertical', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'top: {{SIZE}}{{UNIT}};',
					],
				]
			);

			//left
			$this->add_responsive_control(
				'bwdcrtplst_dots_left_position_horizontal',
				[
					'label' => esc_html__( 'Horizontal', 'bwd-elementor-addons' ),
					'type' => \Elementor\Controls_Manager::SLIDER,
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
						'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'left: {{SIZE}}{{UNIT}};',
					],
				]
			);

		$this->end_popover();

		//dots-gap
		$this->add_responsive_control(
			'bwdcrtplst_dots_gap_ertical',
			[
				'label' => esc_html__( 'Vertical Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'margin-top: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//dots-gap
		$this->add_responsive_control(
			'bwdcrtplst_dots_gap',
			[
				'label' => esc_html__( 'Dots Gap', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:not(:last-child) ' => 'margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//alignment
		$this->add_responsive_control(
			'bwdcrtplst_dots_alignment',
			[
				'label' => esc_html__( 'Alignment', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::CHOOSE,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots' => 'text-align: {{VALUE}}',
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
			'bwdcrtplst_dots_number_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_dots_background_color',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_dots_number_typography',
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot span',
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcrtplst_dots_width',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot ' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcrtplst_dots_height',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_dots_border',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcrtplst_dots_border-radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_dots_box-shadow',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot',
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
			'bwdcrtplst_dots_number_color_active',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_dots_background_color_active',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_dots_number_typography_active',
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active span',
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcrtplst_dots_width_active',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcrtplst_dots_height_active',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_dots_border_active',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcrtplst_dots_border-radius_active',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_dots_box-shadow-active',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot.active',
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
			'bwdcrtplst_dots_number_color_hover',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover span' => 'color: {{VALUE}}',
				],
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//dots-background
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'bwdcrtplst_dots_background_color_hover',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient'],
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover',
			]
		);

		//dots-typography
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bwdcrtplst_dots_number_typography_hover',
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover span',
				'condition' => [
					'bwdcrtplst_dots_type' => 'numbers',
				],
			]
		);

		//width
		$this->add_responsive_control(
			'bwdcrtplst_dots_width_hover',
			[
				'label' => esc_html__( 'Width', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//height
		$this->add_responsive_control(
			'bwdcrtplst_dots_height_hover',
			[
				'label' => esc_html__( 'Height', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
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
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		//border
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'bwdcrtplst_dots_border_hover',
				'label' => esc_html__( 'Border', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover',
			]
		);

		//Border Radius
		$this->add_responsive_control(
			'bwdcrtplst_dots_border-radius_hover',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		//Box Shadow
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'bwdcrtplst_dots_box-shadow-hover',
				'label' => esc_html__( 'Box Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} .bwdcrtplst-owl-dots .bwdcrtplst-owl-dot:hover',
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();

		$this->end_controls_section();


	}
	protected function render() {
		$settings = $this->get_settings_for_display();

		// for-owl-carousel-start
		$bwdcrtplst_slide_margin = $settings['bwdcrtplst_slide_margin'];
		$bwdcrtplst_slide_mobile_view = $settings['bwdcrtplst_slide_mobile_view'];
		$bwdcrtplst_slide_tablet_view = $settings['bwdcrtplst_slide_tablet_view'];
		$bwdcrtplst_slide_desktop_view = $settings['bwdcrtplst_slide_desktop_view'];
		$bwdcrtplst_infinite_autoplay_switcher = $settings['bwdcrtplst_infinite_autoplay_switcher'];
		$bwdcrtplst_infinite_loop_switcher = $settings['bwdcrtplst_infinite_loop_switcher'];
		$bwdcrtplst_HoverPause_switcher = $settings['bwdcrtplst_HoverPause_switcher'];
		$bwdcrtplst_centermode_switcher = $settings['bwdcrtplst_centermode_switcher'];
		$bwdcrtplst_autoplay_timeout = $settings['bwdcrtplst_autoplay_timeout'];
		$bwdcrtplst_autoplay_speed = $settings['bwdcrtplst_autoplay_speed'];
		$bwdcrtplst_stace_padding = $settings['bwdcrtplst_stace_padding'];
		//nav--------------------------------------------------
		$bwdcrtplst_nav_switcher = $settings['bwdcrtplst_nav_switcher'];
		$bwdcrtplst_nav_type = $settings['bwdcrtplst_nav_type'];

		if( $bwdcrtplst_nav_switcher == 'yes' ) {
			if( $bwdcrtplst_nav_type == 'icon' ) {
				$prev = $settings['bwdcrtplst_nav_prev_arrow']['value'];
				$next = $settings['bwdcrtplst_nav_next_arrow']['value'];
			} else if( $bwdcrtplst_nav_type == 'text' ) {
				$prev = $settings['bwdcrtplst_nav_prev_text'];
				$next = $settings['bwdcrtplst_nav_next_text'];
			} 
		}
		$bwdcrtplst_dots_switcher = $settings['bwdcrtplst_dots_switcher'];
		$bwdcrtplst_dots_type = $settings['bwdcrtplst_dots_type'];
		// for-owl-carousel-end

		$bwdcrtplst_products_style = $settings['bwdcrtplst_products_zone_style'];
		$bwdcrtplst_title_tags = $settings['bwdcrtplst_title_tags'];
		$bwdcrtplst_products_perpage = $settings['bwdcrtplst_the_product_per_page'];
		$bwdcrtplst_the_cat_show = $settings['bwdcrtplst_the_cat_show'];
		$bwdcrtplst_the_cat_product = $settings['bwdcrtplst_the_cat_columnsdd'];
		$bwdcrtplst_the_tag_product = $settings['bwdcrtplst_the_tag_columnsdd'];
		$bwdcrtplst_description_words = $settings['bwdcrtplst_description_words'];
		$bwdcrtplst_word_trim_indi = $settings['bwdcrtplst_word_trim_indi'];
		$bwdcrtplst_the_cart_type = $settings['bwdcrtplst_the_cart_type'];
		$bwdcrtplst_cart_button = $settings['bwdcrtplst_cart_button'];

		$bwdcrtplst_sale_label = $settings['bwdcrtplst_sale_label'];
		$bwdcrtplst_type_label = $settings['bwdcrtplst_type_label'];

		$bwdcrtplst_paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Need For Pagination
		$bwdcrtplst_blog_order = $settings['bwdcrtplst_blog_order'];
		$bwdcrtplst_author = $settings['bwdcrtplst_the_all_author'];
		$bwdcrtplst_order_by = $settings['bwdcrtplst_the_order_by'];
		
		$bwdcrtplst_the_all_date = $settings['bwdcrtplst_the_all_date'];
		if('d' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_day = $bwdcrtplst_coustom_month = $bwdcrtplst_coustom_year = $wdbp_time = '';
			$day =  gmdate('d');
			$wdbp_time = ['day'  => $day];
		} elseif('m' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_day = $bwdcrtplst_coustom_month = $bwdcrtplst_coustom_year = $wdbp_time = '';
			$month =  gmdate('m'); 
			$wdbp_time = ['month'  => $month];
		} elseif('y' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_day = $bwdcrtplst_coustom_month = $bwdcrtplst_coustom_year = $wdbp_time = '';
			$year =  gmdate('y');
			$wdbp_time = ['year'  => $year];
		} elseif('coustom' === $bwdcrtplst_the_all_date){
			$bwdcrtplst_coustom_year = $settings['bwdcrtplst_blog_coustom_year'];
			$bwdcrtplst_coustom_month = $settings['bwdcrtplst_blog_coustom_month'];
			$bwdcrtplst_coustom_day = $settings['bwdcrtplst_blog_coustom_day'];
			$wdbp_time = $bwdcrtplst_text_str;
		} else{
			$bwdcrtplst_coustom_day = $bwdcrtplst_coustom_month = $bwdcrtplst_coustom_year = $wdbp_time = '';
		}
		$bwdcrtplst_cont_alignment = $settings['bwdcrtplst_content_alignment'];
		if('left' === $bwdcrtplst_cont_alignment){
			$bwdcrtplst_cont_align = 'bwdcrtplst_taxo_align_left bwdcrtplst_taxo_align_left_j';
		} elseif('center' === $bwdcrtplst_cont_alignment){
			$bwdcrtplst_cont_align = 'bwdcrtplst_taxo_align_center bwdcrtplst_taxo_align_center_j';
		} elseif('right' === $bwdcrtplst_cont_alignment){
			$bwdcrtplst_cont_align = 'bwdcrtplst_taxo_align_right bwdcrtplst_taxo_align_right_j';
		} else{ $bwdcrtplst_cont_align = ' '; }
		if($settings['bwdcrtplst_the_product_stock_or_not'] == 'instock'):
      $bwdcrtplst_product_stock_check = 'instock';
      $bwdcrtplst_product_compre_check = '=';
      elseif($settings['bwdcrtplst_the_product_stock_or_not'] == 'outofstock'):
        $bwdcrtplst_product_stock_check = 'outofstock';
        $bwdcrtplst_product_compre_check = 'IN';
        elseif($settings['bwdcrtplst_the_product_stock_or_not'] == 'both'):
          $bwdcrtplst_product_stock_check = ['instock','outofstock'];
          $bwdcrtplst_product_compre_check = 'IN';
        endif;
		$bwdcrtplst_args = array(
			'post_type'      => 'product',
			'posts_per_page' => $bwdcrtplst_products_perpage,
			'product_cat'    => $bwdcrtplst_the_cat_product,
			'product_tag'    => $bwdcrtplst_the_tag_product,
			'author__in' => $bwdcrtplst_author,
			'orderby'   => $bwdcrtplst_order_by,
			'meta_query' => array(
        array(
          'key' => '_stock_status',
          'value' => $bwdcrtplst_product_stock_check,
          'compare' => $bwdcrtplst_product_compre_check,
        )
      ),
			'order' => $bwdcrtplst_blog_order,
			'post_status' => 'publish',
			'paged' => $bwdcrtplst_paged,
			'date_query' => $wdbp_time,
			'year' => $bwdcrtplst_coustom_year,
			'monthnum' => $bwdcrtplst_coustom_month,
			'day' => $bwdcrtplst_coustom_day,
		);
		if ( in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))):
			if($bwdcrtplst_products_style == 'style1' || $bwdcrtplst_products_style == 'style2'){
				include( __DIR__ . '/product-list-caro/'.$bwdcrtplst_products_style.'.php' );
			}else{
				echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
			}
		else:
			?><a href="https://WordPress.org/plugins/WooCommerce/"><div class="bwdcrtplst_wooc_not_acivate_notice"><?php echo esc_html__('May be you are not installed/activated WooCommerce plugin.', 'bwd-elementor-addons'); ?></div></a><?php
		endif;
	}
	public function bwdcrtplst_product_thumbnail_with_css(){
		$image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'single-post-thumbnail' );
		if(has_post_thumbnail()){
		?>
		<div class="bwdcrtplst_blog_image bwdcrtplst_image_overly_b bwdcrtplst_image_overly_a" style="background-image: url(<?php echo esc_url($image[0]); ?>);"><a class="blog_img-link" href="<?php echo esc_url(get_permalink()); ?>"></a>
		<?php
		} else{
			echo '<div class="bwdcrtplst_text_no bwdcrtplst_blog_image bwdcrtplst_image_overly_b bwdcrtplst_image_overly_a text-center ">' . esc_html__('No Thumbnail', 'bwd-elementor-addons');
		}
	}
}

