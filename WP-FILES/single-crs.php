<?php
/*
 * Template Name: Post New Design
 * Template Post Type: post
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

$iconTime = '<svg xmlns="http://www.w3.org/2000/svg" width="13" height="17" viewBox="0 0 13 17" fill="none">
<path d="M6.09375 16.4C9.45384 16.4 12.1875 13.6663 12.1875 10.3063C12.1875 8.79458 11.634 7.40986 10.7192 6.34368L11.726 5.33693L11.0631 4.67402L10.0563 5.68077C9.38638 5.10599 8.59066 4.67408 7.71666 4.43233C8.16047 4.00558 8.4375 3.40658 8.4375 2.74377C8.4375 1.45143 7.38609 0.400024 6.09375 0.400024C4.80141 0.400024 3.75 1.45143 3.75 2.74377C3.75 3.40658 4.02703 4.00558 4.47084 4.4323C3.59684 4.67408 2.80109 5.10599 2.13116 5.68074L1.12441 4.67399L0.4615 5.33689L1.46825 6.34364C0.553531 7.40986 0 8.79458 0 10.3063C0 13.6663 2.73366 16.4 6.09375 16.4ZM6.09375 1.33752C6.86916 1.33752 7.5 1.96836 7.5 2.74377C7.5 3.35486 7.10809 3.87589 6.5625 4.06939V2.33752H5.625V4.06939C5.07941 3.87589 4.6875 3.35486 4.6875 2.74377C4.6875 1.96836 5.31834 1.33752 6.09375 1.33752ZM6.09375 5.15002C8.93691 5.15002 11.25 7.46311 11.25 10.3063C11.25 13.1494 8.93691 15.4625 6.09375 15.4625C3.25059 15.4625 0.9375 13.1494 0.9375 10.3063C0.9375 7.46311 3.25059 5.15002 6.09375 5.15002Z" fill="white"/>
<path d="M8.4375 9.83777H6.5625V7.96277H5.625V10.7752H8.4375V9.83777Z" fill="white"/>
<path d="M9.375 9.83752H10.3125V10.775H9.375V9.83752Z" fill="white"/>
<path d="M1.875 9.83752H2.8125V10.775H1.875V9.83752Z" fill="white"/>
<path d="M5.625 6.08752H6.5625V7.02502H5.625V6.08752Z" fill="white"/>
<path d="M5.625 13.5877H6.5625V14.5252H5.625V13.5877Z" fill="white"/>
</svg>';
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
$iconContent = '<svg xmlns="http://www.w3.org/2000/svg" width="32" height="33" viewBox="0 0 32 33" fill="none">
<path d="M15 20.82C14.4067 20.82 13.8266 20.6441 13.3333 20.3144C12.8399 19.9848 12.4554 19.5162 12.2284 18.9681C12.0013 18.4199 11.9419 17.8167 12.0576 17.2347C12.1734 16.6528 12.4591 16.1182 12.8787 15.6987C13.2982 15.2791 13.8328 14.9934 14.4147 14.8777C14.9967 14.7619 15.5999 14.8213 16.1481 15.0484C16.6962 15.2754 17.1648 15.66 17.4944 16.1533C17.8241 16.6466 18 17.2267 18 17.82C18 18.6157 17.6839 19.3787 17.1213 19.9413C16.5587 20.5039 15.7956 20.82 15 20.82ZM20 7.81998C20 8.08519 20.1054 8.33955 20.2929 8.52708C20.4804 8.71462 20.7348 8.81998 21 8.81998H27C26.9997 8.68043 26.9701 8.5425 26.9133 8.41506C26.8565 8.28761 26.7736 8.17347 26.67 8.07998L21.11 3.07998C20.9266 2.91328 20.6878 2.82063 20.44 2.81998H20V7.81998ZM27 10.82V27.82C26.9661 28.6432 26.6091 29.4199 26.0063 29.9815C25.4035 30.5431 24.6035 30.8444 23.78 30.82H8.22C7.39647 30.8444 6.59654 30.5431 5.99373 29.9815C5.39092 29.4199 5.03386 28.6432 5 27.82V5.81998C5.03386 4.99678 5.39092 4.22013 5.99373 3.65851C6.59654 3.09689 7.39647 2.79559 8.22 2.81998H18V7.81998C18 8.61563 18.3161 9.37869 18.8787 9.9413C19.4413 10.5039 20.2044 10.82 21 10.82H27ZM21.71 23.11L19.17 20.57C19.8522 19.5361 20.1262 18.2857 19.9391 17.0612C19.752 15.8367 19.117 14.7252 18.1572 13.9422C17.1973 13.1592 15.981 12.7603 14.7439 12.8229C13.5067 12.8855 12.3369 13.4051 11.461 14.281C10.5851 15.1569 10.0655 16.3267 10.0029 17.5639C9.94029 18.801 10.3392 20.0173 11.1222 20.9772C11.9052 21.937 13.0167 22.572 14.2412 22.7591C15.4657 22.9462 16.716 22.6722 17.75 21.99L20.29 24.53C20.383 24.6237 20.4936 24.6981 20.6154 24.7489C20.7373 24.7997 20.868 24.8258 21 24.8258C21.132 24.8258 21.2627 24.7997 21.3846 24.7489C21.5064 24.6981 21.617 24.6237 21.71 24.53C21.8037 24.437 21.8781 24.3264 21.9289 24.2046C21.9797 24.0827 22.0058 23.952 22.0058 23.82C22.0058 23.688 21.9797 23.5573 21.9289 23.4354C21.8781 23.3136 21.8037 23.203 21.71 23.11Z" fill="#FDB948"/>
</svg>';
$linkedIn = '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
<path d="M19 0H3C2.20435 0 1.44129 0.31607 0.87868 0.87868C0.31607 1.44129 0 2.20435 0 3V19C0 19.7956 0.31607 20.5587 0.87868 21.1213C1.44129 21.6839 2.20435 22 3 22H19C19.7956 22 20.5587 21.6839 21.1213 21.1213C21.6839 20.5587 22 19.7956 22 19V3C22 2.20435 21.6839 1.44129 21.1213 0.87868C20.5587 0.31607 19.7956 0 19 0ZM7.5 17.41C7.50016 17.471 7.48829 17.5314 7.46506 17.5879C7.44183 17.6443 7.40769 17.6955 7.36461 17.7387C7.32153 17.7819 7.27036 17.8162 7.21401 17.8396C7.15766 17.863 7.09726 17.875 7.03625 17.875H5.06C4.99889 17.8752 4.93835 17.8632 4.88186 17.8399C4.82537 17.8166 4.77404 17.7824 4.73083 17.7392C4.68762 17.696 4.65337 17.6446 4.63006 17.5881C4.60675 17.5317 4.59483 17.4711 4.595 17.41V9.125C4.595 9.00167 4.64399 8.8834 4.7312 8.7962C4.8184 8.70899 4.93667 8.66 5.06 8.66H7.03625C7.15936 8.66033 7.27731 8.70947 7.36425 8.79664C7.45118 8.88381 7.5 9.00189 7.5 9.125V17.41ZM6.0475 7.875C5.67666 7.875 5.31415 7.76503 5.00581 7.55901C4.69746 7.35298 4.45714 7.06014 4.31523 6.71753C4.17331 6.37492 4.13618 5.99792 4.20853 5.63421C4.28087 5.27049 4.45945 4.9364 4.72167 4.67417C4.9839 4.41195 5.31799 4.23337 5.68171 4.16103C6.04542 4.08868 6.42242 4.12581 6.76503 4.26773C7.10764 4.40964 7.40048 4.64996 7.60651 4.95831C7.81253 5.26665 7.9225 5.62916 7.9225 6C7.9225 6.49728 7.72496 6.97419 7.37333 7.32583C7.02169 7.67746 6.54478 7.875 6.0475 7.875ZM17.83 17.4425C17.8302 17.4987 17.8192 17.5544 17.7978 17.6063C17.7764 17.6582 17.7449 17.7054 17.7052 17.7452C17.6654 17.7849 17.6182 17.8164 17.5663 17.8378C17.5144 17.8592 17.4587 17.8702 17.4025 17.87H15.2775C15.2213 17.8702 15.1656 17.8592 15.1137 17.8378C15.0618 17.8164 15.0146 17.7849 14.9748 17.7452C14.9351 17.7054 14.9036 17.6582 14.8822 17.6063C14.8608 17.5544 14.8498 17.4987 14.85 17.4425V13.5612C14.85 12.9812 15.02 11.0212 13.3337 11.0212C12.0275 11.0212 11.7612 12.3625 11.7087 12.965V17.4475C11.7088 17.5598 11.6646 17.6676 11.5858 17.7476C11.5069 17.8276 11.3998 17.8734 11.2875 17.875H9.235C9.17892 17.875 9.12339 17.8639 9.07159 17.8424C9.0198 17.8209 8.97275 17.7894 8.93315 17.7497C8.89356 17.71 8.86218 17.6629 8.84084 17.611C8.81949 17.5591 8.80859 17.5036 8.80875 17.4475V9.08875C8.80859 9.03267 8.81949 8.97711 8.84084 8.92525C8.86218 8.87339 8.89356 8.82625 8.93315 8.78654C8.97275 8.74682 9.0198 8.71531 9.07159 8.69382C9.12339 8.67232 9.17892 8.66125 9.235 8.66125H11.2875C11.4009 8.66125 11.5096 8.70629 11.5898 8.78646C11.67 8.86663 11.715 8.97537 11.715 9.08875V9.81125C12.2 9.0825 12.9188 8.5225 14.4525 8.5225C17.85 8.5225 17.8275 11.695 17.8275 13.4375L17.83 17.4425Z" fill="white"/>
</svg>';
$youtube = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
<path d="M22.5133 6.22657L22.5408 6.40623C22.2749 5.46299 21.5572 4.73517 20.6451 4.47026L20.6259 4.46567C18.9108 4.00001 12.0093 4.00001 12.0093 4.00001C12.0093 4.00001 5.12522 3.99085 3.39274 4.46567C2.46325 4.73517 1.74459 5.46299 1.48335 6.38698L1.47876 6.40623C0.838023 9.75294 0.833439 13.7743 1.50718 17.3575L1.47876 17.176C1.74459 18.1193 2.46233 18.8471 3.37441 19.112L3.39366 19.1166C5.10689 19.5832 12.0102 19.5832 12.0102 19.5832C12.0102 19.5832 18.8934 19.5832 20.6268 19.1166C21.5572 18.8471 22.2758 18.1193 22.5371 17.1953L22.5417 17.176C22.8332 15.6195 23 13.8284 23 11.9987C23 11.9318 23 11.864 22.9991 11.7962C23 11.7338 23 11.6596 23 11.5853C23 9.75477 22.8332 7.96363 22.5133 6.22657ZM9.8075 15.1383V8.45312L15.5513 11.8008L9.8075 15.1383Z" fill="white"/>
</svg>';
$facebook = '<svg xmlns="http://www.w3.org/2000/svg" width="12" height="22" viewBox="0 0 12 22" fill="none">
<path d="M3.30413 12.418C3.22153 12.418 1.40426 12.418 0.578223 12.418C0.137672 12.418 0 12.2528 0 11.8398C0 10.7384 0 9.60951 0 8.50813C0 8.06758 0.165207 7.92991 0.578223 7.92991H3.30413C3.30413 7.84731 3.30413 6.25031 3.30413 5.50688C3.30413 4.40551 3.49687 3.3592 4.04756 2.39549C4.62578 1.40425 5.45181 0.743429 6.49812 0.357947C7.18648 0.110137 7.87484 0 8.61827 0H11.3166C11.7021 0 11.8673 0.165207 11.8673 0.550688V3.68961C11.8673 4.07509 11.7021 4.2403 11.3166 4.2403C10.5732 4.2403 9.82979 4.2403 9.08636 4.26783C8.34293 4.26783 7.95745 4.62578 7.95745 5.39675C7.92991 6.22278 7.95745 7.02128 7.95745 7.87484H11.1514C11.592 7.87484 11.7572 8.04005 11.7572 8.4806V11.8123C11.7572 12.2528 11.6195 12.3905 11.1514 12.3905C10.1602 12.3905 8.04005 12.3905 7.95745 12.3905V21.3667C7.95745 21.8348 7.81977 22 7.32415 22C6.16771 22 5.0388 22 3.88235 22C3.46934 22 3.30413 21.8348 3.30413 21.4218C3.30413 18.5307 3.30413 12.5006 3.30413 12.418Z" fill="white"/>
</svg>';
?>
<script>
  if (window.location.href.includes('/barefoot-investor-bank-accounts')) {
    document.querySelector('body').insertAdjacentHTML('beforeend', `
      <style>
        @media (min-width: 769px) {
          .hero_widget.widget {
            background: linear-gradient(270deg, rgba(48, 147, 152, 0.00) 30%, rgba(48, 147, 152, 0.70) 40%, #309398 60%), url('https://www.huntergalloway.com.au/wp-content/uploads/2024/10/foot.jpg') center right no-repeat !important;
            background-size: cover !important;
          }
        }
      </style>
    `)
  }
</script>

<style>
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

  .et_pb_post .entry-content,
  .e-con.e-flex>.e-con-inner,
  .e-con {
    padding: 0;
  }

  .blog_row {
    padding-top: 40px;
  }

  .blog_row .elementor-toc__header {
    border: none;
    padding: 0 0 8px 0;
  }

  .blog_row .elementor-toc__body {
    padding: 0;
    display: block !important;
  }

  #main-content .sidebar_content ul li {
    list-style-type: none;
    padding: 0;
    margin-bottom: 16px !important;
  }

  #main-content .sidebar_content ul>li a {
    color: var(--Grey-dark, #262626);
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: 24px;
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
    min-height: 60px;
  }

  #main-content .sidebar_content i {
    display: none !important;
  }

  #main-content .sidebar_content.loading:after {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 2;
    background-color: rgba(255, 255, 255, 0.6);
  }

  #main-content .sidebar_content.loading i {
    display: block !important;
    position: absolute;
    left: calc(50% - 7px);
    top: calc(50% - 7px);
    z-index: 3;
    font-size: 14px;
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
    padding-bottom: 1em;
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

  .elementor-widget-heading+.elementor-widget-heading {
    margin-top: -12px;
  }

  #main-content .elementor-widget-heading+.elementor-widget-text-editor .elementor-widget-container>table {
    margin-top: 0 !important;
  }

  .elementor-widget-heading h2.elementor-heading-title {
    text-decoration: none !important;
  }

  .blog_row .elementor-widget-heading+.elementor-widget-video,
  .blog_row .elementor-widget-heading+.elementor-widget-image {
    margin-top: 0 !important;
  }

  .blog_row .elementor-widget-text-editor+.elementor-widget-heading h3 {
    padding-top: 0;
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

  .blog_row .e-con-boxed:is([data-settings*='"background_background":"classic"']) {
    margin: 40px 0 !important;
  }

  .blog_row .e-con-boxed:is([data-settings*='"background_background":"classic"']) .elementor-widget-container {
    padding: 2em 0em 0em 0em;
  }

  .blog_row .e-con-boxed:is([data-settings*='"background_background":"classic"']) h2 {
    padding-bottom: 30px;
    padding-top: 2px;
    color: #fff !important;
  }

  .blog_row .e-con>.e-con-inner {
    gap: var(--gap);
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

  .list_number,
  ol {
    list-style-type: none !important;
    counter-reset: item;
    padding-top: 8px !important;
  }

  .list_number li,
  ol li {
    counter-increment: item;
    display: flex;
  }

  .list_number li:not(:last-child),
  ol li:not(:last-child) {
    margin-bottom: 12px;
  }

  .list_number li:before,
  ol li:before {
    content: counter(item) '.';
    color: var(--Yellow-2, #EC9B16);
    font-family: "Open Sans";
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: 24px;
    margin-right: 8px;
  }

  /* .elementor-widget-container>style+p {
		padding: 0 !important;
	} */

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
    border: 1px solid var(--Yellow-Primary, #FDB948) !important;
    background: var(--Yellow-light, #FFF5E2) !important;
    color: var(--Black, #000) !important;
    font-weight: 600;
    line-height: 22px;
    height: 46px;
    max-height: 46px !important;
    display: flex;
    justify-content: center !important;
    align-items: center;
  }

  .blog_row .dpsp-networks-btns-wrapper li .dpsp-network-btn .dpsp-network-icon>span,
  .blog_row .dpsp-networks-btns-wrapper li .dpsp-network-btn .dpsp-network-icon {
    align-items: center;
    background-color: transparent !important;
    border: none;
    width: 18px;
    height: 18px;
    flex: none;
    align-self: center;
    top: 0;
    left: 0;
  }

  .blog_row .dpsp-button-style-1 .dpsp-network-btn .dpsp-network-icon:not(.dpsp-network-icon-outlined) .dpsp-network-icon-inner>svg {
    fill: #000 !important;
  }

  .blog_row .dpsp-network-btn.dpsp-facebook svg,
  .blog_row .dpsp-network-btn.dpsp-x svg,
  .blog_row .dpsp-network-btn.dpsp-pinterest svg,
  .blog_row .dpsp-network-btn.dpsp-linkedin svg {
    display: none;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn .dpsp-network-icon {
    background: transparent no-repeat center / contain !important;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-facebook .dpsp-network-icon {
    background-image: url("<?php echo $assets ?>facebook.svg") !important;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-x .dpsp-network-icon {
    background-image: url("<?php echo $assets ?>tweet.svg") !important;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-pinterest .dpsp-network-icon {
    background-image: url("<?php echo $assets ?>pin.svg") !important;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn.dpsp-linkedin .dpsp-network-icon {
    background-image: url("<?php echo $assets ?>in.svg") !important;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn .dpsp-network-label {
    padding: 0 0 0 12px;
  }

  .blog_row .dpsp-networks-btns-wrapper .dpsp-network-btn:hover {
    background-color: var(--Yellow-Primary, #FDB948) !important;
    outline: none;
    box-shadow: none;
  }

  .blog_row .elementor-widget-text-editor p+h4 .blog_row .elementor-widget-text-editor p+h3 {
    padding-top: 8px;
  }

  .blog_row .elementor-widget-text-editor h4+table {
    margin-top: 0;
  }

  .blog_row .elementor-widget-text-editor p+h3 {
    padding-top: 8px;
  }

  .blog_row .elementor-widget-text-editor p:not(.has-background, .single_subtitle):last-of-type+h3 {
    padding-top: 24px;
  }

  #main-content .blog_row .elementor-widget-text-editor>div *:last-child:is(ul):not(.list, .tabs) {
    padding-bottom: 16px;
  }

  #main-content .blog_row .elementor-widget-text-editor>div *:last-child:is(table) {
    margin-bottom: 16px !important;
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
    .sidebar {
      width: 100%;
      margin-bottom: 32px;
    }

    .sidebar_sticky {
      position: sticky;
      top: 90px;
    }

    #main-content .sidebar_content>ul li:before {
      content: none !important;
    }

    .sidebar_content.collapse ul {
      max-height: calc(100vh - 136px - 305px - 64px);
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

    .blog_row .elementor-widget-video+.elementor-widget-text-editor {
      margin-top: -12px !important;
    }

    .blog_row .elementor-widget-image+.elementor-widget-heading {
      margin-top: 12px;
    }

    .blog_row .elementor-widget-image+.elementor-widget-heading h4 {
      padding-top: 0;
      margin-top: -12px;
    }

    .single .et_pb_post {
      padding-bottom: 60px !important;
    }

    #dpsp-floating-sidebar {
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


    #main-content .sidebar_content ul li>a.elementor-item-active,
    #main-content .sidebar_content ul li:hover>a {
      border-color: #FDB948;
      background: linear-gradient(90deg, #FFF5E2 25.97%, rgba(255, 245, 226, 0.00) 94.5%);
    }
  }

  @media (max-width: 991px) {
    .sidebar_content ul {
      min-height: 40vh;
    }

    body {
      margin-top: 75px;
    }

    .blog_row .dpsp-networks-btns-wrapper li a.dpsp-network-btn,
    .blog_row .dpsp-networks-btns-wrapper li button.dpsp-network-btn {
      height: 42px;
      max-height: 42px !important;
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
      display: block;
    }

    .sidebar_calculate {
      display: none;
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

    .blog_row_left {
      width: 100%;
      margin-right: 0;
      padding-bottom: 0;
    }

    .sidebar_content {
      border: none;
      padding: 0;
    }

    .sidebar_head h3 {
      font-size: 24px;
      line-height: 32px;
    }

    #main-content .sidebar_content ul li a {
      font-size: 16px;
      font-weight: 600;
      line-height: 24px;
      border: none;
      margin-bottom: 16px;
      padding: 0 0 0 24px;
    }

    .sidebar_head svg {
      display: none;
    }

    #main-content .sidebar_content ul li>a.elementor-item-active,
    #main-content .sidebar_content ul li:hover>a {
      color: #FDB948;
      text-decoration: underline;
    }
  }

  @media (max-width: 767px) {
    .blog_row .elementor-widget-video+.elementor-widget-text-editor {
      margin-top: 4px !important;
    }

    p {
      padding-bottom: 10px;
    }

    p:not(.has-background, .single_subtitle):last-of-type {
      padding-bottom: 0 !important;
    }

    p:not(.has-background, .single_subtitle):last-of-type+ul,
    p:not(.has-background, .single_subtitle):last-of-type+ol {
      padding-top: 24px !important;
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

    .elementor-widget-heading h2.elementor-heading-title {
      padding-top: 28px;
    }

    .blog_row .wp-caption img {
      min-height: 264px;
      object-fit: contain;
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
<style>
  br.mob {
    display: none;
  }

  @media (max-width: 768px) {
    br.mob {
      display: block;
    }
  }

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

  .inner_widget .hero_text:first-of-type {
    padding: 4px 16px !important;
    text-shadow: 0px 1px 0px rgba(0, 119, 128, 0.50);
    border-bottom: 1px solid #309398;
    background: linear-gradient(90deg, #309398 0%, #34A0A6 30%, #34A0A6 70%, rgba(64, 152, 156, 0.00) 100% 100%);
    font-size: 16px !important;
    line-height: 1.4 !important;
    width: fit-content;
    font-weight: 600;
    position: relative;
    color: #fff;
    margin-bottom: 6px;
  }

  .inner_widget .hero_text:first-of-type b {
    color: #FEC464;
    font-weight: 600;
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
    padding-top: 24px;
    border-top: 1px dashed #86CED2;
    gap: 8px;
    margin-bottom: 24px;
  }

  .sidebar-nav .hero_points {
    margin-bottom: 16px;
    padding: 0 !important;
  }

  .hero_points li {
    display: flex;
    gap: 8px;
    align-items: flex-start;
    font-size: 14px !important;
    line-height: 24px;
    color: #fff;
    padding-left: 0 !important;
    font-weight: 400 !important;
  }

  .hero_points li::before {
    display: none;
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
    padding: 10px !important;
    color: #000;
    width: 95vw;
    max-width: 300px;
    z-index: 1;
    font-weight: 400;
    text-align: left;
    font-size: 14px;
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

  .sidebar-nav>a {
    display: none;
  }

  .new_banner {
    border-radius: 24px;
    border: 1px solid #FDB948;
    position: sticky;
    top: 100px;
  }

  .new_banner .banner_head {
    padding: 16px 12px;
    background: #FFC156;
    border-radius: 22px 22px 0px 0px;
  }

  .new_banner .banner_head img {
    width: 105px;
    margin-bottom: 12px;
  }

  .new_banner .banner_head p {
    font-size: 22px;
    line-height: 1.4;
    color: #000;
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

  .new_banner .banner_body>p {
    font-size: 12px;
    text-align: center;
    line-height: 1.5;
    width: 80%;
    margin: 0 auto;
  }

  .header__assessment-control.active .btn_yellow {
    display: none !important;
  }

  .new_banner .banner_body .tooltip {
    font-weight: 400;
  }

  .new_banner .btn_yellow {
    font-size: 15px !important;
  }

  .hero_widget.widget {
    background: linear-gradient(270deg, rgba(48, 147, 152, 0.00) 30%, rgba(48, 147, 152, 0.70) 40%, #309398 60%), url('<?= get_the_post_thumbnail_url() ?>') center right no-repeat;
    background-size: cover;
    padding: 56px 0;
    margin-top: 104px;
    margin-bottom: 30px;
  }

  .hero_widget.widget::after {
    display: none;
  }

  .crs_temp {
    display: block;
  }

  .hero_widget .read_time {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 14px;
    font-weight: 600;
    color: #fff;
    margin-bottom: 12px;
    gap: 8px;
    padding: 0;
    text-transform: uppercase;
  }

  .hero_widget .read_time .social {
    display: flex;
    gap: 24px;
    margin-left: auto;
    align-items: center;
  }

  .hero_widget .read_time .social a {
    display: flex;
    align-items: center;
  }

  .hero_widget h1 {
    font-size: 52px;
    line-height: 1.2;
    color: #fff;
    font-weight: 700;
    text-align: left;
    padding-bottom: 0;
  }

  .hero_widget h1+p {
    font-size: 18px;
    font-weight: 600;
    line-height: 1.7;
    color: #fff;
    text-align: left;
    margin-bottom: 24px;
    padding-bottom: 0 !important;
  }

  @media (max-width: 768px) {
    .hero_widget h1+p {
      font-size: 16px;
    }
  }

  .hero_widget .btn_wrap {
    margin-left: 0;
  }

  .hero_widget .btn_wrap .btn_yellow {
    background: #FFB027;
    font-size: 15px;
    line-height: 1;
  }

  .hero_bottom_text {
    color: #fff;
    font-size: 12px;
    line-height: 1.6;
    text-align: center;
    margin-top: 8px;
  }

  .inner_widget {
    max-width: 1230px;
    margin: 0 auto;
  }

  .inner_content {
    max-width: 800px;
  }

  .sidebar-nav {
    width: 340px;
    flex-shrink: 0;
    margin-left: 30px;
    margin-top: 10px;
  }

  [data-widget_type*="table-of-contents"] .elementor-widget-container {
    border: none !important;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__header {
    padding: 0;
    border-bottom: none;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__header h4 {
    padding-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 16px;
    font-size: 20px;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__toggle-button {
    display: none;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__body {
    padding: 0;
    border-radius: 8px;
    border: 1px solid #D8D8D8;
  }

  #main-content .blog_row .entry-content [data-widget_type*="table-of-contents"] ul.elementor-toc__list-wrapper {
    padding: 10px 0 !important;
    display: flex;
    flex-direction: column;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__list-wrapper li {
    margin: 0;
    padding: 10px 36px;
    font-weight: 400 !important;
    margin-bottom: 0 !important;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__list-wrapper li a {
    color: #444 !important;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__list-wrapper li a:hover {
    font-weight: 400 !important;
  }

  [data-widget_type*="table-of-contents"] .elementor-toc__list-wrapper li::before {
    display: none;
  }

  .single_bottom_choose {
    border-radius: 8px;
    border: 1px solid var(--Gray-300, #D8D8D8);
    padding: 46px 0 46px;
    margin: 100px 0;
    background: #fff;
  }

  .single_bottom_choose .home_banner_market {
    color: #000000;
    line-height: 110%;
    text-transform: none;
  }

  .single_bottom_choose .home_banner_market_dd {
    top: 35px;
  }

  .single_bottom_choose .home_banner_market {
    line-height: 24px;
  }

  #main-content .single_bottom_choose h2.single_bottom_title {
    padding-bottom: 44px;
    text-align: center;
    font-size: 32px;
    line-height: 40px;
    margin-bottom: 0;
  }

  .single_bottom_inner {
    width: 100%;
  }

  .single_bottom_item {
    width: 25%;
    border-right: 2px solid rgba(253, 185, 72, 0.4);
    margin-bottom: 44px;
  }

  .single_bottom_item:last-child {
    border-right: none;
  }

  .single_bottom_item>div {
    margin: 0 auto;
    max-width: 215px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    align-items: flex-start;
  }

  .single_bottom_item .single_bottom_text_top {
    font-size: 18px;
    font-weight: 700;
  }

  .single_bottom_item .single_bottom_text_bottom,
  .single_bottom_item .home_banner_market {
    font-size: 16px;
    font-weight: 400;
    line-height: 24px;
  }

  .single_bottom_btn {
    max-width: 400px;
    margin: 0 auto;
  }

  .single_bottom_btn a {
    margin-bottom: 16px;
  }

  .single_bottom_btn p {
    font-size: 14px;
    line-height: 1.2;
    text-align: center;
  }

  .insert_calc,
  .content_banner {
    width: 100%;
    border-radius: 12px;
    background: #262626;
    box-shadow: 4px 8px 16px 0px rgba(0, 0, 0, 0.05);
    flex-direction: column;
    padding: 16px;
    gap: 15px;
    margin: 24px 0;
    display: none;
  }

  .content_banner {
    display: flex;
    flex-direction: row;
    gap: 50px;
    align-items: center;
  }

  .content_banner p {
    font-size: 25px !important;
    color: #fff !important;
    font-weight: 700 !important;
    line-height: 1.5 !important;
    width: calc(50% - 25px);
  }

  .content_banner a {
    width: calc(50% - 25px);
    text-transform: capitalize;
  }

  .insert_calc h4 {
    font-size: 24px;
    line-height: 26px;
    color: #fff !important;
    font-weight: 700 !important;
    padding-bottom: 0;
  }

  @media (max-width: 768px) {
    .insert_calc h4 {
      font-size: 20px;
      line-height: 24px;
    }

    .single_bottom_btn {
      margin-top: 40px;
    }
  }

  .insert_calc label {
    color: #fff;
    font-size: 16px;
    line-height: 1.5;
    font-weight: 700;
  }

  .insert_calc .relative {
    display: flex;
    border-radius: 4px;
    border: 1px solid #D8D8D8;
    background: #FFF;
    align-items: center;
    padding: 0 17px;
    margin-right: 16px;
    width: calc(50% - 8px);
  }

  .insert_calc a {
    width: calc(50% - 8px);
  }

  .insert_calc .absolute_curr {
    font-size: 14px;
    padding-right: 16px;
    border-right: 1px solid #D8D8D8;
  }

  .insert_calc input {
    background: none !important;
    border: none !important;
    padding-left: 40px !important;
  }

  .insert_calc select {
    width: calc(50% - 8px) !important;
    margin-right: 16px !important;
  }

  .insert_calc>svg {
    display: none !important;
  }

  #main-content .insert_calc {
    display: flex;
  }

  .insert_calc .btn_yellow {
    background: #FFB027;
    font-size: 15px;
    line-height: 1;
  }

  .hero_widget.widget>.img {
    display: none;
  }

  .container {
    width: calc(100% - 32px) !important;
  }

  .elementor_main_content_block {
    max-width: calc(100% - 370px);
  }

  @media (max-width: 768px) {

    .hero_widget .btn_wrap {
      margin: 0 auto !important;
    }

    .sidebar-nav,
    .hero_widget .read_time .social {
      display: none;
    }

    .hero_widget.widget {
      background: #309398;
      padding: 24px 0 0;
      margin-top: 75px;
    }

    .hero_widget.widget>.img {
      display: block;
      width: 100%;
      height: 170px;
    }

    .hero_widget.widget>.img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .hero_widget .read_time {
      margin-bottom: 8px;
      justify-content: flex-start;
    }

    .hero_widget h1 {
      font-size: 32px;
      margin-bottom: 8px;
      line-height: 44px;
    }

    .hero_bottom_text {
      font-size: 14px;
      margin-bottom: 9px;
    }

    #main-content,
    .elementor-element {
      padding: 0 !important;
    }

    .content_banner {
      flex-direction: column;
      gap: 24px;
    }

    .content_banner p {
      width: 100%;
      font-size: 20px !important;
      text-align: center;
    }

    .content_banner a {
      width: 100%;
      font-size: 15px !important;
      line-height: 1.2 !important;
      padding: 10px 15px;
    }

    .insert_calc select {
      width: 100% !important;
      margin-right: 0 !important;
      margin-bottom: 16px !important;
    }

    .insert_calc .relative {
      width: 100%;
      margin-right: 0;
      margin-bottom: 16px;
    }

    .insert_calc a {
      width: 100%;
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

    .elementor_main_content_block {
      width: 100%;
      max-width: 100%;
    }

    .single_bottom_item {
      width: 100%;
      border-right: none;
    }

    .single_bottom_choose {
      padding: 32px 16px;
    }

    @media (max-width: 768px) {
      .single_bottom_choose {
        margin: 44px 0;
      }
    }

    .single_bottom_item>div {
      max-width: 100%;
      margin: 0;
    }

    #main-content .single_bottom_choose h2.single_bottom_title {
      font-size: 24px;
      line-height: 32px;
      text-align: left;
    }

    #et-main-area>.container {
      padding: 0;
    }
  }
</style>
<div class="hero_widget widget">
  <div class="inner_widget">
    <div class="inner_content">
      <p class="read_time"><?= $iconTime . ' ' . get_field('post_links_how_minutes') ?>
        <span class="social">
          <a href="https://www.facebook.com/MortgageBrokerBrisbane/" target="_blank">
            <?= $facebook ?>
          </a>
          <a href="https://www.youtube.com/channel/UCKw1JlNlcWR62EpSrXpfUWA" target="_blank">
            <?= $youtube ?>
          </a>
          <a href="https://twitter.com/BrokerBrisbane" target="_blank">
            <img src="https://www.huntergalloway.com.au/wp-content/themes/hunter-galloway/assets/img/img_new/X_icon.svg" alt="x">
          </a>
          <a href="https://www.linkedin.com/company/hunter-galloway/" target="_blank">
            <?= $linkedIn ?>
          </a>
        </span>
      </p>
      <h1><?= the_title() ?></h1>
      <p><?= get_field('hg_post_subtitle') ?></p>
      <ul class="hero_points">
        <p class="hero_text"><span><b>Get a home loan</b> with full guidance and expert assistance </span>
          <?= $elipsis_svg ?>
        </p>
        <li><?= $check_img ?><div><span>Market-leading <p class="tooltip">
                Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by
                DigitalFinance Analytics DFA. In 2017 to
                2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
              </p></span> loan approval rate in Australia of 97%</div>
        </li>
        <li><?= $check_img ?>Variety of options due to direct access to 30+ Australian banks & lenders</li>
        <li><?= $check_img ?><div><span>#1 rated <p class="tooltip">
                The highest rated and most reviewed Mortgage Broker in Brisbane: 5-star rating based on 2000+ reviews on Google
              </p></span> Mortgage Broker in Brisbane</div>
        </li>
      </ul>
      <div class="btn_wrap">
        <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
        <p class="hero_bottom_text">We promise to get back to you within <br class="mob">4 business hours</p>
      </div>
    </div>
  </div>
  <div class="img">
    <img src="<?= get_the_post_thumbnail_url() ?>" alt="main img">
  </div>
</div>
<div class="container">
  <div class="insert_calc">
    <?php include('banner-calculate.php'); ?>
  </div>
  <div id="main-content">
    <div class="blog_row flex">
      <div class="elementor_main_content_block">
        <?php include('post-content.php'); ?>
      </div>
      <div class="sidebar-nav">
        <div class="new_banner">
          <div class="banner_head">
            <img src="https://www.huntergalloway.com.au/wp-content/themes/Divi/images/hunter_logo_black_.svg" alt="logo">
            <p><b>Get a home loan</b> with full guidance and expert assistance </p>
          </div>
          <div class="banner_body">
            <ul class="hero_points">
              <li><?= $check_green_img ?><div><span>Market-leading<p class="tooltip">
                      Approximately 40% of home loan applications were rejected in December 2018 based on a survey of 52,000 households completed by
                      DigitalFinance Analytics DFA. In 2017 to
                      2018 Hunter Galloway submitted 342 home loan applications and had 8 applications rejected, giving a 2.33% rejection rate.
                    </p></span> loan approval rate in Australia of 97%</div>
              </li>
              <li><?= $check_green_img ?>Variety of options due to direct access to 30+ Australian banks & lenders</li>
              <li><?= $check_green_img ?><div><span>#1 rated<p class="tooltip">
                      The highest rated and most reviewed Mortgage Broker in Brisbane: 5-star rating based on 2000+ reviews on Google
                    </p></span> Mortgage Broker in Brisbane</div>
              </li>
            </ul>
            <div class="btn_wrap">
              <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
            </div>
            <p>We promise to get back to you within<br>
              4 business hours</p>
          </div>
        </div>
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
      <div class="single_bottom_btn">
        <a class="btn_yellow rc_open A-trigger" href="#">Get a Free Assessment</a>
        <p>We promise to get back to you within 4 business hours</p>
      </div>
    </div>
  </div> <!-- #main-content -->
</div><!-- .container -->

<style>
  .btn_up {
    position: fixed;
    bottom: 10px;
    right: 148px;
    z-index: 9;
    opacity: 0;
    pointer-events: none;
  }

  .btn_up.active {
    opacity: 1;
    pointer-events: auto;
  }

  @media (max-width: 767px) {
    .btn_up.active {
      right: 20px !important;
    }

    .btn_up {
      bottom: 100px;
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
  <?php if ($et_pb_calculate_value != 1) { ?>
    document.querySelectorAll("#et-main-area .btn_yellow").forEach(item => {
      item.addEventListener("click", (e) => {
        e.preventDefault();

        let value = e.currentTarget.parentElement.querySelector("input").value;


        if (document.querySelector('.hntr_calculators') && document.querySelector('#hcdc_deposit')) {
          jQuery(function($) {
            $('html, body').animate({
              scrollTop: $('.hntr_calculators').offset().top - 75
            }, 250);
          })

          if (value != '') {
            document.querySelector('#hcdc_deposit').value = value;
          }
        } else if (document.querySelector('.elementor-widget-shortcode #equity_loan_amount')) {
          jQuery(function($) {
            $('html, body').animate({
              scrollTop: $('.elementor-widget-shortcode').offset().top - 171
            }, 250);
          })
          document.querySelector('.elementor-widget-shortcode #equity_loan_amount').value = value;

        } else if (document.querySelector('.mercuryCalculator')) {
          jQuery(function($) {
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
</script>
<?php include 'mortgage-broker-brisbane-popups.php'; ?>
<?php

get_footer();
