<?php
/**
 * 
 * @admin ~~// this is the dashboard integrations tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div id="integrations" class="bwd-admin-setting-tab">
		<div class="bwd-integrations-container bwd-grid">
			<?php
			$plugins = $this->bwdeb_fetch_specific_plugins();
			if (!empty($plugins)) {
				foreach ($plugins as $plugin) {
					error_log("Plugin data: " . print_r($plugin, true));
					$icon_url = isset($plugin['icons']['default']) ? $plugin['icons']['default'] : (isset($plugin['icons']['1x']) ? $plugin['icons']['1x'] : '');
					$short_description = isset($plugin['short_description']) ? $plugin['short_description'] : '';
					$plugin_file = $plugin['slug'] . '/' . $plugin['slug'] . '.php';
					?>
					<div class="bwd-col-xl-3">
						<div class="bwd-integrations-wrap">
							<?php
							if ($icon_url) {
								echo '<img src="' . esc_url($icon_url) . '" alt="' . esc_attr($plugin['name']) . '" style="width: 50px; height: 50px; float: left; margin-right: 10px;">';
							} else {
								echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/Icon.svg').'" alt="">';
							}
							?>
							<h3><?php echo esc_html($plugin['name']); ?></h3>
							<p><?php echo !empty($short_description)?esc_html($short_description):'Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.';?></p>
							<div class="bwd-integrations-button">
								<?php 
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
								?>
							</div>
						</div>
					</div>
					<?php
				}
			} else {
				echo '<p>' . esc_html__('No plugins found.', 'bwd-elementor-addons') . '</p>';
			}
			?>
		</div>
	</div>