<?php get_header(); ?>

<?php

$assets = '/wp-content/themes/hunter-galloway/assets/img/img_new/';

?>
<div id="main-content">
	<div class="container">

		<?php get_template_part('template-parts/calculators/calculate-capacity'); ?>

	</div> <!-- .container -->

</div> <!-- #main-content -->


<style>
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

	#main-content a:not(.btn_yellow):hover {
		color: #FFBA3A !important;
	}

	#main-content ul:not(.list) li {
		padding-left: 24px;
		position: relative;
		font-weight: 600;
		margin-bottom: 8px;
	}

	#main-content ul:not(.list, .tabs) {
		padding: 24px 0;
	}

	#main-content ul:not(.list, .tabs) li:before {
		content: '';
		position: absolute;
		left: 6px;
		top: 10px;
		width: 4px;
		height: 4px;
		border-radius: 50%;
		background-color: #FDB948;
	}

	#main-content .result-wrapper_block .list li p {
		font-size: 14px;
		font-weight: 600;
	}

	#main-content .container {
		max-width: 1252px;
		padding: 0 6px 40px !important;
		width: 100%;
	}

	.form-wrapper {
		background-color: transparent;
		padding: 0;
		max-width: 100%;
	}

	.main-description {
		border-radius: 8px;
		color: var(--White, #FFF);
		font-size: 16px;
		font-style: normal;
		font-weight: 400;
		line-height: 24px;
		padding: 40px;
		min-height: 256px;
		background: linear-gradient(180deg, rgba(0, 0, 0, 0.60) 0%, rgba(0, 0, 0, 0.00) 100%), url('<?php echo $assets; ?>mortgage_calculator_image.png') no-repeat center top / cover;
	}

	.main-description h1 {
		color: var(--White, #FFF);
		font-size: 40px;
		font-style: normal;
		font-weight: 700;
		line-height: 48px;
	}

	.form-wrapper .form {
		display: block !important;
		border-radius: 8px;
		border: 1px solid var(--Gray-300, #D8D8D8);
		padding: 12px 32px 32px;
	}

	.form-wrapper .form .btn_yellow {
		margin: 24px 0 0 0;
		border: none;
	}

	.form-wrapper .form>div {
		width: 100%;
		margin: 0;
	}

	.input-title {
		color: var(--Grey-dark, #262626);
	}

	.form-wrapper .input-box {
		padding-top: 20px;
		max-width: 500px;
	}

	.calculator-wrapper .input-wrapper.money-input {
		max-width: 400px;
	}

	.input-wrapper.select,
	.calculator-wrapper .input-box input[type="text"] {
		max-width: 400px;
	}

	.input-wrapper.radio-input-wrapper label {
		max-width: 140px;
	}

	.input-wrapper.radio-input-wrapper.radio-dependants label {
		max-width: 210px;
	}

	.input-description {
		color: var(--Grey-text, #444);
		font-size: 14px;
		line-height: 24px;
		max-width: 490px;
	}

	.form-wrapper .form>div:last-child .input-box:nth-last-child(2) {
		order: 1;
	}

	.input-wrapper.select select {
		padding: 15px;
	}

	#main-content>div>section>div>div.form-wrapper>div.form.flex-lg>div:nth-child(2)>div:nth-child(2) {
		order: 1;
	}

	.calculator-wrapper .input-box .input-wrapper.validation-failed::after {
		line-height: 1.4;
		padding-top: 2px;
	}

	@media(min-width: 992px) {
		.form-wrapper {
			display: flex;
			padding-bottom: 60px;
		}

		.main-description {
			margin-right: 24px;
			width: calc(50% - 12px);
		}

		.form-wrapper .form {
			width: calc(50% - 12px);
		}

		.radio-dependants.input-wrapper.radio-input-wrapper label:not(:first-child) {
			max-width: 65px;
		}
	}

	@media(max-width: 991px) {
		#main-content .container {
			padding: 24px 6px 40px !important;
			width: 100%;
		}

		.main-description {
			margin-bottom: 20px;
			min-height: 68.26vw;
			background: linear-gradient(0deg, rgba(0, 0, 0, 0.50) 0%, rgba(0, 0, 0, 0.50) 100%), url('<?php echo $assets; ?>mortgage_calculator_image.png') no-repeat center / cover;
		}

		.radio-dependants {
			max-width: 500px;
		}
	}

	@media(max-width: 767px) {
		.main-description {
			padding: 24px;
		}

		.main-description h1 {
			font-size: 32px;
			line-height: 40px;
		}

		.form-wrapper .form {
			padding: 12px 20px 32px;
		}

		.form-wrapper .input-box {
			padding-top: 24px;
		}

		.form>.btn_yellow img {
			margin-left: 4px;
		}

		.result-typ h3 {
			padding-bottom: 16px;
		}

		.result_get ul.list {
			margin-top: 16px;
		}
	}
</style>

<script>
	//mut
	const optionMut = {
		childList: true,
		subtree: true,
		attributeFilter: ['style']
	}

	const globalMutation = new MutationObserver((mutations) => {
		if (localStorage.getItem('scrollTo') != null && document.querySelector('.money-input_2')) {
			let value = localStorage.getItem('scrollTo');
			document.querySelector('.money-input_2').value = value;
			localStorage.removeItem('scrollTo')
		}

		globalMutation.disconnect();

		globalMutation.observe(document.body, optionMut);

	})

	globalMutation.observe(document.body, optionMut);
</script>
<?php

get_footer();
