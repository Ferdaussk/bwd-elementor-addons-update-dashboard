<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

							<?php if('yes' === $settings['thecpg_review']){ ?>
							<div class="thecpg_catagory_review">
								<?php
								$thecpg_star_number = $settings['thecpg_review_star_number'];
								$star_number = $thecpg_star_number - 1;
								$thecpg_star_icon  = '<div class="thecpg-star-rating">';
								if( !$category->count == true ) {
									$thecpg_star_icon .= str_repeat( '<div class="thecpg-star-icons far fa-star" aria-hidden="true"></div>', esc_html($thecpg_star_number));
								}else{
									$thecpg_star_icon .= str_repeat( '<div class="thecpg-star-icons fas fa-star" aria-hidden="true"></div>', esc_html($star_number)).'<div class="thecpg-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
								}
								$thecpg_star_icon .= '</div>';
								echo wp_kses_post($thecpg_star_icon); ?>
                            </div>
							<?php }