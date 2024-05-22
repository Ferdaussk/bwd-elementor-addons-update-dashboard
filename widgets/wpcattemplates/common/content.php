<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>

                <div class="thecpg_catacory-content <?php echo esc_attr($thecpg_cont_align); ?>">
                    <?php if('yes' === $thecpg_cat_title){ ?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><div class="thecpg_catagory-title"><?php echo esc_attr($category->name); echo esc_html__('(', 'bwd-elementor-addons'); echo esc_attr($category->count); echo esc_html__(')', 'bwd-elementor-addons');?></div></a>
                    <?php }
                        include(__DIR__.'/star_rating.php');
                    ?>
                    <?php if('yes' === $thecpg_cat_description){ ?>
                    <div class="thecpg_catagory-disce"><?php echo esc_attr($category->description); ?></div>
                    <?php } ?>
                    <?php if('yes' === $thecpg_cat_button){ ?>
                    <div class="thecpg_catagory-bttn">
                        <a class="thecpg_Cbutton" href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($thecpg_button_text); ?></a>
                    </div>
                    <?php } ?>
                </div>