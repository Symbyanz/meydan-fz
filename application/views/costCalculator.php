<?php $titles = explode("/", $title); ?>




<style>
    html,
    body {
        font-family: 'Open Sans', sans-serif;
        font-weight: 300;
    }

    .btTransparentLightHeader .mainHeader {
        color: #000;
    }

    .swal2-container {
        z-index: 106000;
    }

    ul {
        margin-left: 0px;
    }

    .iti__country-list {
        font-size: 14px;
    }

    .iti__country-list li {
        margin-left: 0px;
    }

    main {
        max-width: 1650px;
        margin: 0px auto;
        margin-top: 160px;
    }

    nav a,
    .topBarPort a {
        text-decoration: none;
    }

    .btTransparentLightHeader .topBar .topTools {
        border-bottom: 1px solid rgba(0, 0, 0, .3)
    }

    .form-control,
    .form-select {
        border: 1px solid #bace1d !important;
        border-radius: 36px;
        padding: 10px 28px;
        font-size: 14px;
        line-height: 24px;
    }

    .form-control:focus,
    .form-control:active,
    .form-select:focus,
    .form-select:active {
        outline: 0;
        box-shadow: none !important;
        border-color: #bace1d !important;
    }

    p strong {
        font-weight: 600;
    }

    .fw-400 {
        font-weight: 400;
    }

    .fw-600 {
        font-weight: 600;
    }

    .c-blue {
        color: #004a98;
    }

    .c-grey {
        color: #9b9b9b;
    }

    .red-gradient {
        background: linear-gradient(to right, #ca1990, #f45448);
    }

    .hero-outer {
        min-height: 360px;
    }

    .hero-heading {
        font-size: 42px;
        color: #fff;
    }

    .hero-heading span {
        font-size: 24px;
        display: block;
    }

    .steps-ul {
        list-style: none;
        padding-left: 0px;
        position: relative
    }

    .steps-ul:before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0px;
        width: 100%;
        height: 2px;
        background: #d65072;
        z-index: -1;
    }

    .steps-ul li:first-child {
        margin-left: 0px;
    }

    .steps-ul li {
        align-self: center;
    }

    .steps-ul li a {
        text-decoration: none;
        padding: 10px 30px;
        border-radius: 36px;
        text-transform: uppercase;
        border: 1px solid #d65072;
        color: #bbb8b8;
        font-size: 14px;
        background-color: #fff;
        display: inline-block;
        text-align: center;
    }

    .steps-ul li:first-child a {
        padding: 10px 16px;
        font-size: 24px;
    }

    .steps-ul li a.done {
        background: linear-gradient(to right, #ca1990, #f45448);
        color: #fff;
        border-color: transparent;
    }

    #step_holder .carousel-item {
        transition: all 0.3s ease;
    }

    .carousel-inner {
        overflow: visible;
    }

    .title {
        font-size: 24px;
        line-height: 30px;
    }

    .content,
    .content p {
        font-size: 16px;
        line-height: 22px;
        color: #000;
    }

    .content a {
        color: #004a98 !important;
        text-decoration: underline;
    }

    .content a i.fas {
        color: #000 !important;
        font-size: 22px;
    }

    .step-1 .invalid-feedback {
        padding-left: 0px;
    }

    .small-select {
        max-width: 80px;
    }

    .small-select-outer .input-group-text {
        flex-grow: 1;
        background-color: #fff;
        border: 1px solid #bace1d;
        border-top-right-radius: 36px;
        border-bottom-right-radius: 36px;
    }

    .saving-text,
    .visa-saving-text {
        font-size: 30px;
        line-height: 36px;
    }

    .total-box {
        border: 1px solid #c9288d;
        border-radius: 36px;
    }

    .total-box p {
        margin-bottom: 0px;
        font-size: 28px;
        line-height: 34px;
    }

    .total-box p sup {
        font-size: 18px;
        line-height: 24px;
    }

    .cta {
        margin-right: 1rem;
    }

    .back-button.cta svg {
        transform: translateX(-5px) rotateZ(180deg);
    }

    .back-button.cta:hover svg {
        transform: translateX(-10px) rotateZ(180deg);
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
        width: 49%;
        border: none;
        border-bottom: 1px solid #d65072;
    }

    #business_activities>.accordion-item>.accordion-header>.accordion-button {
        color: #004a98;
        text-transform: uppercase;
        font-weight: 600;
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

    #business_activities .accordion-category>.accordion-item>.accordion-header>.accordion-button {
        padding-left: 42px;
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

    .previous-text {
        font-size: 15px;
        margin-bottom: 4px;
    }

    .previous-text small {
        font-size: 11px;
    }

    #aa_cat .accordion-item {
        border-radius: 0px;
        border-color: #fff;
    }

    #aa_cat .accordion-button {
        border-radius: 0px;
    }

    #aa_cat .accordion-button::after {
        transform: rotate(-90deg)
    }

    #aa_cat .accordion-button:not(.collapsed)::after {
        transform: rotate(0deg)
    }

    #aa_cat .accordion-body {
        padding: 0rem 0.4rem;
    }

    #aa_cat>.accordion-item>.accordion-header>.accordion-button,
    #aa_cat>.accordion-item>.accordion-header>.accordion-button:not(.collapsed) {
        color: #000;
        text-transform: uppercase;
        font-weight: 600;
        background-color: #eaeaea;
        font-size: 14px;
    }

    #aa_cat>.accordion-item>.accordion-header>.accordion-button:not(.collapsed)::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23212529'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    #aa_cat>.accordion-item>.accordion-header>.accordion-button.accordion-nochild-button::after,
    #aa_cat>.accordion-item>.accordion-header>.accordion-button.accordion-nochild-button:not(.collapsed)::after {
        display: none;
    }

    #aa_cat>.accordion-item>.accordion-collapse>.accordion-body {
        color: #000000;
        background-color: #f4f4f4;
        padding: 0px
    }

    #aa_cat>.accordion-item>.accordion-collapse>.accordion-body p {
        border-bottom: 2px solid #fff;
        padding: 0.5rem 1rem;
        font-size: 12px;
        margin-bottom: 0px;
        text-transform: capitalize;
    }








    #search_icon {
        color: #004a98;
        background-color: #bace1d;
        border: 1px solid #bace1d;
        font-size: 24px;
        border-radius: 36px;
        padding-left: 24px;
        padding-right: 24px;
        transform: translateX(-26px);
        position: relative;
        z-index: 5;
    }

    .additional-activities {
        list-style: none;
        padding-left: 0px;
        display: none !important;
    }

    .additional-activities li {
        background-color: #eaeaea;
        font-size: 12px;
        padding: 8px 16px;
        border-radius: 36px;
        margin-right: 14px;
        position: relative;
        margin-bottom: 10px;
    }

    .additional-activities li .remove-aa {
        position: absolute;
        top: -5px;
        right: -5px;
        color: #fff;
        background-color: #000;
        display: inline-block;
        font-size: 15px;
        line-height: 18px;
        width: 20px;
        height: 20px;
        text-align: center;
        border-radius: 50%;
        padding-left: 1px;
        cursor: pointer;
    }

    .sub-title {
        font-size: 22px;
    }

    .summary-outer-sec>div {
        border-bottom: 1px solid #c9288d;
    }

    .col-cal-button1 {
        padding: 12px 32px;
        text-decoration: none;
        text-transform: uppercase;
        color: #004a98;
        border: 1px solid #bace1d;
        background-color: #bace1d;
        margin-right: 8px;
        border-radius: 36px;
        font-weight: 400;
    }

    .col-cal-button1:hover {
        color: #004a98 !important;
        background-color: #fff !important;
    }

    .back-button1 {
        background-color: #fff;
    }

    .back-button1:hover {
        color: #004a98 !important;
        background-color: #bace1d !important;
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
        /*display:none;*/
    }

    .post-box {
        border: 1px solid #bace1d;
        height: 100%;
        border-radius: 36px;
        overflow: hidden;
    }

    .post-title {
        font-size: 20px;
        line-height: 26px;
    }

    .was-validated :invalid:parent .invalid-feedback {
        display: block;
    }

    #search_actvities {
        width: 1%;
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
        top: 100%;
        left: 0;
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

    #ba_val {
        list-style: none;
        padding-left: 0px;
    }

    #ba_val li {
        margin-left: 0px;
    }

    .disclaimer-text,
    .disclaimer-text p {
        font-size: 12px;
    }

    .step-7 h2.title {
        font-size: 38px;
        line-height: 44px;
        border-top: 1px solid #F4BBC7;
    }

    /* .iti__flag{display:none;} */
    .loading-outer {
        display: flex;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        background: rgba(220, 220, 220, 0.95);
        z-index: 99;
        align-items: center;
    }

    @keyframes ldio-pefbbwcodg {
        0% {
            transform: rotate(0)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    .ldio-pefbbwcodg div {
        box-sizing: border-box !important
    }

    .ldio-pefbbwcodg>div {
        position: absolute;
        width: 144px;
        height: 144px;
        top: 28px;
        left: 28px;
        border-radius: 50%;
        border: 16px solid #000;
        border-color: #f45448 transparent #f45448 transparent;
        animation: ldio-pefbbwcodg 1s linear infinite;
    }

    .ldio-pefbbwcodg>div:nth-child(2),
    .ldio-pefbbwcodg>div:nth-child(4) {
        width: 108px;
        height: 108px;
        top: 46px;
        left: 46px;
        animation: ldio-pefbbwcodg 1s linear infinite reverse;
    }

    .ldio-pefbbwcodg>div:nth-child(2) {
        border-color: transparent #ca1990 transparent #ca1990
    }

    .ldio-pefbbwcodg>div:nth-child(3) {
        border-color: transparent
    }

    .ldio-pefbbwcodg>div:nth-child(3) div {
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(45deg);
    }

    .ldio-pefbbwcodg>div:nth-child(3) div:before,
    .ldio-pefbbwcodg>div:nth-child(3) div:after {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: -16px;
        left: 48px;
        background: #f45448;
        border-radius: 50%;
        box-shadow: 0 128px 0 0 #f45448;
    }

    .ldio-pefbbwcodg>div:nth-child(3) div:after {
        left: -16px;
        top: 48px;
        box-shadow: 128px 0 0 0 #f45448;
    }

    .ldio-pefbbwcodg>div:nth-child(4) {
        border-color: transparent;
    }

    .ldio-pefbbwcodg>div:nth-child(4) div {
        position: absolute;
        width: 100%;
        height: 100%;
        transform: rotate(45deg);
    }

    .ldio-pefbbwcodg>div:nth-child(4) div:before,
    .ldio-pefbbwcodg>div:nth-child(4) div:after {
        content: "";
        display: block;
        position: absolute;
        width: 16px;
        height: 16px;
        top: -16px;
        left: 30px;
        background: #ca1990;
        border-radius: 50%;
        box-shadow: 0 92px 0 0 #ca1990;
    }

    .ldio-pefbbwcodg>div:nth-child(4) div:after {
        left: -16px;
        top: 30px;
        box-shadow: 92px 0 0 0 #ca1990;
    }

    .loadingio-spinner-double-ring-doh344e77p6 {
        width: 200px;
        height: 200px;
        display: inline-block;
        overflow: hidden;
    }

    .ldio-pefbbwcodg {
        width: 100%;
        height: 100%;
        position: relative;
        transform: translateZ(0) scale(1);
        backface-visibility: hidden;
        transform-origin: 0 0;
    }

    .ldio-pefbbwcodg div {
        box-sizing: content-box;
    }

    .gf-outer {
        height: 0px !important;
        overflow: hidden;
    }

    .tooltip-inner {
        max-width: 320px;
        background-color: #fff;
        color: #000;
        border: 1px solid #c9288d;
        border-radius: 36px;
        padding: 10px;
    }

    .bs-tooltip-top .tooltip-arrow:before {
        border-top-color: #c9288d;
    }

    .tooltip.show {
        opacity: 1;
    }

    #aa_cat .accordion-header .remove-aa {
        font-size: 24px;
        line-height: 12px;
        position: absolute;
        right: 26px;
        font-weight: 100;
    }

    #aa_cat .accordion-header .accordion-button.accordion-button-aa {
        padding-right: 50px;
    }

    html[lang="ar"] .iti--allow-dropdown .iti__flag-container,
    html[lang="ar"] .iti--separate-dial-code .iti__flag-container {
        right: 0px;
        left: auto;
    }

    html[lang="ar"] .iti--separate-dial-code .iti__selected-flag {
        border-right: none;
        border-left: 1px solid #bace1d;
        border-radius: 0px;
    }

    html[lang="ar"] #phone {
        padding-right: 89px;
        padding-left: 24px;
    }

    html[lang="ar"] .steps-ul li a span {
        transform: translateY(5px);
        display: block;
    }

    html[lang="ar"] .steps-ul li a i {
        transform: translateY(6px);
    }

    html[lang="ar"] {
        overflow-x: hidden;
    }

    .steps-ul li a i {
        display: none;
    }

    .steps-ul li:first-child a i {
        display: inline-block;
    }

    @media (max-width:1200px) {
        .hero-heading-img {
            width: 120% !important;
            max-width: 120% !important;
        }

        .btTransparentLightHeader .bt-vertical-menu-trigger .bt_bb_icon:before,
        .btHasAltLogo .bt-vertical-menu-trigger .bt_bb_icon:before,
        .btTransparentLightHeader .bt-vertical-menu-trigger .bt_bb_icon .bt_bb_icon_holder:before,
        .btHasAltLogo .bt-vertical-menu-trigger .bt_bb_icon .bt_bb_icon_holder:before,
        .btTransparentLightHeader .bt-vertical-menu-trigger .bt_bb_icon:after,
        .btHasAltLogo .bt-vertical-menu-trigger .bt_bb_icon:after {
            border-top-color: #000;
        }

        .btTransparentLightHeader .mainHeader {
            color: #fff;
        }
    }

    @media (max-width:992px) {
        .hero-heading-img {
            width: 140% !important;
            max-width: 140% !important;
        }

        .hero-heading {
            font-size: 34px;
        }

        .hero-heading span {
            font-size: 20px;
        }

        .steps-ul li {
            margin-right: 20px;
        }
    }

    @media (max-width:768px) {

        /* .steps-ul li a{padding:3px 12px;}
            .steps-ul li a span{display:none;}
            .steps-ul li a.done{display:inline-block;}
            .steps-ul li a.done span{display:block;} */
        .hero-heading-img {
            width: 420% !important;
            max-width: 420% !important;
        }

        main {
            margin-top: 80px;
        }

        .hero-outer {
            min-height: 390px
        }

        .hero-heading {
            font-size: 34px;
        }

        .hero-heading span {
            font-size: 20px;
        }

        /*
            .steps-ul{flex-wrap:wrap;}
            .steps-ul:before{display:none;}
            .steps-ul li{width:48%;margin-top:6px;margin-bottom:6px;margin-right:0px;}
            .steps-ul li a{padding:17px 30px;width:100%;}
            */
        .steps-ul {
            flex-wrap: wrap;
        }

        .steps-ul li {
            width: auto;
            margin-right: 0px;
        }

        .steps-ul li:first-child a {
            padding: 15px 15px;
        }

        .steps-ul li a {
            padding: 15px 15px;
            border-radius: 50%;
            transform: translateY(4px);
        }

        .steps-ul li a span {
            display: none !important;
        }

        .steps-ul li a i {
            display: none;
        }

        .steps-ul li:first-child a i {
            display: none;
        }

        #business_activities>.accordion-item {
            width: 100%
        }
    }
