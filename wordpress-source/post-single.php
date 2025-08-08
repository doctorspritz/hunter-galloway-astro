<?php
/*

Template name: Post single

*/

get_header();

$show_default_title = get_post_meta(get_the_ID(), '_et_pb_show_title', true);

$is_page_builder_used = et_pb_is_pagebuilder_used(get_the_ID());

$check_img = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#FFB027"/>
<path d="M7 12.3403L10.6527 16L17.6666 8.99304L16.6597 8L10.6527 14L7.99301 11.3403L7 12.3403Z" fill="black"/>
</svg>';
$check_green_img = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="#77B255"/>
<path d="M7 12.3403L10.6527 16L17.6666 8.99304L16.6597 8L10.6527 14L7.99301 11.3403L7 12.3403Z" fill="white"/>
</svg>';
$elipsis_svg = '<svg xmlns="http://www.w3.org/2000/svg" width="116" height="54" viewBox="0 0 116 54" fill="none">
<g filter="url(#filter0_f_78_1408)">
<ellipse cx="58" cy="27" rx="46" ry="15" fill="#00838A"/>
</g>
<defs>
<filter id="filter0_f_78_1408" x="0" y="0" width="116" height="54" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
<feFlood flood-opacity="0" result="BackgroundImageFix"/>
<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
<feGaussianBlur stdDeviation="6" result="effect1_foregroundBlur_78_1408"/>
</filter>
</defs>
</svg>';

?>

<style>
    .home__nav-wrap {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        margin: 0;
        padding: 0 10px;
    }
    .home__nav-body {
        /*padding: 0 10px;*/
        padding: 0;
        min-width: 0;
    }
    .sidebar-nav {
        /*padding: 0 10px;*/
        position: sticky;
        width: 290px;
        flex-shrink: 0;
        top: 40px;
        padding-top: 20px;
        padding-left: 10px;
        padding-bottom: 20px;
    }

    @keyframes bounce {
      0%, 100% {
        transform: translateY(0);
    }
    35% {
        transform: translateY(-6px);
    }
    65% {
        transform: translateY(6px);
    }
}


.sidebar-nav:after {
    content: none;
    position: absolute;
    bottom: -10px;
    left: 8px;
    width: 16px;
    height: 16px;
    background: url('<?php echo get_template_directory_uri(); ?>/images/sidebar-nav-arrows.svg');
    background-size: contain;
    animation: bounce 1s infinite;
}

.sidebar-nav__item {
    position: relative;
    display: block;
    font-size: 16px;
    line-height: 1.1;
    letter-spacing: -0.01em;
    color: #000;
    transition: color 0.35s;
    opacity: 0.5;
    padding-left: 15px;
}
.sidebar-nav__item:hover {
    opacity: 0.8;
    transition: color 0.35s;
}
.sidebar-nav__item:before {
    content: '';
    position: absolute;
    left: 2px;
    top: 50%;
    transform: translateY(-50%);
    background: #FFBA3A;
    width: 6px;
    height: 6px;
    border-radius: 50%;
    transition: 0.35s;
}
.sidebar-nav__item + .sidebar-nav__item  {
    margin-top: 10px;
}

.sidebar-nav__item.active {
    opacity: 1;
    font-weight: 700;
}

