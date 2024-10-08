<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<script type="text/javascript">
		var gform;
		gform || (document.addEventListener("gform_main_scripts_loaded", function() {
			gform.scriptsLoaded = !0
		}), window.addEventListener("DOMContentLoaded", function() {
			gform.domLoaded = !0
		}), gform = {
			domLoaded: !1,
			scriptsLoaded: !1,
			initializeOnLoaded: function(o) {
				gform.domLoaded && gform.scriptsLoaded ? o() : !gform.domLoaded && gform.scriptsLoaded ? window.addEventListener("DOMContentLoaded", o) : document.addEventListener("gform_main_scripts_loaded", o)
			},
			hooks: {
				action: {},
				filter: {}
			},
			addAction: function(o, n, r, t) {
				gform.addHook("action", o, n, r, t)
			},
			addFilter: function(o, n, r, t) {
				gform.addHook("filter", o, n, r, t)
			},
			doAction: function(o) {
				gform.doHook("action", o, arguments)
			},
			applyFilters: function(o) {
				return gform.doHook("filter", o, arguments)
			},
			removeAction: function(o, n) {
				gform.removeHook("action", o, n)
			},
			removeFilter: function(o, n, r) {
				gform.removeHook("filter", o, n, r)
			},
			addHook: function(o, n, r, t, i) {
				null == gform.hooks[o][n] && (gform.hooks[o][n] = []);
				var e = gform.hooks[o][n];
				null == i && (i = n + "_" + e.length), gform.hooks[o][n].push({
					tag: i,
					callable: r,
					priority: t = null == t ? 10 : t
				})
			},
			doHook: function(n, o, r) {
				var t;
				if (r = Array.prototype.slice.call(r, 1), null != gform.hooks[n][o] && ((o = gform.hooks[n][o]).sort(function(o, n) {
						return o.priority - n.priority
					}), o.forEach(function(o) {
						"function" != typeof(t = o.callable) && (t = window[t]), "action" == n ? t.apply(null, r) : r[0] = t.apply(null, r)
					})), "filter" == n) return r[0]
			},
			removeHook: function(o, n, t, i) {
				var r;
				null != gform.hooks[o][n] && (r = (r = gform.hooks[o][n]).filter(function(o, n, r) {
					return !!(null != i && i != o.tag || null != t && t != o.priority)
				}), gform.hooks[o][n] = r)
			}
		});
	</script>
	<title><?php echo $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="shortcut icon" href="/public/images/favicon.ico" type="image/x-icon" />
	<link rel="icon" href="/public/images/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="/public/css/intlTelInput.min.css" />

	<link rel="stylesheet" href="/public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="/public/css/swiper-bundle.css" />
	<link rel="stylesheet" href="/public/css/slick-theme.css">
	<link rel="stylesheet" href="/public/css/slick.css">
	<link rel="stylesheet" href="/public/css/animate.min.css" />
	<link rel="stylesheet" href="/public/css/style.css">
	<link rel="stylesheet" href="/public/css/responsive.css">

	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<!-- <link rel="alternate" hreflang="ar" href="/ar/why-meydan-free-zone/" /> -->
	<!-- <link rel="alternate" hreflang="en" href="/why-meydan-free-zone/" /> -->
	<!-- <link rel="alternate" hreflang="x-default" href="/why-meydan-free-zone/" /> -->




	<meta name="description" content="The goal of Meydan Free Zone is to provide businesses and entrepreneurs with everything they need to set up a successful business venture." />
	<!-- <link rel="canonical" href="/why-meydan-free-zone/" /> -->
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Start your business in Meydan Free Zone" />
	<meta property="og:description" content="The goal of Meydan Free Zone is to provide businesses and entrepreneurs with everything they need to set up a successful business venture." />
	<!-- <meta property="og:url" content="/why-meydan-free-zone/" /> -->
	<meta property="og:site_name" content="Business Setup in Dubai" />
	<meta property="article:modified_time" content="2022-03-06T05:39:01+00:00" />
	<meta name="twitter:card" content="summary_large_image" />
	<!-- / Yoast SEO plugin. -->


	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='/public/css/style.min.css' type='text/css' media='all' />
	<style id='global-styles-inline-css' type='text/css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<link rel='stylesheet' id='welcomebar-front-css' href='/public/css/welcomebar-front.css' type='text/css' media='all' />
	<link rel='stylesheet' id='welcomebar-animate-css' href='/public/css/welcomebar-animate.css' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-css' href='https://fonts.googleapis.com/css?family=Lato%3A400%2C500%2C600%2C700%7COpen+Sans%3A400%2C500%2C600%2C700&#038;ver=2.5.9' type='text/css' media='all' />
	<script type='text/javascript' src='/public/js/jquery/jquery.min.js' id='jquery-core-js'></script>
	<script type='text/javascript' src='/public/js/jquery/jquery-migrate.min.js' id='jquery-migrate-js'></script>


	<script type='text/javascript' id='wpml-cookie-js-extra'>
		/* <![CDATA[ */
		var wpml_cookies = {
			"wp-wpml_current_language": {
				"value": "en",
				"expires": 1,
				"path": "\/"
			}
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='/public/js/cookies/language-cookie.js' id='wpml-cookie-js'></script>
	<style id="mystickymenu" type="text/css">
		#mysticky-nav {
			width: 100%;
			position: static;
		}

		#mysticky-nav.wrapfixed {
			position: fixed;
			left: 0px;
			margin-top: 0px;
			z-index: 99990;
			-webkit-transition: 0.3s;
			-moz-transition: 0.3s;
			-o-transition: 0.3s;
			transition: 0.3s;
			-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=90)";
			filter: alpha(opacity=90);
			opacity: 0.9;
			background-color: #f7f5e7;
		}

		#mysticky-nav.wrapfixed .myfixed {
			background-color: #f7f5e7;
			position: relative;
			top: auto;
			left: auto;
			right: auto;
		}

		#mysticky-nav .myfixed {
			margin: 0 auto;
			float: none;
			border: 0px;
			background: none;
			max-width: 100%;
		}
	</style>
	<style>
		.mysticky-welcomebar-apper .siq_bR {
			bottom: 100px !important;
		}

		.mysticky-welcomebar-close {
			color: #fff !important;
		}

		.login a {
			position: relative;
		}

		.tooltiptext {
			visibility: hidden;
			width: 120px;
			background-color: black;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px 0;
			position: absolute;
			z-index: 1;
			bottom: 150%;
			left: 50%;
			margin-left: -60px;
		}

		.login a:hover .tooltiptext {
			visibility: visible;
			top: 40px;
			left: 50px;
			height: auto;
			width: 200px;
			min-height: 120px;
			font-style: normal;
			padding: 5px;
		}

		ol li {
			list-style-type: decimal;
		}
	</style>

