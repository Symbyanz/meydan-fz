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
<section class="plus-page">
    <!-- intro start -->
    <section class="intro intro--ecom intro--sp">
        <div class="intro__bg" style="background-image:url('/public/images/FAQ-1.png')">
            <div class="container">
                <div class="intro__cont">
                    <!-- intro copy start -->
                    <div class="intro__info">
                        <div class="title">A Free Zone</div>
                        <h1 class="heading colr-white">
                            Built for <strong>Value,</strong><br />Designed for <strong>Advantage.</strong> </h1>
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
                        </div>

                        <h2 class="colr-blue">Introducing <img src="/public/images/Meydan-Logos-07-1.png" alt="Meydan Plus"> </h2>

                        <div class="sec-descr">
                            <p>Meydan Plus is committed to making your business experience in the UAE a smooth and hassle-free one. To that end, we are proud to introduce our concierge services exclusively for all Meydan Free Zone customers.</p>
                            <p>We provide a broad range of support services that meet your needs beyond the business setup stage – from opening your bank account to registering for medical &amp; biometrics all the way to managing your day to day business activities with a corporate secretary.</p>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- wmfz end -->

    <section class="bnfit-svcs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2 class="colr-blue">
                        Our Services </h2>

                    <div class="bnfit-svcs__svc">
                        <div class="row bnfit-svcs__slider slider">
                            <div class="col-lg-3 col-md-4 slide">
                                <div class="myd-card">
                                    <div class="myd-card__img">
                                        <img src="/public/images/1-1.jpg" alt="PO Box & Mail Management">
                                    </div>
                                    <div class="myd-card__descr">
                                        <div class="myd-card__name">
                                            PO Box & Mail <br /> Management </div>
                                        <p>Set up all your business’<br />
                                            correspondences under<br />
                                            the premium address<br />
                                            of Meydan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 slide">
                                <div class="myd-card">
                                    <div class="myd-card__img">
                                        <img src="/public/images/2-1.jpg" alt="Medical & Emirates ID Assistance">
                                    </div>
                                    <div class="myd-card__descr">
                                        <div class="myd-card__name">
                                            Medical & Emirates <br />ID Assistance </div>
                                        <p>We take the hassle out of setting up medical and Emirates ID appointments by doing it all on your behalf.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 slide">
                                <div class="myd-card">
                                    <div class="myd-card__img">
                                        <img src="/public/images/3-1.jpg" alt="Bank Account Assistance">
                                    </div>
                                    <div class="myd-card__descr">
                                        <div class="myd-card__name">
                                            Bank Account <br /> Assistance </div>
                                        <p>No more stressing over which bank account to open and what paperwork to fill out, we do it so you don’t have to.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 slide">
                                <div class="myd-card">
                                    <div class="myd-card__img">
                                        <img src="/public/images/4-1.jpg" alt="Dependent Visa">
                                    </div>
                                    <div class="myd-card__descr">
                                        <div class="myd-card__name">
                                            Dependent <br /> Visa </div>
                                        <p>You can easily sponsor a residency visa for the family members of the people you employ either in your household or business.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sec-descr">
                        <p>We aren’t like other free zones, at Meydan Free Zone our goal is to make setting up your business as seamless as possible by putting your needs first and covering all your bases with our wide range of business support services.</p>
                        <p>Our business support packages are here to help you beat the competition. For startups and business owners in the UAE it can be invaluable to have a specialist company taking care of the many tasks involved in establishing a successful brand and commercial presence.</p>
                        <p>Avoid the long queues and paperwork. Our experienced team handles your applications, books your appointments and collects documents on your behalf.</p>
                        <p>To find out more, please contact our dedicated team at <a style="font-size: 22px; color: #004a98;" href="mailto:connect@meydan-fz.ae">connect@meydan-fz.ae</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benefit of setting up with us end -->

    <section class="page_form">
        <div class="container">
            <div class="row">
                <div class="col-md-12 m-auto">
                    <h2 class="colr-blue">
                        Apply Now </h2>
                    <div class="meydan-form">
                        <form id="plus_form">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-blk">
                                        <input type="text" class="form-control" id="yname" name="yname" placeholder="Your Name">
                                        <div class="invalid-feedback">Please enter your name</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-blk">
                                        <input type="text" class="form-control" id="cname" name="cname" placeholder="Your Company Name">
                                        <div class="invalid-feedback">Please enter your company name</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-blk">
                                        <input type="text" id="number" class="form-control">
                                        <div class="invalid-feedback">Please enter your number</div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-blk">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Your Email ID">
                                        <div class="invalid-feedback">Please enter your email</div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-blk">
                                        <div class="row">
                                            <label for="" class="checkbox-heading">Service(s) Required</label>

                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Dependent Visa Application"> Dependent Visa Application
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Medical Test VIP Services"> Medical Test VIP Services
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Emirates ID VIP Services"> Emirates ID VIP Services
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Corporate Banking"> Corporate Banking
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Phone Answering Services"> Phone Answering Services
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="PO Box registration and Mail Management"> PO Box registration and Mail Management
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="UAE Driver's License Transfer"> UAE Driver's License Transfer
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="UAE Driver's License Application"> UAE Driver's License Application
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Car Registration Renewal"> Car Registration Renewal
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Document Translation and Attestation"> Document Translation and Attestation
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Document Delivery"> Document Delivery
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Customs Code"> Customs Code
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="col-md-6 col-sm-12">

                                                <label class="checkbox"><input type="checkbox" id="something" name="services_required" value="Courier Service"> Courier Service
                                                    <div class="invalid-feedback invalid-feedback--choose">Please select atleast one</div>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-11">
                                    <div class="form-blk">
                                        <label for="" class="checkbox-heading">Do you have a company registered in Meydan Free Zone?</label>
                                        <select>
                                            <option value="No">No</option>

                                            <span class="checkmark"></span>

                                            <option value="Yes">Yes</option>

                                            <div class="invalid-feedback invalid-feedback--choose">Please choose an option</div>
                                            <span class="checkmark"></span>

                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-11">
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

                            </div>
                        </form>
                    </div>
                    <div style="height:0px !important;overflow:hidden;">
                        <script type="text/javascript"></script>
                        <div class='gf_browser_chrome gform_wrapper gravity-theme' id='gform_wrapper_22'>
                            <div id='gf_22' class='gform_anchor' tabindex='-1'></div>
                            <div class='gform_heading'>
                                <h2 class="gform_title">Meydan Plus</h2>
                                <span class='gform_description'></span>
                            </div>
                            <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_22' id='gform_22' action='/meydan-plus/#gf_22' novalidate>
                                <div class='gform_body gform-body'>
                                    <div id='gform_fields_22' class='gform_fields top_label form_sublabel_below description_below'>
                                        <div id="field_22_1" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_1"><label class='gfield_label' for='input_22_1'>First Name</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_1' id='input_22_1' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_2" class="gfield gfield--width-quarter form_name field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_2"><label class='gfield_label' for='input_22_2'>Name</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_2' id='input_22_2' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_3" class="gfield gfield--width-quarter form_phone field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_3"><label class='gfield_label' for='input_22_3'>Phone</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_3' id='input_22_3' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_18" class="gfield gfield--width-quarter form_email field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_18"><label class='gfield_label' for='input_22_18'>Email ID</label>
                                            <div class='ginput_container ginput_container_email'>
                                                <input name='input_18' id='input_22_18' type='email' value='' class='large' aria-invalid="false" />
                                            </div>
                                        </div>
                                        <div id="field_22_22" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_22"><label class='gfield_label' for='input_22_22'>Message</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_22' id='input_22_22' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_6" class="gfield gfield--width-quarter form_company field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_6"><label class='gfield_label' for='input_22_6'>Company</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_6' id='input_22_6' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_7" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_7"><label class='gfield_label' for='input_22_7'>Method of Contact</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_7' id='input_22_7' type='text' value='Online Form' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_8" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_8"><label class='gfield_label' for='input_22_8'>Layout</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_8' id='input_22_8' type='text' value='4977183000000368168' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_17" class="gfield gfield--width-full form_looking_for field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_17"><label class='gfield_label' for='input_22_17'>Service(s) Required</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_17' id='input_22_17' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_20" class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_20"><label class='gfield_label' for='input_22_20'>Do you have a company registered in Meydan FZ?</label>
                                            <div class='ginput_container ginput_container_select'><select name='input_20' id='input_22_20' class='large gfield_select' aria-invalid="false">
                                                    <option value='Yes'>Yes</option>
                                                    <option value='No'>No</option>
                                                </select></div>
                                        </div>
                                        <div id="field_22_9" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_9"><label class='gfield_label' for='input_22_9'>utm_source</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_9' id='input_22_9' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_10" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_10"><label class='gfield_label' for='input_22_10'>utm_medium</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_10' id='input_22_10' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_11" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_11"><label class='gfield_label' for='input_22_11'>utm_campaign</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_11' id='input_22_11' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_12" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_12"><label class='gfield_label' for='input_22_12'>utm_id</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_12' id='input_22_12' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_13" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_13"><label class='gfield_label' for='input_22_13'>keyword</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_13' id='input_22_13' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_16" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_16"><label class='gfield_label' for='input_22_16'>adgroupid</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_16' id='input_22_16' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_15" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_15"><label class='gfield_label' for='input_22_15'>device</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_15' id='input_22_15' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_14" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_14"><label class='gfield_label' for='input_22_14'>campaignid</label>
                                            <div class='ginput_container ginput_container_text'><input name='input_14' id='input_22_14' type='text' value='' class='large' aria-invalid="false" /> </div>
                                        </div>
                                        <div id="field_22_19" class="gfield field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_22_19"><label class='gfield_label' for='input_22_19'>Untitled</label>
                                            <div class='ginput_container ginput_container_select'><select name='input_19' id='input_22_19' class='large gfield_select' aria-invalid="false">
                                                    <option value='First Choice'>First Choice</option>
                                                    <option value='Second Choice'>Second Choice</option>
                                                    <option value='Third Choice'>Third Choice</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                                <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_22' class='gform_button button' value='Submit' onclick='if(window["gf_submitting_22"]){return false;}  if( !jQuery("#gform_22")[0].checkValidity || jQuery("#gform_22")[0].checkValidity()){window["gf_submitting_22"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_22"]){return false;} if( !jQuery("#gform_22")[0].checkValidity || jQuery("#gform_22")[0].checkValidity()){window["gf_submitting_22"]=true;}  jQuery("#gform_22").trigger("submit",[true]); }' /> <input type='hidden' name='gform_ajax' value='form_id=22&amp;title=1&amp;description=1&amp;tabindex=0' />
                                    <input type='hidden' class='gform_hidden' name='is_submit_22' value='1' />
                                    <input type='hidden' class='gform_hidden' name='gform_submit' value='22' />

                                    <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                                    <input type='hidden' class='gform_hidden' name='state_22' value='WyJbXSIsImE0YmExZmZjNGYwYjUzM2RiYjQyMGExODY1ZjI4Zjk1Il0=' />
                                    <input type='hidden' class='gform_hidden' name='gform_target_page_number_22' id='gform_target_page_number_22' value='0' />
                                    <input type='hidden' class='gform_hidden' name='gform_source_page_number_22' id='gform_source_page_number_22' value='1' />
                                    <input type='hidden' name='gform_field_values' value='' />

                                </div>
                            </form>
                        </div>
                        <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_22' id='gform_ajax_frame_22' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
                        <script type="text/javascript">
                            gform.initializeOnLoaded(function() {
                                gformInitSpinner(22, '/public/images/spinner.svg');
                                jQuery('#gform_ajax_frame_22').on('load', function() {
                                    var contents = jQuery(this).contents().find('*').html();
                                    var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                                    if (!is_postback) {
                                        return;
                                    }
                                    var form_content = jQuery(this).contents().find('#gform_wrapper_22');
                                    var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_22').length > 0;
                                    var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                                    var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                                    var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                                    if (is_form) {
                                        jQuery('#gform_wrapper_22').html(form_content.html());
                                        if (form_content.hasClass('gform_validation_error')) {
                                            jQuery('#gform_wrapper_22').addClass('gform_validation_error');
                                        } else {
                                            jQuery('#gform_wrapper_22').removeClass('gform_validation_error');
                                        }
                                        setTimeout(function() {
                                            /* delay the scroll by 50 milliseconds to fix a bug in chrome */
                                            jQuery(document).scrollTop(jQuery('#gform_wrapper_22').offset().top - mt);
                                        }, 50);
                                        if (window['gformInitDatepicker']) {
                                            gformInitDatepicker();
                                        }
                                        if (window['gformInitPriceFields']) {
                                            gformInitPriceFields();
                                        }
                                        var current_page = jQuery('#gform_source_page_number_22').val();
                                        gformInitSpinner(22, '/public/images/spinner.svg');
                                        jQuery(document).trigger('gform_page_loaded', [22, current_page]);
                                        window['gf_submitting_22'] = false;
                                    } else if (!is_redirect) {
                                        var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                                        if (!confirmation_content) {
                                            confirmation_content = contents;
                                        }
                                        setTimeout(function() {
                                            jQuery('#gform_wrapper_22').replaceWith(confirmation_content);
                                            jQuery(document).scrollTop(jQuery('#gf_22').offset().top - mt);
                                            jQuery(document).trigger('gform_confirmation_loaded', [22]);
                                            window['gf_submitting_22'] = false;
                                            wp.a11y.speak(jQuery('#gform_confirmation_message_22').text());
                                        }, 50);
                                    } else {
                                        jQuery('#gform_22').append(contents);
                                        if (window['gformRedirect']) {
                                            gformRedirect();
                                        }
                                    }
                                    jQuery(document).trigger('gform_post_render', [22, current_page]);
                                });
                            });
                        </script>
                    </div>
                    <div class="meydan-form-response"></div>
                </div>
            </div>
        </div>
    </section>

</section>