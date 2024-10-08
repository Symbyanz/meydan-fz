<?php $titles = explode("/", $title); ?>


<style>
    .business_setup {
        margin-bottom: 100px;
        position: relative
    }

    .business_setup::before {

        top: 31%;
        width: 100%;
        content: '';
        position: absolute;
        left: 0;
        height: 450px;
        z-index: -9;
        background-size: 100%;
    }

    .step {
        margin: 500px 0 0 0;
    }

    .step-details ul {
        counter-reset: li;
    }

    .step-details li {
        border: solid 1px #ccc;
        padding: 20px 50px;
        width: 250px;
        height: 140px;
        float: left;
        margin: 50px 100px 100px 0px;
        position: relative;
        border-radius: 20px;
    }

    .step-details li:last-child {

        margin: 50px 0px 100px 0px;

    }

    .step-details li:before {
        content: counter(li);
        counter-increment: li;
        height: 70px;
        width: 70px;
        line-height: 50px;
        border-radius: 100%;
        color: #fff;
        text-align: center;
        position: absolute;
        left: -35px;
        top: -35px;
        font-size: 40px;
        font-weight: 700;
        background: linear-gradient(to right, #a15eb4, #20c7d2);
        line-height: 70px;
    }

    @media(max-width:768px) {
        .intro.intro--lp .intro__bg {
            background-position: 25% 0px;
        }

        .step-details li,
        .step-details li:last-child {
            margin: 50px auto;
            float: none;
            display: block;
        }

        .business_setup .colr-blue br {
            display: none
        }
    }
</style>
<!-- intro start -->
<section class="home intro intro--lp">
    <div class="intro__bg" style="background-image:url('/public/images/LP.png')">
        <div class="container">
            <div class="intro__cont">
                <!-- intro copy start -->
                <div class="intro__info">
                    <h1 class="heading">
                        Built for <strong>Business.</strong><br />Designed for <strong>Life.</strong> </h1>
                </div>
                <!-- intro copy end -->
            </div>
        </div>
    </div>
</section>
<!-- intro end -->



<!-- wmfz start -->
<section class="wmfz business_setup">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h2 class="colr-blue">Calculate your Business Setup Cost <br />in Meydan Free Zone.</h2>
                <p>The cost of business setup in Meydan Free Zone depends on many factors like business activities, visa requirements and term. Use our setup cost calculator for an estimate tailored to your business needs.</p>
                <div class="btn-blk mz">
                    <a href="/cost-calculator/" target="" class="cta">
                        <span>Calculate Now</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- wmfz end -->




<!-- wmfz start -->
<section class="wmfz">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h2 class="colr-blue">Business setup in Dubai <br />with Meydan Free Zone</h2>
                <div class="sub-heading">Meydan Free Zone offers multiple advantages to Global Entrepreneur</div>
                <p>We are strategically located catering to the needs of startups and global businesses alike with access to exceptional talent, entrepreneur expertise, excellent business networks and a vast suite of start up support services.</p>
                <p>The free zone offers an affordable and seamless platform to do business beyond borders. Some of the attractive reasons to start your business with Meydan Free Zone are:</p>
                <div class="meydan-list meydan-list--disc">
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li>Complete foreign ownership</li>
                                <li>Capital repatriation without restrictions</li>
                                <li>100% exclusion on corporate &amp; personal tax</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Full repatriation benefits on profits &amp; financial assets</li>
                                <li>Easy bank account setup</li>
                                <li>1500+ business license activities</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="btn-blk mz">
                    <a href="/why-meydan-free-zone/" target="" class="cta">
                        <span>Learn more</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- wmfz end -->

<!-- key ftr start -->
<section class="key-ftr">
    <div class="row row-m">
        <div class="col-lg-6">
            <div class="key-ftr__obj hod">
                <div class="img"><img src="/public/images/1.jpg" alt="Heart of Dubai"></div>
                <div class="caption">
                    <span>Heart of</span>Dubai
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="row row-m row--ali">
                <div class="col-5 col-md-5">
                    <div class="key-ftr__obj eb">
                        <div class="img"><img src="/public/images/2.jpg" alt="Empowering Business"></div>
                        <div class="caption">
                            <span>Empowering</span>Business
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-7">
                    <div class="key-ftr__obj er">
                        <div class="img"><img src="/public/images/3.jpg" alt="Entrepreneur Ready"></div>
                        <div class="caption">
                            Entrepreneur<span>Ready</span> </div>
                    </div>
                </div>
            </div>
            <div class="row row-m">
                <div class="col-lg-12">
                    <div class="key-ftr__obj wcvc">
                        <div class="img"><img src="/public/images/4.jpg" alt="World Class Vibrant Community"></div>
                        <div class="caption">
                            <span>World Class </span>Vibrant Community
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-m">
        <div class="col-lg-6 m-auto">
            <div class="row row-m">
                <div class="col-md-6 col-7">
                    <div class="key-ftr__obj pptt">
                        <div class="img"><img src="/public/images/5.jpg" alt="Platform Powered by Tomorrow’s Thinking"></div>
                        <div class="caption">
                            <span>Platform Powered by</span>Tomorrow’s Thinking
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="key-ftr__obj pexp">
                        <div class="img"><img src="/public/images/6.jpg" alt="Paperless Experience"></div>
                        <div class="caption">
                            Paperless <span>Experience</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="row row-m"> -->
    <div class="container">
        <!-- <div class="row row-m"> -->
        <div class="key-ftr__info">
            <h2 class="colr-blue">Big Purchases, Small Payments <br /></h2>
            <div class="sub-heading">EPP Plan with Top Banks in the Country. </div>
            <p>Enjoy the freedom to convert your transactions into easy and affordable monthly instalments. Spend AED 1<span lang="EN-US">,000</span> or more <span lang="EN-US">on your credit card issued from any of our participating banks </span>and repay in easy instalments over a tenure of your choice ranging from 3 to 12 months.</p>
            <p><span lang="EN-US">C</span>onvert your transactions <span lang="EN-US">at Meydan Free Zone</span> into easy instalment plans<span lang="EN-US">. R</span>etain your invoice and call t<span lang="EN-US">he respective bank’s</span> Phone Banking service within <span lang="EN-US">5 </span>days of your purchase. At your request, the purchase transaction will be converted to 0% Easy Payment Plan and your monthly instalments will be reflected in your monthly Credit Card statement.</p>
            <p>With <span lang="EN-US">Meydan Free Zone</span> Instalment Plan, you can now convert large purchases into affordable payment plans.</p>
            <div class="meydan-list meydan-list--disc">
                <div class="row">
                    <div class="col-md-6">
                        <ul>
                            <li>Spend AED 1,000 or more on your Credit Card for any services issued by Meydan Free Zone.</li>
                            <li>Enjoy the convenience of paying over 3, 6, 9 or 12 months.</li>
                            <li>EPP processing will apply.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>Simply call Phone Banking services of any participating bank and ask to convert your your purchase in to an Easy Payment Plan.</li>
                            <li>Early settlement charges will apply.</li>
                            <li>General terms &amp; conditions will apply.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fin-logo">
                <div class="fin-logo__img"><img src="/public/images/ADCB.png" alt="ADCB"></div>
                <div class="fin-logo__img"><img src="/public/images/Emirates_NBD_logo.png" alt="Emirates_NBD_logo"></div>
                <div class="fin-logo__img"><img src="/public/images/cbd-logo.png" alt="cbd logo"></div>
                <div class="fin-logo__img"><img src="/public/images/Emirates-Islamic-Bank.jpeg" alt="Emirates-Islamic-Bank"></div>
                <div class="fin-logo__img"><img src="/public/images/FAB_MasterBrandmark_RGB-scaled.jpg" alt="FAB"></div>
            </div>
            <div class="btn-blk mz">
                <a href="#" target="" class="cta">
                    <span>GET STARTED NOW</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!-- </div> -->
    </div>
    <!-- </div> -->
</section>
<!-- key ftr end -->

<!-- benefit of setting up with us start -->
<section class="bnfit position-relative" style="background-image:url('/public/images/bnfit.png')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 m-auto">
                <div class="row">
                    <div class="col-md-6">
                        <div class="bnfit__setng">
                            <h2 class="colr-white">
                                Benefits of <br />Setting Up with Us </h2>
                            <p class="sec-descr">
                                We offer a 360-degree platform that promises your business optimised solutions to make business setup in Dubai a fast, simple, and straightforward process. </p>
                            <div class="meydan-list meydan-list--disc">
                                <ul>
                                    <li>Quick &amp; Easy Incorporation</li>
                                    <li>Exclusive Community Benefits</li>
                                    <li>Located in a Premium Dubai District</li>
                                    <li>Office Facilities Open 24/7</li>
                                </ul>
                            </div>
                            <div class="btn-blk mz">
                                <a href="#" target="" class="cta text-uppercase">
                                    <span>request a call back</span>
                                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                                        <path d="M1,5 L11,5"></path>
                                        <polyline points="8 1 12 5 8 9"></polyline>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="bnfit__ftr rellax" data-rellax-percentage="-1">
                            <ul>
                                <li>
                                    <div class="name">Zero Paid Up Share Capital</div>
                                    <p>Easily start your business without laying down large sums of money. Start how you want and grow as you need.</p>
                                </li>
                                <li>
                                    <div class="name">Flexibility on Number of Visas</div>
                                    <p>Easily start your business without laying down large sums of money. Start how you want and grow as you need.</p>
                                </li>
                                <li>
                                    <div class="name">Easy to Set Up Corporate Bank Account</div>
                                    <p>Set up your company’s bank accounts hassle-free with the help of our dedicated team.</p>
                                </li>
                                <li>
                                    <div class="name">1,500+ License Activities</div>
                                    <p>No matter what your business idea is, you will find the right license for it.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="bnfit-svcs">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h2 class="colr-blue">
                    Meydan Plus <br />Benefits </h2>
                <div class="sec-descr">
                    <p>We aren&#8217;t like other free zones, at Meydan Free Zone our goal is to make setting up your business as seamless as possible by putting your needs first and covering all your bases with our wide range of business support services.</p>
                </div>
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
                <div class="btn-blk">
                    <a href="#" target="" class="cta">
                        <span>Talk to our experts</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefit of setting up with us end -->

<!-- LP why dubai start -->
<section class="lpwd" style="background-image:url('/public/images/lpwd-1.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="lpwd__dtls">
                    <h2 class="colr-white">Why Dubai?</h2>
                    <div class="sec-descr colr-white">
                        <p>As of 2020, Dubai was ranked among the top five global cities for entrepreneurs. Along with its standing as a powerhouse of innovation and wealth, Dubai is centrally located on the world map meaning you have easy access to multiple markets for trade.</p>
                    </div>
                    <div class="btn-blk mz">
                        <a href="/why-dubai/" target="" class="cta">
                            <span>Learn more</span>
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
<!-- LP why dubai end -->

<!-- story write start -->
<section class="testimo">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-auto">
                <div class="testimo__dtls">
                    <div class="testimo__dtls__swiper">
                        <div class="swiper-wrapper">
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimo__dtls__wrp">
                                    <h2 class="colr-blue">
                                        The future of entrepreneurship is a story we are writing with our customers </h2>
                                    <h5>Listen to what our clients have to say</h5>
                                    <p>
                                        Services provided by Mrs. Arwa & her team was excellent, the processing time was quick and efficient given the legal requirements. </p>
                                    <div class="info">
                                        <div class="info__wrap">
                                            <div class="name">Majd Sabeh</div>
                                            <div class="desg">PMP</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide -->
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimo__dtls__wrp">
                                    <h2 class="colr-blue">
                                        The future of entrepreneurship is a story we are writing with our customers </h2>
                                    <h5>Listen to what our clients have to say</h5>
                                    <p>
                                        Our relationship goes long way, what really made a difference is the responsiveness of the team and their problem solving capability and efficiency. </p>
                                    <div class="info">
                                        <div class="info__wrap">
                                            <div class="name">Eric Hafner</div>
                                            <div class="desg">Hafner Consultants</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide -->
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimo__dtls__wrp">
                                    <h2 class="colr-blue">
                                        The future of entrepreneurship is a story we are writing with our customers </h2>
                                    <h5>Listen to what our clients have to say</h5>
                                    <p>
                                        My overall experience was pretty fast, smooth and the team was super efficient. Hope that the service is kept this way. </p>
                                    <div class="info">
                                        <div class="info__wrap">
                                            <div class="name">Wali</div>
                                            <div class="desg">Flave Burger</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide -->
                            <!-- slide -->
                            <div class="swiper-slide">
                                <div class="testimo__dtls__wrp">
                                    <h2 class="colr-blue">
                                        The future of entrepreneurship is a story we are writing with our customers </h2>
                                    <h5>Listen to what our clients have to say</h5>
                                    <p>
                                        Being an international business, I was skeptical of the infrastructure offered to entrepreneurs in Dubai. Amelia rested all those doubts and aided me all the way through. I highly recommend the free zone hands down. </p>
                                    <div class="info">
                                        <div class="info__wrap">
                                            <div class="name">Malek Tabech</div>
                                            <div class="desg">Medifeel</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- slide -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- story write end -->

<!-- our story start -->
<section class="our-story" style="background-image:url('/public/images/os.png')">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="our-story__dtls">
                    <h2 class="colr-blue">Our Story</h2>
                    <div class="sec-descr">
                        <p>We believe in the journey of entrepreneurship. We understand this journey can be hard. Therefore, we are determined to create an enabling environment for success. Within an enabling environment, the entity feels empowered and inspired. An enabling environment and empowered entity foster entrepreneurship excellence and growth.</p>
                    </div>
                    <div class="btn-blk mz">
                        <a href="#" target="" class="cta">
                            <span>About Meydan Free Zone</span>
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
<!-- our story end -->


<!-- our story start -->
<section class="step">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <div class="our-story__dtls">
                    <h2 class="colr-blue">A comprehensive guide to setting up business in Dubai</h2>
                    <div class="sec-descr">
                        <p>When you work with Meydan Free Zone, business setup in Dubai is as simple as 1, 2, 3:</p>
                    </div>
                    <div class="step-details">
                        <ul>
                            <li>Submit your application form and supporting documents</li>
                            <li>Await security clearance and government approvals</li>
                            <li>Receive your license and start trading</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div style="clear:both"></div>
<!-- our story end -->

<!-- Latest Blogs & Articles start -->
<section class="blg-artcls">
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto">
                <h2 class="colr-blue">
                    Read our latest articles for valuable insight into business setup in Dubai </h2>

                <div class="row blg-artcls__slider">
                    <div class="col-lg-4 col-sm-6 slide">
                        <div class="myd-card--op">
                            <a href="/?post_type=post&p=14731">
                                <div class="img">
                                    <img src="/public/images/AR-ME-6-May-Metaverse_IMAGE.jpg" alt="How the metaverse can benefit business">
                                </div>
                                <div class="title">
                                    How the metaverse can benefit business </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 slide">
                        <div class="myd-card--op">
                            <a href="/?post_type=post&p=14674">
                                <div class="img">
                                    <img src="/public/images/Instagram.jpg" alt="How to sell on Instagram and make money">
                                </div>
                                <div class="title">
                                    How to sell on Instagram and make money </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 slide">
                        <div class="myd-card--op">
                            <a href="/?post_type=post&p=14635">
                                <div class="img">
                                    <img src="/public/images/Dropshipping.jpg" alt="Dropshipping in the UAE &#8211; 2022 Guide">
                                </div>
                                <div class="title">
                                    Dropshipping in the UAE &#8211; 2022 Guide </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="btn-blk mz">
                    <a href="#" target="" class="cta">
                        <span>read more</span>
                        <svg width="13px" height="10px" viewBox="0 0 13 10">
                            <path d="M1,5 L11,5"></path>
                            <polyline points="8 1 12 5 8 9"></polyline>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blogs & Articles end -->