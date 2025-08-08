<?php get_header(); ?>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>
  #masthead,
  .mobilehead,
  .footer_button {
    display: none !important;
  }

  #et-main-area {
    margin: 0 !important;
  }

  .mobile_text_from_hero,
  .link_pages,
  .new_mobile_header {
    display: none;
  }

  @media (max-width: 767px) {
    .btn_yellow {
      background: #FDB948;
      box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
      border-radius: 30px;
    }

    body .mobilehead {
      display: none;
    }

    .mobilehead,
    #et-main-area {
      margin: 0;
    }

    .new_mobile_header {
      display: flex;
      justify-content: space-between;
      padding: 20px 0;
      width: 90%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .new_mobile_header .mobilehead_logo {
      width: 35%;
    }

    .new_mobile_header>div:last-child {
      width: 60%;
    }

    .mobilehead_logo img {
      height: 42px;
      width: 118px;
    }

    .new_mobile_header ul {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
    }

    .new_mobile_header ul a.mobilehead_phone_tel {
      font-weight: 700;
      font-size: 16px;
      line-height: 135%;
      color: #000000;
    }

    .new_mobile_header a.mobilehead_phone_link {
      font-weight: 400;
      font-size: 15px;
      line-height: 130%;
      color: #000000;
      border-bottom: 1px dashed #000000;
      text-decoration: unset;
    }

    .new_mobile_header .header_button_flex a {
      font-weight: 600;
      font-size: 15px;
      line-height: 173%;
      height: 42px;
      background: #FFB027;
      box-shadow: 0px 3px 1px -2px rgba(0, 0, 0, 0.2), 0px 2px 2px rgba(0, 0, 0, 0.14), 0px 1px 5px rgba(0, 0, 0, 0.12);
      border-radius: 20px;
    }

    .link_pages {
      background: #F2F2F2;
      padding: 18px 14px;
      display: block;
      border-bottom: 1px solid #DCDCDC;
    }

    .link_pages ul {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .link_pages ul li {
      padding: 5px 0;
      width: 30%;
    }

    .link_pages ul li a {
      font-weight: 400;
      font-size: 15px;
      line-height: 130%;
      border-bottom: 1px dashed #000000;
      color: #000000;
    }

    .link_pages ul li:not(:last-child) {
      border-right: 1px solid #DCDCDC;
    }

    #footer-info {
      text-align: left;
      font-weight: 400;
      font-size: 13px;
      line-height: 140%;
      padding: 0 0 70px;
    }

    #main-footer #footer-widgets.clearfix {
      margin: 0;
      padding: 0 !important;
    }

    #main-footer #footer-widgets .footer-widget {
      padding: 0;
      margin-bottom: 30px;
    }

    #footer-widgets .footer-widget li {
      padding: 0;
    }

    #footer-widgets .footer-widget li:before {
      content: unset;
    }

    #footer-widgets .footer-widget li a {
      color: #FDB948;
    }

    .footer_adv_bottom.flex>p {
      font-weight: 700;
      font-size: 30px;
      line-height: 130%;
      letter-spacing: -0.01em;
      color: #FDB948;
    }

    .hg_adv.flex li div:first-child {
      font-weight: 900;
      font-size: 44px;
      line-height: 100%;
    }

    .hg_adv.flex li div:last-child {
      font-weight: 400;
      font-size: 13px;
      line-height: 135%;
      letter-spacing: 0.04em;
      text-transform: uppercase;
      color: #FFFFFF;
      margin-top: 10px;
    }

    .footer_adv_bottom a {
      height: 59px;
      background: #FDB948;
      box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
      border-radius: 33px;
      font-weight: 700;
      font-size: 23px;
      line-height: 135%;
    }

    .footer_video_text {
      font-weight: 400;
      font-size: 13px;
      line-height: 140%;
    }

    .footer_adv {
      padding-top: 45px !important;
      margin-bottom: -2px;
    }

    #main-footer .container,
    .footer_adv .container {
      width: unset;
      padding: 0;
    }

    #main-footer,
    .footer_adv {
      padding: 0 14px;
    }

    body .footer_logo img {
      display: none;
    }

    #footer-widgets .footer-widget .footer_logo a:nth-child(2) {
      margin-left: 0;
    }

    #footer-widgets .footer-widget .footer_logo a {
      text-decoration-line: underline;
    }

    .footer_contact.flex span {
      font-weight: 400;
      font-size: 13px;
      line-height: 140%;
    }

    #et-footer-nav {
      display: none;
    }

    #main-footer #footer-bottom {
      padding: 0 !important;
    }
  }

  @media (max-width: 320px) {
    .btn_yellow {
      font-size: 12px;
    }

    .link_pages ul li a {
      font-size: 13px;
    }

    .new_mobile_header .header_button_flex a {
      font-size: 12px;
    }

    .new_mobile_header ul a.mobilehead_phone_tel,
    .new_mobile_header a.mobilehead_phone_link {
      font-size: 13px;
    }

    .footer_adv_bottom a {
      width: 290px;
    }
  }
</style>

