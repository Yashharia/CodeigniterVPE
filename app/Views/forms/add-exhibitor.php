<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
<style>
    .entry:not(:first-of-type) {
        margin-top: 10px;
    }

    .glyphicon {
        font-size: 12px;
    }
</style>
<div class="container">
    <form method="post" action="/vpe/public/home/newpresentation">
        <div class="col">
            Company Name
            <input class="form-control" type="text" name="company-name">
        </div>

        <div>
            Select Main Category
            <select name="Select Main Category" id="">
                <option value="">
                    Industry Exhibitor
                </option>
                <option value="">
                    Premium Exhibitor
                </option>
            </select>
        </div>

        <div>
            Website Link for company
            <input class="form-control" type="text" name="Website Link for company">
        </div>

        <div>
            Company Logo
            Note: Your logo will be automatically resized once it’s live to fit well on the website.
            <input class="form-control" type="file" name="company_logo">
        </div>

        <div>
            Home Company Logo
            Note: This is your logo that will appear on the home page. Image size will be automatically resized to 70px by height.
            <input class="form-control" type="file" name="home_company_logo">
        </div>

        <div>
            Home Platinum Company Logo
            Note: This is your logo that will appear on the home page. Image size will be automatically resized to 70px by height.
            <input class="form-control" type="file" name="home_platinum_company_logo">
        </div>

        <div>
            Company Description
            <textarea class="form-control" name="company_description" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            Select Image or Video
            <option value="select-image">Select Image</option>
            <option value="select-video">Select Video</option>
        </div>

        <div>
            Marketing Image
            Image size proportion approximately is - Width: 600px and height: 500px
            <input class="form-control" type="file" name="marketing_image">
        </div>

        <div>
            Youtube Embed Code
            Add Youtube embed link below.
            <textarea class="form-control" name="youtube_embed_code" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            Images Or Videos Repeater ( Only more 3 can show in the Website )
        </div>

        <div>
            Speaker/s Bio
        </div>
        <div id="myRepeatingFields">
            <div class="entry input-group col-xs-3">
                Video?
                Check to add more video
                <input class="form-control" class="form-control" name="speaker_headshots[]" type="file" multiple="multiple" placeholder="Placeholder" />
                Marketing Image
                <input class="form-control" class="form-control" name="speaker_full_names[]" type="text" placeholder="Placeholder" />
                Video Embed Link
                <input class="form-control" class="form-control" name="speaker_job_titles[]" type="text" placeholder="Placeholder" />
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add">
                        Add more Video or marketing images</span>
                </button>
                </span>
            </div>
        </div>

        <div>
            Show Profile / Cover Image (Not required)
            Profile cover Image is the full Banner size. We can show only Profile cover or Only content with logo. Profile Image size proportion approximately is - Width: 1200px and height: 500px
            <select name="show_profile" id="">
                <option value="hide-profile-image">Hide profile image</option>
                <option value="show-profile-image">show profile image</option>
            </select>
        </div>

        <div>
            Profile Cover Image
            <input class="form-control" type="file" name="profile_cover_image">
        </div><br><br>


        Note: We can not show more than 3 buttons for Industry Exhibitors but we can show unlimited buttons for Premium Exhibitors.
        <div id="myRepeatingFields">
            <div class="entry input-group col-xs-3">
                <div>
                    Company Website Links
                    <input class="form-control" class="form-control" name="company_website_link[]" type="text" />
                </div>
                <span class="input-group-btn">
                    <button type="button" class="btn btn-success btn-lg btn-add">
                        Add Link
                    </button>
                </span>
            </div>
        </div>

        <div>
            Conference Link
            <input class="form-control" type="text" name="conference_link">
        </div>

        <br><br><br>
        <hr>

        (Only available to Premium and Platinum exhibitors)


        <div>
            Show or Hide Special Offer
            <select name="show_or_hide_special_offer" id="">
                <option value="hide-special-offer">Hide Special offer</option>
                <option value="show-special-offer">Show Special offer</option>
            </select>
        </div>

        <div>
            Select Red or Blue color theme
            <select name="Select Red or Blue color theme" id="">
                <option value="blue-theme">Blue theme</option>
                <option value="red-theme">Red theme</option>
            </select>
        </div>

        <div>
            Special Offer Text Only
            <input class="form-control" type="text" name="Special Offer Text Only">
        </div>

        <div>
            Click Here Text Only
            <input class="form-control" type="text" name="Click Here Text Only">
        </div>

        <div>
            Special Offer Text: Terms and condition for Special Offer.
            <textarea class="form-control" name="Special Offer Text: Terms and condition for Special Offer." id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            Special offer validity like - "Valid Till June 30th"
            <input class="form-control" type="text" name="Special offer validity">

        </div>

        <div>
            Link for Special offer Details page
            <input class="form-control" type="text" name="Link for Special offer Details page">
        </div>




        <div class="col">
            <input class="form-control btn-block btn-info" type="submit">
        </div>
    </form>
</div>
<!-- jQuery and JS bundle w/ Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script>
    $(function() {
        $(document)
            .on("click", ".btn-add", function(e) {
                e.preventDefault();
                var controlForm = $("#myRepeatingFields:first"),
                    currentEntry = $(this).parents(".entry:first"),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);
                newEntry.find("input").val("");
                controlForm
                    .find(".entry:not(:last) .btn-add")
                    .removeClass("btn-add")
                    .addClass("btn-remove")
                    .removeClass("btn-success")
                    .addClass("btn-danger")
                    .html("");
            })
            .on("click", ".btn-remove", function(e) {
                e.preventDefault();
                $(this).parents(".entry:first").remove();
                return false;
            });
    });
</script>