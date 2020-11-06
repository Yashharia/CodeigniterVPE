<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="Future-Presentation industry-section">
        <pre>
        <?php print_r($booth) ?>
        </pre>
        <?php
        //foreach ($booth as $row) {
        $true = 0;
        if ($true) {

        ?>
            <div id="<?= $row->booth_id; ?>"></div>
            <div class="<?= $row->show_special_offer ?> presentation-section industry-exhibitors <?= $row->show_profile_image; ?>" style="margin-bottom:0px !important; margin-top: 80px !important; padding-top:0px !important; padding-bottom:20px !important;">
                <h3 class="corner-ribbon top-right sticky orange">
                    <?= $row->booth_id; ?>
                </h3>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center profile-cover">
                    <a href="<?= $row->website; ?>" target="_blank"><img src="<?= base_url() . '/public/uploads/' . $row->profile_cover_image; ?>" class="img-responsive" /></a>
                    <br>
                    <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12 text-center usefull-links margin-top-20">
                        <?php
                        foreach ($allCallToActions as $allCallToActionsrows) {
                            foreach ($allCallToActionsrows as $calltoaction) {
                                if (($row->booth_id) == ($calltoaction->booth_id)) {
                                    $button_name = $calltoaction->name;
                                    $button_link = $calltoaction->link;

                                    echo '<a class="mkdf-btn mkdf-btn-small mkdf-btn-solid" href="' . $button_link . '" target="_blank" >' . $button_name . '</a>';
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="special-offer <?= $row->special_offer_theme; ?>">
                    <a href="<?= $row->special_offer_link; ?>" target="_blank">
                        <span class="small-text">Speacial Offer </span>
                        <span class="big-text"> Click Here </span>
                        <span class="text3">
                            <?= $row->special_offer_text; ?>
                        </span>
                        <span class="text4"> <?= $row->special_offer_validity; ?> </span>
                    </a>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6 vc_col-xs-12 text-center image-section" style="margin-top:15px;">
                    <div class="vc_column-inner ">
                        <div class="multiple-images">
                            <div id="myCarousel-<?= $row->booth_id; ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <?php
                                    // $companyimage = $row->company_image;
                                    // if (!empty($companyimage)) { 
                                    ?>
                                    <!-- //     <div class="item">
                                    //         <a href="/linkresponse?element=sliderimage1&bannerName=<?= $row->booth_id; ?>&url=<?= $row->website; ?>" target="_blank"> <img src="<?php ('company_image'); ?>" class="img-responsive" /></a>
                                    //     </div> -->
                                    <?php
                                    // $ytvideo = get_field('youtube_embed_code');
                                    // if (!empty($ytvideo)) { 
                                    ?>
                                    <!-- //     <div class="item">
                                    //         <embed><?php 'youtube_embed_code' ?></embed>
                                    //     </div> -->
                                    <?php //}
                                    $count = 1;
                                    $website_link_for_company_2 = $row->website;


                                    foreach ($sliders as $slidersrows) {
                                        foreach ($slidersrows as $slider) {

                                            if (($row->booth_id) == ($slider->booth_id)) {

                                                //if ($count > 2) {
                                                //    break;
                                                //}
                                                $speaker_id = $row->booth_id . $count;
                                                if ($slider->image) {
                                                    $presenter_image = $slider->image;
                                                    $postid = $row->booth_id;
                                                }
                                                if ($slider->video) {
                                                    $presenter_videos = $slider->video;
                                                }

                                                if (!empty($presenter_image)) {
                                                    echo '<div class="item">
                                                <a href="/linkresponse?element=sliderimage' . $count . '&bannerName=' . $postid . '&url=' . $website_link_for_company_2 . '" target="_blank">
                                                                <img src="' . base_url() . '/public/uploads/' . $presenter_image . '" class="img-responsive" />
                                                    </div></a>';
                                                    $count++;
                                                }
                                                if (!empty($presenter_videos)) {
                                                    echo '<div class="item">
                                                                    <embed> ' . $presenter_videos . '</embed>
                                                        </div>';
                                                    $count++;
                                                }
                                            }
                                        }
                                    }
                                    ?>
                                </div>

                                <?php if ($count - 1 > 0) { ?>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel-<?php $row->booth_id; ?>" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel-<?php $row->booth_id; ?>" data-slide="next">
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
                            <a href="<?= $row->website; ?>" target="_blank"><img src="<?= base_url() . '/public/uploads/' . $row->logo; ?>" class="img-thumbnail img-responsive" style="max-height:80px;" /></a>
                        </h4>
                        <div class="description csb">
                            <?= $row->description; ?>
                        </div>
                        <div class="usefull-links text-center">
                            <?php
                            foreach ($allCallToActions as $allCallToActionsrows) {
                                foreach ($allCallToActionsrows as $calltoaction) {
                                    if (($row->booth_id) == ($calltoaction->booth_id)) {

                                        $button_name = $calltoaction->name;
                                        $button_link = $calltoaction->link;
                                        echo '<a class="mkdf-btn mkdf-btn-small mkdf-btn-solid" href="' . $button_link . '" target="_blank" >' . $button_name . '</a>';
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </div>
</div>

<script type="text/javascript">
    jQuery(".carousel-inner .item:nth-child(1)").addClass("active");
</script>
<script>
    jQuery(document).ready(function() {
        jQuery.fn.carousel.Constructor.TRANSITION_DURATION = 4000 // 2 seconds
    });
</script>