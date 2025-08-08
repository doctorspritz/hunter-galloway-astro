<?php
/*

Template name: Post single

*/

get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>
<div id="main-content">
    <section class="hero_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h1 class="hero_title">Mortgage Broker Brisbane</h1>
                <p class="hero_subtitle">Improve your chances of getting a loan with an award winning mortgage broker.<br> We have one of the highest loan approval rates in the country.</p>
                <p class="hero_text">Find out your chances of getting a loan</p>
                <div class="btn_wrap">
                    <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
                </div>
                <p class="hero_text bottom-text">We promise to get back to you within 4 business hours</p>
            </div>
        </div>
    </section>

    <section class="reputation_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h2 class="inner_title">Our reputation and achievements</h2>
                <div class="market_wrapper">
                    <div class="market_text">
                        <span>Market average rejection rate is 40%, our rejection rate is <strong>3%</strong></span>
                        <div class="market_dd">
                            <div class="inner">
                                Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by <a href="https://www.mortgagebusiness.com.au/breaking-news/13042-home-loan-rejection-rate-hits-40" alt="">'DigitalFinance Analytics DFA'</a>. In 2017 to 2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reputation_prize">
                    <span>2019 Mortgage Broker of the Year</span>
                </div>

                <div class="front_popup_prize_image flex">
                    <div class="slider_prize swiper-container">
                        <!-- Swiper -->
                        <div class="swiper-wrapper">
                            <div class="slide_item swiper-slide">
                                <img src="/wp-content/uploads/2019/07/best-mortgage-broker-2019.png" alt="">
                            </div>
                            <div class="slide_item swiper-slide">
                                <img src="/wp-content/uploads/2019/12/2019_001.png" alt="">
                            </div>
                            <div class="slide_item swiper-slide">
                                <img src="/wp-content/uploads/2019/12/2019_002.png" alt="">
                            </div>
                            <div class="slide_item swiper-slide">
                                <img src="/wp-content/uploads/2018/11/finance-broker-of-the-year-2018.png" alt="">
                            </div>
                            <div class="slide_item swiper-slide">
                                <img src="/wp-content/uploads/2018/11/30-under-20.png" alt="">
                            </div>
                            <div class="slide_item swiper-slide">
                                <img src="/wp-content/uploads/2018/11/vow-award-mortgage-broker.png" alt="">
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="slide-button-next"></div>
                        <div class="slide-button-prev"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="risk_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h2 class="inner_title">Don’t risk having your home loan declined</h2>
                <div class="risk_holder">
                    <div class="risk_inner-left">
                        <div>Did you know that over
                            <div class="market_text">
                                <span>40%</span>
                                <div class="market_dd">
                                    <div class="inner">
                                        Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by <a href='https://www.mortgagebusiness.com.au/breaking-news/13042-home-loan-rejection-rate-hits-40' alt=''>'DigitalFinance Analytics DFA'</a>. In 2017 to 2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
                                    </div>
                                </div>
                            </div>
                            of home loan applications that get submitted never make it to settlement? Don’t take that risk.
                        </div>

                        <ul class="risk_list">
                            <li class="scheme_ico">
                                <p class="list_title">We know the banks inside out</p>
                                <p class="list_text">
                                    Our brokers have seen all sorts of mistakes in the past! With their level of experience, they know the problems you may face on your loan application and how to mitigate them when applying with a specific bank or lender. We have a wide range of lenders on our panel and our brokers intimately understand their credit policies.
                                </p>
                            </li>
                            <li class="umbrella_ico">
                                <p class="list_title">Reducing risk of rejection</p>
                                <p class="list_text">We can do this through our own internal credit assessment process which we complete before applying with any lender. Our team has its own internal Credit Manager who reviews each application before being submitted to the lenders, meaning we won’t apply with a lender who won’t approve your loan.</p>
                            </li>
                        </ul>
                    </div>

                    <div class="risk_imgwrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/manager_new.png" alt="manager">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="why_choose" class="why_choose why_choose_widget widget">
        <div class="container">
            <div class="inner_widget">
                <div class="why_choose_title">
                    Why Choose Hunter Galloway As<br>Your Mortgage Broker?
                </div>
                <div class="why_choose_blocks">
                    <div class="why_choose_blocks_inner flex">
                        <div class="why_choose_item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/why_choose_001.svg" alt="mortgage-loan-approval">
                            <div class="why_choose_item_title">
                                One of the lowest rejection rates
                            </div>
                            <div class="why_choose_item_text">
                                across Mortgage Brokers  in Australia
                            </div>
                        </div>
                        <div class="why_choose_item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/why_choose_002.svg" alt="finance-brokers-brisbane-reviews">
                            <div class="why_choose_item_title">
                                The highest rated and most reviewed
                            </div>
                            <div class="why_choose_item_text">
                                Mortgage Broker in Brisbane  on Google
                            </div>
                        </div>
                        <div class="why_choose_item">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/why_choose_003.svg" alt="brokers-brisbane">
                            <div class="why_choose_item_title">
                                We have direct access to 30+ banks and lenders
                            </div>
                            <div class="why_choose_item_text">
                                across Australia
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btn_wrap">
                    <a class="btn_yellow rc_open B-trigger" href="#">Find out if you're eligible for a loan</a>
                </div>
            </div>
        </div>
    </section>

    <section class="why_do_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h2 class="inner_title">Why do I need a broker if I can get a loan through my bank?</h2>
                <p class="subtitle">Just compare these two options when applying for a loan</p>
                <div class="why_do_holder">
                    <div class="col_yellow">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/logo_dark.svg" alt="Mortgage-broker-brisbane-logo-small">
                        </div>
                        <div class="col_title">
                            <p>Get a Loan with Hunter Galloway</p>
                        </div>
                        <ul class="why_do_list">
                            <li>We take extra time up front to go through your full situation and provide a complete lending solution.</li>
                            <li>Our brokers will look at your needs now and into the future, to make sure you have the best possible loan that looks after all of your needs.</li>
                            <li>A mortgage broker acts on your behalf to arrange a home loan through a bank or lender. Australian banks and lenders have different policies and loan requirements, and it is a brokers job to find a loan from one of these parties that fit with your individual situation.</li>
                        </ul>
                    </div>
                    <div class="col_dark">
                        <div>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/white_hand.svg" alt="Mortgage-broker-hand">
                        </div>
                        <div class="col_title">
                            <p>Applying directly to a lender</p>
                        </div>
                        <ul class="why_do_list">
                            <li>You might have a situation where your bank will approve a loan for you to buy a block of land and then not approve the construction loan when its time to construct a house on it!</li>
                            <li>Quite often bank policy can be set in stone, and due to the complexity bank staff quite honestly don’t know it nor do many mortgage brokers Brisbane. They are not familiar with complex situations and how to correctly assess them. This can sometimes cause it to take quite a long time to process your application and even in some instances mean your loan will get declined for no good reason.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how_much_widget widget">
        <div class="container">
            <div class="inner_widget">
                <div class="how_much_holder">
                    <div class="col_img">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bank.svg">
                    </div>
                    <div class="col_text">
                        <h2 class="inner_title">How much does it cost to use a broker and your services?</h2>
                        <p>Our services are completely free for all home and investment loans. We get paid by the lenders for doing the work, collating your loan application and meeting with you. This work would otherwise be done by a bank manager or branch lender so you get access to the same rates as if you went to the lender directly.</p>
                        <p>The advantage for you is that unlike when dealing with one bank, we can help you work with a wider variety of lenders and get the best options that work for you choosing from our panel of over 30 banks and lenders!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dark_holder_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h3 class="inner_title">Would you like to learn about your situation? </h3>
                <div class="btn_wrap">
                    <a class="btn_yellow rc_open C-trigger" href="#">Check if you qualify for a loan</a>
                </div>
            </div>
        </div>
    </section>

    <section class="dark_btn_widget widget">
        <div class="container">
            <div class="inner_widget">
                <div class="btn_wrap">
                    <a class="btn_yellow rc_open D-trigger" href="#">Discover your individual borrowing capacity</a>
                </div>
            </div>
        </div>
    </section>

    <section class="reviews_widget widget">
        <div class="container">
            <div class="inner_widget">
                <div class="title_holder">
                    <h2 class="inner_title">Google reviews of our customers</h2>
                    <p>Hunter Galloway Mortgage Brokers have helped hundreds of home owners.</p>
                    <p>We have built a brilliant reputation for being extremely well organised, helpful and making the home loan process as smooth as possible</p>
                </div>
                <div class="slider_holder swiper-container">
                    <!-- Swiper -->
                    <div class="swiper-wrapper">
                        <div class="slide_item swiper-slide">
                            <div class="img_holder">
