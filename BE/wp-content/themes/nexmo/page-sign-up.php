<div id="dashboard" class="">
	<?php get_header('login')?>
	<main id="signup" class="container-content">
    <div class="container" id="main">
        <div class="row login-content" id="signup-content">
            <form id="registration-form" novalidate="novalidate" class="form-validate has-validation-callback" action="<?php echo add_query_arg('do', 'register', get_permalink( $post->ID )); ?>" method="post" autocomplete="off">

                <div class="col-md-12 ">


                    <input style="display:none">
                    <input type="password" style="display:none">


                    <div class="row">
                        <div class="form-group col-md-6">

                            <label class="sr-only" for="firstName">First name</label>
                            <input id="firstName" name="firstName" data-validation="firstname_custom" data-validation-error-msg="You can't leave this empty" placeholder="First name" type="type" class="form-control input-lg" required="true" value="<?php if(isset($_POST['user'])) echo $_POST['first_name'];?>">
                            <span class="fa fa-2x form-control-feedback hide"></span>

                        </div>
                        <div class="form-group col-md-6">

                            <label class="sr-only" for="lastName">Last name</label>
                            <input id="lastName" name="lastName" data-validation="lastname_custom" data-validation-error-msg="You can't leave this empty" placeholder="Last name" type="type" class="form-control input-lg" required="true" value="<?php if(isset($_POST['user'])) echo $_POST['last_name'];?>">
                            <span class="fa fa-2x form-control-feedback hide"></span>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">

                            <label class="sr-only" for="companyName">Company name (optional)</label>
                            <input id="companyName" name="companyName" placeholder="Company name (optional)" type="type" class="form-control input-lg" required="false" value="">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">

                            <label class="sr-only" for="email">Email address</label>
                            <input id="email" name="email" data-validation="email" data-validation-error-msg="Enter a valid email address (used for password reset and notifications)" placeholder="Email address" type="email" class="form-control input-lg" required="true" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">
                            <span class="fa fa-2x form-control-feedback hide"></span>

                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <input id="country" name="phoneCountry" type="hidden" required="true" value="VN" data-validation="required" data-validation-error-msg="Select a country">


                            <label class="sr-only" for="phone">Phone number</label>
                            <div class="intl-tel-input allow-dropdown separate-dial-code iti-sdc-3">
                                <input id="phone" name="phone" data-popover-content="#phone-popover" data-validation="phone_custom" data-validation-error-msg="Enter a valid landline or mobile number, VoIP numbers are not accepted" rel="popover" placeholder="Phone number" type="text" data-trigger="focus" class="form-control input-lg" required="true" value="<?php if(isset($_POST['phone'])) echo $_POST['phone'];?>" autocomplete="off"></div>
	                            <span class="fa fa-2x form-control-feedback hide icon-display"></span>
	                            <div id="phone-popover" class="hide">
	                                <ul>
	                                    <li>Landline or mobile number</li>
	                                    <li>Number will be verified by PIN code</li>
	                                    <li>VoIP numbers are not accepted</li>
	                                </ul>
                            </div>


                            <span class="help-block form-info phone-info hide">We will send you a verification code to this number either via SMS or voice message in order to verify that you own this phone number.<br><br>We do not accept virtual numbers (VOIP).</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">

                            <label class="sr-only" for="password">Password</label>
                            <input id="password" name="password" data-popover-content="#pass-popover" data-validation="password_custom" data-validation-error-msg="Provide a password of at least 8 characters, including one capital letter and one number" rel="popover" placeholder="Password" data-trigger="focus" type="password" class="form-control input-lg" required="true" value="" maxlength="25" autocomplete="new-password">
                            <span class="fa fa-2x form-control-feedback hide "></span>

                            <div id="pass-popover" class="hide">
                                <div>At least:</div>
                                <ul>
                                    <li class="fail">8 characters</li>
                                    <li class="fail">one capital letter</li>
                                    <li class="fail">one number</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <div id="g-recaptcha" data-sitekey="6LcLrBUUAAAAAGEZW-fFR_gh49-wGY0BIzVZHc6B"></div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12" style="margin-bottom: 0">
                            <p class="last">By clicking on the Sign up button or otherwise using our services, you agree to be bound by the <a href="<?php echo HOME_URL;?>/terms-use" target="_blank">Terms of Use</a> and <a href="<?php echo HOME_URL;?>//privacy-policy" target="_blank">Privacy Policy</a>.</p>
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="form-group col-md-12">
                            <input type="submit" id="submitButton" name="_signUpForm" class="btn btn-primary btn-lg btn-block" value="SIGN UP">
                            <a href="/sign-in" role="button" id="signinButton" class="btn btn-link on-mobile pad-top">Already have an account? Log In</a>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="hidden" name="_csrf" value="56a94f51-3881-4faf-9ef7-c18343075bcc">
                </div>
            </form>
        </div>
    </div>
</main>
</div>
<?php echo get_footer('login')?>
