<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="wppgpc-card-area-1 wppgpc-slider-common <?php echo esc_attr($settings['wppgpc_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['wppgpc-product-custom-id'] ); ?>">
    <?php require 'wppgpc-variable.php' ; ?>
    <div class="wppgpc-owl wppgpc-owl-carousel wppgpc-owl-theme">
        <?php
        $wppgpc_all_products = new WP_Query( $wppgpc_args ); if($wppgpc_all_products->have_posts()):
        while ( $wppgpc_all_products->have_posts() ) : $wppgpc_all_products->the_post();
            global $product; ?>
        <div class="wppgpc-item">
            <div class="wppgpc-card">
                <?php if(has_post_thumbnail()){ ?>
                <div class="wppgpc-imgbx">
                    <?php echo '<a href="'.esc_url(get_permalink()).'">' . wp_kses_post($product->get_image()).'</a>'; ?>
                </div>
                <?php } else{echo '<div class="wppgpc-img_text">'.esc_html__('No Feature Image', 'bwd-elementor-addons').'</div>';} ?>
                <div class="wppgpc-contentbx <?php echo esc_attr($wppgpc_cont_align); ?>">
                    <?php if('yes' === $settings['wppgpc_title']){ ?>
                    <div class="wppgpc-card-heading"><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a></div>
                    <?php } ?>
                    <?php if('yes' === $settings['wppgpc_description']){ ?>
                    <div class="wppgpc-card-decs <?php echo esc_attr($wppgpc_cont_align); ?>">
                        <?php echo wp_trim_words($product->get_short_description(), $wppgpc_description_words, $wppgpc_word_trim_indi); ?>
                    </div>
                    <?php } ?>
                    <div class="wppgpc-price-rating <?php echo esc_attr($wppgpc_cont_align); ?>">
                        <?php if('yes' === $settings['wppgpc_price']){ ?>
                        <div class="wppgpc-price-box">
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
                                echo wp_kses_post('<div class="wppgpc-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
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
                                $wppgpc_regular_price = '<div class="wppgpc-old-price">'.wc_price($regular_price).' </div><div class="wppgpc-dis-price"> '.wc_price($sale_price).'</div>';
                                $wppgpc_dis_price = '<div class="wppgpc-dis-price"> '.wc_price($regular_price).'</div>';
                                if ( 'outofstock' === $product->get_stock_status() ) {
                                    echo esc_html__('Price not available', 'bwd-elementor-addons');
                                } else {
                                    $wppgpc_sale_check = ($sale_price)?$wppgpc_regular_price:$wppgpc_dis_price;
                                    echo ($regular_price)?wp_kses_post($wppgpc_sale_check):'';
                                }
                            }
                            ?>
                        </div>
                        <?php } 
                        include(__DIR__.'/../wpgccommon/star_rating.php'); ?>
                    </div>
                    <div class="wppgpc-category-tag <?php echo esc_attr($wppgpc_cont_align); ?>">
                        <?php if('yes' === $settings['wppgpc_cat']){ ?>
                        <div class="wppgpc-pro-cate">
                            <?php echo wc_get_product_category_list(get_the_id()); ?>
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['wppgpc_tag']){ ?>
                        <div class="wppgpc-pro-tag">
                            <?php echo wp_kses_post(wc_get_product_tag_list(get_the_id())); ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="wppgpc-totalsale-pubdate <?php echo esc_attr($wppgpc_cont_align); ?>">
                        <?php if('yes' === $settings['wppgpc_sell']){ ?>
                        <div class="wppgpc-total-sale">
                            <?php echo esc_html($wppgpc_sell_label).'<span>' . esc_html($product->get_total_sales()).'</span>'; ?>
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['wppgpc_date']){ ?>
                        <div class="wppgpc-pub-date">
                            
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
                        <?php if('yes' === $settings['wppgpc_type']){ ?>
                        <div class="wppgpc-product-type">
                            <?php echo esc_html($wppgpc_type_label).'<span>' . esc_html($product->get_type()).'</span>'; ?>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="wppgpc-button-box <?php echo esc_attr($wppgpc_cont_align); ?>">
                        <?php if('yes' === $settings['wppgpc_btn']){ ?>
                        <div class="wppgpc-card-button">
                            <a href="<?php if('default' === $wppgpc_choose_link){ echo esc_url(get_permalink()); } elseif('coustom_link' === $wppgpc_choose_link){ echo esc_url($settings['wppgpc_main_button_link']['url']); } ?>"><?php echo esc_html($wppgpc_main_button); ?></a>
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['wppgpc_cart_btn']){ ?>
                        <div class="wppgpc-addtocard-btn">
                            <?php echo '<a href="' . esc_url($product->add_to_cart_url()) . '">'.esc_html($wppgpc_cart_button).'</a>'; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        endwhile;
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.').'</div>'; endif; wp_reset_query();
        ?>
    </div>
</div>