<?php get_header(); ?>

<div class="calc-rent" id='page-<?php the_ID(); ?>'>
	<div class="container calc-rent__container">
		<!-- Intro -->
		<h1 class="calc-rent__title"><?php the_title(); ?></h1>
		<div class="calc-rent__caption"><?php the_content(); ?></div>

		<!-- Сalculator -->
		<div class="calc-rent__inner">
			<img class='calc-rent__inner-manager' src="<?php echo get_template_directory_uri(); ?>/images/manager_new.png">
			<div class="calc-rent__row">
				<!-- Calc input -->
				<div class="calc-rent__main">
					<div class="calc-rent__main-title">Your weekly rent</div>
					<div class="calc-rent__main-caption">The rent you are currently paying for the property you live in.</div>

					<div class="calc-rent__main-input">
						<input type="text" placeholder="850" value="<?php echo $_GET['initPrice'] ?? '0'; ?>">
					</div>

					<div class="calc-rent__btn-wrap">
						<button class="btn calc-rent__btn" style="min-width: 100%;">Recalculate</button>
					</div>
				</div>

				<!-- Result -->
				<div class="calc-rent__info">
					<div class="calc-rent__info-block">
						Your current weekly rent payment is &nbsp;<span class="calc-rent__mark calc-rent__mark-amount">$ <span id='rentPrice'>_ _ _ _</span>,</span> <br>
						over <strong class="calc-rent__mark">5 years</strong> that amounts to a total of &nbsp;<span class="calc-rent__mark calc-rent__mark-amount">$ <span id='fiveYearsPrice'>_ _ _ , _ _ _</span>.</span>
					</div>
					<div class="calc-rent__info-block">
						Based on an interest rate of <strong class="calc-rent__mark">6.00%</strong> <br>
						you could afford a mortgage of &nbsp;<span class="calc-rent__mark calc-rent__mark-amount">$ <span id='affordPrice'>_ _ _ , _ _ _</span></span> <br>
						<span class="calc-rent__mark">with the same weekly payments.</span>
					</div>
				</div>
			</div>

			<div class="calc-rent__banner">
				<div class="calc-rent__banner-text">Find out how to secure a loan for your mortgage <br> with our award-winning brokers</div>
				<a href='#' class="calc-rent__banner-btn btn_yellow rc_open  pum-trigger">Learn how to secure a loan for your new home</a>
			</div>
		</div>

		<!-- Additonal links -->
		<div class="calc-rent__links">
			<div class="calc-rent__links-block">
				<div class="calc-rent__links-title">Our checklist to maximize your <br> chances of securing a loan</div>
				<a href='#' class="calc-rent__links-link keradan" onclick="keradan.mbb.show_popup('checklist'); return false;">See our checklist</a>
			</div>

			<div class="calc-rent__links-block">
				<div class="calc-rent__links-title">What is the process of applying <br> for a loan?</div>
				<a href='#' onclick="keradan.mbb.show_popup('roadmap'); return false;" class="calc-rent__links-link">Explore our roadmap</a>
			</div>
		</div>

		<!-- About -->
		<div class="calc-rent__about">
			<p>Hunter Galloway Finance Pty Ltd T/A Mortgage Broker Brisbane - Hunter Galloway ABN 20 605 252 926. Credit Representative 476903 is authorised under Australian Credit Licence 389328. Your full financial situation would need to be reviewed prior to acceptance of any offer or product</p>
			<p>Calculations are estimates provided as a guide only, and are not a loan approval. Applications are subject to credit approval, satisfactory security and minimum deposit requirements. Conditions apply to all loan options.</p>
		</div>
	</div>
</div>

<?php /* Keradan: Load popups markup, styles and scripts */ ?>
<?php include 'mortgage-broker-brisbane-popups.php'; ?>

<script src="https://unpkg.com/imask"></script>
<script>
	document.querySelector('.calc-rent__btn').addEventListener('click', function(e) {
		e.preventDefault();
		var calcValue = parseInt(document.querySelector('.calc-rent__main-input input').value.replaceAll(',', ''));
		var fiveYearsPrice = parseInt(calcValue) * 52 * 5;
		var mortgagePrice = PV((6.00 / 100) / 12, 360, (52 * parseInt(calcValue)) / 12);

		document.querySelector('#rentPrice').innerText = numberWithCommas(calcValue);
		document.querySelector('#fiveYearsPrice').innerText = numberWithCommas(fiveYearsPrice);
		document.querySelector('#affordPrice').innerText = numberWithCommas(mortgagePrice);

	})

	if (<?php echo ($_GET['initPrice'] ?? '0'); ?>) {
		document.querySelector('.calc-rent__btn').click();
	}

	// function formattingNumber(num) {
	// 	// return (num).toString().replace("/(?:\d)(?=(\d\d\d)+(?!\d))/g", ',');
	// 	return (num).toString().replace("/\B(?=(\d{3})+(?!\d))/g", ',');
	// }

	function numberWithCommas(x) {
		return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	function PV(rate, nper, pmt) {
		return (pmt / rate * (1 - Math.pow(1 + rate, -nper))).toFixed();
	}

	// Input mask
	IMask(document.querySelector('.calc-rent__main-input input'), {
		mask: Number,
		thousandsSeparator: ',',
	})



	//mut
	const optionMut = {
		childList: true,
		subtree: true,
		attributeFilter: ['style']
	}

	const globalMutation = new MutationObserver((mutations) => {
		if (localStorage.getItem('scrollTo') != null && document.querySelector('.calc-rent__main-input input')) {
			let value = localStorage.getItem('scrollTo');
			document.querySelector('.calc-rent__main-input input').value = value;
			localStorage.removeItem('scrollTo')
		}

		globalMutation.disconnect();

		globalMutation.observe(document.body, optionMut);

	})

	globalMutation.observe(document.body, optionMut);
</script>

<?php

get_footer();
