<?php
/*
 * Template Name: Blog Template
 * Template Post Type: post, page, product
 */

get_header();

$assets = '/wp-content/themes/hunter-galloway/assets/img/img_new/';

$show_default_title = get_post_meta(get_the_ID(), '_et_pb_show_title', true);

$is_page_builder_used = et_pb_is_pagebuilder_used(get_the_ID());

$et_pb_calculate_value2 = get_post_meta(get_the_ID(), '_et_pb_calculate', true);

$backgroundColorBanner = '#FFF7E3';

if ($et_pb_calculate_value2 == 0) {
	$backgroundColorBanner = '#E2F3FF';
} else if ($et_pb_calculate_value2 == 1) {
	$backgroundColorBanner = '#DEFADF';
} else if ($et_pb_calculate_value2 == 2) {
	$backgroundColorBanner = '#D2FFFA';
} else if ($et_pb_calculate_value2 == 3) {
	$backgroundColorBanner = '#FFE2E2';
} else if ($et_pb_calculate_value2 == 4) {
	$backgroundColorBanner = '#FFE2F2';
} else if ($et_pb_calculate_value2 == 5) {
	$backgroundColorBanner = '#EEFBBD';
}

$iconPlus = '
<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
	<path d="M12 6.85714H6.85714V12H5.14286V6.85714H0V5.14286H5.14286V0H6.85714V5.14286H12V6.85714Z" fill="#262626" />
	<line y1="6" x2="12" y2="6" stroke="none" stroke-width="2" />
</svg>';

$iconHome = '
<svg class="iconHome" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
	<path d="M30 27.6313L29.9774 16.6587C29.9771 16.403 29.9256 16.1502 29.8263 15.9159C29.7269 15.6816 29.5817 15.471 29.3998 15.2971L16.5571 2.99948C16.2223 2.67846 15.782 2.5 15.3247 2.5C14.8675 2.5 14.4272 2.67846 14.0924 2.99948L2.59377 14.0353C2.41277 14.2097 2.26847 14.4205 2.1698 14.6547C2.07113 14.8889 2.0202 15.1415 2.02017 15.3969L2 27.6322C1.99968 27.8773 2.04625 28.12 2.13703 28.3466C2.22782 28.5731 2.36105 28.779 2.5291 28.9525C2.69715 29.1259 2.89674 29.2636 3.11644 29.3575C3.33615 29.4515 3.57167 29.4999 3.80955 29.5H12.5886V19.3645L19.4081 15.1483V29.5H28.1896C28.4277 29.5 28.6633 29.4516 28.8832 29.3577C29.103 29.2637 29.3027 29.126 29.4709 28.9525C29.639 28.7789 29.7723 28.5729 29.8631 28.3462C29.9539 28.1195 30.0004 27.8766 30 27.6313Z" fill="#FDB948" />
</svg>';

$iconCloseWhite = '
<svg class="iconCloseWhite" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
  <g clip-path="url(#clip0_1246_6426)">
    <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="white"/>
  </g>
  <defs>
    <clipPath id="clip0_1246_6426">
      <rect width="14" height="14" fill="white"/>
    </clipPath>
  </defs>
</svg>';

?>

