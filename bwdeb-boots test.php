<?php
namespace BWDEBCreativeElementorBundle;

class BWDEBClassElementorBundle {
    private static $_instance = null;
    private $registered_widgets = array();

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function include_widgets_files() {
        $widgetFileNames = ['team-bwdeb.php']; // Adjust this line based on your actual widget files
        foreach ($widgetFileNames as $widget) {
            require_once(__DIR__ . '/widgets/' . $widget);
        }
    }

    public function bwdeb_register_widgets() {
        $this->include_widgets_files();
        $bwdeb_pp_meet_the_team = get_option('bwdeb-plugin-meet-the-team', 'off');
        if ($bwdeb_pp_meet_the_team == 'on') {
            $widget_class = '\BWDEBCreativeElementorBundle\Widgets\BWDEB_MTTMeetTheTeam';
            $widget_instance = new $widget_class();
            $widget_name = $widget_instance->get_name();
            if (!in_array($widget_name, $this->registered_widgets)) {
                $this->registered_widgets[] = $widget_name;
            }
            \Elementor\Plugin::instance()->widgets_manager->register($widget_instance);
        }
    }
    
    public function bwdeb_add_elementor_widget_categories($elements_manager) {
        $elements_manager->add_category(
            'bwdeb_general_category',
            [
                'title' => esc_html__('BWD General Group', 'bwd-elementor-addons'),
                'icon' => 'eicon-person',
            ]
        );
    }

    public function bwdeb_all_assets_for_dashboard_admin() {
        wp_enqueue_script('bwdtsk-ajax-script', plugin_dir_url(__FILE__) . 'assets/admin/dashboard/ajax-save.js', ['jquery'], '3.6.0', true);
        wp_localize_script('bwdtsk-ajax-script', 'bwdtsk_ajax_object', [
            'ajax_url' => admin_url('admin-ajax.php'),
            'security' => wp_create_nonce('bwdtsk_ajax_nonce')
        ]);
    }

    public function bwdeb_admin_menu_test() {
        if (current_user_can('manage_options')) {
            add_menu_page(
                esc_html__('BWD Elementor Addons', 'bwd-elementor-addons'),
                esc_html__('BWD Elementor Addons', 'bwd-elementor-addons'),
                'manage_options',
                'bwdeb-plugin-main-menu',
                array($this, 'bwdeb_plugin_settings_page'),
                '', // You can add an icon URL here
                25
            );
        }
    }

    public function bwdeb_admin_controls() {
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__('BWD Elementor Addons', 'bwd-elementor-addons') . '</h1>';
        echo '<div class="bwd-save-settings-button">';
        echo '<div class="save-toast-message"></div>';
        echo '<button class="bwd-save-button" id="bwdtsk-save-settings">' . esc_html__('Save Changes', 'bwd-elementor-addons') . '</button>';
        echo '</div>';

        if (!empty($this->registered_widgets)) {
            foreach ($this->registered_widgets as $widget_name) {
                $option_name = 'bwdeb-plugin-' . str_replace('bwdeb_', '', $widget_name);
                $option_name_key = str_replace('bwdeb-plugin-', 'bwdeb_', $option_name);
                $checked = get_option($option_name, 'off') === 'on' ? 'checked' : '';
                $usage_count = get_option($option_name_key . '_usage_count', 0);

                echo '<label class="bwd-widget-switch">';
                echo '<input type="checkbox" name="' . esc_attr($option_name) . '" id="' . esc_attr($option_name) . '" ' . $checked . '> ' . esc_html__($widget_name, 'bwd-elementor-addons');
                echo '<div class="count-uses-widgets-number">' . esc_html($usage_count) . '</div>';
                echo '</label><br>';
            }
        } else {
            echo 'No registered widgets found.';
        }

        echo '</div>'; // Closing wrap div
    }

    public function bwdeb_plugin_settings_page() {
        $this->bwdeb_admin_controls();
    }

    public function bwdeb_plugin_function_for_datas_callback() {
        check_ajax_referer('bwdtsk_ajax_nonce', 'security');
        if (current_user_can('manage_options')) {
            $checkboxes = [
                'bwdeb-plugin-meet-the-team',
                'bwdeb-plugin-another-option',
                'bwdeb-plugin-third-option',
                'bwdeb-plugin-fourth-option',
                'bwdeb-plugin-fifth-option',
                'bwdeb-plugin-sixth-option',
                'bwdeb-plugin-seventh-option',
                'bwdeb-plugin-eighth-option',
                'bwdeb-plugin-ninth-option',
                'bwdeb-plugin-tenth-option'
            ];
            foreach ($checkboxes as $option_name) {
                $value = isset($_POST[$option_name]) && $_POST[$option_name] === 'on' ? 'on' : 'off';
                update_option($option_name, $value);
            }
            wp_send_json_success(['message' => 'Settings saved successfully!']);
        } else {
            wp_send_json_error(['message' => 'Permission denied.']);
        }
        wp_die();
    }

    public function bwdeb_track_widget_usage($widget) {
        if ($widget->get_name() === 'bwdeb_mtt_meet_the_team') {
            $count = get_option('bwdeb_mtt_meet_the_team_usage_count', 0);
            update_option('bwdeb_mtt_meet_the_team_usage_count', $count + 1);
        }
    }

    public function __construct() {
        add_action('admin_menu', [$this, 'bwdeb_admin_menu_test']);
        add_action('admin_enqueue_scripts', [$this, 'bwdeb_all_assets_for_dashboard_admin']);
        add_action('elementor/elements/categories_registered', [$this, 'bwdeb_add_elementor_widget_categories']);
        add_action('after_setup_theme', function() {
            if (!class_exists('ProbwdelementorBundle')) {
                add_action('elementor/widgets/register', [$this, 'bwdeb_register_widgets']);
                add_action('elementor/frontend/widget/before_render', [$this, 'bwdeb_track_widget_usage']);
            }
        });
        add_action('wp_ajax_bwdtsk_save_settings', [$this, 'bwdeb_plugin_function_for_datas_callback']);
    }
}

BWDEBClassElementorBundle::instance();