</style>
<!-- cost calculator intro start -->
<section class="intro intro--cc intro--sp">
    <div class="intro__bg" style="background-image:url('/public/images/cc.png')">
        <div class="container">
            <div class="intro__cont">
                <!-- intro copy start -->
                <div class="intro__info">
                    <div class="title colr-blue">A Free Zone</div>
                    <h1 class="heading colr-blue">
                        Built for <strong>Luxury.</strong><br />Designed for <strong>Affordability.</strong> </h1>
                </div>
                <!-- intro copy end -->
            </div>
        </div>
    </div>
</section>
<!-- cost calculator intro start -->
<main>
    <div class="container py-2 py-md-3 position-relative">
        <div class="d-none loading-outer">
            <div class="loadingio-spinner-double-ring-doh344e77p6">
                <div class="ldio-pefbbwcodg">
                    <div></div>
                    <div></div>
                    <div>
                        <div></div>
                    </div>
                    <div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-9">
            <h1 class="pt-5 fw-400 c-blue" id="main_title">Cost Calculator</h1>
            <div class="w-100 my-4">
                <ul class="d-flex justify-content-between steps-ul">
                    <li><a data-step="0" data-bs-target="#step_holder" href="javascript:void(0)" id="step_1" tipy-content="Personal Details" class="done"><i class="fas fa-calculator"></i></a></li>
                    <li><a data-step="1" data-bs-target="#step_holder" href="javascript:void(0)" id="step_2" tipy-content="Duration"><i class="fa-solid fa-timer"></i><span>Duration</span></a></li>
                    <li><a data-step="2" data-bs-target="#step_holder" href="javascript:void(0)" id="step_3" tipy-content="Visa"><i class="fa-solid fa-file-circle-check"></i><span>Visa</span></a></li>
                    <li><a data-step="3" data-bs-target="#step_holder" href="javascript:void(0)" id="step_4" tipy-content="Activities"><i class="fa-solid fa-ballot-check"></i><span>Activities</span></a></li>
                    <li><a data-step="4" data-bs-target="#step_holder" href="javascript:void(0)" id="step_5" tipy-content="Additional Activities"><i class="fa-solid fa-ballot-check"></i><span>Additional Activities</span></a></li>
                    <li><a data-step="5" data-bs-target="#step_holder" href="javascript:void(0)" id="step_6" tipy-content="Result"><i class="fa-solid fa-hexagon-check"></i><span>Result</span></a></li>
                </ul>
            </div>
        </div>
        <div class="position-relative step-outer">
            <div id="step_holder" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="step-1">
                            <div class="col-12 col-md-9">
                                <h3 class="mb-2 title c-blue">Pay For What Your Business Needs Now</h3>
                                <div class="content">
                                    <p>Enjoy the flexibility that comes from setting up your business with Meydan Free Zone. We know every business is unique so we give you the freedom to design your license to fit your business needs, grow and shrink your license as you need it and waiver any amendment fees.</p>
                                    <p>Please enter your details to start customizing your license as you need.</p>
                                </div>
                                <div class="row form-outer">
                                    <div class="col-12 col-md-4 mb-3">
                                        <input type="text" class="form-control" placeholder="Your Name" id="name" maxlength="40" required>
                                        <div class="invalid-feedback">Please enter your name</div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <input type="tel" class="form-control" id="phone" maxlength="15" required>
                                        <div class="invalid-feedback">Please enter your number</div>
                                    </div>
                                    <div class="col-12 col-md-4 mb-3">
                                        <input type="email" class="form-control" placeholder="Your Email ID" id="email" maxlength="40" required>
                                        <div class="invalid-feedback">Please enter your email</div>
                                    </div>
                                    <input type="hidden" value="COST_CALCULATOR" id="source">
                                    <input type="hidden" value="
