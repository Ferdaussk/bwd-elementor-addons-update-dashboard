<?php
namespace BWDEBCreativeElementorBundle;

class BWDEBClassElementorBundle {
    private static $_instance = null;

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
            \Elementor\Plugin::instance()->widgets_manager->register(new Widgets\BWDEB_MTTMeetTheTeam());
        }
    }

    function bwdeb_add_elementor_widget_categories($elements_manager) {
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
        $options = [
            'bwdeb-plugin-meet-the-team' => get_option('bwdeb-plugin-meet-the-team', 'off'),
            'bwdeb-plugin-another-option' => get_option('bwdeb-plugin-another-option', 'off'),
            'bwdeb-plugin-another-option2' => get_option('bwdeb-plugin-another-option2', 'off'),
        ];
        echo '<div class="wrap">';
        echo '<h1>' . esc_html__('BWD Elementor Addons', 'bwd-elementor-addons') . '</h1>';
        echo '<div class="bwd-save-settings-button">';
        echo '<div class="save-toast-message"></div>';
        echo '<button class="bwd-save-button" id="bwdtsk-save-settings">' . esc_html__('Save Changes', 'bwd-elementor-addons') . '</button>';
        echo '</div>';
        echo '<label class="bwd-widget-switch">';
        echo '<input type="checkbox" name="bwdeb-plugin-meet-the-team" id="bwdeb-plugin-meet-the-team" ' . checked($options['bwdeb-plugin-meet-the-team'], 'on', false) . '> ' . esc_html__('Meet the Team', 'bwd-elementor-addons');
        echo '</label>';
        echo '<label class="bwd-widget-switch">';
        echo '<input type="checkbox" name="bwdeb-plugin-another-option" id="bwdeb-plugin-another-option" ' . checked($options['bwdeb-plugin-another-option'], 'on', false) . '> ' . esc_html__('Another Option', 'bwd-elementor-addons');
        echo '</label>';
        echo '<label class="bwd-widget-switch">';
        echo '<input type="checkbox" name="bwdeb-plugin-another-option2" id="bwdeb-plugin-another-option2" ' . checked($options['bwdeb-plugin-another-option2'], 'on', false) . '> ' . esc_html__('Another Option2', 'bwd-elementor-addons');
        echo '</label>';
        echo '</div>';
    }

    public function bwdeb_plugin_settings_page() {
        $this->bwdeb_admin_controls();
    }

    public function bwdeb_plugin_function_for_datas_callback() {
        check_ajax_referer('bwdtsk_ajax_nonce', 'security');
        if (current_user_can('manage_options')) {
            $switchValues = [
                'bwdeb-plugin-meet-the-team' => isset($_POST['bwdeb_plugin_meet_the_team']) && $_POST['bwdeb_plugin_meet_the_team'] === 'on' ? 'on' : 'off',
                'bwdeb-plugin-another-option' => isset($_POST['bwdeb_plugin_another_option']) && $_POST['bwdeb_plugin_another_option'] === 'on' ? 'on' : 'off',
                'bwdeb-plugin-another-option2' => isset($_POST['bwdeb_plugin_another_option2']) && $_POST['bwdeb_plugin_another_option2'] === 'on' ? 'on' : 'off',
            ];
            update_option('bwdeb-plugin-meet-the-team', $switchValues['bwdeb-plugin-meet-the-team']);
            update_option('bwdeb-plugin-another-option', $switchValues['bwdeb-plugin-another-option']);
            update_option('bwdeb-plugin-another-option2', $switchValues['bwdeb-plugin-another-option2']);
            wp_send_json_success(array('message' => 'Settings saved successfully!'));
        } else {
            wp_send_json_error(array('message' => 'Permission denied.'));
        }
        wp_die();
    }

    public function __construct() {
        add_action('admin_menu', [$this, 'bwdeb_admin_menu_test']);
        add_action('admin_enqueue_scripts', [$this, 'bwdeb_all_assets_for_dashboard_admin']);
        add_action('elementor/elements/categories_registered', [$this, 'bwdeb_add_elementor_widget_categories']);
        add_action('after_setup_theme', function() {
            if (!class_exists('ProbwdelementorBundle')) {
                add_action('elementor/widgets/register', [$this, 'bwdeb_register_widgets']);
            }
        });
        add_action('wp_ajax_bwdtsk_save_settings', [$this, 'bwdeb_plugin_function_for_datas_callback']);
    }
}

BWDEBClassElementorBundle::instance();
// fghffgdsfgarergdsfgwe54rgfdsfgrt5yretghftgh rtyhrty rt yhthyrthfgher6t5yuhrjkk8,o6m8nikj7b6rthytwgerwby5twr