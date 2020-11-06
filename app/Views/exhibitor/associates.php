<div class="container">
    <?php foreach ($all as $row) { ?> <div class="vc_row wpb_row vc_row-fluid presentation-section associations-section yes" style="margin-bottom:20px !important; margin-top:20px; padding-top:10px !important; padding-bottom:0px !important;">
            <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12 vc_col-xs-12" style="margin-top:0px;">
                <div class="vc_column-inner">
                    <h3 class="corner-ribbon-new top-right sticky orange">
                        VPE Assoc. Partner
                    </h3>
                    <h4> <?= $row->name; ?> </h4>
                    <?php
                    foreach ($allCallToActions as $allCallToActionsrows) {
                        foreach ($allCallToActionsrows as $calltoaction) {
                            if (($row->association_id) == ($calltoaction->association_id)) {
                                $website_name = $calltoaction->name;
                                $live_website_link = $calltoaction->link;
                                echo '<a class="mkdf-btn mkdf-btn-small mkdf-btn-solid" href="' . $live_website_link . '" target="_blank" >' . $website_name . '</a>';
                            }
                        }
                    }
                    ?>
                    <ul>
                        <?php
                        foreach ($allSpeakers as $speakerrows) {
                            foreach ($speakerrows as $speaker) {

                                if (($row->association_id) == ($speaker->association_id)) {
                                    $associations_partners_name = $speaker->full_name;

                                    echo '<li>' . $associations_partners_name . '</li>';
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    <?php   } ?>
</div>