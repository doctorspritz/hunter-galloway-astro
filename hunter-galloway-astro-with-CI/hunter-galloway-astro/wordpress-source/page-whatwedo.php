<?php
/*

Template name: What We Do

*/
get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<style type="text/css">
    .ourteam_wrapper {
        align-items: flex-start;
        display: flex;
        margin: 0 -10px 40px;
    }

    .sidebar-nav {
        box-sizing: border-box;
        margin-top: 72px;
        padding: 0 110px 20px 40px;
        position: sticky;
        width: 435px;
        flex-shrink: 0;
        top: 120px;
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

    .sidebar-nav__item + .sidebar-nav__item {
        margin-top: 20px;
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

    @media (max-width: 1100px) {
        .ourteam_wrapper {
            display: block;
            margin: 0 0 40px;
        }

        .sidebar-nav {
            display: none;
        }
    }
	
		/* 	 */
	#main-content{
		padding: 0;
	}
	
	.ourteam_wrapper{
		margin: 0 auto;
		width: 90%;
		max-width: 1200px;
	}
	
	.ourteam_block {
		padding: 0;
		margin:0 0 82px;
		width: 100%;
	}
	
		.sidebar-nav{
		margin: 82px 0 0 32px;
		padding: 0 0 32px;
		width: 25%;
	}
	
	.sidebar_nav_title{
		font-weight: 600;
		font-size: 18px;
		line-height: 25px;
		color: #000000;
		text-align: left;
	}
	
	.sidebar-nav__item{
		font-weight: 600;
		font-size: 14px;
		line-height: 1.3;
		color: #000000;
	}
	
	.ourteam_block h2{
		margin-bottom: 32px;
		font-weight: 700;
		font-size: 40px;
		line-height: 135%;
		text-align: center;
		text-transform: capitalize;
		color: #000000;
	}
	
	.ourteam_block h3{
		font-weight: 700;
		font-size: 20px;
		line-height: 100%;
		text-align: center;
		color: #000000;
	}
	
	.ourteam_block p{
		font-weight: 400;
		font-size: 14px;
		line-height: 143%;
		color: #000000;
	}
	
	.ourteam_block h4{
		font-weight: 600;
		font-size: 20px;
		line-height: 150%;
		text-align: center;
		color: #000000;
		margin: 32px 0;
	}
	
	.ourteam_block img{
		border-radius: unset;
		filter: unset;
		padding: 0;
		margin: 0;
	}
	
		/* heroy */	
	.ourteam_slider{
		background-repeat: no-repeat;
		background-image: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/banner_what_we_do.jpg);
	}
	
	.ourteam_slider_bg{
		background: unset;
	}
	
	.ourteam_slider_wrapper{
		margin: 0;
		padding: 179px 0 179px 121px;
		height: unset;
		max-width: unset;
	}
	
	.ourteam_slider_wrapper h1{
		font-weight: 700;
		font-size: 60px;
		line-height: 82px;
		text-transform: capitalize;
		color: #FFFFFF;
		margin-bottom: 0;
	}
	
	.ourteam_block_inner{
		padding: 32px;
	}
	
	/* mortgage_broker	 */
	#mortgage_broker{
		padding: 0;
		margin-top: 82px;
	}
	
	#mortgage_broker.ourteam_block h4{
		text-align: left;
		padding-left: 35px;
		margin-top: 0;
		position: relative;
	}
	
	#mortgage_broker.ourteam_block h4:before{
		position:absolute;
		content: "";
		width: 10px;
		height: 100%;
		top: 0;
		left: 0;
		background: #FFBA3A;
	}
	
	/* right_solution */
	#right_solution{
		background: #F2F2F2;
		padding: 48px 35px;
	}
	
	#right_solution.ourteam_block h2{
		margin-bottom: 8px;
	}
	
	#right_solution.ourteam_block p:nth-child(2){
		text-align: center;
	}
	
	#right_solution.ourteam_block ul{
		margin-top: 42px;
		padding-left: 70px;
		position: relative;
	}
	
	#right_solution.ourteam_block ul:before{
		background: #FFBA3A;
		content: "";
		position: absolute;
		width: 1px;
		height: 100%;
		top: 0;
		left: 25px;
	}
	
	#right_solution.ourteam_block ul:after{
		background: #FFBA3A;
		content: "";
		position: absolute;
		width: 8px;
		height: 8px;
		bottom: 0;
		border-radius: 50%;
    	left: 22px;
	}
	
	#right_solution.ourteam_block ul li:before{
		content: "";
		position: absolute;
		width: 32px;
		height: 32px;
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg1.svg) center no-repeat;
		border-radius: 40px;
		left: 0;
		padding: 11px;
	}
	
	#right_solution.ourteam_block ul li:nth-child(2):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg2.svg) center no-repeat;
	}
	
	#right_solution.ourteam_block ul li:nth-child(3):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg3.svg) center no-repeat;
	}
	#right_solution.ourteam_block ul li:nth-child(4):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg4.svg) center no-repeat;
	}
	
	#right_solution.ourteam_block ul li:not(:last-child){
		margin-bottom: 32px;
	}
	
	#right_solution.ourteam_block ul li span{
		font-weight: 400;
		font-size: 14px;
		line-height: 229%;
		color: #000000;
	}
	
	#right_solution.ourteam_block ul li h3{
		font-weight: 800;
		font-size: 20px;
		line-height: 160%;
		color: #000000;
		text-align: left;
		padding: 0;
		margin-bottom: 16px;
	}
	
	#right_solution.ourteam_block dt, #right_solution.ourteam_block dd{
		font-weight: 700;
		font-size: 14px;
		line-height: 143%;
		color: #000000;
	}
	
	#right_solution.ourteam_block dd{
		font-weight: 400;
		margin: 0 0 12px 0;
	}
	
	/* ready_to_buy	 */
	#ready_to_buy.ourteam_block p:nth-child(2){
		padding: 0;
	}
	
	#ready_to_buy.ourteam_block h4{
		margin-top: 18px; 
		text-align: center;
	}
	
	#ready_to_buy.ourteam_block p:nth-child(4){
		padding: 0;
		margin-bottom: 32px;
	}
	
	/* 	letters */
	#letters.ourteam_block > p:nth-child(2){
		padding: 0;
	}
	
	#letters.ourteam_block h4:nth-child(3){
		margin-bottom: 48px;
	}
	
	#letters.ourteam_block h4:nth-child(5){
		margin-top: 50px;
	}
	#letters.ourteam_block ul li img{
		width: 60px;
		margin-bottom: 32px;
	}
	
	#letters.ourteam_block ul:nth-child(6) li:nth-child(4) img{
		width: 48px; 
	}
	
	#letters.ourteam_block ul:nth-child(4){
		display: flex;
		justify-content: space-between;
	}
	
	#letters.ourteam_block ul:nth-child(4) li{
		width: 50%;
		background: #F2F2F2;
		border-radius: 10px;
		padding: 32px;
		margin: 0;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		text-align: center;
	}
	
	#letters.ourteam_block ul:nth-child(4) li:not(:last-child){
		margin-right: 32px;
	}
	
	#letters.ourteam_block ul:nth-child(4) li:before{
		content: unset;
	}
	
	#letters.ourteam_block ul:nth-child(4) li p:nth-child(2){
		padding: 0;
		font-weight: 700;
	}
	
	#letters.ourteam_block ul:nth-child(6){
		display: flex;
		flex-wrap: wrap;
		background: #FFF7E9;
		border-radius: 10px;
		padding: 32px;
	}
	
	#letters.ourteam_block ul:nth-child(6) li{
		width: 50%;		
		margin: 0;
		display: flex;
		align-items: center;
		flex-direction: column;
		text-align: center;
	}
	
	#letters.ourteam_block ul:nth-child(6) li p:last-child{
		text-align: left;
	}
		
	#letters.ourteam_block ul:nth-child(6) li:before{
		content: unset;
	}
	
	#letters.ourteam_block ul:nth-child(6) li:nth-child(odd){
		border-right: 1px solid #000000;
		padding: 0 32px 0 0; 
	}
	
	#letters.ourteam_block ul:nth-child(6) li:nth-child(even){
		padding: 0 0 0 32px; 
	}
	
	#letters.ourteam_block ul:nth-child(6) li:nth-child(1), #letters.ourteam_block ul:nth-child(6) li:nth-child(2){
		border-bottom: 1px solid #000000;
		padding-bottom: 32px;
	}
	
	#letters.ourteam_block ul:nth-child(6) li:nth-child(3), #letters.ourteam_block ul:nth-child(6) li:nth-child(4){
		padding-top: 32px;
	}
	
	#letters.ourteam_block ul:nth-child(6) li p:nth-child(2){
		font-weight: 700;
		font-size: 20px;
		line-height: 125%;
		padding: 0;
		margin-bottom: 24px;
	}
	
	 #letters.ourteam_block > ul:nth-child(10){
		display: flex;
		justify-content: space-between;
		flex-wrap: wrap;
	}
	
	#letters.ourteam_block > ul:nth-child(10) li{
		width: 48.5%;		
		border-radius: 10px;
		display: flex;
		align-items: center;
		flex-direction: column;
		height: 100%;		
		padding: 0;
		margin: 0;
	}
	
	#letters.ourteam_block > ul:nth-child(10) li:nth-child(2){
		padding: 32px;
		background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), #5BD5FA;
	}
	
	#letters.ourteam_block ul:nth-child(10) li:before{
		content: unset;
	}
	
	#letters.ourteam_block ul:nth-child(10) li h4{
		margin-bottom: 24px;
	}
	
	#letters.ourteam_block ul:nth-child(10) li img{
		margin: 0;
	}
	
	#letters > img{
		margin: 32px 0;
		display: inline-block;
	}
	
	#letters.ourteam_block ul:nth-child(10) li .box_second{
		display: flex;
		flex-direction: column;
	}
	
	#letters.ourteam_block ul:nth-child(10) li .box_second > li{
		width: 100%;
		background: linear-gradient(0deg, rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), #5BD5FA;
				padding: 32px;
	}
	
	#letters.ourteam_block ul:nth-child(10) li .box_second li:not(:last-child){
		margin-bottom: 27px;
	}
	
	/* letter_process	 */
	#letter_process {
		background: #F2F2F2;
		padding: 48px 35px;
	}
	
	#letter_process.ourteam_block > h2 {
		margin-bottom: 8px;
	}
	
	#letter_process.ourteam_block > p:nth-child(2) {
		text-align: center;
		margin: 0 auto;
		max-width: 733px;
	}
	
	#letter_process.ourteam_block > ul {
		margin-top: 42px;
		padding-left: 70px;
		position: relative;
	}
	
	#letter_process.ourteam_block > ul:before {
		background: #FFBA3A;
		content: "";
		position: absolute;
		width: 1px;
		height: 100%;
		top: 0;
		left: 25px;
	}
	
	#letter_process.ourteam_block > ul:after {
		background: #FFBA3A;
		content: "";
		position: absolute;
		width: 8px;
		height: 8px;
		bottom: 0;
		border-radius: 50%;
		left: 22px;
	}
	
	#letter_process.ourteam_block > ul > li:before{
		content: "";
		position: absolute;
		width: 32px;
		height: 32px;
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg14.svg) center no-repeat;
		border-radius: 40px;
		left: 0;
		padding: 11px;
	}
	
	#letter_process.ourteam_block > ul > li:nth-child(2):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg15.svg) center no-repeat;
	}
	
	#letter_process.ourteam_block > ul > li:nth-child(3):before{
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg16.svg) center no-repeat;
	}
	
	#letter_process.ourteam_block > ul li:not(:last-child) {
		margin-bottom: 48px;
	}
	
	#letter_process.ourteam_block > ul li span {
		font-weight: 400;
		font-size: 14px;
		line-height: 229%;
		color: #000000;
	}
	
	#letter_process.ourteam_block > ul li h3 {
		font-weight: 800;
		font-size: 20px;
		line-height: 160%;
		color: #000000;
		text-align: left;
		padding: 0;
		margin-bottom: 16px;
	}
	
	#letter_process.ourteam_block > ul li ul.steps_list{
		margin-top: 16px;
		display: flex;
		flex-wrap: wrap;
    	justify-content: space-between;		
	}
	
	#letter_process.ourteam_block > ul li ul.steps_list li{
		width: 48.5%;
		margin: 0;
		background: #FFFFFF;
		border-radius: 10px;
		padding: 24px;
	}
	
	#letter_process.ourteam_block > ul li ul.steps_list > li > p:nth-child(1){
		font-weight: 700;
		position: relative;
		padding-left: 35px;
	}
	
	#letter_process.ourteam_block > ul li ul.steps_list > li > p:nth-child(1):before{
		content: "";
		position: absolute;
		width: 24px;
		height: 24px;
		top: 0;
    	left: 0;
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg17.svg) center no-repeat;
	}
	
	#letter_process.ourteam_block > ul li:nth-child(1) ul.steps_list > li:nth-child(1) > p:nth-child(1):before{
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg22.svg) center no-repeat;
	}

	#letter_process.ourteam_block > ul li:nth-child(1) ul.steps_list > li:nth-child(2) > p:nth-child(1):before{
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg23.svg) center no-repeat;
	}
	
	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list > li:nth-child(1) > p:nth-child(1):before{
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg17.svg) center no-repeat;
	}

	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list > li:nth-child(2) > p:nth-child(1):before{
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg18.svg) center no-repeat;
	}
	
	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list > li:nth-child(3) > p:nth-child(1):before{
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg19.svg) center no-repeat;
	}
	

	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list li:nth-child(3){
		width: 100%;
		margin-top: 3%;
	}
	
	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list li:nth-child(3) > ul{
		display: flex;
		justify-content: space-between;
		margin-top: 17px;
	}
	
	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list li:nth-child(3) > ul li{
		padding: 0;
	}
	
	#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list li:nth-child(3) > ul li p{
		font-weight: 400;
	}
	
	/* 	applying_for_your_loan */
	#applying_for_your_loan ol{
		margin: 38px 0 0;
	}
	
	#applying_for_your_loan ol .middle_h{
		font-weight: 700;
		font-size: 20px;
		line-height: 27px;
		text-transform: capitalize;
		color: #000000;
		margin: 0;
		position: relative;
		padding-left: 55px;
		cursor: pointer;
	}
	
	#applying_for_your_loan ol .middle_h:before{
		content: "";
		position: absolute;
		width: 32px;
		height: 32px;
		top: 50%;
		left: 0;
		transform: translateY(-50%);
		border-radius: 4px;
		border: 1px solid #000000;
		background: url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/plus.svg) center no-repeat;
	}
	
	#applying_for_your_loan ol li.show .middle_h:before{
		border: unset;
		background: #FFBA3A url(https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/minus.svg) center no-repeat;
	}
	
	#applying_for_your_loan ol li{
		padding-bottom: 24px;
		border-bottom: 1px solid #000000;
	}
	
	#applying_for_your_loan ol li:not(:first-child){
		padding-top: 24px;
	}
	
	#applying_for_your_loan ol li .hidden_box_qvt{
		display: none;
		padding-top: 24px;
    	border-top: 1px solid #000000;
		margin: 24px 0 0;
	}
	
	#applying_for_your_loan ol li .hidden_box_qvt > div{
		display: flex;
		margin-bottom: 24px;
	}
	
	#applying_for_your_loan ol li .hidden_box_qvt > div img{
		width: 276px;
		height: 184px;
		border-radius: 10px;
	}
	
	#applying_for_your_loan ol li .hidden_box_qvt > div > div{
		margin-right: 32px;
	}
	
	#applying_for_your_loan ol li .hidden_box_qvt > div > div h4{
		text-align: left;
		margin: 24px 0 0;
		position: relative;
		padding-left: 30px;
	}
	
	#applying_for_your_loan ol li .hidden_box_qvt > div > div h4:before {
		position: absolute;
		content: "";
		width: 10px;
		height: 100%;
		top: 0;
		left: 0;
		background: #FFBA3A;
	}

	/* useful_things */
	#useful_things{
		margin-bottom: 204px;
	}
	
	.ourteam_box{
		display: flex;
		justify-content: space-between;
	}
	
	.ourteam_box .ourteam_block_inner{
		margin: 0;
		background: #F2F2F2;
		border-radius: 10px;
		width: 50%;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}
	
	.ourteam_box .ourteam_block_inner:nth-child(1){
		margin-right: 29px;
	}
	
	#useful_things > .ourteam_block_inner{
		margin-top: 32px;
		background: #F2F2F2;
		border-radius: 10px;
	}
	
	#useful_things > .ourteam_block_inner p:nth-child(5){
		padding: 0;
	}
	#useful_things > .ourteam_block_inner p:nth-child(6){
		font-weight: 400;
		font-size: 20px;
		line-height: 100%;
		text-align: center;
		margin: 24px 0 31px;
		padding: 0;
	}
	
	#useful_things > .ourteam_block_inner ul{
		display: flex;
		margin-bottom: 31px;
	}
	
	#useful_things > .ourteam_block_inner ul li{
		width: 40%;
		background: rgba(41, 23, 66, 0.08);
		border-radius: 10px;
		margin: 0;
		padding: 16px;
		text-align: center;
		display: flex;
		align-items: center;
    	justify-content: center;
		font-weight: 700;
		font-size: 14px;
		line-height: 143%;
		color: #000000;
	}
	
	#useful_things > .ourteam_block_inner ul li:before{
		content: unset;
	}
	
	#useful_things > .ourteam_block_inner ul li:not(:last-child){
		margin: 0 32px 0 0;
	}
	
	.mobile_text_from_hero, .link_pages, .new_mobile_header, .dot_view_more, #right_solution.ourteam_block dd span.view_more span, 	#right_solution.ourteam_block ul li div > p span span{
		display: none;
	}
	
	#right_solution.ourteam_block ul li div > p span, #right_solution.ourteam_block dd span.view_more{
			font-weight: 400;
			font-size: 14px;
			line-height:143%;
			color: #000000;
		}
	
	
	/* 	mobile */
	@media (max-width: 768px) {
		
		.dot_view_more {cursor:pointer;}
		
		.page-template-page-whatwedo #et-main-area{
			margin-top: 0;
		}
		
		#right_solution.ourteam_block ul li div span.dot_view_more{
			display: inline-block;
			font-weight: 400;
			font-size: 14px;
			line-height: 143%;
			color: #5BD5FA;
		}
		
		#right_solution.ourteam_block ul li div span.view_more, #right_solution.ourteam_block ul li div span.view_more span{
			font-weight: 400;
			font-size: 14px;
			line-height:143%;
			color: #000000;
			display: none;
		}
		
		#right_solution.ourteam_block ul li div span.view_more span{
			display: block;
			margin-top: 15px;
		}
		
		.show_var{
			display: inline-block;
		}
		
		#right_solution.ourteam_block ul li div span.dot_view_more.show_text{
			display: none;
		}
		
		body .mobilehead, .unset_text{
			display: none;
		}
		
		.mobilehead, #et-main-area, {
			margin: 0;
		}
		
		html{
			margin-top: 0 !important;
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
/*  */
		
		#ready_to_buy.ourteam_block img, #letters.ourteam_block > img{
			margin: 0 -6% !important;
			max-width: 113% !important;
			width: 113% !important;
		}
		
		.page-template-page-ourteam #et-main-area{
			margin-top: 0;
		}
		
		.ourteam_block{
			margin: 0 0 50px;
		}
		
		.ourteam_block h2{
			font-size: 30px;
			line-height: 100%;
			letter-spacing: -0.01em;
			text-transform: unset;
			margin-bottom: 30px;
		}
		
		.ourteam_block h4{
			margin: 24px 0;
		}
		
		.ourteam_block_inner{
			padding: 16px;
		}
		
		/* 	heroy	 */
		.ourteam_slider_wrapper{
			padding: 38px 0 38px 32px;
		}
		
		.ourteam_slider_wrapper h1{
			font-size: 20px;
			line-height: 27px;
		}
		
		/* 	#mortgage_broker */
		#mortgage_broker{
			margin-top: 50px;
		}
		
		/* 	#right_solution	 */
		#right_solution{
			padding: 47px 16px 39px;
			max-width: 113%;
			width: 113%;
			margin: 0 -6% 50px;
		}
		
		#right_solution.ourteam_block h2{
			margin-bottom: 32px;
		}
		
		#right_solution.ourteam_block ul{
			margin-top: 38px;
		}
		
		#right_solution.ourteam_block ul li:not(:last-child){
			margin-bottom: 24px;
		}
		
		/* 	ready_to_buy	 */
		#ready_to_buy.ourteam_block h4{
			margin-top: 24px;
			text-align: left;
		}
		
		#ready_to_buy.ourteam_block p:nth-child(4){
			margin-bottom: 24px;
		}
		
		/* 	letters	 */
		#letters.ourteam_block h4:nth-child(3){
			margin-bottom: 24px;
		}
		
		#letters.ourteam_block ul:nth-child(4){
			display: unset;
		}
		
		#letters.ourteam_block ul:nth-child(4) li{
			width: 100%;
			margin: 0;
			padding: 16px;
		}
		
		#letters.ourteam_block ul li img{
			margin-bottom: 16px;
		}
		#letters.ourteam_block h4:nth-child(5){
			margin: 24px 0 16px;
		}
		
		#letters.ourteam_block ul:nth-child(4) li:first-child{
			margin: 0 0 16px;
		}
		
		#letters.ourteam_block ul:nth-child(6){
			display: block;
			padding: 24px 16px;
		}
		
		#letters.ourteam_block ul:nth-child(6) li img{
			margin-bottom: 24px;
		}
		#letters.ourteam_block ul:nth-child(6) li p:nth-child(3){
			text-align: left;
		}
		
		#main-content #letters > img{
			margin-top: 16px !important;
			margin-bottom: 24px !important;
		}
		
		#letters.ourteam_block ul:nth-child(6) li{
			width: 100%;
			border-right: unset !important;
		}
		
		#letters.ourteam_block ul:nth-child(6) li:not(:last-child){
			border-bottom: 1px solid #000000;
			padding: 0 0 24px;
		}
		
		#letters.ourteam_block ul:nth-child(6) li:nth-child(4){
			padding-left: 0;
		}
		
		#letters.ourteam_block ul:nth-child(6) li:nth-child(2), #letters.ourteam_block ul:nth-child(6) li:nth-child(3){
			padding-top: 24px;
		}
		
		#letters.ourteam_block ul:nth-child(10){
			display: block;
		}
		
		#letters.ourteam_block ul:nth-child(10) li{
			width: 100%;
			
		}
		
		#letters.ourteam_block ul:nth-child(10) li:nth-child(2){
			padding: 24px 16px;
		}
		
		#letters.ourteam_block ul:nth-child(10) li:not(:last-child){
			margin-bottom: 16px;
		}
		
		#letters.ourteam_block ul:nth-child(10) li:last-child{
			margin-bottom: 0;
		}
		
		#letters.ourteam_block ul:nth-child(10) li h4{
			margin: 32px 0 24px;
		}
		
		#letters.ourteam_block ul:nth-child(10) li .box_second li:not(:last-child){
			margin-bottom: 16px;
		}
		
		/* #letter_process	 */
		#letter_process{
			padding: 50px 16px 32px;
			width: 113%;
			max-width: 113%;
			margin: 0 -6% 50px;
		}
		
		#letter_process.ourteam_block > h2{
			margin-bottom: 30px;
		}
		
		#letter_process.ourteam_block > ul{
			margin-top: 24px;
		}
		
		#letter_process.ourteam_block > ul li:not(:last-child){
			margin-bottom: 16px;
		}
		
		#letter_process.ourteam_block > ul li h3{
			line-height: 150%;
		}
		
		#letter_process.ourteam_block > ul li ul.steps_list{
			display: block;
		}
		
		#letter_process.ourteam_block > ul li ul.steps_list li{
			width: 100%;
			padding: 16px;
		}
		
		#letter_process.ourteam_block > ul li ul.steps_list li:not(:last-child){
			margin-bottom: 16px;
		}
		
		#letter_process.ourteam_block > ul li:nth-child(2) ul.steps_list li:nth-child(3) > ul{
			flex-direction: column;
		}
		
		/* 	applying_for_your_loan	 */
		#applying_for_your_loan ol{
			margin-top: 50px;
		}
		
		#applying_for_your_loan ol li .hidden_box_qvt > div{
			display: block;
			margin-bottom: 16px;
		}
		
		#applying_for_your_loan ol li .hidden_box_qvt > div > div{
			margin-right: 0;
		}
		
		#applying_for_your_loan ol li .hidden_box_qvt > div img{
			width: 100%;
			height: 229px;
			margin: 16px 0 0;
			display: block;
			object-fit: cover;
		}
		
		#applying_for_your_loan ol li:nth-child(1) .hidden_box_qvt > div img, #applying_for_your_loan ol li:nth-child(2) .hidden_box_qvt > div img{
			margin-bottom: 16px;	
		}
		
		/* 	useful_things	 */
		#useful_things{
			margin-bottom: 50px;
		}
		
		.ourteam_box{
			display: unset;
		}
		
		.ourteam_box .ourteam_block_inner{
			width: 100%;
			margin: 0;
		}
		
		.ourteam_box .ourteam_block_inner:nth-child(1){
			margin-bottom: 16px;
		}
		
		#useful_things > .ourteam_block_inner{
			margin-top: 16px;
		}
		
		#useful_things > .ourteam_block_inner p:nth-child(6){
			margin: 24px 0;
		}
		
		#useful_things > .ourteam_block_inner ul{
			flex-direction: column;
    		align-items: center;
		}
		
		#useful_things > .ourteam_block_inner ul li{
			width: 85%;
			margin: 0;
		}
		
		#useful_things > .ourteam_block_inner ul li:not(:last-child){
			margin: 0 0 16px;
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
	}
	
	@media (max-width: 320px){		
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
</style>

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

    <div class="ourteam_slider">
      <div class="ourteam_slider_bg"></div>
      <div class="ourteam_slider_wrapper">
        <h1>What We Do</h1>
      </div>
    </div>

    <div id="main-content">
      <div class="ourteam_wrapper">
        <div class="ourteam_main">
          <div id="mortgage_broker" class="ourteam_block">
            <h2>Hunter Galloway is <span>a Mortgage Broker</span></h2>
            <h4>
              A mortgage broker is a consultant who acts on your behalf to find you the best home loan for your individual situation from a panel of banks and other lenders who
              they are associated with.
            </h4>
            <p>
              Once we find you the right home loan, we help you to manage the process of applying for a home loan,
              <strong>from initially signing the paperwork all the way until your loan is approved and your property is settled</strong>.
            </p>
            <p>
              However, we're a little different to most mortgage brokers. Unlike other mortgage brokers who typically only deal with customers who are ready to buy right now,
              <strong>Hunter Galloway is here to help you no matter where you're starting from</strong>.
            </p>
            <p>Whether you've got a contract in hand or you're 12 to 24 months away from buying, we're here to guide you through all steps of your home buying journey.</p>
          </div>
          <div id="right_solution" class="ourteam_block">
            <h2>How We Find You <span>the Right Solution</span></h2>
            <p>We have a consistent, structured process that we use with all of our customers that delivers results. Here's how it works:</p>
            <ul>
              <li>
                <div>
                  <span>Step 01</span>
                  <h3>Your Free Assessment</h3>
                  <p>
                    The first step in our process is a free, no-obligation assessment of your financial situation. During this proces<span class="dot_view_more">... view more</span><span class="view_more">s, we will ask you some basic questions about who you are and what you're looking to achieve using a quick form. After you complete your form one of our
                      expert brokers will review your situation to figure out how we can help you achieve your goals.</span>
                  </p>
                </div>
              </li>
              <li>
                <div>
                  <span>Step 02</span>
                  <h3>Your Home Buying Plan</h3>
                  <p>
                    After reviewing your free assessment, your broker will create and send you a customised Home Buying Pla<span class="dot_view_more">... view more</span><span class="view_more">n. Your Home Buying Plan contains some quick calculations about your estimated repayments, borrowing capacity, and deposit requirements. This will give you a
                      quick overview of your financial situation.
                      <span>Your Home Buying Plan also contains some guides and resources which will help you on your home buying journey.</span>
                    </span>
                  </p>
                  <p class="unset_text">Your Home Buying Plan also contains some guides and resources which will help you on your home buying journey.</p>
                </div>
              </li>
              <li>
                <div>
                  <span>Step 03</span>
                  <h3>Information Session</h3>
                  <p>
                    Once you've had a chance to review your Home Buying Plan, the next step is an Information Session with yo<span class="dot_view_more">... view more</span><span class="view_more">ur broker. During this session, we will go over your home loan requirements and financial situation in a lot more detail. We will discuss your purchase
                      timelines and the next steps in the process.
                      <span>We will identify any issues that could affect your ability to get a home loan and help you to come up with strategies to mitigate those issues.</span>
                    </span>
                  </p>
                  <p class="unset_text">
                    We will identify any issues that could affect your ability to get a home loan and help you to come up with strategies to mitigate those issues.
                  </p>
                </div>
              </li>
              <li>
                <div>
                  <span>Step 04</span>
                  <h3>Your Next Steps</h3>
                  <p>After your Information Session, there are three likely scenarios:</p>
                  <dl>
                    <dt>1. Getting You Ready to Buy</dt>
                    <dd>
                      If we find any major issues that will affect your eligibility for a home loan that can't be fixed in the short term<span class="dot_view_more">... view more</span><span class="view_more"> - or you're just not quite ready to buy - we will work with you over the coming months to give you the training and support you need to get to the point
                        where you're ready.</span>
                    </dd>
                    <dt>2. Pre-approval or Eligibility Letter</dt>
                    <dd>
                      If there are no issues with your loan eligibility and you are planning on buying your home within the next th
					  <span class="dot_view_more">... view more</span>
					  <span class="view_more">ree months, we will get our team to prepare a pre-approval or an eligibility letter (explained below) so you can make an offer or head to the auction with
                        clarity and confidence.</span>
                    </dd>
                    <dt>3. Applying for Your Loan</dt>
                    <dd>
                      If you're red hot and rearing to go, or you've already put pen to paper on a contract of sale, we will proc<span class="dot_view_more">... view more</span><span class="view_more">eed directly to lodging and preparing your home loan application.
                        <span>
                          We understand that everyone's situation is unique and your situation might not fit neatly into one of these scenarios. Rest assured that if this is the
                          case, we will create a unique plan for you based on your goals and what you need.</span>
                      </span>
                    </dd>
                  </dl>
                  <p class="unset_text">
                    We understand that everyone's situation is unique and your situation might not fit neatly into one of these scenarios. Rest assured that if this is the case, we
                    will create a unique plan for you based on your goals and what you need.
                  </p>
                </div>
              </li>
            </ul>
          </div>
          <div id="ready_to_buy" class="ourteam_block">
            <h2>Getting You <span>Ready to Buy</span></h2>
            <p>
              As we mentioned earlier, the team at Hunter Galloway is here with you for the long haul. We believe that everyone deserves a chance at achieving their property goals.
              So if you aren't in a position to buy right now, we aren't going to turf you back onto the streets to fend for yourself.
            </p>
            <h4>Instead, we will provide you with customised training, tools, and support to get you in a position where you are ready to buy.</h4>
            <p>
              Over the years, we have published dozens of comprehensive blog posts, posted hundreds of YouTube videos, hosted dozens of webinars, and even published a book. The
              sheer volume of information can be overwhelming, but don't worry - we'll guide you to the resources that will help you reach that next step on your journey.
            </p>
            <img src="https://conversionratestore.github.io/projects/hantergalloway/img/queenslander_house.jpg" alt="Our vision" />
          </div>

          <div id="letters" class="ourteam_block">
            <h2>Pre-Approvals and Eligibility <span>Letters</span></h2>
            <p>
              Here at Hunter Galloway, we do things a little differently compared to most brokers. Most brokers will try to get you to apply for a pre-approval if there's even a
              slight chance you might think of buying a home sometime in the next few months.
            </p>
            <h4>There's a couple of reasons they do that:</h4>
            <ul class="pnd_list">
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg5.svg" alt="Our vision" />
                <p>Getting a pre-approval "locks you in"</p>
                <p>
                  - if you have a pre-approval with a broker and their associated bank, you're much more likely to stick with them rather than find another broker or go directly to
                  a bank.
                </p>
              </li>
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg6.svg" alt="Our vision" />
                <p>Most people (brokers included) think that pre-approvals are essential to the home buying process.</p>
                <p>But pre-approvals are not without their drawbacks.</p>
              </li>
            </ul>
            <h4>Here are some issues with pre-approvals that you might not be aware of:</h4>
            <ul class="pnd_list">
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg7.svg" width="60" alt="Our vision" />
                <p>A pre-approval is not a guarantee of approval:</p>
                <p>
                  Pre-approvals tell you that a bank or lender is highly likely to approve your loan when you apply, but it's not a guarantee. If your situation changes, the bank
                  changes their policies, or they have an issue with the home you eventually buy then you risk your application being declined when you go to apply for your loan.
                </p>
              </li>
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg8.svg" alt="Our vision" />
                <p>Pre-approvals do not last indefinitely:</p>
                <p>
                  Most pre-approvals only last for 90 days. Some banks will allow 180 days, but either way: if for any reason you aren't able to find the right home within that
                  time frame, you'll need to re-apply for another pre-approval. That means wasted time and effort on your part, plus you'll have to hit your credit file again in 90
                  days time for an updated pre-approval.
                </p>
              </li>
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg9.svg" alt="Our vision" />
                <p>You are "stuck" with the bank you have a pre-approval for:</p>
                <p>
                  You should only get a pre-approval from one bank at a time to avoid damaging your credit score by doing lots of applications in a short period. So if another bank
                  or lender announces a new, better rate, you will have to re-apply for a pre-approval (and potentially damage your credit file) or accept the increased costs of
                  staying with your current lender.
                </p>
              </li>
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg10.svg" alt="Our vision" />
                <p>Not all pre-approvals are created equal:</p>
                <p>
                  Some lenders will only perform a basic, automated check for pre-approvals rather than a full assessment of your situation. To put it bluntly, automated
                  pre-approvals are not worth the paper they are printed on. If a lender has not done a thorough analysis of your situation, then there is a much higher chance of
                  your loan being declined due to policy issues or other criteria that weren't assessed at the time of your pre-approval.
                </p>
              </li>
            </ul>
            <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/people_new.jpg" alt="Our vision" />
            <p>
              We decided there must be a better way. So in 2020, we introduced what we call the "Eligibility Letter". Rather than go through the formal process of pre-approval with
              a bank, we instead use our internal team of expert credit analysts to review your situation.
            </p>
            <h4>An Eligibility Letter gives you the same information and the same confidence about your situation as a pre-approval, but better:</h4>

            <ul class="pnd_list">
              <li>
                <ul class="box_second">
                  <li>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg11.svg" alt="Our vision" />
                    <h4>Comprehensive credit analysis:</h4>
                    <p>
                      During the Eligibility Letter process, our internal credit team will perform an extremely thorough analysis of your goals and finances. We go through the
                      banks' actual credit criteria to make sure you are eligible and will qualify for a loan. In fact, it is the same process that we use when you are applying for
                      a full home loan application. Compared to an automated pre-approval, it is much more detailed and much more useful.
                    </p>
                  </li>
                  <li>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg13.svg" alt="Our vision" />
                    <h4>It keeps your options open:</h4>
                    <p>
                      An Eligibility Letter doesn't lock you into any particular bank. So if one of the banks or lenders announces a great new rate, you are free to choose them
                      without the rigmarole of going through another pre-approval.
                    </p>
                  </li>
                </ul>
              </li>
              <li>
                <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/svg12.svg" alt="Our vision" />
                <h4>Faster turnaround times (a lot faster):</h4>
                <p>
                  A regular pre-approval takes a lot of time. In some cases as long as 35 days. That's because the banks need to dedicate time towards assessing your application.
                  And since a pre-approval isn't a guaranteed payoff for them, pre-approvals are at the bottom of the priority list. Eligibility Letters don't have that limitation.
                  Our internal credit team is lightning-fast - we can get your mock pre-approval done within 3 days if you give us the documents we need.
                </p>
                <p>
                  There are still some situations where we need to do pre-approvals. For example, typically we would recommend that you get a pre-approval if you're planning on
                  buying at auction, since it does provide a higher level of confidence of your loan being approved. However, in the majority of cases, an Eligibility Letter will
                  be the best choice for you. During the information session, your broker will discuss the pros and cons of each approach and help you decide which way to go.
                </p>
              </li>
            </ul>
          </div>

          <div id="letter_process" class="ourteam_block">
            <h2>The Pre-Approval or Eligibility Letter process</h2>
            <p>The processes for getting a Pre-Approval or Eligibility Letter are very similar, with a few minor differences. <b>Here's how it works:</b></p>
            <ul>
              <li>
                <div>
                  <span>Step 01</span>
                  <h3>We Collect Your Financial Information</h3>
                  <p>
                    After your information session, your broker will send you a few information requests. There are a few things we need in order to process your Pre-Approval or
                    Eligibility Letter. This includes:
                  </p>
                </div>
                <ul class="steps_list">
                  <li>
                    <p>Your Details:</p>
                    <p>
                      We need to collect some basic details about you and your co-applicant (if applicable). This includes your contact information, residential details, employment
                      situation and income, assets and liabilities. We do this using a simple form.
                    </p>
                  </li>
                  <li>
                    <p>Your Supporting Documentation:</p>
                    <p>
                      We will ask for some supporting documentation to help us to review your file. This will include payslips, bank statements, and other documentation depending
                      on your situation. We collect this using a secure, encrypted online tool.
                    </p>
                  </li>
                </ul>
              </li>
              <li>
                <div>
                  <span>Step 02</span>
                  <h3>Credit Analysis</h3>
                  <p>
                    Once we have collected your details and documentation, our expert credit analysis team gets to work. We have developed a systematic review process to assess
                    your chances of getting your home loan approved, split into three core components:
                  </p>
                  <ul class="steps_list">
                    <li>
                      <p>Your credit file</p>
                      <p>
                        Our analysts will comb through your credit report to make sure it is accurate. We will make sure that any debts recorded are correct, and that your payment
                        record is accurate. If there are defaults, we will review them to ensure that they are genuine and reflect your actual credit situation.
                      </p>
                    </li>
                    <li>
                      <p>Employment history, job, and income</p>
                      <p>Your length of employment, job type, and income have a big impact on which banks or lenders will be willing to offer you a loan.</p>
                    </li>
                    <li>
                      <p>Your deposit:</p>
                      <ul>
                        <li>
                          <p>
                            Your deposit is the other main factor in your ability to get a loan. We will review your deposit and access to other funds (such as grants) to see
                            whether you have enough deposit to qualify for a loan.
                          </p>
                          <p>
                            We take the information gleaned from the credit review process and use a custom loan policy checker that checks over 4,890 data points across our panel
                            of lenders to see which lender will be your best option.
                          </p>
                          <p>Once our credit team have worked their magic, your broker will review your file to make sure that everything is as it should be.</p>
                        </li>
                        <li>
                          <p>
                            If we're doing an Eligibility Letter for you, then at this point your broker will give you a call to discuss the results of your assessment. They will
                            also give you some guidance on how to find the right property for the right price using our proprietary PLAN/SEARCH/SETTLE model.
                          </p>
                          <p>Once that's done, you'll be ready to start searching for your ideal home, armed with the knowledge and confidence that you're ready to buy.</p>
                          <p>If we're doing a pre-approval for you, then there's one more step.</p>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li>
                <div>
                  <span>Step 03</span>
                  <h3>We Send Your Information to the Bank or Lender</h3>
                  <p>
                    If we need to do a pre-approval, then once our internal credit team and your broker have reviewed your file, we will send your pre-approval application to your
                    chosen bank or lender.
                  </p>
                  <p>We will work with them to get your pre-approval completed as quickly as possible, but bear in mind that this takes time - <b>usually 1 to 3 weeks.</b></p>
                  <p>
                    Once your pre-approval is complete, then we will give you a call to go through the details and give you the resources and tools you need to get out there and
                    find your new property.
                  </p>
                </div>
              </li>
            </ul>
          </div>

          <div id="applying_for_your_loan" class="ourteam_block">
            <h2><span>Applying</span> for Your Loan</h2>
            <p>
              Once you have a contract in hand, it's time to apply for formal approval of your loan. As with everything we do here at Hunter Galloway, we have built our processes
              to maximise your chances of approval, and to get it done in record time. <br />
              Here's <b>how we do it:</b>
            </p>
            <ol>
              <li data-controls>
                <p class="middle_h">1. Collect Any Missing Information</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>
                        We have a checklist of information and documents that we will need before we can move forward with your application. We respect your time and don't want to
                        delay your application due to missing information.
                      </p>
                      <h4>So we do everything we can to collect the data we need before you meet with your broker to select a lender and loan package.</h4>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo1.jpg" alt="Our vision" />
                  </div>
                  <p>
                    If you have done a pre-approval or Eligibility Letter, we will have most of what we need, but there will still be some items that you'll need to send us. If
                    you're going straight to formal approval, then we'll need to collect a bit more info.
                  </p>
                  <p>
                    Either way, our credit team will be in touch to collect all the necessary information. We know that you're busy and buying a home is stressful, so we only ask
                    from you what is truly necessary. So please <b>do what you can to deliver everything before your finance meeting</b> - it will save you a lot of time and
                    reduces the risk of any issues with your application.
                  </p>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">2. Internal Credit Review</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>
                        As with pre-approvals and Eligibility Letter, we get our superstar credit team to conduct a thorough review and analysis of your file before you meet with
                        your broker.
                      </p>
                      <p>
                        This is another thing we do that many brokers don't. And we do it for a good reason: the sooner we know about any potential issues with your application,
                        <b>the sooner we can resolve them</b> (or find you an alternative lender).
                      </p>
                      <h4>
                        This internal review process, among other things, is one of the reasons why Hunter Galloway has a 97% success rate for our loan applications while the
                        industry average is only 60%.
                      </h4>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo2.jpg" alt="Our vision" />
                  </div>
                  <p>
                    If there is missing information that we need, your assigned credit analyst will be in touch to collect it from you. Again, we know that stress is at an all-time
                    high during this part of the home buying process, but we appreciate you working with us to provide the information we need. It will make the rest of the process
                    much, much smoother for you.
                  </p>
                  <p>
                    Your broker will review your file before your finance meeting to make sure that everything's in order, and to prepare everything so that your finance meeting is
                    as productive as possible.
                  </p>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">3. Finance Meeting with Your Broker</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>Once we've completed your credit review, your broker will book you in for a meeting, either in-person or via video conference.</p>

                      <p>
                        During this meeting,
                        <b
                          >we will do a comprehensive review of your financial goals, your financial situation, and your eligibility for a home loan across our panel of lenders.</b
                        >
                        We will provide you with a shortlist of lenders who we think will offer you the best solution given your circumstances.
                      </p>
                      <p>Once we've discussed your home loan options and you've decided on a loan package, there will be a form to sign called a Credit Proposal Disclosure.</p>
                      <p>
                        This form sets out all of the important information that you need to know about when we provide you with credit assistance (in other words, when we help you
                        to apply for a loan). <b>Signing this form gives us permission to act on your behalf when dealing with lenders.</b>
                      </p>
                      <p>Once this is signed, we can put together your loan application and get everything ready to submit to the bank.</p>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo3.jpg" alt="Our vision" />
                  </div>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">4. Approval In Principle (Conditional Approval)</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>Once your loan application has been submitted to the bank, it's time to sit back and wait for them to assess your application.</p>
                      <p>
                        It usually takes between three and five days for your home loan application to progress through the queue, be picked up by one of the bank's credit officers
                        and then receive conditional approval.
                      </p>
                      <p>
                        If there is missing information on your application, this can delay the process, since we need to collect the missing information from you and re-submit the
                        application to the bank. We try to avoid this as much as possible, which is why we take the time in Steps 1 and 2 to make sure we have everything we need
                        upfront.
                      </p>
                      <p>
                        <b>Conditional approval means that your loan will be approved by the bank subject to certain conditions.</b> Most commonly, a conditional approval will be
                        subject to you finding a suitable property, or subject to a satisfactory property valuation.
                      </p>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo4.jpg" alt="Our vision" />
                  </div>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">5. Valuation</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>
                        Banks and lenders want to have a valuation of your property before they will give you unconditional approval for your loan. Basically, they want to make
                        sure that the property is actually worth what you're proposing to pay for it. Unfortunately, they won't take your word for it.
                      </p>
                      <p>
                        A property valuer will work on behalf of the bank to give them a valuation of the property. While they work for the bank, they are not employed directly by
                        the bank meaning that their valuation is independent and unbiased.
                      </p>
                      <p>
                        In many cases, <b>we can arrange for valuations upfront before your loan is submitted,</b> which speeds up the process and means we can go directly to
                        unconditional approval.
                      </p>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo5.jpg" alt="Our vision" />
                  </div>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">6. Formal Approval (Unconditional Approval)</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>
                        A formal approval, also known as unconditional approval, means that <b>the lender is happy to approve your loan!</b> They will send you an unconditional
                        approval letter that confirms everything is in writing.
                      </p>
                      <p>Formal approval can take between <b>one day</b> and <b>one week</b> to complete once you have received conditional approval.</p>
                      <p>
                        If you have <b>included a finance clause on your contract</b> (which we strongly recommend), you want to wait for unconditional approval before satisfying
                        your finance clause.
                      </p>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo6.jpg" alt="Our vision" />
                  </div>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">7. Signing Your Loan Documents</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>
                        Once your loan has been unconditionally approved, the bank will send your loan documents for your to sign. These documents include Loan Contracts, Mortgage
                        Documents, Direct Debit forms, and a bunch of other stuff. They can be a little bit complicated, especially if this is your first time buying a home.
                      </p>
                      <p>
                        The good news is that we will help you to sign them. Once the bank notifies us that your loan is unconditionally approved, we will be in touch to arrange a
                        time to catch up and help you to sign them. This makes sure that no signatures are missed and everything is filled out correctly. Any mistakes can delay
                        your settlement so we want to make sure we get it done right the first time.
                      </p>
                      <p>
                        If you are buying a home (vs. refinancing), you will want to get in touch with your solicitor or conveyancer at this point to double-check there aren't any
                        transfer or legal documents you need to sign before settlement.
                      </p>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo7.jpg" alt="Our vision" />
                  </div>
                </div>
              </li>
              <li data-controls>
                <p class="middle_h">8. Settlement</p>
                <div class="hidden_box_qvt">
                  <div>
                    <div>
                      <p>
                        After your bank receives your loan documents, they will complete their certification to confirm that everything has been signed correctly and to give you
                        the green light to go ahead with settlement.
                      </p>
                      <p>
                        If you are buying a home, the bank will also get in touch with your solicitor or conveyancer to let them know that everything is good to go. Your solicitor
                        or conveyancer will then arrange the settlement date.
                      </p>
                      <p>If you're refinancing, your new bank will get in touch with your old bank to arrange a date for settlement.</p>
                    </div>
                    <img src="https://conversionratestore.github.io/projects/hantergalloway/img/what_we_do/applying_for_loan/photo8.jpg" alt="Our vision" />
                  </div>
                </div>
              </li>
            </ol>
          </div>
          <div id="useful_things" class="ourteam_block">
            <h2>Other <span>Useful Things</span> to Know</h2>
            <div class="ourteam_box">
              <div class="ourteam_block_inner">
                <h3>Free Valuations and Credit Reports</h3>
                <p>
                  We can order free, upfront valuations with some lenders before submitting your application. Ordering a valuation before applying for your home loan ensures that
                  you have the best chance of getting your loan approved the first time. This helps to keep your credit file healthy by avoiding too many enquiries. Whenever
                  possible we will order your valuations upfront.
                </p>
                <p>
                  During our credit assessment, we will also review your credit report to make sure there aren't any issues. If you'd like a free copy of your credit file at any
                  time, just let us know and we will send it to you.
                </p>
              </div>
              <div class="ourteam_block_inner">
                <h3>Priority Access</h3>
                <p>
                  Here's a little secret that you might not know: brokers get different levels of priority access to lenders based on the number of loans they send through. Think
                  of it as something similar to your status with airlines or hotels: the more miles you fly or nights you stay, the more perks you get.
                </p>
                <p>Hunter Galloway has 'Priority Status' with many of the lenders on our panel. What does this mean for you?</p>
                <p>Faster approval times and access to special deals that aren't available to the public, or to smaller brokers.</p>
              </div>
            </div>

            <div class="ourteam_block_inner">
              <h3>Our Fees</h3>
              <p>Hunter Galloway gets paid a commission from the banks. That's why we are able to provide our service to you at no charge in most circumstances.</p>
              <p>
                But as they say, "there are no free lunches". We take on the burden of finding the right loan, making you're a good fit for the bank, and doing the work to put
                together your application. On average it takes us around 40 hours of work to complete each loan application.
              </p>
              <p>
                The banks are happy to pay us a commission because otherwise they would have to do all of that work themselves. And we're happy because getting paid a commission
                means we can offer our services to you at no charge.
              </p>
              <p>
                Rest assured that the amount of commission we are paid by the banks does not in any way influence our advice and recommendations to you. Our expected commission
                from the banks is clearly outlined in the Credit Proposal Disclosure document that we will give you as part of the application process.
              </p>
            </div>
          </div>
        </div>
        <div class="sidebar-nav">
          <div class="sidebar_nav_title">What We Do</div>
          <a href="#mortgage_broker" class="sidebar-nav__item active">Hunter Galloway is a Mortgage Broker</a>
          <a href="#right_solution" class="sidebar-nav__item">How We Find You the Right Solution</a>
          <a href="#ready_to_buy" class="sidebar-nav__item">Getting You Ready to Buy</a>
          <a href="#letters" class="sidebar-nav__item">Pre-Approvals and Eligibility Letters</a>
          <a href="#letter_process" class="sidebar-nav__item">The Pre-Approval or Eligibility Letter process</a>
          <a href="#applying_for_your_loan" class="sidebar-nav__item">Applying for Your Loan</a>
          <a href="#useful_things" class="sidebar-nav__item">Other Useful Things to Know</a>
        </div>
      </div>
    </div>
    <!-- #main-content -->

<script>

    var sidebarScroll = {};

    function detectNavbarOffsets() {
        Array.from(document.querySelectorAll('.sidebar-nav__item')).reverse().forEach(function (el) {
            sidebarScroll[el.getAttribute('href')] = document.querySelector(el.getAttribute('href')).offsetTop + document.querySelector(el.getAttribute('href')).offsetHeight - 80;
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
	
// 	
 	
	const $ = jQuery;
	$('[data-controls]').click(function(){		
		if($(this).hasClass('show')){			
		$(this).find('.hidden_box_qvt').slideUp();
		} else{
			$(this).find('.hidden_box_qvt').slideDown();
		}
		
		$(this).toggleClass('show')
		
	})
	
	
	
</script>





<script>
$( document ).ready(function() {
	

	 
	 
		 $('.dot_view_more').click(function(){	
 
		$(this).parent().children(".view_more").css('display','inline');
		$(this).toggleClass('show_text');
	})

	
	 
	 })
</script>



<?php

get_footer();
