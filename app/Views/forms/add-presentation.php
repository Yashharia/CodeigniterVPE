<style>
    .entry:not(:first-of-type) {
        margin-top: 10px;
    }

    .glyphicon {
        font-size: 12px;
    }
</style>
<a id='mkdf-back-to-top' href='#'>
    <span class="mkdf-icon-stack">
        <i class="mkdf-icon-font-awesome fa fa-angle-up "></i> </span>
</a>
<div class="mkdf-team-modal-holder"></div>
<div class="mkdf-content">
    <div class="mkdf-content-inner">
        <div class="mkdf-title-holder mkdf-breadcrumbs-type mkdf-title-predefined-size" style="height: 130px;background-color: #f7f7f7" data-height="130">
            <div class="mkdf-title-wrapper" style="height: 130px">
                <div class="mkdf-title-inner">
                    <div class="mkdf-grid">
                        <div itemprop="breadcrumb" class="mkdf-breadcrumbs "><a itemprop="url" href="https://virtualpropaneexpo.com/">Home</a><span class="mkdf-delimiter">&nbsp; / &nbsp;</span><span class="mkdf-current">Add Presentation</span></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="wpb_wrapper">
            <h1 style="color: #24678d;line-height: 42px;text-align: center" class="">Add Presentation</h1>
        </div>
    </div>
</div>
<div class="container">
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>/home/newpresentation">
        <div>
            Presentation Title
            <input class="form-control" type="text" name="presentation-title">
        </div>

        <div class="w3-bar w3-black">
            <a class="w3-bar-item w3-button" onclick="openCity('EventInfo')">Event Information</a>
            <a class="w3-bar-item w3-button" onclick="openCity('SpeakerInfo')">Speaker Information</a>
            <a class="w3-bar-item w3-button" onclick="openCity('RegBtn')">Register Button Section</a>
        </div>

        <div id="EventInfo" class="city">
            <div>
                Event date
                <input class="form-control" type="date" name="event_date">
            </div>

            <div>Preferred Time
                <input class="form-control" type="time" name="preferred_time">
            </div>

            <div>
                Select time zone
                <select class="form-control" name="timezone">
                    <option value="EST">EST</option>
                </select>
            </div>

            <div>Select Event Type
                <select class="form-control" name="event-type" id="">
                    <option value="Live Event">Live Event</option>
                    <option value="Recorded Event">Recorded Event</option>
                </select>
            </div>

            <div>
                Presentation Description
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                Email Address:
                <input class="form-control" name="email_address" type="text" />
            </div>
        </div>

        <div id="SpeakerInfo" class="city" style="display:none">
            <div>
                Speaker/s Bio
            </div>
            <div id="myRepeatingFields">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" name="speaker_headshots[]" type="file" multiple="multiple" placeholder="Placeholder" />
                    <input class="form-control" name="speakerNames[]" type="text" placeholder="Speaker Full Name" />
                    <input class="form-control" name="speaker_job_titles[]" type="text" placeholder="Job Title" />
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success btn-lg btn-add">
                            Add
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div id="RegBtn" class="city" style="display:none">
            <div>
                Register Button Text
                <input class="form-control" type="text" name="register_button_text">
            </div>
            <div>
                Register Button Link
                <input class="form-control" type="text" name="register_button_link">


            </div>
            <div>
                Conference Link
                <input class="form-control" type="text" name="conference_link">
            </div>

            <div>
                Download Link
                <input class="form-control" type="text" name="download_link">

            </div>
        </div>

        <div class="col">
            <input class="form-control btn-info " type="submit">
        </div>
    </form>
</div>

<script>
    function openCity(cityName) {
        var i;
        var x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        document.getElementById(cityName).style.display = "block";
    }
</script>