<!--                                <img src="/wp-content/themes/hunter-galloway/assets/img/testimonial_reynold.png" alt="user">-->
                                <img src="/wp-content/uploads/2018/03/mortgage-broker-brisbane-testimonial.png" alt="user">
                            </div>
                            <div class="rating_holder">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                            </div>
                            <div class="text_holder">
                                <p>
                                    My mortgage was not your typical simple loan; it required a lot of attention and out of the box thinking.
                                    <span class="dots">...</span>
                                    <span class="show_more_text">All of this was provided by the team.
                                        Both Nathan and Josh worked tirelessly to get the result and outcome that I needed.
                                        They are incredibly personable, professional and a joy to work with.</span>
                                </p>
                            </div>
                            <div class="btn_holder">
                                <a class="btn_show_more">
                                    <span class="more">Show more</span>
                                    <span class="less">Show less</span>
                                </a>
                            </div>
                            <div>
                                <p class="user_name">Reynold</p>
                                <p class="reviews_date">3 weeks ago</p>
                            </div>
                        </div>

                        <div class="slide_item swiper-slide">
                            <div class="img_holder">
<!--                                <img src="/wp-content/themes/hunter-galloway/assets/img/testimonial_john.png" alt="user">-->
                                <img src="/wp-content/uploads/2018/03/mortgage-broker-brisbane-testimonial-2.png" alt="user">
                            </div>
                            <div class="rating_holder">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                            </div>
                            <div class="text_holder">
                                <p>These gentlemen came recommended and I was genuinely impressed;
                                    the personalized service and
                                    <span class="dots">...</span>
                                    <span class="show_more_text">very rapid reply to queries and constant updates was impressive as well as the ease with which they performed all the necessary work. They are very thorough
                                        and whilst collating paperwork is never much fun, they make it easy and explain why having all in place
                                        first is the best method. Very impressed!</span>
                                </p>
                            </div>
                            <div class="btn_holder">
                                <a class="btn_show_more">
                                    <span class="more">Show more</span>
                                    <span class="less">Show less</span>
                                </a>
                            </div>
                            <div>
                                <p class="user_name">Charles Phillis</p>
                                <p class="reviews_date">3 weeks ago</p>
                            </div>
                        </div>

                        <div class="slide_item swiper-slide">
                            <div class="img_holder">
