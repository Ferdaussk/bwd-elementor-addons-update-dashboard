<?php
/**
 * 
 * @@@===================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\@@@@@@@@@@
 * ======================Template Design Here======================
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="bwdcrtplst_blogPost_1 bwdcrtplst_blogPost_2 bwdcrtplst_blogPost_list_21 bwdcrtplst-slider-common <?php echo esc_attr($settings['bwdcrtplst_dots_type_style']); ?>" id="<?php echo esc_attr( $settings['bwdcrtplst-blogpost-custom-id'] ); ?>">
    <?php require 'bwdcrtplst-variable.php' ; ?>
        <div class="bwdcrtplst-owl bwdcrtplst-owl-carousel bwdcrtplst-owl-theme">
        <?php $bwdcrtplst_all_products = new WP_Query( $bwdcrtplst_args ); if($bwdcrtplst_all_products->have_posts()):
        while ( $bwdcrtplst_all_products->have_posts() ) : $bwdcrtplst_all_products->the_post();
            global $product; ?>
            <div class="bwdcrtplst-col">
                <div class="bwdcrtplst_blog_box bwdcrtplst_box_sha">
                <?php /*<div>*/ $this->bwdcrtplst_product_thumbnail_with_css(); ?></div>
                    <div class="bwdcrtplst_blog_bottom_part bwdcrtplst_box_style_cmn <?php echo esc_attr($bwdcrtplst_cont_align); ?>">
                        <div class="bwdcrtplst_blog_meta">
                            <?php if('yes' === $settings['bwdcrtplst_date']){ ?>
                            <div class="bwdcrtplst_blog_date bwdcrtplst-btm-gap">
                                <?php
                                $product_date_created = $product->get_date_created();

                                if ( $product_date_created ) {
                                    $formatted_date = gmdate( 'j M Y', strtotime( esc_html( $product_date_created->date('Y-m-d H:i:s') ) ) );
                                    echo esc_html( $formatted_date );
                                } else {
                                    echo esc_html__( 'Date not available', 'your-textdomain' );
                                }
                                ?></div>
                            <?php } ?>
                            <?php if('yes' === $settings['bwdcrtplst_type']){ ?>
                            <div class="bwdcrtplst_blog_user"><?php echo esc_html($bwdcrtplst_type_label) .'<span>' . esc_html($product->get_type()).'</span>'; ?></div>
                            <?php } ?>
                            <?php if('yes' === $settings['bwdcrtplst_tag']){ ?>
                            <div class="bwdcrtplst_the_tags">
                                <div class="bwdcrtplst_blog_tag"><?php echo wp_kses_post(wc_get_product_tag_list(get_the_id())); ?></div>
                            </div>
                            <?php }
                            if('yes' === $settings['bwdcrtplst_sale']){ ?>
                            <div class="bwdcrtplst_the_tags <?php echo esc_attr($bwdcrtplst_cont_align); ?>">
                                <div class="bwdcrtplst_blog_tag bwdcrtplst_blog_sale"><?php echo esc_html($bwdcrtplst_sale_label) .'<span>' . esc_html($product->get_total_sales()).'</span>'; ?></div>
                            </div>
                            <?php }
                            include(__DIR__.'/../wplccommon/star_rating.php');
                            if('yes' === $settings['bwdcrtplst_cat']){ ?>
                            <div class="bwdcrtplst_category">
                                <ul class="post-categories <?php echo esc_attr($bwdcrtplst_cont_align); ?>"><li><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($bwdcrtplst_the_cat_show); ?></a></li></ul>
                            </div>
                            <?php } ?>
                        </div>
                        <?php if('yes' === $settings['bwdcrtplst_price']){ ?>
                        <div class="bwdcrtplst_blog_price <?php echo esc_attr($bwdcrtplst_cont_align); ?>">
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
                            $bwdcrtplst_regular_price = '<del class="bwdcrtplst_reguler_price bwdcrtplst_price">'.wc_price($regular_price).' </del><div class="bwdcrtplst_sale_price bwdcrtplst_price"> '.wc_price($sale_price).'</div>';
                            $bwdcrtplst_dis_price = '<div class="bwdcrtplst_sale_price bwdcrtplst_price"> '.wc_price($regular_price).'</div>';
                            if ( 'outofstock' === $product->get_stock_status() ) {
                                echo esc_html__('Price not available', 'bwd-elementor-addons');
                            } else {
                                $bwdcrtplst_sale_check = ($sale_price)?$bwdcrtplst_regular_price:$bwdcrtplst_dis_price;
                                echo ($regular_price)?wp_kses_post($bwdcrtplst_sale_check):'';
                            }
                        } ?>
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['bwdcrtplst_title']){ ?>
                        <div class="bwdcrtplst_blog_title">
                            <a class="bwdcrtplst_title" href="<?php echo esc_url(get_permalink()); ?>"><?php echo '<'.esc_attr($bwdcrtplst_title_tags).' class="bwdcrtplst_p_title">'.esc_html(get_the_title()).'</'.esc_attr($bwdcrtplst_title_tags).'>'; ?></a>
                        </div>
                        <?php }
                        if('yes' === $settings['bwdcrtplst_description']){ ?>
                        <div class="bwdcrtplst_blog_description">
                            <div class="bwdcrtplst_desce"><?php echo wp_trim_words($product->get_short_description(), $bwdcrtplst_description_words, $bwdcrtplst_word_trim_indi); ?></div>
                        </div>
                        <?php }
                        if('yes' === $settings['bwdcrtplst_cart_btn']){ ?>
                        <div class="bwdcrtplst_blog_bttn">
                            <?php $bwdcrtplst_btn_type = ('text' === $bwdcrtplst_the_cart_type)?esc_html($bwdcrtplst_cart_button):'<i class="'.esc_attr($settings['bwdcrtplst_cart_button_icon']['value']).'"></i>'; echo '<a class="bwdcrtplst_button" href="' . esc_url($product->add_to_cart_url()) . '">'. esc_html($bwdcrtplst_btn_type) .'</a>'; ?>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile; 
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; endif; wp_reset_query();
        ?>
        </div>
</div>