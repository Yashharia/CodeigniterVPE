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
                        <div itemprop="breadcrumb" class="mkdf-breadcrumbs "><a itemprop="url" href="https://virtualpropaneexpo.com/">Home</a><span class="mkdf-delimiter">&nbsp; / &nbsp;</span><span class="mkdf-current">UN Login</span></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">

                    <div class="text-center">
                        <img width="242" height="306" src="https://virtualpropaneexpo.com/wp-content/uploads/2020/05/specoffer_orig.png" alt="" />
                    </div>

                    <div class="">
                        <div class="wpb_wrapper">
                            <h2 class="wsite-content-title" style="text-align: center;"><span style="color: #24678d;"><span style="font-size: xx-large;">LIMITED TIME &#8211; FREE EXHIBITOR SIGNUP</span><br />
                                    <span style="font-size: x-large;">​</span></span><span style="color: #e05c5c;"><span style="font-size: x-large;">(FREE for the first 275 exhibitors)</span></span></h2>
                            <div class="paragraph" style="text-align: left;">
                                <ul>
                                    <li><span style="color: #2a2a2a; font-size: medium;"><em>$500 Trade Show(Expo fee) for exhibitor booth</em><em>(Free to the first 275 exhibitors)</em></span></li>
                                    <li><span style="font-size: medium;"><em><span style="color: #2a2a2a;">$1500 per </span></em><em style="color: #2a2a2a;">Trade Show(Expo fee)</em><em><span style="color: #2a2a2a;"> for Partnership(Sponsor) level for improved placement and inclusion in eblast.</span></em></span><br />
                                        <span style="font-size: medium;"><em><span style="color: #2a2a2a;">​</span></em></span><br />
                                        ​<a href="/" target="_blank" rel="noopener noreferrer"><span style="color: #007398;">LEARN MORE ON HOW TO INCREASE YOUR MARKETING COVERAGE ON THE VIRTUAL PROPANE EXPO</span></a></li>
                                </ul>
                            </div>
                            <div>
                                <div class="wsite-image wsite-image-border-none " style="padding-top: 10px; padding-bottom: 10px; margin-left: 0; margin-right: 0; text-align: center;">
                                    <div style="display: block; font-size: 90%;"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


                <div class="col-sm-6">

                    <div>
                        <h2 class="wsite-content-title" style="text-align: center;"><span style="color: #000;"><span style="font-size: xx-large;"> GET YOUR VIRTUAL BOOTH</span><br />
                                <span style="font-size: x-large;">​</span></span><span style="color: #e05c5c;"><span style="font-size: x-large;">(FREE for the first 275 exhibitors)</span></span></h2>
                    </div>

                    <div>

                        <div class="um um-login um-7401">

                            <div class="um-form">
                                <?php if (isset($message) && !empty($message)) :
                                    echo $message;
                                ?>

                                <?php endif; ?>
                                <?php echo \Config\Services::validation()->listErrors() ?>
                                <?php echo form_open('user/checkuser'); ?>

                                <div class="um-row _um_row_1 " style="margin: 0 0 30px 0;">
                                    <div class="um-col-1">
                                        <div id="um_field_7401_username" class="um-field um-field-text  um-field-username um-field-text um-field-type_text" data-key="username">
                                            <div class="um-field-label"><label for="username-7401">Username or E-mail<span class="um-req" title="Required">*</span></label>
                                                <div class="um-clear"></div>
                                            </div>
                                            <div class="um-field-area ">
                                                <?php echo form_input('email', '', ['class' => "form-control"]); ?>
                                            </div>
                                        </div>
                                        <div id="um_field_7401_user_password" class="um-field um-field-password  um-field-user_password um-field-password um-field-type_password" data-key="user_password">
                                            <div class="um-field-label"><label for="user_password-7401">Password<span class="um-req" title="Required">*</span></label>
                                                <div class="um-clear"></div>
                                            </div>
                                            <div class="um-field-area">
                                                <?php echo form_password('password', '', ['name' => "user_password-7401", 'class' => "form-control"]); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <label class="um-field-checkbox ">
                                        <input type="checkbox" name="rememberme" value="1" />
                                        Keep me signed in
                                    </label>
                                </div>


                                <div class="row">
                                    <div class="col-sm-6">

                                        <?php echo form_submit('mybutton', 'Login Now', ['class' => "btn btn-lg btn-block btn-info"]); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <a href="https://virtualpropaneexpo.com/exhibitor-registration-form/" class="btn btn-lg btn-block">
                                            Register </a>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <a href="https://virtualpropaneexpo.com/password-reset/" class="um-link-alt">
                                        Forgot your password? </a>
                                </div>
                                <?php form_close(); ?>
                            </div>
                        </div>
                    </div>


                    <div class="">
                        <div class="wpb_wrapper">
                            <h4>VPE Was Created in thespirit of serving the industry with an affordable and Accessible Expo Platform.</h4>
                        </div>
                    </div>


                </div>
            </div> <!-- close div.content_inner -->
        </div>