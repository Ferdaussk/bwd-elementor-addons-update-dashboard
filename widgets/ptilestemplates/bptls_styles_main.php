<?php
if ( ! defined( 'ABSPATH' ) ) exit;
echo '<div class="bptls-main-wrapper bptls-style-'.esc_attr($bptls_styles).'">';
    $wp_query = new \WP_Query( $bptls_args );
    if($wp_query->have_posts()) :
        while($wp_query->have_posts()) : $wp_query->the_post();
    echo '<article class="bptls-img-wrapper">';
        echo '<div class="bptls-content-wrapper '.esc_attr($bptls_cont_align).'">';
            // Title
            $bptls_title = get_the_title();
            $bptls_title_switcher = ($bptls_yes_value === $bptls_title_swtcher)?$bptls_title:'';
            $bptls_a_tag = '<a href="'.esc_url(get_the_permalink()).'">';
            $bptls_title_link_switcher = ($bptls_yes_value === $bptls_title_link_show)?$bptls_a_tag:'';
            echo '<div class="bptls-title">'.wp_kses_post($bptls_title_link_switcher).'<'.esc_attr($bptls_title_tags).' class="bptls-h2-title">';
            echo wp_kses_post($bptls_title_switcher);
            echo '<'.esc_attr($bptls_title_tags).'></a></div>'; 
            // Description
            $bptls_description = wp_trim_words(get_the_content(), $bptls_post_description_words, $bptls_blog_word_trim_indi);
            $bptls_description_switcher = ($bptls_yes_value === $bptls_description_swtcher)?$bptls_description:'';
            echo '<div class="bptls-desc"><p>';
            echo wp_kses_post($bptls_description_switcher);
            echo '</p></div>';
            echo '<div class="bptls-meta '.esc_attr($bptls_cont_align).'">';
                // date
                $bptls_post_date = get_the_date(esc_html($bptls_blog_date_format));
                $bptls_date_title = '<span>'.$bptls_post_date.'</span></div>';
                $bptls_date_icon = '<i class="bptls_icons far fa-calendar-alt"></i>';
                $bptls_date_show_icon = ('show' == $bptls_taxo_icon)?$bptls_date_icon:'';
                $bptls_date_wrap_div = '<div class="bptls-date">'.$bptls_date_show_icon;
                echo ($bptls_yes_value === $bptls_date_swtcher)? wp_kses_post($bptls_date_wrap_div):'';
                echo ($bptls_yes_value === $bptls_date_swtcher)? wp_kses_post($bptls_date_title):'';
                // author
                $bptls_control_icon = $settings['bptls_author_icon']['value'];
                $bptls_author_icon = '<i class="bptls_icons '.esc_attr($bptls_control_icon).'"></i>';
                $bptls_gravater = wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) ));
                $bptls_total_author = ('icon' === $bptls_author_indicator) ? $bptls_author_icon : $bptls_gravater;
                $bptls_author = ($bptls_yes_value === $bptls_author_swtcher) ? $bptls_total_author : '';
                echo '<div class="bptls-author">';
                echo wp_kses_post($bptls_author);
                echo '<span>'.get_the_author_meta( 'nickname' ).'</span>';
                echo '</div>';
                // Tags
                $bptls_post_tags = get_the_tags();
                $bptls_main_tag = ($bptls_post_tags) ? $bptls_post_tags[0]->name:'';
                $bptls_tag_title = '<span>'.$bptls_main_tag.'</span></div>';
                $bptls_tag_icon = '<i class="fas fa-tag"></i>';
                $bptls_tag_show_icon = ('show' == $bptls_taxo_icon)?$bptls_tag_icon:'';
                $bptls_wrap_div = '<div class="bptls-tag">'.$bptls_tag_show_icon;
                echo ($bptls_yes_value == $bptls_tags_swtcher)?wp_kses_post($bptls_wrap_div):'';
                echo ($bptls_yes_value == $bptls_tags_swtcher)?wp_kses_post($bptls_tag_title):'';
                // Comment
                $bptls_main_txtComm = 'Comment ('.get_comments_number().')';
                $bptls_main_comm = (!have_comments())?esc_html($bptls_main_txtComm):'';
                $bptls_comm_title = '<span>'.$bptls_main_comm.'</span></div>';
                $bptls_comm_icon = '<i class="fas fa-comments"></i>';
                $bptls_comm_show_icon = ('show' == $bptls_taxo_icon)?$bptls_comm_icon:'';
                $bptls_wrap_comm_div = '<div class="bptls-comment">'.$bptls_comm_show_icon;
                echo ($bptls_yes_value === $bptls_comments_swtcher)?wp_kses_post($bptls_wrap_comm_div):'';
                echo ($bptls_yes_value === $bptls_comments_swtcher)?wp_kses_post($bptls_comm_title):'';
            echo '</div>';
        echo '</div>';
        if($bptls_yes_value === $bptls_categories_swtcher){
            if('show_main_cat' === $bptls_cat_show_status){ 
                $categories = get_the_category();
                if ( ! empty( $categories ) ) {
                    echo '<ul class="post-categories"><li><a href="'. get_permalink() .'" class="bptls-cat">'.esc_html( $categories[0]->name).'</a></li></ul>';	
                }
            } elseif('show_multiple_cat' === $bptls_cat_show_status){
                the_category();
             }
        }
        // Image
        $bptls_image_a_tag = '<a class="bptls_thumbnail" href="'.esc_url(get_the_permalink()).'">';
        echo ($bptls_yes_value === $bptls_image_link_show)?wp_kses_post($bptls_image_a_tag):'';
        $this->bptls_post_thumbnail_here();
        echo '</a>'; 
    echo '</article>';
        endwhile;
    endif;
echo '</div>';