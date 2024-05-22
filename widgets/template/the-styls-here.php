<?php 
/**
 * @
 * @
 * @@@@@@@@@@@--------------------////////// Style template ||||||||
 * @
 * @
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="bpaccdn-accordion-all">';
    echo '<div class="bpaccdn-Accordion-'.esc_attr($bpaccdn_styles).' bpaccdn-accordion-common">';
    $wp_query = new \WP_Query( $bpaccdn_args );
    if($wp_query->have_posts()) :
        while($wp_query->have_posts()) : $wp_query->the_post();
        echo '<div class="bpaccdn-Accordion-default">';
            echo '<div class="bpaccdn-Accordion-heading bpaccdn-panel-heading" >';
                echo '<'.esc_attr($bpaccdn_title_tags).' class="bpaccdn-panel-title">';
                    echo '<span class="bpaccdn-collapsed" style="text-align:'.esc_attr($settings['bpaccdn_title_alignment']).'">'.esc_html(get_the_title()).'</span>';
                    if('yes' === $bpaccdn_icon):
                        echo '<span class="bpaccdn-collapsed-icon bpaccdn-colexp-icon"><i class="'.esc_attr($settings['bpaccdn_accordion_collapsed_icon']['value']).'"></i></span>';
                        echo '<span class="bpaccdn-expand-icon bpaccdn-colexp-icon"><i class="'.esc_attr($settings['bpaccdn_accordion_expand_icon']['value']).'"></i></span>';
                    endif;
                echo '</'.esc_attr($bpaccdn_title_tags).'>';
            echo '</div>';
            echo '<div id="collapseOne">';
                echo '<div class="bpaccdn-panel-body">';
                    // Image
                    if ($bpaccdn_yes_value === $bpaccdn_image_link_show):
                        echo '<div class="bpaccdn-productImg"><a class="bpaccdn_thumbnail" href="'.esc_url(get_the_permalink()).'">'; $this->bpaccdn_post_thumbnail_here(); echo '</a></div>';
                    else: echo '<div class="bpaccdn-productImg">'; $this->bpaccdn_post_thumbnail_here(); echo '</div>'; endif;
                    echo '<div class="bpaccdn-prodCont">';
                        // Cat
                        if($bpaccdn_yes_value === $bpaccdn_categories_swtcher){
                            echo '<div class="bpaccdn-prodCat">';
                            if('show_main_cat' === $bpaccdn_cat_show_status){ 
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo '<ul class="post-categories"><li><a href="'.esc_url(plugin_dir_url('../../category/sk').$categories[0]->name).'" class="bpaccdn-cat">'.esc_html( $categories[0]->name).'</a></li></ul>';	
                                }
                            } elseif('show_multiple_cat' === $bpaccdn_cat_show_status){
                                the_category();
                            }
                            echo '</div>';
                        }
                       echo '<div class="bpaccdn-meta-wrap">';
                             echo '<div class="bpaccdn-prodpriratbtn">';
                            echo '<div class="bpaccdn-prodpriratwrap">';
                                echo '<div class="bpaccdn-prodprice">';
                                // date
                                $bpaccdn_post_date = get_the_date(esc_html($bpaccdn_blog_date_format));
                                $bpaccdn_date_title = '<span>'.$bpaccdn_post_date.'</span></div>';
                                $bpaccdn_date_icon = '<i class="bpaccdn_icons far fa-calendar-alt"></i>';
                                $bpaccdn_date_show_icon = ('show' == $bpaccdn_taxo_icon)?$bpaccdn_date_icon:'';
                                $bpaccdn_date_wrap_div = '<div class="bpaccdn-salePrice bpaccdn-price">'.$bpaccdn_date_show_icon;
                                $bpaccdn_date_switch = ($bpaccdn_yes_value === $bpaccdn_date_swtcher)? $bpaccdn_date_wrap_div:'';
                                $bpaccdn_date_title_switch = ($bpaccdn_yes_value === $bpaccdn_date_swtcher)? $bpaccdn_date_title:'';
                                echo wp_kses_post($bpaccdn_date_switch.$bpaccdn_date_title_switch);
                                // author
                                $bpaccdn_control_icon = esc_attr($settings['bpaccdn_author_icon']['value']);
                                $bpaccdn_author_icon = '<i class="bpaccdn_icons '.$bpaccdn_control_icon.'"></i>';
                                $bpaccdn_gravater = wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) ));
                                $bpaccdn_total_author = ('icon' === $bpaccdn_author_indicator) ? $bpaccdn_author_icon : $bpaccdn_gravater;
                                $bpaccdn_author = ($bpaccdn_yes_value === $bpaccdn_author_swtcher) ? $bpaccdn_total_author.'<span>'.get_the_author_meta( 'nickname' ).'</span>' : '';
                                echo '<div class="bpaccdn-regularPrice bpaccdn-price">'.wp_kses_post($bpaccdn_author).'</div></div>';
                            echo '</div>';
                        echo '</div>';
                        echo '<div class="bpaccdn-prodOptInfo">';
                            // ======================= Texo
                            // Tags
                            $bpaccdn_post_tags = get_the_tags();
                            $bpaccdn_main_tag = ($bpaccdn_post_tags) ? $bpaccdn_post_tags[0]->name:'';
                            $bpaccdn_tag_title = '<span>'.$bpaccdn_main_tag.'</span></div>';
                            $bpaccdn_tag_icon = '<i class="fas fa-tag"></i>';
                            $bpaccdn_tag_show_icon = ('show' == $bpaccdn_taxo_icon)?$bpaccdn_tag_icon:'';
                            $bpaccdn_wrap_div = '<div class="bpaccdn-prodSaleCount bpaccdn-extra-meta">'.$bpaccdn_tag_show_icon;
                            $bpaccdn_wrap_tag = ($bpaccdn_yes_value == $bpaccdn_tags_swtcher)?$bpaccdn_wrap_div:'';
                            $bpaccdn_wrap_close_div = ($bpaccdn_yes_value == $bpaccdn_tags_swtcher)?$bpaccdn_tag_title:'';
                            echo wp_kses_post($bpaccdn_wrap_tag.$bpaccdn_wrap_close_div);
                            // Comment
                            $bpaccdn_main_comm = (!have_comments())?get_comments_number():'';
                            $bpaccdn_comm_title = '<span>Comment ('.esc_html($bpaccdn_main_comm).')</span></div>';
                            $bpaccdn_comm_show_icon = ('show' == $bpaccdn_taxo_icon)?'<i class="fas fa-comments"></i>':'';
                            $bpaccdn_wrap_comm_div = '<div class="bpaccdn-publishDate bpaccdn-extra-meta">'.$bpaccdn_comm_show_icon;
                            $bpaccdn_comm_switch = ($bpaccdn_yes_value === $bpaccdn_comments_swtcher)?$bpaccdn_wrap_comm_div:'';
                            $bpaccdn_comm_title_echo = ($bpaccdn_yes_value === $bpaccdn_comments_swtcher)?$bpaccdn_comm_title:'';
                            echo wp_kses_post($bpaccdn_comm_switch);
                            echo wp_kses_post($bpaccdn_comm_title_echo);
                            // =======================
                        echo '</div>';
                       echo '</div>';
                            // Description
                            $bpaccdn_description = wp_trim_words(get_the_content(), $bpaccdn_post_description_words, $bpaccdn_blog_word_trim_indi);
                            $bpaccdn_description_switcher = ($bpaccdn_yes_value === $bpaccdn_description_swtcher)?$bpaccdn_description:'';
                            echo '<div class="bpaccdn-desc"><p class="bpaccdn-prodDesc">'.esc_html($bpaccdn_description_switcher).'</p></div>';
                            // Button
                            $bpaccdn_cart_text = '<a href="' . esc_url(get_the_permalink()) . '" class="bpaccdn-cartBtn">' . esc_html($bpaccdn_cart_button) . '</a>';
                            $bpaccdn_cart_icon = '<a href="' . esc_url(get_the_permalink()) . '" class="bpaccdn-sscartbtndd"> <i class="' . esc_attr($settings['bpaccdn_cart_button_icon']) . '"></i></a>';
                            $bpaccdn_cart_T_I = ('text' === $bpaccdn_cart_type) ? $bpaccdn_cart_text : $bpaccdn_cart_icon;
                            $bpaccdn_cart_wrap_html = '<div class="bpaccdn-atcart-btn">' . $bpaccdn_cart_T_I . '</div>';
                            echo ('yes' === $bpaccdn_cart_btn) ? wp_kses_post($bpaccdn_cart_wrap_html) : '';
                    echo '</div>';
                echo '</div>';
            echo '</div>';
        echo '</div>';
        endwhile;
        echo '<div class="bpaccdn_pagination_item">';
        $total_pages = $wp_query->max_num_pages;
        if ($total_pages > 1){
            $current_page = max(1, get_query_var('paged'));
            if('none' === $bpaccdn_the_pagination_type){
                echo wp_kses_post(paginate_links(array(
                    'show_all' => false,
                )));
            } elseif('number-and-text' === $bpaccdn_the_pagination_type){
                echo wp_kses_post(paginate_links(array(
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text' => esc_html($settings['bpaccdn_blog_prev_format']),
                    'next_text' => esc_html($settings['bpaccdn_blog_next_format']),
                )));
            } elseif('number' === $bpaccdn_the_pagination_type){
                echo wp_kses_post(paginate_links(array(
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_next' => false,
                )));
            }
        }
        echo '</div>';
    endif;
    echo '</div>';
echo '</div>';