<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
		<div class="bwdbp_blogPost_1 bwdbp_blogPost_onebwd">
            <div class="<?php echo esc_attr($bwdbp_the_section); ?> g-0">
                <div class="row <?php echo esc_attr($bwdbp_align); ?> <?php echo esc_attr($bwdbp_box_column_gap); ?>">
					<?php
					$wp_query = new \WP_Query( $bwdbp_args );
                    if($wp_query->have_posts()) :
                        while($wp_query->have_posts()) : $wp_query->the_post();
					echo '<div class="bwdbp_box_margin_cmn padding_LR mb-30 col-sm-3 col-lg-4 col-md-6 column_number">';
						?>
                        <div class="bwdbp_blog_box bwdbp_box_padding_cmn">
                            <div class="bwdbp_blog_image">
                                <?php $this->bwdbp_post_thumbnail_here(); ?>
                            </div>
                            <div class="bwdbp_blog_bottom_part bwdbp_box_style_cmn <?php echo esc_attr($bwdbp_cont_align); ?>">
                                <div class="bwdbp_blog_meta">
                                        <?php
                                        if($bwdbp_yes_value === $bwdbp_date_swtcher){ ?>
                                            <div class="bwdbp_blog_date">
                                            <?php if('show' === $bwdbp_taxo_icon){ ?><i class="bwdbp_icons far fa-calendar-alt"></i><?php } echo get_the_date(esc_html($bwdbp_blog_date_format)); ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <?php 
                                        if($bwdbp_yes_value === $bwdbp_author_swtcher){ ?>
                                        <div class="bwdbp_author-img">
                                            <div class="bwdbp_blog_user">
                                            <?php if('icon' === $bwdbp_author_indicator){ ?>
                                                <i class="bwdbp_icons <?php echo esc_attr($settings['bwdbp_author_icon']['value']); ?>"></i>
                                            <?php } elseif('gravatar' === $bwdbp_author_indicator){ ?>
                                                <?php
                                                echo wp_kses_post(get_avatar( get_the_author_meta( 'ID' ), $size = '50', $default = '', $alt = '', $args = array( 'class' => 'wt-author-img' ) )); 
                                                } ?>
                                                <?php $author_nickname = get_the_author_meta( 'nickname' ); echo esc_html($author_nickname); ?>
                                            </div>
                                        </div>
                                        <?php }
                                        if($bwdbp_yes_value === $bwdbp_tags_swtcher){ ?>
                                            <div class="bedbp_the_tags">
                                                <div class="bwdbp_blog_tag"> <?php the_tags(); ?> </div>
                                            </div>
                                            <?php } ?>
                                        <?php 
                                        if($bwdbp_yes_value === $bwdbp_comments_swtcher){ ?>
                                        <div class="bwdbp_blog_comment">
                                            <?php if('show' === $bwdbp_taxo_icon){ ?><i class="bwdbp_icons fas fa-comments"></i><?php } if(!have_comments()){ $comment_count = get_comments_number(); $localized_text = sprintf( esc_html__('%s Comment(s)', 'bwd-elementor-addons'), $comment_count ); echo esc_html($localized_text); } ?>
                                        </div><?php } ?>
                                        <?php if($bwdbp_yes_value === $bwdbp_categories_swtcher){ ?>
                                            <?php if('show_main_cat' === $bwdbp_cat_show_status){ ?>
                                            <div class="bwdbp_category"> 
                                                <?php $categories = get_the_category();
                                                if ( ! empty( $categories ) ) {
                                                    echo '<ul class="post-categories"><li><a href="'. esc_url(get_permalink()) .'">'.esc_html( $categories[0]->name).'</a></li></ul>';
                                                } ?>
                                            </div> 
                                            <?php } elseif('show_multiple_cat' === $bwdbp_cat_show_status){
                                            ?><div class="bwdbp_category"> <?php the_category(); ?></div> <?php
                                            } ?>
                                            <?php } ?>
                                </div>
								<?php if($bwdbp_yes_value === $bwdbp_title_swtcher){ ?>
								<<?php echo esc_attr($bwdbp_title_tags); ?> class="bwdbp_blog_title">
                                    <a  class="bwdbp_title" href="<?php echo esc_url(get_permalink()); ?>" ><?php echo esc_html(get_the_title()); ?></a>
                                </<?php echo esc_attr($bwdbp_title_tags); ?>>
								<?php }
								if($bwdbp_yes_value === $bwdbp_description_swtcher){
								?>
								<div class="bwdbp_blog_description">
                                    <div class="bwdbp_desce"><?php echo wp_trim_words(get_the_content(), $bwdbp_post_description_words, $bwdbp_blog_word_trim_indi); ?></div>
								</div>
								<?php
								}
								if($bwdbp_yes_value === $settings['bwdbp_button_show_switcher']){
								?>
								<div class="bwdbp_blog_bttn">
									<a class="bwdbp_button" href="<?php echo esc_url(get_permalink()); ?>" <?php if($bwdbp_yes_value === $settings['bwdbp_button_open_switcher']){ ?>target="_blank" <?php } ?>><?php if('icon' === $bwdbp_button_types){ ?><i class="bwdbp_icons <?php echo esc_attr($settings['bwdbp_blog_button_icon']['value']); ?>"></i><?php } elseif('text_icon' === $bwdbp_button_types){/* */ if('left' === $bwdbp_button_icon_align){ ?><i class="bwdbp_icons bwdbp_icons_left <?php echo esc_attr($settings['bwdbp_button_indicator_icon']['value']); ?>"></i><?php } echo esc_html($settings['bwdbp_blog_button_title']);  if('right' === $bwdbp_button_icon_align){ ?><i class="bwdbp_icons bwdbp_icons_right <?php echo esc_attr($settings['bwdbp_button_indicator_icon']['value']); ?>"></i><?php } } ?></a>
								</div>
								<?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                    <div class="bwdbp_pagination_item <?php echo esc_attr($bwdbp_pagination_position); ?>">
                    <?php
                    $total_pages = $wp_query->max_num_pages;
                    if ($total_pages > 1){
                        $current_page = max(1, get_query_var('paged'));
                        if('none' === $bwdbp_the_pagination_type){
                            echo wp_kses_post(paginate_links(array(
                                'show_all' => false,
                            )));
                        } elseif('number-and-text' === $bwdbp_the_pagination_type){
                            echo wp_kses_post(paginate_links(array(
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text'    => esc_html($bwdbp_blog_prev_format),
                                'next_text'    => esc_html($bwdbp_blog_next_format),
                            )));
                        } elseif('number' === $bwdbp_the_pagination_type){
                            echo wp_kses_post(paginate_links(array(
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_next'          => false,
                            )));
                        }
                    }
                    ?> </div> <?php
					endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>