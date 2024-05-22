<?php
/**
 * 
 * @ This is the style page /////============== have all atyle here
 * 
 * @@@-------///
 */
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="woocptc-main-wrapper woocptc-style-'.esc_attr($woocptc_style_selection).'">';
    if($woocptc_categories == true){
    foreach ($woocptc_categories as $category) {
    echo '<article class="woocptc-img-wrapper">';
        echo '<div class="woocptc-content-wrapper '.esc_attr($woocptc_cont_align).'">';
        $woocptc_link_t = '<a href="'.esc_url(get_category_link($category->term_id)).'">';
        $woocptc_title_link = ('yes' === $woocptc_title_link)?$woocptc_link_t:'';
        $woocptc_wrap = '<div class="woocptc-title">'.$woocptc_title_link.'<h2 class="woocptc_catagory-title">'.esc_attr($category->name).'</h2></a></div>';
        echo ('yes' === $woocptc_cat_title)?wp_kses_post($woocptc_wrap):'';
        $woocptc_desc_wrap = '<div class="woocptc-desc"><p>'.esc_attr($category->description).'</p></div>';
        echo ('yes' === $woocptc_cat_description)?$woocptc_desc_wrap:'';
            echo '<div class="woocptc-contalign-wrapper '.esc_attr($woocptc_cont_align).'">';
                echo '<div class="bwdts-pricart-wrapper">';
                    $woocptc_count_wrap = '<span class="woocptc-extra-meta">'.esc_html($woocptc_count_text).esc_attr($category->count).'</span>';
                    echo ('yes' === $woocptc_product_count)?wp_kses_post($woocptc_count_wrap):'';
                    if('yes' === $woocptc_cat_button):
                    echo '<div class="woocptc-atcart-btn">';
                        echo '<a class="woocptc-cartbtn" href="'.esc_url(get_category_link($category->term_id)).'">'.esc_html($woocptc_button_text).'</a>';
                    echo '</div>';
                    endif;
                echo '</div>';
                if('yes' === $woocptc_review):
                    echo '<div class="woocptc-review">';
                    $woocptc_star_number = $settings['woocptc_review_star_number'];
                    $star_number = $woocptc_star_number - 1;
                    $woocptc_star_icon  = '<div class="woocptc-star-rating">';
                    if( !$category->count == true ) {
                        $woocptc_star_icon .= str_repeat( '<div class="woocptc-star-icons far fa-star" aria-hidden="true"></div>', esc_html($woocptc_star_number));
                    }else{
                        $woocptc_star_icon .= str_repeat( '<div class="woocptc-star-icons fas fa-star" aria-hidden="true"></div>', esc_html($star_number)).'<div class="woocptc-star-icons fas fa-star-half-alt" aria-hidden="true"></div>';
                    }
                    $woocptc_star_icon .= '</div>';
                    echo wp_kses_post($woocptc_star_icon);
                    echo '</div>';
                endif;
            echo '</div>';
        echo '</div>';
        $woocptc_CamWrap = '<div class="woocptc-cat">'.esc_html($woocptc_campaign_text).'</div>';
        echo ('yes' === $woocptc_campaign)?wp_kses_post($woocptc_CamWrap):'';
        if('yes' === $woocptc_cat_image):
        $thumbnail_id = get_term_meta($category->term_id, "thumbnail_id", true );
        $image = wp_get_attachment_url($thumbnail_id);
        if('yes' === $woocptc_cat_image_link){ 
            echo '<a href="'.esc_url(get_category_link($category->term_id)).'">'; 
        }
        if($thumbnail_id == true){ 
            echo '<img src="'.esc_url($image).'">';
            }else{
                echo '<h1 class="text-center text-warning">'.esc_html__('Add Category Image', 'bwd-elementor-addons').'</h1>';
                }
        echo '</a>';
        endif;
    echo '</article>';
    } } else{echo '<div class="woocptc_none_product">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>';}
echo '</div>';