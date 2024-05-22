<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="crpt-card-area-1">
    <div class="container-fluid">
        <div class="row <?php echo esc_attr($crtp_align); ?> crtp_gap_r">
        <?php
        $crtp_all_products = new WP_Query( $crtp_args );
		if($crtp_all_products->have_posts()):
			while ( $crtp_all_products->have_posts() ) : $crtp_all_products->the_post();
				global $product; ?>
				<div class="col-lg-4 col-md-4 col-sm-6 column_number crtp_gap_c">
					<div class="crpt-card">
						<?php if(has_post_thumbnail()){ ?>
						<div class="crpt-imgbx">
							<?php echo '<a href="'.esc_url(get_permalink()).'">' . wp_kses_post($product->get_image()).'</a>'; ?>
						</div>
						<?php } else{echo '<div class="crpt-img_text crpt_for_one">'.esc_html__('No Feature Image', 'bwd-elementor-addons').'</div>';} ?>
						<div class="crpt-contentbx <?php echo esc_attr($crpt_cont_align); ?>">
							<?php if('yes' === $settings['crtp_title']){ ?>
							<div class="crpt-card-heading"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></div>
							<?php } ?>
							<?php if('yes' === $settings['crtp_description']){ ?>
							<div class="crpt-card-decs <?php echo esc_attr($crpt_cont_align); ?>">
								<?php echo wp_trim_words($product->get_short_description(), $crtp_description_words, $crtp_word_trim_indi); ?>
							</div>
							<?php } ?>
							<div class="crpt-price-rating <?php echo esc_attr($crpt_cont_align); ?>">
								<?php if('yes' === $settings['crtp_price']){ ?>
								<div class="crpt-price-box">
									<?php 
									if ( $product->is_type( 'variable' ) ) {
										$variations = $product->get_available_variations();
										$variation_prices = array();
										foreach ( $variations as $variation ) {
												$variation_price = $variation['display_price'];
												if ( $variation_price && ! in_array( $variation_price, $variation_prices ) ) {
														$variation_prices[] = $variation_price;
												}
										}
										if ( count( $variation_prices ) > 1 ) {
										$min_price = min( $variation_prices );
										$max_price = max( $variation_prices );
										echo wp_kses_post('<div class="crtp-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
										} else {
												if ( ! empty( $variation_prices ) ) {
														echo esc_html(wc_price( floatval( $variation_prices[0] ) ));
												} else {
														$variation_stock_status = $product->get_stock_status();
														if ( 'outofstock' === $variation_stock_status ) {
																echo esc_html__('Price not available', 'bwd-elementor-addons');
														} elseif ( ! empty( $variation_prices ) ) {
																echo esc_html(wc_price( floatval( $variation_prices[0] ) )); // Convert the value to float before passing it to wc_price()
														}
												}
										}
								} else {
									$regular_price = $product->get_regular_price();
									$sale_price = $product->get_sale_price();
									$crpt_regular_price = '<div class="crpt-old-price">'.wc_price($regular_price).' </div><div class="crpt-dis-price"> '.wc_price($sale_price).'</div>';
									$crpt_dis_price = '<div class="crpt-dis-price"> '.wc_price($regular_price).'</div>';
									if ( 'outofstock' === $product->get_stock_status() ) {
											echo esc_html__('Price not available', 'bwd-elementor-addons');
									} else {
										$crpt_sale_check = ($sale_price)?$crpt_regular_price:$crpt_dis_price;
										echo ($regular_price)?wp_kses_post($crpt_sale_check):'';
									}
								}
									?>
								</div>
								<?php }
								include(__DIR__.'/../pgcommon/star_rating.php'); ?>
							</div>
							<div class="crpt-category-tag <?php echo esc_attr($crpt_cont_align); ?>">
								<?php if('yes' === $settings['crtp_cat']){ ?>
								<div class="crpt-pro-cate">
									<?php echo wc_get_product_category_list(get_the_id()); ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_tag']){ ?>
								<div class="crpt-pro-tag">
									<?php echo wp_kses_post(wc_get_product_tag_list(get_the_id())); ?>
								</div>
								<?php } ?>
							</div>
							<div class="crpt-totalsale-pubdate <?php echo esc_attr($crpt_cont_align); ?>">
								<?php if('yes' === $settings['crtp_sell']){ ?>
								<div class="crpt-total-sale">
									<?php echo esc_html($crtp_sell_label) .'<span>' . esc_html($product->get_total_sales()).'</span>'; ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_date']){ ?>
								<div class="crpt-pub-date">
									
                                <?php
                                $product_date_created = $product->get_date_created();

                                if ( $product_date_created ) {
                                    $formatted_date = gmdate( 'j M Y', strtotime( esc_html( $product_date_created->date('Y-m-d H:i:s') ) ) );
                                    echo esc_html( $formatted_date );
                                } else {
                                    echo esc_html__( 'Date not available', 'your-textdomain' );
                                }
                                ?>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_type']){ ?>
								<div class="crpt-product-type">
									<?php echo esc_html($crtp_type_label) .'<span>' . esc_html($product->get_type()).'</span>'; ?>
								</div>
								<?php } ?>
							</div>
							<div class="crpt-button-box <?php echo esc_attr($crpt_cont_align); ?>">
								<?php if('yes' === $settings['crtp_btn']){ ?>
								<div class="crpt-card-button">
									<a href="<?php if('default' === $crtp_choose_link){  echo esc_url(get_permalink()); } elseif('coustom_link' === $crtp_choose_link){ echo esc_url($settings['crtp_main_button_link']['url']); } ?>"><?php echo esc_html($crtp_main_button, 'bwd-elementor-addons'); ?></a>
								</div>
								<?php } ?>
								<?php if('yes' === $settings['crtp_cart_btn']){ ?>
								<div class="crpt-addtocard-btn">
									<?php echo '<a href="' . esc_url($product->add_to_cart_url()) . '">'. esc_html($crtp_cart_button) .'</a>'; ?>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php
			endwhile;
			include(__DIR__.'/../pgcommon/pagination.php');
		else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; endif;
        wp_reset_query();
        ?>
		</div>
	</div>
</div>