<style>
	.reviews {
		margin: 50px 0 0;
		padding: 80px 0;
		background: var(--Yellow-light, #FFF5E2);
		outline: none;
	}

	.reviews h2 {
		padding-bottom: 24px;
	}

	#main-content .reviews h2+p {
		font-size: 20px;
		line-height: 28px;
		color: var(--Grey-text, #444);
	}

	.slider_customer {
		padding-top: 74px;
	}

	.slider_customer .img_holder {
		width: 76px;
		height: 76px;
		margin: -38px auto 14px;
		position: relative;
		z-index: 2;
	}

	.slider_customer .slide_item {
		border-radius: 10px;
		background: linear-gradient(270deg, #FFF 44.56%, rgba(255, 255, 255, 0.00) 164.06%);
		box-shadow: 4px 8px 16px 0px rgba(0, 0, 0, 0.05);
		padding: 0 33px 24px;
		text-align: center;
		transition: all 0.3s ease;
	}

	.slider_customer .slide_item.swiper-slide-active {
		border: 1px solid var(--Grey-dark, #262626);
		background: var(--Grey-dark, #262626);
		margin: 50px 0 0;
		z-index: 1;
		padding: 0 23px 24px;
		position: relative;
	}

	.slider_customer .slide_item.swiper-slide-active::before {
		content: '';
		position: absolute;
		left: -28px;
		top: -1px;
		width: calc(100% + 56px);
		background: var(--Grey-dark, #262626);
		border-radius: 10px;
		height: calc(100% + 2px);
		z-index: -1;
	}

	.slide_content {
		position: relative;
	}

	#main-content .slider_customer .text {
		color: var(--Grey-text, #444);
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 4;
		-webkit-box-orient: vertical;
		overflow: hidden;
		font-size: 14px;
		line-height: 22px;
	}

	#main-content .slider_customer .text.line-3 {
		-webkit-line-clamp: 3;
	}

	#main-content .slider_customer .user_name {
		padding-bottom: 17px;
		color: var(--Grey-text, #444);
		font-size: 14px;
		line-height: 22px;
		font-weight: 700;
		position: inherit;
		text-transform: capitalize;
	}

	#main-content .slider_customer .slide_item.swiper-slide-active .user_name {
		font-size: 20px;
		line-height: 110%;
		color: #fff;
		padding-bottom: 22px;
	}

	#main-content .slider_customer .slide_item.swiper-slide-active .text {
		color: #fff;
	}

	#main-content .slider_customer .slide_content.show .text {
		-webkit-line-clamp: inherit !important;
	}

	#main-content .slider_customer .slide_content .btn_show_more .less,
	#main-content .slider_customer .slide_content.show .btn_show_more .more {
		display: none;
	}

	#main-content .slider_customer .slide_content:not(.show) .btn_show_more .more,
	#main-content .slider_customer .slide_content.show .btn_show_more .less {
		display: inline;
	}

	#main-content .slider_customer .slide_item.swiper-slide-active .text {
		font-size: 18px;
		line-height: 26px;
	}

	#main-content .slider_customer .btn_show_more {
		color: var(--White, #FFF) !Important;
		font-weight: 600;
		position: absolute;
		right: 0;
		bottom: 0;
		background-color: #262626;
		z-index: 1;
		padding-right: 40px;
		display: none;
		cursor: pointer;
		white-space: nowrap;
	}

	#main-content .slider_customer .btn_show_more .more span,
	#main-content .slider_customer .btn_show_more .less {
		text-decoration-line: underline;

	}

	#main-content .slider_customer .btn_show_more .less {
		margin-top: 4px;
	}

	#main-content .slider_customer .btn_show_more span {
		pointer-events: none;
	}

	#main-content .slider_customer .swiper-slide-active .btn_show_more {
		display: block;
	}

	#main-content .slider_customer .swiper-slide-active .slide_content.show .btn_show_more {
		display: inline;
		position: initial;
		padding: 0 0 0 10px;
	}

	.slider_customer .slide-button-next,
	.slider_customer .slide-button-prev {
		top: 251px;
	}

	.slider_customer .slide-button-next {
		right: calc(33% - 27px);
		transform: translateX(50%);
	}

	.slider_customer .slide-button-prev {
		left: calc(33% - 27px);
		transform: translateX(-50%);
	}

	.slider_customer .rating {
		margin-top: 22px;
	}

	.slider_customer .rating img {
		width: 22px;
		margin: 0 2px;
	}

	.slider_customer .slide_item.swiper-slide-active .rating img {
		width: 29px;
		margin: 0 2.5px;
	}

	@media(min-width: 992px) {
		.reviews {
			min-height: 640px;
		}
	}

	@media(max-width: 991px) {
		#main-content .reviews h2+p {
			font-size: 14px;
			line-height: 22px;
		}

		.reviews {
			margin: 25px 0;
			padding: 0 16px;
			background-color: transparent;
		}

		#main-content .reviews .container {
			border-radius: 8px;
			background: var(--Yellow-light, #FFF5E2);
			padding: 24px !important;
		}

		.swiper-wrapper {
			display: block;
		}

		.slider_customer .slide_item {
			margin: 60px auto 0;
			padding: 46px 14px 20px;
		}

		.slider_customer .slide_item:nth-child(n+4) {
			display: none;
		}

		.slider_customer.show .slide_item {
			display: block !important;
		}

		.slider_customer {
			padding: 0;
		}

		.reviews h2 {
			font-size: 24px;
			line-height: 32px;
			padding-bottom: 8px;
		}

		.slider_customer .img_holder {
			width: 62px;
			height: 62px;
			margin: 0;
			position: absolute;
			left: 50%;
			bottom: 100%;
			transform: translate(-50%, 50%);
		}

		#main-content .slider_customer .user_name {
			font-size: 16px;
			font-weight: 700;
			line-height: 24px;
		}

		#main-content .slider_customer .btn_show_more {
			display: block;
			background-color: #fff;
			color: var(--Grey-text, #444) !important;
			padding-right: 0;
			font-weight: 700;
		}

		.slider_customer .slide-button-next,
		.slider_customer .slide-button-prev {
			display: none;
		}

		.reviews .btn_show {
			margin-top: 24px;
		}

		#main-content .slider_customer .slide_content.show .btn_show_more {
			display: block;
			position: static;
			background: transparent;
			order: 1;
		}
	}
