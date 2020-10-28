<div class="Future-Presentation">

    <?php
    print_r($all);
    $test = 0;
    if ($test) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
            $post_id = get_the_id($post->ID); ?>
            <div class="vc_row wpb_row vc_row-fluid presentation-section" style="margin-bottom:40px !important; padding-top:15px !important; padding-bottom:20px !important;">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 text-center">
                    <div class="vc_column-inner">
                        <div class="multiple-images">
                            <div id="myCarousel-<?php if ($the_query) {
                                                    echo '' . get_the_id($post->ID) . '';
                                                } ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php


                                    // check if the repeater field has rows of data
                                    if (have_rows('multiple_presenter_section')) :
                                        // loop through the rows of data
                                        $count = 0;
                                        while (have_rows('multiple_presenter_section')) : the_row();
                                            // SubFields
                                            //if (get_sub_field('speaker_id')) {
                                            //    $speaker_id = get_sub_field('speaker_id');
                                            //}
                                            $speaker_id = $post_id . $count;
                                            if (get_sub_field('presenter_image')) {
                                                $presenter_image = get_sub_field('presenter_image');
                                            }
                                            if (get_sub_field('presenter_full_name')) {
                                                $presenter_full_name = get_sub_field('presenter_full_name');
                                            }
                                            if (get_sub_field('presenter_designation')) {
                                                $presenter_designation = get_sub_field('presenter_designation');
                                            }
                                            if (get_sub_field('show_or_hide_bios')) {
                                                $show_or_hide_bios = get_sub_field('show_or_hide_bios');
                                            }
                                            echo '<div class="item">
                                                                <img src="' . $presenter_image . '" alt="' . $presenter_full_name . '" class="img-responsive" />
                                                                <h5 class="designation"><strong> ' . $presenter_full_name . ' </strong></h5>
                                                                <h5 class="sub-designation"> ' . $presenter_designation . ' </h5>
                                                                <a href="#" class="' . $show_or_hide_bios . ' mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-20 margin-right-15" data-toggle="modal" data-target="#myModal-' . $speaker_id . '">  Read Bio </a>
                                                            </div>';
                                            $count++;
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
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-9 vc_col-md-9 vc_col-xs-12">
                    <div class="vc_column-inner">
                        <h4 class="main-heading">
                            <?php echo get_the_title(); ?>
                            <!-- <?php the_field(event_title); ?> -->
                        </h4>
                        <h5 style="font-weight:600;"> <?php the_field('event_date'); ?> &nbsp; - &nbsp; <span> <?php the_field('event_time'); ?> </span> &nbsp; <span> <?php the_field('time_zone'); ?> </span> &nbsp; <span> <?php the_field('select_event_type'); ?> </span>
                            <a href="<?php the_field('register_button_link'); ?>" class="pull-right mkdf-btn mkdf-btn-small register-button" target="_blank"> <?php the_field('register_button_text'); ?> </a>
                        </h5>
                        <div class="clearfix">
                            <div class="margin-top-20 mobile-contact-text">

                                <?php $button_text = get_field('exhibitor_button_name');
                                if ($button_text) {
                                ?>
                                    <a target="<?php the_field('exhibitor_button_click'); ?>" href="<?php the_field('exhibitor_button_link'); ?>" class="   mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-15 margin-right-15"> <?php the_field('exhibitor_button_name'); ?> </a>
                                <?php } ?>

                                <a href="#" class="<?php the_field('show_hide_presentation_section'); ?>   mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-15 margin-right-15" data-toggle="modal" data-target="#myVideo-<?php if ($the_query) {
                                                                                                                                                                                                                                                                                                                    echo '' . get_the_id($post->ID) . '';
                                                                                                                                                                                                                                                                                                                } ?>"> Watch Presentation </a>
                            </div>
                        </div>
                        <div class="description csb">
                            <?php the_field('event_description'); ?>
                        </div>
                        <?PHP if (get_field("download_btn_show_hide")) { ?>
                            <div>
                                <a target="_blank" href="<?php the_field('download_button_link'); ?>"><button class="show   mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-15 margin-right-15">Download Presentation</button></a>
                            </div>
                        <?PHP } ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    <?php endif; ?>
</div>