<style>
	header.header {
		background: #fff;
		position: fixed;
		width: 100%;
		top: 0;
		z-index: 99999;
		transition: all 0.25s ease;
	}

	header.header.fixed {
		box-shadow: 4px 4px 12px 0px rgba(0, 0, 0, 0.08);
		padding: 12px 0;
	}

	.single-post #main-content {
		background: var(--White, #FFF);
		font-family: "Open Sans";
	}

	.single-post #main-content *:not(i) {
		font-family: "Open Sans";
	}

	/* .blog_row .e-con>.e-con-inner {
	gap: 0;
} */

	.blog_row blockquote {
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: italic;
		font-weight: 400;
		line-height: 24px;
		padding: 20px 0 20px 22px;
		border-left: 2px solid var(--Yellow-Primary, #FDB948);
		display: block;
		margin-bottom: 16px;
	}

	.blog_row blockquote p:last-child {
		padding-bottom: 0 !important;
	}

	.blog_row div>img,
	.blog_row .wp-caption {
		max-width: 100%;
		margin-bottom: 4px !important;
		object-fit: contain;
	}

	.blog_row .wp-caption {
		border-radius: 8px;
		background: var(--Gray-100, #F4F4F4);
		border: none;
	}

	.blog_row .wp-caption img {
		border-radius: 4px;
	}

	.blog_row .elementor-widget-image .widget-image-caption {
		padding: 15px 0 7px;
		color: var(--Grey-text, #444);
		font-family: "Open Sans";
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		line-height: 22px;
	}

	.blog_row svg {
		flex-shrink: 0;
	}

	.single_banner {
		background: #E2F3FF;
		padding: 48px 48px 36px;
	}

	.single_banner>div {
		max-width: 755px;
		;
	}

	.single_banner h4 {
		margin-bottom: 20px;
	}

	#et-main-area .single_banner input {
		width: 300px;
		margin-right: 12px;
	}

	.single_banner .btn_yellow {
		width: 240px;
		height: auto;
		line-height: 44px;
	}

	.single_banner label {
		margin-bottom: 12px;
		display: block;
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		line-height: 22px;
	}

	.contactp_map_bg {
		background-color: rgba(0, 0, 0, 0.6);
		bottom: 0px;
		left: 0px;
		position: absolute;
		right: 0px;
		top: 0px;
		width: 100%;
	}

	.single_subtitle {
		color: var(--Grey-text, #444);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
	}

	.absolute_curr {
		color: var(--Grey-dark, #262626);
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		line-height: 20px;
		text-transform: capitalize;
		position: absolute;
		left: 16px;
		top: 50%;
		transform: translateY(-50%);
		width: 25px;
		border-right: 1px solid #D8D8D8;
		padding: 0 !important;
	}

	#et-main-area .select,
	#et-main-area .absolute_curr+input {
		padding: 11px 16px 11px 57px;
		color: var(--Grey, #828282);
		font-size: 14px;
		font-style: normal;
		font-weight: 400;
		line-height: 20px;
		border-radius: 4px;
		border: 1px solid var(--Gray-300, #D8D8D8);
		background: var(--White, #FFF);
	}

	#et-main-area .select {
		padding: 12px 16px 12px 16px;
		background: url("/wp-content/themes/hunter-galloway/assets/img/img_new/16_arrow_down.svg") no-repeat right 16px center / 16px;
	}

	.single_time {
		color: var(--Grey-dark, #262626);
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		line-height: 22px;
		margin-bottom: 0;
		padding-bottom: 20px;
	}

	.single_time svg {
		margin-right: 8px;
	}

	.hg_adv_title {
		color: #ffffff;
		font-size: 40px !important;
		font-weight: 800;
		line-height: 48px;
	}

	.widget .btn_yellow {
		min-height: 50px;
	}

	.footer_adv .footer_video_text {
		color: #FFF;
		text-align: center;
		font-family: "Open Sans";
		font-size: 17px;
		font-style: normal;
		font-weight: 400;
		line-height: 18.7px;
		/* 110% */
		letter-spacing: -0.17px;
		margin-top: 16px;
		margin-bottom: 0 !important;
	}

	.single_subtitle {
		margin: 0;
	}

	.single_bottom_choose .home_banner_market {
		color: #000000;
		line-height: 110%;
		text-transform: none;
	}

	.single_bottom_choose .home_banner_market_dd {
		top: 35px;
	}

	.blog_row_left+div {
		max-width: calc(100% - 440px);
	}

	.elementor-widget-table-of-contents {
		padding-bottom: 16px;
	}

	.et_pb_post .entry-content,
	.e-con.e-flex>.e-con-inner,
	.e-con {
		padding: 0;
	}

	.blog_row {
		padding-top: 40px;
	}

	.blog_row .elementor-widget-table-of-contents .elementor-widget-container {
		border: none;
	}

	.blog_row .elementor-widget-table-of-contents .elementor-toc__toggle-button {
		display: none !important;
	}

	.blog_row .elementor-toc__header {
		border: none;
		padding: 0 0 8px 0;
	}

	.blog_row .elementor-toc__body {
		padding: 0;
		display: block !important;
	}

	.blog_row .elementor-widget-table-of-contents .elementor-toc__list-item {
		list-style-type: none;
		padding: 0;
		margin-bottom: 16px !important;
	}

	.blog_row .elementor-widget-table-of-contents .elementor-toc__list-item a {
		color: var(--Grey-dark, #262626);
		font-size: 16px;
		font-style: normal;
		font-weight: 600;
		line-height: 24px;
	}

	.blog_row .elementor-toc__list-item-text-wrapper i {
		font-size: 4px;
		color: #EC9B16;
		margin-left: 6px;
		border-radius: 50%;
		background-color: #EC9B16;
	}

	.blog_row .elementor-toc__header h4 {
		padding: 0 0 24px 0;
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 32px;
		font-style: normal;
		font-weight: 700;
		line-height: 40px;
	}

	#main-content .blog_row .entry-content ul.elementor-toc__list-wrapper {
		padding: 0 !important;
	}

	.blog_row .elementor-toc__body .elementor-toc__list-item-text:hover {
		color: var(--Yellow-2, #EC9B16);
		font-weight: 600;
		text-decoration-line: underline;
	}

	.blog_row #hc_deposit_calculator {
		max-width: 100%;
		margin-top: 0;
		margin-bottom: 12px;
		border-radius: 8px;
		border: 1px solid var(--Gray-300, #D8D8D8);
		box-shadow: none;
		padding: 32px;
	}

	.blog_row #hc_deposit_calculator .hc_title {
		margin: 0;
		padding: 0 0 24px;
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 32px;
		line-height: 40px;
	}

	.blog_row #hc_deposit_calculator .hc_sub_title {
		margin-top: 12px;
	}

	.blog_row #hc_deposit_calculator .hc_input_cell {
		width: calc(33.33% - 14px);
		padding: 20px 0 0 0;
		margin-right: 20px;
	}

	.blog_row #hc_deposit_calculator .hc_input_cell:nth-child(3n+3) {
		margin-right: 0;
	}

	.blog_row #hc_deposit_calculator .hc_input_label {
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 16px;
		line-height: 24px;
		/* 150% */
	}

	.blog_row #hc_deposit_calculator .hc_input_label span {
		color: var(--Grey, #828282);
		font-weight: 400;
	}

	.blog_row .hc_input_field {
		position: relative;
	}

	.blog_row .hc_input_field:before {
		content: attr(data-title);
		position: absolute;
		left: 0;
		top: 50%;
		transform: translateY(-50%);
		width: 45px;
		height: 20px;
		pointer-events: none;
		text-align: center;
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		line-height: 20px;
		/* 142.857% */
		text-transform: capitalize;
		border-right: 1px solid var(--Gray-300, #D8D8D8);
	}

	.blog_row #hc_deposit_calculator input[type=text] {
		border-radius: 4px !important;
		border: 1px solid var(--Gray-300, #D8D8D8);
		padding-left: 60px;
	}

	.blog_row #hc_deposit_calculator .hc_result_row .hc_input_label {
		color: var(--Grey-text, #444);
		font-family: "Open Sans";
		font-size: 13px;
		font-style: normal;
		font-weight: 700;
		line-height: 18px;
	}

	.blog_row #hc_deposit_calculator .hc_result_value {
		color: var(--Yellow-2, #EC9B16);
		font-size: 20px;
		font-style: normal;
		font-weight: 700;
		line-height: 28px;
	}

	.blog_row #hc_deposit_calculator .noUi-horizontal .noUi-handle {
		background: var(--Yellow-Primary, #FDB948);
		border: 2px solid #fff;
		filter: drop-shadow(0px 6px 10px rgba(63, 57, 44, 0.08));
		box-shadow: none;
	}

	.blog_row #hc_deposit_calculator .noUi-connect {
		box-shadow: none;
		border-radius: 30px;
	}

	.blog_row #hc_deposit_calculator .hc_info_txt {
		padding: 16px;
		border-radius: 8px;
		background: var(--Grey-BG, #F9F9F9);
		color: var(--Grey, #828282);
		line-height: 18px;
	}

	.blog_row #hc_deposit_calculator .hc_info_txt strong {
		margin-bottom: -10px;
		display: block;
	}

	.blog_row #hc_deposit_calculator a.hc_result_button {
		border-radius: 100px;
		background: var(--Yellow-Primary, #FDB948);
		padding: 12px;
		color: var(--Grey-dark, #262626) !important;
		font-size: 18px;
		line-height: 24px;
		max-width: 400px;
		width: 100%;
		margin: 32px auto 0;
		display: block;
		text-decoration: none !important;
	}

	.blog_row #hc_deposit_calculator .hc_result_section {
		margin: 32px 0 0 0;
	}

	.blog_row .noUi-base,
	.blog_row #hc_deposit_calculator .hc_result_cell {
		position: relative;
	}

	.blog_row #hc_deposit_calculator #hc_down_slider_result {
		position: absolute;
		width: fit-content;
		top: 100%;
		left: calc(33.33% - 4px);
		transform: translateX(-50%);
		border-radius: 2px;
		border: 1px solid var(--Gray-200, #EEE);
		background: var(--White, #FFF);
		box-shadow: 0px 6px 8px 0px rgba(0, 0, 0, 0.08);
		padding: 4px 7px;
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 14px;
		font-style: normal;
		font-weight: 600;
		line-height: 20px;
		z-index: 3;
	}

	.blog_row #hc_down_slider_result:after,
	.blog_row #hc_down_slider_result:before {
		content: '';
		position: absolute;
		bottom: calc(100% - 1px);
		left: 50%;
		transform: translateX(-50%);
		width: 0;
		height: 0;
		border-style: solid;
		border-right: 5px solid transparent;
		border-left: 5px solid transparent;
		border-bottom: 6px solid #fff;
		border-top: 0;
		z-index: 1;
	}

	.blog_row #hc_down_slider_result:before {
		border-right: 6px solid transparent;
		border-left: 6px solid transparent;
		border-bottom: 7px solid #EEE;
		z-index: 0;
		bottom: 100%;
	}

	.blog_row #hc_deposit_calculator .hc_result_cell.last_result_cell>div:nth-last-child(2),
	.blog_row #hc_deposit_calculator .hc_result_cell.last_result_cell>div:last-child {
		position: absolute;
		width: 50%;
		max-width: 185px;
		right: 0;
		top: 0;
	}

	.blog_row #hc_deposit_calculator .hc_result_cell.last_result_cell>div:last-child {
		top: 25px;
	}

	/* sidebar */
	.blog_row_left {
		margin-right: 40px;
		width: 400px;
		flex-shrink: 0;
		padding-bottom: 90px;
	}

	.sidebar_sticky {
		position: sticky;
		top: 90px;
	}

	.sidebar {
		width: 100%;
		margin-bottom: 32px;
	}

	.sidebar_head svg,
	.helpful_tools_head svg {
		margin-right: 16px;
	}

	.sidebar_content {
		border-radius: 8px;
		border: 1px solid var(--Gray-300, #D8D8D8);
		background: var(--White, #FFF);
		margin: 16px 0;
		padding: 0 8px 0 0;
		transition: all 0.25s ease;
		position: relative;
		overflow: hidden;
	}

	.sidebar_content ul {
		padding: 12px 0 12px !important;
		overflow-y: auto;
		margin: 0 !important;
	}

	.sidebar_content.collapse ul {
		max-height: calc(100vh - 136px - 305px - 64px);
	}

	#main-content .sidebar_content>ul li:before {
		content: none !important;
	}

	#main-content .sidebar_content>ul li {
		padding: 0 !important;
		margin: 0 !important;
	}

	#main-content .sidebar_content ul li a {
		color: var(--Grey-text, #444);
		font-size: 14px;
		font-weight: 400;
		padding: 8px 8px 8px 32px;
		border-left: 4px solid transparent;
		transition: all 0.25s ease;
		display: block;
		width: 100%;
		margin: 1px 0;
	}

	#main-content .sidebar_content ul li>div>a.elementor-item-active,
	#main-content .sidebar_content ul li:hover>div>a {
		border-color: #FDB948;
		background: linear-gradient(90deg, #FFF5E2 25.97%, rgba(255, 245, 226, 0.00) 94.5%);
	}

	.sidebar_calculate {
		border-radius: 12px;
		border: 1px solid var(--Gray-200, #EEE);
		background: var(--White, #FFF);
		box-shadow: 4px 8px 16px 0px rgba(0, 0, 0, 0.05);
	}

	.sidebar_calculate_head {
		border-radius: 12px;
		padding: 20px 25px;
		border-radius: 8px;
		border: 1px solid var(--Gray-100, #F4F4F4);
		background: var(--Grey-dark, #262626);
		color: var(--White, #FFF);
		font-family: "Open Sans";
		font-size: 18px;
		font-style: normal;
		font-weight: 700;
		line-height: 26px;
	}

	.sidebar_calculate_body {
		padding: 16px 24px;
	}

	.sidebar_calculate_body label {
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: normal;
		font-weight: 700;
		line-height: 24px;
		margin: 0 0 12px;
		display: block
	}

	.sidebar_calculate_body .btn_yellow {
		margin-top: 16px;
	}

	/* single_bottom_choose */
	.single_bottom_choose {
		border-radius: 8px;
		border: 1px solid var(--Gray-300, #D8D8D8);
		background: var(--White, #FFF);
		padding: 46px 0 6px;
		margin-bottom: 100px;
	}

	.single-post #main-content .single_bottom_choose h2 {
		text-align: center;
		padding: 0 0 50px 0;
	}

	.single_bottom_inner {
		width: 100%;
	}

	.single_bottom_item {
		width: 25%;
		border-right: 2px solid rgba(253, 185, 72, 0.4);
	}

	.single_bottom_item:last-child {
		border-right: none;
	}

	.single_bottom_item>div {
		margin: 0 auto;
		max-width: 215px;
		gap: 12px;
		display: grid;
	}

	.single_bottom_text_top {
		color: var(--Grey-dark, #262626);
		font-size: 18px;
		font-style: normal;
		font-weight: 700;
		line-height: 26px;
		margin: 0;
	}

	.single_bottom_text_bottom,
	.home_banner_market {
		color: var(--Grey-text, #444);
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
		padding: 0 !important;
	}

	/* base */
	.breadcrumbs {
		display: none;
	}

	.header__container,
	.container {
		max-width: 1272px !important;
		padding: 0 16px;
		width: 100%;
	}

	#main-content .btn_yellow {
		line-height: 48px;
	}

	h1,
	h2,
	h3,
	h4 {
		color: var(--Grey-dark, #262626) !important;
		font-family: "Open Sans" !important;
		font-style: normal;
		font-weight: 700 !important;
		margin: 0;
		padding: 0;
	}

	h1 {
		font-size: 40px;
		line-height: 48px;
		margin-bottom: 24px;
	}

	h2 {
		font-size: 32px;
		line-height: 40px !important;
	}

	.icon_dashed {
		/* new style.css*/
		margin: 4px 0 20px;
		max-width: 755px;
		width: 100%;
		display: block;
	}

	.single-post #main-content h2:not(.elementor-heading-title) {
		padding: 0 0 24px;
		margin: 0;
		color: var(--Grey-dark, #262626);
		font-size: 32px;
		font-weight: 700;
		line-height: 40px;
	}

	.sidebar_content {
		position: relative;
		overflow: hidden;
	}

	.sidebar_content.collapse:not(.hide_gradient):after {
		content: '';
		position: absolute;
		bottom: 0;
		left: 0;
		height: 70px;
		width: 100%;
		background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
	}

	#main-content ul {
		list-style-type: none;
		scrollbar-width: thin;
		scrollbar-color: #D8D8D8 #fff;
	}

	#main-content ul::-webkit-scrollbar {
		width: 4px;
		background: #fff;
	}

	#main-content ul::-webkit-scrollbar-thumb {
		width: 4px;
		border-radius: 10px;
		background: var(--Gray-300, #D8D8D8);
	}

	#main-content ul::-webkit-scrollbar-button {
		display: none;
		background-color: transparent;
	}

	#main-content li {
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
	}

	#main-content ul:not(.list) li {
		padding-left: 24px;
		position: relative;
		font-weight: 600;
	}

	#main-content ul:not(.list) li:not(:last-child) {
		margin-bottom: 8px;
	}

	#main-content ul:not(.list, .tabs, .elementor-icon-list-items) {
		padding: 24px 0;
	}

	#main-content article ul:not(.list, .tabs, .elementor-icon-list-items) {
		padding-top: 8px;
	}

	#main-content ul:not(.list, .tabs, .elementor-icon-list-items)>li:before {
		content: '';
		position: absolute;
		left: 6px;
		top: 10px;
		width: 4px;
		height: 4px;
		border-radius: 50%;
		background-color: #FDB948;
	}

	#main-content ul.elementor-icon-list-items>li {
		padding-left: 0;
	}

	/* new style */
	#main-content .sidebar_content>ul li:before {
		content: none !important;
	}

	#main-content .sidebar_content>ul li {
		padding: 0 !important;
		margin: 0 !important;
	}

	#et-main-area .select,
	#et-main-area .absolute_curr+input {
		padding: 11px 16px 11px 57px;
		color: var(--Grey, #828282);
		font-size: 14px;
		font-style: normal;
		font-weight: 400;
		line-height: 20px;
		border-radius: 4px;
		border: 1px solid var(--Gray-300, #D8D8D8);
		background: var(--White, #FFF);
	}

	#et-main-area .select {
		padding: 12px 16px 12px 16px;
		background: #fff url("/wp-content/themes/hunter-galloway/assets/img/img_new/16_arrow_down.svg") no-repeat right 16px center / 16px;
	}

	#et-main-area .single_banner .select,
	#et-main-area .single_banner input {
		width: 300px;
		margin-right: 12px;
	}

	/* end new style */
	h3 {
		font-size: 20px;
		line-height: 28px;
	}

	h4 {
		font-size: 18px;
		line-height: 26px;
	}

	.single_socials {
		margin-left: auto;
	}

	.single_socials a {
		margin-left: 24px;
	}

	#main-content .elementor a:not(.elementor-toc__list-item-text, .question-next, .elementor-button, .btn_yellow),
	#main-content .elementor a:not(.elementor-toc__list-item-text, .question-next, .elementor-button, .btn_yellow) span {
		color: var(--Yellow-2, #EC9B16);
		font-weight: 600 !important;
		text-decoration-line: underline;
	}

	p {
		padding-bottom: 1em !important;
	}

	p,
	.single .entry-content p,
	p.single_subtitle,
	#main-content .blog_row #hc_deposit_calculator .hc_sub_title {
		color: var(--Grey-text, #444);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
	}

	#main-content table {
		border-color: var(--Gray-300, #D8D8D8) !important;
		border-collapse: separate;
		border-spacing: 0;
		border-radius: 8px;
		overflow: hidden;
		margin: 8px 0 24px !important;
	}

	.elementor-widget-heading .elementor-heading-title {
		padding-top: 12px;
		padding-bottom: 4px;
	}

	.elementor-widget-heading h2.elementor-heading-title {
		text-decoration: none !important;
	}

	.blog_row .elementor-widget-heading+.elementor-widget-video,
	.blog_row .elementor-widget-heading+.elementor-widget-image {
		margin-top: 0 !important;
	}

	.blog_row .elementor-widget-video+.elementor-widget-text-editor {
		margin-top: -12px !important;
	}

	#main-content .entry-content tr:first-child td,
	body.et-pb-preview .blog_row #main-content .container tr:first-child td {
		border-top: none;
	}

	#main-content .entry-content tr th,
	#main-content .entry-content thead th,
	#main-content .entry-content tr td,
	body.et-pb-preview .blog_row #main-content .container tr td {
		border-color: var(--Gray-300, #D8D8D8);
		padding: .857em 0.587em;
	}

	.single #main-content .entry-content table p {
		font-size: 14px;
		line-height 1.7em;
		color: rgb(122, 122, 122);
		padding: 0 !important;
	}

	#main-content.entry-content ul:not(.elementor-toc__list-wrapper) {
		padding: 12px 0 !important;
		list-style-type: none !important;
	}

	#main-content.entry-content ul:not(.elementor-toc__list-wrapper, .dpsp-networks-btns-wrapper) li {
		padding-left: 24px;
		position: relative;
		margin-bottom: 12px;
		color: var(--Grey-text, #444);
		line-height: 24px;
	}

	#main-content .entry-content ul:not(.elementor-toc__list-wrapper, .dpsp-networks-btns-wrapper, .elementor-icon-list-items)>li:before {
		content: '';
		position: absolute;
		left: 6px;
		top: 10px;
		width: 4px;
		height: 4px;
		border-radius: 50%;
		background-color: #FDB948;
	}

	.single_banner .btn_yellow {
		line-height: 44px;
	}

	.custom-banner {
		border-radius: 8px;
		border: 1px solid var(--Yellow-Primary, #FDB948) !important;
		background: var(--White, #FFF) !important;
		padding: 18px 40px 24px;
	}

	.entry-content .custom-banner p {
		margin-left: 64px;
		padding: 10px 0 0 0 !important;
		color: var(--Grey-dark, #262626);
		font-size: 18px;
		font-style: italic;
		font-weight: 400;
		line-height: 26px;
	}

	.entry-content .custom-banner::before {
		content: '';
		background: url('<?php echo $assets; ?>info-circle.svg') no-repeat center / contain;
		width: 40px;
		height: 40px;
		left: 40px;
		top: 18px;
		transform: none;
		display: block;
		position: absolute;
	}

	#main-content .entry-content table.table_padding_5 tr th,
	#main-content .entry-content table.table_padding_5 thead th,
	#main-content .entry-content table.table_padding_5 tr td {
		padding: 5px;
	}

	.single_bottom_choose .home_banner_market {
		line-height: 24px;
	}

	#main-content ul.dpsp-networks-btns-wrapper li {
		padding-left: 0;
	}

	.elementor-9606 .elementor-element.elementor-element-e01fa7c {
		padding: 0;
	}

	.single_time {
		text-transform: uppercase;
	}

	.blog_row .elementor-alert.elementor-alert-info {
		margin-bottom: 20px;
	}

	.blog_row .e-con-boxed:is([data-settings*="background_background"]) {
		margin: 40px 0 !important;
	}

	.blog_row .e-con-boxed:is([data-settings*="background_background"]) .elementor-widget-container {
		padding: 2em 0em 0em 0em;
	}

	.blog_row .e-con-boxed:is([data-settings*="background_background"]) h2 {
		padding-bottom: 30px;
		padding-top: 2px;
		color: #fff!important;
	}

	.blog_row .e-con>.e-con-inner {
		gap: var(--gap);
	}

	.blog_row .elementor-widget-container {
		overflow-x: auto;
	}

	.single-post #main-content i.fa {
		font-family: 'FontAwesome';
	}

	.blog_row #hc_deposit_calculator a.hc_result_button {
		text-transform: none !important;
	}

	.blog_row .elementor-widget-image>div>img {
		width: 100%;
	}

	.blog_row .elementor-widget-video,
	.blog_row .elementor-widget-image {
		margin-top: -12px !important;
	}

	.blog_row .elementor-widget-image+div>div>ul:first-child:not(.list, .tabs, .elementor-icon-list-items) {
		padding-top: 0 !important;
	}

	.list_number {
		list-style-type: none !important;
		counter-reset: item;
		padding-top: 8px !important;
	}

	.list_number li {
		counter-increment: item;
		display: flex;
	}

	.list_number li:not(:last-child) {
		margin-bottom: 12px;
	}

	.list_number li:before {
		content: counter(item) '.';
		color: var(--Yellow-2, #EC9B16);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: normal;
		font-weight: 700;
		line-height: 24px;
		margin-right: 8px;
	}

	.elementor-widget-container>style+p {
		padding: 0 !important;
	}

	#main-content .blog_row_left+div ul:not(.list) li:not(:last-child) {
		margin-bottom: 12px;
	}
	#main-content .elementor-widget .elementor-icon-list-items.elementor-inline-items {
		margin-right: 0;
		margin-left: 0;
	}
	.blog_row .dpsp-networks-btns-wrapper li a.dpsp-network-btn, 
	.blog_row .dpsp-networks-btns-wrapper li button.dpsp-network-btn {
		border-radius: 4px;
		border: 1px solid var(--Yellow-Primary, #FDB948)!important;
		background: var(--Yellow-light, #FFF5E2)!important;
		color: var(--Black, #000) !important;
		font-weight: 600;
		line-height: 22px;
		height: 46px;
		max-height: 46px !important;
		display: flex;
		justify-content: center!important;
		align-items: center;
	}
	.blog_row .dpsp-networks-btns-wrapper li .dpsp-network-btn .dpsp-network-icon > span,
	.blog_row .dpsp-networks-btns-wrapper li .dpsp-network-btn .dpsp-network-icon {
		align-items: center;
		background-color: transparent!important;
		border: none;
		width: 18px;
		height: 18px;
		flex: none;
		align-self: center;
		top: 0;
		left: 0;
	}
	
	.blog_row .dpsp-button-style-1 .dpsp-network-btn .dpsp-network-icon:not(.dpsp-network-icon-outlined) .dpsp-network-icon-inner>svg {
		fill: #000!important;
	}
	.blog_row .dpsp-network-btn.dpsp-facebook svg,
	.blog_row .dpsp-network-btn.dpsp-x svg,
	.blog_row .dpsp-network-btn.dpsp-pinterest svg,
	.blog_row .dpsp-network-btn.dpsp-linkedin svg {
		display: none;
	}
	.blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn .dpsp-network-icon {
		background: transparent no-repeat center / contain!important;
	}
	.blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-facebook .dpsp-network-icon {
		background-image: url("<?php echo $assets ?>facebook.svg")!important;
	}
	.blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-x .dpsp-network-icon {
		background-image: url("<?php echo $assets ?>tweet.svg")!important;
	}
	.blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-pinterest .dpsp-network-icon {
		background-image: url("<?php echo $assets ?>pin.svg")!important;
	}
	.blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-linkedin .dpsp-network-icon{
		background-image: url("<?php echo $assets ?>in.svg")!important;
	}

	.blog_row  .dpsp-networks-btns-wrapper .dpsp-network-btn .dpsp-network-label {
		padding: 0 0 0 12px;
	}
	.blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn:hover {
		background-color: var(--Yellow-Primary, #FDB948)!important;
		outline: none;
    	box-shadow: none;
	}

	@media screen and (max-width: 1400px) {
		.single_banner {
			padding-left: 10px;
			padding-right: 10px;
		}
	}
	.elementor-widget-image img {
		border-radius: 8px;
	}

	@media screen and (min-width: 1200px) {
		.blog_row #hc_deposit_calculator .hc_result_row {
			display: flex;
		}

		.blog_row #hc_deposit_calculator .hc_result_cell {
			width: 100%;
		}

		.blog_row #hc_deposit_calculator .hc_result_cell:not(.last_result_cell) {
			max-width: 350px;
		}
	}

	@media(min-width: 768px) {
		.single_banner {
			border-radius: 8px;
		}
	}

	@media (min-width: 992px) {

		.single .et_pb_post {
			padding-bottom: 60px !important;
		}

		#dpsp-floating-sidebar,
		.elementor-widget-table-of-contents {
			display: none;
		}

		.elementor-toc--minimized-on-tablet {
			order: -1;
		}

		#et-main-area .single_banner {
			margin-top: 108px;
		}

		.elementor-widget-video {
			margin-bottom: 16px !important
		}

	}

	@media (max-width: 991px) {
		body {
			margin-top: 75px;
		}
		.blog_row .dpsp-networks-btns-wrapper li a.dpsp-network-btn, 
		.blog_row .dpsp-networks-btns-wrapper li button.dpsp-network-btn {
			height: 42px;
			max-height: 42px !important;
		}

		.blog_row_left {
			display: none;
		}

		.header__container,
		.container {
			max-width: 767px !important;
		}

		.single_banner {
			flex-direction: column-reverse;
			padding: 32px 16px;
			margin: 0 -16px;
		}

		.blog_row_left+div {
			width: 100%;
			max-width: 100%;
		}

		h1 {
			order: -1;
			font-size: 32px;
			line-height: 40px;
			margin-bottom: 16px;
		}

		/* content */
		#main-content {
			padding: 0;
		}

		.elementor-widget-table-of-contents {
			padding-bottom: 2px;
		}

		.blog_row .elementor-toc__header {
			padding-bottom: 0;
		}

		.single_time {
			margin-bottom: 2px;
			padding-bottom: 16px !important;
		}

		.single_subtitle {
			padding-bottom: 16px !important;
		}

		.blog_row {
			padding-top: 16px;
		}

		.blog_row #hc_deposit_calculator {
			padding: 22px 15px;
			margin-bottom: 28px;
		}

		.blog_row #hc_deposit_calculator .hc_title {
			font-size: 24px;
			line-height: 32px;
		}

		.blog_row #hc_deposit_calculator .hc_sub_title {
			font-size: 14px;
		}

		.blog_row #hc_deposit_calculator .hc_input_cell {
			margin-right: 0;
			width: 100%;
		}

		.blog_row .hc_result_section {
			margin-top: 24px;
		}

		.blog_row #hc_deposit_calculator .hc_result_title {
			padding-bottom: 12px;
			line-height: 28px;
		}

		.blog_row #hc_deposit_calculator .noUi-target {
			margin-bottom: 15px;
		}

		.blog_row #hc_deposit_calculator .hc_result_cell:not(.last_result_cell) {
			margin-bottom: 72px;
		}

		.blog_row #hc_deposit_calculator .hc_result_value {
			margin-bottom: 24px;
		}

		.blog_row #hc_deposit_calculator a.hc_result_button {
			margin-top: 24px;
			font-size: 16px;
		}

		.single-post #main-content h2 {
			font-size: 24px;
			line-height: 32px !important;
		}

		.single_bottom_choose {
			padding: 32px 16px;
		}

		.single_bottom_item {
			width: 50%;
		}

		.single_bottom_item:nth-child(2n+2) {
			border-right: none;
		}

		/* sticky */
		.blog_row_left {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			margin: 0;
			z-index: 99999;
		}

		.sidebar {
			display: none;
		}
	}

	@media (max-width: 767px) {
		p {
			padding-bottom: 10px !important;
		}

		p:not(.has-background, .single_subtitle):last-of-type {
			padding-bottom: 0 !important;
		}

		#dpsp-content-bottom {
			display: flex !important;
			flex-direction: column-reverse;
		}

		.dpsp-networks-btns-wrapper {
			width: 100%;
			flex-wrap: wrap;
			display: flex;
			padding-bottom: 0 !important;
		}

		.dpsp-networks-btns-wrapper li {
			width: calc(50% - 6px) !important;
			margin: 0 12px 12px 0 !important;
		}

		.dpsp-content-wrapper.dpsp-show-total-share-count.dpsp-show-total-share-count-after {
			padding-right: 0 !important;
		}

		.dpsp-networks-btns-wrapper li:nth-child(2n+2) {
			margin-right: 0 !important;
		}

		.dpsp-total-share-wrapper {
			position: inherit !important;
			margin-top: 1px !important;
		}

		.blog_row #hc_deposit_calculator #hc_down_slider_result {
			top: calc(100% + 13px);
		}

		#et-main-area .single_banner .select,
		#et-main-area .select,
		#et-main-area .absolute_curr+input {
			width: 100%;
			margin: 0;
		}

		.single_bottom_item>div,
		.single_bottom_item {
			width: 100%;
			max-width: 100%;
		}

		.blog_row .entry-content tr td {
			padding: 6px;
		}

		.elementor-column-gap-default>.elementor-column>.elementor-element-populated {
			padding: 10px 0;
		}

		.et_pb_row_0.et_pb_row {
			padding-left: 0 !important;
		}

		.single_bottom_choose {
			margin-bottom: 122px;
		}

		.single-post #main-content .single_bottom_choose h2 {
			padding-bottom: 32px;
			text-align: left;
			font-size: 24px;
			line-height: 32px;
		}

		.single_bottom_item>div {
			max-width: 100%;
			margin: 0;
		}

		.single_bottom_item {
			width: 100%;
			border-right: none;
		}

		.single_bottom_item:last-child {
			margin-bottom: 0;
		}

		#et-main-area .select,
		#et-main-area .absolute_curr+input {
			width: 100%;
			margin: 0;
		}

		.single_banner .btn_yellow {
			width: 100%;
			margin: 12px 0 0 0;
			min-height: 44px;
		}

		.blog_row #hc_deposit_calculator a.hc_result_button {
			padding-right: 28px;
			background: #FDB948 url('<?php echo $assets; ?>16_arrow_r_black.svg') no-repeat left calc(50% + 266px / 2 + 4px) center / 16px;
		}

		.blog_row .elementor-toc__header h4 {
			font-size: 24px;
			line-height: 32px;
		}

		.icon_dashed {
			margin: 0px 0 16px;
		}

		#main-content .blog_row #hc_deposit_calculator .hc_sub_title {
			font-size: 14px;
		}

		#hc_deposit_calculator .hc_input_label {
			margin-bottom: 12px !important;
		}

		#hc_deposit_calculator input[type=text] {
			height: auto;
			line-height: 30px;
		}

		.blog_row blockquote {
			margin-top: 10px;
			margin-bottom: 4px;
		}

		.blog_row p+blockquote {
			margin-top: 24px;
		}

		.blog_row .elementor-widget-video,
		.blog_row .elementor-widget-image {
			margin-top: 4px !important;
		}

		.blog_row .elementor-widget-image>div>img,
		.elementor-widget-video .elementor-wrapper iframe,
		.elementor-widget-video .elementor-wrapper video {
			border-radius: 8px;
		}

		.elementor-widget-heading .elementor-heading-title {
			padding-top: 28px;
		}

		.blog_row .wp-caption img {
			min-height: 264px;
			object-fit: cover;
		}

		.blog_row .elementor-widget-image .widget-image-caption {
			padding: 8px 0 0 9px;
			text-align: left;
		}

		.blog_row .entry-content tr td {
			font-size: 12px;
			line-height: 1.5;
		}

		#main-content table {
			margin: 14px 0 24px !important;
		}

		#main-content ul:not(.list) li:not(:last-child) {
			margin-bottom: 12px;
		}

		#main-content article ul:not(.list, .tabs, .elementor-icon-list-items) {
			padding-top: 12px;
		}

		#main-content li {
			color: var(--Grey, #828282);
		}

		#main-content li b {
			color: var(--Grey-text, #444);
		}

		.dpsp-content-wrapper .dpsp-network-label {
			display: block !important;
		}

		.dpsp-network-btn.dpsp-has-label:not(.dpsp-has-count) {
			justify-content: flex-start !important;
		}

		.dpsp-networks-btns-wrapper {
			display: flex;
			flex-wrap: wrap;
		}

		#main-content ul.dpsp-networks-btns-wrapper li {
			width: calc(50% - 6px) !important;
			margin-right: 12px !important;
		}

		#main-content ul.dpsp-networks-btns-wrapper li:last-child,
		#main-content ul.dpsp-networks-btns-wrapper li:nth-child(2) {
			order: 1;
		}

		#main-content ul.dpsp-networks-btns-wrapper li:last-child,
		#main-content ul.dpsp-networks-btns-wrapper li:nth-child(3) {
			margin-right: 0 !important;
		}
		.blog_row #hc_deposit_calculator .hc_result_cell.last_result_cell>div:last-child {
			top: 30px;
		}
	}