</style>


<?php while (have_posts()):
	the_post(); ?>

	<article class="reviews" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="container text-lg-center">
			<h2>We appreciate our customers’ feedback!</h2>
			<p>Here’s what some of our customers say about our work.</p>
			<?php if (!$is_page_builder_used): ?>
				<h1 class="entry-title main_title">
					<?php the_title(); ?>
				</h1>

				<?php
				$thumb = '';

				$width = (int) apply_filters('et_pb_index_blog_image_width', 1080);

				$height = (int) apply_filters('et_pb_index_blog_image_height', 675);
				$classtext = 'et_featured_image';
				$titletext = get_the_title();
				$thumbnail = get_thumbnail($width, $height, $classtext, $titletext, $titletext, false, 'Blogimage');
				$thumb = $thumbnail["thumb"];

				if ('on' === et_get_option('divi_page_thumbnails', 'false') && '' !== $thumb)
					print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height);
				?>

			<?php endif; ?>

			<div class="slider_customer swiper-container swiper" style="overflow: hidden;">
				<div class="swiper-wrapper">
					<?php
					$contents = file_get_contents("google_otz.txt");

					$lines = explode("|", $contents);
					foreach ($lines as $line) {

						$linesfin = @explode("#", $line, 2)[0];
						$linename = @explode("#", $line, 2)[1];

						if ($linesfin == 'rev') {
							$linename_1 = explode("%", $linename);

							foreach ($linename_1 as $linename_2) {
								$linename_2_name = explode("$", $linename_2)[0];
								$linename_2_img = explode("$", $linename_2)[1];
								$linename_2_ocen = explode("$", $linename_2)[2];
								$linename_2_otz = explode("$", $linename_2)[3];
								$linename_2_date = explode("$", $linename_2)[4];
								$kl = '';
								for ($i = 1; $i <= $linename_2_ocen; $i++) {
									$kl .= '<img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star" />';
								}


								if ($linename_2_otz != '') {
									echo '<div class="slide_item swiper-slide">
												<div class="img_holder"><img src="' . $linename_2_img . '" alt="user"></div>
												
												<p class="user_name">' . $linename_2_name . '</p>
												<div class="slide_content">
													<p class="text">' . $linename_2_otz . '</p>
													<a class="btn_show_more d-none">
														<span class="more">... <span>Read more</span></span>
														<span class="less">Show less</span>
													</a>
												</div>
												<div class="rating">' . $kl . '</div>
											</div>';
								}
							}
						}
					}
					?>

				</div>

				<!-- Add Arrows -->
				<div class="slide-button-next"></div>
				<div class="slide-button-prev"></div>
			</div>

			<button type="button" class="btn_yellow btn_show d-lg-none">Show more
				<img src="<?php echo $assets; ?>16_arrow_r_black.svg" alt="arrow">
			</button>


			<?php
			if (!$is_page_builder_used && comments_open() && 'on' === et_get_option('divi_show_pagescomments', 'false'))
				comments_template('', true);
			?>
		</div>
	</article>
	<!-- .et_pb_post -->

