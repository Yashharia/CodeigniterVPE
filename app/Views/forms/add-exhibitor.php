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
                        <div itemprop="breadcrumb" class="mkdf-breadcrumbs "><a itemprop="url" href="https://virtualpropaneexpo.com/">Home</a><span class="mkdf-delimiter">&nbsp; / &nbsp;</span><span class="mkdf-current">Add Exhibitor</span></div>
                    </div>
                </div>
            </div>
        </div>



        <div class="wpb_wrapper">
            <h1 style="color: #24678d;line-height: 42px;text-align: center" class="">Add Exhibitor</h1>
        </div>
    </div>
</div>
<div class="container">
    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() ?>/home/newbooth">
        <div>
            Company Name
            <input class="form-control" type="text" name="company-name">
        </div>

        <div>
            Website Link for company
            <input class="form-control" type="text" name="website-link">
        </div>

        <div>
            Type
            <select name="exhibitor_plan" id="">
                <option value="industry">industry</option>
                <option value="premium">premium</option>
                <option value="platinum">platinum</option>
            </select>
        </div>

        <div>
            Company Logo
            <input type="file" name="company-logo">
        </div>

        <div>
            <textarea class="form-control" name="company-description" id="" cols="30" rows="10"></textarea>
        </div>


        <hr>
        <div class="w3-bar w3-black">
            <a class="w3-bar-item w3-button" onclick="openCity('miov')">Marketing Image or Videos</a>
            <a class="w3-bar-item w3-button" onclick="openCity('abl')">Add buttons & links</a>
            <a class="w3-bar-item w3-button" onclick="openCity('aso')">Add Special offer</a>
        </div>
        <hr>

        <div id="miov" class="city">
            <div>
                Select Image or Video
                <select name="imageorvideo" id="">
                    <option value="">Image</option>
                    <option value="">Video</option>
                </select>
            </div>

            <div>Marketing image
                <input class="" type="file" name="marketing-image">
            </div>

            <div>
                Youtube embed code
                <textarea class="form-control" name="youtube-embed-code" id="" cols="30" rows="10"></textarea>
            </div>

            <div>
                Image or Video Reapeter
            </div>
            <div id="myRepeatingFields">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" type="checkbox" multiple="multiple" placeholder="Placeholder" />
                    <input class="form-control" name="marketing_image[]" type="file" placeholder="Maketing Image" />
                    <textarea row="5" class="form-control" name="video_link[]" placeholder="Youtube embed link">
                    </textarea>
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success btn-lg btn-add">
                            Add
                        </button>
                    </span>
                </div>
            </div>


            <div>
                Show Profile / Cover Image (Not required) <br>
                Profile cover Image is the full Banner size. We can show only Profile cover or Only content with logo. Profile Image size proportion approximately is - Width: 1200px and height: 500px
                <select name="show_profile_image" id="">
                    <option value="hide-profile-image">
                        hide full image
                    </option>
                    <option value="show-profile-image">
                        show full image
                    </option>

                </select>
            </div>

            <div>Profile Cover Image
                <input type="file" name="profile-cover-image" id="">
            </div>
        </div>

        <div id="abl" class="city" style="display:none">
            <div>
                Company Website Links
            </div>
            <div id="myRepeatingFields-2">
                <div class="entry input-group col-xs-3">
                    <input class="form-control" name="button_name[]" type="text" placeholder="Button Name" />
                    <input class="form-control" name="button_link[]" type="text" placeholder="Button Link" />
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-success btn-lg btn-add-2">
                            Add
                        </button>
                    </span>
                </div>
            </div>

            <div>
                Conference Link
                <input type="text" name="conference_link" id="">
            </div>
        </div>

        <div id="aso" class="city" style="display:none">
            <div>
                Show or Hide Special Offer
                <select name="show_special_offer" id="">
                    <option value="hide-special-offer">Hide special offer</option>
                    <option value="show-special-offer">Show special offer</option>
                </select>
            </div>
            <div>
                Select Red or Blue color theme
                <select name="red_blue_theme" id="">
                    <option value="blue-theme">blue-theme</option>
                    <option value="red-theme">red-theme</option>
                </select>
            </div>

            <div>
                Special Offer Text Only
                <input class="form-control" type="text" name="special_offer_text">
            </div>

            <div>
                Click here text only
                <input class="form-control" type="text" name="click_here_text">
            </div>

            <div>
                Special Offer Text: Terms and condition for Special Offer.
                <textarea name="special_offer_text" id="" cols="30" rows="10 " class="form-control"></textarea>
            </div>

            <div>
                Special offer validity like - "Valid Till June 30th"
                <input type="date" name="special_offer_validity">
            </div>

            <div>
                Link for Special offer Details page
                <input type="text" name="special_offer_link">
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