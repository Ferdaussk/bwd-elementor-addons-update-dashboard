<?php
/**
 * 
 * @@@===================\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\@@@@@@@@@@
 * ======================Template Design Here======================
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<div class="crtplst_blogPost_1 crtplst_blogPost_list_20">
    <div class="container PLR_5">
        <div class="row g-0 ">
        <?php $crtplst_all_products = new WP_Query( $crtplst_args ); if($crtplst_all_products->have_posts()):
        while ( $crtplst_all_products->have_posts() ) : $crtplst_all_products->the_post();
            global $product;?>
            <div class="col-lg-12 mb-30 crtplst_wrap">
                <div class="crtplst_blog_box crtplst_box_sha ferdaussk_from_product">
                    <?php /*<div>*/ $this->crtplst_product_thumbnail_with_css(); ?></div>
                    <div class="crtplst_blog_bottom_part crtplst_box_style_cmn <?php echo esc_attr($crtplst_cont_align); ?>">
                        <div class="crtplst_blog_meta">
                            <?php if('yes' === $settings['crtplst_date']){ ?>
                            <div class="crtplst_blog_date crtplst-btm-gap">
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
                            <?php if('yes' === $settings['crtplst_type']){ ?>
                            <div class="crtplst_blog_user"><?php echo esc_html($crtplst_type_label) .'<span>' . esc_html($product->get_type()).'</span>'; ?></div>
                            <?php } ?>
                            <?php if('yes' === $settings['crtplst_tag']){ ?>
                            <div class="crtplst_blog_tag"><?php echo wp_kses_post(wc_get_product_tag_list(get_the_id())); ?></div>
                            <?php } ?>
                            <?php if('yes' === $settings['crtplst_sale']){ ?>
                            <div class="crtplst_blog_tag crtplst_blog_sale"><?php echo esc_html($crtplst_sale_label) .'<span>' . esc_html($product->get_total_sales()).'</span>'; ?></div>
                            <?php } ?>
                            <?php include(__DIR__.'/../wplicommon/star_rating.php'); ?>
                            <?php if('yes' === $settings['crtplst_cat']){ ?>
                            <div class="crtplst_category">
                                <ul class="post-categories <?php echo esc_attr($crtplst_cont_align); ?>"><li><a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html($crtplst_the_cat_show); ?></a></li></ul>
                            </div>
                            <?php } ?>
                        </div>
                        <?php if('yes' === $settings['crtplst_price']){ ?>
                        <div class="crtplst_blog_price <?php echo esc_attr($crtplst_cont_align); ?>">
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
                            echo wp_kses_post('<div class="crtplst-price-range">' . wc_price( $min_price ) . ' - ' . wc_price( $max_price ) . '</div>');
                            } else {
                                if ( ! empty( $variation_prices ) ) {
                                    echo wc_price( floatval( esc_html($variation_prices[0]) ) );
                                } else {
                                    $variation_stock_status = $product->get_stock_status();
                                    if ( 'outofstock' === $variation_stock_status ) {
                                        echo esc_html__('Price not available', 'bwd-elementor-addons');
                                    } elseif ( ! empty( $variation_prices ) ) {
                                        echo wc_price( floatval( esc_html($variation_prices[0]) ) ); // Convert the value to float before passing it to wc_price()
                                    }
                                }
                            }
                        } else {
                            $regular_price = $product->get_regular_price();
                            $sale_price = $product->get_sale_price();
                            $crtplst_regular_price = '<del class="crtplst_reguler_price crtplst_price">'.wc_price($regular_price).' </del><div class="crtplst_sale_price crtplst_price"> '.wc_price($sale_price).'</div>';
                            $crtplst_dis_price = '<div class="crtplst_sale_price crtplst_price"> '.wc_price($regular_price).'</div>';
                            if ( 'outofstock' === $product->get_stock_status() ) {
                                echo esc_html__('Price not available', 'bwd-elementor-addons');
                            } else {
                                $crtplst_sale_check = ($sale_price)?$crtplst_regular_price:$crtplst_dis_price;
                                echo ($regular_price)?wp_kses_post($crtplst_sale_check):'';
                            }
                        } ?>       
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['crtplst_title']){ ?>
                        <div class="crtplst_blog_title">
                            <a class="crtplst_title" href="<?php echo esc_url(get_permalink()); ?>"><?php echo '<'.esc_attr($crtplst_title_tags).' class="crtplst_p_title">'.esc_html(get_the_title()).'</'.esc_attr($crtplst_title_tags).'>'; ?></a>
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['crtplst_description']){ ?>
                        <div class="crtplst_blog_description">
                            <div class="crtplst_desce"><?php echo wp_trim_words($product->get_short_description(), $crtplst_description_words, $crtplst_word_trim_indi); ?></div>
                        </div>
                        <?php } ?>
                        <?php if('yes' === $settings['crtplst_cart_btn']): ?>
                        <div class="crtplst_blog_bttn">
                            <?php $crtplst_btn_type = ('text' === $crtplst_the_cart_type)?esc_html($crtplst_cart_button):'<i class="'.esc_attr($settings['crtplst_cart_button_icon']['value']).'"></i>'; echo '<a class="crtplst_button" href="' . esc_url($product->add_to_cart_url()) . '">'. esc_html($crtplst_btn_type) .'</a>'; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php
        endwhile; 
		include(__DIR__.'/../wplicommon/pagination.php');
        else: echo '<div class="bwdsk_none_product" style="text-align:center;">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>'; endif; wp_reset_query();
        ?>
        </div>
    </div>
</div>