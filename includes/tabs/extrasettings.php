<?php
/**
 * 
 * @admin ~~// this is the dashboard extrasettings tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;

echo '<div id="extrasettings" class="bwd-admin-setting-tab">';
		echo '<div class="bwd-extrasettings-container bwd-grid">';
			foreach($extraStng as $keys=>$getExtra):
			echo '<div class="bwd-col-xl-4">';
				echo '<div class="bwd-extrasettings-wrap">';
					$freeProText = $generalWidget['free_pro']==true?esc_html__('Free/Pro','bwd-elementor-addons'):esc_html__('Pro','bwd-elementor-addons');
					echo '<div class="bwd-widget-pro-badge">'.$freeProText.'</div>';
					echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).$getExtra['logo']).'" alt="">';
					echo '<h3>'.$getExtra['name'].'</h3>';
					echo '<span>If you combine your js and css and load in a single file so enable it. When you enable it all widgets css and js will combine in a single file.</span>';
					echo '<div class="bwd-extrasettings-action-switch">';
						echo '<a href="'.$getExtra['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/desktop.svg').'" alt=""></a>';
						echo '<a href="'.$getExtra['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/y-video.svg').'" alt=""></a>';
						echo '<div class="bwd-extrasettings-switcher">';
							echo '<label class="bwd-extrasettings-switch">';
								$inputChecked = get_option($getExtra['id'], 'off') === 'on' ? 'checked' : '';
								$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
								$isPro = $getExtra['free_pro']==true?'checkbox':$checkbx;
								echo '<input type="'.$isPro.'" name="'.$getExtra['id'].'" id="'.$getExtra['id'].'" '.$inputChecked.'>';
								echo '<span class="bwd-switch-box"></span>';
							echo '</label>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
			endforeach;
		echo '</div>';
	echo '</div>';