<?php endwhile; ?>

<script>
	let optionSwiper = {
		slidesPerView: 3,
		spaceBetween: 0,
		initialSlide: 1,
		allowTouchMove: false,
		touchMove: false,
		centeredSlides: true,
		loop: true,
		speed: 800,
		navigation: {
			nextEl: '.slider_customer .slide-button-next',
			prevEl: '.slider_customer .slide-button-prev',
		}
	}

	//slider
	let waitSwiper = setInterval(() => {
		if (typeof Swiper === 'function') {
			clearInterval(waitSwiper)

			var swiper = new Swiper('.slider_customer', optionSwiper);

			swiper.on('slideChange', function() {
				document.querySelectorAll('.btn_show_more').forEach(item => {
					item.parentElement.classList.remove('show')
				})
			});

			function checkScreenWidth() {
				if (isMobile) {
					if (swiper) {
						swiper.destroy();
						swiper = undefined;
					}
				} else {
					if (swiper === undefined) {
						swiper = new Swiper('.swiper-container', optionSwiper);
						swiper.on('slideChange', function() {
							document.querySelectorAll('.btn_show_more').forEach(item => {
								item.parentElement.classList.remove('show')
							})
						});
					}
				}

				setTimeout(() => {
					document.querySelectorAll('.slider_customer .swiper-slide .slide_content:not(.show) .text').forEach(item => {
						if (item.scrollHeight > item.clientHeight) {
							item.classList.add('line-3')
							item.parentElement.querySelector('.btn_show_more').classList.remove('d-none')
						} else {
							item.classList.remove('line-3')
							item.parentElement.querySelector('.btn_show_more').classList.add('d-none')
						}
					})
				}, 200)

			}

			checkScreenWidth();

			window.addEventListener('resize', () => {
				checkScreenWidth();
			})


			document.querySelectorAll('.btn_show_more').forEach(item => {
				item.addEventListener('click', (e) => {
					e.preventDefault()
					item.parentElement.classList.toggle('show')
				})
			})

			document.querySelector('.btn_show').addEventListener('click', (e) => {
				e.target.previousElementSibling.classList.toggle('show')
				e.target.hidden = true;
				checkScreenWidth();
			})
		}
	}, 100)
</script>