<style>
  #masthead, .mobilehead {
    display: none !important;
  }

  #et-main-area {
    margin: 0 !important;
  }

  .container {
    margin: auto;
    max-width: 1229px;
  }

  .btn {
    min-width: auto;
  }

  .q-btn_black {
    background-color: #262626;
    color: #fff;
    padding-left: 70px;
    padding-right: 70px;
  }

  .q-btn_black:hover {
    background-color: #262626;
    opacity: 0.75;
  }

  .q-tooltip {
    position: relative;
    top: -2px;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-left: 7px;
  }

  .q-tooltip__info {
    opacity: 0;
    pointer-events: none;
    position: absolute;
    width: 245px;
    z-index: 50;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    bottom: -12px;
    left: -30px;
    padding: 15px;
    background: #EEEEEE;
    -webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05), 2px 2px 30px rgba(0, 0, 0, 0.07);
    box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.05), 2px 2px 30px rgba(0, 0, 0, 0.07);
    border-radius: 10px;
    font-weight: 400;
    font-size: 12px;
    line-height: 1.7;
    color: #262626;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }

  @media (max-width: 768px) {
    .q-tooltip__info {
      font-size: 10px;
      width: 190px;
    }
  }

  .q-tooltip:hover .q-tooltip__info {
    opacity: 1;
  }

  .q-tooltip__info:before {
    content: '';
    position: absolute;
    width: 40px;
    height: 10px;
    position: absolute;
    left: 18px;
    top: 1px;
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
    background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-tooltip-arrow.svg") center no-repeat;
    background-size: contain;
  }

  .quizr {
    display: none;
    position: fixed;
    z-index: 9999;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-flow: column;
    flex-flow: column;
    overflow: auto;
    background: #fff;
  }

  .quizr-page {
    font-family: "Open Sans";
  }

  .quizr.active {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .quizr__container {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }

  @media (max-width: 1280px) {
    .quizr__container {
      position: static;
      padding: 0 20px;
      width: 100% !important;
    }
  }

  .quizr__head {
    position: relative;
    border-bottom: 1px solid #F1F1F1;
    padding: 30px 0;
  }

  @media (max-width: 768px) {
    .quizr__head {
      padding: 20px 0;
    }
  }

  .quizr__logo {
    line-height: 0;
  }

  .quizr__logo img {
    width: 160px;
  }

  @media (max-width: 768px) {
    .quizr__logo img {
      width: 98px;
    }
  }

  .quizr__phone {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    align-items: center;
    color: #000000;
    font-size: 17px;
    font-weight: bold;
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .quizr__phone {
      font-size: 15px;
    }
  }

  .quizr__phone img {
    margin-right: 10px;
  }

  .quizr__progress {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    opacity: 1;
  }

  @media (max-width: 1200px) {
    .quizr__progress {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      padding: 0 20px;
    }
  }

  @media (max-width: 768px) {
    .quizr__progress {
      position: absolute;
      bottom: -15px;
      left: 0;
      right: 0;
      -webkit-transform: translateY(100%);
      transform: translateY(100%);
    }
  }

  .quizr__progress-line {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 636px;
  }

  @media (max-width: 1200px) {
    .quizr__progress-line {
      max-width: 600px;
      width: 100%;
    }
  }

  @media (max-width: 768px) {
    .quizr__progress-line {
      max-width: 100%;
    }
  }

  .quizr__progress-line:before {
    content: '';
    position: absolute;
    background: #FDF3E0;
    border-radius: 16px;
    height: 5px;
    left: 0;
    right: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  .quizr__progress-line span {
    position: relative;
    z-index: 1;
    background: #F5BD55;
    border-radius: 16px;
    height: 15px;
    -webkit-transition: 0.5s;
    transition: 0.5s;
  }

  .quizr__progress-value {
    margin-left: 15px;
    font-weight: 700;
    font-size: 13px;
    line-height: 1.5;
    letter-spacing: -0.04em;
  }

  .quizr__body {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 85px 15px 7vh;
    -webkit-box-flex: 1;
    -ms-flex-positive: 1;
    flex-grow: 1;
    width: 100%;
  }

  @media (max-width: 768px) {
    .quizr__body {
      padding: 100px 20px 120px;
    }
  }

  .quizr__preloader {
    text-align: left;
    max-width: 400px;
    margin: 0 auto;
  }

  @media (max-width: 768px) {
    .quizr__preloader {
      max-width: 100%;
      width: 100%;
    }
  }

  @-webkit-keyframes infinite-spinning {
    from {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @keyframes infinite-spinning {
    from {
      -webkit-transform: rotate(0deg);
      transform: rotate(0deg);
    }
    to {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  .quizr__preloader-item {
    position: relative;
    font-weight: 400;
    font-size: 17px;
    line-height: 1.5;
    color: #262626;
    padding-left: 34px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    opacity: 0;
  }

  @media (max-width: 768px) {
    .quizr__preloader-item {
      font-size: 13px;
      padding-left: 27px;
    }
  }

  .quizr__preloader-item:before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    margin-top: -9px;
    -webkit-transform-origin: center;
    transform-origin: center;
    width: 18px;
    line-height: 0;
    height: 18px;
    background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-preloader.svg") center no-repeat;
    background-size: contain;
  }

  @media (max-width: 768px) {
    .quizr__preloader-item:before {
      width: 14px;
      height: 14px;
      margin-top: -7px;
    }
  }

  .quizr__preloader-item.active {
    opacity: 1;
  }

  .quizr__preloader-item.active:before {
    -webkit-animation: infinite-spinning 2s infinite linear;
    animation: infinite-spinning 2s infinite linear;
  }

  .quizr__preloader-item.finish {
    opacity: 1;
  }

  .quizr__preloader-item.finish:before {
    background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-check.svg") center no-repeat;
  }

  .quizr__preloader-item + .quizr__preloader-item {
    margin-top: 15px;
  }

  @media (max-width: 768px) {
    .quizr__preloader-item + .quizr__preloader-item {
      margin-top: 10px;
    }
  }

  .quizr__form {
    text-align: left;
    max-width: 400px;
    margin: 0 auto;
  }

  .quizr__form .wpcf7-response-output {
    display: none !important;
  }

  .quizr__form form {
    background: none;
    border-radius: 0;
  }

  .quizr__form form .ajax-loader {
    position: absolute;
    top: 0;
  }

  @media (max-width: 768px) {
    .quizr__form {
      max-width: 100%;
      width: 100%;
    }
  }

  .quizr__step {
    display: none;
    width: 606px;
  }

  .quizr__step-subscribe {
    margin-top: 15px;
  }

  .quizr__step-subscribe .wpcf7-list-item-label {
    font-weight: 400;
    font-size: 13px;
    line-height: 150%;
    color: #676767;
  }

  .quizr__step-subscribe span.wpcf7-list-item {
    margin: 0;
  }

  .quizr__step-subscribe label {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .quizr__step-subscribe input {
    width: 24px;
    height: 24px;
    margin: 0;
    margin-right: 10px;
    background: #F9F9F9;
    border: 1px solid #EEEEEE;
    border-radius: 2px;
  }

  .quizr__step-error {
    position: absolute;
    pointer-events: none;
    left: 0;
    right: 0;
    text-align: center;
    margin: 0;
    bottom: -3px;
    -webkit-transform: translateY(100%);
    transform: translateY(100%);
    color: red;
    font-size: 12px;
  }

  @media (max-width: 768px) {
    .quizr__step-error {
      bottom: -1px;
    }
  }

  .quizr__step.active {
    display: block;
  }

  .quizr__step-eleven, .quizr__step-finish {
    text-align: center;
  }

  @media (max-width: 768px) {
    .quizr__step-eleven, .quizr__step-finish {
      text-align: left;
    }
  }

  @media (max-width: 768px) {
    .quizr__step-finish {
      margin-top: -60px;
    }
  }

  .quizr__step-person {
    line-height: 0;
    margin-bottom: 30px;
  }

  @media (max-width: 768px) {
    .quizr__step-person {
      margin-bottom: 20px;
    }
    .quizr__step-finish .quizr__step-person {
      display: none;
    }
  }

  .quizr__step-eleven .quizr__step-person, .quizr__step-finish .quizr__step-person {
    margin-bottom: 20px;
  }

  .quizr__step-person img {
    border-radius: 50%;
    height: 100px;
    width: 100px;
  }

  .quizr__step-bad .quizr__step-person img {
    width: 90px;
    height: 90px;
  }

  @media (max-width: 768px) {
    .quizr__step-bad .quizr__step-person img {
      width: 60px;
      height: 60px;
    }
  }

  @media (max-width: 768px) {
    .quizr__step-person img {
      width: 70px;
      height: 70px;
    }
  }

  .quizr__step-title {
    font-weight: 800;
    font-size: 30px;
    line-height: 1.3;
    color: #262626;
  }

  @media (max-width: 768px) {
    .quizr__step-title {
      font-size: 20px;
    }
    .quizr__step-title br {
      display: none;
    }
  }

  .quizr__step-finish .quizr__step-title {
    text-transform: uppercase;
  }

  .quizr__step-subtitle {
    margin-top: 11px;
    margin-bottom: 20px;
    font-weight: 600;
    font-size: 24px;
    line-height: 1.3;
    color: #262626;
  }

  @media (max-width: 768px) {
    .quizr__step-subtitle {
      margin: 10px 0 0;
      font-size: 17px;
      font-weight: 400;
    }
  }

  .quizr__step-caption {
    margin-top: 15px;
    font-weight: 400;
    font-size: 17px;
    line-height: 1.5;
    color: #676767;
  }

  @media (max-width: 768px) {
    .quizr__step-caption {
      font-size: 14px;
      margin-top: 10px;
    }
    .quizr__step-caption br {
      display: none;
    }
  }

  .quizr__step-caption p {
    margin: 0;
  }

  .quizr__step-caption li {
    margin-top: 5px;
  }

  .quizr__step-caption ul {
    padding-left: 25px;
    margin-top: 8px;
    list-style: disc;
  }

  .quizr__step-divider {
    margin: 30px auto;
    border-top: 1px dashed rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    .quizr__step-divider {
      margin: 20px 0;
    }
  }

  .quizr__step-eleven .quizr__step-divider {
    max-width: 272px;
  }

  @media (max-width: 768px) {
    .quizr__step-eleven .quizr__step-divider {
      max-width: 100%;
    }
  }

  .quizr__step-finish .quizr__step-divider {
    max-width: 400px;
  }

  @media (max-width: 768px) {
    .quizr__step-finish .quizr__step-divider {
      max-width: 100%;
    }
  }

  .quizr__step-variants {
    position: relative;
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  @media (max-width: 768px) {
    .quizr__step-variants {
      -ms-grid-columns: 1fr;
      grid-template-columns: 1fr;
      gap: 10px;
    }
  }

  .quizr__step-variant {
    position: relative;
    background: #FFFFFF;
    border: 1px solid #262626;
    border-radius: 10px;
    font-weight: 600;
    font-size: 15px;
    line-height: 1.33;
    letter-spacing: 0.04em;
    text-transform: uppercase;
    color: #262626;
    padding: 12px 12px;
    padding-left: 45px;
    cursor: pointer;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    min-height: 60px;
  }

  .quizr__step-variant:before {
    content: '';
    position: absolute;
    top: 50%;
    -webkit-transform: translateY(-50%);
    transform: translateY(-50%);
    left: 16px;
    width: 15px;
    height: 15px;
    border: 1px solid #000000;
    border-radius: 50%;
  }

  @media (max-width: 768px) {
    .quizr__step-variant {
      font-size: 13px;
      padding: 15px;
      padding-left: 45px;
      min-height: 48px;
    }
  }

  .quizr__step-variant_error {
    border-color: red;
    color: red;
  }

  .quizr__step-variant:hover {
    color: #F5BD55;
    border-color: #F5BD55;
  }

  .quizr__step-variant.active {
    background: #F5BD55;
    color: #fff;
    border-color: #F5BD55;
  }

  .quizr__step-two .quizr__step-variant, .quizr__step-five .quizr__step-variant {
    letter-spacing: 0.02em;
    font-size: 13px;
  }

  .quizr__step-variant-back {
    text-align: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 12px;
    font-weight: 700;
    font-size: 15px;
    line-height: 135%;
    text-align: center;
    color: #262626;
    background-color: #FDB948;
    -webkit-box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
    box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
    border-radius: 60px;
    border: none;
    text-transform: none;
    letter-spacing: 0;
    min-height: 47px;
  }

  .quizr__step-variant-back:hover {
    background-color: #fca616;
    color: #fff;
  }

  .quizr__step-variant-back:before {
    display: none;
  }

  .quizr__step-variant-home {
    text-align: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding: 12px;
    border: none;
    text-transform: none;
    letter-spacing: 0;
    min-height: 47px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    text-decoration: underline;
  }

  .quizr__step-variant-home:before {
    display: none;
  }

  .quizr__step-control {
    position: relative;
    z-index: 10;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    margin-top: 60px;
  }

  @media (max-width: 768px) {
    .quizr__step-control {
      position: fixed;
      left: 0;
      bottom: 0;
      right: 0;
      padding: 20px;
      margin: 0;
      border-top: 1px solid #EEEEEE;
      background: #fff;
    }
  }

  .quizr__step-finish .quizr__step-control {
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
  }

  .quizr__step-back {
    position: absolute;
    top: 20px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-size: 13px;
    line-height: 1.5;
    color: #262626;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    cursor: pointer;
  }

  @media (max-width: 768px) {
    .quizr__step-back {
      top: 50px;
    }
  }

  .quizr__step-back:hover {
    opacity: 0.5;
  }

  .quizr__step-back img {
    margin-right: 10px;
    width: 5px;
  }

  .quizr__step-next {
    cursor: pointer;
    border: none;
    max-width: 174px;
    width: 100%;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }

  .quizr__step-finish .quizr__step-next {
    max-width: 229px;
  }

  @media (max-width: 768px) {
    .quizr__step-finish .quizr__step-next {
      max-width: 100%;
    }
  }

  @media (max-width: 768px) {
    .quizr__step-next {
      -webkit-box-flex: 1;
      -ms-flex-positive: 1;
      flex-grow: 1;
      max-width: 100%;
      height: 47px;
    }
  }

  .quizr__step-label {
    font-weight: 700;
    font-size: 13px;
    line-height: 1.5;
    color: #262626;
    margin-bottom: 7px;
  }

  @media (max-width: 768px) {
    .quizr__step-label {
      line-height: 1.3;
    }
  }

  .quizr__step-group {
    position: relative;
  }

  .quizr__step-group + .quizr__step-group {
    margin-top: 20px;
  }

  .quizr__step-group input {
    background: #F9F9F9 !important;
    outline: none;
    height: 50px;
    border: 1px solid #EEEEEE;
    border-radius: 10px;
    font-size: 17px;
    line-height: 135%;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    width: 100%;
    padding-left: 20px;
    padding-right: 20px;
  }

  @media (max-width: 768px) {
    .quizr__step-group input {
      height: 46px;
      font-size: 13px;
      padding-left: 20px;
      padding-right: 20px;
    }
  }

  .quizr__step-group input::-webkit-input-placeholder {
    font-family: 'Open Sans',Arial,sans-serif;
    color: #676767;
    color: rgba(38, 38, 38, 0.3);
  }

  .quizr__step-group input:-ms-input-placeholder {
    font-family: 'Open Sans',Arial,sans-serif;
    color: #676767;
    color: rgba(38, 38, 38, 0.3);
  }

  .quizr__step-group input::-ms-input-placeholder {
    font-family: 'Open Sans',Arial,sans-serif;
    color: #676767;
    color: rgba(38, 38, 38, 0.3);
  }

  .quizr__step-group input::placeholder {
    font-family: 'Open Sans',Arial,sans-serif;
    color: #676767;
    color: rgba(38, 38, 38, 0.3);
  }

  .quizr__step-group input.quizr__step-input_error {
    border-color: red;
    color: red;
  }

  .quizr__step-group input:focus {
    border-color: #F5BD55;
  }

  .quizr__step-group_money:before {
    content: "$";
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    bottom: 13px;
    padding-right: 20px;
    left: 26px;
    font-size: 17px;
    color: #000;
    height: 24px;
    line-height: 1;
    border-right: 1px solid #A9A9A9;
  }

  @media (max-width: 768px) {
    .quizr__step-group_money:before {
      height: 20px;
      left: 20px;
      font-size: 15px;
      padding-right: 15px;
    }
  }

  .quizr__step-group_money input {
    padding-left: 75px;
  }

  @media (max-width: 768px) {
    .quizr__step-group_money input {
      padding-left: 60px;
    }
  }

  .quizr-result {
    padding-top: 115px;
  }

  @media (max-width: 768px) {
    .quizr-result {
      padding-top: 75px;
    }
  }

  .quizr-result button {
    border: none;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    cursor: pointer;
  }

  @media (max-width: 1280px) {
    .quizr-result .container {
      padding: 0 20px;
      width: 100% !important;
    }
  }

  @media (max-width: 1200px) {
    .quizr-result .container {
      padding: 0 20px;
    }
  }

  .quizr-result .quizr__head {
    background: #fff;
    z-index: 99;
    -webkit-filter: drop-shadow(0px 6px 12px rgba(43, 43, 43, 0.15));
    filter: drop-shadow(0px 6px 12px rgba(43, 43, 43, 0.15));
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    border-bottom: 1px solid #EEEEEE;
  }

  .quizr-result .quizr__head_fixed {
    position: fixed;
    padding: 15px 0;
  }

  @media (max-width: 768px) {
    .quizr-result .quizr__head_fixed {
      padding: 12px 0;
    }
    .quizr-result .quizr__head_fixed .quizr__phone {
      display: none;
    }
  }

  .quizr-result .quizr__head_fixed .quizr__head-btn {
    display: block;
  }

  .quizr-result .quizr__head-side {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .quizr-result .quizr__head-btn {
    display: none;
    padding: 0 70px;
    margin-left: 40px;
  }

  @media (max-width: 992px) {
    .quizr-result .quizr__head-btn {
      margin-left: 30px;
      padding-left: 40px;
      padding-right: 40px;
    }
  }

  @media (max-width: 768px) {
    .quizr-result .quizr__head-btn {
      padding: 10px 25px;
      height: 44px;
      font-size: 13px;
      margin-left: 15px;
    }
  }

  .q-jumb {
    text-align: center;
    padding-bottom: 50px;
    padding-top: 60px;
  }

  @media (max-width: 768px) {
    .q-jumb {
      padding-top: 20px;
      padding-bottom: 25px;
    }
  }

  .q-jumb__image {
    background: #D9D9D9;
    border-radius: 10px;
    overflow: hidden;
    line-height: 0;
  }

  @media (max-width: 768px) {
    .q-jumb__image img {
      display: none;
    }
  }

  .q-jumb__image img + img {
    display: none;
  }

  @media (max-width: 768px) {
    .q-jumb__image img + img {
      display: block;
      min-width: 100%;
    }
  }

  .q-jumb__info {
    margin-top: 40px;
    text-align: center;
  }

  @media (max-width: 768px) {
    .q-jumb__info {
      margin-top: 17px;
    }
  }

  .q-jumb__title {
    font-weight: 700;
    font-size: 40px;
    line-height: 110%;
    color: #262626;
  }

  @media (max-width: 768px) {
    .q-jumb__title {
      font-size: 28px;
      line-height: 125%;
    }
  }

  .q-jumb__caption {
    font-size: 17px;
    line-height: 150%;
    color: #676767;
    max-width: 615px;
    margin: 20px auto 0;
  }

  @media (max-width: 768px) {
    .q-jumb__caption {
      margin-top: 10px;
      font-size: 13px;
    }
  }

  .q-personal__inner {
    background: #FFF8ED;
    border-radius: 10px;
    padding: 50px 105px;
  }

  @media (max-width: 992px) {
    .q-personal__inner {
      padding: 40px 30px;
    }
  }

  @media (max-width: 768px) {
    .q-personal__inner {
      padding: 30px;
    }
  }

  .q-income {
    margin-top: 50px;
    padding: 50px 0;
    background-color: #FECE7F;
    color: #262626;
    text-align: center;
  }

  @media (max-width: 768px) {
    .q-income {
      padding: 30px 0;
    }
  }

  .q-income__info {
    text-align: center;
  }

  .q-income__title {
    font-weight: 600;
    font-size: 20px;
    line-height: 1.3;
    margin-top: 10px;
  }

  .q-income__title span {
    font-weight: 800;
  }

  .q-income__price {
    font-weight: 800;
    font-size: 30px;
    line-height: 1.2;
    margin-top: 20px;
    margin-bottom: 20px;
  }

  .q-income__caption {
    font-weight: 400;
    font-size: 13px;
    line-height: 1.5;
  }

  .q-income__caption span {
    font-weight: 700;
  }

  .q-guide {
    margin-top: 50px;
    color: #262626;
  }

  .q-guide__inner {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 40px 60px;
    background: #EFFBFF;
    border-radius: 10px;
    max-width: 1020px;
    margin: auto;
  }

  @media (max-width: 768px) {
    .q-guide__inner {
      display: block;
      border-radius: 0;
      padding: 30px 16px 0;
      margin-left: -20px;
      margin-right: -20px;
    }
  }

  .q-guide__title {
    font-weight: 800;
    font-size: 30px;
    line-height: 1.35;
  }

  @media (max-width: 768px) {
    .q-guide__title {
      font-weight: 700;
    }
  }

  .q-guide__descr {
    margin-top: 25px;
    font-size: 17px;
    line-height: 32px;
    max-width: 575px;
  }

  @media (max-width: 768px) {
    .q-guide__descr {
      font-size: 20px;
      line-height: 32px;
    }
  }

  .q-guide__btn {
    margin-top: 20px;
    max-width: 235px;
    width: 100%;
    background-color: #43C4AF;
    color: #fff;
    text-decoration: none;
  }

  .q-guide__btn:hover {
    background-color: #33a18f;
    color: #fff;
  }

  .q-guide__image {
    line-height: 0;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    max-width: 137px;
    width: 100%;
    margin-left: 40px;
  }

  @media (max-width: 768px) {
    .q-guide__image {
      margin-left: auto;
      margin-right: auto;
      margin-top: 50px;
      max-width: 225px;
    }
  }

  .q-guide__image img {
    max-width: 100%;
  }

  .q-plate {
    background: #FFFFFF;
    border: 1px solid #EEEEEE;
    -webkit-box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.08);
    box-shadow: 4px 4px 12px rgba(0, 0, 0, 0.08);
    border-radius: 15px;
  }

  .q-deposit {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    color: #262626;
  }

  @media (max-width: 992px) {
    .q-deposit {
      display: block;
    }
  }

  .q-deposit__block {
    padding: 50px;
  }

  @media (max-width: 768px) {
    .q-deposit__block {
      padding: 30px;
    }
  }

  @media (max-width: 768px) {
    .q-deposit__block + .q-deposit__block {
      margin-top: 30px;
      padding: 0;
    }
  }

  .q-deposit__group + .q-deposit__group {
    margin-top: 30px;
  }

  .q-deposit__title {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    font-size: 17px;
    line-height: 150%;
    font-weight: 700;
    margin-bottom: 5px;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-deposit__title {
      font-size: 16px;
      line-height: 1.25;
      text-transform: none;
    }
  }

  .q-deposit__price {
    font-weight: 800;
    font-size: 40px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-deposit__price {
      font-size: 30px;
      margin-top: 10px;
    }
  }

  .q-deposit__caption {
    font-size: 13px;
    line-height: 150%;
    color: #676767;
    margin-top: 10px;
  }

  .q-deposit__caption span {
    font-weight: 700;
  }

  .q-deposit__best-title {
    font-weight: 700;
    font-size: 30px;
    line-height: 110%;
  }

  @media (max-width: 768px) {
    .q-deposit__best-title {
      font-weight: 800;
      font-size: 24px;
    }
  }

  .q-deposit__best-caption {
    font-size: 17px;
    line-height: 150%;
    margin-top: 10px;
  }

  @media (max-width: 768px) {
    .q-deposit__best-caption {
      font-size: 13px;
    }
  }

  .q-deposit__best-caption span {
    font-weight: 700;
  }

  .q-deposit__best-btn {
    margin-top: 20px;
    max-width: 312px;
    width: 100%;
  }

  @media (max-width: 992px) {
    .q-deposit__best-btn {
      max-width: 100%;
    }
  }

  .q-deposit__best-note {
    margin-top: 10px;
    font-size: 13px;
    line-height: 150%;
    color: #676767;
  }

  @media (max-width: 992px) {
    .q-deposit__best-note {
      text-align: center;
    }
  }

  .q-deposit__best-note span {
    font-weight: 800;
  }

  .q-loans {
    display: -ms-grid;
    display: grid;
    -ms-grid-columns: 1fr 1fr;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    margin-top: 50px;
    color: #262626;
  }

  @media (max-width: 1200px) {
    .q-loans {
      display: block;
      margin-top: 30px;
    }
  }

  .q-loans__block {
    padding: 50px;
  }

  @media (max-width: 768px) {
    .q-loans__block {
      padding: 30px;
    }
  }

  @media (max-width: 1200px) {
    .q-loans__block + .q-loans__block {
      margin-top: 30px;
    }
  }

  .q-loans__block-first {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-flow: column;
    flex-flow: column;
  }

  .q-loans__price {
    font-weight: 800;
    font-size: 40px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-loans__price {
      font-size: 30px;
    }
  }

  .q-loans__title {
    font-weight: 700;
    font-size: 30px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-loans__title {
      font-size: 16px;
    }
  }

  .q-loans__caption {
    font-size: 17px;
    line-height: 1.5;
    color: #676767;
  }

  @media (max-width: 768px) {
    .q-loans__caption {
      font-size: 13px;
    }
  }

  .q-loans__subtitle {
    font-size: 17px;
    line-height: 150%;
    font-weight: 700;
    margin-bottom: 5px;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-loans__subtitle {
      font-size: 13px;
    }
  }

  .q-loans__subtitle_sub {
    font-size: 17px;
    line-height: 1.5;
    margin-bottom: 11px;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-loans__subtitle_sub {
      font-size: 13px;
      margin-bottom: 5px;
    }
  }

  .q-loans__value {
    font-weight: 700;
    font-size: 30px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-loans__value {
      font-size: 18px;
    }
  }

  .q-loans__group_main {
    margin-top: 30px;
  }

  .q-loans__groups {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px dashed rgba(0, 0, 0, 0.1);
    margin-top: auto;
    padding-top: 30px;
  }

  @media (max-width: 1200px) {
    .q-loans__groups {
      margin-top: 30px;
    }
  }

  @media (max-width: 768px) {
    .q-loans__groups {
      padding-top: 20px;
      margin-top: 20px;
    }
  }

  .q-loans__groups_divider {
    opacity: 0.1;
    width: 1px;
    background: #000;
    height: 44px;
  }

  @media (max-width: 768px) {
    .q-loans__groups_divider {
      height: 30px;
    }
  }

  .q-loans__line {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: distribute;
    justify-content: space-around;
    position: relative;
    margin-top: 38px;
    margin-bottom: 30px;
    text-align: center;
  }

  @media (max-width: 768px) {
    .q-loans__line {
      margin-top: 30px;
    }
  }

  .q-loans__line:before {
    content: '';
    position: absolute;
    top: 53px;
    left: 0;
    right: 0;
    height: 5px;
    width: 100%;
    background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-loan-line.png") center no-repeat;
    background-size: contain;
  }

  .q-loans__line-price {
    position: relative;
    background: #291742;
    border-radius: 90px;
    padding: 5px 15px;
    color: #fff;
    font-weight: 700;
  }

  @media (max-width: 768px) {
    .q-loans__line-price {
      font-size: 10px;
      padding: 5px 10px;
    }
  }

  .q-loans__line-price:before {
    content: '';
    position: absolute;
    top: 97%;
    left: 0;
    right: 0;
    margin: auto;
    width: 19px;
    height: 7px;
    background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-loan-arrow.svg") center no-repeat;
    background-size: contain;
  }

  @media (max-width: 768px) {
    .q-loans__line-price:before {
      top: 95%;
    }
  }

  .q-loans__line-block {
    position: relative;
    width: 115px;
  }

  @media (max-width: 768px) {
    .q-loans__line-block {
      width: 82px;
    }
  }

  .q-loans__line-caption {
    font-weight: 600;
    font-size: 10px;
    line-height: 1.5;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-loans__line-caption {
      text-transform: none;
    }
  }

  .q-loans__line-dot {
    margin-top: 10px;
    margin-bottom: 5.5px;
  }

  .q-summary {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    color: #262626;
    padding: 80px 100px;
    margin-top: 50px;
  }

  @media (max-width: 1200px) {
    .q-summary {
      display: block;
    }
  }

  @media (max-width: 768px) {
    .q-summary {
      margin-top: 30px;
      padding: 30px;
    }
  }

  .q-summary__info {
    max-width: 410px;
  }

  @media (max-width: 1200px) {
    .q-summary__info {
      max-width: 100%;
    }
  }

  .q-summary__price {
    font-weight: 800;
    font-size: 40px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-summary__price {
      font-size: 30px;
    }
  }

  .q-summary__title {
    font-weight: 700;
    font-size: 30px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-summary__title {
      font-size: 16px;
    }
  }

  .q-summary__caption {
    font-size: 17px;
    line-height: 1.5;
    color: #676767;
    margin-top: 10px;
  }

  @media (max-width: 768px) {
    .q-summary__caption {
      font-size: 13px;
    }
  }

  .q-summary__subtitle {
    font-size: 17px;
    line-height: 150%;
    font-weight: 700;
    margin-bottom: 5px;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-summary__subtitle {
      font-size: 13px;
    }
  }

  .q-summary__subtitle_sub {
    font-size: 17px;
    line-height: 1.5;
    margin-bottom: 11px;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-summary__subtitle_sub {
      font-size: 11px;
      margin-bottom: 5px;
    }
  }

  .q-summary__value {
    font-weight: 700;
    font-size: 30px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-summary__value {
      font-size: 18px;
    }
  }

  .q-summary__group_main {
    margin-top: 30px;
  }

  .q-summary__groups {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border-top: 1px dashed rgba(0, 0, 0, 0.1);
    margin-top: 30px;
    padding-top: 30px;
  }

  @media (max-width: 768px) {
    .q-summary__groups {
      padding-top: 20px;
      margin-top: 20px;
    }
  }

  .q-summary__groups_divider {
    opacity: 0.1;
    width: 1px;
    background: #000;
    height: 44px;
  }

  @media (max-width: 768px) {
    .q-summary__groups_divider {
      height: 30px;
    }
  }

  .q-summary__stat {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-flow: column;
    flex-flow: column;
    text-align: center;
    max-width: 336px;
    border-bottom: 1px dashed #000000;
  }

  @media (max-width: 768px) {
    .q-summary__stat {
      max-width: 315px;
    }
  }

  @media (max-width: 1200px) {
    .q-summary__stat {
      margin-top: 60px;
      margin-left: auto;
      margin-right: auto;
    }
  }

  .q-summary__stat-graph {
    border-radius: 15px 15px 0 0;
    overflow: hidden;
    margin: auto auto -1px;
    max-width: 235px;
    width: 100%;
    text-transform: uppercase;
  }

  @media (max-width: 768px) {
    .q-summary__stat-graph {
      max-width: 185px;
    }
  }

  .q-summary__stat-title {
    font-weight: 700;
    font-size: 20px;
    line-height: 1.1;
    margin-bottom: 20px;
  }

  @media (max-width: 768px) {
    .q-summary__stat-title {
      font-size: 16px;
      margin-bottom: 30px;
    }
  }

  .q-summary__stat-top {
    padding: 14px 5px;
    background: #FECE7F;
  }

  .q-summary__stat-top__caption {
    font-size: 13px;
    line-height: 1.3;
  }

  .q-summary__stat-top__price {
    font-weight: 600;
    font-size: 17px;
    line-height: 1.3;
  }

  @media (max-width: 768px) {
    .q-summary__stat-top__price {
      font-weight: 700;
    }
  }

  .q-summary__stat-middle {
    background: #FDB948;
    padding: 65px 5px;
  }

  .q-summary__stat-middle__caption {
    font-size: 17px;
    line-height: 1.3;
  }

  @media (max-width: 768px) {
    .q-summary__stat-middle__caption {
      font-size: 13px;
    }
  }

  .q-summary__stat-middle__price {
    font-weight: 800;
    font-size: 24px;
    line-height: 1.3;
    margin-top: 1px;
  }

  @media (max-width: 768px) {
    .q-summary__stat-middle__price {
      font-size: 17px;
    }
  }

  .q-summary__stat-bottom {
    background: #262626;
    color: #fff;
    padding: 10px 7px;
  }

  .q-summary__stat-bottom__caption {
    font-size: 13px;
    line-height: 1.3;
  }

  .q-summary__stat-bottom__price {
    font-weight: 600;
    font-size: 17px;
    line-height: 1.3;
  }

  @media (max-width: 768px) {
    .q-summary__stat-bottom__price {
      font-weight: 700;
    }
  }

  .q-ready {
    margin-top: 50px;
    text-align: center;
  }

  @media (max-width: 768px) {
    .q-ready {
      margin-top: 30px;
    }
  }

  .q-ready__title {
    font-weight: 700;
    font-size: 40px;
    line-height: 1.1;
  }

  @media (max-width: 768px) {
    .q-ready__title {
      font-size: 30px;
      line-height: 1.25;
    }
  }

  .q-ready__btn {
    margin: 40px auto 0;
    padding: 10px 70px;
  }

  @media (max-width: 768px) {
    .q-ready__btn {
      margin-top: 20px;
      padding: 5px 15px;
      width: 100%;
    }
  }

  .q-tips {
    margin-top: 50px;
    color: #262626;
  }

  .q-tips__container {
    padding: 0 20px;
    max-width: 646px;
    margin: auto;
  }

  .q-tips__title {
    text-align: center;
    font-weight: 700;
    font-size: 40px;
    line-height: 1.1;
    margin-bottom: 60px;
  }

  @media (max-width: 768px) {
    .q-tips__title {
      font-size: 30px;
      margin-bottom: 40px;
    }
  }

  .q-tips__item {
    position: relative;
    padding: 40px;
    padding-left: 105px;
  }

  @media (max-width: 768px) {
    .q-tips__item {
      padding: 30px;
      padding-left: 85px;
    }
  }

  .q-tips__item + .q-tips__item {
    margin-top: 20px;
  }

  .q-tips__item:before {
    content: '?';
    position: absolute;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    left: 40px;
    top: 40px;
    background: #FDB948;
    border-radius: 4px;
    width: 45px;
    height: 45px;
    font-size: 20px;
    line-height: 1.1;
    font-weight: 700;
  }

  @media (max-width: 768px) {
    .q-tips__item:before {
      width: 40px;
      height: 40px;
      left: 30px;
      top: 30px;
    }
  }

  .q-tips__subtitle {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    min-height: 45px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    font-weight: 700;
    font-size: 20px;
    line-height: 1.1;
    margin-bottom: 30px;
  }

  @media (max-width: 768px) {
    .q-tips__subtitle {
      margin-bottom: 22px;
      min-height: 40px;
      font-size: 16px;
    }
  }

  .q-tips__caption {
    font-size: 17px;
    line-height: 1.5;
  }

  @media (max-width: 768px) {
    .q-tips__caption {
      font-size: 13px;
      margin-left: -53px;
    }
  }

  .q-tips__descr {
    text-align: center;
    font-weight: 700;
    font-size: 23px;
    line-height: 1.35;
    margin-top: 60px;
  }

  @media (max-width: 768px) {
    .q-tips__descr {
      margin-top: 40px;
      font-size: 17px;
    }
    .q-tips__descr br {
      display: none;
    }
  }

  .q-tips__btn {
    margin-top: 30px;
    margin-left: auto;
    margin-right: auto;
    max-width: 290px;
    width: 100%;
  }

  @media (max-width: 768px) {
    .q-tips__btn {
      margin-top: 20px;
    }
  }

  .to-map {
    margin-top: 60px;
    margin-bottom: 90px;
    color: #262626;
  }

  @media (max-width: 768px) {
    .to-map {
      margin-top: 45px;
      margin-bottom: 45px;
    }
  }

  .to-map__inner {
    background: #EEEEEE url("<?php echo get_template_directory_uri(); ?>/images/quizr/to-map.png") right no-repeat;
    background-size: auto 100%;
    border-radius: 10px;
    padding: 25px 30px;
    max-width: 750px;
    width: 100%;
    margin: auto;
  }

  @media (max-width: 768px) {
    .to-map__inner {
      background-position: right bottom;
      background-size: 795px;
      padding: 25px 20px 238px;
      margin-bottom: 45px;
    }
  }

  .to-map__info {
    max-width: 360px;
  }

  @media (max-width: 768px) {
    .to-map__info {
      max-width: 100%;
      text-align: center;
    }
  }

  .to-map__title {
    font-weight: 700;
    font-size: 30px;
    line-height: 1.3;
    color: #000000;
  }

  @media (max-width: 768px) {
    .to-map__title {
      font-size: 24px;
    }
  }

  .to-map__caption {
    margin-top: 10px;
    margin-bottom: 17px;
    font-size: 13px;
    line-height: 1.5;
  }

  .to-map__button {
    max-width: 230px;
    width: 100%;
    border: none;
    cursor: pointer;
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .to-map__button {
      max-width: 100%;
    }
  }

  .q-modal {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: fixed;
    top: 0;
    z-index: 999999999;
    left: 0;
    padding: 20px 0;
    width: 100%;
    overflow: auto;
    max-height: 100vh;
    height: 100%;
    -webkit-transition: opacity 0.5s ease-in-out;
    transition: opacity 0.5s ease-in-out;
    opacity: 0;
    pointer-events: none;
  }

  .q-modal.active {
    opacity: 1;
    pointer-events: all;
  }

  .q-modal__hidden {
    display: none;
  }

  .q-modal__close {
    display: inline-block;
    position: absolute;
    top: 20px;
    right: 20px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    line-height: 0;
    cursor: pointer;
    padding: 6px;
  }

  .q-modal__close svg {
    width: 12px;
    height: 12px;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    fill: #262626;
  }

  .q-modal__close:hover svg {
    fill: red;
  }

  .q-modal__overlay {
    display: block;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(38, 38, 38, 0.6);
  }

  .q-modal__content {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    position: relative;
    z-index: 100;
    max-width: 1155px;
    width: 100%;
    -webkit-filter: drop-shadow(0px 0px 200px rgba(0, 0, 0, 0.25));
    filter: drop-shadow(0px 0px 200px rgba(0, 0, 0, 0.25));
    border-radius: 20px;
    background: #fff;
    margin: auto;
    min-height: 85vh;
    overflow: hidden;
  }

  @media (max-width: 1200px) {
    .q-modal__content {
      max-width: 95%;
    }
  }

  @media (max-width: 768px) {
    .q-modal__content {
      -webkit-box-orient: vertical;
      -webkit-box-direction: reverse;
      -ms-flex-flow: column-reverse;
      flex-flow: column-reverse;
      min-height: auto;
      border-radius: 10px;
      max-width: 295px;
    }
  }

  .q-modal__content.active {
    display: block;
  }

  .q-modal__info {
    width: 100%;
    display: none;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-flow: column;
    flex-flow: column;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    text-align: center;
    padding: 30px;
  }

  @media (max-width: 768px) {
    .q-modal__info {
      text-align: left;
    }
  }

  .q-modal__info.active {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
  }

  .q-modal__info form {
    background: none;
    border-radius: 0;
  }

  .q-modal__image {
    line-height: 0;
    background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-modal.png") center no-repeat;
    background-size: cover;
    width: 40%;
    -ms-flex-negative: 0;
    flex-shrink: 0;
    margin-bottom: -1px;
    margin-right: -1px;
  }

  @media (max-width: 768px) {
    .q-modal__image {
      height: 161px;
      background: url("<?php echo get_template_directory_uri(); ?>/images/quizr/q-modal-mob.png") center no-repeat;
      background-size: cover;
      margin-left: -1px;
      margin-right: -1px;
      width: initial;
      margin-bottom: 0;
      margin-top: -1px;
    }
  }

  .q-modal__title {
    font-weight: 800;
    font-size: 30px;
    line-height: 1.3;
    text-transform: uppercase;
    color: #262626;
    margin-bottom: 10px;
  }

  @media (max-width: 768px) {
    .q-modal__title {
      font-size: 20px;
      line-height: 1.25;
    }
    .q-modal__title br {
      display: none;
    }
  }

  .q-modal__caption {
    font-size: 17px;
    line-height: 1.5;
    color: #676767;
  }

  @media (max-width: 768px) {
    .q-modal__caption {
      font-size: 13px;
    }
    .q-modal__caption br {
      display: none;
    }
  }

  .q-modal__result .q-modal__caption {
    margin-bottom: 50px;
  }

  @media (max-width: 768px) {
    .q-modal__result .q-modal__caption {
      margin-bottom: 20px;
    }
  }

  .q-modal__form .q-modal__caption {
    margin-top: 20px;
  }

  @media (max-width: 768px) {
    .q-modal__form .q-modal__caption {
      margin-top: 10px;
    }
  }

  .q-modal__caption span {
    font-weight: 700;
  }

  .q-modal__subtitle {
    font-weight: 600;
    font-size: 24px;
    line-height: 1.4;
    color: #262626;
  }

  @media (max-width: 768px) {
    .q-modal__subtitle {
      font-size: 17px;
      line-height: 1.5;
      font-weight: 400;
    }
  }

  .q-modal__subtitle img {
    margin-right: 8px;
  }

  @media (max-width: 768px) {
    .q-modal__subtitle img {
      margin-right: 4px;
    }
  }

  .q-modal__phone {
    max-width: 400px;
    width: 100%;
    margin: 30px auto 0;
    text-align: left;
    padding-top: 30px;
    border-top: 1px dashed rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    .q-modal__phone {
      margin-top: 20px;
      padding-top: 20px;
    }
  }

  @media (max-width: 768px) {
    .q-modal .btn {
      min-width: auto;
    }
  }

  .q-modal__btn-submit {
    max-width: 312px;
    width: 100%;
    margin-top: 40px;
    margin-left: auto;
    margin-right: auto;
  }

  @media (max-width: 768px) {
    .q-modal__btn-submit {
      margin-top: 30px;
      max-width: 100%;
      font-size: 14px;
    }
  }

  .q-modal__btn-read {
    margin-top: 30px;
    max-width: 426px;
    width: 100%;
    -webkit-transition: 0.3s;
    transition: 0.3s;
    text-decoration: none;
  }

  @media (max-width: 768px) {
    .q-modal__btn-read {
      margin-top: 20px;
      font-size: 11px;
    }
  }

  .q-modal__btn-read:hover {
    background-color: #f2aa25;
  }

  .q-modal__btn-home {
    text-decoration: none;
    margin-top: 20px;
    max-width: 294px;
    width: 100%;
    border: 2px solid #F5BD55;
    -webkit-box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
    box-shadow: 0px 6px 12px rgba(43, 43, 43, 0.15);
    border-radius: 33px;
    background: #fff;
    color: #F5BD55;
    -webkit-transition: 0.3s;
    transition: 0.3s;
  }

  @media (max-width: 768px) {
    .q-modal__btn-home {
      margin-top: 20px;
      font-size: 15px;
    }
  }

  .q-modal__btn-home:hover {
    color: #262626;
    border-color: #262626;
  }
</style>

<div class="quizr-page">
  <div class="quizr active">
    <!-- Head -->
    <div class="quizr__head">
      <div class="container quizr__container">
        <a href="/" class="quizr__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-logo.png" alt="">
        </a>

        <div class="quizr__progress">
          <div class="quizr__progress-line">
            <span style="width: 20%;"></span>
          </div>
          <div class="quizr__progress-value"><span>1</span>&nbsp;/&nbsp;10</div>
        </div>

        <a class="quizr__phone" href="tel:1300088065" alt="">
          <img src="https://www.huntergalloway.com.au/wp-content/themes/Divi/images/phoneicon.svg">
          <span>1300 088 065</span>
        </a>
      </div>
    </div>

    <!-- Body -->
    <div class="quizr__body">
      <!-- Step 1 -->
      <div class="quizr__step quizr__step-one active">
        <div class="quizr__step-person">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
        </div>
        <div class="quizr__step-title">Hello, I'm Nathan.</div>
        <div class="quizr__step-caption">
          <p>
            I'll help you to find out:
          </p>
          <ul>
            <li>What house can you afford</li>
            <li>How much you can get as a loan</li>
            <li>Best deals and how to choose the right mortgage</li>
          </ul>
        </div>

        <div class="quizr__step-control">
          <button class="quizr__step-next btn_yellow">Continue</button>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="quizr__step quizr__step-two">
        <a herrf="#" class="quizr__step-back">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
        </a>

        <div class="quizr__step-person">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
        </div>
        <div class="quizr__step-title">Are you planning on purchasing a home to live in, or an investment property?</div>

        <div class="quizr__step-divider"></div>

        <div class="quizr__step-variants">
          <div class="quizr__step-variant" data-value="home">I’m buying a home</div>
          <div class="quizr__step-variant" data-value="property">I’m buying an investment property</div>
        </div>

        <div class="quizr__step-control">
          <!-- <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a> -->
          <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
        </div>
      </div>

      <!-- Step 3 -->
      <div class="quizr__step quizr__step-three">
        <a herrf="#" class="quizr__step-back">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
        </a>

        <div class="quizr__step-person">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
        </div>
        <div class="quizr__step-title">Where do you live now?</div>
        <div class="quizr__step-caption">We're working only with Australian citizens or residents. </div>


        <div class="quizr__step-divider"></div>

        <div class="quizr__step-variants">
          <div class="quizr__step-variant" data-next=".quizr__step-four">I live in Australia</div>
          <div class="quizr__step-variant" data-next=".quizr__step-bad">I live outside Australia</div>
        </div>

        <div class="quizr__step-control">
          <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
        </div>
      </div>

      <!-- Step 4-1 -->
      <div class="quizr__step quizr__step-bad">
        <div class="quizr__step-person">
          <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-sad-smile.svg" alt="">
        </div>
        <div class="quizr__step-title">
          Sorry, we can only work with Australian citizens or residents.
        </div>
        <div class="quizr__step-caption">
          Would you like to change your location?
        </div>

        <div class="quizr__step-divider"></div>

        <div class="quizr__step-variants">
          <div class="quizr__step-variant quizr__step-variant-back" data-back="true">Change my location</div>

          <div class="quizr__step-variant quizr__step-variant-home" data-url="/">To the Home Page</div>
        </div>

        <!-- <div class="quizr__step-control">
          <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
        </div>

        <!-- Step 4-2 -->
        <div class="quizr__step quizr__step-four">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>

          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">What is your employment status?</div>
          <div class="quizr__step-caption">Each lender has different rules and policies based on your type of employment. If you let us know your employment status, we can search across our panel of lenders to find the most suitable loan and lender for you.</div>

          <div class="quizr__step-divider"></div>

          <div class="quizr__step-variants">
            <div class="quizr__step-variant">SALARY/WAGE</div>
            <div class="quizr__step-variant">Self-employed</div>
            <div class="quizr__step-variant">Casual</div>
            <div class="quizr__step-variant">Unemployed</div>
          </div>

          <div class="quizr__step-control">
            <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
          </div>
        </div>

        <!-- Step 5 -->
        <div class="quizr__step quizr__step-five">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>

          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person2.png" alt="">
          </div>
          <div class="quizr__step-title">What stage are you currently at in your home-buying journey?</div>

          <div class="quizr__step-divider"></div>

          <div class="quizr__step-variants">
            <div class="quizr__step-variant">I’m just curious</div>
            <div class="quizr__step-variant">I’m looking for properties online</div>
            <div class="quizr__step-variant">I’m actively touring properties</div>
            <div class="quizr__step-variant">I’m making offers on properties</div>
          </div>

          <div class="quizr__step-control">
            <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
          </div>
        </div>

        <!-- Step 6 -->
        <div class="quizr__step quizr__step-six">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>
          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">What is the approximate price of the property you want to purchase?</div>
          <div class="quizr__step-caption">Roughly how much are you planning on spending on your property purchase?</div>

          <div class="quizr__step-divider"></div>

          <div class="quizr__step-variants">
            <div class="quizr__step-variant" data-value="500000">Less than $500,000</div>
            <div class="quizr__step-variant" data-value="500000">$500,000</div>
            <div class="quizr__step-variant" data-value="600000">$600,000</div>
            <div class="quizr__step-variant" data-value="700000">$700,000</div>
            <div class="quizr__step-variant" data-value="800000">$800,000</div>
            <div class="quizr__step-variant" data-value="800000">More than $800,000</div>
          </div>

          <div class="quizr__step-control">
            <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
          </div>
        </div>

        <!-- Step 7 -->
        <div class="quizr__step quizr__step-seven">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>

          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">How much savings do you have available to use as a deposit?</div>
          <div class="quizr__step-caption">We recommend a minimum deposit of 10% of the property price, which <span class="quizr__step-seven_value">is </span>.</div>

          <div class="quizr__step-divider"></div>

          <div class="quizr__step-group quizr__step-group_money">
            <div class="quizr__step-label">Type in your available deposit amount</div>
            <input class="quizr__step-money" placeholder="40,000" type="tel" data-min="1000" data-max="100000000" data-minError="Minimum deposit is lower than required" data-maxError="Type in your available deposit amount" data-error="Please enter your deposit amount">
          </div>
          <div class="quizr__step-caption quizr__step-seven-caption">We recommend <span></span>.</div>

          <div class="quizr__step-control">
            <button class="quizr__step-next btn_yellow">Continue</button>
          </div>
        </div>

        <!-- Step 8 -->

        <!-- Step 9 -->
        <div class="quizr__step quizr__step-nine">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>

          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">Are you buying property with a partner?</div>
          <div class="quizr__step-caption">By borrowing with your partner you will be able to increase your borrowing amount.</div>


          <div class="quizr__step-divider"></div>

          <div class="quizr__step-variants">
            <div class="quizr__step-variant" data-next=".quizr__step-ten-a">No</div>
            <div class="quizr__step-variant" data-next=".quizr__step-ten-b">Yes</div>
          </div>

          <div class="quizr__step-control">
            <!-- <button class="quizr__step-next btn_yellow">Continue</button> -->
          </div>
        </div>

        <!-- Step 10-1 -->
        <div class="quizr__step quizr__step-ten-a">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>

          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">What is your gross annual income?</div>
          <div class="quizr__step-caption">Please exclude child benefits and make sure that health insurance and debt payments are deducted from your gross income.</div>


          <div class="quizr__step-divider"></div>

          <div class="quizr__step-group quizr__step-group_money">
            <div class="quizr__step-label">Type in your gross income</div>
            <input class="quizr__step-money" placeholder="80,000" type="tel" data-min="1000" data-max="100000000" data-minError="Type in your gross income" data-maxError="Type in your gross income" data-error="Please enter your gross income">
          </div>

          <div class="quizr__step-control">
            <button class="quizr__step-next quizr__step-next_final btn_yellow">Continue</button>
          </div>
        </div>

        <!-- Step 10-2 -->
        <div class="quizr__step quizr__step-ten-b">
          <a herrf="#" class="quizr__step-back">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-arrow-left.svg" alt=""> Back
          </a>
          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">What is your combined gross annual income?</div>
          <div class="quizr__step-caption">Please exclude child benefits and make sure that health insurance and debt payments are deducted from your gross income.</div>


          <div class="quizr__step-divider"></div>

          <div class="quizr__step-group quizr__step-group_money">
            <div class="quizr__step-label">Type in your combined gross income</div>
            <input class="quizr__step-money" placeholder="80,000" type="tel" data-min="1000" data-max="100000000" data-minError="Type in your gross income" data-maxError="Type in your gross income" data-error="Please enter your gross income">
          </div>

          <div class="quizr__step-control">
            <button class="quizr__step-next quizr__step-next_final btn_yellow">Continue</button>
          </div>
        </div>

        <!-- Step 11 -->
        <div class="quizr__step quizr__step-eleven">
          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">Your personal mortgage report is being created</div>

          <div class="quizr__step-divider"></div>

          <div class="quizr__preloader">
            <div class="quizr__preloader-item">Evaluating your input</div>
            <div class="quizr__preloader-item">Scanning the market</div>
            <div class="quizr__preloader-item">Processing available mortgage offers</div>
            <div class="quizr__preloader-item">Creating your personal mortgage report...</div>
          </div>
        </div>

        <!-- Step Finish -->
        <div class="quizr__step quizr__step-finish">
          <div class="quizr__step-person">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-person.png" alt="">
          </div>
          <div class="quizr__step-title">
            Great! <br>
            Your mortgage offer is ready!
          </div>

          <div class="quizr__step-subtitle">
            Leave your email to view the report
          </div>

          <div class="quizr__step-caption">
            Our recommendation engine has found a preliminary mortgage offer for you. Only one step left to review the report and get your mortagage insights.
          </div>

          <div class="quizr__step-divider"></div>

          <div class="quizr__form">
            <!-- 49607 -->
            <?php echo do_shortcode('[contact-form-7 id="67146" title="Quiz report form"]'); ?>
          </div>
        </div>
      </div>
    </div>

    <main class="quizr-result">
      <!-- Head -->
      <header class="quizr__head">
        <div class="quizr__container container">
          <a href="/" class="quizr__logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-logo.png" alt="">
          </a>

          <div class="quizr__head-side">
            <a class="quizr__phone" href="tel:1300088065" alt="">
              <img src="https://www.huntergalloway.com.au/wp-content/themes/Divi/images/phoneicon.svg">
              <span>1300 088 065</span>
            </a>

            <button class="q-btn-modal btn_yellow quizr__head-btn">Find mortgage deals</button>
          </div>
        </div>
      </header>

      <!-- Jumbotron -->
      <section class="q-jumb">
        <div class="container">
          <div class="q-jumb__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-jumb-desc.png" alt="">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-jumb-mob.png" alt="">
          </div>
          <div class="q-jumb__info">
            <div class="q-jumb__title">Your personal home affordability report</div>
            <div class="q-jumb__caption">Your estimate is based on your income, type of property, employment status and available funds</div>
          </div>
        </div>
      </section>

      <!-- Personal -->
      <section class="q-personal">
        <div class="container q-personal__container">
          <div class="q-personal__inner">
            <div class="q-deposit">
              <div class="q-deposit__block q-plate">
                <div class="q-deposit__group">
                  <div class="q-deposit__title">Property price</div>
                  <div class="q-deposit__price q-deposit__property-amount">$500,000</div>
                </div>

                <div class="q-deposit__group">
                  <div class="q-deposit__title">
                    Your deposit
                    <div class="q-tooltip">
                      <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-tooltip.svg" alt="">
                      <div class="q-tooltip__info">
                        "LMI waivers may apply for certain professions and other circumstances. Our mortgage team will advise this to you once a full assessment is completed."
                      </div>
                    </div>
                  </div>
                  <div class="q-deposit__price q-deposit__deposit-amount">$50,000</div>
                </div>

                <div class="q-deposit__caption">Before you can get a mortgage, you need to have a deposit that should cover <span>at least 10%</span> of your home price.</span></div>
              </div>

              <div class="q-deposit__block q-deposit__best">
                <div class="q-deposit__best-title">Want to get best deals?</div>
                <div class="q-deposit__best-caption">Find your dream home with the <span>knowledge and confidence</span> that you have found the best possible deal</div>
                <button class="q-deposit__best-btn btn_yellow q-btn-modal">Find mortgage deals</button>
                <div class="q-deposit__best-note"><span>Get free expert advice</span> in 4 hours</div>
              </div>
            </div>

            <div class="q-loans">
              <div class="q-loans__block q-plate q-loans__block-first">
                <div class="q-loans__title">Your loan summary</div>
                <div class="q-loans__group q-loans__group_main">
                  <div class="q-loans__subtitle">Loan amount</div>
                  <div class="q-loans__price">$450,000</div>
                </div>
                <div class="q-loans__groups">
                  <div class="q-loans__group">
                    <div class="q-loans__subtitle_sub">Interest rate</div>
                    <div class="q-loans__value"><span class="q-loans__value-interestRate">2.49</span>% p.a.</div>
                  </div>
                  <div class="q-loans__groups_divider"></div>
                  <div class="q-loans__group">
                    <div class="q-loans__subtitle_sub">Loan term</div>
                    <div class="q-loans__value"><span class="q-loans__value-term">30</span> years</div>
                  </div>
                </div>
              </div>

              <div class="q-loans__block q-plate">
                <div class="q-loans__title">Your maximum loan amount </div>
                <div class="q-loans__line">
                  <div class="q-loans__line-block">
                    <div class="q-loans__line-price q-loans__line-price_deposit">$500.000</div>
                    <img class="q-loans__line-dot" src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-loan-dot.svg" alt="">
                    <div class="q-loans__line-caption">Based on your available deposit</div>
                  </div>
                  <div class="q-loans__line-block">
                    <div class="q-loans__line-price q-loans__line-price_income">$700.000</div>
                    <img class="q-loans__line-dot" src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-loan-dot.svg" alt="">
                    <div class="q-loans__line-caption">Based on your current income</div>
                  </div>
                </div>
                <div class="q-loans__caption">Your maximum loan amount is based on your current income and available deposit. Calculations are estimates provided as a guide only, and are not a loan approval</div>
              </div>
            </div>

            <div class="q-summary q-plate">
              <div class="q-summary__info">
                <div class="q-summary__title">Your repayments summary</div>
                <div class="q-summary__caption">The loan amount is calculated for the property price of <span class="q-loans__caption-amount">$800,00</span></div>
                <div class="q-summary__group q-loans__group_main">
                  <div class="q-summary__subtitle">Monthly payment</div>
                  <div class="q-summary__price">$4,000</div>
                </div>
                <div class="q-summary__groups">
                  <div class="q-summary__group">
                    <div class="q-summary__subtitle_sub">Total repayments</div>
                    <div class="q-summary__value q-summary__value-repayments">$1,444,000</div>
                  </div>
                  <div class="q-summary__groups_divider"></div>
                  <div class="q-summary__group">
                    <div class="q-summary__subtitle_sub">Total interest</div>
                    <div class="q-summary__value q-summary__value-interest">$453,644</div>
                  </div>
                </div>
              </div>
              <div class="q-summary__stat">
                <div class="q-summary__stat-title">How much will my mortgage repayments be?</div>
                <div class="q-summary__stat-graph">
                  <div class="q-summary__stat-top">
                    <div class="q-summary__stat-top__caption">Total interest</div>
                    <div class="q-summary__stat-top__price">$145,000</div>
                  </div>
                  <div class="q-summary__stat-middle">
                    <div class="q-summary__stat-middle__caption">Loan Amount</div>
                    <div class="q-summary__stat-middle__price">$450,000</div>
                  </div>
                <!-- <div class="q-summary__stat-bottom">
                  <div class="q-summary__stat-bottom__caption">Your deposit</div>
                  <div class="q-summary__stat-bottom__price">$50,000</div>
                </div> -->
              </div>
            </div>
          </div>

          <div class="q-ready">
            <div class="q-ready__title">Ready to take the next step?</div>
            <button class="q-btn-modal q-ready__btn btn_yellow">Get approval for this loan</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Income -->
    <section class="q-income">
      <div class="container q-income__container">
        <div class="q-income__info">
          <svg class="q-income__star" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M48.3839 18.1718L33.3949 15.9758L26.6944 2.282C26.5114 1.90707 26.2103 1.60356 25.8384 1.41907C24.9057 0.954873 23.7722 1.3417 23.3058 2.282L16.6053 15.9758L1.61629 18.1718C1.20304 18.2313 0.825219 18.4277 0.535947 18.7252C0.186233 19.0876 -0.00647562 19.5751 0.00016616 20.0806C0.00680794 20.5861 0.212257 21.0682 0.571368 21.4211L11.4161 32.0798L8.854 47.1304C8.79392 47.4805 8.83235 47.8406 8.96494 48.1698C9.09753 48.499 9.31897 48.7842 9.60415 48.993C9.88934 49.2018 10.2268 49.3259 10.5784 49.3511C10.93 49.3764 11.2815 49.3019 11.5932 49.136L25.0001 42.0302L38.407 49.136C38.773 49.3324 39.1981 49.3978 39.6054 49.3264C40.6326 49.1479 41.3233 48.1659 41.1462 47.1304L38.5841 32.0798L49.4289 21.4211C49.724 21.1295 49.9189 20.7486 49.9779 20.3321C50.1373 19.2906 49.4171 18.3265 48.3839 18.1718Z" fill="black" />
          </svg>
          <div class="q-income__title">Based on your <span>current income</span> you may be able to get a loan of up to</div>
          <div class="q-income__price">$1,515,789</div>
          <div class="q-income__caption">With a minimum required deposit of <span>$120,000</span></div>
          <!-- <button class="q-btn-modal q-income__btn btn_yellow q-btn_black">Learn how to secure this loan</button> -->
        </div>
      </div>
    </section>

    <!-- First loan guide -->
    <section class="q-guide">
      <div class="container">
        <div class="q-guide__inner">
          <div class="q-guide__info">
            <div class="q-guide__title">The ultimate guide for first-time home buyers </div>
            <div class="q-guide__descr">Find out everything you need to know about buying your first property: from saving up for a deposit and choosing the right property to applying for a home loan.</div>
            <a href="/first-home-buyer-loans/" class="q-guide__btn btn_yellow">Read guide</a>
          </div>
          <div class="q-guide__image">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quizr/q-guide.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- Tips -->
    <section class="q-tips">
      <div class="q-tips__container">
        <div class="q-tips__title">Mortgage tips</div>
        <div class="q-tips__list">
          <div class="q-tips__item q-plate">
            <div class="q-tips__subtitle">How to choose the right home loan?</div>
            <div class="q-tips__caption">When looking for a good deal on a home loan, the interest rate matters. A home loan is a long-term debt, so even a small difference in interest adds up over time.</div>
          </div>

          <div class="q-tips__item q-plate">
            <div class="q-tips__subtitle">How to save on your mortgage?</div>
            <div class="q-tips__caption">There are a myriad of way you can save money on your mortgage. As some simple tips: Have a larger deposit (we recommend over 10%); make additional repayments more frequently; and make sure you explore an offset option with your broker. </div>
          </div>

          <div class="q-tips__item q-plate">
            <div class="q-tips__subtitle">Next steps in property investments</div>
            <div class="q-tips__caption">If you're ready for the next steps, we have some words of advice: Property investment is simple, but not easy. <br> In other words, it’s not something you should enter into lightly. So take the time to research and familiarise yourself with as much information as you possibly can.</div>
          </div>
        </div>
        <div class="q-tips__descr">
          Find out how to secure your loan for <span>$1,515,789</span> <br> from our network of lenders
        </div>
        <button class="q-tips__btn q-btn-modal btn_yellow">
          Speak to a broker
        </button>
      </div>
    </section>

    <!-- To map -->
    <section class="to-map">
      <div class="container">
        <div class="to-map__inner">
          <div class="to-map__info">
            <div class="to-map__title">Looking for property in Brisbane?</div>
            <div class="to-map__caption">Compare where to live, invest and buy in 2022 on interactive map</div>
            <a href="/suburbs-map/" target="_blank" class="to-map__button btn_yellow">Explore map</a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Modal wrap -->
  <div class="q-modal">
    <div class="q-modal__overlay"></div>

    <!-- Modal Callback -->
    <div class="q-modal__content">
      <!-- Close modal -->
      <div class="q-modal__close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001" width="512" height="512">
          <path d="M294.111 256.001L504.109 46.003c10.523-10.524 10.523-27.586 0-38.109-10.524-10.524-27.587-10.524-38.11 0L256 217.892 46.002 7.894C35.478-2.63 18.416-2.63 7.893 7.894s-10.524 27.586 0 38.109l209.998 209.998L7.893 465.999c-10.524 10.524-10.524 27.586 0 38.109 10.524 10.524 27.586 10.523 38.109 0L256 294.11l209.997 209.998c10.524 10.524 27.587 10.523 38.11 0 10.523-10.524 10.523-27.586 0-38.109L294.111 256.001z" />
        </svg>
      </div>

      <div class="q-modal__info q-modal__form active">
        <div class="q-modal__title">Get your loan approved</div>
        <div class="q-modal__subtitle">
          If you’re ready to take the next step, arrange a free introductory assesment with our expert team
        </div>
        <div class="q-modal__caption">
          We’ll review your situation, find you a great deal, and get your loan approved
        </div>
        <!-- 49608 -->
        <?php echo do_shortcode('[contact-form-7 id="67147" title="Quiz finish report"]'); ?>
      </div>
      <div class="q-modal__info q-modal__result">
        <div class="q-modal__title">Thank you for your enquiry!</div>
        <div class="q-modal__caption">We will then <span>get in touch</span> within 4 business hours</div>
        <div class="q-modal__subtitle">
          Want more useful tips? <br>
          Explore our Guide for First Home Buyers
        </div>
        <a href="https://www.huntergalloway.com.au/first-home-buyers-loans/" class="btn q-modal__btn-read">Read Guide for First Home Buyers </a>
        <a href="/" class="btn q-modal__btn-home">To the Home Page</a>
      </div>
      <div class="q-modal__image"></div>

    </div>
  </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://unpkg.com/imask"></script>

<script>
(function ($) {
  var currentStepIndex = 0;
  var prevSteps = [];
  var data = {};
  data.term = 30;
  data.interestRate = 2.49;

  if (localStorage.getItem('quizData')) {
    data = JSON.parse(localStorage.getItem('quizData'));
    if (data.mail) {
      $('.quizr.active').removeClass('active');
      calculate();
    } else {
      $('body').css('overflow', 'hidden');
    }
  } else {
    $('body').css('overflow', 'hidden');
  }

  updateProgress();

  document.addEventListener(
    'wpcf7mailsent',
    function (event) {
      console.log('Fire!', event);
      if ($('.q-modal').hasClass('active')) {
        $('.q-modal__form').removeClass('active');
        $('.q-modal__result').addClass('active');
      }
      if ($('.quizr').hasClass('active')) {
        $('body').removeAttr('style');
        $('.quizr').fadeOut();
        localStorage.setItem('quizData', JSON.stringify(data));
      }
    },
    false
  );

  $(window).scroll(function () {
    if ($(document).scrollTop() > 500) {
      $('.quizr-result .quizr__head').addClass('quizr__head_fixed');
    } else {
      $('.quizr-result .quizr__head').removeClass('quizr__head_fixed');
    }
  });

  document.querySelectorAll('input').forEach(function (item) {
    item.addEventListener('focus', function () {
      if ($(item).siblings('.quizr__step-error')) {
        $(item).siblings('.quizr__step-error').remove();
      }
      if (item.classList.contains('quizr__step-input_error')) {
        item.classList.remove('quizr__step-input_error');
      }
    });
    item.addEventListener('input', function () {
      if ($(item).siblings('.quizr__step-error')) {
        $(item).siblings('.quizr__step-error').remove();
      }
      if (item.classList.contains('quizr__step-input_error')) {
        item.classList.remove('quizr__step-input_error');
      }
    });
    if ($(item).hasClass('quizr__step-money')) {
      IMask(item, {
        mask: Number,
        thousandsSeparator: ',',
      });
    }
    if ($(item).hasClass('q-modal__phone-input')) {
      IMask(item, {
        mask: '0000 000 000',
      });
    }
    if ($(item).hasClass('quizr__step-year')) {
      IMask(item, {
        mask: Number,
        maxLength: 3,
        autofix: true,
      });
    }
  });

  $('.quizr__step-variant').on('click', function () {
    $(this).addClass('active').siblings('.active').removeClass('active');
    $('.quizr__step-variant_error').removeClass('quizr__step-variant_error');
    $('.quizr__step-error').remove();

    if ($(this).data('url')) {
      location.href = $(this).data('url');
      return false;
    }

    if ($(this).data('back')) {
      $('.quizr__step.active .quizr__step-variant.active').removeClass(
        'active'
      );
      updateProgress(true);
      return false;
    }

    moveToNextStep($(this).data('next'));
  });

  $('.quizr__step-back').on('click', function () {
    updateProgress(true);
  });

  $('.quizr__step-next:not(.quizr__step-close)').on('click', function () {
    if ($('.quizr__step.active input')) {
      var isError = false;
      $('.quizr__step.active input').each(function (index, item) {
        isError = true;
        if (!item.value) {
          var errorText = 'Fill field!';
          if (item.dataset.error) {
            errorText = item.dataset.error;
          }
          $(item).after('<p class="quizr__step-error">' + errorText + '</p>');
        } else if (
          parseFloat(item.value.replaceAll(',', '')) <
          parseFloat(item.dataset.min)
        ) {
          $(item).after(
            '<p class="quizr__step-error">' + item.dataset.minerror + '</p>'
          );
        } else if (
          parseFloat(item.value.replaceAll(',', '')) >
          parseFloat(item.dataset.max)
        ) {
          $(item).after(
            '<p class="quizr__step-error">' + item.dataset.maxerror + '</p>'
          );
        } else {
          isError = false;
        }

        if (isError) {
          item.classList.add('quizr__step-input_error');
        }
      });
    }

    if (isError) return false;

    if ($(this).hasClass('quizr__step-next_final')) {
      moveToNextStep('.quizr__step-eleven');
      return false;
    }

    if ($(this).hasClass('quizr__step-close')) {
      // $('body').removeAttr('style');
      // $('.quizr').fadeOut();

      return false;
    }

    moveToNextStep(
      $('.quizr__step.active .quizr__step-variant.active').data('next')
    );
  });

  $('input').keypress(function (event) {
    var keycode = event.keyCode ? event.keyCode : event.which;
    if (keycode == '13') {
      $('.quizr__step.active .quizr__step-next').click();
    }
  });

  function moveToNextStep(nextStepTarget) {
    var currentStep = $('.quizr__step.active');
    var nextStep = $('.quizr__step.active').next();

    if (nextStepTarget) {
      nextStep = $(nextStepTarget);
    }

    if (
      currentStep.find('.quizr__step-variant').length &&
      !currentStep.find('.quizr__step-variant.active').length
    ) {
      currentStep
        .find('.quizr__step-variant')
        .addClass('quizr__step-variant_error');
      currentStep
        .find('.quizr__step-variants')
        .append('<p class="quizr__step-error">Please select an option</p>');
      return false;
    }

    if (nextStepTarget != '.quizr__step-finish') {
      updateProgress();
    }
    prevSteps.push(currentStep);
    currentStep.removeClass('active');
    nextStep.addClass('active');

    if ($('.quizr__step.active input').length && $(window).width() > 992) {
      $('.quizr__step.active input').first().focus();
    }

    if (nextStepTarget == '.quizr__step-eleven') {
      startPreloader();
      return false;
    }
  }

  function startPreloader() {
    localStorage.setItem('quizData', JSON.stringify(data));
    calculate();
    $('.quizr__preloader-item').each(function (index, item) {
      var delay = 2.3;
      // if (index == 3) {
      //   delay = 2.7;
      // }
      setTimeout(() => {
        $('.quizr__preloader-item.active')
          .removeClass('active')
          .addClass('finish');
        $(item).addClass('active');
      }, index * delay * 1000);

      if (index == 3) {
        setTimeout(() => {
          $('.quizr__preloader-item.active')
            .removeClass('active')
            .addClass('finish');

          setTimeout(() => {
            moveToNextStep('.quizr__step-finish');
            $('.quizr__progress').css('opacity', 0);
            setTimeout(() => {
              $('.quizr__progress').remove();
            }, 500);
          }, 500);
        }, index * delay * 1000 + 3000);
      }
    });
    console.log('preloader');
  }

  function updateProgress(isBack) {
    if (isBack) {
      $('.quizr__step.active').removeClass('active');
      prevSteps.pop().addClass('active');
      currentStepIndex--;
      $('.quizr__step.active .quizr__step-variant.active').removeClass(
        'active'
      );
    } else {
      saveData(currentStepIndex);
      currentStepIndex++;
    }

    $('.quizr__progress-line span').css(
      'width',
      (100 / 10) * currentStepIndex + '%'
    );
    $('.quizr__progress-value span').text(currentStepIndex);
  }

  function numberWithCommas(x, currency) {
    if (x) {
      return (
        (currency ? currency : '') +
        parseInt(x)
          .toString()
          .replace(/\B(?=(\d{3})+(?!\d))/g, ',')
      );
    }
    return '';
  }

  function calculate() {
    console.log('data', data);
    $('.q-loans__caption-amount').text(data.approximateText);
    $('.q-deposit__property-amount').text(
      numberWithCommas(data.approximateValue, '$')
    );
    $('.q-deposit__deposit-amount').text(numberWithCommas(data.deposit, '$'));

    // var minDeposit;
    // if (data.type == 'home') {
    //   minDeposit = data.approximateValue * 0.08;
    // } else {
    //   minDeposit = data.approximateValue * 0.12;
    //   $('.q-deposit__caption span').text('12% of your investment property.');
    // }
    $('.q-income__caption span').text(numberWithCommas(data.minDeposit, '$'));

    $('.q-loans__value-term').text(data.term);
    $('.q-loans__value-interestRate').text(data.interestRate);

    var coef;
    var yearIncome = data.income;
    if (data.type == 'home') {
      if (data.partner == 'no') {
        if (yearIncome > 35000) {
          coef = 0.135148273;
        } else if (yearIncome > 30000) {
          coef = 0.1518218623;
        } else if (yearIncome > 25000) {
          coef = 0.1731301939;
        } else {
          coef = 0.2070393375;
        }
      } else {
        if (yearIncome > 80000) {
          coef = 0.1348676724;
        } else if (yearIncome > 70000) {
          coef = 0.1533070521;
        } else if (yearIncome > 60000) {
          coef = 0.15927794;
        } else if (yearIncome > 50000) {
          coef = 0.1673360107;
        } else if (yearIncome > 40000) {
          coef = 0.2116402116;
        } else {
          coef = 0.5769230769;
        }
      }
    } else {
      if (data.partner == 'no') {
        if (yearIncome > 30000) {
          coef = 0.1180737026;
        } else if (yearIncome > 25000) {
          coef = 0.1606683805;
        } else {
          coef = 0.2141327623;
        }
      } else {
        if (yearIncome > 60000) {
          coef = 0.1185732125;
        } else if (yearIncome > 50000) {
          coef = 0.1555693839;
        } else if (yearIncome > 40000) {
          coef = 0.2116402116;
        } else {
          coef = 0.5769230769;
        }
      }
    }

    console.log(yearIncome, coef);

    data.loanIncomming = parseInt(yearIncome / coef);

    $('.q-income__price').text(numberWithCommas(data.loanIncomming, '$'));

    $('.q-income__caption span').text(
      numberWithCommas(data.loanIncomming * 0.1, '$')
    );

    if (data.deposit < data.minDeposit) {
      data.loan = data.approximateValue - data.minDeposit;
    } else {
      data.loan = data.approximateValue - data.deposit;
    }

    data.loanMaxDeposit = data.deposit / 0.1;

    $('.q-loans__price, .q-summary__stat-middle__price').text(
      numberWithCommas(data.loan, '$')
    );
    $('.q-loans__line-price_deposit').text(
      numberWithCommas(data.loanMaxDeposit, '$')
    );

    if (data.loanIncomming < data.loanMaxDeposit) {
      $('.q-loans__line').append($('.q-loans__line-block').first());
    }

    if (Math.abs(data.loanIncomming - data.loanMaxDeposit) > 1000) {
      $('.q-loans__line-price_income').text(
        numberWithCommas(data.loanIncomming, '$')
      );
    } else {
      $('.q-loans__line-price_income').parent().remove();
    }

    // data.totalInterest = parseInt(data.loan * (data.interestRate / 100));
    data.totalInterest = parseInt(data.loan * 0.42);
    $('.q-summary__value-interest, .q-summary__stat-top__price').text(
      numberWithCommas(data.totalInterest, '$')
    );

    data.totalRepayments = parseInt(data.totalInterest + data.loan);
    $('.q-summary__value-repayments').text(
      numberWithCommas(data.totalRepayments, '$')
    );
    $('.q-tips__descr span').text(numberWithCommas(data.totalRepayments, '$'));

    data.monthlyPayments = parseInt(data.totalRepayments / data.term / 12);
    $('.q-summary__price').text(numberWithCommas(data.monthlyPayments, '$'));

    $('.q-summary__stat-bottom__price').text(
      numberWithCommas(data.deposit, '$')
    );

    data.afford = data.loan + data.deposit;
    $('.q-afford__price').text(numberWithCommas(data.afford, '$'));

    localStorage.setItem('quizData', JSON.stringify(data));
  }

  function saveData(step) {
    if (step == 2) {
      data.type = $('.quizr__step.active .quizr__step-variant.active').data(
        'value'
      );
    }
    if (step == 4) {
      data.employment = $('.quizr__step.active .quizr__step-variant.active')
        .text()
        .toLowerCase();
    }

    if (step == 5) {
      data.stage = $('.quizr__step.active .quizr__step-variant.active')
        .text()
        .toLowerCase();
    }

    if (step == 6) {
      data.approximateText = $(
        '.quizr__step.active .quizr__step-variant.active'
      )
        .text()
        .toLowerCase();

      data.approximateValue = $(
        '.quizr__step.active .quizr__step-variant.active'
      ).data('value');

      data.minDeposit = data.approximateValue * 0.1;

      if (
        data.approximateText.includes('less') ||
        data.approximateText.includes('more')
      ) {
        console.log(data.approximateText);
        $('.quizr__step-seven_value').text(
          'would be ' +
            numberWithCommas(data.minDeposit, '$') +
            ' for an ' +
            numberWithCommas(data.approximateValue, '$') +
            ' property'
        );
      } else {
        $('.quizr__step-seven_value').text(
          'is ' + numberWithCommas(data.minDeposit, '$')
        );
      }

      $('.quizr__step-seven-caption span').text(
        numberWithCommas(data.minDeposit, '$')
      );
    }

    if (step == 7) {
      data.deposit = parseFloat(
        $('.quizr__step.active input').val().replaceAll(',', '')
      );
    }

    if (step == 8) {
      data.partner = $('.quizr__step.active .quizr__step-variant.active')
        .text()
        .toLowerCase();
    }

    if (step == 9) {
      data.income = parseFloat(
        $('.quizr__step.active input').val().replaceAll(',', '')
      );
    }

    console.log('step', step, data);
  }

  $('.q-btn-modal').on('click', function (e) {
    e.preventDefault();
    openModal();
  });

  $('.q-modal__overlay, .q-modal__close').on('click', closeModal);

  $('.quizr__form input[name="text-name"]').on('input', function () {
    data.name = $(this).val();
  });

  $('.quizr__form input[name="text-email"]').on('input', function () {
    data.mail = $(this).val();
  });

  function fillHiddenQuizData() {
    var message = '';

    if (data.type == 'home') {
      message += '- I’m buying a home\r\n';
    } else {
      message += '- I’m buying an investment property\r\n';
    }

    message += '- Employment status: ' + data.employment + '\r\n';
    message += '- ' + data.stage + '\r\n';
    message +=
      '- Approximate price of the property: ' + data.approximateText + '\r\n';
    message += '- Deposit: ' + numberWithCommas(data.deposit, '$') + '\r\n';
    message += '- With a partner? ' + data.partner.toUpperCase() + '\r\n';
    message +=
      '- Monthly income: ' + numberWithCommas(data.income, '$') + '\r\n';

    console.log('message', message);
    $('.q-modal__hidden-area').val(message);
    $('.q-modal__hidden-name').val(data.name);
    $('.q-modal__hidden-mail').val(data.mail);
  }

  function openModal() {
    document.querySelector('.q-modal').classList.add('active');
    fillHiddenQuizData();
    // document.getElementById(modal).classList.add("active");
  }

  function closeModal() {
    if (document.body.contains(document.querySelector('.q-modal.active')))
      document.querySelector('.q-modal').classList.remove('active');
  }
})(jQuery);

</script>

<?php

get_footer();
