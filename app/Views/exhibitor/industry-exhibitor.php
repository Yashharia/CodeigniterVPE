<div class="Future-Presentation industry-section">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $the_query = new WP_Query(array(
        'post_type' => 'exhibitors',
        'posts_per_page' => 10,
        'post_status' => 'publish',
        'category_name' => 'industry-exhibitors',
        'order' => 'DESC',
        'paged' => $paged
    ));
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <div style="text-align: center; margin-top: 50px; font-size: 15px;">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages
            )); ?>
        </div>
        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <div id="<?php if ($the_query) {
                            echo '' . get_the_id($post->ID) . '';
                        } ?>"></div>
            <div class="<?php the_field('show_or_hide_special_offer'); ?> presentation-section industry-exhibitors <?php the_field('show_profile__cover_image'); ?>" style="margin-bottom:0px !important; margin-top: 80px !important; padding-top:0px !important; padding-bottom:20px !important;">
                <h3 class="corner-ribbon top-right sticky orange">
                    <?php if ($the_query) {
                        echo '' . get_the_id($post->ID) . '';
                    } ?>
                </h3>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center profile-cover">
                    <a href="<?php the_field('website_link_for_company_2'); ?>" target="_blank"><img src="<?php the_field('profile_cover_image'); ?>" class="img-responsive" /></a>
                    <br>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center usefull-links margin-top-20">
                        <?php
                        // check if the repeater field has rows of data
                        if (have_rows('company_website_links')) :
                            // loop through the rows of data
                            while (have_rows('company_website_links')) : the_row();
                                // SubFields
                                if (get_sub_field('button_name')) {
                                    $button_name = get_sub_field('button_name');
                                }
                                if (get_sub_field('button_link')) {
                                    $button_link = get_sub_field('button_link');
                                }
                                echo '<a class="mkdf-btn mkdf-btn-small mkdf-btn-solid" href="' . $button_link . '" target="_blank" >' . $button_name . '</a>';
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
                <div class="special-offer <?php the_field('add_special_offer_theme'); ?>">
                    <a href="<?php the_field('link_for_special_offer_details_page'); ?>" target="_blank">
                        <span class="small-text"> <?php the_field('special_offer_text_new'); ?> </span>
                        <span class="big-text"> <?php the_field('special_offer_discount'); ?> </span>
                        <span class="text3">
                            <?php the_field('special_offer_text'); ?>
                        </span>
                        <span class="text4"> <?php the_field('special_offer_validity'); ?> </span>
                    </a>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 text-center image-section" style="margin-top:15px;">
                    <div class="vc_column-inner ">
                        <div class="multiple-images">
                            <div id="myCarousel-<?php if ($the_query) {
                                                    echo '' . get_the_id($post->ID) . '';
                                                } ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    $companyimage = get_field('company_image');
                                    if (!empty($companyimage)) { ?>
                                        <div class="item">
                                            <a href="/linkresponse?element=sliderimage1&bannerName=<?php if ($the_query) {
                                                                                                        echo '' . get_the_id($post->ID) . '';
                                                                                                    } ?>&url=<?php the_field('website_link_for_company_2'); ?>" target="_blank"> <img src="<?php the_field('company_image'); ?>" class="img-responsive" /></a>
                                        </div>
                                    <?php }
                                    $ytvideo = get_field('youtube_embed_code');
                                    if (!empty($ytvideo)) { ?>
                                        <div class="item">
                                            <embed><?php the_field('youtube_embed_code'); ?></embed>
                                        </div>
                                    <?php }
                                    $count = 1;
                                    $website_link_for_company_2 = get_field('website_link_for_company_2');
                                    // check if the repeater field has rows of data
                                    if (have_rows('images_repeater')) :
                                        // loop through the rows of data

                                        while (have_rows('images_repeater')) : the_row();
                                            // SubFields
                                            //if (get_sub_field('speaker_id')) {
                                            //    $speaker_id = get_sub_field('speaker_id');
                                            //}
                                            if ($count > 2) {
                                                break;
                                            }
                                            $speaker_id = $post_id . $count;
                                            if (get_sub_field('image')) {
                                                $presenter_image = get_sub_field('image');
                                                $postid = get_the_id($post->ID);
                                            }
                                            if (get_sub_field('video_embed_link')) {
                                                $presenter_videos = get_sub_field('video_embed_link');
                                            }
                                            if (get_sub_field('video_embed_link')) {
                                            }
                                            if (get_sub_field('video_embed_link')) {
                                                $presenter_videos = get_sub_field('video_embed_link');
                                            }

                                            if (!empty($presenter_image)) {
                                                echo '<div class="item">
                                                <a href="/linkresponse?element=sliderimage' . $count . '&bannerName=' . $postid . '&url=' . $website_link_for_company_2 . '" target="_blank">
                                                                <img src="' . $presenter_image . '" class="img-responsive" />
                                                    </div></a>';
                                                $count++;
                                            }
                                            if (!empty($presenter_videos)) {
                                                echo '<div class="item">
                                                                    <embed> ' . $presenter_videos . '</embed>
                                                        </div>';
                                                $count++;
                                            }
                                        endwhile;
                                    endif;
                                    ?>
                                </div>

                                <?php if ($count - 1 > 0) { ?>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel-<?php if ($the_query) {
                                                                                            echo '' . get_the_id($post->ID) . '';
                                                                                        } ?>" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel-<?php if ($the_query) {
                                                                                            echo '' . get_the_id($post->ID) . '';
                                                                                        } ?>" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Next</span>
                                    </a><?php } ?>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 content-section">
                    <div class="vc_column-inner">
                        <h4 class="main-heading text-center" style="margin-top:15px;">
                            <a href="<?php the_field('website_link_for_company_2'); ?>" target="_blank"><img src="<?php the_field('company_logo'); ?>" class="img-thumbnail img-responsive" style="max-height:80px;" /></a>
                        </h4>
                        <div class="description csb">
                            <?php the_field('company_description'); ?>
                        </div>
                        <div class="usefull-links text-center">
                            <?php
                            // check if the repeater field has rows of data
                            if (have_rows('company_website_links')) :
                                // loop through the rows of data
                                while (have_rows('company_website_links')) : the_row();
                                    // SubFields
                                    if (get_sub_field('button_name')) {
                                        $button_name = get_sub_field('button_name');
                                    }
                                    if (get_sub_field('button_link')) {
                                        $button_link = get_sub_field('button_link');
                                    }
                                    echo '<a class="mkdf-btn mkdf-btn-small mkdf-btn-solid" href="' . $button_link . '" target="_blank" >' . $button_name . '</a>';
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
        <div style="text-align: center; margin-top: 50px; font-size: 15px;">
            <?php
            $big = 999999999; // need an unlikely integer
            echo paginate_links(array(
                'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                'format' => '?paged=%#%',
                'current' => max(1, get_query_var('paged')),
                'total' => $the_query->max_num_pages
            )); ?>
        </div>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>
<script type="text/javascript">
    jQuery(".carousel-inner .item:nth-child(1)").addClass("active");
</script>
<script>
    $(document).ready(function() {
        jQuery.fn.carousel.Constructor.TRANSITION_DURATION = 4000 // 2 seconds
    });
</script>