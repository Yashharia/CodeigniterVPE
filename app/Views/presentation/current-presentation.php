<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container">
    <div class="Future-Presentation">
        <pre>
    <?php //print_r($all);
    //print_r($allSpeakers);
    ?></pre>

        <?php
        foreach ($all as $row) {

        ?>


            <div class="vc_row wpb_row vc_row-fluid presentation-section" style="margin-bottom:40px !important; padding-top:15px !important; padding-bottom:20px !important;">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-3 vc_col-md-3 vc_col-xs-12 text-center">
                    <div class="vc_column-inner">
                        <div class="multiple-images">
                            <div id="myCarousel-<?= $row->p_id; ?>" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    <?php $count = 0;
                                    foreach ($allSpeakers as $speakerrows) {
                                        foreach ($speakerrows as $speaker) {

                                            if (($row->p_id) == ($speaker->presentation_id)) {
                                                $speaker_id = $row->p_id . $count;
                                                $presenter_image =  base_url() . '/public/uploads/' . $speaker->image;
                                                $presenter_full_name = $speaker->full_name;
                                                $presenter_designation = $speaker->job_title;
                                                echo '<div class="item">
                                                                <img src="' . $presenter_image . '" alt="' . $presenter_full_name . '" class="img-responsive" />
                                                                <h5 class="designation"><strong> ' . $presenter_full_name . ' </strong></h5>
                                                                <h5 class="sub-designation"> ' . $presenter_designation . ' </h5>
                                                                <a href="#" class=" mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-20 margin-right-15" data-toggle="modal" data-target="#myModal-' . $speaker_id . '">  Read Bio </a>
                                                            </div>';
                                                $count++;
                                            }
                                        }
                                    }
                                    ?>
                                </div>

                                <?php if ($count - 1 > 0) { ?>
                                    <!-- Left and right controls -->
                                    <a class="left carousel-control" href="#myCarousel-<?php echo '' . $row->p_id . ''; ?>" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#myCarousel-<?php echo '' . $row->p_id . ''; ?>" data-slide="next">
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
                            <?= $row->title ?>
                        </h4>
                        <h5 style="font-weight:600;"> <?= $row->event_date; ?> &nbsp; - &nbsp; <span> <?= $row->preferred_time; ?> </span> &nbsp; <span> <?= $row->timezone; ?> </span> &nbsp; <span> <?= $row->event_type; ?> </span>
                            <a href="register_button_link" class="pull-right mkdf-btn mkdf-btn-small register-button" target="_blank"> register_button_text </a>
                        </h5>
                        <div class="clearfix">
                            <div class="margin-top-20 mobile-contact-text">

                                <?php $button_text = $row->exhibitor_button_name;
                                if ($button_text) {
                                ?>
                                    <a target="_blank" href="<?= $row->exhibitor_button_link; ?>" class="   mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-15 margin-right-15"> <?php echo $button_text ?> </a>
                                <?php } ?>

                                <a href="#" class="  mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-15 margin-right-15" data-toggle="modal" data-target="#myVideo-<?php echo '' . $row->p_id . ''; ?>"> Watch Presentation </a>
                            </div>
                        </div>
                        <div class="description csb">
                            <?= $row->description; ?>
                        </div>
                        <?PHP if ($row->download_btn_show_hide) { ?>
                            <div>
                                <a target="_blank" href="<?php $row->conference_link; ?>"><button class="show   mkdf-btn mkdf-btn-small mkdf-btn-solid mkdf-btn-custom-hover-bg mkdf-btn-custom-border-hover mkdf-btn-custom-hover-color margin-bottom-15 margin-right-15">Download Presentation</button></a>
                            </div>
                        <?PHP } ?>
                    </div>
                </div>
            </div>

    </div>
    <?php $speakercount = 0;
            foreach ($allSpeakers as $speakerrows) {
                foreach ($speakerrows as $speaker) {

                    if (($row->p_id) == ($speaker->presentation_id)) {
                        $speaker_id = $row->p_id . $speakercount;
                        $presenter_image =  base_url() . '/public/uploads/' . $speaker->image;
                        $presenter_full_name = $speaker->full_name;
                        $presenter_designation = $speaker->job_title; ?>
                <div class="modal fade" id="myModal-<?= $speaker_id ?>" role="dialog">
                    <div class="modal-dialog" style="z-index:999;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title"> <?= $presenter_full_name ?></h4>
                            </div>
                            <div class="modal-body">
                                <div class="clearfix">
                                    <img src="<?= $presenter_image ?>" class="img-thumbnail img-responsive pull-left margin-right-10 margin-bottom-10" style="max-width:100px;" />
                                    $speaker_information_multiple
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-backdrop fade in" style="z-index: 9;"></div>
                </div>
    <?php
                        $speakercount++;
                    }
                }
            }
    ?>

<?php } ?>

</div>
<script type="text/javascript">
    jQuery(".carousel-inner .item:nth-child(1)").addClass("active");
</script>