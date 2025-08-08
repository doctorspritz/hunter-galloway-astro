<?php
/*

Template name: Contact

*/
get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used(get_the_ID());

$assets = '/wp-content/themes/hunter-galloway/assets/img/img_new/';

$iconLocation = '
<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
	<g clip-path="url(#clip0_1243_37557)">
	<path d="M11.8145 5.72925C10.732 5.73107 9.69447 6.16202 8.92927 6.92762C8.16407 7.69322 7.73367 8.73099 7.73242 9.81343C7.73356 10.8959 8.16391 11.9338 8.92912 12.6995C9.69433 13.4652 10.7319 13.8962 11.8145 13.898C12.8973 13.8968 13.9355 13.466 14.7012 12.7003C15.4668 11.9345 15.8975 10.8963 15.8986 9.81343C15.8974 8.73062 15.4667 7.69252 14.701 6.92686C13.9354 6.1612 12.8973 5.7305 11.8145 5.72925ZM11.8145 12.1784C11.188 12.1773 10.5876 11.9279 10.1446 11.485C9.70166 11.042 9.45231 10.4416 9.45117 9.81515C9.45231 9.18871 9.70166 8.58826 10.1446 8.14531C10.5876 7.70235 11.188 7.453 11.8145 7.45187C12.4409 7.453 13.0413 7.70235 13.4843 8.14531C13.9272 8.58826 14.1766 9.18871 14.1777 9.81515C14.1766 10.4416 13.9272 11.042 13.4843 11.485C13.0413 11.9279 12.4409 12.1773 11.8145 12.1784Z" fill="#FDB948"/>
	<path d="M11.8137 1C6.95398 1 3 4.95312 3 9.81332V10.057C3 12.5148 4.40937 15.3791 7.18859 18.5699C8.443 20.0064 9.80877 21.3417 11.2732 22.5634L11.8137 23L12.3543 22.5634C13.8187 21.3417 15.1845 20.0064 16.4389 18.5699C19.2181 15.3791 20.6271 12.5152 20.6271 10.0574V9.81375C20.6271 4.95312 16.6735 1 11.8137 1ZM18.9075 10.0574C18.9075 14.2107 13.5557 19.2389 11.8137 20.7652C10.0714 19.2381 4.72004 14.2103 4.72004 10.0574V9.81375C4.72004 5.90187 7.90359 2.71875 11.8137 2.71875C15.7239 2.71875 18.9075 5.90102 18.9075 9.81289V10.0565V10.0574Z" fill="#FDB948"/>
	</g>
	<defs>
	<clipPath id="clip0_1243_37557">
	<rect width="17.6271" height="22" fill="white" transform="translate(3 1)"/>
	</clipPath>
	</defs>
</svg>';

?>