</head>

<body class="page-13">
	<div style='display:none' id='sbbhscc'></div>

	<header>
		<div class="container">
			<div class="header header--dt">
				<div class="row">
					<div class="col-lg-3">
						<div class="header__logo">
							<a href="/">
								<img src="/public/images/logo.svg" alt="Meydan">
							</a>
						</div>
					</div>

					<div class="col-lg-9">
						<div class="header__top">
							<div class="btn-blk">
								<a target="" href="/refer-a-friend/" class="btn btn--esmall btn--green">Refer A Friend</a>
							</div>
							<div class="btn-blk">
								<a target="" href="/cost-calculator/" class="btn btn--esmall btn--green">calculate setup cost</a>
							</div>
							<div class="lang-outer">
								<a href="/ar/why-meydan-free-zone/">عربي</a>
							</div>
						</div>


					</div>
				</div>

				<div class="row">
					<div class="navigation">
						<nav class="navbar navbar-expand-lg navbar-light">
							<div class="container-fluid pz">
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav me-auto mb-2 mb-lg-0">

										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle " href="/why-meydan-free-zone/" target="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Setup a Company</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li>
													<a class="dropdown-item" href="/why-meydan-free-zone/" target="">Why Meydan Free Zone</a>
												</li>
												<li>
													<a class="dropdown-item" href="/why-dubai/" target="">Why Dubai</a>
												</li>
												<li>
													<a class="dropdown-item" href="/business-activities/" target="">Business Activities</a>
												</li>
												<li>
													<a class="dropdown-item" href="/pricing/" target="">License Pricing</a>
												</li>
											</ul>
										</li>

										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle " href="/about-us/" target="" onClick="" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
											<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
												<li>
													<a class="dropdown-item" href="/about-us#our-story" target="">Our Story</a>
												</li>
												<li>
													<a class="dropdown-item" href="/about-us#vision-mission" target="">Our Vision And Mission</a>
												</li>
											</ul>
										</li>

										<li class="nav-item">
											<a class="nav-link" aria-current="page" href="/faqs/" target="">FAQs</a>
										</li>

										<li class="nav-item">
											<a class="nav-link" aria-current="page" href="/meydan-plus/" target="">Meydan Plus</a>
										</li>

										<li class="nav-item">
											<a class="nav-link" aria-current="page" href="/meydan-commerce/" target="">Meydan Commerce</a>
										</li>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>

			<div class="header header--m">
				<div class="header--m__wrap">
					<div class="header__logo">
						<a href="/">
							<img src="/public/images/logo.svg" alt="Meydan">
						</a>
					</div>
					<div class="header--m__menu">
						<div>
							<div class="lang-outer">
								<a href="/ar/why-meydan-free-zone/">عربي</a>
							</div>
							<div class="btn-blk">
								<a target="" href="/cost-calculator/" class="btn btn--small btn--green">
									calculate setup cost </a>
							</div>
						</div>
						<div class="d-flex justify-content-end align-items-center mt">
							<div class="hmb-icon">
								<button>
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->

	<!-- responsive menu start -->
	<div class="resp-menu">
		<div class="resp-menu__wrap">
			<div class="resp-menu__close"><i class="fas fa-times"></i></div>
			<ul class="menu">
				<li>
					<a href="javascript:void(0)" target="" class="opn-sm">Setup a Company</a>
					<ul class="sub-menu">
						<li>
							<a href="/why-meydan-free-zone/" target="">Why Meydan Free Zone</a>
						</li>
						<li>
							<a href="/why-dubai/" target="">Why Dubai</a>
						</li>
						<li>
							<a href="/business-activities/" target="">Business Activities</a>
						</li>
						<li>
							<a href="/pricing/" target="">License Pricing</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:void(0)" target="" class="opn-sm">About Us</a>
					<ul class="sub-menu">
						<li>
							<a href="/about-us#our-story" target="">Our Story</a>
						</li>
						<li>
							<a href="/about-us#vision-mission" target="">Our Vision And Mission</a>
						</li>
						<li>
							<a href="/faqs/" target="">FAQs</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="/faq/" target="">FAQs</a>
				</li>
				<li>
					<a href="/meydan-plus/" target="">Meydan Plus</a>
				</li>
				<li>
					<a href="/meydan-commerce/" target="">Meydan Commerce</a>
				</li>
			</ul>
			<div class="lang-outer"><a href="/ar/why-meydan-free-zone/">عربي</a></div>
			<div class="btn-blk">
				<a target="" href="/refer-a-friend/" class="btn btn--large btn--white raf">Refer A Friend</a>
			</div>
			<div class="btn-blk">
				<a target="_blank" href="/cost-calculator/" class="btn btn--large btn--green log">calculate setup cost</a>
			</div>
		</div>
	</div>
	<!-- responsive menu end -->
	<?php echo $content; ?>
	<!-- footer start -->
	<style>
		.sub-meydan-form .invalid-feedback {
			position: absolute;
			top: 101%;
		}

		.sub-meydan-form-response {
			color: #ffffff;
		}
	</style>
	<footer>
		<div class="bt">
			<i class="fas fa-arrow-up"></i>
		</div>
		<div class="container">
			<!-- Subscribe and Newsletter start -->
			<div class="footer__subs-newsl">
				<div class="row align-items-center">
					<div class="col-xl-4 col-lg-6 col-md-5 col-sm-5 col-6 mb-2">
						<h3 class="mb-0">Subscribe To Newsletter</h3>
					</div>
					<div class="col-xl-4 col-lg-6 col-md-7 col-sm-7 col-12 mb-2">
						<div class="email sub-meydan-form">
							<div class="position-relative email__wrap">
								<input type="email" class="form_subscribe_email" id="subscribe_email" placeholder="Email">
								<input type="button" id="sub_form_submit" value="subscribe">
								<div class="invalid-feedback"> Please enter your email </div>
							</div>
						</div>
						<div style="height:0px !important;overflow:hidden;">
							<div class='gf_browser_safari gf_browser_iphone gform_wrapper gravity-theme' id='gform_wrapper_8'>
								<div class='gform_heading'>
									<h2 class="gform_title">Subscribe</h2>
									<span class='gform_description'></span>
								</div>
								<form method='post' enctype='multipart/form-data' target='gform_ajax_frame_8' id='gform_8' action='???' novalidate>
									<div class='gform_body gform-body'>
										<div id='gform_fields_8' class='gform_fields top_label form_sublabel_below description_below'>
											<div id="field_8_5" class="gfield gfield--width-full form_subscribe_email field_sublabel_below field_description_below gfield_visibility_visible" data-js-reload="field_8_5"><label class='gfield_label' for='input_8_5'>Email</label>
												<div class='ginput_container ginput_container_email'>
													<input name='input_5' id='input_8_5' type='email' value='' class='large' aria-invalid="false" />
												</div>
											</div>
											<div id="field_8_2" class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_hidden" data-js-reload="field_8_2">
												<div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_8_2'>Name</label>
												<div class='ginput_container ginput_container_text'><input name='input_2' id='input_8_2' type='text' value='Website Suscriber' class='large' aria-invalid="false" /> </div>
											</div>
											<div id="field_8_3" class="gfield field_sublabel_below field_description_below gfield_visibility_hidden" data-js-reload="field_8_3">
												<div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_8_3'>Lead Source</label>
												<div class='ginput_container ginput_container_text'><input name='input_3' id='input_8_3' type='text' value='Website' class='large' aria-invalid="false" /> </div>
											</div>
											<div id="field_8_4" class="gfield field_sublabel_below field_description_below gfield_visibility_hidden" data-js-reload="field_8_4">
												<div class='admin-hidden-markup'><i class='gform-icon gform-icon--hidden'></i><span>Hidden</span></div><label class='gfield_label' for='input_8_4'>Method of Contact</label>
												<div class='ginput_container ginput_container_text'><input name='input_4' id='input_8_4' type='text' value='Subscription Form ' class='large' aria-invalid="false" /> </div>
											</div>
										</div>
									</div>
									<div class='gform_footer top_label'> <input type='submit' id='gform_submit_button_8' class='gform_button button' value='Submit' onclick='' />
										<input type='hidden' class='gform_hidden' name='is_submit_8' value='1' />
										<input type='hidden' class='gform_hidden' name='gform_submit' value='8' />

										<input type='hidden' class='gform_hidden' name='gform_unique_id' value='' />
										<input type='hidden' class='gform_hidden' name='state_8' value='WyJbXSIsImE0YmExZmZjNGYwYjUzM2RiYjQyMGExODY1ZjI4Zjk1Il0=' />
										<input type='hidden' class='gform_hidden' name='gform_target_page_number_8' id='gform_target_page_number_8' value='0' />
										<input type='hidden' class='gform_hidden' name='gform_source_page_number_8' id='gform_source_page_number_8' value='1' />
										<input type='hidden' name='gform_field_values' value='' />

									</div>
								</form>
							</div>
							<iframe style='display:none;width:0px;height:0px;' src='about:blank' name='gform_ajax_frame_8' id='gform_ajax_frame_8' title='This iframe contains the logic required to handle Ajax powered Gravity Forms.'></iframe>
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
						<div class="sub-meydan-form-response"></div>
					</div>
				</div>
			</div>
			<!-- Subscribe and Newsletter end -->
			<!-- meydan footer logo start -->
			<div class="footer__logo">
				<img src="/public/images/logo-footer.png" alt="Logo">
			</div>
			<!-- meydan footer logo end -->
			<!-- footer nav start -->
			<div class="footer__nav">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<ul>
							<li><a href="javascript:void(0)">Call back</a></li>
							<li><a target="_blank" href="mailto:setup@meydan-fz.ae">setup@meydan-fz.ae</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-6">
						<ul>
							<li class="label">Quick Links</li>
							<li><a href="/" target="">Home</a></li>
							<li><a href="/meydan-commerce/" target="">Meydan Commerce</a></li>
							<li><a href="/pricing/" target="">License Pricing</a></li>
							<li><a href="/pricing/" target="">Pricing</a></li>
							<li><a href="/refer-a-friend/" target="">Refer a Friend</a></li>
							<li><a href="/cost-calculator/" target="">Cost Calculator</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6 col-6">
						<ul>
							<li class="label">Know More</li>
							<li><a href="/why-meydan-free-zone/" target="">Why Meydan Free Zone</a></li>
							<li><a href="/why-dubai/" target="">Why Dubai</a></li>
							<li><a href="/business-activities/" target="">Business Activities</a></li>
							<li><a href="/meydan-plus/" target="">Meydan Plus</a></li>
							<li><a href="/faqs/" target="">FAQs</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- footer nav end -->
			<!-- footer bottom start -->
			<div class="footer__bot">
				<div class="row">
					<div class="col-xl-3 col-lg-5 col-md-6">
						<div class="footer__copyright">
							<p>&#169; 2022 Meydan Free Zone. All rights reserved.</p>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-5">
						<p>
							<a href="/meydan-fz/Privacy-Policy-2021.pdf" target="_blank">Privacy Policy</a>
							<a href="/meydan-fz/Terms-and-Conditions.pdf" target="_blank">Terms and Conditions</a>
						</p>
					</div>
				</div>
			</div>
			<!-- footer bottom end -->
			<br /><br />
		</div>
	</footer>
	<!-- footer end -->
	<div class="mysticky-welcomebar-fixed mysticky-welcomebar-notpresent mysticky-welcomebar-widget-0 mysticky-welcomebar-position-bottom mysticky-welcomebar-showx-desktop mysticky-welcomebar-showx-mobile mysticky-welcomebar-btn-desktop mysticky-welcomebar-btn-mobile mysticky-welcomebar-display-desktop mysticky-welcomebar-display-mobile mysticky-welcomebar-attention-default mysticky-welcomebar-entry-effect-slide-in" data-after-triger="after_a_few_seconds" data-triger-sec="3" data-position="bottom" data-height="60" data-rediect="redirect_to_url" data-aftersubmission="show_welcomebar_every_page" data-automatically-enabled="" data-automatically-triggersec="" data-welcomebar-widget="0">
		<div class="mysticky-welcomebar-fixed-wrap">
			<div class="mysticky-welcomebar-content" style="margin-right:20px;">
				<p><strong>Secure your business license for just AED 12,500.</strong></p>
				<div class="mysticky-welcomebar-thankyou-content" style="display: none;">
				</div>
			</div>
			<div class="mysticky-welcomebar-btn">
				<a href="/start-your-business/" target="_blank" data-welcomebar-widget="0">Book your free consultation now. </a>
			</div>
			<a href="javascript:void(0)" class="mysticky-welcomebar-close" data-welcomebar-widget="0">X</a>
		</div>
	</div>
	<style>
		.mysticky-welcomebar-fixed.mysticky-welcomebar-widget-0 {
			background-color: #004a98;
			font-family: Open Sans;
		}

		.mysticky-welcomebar-widget-0 .mysticky-welcomebar-fixed-wrap {
			min-height: 60px;
		}

		/*.mysticky-welcomebar-position-top.mysticky-welcomebar-entry-effect-slide-in {
			top: -60px;
		}
		.mysticky-welcomebar-position-bottom.mysticky-welcomebar-entry-effect-slide-in {
			bottom: -60px;
		}*/
		.mysticky-welcomebar-fixed.mysticky-welcomebar-widget-0 .mysticky-welcomebar-content p a,
		.mysticky-welcomebar-fixed.mysticky-welcomebar-widget-0 .mysticky-welcomebar-content p {
			color: #ffffff;
			font-size: 15px;
			font-family: Open Sans
		}

		.mysticky-welcomebar-fixed.mysticky-welcomebar-widget-0 .mysticky-welcomebar-btn a {
			background-color: #bace1d;
			color: #ffffff;
			font-size: 15px;
		}

		.mysticky-welcomebar-fixed.mysticky-welcomebar-widget-0 .mysticky-welcomebar-thankyou-content p {
			color: #000000;
			font-size: 16px;
		}
	</style>
	<link rel='stylesheet' id='gform_basic-css' href='/public/css/basic.min.css' type='text/css' media='all' />
	<!-- file empt -->
	<!-- <link rel='stylesheet' id='gform_theme_components-css' href='/public/css/theme-components.min.css' type='text/css' media='all' /> -->
	<link rel='stylesheet' id='gform_theme_ie11-css' href='/public/css/theme-ie11.min.css' type='text/css' media='all' />
	<script type='text/javascript' src='/public/js/welcomebar-front.js' id='welcomebar-frontjs-js'></script>
	<link rel='stylesheet' id='gform_theme-css' href='/public/css/theme.min.css' type='text/css' media='all' />

	<!-- <script type='text/javascript' src='https://www.meydanfz.ae/wp-includes/js/dist/vendor/regenerator-runtime.min.js' id='regenerator-runtime-js'></script> -->
	<!-- <script type='text/javascript' src='https://www.meydanfz.ae/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script> -->
	<!-- <script type='text/javascript' src='https://www.meydanfz.ae/wp-includes/js/dist/dom-ready.min.js?ver=ecda74de0221e1c2ce5c57cbb5af09d5' id='wp-dom-ready-js'></script> -->
	<!-- <script type='text/javascript' src='https://www.meydanfz.ae/wp-includes/js/dist/hooks.min.js?ver=1e58c8c5a32b2e97491080c5b10dc71c' id='wp-hooks-js'></script> -->
	<!-- <script type='text/javascript' src='https://www.meydanfz.ae/wp-includes/js/dist/i18n.min.js?ver=30fcecb428a0e8383d3776bcdd3a7834' id='wp-i18n-js'></script> -->
	<!-- <script type='text/javascript' id='wp-i18n-js-after'>
		wp.i18n.setLocaleData({
			'text direction\u0004ltr': ['ltr']
		});
	</script> -->



	<script src="/public/js/jquery-3.6.0.min.js"></script>
	<script src="/public/js/intlTelInput.min.js"></script>
	<script src="/public/js/font-awesome.js"></script>
	<script src="/public/js/bootstrap.min.js"></script>
	<script src="/public/js/swiper-bundle.js"></script>
	<script src="/public/js/slick.js"></script>
	<script src="/public/js/custom-swiper.js"></script>
	<script src="/public/js/rellax.js"></script>
	<script src="/public/js/custom.js"></script>
	<script src="/public/js/script.js"></script>

	<script>
		$(function() {
			$('#sub_form_submit').click(function() {
				if (($('#sub_form_submit').val() != "Please wait...") && userValidationSub()) {
					GFUpdateSub();
					var loadingInterval = setInterval(function() {
						// создается класс, который ожидает что поле ниже не пустое, его нет на странице создается похоже после обработки 
						//вводимой почты, далее отображет те данные, что пришли 
						// gform_confirmation_message - данного блока нет, найти скрипт, что его создает //возможно он создается php файлом после отправки формы
						if ($('.gform_confirmation_message').text() != "") {
							clearInterval(loadingInterval);
							$('#subscribe_email').val('');
							$('.sub-meydan-form').hide();
							$('.sub-meydan-form-response').text($('.gform_confirmation_message').text());
						}
					}, 300)
				}
			})
		})

		function userValidationSub() {
			let validation = true;
			if (!validateEmail($('#subscribe_email').val()) || $('#subscribe_email').val() == "") {
				$('#subscribe_email').addClass('is-invalid');
				validation = false;
			} else {
				$('#subscribe_email').addClass('is-valid');
			}
			return validation;
		}

		function GFUpdateSub() {
			$('.form_subscribe_email input').val($('#subscribe_email').val());
			$('#gform_8').submit();
			$('#sub_form_submit').val('Please wait...');
		}
	</script>
	<!-- only for calculator -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://unpkg.com/@popperjs/core@2"></script>
	<script src="https://unpkg.com/tippy.js@6"></script>
	<?php
	if (array_key_exists('style', $vars)) echo "<link rel=\"stylesheet\" href=\"/public/css/pages/" . $vars['style'] . "\" />";
	if (array_key_exists('script', $vars)) echo "<script type=\"text/javascript\" src=\"/public/js/pages/" . $vars['script'] . "\"></script>";
	?>
</body>

</html>