<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<script type="text/javascript" defer async src="https://cdn.trustindex.io/assets/js/richsnippet.js?7ff6a1205483g926"></script>

	<!-- Crsoptimizer -->
	<!-- <script type="text/javascript" src="https://crsoptimizer.conversionrate.store/comp/eiFexphTmB.js"></script> -->

	<!-- Hotjar Tracking Code for https://www.huntergalloway.com.au/ -->
	<script>
		(function(h, o, t, j, a, r) {
			h.hj = h.hj || function() {
				(h.hj.q = h.hj.q || []).push(arguments)
			};
			h._hjSettings = {
				hjid: 1329122,
				hjsv: 6
			};
			a = o.getElementsByTagName('head')[0];
			r = o.createElement('script');
			r.async = 1;
			r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
			a.appendChild(r);
		})(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
	</script>
	<meta charset="UTF-8" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action('et_head_meta'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no" />
	<!-- Add favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!-- end -->
	<link rel="pingback" href="/xmlrpc.php" />
	<?php $template_directory_uri = '/wp-content/themes/Divi'; ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url($template_directory_uri . '/js/html5.js"'); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>
	
	<!-- REGIONAL REMOVAL -->
	<link rel="preload" href="/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg" as="image">

<!-- 	<script src='/wp-content/themes/hunter-galloway/assets/js/regional-reference-removal/regional-reference-removal.js?ver=<?php echo uniqid(); ?>' defer></script> -->
	<script>
		const targetPages = [
			'/mortgage-calculator/',
			'/home-loans-for-nurses/',
			'/home-guarantee-scheme/',
			'/lmi-waiver-lawyers/',
			'/rentvesting/',
			'/physiotherapist-home-loans/',
			'/home-loans-pharmacists/',
			'/accountant-home-loans/',
			'/ethical-banks-australia/',
			'/our-team/',
			'/no-lmi-and-90-lvr/',
			'/first-home-super-saver-scheme/',
			'/making-an-offer-on-a-house/',
			'/contact/',
			'/removing-a-guarantor-from-mortgage/',
			'/new-zealand-citizen-home-loan/',
			'/first-home-owners-grant-qld/',
			'/bridging-loan/',
			'/first-home-buyer-guide/',
			'/pre-approval/',
			'/home-loan-on-contractor-income/',
			'/how-to-calculate-buying-someone-out-of-a-house-in-australia/',
			'/barefoot-investor-bank-accounts/',
			'/buying-at-auction/',
		];

		const REG_REMOVAL = 'regional_reference_removal_first_page';

		(() => {
			try {
				const currentPage = window.location.pathname;

				if (!sessionStorage.getItem(REG_REMOVAL)) {
					sessionStorage.setItem(REG_REMOVAL, currentPage);
				}

				const firstPageInSession = sessionStorage.getItem(REG_REMOVAL);

				// const isTargetPage = targetPages.some((page) => currentPage.includes(page));
				const isFirstPage = targetPages.some((page) =>
					firstPageInSession.includes(page)
				);

				const waitForElement = (selector) => {
					return new Promise((resolve) => {
						if (document.querySelector(selector)) {
							return resolve(document.querySelector(selector));
						}

						const observer = new MutationObserver(() => {
							if (document.querySelector(selector)) {
								resolve(document.querySelector(selector));
								observer.disconnect();
							}
						});

						observer.observe(document.documentElement, {
							childList: true,
							subtree: true,
							characterData: true,
						});
					});
				};

				if (!isFirstPage) return;

    const logo = document.querySelector('header .header__logo img');

    // Update the src of the logo in the header
    if (logo) {
      logo.src =
        '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg';
    }
				waitForElement('header .header__logo img').then((logo) => {
					if (logo) {
						logo.src =
							'/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg';
					}
				});
			} catch (error) {
				console.error('Error updating logo:', error);
			}
		})();
	</script>
	<!-- REGIONAL REMOVAL -->
	

	</style>
	<?php wp_head(); ?>
	<meta name="google-site-verification" content="NH2iM0kehdh0_FbqCHq4midxQxO_CplyGrwwfSDj-2M" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-785456751"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-785456751');
	</script>

	<?php include_once 'microdata.php'; ?>
</head>
<?php
if (isset($_COOKIE['regional_reference_removal_first_page'])) {
	$logo_url = '/wp-content/themes/hunter-galloway/assets/img/no_brisbane_variants/hg_logo_black.svg';
} else {
	$logo_url = get_template_directory_uri() . "/images/hunter_logo_black_.svg";
}
?>
<body <?php body_class(); ?>>
	<!-- Header -->
	<header class="header">
		<div class="header__container container">
			<!-- Logo -->
			<a href="<?php echo esc_url(home_url('/')); ?>" class="header__logo">
				<img src="<?php echo $logo_url?>" alt="mortgage-broker-brisbane-hunter-galloway-logo">
			</a>

			<!-- Navbar -->
			<?php get_template_part('template-parts/navigation') ?>
			<!-- Navbar -->

			<div class="header__actions">
				<a href="tel:1300088065" class="header__phone">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/phoneicon.svg"> -->
					<svg xmlns="http://www.w3.org/2000/svg" width="23" height="22" viewBox="0 0 23 22" fill="none">
						<path d="M17.2295 8.31933H19.0783C19.0769 7.09395 18.5895 5.91915 17.7231 5.05267C16.8566 4.1862 15.6818 3.69882 14.4564 3.69748V5.54622C15.1916 5.54707 15.8965 5.83952 16.4163 6.35939C16.9362 6.87926 17.2287 7.58412 17.2295 8.31933ZM20.927 8.31933H22.7757C22.7757 3.73214 19.0436 0 14.4564 0V1.84874C18.024 1.84874 20.927 4.75172 20.927 8.31933ZM19.7905 19.7949L22.3917 17.1933L15.8554 10.6575L13.2409 13.2721L9.31922 9.35046L11.9338 6.73588L5.39758 0.199202L2.16506 3.43126C1.2935 4.29418 0.794745 5.46425 0.775736 6.69059C0.768198 7.30529 0.884132 7.91526 1.11667 8.48433C1.3492 9.0534 1.69361 9.57001 2.12947 10.0035L12.5476 20.4216C13.4257 21.2998 14.614 21.8156 15.8564 21.8151C16.3104 21.8155 16.762 21.7491 17.1967 21.6182C17.3721 21.5648 17.5385 21.4854 17.6903 21.3825L18.6443 20.7392C19.0557 20.4619 19.4396 20.1457 19.7905 19.7949ZM17.8165 19.1543C17.5595 19.4126 17.2539 19.6174 16.9173 19.7568C16.5807 19.8962 16.2198 19.9674 15.8554 19.9664C15.4911 19.9674 15.1302 19.8961 14.7936 19.7567C14.457 19.6173 14.1514 19.4126 13.8944 19.1543L3.43653 8.69647C3.17827 8.4395 2.97353 8.13386 2.83415 7.79726C2.69476 7.46065 2.62349 7.09974 2.62448 6.73542C2.62349 6.3711 2.69476 6.01019 2.83415 5.67358C2.97353 5.33698 3.17827 5.03135 3.43653 4.77437L5.39758 2.81378L9.31922 6.73542L6.70464 9.35L13.2409 15.8862L15.8554 13.2716L19.7771 17.1933L17.8165 19.1543ZM14.4555 9.2437C14.7006 9.2437 14.9358 9.14631 15.1091 8.97296C15.2825 8.7996 15.3799 8.56449 15.3799 8.31933C15.3799 8.07417 15.2825 7.83905 15.1091 7.6657C14.9358 7.49235 14.7006 7.39496 14.4555 7.39496C14.2103 7.39496 13.9752 7.49235 13.8019 7.6657C13.6285 7.83905 13.5311 8.07417 13.5311 8.31933C13.5311 8.56449 13.6285 8.7996 13.8019 8.97296C13.9752 9.14631 14.2103 9.2437 14.4555 9.2437Z" fill="black" />
					</svg>
					<span>1300 088 065</span>
				</a>

				<!-- rc_open old_head_cta -->
				<div class="header__assessment-control">
					<button class="header__assessment btn_yellow rc_open">Get a Free Assessment</button>
					<a href="" alt="" class="header__assessment-top">
						<img src="https://www.huntergalloway.com.au/wp-content/themes/Divi/images/back_to_top.svg">
					</a>
				</div>
				<button class="header__menu-trigger btn_yellow">Menu</button>
			</div>

		</div>
	</header>

	<!-- Breadcrubms -->
	<?php get_template_part('template-parts/breadcrumbs'); ?>
	<!-- Breadcrubms -->
	<div id="et-main-area">