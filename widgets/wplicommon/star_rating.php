<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

							<?php if('yes' === $settings['crtplst_review']){ ?>
							<div class="crtplst_blog_comment">
								<div class="crtplst-rating-box">
									<?php $comment_id = $product->get_review_count();
									$crtplst_star_number = esc_html($settings['crtplst_review_star_number']);
									$star_number = $crtplst_star_number - 1;
									$crtplst_star_icon  = '<div class="crtplst-star-rating text-center">';
									if(!$comment_id){
										$crtplst_star_icon .= str_repeat( '<div class="crtplst-star-icons far fa-star" aria-hidden="true"></div>', $crtplst_star_number);
									}else{
										$crtplst_star_icon .= str_repeat( '<div class="crtplst-star-icons fas fa-star" aria-hidden="true"></div>', $star_number).'<div class="crtplst-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
									}
									$crtplst_star_icon .= '</div>';
									echo wp_kses_post($crtplst_star_icon); echo '<div  class="make_a_star">'.esc_html__('(', 'bwd-elementor-addons') . esc_html($product->get_review_count()).esc_html__(')', 'bwd-elementor-addons').'</div>'; ?>
								</div>
                            </div>
							<?php }