<!--                                <img src="/wp-content/themes/hunter-galloway/assets/img/testimonial_barbara.png" alt="user">-->
                                <img src="/wp-content/uploads/2018/03/mortgage-broker-brisbane-testimonial3.png" alt="user">
                            </div>
                            <div class="rating_holder">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                            </div>
                            <div class="text_holder">
                                <p>Thank you so much to Nathan, Josh, Jared and the team for everything that they
                                    did for us in the process of buying our
                                    <span class="dots">...</span>
                                    <span class="show_more_text">first house. They truly made it a seamless process. The team were always so on top of everything and kept us in the loop every step of the way. We will recommend Hunter Galloway to everyone we know! Thanks again boys!</span>
                                </p>
                            </div>
                            <div class="btn_holder">
                                <a class="btn_show_more">
                                    <span class="more">Show more</span>
                                    <span class="less">Show less</span>
                                </a>
                            </div>
                            <div>
                                <p class="user_name">Melissa Allison</p>
                                <p class="reviews_date">3 weeks ago</p>
                            </div>
                        </div>

                        <div class="slide_item swiper-slide">
                            <div class="img_holder">

<!--                            <img src="/wp-content/themes/hunter-galloway/assets/img/testimonial_mary.png" alt="user">-->
                                <img src="/wp-content/uploads/2018/03/mortgage-broker-brisbane-testimonial4.png)" alt="user">
                            </div>
                            <div class="rating_holder">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                            </div>
                            <div class="text_holder">
                                <p>
                                    We had a really great experience with Nathan from Hunter Galloway. Would definitely recommend him
                                    <span class="dots">...</span>
                                    <span class="show_more_text"> to anyone who is looking for a finance broker.
                                        He certainly knows his stuff, and his constant communication during the loan
                                        approval process was incredible.</span>
                                </p>
                            </div>
                            <div class="btn_holder">
                                <a class="btn_show_more">
                                    <span class="more">Show more</span>
                                    <span class="less">Show less</span>
                                </a>
                            </div>
                            <div>
                                <p class="user_name">Bianca Smith</p>
                                <p class="reviews_date">3 weeks ago</p>
                            </div>
                        </div>

                        <div class="slide_item swiper-slide">
                            <div class="img_holder">
