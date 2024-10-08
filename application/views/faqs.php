<?php $titles = explode("/", $title); ?>



<style>
    .srch {
        overflow: unset;
    }

    .srch input[type="submit"] {
        border-radius: 30px;
    }

    #search_faqs {
        width: 100%;
    }

    #search_faqsautocomplete-list {
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
        top: 103%;
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

    .faqs__cont .accordion-button {
        font-size: 20px;
        line-height: 26px;
    }

    .faqs__cont .accordion-body,
    .faqs__cont .accordion-body p,
    .faqs__cont .accordion-body ul {
        font-size: 18px;
        line-height: 24px;
    }
</style>

<!-- intro start -->
<section class="intro intro--cu intro--sp">
    <div class="intro__bg" style="background-image:url('/public/images/FAQ.png')">
        <div class="container">
            <div class="intro__cont">
                <!-- intro copy start -->
                <div class="intro__info">
                    <div class="title colr-blue">A Free Zone</div>
                    <div class="heading colr-blue">
                        Built for <strong>Inspiration,</strong><br />Designed for <strong>Entrepreneurs.​</strong> </div>
                </div>
                <!-- intro copy end -->
            </div>
        </div>
    </div>
</section>
<!-- intro end -->

<!-- faqs start -->
<section class="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="faqs__srch">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <h2 class="colr-blue">
                                Frequently<br />Asked Questions </h2>
                        </div>
                        <div class="col-lg-5">
                            <div class="srch">
                                <input type="text" id="search_faqs" placeholder="Looking for something specific?">
                                <input type="submit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="faqs__cont mt-4">
                    <div class="col-lg-12">
                        <div class="bizsec__nav bizsec__nav--slider">
                            <div class="bizsec__nav__link slide"><a data-category="General" href="javascript:void(0)" class="active">General</a></div>
                            <div class="bizsec__nav__link slide"><a data-category="Meydan Pay" href="javascript:void(0)" class="">Meydan Pay</a></div>
                            <div class="bizsec__nav__link slide"><a data-category="Meydan Plus" href="javascript:void(0)" class="">Meydan Plus</a></div>
                            <div class="bizsec__nav__link slide"><a data-category="UBO" href="javascript:void(0)" class="">UBO</a></div>
                            <div class="bizsec__nav__link slide"><a data-category="ESR" href="javascript:void(0)" class="">ESR</a></div>
                            <div class="bizsec__nav__link slide"><a data-category="Go AML" href="javascript:void(0)" class="">Go AML</a></div>
                        </div>
                    </div>
                    <!-- faqs accordion start -->
                    <div class="accordion" id="accordionFAQs">
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_0">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                                    How many shareholders will be allowed on the license? </button>
                            </h2>
                            <div id="collapse0" class="accordion-collapse collapse" aria-labelledby="heading0" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>A maximum of 50 shareholders are allowed on a license.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                    How many directors will be allowed on the license? </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>A maximum of 4 directors are allowed on a license.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How many corporate SH will be allowed on the license? </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>A maximum of 50 corporate shareholders are allowed on a license.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    Documents required from Corporate SH for formation: </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Company Documentation of parent company (Certificate of Incorporation, Certificate of Incumbency, Memorandum and Articles of Association, Board Resolution, etc.)</li>
                                        <li>Passport copies of owners and managers</li>
                                        <li>Board Resolution indicating it has been resolved to open a branch office in “Meydan – Free Zone Authority” – original required signed and stamped (contact us for a draft of the same).</li>
                                        <li>When a shareholder is a company entity, the Board Resolution should state the following as an example – “XYZ Company to take a 50% stake in new company ABC LLC to be formed in “Meydan – Free Zone Authority” – original required signed and stamped (contact us for a draft of the same).</li>
                                        <li>The Board Resolution should also include the appointed Manager(s)/Shareholder(s)/Director(s) of the branch or new LLC .</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Do these docs need to be attested? (UAE or Foreign based entity)? </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>These documents are not required to be attested at the time of formation, however, will be required in due course of time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                    Will they need NOC to incorporate a company at MFZ? (Individual or with Corporate SH) </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>NOC is not required to incorporate a company.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    Can I take a 0-visa license and apply separately for a lease agreement? </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>All our licenses come with Co-working package which includes a lease agreement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                    Do I need to be physically present to open a company? </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Physical presence is not required to setup a company.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                    Is there any paid-up share capital? </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>No paid–up share capital is required.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_9">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                    What will be the nominal capital mentioned in the AOI for one SH and multi-SH? </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>We recommend 100,000 AED.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_10">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                    How many activities can be chosen free of cost during incorporation? </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>You can take up to 3 activities for free.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_11">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                    Can I combine Trading & Professional activities on one license? </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, combination of activities is permitted.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_12">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                    What will be the price point for any additional activity chosen on the license? Any approval process? </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Additional activities can be requested for 1000 AED per activity.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_13">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                    Is there any deposit for employment and dependents visa? </button>
                            </h2>
                            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>No for employment and yes for dependent visa.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_14">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                    Minimum and Maximum age for SH? </button>
                            </h2>
                            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The minimum age is 18 and maximum is 60.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_15">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                    Will I have a labor visa or Investor Visa? and validity period based on visa type? </button>
                            </h2>
                            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Investor visa will be issued for the shareholders and labor visas for employees, each will have a validity of 3 years.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_16">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                    What is the maximum number of years I can apply for the license – 3,5,10? </button>
                            </h2>
                            <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The licensee has the freedom to choose the license validity during incorporation</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_17">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                    How many managers I can employ under my company? </button>
                            </h2>
                            <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>There is no restriction on the number of managers that can be employed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_18">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                    What will be my legal office address and PO Box? </button>
                            </h2>
                            <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Meydan – Free Zone, Al Meydan Road, PO Box 35195, Dubai, UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_19">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse19" aria-expanded="false" aria-controls="collapse19">
                                    Will I get a Chamber of Commerce certificate upon registering my company with MFZ? </button>
                            </h2>
                            <div id="collapse19" class="accordion-collapse collapse" aria-labelledby="heading19" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>No, Chamber of Commerce certificate will not be issued.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_20">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse20" aria-expanded="false" aria-controls="collapse20">
                                    What documents will I get upon incorporation of my company? </button>
                            </h2>
                            <div id="collapse20" class="accordion-collapse collapse" aria-labelledby="heading20" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Certificate of Formation</li>
                                        <li>Share Registry</li>
                                        <li>Share certificate per Shareholder</li>
                                        <li>Business license</li>
                                        <li>Lease Agreement</li>
                                        <li>Memorandum Of Association</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_21">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse21" aria-expanded="false" aria-controls="collapse21">
                                    Can a company share their own MOA? </button>
                            </h2>
                            <div id="collapse21" class="accordion-collapse collapse" aria-labelledby="heading21" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, you can submit however our legal team will review the document which will incur additional charges and timelines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_22">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse22" aria-expanded="false" aria-controls="collapse22">
                                    By when can the license be issued? </button>
                            </h2>
                            <div id="collapse22" class="accordion-collapse collapse" aria-labelledby="heading22" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The license will be issued within 1 day from completion of formalities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_23">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse23" aria-expanded="false" aria-controls="collapse23">
                                    Can I hold property under my Meydan Free Zone company? </button>
                            </h2>
                            <div id="collapse23" class="accordion-collapse collapse" aria-labelledby="heading23" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, you can hold a property under your company.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_24">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse24" aria-expanded="false" aria-controls="collapse24">
                                    Can I Apply for visa after incorporation of my company? </button>
                            </h2>
                            <div id="collapse24" class="accordion-collapse collapse" aria-labelledby="heading24" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, you can apply for visa if you have the visa allocation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_25">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    Can I upgrade my license from 0 visa to visa package? </button>
                            </h2>
                            <div id="collapse25" class="accordion-collapse collapse" aria-labelledby="heading25" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, you can upgrade your license with no amendment fee.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="General">
                            <h2 class="accordion-header" id="heading_26">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse26" aria-expanded="false" aria-controls="collapse26">
                                    Can I downgrade my license? </button>
                            </h2>
                            <div id="collapse26" class="accordion-collapse collapse" aria-labelledby="heading26" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>You can downgrade within visa packages but not between visa and non–visa package.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_27">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse27" aria-expanded="false" aria-controls="collapse27">
                                    What is the meaning of Ultimate Beneficial Owner (UBO)? </button>
                            </h2>
                            <div id="collapse27" class="accordion-collapse collapse" aria-labelledby="heading27" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The natural person who ultimately owns or exercises effective control, directly or indirectly, over a Customer or the natural person on whose behalf a Transaction is being conducted or, the natural person who exercises effective ultimate control over a legal person or Legal Arrangement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_28">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse28" aria-expanded="false" aria-controls="collapse28">
                                    Who is the Ultimate Beneficial Owner (UBO)? </button>
                            </h2>
                            <div id="collapse28" class="accordion-collapse collapse" aria-labelledby="heading28" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The natural person who ultimately owns or controls the Legal Person, whether directly or through a chain of ownership or control or any-other indirect means, and also the natural person on whose behalf the transactions are being conducted or who exercises ultimate control over a legal person.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_29">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse29" aria-expanded="false" aria-controls="collapse29">
                                    How do you identify the UBO? </button>
                            </h2>
                            <div id="collapse29" class="accordion-collapse collapse" aria-labelledby="heading29" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>The natural person who own 25% or more of the shares</li>
                                        <li>The natural person who has the right to appoint or dismiss the majority of its Directors.</li>
                                        <li>Where no natural person is identified as a UBO then the natural person who holds the position of a higher manage</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_30">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse30" aria-expanded="false" aria-controls="collapse30">
                                    What if it was difficult to identify the beneficial owner? </button>
                            </h2>
                            <div id="collapse30" class="accordion-collapse collapse" aria-labelledby="heading30" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Where no natural person is identified as a beneficial owner then the natural person who holds the position of a higher management official shall be deemed as the Beneficial Owner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_31">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse31" aria-expanded="false" aria-controls="collapse31">
                                    Why should identify the ultimate beneficial owner? </button>
                            </h2>
                            <div id="collapse31" class="accordion-collapse collapse" aria-labelledby="heading31" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Importance of knowing the ultimate beneficial owner is to prevent the money launderer of hiding the source of the dirty money or the identity of the persons related to this money. Failure to verify the identity of these beneficiaries will facilitate the money laundering process and affect the economy in general.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_32">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse32" aria-expanded="false" aria-controls="collapse32">
                                    What is Register of the UBO? </button>
                            </h2>
                            <div id="collapse32" class="accordion-collapse collapse" aria-labelledby="heading32" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>A Specific Register of the Beneficial Owners in the Legal Person, which include the following data in respect of each Beneficial Owner:</p>
                                    <ul>
                                        <li>Full name, nationality, date and place of birth.</li>
                                        <li>Residential address or the address which the notices shall be sent on it, by virtue of this Decision.</li>
                                        <li>Number of passport or identity card, the country of issuance, date of issuance and expiry.</li>
                                        <li>Basis and date on which the person became a Beneficial Owner of the Legal Person.</li>
                                        <li>Date on which the person ceased to be a Beneficial Owner of the Legal Person.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_33">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse33" aria-expanded="false" aria-controls="collapse33">
                                    What is the Register of Partners or Shareholders? </button>
                            </h2>
                            <div id="collapse33" class="accordion-collapse collapse" aria-labelledby="heading33" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>It’s the register which includes the data of each of partner or shareholder. The Legal Person must update and record any change to the Register within (15) fifteen days of becoming aware of such change. The Register of Partners and Shareholders shall include:</p>
                                    <ul>
                                        <li>Number of shares held by each of them along with their categories and associated voting rights.</li>
                                        <li>Date on which such partner</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_34">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse34" aria-expanded="false" aria-controls="collapse34">
                                    What is the required information for Register of Partners or Shareholders? </button>
                            </h2>
                            <div id="collapse34" class="accordion-collapse collapse" aria-labelledby="heading34" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>In case of natural partners or shareholders: the full name as it appears on the identity card or the passport, nationality, address, place of birth, name and address of employer and a true copy of the valid passport or ID.<br />
                                        In case of corporate partners or shareholders:</p>
                                    <ul>
                                        <li>Name, legal form and memorandum of association.</li>
                                        <li>Head office address or the principal address of business.</li>
                                        <li>In case of a foreign Legal Person, the name and address of its legal representative in the State, with a proof thereof.</li>
                                        <li>Articles of Association or any-other similar documents approved by the Relevant Entity in the State.</li>
                                        <li>Names of the relevant persons who are holding higher management positions in the Legal Person, providing their data from their passports or identity cards, including such documents’ numbers, issuance and expiry dates and issuing entity.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_35">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse35" aria-expanded="false" aria-controls="collapse35">
                                    Who is the Nominee Board Member? </button>
                            </h2>
                            <div id="collapse35" class="accordion-collapse collapse" aria-labelledby="heading35" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Any natural person who acts in accordance with the directives, instructions or wills of another person and the Legal Person shall enter into the Register of Partners or Shareholders the data of any partner(s) or shareholder(s) acting as Nominee Board Member.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_36">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse36" aria-expanded="false" aria-controls="collapse36">
                                    What are the fines of non-compliance for the Cabinet resolution of the UBO procedure? </button>
                            </h2>
                            <div id="collapse36" class="accordion-collapse collapse" aria-labelledby="heading36" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>As per Cabinet Resolution (53) of 2021 Administrative penalties for violators of the provisions of the Cabinet Resolution (58) of 2020 Regulating Beneficial Owner procedures the penalties start from AED50,000 and may reach to AED100,000 and suspend the license for 12 months.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_37">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse37" aria-expanded="false" aria-controls="collapse37">
                                    Who is the legal representative? </button>
                            </h2>
                            <div id="collapse37" class="accordion-collapse collapse" aria-labelledby="heading37" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Is the natural resident person that authorized by the company to provide any information and documents required from the company.</p>
                                    <p><strong>Trustor/ Settlor </strong><br />
                                        A natural or legal person who transfers the management of his funds to a trustee by virtue of a deed.</p>
                                    <p><strong>Trustee</strong><br />
                                        A natural or legal person who enjoys the rights and authorities granted by the Trustor or the Trust Fund, to manage, use and dispense of the Trustor’s funds in accordance with the conditions imposed on him by either of them.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_38">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse38" aria-expanded="false" aria-controls="collapse38">
                                    UBO Working Entity Name & UBO Working Entity address? </button>
                            </h2>
                            <div id="collapse38" class="accordion-collapse collapse" aria-labelledby="heading38" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>If the Ultimate beneficial owner is working for another company, please mention this company name and address. But if not mention the same name and address for the company registered in Meydan – Free Zone.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_39">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse39" aria-expanded="false" aria-controls="collapse39">
                                    What is the obligations of establishments regarding the real beneficiary data include? </button>
                            </h2>
                            <div id="collapse39" class="accordion-collapse collapse" aria-labelledby="heading39" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Maintain a register of partners or shareholders, containing data of real beneficiaries and a register of the nominal members of the administration.</li>
                                        <li>Submit this information to the affiliated licensing authority.</li>
                                        <li>Notify the licensing authority of any changes or amendments that occur to the information provided within 15 days of the occurrence of that change.</li>
                                        <li>Appoint a contact person (legal representative) for the licensing authority regarding the real beneficiary data.</li>
                                        <li>Take reasonable steps to ensure transparency, obtain accurate information regarding the beneficial owner, and update the information in the records on a regular basis.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="UBO">
                            <h2 class="accordion-header" id="heading_40">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse40" aria-expanded="false" aria-controls="collapse40">
                                    Who excepted? </button>
                            </h2>
                            <div id="collapse40" class="accordion-collapse collapse" aria-labelledby="heading40" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>The establishments owned by the federal government or the local government or any organization affiliated to it.</li>
                                        <li>Establishment</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_41">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse41" aria-expanded="false" aria-controls="collapse41">
                                    What is Economic Substance? </button>
                            </h2>
                            <div id="collapse41" class="accordion-collapse collapse" aria-labelledby="heading41" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>To summarize, UAE is a no or low tax jurisdiction, which companies can sometimes use to their advantage in order to minimize paying taxes. This law has come into place in order to tackle tax evasion by shifting of income from a higher tax jurisdiction to a lower tax jurisdiction. So companies conducting certain activities need to prove that they have enough substance/presence within UAE.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_42">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse42" aria-expanded="false" aria-controls="collapse42">
                                    What do I need to do? </button>
                            </h2>
                            <div id="collapse42" class="accordion-collapse collapse" aria-labelledby="heading42" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Assess whether you conduct a relevant activity and earn income from it, then, if required (according to each jurisdiction), first submit an Economic Substance Notification followed by Economic Substance Return.</p>
                                    <p>Information available on the Notification Deadline doc shared. Know the emailer being sent out, the jurisdiction, the deadline, who needs to submit, All or only people conducting relevant activity</p>
                                    <p>This needs to be done every year</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_43">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse43">
                                    How do I file the notification? </button>
                            </h2>
                            <div id="collapse43" class="accordion-collapse collapse" aria-labelledby="heading43" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Info available in the notification deadline file for each jurisdiction</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_44">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse44" aria-expanded="false" aria-controls="collapse44">
                                    Activity on the License? </button>
                            </h2>
                            <div id="collapse44" class="accordion-collapse collapse" aria-labelledby="heading44" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Substance over form approach is to used, not just what activity is stated on the license. The summary of the relevant activity shared, does the client conduct any of those activities?</p>
                                    <p>Companies whose financial year started on or after 1st Jan 2019 and ended on or before 31 Dec 2019 need to submit the notification</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_45">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse45" aria-expanded="false" aria-controls="collapse45">
                                    Just formed the company? </button>
                            </h2>
                            <div id="collapse45" class="accordion-collapse collapse" aria-labelledby="heading45" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Newly formed companies will need to submit next year</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_46">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse46" aria-expanded="false" aria-controls="collapse46">
                                    How do you prove enough substance within UAE? </button>
                            </h2>
                            <div id="collapse46" class="accordion-collapse collapse" aria-labelledby="heading46" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>In short, certain types of companies must be managed or directed from within the UAE, have adequate UAE-based full-time staff, generate most of their income in the UAE, maintain adequate assets and demonstrate adequate operating expenditure in the UAE. This is called the Economic Substance Test.</p>
                                    <p>This things are reported through the Economic Substance Return.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_47">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse47" aria-expanded="false" aria-controls="collapse47">
                                    When is Economic Substance Return Due? </button>
                            </h2>
                            <div id="collapse47" class="accordion-collapse collapse" aria-labelledby="heading47" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Needs to be submitted within 12 months of the financial year-end (Mentioned in MOA/AOI etc).</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_48">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse48" aria-expanded="false" aria-controls="collapse48">
                                    We do not conduct a relevant activity, do we still need to do anything. </button>
                            </h2>
                            <div id="collapse48" class="accordion-collapse collapse" aria-labelledby="heading48" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Substance over form, not only the activity listed on the license, recommend to get assessed.</p>
                                    <p>But even when you do not conduct any relevant activity, you still may require to submit the notification, according to the jurisdiction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_49">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse49" aria-expanded="false" aria-controls="collapse49">
                                    Penalties for not filing in time or inaccurate filing </button>
                            </h2>
                            <div id="collapse49" class="accordion-collapse collapse" aria-labelledby="heading49" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>10k to 50k</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="ESR">
                            <h2 class="accordion-header" id="heading_50">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse50" aria-expanded="false" aria-controls="collapse50">
                                    Conducts a relevant activity? </button>
                            </h2>
                            <div id="collapse50" class="accordion-collapse collapse" aria-labelledby="heading50" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Notification needs to filed, with the relevant time frame, followed by the return</p>
                                    <p><strong>Requirements: </strong><br />
                                        Please see the following requirements for our initial assessment:</p>
                                    <ul>
                                        <li>Filled in Questionnaire. Please click here to be redirected to our website and fill out the questionnaire.</li>
                                        <li>Summary of company’s activities</li>
                                        <li>Financials for the year 20XX</li>
                                        <li>List of locally resident employees, directors &amp; shareholders</li>
                                        <li>List of foreign resident employees, directors &amp; shareholders</li>
                                        <li>Full set of company docs including TL/passports of shareholders</li>
                                        <li>Manuscript of company policy, processes &amp; procedures</li>
                                        <li>List and details of Outsourced activities</li>
                                    </ul>
                                    <p>Click <a href="#" target="_blank" rel="noopener">here</a> to view the legislation and other important resources. Make sure he reviews <a href="#" target="_blank" rel="noopener"> Ministerial decision no. 215 for the year 2019 </a> as well.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_51">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse51" aria-expanded="false" aria-controls="collapse51">
                                    What is Money Laundry? </button>
                            </h2>
                            <div id="collapse51" class="accordion-collapse collapse" aria-labelledby="heading51" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Money laundry is the process in which criminals concealing the original ownership and the source of the criminal proceeds derived from illegal acts such as Narcotics, trafficking, embezzlement, arms sale, cyber-crimes, etc. by making such proceed appear to be from a legitimate source to subsequently use such proceeds in both legal and illegal activities.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_52">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse52" aria-expanded="false" aria-controls="collapse52">
                                    What are the harms of money laundering? </button>
                            </h2>
                            <div id="collapse52" class="accordion-collapse collapse" aria-labelledby="heading52" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Weak execution of the strict laws towards the illegal activities, absence of executive authorities, as the negligence of the specialized authorities in any country makes it a solid ground for money launderers and criminals to practice their criminal acts easily and extensively. The danger of money laundering including the below:</p>
                                    <ul>
                                        <li>Crime and corruption are widely spread and noticeable</li>
                                        <li>Negatively affecting the economy by harming the private sector</li>
                                        <li>Bad reputation globally</li>
                                        <li>Imposing international sanctions</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_53">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse53" aria-expanded="false" aria-controls="collapse53">
                                    What is money laundering process? </button>
                            </h2>
                            <div id="collapse53" class="accordion-collapse collapse" aria-labelledby="heading53" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>The first stage of money laundering called “Placement”: At this stage money launderer smuggle cash across countries to invest in foreign financial institutions for trading or buying rare, expensive, minerals, precious stones and other products or holding that are iconic for their high price such as antiques in which it can be resold with checks or bank transfers, in addition to other ways such as splitting huge amounts into small amounts and making direct deposits in bank accounts.</li>
                                        <li>“Layering” is the second stage of money laundering process: In layering stage many layers of complex financial operations are forged to separate the illicit funds from their original source in order to hide the true source of these returns, which make it difficult for the supervisory and law enforcement authorities to track and audit these transactions.</li>
                                        <li>The last stage of money laundering process is “Integration”: In this stage legal cover proceeded by introducing those illegal revenues into the financial structure to show that they are legally acquired from the returns of the economic cycle, where the integration stage increases the difficulty of separating laundered money, which enable money launderers to invest in money legitimate activities that leads to an opportunity to double their wealth.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_54">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse54" aria-expanded="false" aria-controls="collapse54">
                                    Financing terrorism </button>
                            </h2>
                            <div id="collapse54" class="accordion-collapse collapse" aria-labelledby="heading54" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Defined as per the law No. 7 of 2014 as providing, preparing, collecting or facilitating funds for others to obtain them with the intent of use then in committing a terrorism crime, is considered one of the most dangerous means of spreading crime and corruption.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_55">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse55" aria-expanded="false" aria-controls="collapse55">
                                    What is Financial Action Task Force (FATF)? </button>
                            </h2>
                            <div id="collapse55" class="accordion-collapse collapse" aria-labelledby="heading55" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Founded by the G7 (or Group of Seven) in 1989 and headquartered in Paris.</li>
                                        <li>The organization has many international organizations and regional offices, such as MENA FATF for Middle East and North Africa Affairs.</li>
                                        <li>FATF has developed 40 recommendations, which are considered an international standard that countries implement in line with their own circumstances.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_56">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse56" aria-expanded="false" aria-controls="collapse56">
                                    What is FATF’s Objectives? </button>
                            </h2>
                            <div id="collapse56" class="accordion-collapse collapse" aria-labelledby="heading56" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Identifying risks, developing policies and local coordination.</li>
                                        <li>Tracking money laundering, terrorist financing and weapons proliferation activities.</li>
                                        <li>Giving powers and responsibilities to the competent authorities, such as law enforcement and supervisory authorities.</li>
                                        <li>Providing the required information about the ultimate beneficial owners (UBO) of companies and legal and natural persons</li>
                                        <li>Work to issue protective measures for the financial sector and the target sectors. Work to promote international cooperation.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_57">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse57" aria-expanded="false" aria-controls="collapse57">
                                    What is the meaning of "Disclosure limit"? </button>
                            </h2>
                            <div id="collapse57" class="accordion-collapse collapse" aria-labelledby="heading57" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Disclosure limit is the maximum limit of cash that allowed to be brought to the country. Exceed of this limit will subject to disclosure system controlled by the central bank.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_58">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse58" aria-expanded="false" aria-controls="collapse58">
                                    What is the difference between money laundering and terrorist financing? </button>
                            </h2>
                            <div id="collapse58" class="accordion-collapse collapse" aria-labelledby="heading58" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Money laundering depends on the dirty money gained from the crime on the contrary of the source of funds for the terrorist financing which might be licit and collected to be directed for a terrorist activity. – The customer type: the money launderer is a professional in what he doing. As for the terrorist financier, he often does not know that he is financing a terrorist act.</li>
                                        <li>Money volume: the money laundering has huge amounts that may belong to one person, unlike terrorist financing, which has small amounts belongs to many people (donations money for example).</li>
                                        <li>The money path: In money laundering, the money path is circular as the money starts/ ends from/ to the launderer, but in terrorist financing, it is linear, starts from the donors and ends to the terrorist.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_59">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse59" aria-expanded="false" aria-controls="collapse59">
                                    What is "Hawala Activity" and its arising risk? </button>
                            </h2>
                            <div id="collapse59" class="accordion-collapse collapse" aria-labelledby="heading59" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>It is a system for transferring money from one geographical region to another without inserting to the financial system, which leads to a lack of control over it. In 2020, a decision was issued by the Central Bank to make it mandatory to license the Hawala activity, to be controlled and monitored, to mitigate the risks of this activity. Therefore, our clients are requested to verify the legitimacy of the persons or organizations they deal with so that they are not involved in unintentional money laundering.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_60">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse60" aria-expanded="false" aria-controls="collapse60">
                                    Who is the Politically Exposed Persons (PEPs)? </button>
                            </h2>
                            <div id="collapse60" class="accordion-collapse collapse" aria-labelledby="heading60" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Natural persons who are or have been entrusted with prominent public functions in the State or any other foreign country such as Heads of States or Governments, senior politicians, senior government officials, judicial or military officials, senior executive managers of state-owned corporations, and senior officials of political parties and persons who are, or have previously been, entrusted with the management of an international organization or any prominent function within such an organization; and the definition also includes the following: Direct family members (Of the PEP, who are spouses, children, spouses of children, parents). Associates known to be close to the PEP, which include: Individuals having joint ownership rights in a legal person or arrangement or any other close business relationship with the PEP. Individuals having individual ownership rights in a legal person or arrangement established in favor of the PEP</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_61">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse61" aria-expanded="false" aria-controls="collapse61">
                                    Why PEP is considered a high risk? </button>
                            </h2>
                            <div id="collapse61" class="accordion-collapse collapse" aria-labelledby="heading61" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The risk of politically exposed persons is in the possibility of using their positions to launder or smuggle money or facilitate participation in any financial or terrorist crimes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_62">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse62" aria-expanded="false" aria-controls="collapse62">
                                    Why Dealers of precious metal and stones (DPMS) are considered high risk? </button>
                            </h2>
                            <div id="collapse62" class="accordion-collapse collapse" aria-labelledby="heading62" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Anyone who is engaged in the following trade or business activities shall be considered a DNFBP:</p>
                                    <ul>
                                        <li>Brokers and real estate.</li>
                                        <li>Dealers in precious metals and precious.</li>
                                        <li>Independent accountants &amp; auditors.</li>
                                        <li>Legal consultancy.</li>
                                        <li>Company service providers. (Only licensee who have one or both of the activities of Corporate Services Provider/ Documents Clearing Services will be able to establish companies on behalf of others.)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_63">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse63" aria-expanded="false" aria-controls="collapse63">
                                    Why Corporate service providers are considered (CSP) high risk?  </button>
                            </h2>
                            <div id="collapse63" class="accordion-collapse collapse" aria-labelledby="heading63" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>DPMS is considered a high risk activity for the below reasons: The ease of trade in diamonds around the world, as well as its small size, ease of transport and high price, make it one of the most threatening gemstones as a factor in money laundering. The high value of gold and its retention of its value regardless of its shape, whether in the form of gold artifacts or metal ingots, makes it the forefront of precious metals used in money laundering and terrorist financing.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_64">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse64" aria-expanded="false" aria-controls="collapse64">
                                    Why Corporate service providers are considered (CSP) high risk?  </button>
                            </h2>
                            <div id="collapse64" class="accordion-collapse collapse" aria-labelledby="heading64" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>CSP is considered a high risk activity for the below reasons:</p>
                                    <ul>
                                        <li>Acting as an agent for establishing companies on behalf of others.</li>
                                        <li>Work and equip for another person to work as a manager or secretary for a company or as a partner or in a simila</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_65">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse65" aria-expanded="false" aria-controls="collapse65">
                                    What are the risk factors of the activity of real estate agents? </button>
                            </h2>
                            <div id="collapse65" class="accordion-collapse collapse" aria-labelledby="heading65" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Independent accountants, auditors and legal consultancy are considered high risk activities because of running the below activities:</p>
                                    <ul>
                                        <li>Establishing companies with a complicated structure to hide the relation between the crimes’ income and the criminals.</li>
                                        <li>The purchase and sale of properties, where the transfer of the ownership is used in the layering stage as well as in the integration stage, through legal investments after the money laundering process.</li>
                                        <li>Make financial transactions on behalf of their customers, such as depositing or withdrawing cash, buying and selling shares, or sending and receiving international funds transfers.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_66">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse66" aria-expanded="false" aria-controls="collapse66">
                                    What is Designated non-financial business and professions (DNFBP)? </button>
                            </h2>
                            <div id="collapse66" class="accordion-collapse collapse" aria-labelledby="heading66" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Executing a series of operations to conceal the illegal source of funds. These operations can be classified under the layering stage.</li>
                                        <li>Investment in large projects such as tourist complexes, to give a legitimate appearance (the integration stage).</li>
                                        <li>Buying and selling real estate in fake names.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_67">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse67" aria-expanded="false" aria-controls="collapse67">
                                    What is Designated non-financial business and professions (DNFBP)? </button>
                            </h2>
                            <div id="collapse67" class="accordion-collapse collapse" aria-labelledby="heading67" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_68">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse68" aria-expanded="false" aria-controls="collapse68">
                                    Is management consultancy activity considered one of DNFBPs? </button>
                            </h2>
                            <div id="collapse68" class="accordion-collapse collapse" aria-labelledby="heading68" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>No, as it’s not mentioned as one of DNFBPs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_69">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse69" aria-expanded="false" aria-controls="collapse69">
                                    Why Dealers of precious metal and stones (DPMS) are considered high risk? </button>
                            </h2>
                            <div id="collapse69" class="accordion-collapse collapse" aria-labelledby="heading69" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>DPMS is considered a high risk activity for the below reasons:</p>
                                    <ul>
                                        <li>The ease of trade in diamonds around the world, as well as its small size, ease of transport and high price, make it one of the most threatening gemstones as a factor in money laundering.</li>
                                        <li>The high value of gold and its retention of its value regardless of its shape, whether in the form of gold artifacts or metal ingots, makes it the forefront of precious metals used in money laundering and terrorist financing.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_70">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse70" aria-expanded="false" aria-controls="collapse70">
                                    Why DNFBP included independent accountants, auditors and legal consultancy as high risk activities? </button>
                            </h2>
                            <div id="collapse70" class="accordion-collapse collapse" aria-labelledby="heading70" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>CSP is considered a high risk activity for the below reasons: Acting as an agent for establishing companies on behalf of others.<br />
                                        Work and equip for another person to work as a manager or secretary for a company or as a partner or in a similar position in a legal person without identifying the ultimate beneficial owner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_71">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse71" aria-expanded="false" aria-controls="collapse71">
                                    Why DNFBP included independent accountants, auditors and legal consultancy as high risk activities? </button>
                            </h2>
                            <div id="collapse71" class="accordion-collapse collapse" aria-labelledby="heading71" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Independent accountants, auditors and legal consultancy are considered high risk activities because of running the below activities: Establishing companies with a complicated structure to hide the relation between the crimes’ income and the criminals.<br />
                                        The purchase and sale of properties, where the transfer of the ownership is used in the layering stage as well as in the integration stage, through legal investments after the money laundering process.<br />
                                        Make financial transactions on behalf of their customers, such as depositing or withdrawing cash, buying and selling shares, or sending and receiving international funds transfers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_72">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse72" aria-expanded="false" aria-controls="collapse72">
                                    What are the risk factors of the activity of real estate agents? </button>
                            </h2>
                            <div id="collapse72" class="accordion-collapse collapse" aria-labelledby="heading72" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Executing a series of operations to conceal the illegal source of funds. These operations can be classified under the layering stage.<br />
                                        Investment in large projects such as tourist complexes, to give a legitimate appearance (the integration stage).<br />
                                        Buying and selling real estate in fake names.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_73">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse73" aria-expanded="false" aria-controls="collapse73">
                                    What are the requirements of DNFBPs? </button>
                            </h2>
                            <div id="collapse73" class="accordion-collapse collapse" aria-labelledby="heading73" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>DNFBPs must comply with the law of anti-money laundering and combating the financing of terrorism and financing of illegal organizations by implementing the requirements of the ministry of economy as below:</p>
                                    <ul>
                                        <li>Appoint an expert compliance officer.</li>
                                        <li>Rely on the official website of the committee for goods and material subjected to import &amp; export control to obtain the most recent publication of the local lists issued by the UAE cabinet.</li>
                                        <li>In addition, subscribe to the email subscription service provided in the website in order to receive relevant updates to both the UNSC consolidated lists and the local lists.</li>
                                        <li>Register for goAML program. goAML is an integrated platform used to file Suspicious Transaction Reports (STRs) and/or Suspicious Activity Reports (SARs)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_74">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse74" aria-expanded="false" aria-controls="collapse74">
                                    There is any fee for the registrations? </button>
                            </h2>
                            <div id="collapse74" class="accordion-collapse collapse" aria-labelledby="heading74" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>There are no fees for registrations. The companies can register thru simple steps on the website of the ministry of economy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_75">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse75" aria-expanded="false" aria-controls="collapse75">
                                    When DNFBPs' customers should do the requirements? </button>
                            </h2>
                            <div id="collapse75" class="accordion-collapse collapse" aria-labelledby="heading75" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The existing Licensee already registered for goAML after awareness campaign which ended on April 30th 2021, fines will impose by the ministry of economy for those who didn’t comply with the requirements before campaign’s deadline. The new licensees should comply with the requirements once their license been issued to avoid imposing any fines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_76">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse76" aria-expanded="false" aria-controls="collapse76">
                                    What are fines for non-compliance? </button>
                            </h2>
                            <div id="collapse76" class="accordion-collapse collapse" aria-labelledby="heading76" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>AED 50K is a minimum fine, and it may duplicate to be AED 5M and company cancellation</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_77">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse77" aria-expanded="false" aria-controls="collapse77">
                                    What is DNFBPs Supervisory Boddy? </button>
                            </h2>
                            <div id="collapse77" class="accordion-collapse collapse" aria-labelledby="heading77" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Ministry of Economy.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Go AML">
                            <h2 class="accordion-header" id="heading_78">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse78" aria-expanded="false" aria-controls="collapse78">
                                    Laws & Decree: </button>
                            </h2>
                            <div id="collapse78" class="accordion-collapse collapse" aria-labelledby="heading78" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Federal Decree No. (20) of 2018 on anti-money laundering and countering the financing of terrorism.</li>
                                        <li>Cabinet Decision No. (10) of 2019 concerning the implementing regulation of decree law no. (20) of 2018 on anti- money laundering.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_79">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse79" aria-expanded="false" aria-controls="collapse79">
                                    Who provides Meydan Plus services? </button>
                            </h2>
                            <div id="collapse79" class="accordion-collapse collapse" aria-labelledby="heading79" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The Meydan Plus Service is provided by our multi-lingual staff, with decades of combined experience providing advice and assistance to global and local entrepreneurs in Dubai.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_80">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse80" aria-expanded="false" aria-controls="collapse80">
                                    Why do I need to pay for Meydan Plus services? </button>
                            </h2>
                            <div id="collapse80" class="accordion-collapse collapse" aria-labelledby="heading80" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Our services are designed to help you with third-party services that may be required to successfully run your business or help you with immigration services related to the visa etc.We charge a service fee based on the number of man hours required to successfully complete a task.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_81">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse81" aria-expanded="false" aria-controls="collapse81">
                                    When do I have to pay for Meydan Plus services? </button>
                            </h2>
                            <div id="collapse81" class="accordion-collapse collapse" aria-labelledby="heading81" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>After we have processed your service request and contacted you with a proposal for concierge services. You can pay us by bank transfer, in-cash or by using credit / debit card. The service will be confirmed once the invoice is paid successfully.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_82">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse82" aria-expanded="false" aria-controls="collapse82">
                                    How long will it take to process my Meydan Plus service request? </button>
                            </h2>
                            <div id="collapse82" class="accordion-collapse collapse" aria-labelledby="heading82" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The time it will take to process your request will depend entirely on the nature of the request and/or the complexity of the query. We will, however, contact you within 24 hours of receiving your service request to give you a preliminary invoice based of the time required to fully deal with your query.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_83">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse83" aria-expanded="false" aria-controls="collapse83">
                                    Can you guarantee to help with my request? </button>
                            </h2>
                            <div id="collapse83" class="accordion-collapse collapse" aria-labelledby="heading83" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>We can guarantee to do our best. Whether or not we can provide the information and/or assistance that you require will of course depend on the specific nature of your request.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_84">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse84" aria-expanded="false" aria-controls="collapse84">
                                    How do I book a consultation or request your services? </button>
                            </h2>
                            <div id="collapse84" class="accordion-collapse collapse" aria-labelledby="heading84" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>It’s easy! You can reach us by choosing any of the three options below:</p>
                                    <p><strong>Online: </strong>Log in to our customer portal available on our website.</p>
                                    <p><strong>Email:</strong> connect@meydanfz.ae</p>
                                    <p><strong>Call</strong>: 800-391</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_85">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse85" aria-expanded="false" aria-controls="collapse85">
                                    What are your hours of business? </button>
                            </h2>
                            <div id="collapse85" class="accordion-collapse collapse" aria-labelledby="heading85" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>We maintain a flexible 24/7 schedule in order to be readily available to serve our clients. Emergencies can arise and life happens. If you have a request outside of our standard meeting hours, then you may reach us</p>
                                    <p>by phone at 800391 or email us at connect@meydanfz.ae. We frequently monitor requests and we will respond to you as quickly as possible.</p>
                                    <p>&nbsp;</p>
                                    <p>Our business office hours for meetings are:</p>
                                    <p>Monday to Friday: 8:00 A.M. – 5:00 P.M.</p>
                                    <p>Saturday &amp; Sunday: Closed</p>
                                    <p>Our chat support and contact center are operational 24/7 all days of the week.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_86">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse86" aria-expanded="false" aria-controls="collapse86">
                                    What is the minimum time required to request a service? </button>
                            </h2>
                            <div id="collapse86" class="accordion-collapse collapse" aria-labelledby="heading86" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Ideally, we prefer to be given 48 hours notice for service requests. We will do our absolute best to accommodate urgent or last-minute requests, or requests that fall outside of our standard business hours as well as requests beyond our service area. Any services or work performed outside of our regular business office hours, such as evenings, overnights, weekends, and UAE civic and statutory holidays will incur a surcharge, additional fee or premium rate.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_87">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse87" aria-expanded="false" aria-controls="collapse87">
                                    How does Meydan Plus use my data? </button>
                            </h2>
                            <div id="collapse87" class="accordion-collapse collapse" aria-labelledby="heading87" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Meydan Plus will never share your data with third parties except to facilitate the provision of the requested service. We use your data to provide you with a personalised and seamless experience through our channels.</p>
                                    <p>More information on Meydan Free Zone’s Privacy Policy are available <a href="/wp-content/uploads/2022/01/Privacy-Policy.pdf" target="_blank" rel="noopener">here</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_88">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse88" aria-expanded="false" aria-controls="collapse88">
                                    Whom do I contact in case of an issue with the Meydan Plus service? </button>
                            </h2>
                            <div id="collapse88" class="accordion-collapse collapse" aria-labelledby="heading88" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>It’s easy! You can reach us by choosing any of the two options below for escalations.</p>
                                    <p><strong>Email:</strong> connect@meydanfz.ae</p>
                                    <p><strong>Call</strong>: 800-391</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Plus">
                            <h2 class="accordion-header" id="heading_89">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse89" aria-expanded="false" aria-controls="collapse89">
                                    What is your cancellation policy? </button>
                            </h2>
                            <div id="collapse89" class="accordion-collapse collapse" aria-labelledby="heading89" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Cancellations must be called or emailed 24 hours in advance of your appointment or a 1-hour fee will be charged.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_90">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse90" aria-expanded="false" aria-controls="collapse90">
                                    What is Meydan Pay? </button>
                            </h2>
                            <div id="collapse90" class="accordion-collapse collapse" aria-labelledby="heading90" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>MeydanPay is a payment gateway App to facilitate payment collection for goods and services on behalf of your merchants, this means any transaction must be against a service. It can be integrated with your online shops, marketplaces, and services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_91">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse91" aria-expanded="false" aria-controls="collapse91">
                                    How can I apply for Meydan Pay? </button>
                            </h2>
                            <div id="collapse91" class="accordion-collapse collapse" aria-labelledby="heading91" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Customers can register for Meydan Pay either using the Meydan Pay App available on both Google or Apple stores.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_92">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse92" aria-expanded="false" aria-controls="collapse92">
                                    Do I need to be a resident of the UAE in-order to apply for Meydan Pay? </button>
                            </h2>
                            <div id="collapse92" class="accordion-collapse collapse" aria-labelledby="heading92" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>No, anyone can register for Meydan Pay. The document for KYC varies depending on your location. For example, a resident will need Emirates ID and for non-residents, a passport is required to complete KYC.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_93">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse93" aria-expanded="false" aria-controls="collapse93">
                                    How can a client register if Emirates ID is under process, or the client is overseas? </button>
                            </h2>
                            <div id="collapse93" class="accordion-collapse collapse" aria-labelledby="heading93" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Users can upload the passport instead to complete KYC.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_94">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse94" aria-expanded="false" aria-controls="collapse94">
                                    Will I be able to open a bank account if I have Meydan Pay? </button>
                            </h2>
                            <div id="collapse94" class="accordion-collapse collapse" aria-labelledby="heading94" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, opening a bank account and Meydan Pay are independent of each other. Meydan Pay is a payment gateway solution and not a bank or a banking application.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_95">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse95" aria-expanded="false" aria-controls="collapse95">
                                    How long does it take for KYC verification to be completed? </button>
                            </h2>
                            <div id="collapse95" class="accordion-collapse collapse" aria-labelledby="heading95" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The KYC process to register for the Meydan Pay app can take a minimum of 2 working days to a maximum of 5 working days based on your business case and transaction requirements.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_96">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse96" aria-expanded="false" aria-controls="collapse96">
                                    Should the email address and mobile number match the information in the trade license during the registration of the account? </button>
                            </h2>
                            <div id="collapse96" class="accordion-collapse collapse" aria-labelledby="heading96" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Differences in the email address and mobile number are acceptable.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_97">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse97" aria-expanded="false" aria-controls="collapse97">
                                    How long does it take for a beneficiary to be added? </button>
                            </h2>
                            <div id="collapse97" class="accordion-collapse collapse" aria-labelledby="heading97" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>It will take less than 2 hours for the beneficiary to be added.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_98">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse98" aria-expanded="false" aria-controls="collapse98">
                                    Can Meydan Pay be accessed by multiple users of the same company? </button>
                            </h2>
                            <div id="collapse98" class="accordion-collapse collapse" aria-labelledby="heading98" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The owner/admin of the company can create multiple operators. The operators will have limited access.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_99">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse99" aria-expanded="false" aria-controls="collapse99">
                                    Which currencies are accepted on Meydan Pay? Do you offer multi-currency transactions? </button>
                            </h2>
                            <div id="collapse99" class="accordion-collapse collapse" aria-labelledby="heading99" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Currently, transactions can be done only in AED.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_100">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse100" aria-expanded="false" aria-controls="collapse100">
                                    How can I deposit money into my Meydan Pay account? </button>
                            </h2>
                            <div id="collapse100" class="accordion-collapse collapse" aria-labelledby="heading100" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>You can top-up the Meydan Pay wallet through various modes – CC/ Net Banking (UAEPGS banks)/ from our partner banks and (Al Ansari / DIB / UPay / VA).</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_101">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse101" aria-expanded="false" aria-controls="collapse101">
                                    How do I transfer funds from an international bank account to my Meydan Pay account? </button>
                            </h2>
                            <div id="collapse101" class="accordion-collapse collapse" aria-labelledby="heading101" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>You can transfer funds from an international bank account using our VA feature.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_102">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse102" aria-expanded="false" aria-controls="collapse102">
                                    What is IBAN? Will I get a credit/debit card with my IBAN? </button>
                            </h2>
                            <div id="collapse102" class="accordion-collapse collapse" aria-labelledby="heading102" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The IBAN generated by the system is a virtual account, no credit or debit card is given by Noqodi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_103">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse103" aria-expanded="false" aria-controls="collapse103">
                                    Can international transfers be carried out on the virtual IBAN? </button>
                            </h2>
                            <div id="collapse103" class="accordion-collapse collapse" aria-labelledby="heading103" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, international transfers can be carried out through virtual IBAN.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_104">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse104" aria-expanded="false" aria-controls="collapse104">
                                    Can I top-up my Meydan Pay account through local banks only? </button>
                            </h2>
                            <div id="collapse104" class="accordion-collapse collapse" aria-labelledby="heading104" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Top-up can be done by both, local and international banks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_105">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse105" aria-expanded="false" aria-controls="collapse105">
                                    How can I withdraw funds in cash? </button>
                            </h2>
                            <div id="collapse105" class="accordion-collapse collapse" aria-labelledby="heading105" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The service allows wallet to wallet transactions, if you require to remove funds, place a request on the app for approval.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_106">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse106" aria-expanded="false" aria-controls="collapse106">
                                    Can you withdraw money from both revenue and e-cash accounts? </button>
                            </h2>
                            <div id="collapse106" class="accordion-collapse collapse" aria-labelledby="heading106" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>The money can be withdrawn only from the revenue account.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_107">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse107" aria-expanded="false" aria-controls="collapse107">
                                    Can you make and share invoices through Meydan Pay? </button>
                            </h2>
                            <div id="collapse107" class="accordion-collapse collapse" aria-labelledby="heading107" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, invoices can be made and shared through Meydan Pay by email, social media, and QR code scanner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_108">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse108" aria-expanded="false" aria-controls="collapse108">
                                    How can I invoice my supplier using Meydan Pay? </button>
                            </h2>
                            <div id="collapse108" class="accordion-collapse collapse" aria-labelledby="heading108" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>You can use our Receive Money feature to generate the invoice either via a payment link or via QR code.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item" data-category="Meydan Pay">
                            <h2 class="accordion-header" id="heading_109">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse109" aria-expanded="false" aria-controls="collapse109">
                                    Can I generate a statement for my account? </button>
                            </h2>
                            <div id="collapse109" class="accordion-collapse collapse" aria-labelledby="heading109" data-bs-parent="#accordionFAQs">
                                <div class="accordion-body">
                                    <p>Yes, after login, you can see various reports such as account statements/funds received, payments made and many more.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- faqs accordion end -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faqs end -->