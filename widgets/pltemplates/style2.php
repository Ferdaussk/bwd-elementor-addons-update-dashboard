<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="bwdbpl_blogPost_1 bwdbpl_blogPost_2 bwdbpl_blogPost_list_21">
    <div class="container-fluid g-0">
        <div class="row g-0">
            <?php $wp_query = new \WP_Query( $bwdbpl_args );
            if($wp_query->have_posts()) :
                while($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <div class="col-lg-12 mb-60">
                <div class="bwdbpl_blog_box bwdbpl_box_sha">
                <?php /*<div>*/ $this->bwdbpl_post_thumbnail_with_css(); ?></div>
                    <div class="bwdbpl_blog_bottom_part bwdbpl_box_style_cmn">
                        <div class="bwdbpl_blog_meta <?php echo esc_attr($bwdbpl_cont_align); ?>">
                            <?php if($bwdbpl_yes_value === $bwdbpl_date_swtcher){ ?>
                            <div class="bwdbpl_blog_date bwdbpl-btm-gap"><?php if('show' === $bwdbpl_taxo_icon){ ?><i class="bwdbpl_icons far fa-calendar-alt"></i><?php } echo get_the_date(esc_html($bwdbpl_blog_date_format)); ?></div>
                            <?php } ?>
                            <?php if($bwdbpl_yes_value === $bwdbpl_author_swtcher){ ?>
                            <div class="bwdbpl_blog_user">
                            <?php if('icon' === $bwdbpl_author_indicator){ ?>
                                <i class="bwdbpl_icons <?php echo esc_attr($settings['bwdbpl_author_icon']['value']); ?>"></i>
                            <?php } elseif('gravatar' === $bwdbpl_author_indicator){ ?><?php echo wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = 'Author Image', $args = array( 'class' => 'wt-author-img' ) )); 
                                } ?><?php $author_nickname = get_the_author_meta( 'nickname' ); echo esc_html($author_nickname); ?>
                            </div>
                            <?php }
                            if($bwdbpl_yes_value === $bwdbpl_tags_swtcher){ ?>
                            <div class="bwdbpl_the_tags">
                                <div class="bwdbpl_blog_tag"> <?php the_tags(); ?> </div>
                            </div>
                            <?php }
                            if($bwdbpl_yes_value === $bwdbpl_comments_swtcher){ ?>
                                <div class="bwdbpl_blog_comment">
                                    <?php if('show' === $bwdbpl_taxo_icon){ ?><i class="bwdbpl_icons fas fa-comments"></i><?php } if(!have_comments()){ $comment_count = get_comments_number(); $localized_text = sprintf( esc_html__('%s Comment(s)', 'bwd-elementor-addons'), $comment_count ); echo esc_html($localized_text); } ?>
                                </div>
                            <?php }
                            if($bwdbpl_yes_value === $bwdbpl_categories_swtcher){ 
                                if('show_main_cat' === $bwdbpl_cat_show_status){ ?>
                                <div class="bwdbpl_category">
                                    <?php $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<ul class="post-categories"><li><a href="'. esc_url(get_permalink()) .'">'.esc_html( $categories[0]->name).'</a></li></ul>';	
                                    } ?>
                                </div> 
                                <?php } elseif('show_multiple_cat' === $bwdbpl_cat_show_status){
                                ?><div class="bwdbpl_category"> <?php the_category(); ?></div> <?php
                                }
                            } ?>
                        </div>
                        <?php if($bwdbpl_yes_value === $bwdbpl_title_swtcher){ ?>
                        <div class="bwdbpl_blog_title <?php echo esc_attr($bwdbpl_cont_align); ?>">
                            <a href="<?php echo esc_url(get_permalink()); ?>" ><<?php echo esc_attr($bwdbpl_title_tags); ?> class="bwdbpl_title"><?php echo esc_html(get_the_title()); ?></<?php echo esc_attr($bwdbpl_title_tags); ?>></a>
                        </div>
                        <?php }
                        if($bwdbpl_yes_value === $bwdbpl_description_swtcher){ ?>
                        <div class="bwdbpl_blog_description <?php echo esc_attr($bwdbpl_cont_align); ?>">
                            <div class="bwdbpl_desce"><?php echo wp_trim_words(get_the_content(), $bwdbpl_post_description_words, $bwdbpl_blog_word_trim_indi); ?></div>
                        </div>
                        <?php
                        }
                        if($bwdbpl_yes_value === $settings['bwdbpl_button_show_switcher']){ ?>
                        <div class="bwdbpl_blog_bttn <?php echo esc_attr($bwdbpl_cont_align); ?>">
                            <a class="bwdbpl_button" href="<?php echo esc_url(get_permalink()); ?>" <?php if($bwdbpl_yes_value === $settings['bwdbpl_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbpl_button_types){ ?><i class="bwdbpl_icons <?php echo esc_attr($settings['bwdbpl_blog_button_icon']['value']); ?>"></i><?php } elseif('text_icon' === $bwdbpl_button_types){/* */ if('left' === $bwdbpl_button_icon_align){ ?><i class="bwdbpl_icons bwdbpl_icons_left <?php echo esc_attr($settings['bwdbpl_button_indicator_icon']['value']); ?>"></i><?php } echo esc_html($settings['bwdbpl_blog_button_title'], 'bwd-elementor-addons');  if('right' === $bwdbpl_button_icon_align){ ?><i class="bwdbpl_icons bwdbpl_icons_right <?php echo esc_attr($settings['bwdbpl_button_indicator_icon']['value']); ?>"></i><?php } } ?></a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                include(__DIR__.'/../common/bwdeb_pagination2.php');
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    </div>