<!--                                <img src="/wp-content/themes/hunter-galloway/assets/img/testimonial_reynold.png" alt="user">-->
                                <img src="/wp-content/uploads/2018/03/mortgage-broker-brisbane-testimonial5.png)" alt="user">
                            </div>
                            <div class="rating_holder">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                            </div>
                            <div class="text_holder">
                                <p>
                                    I would recommend Nathan team to everyone. They are very professional
                                    and efficient.I previously had unpleasant
                                    <span class="dots">...</span>
                                    <span class="show_more_text"> experience when dealt with bank directly. Lucky, found Nathan,
                                        Josh and Jared just on time. Through them, bank even offered the loan more than I need.
                                        I could not settle this investment without Nathan's help!</span>
                                </p>
                            </div>
                            <div class="btn_holder">
                                <a class="btn_show_more">
                                    <span class="more">Show more</span>
                                    <span class="less">Show less</span>
                                </a>
                            </div>
                            <div>
                                <p class="user_name">Jessie Zhang</p>
                                <p class="reviews_date">3 weeks ago</p>
                            </div>
                        </div>

                        <div class="slide_item swiper-slide">
                            <div class="img_holder">
<!--                                <img src="/wp-content/themes/hunter-galloway/assets/img/testimonial_john.png" alt="user">-->
                                <img src="/wp-content/uploads/2018/03/mortgage-broker-brisbane-4.png);" alt="user">
                            </div>
                            <div class="rating_holder">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                                <img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star">
                            </div>
                            <div class="text_holder">
                                <p>
                                    After being stuffed around for over two weeks by another broker -
                                    got in touch with Nathan and
                                    <span class="dots">...</span>
                                    <span class="show_more_text">had a first-home loan approval within 48 hours of speaking with him. First-class customer service and demonstrated wealth of experience. Can't recommend Hunter Galloway enough.</span>
                                </p>
                            </div>
                            <div class="btn_holder">
                                <a class="btn_show_more">
                                    <span class="more">Show more</span>
                                    <span class="less">Show less</span>
                                </a>
                            </div>
                            <div>
                                <p class="user_name">Irene Diocares</p>
                                <p class="reviews_date">3 weeks ago</p>
                            </div>
                        </div>

                    </div>
                    <!-- Add Arrows -->
                    <div class="slide-button-next"></div>
                    <div class="slide-button-prev"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="lenders_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h2 class="inner_title">Lenders on our panel</h2>

                <div class="lenders_slider swiper-container">
                    <!-- Swiper -->
                    <div class="img_holder swiper-wrapper">
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/westpac_logo.jpg" alt="Westpac Bank" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/anz_logo.jpg" alt="ANZ Bank" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/nab_logo.jpg" alt="NAB" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/amp_logo.jpg" alt="AMP" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/adelaidebank_logo.jpg" alt="Adelaide Bank" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/firstmac_logo.jpg" alt="FirstMac" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/commbank_logo.jpg" alt="Commonwealth Bank (CBA)" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/stgeorge_logo.jpg" alt="St George Mortgage Brokers" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/ing_logo.jpg" alt="ING Direct" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/homeloans_logo.jpg" alt="Home Loans" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/macq_logo.jpg" alt="Macquarie Bank" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/suncorp_logo.jpg" alt="Suncorp Bank" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/pepper_logo.jpg" alt="Pepper Money" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/mebank_logo.jpg" alt="ME Bank" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                        <div class="slide_item swiper-slide image_wrap">
                            <img src="/wp-content/uploads/2018/11/bankwest_logo.jpg" alt="Bankwest" class="et-waypoint et_pb_animation_top et-animated">
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="slide-button-next"></div>
                    <div class="slide-button-prev"></div>
                </div>

            </div>
        </div>
    </section>

    <section class="img_btn_widget widget">
        <div class="container">
            <div class="inner_widget">
                <div class="btn_wrap">
                    <a class="btn_yellow rc_open E-trigger" href="#">Get your free credit rating assessment</a>
                </div>
            </div>
        </div>
    </section>

    <section class="accordion_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h2 class="inner_title">Questions and Answers</h2>
                <div class="accordion_holder">

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">What is a mortgage broker?</h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>A mortgage broker in Brisbane is a consultant that can help you with finding a home loan, or mortgage usually from their panel of lenders. Once the right home loan has been selected, the mortgage broker will help you manage the home loan process, from initially signing the paperwork all the way until settlement.</p>
                        </div>
                    </div>

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">What does a mortgage broker do?</h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>A mortgage broker acts on your behalf to arrange a home loan through a bank or lender. Australian banks and lenders have different policies and loan requirements, and it is a brokers job to find a loan from one of these parties that fit with your individual situation.</p>
                            <p>Mortgage Brokers can help find the right home loan for any situation, from purchasing your first home to buying an investment property all the way to refinancing your mortgage to a better interest rate.</p>
                            <p>At <a href="/">Hunter Galloway</a> we have access to over 30 different banks and lenders, giving you a wide range of home loan options to ensure we have a lender that can fit in with what you need.</p>
                        </div>
                    </div>

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">How do brokers get paid?</h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>Mortgage brokers in Brisbane get paid commissions from the banks, we do the same work the branch manager would do in putting together your loan application – except we are invested in your loan application and will work very hard to get it approved, as well as provide incredible service.</p>
                            <p>As our team at <a href="/">Hunter Galloway</a> are mortgage broking and credit experts we can answer all of your questions instead of directing you to another department.</p>
                        </div>
                    </div>

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">What types of customers do you help?</h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>Our mission is to make your home loan application effortless. We always work towards building a strong and personal relationship with every one of our clients and will work tirelessly to find the right home loan for you. Your mortgage is a lifelong commitment, and so is our commitment to you.</p>
                            <ul class="inner_list">
                                <li><a href="/first-time-investor/">Are you a First Time Investor who wants to build a portfolio?</a></li>
                                <li><a href="/first-home-buyer-loans/">Are you a first home buyer who is overwhelmed and doesn’t know where to start?</a></li>
                                <li><a href="/home-or-investment-property/"">Are you looking to update your home and keep your existing home as an investment?</a></li>
                                <li><a href="/home-loans-for-doctors/"">Are you a medical professional looking for no deposit 100% LVR financing?</a></li>
                                <li><a href="/property-investor-portfolio/">Are you a seasoned investor looking to add to your portfolio?</a></li>
                                <li><a href="/home-loans-without-hassle/">Feeling too busy?</a><a href="/home-loans-without-hassle/"> Is your property purchase being held back due to lack of time?</a></li>
                            </ul>
                            <p>We help all sorts of clients from across Brisbane, so get in touch with the team today to book a <a href="/free-assessment/">free assessment</a>.</p>
                        </div>
                    </div>

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">What is an Independent Mortgage Broker?</h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>An Independent Mortgage Broker in Brisbane is someone that is not subjected to outside authority in other words, they should only be working under a fee for service model and not be paid commissions by the banks.</p>
                            <p>The majority of Mortgage and Finance Brokers across Australia are not technically independent, and it is fairly uncommon in Australia to have financially independent mortgage brokers because in the past they have proven to be financially unstable due to having a longer turn around time and very limited bank options.</p>
                            <p><a href="/">Hunter Galloway</a> is an independently owned Mortgage Broker, we use Connective Financial services as our aggregator who provide the latest technology and training to help find our customers the best finance options. We are not owned by a bank, and operate under the belief that clients come first, using our team of experts we will find the best finance solution for you.</p>
                        </div>
                    </div>

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">Why should I use a mortgage broker in Brisbane? </h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>The best mortgage brokers can help you through their intimate knowledge of credit policy, making the home loan process quick, easy and stress-free.</p>
                            <p>We work with a wide range of borrowers, from <a href="/first-home-buyer-loans/">first home owners</a>, <a href="/property-investor-portfolio/">experienced property investors</a> to <a href="/home-loans-for-doctors/">medical professionals</a> helping them find the best deal.</p>
                            <p>Through our intimate bank credit knowledge, we can find ‘secret’ policy exceptions to get approvals for applications that would normally get declined, including no deposit <a href="/guarantor-home-loan/">guarantor home loans</a> and <a href="/unusual-employment-loan/">unusual employment loans.</a></p>
                            <p>We also have very strong relationships with the credit teams and key staff at the banks meaning we are also in a good position to get the very best interest rates for you. Often this means a cheaper variable or fixed interest rates, or rebates from the bank to cover the costs to <a href="/refinance-home-loan/">refinance your loan.</a></p>
                        </div>
                    </div>

                    <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                        <h5 class="et_pb_toggle_title">What makes you the best mortgage broker in Brisbane? </h5>
                        <div class="et_pb_toggle_content clearfix">
                            <p>We believe slow is fast, and unlike other mortgage brokers who just send your application to a bank on a hope and a whim, we take time to understand your situation and how the bank will assess it.</p>
                            <p>This means when the application goes to the bank it has a much higher chance of approval. The bank is more likely to approve your home loan application first time, without asking any further questions.</p>
                            <p>It’s our job to take the stress out of navigating the home loan process, and this approach has made us the best mortgage brokers in Brisbane with over 350+ google reviews.</p>
                            <p>Our communication is second to none, our Monday/Wednesday/Friday updates keep you in the loop so you are never left wondering what is happening with your home loan application.</p>
                            <p>What others are saying:</p>
                            <p>
                                <a href="https://www.google.com/maps/contrib/116361278501432819175/photos/@-10.7263665,175.8120905,3z/data=!3m1!4b1!4m3!8m2!3m1!1e1?hl=en-AU" title="" target="_blank">Joshua R</a>
                                "The Hunter Galloway team went above and beyond in helping us with a complex and very time constrained loan for an off-the-plan purchase. Each member of the team had a specialised role and was expert in that part of the process, and nothing fell through the cracks as they worked together seamlessly. They were professional, efficient and friendly, and took a lot of stress and pressure off us as they liaised with our solicitor and bank to push things through incredibly quickly and calmly, even as things went down to the wire. Their communication was second to none - we always knew where we were in the process and exactly what was required of us. They deserve all the five star reviews they get and I can’t recommend them highly enough!"
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/contrib/101994549196330752954/photos/@-27.46719,153.027867,17z/data=!4m3!8m2!3m1!1e1?hl=en-AU" title="" target="_blank">Craig D</a>
                                "The team at Hunter Galloway are beyond incredible . From the moment we met with them , we felt extremely comfortable . Their professionalism and dedication was unbelievable . Daily contact and updates - nothing was a hassle for them . In a world where customer service is non existent - Nathan and his team went miles above and beyond . Our experience with them was brilliant , we will use them again for sure and anyone looking for a broker - you absolutely cannot get better than Hunter Galloway . Thankyou team and Nathan"
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/contrib/116166227961073995477/photos/@-27.467535,153.0270117,17z/data=!4m3!8m2!3m1!1e1?hl=en-AU" title="" target="_blank">Jacquie E</a>
                                "Highly recommend Hunter Galloway, they are very helpful and responsive through the process of applying for a mortgage. Starting with their invaluable advice through to the application and approval processes, they were quick, responsive and professional. They keep you up to date on progress regularly throughout the process and l felt secure that I could call anytime and the staff would help with any concerns or questions I had."
                            </p>
                            <p>
                                <a href="https://www.google.com/maps/contrib/106503020859873705469/photos/@-27.46719,153.027867,17z/data=!4m3!8m2!3m1!1e1?hl=en-AU" title="" target="_blank">Chloe K</a>
                                "As first home buyers, I didn’t even know where to start. However after reading so many amazing reviews, I decided to give them a go. Very glad to say that the reviews don’t lie as I have not been disappointed! From the very start, Hunter Galloway team took time to ensure I am comfortable with all of the options and information presented to me. Dean also kept updating where the process is. I am looking forward to working with Hunter Galloway team again in the future"
                            </p>
                            <p><a href="https://www.huntergalloway.com.au/contact/" title="">Contact our team</a>, and speak with the best mortgage broker Brisbane today.</p>
                        </div>
                    </div>

                </div>

                <div class="btn_wrap">
                    <a class="btn_yellow F-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">Contact us</a>
                </div>
            </div>
        </div>
    </section>

    <section class="text_widget widget">
        <div class="container">
            <div class="inner_widget">
                <h3 class="inner_title">FBAA & Credit and Investments Ombudsman Membership</h3>
                <p>As members of the Financial Brokers Association of Australia (FBAA) and the Credit and Investments Ombudsman (CIO) we must uphold the highest level of excellence when helping clients with their finances. The members of each organisation must meet a minimum standard in experience, education and ongoing training to maintain membership each year and as active members, we commit to upholding these standards, ensuring we maintain their high levels of compliance, integrity, and professionalism with all of our mortgage clients.</p>

                <h3 class="inner_title">Valuation issues & credit scores</h3>
                <p>One of the most common issues we see is with valuations and shortfalls which can ultimately stop your property journey before it even begins. We can order free upfront valuations with many of our lenders, meaning we can find out what your bank thinks your property is worth way before applying with them.</p>
                <p>From experience, we know that ordering a valuation prior to applying for a home loan makes sure your credit file doesn’t get damaged from having multiple enquiries. </p>
                <p>We can provide free valuations and also a copy of your credit file so you know where you stand way before applying for a loan with the banks!</p>

                <h3 class="inner_title">Complex Credit Policy Pitfalls</h3>
                <p>Each lender and bank in Australia has a unique credit policy, meaning while some will accept your full income, others may not allow it due to their policy.</p>
                <p>Quite often bank policy can be set in stone, and due to the complexity bank staff quite honestly don’t know it nor do many mortgage broker Brisbane. They are not familiar with complex situations and how to correctly assess them. This can sometimes cause it to take quite a long time to process your application and even in some instances mean your loan will get declined for no good reason.</p>
                <p>With banks making their policies more and more complex it becomes more important to correctly package, and assess your application before it is even lodged with the bank – showing the banks all of the strengths of your home loan application and making sure it fits all of their policies.</p>
                <p>At Hunter Galloway we have our own in-house credit team and we make sure your application is going to fit with the bank each time.</p>
            </div>
        </div>
    </section>


    <section class="video_widget widget">
        <div class="container">
            <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;">
                <iframe src="https://www.youtube.com/embed/EQFSii8_2DQ?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fhgspeedtest.wpengine.com" frameborder="0" allowfullscreen="allowfullscreen" id="fitvid0" data-gtm-yt-inspected-11136831_62="true"></iframe>
            </div>
        </div>
    </section>

</div>

<?php

get_footer();
