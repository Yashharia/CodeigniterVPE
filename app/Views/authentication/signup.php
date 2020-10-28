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
                        <div itemprop="breadcrumb" class="mkdf-breadcrumbs "><a itemprop="url" href="https://virtualpropaneexpo.com/">Home</a><span class="mkdf-delimiter">&nbsp; / &nbsp;</span><span class="mkdf-current">Attendees Registration Form</span></div>
                    </div>
                </div>
            </div>
        </div>



        <div>

            <h1 style="color: #24678d;line-height: 42px;text-align: center">Attendees Registration Form</h1>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <h2 class="wsite-content-title" style="text-align: center;"><span style="color: #24678d;"> Online Propane Expo COVID19 Alternative Safe, Easy &amp; FREE<br />
                                            <span style="font-size: x-large;">​</span></span></h2>

                                </div>
                            </div>

                            <div>
                                <div class="wpb_wrapper">
                                    <ul>
                                        <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Next Expo is on Oct 22, 2020 | 10AM &#8211; 5PM EST</li>
                                        <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">​​Let&#8217;s help the Propane Industry together. Join us for a first ever nationwide free expo to for new insights into the propane industry, connect with vendors and get special trade show only special offers and discounts. Register for FREE and receive:</li>
                                        <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Full access pass to all educational sessions</li>
                                        <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Unlimited pass to session recordings to share with your team</li>
                                        <li style="font-size: 18px; line-height: 30px; color: #000; margin-bottom: 20px;">Get trade show only special offers and discounts</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">


                    <div class="wpb_wrapper">
                        <h2 class="wsite-content-title" style="text-align: center;"><span style="color: #000; font-size: 30px; line-height: 36px;">REGISTER TODAY </span><br />
                            <span style="color: #e05c5c; font-size: 18px; line-height: 30px;"> Get your full access confirmation email. </span></h2>
                    </div>


                    <div>


                        <div class="um-form" data-mode="register">
                            <?php if (isset($message) && !empty($message)) :
                                echo $message;
                            ?>

                            <?php endif; ?>
                            <?php echo \Config\Services::validation()->listErrors() ?>
                            <form method="post" action="/vpe/public/user/newuser">
                                <input type="hidden" name="form_name" value="attendee">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <input autocomplete="off" class="form-control" type="text" name="first_name" value="" placeholder="First Name *" data-validate="" data-key="first_name" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input autocomplete="off" class="form-control" type="text" name="last_name" id="last_name-9719" value="" placeholder="Last Name *" data-validate="" data-key="last_name" />
                                    </div>
                                </div>
                                <div>
                                    <input autocomplete="off" class="form-control" type="text" name="u_email" id="user_email-9719" value="" placeholder="E-mail Address *" data-validate="unique_email" data-key="user_email" />
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="number" name="u_phone" id="phone-number-9719" value="" placeholder="Phone Number *" data-validate="" data-key="phone-number" />
                                    </div>

                                    <div class="col-sm-6">
                                        <input autocomplete="off" class="form-control" type="text" name="job_title" id="job-title-9719" value="" placeholder="Job Title *" data-validate="" data-key="job-title" />
                                    </div>
                                </div>


                                <div>
                                    <input autocomplete="off" class="form-control" type="text" name="company_name" id="company-name-9719" value="" placeholder="Company Name *" data-validate="" data-key="company-name" />
                                </div>

                                <div>
                                    <input autocomplete="off" class="form-control" type="text" name="what_brought_you" id="who-brought-you-vpe-today-9719" value="" placeholder="What or Who Brought You to VPE Today? *" data-validate="" data-key="who-brought-you-vpe-today" />
                                </div>

                                <div id="um_field_9719_contact_me" class="um-field um-field-checkbox  um-field-contact_me um-field-checkbox um-field-type_checkbox" data-key="contact_me">
                                    <div class="um-field-label"><label for="contact_me-9719">Contact Me</label>

                                    </div>
                                    <label class="um-field-checkbox  um-field-half "><input type="checkbox" name="contact_me[]" value="I have an idea on how VPE might be improved *" /><span class="um-field-checkbox-state"><i class="um-icon-android-checkbox-outline-blank"></i></span><span class="um-field-checkbox-option">I have an idea on how VPE might be improved *</span></label>

                                </div>
                        </div>
                    </div>


                    <div class="um-col-alt">


                        <div class="um-center">
                            <input type="submit" value="Register" class="btn btn-block btn-info" id="um-submit-btn" />
                        </div>




                    </div>


                    </form>




                    <div class="wpb_text_column wpb_content_element  vc_custom_1594226356146">
                        <div class="wpb_wrapper">
                            <div class="logout-text">
                                <h5 style="color: #000; text-align: center; width: 70%; margin: auto; font-size: 24px; line-height: 36px;">To register again with a different email address, please log out first.<br />
                                    <a class="btn btn-info registration-button" style="font-size: 22px; line-height: 36px; margin-top: 15px; display: inline-block;" href="https://virtualpropaneexpo.com/un-logout/"> Log out </a></h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div> <!-- close div.content_inner -->
</div>