.sidebar-nav__item.active:before {
    width: 9px;
    height: 9px;
    left: 0;
}
@media (max-width:1100px) {
    .home__nav-wrap {
        display: block;
    }
    .sidebar-nav {
        display: none;
    }
}
	
	/* 	common */
	.box_list{
		margin: 0 0 110px;
	}
	
	
	#main-content .inner_widget p{
		font-weight: 400;
		font-size: 14px;
		line-height: 143%;
	}
	
	#main-content .inner_title{
		font-weight: 700;
		font-size: 40px;
		line-height: 54px;
		text-align: center;
		text-transform: capitalize;
		margin: 0 0 32px;
		padding: 0;
	}
	
	.hero_widget {
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/banner_new.png) no-repeat center right;
    	background-size: cover;
		padding: 90px 0 90px 121px;
	}
	
	.hero_widget:after{
		content: unset;
	}
	
	.hero_widget .container{
		padding: 0 !important;
	}
	
	.hero_widget .inner_widget{
		text-align: start;
		padding: 0;
    width: fit-content;
	}
	
	.hero_widget .hero_title{
		margin-bottom: 12px;
		padding: 0;
		font-weight: 700;
		font-size: 60px;
		line-height: 107%;
		text-transform: capitalize;
	}
	
	.hero_widget .hero_subtitle{
		padding: 0;
		font-weight: 400;
		font-size: 16px !important;
		line-height: 28px !important;	
		margin: 0 0 32px 0;
	}
	
	.hero_widget .hero_text{
		padding: 0;
		margin-bottom: 12px;
		font-weight: 600;
		font-size: 16px;
		line-height: 1.38;
		color: #FFB027;	
	}
	
	.hero_widget .btn_wrap{
		padding: 0;
		margin: 0 0 8px 0;
		width: 305px;
	}
	
	.widget .btn_yellow{
		min-height: 42px;
		font-weight: 600;
		font-size: 15px;
		line-height: 173%;
		background: #FFB027;
		box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px rgba(0, 0, 0, 0.14), 0px 1px 5px rgba(0, 0, 0, 0.12);
		border-radius: 20px;
		text-transform: capitalize;
		padding: 5px;
	}
	
	.hero_widget .hero_text.bottom-text{
		margin: 0;
		font-weight: 400;
		font-size: 12px;
		line-height: 16px;
		color: #FFFFFF;
	}
	
	.risk_widget .inner_widget{
		background: #F2F2F2;
		border-radius: unset;
		padding: 64px 0 48px 48px;
	}
	
	.risk_widget .risk_holder{
		display: block;
	}
	
	.risk_widget .risk_inner-left{
		width: unset;
		z-index: 1;
	}
	
	.risk_widget .risk_inner-left > div{
		text-align: center;
		font-weight: 400;
		font-size: 14px;
		line-height: 1.43;
	}
	
	.risk_widget .risk_list{
		padding: 0;
		margin-top: 32px;
	}
	
	.risk_list li{
		padding: 24px;
		width: 40%;
		background: #FFFFFF;
		border-radius: 10px;
	}
	
	.risk_list li:not(:last-child){
		margin-bottom: 32px;
	}
	
	#risk_widget .risk_list .list_title{
		margin-bottom: 15px;
		padding: 0 0 0 40px;
		position: relative;
		font-weight: 700;
	}
	
	.risk_list .list_text{
		font-weight: 400;
		font-size: 14px;
		line-height: 1.43;
		padding: 0;
	}
	
	.risk_list .list_text:nth-child(2){
		margin-bottom: 10px;
	}
	
	.risk_widget .risk_imgwrap{
		width: unset;
	}
	
	#main-content{
		padding: 0;
	}
	
	.home__nav-wrap{
		padding: 0;		
		width: 90%;
		max-width: 1200px;
		margin: 0 auto;
	}
	
	.sidebar-nav{
		margin-left: 35px;
		padding-left: 0;
		padding-top: 0;
		margin-top: 75px;
	}
	
	.risk_list .scheme_ico:before, .risk_list .umbrella_ico:before{
		content: unset;
	}
	
	
	.risk_list .list_title:before{
		position: absolute;
		content: "";
		width: 24px;
		height: 24px;
		left: 0;
        top: 50%;
        transform: translateY(-50%);
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/bi_umbrella.svg) center center no-repeat;
		background-size: contain;
	}
	
	.risk_list li.scheme_ico .list_title:before{
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/cil_bank.svg) center center no-repeat;
	}
	
		/* #why_choose	 */
	
	.why_choose_prize{
		margin-bottom: 8px;
	}
	
	.why_choose_prize > span{
		font-weight: 400;
		font-size: 24px;
		line-height: 140%;
	}
	
	.why_choose_widget .why_choose_title{
		margin-bottom: 40px;
		font-weight: 700;
		font-size: 40px;
		line-height: 1.35;
	}
	.why_choose_widget .why_choose_blocks{
		margin-bottom: 110px;
	}
	
	.why_choose_widget .why_choose_blocks .why_choose_item{
		padding: 32px;
		width: 31%;
		background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), #5BD5FA;
		border-radius: 10px;
	}
	
	.why_choose_item img {
		margin-bottom: 27px;
		width: 60px;
		height: 60px;
	}
	
	.why_choose_widget .why_choose_item_title{
		margin-bottom: 8px;
		font-weight: 700;
		font-size: 20px;
		line-height: 1.25;
	}
	
	.why_choose_item_text{
		font-weight: 400;
		font-size: 14px;
		line-height: 1.43;
		color: #000000;
	}
	
	.why_choose_item_text > a{
		color: #000000;
	}
	
	div.et_pb_section.et_pb_section_1{
		background: #FFFFFF !important;
	}
	
	.wpb_wrapper .h1{
		margin-bottom: 12px;
	}
	
	.wpb_wrapper .h1 strong{
		font-size: 40px;
		line-height: 1.35;
		color: #000000;
		text-transform: capitalize;
	}
	
	.wpb_wrapper > p{
		font-weight: 400;
		font-size: 24px;
		line-height: 140%;
		color: #000000;
	} 
	
	.why_choose_widget .btn_wrap, .dark_holder_widget{
		background: #262626;
		border-radius: 10px;
		padding: 28px 32px;
		width: 100%;
	}
	
	.why_choose_widget .btn_wrap > p{
		font-weight: 700;
		font-size: 32px;
		line-height: 1.38;
		color: #FFFFFF;
		max-width: 393px;
	}
	
	.why_choose_widget .btn_wrap a.btn_yellow{
		width: 343px;
	}
	
	.why_choose{
		margin-bottom: 0;
	}
	
	.why_do_widget{
		background: unset;
		padding: 0;
	}
	
	
	.why_do_widget .subtitle{
		font-weight: 400;
		font-size: 14px;
		line-height: 1.43;
	}
	
	.why_do_widget .why_do_holder{
		background: #FFF7E9;
		border-radius: 10px;
		padding: 40px 48px;
		margin: 40px 0 0;
		color: #000000;
		justify-content: space-between;
	}
	
	.why_do_widget .col_yellow, .why_do_widget .col_dark{
		background: unset;
		padding: 0;
		color: inherit;
	}
	
	.why_do_widget .col_yellow{
		margin-right: 40px;
	}
	
	.why_do_widget .col_yellow > div > img, .why_do_widget .col_dark > div > img{
		height: 34px;
	}
	
	.why_do_holder .col_title{
		padding: 0;
		margin-bottom: 24px;
	}
	
	.why_do_holder .col_dark .col_title{
		padding: 0;
	}
	
	#why_do_widget .why_do_holder .col_title > p{
		font-weight: 800;
		font-size: 20px;
		line-height: 160%;		
	}
	
	.why_do_holder li{
		font-weight: 400;
		font-size: 14px;
		line-height: 157%;
		position: relative;
	}
	
	.why_do_widget .col_yellow li{
		font-weight: 600;
	}
	
	.why_do_widget .col_dark li:before, .why_do_widget .col_yellow li:before{
		top: 0;
		left: 0;
		z-index: 2;
	}
	
	.why_do_widget .col_dark li:before{
		background: #D0D0D0 url("https://conversionratestore.github.io/projects/hantergalloway/img/stop_icon.svg") center center no-repeat;
		border-radius: 50%;
	}
	
	.why_do_widget .col_yellow li:before{
		background: #FFB027 url("https://conversionratestore.github.io/projects/hantergalloway/img/akar_icons_check.svg") center center no-repeat;
		border-radius: 50%;
		width: 32px;
    	height: 32px;
	}
	
	.why_do_widget .col_dark li:not(:last-child):after, .why_do_widget .col_yellow li:not(:last-child):after{
		content: "";
		top: 0;
		left: 16px;
		border-left: 1px solid #D0D0D0;
		width: 1px;
		height: calc(100% + 42px);
		position: absolute;
	}
	
	.why_do_widget .col_yellow li:not(:last-child):after{
		border-left: 1px solid #FFB027;
	}
	
	.why_do_holder li{
		padding: 0 0 0 50px;
	}
	
	.why_do_holder li:not(:last-child){
		margin-bottom: 40px;
	}
	
	.how_much_widget{
		padding: 0;
		margin: 110px 0;
	}
	
	.how_much_widget .how_much_holder{
		display: block;
		text-align: center;
		background: #F2F2F2;
		border-radius: 10px;
		padding: 40px 42px;
	}
	
	.how_much_widget .col_img, 
	.how_much_widget .col_text{
		width: unset;
		padding: 0;
	}
	
	.how_much_widget .col_text{
		margin-top: 32px;
	}

	
	#main-content .how_much_widget .col_text p{
		font-weight: 400;
		font-size: 15px;
		line-height: 173%;
		padding: 0;
	}
	
	.how_much_widget .col_text p:nth-child(2){
		margin-bottom: 30px;
	}
	
	.dark_holder_widget .inner_widget{
		justify-content: space-between;
		flex-wrap: unset;
	}
	
	.dark_holder_widget .btn_wrap{
		min-width: 287px;
	}
	
	#roadmap_widget .dark_holder_widget .btn_wrap{
		min-width: 277px;
	}
	
	#main-content .dark_holder_widget.widget .inner_title{
		font-weight: 700;
		font-size: 32px;
		line-height: 1.38;
		text-transform: unset;
		margin: 0;
		text-align: left;
	}
	

	
	.difficult_holder .col_text{
		width: unset;
	}
	
	/* 	 */
	.broker_question ul li{
		margin-bottom: 1em;
	}
	
	.broker_question ul li  > span > span{
		margin-left: 10px;
	}
	
	.text_widget p + .inner_title{
		padding: 0;
	}

	
	.fluid-width-video-wrapper iframe{
		border-radius: 20px;
	}
	
	.btn_contact_us{
		padding-top: 110px;
	}
	
	/* 	.accordion_widget */
	.accordion_widget .et_pb_toggle{
		background: unset;
		margin: 0;
		border-top: 1px solid #000000;
		border-bottom: 1px solid #000000;
	}
	
	.accordion_widget .et_pb_toggle:first-child{
		border-top: unset;
	}
	.accordion_widget .et_pb_toggle_content{
		border-top: 1px solid #000000;
		padding: 24px 0;
	}
	
	.accordion_widget h5.et_pb_toggle_title{
		padding: 24px 0 24px 56px;
	}
	
	.accordion_widget .et_pb_toggle_title:before, .accordion_widget .et_pb_toggle_title:after{
		left: 0;
		right: unset;
		width: 30px;
		height: 30px;
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/plus.svg) center no-repeat;
		border: 1px solid #000000;
		border-radius: 4px;
		top: 30%;
	}
	
	.accordion_widget .et_pb_toggle_title:after{
		content: unset;
	}
	
	.accordion_widget .et_pb_toggle_open .et_pb_toggle_title:before{
		width: 32px;
		height: 32px;
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/minus.svg) center no-repeat;
		border-radius: 4px;
		border: none;
		top: 30%;
	}
	
	/* reviews_widget	 */
	#reviews_widget{
		background: unset;
	}
	
	.photo_team,  .fluid-width-video-wrapper{
		margin-top: 110px;
	}
	
	.complex_credit{
		background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), #5BD5FA;
		border-radius: 20px;
		padding: 48px;
	}
	
	.complex_credit .fluid-width-video-wrapper{
		margin-top: 32px;
	}
	
	.credit_scores{
		background: #F2F2F2;
		border-radius: 20px;
		padding: 48px;
	}
	
	.dark_holder_widget.widget.box_list.six_wrap .btn_wrap{
		min-width: 382px;		
	}
	
	.dark_holder_widget.widget.box_list.five_wrap .btn_wrap{
		min-width: 285px;		
	}
	
	.dark_holder_widget.widget.box_list.fourth_wrap_btn  .btn_wrap{
		min-width: 348px;		
	}
	
	.dark_holder_widget.widget.box_list.third_wrap_btn  .btn_wrap{
		min-width: 277px;		
	}
	
	.dark_holder_widget.widget.box_list.second_wrap_btn  .btn_wrap{
		min-width: 287px;		
	}
	
	.dark_holder_widget.widget.box_list.first_wrap_btn .btn_wrap{
		min-width: 343px;		
	}
	
	#lenders_widget{
		background: #F6F6F6;
		padding: 40px 20px;
	}
	
	.lenders_widget .inner_widget{
		padding: 0;
	}
	
	#lenders_widget .inner_title{
		font-size: 40px;
    	font-weight: 900;
		margin-bottom: 40px;
		text-transform: unset;
		line-height: 1em;
	}
	
	.lenders_widget_box ul{
		display: flex;
    	flex-wrap: wrap;
		align-items: center;
    	justify-content: space-between;
		margin: 0 0 -20px;
	}
	
	.lenders_widget_box ul li{
		width: 17%;
		margin-bottom: 20px;
	}
	
	.lenders_widget, .lenders_widget .img_holder{
		padding: 0;
	}
	
	#main-content .reviews_widget .slide_item .user_name{
		font-size: 17px;
		font-weight: 900;
		padding: 0 0 7px;
	}
	
	.reviews_widget{
		padding: 0;
	}
	
	.reputation_widget{
		padding: 0;
		margin-top: 75px;
	}
	
	#reputation_widget .inner_title{
		text-transform: unset;
	}
	#risk_widget .inner_title{
		margin-bottom: 16px;
		line-height: 46px;
	}
	
	#why_do_widget .inner_title, #how_difficult_widget .inner_title{
		margin-bottom: 16px;
	}
	
	#how_difficult_widget.inner_widget{
		background: #F2F2F2;
		border-radius: 20px;
		padding: 48px;
	}
	
	#how_difficult_widget.inner_widget p.subtitle{
		font-weight: 400;
		font-size: 14px;
		line-height: 1.38;
		text-transform: capitalize;
		margin-bottom: 42px;
		text-align: center;
		padding: 0;
	}
	
	#how_difficult_widget.inner_widget > p:nth-child(3){
		font-weight: 700;
		font-size: 14px;
		line-height: 1.38;
		text-align: center;
		padding: 0;
	}
	
	#how_much_widget .inner_title{
		margin-bottom: 16px;
		font-size: 29px;
		line-height: 39px;
		text-transform: unset;
	}
	
	#how_difficult_widget ul{
		margin-top: 42px;
		padding-left: 70px;
		position: relative;
	}
	
	#how_difficult_widget ul:before {
		background: #FFBA3A;
		content: "";
		position: absolute;
		width: 1px;
		height: 100%;
		top: 0;
		left: 25px;
	}
	
	#how_difficult_widget ul:after {
		background: #FFBA3A;
		content: "";
		position: absolute;
		width: 9px;
		height: 9px;
		bottom: 0;
		border-radius: 50%;
		left: 21px;
	}
	
	#how_difficult_widget ul li:not(:last-child) {
		margin-bottom: 48px;
	}
	
	#how_difficult_widget ul li:before {
		content: "";
		position: absolute;
		width: 32px;
		height: 32px;
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg14.svg) center no-repeat;
		border-radius: 40px;
		left: 0;
		padding: 11px;
	}
	
	#how_difficult_widget ul li:nth-child(2):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg1.svg) center no-repeat;
	}
	
	#how_difficult_widget ul li:nth-child(3):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg_3_page2.svg) center no-repeat;
	}
	
	#how_difficult_widget ul li:nth-child(4):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg_4_page2.svg) center no-repeat;
	}
	
	#how_difficult_widget ul li span {
		font-weight: 400;
		font-size: 14px;
		line-height: 229%;
		color: #000000;
		margin-bottom: 8px;
	}
	
	#how_difficult_widget ul li h3 {
		font-weight: 800;
		font-size: 20px;
		line-height: 160%;
		color: #000000;
		text-align: left;
		padding: 0;
		margin-bottom: 12px;
	}
	
	#how_difficult_widget ul li div{
		background: #FFFFFF;
		border-radius: 10px;
		padding: 24px;
	}
	
	.mobile_text_from_hero, .link_pages, .new_mobile_header{
		display: none;
	}
	
	/* 	mobile */
	
	/* hero	 */
	@media (max-width: 768px) {
		body .mobilehead{
			display: none;
		}
		
		.mobilehead, #et-main-area{
			margin: 0;
		}
		
		.new_mobile_header{
			display: flex;
			justify-content: space-between;
			padding: 20px 0;
			width: 90%;
			max-width: 1200px;
			margin: 0 auto;
		}
		
		.new_mobile_header .mobilehead_logo{
			width: 35%;
		}
		
		.new_mobile_header >div:last-child{
			width: 60%;
		}
		
		.mobilehead_logo img{
			height: 42px;
    		width: 118px;
		}
		
		.new_mobile_header ul{
			display: flex;
			justify-content: space-between;
			margin-top: 15px;
		}
		
		.new_mobile_header ul a.mobilehead_phone_tel{
			font-weight: 700;
			font-size: 16px;
			line-height: 135%;
			color: #000000;
		}
		
		.new_mobile_header a.mobilehead_phone_link{
			font-weight: 400;
			font-size: 15px;
			line-height: 130%;
			color: #000000;
			border-bottom: 1px dashed #000000;
			text-decoration: unset;
		}
		
		.new_mobile_header .header_button_flex a{
			font-weight: 600;
			font-size: 15px;
			line-height: 173%;
			height: 42px;
			background: #FFB027;
			box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px rgba(0, 0, 0, 0.14), 0px 1px 5px rgba(0, 0, 0, 0.12);
			border-radius: 20px;
		}
		
		.link_pages{
			background: #F2F2F2;
			padding: 18px 14px;
			display: block;
		}
		
		.link_pages ul{
			display: flex;
			justify-content: space-between;
    		align-items: center;
		}
		
		.link_pages ul li{
			padding: 5px 0;
			width: 30%;
		}
		
		.link_pages ul li a{
			font-weight: 400;
			font-size: 15px;
			line-height: 130%;
			border-bottom: 1px dashed #000000;
			color: #000000;
		}
		
		.link_pages ul li:not(:last-child){
			border-right: 1px solid #DCDCDC;
		}
		
		.hero_widget{
			padding: 34px 0 34px 31px;
		}

		.hero_text, .hero_subtitle, .hero_widget .btn_wrap, .hero_text.bottom-text{
			display: none;
		}

		.hero_widget .hero_title{
			font-size: 20px;
			line-height: 27px;
			margin: 0;
			max-width: 205px;
		}
		
		.mobile_text_from_hero{
			display: block;
			margin-top: 29px;
		}
		.mobile_text_from_hero .hero_subtitle{
			display: block;
			font-weight: 600;
			font-size: 14px;
			line-height: 19px;
			text-align: center;
			text-transform: capitalize;
			color: #000000;
			margin-bottom: 18px;
			padding: 0;
		}
		
		.mobile_text_from_hero .hero_text.bottom-text{
			display: block;
			font-weight: 400;
			font-size: 12px;
			line-height: 16px;
			text-align: center;
		}
		
		.mobile_text_from_hero .btn_wrap{
			width: 305px;
			margin: 0 auto 8px;
		}
		
		.mobile_text_from_hero .btn_wrap .btn_yellow{
			background: #FFB027;
			box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px rgba(0, 0, 0, 0.14), 0px 1px 5px rgba(0, 0, 0, 0.12);
			border-radius: 20px;
			font-weight: 600;
			font-size: 15px;
			line-height: 173%;
			height: 42px;
		}

		/* common	 */
		#main-content .inner_title{
			margin-bottom: 24px;
			font-size: 30px;
			line-height: 100%;
			letter-spacing: -0.01em;
			text-transform: unset;
		}
		
		.box_list{
			margin-bottom: 50px; 
		}
		
		.text_widget{
			padding: 0;
		}
		
		.dark_holder_widget{
			padding: 32px 16px;
			margin: 0 -6% 50px;
			max-width: 113%;
			width: 113%;
			border-radius: unset;
		}
		
		.dark_holder_widget .inner_widget{
			flex-wrap: wrap;
		}
		
		#lenders_widget{
		margin: 0 -6%;
		max-width: 113%;
		width: 113%;
		background: #F6F6F6;
		padding: 40px 30px;
	}
	
	.lenders_widget .inner_widget{
		padding: 0;
	}
	
	#lenders_widget .inner_title{
		max-width: 306px;
		margin: 0 auto 30px;
	}
	
	.lenders_widget_box ul{
		display: flex;
    	flex-wrap: wrap;
		align-items: center;
    	justify-content: space-between;
		margin: 0 0 -20px;
	}
	
	.lenders_widget_box ul li{
		width: 45%;
		margin-bottom: 20px;
	}
	
	.lenders_widget, .lenders_widget .img_holder{
		padding: 0;
	}
		
		#main-content .dark_holder_widget.widget .inner_title{
			font-weight: 800;
			font-size: 20px;
			line-height: 160%;
			text-align: center;
			text-transform: capitalize;
			margin-bottom: 24px;
		}
		
		.dark_holder_widget.widget.box_list .btn_wrap{
			padding: 0;
			width: 100%;
			min-width: unset !important;
		}
		
		.dark_holder_widget.widget.box_list.six_wrap .btn_wrap{
			min-width: unset;
		}
		
		.dark_holder_widget.widget.box_list.second_wrap_btn{
			margin-bottom: 0;
		}
		
		.dark_holder_widget.widget.box_list.second_wrap_btn .btn_wrap{
			width: 194px !important;
			margin: 0 auto;
		}
		
		.dark_holder_widget.widget.box_list.third_wrap_btn .btn_wrap{
			width: 228px !important;
			margin: 0 auto;
		}
		
		.dark_holder_widget.widget.box_list.five_wrap .btn_wrap{
			width: 301px !important;
			margin: 0 auto;
		}
		
		.dark_holder_widget .btn_wrap .btn_yellow{
			padding: 5px;
		}
		/* 	risk_widget	 */
		
		.reputation_widget{
			margin-top: 50px;
		}
		
		.risk_widget{
			margin: 0 -6% 50px;
			width: 113%;
			max-width: 113%;
		}
		
		.risk_widget .inner_widget{
			padding: 48px 16px 0;	
		}
		
		#risk_widget .inner_title{
			margin-bottom: 12px;
		}
		
		.risk_widget .risk_inner-left > div{
			text-transform: capitalize;
		}
		

		
		.inner_widget .market_text span{
			border-bottom: unset;
		}
		
		.risk_widget .risk_list{
			margin-top: 24px;
		}
		
		.risk_list li{
			padding: 16px;
			width: 100%;
		}
		
		#risk_widget .risk_list .list_title{
			margin-bottom: 12px;
		}
		
		.risk_widget .risk_imgwrap{
			margin-top: 30px;
		}
		
		.risk_list li:not(:last-child){
			margin-bottom: 24px;
		}
		
		.risk_list .list_text{
			margin: 0;
		}
	
	
	/* 	 */
		.why_choose_widget{
			padding: 0;
		}
		
		.why_choose_prize > span{
			font-weight: 400;
			font-size: 18px;
			line-height: 110%;
		}
		
		.why_choose_prize{
			margin-bottom: 35px;
			max-width: 209px;
		}
		
		.why_choose_widget .why_choose_title{
			font-weight: 700;
			font-size: 30px;
			line-height: 100%;
			letter-spacing: -0.01em;
			margin-bottom: 50px;
		}
		
		.why_choose_widget .why_choose_blocks .why_choose_item{
			width: 100%;
			padding: 32px 37px;
			margin: 0;
		}
		
		.why_choose_widget .why_choose_blocks .why_choose_item:not(:last-child){
			margin-bottom: 34px;
		}
		
		.why_choose_widget .why_choose_blocks{
			margin-bottom: 50px;
		}
		
		#why_do_widget{
			margin-bottom: 0;
		}
		
		#why_do_widget .inner_title{
			margin-bottom: 12px;
		}
		
		#why_do_widget .inner_widget p.subtitle{
			text-transform: capitalize;
		}
		
		.why_do_widget .why_do_holder{
			margin: 30px -6% 0;
			max-width: 113%;
			width: 113%;
			padding: 31px 20px 33px;
		}
		
		.why_do_widget .col_yellow{
			margin: 0;
		}
		
		.why_do_holder .col_title{
			margin-bottom: 18px;
		}
		
		.why_do_holder .col_title p{
			font-weight: 800;
			font-size: 18px;
			line-height: 178%;
		}
		
		.why_do_holder li:not(:last-child){
			margin-bottom: 35px;
		}
		
		.why_do_holder li{
			font-weight: 500;
			font-size: 14px;
			line-height: 157%;
		}
		
		.why_do_widget .col_dark{
			margin-top: 23px;
		}
		
		#how_much_widget {
			margin: 0 -6%;
			max-width: 113%;
			width: 113%;
		}
		
		#how_much_widget.how_much_widget .how_much_holder{
			padding: 40px 20px;
			border-radius: unset;
		}
		
		#main-content #how_much_widget .inner_title{
			margin-bottom: 16px;
		}
		
		#how_difficult_widget.inner_widget{
			padding: 40px 26px;
			margin: 0 -6%;
			max-width: 113%;
			width: 113%;
			border-radius: unset;
		}
		
		#how_difficult_widget.inner_widget p.subtitle{
			font-weight: 400;
			font-size: 14px;
			line-height: 143%;
			margin-bottom: 26px;
		}
		
		#how_difficult_widget.inner_widget > p:nth-child(3){
			line-height: 186%;
		}
		
		#how_difficult_widget ul{
			margin-top: 26px;
		}
		
		#how_difficult_widget ul li:not(:last-child){
			margin-bottom: 32px;
		}
		
		#how_difficult_widget ul li div{
			padding: 16px;
		}
		
		#how_difficult_widget ul li h3{
			line-height: 1.35;
		}
		
		#reviews_widget.reviews_widget .title_holder{
			margin: 0 0 20px;
		}
	
		#reviews_widget .inner_title, #how_difficult_widget .inner_title{
			margin-bottom: 12px;
		}
		
		#reviews_widget > p{
			font-weight: 400;
			font-size: 15px;
			line-height: 100%;
		}
		
		
	.accordion_widget .accordion_holder{
		margin: 0;
	}
	
	.accordion_widget{
		padding: 40px 0;
	}
	
	#accordion_widget .inner_title{
		margin-bottom: 16px;
	}
	
	.accordion_widget h5.et_pb_toggle_title{
		font-weight: 700;
		font-size: 20px;
		line-height: 27px;
		text-transform: capitalize;
	}
	
	.membership_box{
		padding: 40px 0;
	}
	
	.credit_scores{
		padding: 24px 16px;
	}
	
	#main-content .credit_scores .inner_title{
		margin-bottom: 32px;
	}
	
	.complex_credit{
		padding: 40px 16px;
		margin: 0 -6% 50px;
		width: 113%;
		max-width: 113%;
	}
	
	.complex_credit .fluid-width-video-wrapper{
		margin-top: 24px;
	}
	.accent_block_var a, .accent_block_var strong{
		color: #000000;
		font-weight: 400;
	}
	
	/* 	last block */
	.photo_team, .fluid-width-video-wrapper {
		margin-top: 50px;
	}
	.btn_contact_us {
		padding-top: 50px;
	}
	
	.photo_team{
		width: 113%;
		max-width: 113% !important;
		margin: 50px -6% 0;
	}
		
				#footer-info{
			text-align: left;
			font-weight: 400;
			font-size: 13px;
			line-height: 140%;
			padding: 0 0 70px;
		}
		
		#main-footer #footer-widgets.clearfix{
			margin: 0;
			padding: 0 !important;
		}
		
		#main-footer #footer-widgets .footer-widget{
			padding: 0;
			margin-bottom: 30px;
		}
		
		#custom_html-5{
			margin-top: 30px;
		}
		
		#footer-widgets .footer-widget li{
			padding: 0;
		}
		
		#footer-widgets .footer-widget li:before{
			content: unset;
		}
		
		#footer-widgets .footer-widget li a{
			color: #FDB948;
		}
		
		.footer_adv_bottom.flex > p{
			font-weight: 700;
			font-size: 30px;
			line-height: 130%;
			letter-spacing: -0.01em;
			color: #FDB948;
		}
		
		.hg_adv.flex li div:first-child{
			font-weight: 900;
			font-size: 44px;
			line-height: 100%;
		}
		
		.hg_adv.flex li div:last-child{
			font-weight: 400;
			font-size: 13px;
			line-height: 135%;
			letter-spacing: 0.04em;
			text-transform: uppercase;
			color: #FFFFFF;
			margin-top: 10px;
		}
		
		.footer_adv_bottom a{
			height: 59px;
			background: #FDB948;
			box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
			border-radius: 33px;
			font-weight: 700;
			font-size: 23px;
			line-height: 135%;
		}
		
		.footer_video_text{
			font-weight: 400;
			font-size: 13px;
			line-height: 140%;
		}
		
		.footer_adv{
			padding-top: 45px !important;
			margin-bottom: -2px;
		}
		
		#main-footer .container, .footer_adv .container{
			width: unset;
			padding: 0;
		}
		
		#main-footer, .footer_adv{
			padding: 0 14px;
		}
		
		body .footer_logo img {
			display: none;
		}
		
		#footer-widgets .footer-widget .footer_logo a:nth-child(2){
			margin-left: 0;
		}
		
		#footer-widgets .footer-widget .footer_logo a{
			text-decoration-line: underline;
		}
		
		.footer_contact.flex span{
			font-weight: 400;
			font-size: 13px;
			line-height: 140%;
		}
		
		#et-footer-nav{
			display: none;
		}
		
		#main-footer #footer-bottom{
			padding: 0 !important;
		}
		
		.reviews_widget .slide_item{
			margin-bottom: 50px;
		}
		
		.swiper-pagination-bullet{
			width: 12px;
			height: 12px;
		}
		
		.swiper-pagination-bullet-active{
			background: #FDAD2D;
		}
		
		.slide-button-prev, .dots, .btn_holder{
			display: none;
		}
		
		.reviews_widget .show_more_text{
			display: block;
		}
	}
	
	
	@media (max-width: 320px) {
		.mobile_text_from_hero .btn_wrap{
		width: 290px;
	}
		
		.widget .btn_yellow{
		font-size: 13px;
		}
		
		.link_pages ul li a{
			font-size: 13px;
		}
		
		.new_mobile_header .header_button_flex a{
			font-size: 12px;
		}
		
		.new_mobile_header ul a.mobilehead_phone_tel, .new_mobile_header a.mobilehead_phone_link{
			font-size: 13px;
		}
		
		.footer_adv_bottom a{
				width: 290px;
			}
	}
	
	@media (min-width: 769px) {
		.swiper-pagination.swiper-pagination-clickable.swiper-pagination-bullets{
			display: none;
		}
	}
	
	.inner_widget .hero_text:first-of-type {
    padding: 4px 16px;
    text-shadow: 0px 1px 0px rgba(0, 119, 128, 0.50);
    border-bottom: 1px solid #309398;
    background: linear-gradient(90deg, #309398 0%, #34A0A6 30%, #34A0A6 70%, rgba(64, 152, 156, 0.00) 100% 100%);
    font-size: 16px !important;
    line-height: 1.4 !important;
    width: fit-content;
    font-weight: 600;
    position: relative;
    color: #FEC464;
  }

  .inner_widget .hero_text:first-of-type::before,
  .inner_widget .hero_text:first-of-type::after {
    content: '';
    height: 1px;
    width: 100%;
    position: absolute;
    left: 0;
    background: linear-gradient(90deg, #309398 0%, #86CED2 50%, #40989C 100%);
    top: 0;
  }

  .inner_widget .hero_text:first-of-type::after {
    top: auto;
    bottom: 0;
  }

  .inner_widget .hero_text:first-of-type svg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: -1;
  }

  .hero_points {
    display: flex;
    flex-direction: column;
    padding-top: 32px;
    border-top: 1px dashed #86CED2;
    gap: 8px;
    margin-bottom: 32px;
  }

  .hero_points li {
    display: flex;
    gap: 8px;
    align-items: flex-start;
    font-size: 14px;
    line-height: 24px;
    color: #fff;
  }
  .hero_points li svg {
    flex-shrink: 0;
  }

  .hero_points li span {
    font-weight: 600;
    text-decoration: underline;
    cursor: pointer;
    position: relative;
  }

  .hero_points li span .tooltip {
    display: none;
    position: absolute;
    top: calc(100% + 6px);
    left: 0;
    background: #fff;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.12);
    padding: 10px;
    color: #000;
    width: 95vw;
    max-width: 300px;
    z-index: 1;
  }

  .hero_points li span .tooltip::after {
    content: '';
    position: absolute;
    top: -8px;
    left: 10%;
    transform: translateX(-50%);
    border: 5px solid transparent;
    border-bottom-color: #fff;
  }

  .hero_points li span:hover .tooltip {
    display: block;
  }

  .hero_img_mob {
    display: none;
  }

  .sidebar-nav > a {
    display: none;
  }

  .new_banner {
    border-radius: 24px;
    border: 1px solid #FDB948;
  }

  .new_banner .banner_head {
    padding: 16px 12px;
    background: #FFC156;
    border-radius: 24px 24px 0px 0px;
  }

  .new_banner .banner_head img {
    width: 105px;
    margin-bottom: 12px;
  }

  .new_banner .banner_head p {
    font-size: 22px;
    line-height: 1.4;
  }

  .new_banner .banner_body {
    padding: 16px 12px;
    background: #FFEDCC;
    border-radius: 0px 0px 24px 24px;
  }

  .new_banner .banner_body .hero_points {
    padding-top: 0;
    border-top: none;
  }

  .new_banner .banner_body li {
    color: #000;
  }

  .new_banner .banner_body a {
    margin-bottom: 12px;
  }

  .new_banner .banner_body > p {
    font-size: 12px;
    text-align: center;
    line-height: 1.5;
  }

  .header__assessment-control.active .btn_yellow {
    display: none !important;
  }

  .new_banner .banner_body .tooltip {
    font-weight: 400;
  }

  .hero_widget.widget {
    background: linear-gradient(270deg, rgba(48, 147, 152, 0.00) 40%, rgba(48, 147, 152, 0.70) 60%, #309398 70%), url('https://conversionratestore.github.io/projects/hantergalloway/img/bg_banner_new.jpg') center right no-repeat;
    background-size: cover;
    padding: 44px 0 44px 121px
  }

  @media (max-width: 768px) {
	  #keradan-popup-checklist div.common-bottom-black-logo {
		padding-top: 8px;
	  }
    .hero_widget.widget {
      background: #309398;
      padding: 34px 0 0;
    }
    .inner_widget .hero_text:first-of-type {
      width: 100%;
      display: flex !important;
      justify-content: center;
    }
    .hero_widget .inner_widget {
      display: flex;
      flex-direction: column;
      padding: 0 24px;
    }
    .hero_widget .inner_widget .hero_points {
      order: 1;
      margin-bottom: 0;
    }
    .hero_widget.widget .container {
      width: 100%;
    }
    .hero_widget .btn_wrap {
      margin-inline: auto;
    }
    .hero_widget .btn_wrap .btn_yellow {
      min-height: 48px;
      border-radius: 25px;
    }
    .inner_widget .hero_text, .hero_widget .btn_wrap, .hero_subtitle {
      display: block !important;
    }
    .hero_subtitle br {
      display: none;
    }
    .hero_widget .hero_title {
      font-size: 32px;
      line-height: 44px;
      margin-bottom: 14px;
      max-width: 100%;
    }
    .hero_widget .hero_subtitle {
      font-size: 14px !important;
      line-height: 20px !important;
      text-transform: capitalize;
      margin-bottom: 24px !important;
    }
    .hero_img_mob {
      display: block;
      margin-top: 24px;
      width: 100%;
    }
    .hero_widget .hero_text.bottom-text {
      margin-bottom: 24px;
    }
    .mobile_text_from_hero {
      display: none !important;
    }
    .footer_button.bottomfixed {
    border-radius: 24px 24px 0px 0px;
    background: #FFEDCC;
    box-shadow: 0px -4px 8px 0px rgba(0, 0, 0, 0.12);
    padding: 10px 12px 16px;
    bottom: 0;
    width: calc(100% - 32px);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;

  }

  .footer_button.bottomfixed a {
    width: 100%;
  }
  }
	
</style>

    <div id="main-content">
      <div class="new_mobile_header">
        <div class="mobilehead_logo">
          <a href="https://www.huntergalloway.com.au/" alt="logo hunter Galloway">
            <img src="https://cjmhfp3t381yd87a17zl60cv-wpengine.netdna-ssl.com/wp-content/themes/Divi/images/hunter_logo_black_.svg" />
          </a>
        </div>
        <div>
          <div class="header_button_flex">
            <a href="#" alt="" class="btn_yellow rc_open old_head_cta pum-trigger" style="cursor: pointer"> Get a Free Assessment </a>
          </div>
          <ul>
            <li>
              <a href="tel:1300088065" alt="" class="mobilehead_phone_tel">1300 088 065</a>
            </li>
            <li>
              <a href="https://www.huntergalloway.com.au/contact/" alt="" class="mobilehead_phone_link">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="link_pages">
        <ul>
          <li><a href="https://www.huntergalloway.com.au/our-team/" target="blank">Who We Are</a></li>
          <li><a href="https://www.huntergalloway.com.au/home-loans-brisbane/" target="blank">What We Do</a></li>
          <li><a href="https://www.huntergalloway.com.au/who-we-help/" target="blank">Who We Help</a></li>
        </ul>
      </div>
      <section class="hero_widget widget">
        <div class="container">
          <div class="inner_widget">
            <p class="hero_text"><span>Find out your chances of getting a loan</span>
              <?=$elipsis_svg?>
            </p>
            <h1 class="hero_title">Mortgage Broker Brisbane</h1>
            <p class="hero_subtitle">
              Improve your chances of getting a loan with an award winning mortgage broker.<br />
              We have one of the highest loan approval rates in the country.
            </p>
            <ul class="hero_points">
              <li><?=$check_img?><div><span>Market-leading <p class="tooltip">
              Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by
                          DigitalFinance Analytics DFA. In 2017 to
                          2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
              </p></span> loan approval rate in Australia of 97%</div></li>
              <li><?=$check_img?>Variety of options due to direct access to 30+ Australian banks & lenders</li>
              <li><?=$check_img?><div><span>#1 rated <p class="tooltip">
                The highest rated and most reviewed Mortgage Broker in Brisbane: 5-star rating based on 2000+ reviews on Google
              </p></span> Mortgage Broker in Brisbane</div></li>
            </ul>
            <div class="btn_wrap">
              <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
            </div>
            <p class="hero_text bottom-text">We promise to get back to you within 4 business hours</p>
          </div>
          <img class="hero_img_mob" src="https://hgstagingsite.wpengine.com/wp-content/uploads/2024/10/hero_img_mb.jpg" alt="mobile_img">
        </div>
      </section>

      <div class="home__nav-wrap">
        <div class="home__nav-body">
          <section class="mobile_text_from_hero">
            <p class="hero_subtitle">Improve your chances of getting a loan with an award winning mortgage broker. We have one of the highest loan approval rates in the country</p>
            <div class="btn_wrap">
              <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
            </div>
            <p class="hero_text bottom-text">We promise to get back to you within 4 business hours</p>
          </section>
          <section class="reputation_widget widget box_list" id="reputation_widget">
            <div>
              <div class="inner_widget">
                <div>
                  <h2 class="inner_title">Our reputation and achievements</h2>
                  <div class="market_wrapper">
                    <div class="market_text">
                      <span>Market average rejection rate is 40%, our rejection rate is <strong>3%</strong></span>
                      <div class="market_dd">
                        <div class="inner">
                          Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by
                          <a href="https://www.mortgagebusiness.com.au/breaking-news/13042-home-loan-rejection-rate-hits-40" alt="">'DigitalFinance Analytics DFA'</a>. In 2017 to
                          2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="reputation_prize">
                    <span>2024 Mortgage Broker of the Year</span>
                  </div>

                  <div class="front_popup_prize_image flex">
                    <div class="slider_prize swiper-container">
                      <!-- Swiper -->
                      <div class="swiper-wrapper">
                        
                        <div class="slide_item swiper-slide">
                          <img src="/wp-content/uploads/2024/12/2024-qld-nt-broker-of-the-year-hunter-galloway.png" alt="" />
                        </div>
                        <div class="slide_item swiper-slide">
                          <img src="/wp-content/uploads/2024/12/QLD-NT-brokerage-of-the-year-under-5-brokers-hunter-galloway.png" alt="" />
                        </div>
                        <div class="slide_item swiper-slide">
                          <img src="/wp-content/uploads/2024/06/Mortgage-Broker-Brisbane-Hunter-Galloway-Award-2024.png" alt="" />
                        </div>
						<div class="slide_item swiper-slide">
                          <img src="/wp-content/uploads/2019/07/best-mortgage-broker-2019.png" alt="" />
                        </div>
                        <div class="slide_item swiper-slide">
                          <img src="/wp-content/uploads/2019/12/2019_001.png" alt="" />
                        </div>
                        <div class="slide_item swiper-slide">
                          <img src="/wp-content/uploads/2019/12/2019_002.png" alt="" />
                      </div>
					  </div>	  
                      <!-- Add Arrows -->
                      <div class="slide-button-next"></div>
                      <div class="slide-button-prev"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="risk_widget widget box_list" id="risk_widget">
            <div>
              <div class="inner_widget">
                <h2 class="inner_title">
                  Don’t risk having your <br />
                  home loan declined
                </h2>
                <div class="risk_holder">
                  <div class="risk_inner-left">
                    <div>
                      Did you know that over
                      <div class="market_text">
                        <span>40%</span>
                        <div class="market_dd">
                          <div class="inner">
                            Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by
                            <a href="https://www.mortgagebusiness.com.au/breaking-news/13042-home-loan-rejection-rate-hits-40" alt="">'DigitalFinance Analytics DFA'</a>. In 2017 to
                            2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
                          </div>
                        </div>
                      </div>
                      of home loan applications that get submitted <br />
                      never make it to settlement? Don’t take that risk.
                    </div>

                    <ul class="risk_list">
                      <li class="scheme_ico">
                        <p class="list_title">We know the banks inside out</p>
                        <p class="list_text">
                          Our brokers have over 35 years of combined experience in the finance industry, including decades of banking experience, and have processed thousands of home loan applications.
                        </p>
                        <p class="list_text">
                          We have a wide range of lenders on our panel and we intimately understand their credit policies. This means we know the problems you may face on your loan
                          application and how to mitigate them when applying with any specific bank or lender.
                        </p>
                      </li>
                      <li class="umbrella_ico">
                        <p class="list_title">Reducing risk of rejection</p>
                        <p class="list_text">Unlike other brokers, Hunter Galloway completes our own internal credit assessment process before applying with any lender.</p>
                        <p class="list_text">
                          Your application will be assigned its own Credit Manager who reviews each application thoroughly before it is submitted to the lenders, meaning we won't
                          apply with a lender who won't approve your loan.
                        </p>
                      </li>
                    </ul>
                  </div>

                  <div class="risk_imgwrap">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/manager_new.png" alt="manager" />
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="why_choose" class="why_choose why_choose_widget widget box_list">
            <div>
              <div class="inner_widget">
                <div class="why_choose_prize">
                  <span>2024 Mortgage Broker of the Year</span>
                </div>
                <div class="why_choose_title">Why Choose Hunter Galloway As<br />Your Mortgage Broker?</div>
                <div class="why_choose_blocks">
                  <div class="why_choose_blocks_inner flex">
                    <div class="why_choose_item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/why_choose_001.svg" />
                      <div class="why_choose_item_title">One of the lowest rejection rates</div>
                      <div class="why_choose_item_text">Across Mortgage Brokers in Australia</div>
                    </div>
                    <div class="why_choose_item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/why_choose_002.svg" />
                      <div class="why_choose_item_title">The highest rated and most reviewed</div>
                      <div class="why_choose_item_text">Mortgage Broker in Brisbane on Google</div>
                    </div>
                    <div class="why_choose_item">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/why_choose_003.svg" />
                      <div class="why_choose_item_title">We have direct access to 30+ banks and lenders</div>
                      <div class="why_choose_item_text">Across Australia</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="dark_holder_widget widget box_list first_wrap_btn">
            <div>
              <div class="inner_widget">
                <h3 class="inner_title">Are you actually ready to buy your first home?</h3>
                <div class="btn_wrap">
                  <a class="btn_yellow rc_open B-trigger" href="#">Find out if you're eligible for a loan</a>
                </div>
              </div>
            </div>
          </section>

          <section class="why_do_widget widget box_list" id="why_do_widget">
            <div>
              <div class="inner_widget">
                <h2 class="inner_title">
                  Why do I need a broker if I can <br />
                  get a loan through my bank?
                </h2>
                <p class="subtitle">Just compare these two options when applying for a loan</p>
                <div class="why_do_holder">
                  <div class="col_yellow">
                    <div>
                      <img src="https://conversionratestore.github.io/projects/hantergalloway/img/hunter_galloway.svg" />
                    </div>
                    <div class="col_title">
                      <p>Get a Loan with Hunter Galloway</p>
                    </div>
                    <ul class="why_do_list">
                      <li>We take extra time up front to go through your full situation and provide a complete lending solution.</li>
                      <li>Our brokers will look at your needs now and into the future, to make sure you have the best possible loan that looks after all of your needs.</li>
                      <li>
                        A mortgage broker acts on your behalf to arrange a home loan through a bank or lender. Australian banks and lenders have different policies and loan
                        requirements, and it is a brokers job to find a loan from one of these parties that fit with your individual situation.
                      </li>
                    </ul>
                  </div>
                  <div class="col_dark">
                    <div>
                      <img src="https://conversionratestore.github.io/projects/hantergalloway/img/handle.svg" />
                    </div>
                    <div class="col_title">
                      <p>Applying directly to a lender</p>
                    </div>
                    <ul class="why_do_list">
                      <li>Many banks have a "quantity over quality" policy, meaning that they care more about adding to their quota than about your financial future.</li>
                      <li>Lenders can only offer you a limited selection of loan products. There's no guarantee that you're getting the best deal available.</li>
                      <li>
                        Due to the complexity of mortgage applications, sometimes even the bank staff don't know their bank's policies! This can lead to delays in your loan
                        application, and in some instances your loan will get declined for no good reason.
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="how_much_widget widget box_list" id="how_much_widget">
            <div>
              <div class="inner_widget">
                <div class="how_much_holder">
                  <div class="col_img">
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/bank.svg" />
                  </div>
                  <div class="col_text">
                    <h2 class="inner_title">
                      How much does it cost <br />
                      to use a broker and your services?
                    </h2>
                    <p>
                      Our services are completely free for all home and investment loans. We get paid by the lenders for doing the work, collating your loan application and meeting
                      with you. This work would otherwise be done by a bank manager or branch lender so you get access to the same rates as if you went to the lender directly.
                    </p>
                    <p>
                      The advantage for you is that unlike when dealing with one bank, we can help you work with a wider variety of lenders and get the best options that work for
                      you choosing from our panel of over 30 banks and lenders!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Here keradan: -->

          <section class="dark_holder_widget widget box_list second_wrap_btn" id="checklist_widget">
            <div>
              <div class="inner_widget">
                <h3 class="inner_title">Our checklist to maximize your chances of securing a loan</h3>
                <div class="btn_wrap">
                  <a class="btn_yellow keradan" href="#" onclick="keradan.mbb.show_popup('checklist'); return false;"> See our checklist </a>
                </div>
              </div>
            </div>
          </section>
			
			 <section class="text_widget widget">
            <div>
              <div class="inner_widget">
                <div class="box_list membership_box" id="membership_box">
                  <h3 class="inner_title">All of Our Brisbane Mortgage Brokers are Accredited</h3>
                  <p>
                    As members of the Financial Brokers Association of Australia (FBAA) and the Credit and Investments Ombudsman (CIO) we must uphold the highest level of
                    excellence when helping clients with their finances.
                  </p>
                  <p>
                    The members of each organisation must meet a minimum standard in experience, education and ongoing training to maintain membership each year and as active
                    members, we commit to upholding these standards, ensuring we maintain their high levels of compliance, integrity, and professionalism with all of our mortgage
                    clients.
                  </p>
                </div>

          <!-- Here keradan: -->
          <section class="dark_holder_widget widget box_list third_wrap_btn" id="roadmap_widget">
            <div>
              <div class="inner_widget">
                <h3 class="inner_title">What is the process of applying for a loan?</h3>
                <div class="btn_wrap">
                  <a class="btn_yellow" href="#" onclick="keradan.mbb.show_popup('roadmap'); return false;"> Explore our roadmap </a>
                </div>
              </div>
            </div>
          </section>

         
			  
<section id="reviews_widget" class="reviews_widget" style="padding: 0;margin-bottom: 45px;">
   
		  
              <div class="slider_holder swiper-container" style="overflow: hidden;">
			  
			  
              
                <div class="swiper-wrapper">
				
				
				
				
	<?php
					$contents=file_get_contents("google_otz.txt");
$lines=explode("|",$contents);
foreach($lines as $line){
$linesfin=@explode("#",$line,2)[0];
$linename=@explode("#",$line,2)[1];

if ($linesfin=='rev'){
$linename_1=explode("%",$linename);

foreach($linename_1 as $linename_2){
$linename_2_name=explode("$",$linename_2)[0];	
$linename_2_img=explode("$",$linename_2)[1];
$linename_2_ocen=explode("$",$linename_2)[2];
$linename_2_otz=explode("$",$linename_2)[3];
$linename_2_date=explode("$",$linename_2)[4];
$kl='';
for ($i = 1; $i <= $linename_2_ocen; $i++) {
  $kl.='<img src="/wp-content/themes/hunter-galloway/assets/img/star.svg" alt="star" />';
};

if ($linename_2_otz!=''){
echo '<div class="slide_item swiper-slide" style="text-align: center;">
<div class="img_holder"><img src="'.$linename_2_img.'" alt="user"></div>
 <div class="rating_holder">
                      '.$kl.'
                    </div>
 <div class="text_holder">
                      <p style="text-align: left;line-height: 1.7em;min-height: 130px;">'.mb_strimwidth($linename_2_otz, 0, 110, '<span class="dots">...</span>').'<span class="show_more_text" style="line-height: 1.7em;">'. substr($linename_2_otz, 81).'</span> </p>
                    </div>
					<div class="btn_holder">
                      <a class="btn_show_more">
                        <span class="more">Show more</span>
                        <span class="less">Show less</span>
                      </a>
                    </div>
					<div>
                      <p class="user_name" style="height: 30px;overflow: hidden;line-height: 30px;">'.$linename_2_name.'</p>
                      <p class="reviews_date">'.$linename_2_date.'</p>
                    </div>
                  </div>';	
}
	
	}}

}
?>			
				
				
                  
            
                   
                    
                    
				  

                  

                  
                </div>
				
                <!-- Add Arrows -->
                <div class="slide-button-next"></div>
                <div class="slide-button-prev"></div>
              </div>
			  
			  
			  
			  
            </section> 
		 
		 
		 
		 
		 
		 
		 
		 
		  
          <section class="lenders_widget widget box_list" id="lenders_widget">
            <div>
              <div>
                <h2 class="inner_title">Lenders on our panel</h2>

                <div class="lenders_widget_box">
                  <!-- Swiper -->
                  <ul>
                    <li>
                      <img src="/wp-content/uploads/2018/11/westpac_logo.jpg" alt="Westpac Bank" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/anz_logo.jpg" alt="ANZ Bank" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/nab_logo.jpg" alt="NAB" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/amp_logo.jpg" alt="AMP" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/adelaidebank_logo.jpg" alt="Adelaide Bank" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/firstmac_logo.jpg" alt="FirstMac" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img
                        src="https://conversionratestore.github.io/projects/hantergalloway/img/commonwealth.png"
                        alt="Commonwealth Bank (CBA)"
                        class="et-waypoint et_pb_animation_top et-animated"
                      />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/stgeorge_logo.jpg" alt="St George Mortgage Brokers" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/ing_logo.jpg" alt="ING Direct" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/homeloans_logo.jpg" alt="Home Loans" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/macq_logo.jpg" alt="Macquarie Bank" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img
                        src="https://conversionratestore.github.io/projects/hantergalloway/img/suncorp.png"
                        alt="Suncorp Bank"
                        class="et-waypoint et_pb_animation_top et-animated"
                      />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/pepper_logo.jpg" alt="Pepper Money" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/mebank_logo.jpg" alt="ME Bank" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                    <li>
                      <img src="/wp-content/uploads/2018/11/bankwest_logo.jpg" alt="Bankwest" class="et-waypoint et_pb_animation_top et-animated" />
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <section class="dark_holder_widget widget box_list fourth_wrap_btn">
            <div>
              <div class="inner_widget">
                <h3 class="inner_title">Find out what options you have</h3>
                <div class="btn_wrap">
                  <a class="btn_yellow rc_open E-trigger" href="#">Get your free credit rating assessment</a>
                </div>
              </div>
            </div>
          </section>

          <section class="accordion_widget widget box_list" id="accordion_widget">
            <div>
              <div class="inner_widget">
                <h2 class="inner_title">Questions and Answers</h2>
                <div class="accordion_holder">
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">Are you able to do virtual meetings?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        Yes, our mortgage brokers can still 'face to face' meet you using Zoom Meeting or Google Hangouts, whichever is your preference. In our online meeting,
                        we'll be able to go through your requirements and walk you through the home buying process.
                      </p>
                      <p>
                        Our mortgage brokers are working and are available during the coronavirus outbreak, so if you need any assistance with a home loan
                        <a href="/contact/">get in touch today.</a>
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">What is a mortgage broker?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        A mortgage broker is a consultant that can help you with finding a home loan, or mortgage usually from their panel of lenders. Once the right home loan has
                        been selected, the mortgage broker will help you manage the home loan process, from initially signing the paperwork all the way until settlement.
                      </p>
                    </div>
                  </div>

                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">What does a mortgage broker do?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        A mortgage broker acts on your behalf to arrange a home loan through a bank or lender. Australian banks and lenders have different policies and loan
                        requirements, and it is a brokers job to find a loan from one of these parties that fit with your individual situation.
                      </p>
                      <p>
                        Mortgage Brokers can help find the right home loan for any situation, from purchasing your first home to buying an investment property all the way to
                        refinancing your mortgage to a better interest rate.
                      </p>
                      <p>
                        At <a href="/">Hunter Galloway</a> we have access to over 30 different banks and lenders, giving you a wide range of home loan options to ensure we have a
                        lender that can fit in with what you need.
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">Is it good to go through a mortgage broker?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>Applying for your home loan through a mortgage broker gives you many advantages and there are no down sides.</p>
                      <p>
                        We will give your application more care and attention than going direct, and we can offer you the best loan product across over thirty different lenders.
                      </p>
                      <p>
                        And if your loan application is complicated for any reason, we have the in depth knowledge and expertise required to correctly assess your situation and
                        find you the right loan.
                      </p>
                    </div>
                  </div>

                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">How much do mortgage brokers get paid in Australia?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>Mortgage brokers in Australia get paid commissions from the banks. There is no cost to you as the client.</p>
                      <p>
                        We do the same work the branch manager would do in putting together your application, so the lenders pay us for that service. The difference is that we are
                        invested in your loan application - we don't get paid otherwise - so we will work very hard for it to get approved, as well as provide incredible service.
                      </p>
                      <p>
                        As our team at <a href="/">Hunter Galloway</a> are mortgage broking and credit experts, we can answer all of your questions instead of directing you to
                        another department.
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">What types of customers do you help?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        Our mission is to make your home loan application effortless, and to provide competitive rates. We always work towards building a strong and personal relationship with every one of our
                        clients and will work tirelessly to find the right home loan for you. Your mortgage is a lifelong commitment, and so is our commitment to you.
                      </p>
                      <ul class="inner_list">
                        <li><a href="/first-time-investor/">Are you a First Time Investor who wants to build a portfolio?</a></li>
                        <li><a href="/first-home-buyer-loans/">Are you a first home buyer who is overwhelmed and doesn’t know where to start?</a></li>
                        <li><a href="/home-or-investment-property/">Are you looking to update your home and keep your existing home as an investment?</a></li>
                        <li><a href="/home-loans-for-doctors/">Are you a medical professional looking for no deposit 100% LVR financing?</a></li>
                        <li><a href="/property-investor-portfolio/">Are you a seasoned investor looking to add to your portfolio?</a></li>
                        <li>
                          <a href="/home-loans-without-hassle/">Feeling too busy?</a
                          ><a href="/home-loans-without-hassle/"> Is your property purchase being held back due to lack of time?</a>
                        </li>
                      </ul>
                      <p>We help all sorts of clients from across Brisbane, so get in touch with the team today to book a <a href="/free-assessment/">free assessment</a>.</p>
                    </div>
                  </div>

                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">What is an Independent Mortgage Broker?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        An Independent Mortgage Broker in Brisbane is a broker that is not subjected to outside authority. In other words, they should technically be charging a fee
                        for their services and not be paid commissions by the banks.
                      </p>
                      <p>
                        In Australia, brokers are not technically independent. Brokers use an aggregator, who provide access to all of the loans offered by the banks and lenders.
                        We are paid a commission from the banks for providing them with a home loan.
                      </p>
                      <p>
                        But there is still a difference between independently owned mortgage brokers, and those owned by banks. Mortgage brokers who are owned by the banks are
                        influenced to recommend the loans from the banks that own them.
                      </p>
                      <p>
                        <a href="/">Hunter Galloway</a> is an independently owned Mortgage Broker, not connected to any banks or lender. We use Connective Financial services as our
                        aggregator who provide the latest technology and training to help find our customers the best finance options.
                      </p>
                      <p>
                        We are not owned by a bank, and neither the aggregator or the banks have any influence on our decisions or loan recommendations. We only care about what is
                        best for you.
                      </p>
                    </div>
                  </div>

                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">Why should I use a mortgage broker in Brisbane?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        Using a mortgage broker gives you many more options than going directly through a bank. Individual banks can only offer you the small number of loans that
                        they have. We have access to over 40 banks in Australia, so we can find you the right lender and the right loan.
                      </p>
                      <p>The best mortgage brokers can help you through their intimate knowledge of credit policy, making the home loan process quick, easy and stress-free.</p>
                      <p>
                        We work with a wide range of borrowers, from <a href="/first-home-buyer-loans/">first home owners</a>,
                        <a href="/property-investor-portfolio/">experienced property investors</a> to <a href="/home-loans-for-doctors/">medical professionals</a> helping them find
                        the best deal.
                      </p>
                      <p>
                        Through our intimate bank credit knowledge, we can find ‘secret’ policy exceptions to get approvals for applications that would normally get declined,
                        including no deposit <a href="/guarantor-home-loan/">guarantor home loans</a> and <a href="/unusual-employment-loan/">unusual employment loans.</a>
                      </p>
                      <p>
                        We also have very strong relationships with the credit teams and key staff at the banks meaning we are also in a good position to get the very best interest
                        rates for you, ensuring you can secure a better deal. Often this means a cheaper variable or fixed interest rates, or rebates from the bank to cover the costs to
                        <a href="/refinance-home-loan/">refinance your loan.</a>
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">What is the difference between fixed and variable rates?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        A fixed rate mortgage means that you 'lock in' an interest rate for either a two-, three-, or five-year fixed period. While you're on that fixed rate, your
                        loan repayment will not change, even if interest rates go up.
                      </p>
                      <p>
                        The main benefit of a fixed rate mortgage is security. You know what your monthly repayments will be and you don't have to worry about interest rates rising
                        or falling.
                      </p>
                      <p>
                        A variable rate mortgage means that your mortgage repayments will change based on current interest rates. If the interest rates go up, then your repayments
                        will increase. If interest rates drop, so do your repayments.
                      </p>
                      <p>
                        The main benefit of a variable rate mortgage is flexibility. A variable rate home loan will allow you to make extra repayments without penalties and you
                        also have the option of extra facilities like offset accounts.
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">How can I manage risk and borrow the smart way?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        Managing risk is all about understanding your situation, and borrowing the right amount of money. Borrowing the absolute maximum amount of money possible
                        can be a problem if your financial or living circumstances change, so it's important to get the assistance of a mortgage broker to help make sure that
                        you're borrowing the right amount of money.
                      </p>
                      <p>
                        Here at Hunter Galloway - Mortgage Broker Brisbane, we take the time to learn about your unique situation and what you're trying to achieve so we can find you the right loan - and the
                        right loan amount - that will help you to achieve your goals without putting yourself through any unnecessary financial risk.
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">How long should a mortgage application take?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        The length of a mortgage application depends on a lot of different factors, including the complexity of the application and the lender that you're using.
                        Simple applications with the most responsive lenders can be very quick. More complex applications or some of the slower lenders can take a bit more time.
                      </p>
                      <p>
                        If you are purchasing a property it's very common for us to have our finance approved within 14 days, or 2 weeks - sometimes less if you have tight finance
                        timeframes.
                      </p>
                      <p>
                        We will give you an idea of the expected time for your application when we submit it to the lenders, and keep you posted every step of the way. As a general
                        guide, though, most applications are settled within a month (and many are settled much quicker than that).
                      </p>
                    </div>
                  </div>

                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">How can Hunter Galloway make the home loan application process simple?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>We will do all of the leg work on your home loan application to make it as simple and stress-free as possible.</p>
                      <p>
                        It starts with an information session with one of our brokers. They will sit down with you to understand your background, your goals, and your financial
                        circumstances.
                      </p>
                      <p>
                        Based on this information, we work with an internal credit team and utilise cutting-edge technology to provide you with the best home loan solution for you.
                      </p>
                      <p>
                        Our internal credit team will go through your application with a fine-toothed comb to make sure that everything is in order and you have the best possible
                        chance of getting your loan approved.
                      </p>
                      <p>
                        As your application progresses, we will be there to help you every step of the way. We will provide you with regular updates about the progress of your
                        application, and will work to quickly resolve any issues if they crop up.
                      </p>
                      <p>
                        If you want some examples of just how easy it can be, check out our Google reviews. We have over 680 reviews with a 5-star average rating, which goes to
                        show just how easy and simple applying for a home loan with us can be.
                      </p>
                    </div>
                  </div>
                  <div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">Are there different products that would suit me better over others? What are my options?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        There are literally hundreds of different home loans across 40 different lenders in Australia, each of them with their advantages and disadvantages. Some
                        products will be better suited for you than others. It's a good idea to check each product to see what suits your unique
                        situation the best.
                      </p>
                      <p>
                        Luckily, that's exactly what the mortgage brokers at Hunter Galloway are here to do! We search across all of the options from the lenders and banks to find
                        you the right product.
                      </p>
                      <p>
                        Once we find the right product for you, we will meet with you to discuss your options and answer any questions you might have before moving ahead with your
                        application. Rest assured that we will find you the best loan possible.
                      </p>
                    </div>
                  </div>
				<div class="et_pb_module et_pb_toggle et_pb_toggle_close">
                    <h5 class="et_pb_toggle_title">What are the latest home loan interest rates?</h5>
                    <div class="et_pb_toggle_content clearfix">
                      <p>
                        We have access to 30+ lenders, with interest rates starting from 3.99% and comparsion rate of 3.99%.
                      </p>
                      <p>
                        It's important to note that the lowest current interest rate is not suitable for all customers, and your eligiblity will depend on the banks credit approval process and features. 
                      </p>
                      <p>
                        Also please note that the comparison rate provided is based on a loan amount of $150,000 and a term of 25 years. Loan to value ratio of 70% or less.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section class="dark_holder_widget widget box_list five_wrap" id="check_qualify">
            <div>
              <div class="inner_widget">
                <h3 class="inner_title">Would you like to learn about your situation?</h3>
                <div class="btn_wrap">
                  <a class="btn_yellow rc_open C-trigger" href="#">Check if you qualify for a loan</a>
                </div>
              </div>
            </div>
          </section>

          <section class="text_widget widget">
            <div>
              <div class="inner_widget">
                <div class="box_list membership_box" id="membership_box">
                  <h3 class="inner_title">Support for First-Time Home Buyers in Brisbane</h3>
                  <p>
                    Navigating the complex world of real estate as a first-time buyer in Brisbane can be daunting. Our team of experienced mortgage brokers at Hunter Galloway specialises in assisting first-time home buyers in understanding their financial situation, exploring loan options, and guiding them through the home loan application process. 
                  </p>
                  <p>
                    With a deep understanding of the Brisbane property market and a track record of helping first home buyers secure the best loan for their needs, we are here to support you every step of the way.
                  </p>
                </div>

                <div class="box_list credit_scores" id="credit_scores">
                  <h3 class="inner_title">Valuation issues & credit scores</h3>
                  <p>
                    One of the most common issues we see is with bank valuations. Getting a low valuation can cause a lot of problems, and may ultimately stop your property journey
                    before it even begins.
                  </p>
                  <p>
                    We can order free upfront valuations with many of our lenders, meaning we can find out what your bank thinks your property is worth - and resolve any issues
                    with shortfalls - way before applying with them for formal approval. This protects you from wasting time on unsuccessful applications and avoids damaging your credit file.
                  </p>
                  <p>
                    Credit scores can also be a major issues. You might not realise this, but applying for home loans automatically initiates a credit enquiry. Multiple credit
                    enquiries over a short period - such as doing multiple home loan applications - can scare off some lenders.
                  </p>
                  <p>
                    That's why we do not apply with a bank until we have all parts of your loan application sorted and we know you have a very high chance of approval. It reduces
                    the risk of damaging your credit score and has the added benefit of getting your home loan approved quickly!
                  </p>
                </div>

                <div class="box_list complex_credit" id="complex_credit">
                  <h3 class="inner_title">Complex Credit Policy Pitfalls</h3>
                  <p>
                    Each lender and bank in Australia has a unique credit policy. For example, some lenders will accept your full income but others may not accept certain types of
                    income due to their policy.
                  </p>
                  <p>
                    Quite often bank policy can be set in stone, and due to the complexity bank staff quite honestly don’t know it nor do many mortgage brokers in Brisbane. They
                    are not familiar with complex situations and how to correctly assess them. This can sometimes cause it to take quite a long time to process your application and
                    even in some instances mean your loan will get declined for no good reason.
                  </p>
                  <p>
                    With banks making their policies more and more complex it becomes more important to correctly package, and assess your application before it is even lodged with
                    the bank – showing the banks all of the strengths of your home loan application and making sure it fits all of their policies.
                  </p>
                  <p>At Hunter Galloway we have our own in-house credit team and we make sure your application is going to fit with the bank each time.</p>
                  <div class="fluid-width-video-wrapper" style="padding-top: 56.25%">
                    <iframe
                      src="https://www.youtube.com/embed/EQFSii8_2DQ?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fhuntergalloway.com.au"
                      frameborder="0"
                      allowfullscreen="allowfullscreen"
                      id="fitvid0"
                      data-gtm-yt-inspected-11136831_62="true"
                    ></iframe>
                  </div>
                </div>
                <div class="box_list">
    <h3 class="inner_title">What makes a good mortgage broker?</h3>
    <p>A mortgage broker can be good, average, or bad. A good broker makes buying a home easy and stress-free.</p>
    <p>They focus on your needs and financial situation to determine how much you can borrow. If any issues arise, they help resolve them or find a suitable lender.</p>
    <p>A good broker explains different loan options and associated costs without pressuring you. They assist from pre-approval to settlement.</p>
    <p>Even if you're not ready to buy now, a good broker provides ongoing support and tools for when you are ready.</p>
    <p>They also ensure you have the best deal even after the loan is settled and help with refinancing if needed.</p>
</div>

		 <iframe
                      src="https://www.youtube.com/embed/_3HQq6WGvCQ?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fhuntergalloway.com.au"
                      frameborder="0"
                      allowfullscreen="allowfullscreen"
                      id="fitvid0"
                      data-gtm-yt-inspected-11136831_62="true"
                    ></iframe>
                  <!--
								<p><a href="/free-assessment/"><img class="size-medium wp-image-7881 aligncenter" src="/wp-content/uploads/2018/06/HomeLoansBrisbane-1-300x51.png" sizes="(max-width: 300px) 100vw, 300px" srcset="/wp-content/uploads/2018/06/HomeLoansBrisbane-1-300x51.png 300w, /wp-content/uploads/2018/06/HomeLoansBrisbane-1.png 320w" alt="Mortgage Broker Brisbane" width="300" height="51" /></a></p>
							-->
                </div>
              </div>
            </div>
          </section>

          <section class="dark_holder_widget widget box_list six_wrap" id="speak_to_broker">
            <div>
              <div class="inner_widget">
                <h3 class="inner_title">Learn if you are eligible for a loan</h3>
                <div class="btn_wrap">
                  <a class="btn_yellow rc_open D-trigger" href="#"> Discover your individual borrowing capacity </a>
                </div>
              </div>
            </div>
          </section>

          <section class="text_widget widget">
            <div class="broker_question">
              <div class="inner_widget">
                <div class="box_list">
                  <h3 class="inner_title">How important is a broker’s experience?</h3>
                  <div>
                    <p>Experience counts for everything in the finance world.</p>
                    <p>
                      If you work with an inexperienced broker, there’s a much higher chance that they will make an error during your home loan process. They might tell you that
                      you don’t qualify for a loan because they don’t know all of the lending policies of the banks. Or they might find you a home loan that isn’t really the best
                      for you and your situation.
                    </p>
                    <p>
                      In a worst-case scenario, an inexperienced broker could cause your home loan application to be declined - either through a lack of knowledge, or a mistake in
                      the home loan application process.
                    </p>
                    <p>
                      Experienced brokers know the lending policies of the banks inside and out. They know the loan application processes better, and they have the right
                      connections with the banks and lenders who can help push things along in the application process.
                    </p>
                    <p>Working with an experienced broker gives you the best chance of qualifying for a loan, and of finding a loan product that will give you the best rate.</p>
                    <p>
                      It’s even better if your broker owns property themselves - that way you know that they have been through the home loan application process as a customer as
                      well.
                    </p>
                    <p>
                      At Hunter Galloway, our brokers have a combined 30+ years of industry experience. They all own multiple properties so they know what things are like on the
                      other side of the fence.
                    </p>
                  </div>
                </div>

                <div class="box_list accent_block_var">
                  <h3 class="inner_title">How do I find a good mortgage broker?</h3>
                  <div>
                    <p>
                      There’s a good chance that you found this page by searching “mortgage broker brisbane” on Google. Searching on Google is a great way to find a mortgage
                      broker, but that should just be the first step in the process.
                    </p>
                    <p>You should also check their reviews, testimonials, and online presence.</p>
                    <p>We recommend looking at reviews on the following sites:</p>
                    <ul>
                      <li>
                        <span
                          ><img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/12.0.0-1/svg/2705.svg" alt="✅" /><span
                            >Google Reviews</span
                          ></span
                        >
                      </li>
                      <li>
                        <span
                          ><img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/12.0.0-1/svg/2705.svg" alt="✅" /><span
                            >Facebook Reviews</span
                          ></span
                        >
                      </li>
                      <li>
                        <span
                          ><img class="emoji" role="img" draggable="false" src="https://s.w.org/images/core/emoji/12.0.0-1/svg/2705.svg" alt="✅" /><span
                            >Product Review</span
                          ></span
                        >
                      </li>
                    </ul>
                    <p>
                      Spend a few minutes reading the reviews to make sure they are made by real people, as some brokers will pay for fake reviews to boost their online presence.
                    </p>
                    <p>
                      Take a look at their website as well. Do they provide a wide range of educational material? Are they actively producing content? Does it look like they are
                      staying on top of the latest developments in the home loan landscape?
                    </p>
                    <p>
                      Finally, arrange a time to speak with your broker. Do they treat you as a unique individual, or do they have a “cookie-cutter” approach? Are they able to
                      explain the complexities of home loan finance in a clear, simple manner? Are they organised?
                    </p>
                    <p>
                      These tips will help you to find the right mortgage broker. For more tips on how to find the best mortgage broker in Brisbane, check out this article:
                      <a href="https://www.huntergalloway.com.au/best-mortgage-broker-brisbane/" title="">22 [easy] tips to find the best mortgage broker in Brisbane</a>
                    </p>
                  </div>
                </div>

                <div class="box_list">
                  <h3 class="inner_title">When is the right time to speak to a mortgage broker?</h3>
                  <div>
                    <p>
                      You can speak with a mortgage broker at any stage during your search for a home - you don’t have to wait until you’ve signed a contract. In fact, we recommend
                      reaching out to a broker early on in your home buying journey.
                    </p>
                    <p>
                      By speaking to a broker early on in the process, you can get some guidance about your borrowing capacity and your chances of getting approved for a loan. This
                      can help give you a quick “reality check”, and most importantly, it gives you time to resolve any financial issues that could prevent you from getting a home
                      when you’re ready to buy.
                    </p>
                  </div>

                  <div>
                    <div class="fluid-width-video-wrapper" style="padding-top: 56.25%">
                      <iframe
                        src="https://www.youtube.com/embed/FMHA2hxQ5pI?rel=0&amp;enablejsapi=1&amp;origin=https%3A%2F%2Fhuntergalloway.com.au"
                        frameborder="0"
                        allowfullscreen="allowfullscreen"
                        id="fitvid0"
                        data-gtm-yt-inspected-11136831_62="true"
                      ></iframe>
                    </div>
                  </div>
                </div>

                <div class="box_list accent_block_var" id="about_good_broker">
                  <h3 class="inner_title">Why Choose Hunter Galloway as Your Mortgage Broker in Brisbane?</h3>
                  <div>
                    <p>
                      We’re not usually big on self-promotion here at Hunter Galloway. With over 1000, 5-star Google reviews, we like to think that our reputation speaks for itself.
                    </p>
                    <p>That being said, there are some distinct advantages that we have over other brokers in Brisbane.</p>
                    <p>
                      To start with, we have a big focus on education. We have written over 200 blog posts, published over 200
                      <a href="https://www.youtube.com/channel/UCKw1JlNlcWR62EpSrXpfUWA" title="" target="_blank">YouTube videos</a>, created an
                      <a href="https://huntergalloway.thinkific.com/courses/home-hosed-7-steps-to-owning-your-first-home" title="" target="_blank">8-week online course</a>, and
                      even written a
                      <a href="https://www.amazon.com.au/Home-Hosed-Without-Sacrificing-Smashed/dp/1797515330" title="" target="_blank">book for first home buyers</a> — all focused
                      on teaching you everything you need to know about buying a home and getting a home loan. We even have a
                      <a href="https://hello.huntergalloway.com.au/finance-in-five" title="" target="_blank">weekly newsletter</a> to keep you up to date with the latest
                      developments in the finance world.
                    </p>
                    <p>
                      Another advantage we have is our size. With four brokers on staff supported by a team of two mortgage experts and six credit analysts, we are the perfect
                      size. Small enough that you get personalised service and care, but large enough that we can stay agile and efficient.
                    </p>
                    <p>
                      Finally, Hunter Galloway has spent hundreds of hours and thousands of dollars on building the best possible home loan assessment and application process. Our
                      internal credit team thoroughly reviews your application <strong>before</strong> the bank ever sees it, meaning that we catch any major issues early on in the
                      process. Thanks to this process, Hunter Galloway has one of Australia’s lowest mortgage rejection rates at less than 3% (the industry average is 40%).
                    </p>
                  </div>
                </div>

                <div class="box_list">
                  <h3 class="inner_title">What is important other than the interest rate on a loan?</h3>
                  <div>
                    <p>
                      Interest rates are always the first thing that comes to mind when anyone thinks about home loans. And they are important - thanks to the wonders of
                      compounding interest, a small reduction in your interest rate can translate into thousands of dollars saved over the lifetime of a 25- or 30-year loan.
                    </p>
                    <p>But interest rates are not everything.</p>
                    <p>
                      You also need to consider the features of the home loan. Is it fixed or variable? Does the loan have a redraw facility or an offset account? Are you able to
                      make extra repayments? What are the other fees and charges involved?
                    </p>
                    <p>
                      The home loan with the cheapest possible rate is not necessarily the best loan for your unique situation. And if you’re not careful, the cheapest available
                      home loan can actually cost you more than a slightly higher-rate home loan that’s better suited to your needs.
                    </p>
                    <p>
                      You need to take into account your goals for the property, your plans for the future, your lending preferences, and the loan features that you need. Then,
                      look for the cheapest interest rate home loan that fits in with the rest of your financial situation.
                    </p>
                    <p>
                      Luckily, you don’t need to do it alone. That’s what we’re here for. When you work with Hunter Galloway, we will do all of the leg work for you. We will spend
                      time with you to find out your goals and your finances, then we will go out to the home loan market and find the most suitable product.
                    </p>
                  </div>
                  <img
                    class="aligncenter wp-image-10180 size-full photo_team"
                    title="mortgage broker"
                    src="/wp-content/uploads/2019/02/mortgage-broker.jpg"
                    sizes="(max-width: 500px) 100vw, 500px"
                    srcset="/wp-content/uploads/2019/02/mortgage-broker.jpg 500w, /wp-content/uploads/2019/02/mortgage-broker-300x225.jpg 300w"
                    alt="mortgage broker"
                    width="500"
                    height="375"
                  />
                  <section class="text_widget widget" id="contact_us">
                    <div class="btn_contact_us">
                      <div class="btn_wrap" style="width: 218px; margin: auto">
                        <a class="btn_yellow F-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>contact/">Contact us</a>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!-- Navigation -->
        <div class="sidebar-nav">
          <!-- <a href="#reputation_widget" class="sidebar-nav__item active">Our achievements</a>
          <a href="#risk_widget" class="sidebar-nav__item">Why we are your best choice?</a>
          <a href="#why_choose" class="sidebar-nav__item">Find out if you are eligible for a loan</a>
          <a href="#why_do_widget" class="sidebar-nav__item">Why use us instead of a bank?</a>
          <a href="#how_much_widget" class="sidebar-nav__item">How much does it cost?</a>
          <a href="#checklist_widget" class="sidebar-nav__item">Checklist of applying for a loan</a>
          <a href="#roadmap_widget" class="sidebar-nav__item">How do I apply for a loan?</a>
          <a href="#reviews_widget" class="sidebar-nav__item">Our clients' reviews</a>
          <a href="#lenders_widget" class="sidebar-nav__item">Lenders on our panel</a>
          <a href="#accordion_widget" class="sidebar-nav__item">FAQs</a>
          <a href="#check_qualify" class="sidebar-nav__item">Check if you qualify for a loan</a>
          <a href="#membership_box" class="sidebar-nav__item">FBAA & CIO Membership</a>
          <a href="#credit_scores" class="sidebar-nav__item">Valuation issues & credit scores</a>
          <a href="#complex_credit" class="sidebar-nav__item">Complex Credit Policy Pitfalls</a>
          <a href="#speak_to_broker" class="sidebar-nav__item">Discover your individual borrowing capacity</a>
          <a href="#about_good_broker" class="sidebar-nav__item">What do you have to know about Mortgage broker</a>
          <a href="#contact_us" class="sidebar-nav__item">Contact us</a> -->
          <div class="new_banner">
            <div class="banner_head">
              <img src="https://hgstagingsite.wpenginepowered.com/wp-content/themes/Divi/images/hunter_logo_black_.svg" alt="">
              <p><b>Get a home loan</b> with full guidance and expert assistance </p>
            </div>
            <div class="banner_body">
              <ul class="hero_points">
                <li><?=$check_green_img?><div><span>Market-leading <p class="tooltip">
                Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by
                            DigitalFinance Analytics DFA. In 2017 to
                            2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
                </p></span> loan approval rate in Australia of 97%</div></li>
                <li><?=$check_green_img?>Variety of options due to direct access to 30+ Australian banks & lenders</li>
                <li><?=$check_green_img?><div><span>#1 rated <p class="tooltip">
                  The highest rated and most reviewed Mortgage Broker in Brisbane: 5-star rating based on 2000+ reviews on Google
                </p></span> Mortgage Broker in Brisbane</div></li>
              </ul>
              <div class="btn_wrap">
                <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
              </div>
              <p>We promise to get back to you within  
              4 business hours</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
    var sidebarScroll = {};

    function detectNavbarOffsets() {
        Array.from(document.querySelectorAll('.sidebar-nav__item')).reverse().forEach(function (el) {
            sidebarScroll[el.getAttribute('href')] = document.querySelector(el.getAttribute('href')).offsetTop + document.querySelector(el.getAttribute('href')).offsetHeight;
        });
        console.log(sidebarScroll);
    }

    if (window.innerWidth > 1100) {
        detectNavbarOffsets();
        setTimeout(detectNavbarOffsets, 3000);
        window.addEventListener('scroll', function () {
            Object.keys(sidebarScroll).forEach(key => {
                // console.log(key, sidebarScroll[key], window.pageYOffset);
                if (sidebarScroll[key] > window.pageYOffset - document.querySelector('header').offsetHeight && !document.querySelector('.sidebar-nav__item[href="' + key + '"]').classList.contains('active')) {
                    document.querySelector('.sidebar-nav__item.active').classList.remove('active');
                    document.querySelector('.sidebar-nav__item[href="' + key + '"]').classList.add('active');
                    return false;
                }
            });
            //
        });
    }
</script>

<!-- <script>

    (function($){
 
        var sidebarScroll = {};

        function detectNavbarOffsets(){
            console.log(jQuery('.sidebar-nav__item'));
            $($('.sidebar-nav__item').get().reverse()).each(function(index, el){
                sidebarScroll[$(el).attr('href')] = $($(el).attr('href')).offset().top + $($(el).attr('href')).outerHeight()/2;
            })
            console.log(sidebarScroll);
        }

        if ($(window).width() > 1100) {
            detectNavbarOffsets();
            setTimeout(detectNavbarOffsets, 3000);
            $(window).on('scroll', function() {
                Object.keys(sidebarScroll).forEach(key => {
                // console.log(key, sidebarScroll[key], window.pageYOffset);
                if (sidebarScroll[key] > jQuery(window).scrollTop() && !$('.sidebar-nav__item[href="'+key+'"]').hasClass('active')) {
                    $('.sidebar-nav__item.active').removeClass('active');
                    $('.sidebar-nav__item[href="'+key+'"]').addClass('active');
                    return false;
                }
            });
                
            });
        }
    })(jQuery);
</script> -->

<?php /* Keradan: Load popups markup, styles and scripts */ ?>
<?php include 'mortgage-broker-brisbane-popups.php'; ?>

<script type="application/ld+json">
    {
        "@context": "http://schema.org/",
        "@type": "Service",
        "serviceType": "Mortgage Broker",
        "provider": {
        "@type": "FinancialService",
        "name": "Mortgage Broker Brisbane - Hunter Galloway",
        "image": "https://www.huntergalloway.com.au/wp-content/uploads/2017/08/hunter-galloway-mortgage-brokers.png",
        "telephone": "0410 000 689",
        "priceRange": "Free Assessment",
        "address":
        {
            "@type": "PostalAddress",
            "streetAddress": "Level 20/300 Queen St",
            "addressLocality": "Brisbane City",
            "addressRegion": "Queensland",
            "postalCode": "QLD 4000"
        }
    },
    "areaServed": {
    "@type": "State",
    "name": "Queensland"
},
"url": "https://www.huntergalloway.com.au/mortgage-broker-brisbane/"
}
</script>
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "FinancialService",
        "name": "Mortgage Broker Brisbane - Hunter Galloway",
        "url": "https://www.huntergalloway.com.au/",
        "logo": "https://www.huntergalloway.com.au/wp-content/uploads/2017/08/hunter-galloway-mortgage-brokers.png",
        "image": "https://www.huntergalloway.com.au/wp-content/uploads/2017/08/hunter-galloway-mortgage-brokers.png",
        "telephone": "0410 000 689",
        "priceRange": "Free Assessment",
        "address":
        {
            "@type": "PostalAddress",
            "streetAddress": "Level 20/300 Queen St",
            "addressLocality": "Brisbane City",
            "addressRegion": "Queensland",
            "postalCode": "QLD 4000"
        },
        "hasMap": "https://www.google.com/maps/place/Mortgage+Broker+Brisbane+-+Hunter+Galloway/@-27.46719,153.0256783,17z/data=!3m1!4b1!4m5!3m4!1s0x6b91581f483d77a3:0xfddf27dad5e4a55f!8m2!3d-27.46719!4d153.027867",
        "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-27.465572357177734",
        "longitude": "153.03045654296875"
    },
    "openingHours": ["Mo-Fr 7:00-21:00", "Sa 8:00-17:30"],
    "sameAs": ["https://www.facebook.com/MortgageBrokerBrisbane/", "https://www.huntergalloway.com.au/"]
}
</script>

<?php

get_footer();

?>

<script>
  document.querySelector('.footer_button').insertAdjacentHTML('afterbegin', '<p><b>Get a home loan</b> with expert assistance</p>')
</script>