<style>
	.contact_form .wpcf7-response-output {
		position: fixed;
		top: 80px;
		right: 0;
		margin: 0;
		background: #ffc4c4;
		border-color: red;
		border-radius: 0;
		max-width: 300px;
		z-index: 99;
		pointer-events: none;
		opacity: 0;
		transition: all 0.2s ease;
	}

	#pum-14078 {
		display: none !important;
	}

	b {
		font-weight: 600;
	}

	h1,
	h2,
	h4,
	h5 {
		color: var(--Grey-dark, #262626);
		font-size: 40px;
		font-style: normal;
		font-weight: 700;
		line-height: 48px;
		padding-bottom: 0;
	}

	h2 {
		padding-bottom: 40px;
	}

	h4 {
		font-size: 24px;
		line-height: 32px;
		padding: 0;
	}

	h5 {
		font-size: 18px;
		line-height: 26px;
		padding: 12px 0;
	}

	.fs-14 {
		font-size: 14px !important;
	}

	#main-content ul {
		list-style-type: none;
	}

	#main-content .container {
		max-width: 1272px;
		width: 100%;
		padding: 10px 16px !important;
	}

	#main-content li,
	#main-content p,
	#main-content a {
		color: var(--Grey-dark, #262626);
		font-family: "Open Sans";
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
	}

	#main-content ul:not(.list, .contact_list, .contactp_address__content) li {
		padding-left: 24px;
		position: relative;
		font-weight: 600;
		margin-bottom: 8px;
	}

	#main-content ul:not(.list, .tabs, .contact_list, .contactp_address__content) {
		padding: 24px 0;
	}

	#main-content ul:not(.list, .tabs, .contact_list, .contactp_address__content) li:before {
		content: '';
		position: absolute;
		left: 6px;
		top: 10px;
		width: 4px;
		height: 4px;
		border-radius: 50%;
		background-color: #FDB948;
	}

	.contactp_address {
		margin-top: 24px;
		display: flex;
		justify-content: center;
		gap: 40px;
	}

	.contactp_address :is(.contactp_address__left, .contactp_address__right) {
		width: 518px;
	}

	.contactp_address .contactp_address__title {
		color: #262626;
		font-family: "Open Sans";
		font-size: 18px;
		font-weight: 700;
		line-height: 26px;
		padding: 0;
	}

	.contactp_address .contactp_address__content {
		margin: 0;
		margin-top: 13px;
		display: grid;
		gap: 12px;
		padding: 0;
		list-style-type: none;
	}

	#main-content .contactp_address .contactp_address__content :is(li, a, div) {
		display: flex;
		align-items: center;
		gap: 12px;
		color: #262626;
		font-family: "Open Sans";
		font-size: 16px;
		font-weight: 600;
		line-height: 24px;
	}

	.result_ty,
	.contact_form {
		max-width: 464px;
		width: 100%;
	}

	.result_ty>div,
	.contact_form {
		width: 100%;
		max-width: 458px;
		padding: 24px;
		border-radius: 24px;
		background: #FFF;
	}

	.result_ty>div>div {
		max-width: 320px;
		margin: auto;
		padding-bottom: 40px;
	}

	.result_ty h4 {
		padding: 16px 0 24px;
	}

	.contact_gray:not(.contact_office) h2 {
		color: var(--Black, #000);
		text-align: center;
		padding-bottom: 24px;
		font-family: "Open Sans";
		font-size: 32px;
		font-style: normal;
		font-weight: 700;
		line-height: 40px;
	}

	.crs_custom_form textarea,
	.crs_custom_form input {
		margin-bottom: 16px;
	}

	.crs_custom_submit,
	.crs_custom_next,
	.contact_form .btn_yellow {
		position: relative;
		margin-top: 4px;
		font-family: "Open Sans";
		font-size: 15px;
		font-weight: 700;
		line-height: 48px;
		border: none;
		width: 100%;
		cursor: pointer;
	}

	.contact_form .contact_form__header {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.contact_form__back {
		display: flex;
		align-items: center;
		gap: 8px;
		background: none;
		border: none;
		color: #000;
		font-size: 18px;
		font-weight: 700;
		line-height: 26px;
		padding: 0;
		cursor: pointer;

	}

	.contact_form__back::before {
		content: '';
		display: block;
		width: 18px;
		height: 18px;
		background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M8.22711 2L1 9.22712L8.22711 16.4542L9.60562 15.0757L4.73179 10.2019H17V8.25235H4.73179L9.60562 3.37853L8.22711 2Z" fill="black"/></svg>');
		background-repeat: no-repeat;
		background-position: center;
		background-size: contain;
	}

	.contact_form h2.contact_form__title {
		color: #000;
		font-family: "Open Sans";
		font-size: 36px;
		font-weight: 700;
		line-height: 48px;
		letter-spacing: -0.54px;
		padding: 0;
	}



	.contact_form .contact_form__count {
		color: #000;
		font-family: "Open Sans";
		font-size: 18px;
		font-weight: 700;
		line-height: 26px;
	}

	.contact_form .contact_form__description {
		margin-top: 8px;
		color: #444;
		font-family: "Open Sans";
		font-size: 14px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;

	}

	.contact_form .contact_form__groups {
		margin-top: 24px;
		display: grid;
		gap: 20px;
	}

	.contact_form .contact_form__group {
		display: flex;
		flex-direction: column;
		gap: 9px;
	}

	.contact_form .contact_form__groups label {
		color: var(--Black, #000);
		font-variant-numeric: lining-nums tabular-nums;
		font-family: "Gotham Pro";
		font-size: 12px;
		font-weight: 400;
		line-height: 120%;
	}

	.contact_form .contact_form__groups textarea::placeholder {
		color: #4E4E4E;
		font-variant-numeric: lining-nums tabular-nums;
		font-family: "Gotham Pro";
		font-size: 12px;
		font-weight: 400;
		line-height: 14px;
	}


	.contact_form .rating {
		margin-top: 24px;
	}

	.contact_form input:not(.btn_yellow),
	.contact_form textarea,
	.contact_form select {
		margin: 0;
		border-radius: 12px;
		border: 1px solid #D8D8D8;
		background: #F4F4F4;
		font-family: "Open Sans";
		font-size: 14px;
		font-style: normal;
		font-weight: 400;
		line-height: 20px;
		padding: 14px 16px;
		padding-right: 35px;

		overflow: hidden !important;
		text-overflow: ellipsis;
	}

	.contact_form select option {}

	.contact_form .contact_form__select {
		position: relative;
		cursor: pointer;
	}

	.contact_form select {
		cursor: pointer;
	}

	.contact_form .contact_form__select::after {
		position: absolute;
		content: '';
		top: 50%;
		right: 16px;
		width: 10px;
		height: 5px;
		transform: translateY(-50%);
		background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none"><path d="M8.79289 0.630859H1.30298C0.844737 0.630859 0.627888 1.19596 0.968496 1.50251L4.91056 5.05036C5.10822 5.22826 5.41055 5.22031 5.59859 5.03227L9.14645 1.48441C9.46143 1.16943 9.23835 0.630859 8.79289 0.630859Z" fill="%23979797"/></svg>');
	}

	.contact_form textarea {
		height: 208px;
		resize: none;
	}

	.contact_gray:not(.contact_main) {
		border-radius: 8px;
		padding: 48px 40px;
		background: var(--Gray-100, #F4F4F4);
	}

	.contact_main .contact_wrap {
		display: flex;
		border-radius: 24px;
		background: var(--Gray-100, #F4F4F4);
		overflow: hidden;
		padding: 0;
	}

	.contact_main .contact_left {
		flex: 1 1 auto;
		width: auto;
		max-width: 660px;
		padding: 60px 40px;
	}

	.contact_main .contact_right {
		flex: 0 1 auto;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 580px;
		max-width: 100%;
		min-width: 400px;
		background: #DCDCDC;
		padding: 24px;
	}


	.contact_title {
		color: #000;
		font-family: "Open Sans";
		font-size: 36px;
		font-weight: 700;
		line-height: 48px;
		letter-spacing: -0.54px;
	}

	.contact_highlight {
		margin-top: 12px;
		padding: 8px 16px;
		width: fit-content;
		border-radius: 8px;
		border: 1px solid rgba(253, 185, 72, 0.30);
		background: rgba(253, 185, 72, 0.20);
		color: #000;
		font-family: "Open Sans";
		font-size: 16px;
		font-weight: 700;
		line-height: 140%;
		letter-spacing: -0.24px;
	}


	.contact_highlight span {
		font-size: 18px;
		color: #E99202;
	}


	.contact_subtitle {
		margin-top: 40px;
		color: #000;
		font-family: "Open Sans";
		font-size: 18px;
		font-weight: 700;
		line-height: 26px;
		padding: 0;
	}

	#main-content .contact_main .contact_list {
		margin-top: 18px;
		display: grid;
		gap: 6px;
		padding: 0;
	}

	#main-content .contact_main .contact_list li {
		display: grid;
		grid-template-columns: 24px 1fr;
		gap: 12px;
		padding: 0 !important;
		margin: 0 !important;
		color: #444;
		font-family: "Open Sans";
		font-size: 14px;
		font-weight: 600;
		line-height: 24px;
	}

	#main-content .contact_main .contact_list li::before {
		content: '';
		flex-shrink: 0;
		position: static !important;
		width: 24px !important;
		height: 24px !important;
		background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="%23FFB027"/><path d="M7 12.3403L10.6527 16L17.6666 8.99304L16.6597 8L10.6527 14L7.99301 11.3403L7 12.3403Z" fill="black"/></svg>');
		background-repeat: no-repeat;
		background-size: contain;
	}

	.contact_main .contact_blocks {
		margin-top: 40px;
	}

	.contact_main .contact_blocks .descr-block {
		width: 100%;
		max-width: 181px;
		min-width: auto;
	}

	.contact_main .wpcf7-form {
		padding: 0;
		background-color: transparent;
		border-radius: 0;
	}


	.contactp_choose {
		border-radius: 8px;
		padding: 24px 4px;
		margin-top: 24px;
	}

	#main-content .contactp_choose p {
		color: var(--Grey-text, #444);
		font-family: "Open Sans";
		font-size: 13px;
		font-style: normal;
		font-weight: 400;
		line-height: 18px;
	}

	.contactp_choose img {
		height: 32px;
	}

	#main-content .contactp_choose img+p b,
	#main-content .contactp_choose svg+p b {
		color: var(--Grey-dark, #262626);
		font-size: 14px;
		font-weight: 700;
		line-height: 20px;
		display: block;
	}

	#main-content .contactp_choose img+p,
	#main-content .contactp_choose svg+p {
		padding: 8px 0 6px 0;
	}

	.contactp_choose>div {
		padding: 0 16px;
	}

	/* contact_subnote */
	.contact_subnote {
		padding: 100px 0 68px;
		max-width: 800px;
		margin: 0 auto;
	}

	.contact_office iframe {
		border-radius: 8px;
		margin-top: 24px;
	}

	.contact_office svg {
		margin-right: 12px;
	}

	.contactp_prize_image {
		max-width: 975px;
		margin: 100px auto;
		gap: 40px;
	}

	.contactp_prize_image img {
		height: 120px;
		width: auto;
	}

	form {
		position: relative;
	}

	.footer_contact a {
		font-size: 16px;
	}

	.contact_form form.wpcf7-form .wpcf7-not-valid-tip {
		display: none;
	}

	.contact_form form.wpcf7-form.not-error .wpcf7-not-valid-tip {
		display: block;
	}

	.contact_form form {
		position: relative;
	}

	.contact_form form .wpcf7-spinner {
		position: absolute;
		top: 50%;
		left: 13px;
		transform: translateY(-50%);
	}

	.contact_form[data-submit="pending"] .crs_custom_submit {
		pointer-events: none;
		background-color: lightgray;
	}

	.contact_form[data-submit="pending"] .wpcf7-spinner {
		visibility: visible;
	}

	.contact_form .not-valid-tip {
		margin-top: -9px;
		margin-bottom: 16px;
	}

	@media screen and (min-width: 991px) {
		#et-footer-nav .container {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.contact_assessment {
			display: none;
		}

		.col-lg-6 {
			width: 50%;
		}

		.result_ty>div {
			min-height: 520px;
		}

		.contact_gray>div>div:first-child {
			padding-right: 40px;
		}

		.contactp_choose>div:not(:last-child) {
			border-right: 1px solid #FDB948;
		}

		.contactp_choose {
			border: 1px solid var(--White, #FFF);
			background: var(--Grey-BG, #F9F9F9);
		}

		.contact_office .col-lg-6:first-child {
			padding-right: 20px;
		}

		.contact_office .col-lg-6:last-child {
			padding-left: 20px;
		}
	}

	@media screen and (max-width: 1199px) {
		.contactp_choose {
			border: none;
			border-top: 1px solid #EEE;
			border-left: 1px solid #EEE;
			padding: 0;
			margin-top: 32px;
		}

		.contactp_choose>div {
			border-right: 1px solid #EEE !important;
			border-bottom: 1px solid #EEE;
			padding: 16px;
		}

		.contact_gray {
			padding: 20px 16px;
		}

		.contactp_prize_image {
			justify-content: center;
			padding: 0;
		}

		.contactp_prize_image img {
			height: 79px;
		}
	}

	@media screen and (max-width: 991px) {
		#main-content {
			padding: 0 !important;
		}

		#main-content .container {
			padding: 24px 16px 0 !important;
		}

		.contact_gray {
			padding: 0;
			background-color: transparent;
		}

		h1 {
			font-size: 32px;
			line-height: 40px;
		}

		h2 {
			font-size: 32px;
			line-height: 40px;
			padding-bottom: 24px;
		}

		h4 {
			font-size: 18px;
			line-height: 26px;
		}

		#main-content ul:not(.list, .contact_list, .contactp_address__content)li {
			font-size: 14px;
		}


		.contact_main .contact_wrap {
			flex-direction: column;
			background-color: #fff;
			border-radius: 0;
			margin-inline: -16px;
		}

		.contact_main :is(.contact_left, .contact_right) {
			width: 100%;
			min-width: auto;
		}

		.contact_main .contact_left {
			padding: 0;
			padding-inline: 16px;
			padding-bottom: 20px;
		}

		.contact_main .contact_title {

			font-size: 26px;
			font-weight: 700;
			line-height: 32px;
			letter-spacing: -0.39px;
		}

		.contact_main .contact_highlight {
			margin-top: 12px;
			color: #000;
			padding: 8px;
			font-size: 13px;
			font-weight: 700;
			line-height: 18px;
			letter-spacing: -0.195px;
		}

		.contact_main .contact_highlight span {
			font-size: inherit;
		}

		.contact_subtitle {
			margin-top: 12px;
			color: #000;
			font-family: "Open Sans";
			font-size: 18px;
			font-weight: 700;
			line-height: 26px;
			letter-spacing: -0.27px;
		}

		#main-content .contact_main .contact_list {
			margin-top: 12px;
		}

		#main-content .contact_main .contact_list li {
			color: #444;
			font-size: 14px;
			font-weight: 600;
			line-height: 24px;
		}


		.contact_main .contact_blocks {
			display: none;
		}

		.contact_main .contact_right {
			padding: 16px;
		}

		.contact_form h2.contact_form__title {
			font-size: 26px;
			line-height: 32px;
		}

		.contact_form .contact_form__count {
			font-size: 14px;
			line-height: 22px;
		}



		.contactp_address {
			margin-top: 20px;
		}

		.crs_custom_submit,
		.crs_custom_next,
		.contact_form .btn_yellow {
			margin-top: 0;
		}

		.contactp_address__left {
			display: none;
		}

		.contactp_address__right {
			width: 100% !important;
			border-radius: 8px;
			background: #FFF5E2;
			padding: 20px;
		}

		.contactp_address__title {
			display: none;
		}

		.contactp_address__content .circle {
			display: flex;
			justify-content: center;
			align-items: center;
			width: 36px;
			aspect-ratio: 1;
			background: #fff;
			border-radius: 50%;
		}

		#main-content .contactp_address .contactp_address__content :is(li, a, div) {
			font-size: 14px;
		}

		.contact_assessment {
			margin: 0;
			margin-top: 20px;
			padding: 0;
		}

		.contact_gray:not(.contact_office) h2 {
			font-size: 18px;
			line-height: 26px;
			padding-bottom: 16px;
		}


		.result_ty>div {
			padding: 20px;
		}

		.contact_subnote {
			margin-top: 20px;
			padding: 0 0 18px;
		}

		.contactp_prize_image {
			gap: 16px;
			margin: 26px auto 50px;
		}

		.contact_office iframe {
			margin: 16px 0 24px;
			height: 85.33vw;
		}

		.crs_custom_submit,
		.contact_form .btn_yellow {
			padding-right: 24px;
			font-size: 16px;
		}

		.banner_call h3 {
			text-align: center;
		}

		#main-content .banner_call .btn_yellow {
			max-width: 200px !important;
		}
	}

	.form_shortcode p {
		padding: 0;
	}

	.form_shortcode form.wpcf7-form textarea,
	.form_shortcode form.wpcf7-form input {
		display: none;
		margin-bottom: 16px;
	}

	.result_ty h3 {
		padding-bottom: 24px;
		font-size: 32px;
		font-style: normal;
		font-weight: 700;
		line-height: 40px;
	}

	.result_ty .main-form__header {
		margin-bottom: 12px;
	}

	.result-wrapper_block hr,
	.result_ty hr {
		border-width: 0.5px;
		border-color: #EEE;
		background-color: transparent;
	}

	.result_ty hr {
		margin: 32px 0;
	}

	.result_ty hr {
		margin: 24px 0 40px;
	}

	#main-content .result_ty .list li p {
		font-size: 14px;
		font-weight: 600;
	}

	#main-content .result_ty hr+p {
		font-size: 18px;
		line-height: 26px;
		max-width: 420px;
	}

	#main-content .result_ty a:not(.btn_yellow) {
		font-size: 14px;
		font-weight: 600;
		line-height: 22px;
		text-decoration-line: underline;
	}

	#main-content .result_ty.result_ty_one ul {
		padding-bottom: 0;
	}

	@media (max-width: 991px) {
		.result_ty h3 {
			font-size: 24px;
			line-height: 32px;
		}

		.result_ty hr {
			margin: 8px 0 24px;
		}
	}

	@media (max-width: 767px) {
    .result_ty h3 {
        padding-bottom: 16px;
    }
}

	@media screen and (max-width: 767px) {
		#main-content .banner_call .btn_yellow {
			margin: 0 auto;
		}

		.contact_highlight {
			margin-inline: -8px;
		}
	}
