<!-- intro start -->
<style>
    .srch {
        overflow: unset;
    }

    .srch input[type="submit"] {
        border-radius: 30px;
    }

    .green-bg {
        background-color: #bace1d !important;
    }

    #search_actvities {
        width: 100%;
    }

    .accordion-category-button,
    .inner-content-text {
        transition: background-color 300ms ease;
    }

    #search_actvitiesautocomplete-list {
        margin-left: 18px;
        overflow: scroll;
        width: 80%;
        max-height: 230px;
    }

    .autocomplete-items {
        position: absolute;
        border: 1px solid #bace1d;
        border-bottom: none;
        border-top: none;
        z-index: 99;
        top: 101%;
        left: 3px;
        right: 0;
    }

    .autocomplete-items div {
        padding: 10px;
        cursor: pointer;
        background-color: #fff;
        border-bottom: 1px solid #bace1d;
        font-size: 14px;
        padding: 8px 10px;
    }

    .autocomplete-items div:hover {
        background-color: #bace1d !important;
        color: #004a98;
    }

    .autocomplete-items div strong {
        font-weight: 600;
    }

    .autocomplete-active {
        background-color: #bace1d !important;
        color: #004a98;
    }

    .meydan-form {
        background: none;
        padding: 0px;
    }

    .iti {
        width: 100%;
    }

    .iti--separate-dial-code .iti__selected-flag {
        background: none;
        border-right: 1px solid #bace1d;
    }

    .iti--allow-dropdown .iti__flag-container:hover .iti__selected-flag {
        background: none;
    }

    .iti__flag-container .iti__selected-flag .iti__flag {
        display: none;
    }

    .business-activities-outer .accordion-button:focus,
    .aa-outer .accordion-button:focus {
        box-shadow: none;
    }

    #business_activities {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    #business_activities .accordion-item {
        border-radius: 0px;
        border-color: #fff;
    }

    #business_activities .accordion-button {
        border-radius: 0px;
    }

    #business_activities>.accordion-item {
        width: 48%;
        border: none;
        border-bottom: 1px solid #d65072;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button {
        color: #004a98;
        text-transform: uppercase;
        font-weight: 600;
        padding-left: 8px;
        padding-right: 8px;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button:not(.collapsed) {
        background-color: #004a98;
        color: #fff;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    #business_activities .accordion-button::after {
        transform: rotate(-90deg)
    }

    #business_activities .accordion-button:not(.collapsed)::after {
        transform: rotate(0deg)
    }

    #business_activities .accordion-body {
        padding: 0rem 0.4rem;
    }

    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-header>.accordion-button,
    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-header>.accordion-button:not(.collapsed) {
        color: #004a98;
        text-transform: uppercase;
        font-weight: 600;
        background-color: #b1e3e9;
        font-size: 16px;
    }

    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-header>.accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-header>.accordion-button.accordion-nochild-button::after,
    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-header>.accordion-button.accordion-nochild-button:not(.collapsed)::after {
        display: none;
    }

    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-collapse>.accordion-body {
        color: #004a98;
        background-color: #e7f7f8;
        padding: 0px
    }

    #business_activities>.accordion-item>.accordion-collapse>.accordion-body>.accordion>.accordion-item>.accordion-collapse>.accordion-body p {
        border-bottom: 2px solid #fff;
        padding: 1rem 1.25rem;
        font-size: 14px;
        margin-bottom: 0px;
        text-transform: capitalize;
    }

    #business_activities .accord-icon {
        height: 35px;
        padding-right: 10px;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button .accord-icon-green {
        display: inline-block;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button:not(.collapsed) .accord-icon-green {
        display: none;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button .accord-icon-white {
        display: none;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button:not(.collapsed) .accord-icon-white {
        display: inline-block;
    }

    #business_activities .accordion-category>.accordion-item>.accordion-header {
        position: relative;
    }

    #business_activities .ba-checkbox {
        width: 18px;
        height: 18px;
        position: absolute;
        z-index: 4;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    #business_activities .ba-checkbox-popover {
        display: none;
        transform: translate(4px, 80%)
    }

    #business_activities .ba-checkbox-popover .popover-arrow {
        position: absolute;
        left: 0px;
        transform: translate(10px, 0px);
    }

    .swal2-container {
        z-index: 99999;
    }

    @media (max-width:768px) {
        #business_activities>.accordion-item {
            width: 100%;
        }
    }
</style>

<section class="intro intro--ba intro--sp">
    <div class="intro__bg" style="background-image:url('https://www.meydanfz.ae/wp-content/uploads/2022/04/Activity.png')">
        <div class="container">
            <div class="intro__cont">
                <!-- intro copy start -->
                <div class="intro__info">
                    <div class="title">A Free Zone</div>
                    <div class="heading colr-white">
                        Built for <strong>Dreamers,</strong><br />Designed for <strong>Achievers.</strong> </div>
                </div>
                <!-- intro copy end -->
            </div>
        </div>
    </div>
</section>
<!-- intro end -->

<!-- bizacty start -->
<section class="bizacty-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="sec-intro">
                    <h2 class="colr-blue">
                        Flexibility For All<br />Your Business Needs </h2>
                    <div class="sec-descr">
                        <p>There is no limit to what you can make your business become with Meydan Free Zone, from advertising to pharmaceuticals, retail to legal advise we offer over 1,500 business activities for you to choose from.</p>
                        <p>If that’s not enough, get the flexibility to combine up to 3 business activity groups from various sectors from various sectors in your trade license.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bizacty end -->

<!-- bizsctr start -->
<section class="bizsctr">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="bizsctr-hdr">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <div class="bizsec__nav bizsec__nav--slider">
                                <div class="bizsec__nav__link slide"><a data-category="All" href="javascript:void(0)" class="active">All</a></div>
                                <div class="bizsec__nav__link slide"><a data-category="Media" href="javascript:void(0)" class="">Media</a></div>
                                <div class="bizsec__nav__link slide"><a data-category="Service and consultancy" href="javascript:void(0)" class="">Service & Consultancy</a></div>
                                <div class="bizsec__nav__link slide"><a data-category="Wholesale and retail" href="javascript:void(0)" class="">Wholesale & Retail</a></div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4">
                            <div class="srch">
                                <input type="text" placeholder="Looking for something specific?" id="search_actvities" autocomplete="no">
                                <input type="submit">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="my-4 business-activities-outer"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- bizsctr end -->
<!-- start jounry start -->
<section class="st-jrne">
    <div class="container">
        <div class="st-jrne__wrap">
            <div class="row">
                <div class="col-md-10 m-auto">
                    <h3 class="colr-blue">Start your entrepreneurial journey today</h3>
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
                            <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_12' id='gform_12' action='/business-activities/' novalidate>
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