<?php
/**
 * 
 * @admin ~~// this is the dashboard extensions tab
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div id="extension" class="bwd-admin-setting-tab">
		<div class="bwd-widgets-actions-container">
			<div class="bwd-widgets-en-di-button">
				<button class="bwd-enable-all bwd-ex-enable-all">Enable All</button>
				<button class="bwd-disable-all bwd-ex-disable-all">Disable All</button>
			</div>
			<div class="bwd-widgets-filter-button-wrap">
				<button class="bwd-all-widgets-button">all</button>
				<button class="bwd-free-widgets-button">free</button>
				<button class="bwd-pro-widgets-button">Pro</button>
				<div class="bwd-widgets-filter-search">
					<input type="search" name="" id="exsearch-input" placeholder="Search Widgets">
					<img class="bwd-widgets-filter-search-icon" src="<?php echo esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/search.svg'); ?>" alt="">
				</div>
			</div>
			<?php
		echo '</div>';
		echo '<div class="bwd-widgets-area-container">';
			echo '<div class="bwd-widgets-items bwd-sk-wrapper">';
				echo $all_T[5];
				echo '<div class="bwd-widgets-item-container bwd-grid">';
				foreach($extentionsWidgets as $extentionsWidget=>$getExtentions):
					echo '<div class="bwd-sk-cmn bwd-col-xl-3 col-search">';
						echo '<div class="bwd-widgets-item-wrap">';
                        echo $getExtentions['new']==true?'<div class="bwd-widget-new-badge">New</div>':'';
                        $freeProText = $getExtentions['free_pro']==true?esc_html__('Free/Pro','bwd-elementor-addons'):esc_html__('Pro','bwd-elementor-addons');
                        $ifPro = $getExtentions['free_pro']==true?esc_attr('free-'):'';
							echo '<div class="bwd-widget-'.$ifPro.'pro-badge">'.$freeProText.'</div>';
							echo '<div class="bwd-widgets-title-icon-wrap">';
								echo '<div class="bwd-widgets-title">';
									echo '<h6>'.$getExtentions['name'].'</h6>';
									echo '<span>Total used - 0</span>';
								echo '</div>';
								echo '<div class="bwd-widgets-info-icons">';
									echo '<span class="bwd-widgets-info-icon"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/info.svg').'" alt=""></span>';
									echo '<a class="bwd-widgets-demo-icon" target="_blank" href="'.$getExtentions['demo'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/demo.svg').'" alt=""></a>';
									echo '<a class="bwd-widgets-video-icon" target="_blank" href="'.$getExtentions['video'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/video.svg').'" alt=""></a>';
									echo '<a class="bwd-widgets-doc-icon" target="_blank" href="'.$getExtentions['documentation'].'"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../../assets/admin/dashboard/images/doc.svg').'" alt=""></a>';
								echo '</div>';
							echo '</div>';
							echo '<div class="bwd-widgets-switcher">';
								echo '<label class="bwd-widget-switch">';
            						$inputChecked = get_option($getExtentions['id'], 'off') === 'on' ? 'checked' : '';
									$checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
									$isPro = $getExtentions['free_pro']==true?'checkbox':$checkbx;
									echo '<input class="bwd-exteninput-switch" type="'.$isPro.'" name="'.$getExtentions['id'].'" id="'.$getExtentions['id'].'" '.$inputChecked.'>';
									echo '<span class="bwd-switch-box"></span>';
								echo '</label>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endforeach;
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</div>';