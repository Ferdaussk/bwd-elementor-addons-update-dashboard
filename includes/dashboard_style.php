<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$general_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('General Widgets (<div class="widgetCount"></div>)').'</h3></div>';
$cv_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('CV Builder (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h3></div>';
$hero_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Hero Sections (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h3></div>';
$blog_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Blog Widgets (<div class="widgetCount"></div>)', 'bwd-elementor-addons').'</h3></div>';
$woo_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Woocommerce Widgets (<div class="widgetCount"></div>)', 'bwd-elementor-addons').'</h3></div>';
$ext_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Extensions (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h3></div>';
$all_T = [$general_W,$cv_W,$hero_W,$blog_W,$woo_W,$ext_W];
$generalTitles = ['Changelog','Widgets Bar','What\'s New','New Template','Request For Review','Request A Feature','System Requirement','Documentation','Show your Love'];
echo '<div class="bwd-dashboard-template-container">';
	echo '<div class="bwd-title-banner bwd-grid">';
		echo '<div class="bwd-col-xl-7">';
			echo '<div class="bwd-logo-title-banner">';
				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/images/logo.png').'" alt="BWD Logo">';
				echo '<h1>'.esc_html__('BWD Elementor Addon Settings', 'bwd-elementor-addons').'</h1>';
			echo '</div>';
		echo '</div>';
		echo '<div class="bwd-col-xl-5">';
			echo '<div class="bwd-save-settings-button">';
			echo '<div class="save-toast-message"></div>';
				if(class_exists( 'ProbwdelementorBundle' )):
					echo '<a class="bwd-save-button" href="'.esc_url(admin_url( 'admin.php?page=bwdproeb-license-settings' )).'">';
						echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/key.svg').'" style="fill: white;" alt="'.esc_attr('Go License').'">';
						echo '<span>'.esc_html__('Go License', 'bwd-elementor-addons').'</span>';
					echo '</a>';
				else:
					echo '<a class="bwd-save-button" href="https://bestwpdeveloper.com/pricing" target="_blank">';
						echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/get-pro-icon.svg').'" alt="'.esc_attr__('Get Pro', 'bwd-elementor-addons').'">';
						echo '<span>'.esc_html__('Get Pro', 'bwd-elementor-addons').'</span>';
					echo '</a>';
				endif;
				echo '<button class="bwd-save-button" id="bwdtsk-save-settings">'.esc_html__('Save Changes', 'bwd-elementor-addons').'</button>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	$bwdTabs = [
		[
			'id'=>'general',
			'name'=>esc_html__('Dashboard', 'bwd-elementor-addons')
		],
		[
			'id'=>'widgets',
			'name'=>esc_html__('Core Widgets', 'bwd-elementor-addons')
		],
		[
			'id'=>'extension',
			'name'=>esc_html__('Extensions', 'bwd-elementor-addons')
		],
		[
			'id'=>'integrations',
			'name'=>esc_html__('Integrations', 'bwd-elementor-addons')
		],
		[
			'id'=>'extrasettings',
			'name'=>esc_html__('Extra Settings', 'bwd-elementor-addons')
		],
		[
			'id'=>'license',
			'name'=>esc_html__('License', 'bwd-elementor-addons')
		]
	];
	echo '<div class="bwd-main-tab">';
		echo '<ul class="bwd-tab-menu">';
		foreach($bwdTabs as $tabID=>$getTAb):
			echo '<li class="bwd-tab-list">';
				echo '<a href="#'.$getTAb['id'].'">'.$getTAb['name'].'</a>';
			echo '</li>'; 
		endforeach;
		echo '</ul>';
	echo '</div>';
	include 'tabs/imp/arrays.php';
	echo '<div class="bwd-admin-setting-tabs">';
		foreach($bwdTabs as $path=>$getPath):
		include 'tabs/'.$getPath['id'].'.php';
		endforeach;
	echo '</div>';
echo '</div>';
