<?php
if ( ! defined( 'ABSPATH' ) ) exit;
$general_W = '<h2 class="bwd-widget-cat-title">'.wp_kses_post('General Widgets (<div class="widgetCount"></div>)').'</h2>';
$cv_W = '<h2 class="bwd-widget-cat-title">'.wp_kses_post('CV Builder (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h2>';
$hero_W = '<h2 class="bwd-widget-cat-title">'.wp_kses_post('Hero Sections (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h2>';
$blog_W = '<h2 class="bwd-widget-cat-title">'.wp_kses_post('Blog Widgets (<div class="widgetCount"></div>)', 'bwd-elementor-addons').'</h2>';
$woo_W = '<h2 class="bwd-widget-cat-title">'.wp_kses_post('Woocommerce Widgets (<div class="widgetCount"></div>)', 'bwd-elementor-addons').'</h2>';
$ext_W = '<h2 class="bwd-widget-cat-title">'.wp_kses_post('Extensions (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h2>';
$all_T = [$general_W,$cv_W,$hero_W,$blog_W,$woo_W,$ext_W];

$String_of_free_pro = esc_html__('Free /', 'bwd-elementor-addons').'<span>'.esc_html__('/ Pro', 'bwd-elementor-addons').'</span>';
	echo '<div class="bwdeb-admin-wrapper wrap">';
		echo '<form method="post" action="options.php">';
			settings_fields( 'bwdeb-plugin-settings' );
			echo '<h2 class="bwdeb-the-top-title">'.esc_html__('BWD Elementor Addons Settings', 'bwd-elementor-addons').'</h2>';
      echo '<div class="bwdeb-the-top-title">';
			do_settings_sections( 'bwdeb-plugin-main-menu' );
      echo '</div>';
				echo '<div class="bwd-dashmain-wrapper">';
					echo '<div class="bwd-dashinner-wrapper">';
							echo '<form action="" method="post">';
									echo '<div class="bwd-dash-header-area">';
										echo '<div class="bwd-addon-title">';
											echo '<div class="bwd-logo-wrap">';
												echo '<a class="bwdea_dashboard_logo" href="https://bestwpdeveloper.com/" target="_blank"><img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/cropped-Logo.webp').'" alt="'.esc_attr('View Demo').'"></a>';
											echo '</div>';
											echo '<h2>'.esc_html__('BWD Elementor Addons Settings', 'bwd-elementor-addons').'</h2>';
										echo '</div>';
										echo '<div class="bwd-save-btn">';
											submit_button();
										echo '</div>';
									echo '</div>';
									$Tabs_view = [
										[
											'action' => 'active',
											'tab' => 'tab1',
											'name' => 'General',
										],
										[
											'action' => '',
											'tab' => 'tab2',
											'name' => 'Widgets',
										],
										[
											'action' => '',
											'tab' => 'tab3',
											'name' => 'Extensions',
										]
									];
									echo '<div class="tab-container">';
											echo '<div class="tab-btn-wrapper">';
												echo '<div class="tab-wrap">';
												foreach ($Tabs_view as $outerIndex => $innerArray) {
													echo '<button class="tab-button '.$innerArray['action'].'" data-tab="'.$innerArray['tab'].'">'.esc_html($innerArray['name']).'</button>';
												}
												echo '</div>';
												if(class_exists( 'ProbwdelementorBundle' )):
												$license_btn = '<div class="pro-license-btn">';
													$license_btn .= '<a href="'.esc_url(admin_url( 'admin.php?page=bwdproeb-license-settings' )).'">';
														$license_btn .= '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/key.svg').'" style="fill: white;" alt="'.esc_attr('Go License').'">';
														$license_btn .= '<span>'.esc_html__('Go License', 'bwd-elementor-addons').'</span>';
													$license_btn .= '</a>';
												$license_btn .= '</div>';
												echo $license_btn;
												else:
												$Pro_btn = '<div class="pro-btn">';
													$Pro_btn .= '<a href="https://bestwpdeveloper.com/pricing" target="_blank">';
														$Pro_btn .= '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/get-pro-icon.svg').'" alt="'.esc_attr__('Get Pro', 'bwd-elementor-addons').'">';
														$Pro_btn .= '<span>'.esc_html__('Get Pro', 'bwd-elementor-addons').'</span>';
													$Pro_btn .= '</a>';
												$Pro_btn .= '</div>';
												echo $Pro_btn;
												endif;
											echo '</div>';
											echo '<div class="tab-content-wrapper">';
												echo '<div id="tab1" class="tab-content active">';
														echo '<div class="bwd-cont-main-wrap">';
																echo '<div class="bwd-tab-banner-wrap">';
																	echo '<h2 class="bwd-banner-title">'.esc_html__('BWD Elementor Addons', 'bwd-elementor-addons').'</h2>';
																	$get_link = (class_exists( 'ProbwdelementorBundle' ))?'https://bestwpdeveloper.com/support':'https://bestwpdeveloper.com/pricing';
																	$get_name = (class_exists( 'ProbwdelementorBundle' ))?esc_html__('Get Support', 'bwd-elementor-addons'):esc_html__('Get Our Offers', 'bwd-elementor-addons');
																	echo '<a href="'.$get_link.'" target="_blank">'.$get_name.'</a>';
																echo '</div>';
																echo '<div class="bwd-general-info">';
																		$support_link = (class_exists( 'ProbwdelementorBundle' ))?'https://bestwpdeveloper.com/support':'https://wordpress.org/support/plugin/bwd-elementor-addons/';
																		$nameOne = [
																			[
																				'img' => 'contribution.png',
																				'name' => 'Request a Features',
																				'dsc' => 'Please feel free to give any suggestions to include any features about BWD Elementor Addons for Elementor.',
																				'link' => 'https://bestwpdeveloper.com/request-a-feature',
																				'golink' => 'Request Features',
																			],
																			[
																				'img' => 'documentation.png',
																				'name' => 'Documentation',
																				'dsc' => 'We can show our dedication by creating thorough and user-friendly documentation, and regularly updating it based on user feedback.',
																				'link' => 'https://bestwpdeveloper.com/documentation',
																				'golink' => 'Documentation',
																			],
																			[
																				'img' => 'customer-support.png',
																				'name' => 'Customer Support',
																				'dsc' => 'BWD Elementor Addons offers a reliable customer support service to assist users with any queries or problems they may encounter, ensuring their satisfaction with the product.',
																				'link' => $support_link,
																				'golink' => 'Get Support',
																			],
																			[
																				'img' => 'favorite.png',
																				'name' => 'Show your Love',
																				'dsc' => 'We are continiously working to make "BWD Elementor Addons" better, everyday. Your kind feedback will surely encourage us to move forward with the development.',
																				'link' => 'https://wordpress.org/plugins/plugin/bwd-elementor-addons/#reviews',
																				'golink' => 'Leave a Review',
																			]
																		];
																		foreach ($nameOne as $outerIndex => $innerArray) {
																		echo '<div class="bwd-info-item">';
																			echo '<div class="bwd-info-icon">';
																				echo '<img src="'.esc_url(plugin_dir_url(__FILE__) . '../assets/admin/dashboard/img/' . $innerArray['img'] ).'" alt="'.esc_attr('View Demo').'">';
																			echo '</div>';
																			echo '<div class="bwd-item-cont">';
																				echo '<h4 class="bwd-item-title">'.esc_html($innerArray['name']).'</h4>';
																				echo '<p class="bwd-item-desc">'.esc_html($innerArray['dsc']).'</p>';
																				echo '<a href="'.esc_url($innerArray['link']).'" target="_blank" class="bwd-item-btn">'.esc_html($innerArray['golink']).'</a>';
																			echo '</div>';
																		echo '</div>';
																		}
																echo '</div>';
																echo '<div class="bwd-footer-banner-wrap">';
																	echo '<div class="bwd-footer-content-wrap">';
																		echo '<p class="bwd-footer-content">'.esc_html__('The premium version helps us to continue development of the product incorporating even more features and enhancements. You will also get world class support from our dedicated team, 24/7.', 'bwd-elementor-addons').'</p>';
																		$get_support = (class_exists( 'ProbwdelementorBundle' ))?esc_html__('Get Support', 'bwd-elementor-addons'):esc_html__('Get Our Offers', 'bwd-elementor-addons');
																		$get_sup_link = (class_exists( 'ProbwdelementorBundle' ))?'https://bestwpdeveloper.com/support':'https://bestwpdeveloper.com/pricing';
																		echo '<a href="'.$get_sup_link.'" target="_blank" class="bwd-footer-btn">'.$get_support.'</a>';
																	echo '</div>';
																echo '</div>';
														echo '</div>';
												echo '</div>';
												$if_no_pro = ( !class_exists( 'ProbwdelementorBundle' ) )?'bwd-single-widget-if-no-pro ':'bwd-single-widget-item ';
												$E_checkbx = ( !class_exists( 'ProbwdelementorBundle' ) )?'':'checkbox';
												$pro_Check = ( !class_exists( 'ProbwdelementorBundle' ) )?'bwdeb_pro_permission':'bwdeb_pro_active';
												echo '<div id="tab2" class="tab-content">';
														echo '<div class="bwd-main-wrapper">';
																$filter_t = '<div class="bwd-filter-wrapper">';
																	$filter_t .= '<div class="bwd-enable-disable-btn">';
																		$filter_t .= '<ul>';
																			$filter_t .= '<input type="button" value="Enable All" class="bwd-enable-disable bwd-enable-btn" id="enable-all">';
																			$filter_t .= '<input type="button" value="Disable All" class="bwd-enable-disable bwd-disable-btn" id="disable-all">';
																		$filter_t .= '</ul>';
																	$filter_t .= '</div>';
																$filter_t .= '</div>';
																echo $filter_t;
															echo '<div class="bwd-sk-wrapper">';
																echo '<div class="bwd-widget-cat-count">'.$all_T[0].'</div>';
																echo '<div class="bwd-widget-item-wrapper">';
																	// For free
																		$arr_for_free_pro = array("meet-the-team" => "meet-the-team","testimonial-addon-for-elementor" => "testimonials","creative-button" => "creative-button","accordion-addon-for-elementor" => "accordion","bwd-masking-effect" => "masking-effect","service-addon-for-elementor" => "service-showcase","promo-box" => "promo-box","flip-box-addon-for-service" => "service-flip-box","flip-box-carousel" => "flip-box-carousel","flip-box-addon-for-step" => "step-flip-box","flip-box-addon-for-team" => "team-flip-box","bwd-map-masking" => "map-masking","creative-list-addon-for-elementor" => "creative-list","dual-heading-addon-for-elementor" => "dual-heading","back-to-top-addon-for-elementor" => "back-to-top","call-to-action-for-elementor" => "call-to-action","icon-box-addon-for-elementor" => "icon-box","dual-button-addon-for-elementor" => "dual-button","step-addon-for-elementor" => "awesome-step","counter-addon-for-elementor" => "counter","image-hover-effect-addon-for-elementor" => "image-hover-effect","count-down-addon-for-elementor" => "countdown","animated-heading" => "animated-heading","filterable-gallery-for-elementor" => "filterable-gallery","pricing-table-addon-for-elementor" => "pricing-table","social-icon-addon-for-elementor" => "social-icon","creative-tabs-addon-for-elementor" => "creative-tab","author-bio-addon-for-elementor" => "author-bio","animated-link-plugin-for-elementor" => "animated-link","business-hours-addon-for-elementor" => "business-hours","bwd-image-shape" => "image-shape","fancy-heading-addon-for-elementor" => "fancy-heading","progress-bar-addon-for-elementor" => "progress-bar","image-accordion" => "image-accordion","image-compare" => "image-compare","timeline" => "timeline","blockquote" => "blockquote","video-popup" => "video-popup","image-stack-group" => "image-stack-group","masking-video-addon-for-elementor" => "masking-video","image-swap" => "image-swap","profile-card-addon-for-elementor" => "profile-card","photo-stack-plugin-for-elementor-page-builder" => "photo-stack","image-scroll-elementor-addon" => "image-scroll","ihover" => "ihover","webinar-info-addon-for-elementor" => "webinar-info","interactive-circle-infographic" => "circle-info","elementor-coupon-code" => "coupon-code","elementor-header" => "unique-headers","plugins/click-to-contact" => "click-to-contact","elementor-data-table" => "data-table","contact-form-7-styler" => "contact-form-7-styler","brand-logo-carousel" => "logo-carousel","brand-logo-grid" => "logo-grid","brand-logo-filter" => "logo-filter","team-member-carousel" => "team-carousel","code-highlighter" => "code-highlighter","breadcrumb" => "breadcrumb","info-download-button" => "info-download-button","pre-loader" => "effective-pre-loader","social-share" => "social-share","background-switcher" => "background-switcher","content-switcher" => "content-switcher");
																		foreach ($arr_for_free_pro as $key => $value):
																		$F_Single_W = (checked( get_option( 'bwdeb-plugin-'.$value, 'off' ), 'on', false ))?esc_attr('active'):'';
																		echo '<div class="bwd-sk-cmn bwd-single-widget-item '.$F_Single_W.' bwdeb-'.$value.'">';
																			echo '<div class="bwd-profree-badge">'.$String_of_free_pro.'</div>';
																			echo '<div class="bwd-widget-box">';
																			echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																				echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $value)), 'bwd-elementor-addons').'</p>';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '<a href="https://bestwpdeveloper.com/'.$key.'" class="bwd-demo-link" target="_blank">';
																				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png'),'" alt="'.esc_attr('View Demo').'">';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '</div>';
																			echo '<div class="bwd-switch-item">';
																				echo '<label class="bwd-switch">';
																					echo '<input type="checkbox" name="bwdeb-plugin-'.$value.'" value="on" '.checked( get_option( 'bwdeb-plugin-'.$value, 'off' ), 'on', false ).'>';
																					echo '<span class="bwd-slider"></span>';
																				echo '</label>';
																			echo '</div>';
																		echo '</div>';
																		endforeach;
																		//For pro 
																		$arr_for_Pro = array("honeycombs" => "bwdeb-plugin-honeycombs","popup-elementor-addon" => "bwdeb-plugin-popup","advanced-slider" => "bwdeb-plugin-advanced-slider","anything-slide" => "bwdeb-plugin-slide-anything","image-hotspot" => "bwdeb-plugin-image-hotspot","unfold-content" => "bwdeb-plugin-unfold","effective-lottie-animation" => "bwdeb-plugin-lottie-animation","bar-chart" => "bwdeb-plugin-bar-chart","lord-icon" => "bwdeb-plugin-lord-icon","card-flipper-pro" => "bwdeb-plugin-cart-flipper","ajax-data-table" => "bwdeb-plugin-ajax-data-table","content-switcher-plus" => "bwdeb-plugin-con-swi-pls","image-reveal-animation" => "bwdeb-plugin-img-rev-widg","image-unfold-kit" => "bwdeb-plugin-img-unfold-kit","modern-feature-list" => "bwdeb-plugin-modern-feature-list","offcanvas-slide-magic" => "bwdeb-plugin-offcanvasmagic","private-content-locker" => "bwdeb-plugin-privacy-content-locker","clear-pdf-view" => "bwdeb-plugin-viewpdf","progress-master-kit" => "bwdeb-plugin-progress-master-kit","restaurant-price-menu" => "bwdeb-plugin-restaurant-price-menu","sales-promotion-offer" => "bwdeb-plugin-sales-promotion-offer","showcase-your-profile" => "bwdeb-plugin-profile-showcas","tooltip-mastery" => "bwdeb-plugin-tooltip-mastery","employee-profile-identity" => "bwdeb-employee-profile-identity","horizontal-timeline-slider" => "bwdeb-horizontal-timeline-slider","Showcase-Product-Features" => "bwdeb-product-features-w","threesixty-rotation-view" => "bwdeb-threesixty-rotation-view","bwd-faq" => "bwdeb-widget-template","pricing-scheme-switcher" => "bwdeb-pssx","bio-about-maker" => "bwdeb-blmx1","bio-link-maker" => "bwdeb-blmx2","bio-social-maker" => "bwdeb-blmx3","sticky-video-prime" => "bwdeb-svpx","tabify-xpert-suite" => "bwdeb-txsx","vertical-split-slideshow" => "bwdeb-vsix");
																		foreach ($arr_for_Pro as $key => $value):
																		$Check_active = (checked( get_option( $value, 'off' ), 'on', false ))?esc_attr('active'):'';
																		echo '<div class="bwd-sk-cmn '.$if_no_pro.' '.$Check_active.' '.$value.'">';
																			echo '<div class="bwdeb_pro_pro_per"><span>'.esc_html__('Pro', 'bwd-elementor-addons').'</span></div>';
																			echo '<div class="bwd-widget-box">';
																			echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																				echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $key)), 'bwd-elementor-addons').'</p>';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '<a href="https://bestwpdeveloper.com/'.$key.'" class="bwd-demo-link" target="_blank">';
																				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '</div>';
																			echo '<div class="bwd-switch-item '.$pro_Check.'">';
																				echo '<label class="bwd-switch">';
																				$Na1 = 'name="'.esc_attr($value).'" value="on"';
																				$Na2 = checked( get_option($value, 'off' ), 'on', false );
																				$NaNa3 = (class_exists( 'ProbwdelementorBundle' ))?$Na1.' '.$Na2:'';
																					echo '<input type="'.$E_checkbx.'"  '.$NaNa3.'>';
																					echo '<span class="bwd-slider"></span>';
																				echo '</label>';
																			echo '</div>';
																		echo '</div>';
																		endforeach;
																	echo '</div>';
																echo '</div>';
															echo '<div class="bwd-sk-wrapper">';
																	echo '<div class="bwd-widget-cat-count">'.$all_T[1].'</div>';
																	echo '<div class="bwd-widget-item-wrapper">';
																		$cv_builder_values = array('builder', 'about', 'contact', 'education', 'experience', 'footer', 'header', 'hobby', 'language', 'reference', 'skill');
																		foreach($cv_builder_values as $cv_builder):
																			$act_check = (checked( get_option('bwdeb-plugin-cv-'.$cv_builder, 'off' ), 'on', false ))?esc_attr('active'):'';
																		echo '<div class="bwd-sk-cmn '.$if_no_pro.' '.$act_check.' '.$cv_builder.'">';
																			echo '<div class="bwdeb_pro_pro_per"><span>'.esc_html__('Pro', 'bwd-elementor-addons').'</span></div>';
																			echo '<div class="bwd-widget-box">';
																				echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																					echo '<p class="bwd-widget-title">'.esc_html__(ucwords($cv_builder), 'bwd-elementor-addons').'</p>';
																					echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																				echo '</a>';
																				echo '<a href="https://bestwpdeveloper.com/cv-builder-plugin-for-elementor/" class="bwd-demo-link" target="_blank">';
																					echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																					echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																				echo '</a>';
																			echo '</div>';
																			echo '<div class="bwd-switch-item '.$pro_Check.'">';
																				echo '<label class="bwd-switch">';
																				$chE = 'name="'.esc_attr('bwdeb-plugin-cv-'.$cv_builder).'" value="on"'; 
																				$CheB = checked( get_option('bwdeb-plugin-cv-'.$cv_builder, 'off' ), 'on', false );
																				$CheBchE = (class_exists( 'ProbwdelementorBundle' ))?$chE.' '.$CheB:'';
																					echo '<input type="'.$E_checkbx.'" '.$CheBchE.'>';
																					echo '<span class="bwd-slider"></span>';
																				echo '</label>';
																			echo '</div>';
																		echo '</div>';
																		endforeach;
																	echo '</div>';
															echo '</div>';
															echo '<div class="bwd-sk-wrapper">';
																echo '<div class="bwd-widget-cat-count">'.$all_T[2].'</div>';
																echo '<div class="bwd-widget-item-wrapper">';
																	$i = 1;
																	for ($i; $i <= 13; $i++) :
																		$option_Ch = (checked( get_option('bwdeb-check-hero-widget'.$i, 'off' ), 'on', false ))?esc_attr('active'):'';
																	echo '<div class="bwd-sk-cmn '.$if_no_pro.' '.$option_Ch.' bwd-new-'.$i.'">';
																		echo '<div class="bwdeb_pro_pro_per"><span>'.esc_html__('Pro', 'bwd-elementor-addons').'</span></div>';
																		echo '<div class="bwd-widget-box">';
																			echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																				echo '<p class="bwd-widget-title">'.esc_html__('Hero Style '.$i, 'bwd-elementor-addons').'</p>';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '<a href="https://bestwpdeveloper.com/hero-section/" class="bwd-demo-link" target="_blank">';
																				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																		echo '</div>';
																		echo '<div class="bwd-switch-item '.$pro_Check.'">';
																			echo '<label class="bwd-switch">';
																			$name_Ch = 'name="'.esc_attr('bwdeb-check-hero-widget'.$i).'" value="on"'; 
																			$Ch_E = checked( get_option('bwdeb-check-hero-widget'.$i, 'off' ), 'on', false );
																			$name_Ch_E = (class_exists( 'ProbwdelementorBundle' ))?$name_Ch.' '.$Ch_E:'';
																				echo '<input type="'.$E_checkbx.'" '.$name_Ch_E.'>';
																				echo '<span class="bwd-slider"></span>';
																			echo '</label>';
																		echo '</div>';
																	echo '</div>';
																	endfor;
																echo '</div>'; 
																echo '</div>'; 
															echo '<div class="bwd-sk-wrapper">';
																echo '<div class="bwd-widget-cat-count">'.$all_T[3].'</div>';
																echo '<div class="bwd-widget-item-wrapper">';
																	$post_wdgts = array('post-grid-elementor-addon' => 'post-grid', 'blog-post-list' => 'post-list', 'post-tiles' => 'post-tiles', 'blog-post-accordions' => 'post-accordion', 'post-timeline' => 'post-timeline', 'masonry-blog-post' => 'masonary-blog-post', 'post-image-accordion' => 'post-image-accordion', 'effective-post-slider' => 'single-post-slider', 'news-ticker' => 'news-ticker');
																	foreach($post_wdgts as $key => $value):
																		$vaLue = (checked( get_option('bwdeb-plugin-'.$value, 'off' ), 'on', false ))?esc_attr('active'):'';
																	echo '<div class="bwd-sk-cmn bwd-single-widget-item '.$vaLue.' bwdeb-'.$value.'">';
																		echo '<div class="bwd-profree-badge">'.$String_of_free_pro.'</div>';
																		echo '<div class="bwd-widget-box">';
																			echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																				echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $key)), 'bwd-elementor-addons').'</p>';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '<a href="https://bestwpdeveloper.com/'.$key.'" class="bwd-demo-link" target="_blank">';
																				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																		echo '</div>';
																		echo '<div class="bwd-switch-item">';
																			echo '<label class="bwd-switch">';
																				echo '<input type="checkbox" name="bwdeb-plugin-'.$value.'" value="on" '.checked( get_option('bwdeb-plugin-'.$value, 'off' ), 'on', false ).'>';
																				echo '<span class="bwd-slider"></span>';
																			echo '</label>';
																		echo '</div>';
																	echo '</div>';
																	endforeach;
																	// Pro
																	$post_wdgtsPro = ['post-carousel' => 'bwdeb-plugin-creative-post-carousel','post-prestige-portfolio' => 'bwdeb-post-prestige-portfolio', 'advanced-posts-tab' => 'bwdeb-apostst'];
																	foreach($post_wdgtsPro as $key => $value):
																	$value_CH = (checked( get_option($value, 'off' ), 'on', false ))?esc_attr('active'):'';
																	echo '<div class="bwd-sk-cmn '.$if_no_pro.' '.$value_CH.' '.$value.'">';
																		echo '<div class="bwdeb_pro_pro_per"><span>'.esc_html__('Pro', 'bwd-elementor-addons').'</span></div>';
																		echo '<div class="bwd-widget-box">';
																			echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																				echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $key)), 'bwd-elementor-addons').'</p>';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '<a href="https://bestwpdeveloper.com/'.$key.'" class="bwd-demo-link" target="_blank">';
																				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																		echo '</div>';
																		echo '<div class="bwd-switch-item '.$pro_Check.'">';
																			echo '<label class="bwd-switch">';
																			$n1 = 'name="'.esc_attr($value).'" value="on"'; 
																			$n2 = checked( get_option($value, 'off' ), 'on', false );
																			$nN3 = (class_exists( 'ProbwdelementorBundle' ))?$n1.' '.$n2:'';
																				echo '<input type="'.$E_checkbx.'" '.$nN3.'>';
																				echo '<span class="bwd-slider"></span>';
																			echo '</label>';
																		echo '</div>';
																	echo '</div>';
																	endforeach;
																echo '</div>'; 
															echo '</div>'; 
															echo '<div class="bwd-sk-wrapper">';
																echo '<div class="bwd-widget-cat-count">'.$all_T[4].'</div>';
																echo '<div class="bwd-widget-item-wrapper">';
																	$product_wdgts = array('woocommerce-product-grid-addon-for-elementor' => 'product-grid', 'creative-products-list' => 'product-list', 'product-tiles' => 'product-tiles', 'product-carousel' => 'product-carousel', 'woocommerce-product-category-grid' => 'product-category-grid', 'woocommerce-product-category-tiles' => 'product-category-tiles', 'product-accordion' => 'product-accordion', 'product-image-accordion' => 'product-image-accordion', 'creative-product-list-carousel' => 'product-list-carousel', 'product-timeline' => 'product-timeline', 'woocommerce-related-product' => 'related-product', 'product-category-carousel' => 'product-category-carousel', 'featured-product' => 'featured-product');
																	foreach($product_wdgts as $key => $value):
																		$Val = (checked( get_option('bwdeb-plugin-'.$value, 'off' ), 'on', false ))?esc_attr('active'):'';
																	echo '<div class="bwd-sk-cmn bwd-single-widget-item '.$Val.' bwdeb-'.$value.'">';
																		echo '<div class="bwd-profree-badge">'.$String_of_free_pro.'</div>';
																		echo '<div class="bwd-widget-box">';
																			echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																				echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $value)), 'bwd-elementor-addons').'</p>';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																			echo '<a href="https://bestwpdeveloper.com/'.$key.'" class="bwd-demo-link" target="_blank">';
																				echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																				echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																			echo '</a>';
																		echo '</div>';
																		echo '<div class="bwd-switch-item">';
																			echo '<label class="bwd-switch">';
																				echo '<input type="checkbox" name="bwdeb-plugin-'.$value.'" value="on" '.checked( get_option('bwdeb-plugin-'.$value, 'off' ), 'on', false ).'>';
																				echo '<span class="bwd-slider"></span>';
																			echo '</label>';
																		echo '</div>';
																	echo '</div>';
																	endforeach;
																	// Pro 
																	$product_wdgtsPro = ['woocommerce-product-compare'=>'bwdeb-plugin-product-compare','woocommerce-category-gallery' => 'bwdeb-plugin-woo-cat-gallery', 'wooCommerce-product-multi-action' => 'bwdeb-plugin-woop-multi-action', 'wooCommerce-product-wish-action' => 'bwdeb-plugin-woop-wish-cont', 'woocommerce-product-vendors' => 'bwdeb-woop-vendors', '3d-woocommerce-product-layout' => 'bwdeb-twpx'];
																	foreach ($product_wdgtsPro as $key => $value):
																	$value_CH = (checked( get_option($value, 'off' ), 'on', false ))?esc_attr('active'):'';
																	echo '<div class="bwd-sk-cmn '.$if_no_pro.' '.$value_CH.' '.$value.'">';
																		echo '<div class="bwdeb_pro_pro_per"><span>'.esc_html__('Pro', 'bwd-elementor-addons').'</span></div>';
																		echo '<div class="bwd-widget-box">';
																		echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																			echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $key)), 'bwd-elementor-addons').'</p>';
																			echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																		echo '</a>';
																		echo '<a href="https://bestwpdeveloper.com/'.$key.'" class="bwd-demo-link" target="_blank">';
																			echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																			echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																		echo '</a>';
																		echo '</div>';
																		$Pro_p = ( !class_exists( 'ProbwdelementorBundle' ) )?'bwdeb_pro_permission':'bwdeb_pro_active';
																		echo '<div class="bwd-switch-item '.$Pro_p.'">';
																			echo '<label class="bwd-switch">';
																			$vn_name = 'name="'.esc_attr($value).'" value="on"'; 
																			$vn_get_v = checked( get_option($value, 'off' ), 'on', false );
																			$vn_get_name = (class_exists( 'ProbwdelementorBundle' ))?$vn_name.' '.$vn_get_v:'';
																				echo '<input type="'.$E_checkbx.'" '.$vn_get_name.'>';
																				echo '<span class="bwd-slider"></span>';
																			echo '</label>';
																		echo '</div>';
																	echo '</div>';
																	endforeach;
																echo '</div>';
															echo '</div>';
														echo '</div>';
												echo '</div>';
												// This tab for extensions
												echo '<div id="tab3" class="tab-content">';
													echo '<div class="bwd-main-wrapper">';
													echo '<div class="bwd-sk-wrapper">';
														echo '<div class="bwd-widget-cat-count">'.$all_T[5].'</div>';
														echo '<div class="bwd-widget-item-wrapper">';
															// For pro
															$extentions = array('text-tooltip' => 'bwdeb-extn-tooltip', 'wrap-link' => 'bwdeb-extn-link', 'Content-Protection' => 'bwdeb-extn-protctn', 'CSS-Transform' => 'bwdeb-csstrnsm', 'Floating-Animation' => 'bwdeb-flanime', 'duplicate' => 'bwdeb-duplicate','3D-Text' => 'bwdeb-3d-text','notation' => 'bwdeb-notation','confetti-effects' => 'bwdeb-confetti-effects','cursor-effects' => 'bwdeb-cursor-effects','reveal-effects' => 'bwdeb-reveal-effects','tile-scroll' => 'bwdeb-tile-scroll','section-sticky' => 'bwdeb-section-sticky','scroll-box' => 'bwdeb-scroll-box','background-particles'=>'bwdeb-background-particles','Cross-Domain'=>'bwdeb-xd-copy','custom-JS-&-CSS'=>'bwdeb-custom-jscss','background-parallax'=>'bwdeb-section-parallax','gradiant-animated-BG'=>'bwdeb-gra-anim-bg','backdrop-filter'=>'bwdeb-backdrop-filter','line-grid'=>'bwdeb-line-grid','cursor-img-parallax'=>'bwdeb-cursor-img-parallax','live-copy'=>'bwdeb-live-copy');
															foreach ($extentions as $key => $value):
															$value_CH = (checked( get_option($value, 'off' ), 'on', false ))?esc_attr('active'):'';
															echo '<div class="bwd-sk-cmn '.$if_no_pro.' '.$value_CH.' '.$value.'">';
																echo '<div class="bwdeb_pro_pro_per"><span>'.esc_html__('Pro', 'bwd-elementor-addons').'</span></div>';
																echo '<div class="bwd-widget-box">';
																echo '<a href="https://bestwpdeveloper.com/documentation" class="bwd-dcmtn-link" target="_blank">';
																	echo '<p class="bwd-widget-title">'.esc_html__(ucwords(str_replace('-', ' ', $key)), 'bwd-elementor-addons').'</p>';
																	echo '<span class="bwd-view-demo">'.esc_html__('View Documentation', 'bwd-elementor-addons').'</span>';
																echo '</a>';
																echo '<a href="https://bestwpdeveloper.com/elementor-extensions" class="bwd-demo-link" target="_blank">';
																	echo '<img src="'.esc_url(plugin_dir_url( __FILE__ ).'../assets/admin/dashboard/img/linking.png').'" alt="'.esc_attr('View Demo').'">';
																	echo '<span class="bwd-view-demo">'.esc_html__('View Demo', 'bwd-elementor-addons').'</span>';
																echo '</a>';
																echo '</div>';
																$Pro_p = ( !class_exists( 'ProbwdelementorBundle' ) )?'bwdeb_pro_permission':'bwdeb_pro_active';
																echo '<div class="bwd-switch-item '.$Pro_p.'">';
																	echo '<label class="bwd-switch">';
																	$vn_name = 'name="'.esc_attr($value).'" value="on"'; 
																	$vn_get_v = checked( get_option($value, 'off' ), 'on', false );
																	$vn_get_name = (class_exists( 'ProbwdelementorBundle' ))?$vn_name.' '.$vn_get_v:'';
																		echo '<input type="'.$E_checkbx.'" '.$vn_get_name.'>';
																		echo '<span class="bwd-slider"></span>';
																	echo '</label>';
																echo '</div>';
															echo '</div>';
															endforeach;
														echo '</div>';
													echo '</div>';
													echo '</div>';
												echo '</div>';
											echo '</div>';
									echo '</div>';
							echo '</form>';
					echo '</div>';
				echo '</div>';
		echo '</form>';
		if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] ) {
			echo '<div id="bwdeb-save-notice" class="notice notice-success is-dismissible">';
				echo '<p>'.esc_html__('Settings saved successfully!!', 'bwd-elementor-addons' ).'</p>';
			echo '</div>';
		}
	echo '</div>';