Warning: Undefined variable $current_url in /var/www/html/wp-content/themes/MeydanFZ/pages/tpl-cost-calculator.php on line 287
" id="source_url">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="step-2">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h3 class="mb-2 title c-blue">Short Term or Long Term?</h3>
                                    <p class="content mb-0"><strong>Select the duration of your license</strong></p>
                                    <div class="content">
                                        <p>Whether you want a license for one year or you’re planning a long-term business, we have it. With our multi-year license setup deals, you not only save on time but also on money.</p>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between mb-3">
                                        <div class="col-12 col-md-6 d-flex align-items-center">
                                            <div class="input-group small-select-outer">
                                                <select id="year_license" class="form-select small-select">
                                                    <option selected value="1">01</option>
                                                    <option value="2">02</option>
                                                    <!--<option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>
                                                        <option value="9">09</option>
                                                        <option value="10">10</option>-->
                                                </select>
                                                <span class="input-group-text">Year License</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5 align-self-center">
                                            <p class="my-2 text-center d-none c-blue saving-text">15% Savings</p>
                                            <p class="my-2 text-center c-blue blue-additional-text">AED 500 as cash back voucher which can be redeemed for any product or services at Meydan Free Zone</p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p>All packages include an LLC-FZ trade license, 3 groups of business activities and a shared desk facility, located inside The Meydan Hotel.</p>
                                        <p>Need License for more than 2 years, call us at 800 FZ1 or email us <a title="mailto:setup@meydanfz.ae" contenteditable="false" href="mailto:setup@meydanfz.ae">setup@meydanfz.ae</a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex align-self-center justify-content-center">
                                    <div class="col-10 col-md-8">
                                        <div class="d-flex py-5 total-box">
                                            <div class="col-6 align-self-end">
                                                <p class="text-end px-2 fw-600 c-blue">Total:</p>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p class="mb-2 c-grey old-total-outer"><sup>AED</sup><strike class="old-total"></strike></p>
                                                <p class="fw-600 c-blue"><sup>AED</sup><span class="total"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="step-3">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <h3 class="title c-blue">Looking for a one-man army or a small team?</h3>
                                    <p class="mb-0 content"><strong>Select the number of visas you need</strong></p>
                                    <div class="content">
                                        <p>Whether you need 6 visas or none, you can choose what suits your business needs.</p>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between mb-3">
                                        <div class="col-12 col-md-6">
                                            <div class="input-group small-select-outer">
                                                <select class="form-select small-select" id="visas">
                                                    <option selected value="0">00</option>
                                                    <option value="1">01</option>
                                                    <option value="2">02</option>
                                                    <option value="3">03</option>
                                                    <option value="4">04</option>
                                                    <option value="5">05</option>
                                                    <option value="6">06</option>
                                                    <option value="7">07</option>
                                                    <option value="8">08</option>
                                                    <option value="9">09</option>
                                                    <option value="10">10</option>
                                                </select>
                                                <span class="input-group-text">Visa Allocations</span>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5 align-self-center">
                                            <p class="my-2 text-center d-none c-blue visa-saving-text">15% Savings</p>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <p>Need more than 6 visas for your business? <a href="/contact/" target="_blank" rel="noopener">Speak to our team </a></p>
                                        <p><strong>Note:</strong> Visa charges to be paid additionally</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex align-self-center justify-content-center">
                                    <div class="col-10 col-md-8">
                                        <div class="d-flex py-5 total-box">
                                            <div class="col-6 align-self-end">
                                                <p class="text-end px-2 fw-600 c-blue">Total:</p>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p class="mb-2 c-grey old-total-outer"><sup>AED</sup><strike class="old-total"></strike></p>
                                                <p class="fw-600 c-blue"><sup>AED</sup><span class="total"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="step-4">
                            <h3 class="title c-blue">Moment of truth</h3>
                            <p class="mb-0 content"><strong>Select your business activity groups</strong></p>
                            <div class="content">
                                <p>With Meydan Free Zone, you get to choose up to 3 business activity groups free of charge to provide your business with the ultimate flexibility.</p>
                            </div>
                            <div class="my-4 business-activities-outer"></div>
                            <div class="invalid-feedback ba-error">Please select atleast one business acitivity.</div>
                            <div class="row">
                                <div class="col-12 col-md-6 align-self-center">
                                    <div class="content">
                                        <p>Need more information about our business activities? <a href="/business-activities/" target="_blank" rel="noopener">Click here</a></p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex align-self-center justify-content-center">
                                    <div class="col-10 col-md-8">
                                        <div class="d-flex py-5 total-box">
                                            <div class="col-6 align-self-end">
                                                <p class="text-end px-2 fw-600 c-blue">Total:</p>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p class="mb-2 c-grey old-total-outer"><sup>AED</sup><strike class="old-total"></strike></p>
                                                <p class="fw-600 c-blue"><sup>AED</sup><span class="total"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="step-5">
                            <div class="d-flex">
                                <div class="col-12 col-md-9">
                                    <h3 class="title c-blue">There’s no limit for setting up with us</h3>
                                    <div class="content">
                                        <p>Now that you’ve got your three business activity groups, you can opt to add additional business activities to your license. Each additional business activity will be charged at AED 1,000.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="input-group mb-3 autocomplete">
                                        <input type="text" class="form-control" placeholder="Search Our Business Activities" id="search_actvities" name="addition_business_activities" autocomplete="no">
                                        <span class="input-group-text" id="search_icon"><i class="fas fa-search"></i></span>
                                    </div>
                                    <ul class="pb-2 d-flex flex-wrap additional-activities"></ul>
                                    <div class="previous-text">
                                        <p>Previously chosen activities are mentioned below:<br />
                                            <small>(Activities mentioned in the sub-category are included)</small>
                                        </p>
                                    </div>
                                    <div class="aa-outer"></div>
                                    <div class="text-div"></div>
                                    <p class="pt-3 content"><a href="javascript:void(0)" id="dont_need_aa">I don’t need additional activities</a></p>
                                </div>
                                <div class="col-12 col-md-6 d-flex align-self-center justify-content-center">
                                    <div class="col-10 col-md-8">
                                        <div class="d-flex py-5 total-box">
                                            <div class="col-6 align-self-end">
                                                <p class="text-end px-2 fw-600 c-blue">Total:</p>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p class="mb-2 c-grey old-total-outer"><sup>AED</sup><strike class="old-total"></strike></p>
                                                <p class="fw-600 c-blue"><sup>AED</sup><span class="total"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="step-6">
                            <div class="d-flex">
                                <div class="col-12 col-md-6">
                                    <h3 class="title c-blue">You’re all set.</h3>
                                    <p class="title">Summary</p>
                                    <div class="row mb-5">
                                        <div class="col-12 col-md-6 d-flex flex-column mb-5 mb-md-0 summary-outer-sec">
                                            <div class="pb-1">
                                                <p class="mb-0 sub-title c-blue">Your Requirements</p>
                                            </div>
                                            <div class="pb-2 mt-3">
                                                <p class="mb-0"><strong>Duration</strong></p>
                                                <p class="content" id="duration_val"></p>
                                            </div>
                                            <div class="pb-2 mt-3">
                                                <p class="mb-0"><strong>Visas</strong></p>
                                                <p class="content" id="visa_val"></p>
                                            </div>
                                            <div class="pb-2 mt-3 h-100">
                                                <p class="mb-0"><strong>Business Activity Groups</strong></p>
                                                <ul id="ba_val">
                                                    </p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 d-flex flex-column summary-outer-sec">
                                            <div class="pb-1">
                                                <p class="mb-0 sub-title c-blue">Your Details</p>
                                            </div>
                                            <div class="pb-2 mt-3">
                                                <p class="mb-0"><strong>Name</strong></p>
                                                <p class="content" id="name_val"></p>
                                            </div>
                                            <div class="pb-2 mt-3">
                                                <p class="mb-0"><strong>Phone Number</strong></p>
                                                <p class="content" id="phone_val"></p>
                                            </div>
                                            <div class="pb-2 mt-3 h-100">
                                                <p class="mb-0"><strong>Email Address</strong></p>
                                                <p class="content" id="email_val"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-1">Once you send us the request, would you like us to:</p>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="request" value="online payment" checked>
                                        <label class="form-check-label" id="online_payment_tooltip" data-toggle="tooltip" data-placement="bottom" title="Our team will contact you after the payment to verify the details you’ve input in the cost calculator.">
                                            Pay online </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="request" value="call back">
                                        <label class="form-check-label">
                                            Request a call back from our sales advisor </label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 d-flex align-self-center justify-content-center">
                                    <div class="col-10 col-md-8">
                                        <div class="d-flex py-5 total-box">
                                            <div class="col-6 align-self-end">
                                                <p class="text-end px-2 fw-600 c-blue">Total:</p>
                                            </div>
                                            <div class="col-6 text-left">
                                                <p class="mb-2 c-grey old-total-outer"><sup>AED</sup><strike class="old-total"></strike></p>
                                                <p class="fw-600 c-blue"><sup>AED</sup><span class="total"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="step-7">
                            <div class="col-12 col-md-9 mt-1">
                                <h3 class="title c-blue">Thank You</h3>
                                <div class="content">
                                    <p>You’ve successfully completed customizing your own business license with Meydan Free Zone. Our team will reach you out shortly to assist you make your dream business come true.</p>
                                </div>
                                <h2 class="pt-4 title c-blue">Get to know our <br>Meydan Plus services</h2>
                                <div class="content">
                                    <p>Check our Meydan Plus services that we offer to make setting up your business as seamless as possible by putting your needs first and covering all your bases with our wide range of business support services.</p>
                                </div>
                            </div>
                            <div class="row mt-5 post-box-outer">
                                <div class="col-12 col-md-3">
                                    <div class="post-box">
                                        <img class="w-100" src="/public/images/final-1.jpg" alt="PO Box & Mail Management">
                                        <div class="p-4 post-inner-content">
                                            <p class="mb-1 fw-600 c-blue post-title">PO Box & Mail Management</p>
                                            <div class="content">
                                                <p>Set up all your business&#8217; correspondences under the premium address of Meydan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="post-box">
                                        <img class="w-100" src="/public/images/final-2.jpg" alt="Medical & Emirates ID Assistance">
                                        <div class="p-4 post-inner-content">
                                            <p class="mb-1 fw-600 c-blue post-title">Medical & Emirates ID Assistance</p>
                                            <div class="content">
                                                <p>We take the hassle out of setting up medical and Emirates ID appointments by doing it all on your behalf.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="post-box">
                                        <img class="w-100" src="/public/images/final-3.jpg" alt="Bank Account Assistance">
                                        <div class="p-4 post-inner-content">
                                            <p class="mb-1 fw-600 c-blue post-title">Bank Account Assistance</p>
                                            <div class="content">
                                                <p>No more stressing over which bank account to open and what paperwork to fill out, we do it so you don’t have to.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="post-box">
                                        <img class="w-100" src="/public/images/final-4.jpg" alt="Dependent Visa">
                                        <div class="p-4 post-inner-content">
                                            <p class="mb-1 fw-600 c-blue post-title">Dependent Visa</p>
                                            <div class="content">
                                                <p>You can easily sponsor a residency visa for the family members of the people you employ either in your household or business.</p>
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
        <div class="my-4">
            <a href="javascript:void(0)" class="d-none mr-2 col-cal-button back-button cta" data-bs-target="#step_holder" data-bs-slide-to="0">
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
                <span>Back</span>
            </a>

            <a href="javascript:void(0)" class="mr-2 col-cal-button next-button cta" data-bs-target="#step_holder">
                <span>Start</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
            <a href="javascript:void(0)" class="d-none mr-2 pay-now-button cta">
                <span>Pay Now</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
            <a href="/why-meydan-free-zone#meydan-plus" target="" class="d-none mr-2 col-cal-button learn-more cta">
                <span>Learn More</span>
                <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                </svg>
            </a>
            <div class="d-none mt-4 disclaimer-text">
                <p>By submitting this form, you agree to the Privacy Policy and Terms &amp; Conditions of Meydan Free Zone. I consent to Meydan Free Zone, collecting my name, email address and phone number and also contacting me either by email address or phone number supplied.</p>
            </div>
        </div>
    </div>
    <div class="gf-outer">
        <script type="text/javascript"></script>
        <div class='gf_browser_chrome gform_wrapper gravity-theme' id='gform_wrapper_4'>
            <div class='gform_heading'>
                <h2 class="gform_title">Cost Calculator</h2>
                <span class='gform_description'></span>
            </div>
            <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_4' id='gform_4' action='/cost-calculator/' novalidate>
                <div class='gform_body gform-body'>
                    <div id='gform_fields_4' class='gform_fields top_label form_sublabel_below description_below'>
                        <div id="field_4_1" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_1"><label class='gfield_label' for='input_4_1'>First Name</label>
                            <div class='ginput_container ginput_container_text'><input name='input_1' id='input_4_1' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_2" class="gfield gfield--width-quarter form_name field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_2"><label class='gfield_label' for='input_4_2'>Name</label>
                            <div class='ginput_container ginput_container_text'><input name='input_2' id='input_4_2' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_3" class="gfield gfield--width-quarter form_phone field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_3"><label class='gfield_label' for='input_4_3'>Phone</label>
                            <div class='ginput_container ginput_container_text'><input name='input_3' id='input_4_3' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_17" class="gfield gfield--width-quarter form_email field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_17"><label class='gfield_label' for='input_4_17'>Email ID</label>
                            <div class='ginput_container ginput_container_email'>
                                <input name='input_17' id='input_4_17' type='email' value='' class='large' aria-invalid="false" />
                            </div>
                        </div>
                        <div id="field_4_18" class="gfield gfield--width-quarter form_duration field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_18"><label class='gfield_label' for='input_4_18'>Duration</label>
                            <div class='ginput_container ginput_container_text'><input name='input_18' id='input_4_18' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_19" class="gfield gfield--width-quarter form_visas field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_19"><label class='gfield_label' for='input_4_19'>Visas</label>
                            <div class='ginput_container ginput_container_text'><input name='input_19' id='input_4_19' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_20" class="gfield gfield--width-quarter form_total field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_20"><label class='gfield_label' for='input_4_20'>Total</label>
                            <div class='ginput_container ginput_container_text'><input name='input_20' id='input_4_20' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_21" class="gfield gfield--width-quarter form_request field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_21"><label class='gfield_label' for='input_4_21'>Request</label>
                            <div class='ginput_container ginput_container_text'><input name='input_21' id='input_4_21' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_22" class="gfield gfield--width-half form_business_activities field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_22"><label class='gfield_label' for='input_4_22'>Business Activities</label>
                            <div class='ginput_container ginput_container_text'><input name='input_22' id='input_4_22' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_23" class="gfield gfield--width-half form_payment_received field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_23"><label class='gfield_label' for='input_4_23'>Payment Received</label>
                            <div class='ginput_container ginput_container_text'><input name='input_23' id='input_4_23' type='text' value='No' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_5" class="gfield gfield--width-quarter form_ccd field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_5"><label class='gfield_label' for='input_4_5'>Cost Calculator Details</label>
                            <div class='ginput_container ginput_container_text'><input name='input_5' id='input_4_5' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_6" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_6"><label class='gfield_label' for='input_4_6'>Company</label>
                            <div class='ginput_container ginput_container_text'><input name='input_6' id='input_4_6' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_7" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_7"><label class='gfield_label' for='input_4_7'>Method of Contact</label>
                            <div class='ginput_container ginput_container_text'><input name='input_7' id='input_4_7' type='text' value='Cost Calculator' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_8" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_8"><label class='gfield_label' for='input_4_8'>Layout</label>
                            <div class='ginput_container ginput_container_text'><input name='input_8' id='input_4_8' type='text' value='4977183000000368168' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_9" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_9"><label class='gfield_label' for='input_4_9'>utm_source</label>
                            <div class='ginput_container ginput_container_text'><input name='input_9' id='input_4_9' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_10" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_10"><label class='gfield_label' for='input_4_10'>utm_medium</label>
                            <div class='ginput_container ginput_container_text'><input name='input_10' id='input_4_10' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_11" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_11"><label class='gfield_label' for='input_4_11'>utm_campaign</label>
                            <div class='ginput_container ginput_container_text'><input name='input_11' id='input_4_11' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_12" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_12"><label class='gfield_label' for='input_4_12'>utm_id</label>
                            <div class='ginput_container ginput_container_text'><input name='input_12' id='input_4_12' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_13" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_13"><label class='gfield_label' for='input_4_13'>keyword</label>
                            <div class='ginput_container ginput_container_text'><input name='input_13' id='input_4_13' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_16" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_16"><label class='gfield_label' for='input_4_16'>adgroupid</label>
                            <div class='ginput_container ginput_container_text'><input name='input_16' id='input_4_16' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_15" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_15"><label class='gfield_label' for='input_4_15'>device</label>
                            <div class='ginput_container ginput_container_text'><input name='input_15' id='input_4_15' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                        <div id="field_4_14" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_4_14"><label class='gfield_label' for='input_4_14'>campaignid</label>
                            <div class='ginput_container ginput_container_text'><input name='input_14' id='input_4_14' type='text' value='' class='large' aria-invalid="false" /> </div>
                        </div>
                    </div>
                </div>
                <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_4' class='gform_button button' value='Submit' onclick='if(window["gf_submitting_4"]){return false;}  if( !jQuery("#gform_4")[0].checkValidity || jQuery("#gform_4")[0].checkValidity()){window["gf_submitting_4"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_4"]){return false;} if( !jQuery("#gform_4")[0].checkValidity || jQuery("#gform_4")[0].checkValidity()){window["gf_submitting_4"]=true;}  jQuery("#gform_4").trigger("submit",[true]); }' /> <input type='hidden' name='gform_ajax' value='form_id=4&amp;title=1&amp;description=1&amp;tabindex=0' />
                    <input type='hidden' class='gform_hidden' name='is_submit_4' value='1' />
                    <input type='hidden' class='gform_hidden' name='gform_submit' value='4' />

                    <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                    <input type='hidden' class='gform_hidden' name='state_4' value='WyJbXSIsImE0YmExZmZjNGYwYjUzM2RiYjQyMGExODY1ZjI4Zjk1Il0=' />
                    <input type='hidden' class='gform_hidden' name='gform_target_page_number_4' id='gform_target_page_number_4' value='0' />
                    <input type='hidden' class='gform_hidden' name='gform_source_page_number_4' id='gform_source_page_number_4' value='1' />
                    <input type='hidden' name='gform_field_values' value='' />

                </div>
            </form>
        </div>
        <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_4' id='gform_ajax_frame_4' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
        <script type="text/javascript">
            gform.initializeOnLoaded(function() {
                gformInitSpinner(4, '/public/images/spinner.svg');
                jQuery('#gform_ajax_frame_4').on('load', function() {
                    var contents = jQuery(this).contents().find('*').html();
                    var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                    if (!is_postback) {
                        return;
                    }
                    var form_content = jQuery(this).contents().find('#gform_wrapper_4');
                    var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_4').length > 0;
                    var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                    var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                    var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                    if (is_form) {
                        jQuery('#gform_wrapper_4').html(form_content.html());
                        if (form_content.hasClass('gform_validation_error')) {
                            jQuery('#gform_wrapper_4').addClass('gform_validation_error');
                        } else {
                            jQuery('#gform_wrapper_4').removeClass('gform_validation_error');
                        }
                        setTimeout(function() {
                            /* delay the scroll by 50 milliseconds to fix a bug in chrome */ }, 50);
                        if (window['gformInitDatepicker']) {
                            gformInitDatepicker();
                        }
                        if (window['gformInitPriceFields']) {
                            gformInitPriceFields();
                        }
                        var current_page = jQuery('#gform_source_page_number_4').val();
                        gformInitSpinner(4, '/public/images/spinner.svg');
                        jQuery(document).trigger('gform_page_loaded', [4, current_page]);
                        window['gf_submitting_4'] = false;
                    } else if (!is_redirect) {
                        var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                        if (!confirmation_content) {
                            confirmation_content = contents;
                        }
                        setTimeout(function() {
                            jQuery('#gform_wrapper_4').replaceWith(confirmation_content);
                            jQuery(document).trigger('gform_confirmation_loaded', [4]);
                            window['gf_submitting_4'] = false;
                            wp.a11y.speak(jQuery('#gform_confirmation_message_4').text());
                        }, 50);
                    } else {
                        jQuery('#gform_4').append(contents);
                        if (window['gformRedirect']) {
                            gformRedirect();
                        }
                    }
                    jQuery(document).trigger('gform_post_render', [4, current_page]);
                });
            });
        </script>
        <div class="gf-inner">

            <div class='gf_browser_chrome gform_wrapper gravity-theme' id='gform_wrapper_30'>
                <div class='gform_heading'>
                    <h2 class="gform_title">Cost Calculator - Half filled form</h2>
                    <span class='gform_description'></span>
                </div>
                <form method='post' enctype='multipart/form-data' target='gform_ajax_frame_30' id='gform_30' action='/cost-calculator/' novalidate>
                    <div class='gform_body gform-body'>
                        <div id='gform_fields_30' class='gform_fields top_label form_sublabel_below description_below'>
                            <div id="field_30_1" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_1"><label class='gfield_label' for='input_30_1'>First Name</label>
                                <div class='ginput_container ginput_container_text'><input name='input_1' id='input_30_1' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_2" class="gfield gfield--width-quarter form_name field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_2"><label class='gfield_label' for='input_30_2'>Name</label>
                                <div class='ginput_container ginput_container_text'><input name='input_2' id='input_30_2' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_3" class="gfield gfield--width-quarter form_phone field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_3"><label class='gfield_label' for='input_30_3'>Phone</label>
                                <div class='ginput_container ginput_container_text'><input name='input_3' id='input_30_3' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_17" class="gfield gfield--width-quarter form_email field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_17"><label class='gfield_label' for='input_30_17'>Email ID</label>
                                <div class='ginput_container ginput_container_email'>
                                    <input name='input_17' id='input_30_17' type='email' value='' class='large' aria-invalid="false" />
                                </div>
                            </div>
                            <div id="field_30_18" class="gfield gfield--width-quarter form_duration field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_18"><label class='gfield_label' for='input_30_18'>Duration</label>
                                <div class='ginput_container ginput_container_text'><input name='input_18' id='input_30_18' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_19" class="gfield gfield--width-quarter form_visas field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_19"><label class='gfield_label' for='input_30_19'>Visas</label>
                                <div class='ginput_container ginput_container_text'><input name='input_19' id='input_30_19' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_20" class="gfield gfield--width-quarter form_total field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_20"><label class='gfield_label' for='input_30_20'>Total</label>
                                <div class='ginput_container ginput_container_text'><input name='input_20' id='input_30_20' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_21" class="gfield gfield--width-quarter form_request field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_21"><label class='gfield_label' for='input_30_21'>Request</label>
                                <div class='ginput_container ginput_container_text'><input name='input_21' id='input_30_21' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_22" class="gfield gfield--width-half form_business_activities field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_22"><label class='gfield_label' for='input_30_22'>Business Activities</label>
                                <div class='ginput_container ginput_container_text'><input name='input_22' id='input_30_22' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_23" class="gfield gfield--width-half form_payment_received field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_23"><label class='gfield_label' for='input_30_23'>Payment Received</label>
                                <div class='ginput_container ginput_container_text'><input name='input_23' id='input_30_23' type='text' value='No' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_5" class="gfield gfield--width-quarter form_ccd field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_5"><label class='gfield_label' for='input_30_5'>Cost Calculator Details</label>
                                <div class='ginput_container ginput_container_text'><input name='input_5' id='input_30_5' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_6" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_6"><label class='gfield_label' for='input_30_6'>Company</label>
                                <div class='ginput_container ginput_container_text'><input name='input_6' id='input_30_6' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_7" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_7"><label class='gfield_label' for='input_30_7'>Method of Contact</label>
                                <div class='ginput_container ginput_container_text'><input name='input_7' id='input_30_7' type='text' value='Cost Calculator' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_8" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_8"><label class='gfield_label' for='input_30_8'>Layout</label>
                                <div class='ginput_container ginput_container_text'><input name='input_8' id='input_30_8' type='text' value='4977183000000368168' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_9" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_9"><label class='gfield_label' for='input_30_9'>utm_source</label>
                                <div class='ginput_container ginput_container_text'><input name='input_9' id='input_30_9' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_10" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_10"><label class='gfield_label' for='input_30_10'>utm_medium</label>
                                <div class='ginput_container ginput_container_text'><input name='input_10' id='input_30_10' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_11" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_11"><label class='gfield_label' for='input_30_11'>utm_campaign</label>
                                <div class='ginput_container ginput_container_text'><input name='input_11' id='input_30_11' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_12" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_12"><label class='gfield_label' for='input_30_12'>utm_id</label>
                                <div class='ginput_container ginput_container_text'><input name='input_12' id='input_30_12' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_13" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_13"><label class='gfield_label' for='input_30_13'>keyword</label>
                                <div class='ginput_container ginput_container_text'><input name='input_13' id='input_30_13' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_16" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_16"><label class='gfield_label' for='input_30_16'>adgroupid</label>
                                <div class='ginput_container ginput_container_text'><input name='input_16' id='input_30_16' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_15" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_15"><label class='gfield_label' for='input_30_15'>device</label>
                                <div class='ginput_container ginput_container_text'><input name='input_15' id='input_30_15' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                            <div id="field_30_14" class="gfield gfield--width-quarter field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_30_14"><label class='gfield_label' for='input_30_14'>campaignid</label>
                                <div class='ginput_container ginput_container_text'><input name='input_14' id='input_30_14' type='text' value='' class='large' aria-invalid="false" /> </div>
                            </div>
                        </div>
                    </div>
                    <div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_30' class='gform_button button' value='Submit' onclick='if(window["gf_submitting_30"]){return false;}  if( !jQuery("#gform_30")[0].checkValidity || jQuery("#gform_30")[0].checkValidity()){window["gf_submitting_30"]=true;}  ' onkeypress='if( event.keyCode == 13 ){ if(window["gf_submitting_30"]){return false;} if( !jQuery("#gform_30")[0].checkValidity || jQuery("#gform_30")[0].checkValidity()){window["gf_submitting_30"]=true;}  jQuery("#gform_30").trigger("submit",[true]); }' /> <input type='hidden' name='gform_ajax' value='form_id=30&amp;title=1&amp;description=1&amp;tabindex=0' />
                        <input type='hidden' class='gform_hidden' name='is_submit_30' value='1' />
                        <input type='hidden' class='gform_hidden' name='gform_submit' value='30' />

                        <input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
                        <input type='hidden' class='gform_hidden' name='state_30' value='WyJbXSIsImE0YmExZmZjNGYwYjUzM2RiYjQyMGExODY1ZjI4Zjk1Il0=' />
                        <input type='hidden' class='gform_hidden' name='gform_target_page_number_30' id='gform_target_page_number_30' value='0' />
                        <input type='hidden' class='gform_hidden' name='gform_source_page_number_30' id='gform_source_page_number_30' value='1' />
                        <input type='hidden' name='gform_field_values' value='' />

                    </div>
                </form>
            </div>
            <iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_30' id='gform_ajax_frame_30' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
            <script type="text/javascript">
                gform.initializeOnLoaded(function() {
                    gformInitSpinner(30, '/public/images/spinner.svg');
                    jQuery('#gform_ajax_frame_30').on('load', function() {
                        var contents = jQuery(this).contents().find('*').html();
                        var is_postback = contents.indexOf('GF_AJAX_POSTBACK') >= 0;
                        if (!is_postback) {
                            return;
                        }
                        var form_content = jQuery(this).contents().find('#gform_wrapper_30');
                        var is_confirmation = jQuery(this).contents().find('#gform_confirmation_wrapper_30').length > 0;
                        var is_redirect = contents.indexOf('gformRedirect(){') >= 0;
                        var is_form = form_content.length > 0 && !is_redirect && !is_confirmation;
                        var mt = parseInt(jQuery('html').css('margin-top'), 10) + parseInt(jQuery('body').css('margin-top'), 10) + 100;
                        if (is_form) {
                            jQuery('#gform_wrapper_30').html(form_content.html());
                            if (form_content.hasClass('gform_validation_error')) {
                                jQuery('#gform_wrapper_30').addClass('gform_validation_error');
                            } else {
                                jQuery('#gform_wrapper_30').removeClass('gform_validation_error');
                            }
                            setTimeout(function() {
                                /* delay the scroll by 50 milliseconds to fix a bug in chrome */ }, 50);
                            if (window['gformInitDatepicker']) {
                                gformInitDatepicker();
                            }
                            if (window['gformInitPriceFields']) {
                                gformInitPriceFields();
                            }
                            var current_page = jQuery('#gform_source_page_number_30').val();
                            gformInitSpinner(30, '/public/images/spinner.svg');
                            jQuery(document).trigger('gform_page_loaded', [30, current_page]);
                            window['gf_submitting_30'] = false;
                        } else if (!is_redirect) {
                            var confirmation_content = jQuery(this).contents().find('.GF_AJAX_POSTBACK').html();
                            if (!confirmation_content) {
                                confirmation_content = contents;
                            }
                            setTimeout(function() {
                                jQuery('#gform_wrapper_30').replaceWith(confirmation_content);
                                jQuery(document).trigger('gform_confirmation_loaded', [30]);
                                window['gf_submitting_30'] = false;
                                wp.a11y.speak(jQuery('#gform_confirmation_message_30').text());
                            }, 50);
                        } else {
                            jQuery('#gform_30').append(contents);
                            if (window['gformRedirect']) {
                                gformRedirect();
                            }
                        }
                        jQuery(document).trigger('gform_post_render', [30, current_page]);
                    });
                });
            </script>
        </div>
    </div>
</main>