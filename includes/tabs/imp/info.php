<?php


// Use counter
function count_widget_usage() {
    $widget_count = 0;

    // Get all posts with Elementor data
    $args = array(
        'post_type'      => 'post', // Change post type if necessary
        'posts_per_page' => -1,
        'meta_key'       => '_elementor_data',
    );

    $posts = get_posts($args);

    foreach ($posts as $post) {
        $elementor_data = get_post_meta($post->ID, '_elementor_data', true);
		var_dump($elementor_data);
        // Loop through each section in Elementor data
        foreach ($elementor_data as $element) {
            if (isset($element['elements'])) {
                foreach ($element['elements'] as $element_item) {
                    // Check if the widget is present
                    if (isset($element_item['widgetType']) && $element_item['widgetType'] === 'BWDEB_MTTMeetTheTeam') {
                        $widget_count++;
                    }
                }
            }
        }
    }

    return $widget_count;
}

$usage_count = count_widget_usage();
echo 'Widget BWDEB_MTTMeetTheTeam is used ' . $usage_count . ' times.';












// Display specific plugins from WordPress.org
$plugins = $this->bwdeb_fetch_specific_plugins();
if (!empty($plugins)) {
	echo '<h2>' . esc_html__('Recommended Plugins', 'bwd-elementor-addons') . '</h2>';
	echo '<ul style="list-style-type:none;">';
	foreach ($plugins as $plugin) {
		echo '<span>' . (isset($plugin['short_description']) ? esc_html($plugin['short_description']) : esc_html__('No description available', 'bwd-elementor-addons')) . '</span><br>';
		error_log("Plugin data: " . print_r($plugin, true)); // Debug output

		$icon_url = isset($plugin['icons']['default']) ? $plugin['icons']['default'] : (isset($plugin['icons']['1x']) ? $plugin['icons']['1x'] : '');
		$short_description = isset($plugin['short_description']) ? $plugin['short_description'] : '';

		echo '<li style="margin-bottom: 20px;">';
		if ($icon_url) {
			echo '<img src="' . esc_url($icon_url) . '" alt="' . esc_attr($plugin['name']) . '" style="width: 50px; height: 50px; float: left; margin-right: 10px;">';
		} else {
			error_log("Icon URL not found for plugin: " . $plugin['name']);
		}
		echo '<strong>' . esc_html($plugin['name']) . '</strong><br>';
		echo '<span>' . esc_html($short_description) . '</span><br>';

		$plugin_file = $plugin['slug'] . '/' . $plugin['slug'] . '.php';

		if (file_exists(WP_PLUGIN_DIR . '/' . $plugin_file)) {
			if (is_plugin_active($plugin_file)) {
				// Uninstall link
				$deactivate_url = wp_nonce_url(admin_url('plugins.php?action=deactivate&plugin=' . urlencode($plugin_file)), 'deactivate-plugin_' . $plugin_file);
				echo '<a href="' . esc_url($deactivate_url) . '" title="' . esc_attr($plugin['name']) . '">' . esc_html__('Deactivate', 'bwd-elementor-addons') . '</a>';
			} else {
				$activate_url = wp_nonce_url(admin_url('plugins.php?action=activate&plugin=' . urlencode($plugin_file)), 'activate-plugin_' . $plugin_file);
				echo '<a href="' . esc_url($activate_url) . '" title="' . esc_attr($plugin['name']) . '">' . esc_html__('Activate', 'bwd-elementor-addons') . '</a>';
			}
		} else {
			echo '<a href="' . esc_url(admin_url('plugin-install.php?tab=plugin-information&plugin=' . $plugin['slug'] . '&TB_iframe=true&width=600&height=550')) . '" class="thickbox" title="' . esc_attr($plugin['name']) . '">' . esc_html__('Install Now', 'bwd-elementor-addons') . '</a>';
		}

		echo '</li>';
	}
	echo '</ul>';
} else {
	echo '<p>' . esc_html__('No plugins found.', 'bwd-elementor-addons') . '</p>';
}








// Get last 2 info from array
$lastTwo = array_slice($getLicense, -2);
$lastTwoIdsAndNames = array_map(function($item) {
    return ['id' => $item['id'], 'name' => $item['name']];
}, $lastTwo);
print_r($lastTwoIdsAndNames);











private $registered_widgets = [];

public function bwdeb_register_widgets() {
    $this->include_widgets_files();
    $bwdeb_pp_meet_the_team = get_option('bwdeb-plugin-meet-the-team', 'off');
    if ($bwdeb_pp_meet_the_team == 'on') {
        $widget_name = 'bwdeb_mtt_meet_the_team'; // Adjust this with your widget name
        $this->registered_widgets[] = $widget_name;
        \Elementor\Plugin::instance()->widgets_manager->register(new \BWDEBCreativeElementorBundle\Widgets\BWDEB_MTTMeetTheTeam());
    }
}

public function bwdeb_admin_controls() {
    foreach ($this->registered_widgets as $widget_name) {
        $option_name_key = str_replace('bwdeb-plugin-', 'bwdeb_', $widget_name);
        // Other code for admin controls
    }
}