</style>
<div id="main-content" class="page_contact">
	<div class="container">
		<div class="contact_main">
			<div class="contact_wrap">
				<div class="contact_left">
					<h1 class="contact_title">Get In Touch!</h1>
					<div class="contact_highlight">Market-leading loan approval rate in Australia of <span>97%</span></div>
					<h3 class="contact_subtitle">How Our Experts Can Help You</h3>
					<ul class="contact_list">
						<li>Get answers to all your questions about securing a home loan</li>
						<li>Answer questions about obtaining a loan for a new home, upgrading your home, or refinancing your loan</li>
						<li>Unlock home loan rates across our 30+ Australian banks & lender networks</li>
					</ul>

					<div class="contact_blocks descr-blocks">
						<div class="descr-blocks__item descr-block">
							<div class="descr-block__icon">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="32"
									height="32"
									viewBox="0 0 32 32"
									fill="none">
									<g clip-path="url(#clip0_2175_7531)">
										<path
											d="M31.551 19.2929C31.0472 18.957 30.5335 18.6868 30.0166 18.4823C30.1875 18.3349 30.3502 18.177 30.5037 18.0079H30.5038C31.8423 16.5341 32.3037 14.4626 31.8032 12.175C31.7179 11.7852 31.3952 11.4921 30.999 11.4446C30.9452 11.4382 30.8918 11.4327 30.8383 11.4273C31.4452 10.6169 31.8255 9.69836 31.949 8.71044C32.1959 6.7349 31.3815 4.77505 29.6559 3.19196C29.3619 2.92231 28.9294 2.8682 28.578 3.05723C26.5158 4.16701 25.2442 5.86615 24.9974 7.84168C24.7989 9.42977 25.2868 11.0076 26.3821 12.3878C25.9924 12.6442 25.6357 12.9477 25.3178 13.2978C23.9791 14.7716 23.5176 16.8431 24.0183 19.1308C24.031 19.1888 24.0496 19.2443 24.0722 19.2975C23.2329 19.992 22.574 20.9419 22.1364 22.0959C20.2236 21.5601 18.1683 22.0712 16.3473 23.5364C16.1384 23.7044 16.017 23.9489 16 24.2051C15.9831 23.9489 15.8616 23.7044 15.6528 23.5364C13.8318 22.0713 11.7765 21.5602 9.86363 22.0959C9.42606 20.9419 8.76709 19.992 7.92784 19.2975C7.95052 19.2443 7.96902 19.1888 7.98171 19.1308C8.48238 16.8431 8.02089 14.7716 6.68233 13.2979C6.36437 12.9477 6.00761 12.6443 5.61798 12.3879C6.7132 11.0076 7.20113 9.42977 7.00266 7.84168C6.75582 5.86615 5.48418 4.16695 3.42203 3.05723C3.07083 2.8682 2.63814 2.92225 2.34412 3.19196C0.618554 4.77511 -0.195832 6.73496 0.051071 8.71044C0.174491 9.69836 0.554625 10.6169 1.16141 11.4273C1.10805 11.4327 1.05468 11.4382 1.001 11.4446C0.604806 11.492 0.282164 11.7851 0.196863 12.1749C-0.303692 14.4626 0.157744 16.5341 1.49624 18.0079C1.64972 18.1769 1.81257 18.3348 1.98336 18.4822C1.46643 18.6867 0.952757 18.9569 0.449015 19.2928C0.117062 19.5141 -0.0384789 19.9214 0.0615696 20.3076C0.648612 22.5746 1.99623 24.2141 3.85629 24.9242C4.50107 25.1703 5.17429 25.2921 5.86007 25.2921C5.9488 25.2921 6.03779 25.2896 6.1269 25.2855C5.95187 25.6219 5.79558 25.9795 5.66047 26.3581C5.52636 26.7338 5.64478 27.1533 5.95568 27.4035C7.30536 28.4894 8.78366 29.0513 10.2375 29.0513C10.7489 29.0513 11.2576 28.9817 11.7562 28.8409C13.6722 28.2999 15.1609 26.7873 15.948 24.5817C15.978 24.4978 15.9946 24.4117 16.0001 24.3258C16.0055 24.4117 16.0222 24.4978 16.0521 24.5817C16.8393 26.7872 18.3279 28.2999 20.2439 28.8409C20.7427 28.9818 21.2511 29.0513 21.7627 29.0513C23.2164 29.0513 24.6949 28.4893 26.0445 27.4035C26.3554 27.1533 26.4738 26.7338 26.3397 26.3581C26.2046 25.9795 26.0484 25.6219 25.8733 25.2855C25.9624 25.2896 26.0514 25.2921 26.14 25.2921C26.8257 25.2921 27.4991 25.1702 28.1438 24.9242C30.0039 24.2141 31.3515 22.5746 31.9385 20.3076C32.0384 19.9215 31.883 19.5143 31.551 19.2929ZM3.12576 5.06626C4.28766 5.85515 4.99631 6.90482 5.14242 8.07421C5.28852 9.24361 4.85989 10.4354 3.9279 11.486C2.766 10.697 2.05735 9.64743 1.91125 8.47803C1.7652 7.30863 2.19371 6.1168 3.12576 5.06626ZM1.91443 13.2583C3.31836 13.2361 4.50226 13.686 5.29452 14.5584C6.08685 15.4307 6.42199 16.6521 6.26413 18.0476C4.85827 18.0711 3.67637 17.6199 2.88405 16.7476C2.09166 15.8752 1.75658 14.6538 1.91443 13.2583ZM4.52488 23.1728C3.42385 22.7525 2.57303 21.8144 2.08335 20.4982C3.32555 19.843 4.58512 19.7105 5.68615 20.1308C6.78712 20.551 7.63794 21.4892 8.12762 22.8055C6.88536 23.4606 5.62591 23.5932 4.52488 23.1728ZM11.2467 27.0369C10.1125 27.3571 8.86983 27.1127 7.69112 26.3491C8.29641 25.0819 9.22759 24.2234 10.3617 23.9032C11.496 23.5829 12.7386 23.8275 13.9172 24.5909C13.312 25.8582 12.3808 26.7166 11.2467 27.0369ZM26.8575 8.07421C27.0037 6.90482 27.7124 5.85515 28.8742 5.06626C29.8063 6.11686 30.2348 7.30863 30.0887 8.47803C29.9426 9.64743 29.2339 10.6971 28.0721 11.486C27.1401 10.4354 26.7114 9.24361 26.8575 8.07421ZM26.7055 14.5583C27.4978 13.6859 28.6809 13.2354 30.0855 13.2583C30.2434 14.6539 29.9082 15.8752 29.1159 16.7476H29.1159C28.3235 17.62 27.1419 18.0719 25.7358 18.0476C25.578 16.6521 25.9132 15.4307 26.7055 14.5583ZM20.7533 27.0369C19.6192 26.7166 18.688 25.8582 18.0827 24.5909C19.2614 23.8275 20.5039 23.5828 21.6383 23.9032C22.7724 24.2234 23.7036 25.0818 24.3088 26.3491C23.1302 27.1127 21.8876 27.3573 20.7533 27.0369ZM27.4751 23.1728C26.3741 23.5932 25.1145 23.4605 23.8724 22.8055C24.3621 21.4892 25.2129 20.551 26.3139 20.1308C27.4149 19.7104 28.6744 19.8431 29.9167 20.4982C29.427 21.8144 28.5762 22.7526 27.4751 23.1728Z"
											fill="#FFB027" />
										<path
											d="M11.9102 11.219C12.3472 11.2866 12.7842 11.2518 13.1933 11.1213V18.2003C13.1933 19.7509 14.4548 21.0124 16.0054 21.0124C17.556 21.0124 18.8175 19.7509 18.8175 18.2003V5.95776C18.8662 5.29241 18.6772 4.63188 18.2828 4.09277C17.6251 3.19364 16.4906 2.76989 15.3936 3.01298C14.9951 3.10122 14.6135 3.28007 14.2888 3.53047L10.6803 6.17048C9.42901 7.08603 9.1558 8.84897 10.0712 10.1004C10.5148 10.7067 11.1678 11.1039 11.9102 11.219ZM11.7873 7.68351L15.4063 5.03582C15.4142 5.03001 15.422 5.02407 15.4298 5.01808C15.5385 4.93321 15.6661 4.87278 15.799 4.84335C16.1645 4.76242 16.5546 4.90565 16.7697 5.19967C16.9041 5.38327 16.9668 5.60937 16.9465 5.83621C16.944 5.86408 16.9427 5.89208 16.9427 5.92001V18.2002C16.9427 18.7171 16.5222 19.1376 16.0053 19.1376C15.4885 19.1376 15.068 18.7171 15.068 18.2002V9.45351C15.068 9.1005 14.8696 8.77736 14.5548 8.61763C14.4208 8.54964 14.2755 8.51615 14.1307 8.51615C13.9353 8.51615 13.7408 8.57726 13.5772 8.697L12.8942 9.19661C12.6922 9.34447 12.4448 9.40483 12.1972 9.3664C11.9498 9.32803 11.7321 9.19568 11.5843 8.99358C11.2791 8.57639 11.3702 7.98872 11.7873 7.68351Z"
											fill="#FFB027" />
									</g>
									<defs>
										<clipPath id="clip0_2175_7531">
											<rect width="32" height="32" fill="white" />
										</clipPath>
									</defs>
								</svg>
							</div>
							<div class="descr-block__title">
								Mortgage Broker<br />
								of the Year in
							</div>
							<div class="descr-block__text">
								2017, 2018, 2019 <br />
								and 2024
							</div>
						</div>
						<div class="descr-blocks__item descr-block">
							<div class="descr-block__icon">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="33"
									height="32"
									viewBox="0 0 33 32"
									fill="none">
									<path
										d="M30.3335 14C30.8835 14 31.3335 13.55 31.3335 13V9C31.3335 8.63 31.1335 8.29 30.8035 8.12L17.8035 1.12C17.6535 1.04 17.4935 1 17.3335 1H15.3335C15.1635 1 15.0035 1.04 14.8635 1.12L1.8635 8.12C1.5435 8.29 1.3335 8.63 1.3335 9V13C1.3335 13.55 1.7835 14 2.3335 14H4.5835V25H4.3335C3.7835 25 3.3335 25.45 3.3335 26V29H2.3335C1.7835 29 1.3335 29.45 1.3335 30C1.3335 30.55 1.7835 31 2.3335 31H30.3335C30.8835 31 31.3335 30.55 31.3335 30C31.3335 29.45 30.8835 29 30.3335 29H29.3335V26C29.3335 25.45 28.8835 25 28.3335 25H28.0835V14H30.3335ZM3.3335 10H18.3335C18.8835 10 19.3335 9.55 19.3335 9C19.3335 8.45 18.8835 8 18.3335 8H6.3035L15.5835 3H17.0835L29.3335 9.6V12H3.3335V10ZM22.3335 25C21.7835 25 21.3335 25.45 21.3335 26V29H11.3335V26C11.3335 25.45 10.8835 25 10.3335 25H10.0835V14H22.5835V25H22.3335ZM6.5835 14H8.0835V25H6.5835V14ZM5.3335 27H9.3335V29H5.3335V27ZM23.3335 29V27H27.3335V29H23.3335ZM26.0835 25H24.5835V14H26.0835V25Z"
										fill="#FFB027" />
									<path
										d="M15.5035 18.67H18.8335C19.3835 18.67 19.8335 18.22 19.8335 17.67C19.8335 17.12 19.3835 16.67 18.8335 16.67H17.3335V16C17.3335 15.45 16.8835 15 16.3335 15C15.7835 15 15.3335 15.45 15.3335 16V16.68C13.9435 16.77 12.8335 17.92 12.8335 19.33C12.8335 20.74 14.0335 22 15.5035 22H17.1735C17.5435 22 17.8435 22.3 17.8435 22.67C17.8435 23.04 17.5435 23.34 17.1735 23.34H13.8435C13.2935 23.34 12.8435 23.79 12.8435 24.34C12.8435 24.89 13.2935 25.34 13.8435 25.34H15.3435V26.01C15.3435 26.56 15.7935 27.01 16.3435 27.01C16.8935 27.01 17.3435 26.56 17.3435 26.01V25.33C18.7335 25.24 19.8435 24.09 19.8435 22.68C19.8435 21.27 18.6435 20.01 17.1735 20.01H15.5035C15.1335 20.01 14.8335 19.71 14.8335 19.34C14.8335 18.97 15.1335 18.67 15.5035 18.67Z"
										fill="#FFB027" />
									<path
										d="M22.3335 8H21.3335C20.7835 8 20.3335 8.45 20.3335 9C20.3335 9.55 20.7835 10 21.3335 10H22.3335C22.8835 10 23.3335 9.55 23.3335 9C23.3335 8.45 22.8835 8 22.3335 8Z"
										fill="#FFB027" />
								</svg>
							</div>
							<div class="descr-block__title">
								Access to 30+<br />
								banks
							</div>
							<div class="descr-block__text">
								and lenders in <br />
								Australia
							</div>
						</div>
						<div class="descr-blocks__item descr-block">
							<div class="descr-block__icon">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="33"
									height="32"
									viewBox="0 0 33 32"
									fill="none">
									<path
										fill-rule="evenodd"
										clip-rule="evenodd"
										d="M16.7629 3.2713C9.86372 3.2713 4.27081 8.86421 4.27081 15.7634C4.27081 22.6626 9.86372 28.2556 16.7629 28.2556C23.6621 28.2556 29.2551 22.6626 29.2551 15.7634C29.2551 14.4785 29.0614 13.2409 28.7025 12.0771C28.5178 11.4777 28.8538 10.842 29.4531 10.6572C30.0524 10.4724 30.6883 10.8085 30.873 11.4078C31.298 12.7861 31.5264 14.2491 31.5264 15.7634C31.5264 23.9171 24.9166 30.5268 16.7629 30.5268C8.60932 30.5268 1.99951 23.9171 1.99951 15.7634C1.99951 7.60981 8.60932 1 16.7629 1C17.8091 1 18.8312 1.10901 19.8178 1.31666C20.4315 1.44586 20.8243 2.04813 20.6952 2.66188C20.566 3.27563 19.9636 3.66846 19.3499 3.53926C18.5162 3.36378 17.651 3.2713 16.7629 3.2713ZM31.6669 2.12355C32.1104 2.56704 32.1104 3.28611 31.6669 3.7296L25.6101 9.78639C25.1666 10.2299 24.4476 10.2299 24.0041 9.78639L20.9757 6.75799C20.5322 6.3145 20.5322 5.59544 20.9757 5.15194C21.4192 4.70845 22.1382 4.70845 22.5817 5.15194L24.8071 7.37732L30.0609 2.12355C30.5044 1.68006 31.2234 1.68006 31.6669 2.12355ZM16.7629 5.54259C17.3901 5.54259 17.8986 6.05104 17.8986 6.67824V8.60478H17.9392C20.2688 8.60478 22.1573 10.4933 22.1573 12.8229C22.1573 13.4502 21.6488 13.9585 21.0216 13.9585C20.3944 13.9585 19.886 13.4502 19.886 12.8229C19.886 11.7477 19.0144 10.8761 17.9392 10.8761H17.8986V14.6481H18.0203C20.3051 14.6481 22.1573 16.5002 22.1573 18.785C22.1573 21.0699 20.3051 22.9221 18.0203 22.9221H17.8986V24.8486C17.8986 25.4758 17.3901 25.9843 16.7629 25.9843C16.1358 25.9843 15.6273 25.4758 15.6273 24.8486V22.9221H15.5055C13.2208 22.9221 11.3686 21.0699 11.3686 18.785C11.3686 18.1578 11.8771 17.6494 12.5043 17.6494C13.1315 17.6494 13.6399 18.1578 13.6399 18.785C13.6399 19.8154 14.4751 20.6508 15.5055 20.6508H15.6273V16.9194H15.5258C13.2299 16.9194 11.3686 15.0581 11.3686 12.7621C11.3686 10.4661 13.2299 8.60478 15.5258 8.60478H15.6273V6.67824C15.6273 6.05104 16.1358 5.54259 16.7629 5.54259ZM15.6273 10.8761H15.5258C14.4842 10.8761 13.6399 11.7205 13.6399 12.7621C13.6399 13.8036 14.4842 14.6481 15.5258 14.6481H15.6273V10.8761ZM17.8986 16.9194V20.6508H18.0203C19.0506 20.6508 19.886 19.8154 19.886 18.785C19.886 17.7546 19.0507 16.9194 18.0203 16.9194H17.8986Z"
										fill="#FFB027" />
								</svg>
							</div>
							<div class="descr-block__title">Top approval rates</div>
							<div class="descr-block__text">
								among Australian<br />
								Mortgage Brokers
							</div>
						</div>
					</div>
				</div>
				<div class="contact_right">
					<div class="contact_form ">
						<form class="init crs_custom_form crs-contact-form" name="contact-form" aria-label="Contact form">
							<div style="display: none;">
								<input type="hidden" name="_wpcf7" value="11830">
								<input type="hidden" name="_wpcf7_version" value="5.9.3">
								<input type="hidden" name="_wpcf7_locale" value="en_US">
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11830-o13">
								<input type="hidden" name="_wpcf7_container_post" value="0">
								<input type="hidden" name="_wpcf7_posted_data_hash" value="">
							</div>
							<div data-slide="1">
								<div class="contact_form__header">
									<h2 class="contact_form__title">Contact us</h2>
									<div class="contact_form__count">
										<span>1</span> / 2
									</div>
								</div>
								<div class="contact_form__groups">
									<div class="contact_form__group">
										<label for="crs-contanct-text">
											Your message
										</label>
										<textarea id="crs-contact-text" placeholder="*Give details of your request below" name="your-message"></textarea>
									</div>
									<div class="contact_form__group">
										<button type="button" class="crs_custom_next btn_yellow">Next</button>
									</div>
								</div>


							</div>
							<div data-slide="2" style="display:none">
								<div class="contact_form__header">

									<button type="button" class="contact_form__back">Back</button>
									<div class="contact_form__count">
										<span>2</span> / 2
									</div>

								</div>
								<div class="contact_form__description">Give details of your request below</div>
								<div class="contact_form__groups">
									<div class="contact_form__group">
										<label for="crs-contact-request-type">
											Choose your Request Type
										</label>
										<div class="contact_form__select">
											<select id="crs-contact-request-type" name="request-type">
												<option value="" disabled selected hidden>I need your help with</option>
												<option value="First Home Purchase Inquiry">First Home Purchase Inquiry</option>
												<option value="Investment Property Financing">Investment Property Financing</option>
												<option value="Home Loan Refinance Inquiry">Home Loan Refinance Inquiry</option>
												<option value="Borrowing Capacity Assessment">Borrowing Capacity Assessment</option>
												<option value="General Mortgage Advice">General Mortgage Advice</option>
												<option value="Other">Other</option>

											</select>
										</div>
									</div>
									<div class="contact_form__group">
										<label for="crs-contact-name">
											Enter your Name
										</label>
										<input id="crs-contact-name" placeholder="" value="" type="text" name="your-name">
									</div>
									<div class="contact_form__group">
										<label for="crs-contact-email">
											Enter your Email
										</label>
										<input id="crs-contact-email" placeholder="" value="" type="email" name="your-email">
									</div>
									<div class="contact_form__group">
										<label for="crs-contact-phone">
											Enter your Phone
										</label>
										<input id="crs-contact-phone" placeholder="" value="" type="tel" name="your-phone">
									</div>
									<div class="contact_form__group">
										<button type="submit" class="crs_custom_submit btn_yellow"><span class="wpcf7-spinner"></span> Submit</button>
									</div>
								</div>
							</div>
							<div class="rating">
								<div class="rating__stars-wrap">
									<div class="rating__stars"></div>
									<div class="rating__rate">5.0</div>
								</div>
								<div class="rating__reviews">
									<span class="rating__reviews--highlight">2000+ Excellent Reviews</span>
									on Google
								</div>
							</div>
						</form>
					</div>
					<div class="form_shortcode">
						<div class="wpcf7 js" id="wpcf7-f11830-o13" lang="en-US" dir="ltr">
							<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
							<form action="/contact/#wpcf7-f11830-o13" method="post" class="wpcf7-form resetting" aria-label="Contact form" novalidate="novalidate" data-status="resetting">
								<div style="display:none;">
								<input type="hidden" name="_wpcf7" value="11830">
								<input type="hidden" name="_wpcf7_version" value="5.9.3">
								<input type="hidden" name="_wpcf7_locale" value="en_US">
								<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11830-o13">
								<input type="hidden" name="_wpcf7_container_post" value="0">
								<input type="hidden" name="_wpcf7_posted_data_hash" value="">
								</div>
								<p><label><span class="wpcf7-form-control-wrap" data-name="your-name"><input size="40" aria-required="true" aria-invalid="false" placeholder="Name" value="" type="text" name="your-name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required lazyloaded"></span></label>
								</p>
								<p><label><span class="wpcf7-form-control-wrap" data-name="your-email"><input size="40" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" value="" type="email" name="your-email"></span></label>
								</p>
								<p><label><span class="wpcf7-form-control-wrap" data-name="your-phone"><input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="Phone" value="" type="tel" name="your-phone"></span></label>
								</p>
								<p><label><span class="wpcf7-form-control-wrap" data-name="your-message"><textarea cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Message" name="your-message"></textarea></span></label>
								</p>
								<p><input class="wpcf7-form-control wpcf7-submit has-spinner btn_yellow" type="submit" value="Submit"><span class="wpcf7-spinner"></span>
								</p><p style="display:none !important;" class="akismet-fields-container" data-prefix="_wpcf7_ak_"><label>Δ<textarea name="_wpcf7_ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label><input type="hidden" id="ak_js_13" name="_wpcf7_ak_js" value="1715765534853"><template data-nitro-marker-id="83b926d767a9ed3e82c910cc56deb9c5-1"></template><template data-nitro-marker-id="92c816605bc144b3d2eb328f33669b6c-1"></template><script src="blob:https://www.huntergalloway.com.au/92b896ff-d9c3-4fc0-96fc-1b9188b84eba" data-nitro-for-id="92c816605bc144b3d2eb328f33669b6c-1" id="92c816605bc144b3d2eb328f33669b6c-1"></script></p><input type="hidden" class="wpcf7-pum" value="{&quot;closepopup&quot;:false,&quot;closedelay&quot;:0,&quot;openpopup&quot;:false,&quot;openpopup_id&quot;:14078}"><div class="wpcf7-response-output" aria-hidden="true"></div>
							</form>
						</div>
					</div>
					<div class="result_ty" id="result_ty" style="display: none;">

						<div>
							<h3>Thank you for Enquiry!</h3>
							<p>We have received your request and sent you a confirmation email. <b>We will get in contact
									with you within 4 business hours.</b></p>
							<p>We are looking forward to meeting you and help you find the right solution for your needs!
							</p>

							<hr>
							<p><b>In the meantime, here are some resources that you might find useful:</b></p>
							<ul>
								<li><a href="/first-home-buyer-loans/" target="_blank">First Home Buyers Guide</a></li>
								<li><a href="/refinance-home-loan/" target="_blank">Refinancing Guide</a></li>
								<li><a href="/upgrade-my-home/" target="_blank">Renovation Guide</a></li>
								<li><a href="/first-time-investor/" target="_blank">Property Investment Guide</a></li>
							</ul>
						</div>

					</div>

				</div>
			</div>


		</div>
		<div class="contactp_address">
			<div class="contactp_address__left">
				<h5 class="contactp_address__title">Our offices in Brisbane:</h5>
				<ul class="contactp_address__content">
					<li class="items-lg-center d-none">
						<?php echo $iconLocation; ?>
						Level 10, 179 North Quay, Brisbane QLD 4000
					</li>
					<li class="items-lg-center d-none">
						<?php echo $iconLocation; ?>
						300 Queen Street Brisbane, QLD 4000
					</li>
				</ul>
			</div>
			<div class="contactp_address__right">
				<h5 class="contactp_address__title">Our contacts:</h5>
				<ul class="contactp_address__content">
					<li>
						<a href="tel:1300088065" class="items-center">
							<span class="circle">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
									fill="none">
									<path
										d="M16.4541 8.31933H18.3029C18.3015 7.09395 17.8141 5.91915 16.9477 5.05267C16.0812 4.1862 14.9064 3.69882 13.681 3.69748V5.54622C14.4162 5.54707 15.1211 5.83952 15.641 6.35939C16.1608 6.87926 16.4533 7.58412 16.4541 8.31933ZM20.1516 8.31933H22.0003C22.0003 3.73214 18.2682 0 13.681 0V1.84874C17.2486 1.84874 20.1516 4.75172 20.1516 8.31933ZM19.0151 19.7949L21.6163 17.1933L15.08 10.6575L12.4655 13.2721L8.54383 9.35046L11.1584 6.73588L4.62219 0.199202L1.38967 3.43126C0.518111 4.29418 0.0193545 5.46425 0.000345296 6.69059C-0.00719215 7.30529 0.108741 7.91526 0.341277 8.48433C0.573813 9.0534 0.918219 9.57001 1.35408 10.0035L11.7722 20.4216C12.6503 21.2998 13.8386 21.8156 15.081 21.8151C15.535 21.8155 15.9866 21.7491 16.4213 21.6182C16.5967 21.5648 16.7631 21.4854 16.9149 21.3825L17.8689 20.7392C18.2803 20.4619 18.6642 20.1457 19.0151 19.7949ZM17.0411 19.1543C16.7842 19.4126 16.4785 19.6174 16.1419 19.7568C15.8053 19.8962 15.4444 19.9674 15.08 19.9664C14.7157 19.9674 14.3548 19.8961 14.0182 19.7567C13.6816 19.6173 13.376 19.4126 13.119 19.1543L2.66114 8.69647C2.40288 8.4395 2.19814 8.13386 2.05875 7.79726C1.91937 7.46065 1.8481 7.09974 1.84908 6.73542C1.8481 6.3711 1.91937 6.01019 2.05875 5.67358C2.19814 5.33698 2.40288 5.03135 2.66114 4.77437L4.62219 2.81378L8.54383 6.73542L5.92925 9.35L12.4655 15.8862L15.08 13.2716L19.0017 17.1933L17.0411 19.1543ZM13.6801 9.2437C13.9253 9.2437 14.1604 9.14631 14.3337 8.97296C14.5071 8.7996 14.6045 8.56449 14.6045 8.31933C14.6045 8.07417 14.5071 7.83905 14.3337 7.6657C14.1604 7.49235 13.9253 7.39496 13.6801 7.39496C13.4349 7.39496 13.1998 7.49235 13.0265 7.6657C12.8531 7.83905 12.7557 8.07417 12.7557 8.31933C12.7557 8.56449 12.8531 8.7996 13.0265 8.97296C13.1998 9.14631 13.4349 9.2437 13.6801 9.2437Z"
										fill="#FDB948" />
								</svg>
							</span>
							1300 088 065
						</a>
					</li>
					<li>
						<a href="mailto:hello@huntergalloway.com.au" class="items-center">
							<span class="circle">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17"
									fill="none">
									<path
										d="M19.4219 0H2.57812C1.89461 0.000796044 1.23931 0.272675 0.755995 0.755995C0.272675 1.23931 0.000796044 1.89461 0 2.57812V13.5781C0.000796044 14.2616 0.272675 14.9169 0.755995 15.4003C1.23931 15.8836 1.89461 16.1555 2.57812 16.1562H19.4219C20.1054 16.1555 20.7607 15.8836 21.244 15.4003C21.7273 14.9169 21.9992 14.2616 22 13.5781V2.57812C21.9992 1.89461 21.7273 1.23931 21.244 0.755995C20.7607 0.272675 20.1054 0.000796044 19.4219 0ZM20.2812 13.5781C20.2812 13.806 20.1907 14.0246 20.0295 14.1858C19.8684 14.347 19.6498 14.4375 19.4219 14.4375H2.57812C2.3502 14.4375 2.13162 14.347 1.97045 14.1858C1.80929 14.0246 1.71875 13.806 1.71875 13.5781V2.57812C1.71875 2.3502 1.80929 2.13162 1.97045 1.97046C2.13162 1.80929 2.3502 1.71875 2.57812 1.71875H19.4219C19.6498 1.71875 19.8684 1.80929 20.0295 1.97046C20.1907 2.13162 20.2812 2.3502 20.2812 2.57812V13.5781Z"
										fill="#FDB948" />
									<path
										d="M20.1363 1.07153L11.0011 7.86618L1.86594 1.07153L0.839844 2.4504L11.0011 10.0086L21.1623 2.4504L20.1363 1.07153Z"
										fill="#FDB948" />
								</svg>
							</span>
							hello@huntergalloway.com.au
						</a>
					</li>
					<li>
						<div class="items-center">
							<span class="circle">
								<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22"
									fill="none">
									<mask id="mask0_1714_744" style="mask-type:luminance" maskUnits="userSpaceOnUse"
										x="0" y="0" width="22" height="22">
										<path d="M22 0H0V22H22V0Z" fill="white" />
									</mask>
									<g mask="url(#mask0_1714_744)">
										<path d="M1.35352 8.89429L11.0015 16.0708L20.6481 8.89429" stroke="#FDB948"
											stroke-width="1.8" stroke-miterlimit="13.33" />
										<path
											d="M4.50354 5.91855L0.859375 8.63653V19.4217C0.859375 19.8775 1.04045 20.3147 1.36275 20.637C1.68506 20.9593 2.1222 21.1404 2.57801 21.1404H19.4218C19.8776 21.1404 20.3147 20.9593 20.637 20.637C20.9593 20.3147 21.1404 19.8775 21.1404 19.4217V8.63653L17.4444 5.87988"
											stroke="#FDB948" stroke-width="1.8" stroke-miterlimit="13.33" />
										<path d="M4.51172 11.322V0.859375H17.4883V11.3865" stroke="#FDB948"
											stroke-width="1.8" stroke-miterlimit="13.33" />
										<path d="M11.8593 7.43356H10.1406V5.7146H11.8593V7.43356Z" fill="#FDB948" />
										<path d="M14.953 7.43356H13.2344V5.7146H14.953V7.43356Z" fill="#FDB948" />
										<path d="M8.72286 7.43356H7.00391V5.7146H8.72286V7.43356Z" fill="#FDB948" />
									</g>
								</svg>
							</span>
							PO Box 553 Fortitude Valley QLD 4006
						</div>
					</li>
				</ul>

			</div>

		</div>
		<div class="contact_assessment assessment-blocks">
			<div class="assessment-blocks__item assessment-block">
				<div class="assessment-block__icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="32"
						height="32"
						viewBox="0 0 32 32"
						fill="none">
						<g clip-path="url(#clip0_2175_7792)">
							<path
								d="M31.551 19.2929C31.0472 18.957 30.5335 18.6868 30.0166 18.4823C30.1875 18.3349 30.3502 18.177 30.5037 18.0079H30.5038C31.8423 16.5341 32.3037 14.4626 31.8032 12.175C31.7179 11.7852 31.3952 11.4921 30.999 11.4446C30.9452 11.4382 30.8918 11.4327 30.8383 11.4273C31.4452 10.6169 31.8255 9.69836 31.949 8.71044C32.1959 6.7349 31.3815 4.77505 29.6559 3.19196C29.3619 2.92231 28.9294 2.8682 28.578 3.05723C26.5158 4.16701 25.2442 5.86615 24.9974 7.84168C24.7989 9.42977 25.2868 11.0076 26.3821 12.3878C25.9924 12.6442 25.6357 12.9477 25.3178 13.2978C23.9791 14.7716 23.5176 16.8431 24.0183 19.1308C24.031 19.1888 24.0496 19.2443 24.0722 19.2975C23.2329 19.992 22.574 20.9419 22.1364 22.0959C20.2236 21.5601 18.1683 22.0712 16.3473 23.5364C16.1384 23.7044 16.017 23.9489 16 24.2051C15.9831 23.9489 15.8616 23.7044 15.6528 23.5364C13.8318 22.0713 11.7765 21.5602 9.86363 22.0959C9.42606 20.9419 8.76709 19.992 7.92784 19.2975C7.95052 19.2443 7.96902 19.1888 7.98171 19.1308C8.48238 16.8431 8.02089 14.7716 6.68233 13.2979C6.36437 12.9477 6.00761 12.6443 5.61798 12.3879C6.7132 11.0076 7.20113 9.42977 7.00266 7.84168C6.75582 5.86615 5.48418 4.16695 3.42203 3.05723C3.07083 2.8682 2.63814 2.92225 2.34412 3.19196C0.618554 4.77511 -0.195832 6.73496 0.051071 8.71044C0.174491 9.69836 0.554625 10.6169 1.16141 11.4273C1.10805 11.4327 1.05468 11.4382 1.001 11.4446C0.604806 11.492 0.282164 11.7851 0.196863 12.1749C-0.303692 14.4626 0.157744 16.5341 1.49624 18.0079C1.64972 18.1769 1.81257 18.3348 1.98336 18.4822C1.46643 18.6867 0.952757 18.9569 0.449015 19.2928C0.117062 19.5141 -0.0384789 19.9214 0.0615696 20.3076C0.648612 22.5746 1.99623 24.2141 3.85629 24.9242C4.50107 25.1703 5.17429 25.2921 5.86007 25.2921C5.9488 25.2921 6.03779 25.2896 6.1269 25.2855C5.95187 25.6219 5.79558 25.9795 5.66047 26.3581C5.52636 26.7338 5.64478 27.1533 5.95568 27.4035C7.30536 28.4894 8.78366 29.0513 10.2375 29.0513C10.7489 29.0513 11.2576 28.9817 11.7562 28.8409C13.6722 28.2999 15.1609 26.7873 15.948 24.5817C15.978 24.4978 15.9946 24.4117 16.0001 24.3258C16.0055 24.4117 16.0222 24.4978 16.0521 24.5817C16.8393 26.7872 18.3279 28.2999 20.2439 28.8409C20.7427 28.9818 21.2511 29.0513 21.7627 29.0513C23.2164 29.0513 24.6949 28.4893 26.0445 27.4035C26.3554 27.1533 26.4738 26.7338 26.3397 26.3581C26.2046 25.9795 26.0484 25.6219 25.8733 25.2855C25.9624 25.2896 26.0514 25.2921 26.14 25.2921C26.8257 25.2921 27.4991 25.1702 28.1438 24.9242C30.0039 24.2141 31.3515 22.5746 31.9385 20.3076C32.0384 19.9215 31.883 19.5143 31.551 19.2929ZM3.12576 5.06626C4.28766 5.85515 4.99631 6.90482 5.14242 8.07421C5.28852 9.24361 4.85989 10.4354 3.9279 11.486C2.766 10.697 2.05735 9.64743 1.91125 8.47803C1.7652 7.30863 2.19371 6.1168 3.12576 5.06626ZM1.91443 13.2583C3.31836 13.2361 4.50226 13.686 5.29452 14.5584C6.08685 15.4307 6.42199 16.6521 6.26413 18.0476C4.85827 18.0711 3.67637 17.6199 2.88405 16.7476C2.09166 15.8752 1.75658 14.6538 1.91443 13.2583ZM4.52488 23.1728C3.42385 22.7525 2.57303 21.8144 2.08335 20.4982C3.32555 19.843 4.58512 19.7105 5.68615 20.1308C6.78712 20.551 7.63794 21.4892 8.12762 22.8055C6.88536 23.4606 5.62591 23.5932 4.52488 23.1728ZM11.2467 27.0369C10.1125 27.3571 8.86983 27.1127 7.69112 26.3491C8.29641 25.0819 9.22759 24.2234 10.3617 23.9032C11.496 23.5829 12.7386 23.8275 13.9172 24.5909C13.312 25.8582 12.3808 26.7166 11.2467 27.0369ZM26.8575 8.07421C27.0037 6.90482 27.7124 5.85515 28.8742 5.06626C29.8063 6.11686 30.2348 7.30863 30.0887 8.47803C29.9426 9.64743 29.2339 10.6971 28.0721 11.486C27.1401 10.4354 26.7114 9.24361 26.8575 8.07421ZM26.7055 14.5583C27.4978 13.6859 28.6809 13.2354 30.0855 13.2583C30.2434 14.6539 29.9082 15.8752 29.1159 16.7476H29.1159C28.3235 17.62 27.1419 18.0719 25.7358 18.0476C25.578 16.6521 25.9132 15.4307 26.7055 14.5583ZM20.7533 27.0369C19.6192 26.7166 18.688 25.8582 18.0827 24.5909C19.2614 23.8275 20.5039 23.5828 21.6383 23.9032C22.7724 24.2234 23.7036 25.0818 24.3088 26.3491C23.1302 27.1127 21.8876 27.3573 20.7533 27.0369ZM27.4751 23.1728C26.3741 23.5932 25.1145 23.4605 23.8724 22.8055C24.3621 21.4892 25.2129 20.551 26.3139 20.1308C27.4149 19.7104 28.6744 19.8431 29.9167 20.4982C29.427 21.8144 28.5762 22.7526 27.4751 23.1728Z"
								fill="#FFB027" />
							<path
								d="M11.9099 11.219C12.3469 11.2866 12.7839 11.2518 13.193 11.1213V18.2003C13.193 19.7509 14.4546 21.0124 16.0052 21.0124C17.5557 21.0124 18.8173 19.7509 18.8173 18.2003V5.95776C18.866 5.29241 18.677 4.63188 18.2826 4.09277C17.6249 3.19364 16.4904 2.76989 15.3934 3.01298C14.9949 3.10122 14.6132 3.28007 14.2885 3.53047L10.6801 6.17048C9.42877 7.08603 9.15555 8.84897 10.071 10.1004C10.5146 10.7067 11.1676 11.1039 11.9099 11.219ZM11.7871 7.68351L15.406 5.03582C15.414 5.03001 15.4218 5.02407 15.4295 5.01808C15.5382 4.93321 15.6659 4.87278 15.7987 4.84335C16.1643 4.76242 16.5544 4.90565 16.7695 5.19967C16.9038 5.38327 16.9666 5.60937 16.9463 5.83621C16.9438 5.86408 16.9425 5.89208 16.9425 5.92001V18.2002C16.9425 18.7171 16.522 19.1376 16.0051 19.1376C15.4882 19.1376 15.0677 18.7171 15.0677 18.2002V9.45351C15.0677 9.1005 14.8694 8.77736 14.5545 8.61763C14.4206 8.54964 14.2752 8.51615 14.1305 8.51615C13.935 8.51615 13.7406 8.57726 13.5769 8.697L12.894 9.19661C12.692 9.34447 12.4446 9.40483 12.197 9.3664C11.9495 9.32803 11.7319 9.19568 11.584 8.99358C11.2789 8.57639 11.37 7.98872 11.7871 7.68351Z"
								fill="#FFB027" />
						</g>
						<defs>
							<clipPath id="clip0_2175_7792">
								<rect width="32" height="32" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</div>
				<div class="assessment-block__title">
					Mortgage Broker <br />
					of the Year in
				</div>
				<div class="assessment-block__text">
					2017, 2018, 2019 <br />
					and 2024
				</div>
			</div>
			<div class="assessment-blocks__item assessment-block">
				<div class="assessment-block__icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="32"
						height="32"
						viewBox="0 0 32 32"
						fill="none">
						<path
							d="M30 14C30.55 14 31 13.55 31 13V9C31 8.63 30.8 8.29 30.47 8.12L17.47 1.12C17.32 1.04 17.16 1 17 1H15C14.83 1 14.67 1.04 14.53 1.12L1.53 8.12C1.21 8.29 1 8.63 1 9V13C1 13.55 1.45 14 2 14H4.25V25H4C3.45 25 3 25.45 3 26V29H2C1.45 29 1 29.45 1 30C1 30.55 1.45 31 2 31H30C30.55 31 31 30.55 31 30C31 29.45 30.55 29 30 29H29V26C29 25.45 28.55 25 28 25H27.75V14H30ZM3 10H18C18.55 10 19 9.55 19 9C19 8.45 18.55 8 18 8H5.97L15.25 3H16.75L29 9.6V12H3V10ZM22 25C21.45 25 21 25.45 21 26V29H11V26C11 25.45 10.55 25 10 25H9.75V14H22.25V25H22ZM6.25 14H7.75V25H6.25V14ZM5 27H9V29H5V27ZM23 29V27H27V29H23ZM25.75 25H24.25V14H25.75V25Z"
							fill="#FFB027" />
						<path
							d="M15.17 18.67H18.5C19.05 18.67 19.5 18.22 19.5 17.67C19.5 17.12 19.05 16.67 18.5 16.67H17V16C17 15.45 16.55 15 16 15C15.45 15 15 15.45 15 16V16.68C13.61 16.77 12.5 17.92 12.5 19.33C12.5 20.74 13.7 22 15.17 22H16.84C17.21 22 17.51 22.3 17.51 22.67C17.51 23.04 17.21 23.34 16.84 23.34H13.51C12.96 23.34 12.51 23.79 12.51 24.34C12.51 24.89 12.96 25.34 13.51 25.34H15.01V26.01C15.01 26.56 15.46 27.01 16.01 27.01C16.56 27.01 17.01 26.56 17.01 26.01V25.33C18.4 25.24 19.51 24.09 19.51 22.68C19.51 21.27 18.31 20.01 16.84 20.01H15.17C14.8 20.01 14.5 19.71 14.5 19.34C14.5 18.97 14.8 18.67 15.17 18.67Z"
							fill="#FFB027" />
						<path
							d="M22 8H21C20.45 8 20 8.45 20 9C20 9.55 20.45 10 21 10H22C22.55 10 23 9.55 23 9C23 8.45 22.55 8 22 8Z"
							fill="#FFB027" />
					</svg>
				</div>
				<div class="assessment-block__title">
					Access to 30+ <br />
					banks
				</div>
				<div class="assessment-block__text">
					and lenders in <br />
					Australia
				</div>
			</div>
			<div class="assessment-blocks__item assessment-block">
				<div class="assessment-block__icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="32"
						height="32"
						viewBox="0 0 32 32"
						fill="none">
						<path
							fill-rule="evenodd"
							clip-rule="evenodd"
							d="M16.0967 3.2713C9.19746 3.2713 3.60455 8.86421 3.60455 15.7634C3.60455 22.6626 9.19746 28.2556 16.0967 28.2556C22.9958 28.2556 28.5888 22.6626 28.5888 15.7634C28.5888 14.4785 28.3951 13.2409 28.0363 12.0771C27.8515 11.4777 28.1875 10.842 28.7869 10.6572C29.3862 10.4724 30.022 10.8085 30.2067 11.4078C30.6318 12.7861 30.8601 14.2491 30.8601 15.7634C30.8601 23.9171 24.2503 30.5268 16.0967 30.5268C7.94306 30.5268 1.33325 23.9171 1.33325 15.7634C1.33325 7.60981 7.94306 1 16.0967 1C17.1428 1 18.1649 1.10901 19.1516 1.31666C19.7653 1.44586 20.1581 2.04813 20.0289 2.66188C19.8997 3.27563 19.2974 3.66846 18.6837 3.53926C17.85 3.36378 16.9848 3.2713 16.0967 3.2713ZM31.0006 2.12355C31.4441 2.56704 31.4441 3.28611 31.0006 3.7296L24.9438 9.78639C24.5003 10.2299 23.7814 10.2299 23.3379 9.78639L20.3095 6.75799C19.866 6.3145 19.866 5.59544 20.3095 5.15194C20.753 4.70845 21.4719 4.70845 21.9154 5.15194L24.1409 7.37732L29.3947 2.12355C29.8382 1.68006 30.5571 1.68006 31.0006 2.12355ZM16.0967 5.54259C16.7239 5.54259 17.2323 6.05104 17.2323 6.67824V8.60478H17.2729C19.6025 8.60478 21.491 10.4933 21.491 12.8229C21.491 13.4502 20.9825 13.9585 20.3554 13.9585C19.7282 13.9585 19.2197 13.4502 19.2197 12.8229C19.2197 11.7477 18.3481 10.8761 17.2729 10.8761H17.2323V14.6481H17.3541C19.6388 14.6481 21.491 16.5002 21.491 18.785C21.491 21.0699 19.6388 22.9221 17.3541 22.9221H17.2323V24.8486C17.2323 25.4758 16.7239 25.9843 16.0967 25.9843C15.4695 25.9843 14.961 25.4758 14.961 24.8486V22.9221H14.8393C12.5545 22.9221 10.7023 21.0699 10.7023 18.785C10.7023 18.1578 11.2108 17.6494 11.838 17.6494C12.4652 17.6494 12.9736 18.1578 12.9736 18.785C12.9736 19.8154 13.8089 20.6508 14.8393 20.6508H14.961V16.9194H14.8596C12.5636 16.9194 10.7023 15.0581 10.7023 12.7621C10.7023 10.4661 12.5636 8.60478 14.8596 8.60478H14.961V6.67824C14.961 6.05104 15.4695 5.54259 16.0967 5.54259ZM14.961 10.8761H14.8596C13.818 10.8761 12.9736 11.7205 12.9736 12.7621C12.9736 13.8036 13.818 14.6481 14.8596 14.6481H14.961V10.8761ZM17.2323 16.9194V20.6508H17.3541C18.3843 20.6508 19.2197 19.8154 19.2197 18.785C19.2197 17.7546 18.3845 16.9194 17.3541 16.9194H17.2323Z"
							fill="#FFB027" />
					</svg>
				</div>
				<div class="assessment-block__title">Top approval rates</div>
				<div class="assessment-block__text">
					among Australian <br />
					Mortgage Brokers
				</div>
			</div>
			<div class="assessment-blocks__item assessment-block">
				<div class="assessment-block__icon">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						width="32"
						height="32"
						viewBox="0 0 32 32"
						fill="none">
						<g clip-path="url(#clip0_2175_7815)">
							<path
								d="M25.8777 9.35569L20.5946 8.588L18.2319 3.80075C17.3194 1.95156 14.6805 1.95213 13.7683 3.80069L11.4056 8.58794L6.12254 9.35569C4.08173 9.65219 3.2671 12.1619 4.74323 13.6009L8.5661 17.3272L7.66367 22.5888C7.3151 24.6214 9.45004 26.1716 11.2749 25.2126L16.0002 22.7282L20.7255 25.2126C22.5478 26.1705 24.6852 24.6211 24.3367 22.5888L23.4343 17.3272L27.2572 13.6008C28.7336 12.1613 27.9176 9.65212 25.8777 9.35569ZM25.7679 12.0732L21.5435 16.191C21.2921 16.4361 21.1774 16.7891 21.2367 17.1351L22.234 22.9496C22.284 23.2416 21.9802 23.4621 21.7181 23.3244L16.4964 20.5792C16.1857 20.4159 15.8144 20.4159 15.5037 20.5792L10.282 23.3244C10.0198 23.4622 9.7161 23.2415 9.76617 22.9496L10.7634 17.1351C10.8227 16.7891 10.708 16.4361 10.4567 16.191L6.23223 12.0732C6.02004 11.8664 6.1361 11.5094 6.42929 11.4668L12.2673 10.6184C12.6147 10.5679 12.915 10.3498 13.0704 10.035L15.6813 4.74481C15.8124 4.47931 16.1878 4.47913 16.3189 4.74488L18.9298 10.035C19.0852 10.3498 19.3855 10.568 19.7329 10.6184L25.5709 11.4668C25.864 11.5094 25.98 11.8665 25.7679 12.0732Z"
								fill="#FFB027" />
							<path
								d="M8.42065 2.94553L7.14496 1.18972C6.79859 0.713223 6.13159 0.607472 5.65509 0.953847C5.17852 1.3001 5.07284 1.96716 5.41915 2.44372L6.69484 4.19947C7.04134 4.67622 7.70834 4.78153 8.18471 4.43535C8.66127 4.08916 8.76696 3.4221 8.42065 2.94553Z"
								fill="#FFB027" />
							<path
								d="M4.18735 18.6827C4.00542 18.1225 3.40367 17.8156 2.84329 17.9979L0.737292 18.6822C0.177042 18.8643 -0.129521 19.4659 0.0524791 20.0263C0.234792 20.5874 0.837542 20.8929 1.39654 20.7111L3.50254 20.0268C4.06285 19.8447 4.36942 19.2429 4.18735 18.6827Z"
								fill="#FFB027" />
							<path
								d="M26.3449 0.953811C25.8684 0.607561 25.2013 0.713124 24.855 1.18969L23.5793 2.94544C23.233 3.422 23.3387 4.08912 23.8152 4.43531C24.292 4.78169 24.959 4.67581 25.3051 4.19944L26.5808 2.44369C26.9271 1.96712 26.8214 1.3 26.3449 0.953811Z"
								fill="#FFB027" />
							<path
								d="M31.2626 18.6822L29.1566 17.9979C28.5963 17.8156 27.9946 18.1225 27.8125 18.6827C27.6305 19.243 27.937 19.8448 28.4973 20.0268L30.6033 20.7111C31.1624 20.8929 31.7651 20.5874 31.9474 20.0263C32.1295 19.4661 31.8228 18.8643 31.2626 18.6822Z"
								fill="#FFB027" />
							<path
								d="M16 26.9492C15.4109 26.9492 14.9333 27.4268 14.9333 28.0158V30.1807C14.9333 30.7698 15.4109 31.2473 16 31.2473C16.589 31.2473 17.0666 30.7698 17.0666 30.1807V28.0158C17.0667 27.4267 16.5891 26.9492 16 26.9492Z"
								fill="#FFB027" />
						</g>
						<defs>
							<clipPath id="clip0_2175_7815">
								<rect width="32" height="32" fill="white" />
							</clipPath>
						</defs>
					</svg>
				</div>
				<div class="assessment-block__title">The highest rated</div>
				<div class="assessment-block__text">
					Mortgage Broker in <br />
					Brisbane (2000+ <br />
					reviews)
				</div>
			</div>
		</div>
		<div class='contact_subnote'>
			<h4>Please note that due to the complex nature of some types of loans, as of
				<?php echo date("M"); ?>
				<?php echo date("Y"); ?>, we are unable to assist with:
			</h4>
			<ul>
				<li><b>Construction, building or vacant land loans</b></li>
				<li><b>Loans for anyone based outside of Australia</b></li>
				<li><b>Bad credit loans</b></li>
				<li><b>Low documentation loans</b></li>
				<li><b>Bridging loans</b></li>
				<li><b>Commercial, or business lending.</b></li>
			</ul>
		</div>
	</div>
	<div class="contact_gray contact_office">
		<h2>Our offices in Brisbane:</h2>
		<div class="flex-lg">
			<a href="https://www.google.com/maps/place/Mortgage+Broker+Brisbane+-+Hunter+Galloway/@-27.46719,153.0256783,17z/data=!3m1!4b1!4m5!3m4!1s0x6b91581f483d77a3:0xfddf27dad5e4a55f!8m2!3d-27.46719!4d153.027867"
				target="_blank" class="col-lg-6">
				<b class="items-lg-center flex">
					<?php echo $iconLocation; ?>
					300 Queen Street Brisbane, QLD 4000
				</b>
				<iframe id="frameID1"
					src="https://maps.google.com.ua/maps?q=Mortgage Broker Brisbane - Hunter Galloway&hl=us&output=embed"
					width="100%" height="350px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</a>
			<a href="https://www.google.com/maps/place/3%2F540+Wickham+St,+Fortitude+Valley+QLD+4006,+%D0%90%D0%B2%D1%81%D1%82%D1%80%D0%B0%D0%BB%D0%B8%D1%8F/@-27.4524016,153.0358412,17z/data=!3m1!4b1!4m5!3m4!1s0x6b9159ecd384c92f:0xfad4dd4e81c194d2!8m2!3d-27.4524064!4d153.0380299?hl=ru-RU"
				target="_blank" class="col-lg-6">
				<b class="items-lg-center flex">
					<?php echo $iconLocation; ?>
					Level 10, 179 North Quay, Brisbane QLD 4000
				</b>
				<iframe id="frameID2" src="https://maps.google.com.ua/maps?q=10/179 North Quay&hl=us&output=embed"
					width="100%" height="350px" style="border:0; margin-left:auto;" allowfullscreen=""
					loading="lazy"></iframe>
			</a>
		</div>
	</div>

	<div class="contactp_prize_image flex">
		<img src="/wp-content/uploads/2019/07/best-mortgage-broker-2019.png" alt="">
		<img src="/wp-content/uploads/2019/12/2019_001.png" alt="">
		<img src="/wp-content/uploads/2019/12/2019_002.png" alt="">
		<img src="/wp-content/uploads/2018/11/finance-broker-of-the-year-2018.png" alt="">
		<img src="/wp-content/uploads/2018/11/30-under-20.png" alt="">
		<img src="/wp-content/uploads/2018/11/vow-award-mortgage-broker.png" alt="">
	</div>
