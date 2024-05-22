<?php
/**
 * 
 * @admin ~~// this is the dashboard license tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;

echo '<div id="license" class="bwd-admin-setting-tab">';
		echo '<div class="bwd-license-container">';
			echo '<div class="bwd-license-content">';
				echo '<h3>'.esc_html__('Free vs Pro Table','bwd-elementor-addons').'</h3>';
				echo '<span>'.esc_html__('You can explore the feature that we provied with fun and have their own functions each feature.','bwd-elementor-addons').'</span>';
			echo '</div>';
			echo '<div class="bwd-license-table-area">';
				echo '<table>';
					echo '<tbody>';
						echo '<tr>';
							echo '<td class="bwd-table-title"></td>';
							echo '<td class="bwd-head-title"><h4>'.esc_html__('Free','bwd-elementor-addons').'</h4></td>';
							echo '<td class="bwd-head-title"><h4>'.esc_html__('Pro','bwd-elementor-addons').'</h4></td>';
						echo '</tr>';
						foreach($getLicense as $license=>$getL):
						echo '<tr>';
							echo '<td class="bwd-table-title"><span>'.$getL['name'].'</span></td>';
							if($getL['free']=='yes'){
								echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/cross.svg').'" alt="Img"></td>';
							} elseif($getL['free']=='no'){
								echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/right.svg').'" alt="Img"></td>';
							}else{
								echo '<td><h4>'.$getL['free'].'</h4></td>';
							}
							if($getL['pro']=='yes'){
								echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/right.svg').'" alt="Img"></td>';
							} elseif($getL['pro']=='no'){
								echo '<td><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/cross.svg').'" alt="Img"></td>';
							}else{
								echo '<td><h4>'.$getL['pro'].'</h4></td>';
							}
						echo '</tr>';
						endforeach;
					echo '</tbody>';
				echo '</table>';
			echo '</div>';
			echo '<div class="bwd-license-buttton">';
				echo '<a href="https://bestwpdeveloper.com/pricing/">'.esc_html__('Purchase Now','bwd-elementor-addons').'</a>';
			echo '</div>';
		echo '</div>';
	echo '</div>';