</style>


<div class="container">
	<div class="single_banner flex items-end" style="background-color: <?php echo $backgroundColorBanner; ?>;">
		<div>

			<?php
			$post_links_how_minutes = get_field('post_links_how_minutes');
			if ($post_links_how_minutes !== '') {
				echo '
						<p class="single_time items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="13" height="16" viewBox="0 0 13 16" fill="none">
								<path
									d="M6.09375 16C9.45384 16 12.1875 13.2663 12.1875 9.90625C12.1875 8.39456 11.634 7.00984 10.7192 5.94366L11.726 4.93691L11.0631 4.274L10.0563 5.28075C9.38638 4.70597 8.59066 4.27406 7.71666 4.03231C8.16047 3.60556 8.4375 3.00656 8.4375 2.34375C8.4375 1.05141 7.38609 0 6.09375 0C4.80141 0 3.75 1.05141 3.75 2.34375C3.75 3.00656 4.02703 3.60556 4.47084 4.03228C3.59684 4.27406 2.80109 4.70597 2.13116 5.28072L1.12441 4.27397L0.4615 4.93687L1.46825 5.94362C0.553531 7.00984 0 8.39456 0 9.90625C0 13.2663 2.73366 16 6.09375 16ZM6.09375 0.9375C6.86916 0.9375 7.5 1.56834 7.5 2.34375C7.5 2.95484 7.10809 3.47587 6.5625 3.66937V1.9375H5.625V3.66937C5.07941 3.47587 4.6875 2.95484 4.6875 2.34375C4.6875 1.56834 5.31834 0.9375 6.09375 0.9375ZM6.09375 4.75C8.93691 4.75 11.25 7.06309 11.25 9.90625C11.25 12.7494 8.93691 15.0625 6.09375 15.0625C3.25059 15.0625 0.9375 12.7494 0.9375 9.90625C0.9375 7.06309 3.25059 4.75 6.09375 4.75Z"
									fill="#262626" />
								<path d="M8.4375 9.43774H6.5625V7.56274H5.625V10.3752H8.4375V9.43774Z" fill="#262626" />
								<path d="M9.375 9.4375H10.3125V10.375H9.375V9.4375Z" fill="#262626" />
								<path d="M1.875 9.4375H2.8125V10.375H1.875V9.4375Z" fill="#262626" />
								<path d="M5.625 5.6875H6.5625V6.625H5.625V5.6875Z" fill="#262626" />
								<path d="M5.625 13.1877H6.5625V14.1252H5.625V13.1877Z" fill="#262626" />
							</svg>' . $post_links_how_minutes . '
						</p>';
			}
			?>

			<h1>
				<?php the_title(); ?>
			</h1>
			<p class="single_subtitle">
				<?php the_field('hg_post_subtitle'); ?>
			</p>


			<?php include ('banner-calculate.php'); ?>

		</div>
		<div class="single_socials items-lg-center d-none">
			<a href="https://www.facebook.com/MortgageBrokerBrisbane/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
					<path
						d="M3.30413 12.418C3.22153 12.418 1.40426 12.418 0.578223 12.418C0.137672 12.418 0 12.2528 0 11.8398C0 10.7384 0 9.60951 0 8.50813C0 8.06758 0.165207 7.92991 0.578223 7.92991H3.30413C3.30413 7.84731 3.30413 6.25031 3.30413 5.50688C3.30413 4.40551 3.49687 3.3592 4.04756 2.39549C4.62578 1.40425 5.45181 0.743429 6.49812 0.357947C7.18648 0.110137 7.87484 0 8.61827 0H11.3166C11.7021 0 11.8673 0.165207 11.8673 0.550688V3.68961C11.8673 4.07509 11.7021 4.2403 11.3166 4.2403C10.5732 4.2403 9.82979 4.2403 9.08636 4.26783C8.34293 4.26783 7.95745 4.62578 7.95745 5.39675C7.92991 6.22278 7.95745 7.02128 7.95745 7.87484H11.1514C11.592 7.87484 11.7572 8.04005 11.7572 8.4806V11.8123C11.7572 12.2528 11.6195 12.3905 11.1514 12.3905C10.1602 12.3905 8.04005 12.3905 7.95745 12.3905V21.3667C7.95745 21.8348 7.81977 22 7.32415 22C6.16771 22 5.0388 22 3.88235 22C3.46934 22 3.30413 21.8348 3.30413 21.4218C3.30413 18.5307 3.30413 12.5006 3.30413 12.418Z"
						fill="#262626" />
				</svg>
			</a>
			<a href="https://www.youtube.com/channel/UCKw1JlNlcWR62EpSrXpfUWA" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<path
						d="M22.5133 6.22657L22.5408 6.40623C22.2749 5.46299 21.5572 4.73517 20.6451 4.47026L20.6259 4.46567C18.9108 4.00001 12.0093 4.00001 12.0093 4.00001C12.0093 4.00001 5.12522 3.99085 3.39274 4.46567C2.46325 4.73517 1.74459 5.46299 1.48335 6.38698L1.47876 6.40623C0.838022 9.75294 0.833438 13.7743 1.50718 17.3575L1.47876 17.176C1.74459 18.1193 2.46233 18.8471 3.37441 19.112L3.39366 19.1166C5.10689 19.5832 12.0102 19.5832 12.0102 19.5832C12.0102 19.5832 18.8934 19.5832 20.6268 19.1166C21.5572 18.8471 22.2758 18.1193 22.5371 17.1953L22.5417 17.176C22.8332 15.6195 23 13.8284 23 11.9987C23 11.9318 23 11.864 22.9991 11.7962C23 11.7338 23 11.6596 23 11.5853C23 9.75477 22.8332 7.96363 22.5133 6.22657ZM9.8075 15.1383V8.45312L15.5513 11.8008L9.8075 15.1383Z"
						fill="#262626" />
				</svg>
			</a>
			<a href="https://twitter.com/BrokerBrisbane" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<g clip-path="url(#clip0_2169_24764)">
						<path
							d="M10.7204 0.0879968C6.50405 0.527997 2.73669 3.30384 1.02405 7.232C-0.0796315 9.768 -0.263311 12.688 0.520368 15.3762C1.48837 18.728 3.99237 21.5598 7.23237 22.9762C9.76837 24.0798 12.6884 24.2635 15.3767 23.4798C19.4004 22.3198 22.5685 19.0162 23.6085 14.9118C25.2322 8.48 21.2484 1.90352 14.8004 0.367997C13.384 0.0319968 12.1367 -0.0561632 10.7204 0.0879968ZM10.8804 7.52C11.904 8.88 12.7684 10 12.8004 10C12.8324 10 13.8967 8.88 15.1524 7.52L17.4484 5.04H18.7524L18.4724 5.33632C18.3124 5.50368 17.2724 6.63184 16.1604 7.84C15.0484 9.048 13.9604 10.2237 13.744 10.44L13.3604 10.848L16.3604 14.84C18.0084 17.04 19.3604 18.8637 19.3604 18.8963C19.3604 18.9363 18.3767 18.96 17.184 18.96L15.0004 18.952L12.9684 16.232C11.5684 14.352 10.9124 13.5435 10.8484 13.592C10.8004 13.632 9.66405 14.8563 8.32037 16.312L5.88037 18.96H5.26405C4.92037 18.96 4.64037 18.9437 4.64037 18.92C4.64037 18.8963 5.91237 17.5037 7.46405 15.832C9.00853 14.16 10.2885 12.76 10.304 12.7363C10.3124 12.7037 9.04037 10.968 7.48037 8.88C5.92037 6.8 4.64037 5.08 4.64037 5.06368C4.64037 5.04816 5.62405 5.04 6.83237 5.04H9.02405L10.8804 7.52Z"
							fill="#262626" />
						<path
							d="M6.61713 6.112C6.64897 6.168 8.66449 8.872 11.0808 12.1037L15.4808 17.9918L16.4645 18C17.0727 18 17.4408 17.968 17.4245 17.92C17.4171 17.88 15.409 15.1763 12.9771 11.92L8.54449 6H7.55281C6.72913 6 6.56081 6.01632 6.61713 6.112Z"
							fill="#262626" />
					</g>
					<defs>
						<clipPath id="clip0_2169_24764">
							<rect width="24" height="24" fill="#262626" />
						</clipPath>
					</defs>
				</svg>
			</a>
			<a href="https://www.linkedin.com/company/hunter-galloway/" target="_blank" rel="noopener">
				<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
					<path
						d="M19 0H3C2.20435 0 1.44129 0.31607 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3L0 19C0 19.7956 0.31607 20.5587 0.87868 21.1213C1.44129 21.6839 2.20435 22 3 22H19C19.7956 22 20.5587 21.6839 21.1213 21.1213C21.6839 20.5587 22 19.7956 22 19V3C22 2.20435 21.6839 1.44129 21.1213 0.87868C20.5587 0.31607 19.7956 0 19 0ZM7.5 17.41C7.50016 17.471 7.48829 17.5314 7.46506 17.5879C7.44183 17.6443 7.40769 17.6955 7.36461 17.7387C7.32153 17.7819 7.27036 17.8162 7.21401 17.8396C7.15766 17.863 7.09726 17.875 7.03625 17.875H5.06C4.99889 17.8752 4.93835 17.8632 4.88186 17.8399C4.82537 17.8166 4.77404 17.7824 4.73083 17.7392C4.68762 17.696 4.65337 17.6446 4.63006 17.5881C4.60675 17.5317 4.59483 17.4711 4.595 17.41V9.125C4.595 9.00167 4.64399 8.8834 4.7312 8.7962C4.8184 8.70899 4.93667 8.66 5.06 8.66H7.03625C7.15936 8.66033 7.27731 8.70947 7.36425 8.79664C7.45118 8.88381 7.5 9.00189 7.5 9.125V17.41ZM6.0475 7.875C5.67666 7.875 5.31415 7.76503 5.00581 7.55901C4.69746 7.35298 4.45714 7.06014 4.31523 6.71753C4.17331 6.37492 4.13618 5.99792 4.20853 5.63421C4.28087 5.27049 4.45945 4.9364 4.72167 4.67417C4.9839 4.41195 5.31799 4.23337 5.68171 4.16103C6.04542 4.08868 6.42242 4.12581 6.76503 4.26773C7.10764 4.40964 7.40048 4.64996 7.60651 4.95831C7.81253 5.26665 7.9225 5.62916 7.9225 6C7.9225 6.49728 7.72496 6.97419 7.37333 7.32583C7.02169 7.67746 6.54478 7.875 6.0475 7.875ZM17.83 17.4425C17.8302 17.4987 17.8192 17.5544 17.7978 17.6063C17.7764 17.6582 17.7449 17.7054 17.7052 17.7452C17.6654 17.7849 17.6182 17.8164 17.5663 17.8378C17.5144 17.8592 17.4587 17.8702 17.4025 17.87H15.2775C15.2213 17.8702 15.1656 17.8592 15.1137 17.8378C15.0618 17.8164 15.0146 17.7849 14.9748 17.7452C14.9351 17.7054 14.9036 17.6582 14.8822 17.6063C14.8608 17.5544 14.8498 17.4987 14.85 17.4425V13.5612C14.85 12.9812 15.02 11.0212 13.3337 11.0212C12.0275 11.0212 11.7612 12.3625 11.7087 12.965V17.4475C11.7088 17.5598 11.6646 17.6676 11.5858 17.7476C11.5069 17.8276 11.3998 17.8734 11.2875 17.875H9.235C9.17892 17.875 9.12339 17.8639 9.07159 17.8424C9.0198 17.8209 8.97275 17.7894 8.93315 17.7497C8.89356 17.71 8.86218 17.6629 8.84084 17.611C8.81949 17.5591 8.80859 17.5036 8.80875 17.4475V9.08875C8.80859 9.03267 8.81949 8.97711 8.84084 8.92525C8.86218 8.87339 8.89356 8.82625 8.93315 8.78654C8.97275 8.74682 9.0198 8.71531 9.07159 8.69382C9.12339 8.67232 9.17892 8.66125 9.235 8.66125H11.2875C11.4009 8.66125 11.5096 8.70629 11.5898 8.78646C11.67 8.86663 11.715 8.97537 11.715 9.08875V9.81125C12.2 9.0825 12.9188 8.5225 14.4525 8.5225C17.85 8.5225 17.8275 11.695 17.8275 13.4375L17.83 17.4425Z"
						fill="#262626" />
				</svg>
			</a>
		</div>
	</div>
	<div id="main-content">
		<div class="blog_row flex">
			<div class="blog_row_left">
				<div class="sidebar_sticky">
					<div class="sidebar" style="display: none;">
						<div class="sidebar_head flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
								fill="none">
								<path
									d="M15 19.9999C14.4067 19.9999 13.8266 19.824 13.3333 19.4943C12.8399 19.1647 12.4554 18.6961 12.2284 18.148C12.0013 17.5998 11.9419 16.9966 12.0576 16.4146C12.1734 15.8327 12.4591 15.2981 12.8787 14.8786C13.2982 14.459 13.8328 14.1733 14.4147 14.0576C14.9967 13.9418 15.5999 14.0012 16.1481 14.2283C16.6962 14.4553 17.1648 14.8399 17.4944 15.3332C17.8241 15.8265 18 16.4066 18 16.9999C18 17.7956 17.6839 18.5586 17.1213 19.1212C16.5587 19.6838 15.7956 19.9999 15 19.9999ZM20 6.99991C20 7.26512 20.1054 7.51948 20.2929 7.70701C20.4804 7.89455 20.7348 7.99991 21 7.99991H27C26.9997 7.86036 26.9701 7.72243 26.9133 7.59499C26.8565 7.46754 26.7736 7.3534 26.67 7.25991L21.11 2.25991C20.9266 2.09321 20.6878 2.00056 20.44 1.99991H20V6.99991ZM27 9.99991V26.9999C26.9661 27.8231 26.6091 28.5998 26.0063 29.1614C25.4035 29.723 24.6035 30.0243 23.78 29.9999H8.22C7.39647 30.0243 6.59654 29.723 5.99373 29.1614C5.39092 28.5998 5.03386 27.8231 5 26.9999V4.99991C5.03386 4.17671 5.39092 3.40006 5.99373 2.83844C6.59654 2.27682 7.39647 1.97552 8.22 1.99991H18V6.99991C18 7.79556 18.3161 8.55862 18.8787 9.12123C19.4413 9.68384 20.2044 9.99991 21 9.99991H27ZM21.71 22.2899L19.17 19.7499C19.8522 18.716 20.1262 17.4656 19.9391 16.2411C19.752 15.0166 19.117 13.9051 18.1572 13.1221C17.1973 12.3391 15.981 11.9402 14.7439 12.0028C13.5067 12.0654 12.3369 12.585 11.461 13.4609C10.5851 14.3368 10.0655 15.5066 10.0029 16.7438C9.94029 17.9809 10.3392 19.1972 11.1222 20.1571C11.9052 21.1169 13.0167 21.7519 14.2412 21.939C15.4657 22.1261 16.716 21.8521 17.75 21.1699L20.29 23.7099C20.383 23.8036 20.4936 23.878 20.6154 23.9288C20.7373 23.9796 20.868 24.0057 21 24.0057C21.132 24.0057 21.2627 23.9796 21.3846 23.9288C21.5064 23.878 21.617 23.8036 21.71 23.7099C21.8037 23.6169 21.8781 23.5063 21.9289 23.3845C21.9797 23.2626 22.0058 23.1319 22.0058 22.9999C22.0058 22.8679 21.9797 22.7372 21.9289 22.6153C21.8781 22.4935 21.8037 22.3829 21.71 22.2899Z"
									fill="#FDB948" />
							</svg>
							<h3>Table of Contents:</h3>
						</div>
						<div class="sidebar_content">
							<ul></ul>
						</div>
					</div>

					<div class="sidebar_calculate" style="<?php
					if ($et_pb_calculate_value == 'none') {
						echo "display: none!important";
					}
					?>">
						<div class="sidebar_calculate_head">
							<?php echo $et_pb_calculate_title; ?>
						</div>
						<div class="sidebar_calculate_body">
							<label><b>
									<?php echo $et_pb_calculate_label; ?>
								</b></label>
							<?php echo $et_pb_calculate_field; ?>

							<a href="<?php echo $et_pb_calculate_link ?>" class="btn_yellow" target="_blank" <?php
							   if ($et_pb_calculate_link == '#') {
								   echo "onclick='scrollToSection(event)'";
							   }
							   ?>>
								<?php
								if ($et_pb_calculate_value2 == 1) {
									echo 'Compare Suburbs';
								} else {
									echo 'Calculate';
								}
								?>
								<img src="<?php echo $assets; ?>16_arrow_r_black.svg" alt="arrow image"
									style="margin: 0 0 0 8px!important;">
							</a>
						</div>
					</div>

				</div>
			</div>
			<div>
				<?php
				if (et_builder_is_product_tour_enabled()):
					// load fullwidth page in Product Tour mode
					while (have_posts()):
						the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
								<?php
								the_content();
								?>
							</div> <!-- .entry-content -->

						</article> <!-- .et_pb_post -->

					<?php endwhile;
				else:
					?>

					<!-- <div id="post_exerpt_link" class="single_exerpt">
					
				</div> -->
					<?php while (have_posts()):
						the_post(); ?>
						<?php if (et_get_option('divi_integration_single_top') <> '' && et_get_option('divi_integrate_singletop_enable') == 'on')
							echo (et_get_option('divi_integration_single_top')); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class('et_pb_post'); ?>>
							<?php if (('off' !== $show_default_title && $is_page_builder_used) || !$is_page_builder_used) { ?>
								<div class="et_post_meta_wrapper">

									<?php
									if (!post_password_required()):

										$thumb = '';

										$width = (int) apply_filters('et_pb_index_blog_image_width', 1080);

										$height = (int) apply_filters('et_pb_index_blog_image_height', 675);
										$classtext = 'et_featured_image';
										$titletext = get_the_title();

										$post_format = et_pb_post_format();

										if ('video' === $post_format && false !== ($first_video = et_get_first_video())) {
											printf(
												'<div class="et_main_video_container">
											%1$s
										</div>',
												$first_video
											);
										} else if (!in_array($post_format, array('gallery', 'link', 'quote')) && 'on' === et_get_option('divi_thumbnails', 'on') && '' !== $thumb) {
											print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height);
										} else if ('gallery' === $post_format) {
											et_pb_gallery_images();
										}
										?>

										<?php
										$text_color_class = et_divi_get_post_text_color();

										$inline_style = et_divi_get_post_bg_inline_style();

										switch ($post_format) {
											case 'audio':
												$audio_player = et_pb_get_audio_player();

												if ($audio_player) {
													printf(
														'<div class="et_audio_content%1$s"%2$s>
													%3$s
												</div>',
														esc_attr($text_color_class),
														$inline_style,
														$audio_player
													);
												}

												break;
											case 'quote':
												printf(
													'<div class="et_quote_content%2$s"%3$s>
												%1$s
											</div> <!-- .et_quote_content -->',
													et_get_blockquote_in_content(),
													esc_attr($text_color_class),
													$inline_style
												);

												break;
											case 'link':
												printf(
													'<div class="et_link_content%3$s"%4$s>
												<a href="%1$s" class="et_link_main_url">%2$s</a>
											</div> <!-- .et_link_content -->',
													esc_url(et_get_link_url()),
													esc_html(et_get_link_url()),
													esc_attr($text_color_class),
													$inline_style
												);

												break;
										}

									endif;
									?>
								</div> <!-- .et_post_meta_wrapper -->
							<?php } ?>

							<div class="entry-content">
								<?php
								// do_action('et_before_content');

								the_content();

								wp_link_pages(array('before' => '<div class="page-links">' . esc_html__('Pages:', 'Divi'), 'after' => '</div>'));
								?>
							</div> <!-- .entry-content 2 -->

			
						</article> <!-- .et_pb_post -->

					<?php endwhile; ?>


				<?php endif; ?>
			</div>
		</div>
		<div class="single_bottom_choose">
			<h2 class="single_bottom_title text-center">
				Why Choose <span class="c-yellow">Hunter Galloway</span> As Your Mortgage Broker?
			</h2>
			<div class="single_bottom_inner flex">
				<div class="single_bottom_item">
					<div>

						<div class="single_bottom_image">
							<svg xmlns="http://www.w3.org/2000/svg" width="40" height="50" viewBox="0 0 40 50"
								fill="none">
								<path
									d="M4.37124 19.4165C4.37124 19.4165 5.60673 17.426 4.8077 14.6616C4.00589 11.8989 2.13871 10.8496 2.13871 10.8496C2.13871 10.8496 0.741467 13.2218 1.52236 15.9148C2.30186 18.6095 4.37124 19.4165 4.37124 19.4165Z"
									fill="#FDB948" />
								<path
									d="M7.80199 20.8286C7.80199 20.8286 9.962 20.6125 11.1989 18.1984C12.4358 15.7861 11.4903 13.0879 11.4903 13.0879C11.4903 13.0879 9.4851 13.5968 8.21475 16.0737C6.94579 18.5487 7.80199 20.8286 7.80199 20.8286Z"
									fill="#FDB948" />
								<path
									d="M8.02067 24.0186C7.02084 26.6802 8.10712 28.8032 8.10712 28.8032C8.10712 28.8032 10.2281 28.2349 11.2014 25.6431C12.1734 23.0477 10.9546 20.5273 10.9546 20.5273C10.9546 20.5273 9.02049 21.357 8.02067 24.0186Z"
									fill="#FDB948" />
								<path
									d="M12.9018 26.1621C12.9018 26.1621 11.0374 27.2184 10.2426 29.9828C9.44773 32.7524 10.6874 34.736 10.6874 34.736C10.6874 34.736 12.754 33.922 13.5293 31.2256C14.3032 28.5291 12.9018 26.1621 12.9018 26.1621Z"
									fill="#FDB948" />
								<path
									d="M14.4576 40.7208C14.4576 40.7208 16.2509 39.1956 16.3722 36.3354C16.4921 33.4733 14.6026 31.7129 14.6026 31.7129C14.6026 31.7129 13.0603 33.3949 12.9362 36.3301C12.8135 39.2636 14.4576 40.7208 14.4576 40.7208Z"
									fill="#FDB948" />
								<path
									d="M7.12744 14.0892C7.12744 14.0892 9.03924 13.2909 9.59981 10.4376C10.1618 7.58432 9.07549 5.41602 9.07549 5.41602C9.07549 5.41602 6.86109 6.41999 6.31307 9.20358C5.76645 11.9854 7.12744 14.0892 7.12744 14.0892Z"
									fill="#FDB948" />
								<path
									d="M4.37107 25.4834C4.37107 25.4834 5.08085 23.1251 3.66547 20.7807C2.24731 18.4346 0.216982 18.1191 0.216982 18.1191C0.216982 18.1191 -0.558336 20.901 0.822177 23.1878C2.20269 25.4764 4.37107 25.4834 4.37107 25.4834Z"
									fill="#FDB948" />
								<path
									d="M5.95484 31.7054C5.95484 31.7054 6.22676 29.2094 4.4307 27.3165C2.63185 25.4218 0.595947 25.6798 0.595947 25.6798C0.595947 25.6798 0.333789 28.608 2.08523 30.4539C3.83945 32.298 5.95484 31.7054 5.95484 31.7054Z"
									fill="#FDB948" />
								<path
									d="M8.36588 36.8519C8.36588 36.8519 8.02424 34.3699 5.85168 33.2474C3.67772 32.1214 1.80078 33.1376 1.80078 33.1376C1.80078 33.1376 2.26095 36.0275 4.37774 37.1256C6.49452 38.2184 8.36588 36.8519 8.36588 36.8519Z"
									fill="#FDB948" />
								<path
									d="M9.42339 38.9876C7.1588 38.1962 5.39062 39.4843 5.39062 39.4843C5.39062 39.4843 6.12272 42.2836 8.32875 43.0557C10.5376 43.8279 12.2639 42.1912 12.2639 42.1912C12.2639 42.1912 11.688 39.7771 9.42339 38.9876Z"
									fill="#FDB948" />
								<path
									d="M7.36267 15.7906L6.35587 15.1719C6.30288 15.3096 1.12387 29.0602 15.6764 44.6096L16.4043 43.5446C2.54901 28.7377 7.15908 16.3118 7.36267 15.7906Z"
									fill="#FDB948" />
								<path
									d="M35.6279 19.3911C35.6279 19.3911 34.391 17.4006 35.1915 14.6379C35.9905 11.8735 37.8591 10.8242 37.8591 10.8242C37.8591 10.8242 39.2549 13.1947 38.474 15.8894C37.6973 18.5841 35.6279 19.3911 35.6279 19.3911Z"
									fill="#FDB948" />
								<path
									d="M32.1993 20.8032C32.1993 20.8032 30.0393 20.5853 28.801 18.173C27.5642 15.7607 28.5096 13.0625 28.5096 13.0625C28.5096 13.0625 30.5148 13.5715 31.7866 16.0465C33.0555 18.5234 32.1993 20.8032 32.1993 20.8032Z"
									fill="#FDB948" />
								<path
									d="M31.9795 23.9913C32.9794 26.6528 31.8931 28.7758 31.8931 28.7758C31.8931 28.7758 29.7721 28.2076 28.7974 25.6157C27.8268 23.0204 29.0442 20.5 29.0442 20.5C29.0442 20.5 30.9797 21.3314 31.9795 23.9913Z"
									fill="#FDB948" />
								<path
									d="M27.0994 26.1367C27.0994 26.1367 28.9624 27.1912 29.7586 29.9609C30.5535 32.7288 29.3124 34.7123 29.3124 34.7123C29.3124 34.7123 27.2472 33.8966 26.4719 31.2002C25.6966 28.5037 27.0994 26.1367 27.0994 26.1367Z"
									fill="#FDB948" />
								<path
									d="M25.5398 40.6932C25.5398 40.6932 23.7479 39.1698 23.6266 36.3078C23.5066 33.4458 25.3975 31.6836 25.3975 31.6836C25.3975 31.6836 26.937 33.3656 27.0625 36.3026C27.1866 39.2395 25.5398 40.6932 25.5398 40.6932Z"
									fill="#FDB948" />
								<path
									d="M32.8691 14.0636C32.8691 14.0636 30.9601 13.2653 30.3995 10.412C29.8375 7.55872 30.9252 5.38867 30.9252 5.38867C30.9252 5.38867 33.1396 6.39265 33.6862 9.17798C34.2329 11.9581 32.8691 14.0636 32.8691 14.0636Z"
									fill="#FDB948" />
								<path
									d="M35.6274 25.458C35.6274 25.458 34.9176 23.0997 36.3316 20.7553C37.7497 18.4092 39.7814 18.0938 39.7814 18.0938C39.7814 18.0938 40.5582 20.8756 39.1763 23.1624C37.7943 25.451 35.6274 25.458 35.6274 25.458Z"
									fill="#FDB948" />
								<path
									d="M34.0461 31.6798C34.0461 31.6798 33.7728 29.1838 35.5703 27.2874C37.3691 25.3945 39.405 25.6525 39.405 25.6525C39.405 25.6525 39.6672 28.5825 37.9143 30.4266C36.1615 32.2707 34.0461 31.6798 34.0461 31.6798Z"
									fill="#FDB948" />
								<path
									d="M31.6328 36.8261C31.6328 36.8261 31.9758 34.3423 34.1484 33.2181C36.3238 32.0921 38.1993 33.1083 38.1993 33.1083C38.1993 33.1083 37.7391 35.9982 35.6224 37.0945C33.5042 38.1926 31.6328 36.8261 31.6328 36.8261Z"
									fill="#FDB948" />
								<path
									d="M30.576 38.9634C32.8406 38.1738 34.6102 39.4602 34.6102 39.4602C34.6102 39.4602 33.8795 42.2577 31.672 43.0351C29.4646 43.8037 27.7383 42.167 27.7383 42.167C27.7383 42.167 28.3128 39.7547 30.576 38.9634Z"
									fill="#FDB948" />
								<path
									d="M32.6365 15.7653L33.6461 15.1465C33.6991 15.2842 38.8781 29.0348 24.3242 44.5824L23.5977 43.5175C37.4502 28.7141 32.8401 16.2847 32.6365 15.7653Z"
									fill="#FDB948" />
							</svg>
						</div>
						<div class="single_bottom_text_top">
							Mortgage Broker of the Year
						</div>
						<div class="single_bottom_text_bottom">
							in 2017, 2018 and 2019
						</div>
					</div>
				</div>
				<div class="single_bottom_item">
					<div>

						<div class="single_bottom_image">
							<svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50"
								fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd"
									d="M25.5408 3.83008C13.8443 3.83008 4.33203 13.3424 4.33203 25.0389C4.33203 36.7354 13.8443 46.2476 25.5408 46.2476C25.5417 46.2476 25.5427 46.2476 25.5436 46.2476C27.987 46.2442 30.3998 45.8148 32.6794 44.9939L31.8703 44.1848C31.4107 43.7281 31.0499 43.2009 30.7353 42.6466C29.057 43.1479 27.3085 43.4174 25.5491 43.4198C25.5482 43.4198 25.5473 43.4198 25.5463 43.4198H25.5408C20.7105 43.4198 15.96 41.4498 12.5449 38.0348C9.12986 34.6197 7.15987 29.8691 7.15987 25.0389C7.15987 20.2086 9.12986 15.458 12.5449 12.043C15.96 8.62791 20.7105 6.65792 25.5408 6.65792C30.3711 6.65792 35.1217 8.62791 38.5367 12.043C41.9518 15.458 43.9218 20.2086 43.9218 25.0389V25.0444C43.9218 25.0453 43.9218 25.0462 43.9218 25.0471C43.9182 26.8053 43.6469 28.5507 43.1458 30.2278C43.7018 30.5429 44.2316 30.9074 44.6895 31.3684L45.4931 32.172C46.3124 29.8937 46.7446 27.4834 46.7496 25.0416C46.7496 25.0407 46.7496 25.0398 46.7496 25.0389C46.7496 13.3424 37.2374 3.83008 25.5408 3.83008ZM25.5408 9.48575C21.4872 9.48575 17.4111 11.1755 14.5443 14.0423C11.6775 16.9091 9.98771 20.9852 9.98771 25.0389C9.98771 29.0925 11.6775 33.1686 14.5443 36.0354C17.4111 38.9022 21.4872 40.592 25.5408 40.592H25.5436C27.0009 40.5898 28.4579 40.3618 29.8627 39.9513C29.8336 39.6928 29.7856 39.4378 29.7853 39.1753V36.3475C29.7853 36.0133 29.8178 35.6867 29.8654 35.3643L28.8492 34.3453C27.8099 34.7188 26.6998 34.9391 25.5353 34.9391C20.0858 34.9391 15.6406 30.4938 15.6406 25.0444C15.6406 19.5949 20.0858 15.1387 25.5353 15.1387C30.9847 15.1387 35.441 19.5949 35.441 25.0444C35.441 26.205 35.2213 27.3118 34.85 28.3472L35.8663 29.3635C36.189 29.3154 36.5149 29.2806 36.8494 29.2806H39.6772C39.9382 29.2808 40.1934 29.3292 40.4505 29.3579C40.8611 27.9547 41.0907 26.5004 41.0939 25.0444V25.0389C41.0939 20.9852 39.4042 16.9091 36.5373 14.0423C33.6705 11.1755 29.5945 9.48575 25.5408 9.48575ZM25.5353 17.9665C21.6141 17.9665 18.4685 21.1232 18.4685 25.0444C18.4685 28.9656 21.6141 32.1112 25.5353 32.1112C25.8755 32.1112 26.2078 32.0797 26.535 32.0339L22.5418 28.0379C21.9364 27.4499 21.5202 26.6946 21.3464 25.8688C21.1726 25.043 21.2491 24.184 21.566 23.4019C21.883 22.6197 22.426 21.9499 23.1257 21.478C23.8254 21.0061 24.6499 20.7537 25.4939 20.7529C26.0622 20.7518 26.6249 20.865 27.1486 21.0856C27.6723 21.3061 28.1464 21.6297 28.5426 22.037L32.5358 26.033C32.5808 25.7095 32.6132 25.3808 32.6132 25.0444C32.6132 21.1232 29.4565 17.9665 25.5353 17.9665ZM25.527 23.6084C25.4809 23.608 25.4348 23.6098 25.3889 23.6139C25.1207 23.6405 24.8657 23.7433 24.6539 23.9101C24.4421 24.0768 24.2824 24.3007 24.1936 24.5552C24.1048 24.8097 24.0906 25.0843 24.1526 25.3466C24.2147 25.6089 24.3505 25.8481 24.5439 26.0358L33.0385 34.5386C32.7738 35.0903 32.6131 35.6988 32.6132 36.3475V39.1753C32.6141 40.3034 33.0638 41.3876 33.8642 42.1826L36.6837 45.0105C38.3282 46.6533 41.0401 46.6533 42.6846 45.0105L45.5124 42.1826C47.1552 40.5382 47.1552 37.8263 45.5124 36.1818L42.6846 33.3622C41.8895 32.5618 40.8054 32.1122 39.6772 32.1112H36.8494C36.2008 32.1111 35.5923 32.2718 35.0406 32.5365L26.5377 24.0419C26.4068 23.9058 26.2498 23.7973 26.0763 23.7229C25.9027 23.6484 25.7159 23.6095 25.527 23.6084Z"
									fill="#FDB948" />
							</svg>
						</div>
						<div class="single_bottom_text_top">
							The highest rated and most reviewed
						</div>
						<div class="single_bottom_text_bottom">
							Mortgage Broker in Brisbane on Google
						</div>
					</div>
				</div>
				<div class="single_bottom_item">
					<div>

						<div class="single_bottom_image">
							<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 50 50"
								fill="none">
								<path
									d="M46.5833 19.1336L39.901 17.743L36.6924 11.7391C36.522 11.4322 36.2097 11.25 35.8689 11.25C35.5282 11.25 35.2158 11.4322 35.0455 11.7391L31.6854 17.743L31.25 17.8293L38.3109 19.2967C39.2858 19.4885 40.0808 20.2078 40.3837 21.1669C40.6866 22.1356 40.4784 23.1522 39.8158 23.9003L34.6953 29.5684L34.8846 31.2564L35.8689 30.8056L42.0874 33.6637C42.2105 33.7212 42.343 33.75 42.4755 33.75C42.6743 33.75 42.8636 33.6925 43.0339 33.5678C43.3084 33.3664 43.4504 33.0307 43.4125 32.6854L42.6553 25.8184L47.2553 20.7257C47.4825 20.4668 47.5582 20.1023 47.4541 19.7762C47.3405 19.4501 47.066 19.2008 46.5833 19.1336Z"
									fill="#FDB948" />
								<path
									d="M7.34468 25.8184L6.58748 32.6854C6.54962 33.0307 6.69159 33.3664 6.96608 33.5678C7.13645 33.6925 7.32575 33.75 7.52451 33.75C7.65702 33.75 7.78953 33.7212 7.91258 33.6637L14.1311 30.8056L15.1154 31.2564L15.3047 29.5684L10.2031 23.9194C9.52163 23.1522 9.3134 22.1355 9.60681 21.1861C9.91916 20.2078 10.7142 19.4885 11.6891 19.2871L18.75 17.8293L18.3146 17.743L14.9545 11.7391C14.7842 11.4322 14.4718 11.25 14.1311 11.25C13.7903 11.25 13.478 11.4322 13.3076 11.7391L9.93809 17.743L3.2558 19.1336C2.92452 19.2008 2.65004 19.4501 2.54592 19.7762C2.44181 20.1023 2.51753 20.4668 2.74469 20.7257L7.34468 25.8184Z"
									fill="#FDB948" />
								<path
									d="M38.7083 21.6573C38.6143 21.3514 38.3605 21.1146 38.0598 21.0554L29.8734 19.309L25.7473 11.6718C25.4372 11.1094 24.5631 11.1094 24.2529 11.6718L20.1268 19.309L11.9405 21.0554C11.6397 21.1146 11.3859 21.3514 11.292 21.6573C11.198 21.9731 11.2638 22.3086 11.4705 22.5552L17.1192 29.0182L16.1793 37.7407C16.1417 38.0663 16.2733 38.3821 16.5271 38.5695C16.7809 38.7669 17.1098 38.8064 17.3824 38.6682L24.9954 35.0371L32.6085 38.6682C32.7212 38.7176 32.8434 38.7472 32.9562 38.7472C33.1348 38.7472 33.304 38.688 33.4638 38.5695C33.7175 38.3821 33.8397 38.0663 33.8115 37.7407L32.8716 29.0182L38.5203 22.5552C38.7365 22.3086 38.8023 21.9731 38.7083 21.6573Z"
									fill="#FDB948" />
							</svg>
						</div>
						<div class="single_bottom_text_top">
							One of the lowest rejection rates
						</div>
						<div class="single_bottom_text_bottom">
							<div class="hg_adv_text">
								<span class="home_banner_market_wrapper">
									<p class="home_banner_market">across Mortgage Brokers in
										Australia
									</p>
									<div class="home_banner_market_dd">
										<div class="inner">
											Approximately 40% of home loan applications were
											rejected in
											December 2018 based on a survey of 52,000 households
											completed by <a
												href='https://www.mortgagebusiness.com.au/breaking-news/13042-home-loan-rejection-rate-hits-40'
												alt=''>'DigitalFinance Analytics DFA'</a>. In 2017
											to
											2018 Hunter Galloway submitted 342 home loan
											applications
											and had 8 applications rejected, giving a 2.33%
											rejection
											rate.
										</div>
									</div>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="single_bottom_item">
					<div>

						<div class="single_bottom_image">
							<svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50"
								fill="none">
								<path
									d="M37.9749 25.7818C38.0751 24.0145 37.8008 22.246 37.17 20.5921C36.5391 18.9382 35.566 17.4362 34.3143 16.1845C33.0627 14.9328 31.5607 13.9597 29.9067 13.3289C28.2528 12.6981 26.4843 12.4238 24.717 12.5241C13.6359 13.2435 8.94011 27.0743 17.2328 34.3678C24.8707 41.2254 37.3745 36.0915 37.9749 25.7818ZM25.4983 24.2193C29.6693 24.2783 30.2985 30.206 26.2795 31.1568L26.2796 32.0318C26.2796 32.239 26.1973 32.4377 26.0507 32.5842C25.9042 32.7308 25.7055 32.8131 25.4983 32.8131C25.2911 32.8131 25.0924 32.7308 24.9459 32.5842C24.7994 32.4377 24.7171 32.239 24.7171 32.0318V31.1568C23.9409 30.9808 23.2476 30.5463 22.7508 29.9246C22.254 29.3029 21.9831 28.5308 21.9827 27.7349C21.9867 27.5304 22.0708 27.3355 22.2168 27.1923C22.3629 27.049 22.5594 26.9688 22.764 26.9688C22.9686 26.9688 23.165 27.0491 23.3111 27.1923C23.4572 27.3356 23.5412 27.5304 23.5452 27.735C23.5452 28.1213 23.6598 28.4989 23.8744 28.8201C24.089 29.1413 24.394 29.3916 24.7509 29.5394C25.1078 29.6872 25.5005 29.7259 25.8794 29.6505C26.2582 29.5752 26.6063 29.3891 26.8794 29.116C27.1525 28.8428 27.3386 28.4948 27.4139 28.116C27.4893 27.7371 27.4506 27.3444 27.3028 26.9875C27.1549 26.6306 26.9046 26.3256 26.5834 26.111C26.2622 25.8964 25.8846 25.7818 25.4983 25.7818C24.6343 25.7826 23.8003 25.4649 23.1557 24.8894C22.5112 24.314 22.1014 23.5211 22.0048 22.6625C21.9081 21.8039 22.1313 20.9398 22.6316 20.2354C23.132 19.531 23.8745 19.0357 24.7171 18.8443V17.9693C24.7171 17.7621 24.7994 17.5634 24.9459 17.4169C25.0924 17.2704 25.2911 17.1881 25.4983 17.1881C25.7055 17.1881 25.9042 17.2704 26.0507 17.4169C26.1973 17.5634 26.2796 17.7621 26.2796 17.9693V18.8443C27.0557 19.0203 27.749 19.4548 28.2459 20.0765C28.7427 20.6983 29.0135 21.4703 29.0139 22.2662C29.0139 22.4734 28.9316 22.6721 28.7851 22.8186C28.6386 22.9651 28.4399 23.0474 28.2327 23.0474C28.0255 23.0474 27.8268 22.9651 27.6803 22.8186C27.5338 22.6721 27.4514 22.4734 27.4514 22.2662C27.4514 21.8799 27.3369 21.5023 27.1223 21.1811C26.9077 20.8599 26.6026 20.6096 26.2457 20.4617C25.8889 20.3139 25.4962 20.2752 25.1173 20.3506C24.7384 20.426 24.3904 20.612 24.1173 20.8851C23.8441 21.1583 23.6581 21.5063 23.5827 21.8852C23.5074 22.264 23.546 22.6567 23.6939 23.0136C23.8417 23.3705 24.092 23.6755 24.4132 23.8902C24.7344 24.1048 25.112 24.2193 25.4983 24.2193Z"
									fill="#FDB948" />
								<path
									d="M44.25 21.875C43.5573 21.8744 42.8841 22.1044 42.3367 22.5288C41.7892 22.9532 41.3986 23.5478 41.2266 24.2188H39.5391C39.5547 24.4766 39.5625 24.7344 39.5625 25C39.5625 25.2656 39.5547 25.5234 39.5391 25.7813H41.2266C41.3986 26.4522 41.7892 27.0468 42.3367 27.4712C42.8841 27.8956 43.5573 28.1256 44.25 28.125C48.3706 28.0219 48.3719 21.9782 44.25 21.875Z"
									fill="#FDB948" />
								<path
									d="M38.7578 35.1328C38.1989 35.1295 37.65 35.2809 37.1719 35.5703L35.9687 34.3672C35.6294 34.7612 35.2612 35.1294 34.8672 35.4687L36.0703 36.6719C35.7965 37.147 35.6519 37.6855 35.6507 38.2339C35.6495 38.7823 35.7919 39.3214 36.0636 39.7977C36.3353 40.274 36.727 40.671 37.1996 40.949C37.6723 41.2271 38.2095 41.3766 38.7578 41.3827C42.8786 41.2798 42.8783 35.2353 38.7578 35.1328Z"
									fill="#FDB948" />
								<path
									d="M26.2801 40.7266V39.0391C26.0223 39.0547 25.7645 39.0625 25.4989 39.0625C25.2332 39.0625 24.9754 39.0547 24.7176 39.0391V40.7266C23.9815 40.9167 23.3399 41.3688 22.9133 41.9981C22.4866 42.6274 22.3041 43.3907 22.3999 44.1449C22.4958 44.8991 22.8634 45.5925 23.4339 46.0951C24.0044 46.5977 24.7386 46.875 25.4989 46.875C26.2592 46.875 26.9934 46.5977 27.5639 46.0951C28.1343 45.5925 28.502 44.8991 28.5978 44.1449C28.6936 43.3907 28.5111 42.6274 28.0844 41.9981C27.6578 41.3688 27.0162 40.9167 26.2801 40.7266Z"
									fill="#FDB948" />
								<path
									d="M24.7176 9.27343V10.9609C24.9832 10.9453 25.2332 10.9375 25.4989 10.9375C25.7645 10.9375 26.0223 10.9453 26.2801 10.9609V9.27343C27.0162 9.08329 27.6578 8.6312 28.0844 8.00191C28.5111 7.37262 28.6936 6.60932 28.5978 5.85509C28.502 5.10085 28.1343 4.40746 27.5639 3.90487C26.9934 3.40228 26.2592 3.125 25.4989 3.125C24.7386 3.125 24.0044 3.40228 23.4339 3.90487C22.8634 4.40746 22.4958 5.10085 22.3999 5.85509C22.3041 6.60932 22.4866 7.37262 22.9133 8.00191C23.3399 8.6312 23.9815 9.08329 24.7176 9.27343Z"
									fill="#FDB948" />
								<path
									d="M35.9688 15.6328L37.1719 14.4297C37.8266 14.8163 38.5998 14.9507 39.3466 14.8079C40.0934 14.665 40.7624 14.2546 41.2282 13.6537C41.694 13.0528 41.9246 12.3026 41.8768 11.5437C41.8289 10.7849 41.5059 10.0696 40.9682 9.53198C40.4306 8.99434 39.7153 8.67128 38.9565 8.62339C38.1977 8.5755 37.4475 8.80607 36.8465 9.27185C36.2456 9.73763 35.8352 10.4066 35.6923 11.1534C35.5494 11.9002 35.6839 12.6735 36.0704 13.3282L34.8672 14.5312C35.2612 14.8706 35.6294 15.2388 35.9688 15.6328Z"
									fill="#FDB948" />
								<path
									d="M12.2423 14.8675C12.7987 14.8704 13.345 14.7189 13.8204 14.43L15.0236 15.6331C15.3695 15.2402 15.7401 14.8697 16.1329 14.5237L14.9298 13.3206C16.7509 10.1686 12.6562 7.04422 10.0314 9.53163C9.60277 9.97204 9.31266 10.5284 9.1969 11.132C9.08114 11.7355 9.14482 12.3597 9.38007 12.9275C9.61531 13.4952 10.0118 13.9816 10.5205 14.3263C11.0292 14.6711 11.6278 14.8593 12.2423 14.8675Z"
									fill="#FDB948" />
								<path
									d="M11.4594 25.7813C11.4281 25.2609 11.4281 24.7391 11.4594 24.2188H9.77186C9.58171 23.4823 9.1295 22.8405 8.49998 22.4136C7.87047 21.9867 7.10687 21.8041 6.35233 21.8999C5.59779 21.9958 4.9041 22.3635 4.4013 22.9342C3.89849 23.5049 3.62109 24.2394 3.62109 25C3.62109 25.7606 3.89849 26.4951 4.4013 27.0658C4.9041 27.6365 5.59779 28.0043 6.35233 28.1001C7.10687 28.1959 7.87047 28.0133 8.49998 27.5864C9.1295 27.1595 9.58171 26.5177 9.77186 25.7813H11.4594Z"
									fill="#FDB948" />
								<path
									d="M15.0237 34.3672L13.8206 35.5703C13.1659 35.1855 12.3934 35.0525 11.6478 35.1962C10.9021 35.34 10.2344 35.7507 9.76975 36.3513C9.30509 36.9519 9.07532 37.7014 9.12347 38.4592C9.17162 39.2171 9.4944 39.9314 10.0313 40.4684C10.5683 41.0054 11.2826 41.3282 12.0404 41.3765C12.7983 41.4247 13.5477 41.195 14.1484 40.7304C14.7491 40.2658 15.1598 39.5982 15.3037 38.8525C15.4475 38.1069 15.3146 37.3344 14.9298 36.6797L16.1331 35.4766C15.7402 35.1306 15.3697 34.76 15.0237 34.3672Z"
									fill="#FDB948" />
							</svg>
						</div>
						<div class="single_bottom_text_top">
							We have direct access to 30+ banks
						</div>
						<div class="single_bottom_text_bottom">
							and lenders across Australia
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- #main-content -->
</div><!-- .container -->

