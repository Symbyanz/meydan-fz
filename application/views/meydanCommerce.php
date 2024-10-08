<?php $titles = explode("/", $title); ?>




<style>
    img.wp-smiley,
    img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
    }

    .ecom-logo {
        display: flex;
        align-items: center;
        margin: 50px 0;
    }

    .ecom-logo .ecom-logo__img {
        margin-right: 30px;
    }

    .intro--ecom .intro__info {
        margin: 0;
        text-shadow: 2px 2px 5px black
    }

    .ecomm-intro {
        margin: 50px 0;
    }

    .ecomm-intro h2 {
        margin: 0 0 30px;
    }

    .ecomm-intro h2 img {
        width: 22%;
    }

    .ecomm-intro .sec-descr {
        margin: 0 0 40px;
    }

    .bnfit-ftr--ecomm .ftr__icon {
        margin: 0 0 10px;
        width: 50%;
    }

    .hwget-meydan {
        margin: 10px 0 50px;
        padding: 10px 0 0px;
    }

    .hwget-meydan__prcs {
        display: flex;
        margin: 50px 0;
    }

    .hwget-meydan__prcs .prcs {
        width: 240px;
        height: 240px;
        position: relative;
        background: url(/public/images/circle1.png) no-repeat left center;
        background-size: contain;
        margin-right: 70px;
        padding: 35px 25px 40px 100px;
        line-height: 17px;
        font-weight: 400;
        font-size: 14px;
        display: flex;
        align-items: center;
    }

    .hwget-meydan__prcs .prcs:first-child {
        padding: 35px 25px 40px 75px
    }

    .hwget-meydan__prcs .prcs:nth-child(2) {
        background: url(/public/images/circle2.png) no-repeat left center;
        background-size: contain;
    }

    .hwget-meydan__prcs .prcs:nth-child(3) {
        background: url(/public/images/circle3.png) no-repeat left center;
        background-size: contain;
    }

    .hwget-meydan__prcs .prcs:nth-child(4) {
        background: url(/public/images/circle4.png) no-repeat left center;
        background-size: contain;
        margin-right: 0;
    }

    .hwget-meydan__prcs .prcs::after {
        content: '';
        background: url(/public/images/htg-arrow-rt.jpg) right center no-repeat;
        width: 50px;
        height: 50px;
        position: absolute;
        top: 40%;
        right: -45px;
        z-index: 9;
        display: none;
    }

    .hwget-meydan__prcs .prcs:last-child:after {
        display: none;
    }

    .hwget-meydan .sec-descr {
        margin: 20px 0;
    }

    .bnfit-ftr--ecomm::before {
        background: url(/public/images/strip-14-1.png) left center no-repeat;
        background-size: 100%;
    }

    .ftr__name {
        min-height: 45px;
    }

    .bnfit-ftr {
        margin-bottom: 30px;
    }

    .bnfit-ftr--ecomm .bnfit-ftrs .ftr {
        text-align: center;
    }

    .bnfit-ftr--ecomm .ftr__icon {
        margin-left: auto;
        margin-right: auto;
        max-width: 100px;
    }

    .st-jrne.commerce-page {
        margin: 0;
        clear: both;
    }

    .st-jrne.commerce-page::after {
        bottom: 100px;
    }

    .iti--separate-dial-code .iti__selected-flag {
        background: none;
        border-right: 1px solid #bace1d;
    }

    .page-8775 .terms {
        display: none;
    }

    @media only screen and (max-width: 1200px) {
        .hwget-meydan__prcs .prcs {
            width: 200px;
            height: 200px;
            margin-right: 20px;
            padding: 0 15px 0 80px
        }

        .hwget-meydan__prcs .prcs:first-child {
            padding: 0 15px 0 60px
        }
    }

    @media only screen and (max-width: 1024px) {
        .hwget-meydan__prcs {
            display: block;
        }

        .hwget-meydan__prcs .prcs {
            width: 250px;
            height: 250px;
            margin: 0 50px 50px 0;
            padding: 0 15px 0 105px;
            float: left
        }

        .hwget-meydan__prcs .prcs:first-child {
            padding: 0 15px 0 70px
        }

        .bnfit-ftr--ecomm .ftr__icon {
            min-height: 80px;
        }

        .ftr__name br {
            display: none
        }
    }

    @media only screen and (max-width: 767px) {

        .hwget-meydan__prcs .prcs,
        .hwget-meydan__prcs .prcs:nth-child(4) {
            float: none;
            margin: 0 auto 50px auto;
            width: 250px;
            height: 250px;
        }

        .ftr {
            text-align: center;
            padding: 0px;
        }

        .bnfit-ftr--ecomm .ftr__icon {
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media only screen and (max-width: 480px) {
        .ecomm-intro h2 img {
            width: 32%;
        }

        .ecom-logo .ecom-logo__img {
            width: 35%;
        }

        .bnfit-ftr--ecomm .ftr__icon {
            min-height: 65px;
            width: 50%;
        }
    }
</style>
<section>
    <!-- intro start -->
    <section class="intro intro--ecom intro--sp">
        <div class="intro__bg" style="background-image:url('/public/images/Meydan-Commerce.png')">
            <div class="container">
                <div class="intro__cont">
                    <!-- intro copy start -->
                    <div class="intro__info">
                        <div class="title">A Free Zone</div>
                        <h1 class="heading colr-white">
                            Built for <strong>High-Tech,</strong><br />Designed for <strong>High-Touch.</strong> </h1>
                    </div>
                    <!-- intro copy end -->
                </div>
            </div>
        </div>
    </section>
    <!-- intro end -->

    <!-- ecom start -->
    <section class="ecomm-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <div class="sec-intro">
                        <div class="sec-descr">
                            <p>As E-commerce businesses are on the surge and digital is our future, we are introducing to you a solution dedicated for E-commerce business that puts your products on a guaranteed listing on <strong>Amazon and major e-commerce platforms</strong> of your choice starting at AED 6,000.</p>
                        </div>

                        <h2 class="colr-blue">Introducing <img src="/public/images/ecom-logo.png" alt=""> </h2>

                        <div class="sec-descr">
                            <p>Meydan Commerce is the a tailor-made solution for e-commerce businesses at Meydan Free Zone that offers a guaranteed product placement in Amazon, Noon and other major e-commerce platforms of your choice.</p>
                            <p>Meydan commerce enables your e-commerce business to shine and grow for only AED 6,000</p>
                            <p>Start your e-commerce business today with Meydan Commerce</p>
                        </div>

                        <div class="ecom-logo">
                            <div class="ecom-logo__img">
                                <img src="/public/images/amazon.png" alt="amazon">
                            </div>
                            <div class="ecom-logo__img">
                                <img src="/public/images/NOON-3.png" alt="NOON">
                            </div>
                        </div>

                        <div class="btn-blk mz">
                            <a href="#" target="" class="cta">
                                <span>START NOW</span>
                                <svg width="13px" height="10px" viewBox="0 0 13 10">
                                    <path d="M1,5 L11,5"></path>
                                    <polyline points="8 1 12 5 8 9"></polyline>
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wmfz end -->

    <!-- benefit of setting up with us start -->
    <section class="bnfit-ftr bnfit-ftr--ecomm">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2 class="colr-blue">Meydan Commerce Benefits</h2>
                    <div class="sec-descr">
                        <p>With Meydan Commerce, you get a guaranteed listing in Amazon, Noon and other e-commerce platforms of your choice starting from AED 6,000.</p>
                    </div>
                    <div class="bnfit-ftrs">
                        <div class="col-md-9 col-sm-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Amazon-Noon-Store-setup.png" alt="Amazon & Noon Store setup">
                                        </div>
                                        <div class="ftr__name">
                                            Amazon / Noon store setup </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Product-listing-optimizing.png" alt="Product listing optimizing">
                                        </div>
                                        <div class="ftr__name">
                                            Product listing optimizing </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Product-onboarding.png" alt="Product onboarding">
                                        </div>
                                        <div class="ftr__name">
                                            Product onboarding </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Selling-_-Vendor-central-management.png" alt="Selling _ Vendor central management">
                                        </div>
                                        <div class="ftr__name">
                                            Selling / Vendor central management </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Product-marketing-service.png" alt="Product marketing service">
                                        </div>
                                        <div class="ftr__name">
                                            Product marketing service </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Order-fulfilment.png" alt="Order fulfilment">
                                        </div>
                                        <div class="ftr__name">
                                            Order fulfilment </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Amazon-prime-listing-and-delivery.png" alt="Amazon prime listing and delivery">
                                        </div>
                                        <div class="ftr__name">
                                            Amazon prime listing and delivery </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/FBA-_-FBN-approvals-shipment-services.png" alt="FBA _ FBN approvals & shipment services">
                                        </div>
                                        <div class="ftr__name">
                                            FBA / FBN approvals & shipment services </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6">


                                    <div class="ftr">
                                        <div class="ftr__icon">
                                            <img src="/public/images/Feedback-and-review-management.png" alt="Feedback and review management">
                                        </div>
                                        <div class="ftr__name">
                                            Feedback and review management </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="btn-blk mz">
                        <a href="#commerce-form" target="" class="cta">
                            <span>GET IT NOW</span>
                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                <path d="M1,5 L11,5"></path>
                                <polyline points="8 1 12 5 8 9"></polyline>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- benefit of setting up with us end -->

    <!-- how to get meydan commerce start -->
    <section class="hwget-meydan">
        <div class="container">
            <h2 class="colr-blue">How to get Meydan Commerce?</h2>
            <div class="sec-descr">
                <p>Getting your Meydan Commerce account is as easy as 1,2,3.</p>
            </div>

            <div class="hwget-meydan__prcs">
                <div class="prcs">
                    Start your E-commerce business at Meydan Free Zone </div>
                <div class="prcs">
                    Complete the application process through our online customer portal </div>
                <div class="prcs">
                    Receive your license and apply for Meydan Commerce </div>
            </div>

        </div>
    </section>
    <section style="margin:0 0 50px 0;">
        <div class="container">
            <p class="terms"><b>T&Cs apply </b>
                <br />
                Meydan Pay is only available once you have cleared your KYC. Once cleared, authorization will be given to activate your account.
            </p>
        </div>
    </section>
    <!-- how to get meydan commerce end -->
    <!-- start jounry start -->
    <section class="st-jrne commerce-page" id="commerce-form">
        <div class="container">
            <div class="st-jrne__wrap">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <h3 class="colr-blue">
                            Apply for Meydan Commerce Now! </h3>
                        <p>Please enter your details to start customizing your license as you need.</p>
                        <div class="meydan-form">
                            <form id="page_form">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-blk">
                                            <input type="text" class="form-control" id="yname" name="yname" placeholder="Your Name" autocomplete="off">
                                            <div class="invalid-feedback">Please enter your name</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-blk">
                                            <input type="text" class="form-control" id="number" autocomplete="off">
                                            <div class="invalid-feedback">Please enter your number</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-blk">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email ID" autocomplete="off">
                                            <div class="invalid-feedback">Please enter your email</div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12">
                                    <div class="form-blk">
                                        <a class="cta">
                                            <span id="form_submit_text">Submit</span>
                                            <svg width="13px" height="10px" viewBox="0 0 13 10">
                                                <path d="M1,5 L11,5"></path>
                                                <polyline points="8 1 12 5 8 9"></polyline>
                                            </svg>
                                            <input type="button" id="form_submit" value="Submit">
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div style="height:0px !important;overflow:hidden;">
                            <script type="text/javascript"></script>
                            <div class='gf_browser_chrome gform_wrapper gravity-theme' id='gform_wrapper_12'>
                                <div class='gform_heading'>
                                    <h2 class="gform_title">Bottom form</h2>
                                    <span class='gform_description'></span>
                                </div>
                                <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_12' id='gform_12' action='/meydan-commerce/' novalidate>
                                    <div class='gform_body gform-body'>
                                        <div id='gform_fields_12' class='gform_fields top_label form_sublabel_below description_below'>
                                            <div id="field_12_1" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_1"><label class='gfield_label' for='input_12_1'>First Name</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_1' id='input_12_1' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_2" class="gfield gfield--width-quarter form_name field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_2"><label class='gfield_label' for='input_12_2'>Name</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_2' id='input_12_2' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_5" class="gfield gfield--width-quarter form_phone field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_5"><label class='gfield_label' for='input_12_5'>Phone</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_5' id='input_12_5' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_3" class="gfield gfield--width-quarter form_email field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_3"><label class='gfield_label' for='input_12_3'>Email</label>
                                                <div class='ginput_container ginput_container_email'>
                                                    <input name='input_3' id='input_12_3' type='email' value='' class='large' aria-invalid="false" />
                                                </div>
                                            </div>
                                            <div id="field_12_18" class="gfield gfield--width-quarter form_source field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_18"><label class='gfield_label' for='input_12_18'>Form Source</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_18' id='input_12_18' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_4" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_4"><label class='gfield_label' for='input_12_4'>Company</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_4' id='input_12_4' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_6" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_6"><label class='gfield_label' for='input_12_6'>Method of Contact</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_6' id='input_12_6' type='text' value='Online Form' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_7" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_7"><label class='gfield_label' for='input_12_7'>Layout</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_7' id='input_12_7' type='text' value='4977183000000368168' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_8" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_8"><label class='gfield_label' for='input_12_8'>utm_source</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_8' id='input_12_8' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_9" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_9"><label class='gfield_label' for='input_12_9'>utm_medium</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_9' id='input_12_9' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_10" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_10"><label class='gfield_label' for='input_12_10'>utm_campaign</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_10' id='input_12_10' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_11" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_11"><label class='gfield_label' for='input_12_11'>utm_id</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_11' id='input_12_11' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_15" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_15"><label class='gfield_label' for='input_12_15'>keyword</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_15' id='input_12_15' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_14" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_14"><label class='gfield_label' for='input_12_14'>adgroupid</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_14' id='input_12_14' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_13" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_13"><label class='gfield_label' for='input_12_13'>device</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_13' id='input_12_13' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                            <div id="field_12_12" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_12_12"><label class='gfield_label' for='input_12_12'>campaignid</label>
                                                <div class='ginput_container ginput_container_text'><input name='input_12' id='input_12_12' type='text' value='' class='large' aria-invalid="false" /> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_12' class='gform_button button' value='Submit' onclick='if(window["gf_submitting_12"]){return false;}  if( !jQuery("#gform_12")[0].checkValidity || jQuery("#gform_12")[0].checkValidity()){window["gf_submitting_12"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_12"]){return false;} if( !jQuery("#gform_12")[0].checkValidity || jQuery("#gform_12")[0].checkValidity()){window["gf_submitting_12"]=true;}  jQuery("#gform_12").trigger("submit",[true]); }' /> <input type='hidden' name='gform_ajax' value='form_id=12&amp;title=1&amp;description=1&amp;tabindex=0' />
                                        <input type='hidden' class='gform_hidden' name='is_submit_12' value='1' />
                                        <input type='hidden' class='gform_hidden' name='gform_submit' value='12' />

                                        <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                        <input type='hidden' class='gform_hidden' name='state_12' value='WyJbXSIsImE0YmExZmZjNGYwYjUzM2RiYjQyMGExODY1ZjI4Zjk1Il0=' />
                                        <input type='hidden' class='gform_hidden' name='gform_target_page_number_12' id='gform_target_page_number_12' value='0' />
                                        <input type='hidden' class='gform_hidden' name='gform_source_page_number_12' id='gform_source_page_number_12' value='1' />
                                        <input type='hidden' name='gform_field_values' value='' />

                                    </div>
                                </form>
                            </div>
                            <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_12' id='gform_ajax_frame_12' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
                            <script type="text/javascript">
                                gform.initializeOnLoaded(function() {
                                    gformInitSpinner(12, '/public/images/spinner.svg');
                                    jQuery('#gform_ajax_frame_12').on('load', function() {
                                        var contents = jQuery(this).contents().find('*').html();
                                        var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                                        if (!is_postback) {
                                            return;
                                        }
                                        var form_content = jQuery(this).contents().find('#gform_wrapper_12');
                                        var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_12').length > 0;
                                        var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                                        var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                                        var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                                        if (is_form) {
                                            jQuery('#gform_wrapper_12').html(form_content.html());
                                            if (form_content.hasClass('gform_validation_error')) {
                                                jQuery('#gform_wrapper_12').addClass('gform_validation_error');
                                            } else {
                                                jQuery('#gform_wrapper_12').removeClass('gform_validation_error');
                                            }
                                            setTimeout(function() {
                                                /* delay the scroll by 50 milliseconds to fix a bug in chrome */ }, 50);
                                            if (window['gformInitDatepicker']) {
                                                gformInitDatepicker();
                                            }
                                            if (window['gformInitPriceFields']) {
                                                gformInitPriceFields();
                                            }
                                            var current_page = jQuery('#gform_source_page_number_12').val();
                                            gformInitSpinner(12, '/public/images/spinner.svg');
                                            jQuery(document).trigger('gform_page_loaded', [12, current_page]);
                                            window['gf_submitting_12'] = false;
                                        } else if (!is_redirect) {
                                            var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                                            if (!confirmation_content) {
                                                confirmation_content = contents;
                                            }
                                            setTimeout(function() {
                                                jQuery('#gform_wrapper_12').replaceWith(confirmation_content);
                                                jQuery(document).trigger('gform_confirmation_loaded', [12]);
                                                window['gf_submitting_12'] = false;
                                                wp.a11y.speak(jQuery('#gform_confirmation_message_12').text());
                                            }, 50);
                                        } else {
                                            jQuery('#gform_12').append(contents);
                                            if (window['gformRedirect']) {
                                                gformRedirect();
                                            }
                                        }
                                        jQuery(document).trigger('gform_post_render', [12, current_page]);
                                    });
                                });
                            </script>
                            <form id="bot_form" method="POST" action="/cost-calculator/">
                                <input type="hidden" id="yname_bot_form" name="yname">
                                <input type="hidden" id="number_bot_form" name="number">
                                <input type="hidden" id="email_bot_form" name="email">
                                <input type="hidden" id="country_code" name="country_code">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- start jounry end -->
    <!-- how to get meydan commerce start -->
    <section class="hwget-meydan">
        <div class="container">



            <div class="sec-descr">
                <p>Are you an existing customer and would like to avail Meydan Commerce for your business?</p>
            </div>

            <div class="btn-blk mz">
                <a href="#" target="" class="cta">
                    <span>TALK TO OUR TEAM</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- how to get meydan commerce end -->
</section>