</div>
</div> <!-- #main-content -->

<script>
	let contactForm = document.querySelector('.contact_form');
	const resultContactForm = document.querySelector('.result_ty');


	document.querySelector('.crs_custom_next').addEventListener('click', (e) => {
		e.preventDefault();
		const slideOne = document.querySelector('.crs_custom_form').querySelector('[data-slide="1"]');
		const slideTwo = document.querySelector('.crs_custom_form').querySelector('[data-slide="2"]');
		const textarea = document.querySelector('.crs_custom_form textarea');

		const existingErrorTips = document.querySelectorAll('.not-valid-tip');

		existingErrorTips.forEach((errorTip) => {
			errorTip.remove();
		});
		if (!textarea.value.trim()) {
			var errorTip = document.createElement('span');
			errorTip.classList.add('not-valid-tip');
			errorTip.textContent = 'Please enter your message.';
			textarea.insertAdjacentElement('afterend', errorTip);

			return;
		}


		slideTwo.style.display = 'block';
		slideOne.style.display = 'none';
	}, false);


	document.querySelector('.crs-contact-form').addEventListener('submit', (e) => {
		e.preventDefault();
		const form = e.target;
		const formData = new FormData(form);

		const requestType = formData.get('request-type');
		const nameField = formData.get('your-name');
		const emailField = formData.get('your-email');
		const phoneField = formData.get('your-phone');
		const messageField = formData.get('your-message');

		const errorMessages = {};

		if (!requestType) {
			errorMessages['request-type'] = 'Please select a request type.';
		}

		if (!nameField.trim()) {
			errorMessages['your-name'] = 'Please enter your name.';
		}

		if (!emailField.trim()) {
			errorMessages['your-email'] = 'Please enter a valid email address.';
		} else {
			var emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
			if (!emailRegex.test(emailField.trim())) {
				errorMessages['your-email'] = 'Please enter a valid email address. ';
			}
		}

		if (!phoneField.trim()) {
			errorMessages['your-phone'] = 'Please enter your phone number.';
		} else {
			var phoneRegex = /^(04\d{2}\s\d{3}\s\d{3}|\d{2}\s\d{4}\s\d{4})$/;
			if (!phoneRegex.test(phoneField.trim())) {
				errorMessages['your-phone'] = 'Please enter a valid phone number.';
			}
		}

		if (!messageField.trim()) {
			errorMessages['your-message'] = 'Please enter your message.';
		}

		// Remove existing error messages
		var existingErrorTips = document.querySelectorAll('.not-valid-tip');

		existingErrorTips.forEach(function(errorTip) {
			errorTip.remove();
		});

		// Create new error messages
		Object.keys(errorMessages).forEach(function(fieldName) {
			const field = form.querySelector('[name="' + fieldName + '"]');
			if (!field) {
				return;
			}
			const errorTip = document.createElement('span');
			errorTip.classList.add('not-valid-tip');
			errorTip.textContent = errorMessages[fieldName];

			if (field.matches('select')) {
				field.parentElement.insertAdjacentElement('afterend', errorTip);
			} else {
				field.insertAdjacentElement('afterend', errorTip);
			}
		});

		// If there are no error messages, proceed with form submission
		if (Object.keys(errorMessages).length !== 0) {
			return;
		}

		contactForm.dataset.submit = 'pending';

		fetch(`${location.origin}/wp-json/contact-form-7/v1/contact-forms/11830/feedback`, {
			method: 'POST',
			body: formData
		}).then((res) => res.json()).then((res) => {
			if (res.status === "validation_failed") {
				handleValidationErrors(res.invalid_fields, form);
				contactForm.dataset.submit = 'error';
				return;
			}

			if (res.status === 'mail_failed') {
				throw new Error(res.message);
			}

			contactForm.style.display = 'none';
			resultContactForm.style = '';

			document.querySelector('.crs_custom_submit').style = '';

			jQuery(function($) {
				$('html, body').animate({
					scrollTop: $('#result_ty').offset().top - (isMobile ? 71 : 0)
				}, 500);
			})
			contactForm.dataset.submit = 'success';

		}).catch((err) => {
			contactForm.dataset.submit = 'error';
			console.log('error: ', err)
			addErrorMessage(form, 'button[type="submit"]', err.message || 'An error occurred. Please try again later.');
		});
	}, false);

	function handleValidationErrors(errors, form) {
		errors.forEach((fieldObjError) => {
			addErrorMessage(form, `[name="${fieldObjError.field}"]`, fieldObjError.message);
		});
	}

	function addErrorMessage(form, selector, message) {
		const field = form.querySelector(selector);
		if (!field) {
			return;
		}
		const errorTip = document.createElement('span');
		errorTip.classList.add('not-valid-tip');
		errorTip.textContent = message;
		if (field.matches('select')) {
			field.parentElement.insertAdjacentElement('afterend', errorTip);
		} else {
			field.insertAdjacentElement('afterend', errorTip);
		}
	}

	document.querySelector('.contact_form__back').addEventListener('click', (e) => {
		const slideOne = document.querySelector('.crs_custom_form').querySelector('[data-slide="1"]');
		const slideTwo = document.querySelector('.crs_custom_form').querySelector('[data-slide="2"]');
		slideTwo.style.display = 'none';
		slideOne.style.display = 'block';
	})

	const phoneInput = document.querySelectorAll('input[name="your-phone"]');

	phoneInput.forEach(item => {
		let value = '';
		item.addEventListener('input', function(event) {
			var input = event.target;
			if (input.value.length <= 12) {
				var formattedPhoneNumber = formatPhoneNumber(input.value);
				input.value = formattedPhoneNumber;
				value = formattedPhoneNumber;
			} else {
				input.value = value;
			}
		});
		item.addEventListener('keydown', function(event) {
			var key = event.key;
			var selectionStart = item.selectionStart;
			var selectionEnd = item.selectionEnd;
			var value = item.value;

			if (key === 'Backspace' || key === 'Delete') {
				// If Backspace or Delete is pressed, remove the previous or next character respectively
				if (key === 'Backspace' && selectionStart > 0) {
					item.value = value.slice(0, selectionStart - 1) + value.slice(selectionEnd);
					item.setSelectionRange(selectionStart - 1, selectionStart - 1);
				} else if (key === 'Delete' && selectionEnd < value.length) {
					item.value = value.slice(0, selectionStart) + value.slice(selectionEnd + 1);
					item.setSelectionRange(selectionStart, selectionStart);
				}
				event.preventDefault(); // Prevent default behavior (e.g., removing entire value)
			}
		});
	})


	window.addEventListener('scroll', () => {
		const btnContactForm = document.querySelector('.contact_form .btn_yellow');
		const formContact = document.querySelector('.contact_form');

		if (btnContactForm && formContact && isMobile) {

			const formContactRect = formContact.getBoundingClientRect();
			const btnContactFormRect = btnContactForm.getBoundingClientRect()

			const windowHeight = window.innerHeight || document.documentElement.clientHeight;

			if (formContactRect.top < windowHeight && btnContactFormRect.bottom > 75) {
				document.querySelector('.footer_button').hidden = true;
			} else {
				document.querySelector('.footer_button').hidden = false;
			}
		}
	});
</script>
<?php

get_footer();