<style>
	.btn_up {
		position: fixed;
		bottom: 10px;
		right: 10px;
		z-index: 9;
		opacity: 0;
		pointer-events: none;
	}

	.btn_up.active {
		opacity: 1;
		pointer-events: auto;
	}

	@media (max-width: 767px) {
		.btn_up {
			bottom: 70px;
		}

		.btn_up svg {
			width: 53px;
			height: 53px;
		}
	}
</style>
<a href="#" class="btn_up">
	<svg width="84" height="84" viewBox="0 0 116 116" fill="none" xmlns="http://www.w3.org/2000/svg">
		<circle cx="58" cy="58" r="50" fill="#FDB948" stroke="white" stroke-width="16" />
		<path d="M70.0487 65.875L58 53.7065L45.9513 65.875L42.25 62.1288L58 46.1875L73.75 62.1288L70.0487 65.875Z"
			fill="white" />
	</svg>
</a>
<script>

	//scroll up
	$el('.btn_up').style.right = (window.innerWidth - $el('#main-content').clientWidth) / 2 + 'px';

	$el('.btn_up').addEventListener('click', () => {
		jQuery(function ($) {
			$('html, body').animate({
				scrollTop: 0
			}, 250);
		})
	})

	//Deposit Calculator
	$$el('.blog_row .hc_input_field input').forEach((item, index) => {
		let parent = item.parentElement;
		if (item.id == 'hcdc_deposit') {
			parent.setAttribute('data-title', '$');
			item.closest('.hc_input_row').querySelectorAll('.hc_input_cell .hc_input_label')[index].innerHTML = 'Deposit <span>(required)</span>';
		} else if (item.id == 'hcdc_rate') {
			parent.setAttribute('data-title', '%')
			item.closest('.hc_input_row').querySelectorAll('.hc_input_cell .hc_input_label')[index].innerHTML = 'Rate <span>(required)</span>';
		} else if (item.id == 'hcdc_term') {
			parent.setAttribute('data-title', 'Yrs')
			item.closest('.hc_input_row').querySelectorAll('.hc_input_cell .hc_input_label')[index].innerHTML = 'Term <span>(required)</span>';
		}
	})


	$el('.blog_row #hc_deposit_calculator .hc_result_section .hc_result_row')?.after($el('.blog_row #hc_deposit_calculator .hc_result_section .hc_result_row .hc_info_txt'))

	//header fixed
	window.addEventListener('scroll', (e) => {
		if (window.scrollY > 20) {
			$el('header').classList.add('fixed')
			$el('header').style = ''
		} else {
			$el('header').classList.remove('fixed')
		}

		if ($el('#main-content').getBoundingClientRect().top < -100) {
			$el('.sidebar_content').classList.add('collapse')
		} else {
			$el('.sidebar_content').classList.remove('collapse')
		}

		if ($el('.single_banner').getBoundingClientRect().bottom < 0 && $el('#main-footer').getBoundingClientRect().bottom >= window.innerHeight + 50) {
			$el('.btn_up').classList.add('active')
		} else {
			$el('.btn_up').classList.remove('active')
		}
	})
	$el('.sidebar_content ul').addEventListener('scroll', (e) => {
		const element = e.target;
		const scrollPosition = element.scrollTop + element.clientHeight;
		const maxScroll = element.scrollHeight;

		if (scrollPosition >= maxScroll) {
			$el('.sidebar_content.collapse').classList.add('hide_gradient');
		} else {
			$el('.sidebar_content.collapse').classList.remove('hide_gradient');
		}
	});

	// calculate banner/sidebar
	$$el('.input-banner').forEach(item => {
		item.addEventListener('input', (e) => {
			$$el('.input-banner').forEach(el => {
				el.value = e.target.value;
			});
		})
	});
	<?php if ($et_pb_calculate_value != 1) { ?>
		$$el("#et-main-area .btn_yellow").forEach(item => {
			item.addEventListener("click", (e) => {
				e.preventDefault();

				let value = e.currentTarget.parentElement.querySelector("input").value;


				if ($el('.hntr_calculators') && $el('#hcdc_deposit')) {
					jQuery(function ($) {
						$('html, body').animate({
							scrollTop: $('.hntr_calculators').offset().top - 75
						}, 250);
					})

					if (value != '') {
						$el('#hcdc_deposit').value = value;
					}
				} else if ($el('.elementor-widget-shortcode #equity_loan_amount')) {
					jQuery(function ($) {
						$('html, body').animate({
							scrollTop: $('.elementor-widget-shortcode').offset().top - 171
						}, 250);
					})
					$el('.elementor-widget-shortcode #equity_loan_amount').value = value;

				} else if ($el('.mercuryCalculator')) {
					jQuery(function ($) {
						$('html, body').animate({
							scrollTop: $('.mercuryCalculator').offset().top - 171
						}, 250);
					})
				} else {
					localStorage.setItem("scrollTo", value);
					window.open(e.currentTarget.href, '_blank');
				}
			})
		});
	<?php } ?>

	function isElementInViewport(el) {
		var rect = el.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
	}

	function setActiveTOCItem() {
		var headings = document.querySelectorAll('#main-content h2.elementor-heading-title');
		var tocItems = document.querySelectorAll('.sidebar_content .elementor-toc__list-item a');

		var visibleIndex = -1;

		headings.forEach(function(heading, index) {
			if (isElementInViewport(heading) && visibleIndex === -1) {
				visibleIndex = index;
			}
		});

		if (visibleIndex !== -1) {
			tocItems.forEach(function(item, index) {
				if (index === visibleIndex) {
					item.classList.add('elementor-item-active');
				} else {
					item.classList.remove('elementor-item-active');
				}
			});
		}
	}

	document.addEventListener('scroll', setActiveTOCItem);

	//mut
	const optionMut = {
		childList: true,
		subtree: true,
		attributeFilter: ['style']
	}

	const globalMutation = new MutationObserver((mutations) => {
		if (!$el('.elementor-editor-active')) {

			//Deposit Calculator
			mutations.forEach((mutation) => {
				if (mutation.attributeName === 'style') {
					const element = mutation.target;
					if (element.matches('#hc_down_slider .noUi-origin')) {

						let leftStyleSlider = $el('#hc_down_slider .noUi-origin').style.left;

						console.log(leftStyleSlider)
						$el('#hc_down_slider_result').style.left = leftStyleSlider;

					}
				}
			});

			//Table of Contents
			if ($el('.elementor-widget-table-of-contents ul li a') && $el('.sidebar_content ul').innerHTML == '') {
				$el('.sidebar_content ul').innerHTML = $el('.elementor-widget-table-of-contents ul').innerHTML;
				$el('.sidebar').style = '';

				$$el('.sidebar_content a').forEach((element, index) => {
					element.addEventListener('click', (e) => {
						e.preventDefault();

						element.closest('ul').querySelector('.elementor-item-active')?.classList.remove('elementor-item-active');
						element.classList.add('elementor-item-active');

						jQuery(function ($) {
							$('html, body').animate({
								scrollTop: $('h2.elementor-heading-title').eq(index).offset().top - 75
							}, 250);
						})
					})
				});
			}

			if ($el('.blog_row #hc_deposit_calculator a.hc_result_button') &&
				!$el('.blog_row #hc_deposit_calculator .hc_result_section .hc_info_txt + .blog_row #hc_deposit_calculator a.hc_result_button')
			) { //Deposit Calculator
				$el('.blog_row #hc_deposit_calculator .hc_result_section .hc_info_txt').after($el('.blog_row #hc_deposit_calculator a.hc_result_button'));
			}

			if (localStorage.getItem('scrollTo') != null) {

				let value = localStorage.getItem('scrollTo');

				if ($el('.elementor-widget-shortcode #equity_loan_amount')) {

					jQuery(function ($) {
						$('html, body').animate({
							scrollTop: $('.elementor-widget-shortcode').offset().top - 171
						}, 250);
					})
					$el('.elementor-widget-shortcode #equity_loan_amount').value = localStorage.getItem('scrollTo');

					localStorage.removeItem('scrollTo');

				}

				if ($el('.hntr_calculators') && $el('#hcdc_deposit')) {
					jQuery(function ($) {
						$('html, body').animate({
							scrollTop: $('.hntr_calculators').offset().top - 75
						}, 250);
					})

					if (value != '') {
						$el('#hcdc_deposit').value = value;
					}
					localStorage.removeItem('scrollTo');
				}
			}

			globalMutation.disconnect();

			globalMutation.observe(document.body, optionMut);
		}
	})

	globalMutation.observe(document.body, optionMut);

</script>
<?php

get_footer();
