<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register a New </title>
</head>

<body>




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
                            <div itemprop="breadcrumb" class="mkdf-breadcrumbs "><a itemprop="url" href="https://virtualpropaneexpo.com/">Home</a><span class="mkdf-delimiter">&nbsp; / &nbsp;</span><span class="mkdf-current">Presenter Registration Form</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div>
                    <h2 style="text-align: center; line-height: 35px !important;">Presenter Registration Form</h2>
                </div>
                <div>
                    <h2 style="text-align: center; font-size: 34px;"><a style="color: #08c !important;" href="https://virtualpropaneexpo.com/presenter-requirements/" target="_blank" rel="noopener noreferrer"> Click here to see Presenter Requirements and FAQ </a></h2>
                </div>



                <div class="row">

                    <div class="col-sm-6">
                        <h2 class="wsite-content-title" style="text-align: center;"><span style="color: #24678d;"> Online Propane Expo COVID19 Alternative Safe, Easy &amp; FREE<br />
                                <span style="font-size: x-large;">​</span></span></h2>

                        <div>
                            <ul>
                                <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">​​Let&#8217;s help the Propane Industry together. Join us for a first ever nationwide free expo to for new insights into the propane industry, connect with vendors and get special trade show only special offers and discounts. Register for FREE and receive:</li>
                                <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Full access pass to all educational sessions</li>
                                <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Unlimited pass to session recordings to share with your team</li>
                                <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Get trade show only special offers and discounts</li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-sm-6">

                        <div>
                            <div class="wpb_wrapper">
                                <h2 class="wsite-content-title" style="text-align: center;"><span style="color: #000; font-size: 30px; line-height: 36px;"> PRESENTER REGISTRATION FORM </span><br />
                                    <span style="color: #e05c5c; font-size: 18px; line-height: 30px;"> Get your full access confirmation email. </span></h2>

                            </div>
                        </div>



                        <?php if (isset($message) && !empty($message)) :
                            echo $message;
                        ?>

                        <?php endif; ?>
                        <?php echo \Config\Services::validation()->listErrors() ?>
                        <form action='/vpe/public/user/newuser' method="post">

                            <div class="row">
                                <input type="hidden" name="form_name" value="presenter">
                                <div class="col-sm-6">
                                    <input autocomplete="off" class="form-control" type="text" name="first_name" value="" placeholder="First Name *" data-validate="" data-key="first_name" />
                                </div>

                                <div class="col-sm-6">
                                    <input autocomplete="off" class="form-control" type="text" name="last_name" value="" placeholder="Last Name *" data-validate="" data-key="last_name" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <input autocomplete="off" class="form-control" type="text" name="u_email" id="user_email-13211" value="" placeholder="E-mail Address *" data-validate="unique_email" data-key="user_email" />
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-sm-6">
                                    <input autocomplete="off" class="form-control " type="text" name="username" id="user_login-13211" value="" placeholder="Username" data-validate="unique_username" data-key="user_login" />
                                </div>

                                <div class="col-sm-6">
                                    <input class="form-control " type="password" name="u_password" id="user_password-13211" value="" placeholder="Password" data-validate="" data-key="user_password" />
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-sm-6">
                                    <input class="form-control" type="number" name="u_phone" id="phone-number-13211" value="" placeholder="Phone Number *" data-validate="" data-key="phone-number" />
                                </div>

                                <div class="col-sm-6">
                                    <input autocomplete="off" class="form-control " type="text" name="job_title" id="job-title-13211" value="" placeholder="Job Title *" data-validate="" data-key="job-title" />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <input autocomplete="off" class="form-control " type="text" name="company_name" id="company-name-13211" value="" placeholder="Company Name *" data-validate="" data-key="company-name" />
                                </div>

                                <div class="col-sm-6">
                                    <input autocomplete="off" class="form-control " type="text" name="company_website" id="company-website-13211" value="" placeholder="Company Website *" data-validate="" data-key="company-website" />
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-12">
                                    <input autocomplete="off" class="form-control " type="text" name="presentation_title" id="who-brought-you-vpe-today-13211" value="" placeholder="Presentation Title" data-validate="" data-key="who-brought-you-vpe-today" />
                                </div>

                                <div class="col-12">
                                    <textarea style="height: 100px;" class="form-control " name="presenter_description" id="describe-the-topic-new-2" placeholder="Describe the topic you would like to speak about*"></textarea>
                                </div>

                                <div class="col-12">
                                    <textarea style="height: 100px;" class="form-control " name="what_brought_you" id="describe-the-topic-new-2_19" placeholder="What or Who Brought You to VPE Today? *"></textarea>
                                </div>
                            </div>


                            <div>
                                <div>When do you prefer to speak?*</div>
                                <div class="um-field-area">
                                    <label><input type="checkbox" name="click-here-to-confirm[]" value="October 22" />October 22</label><br>
                                    <label><input type="checkbox" name="click-here-to-confirm[]" value="January 21" />January 21</label><br>
                                    <label><input type="checkbox" name="click-here-to-confirm[]" value="February 18" />February 18</label>
                                </div>
                            </div>


                            <div>
                                <div class="">What is your preferred time/s to speak? (can select multiple)</div>
                                <div class="">
                                    <label class="um-field-checkbox  um-field-half "><input type="checkbox" name="click-here-to-confirm_19[]" value="10 am" />10 am</label><br>
                                    <label class="um-field-checkbox  um-field-half right"><input type="checkbox" name="click-here-to-confirm_19[]" value="11 am" />11 am</label><br>
                                    <label class="um-field-checkbox  um-field-half "><input type="checkbox" name="click-here-to-confirm_19[]" value="12 noon" />12 noon</label><br>
                                    <label class="um-field-checkbox  um-field-half right"><input type="checkbox" name="click-here-to-confirm_19[]" value="1 pm" />1 pm</label><br>
                                    <label class="um-field-checkbox  um-field-half "><input type="checkbox" name="click-here-to-confirm_19[]" value="2 pm" />2 pm</label><br>
                                    <label class="um-field-checkbox  um-field-half right"><input type="checkbox" name="click-here-to-confirm_19[]" value="3 pm" />3 pm</label><br>
                                    <label class="um-field-checkbox  um-field-half "><input type="checkbox" name="click-here-to-confirm_19[]" value="4 pm" />4 pm</label><br>
                                </div>
                            </div>



                            <input type="hidden" name="timestamp" class="um_timestamp" value="1603358475" />

                            <p class="um_request_name">
                                <label for="um_request_13211">Only fill in if you are not human</label>
                                <input type="hidden" name="um_request" id="um_request_13211" class="input" value="" size="25" autocomplete="off" />
                            </p>

                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="474b0a18bc" /><input type="hidden" name="_wp_http_referer" value="/presenter-registration-form/" />
                            <div class="um-field">
                                <div class="g-recaptcha" id="um-13211" data-type="image" data-size="normal" data-theme="light" data-sitekey="6LcLNAEVAAAAAP_rzDXiy_Pv_9DX_aoRQ9hGtAfD"></div>
                            </div>



                            <div>
                                <input type="submit" value="Register" class="btn-info btn-lg" id="um-submit-btn" />
                            </div>



                        </form>



                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div> <!-- close div.content_inner -->
    </div>