
<style>
	/* banner */
	.banner_call {
		margin: 50px 0;
		border-radius: 8px;
		background: var(--Grey-dark, #262626);
		padding: 48px 72px;
	}

	.banner_call h3 {
		padding: 0;
		margin: 0 20px 0 0;
		color: #FFF;
		font-family: "Open Sans";
		font-size: 32px;
		font-style: normal;
		font-weight: 700;
		line-height: 40px; /* 125% */
	}

	#main-content .banner_call .btn_yellow {
		max-width: 187px;
		width: 100%;
		color: var(--Grey-dark, #262626);
		text-align: center;
		font-family: "Open Sans";
		font-size: 18px;
		font-style: normal;
		font-weight: 600;
		line-height: 48px;
	}

	@media(max-width: 991px) {
		#main-content .banner_call {
			flex-wrap: wrap;
			padding: 24px 16px;
			margin-top: 25px;
		}
		.banner_call h3 {
			margin: 0 0 20px 0;
			font-size: 20px;
			line-height: 28px;
		}
		#main-content .banner_call .btn_yellow {
			width: 100%;
    		max-width: 100%;
			font-size: 16px;
		}
    }
</style>
<div class="banner_call flex-center-between">
    <h3>We can find you the perfect <span class="text-nowrap">home loan</span> solution</h3>
    <a href="/get-free-assessment/"class="btn_yellow" target="_blank">Request a Call
        <img class="d-lg-none" src="<?php echo $assets; ?>16_arrow_r_black.svg" alt="arrow image">
    </a>
</div>