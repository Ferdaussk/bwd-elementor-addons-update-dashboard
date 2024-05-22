<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDEB_MTTMeetTheTeamCarousel extends Widget_Base {

	public function get_name() {
		return esc_html__( 'MeetTheTeamCarousel', 'bwd-elementor-addons' );
	}

	public function get_title() {
		return esc_html__( 'Team Carousel', 'bwd-elementor-addons' );
	}

	public function get_icon() {
		return 'bwdeb-elementor-bundle eicon-media-carousel';
	}

	public function get_categories() {
		return [ 'bwdeb_general_category' ];
	}

	public function __construct($data = [], $args = null) {
		parent::__construct($data, $args);
			wp_register_style( 'mtt_slickslider_ssaathe_slick_main_css',  plugin_dir_url(__FILE__). '../assets/public/css/slick/css/slick.css', null, '1.3', 'all' );
		wp_register_script( 'mtt_the_js_minsss', plugin_dir_url( __FILE__ ) . '../assets/public/js/min.js', array('jquery'), '1.3', true );
    }
	public function get_script_depends() {
		return [ 'bwdeb_general_category', 'mtt_the_js_minsss' ];
	}
	

	protected function register_controls() {
		$this->start_controls_section(
			'text_content_section',
			[
				'label' => esc_html__( 'Team Content', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'mtt_style_selection',
			[
				'label' => esc_html__( 'Team Style', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-elementor-addons' ),
					'style2' => esc_html__( 'Style 2 (PRO)', 'bwd-elementor-addons' ),
					'style3' => esc_html__( 'Style 3 (PRO)', 'bwd-elementor-addons' ),
				],
				'description' => 'See <a href="https://bestwpdeveloper.com/team-member-carousel" target="_blank"><b>DEMO</b></a>. Get <a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>PRO...</b></a>.',
			]
		);
		$this->add_control(
			'mtt_meet_the_team_content_width',
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
		$this->end_controls_section();
		
		$this->start_controls_section(
			'mtt_flipflop_step_content_box_section',
			[
				'label' => esc_html__( 'Team Boxes', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);
		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'mtt_box_name', [
				'label' => esc_html__( 'Name', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'JHON DOE' , 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'label_block' => true,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'mtt_title_icon_box_style_tabs_one'
		);
		$repeater->start_controls_tab(
			'mtt_title_icon_box_border_font_tab06',
			[
				'label' => esc_html__( 'Title Style', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'mtt_box_name_color_normal',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_bg_color_normal',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_title_shadow_normal',
				'label' => esc_html__( 'Title Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_name_typography_normal',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_icon_box_border_back_tab06_title',
			[
				'label' => esc_html__( 'Hover Style', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'mtt_box_name_color_hover',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_name_color_bg_hover',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover, {{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover::before' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_title_shadow_hover',
				'label' => esc_html__( 'Title Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_name_typography_hover',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-title:hover',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End
		
		$repeater->add_control(
			'mtt_team_b',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_box_designation', [
				'label' => esc_html__( 'Designation', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Web Developer' , 'bwd-elementor-addons' ),
				'dynamic' => [
					'active' => true,
				],
				'show_label' => false,
			]
		);
		// Hover control start
		$repeater->start_controls_tabs(
			'mtt_designation_icon_box_style_tabs_one'
		);
		$repeater->start_controls_tab(
			'mtt_designation_icon_box_border_font_tab06',
			[
				'label' => esc_html__( 'Designation Style', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		$repeater->add_control(
			'mtt_box_normal_designation_color',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_designation_bg_color_designation_normal',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_normal_designation_shadow',
				'label' => esc_html__( 'Designaion Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_normal_designation_typography',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_designation_icon_box_border_back_tab06',
			[
				'label' => esc_html__( 'Hover Style', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'mtt_box_designation_color_designation_hover',
			[
				'label' => esc_html__( 'Text Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_designation_bg_color_designation_hover',
			[
				'label' => esc_html__( 'Hover Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Text_Shadow::get_type(),
			[
				'name' => 'mtt_designation_shadow_designation_hover',
				'label' => esc_html__( 'Designaion Shadow', 'bwd-elementor-addons' ),
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover',
				'default' => [
					'color' => 'transparent',
				]
			]
		);
		$repeater->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'mtt_box_designation_typography_designation_hover',
				'selector' => '{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-team-post:hover',
			]
		);
		
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End

		$repeater->add_control(
			'mtt_team_c',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_team_profile_image',
			[
				'label' => esc_html__( 'Choose Image', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [
					'url' => plugin_dir_url(__DIR__) .'assets/public/img/bwd-placeholder.jpg',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_profile_background_color',
			[
				'label' => esc_html__( 'Overlay', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_bwd_team_profile_background::before' => 'background: {{VALUE}}',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_d',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		// Hover control start
		$repeater->start_controls_tabs(
			'mtt_team_icon_box_style_tabs06'
		);
		$repeater->start_controls_tab(
			'mtt_team_icon_box_background_normal_tab06',
			[
				'label' => esc_html__( 'Font Icon', 'bwd-elementor-addons' ),
			]
		);
		// Normal Controls
		
		$repeater->add_control(
			'mtt_social_icon_font_main',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fa fa-globe',
					'library' => 'solid',
				],
			]
		);
		$repeater->add_control(
			'mtt_globe_icon_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-team-circle .mtt-team-layer' => 'border-color: {{VALUE}}',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-font-icon' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_responsive_control(
			'mtt_team_font_the_icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-font-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$repeater->add_control(
			'mtt_globe_icon_bgcolor',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-bwd-font-icon-bg' => 'background: {{VALUE}}',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->start_controls_tab(
			'mtt_icon_box_back_hover_tab06',
			[
				'label' => esc_html__( 'Hover Social Icon', 'bwd-elementor-addons' ),
			]
		);
		// Hover Controls
		$repeater->add_control(
			'mtt_social_icon_one_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook-f',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_one',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#3b5998',
				'condition' => [
					'mtt_team_icon_type_one' => 'official',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_one' => 'official',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_one' => 'custom',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_one' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_one' => 'custom',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_one:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_backg_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_1' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_one_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_one' => 'custom',
					'mtt_social_icon_one_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.facebook.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_e',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_social_icon_two_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-twitter',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_two',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#00acee',
				'condition' => [
					'mtt_team_icon_type_two' => 'official',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_two' => 'official',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_two' => 'custom',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_two' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_two' => 'custom',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_two:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_back_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_2' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_two_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_two' => 'custom',
					'mtt_social_icon_two_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.twitter.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_f',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_social_icon_three_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-linkedin-in',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_three',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => '#0077b5',
				'condition' => [
					'mtt_team_icon_type_three' => 'official',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_three' => 'official',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_three' => 'custom',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_three' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_three' => 'custom',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_three:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_backgr_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_3' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_three_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_three' => 'custom',
					'mtt_social_icon_three_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.linkedin.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_g',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_social_icon_four_switcher',
			[
				'label' => esc_html__( 'Hide This', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'bwd-elementor-addons' ),
				'label_off' => esc_html__( 'Hide', 'bwd-elementor-addons' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four',
			[
				'label' => esc_html__( 'Icon', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-instagram',
					'library' => 'solid',
				],
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_icon_type_four',
			[
				'label' => esc_html__( 'Color Type', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'custom',
				'options' => [
					'official' => esc_html__( 'Official', 'bwd-elementor-addons' ),
					'custom'  => esc_html__( 'Custom', 'bwd-elementor-addons' ),
				],
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_color_official',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'default' => 'red',
				'condition' => [
					'mtt_team_icon_type_four' => 'official',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_link_official',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_four' => 'official',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_color',
			[
				'label' => esc_html__( 'Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_four' => 'custom',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_four' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_hover_color',
			[
				'label' => esc_html__( 'Hover Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_team_icon_type_four' => 'custom',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_four:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_backgro_color',
			[
				'label' => esc_html__( 'Background Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'condition' => [
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt-social .mtt_social_media_4' => 'background: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_social_icon_four_link',
			[
				'label' => esc_html__( 'Link', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::URL,
				'condition' => [
					'mtt_team_icon_type_four' => 'custom',
					'mtt_social_icon_four_switcher' => 'yes',
				],
				'placeholder' => esc_html__( 'your-link.com', 'bwd-elementor-addons' ),
				'default' => [
					'url' => 'www.instagram.com',
					'is_external' => true,
					'nofollow' => true,
					'custom_attributes' => '',
				],
			]
		);

		$repeater->add_control(
			'mtt_team_h',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);
		
		$repeater->add_control(
			'mtt_social_icon_border_color',
			[
				'label' => esc_html__( 'Border Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-34-area .mtt-team-style-34-team .mtt-team-content .mtt-social a, {{WRAPPER}} .mtt-team-style-33-area .mtt-team-style-33-team .mtt-team-content .mtt-social a, {{WRAPPER}} .mtt-team-style-32-area .mtt-team-style-32-team .mtt-team-content .mtt-social a' => 'border-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_team_all_the_social_icon_size',
			[
				'label' => esc_html__( 'Social Icon Size', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_one' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_two' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_three' => 'font-size: {{SIZE}}{{UNIT}};',
					'{{WRAPPER}} {{CURRENT_ITEM}} .mtt_social_media_four' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$repeater->end_controls_tab();
		$repeater->end_controls_tabs();
		// Hover Control End


		$repeater->add_control(
			'mtt_team_hq',
			[
				'type' => Controls_Manager::DIVIDER,
			]
		);

		$repeater->add_control(
			'mtt_box_icon_background_color',
			[
				'label' => esc_html__( 'Carousel Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-34-area .slick-dots li.slick-active button, {{WRAPPER}} .mtt-team-style-32-area .slick-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .slick-arrow i, {{WRAPPER}} {{CURRENT_ITEM}} .slick-dots li.slick-active button' => 'color: {{VALUE}}'
				],
			]
		);
		$repeater->add_control(
			'mtt_icon_bg_shape_color',
			[
				'label' => esc_html__( 'Hover/Active Color', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-34-area .slick-dots li.slick-active button, {{WRAPPER}} .mtt-team-style-33-area .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
				],
			]
		);
		$repeater->add_control(
			'mtt_box_icon_hover_background_color',
			[
				'label' => esc_html__( 'Carousel Background', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .mtt-team-style-32-area .slick-arrow, {{WRAPPER}} {{CURRENT_ITEM}} .site .button:not(:hover):not(:active):not(.has-background), button:not(:hover):not(:active):not(.has-background), input[type=submit]:not(:hover):not(:active):not(.has-background), input[type=reset]:not(:hover):not(:active):not(.has-background), .wp-block-search .wp-block-search__button:not(:hover):not(:active):not(.has-background), .wp-block-button .wp-block-button__link:not(:hover):not(:active):not(.has-background), .wp-block-file a.wp-block-file__button:not(:hover):not(:active):not(.has-background)' => 'background: {{VALUE}}'
				],
			]
		);

		$this->add_control(
			'mtt_box',
			[
				'label' => esc_html__( 'Meet The Team', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'mtt_box_name' => esc_html__( 'Jhon Doe', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Smith Jhon', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Robin Smith', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Json Doe', 'bwd-elementor-addons' ),
					],
					[
						'mtt_box_name' => esc_html__( 'Roky', 'bwd-elementor-addons' ),
					],
				],
				'title_field' => '{{{ mtt_box_name }}}',
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'mtt_team_style_section',
			[
				'label' => esc_html__( 'Team Style', 'bwd-elementor-addons' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'mtt_team_box_background',
				'label' => esc_html__( 'Background', 'bwd-elementor-addons' ),
				'types' => [ 'classic', 'gradient', 'video' ],
				'selector' => '{{WRAPPER}} .mtt-bwd-box-class1',
			]
		);
		$this->add_responsive_control(
            'mtt_team_the_box_margin',
            [
                'label' => esc_html__('Margin', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-bwd-box-class1' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
            'mtt_team_the_box_padding',
            [
                'label' => esc_html__('Padding', 'bwd-elementor-addons'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', 'rem', '%'],
                'selectors' => [
                    '{{WRAPPER}} .mtt-bwd-box-class1' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
		$this->add_responsive_control(
			'mtt_team_the_box_border_radius',
			[
				'label' => esc_html__( 'Border Radius', 'bwd-elementor-addons' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'devices' => [ 'desktop', 'laptop', 'tablet', 'tablet_extra', 'mobile', 'mobile_extra' ],
				'selectors' => [
					'{{WRAPPER}} .mtt-bwd-box-class' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$mtt_content_width = $settings['mtt_meet_the_team_content_width'];
		if('full_width' === $mtt_content_width){
			$mtt_content_c_f = 'container-fluid';
		} elseif('boxed' === $mtt_content_width){
			$mtt_content_c_f = 'container';
		}
		// Social Link
		if ( ! empty( $settings['mtt_social_icon_one_link']['url'] ) ) {
			$this->add_link_attributes( 'mtt_social_icon_one_link', $settings['mtt_social_icon_one_link'] );
		}
		if('style1' == $settings['mtt_style_selection'] || 'style2' == $settings['mtt_style_selection']){
		if('style1' === $settings['mtt_style_selection']){
			?>
			<div class="mtt-team-style-32-area mtt-bwd-box-class1">
				<div class="<?php echo esc_attr($mtt_content_c_f); ?>">
					<div class="row team-style-32-active">
						<?php
						if ( $settings['mtt_box'] ) {
							foreach (  $settings['mtt_box'] as $item ) {
						echo '<div class="col-lg-4 col-xl-3 col-sm-6 elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
							<div class="mtt-team-style-32-team mtt-bwd-box-class">
								<div class="mtt-pic">
									<img src="<?php echo esc_url($item['mtt_team_profile_image']['url']); ?>" alt="Image">
								</div>
								<div class="mtt-team-style-icon mtt-bwd-font-icon-bg">
									<div class="mtt-icon mtt-bwd-font-icon <?php echo esc_attr( $item['mtt_social_icon_font_main']['value'] ); ?>"></div>
									<div class="mtt-team-inner">
										<div class="mtt-team-border mtt-team-border-top"></div>
										<div class="mtt-team-border mtt-team-border-right"></div>
										<div class="mtt-team-border mtt-team-border-bottom"></div>
										<div class="mtt-team-border mtt-team-border-left"></div>
									</div>
								</div>
								<div class="mtt-team-content">
									<div class="mtt-title mtt-bwd-team-title"><?php echo esc_html($item['mtt_box_name']); ?></div>
									<div class="mtt-post mtt-bwd-team-post"><?php echo esc_html($item['mtt_box_designation']); ?></div>
									<div class="mtt-social">
										<?php if('yes' === $item['mtt_social_icon_one_switcher']){ ?><a class="mtt_social_media_1" href="<?php echo esc_url($item['mtt_social_icon_one_link']['url']); ?>"><i class="mtt_social_media_one <?php echo esc_attr( $item['mtt_social_icon_one']['value'] ); ?>"></i></a> <?php } ?>
										<?php if('yes' === $item['mtt_social_icon_two_switcher']){ ?><a class="mtt_social_media_2" href="<?php echo esc_url($item['mtt_social_icon_two_link']['url']); ?>"><i class="mtt_social_media_two <?php echo esc_attr( $item['mtt_social_icon_two']['value'] ); ?>"></i></a> <?php } ?>
										<?php if('yes' === $item['mtt_social_icon_three_switcher']){ ?><a class="mtt_social_media_3" href="<?php echo esc_url($item['mtt_social_icon_three_link']['url']); ?>"><i class="mtt_social_media_three <?php echo esc_attr( $item['mtt_social_icon_three']['value'] ); ?>"></i></a> <?php } ?>
										<?php if('yes' === $item['mtt_social_icon_four_switcher']){ ?><a class="mtt_social_media_4" href="<?php echo esc_url($item['mtt_social_icon_four_link']['url']); ?>"><i class="mtt_social_media_four <?php echo esc_attr( $item['mtt_social_icon_four']['value'] ); ?>"></i></a> <?php } ?>
									</div>
								</div>
							</div>
						</div>
						<?php
							}
						}
						?>
					</div>
				</div>
			</div>
		<?php
		}
	}else{
		echo '<h1 class="bwd_pro_notice">'.esc_html__('Ohh!!! It\'s ', 'bwd-elementor-addons').'<a href="https://bestwpdeveloper.com/pricing/" target="_blank"><b>'.esc_html__(' PRO...', 'bwd-elementor-addons').'</b></a></h1>';
	}
	}
}
