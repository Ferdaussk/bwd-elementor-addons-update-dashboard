<?php
namespace BWDEBCreativeElementorBundle\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

class BWDEB_MTTMeetTheTeam extends Widget_Base {
    public function get_name() {
        return 'bwdeb_mtt_meet_the_team';
    }

    public function get_title() {
        return __('Meet The Team', 'bwd-elementor-addons');
    }

    public function get_icon() {
        return 'eicon-person';
    }

    public function get_categories() {
        return ['bwdeb_general_category'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'bwd-elementor-addons'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title',
            [
                'label' => __('Title', 'bwd-elementor-addons'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Meet The Team', 'bwd-elementor-addons'),
                'placeholder' => __('Type your title here', 'bwd-elementor-addons'),
            ]
        );

        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $widget_name = $this->get_name();
        echo $widget_name;
    
        // Update the usage count
        $count = get_option('bwdeb_' . $widget_name . '_usage_count', 0);
        update_option('bwdeb_' . $widget_name . '_usage_count', $count + 1);
    
        echo '<div class="bwdeb-meet-the-team">';
        echo '<h2>' . esc_html($settings['title']) . '</h2>';
        echo '</div>';
    }
    

}
