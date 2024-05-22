<?php
if ( ! defined( 'ABSPATH' ) ) exit;
?>
<div class="thecpg_catagory_1 thecpg-slider-common">
    <div class="container-fluid">
        <div class="row <?php echo esc_attr($thecpg_col_align); ?>">
        <?php if($categories == true){
            foreach ($categories as $category) { ?>
            <div class="thecpg-item thecpg_cat_box_common col-lg-4 col-md-4 col-sm-6 column_number mb-4 thecpg_the_gap_col">
                <div class="thecpg_catagory-wrap">
                    <?php 
                    include(__DIR__.'/common/catagory-img.php');
                    include(__DIR__.'/common/content.php');
                    ?>
                </div>
            </div>
            <?php }
        } else{echo '<div class="thecpg_none_product">'.esc_html__('You don\'t have any products. Please add your products.', 'bwd-elementor-addons').'</div>';} ?>
        </div>
    </div>
</div>