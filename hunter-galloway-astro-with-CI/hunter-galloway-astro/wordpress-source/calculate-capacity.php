<?php

while (have_posts()) {
    the_post();
    $page_data = (object) [
        'id' => get_the_ID(),
        'title' => get_the_title(),
        'content' => get_the_content(),
    ];
}

$userAgent = $_SERVER['HTTP_USER_AGENT'];
$isMobile = strpos($userAgent, 'Mobile') !== false || strpos($userAgent, 'Android') !== false || strpos($userAgent, 'iPhone') !== false || strpos($userAgent, 'iPad') !== false;

$assets = '/wp-content/themes/hunter-galloway/assets/img/img_new/';

$htmlIcons = '
<div class="result-wrapper_icons">
    <div class="item_hover"><img src="' . $assets . '2019_001.png" alt="icons" loading="lazy">
        <span class="item_tooltip left">FBAA Broker of the Year in 2019</span>
    </div>
    <div class="item_hover"><img src="' . $assets . '2019_002.png" alt="icons" loading="lazy">
        <span class="item_tooltip center">FBAA Broker of the Year in 2019</span>
    </div>
    <div class="item_hover"><img src="' . $assets . 'finance-broker-of-the-year-2018.png"
            alt="icons" loading="lazy">
        <span class="item_tooltip center">FBAA Broker of the Year in 2018</span>
    </div>
    <div class="item_hover"><img src="' . $assets . 'best-mortgage-broker-2019.png"
            alt="icons" loading="lazy">
        <span class="item_tooltip center">FBAA Broker of the Year in 2019</span>
    </div>
    <div class="item_hover"><img src="' . $assets . '30-under-20.png" alt="icons" loading="lazy">
        <span class="item_tooltip center">FBAA Broker of the Year in 2019</span>
    </div>
    <div class="item_hover"><img src="' . $assets . 'vow-award-mortgage-broker.png"
            alt="icons" loading="lazy">
        <span class="item_tooltip center">FBAA Broker of the Year in 2019</span>
    </div>
</div>'
?>
<style>
    /* calc */
    .form-wrapper {
        border-radius: 20px;
        background-color: transparent;
        padding: 0;
        max-width: 100%;
    }

    .form-wrapper h2 {
        font-size: 32px;
        line-height: 40px;
        color: var(--White, #FFF);
        padding-bottom: 24px;
        font-weight: 700;
    }

    .form-wrapper .form>div {
        width: 100%;
        margin: 0;
        display: flex;
        flex-direction: column;
    }

    .form-wrapper .input-box {
        padding-top: 24px;
        position: relative;
        content-visibility: visible;
    }

    .form-wrapper .input-box:first-child,
    .form-wrapper .input-box:last-child {
        margin-top: auto;
    }

    .form-wrapper .form>div:nth-child(2n+2) {
        margin-right: 0;
    }

    .result-form .wpcf7-response-output {
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

    .radio-input input,
    .result-typ {
        display: none;
    }

    .radio-input span {
        border-radius: 4px;
        border: 1px solid var(--Gray-300, #D8D8D8);
        background: var(--White, #FFF);
        display: block;
        color: #000;
        text-align: center;
        font-family: "Open Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
        width: 100%;
        text-transform: capitalize;
        padding: 11px;
        text-wrap: nowrap;
        white-space: nowrap;
    }

    .radio-input input:checked~span {
        border: 1px solid var(--Yellow-Primary, #FDB948);
        background: var(--Yellow-light, #FFF5E2);
        color: var(--Grey-dark, #262626);
        font-weight: 600;
    }

    .input-title {
        color: var(--Grey-dark, #262626);
        font-family: "Open Sans";
        font-size: 18px;
        font-style: normal;
        font-weight: 700;
        line-height: 26px;
        margin-bottom: 12px;
    }

    .input-description {
        color: var(--Grey-text, #444);
        font-family: "Open Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 24px;
        margin: -8px 0 12px;
    }

    .input-description b {
        font-weight: 600;
    }

    .calculator-wrapper .input-wrapper.money-input {
        position: relative;
        border-radius: 4px;
    }

    .calculator-wrapper .input-wrapper.money-input::before {
        content: "$";
        position: absolute;
        top: 50%;
        left: 0;
        width: 41px;
        height: 20px;
        border-right: 1px solid #D8D8D8;
        transform: translateY(-50%);
        color: var(--Text-Black, #212121);
        font-family: "Open Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 20px;
        text-align: center;
        text-transform: capitalize;
    }

    .calculator-wrapper .input-box input[type="text"],
    .calculator-wrapper .input-box select {
        border-radius: 4px;
        border: 1px solid var(--Gray-300, #D8D8D8);
        background: var(--White, #FFF);
        padding: 12px;
        font-family: "Open Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px;
    }

    .calculator-wrapper .input-box .input-wrapper.money-input input[type="text"] {
        padding-left: 57px;
    }

    .form-wrapper .form {
        display: flex;
        flex-wrap: wrap;
    }

    .input-wrapper.radio-input-wrapper {
        display: flex;
    }

    .input-wrapper.radio-input-wrapper label {
        width: 100%;
        margin-right: 12px;
        cursor: pointer;
    }

    .input-wrapper.radio-input-wrapper label:last-child {
        margin-right: 0;
    }

    .btn_yellow {
        padding-top: 0;
        padding-bottom: 0;
        min-height: 48px;
    }

    .form-wrapper .form .btn_yellow {
        max-width: 400px;
        margin: 48px auto 0;
        width: 100%;
        cursor: pointer;
        box-shadow: none;
    }

    .calculator-wrapper .input-box .input-wrapper {
        position: relative;
    }

    .calculator-wrapper .input-box .input-wrapper.validation-failed {
        border: 1px solid #FF3D52;
        margin-bottom: 15px;
    }

    .calculator-wrapper .input-box .input-wrapper.validation-failed.radio-input-wrapper {
        border: none;
    }

    .calculator-wrapper .input-box .input-wrapper.validation-failed.radio-input-wrapper .radio-input {
        border: 1px solid #FF3D52;
        border-radius: 4px;
    }

    .calculator-wrapper .input-box .input-wrapper.validation-failed::after {
        content: attr(data-validation-msg);
        position: absolute;
        left: 0;
        bottom: 0;
        transform: translateY(100%);
        color: #FF3D52;
        font-size: 14px;
    }

    .result-wrapper,
    .calculator-wrapper.show_result .form-wrapper {
        display: none;
    }

    .calculator-wrapper.show_result .result-wrapper {
        display: block;
    }

    .btn_recalculate {
        display: flex;
        align-items: center;
        gap: 8px;
        border: none;
        background: none;
        color: #000;
        font-family: "Open Sans";
        font-size: 15px;
        font-weight: 600;
        line-height: 26px;
        cursor: pointer;
    }

    .btn_recalculate::before {
        content: '';
        width: 16px;
        height: 16px;
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.93994 1.08662C5.4788 0.197592 7.26729 -0.160798 9.02986 0.0666279C10.7924 0.294063 12.4314 1.09469 13.6941 2.34521C14.957 3.59575 15.7736 5.2268 16.0183 6.98712C16.0859 7.47415 15.746 7.92388 15.2589 7.99154C14.7718 8.05921 14.3221 7.71927 14.2544 7.23224C14.0635 5.85875 13.4265 4.58621 12.4412 3.61055C11.456 2.63487 10.1773 2.01016 8.80201 1.83271C7.42675 1.65527 6.03137 1.9349 4.83073 2.62853C4.04074 3.08492 3.36388 3.7039 2.8414 4.43852H4.45194C4.94367 4.43852 5.3423 4.83716 5.3423 5.32889C5.3423 5.82063 4.94367 6.21927 4.45194 6.21927H1.35557C1.34209 6.21954 1.32856 6.21954 1.31503 6.21927H0.890474C0.398734 6.21927 0.000107938 5.82063 0.000107938 5.32889V1.76742C0.000107938 1.27569 0.398734 0.877057 0.890474 0.877057C1.38221 0.877057 1.78084 1.27569 1.78084 1.76742V2.90074C2.385 2.17921 3.11425 1.56363 3.93994 1.08662ZM0.767915 8.00855C1.25497 7.94079 1.70468 8.28082 1.77236 8.76785C1.96323 10.1412 2.60035 11.4138 3.58563 12.3895C4.57088 13.3652 5.84956 13.9899 7.22473 14.1673C8.5999 14.3448 9.99546 14.0651 11.1961 13.3715C11.986 12.9151 12.663 12.2961 13.1855 11.5615H11.5749C11.0831 11.5615 10.6845 11.1628 10.6845 10.6711C10.6845 10.1794 11.0831 9.78073 11.5749 9.78073H14.6712C14.6848 9.78047 14.6982 9.78047 14.7118 9.78073H15.1363C15.6281 9.78073 16.0267 10.1794 16.0267 10.6711V14.2326C16.0267 14.7243 15.6281 15.1229 15.1363 15.1229C14.6446 15.1229 14.246 14.7243 14.246 14.2326V13.0993C13.6418 13.8209 12.9126 14.4365 12.0868 14.9134C10.548 15.8025 8.75946 16.1608 6.99689 15.9333C5.2343 15.7059 3.59539 14.9053 2.3326 13.6548C1.06982 12.4042 0.253212 10.7732 0.00858427 9.01297C-0.0591013 8.52594 0.280858 8.07622 0.767915 8.00855Z" fill="black"/></svg>');
    }

    .btn_recalculate[disabled] {
        cursor: no-drop;
    }

    .btn_recalculate img {
        margin-left: 8px;
    }


    .result-wrapper_block {
        border-radius: 8px;

        background: var(--White, #FFF);

    }

    .result-wrapper_block>div {
        width: 50%;
    }


    .result-wrapper_block form {
        max-width: 480px;
        background-color: transparent;
        border-radius: 0;
    }

    .result-wrapper_block>div:first-child {
        border-right: 1px solid #D8D8D8;
        padding-right: 20px;
    }


    /* .result-wrapper_block>div:last-child>div {
        margin-left: auto;
    } */

    .result-wrapper h4 {
        margin-bottom: 24px;
    }

    .result-wrapper select,
    .result-wrapper input:not(.btn_yellow) {
        border-radius: 4px;
        border: 1px solid var(--Gray-300, #D8D8D8) !important;
        background: var(--White, #FFF) !important;
        margin-top: 16px;
        padding: 12px 16px;
        font-family: "Open Sans";
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: 20px;
    }

    .select {
        position: relative;
        cursor: pointer;
    }

    .select select {
        cursor: pointer;
    }

    .select input {
        display: block;
    }

    .select_drop {
        display: none;
        position: absolute;
        left: 0;
        top: 100%;
        z-index: 2;
        border: 1px solid #D8D8D8;
        padding: 0 16px 16px;
    }

    .select_drop.active {
        display: block;
    }

    .select_drop input {
        width: 100%;
        cursor: pointer;
        margin: 16px 0 0 0;
    }

    .select_drop input.active {
        background-color: #FFF5E2;
    }

    .result-wrapper_block>div>div.result-typ {
        max-width: 499px;
    }

    .result-wrapper_block .item_hover img {
        transform: scale(0.7);
    }

    .result-wrapper_block form {
        position: relative;
    }

    .result-wrapper_block form .wpcf7-spinner {
        position: absolute;
        bottom: 13px;
        left: 13px;
    }

    .result-wrapper_block form p {
        padding: 0;
    }

    .result-wrapper form input.btn_yellow {
        margin: 24px 0 0 0;
        font-family: "Gotham Pro";
        border-radius: 33px;
        background: #FDB948;
        box-shadow: 0px 6px 12px 0px rgba(43, 43, 43, 0.15);
        color: #000;
        text-align: center;
        font-size: 15px;
        font-style: normal;
        font-weight: 700;
        line-height: 48px;
    }

    #main-content .result_footer {
        margin-top: 56px;
        max-width: 908px;
        margin-inline: auto;
    }

    #main-content .result_footer p {
        margin-top: 24px;
        color: var(--Grey, #828282);
        color: #828282;
        text-align: center;
        font-family: "Open Sans";
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: 18px;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -khtml-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .result-typ h3 {
        padding-bottom: 24px;
        font-size: 32px;
        font-style: normal;
        font-weight: 700;
        line-height: 40px;
    }

    .result-typ .main-form__header {
        margin-bottom: 12px;
    }

    .result-wrapper_block hr,
    .result-typ hr {
        border-width: 0.5px;
        border-color: #EEE;
        background-color: transparent;
    }

    .result-wrapper_block hr {
        margin: 32px 0;
    }

    .result-typ hr {
        margin: 24px 0 40px;
    }

    #main-content .result-wrapper_block .list li p {
        font-size: 14px;
        font-weight: 600;
    }

    #main-content .result-typ hr+p {
        font-size: 18px;
        line-height: 26px;
        max-width: 420px;
    }

    #main-content .result-typ a:not(.btn_yellow) {
        font-size: 14px;
        font-weight: 600;
        line-height: 22px;
        text-decoration-line: underline;
    }

    #main-content .result-typ.result-typ_one ul {
        padding-bottom: 0;
    }

    .result-form h4 {
        padding-bottom: 8px;
        margin: 0;
        font-size: 18px;
        font-weight: 700;
        line-height: 26px;
    }

    .radio-dependants.input-wrapper.radio-input-wrapper label:first-child {
        min-width: 210px;
    }

    .radio-dependants.input-wrapper.radio-input-wrapper label:not(:last-child) {
        margin-right: 8px;
    }

    .btn_back {
        color: #000;
        font-size: 14px;
        font-style: normal;
        font-weight: 600;
        line-height: 24px;
        letter-spacing: -0.6px;
        text-transform: capitalize;
        padding: 4px;
        margin-right: 20px;
        background-color: transparent;
        border: none;
        margin-top: 40px;
        cursor: pointer;
    }

    .btn_back svg {
        margin-right: 12px;
        flex-shrink: 0;
    }

    #main-content .result-typ_two a.btn_yellow {

        width: 100%;
        margin-top: 40px;
        text-decoration: none;
        font-size: 18px;
        font-weight: 600;
    }

    .result-form select {
        appearance: none;
        background: url('<?php echo $assets; ?>16_arrow_down.svg') no-repeat right 16px center / 16px !important;
    }

    .result-wrapper_icons {
        display: flex;
        justify-content: center;
        gap: 29px;
        margin-top: 72px;
        overflow: hidden;
    }

    .result-wrapper_icons img {
        width: 156px;
        height: 130px;
        object-fit: contain;
    }

    .result_get .result-wrapper_icons .item_hover:first-child .item_tooltip.left:before {
        left: 17px;
    }

    .result_get .result-wrapper_icons .item_hover:first-child .item_tooltip.left:after {
        left: 18px;
    }

    .input-wrapper.select {
        padding: 0 !important;
        background-color: #fff;
        border-radius: 4px;
    }

    .input-wrapper.select:before {
        content: '';
        position: absolute;
        right: 16px;
        top: 50%;
        transform: translateY(-50%);
        width: 16px;
        height: 19px;
        pointer-events: none;
        background: url('<?php echo $assets; ?>16_arrow_down.svg') no-repeat center / 16px;
    }

    .result-form .wpcf7-not-valid-tip {
        display: none;
    }

    .result-form form.wpcf7-form.not-error .wpcf7-not-valid-tip {
        display: block;
    }

    @media (min-width: 992px) {

        .result-wrapper_block .item_hover img {
            transform: scale(1);
            height: 60px;
        }
    }

    @media screen and (max-width: 1052px) {
        .form-wrapper {
            padding: 40px 40px;
        }

        .form-wrapper .form>div {
            width: calc(50% - 20px);
            margin-right: 40px;
        }
    }

    @media screen and (max-width: 991px) {
        .form-wrapper {
            background-color: transparent;
            padding: 0;
            max-width: 100%;
        }


        .form-wrapper .input-box {
            padding: 24px 0 0 0;
            width: 100%;
        }

        .form-wrapper .form>div {
            width: 100%;
            margin: 0;
        }

        .radio-dependants.input-wrapper.radio-input-wrapper {
            flex-wrap: wrap;
        }

        .radio-dependants.input-wrapper.radio-input-wrapper label:first-child {
            margin-right: 0;
            margin-bottom: 8px;
            width: 100%;
            max-width: 100%;
        }

        .radio-dependants.input-wrapper.radio-input-wrapper label {
            width: calc(33.33% - 5.4px);
        }

        .input-box [data-field-name="dependents"] {
            order: 1;
        }

        .form-wrapper .form .btn_yellow {
            margin-top: 24px;
        }

        .result-wrapper_block {
            padding: 0 24px;
        }


        .result-wrapper_block li p {
            font-weight: 600;
        }

        .result-form h4 {
            padding-bottom: 0;
            font-size: 18px;
            line-height: 26px;
        }

        .result-wrapper_icons {

            flex-wrap: wrap;
            justify-content: space-between;
            max-width: 460px;
            margin: 0 auto 0;
        }

        .result-wrapper_icons img {

            max-width: 95px !important;
            height: 86px;
            object-fit: contain;

        }

        .item_tooltip {
            left: -32px;
            max-width: 343px;
        }

        .item_tooltip:after {
            left: 46px;
        }

        .item_tooltip:before {
            left: 45px;
        }

        .result-wrapper_icons .item_tooltip {
            left: 50%;
            max-width: 343px;
            transform: translateX(-50%);
        }

        .result-wrapper_icons .item_hover:first-child .item_tooltip {
            left: 0;
            transform: translateX(0);
        }

        .result-wrapper_icons .item_hover:nth-child(4) .item_tooltip {
            left: auto;
            right: 0;
            transform: none;
        }

        .result-wrapper_icons .item_hover:first-child .item_tooltip:after {
            left: 20px;
        }

        .result-wrapper_icons .item_hover:first-child .item_tooltip:before {
            left: 20px;
        }

        .result-wrapper_icons .item_hover:nth-child(4) .item_tooltip:after {
            left: auto;
            right: 21px;
        }

        .result-wrapper_icons .item_hover:nth-child(4) .item_tooltip:before {
            left: auto;
            right: 19px;
        }

        .result-wrapper_block {
            margin-bottom: 20px;
        }

        .result-wrapper_block form,
        .result-wrapper_block>div>div {
            max-width: 100%;
        }

        .result-wrapper_head {
            border-radius: 8px;
            background: var(--Yellow-light, #FFF5E2);
            padding: 24px;
            margin-bottom: 20px;
        }

        .result-wrapper_head p {
            font-size: 16px;
        }

        .result-wrapper .result-wrapper_head>h2 {
            font-size: 32px;
            line-height: 40px;
        }

        .btn_recalculate {
            margin: 16px 0 0 0;
            width: 100%;
            font-size: 16px;
            font-style: normal;
            font-weight: 600;
            line-height: 24px;
        }

        .result-wrapper_block .result-typ hr {
            margin: 8px 0 24px;
        }

        .result-wrapper_block .result-typ ul {
            padding-bottom: 0 !important;
        }

        .result-wrapper_block .result-typ ul li:last-child {
            margin-bottom: 0;
        }

        #main-content .result_footer p {
            padding-top: 0;
        }


        .result-typ h3 {
            font-size: 24px;
            line-height: 32px;
        }

        .input-title {
            font-size: 16px;
            line-height: 24px;
            color: var(--Grey-dark, #262626);
        }

        .result-wrapper_block hr {
            margin: 24px 0;
        }

        .btn_back,
        #main-content .result-typ_two a.btn_yellow {
            margin-top: 24px;
        }
    }

    @media screen and (max-width: 400px) {
        .result-wrapper_icons {
            max-width: 100%;
        }


    }

    .result-form-wrap {
        position: relative;
        display: flex;
        justify-content: center;
        background: linear-gradient(0deg, #DCDCDC 0%, #DCDCDC 100%), lightgray -117.541px 0px / 194.717% 100% no-repeat;
        padding: 0;
        padding-block: 66px;
        max-width: 659px;
        width: 100%;
    }

    .result-form-wrap::before {
        position: absolute;
        content: '';
        top: 120px;
        left: -35px;
        width: 70px;
        aspect-ratio: 1;
        background-image: url('data:image/svg+xml,<svg width="98" height="98" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="a" maskUnits="userSpaceOnUse" x=".7" y=".4" width="96.7" height="97.7" fill="%23000"><path fill="%23fff" d="M.7.4h96.7v97.7H.7z"/><path d="M7.9 53.9A48.7 48.7 0 0 1 76.5 48l-1.2-14.5a2.2 2.2 0 0 1 4.3-.3l1.7 19.6a2.2 2.2 0 0 1-2 2.3L59.7 57a2.2 2.2 0 0 1-.4-4.3l14.5-1.2a44.4 44.4 0 0 0-62.6 5.2A2.2 2.2 0 1 1 7.9 54Z"/></mask><path d="M7.9 53.9A48.7 48.7 0 0 1 76.5 48l-1.2-14.5a2.2 2.2 0 0 1 4.3-.3l1.7 19.6a2.2 2.2 0 0 1-2 2.3L59.7 57a2.2 2.2 0 0 1-.4-4.3l14.5-1.2a44.4 44.4 0 0 0-62.6 5.2A2.2 2.2 0 1 1 7.9 54Z" fill="%23000"/><path d="M7.9 53.9A48.7 48.7 0 0 1 76.5 48l-1.2-14.5a2.2 2.2 0 0 1 4.3-.3l1.7 19.6a2.2 2.2 0 0 1-2 2.3L59.7 57a2.2 2.2 0 0 1-.4-4.3l14.5-1.2a44.4 44.4 0 0 0-62.6 5.2A2.2 2.2 0 1 1 7.9 54Z" stroke="%23fff" stroke-width="8" mask="url(%23a)"/></svg>');
        background-repeat: no-repeat;
        background-size: contain;
    }



    .result-form {
        margin: 0 !important;
    }

    .result__content {
        margin-top: 109px;
    }

    .result__subtitle {
        color: #000;
        font-family: "Open Sans";
        font-size: 24px;
        font-weight: 600;
        line-height: 32px;
        letter-spacing: -0.36px;
        padding: 0;
    }

    .result__subtitle br.mobile {
        display: none;
    }

    .result__subtitle br.desktop {
        display: block;
    }

    .result__subtitle span {
        color: #E99202;
    }

    .result__title {
        margin-top: 24px;
        padding: 0;
    }

    .result__title,
    .result__title div:not(.result__increased) {
        color: #000;
        font-family: "Open Sans";
        font-size: 36px;
        font-weight: 600;
        line-height: 52px;
        letter-spacing: -0.54px;
    }

    .result__increased {
        color: #E99202;
        font-family: "Open Sans";
        font-size: 86px;
        font-weight: 700;
        line-height: 86px;
        letter-spacing: -1.29px;
    }

    .looking-form,
    .main-form,
    .result-typ {
        display: flex;
        flex-direction: column;
        gap: 20px;
        font-family: "Open Sans";
        border-radius: 24px;
        background: #FFF;
        width: 458px;
        max-width: 100%;
        padding: 24px;
    }

    .result-typ {
        display: none;
    }

    .looking-form__title {
        color: #000;
        font-size: 36px;
        font-weight: 700;
        line-height: 48px;
        letter-spacing: -0.54px;
    }

    .looking-form__text {
        color: #000;
        font-size: 16px;
        font-weight: 600;
        line-height: 24px;
        letter-spacing: -0.24px;
    }

    .looking-form__mob-text {
        display: none;
    }

    .looking-form__list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .looking-form__list-item {
        display: flex;
        align-items: center;
        gap: 11px;
        border-radius: 12px;
        border: 1px solid #D8D8D8;
        background: #F8F8F8;
        padding: 24px 26px;
        color: #000;
        font-family: "Open Sans";
        font-size: 18px;
        font-style: normal;
        font-weight: 400;
        line-height: 22px;
        cursor: pointer;
        max-height: 72px;
    }

    .looking-form__list-item::before {
        content: '';
        flex-shrink: 0;
        width: 22px;
        height: 22px;
        background-size: contain;
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M0 11C0 4.928 4.928 0 11 0C17.072 0 22 4.928 22 11C22 17.072 17.072 22 11 22C4.928 22 0 17.072 0 11ZM2.20006 10.9997C2.20006 15.8617 6.13806 19.7997 11.0001 19.7997C15.8621 19.7997 19.8001 15.8617 19.8001 10.9997C19.8001 6.13771 15.8621 2.19971 11.0001 2.19971C6.13806 2.19971 2.20006 6.13771 2.20006 10.9997Z" fill="black"/></svg>');
        background-repeat: no-repeat;
    }

    .looking-form__list-item input {
        position: absolute;
        visibility: hidden;
    }

    .main-form {
        gap: 0;
    }

    .main-form__header {
        display: flex;
        justify-content: space-between;
        height: 40px;
    }

    .main-form__back {
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

    .main-form__back::before {
        content: '';
        display: block;
        width: 18px;
        height: 18px;
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M8.22711 2L1 9.22712L8.22711 16.4542L9.60562 15.0757L4.73179 10.2019H17V8.25235H4.73179L9.60562 3.37853L8.22711 2Z" fill="black"/></svg>');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    .main-form__count {
        color: #000;
        font-size: 18px;
        font-weight: 700;
        line-height: 26px;
    }

    .main-form__text {
        margin-top: 8px;
        color: #444;
        font-size: 14px;
        font-weight: 400;
        line-height: 24px;
    }

    .main-form__form {
        margin-top: 24px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .main-form__form label {
        color: var(--Black, #000);
        font-variant-numeric: lining-nums tabular-nums;

        font-size: 12px;
        font-weight: 400;
        line-height: 14px;
    }

    .main-form__form input:not(.btn_yellow) {
        margin-top: 9px !important;
        border-radius: 12px !important;
        border: 1px solid #D8D8D8 !important;
        background: #F4F4F4 !important;
        height: 42px !important;
    }

    .main-form__form input:not(.btn_yellow)::placeholder {
        display: none !important;
        color: transparent !important;
    }

    .main-form__select {
        display: none;
    }

    .main-form__form input.btn_yellow {
        margin: 0 !important;
        margin-top: 4px !important;
    }

    .main-form .rating {
        margin-top: 24px;
    }

    @media (min-width: 992px) {
        .result-wrapper_block {
            margin-right: calc(50% - 51vw);
        }
    }

    @media (min-width: 1439px) {
        .result-wrapper_block {
            margin-right: -120px;
        }
    }

    @media (min-width: 992px) {
        .header {
            border-bottom: none !important;
        }
    }

    @media screen and (max-width: 991px) {


        .result-wrapper_block {
            padding: 0 !important;
            margin-right: auto;
        }

        .result__content {
            margin-top: 24px;
            padding-bottom: 32px;
        }

        .result_get {
            width: 100% !important;
            border: none !important;
            padding-right: 0 !important;
        }

        .result__subtitle {

            font-size: 16px;
            font-weight: 600;
            line-height: 28px;
            letter-spacing: -0.24px;
        }

        .result__subtitle br.desktop {
            display: none;
        }

        .result__subtitle br.mobile {
            display: block;
        }

        .result__title {
            margin-top: 18px;
        }

        .result__title,
        .result__title div:not(.result__increased) {

            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
            letter-spacing: -0.36px;
        }

        .result__title div:not(div:first-child) {
            margin-top: 8px;
        }

        .result__increased {
            font-size: 56px;
            font-weight: 700;
            line-height: 56px;
            letter-spacing: -0.84px;
        }

        .result-form-wrap {
            justify-content: center;
            max-width: 100%;
            width: 100% !important;
            padding-block: 16px;
            padding-inline: 0 !important;
            z-index: 2;
        }

        .result-form-wrap::before {
            display: none;

        }

        .result-form-wrap::after {
            position: absolute;
            top: 0;
            left: -16px;
            content: '';
            width: calc(100vw);
            height: 100%;
            background: linear-gradient(0deg, #DCDCDC 0%, #DCDCDC 100%), lightgray -117.541px 0px / 194.717% 100% no-repeat;
            z-index: -1;
        }

        .looking-form,
        .main-form,
        .result-typ {
            position: relative;
            padding: 20px;
            gap: 0;
        }

        :is(.main-form, .looking-form)::after {
            position: absolute;
            content: '';
            top: -35px;
            left: auto;
            right: -16px;
            width: 62px;
            rotate: 90deg;
            aspect-ratio: 1;
            background-image: url('data:image/svg+xml,<svg width="98" height="98" fill="none" xmlns="http://www.w3.org/2000/svg"><mask id="a" maskUnits="userSpaceOnUse" x=".7" y=".4" width="96.7" height="97.7" fill="%23000"><path fill="%23fff" d="M.7.4h96.7v97.7H.7z"/><path d="M7.9 53.9A48.7 48.7 0 0 1 76.5 48l-1.2-14.5a2.2 2.2 0 0 1 4.3-.3l1.7 19.6a2.2 2.2 0 0 1-2 2.3L59.7 57a2.2 2.2 0 0 1-.4-4.3l14.5-1.2a44.4 44.4 0 0 0-62.6 5.2A2.2 2.2 0 1 1 7.9 54Z"/></mask><path d="M7.9 53.9A48.7 48.7 0 0 1 76.5 48l-1.2-14.5a2.2 2.2 0 0 1 4.3-.3l1.7 19.6a2.2 2.2 0 0 1-2 2.3L59.7 57a2.2 2.2 0 0 1-.4-4.3l14.5-1.2a44.4 44.4 0 0 0-62.6 5.2A2.2 2.2 0 1 1 7.9 54Z" fill="%23000"/><path d="M7.9 53.9A48.7 48.7 0 0 1 76.5 48l-1.2-14.5a2.2 2.2 0 0 1 4.3-.3l1.7 19.6a2.2 2.2 0 0 1-2 2.3L59.7 57a2.2 2.2 0 0 1-.4-4.3l14.5-1.2a44.4 44.4 0 0 0-62.6 5.2A2.2 2.2 0 1 1 7.9 54Z" stroke="%23fff" stroke-width="8" mask="url(%23a)"/></svg>');
            background-repeat: no-repeat;
            background-size: contain;

        }

        .looking-form__title {
            font-size: 26px;
            font-weight: 700;
            line-height: 32px;
            letter-spacing: -0.39px;
        }

        .looking-form__mob-text {
            display: block;
            margin-top: 6px;
            color: #444;
            font-size: 14px;
            font-weight: 400;
            line-height: 24px;
        }

        .looking-form__text {
            margin-top: 24px;
            font-size: 18px;
            line-height: 26px;
        }

        .looking-form__list {
            margin-top: 12px;
            gap: 16px;
        }

        .looking-form__list-item {
            gap: 10px;
            height: 60px;
            font-size: 16px;
            font-weight: 400;
            line-height: 19px;
            padding: 20px 16px;
        }

        .looking-form__list-item::before {
            width: 18px;
            height: 18px;
        }

        .main-form__header {
            height: 22px;
        }

        .main-form__back {
            font-size: 14px;
            font-weight: 700;
            line-height: 22px
        }

        .main-form__count {
            font-size: 14px;
            font-weight: 700;
            line-height: 22px;
        }

        .main-form__text {
            margin-top: 12px;
        }

        #main-content .result_footer {
            margin-top: 32px;
        }

        .result_footer p {
            margin-top: 0;
        }
    }

    /* remove this code */
    /* .form-wrapper {
        display: none !important;
    }

    .result-wrapper {
        display: block !important;
    } */
</style>


<section class="calc">
    <div class="calculator-wrapper">
        <div class="form-wrapper">
            <?php
            if (strpos($page_data->title, "Mortgage calculator") !== false) {
                echo '<div class="main-description">' . $page_data->content . '</div>';
            } else {
                echo '<h2>Calculate my borrowing capacity</h2>';
            }
            ?>
            <div class="form flex-lg">
                <div>
                    <div class="input-box" data-field-name="marital_status">
                        <div class="input-title">Are you applying as a couple or a single person?</div>
                        <div class="input-wrapper radio-input-wrapper flex" data-validation-msg="">
                            <label class="radio-input">
                                <input type="radio" name="marital_status" value="3">
                                <span>Couple</span>
                            </label>
                            <label class="radio-input">
                                <input type="radio" name="marital_status" value="5">
                                <span>Single person</span>
                            </label>
                        </div>
                    </div>
                    <div class="input-box" data-field-name="income">
                        <div class="input-title">What's your total annual income before tax? </div>
                        <div class="input-description"><b>If you're applying as a couple, include your partner’s income
                                too.</b><br>
                            Include all types of income: bonuses, rental income, overtime etc.</div>
                        <div class="input-wrapper money-input" data-validation-msg="">
                            <input type="text" placeholder="e.g. 50,000" data-min-value="25000">
                        </div>
                    </div>
                    <div class="input-box" data-field-name="deposit">
                        <div class="input-title">How much is your deposit?</div>
                        <div class="input-description">The amount you have saved for a deposit.</div>
                        <div class="input-wrapper money-input" data-validation-msg="">
                            <input type="text" class="money-input_2" placeholder="e.g. 40,000" data-min-value="30000">
                        </div>
                    </div>
                </div>
                <div>
                    <div class="input-box" data-field-name="first_owner">
                        <div class="input-title">Are you a first home owner?</div>
                        <div class="input-wrapper radio-input-wrapper flex" data-validation-msg="">
                            <label class="radio-input">
                                <input type="radio" name="first_owner" value="1">
                                <span>Yes</span>
                            </label>
                            <label class="radio-input">
                                <input type="radio" name="first_owner" value="0">
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    <div class="input-box" data-field-name="dependents">
                        <div class="input-title">How many dependants do you have?</div>
                        <div class="input-description">A dependant is anyone under the age of 18 who relies on you
                            financially.</div>
                        <div class="input-wrapper radio-input-wrapper radio-dependants flex" data-validation-msg="">
                            <label class="radio-input">
                                <input type="radio" name="dependents" value="1">
                                <span>I don’t have dependants</span>
                            </label>
                            <label class="radio-input">
                                <input type="radio" name="dependents" value="2">
                                <span>1</span>
                            </label>
                            <label class="radio-input">
                                <input type="radio" name="dependents" value="7">
                                <span>2</span>
                            </label>
                            <label class="radio-input">
                                <input type="radio" name="dependents" value="11">
                                <span>3+</span>
                            </label>
                        </div>
                    </div>
                    <div class="input-box" data-field-name="place">
                        <div class="input-title">What state are you buying in?</div>
                        <div class="input-wrapper select" data-validation-msg="">
                            <select>
                                <option value="" disabled="" selected="">Select a State</option>
                                <option value="NSW">New South Wales (NSW)</option>
                                <option value="VIC">Victoria (VIC)</option>
                                <option value="QLD">Queensland (QLD)</option>
                                <option value="ACT">Australian Capital Territory (ACT)</option>
                                <option value="WA">Western Australia (WA)</option>
                                <option value="SA">South Australia (SA)</option>
                                <option value="TAS">Tasmania (TAS)</option>
                                <option value="NT">Northern Territory (NT)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="button" class="calculate-action btn_yellow" onclick="do_caculate_borrowing_capacity()">
                    Calculate my borrowing capacity
                    <img class="d-lg-none" src="<?php echo $assets; ?>16_arrow_r_black.svg" alt="arrow image">
                </button>
            </div>
        </div>
        <div class="result-wrapper">

            <div class="result-wrapper_block flex-lg">

                <div class="result_get">
                    <button type="button" class="btn_recalculate">Recalculate</button>
                    <div class="result__content">
                        <h2 class="result__subtitle">Based on your answers, <br class="mobile"> you may be able <br class="desktop"> to borrow up to <span data-result-field="buy"
                                class="c-yellow">$---,---</span></h2>
                        <h2 class="result__title">
                            <div>Increase your chances of approval and increase your loan up to</div>
                            <div class="result__increased" data-result-field="increased"></div>
                            <div>with our help!</div>
                        </h2>
                        <!-- <ul class="list">
                            <li class="flex">
                                <img src="<?php echo $assets; ?>24_checkmark.svg" alt="checkmark">
                                <p>Finding the best possible deal for YOU across our 30+ Australian banks & lender
                                    networks.</p>
                            </li>
                            <li class="flex">
                                <img src="<?php echo $assets; ?>24_checkmark.svg" alt="checkmark">
                                <p>Give you full transparency, and personalised advice with the best loan products in
                                    your situation.</p>
                            </li>
                            <li class="flex">
                                <img src="<?php echo $assets; ?>24_checkmark.svg" alt="checkmark">
                                <p>Helping you understand the entire process, and what you need to do next.</p>
                            </li>
                        </ul>
                        <hr> -->
                        <?php
                        // if (!$isMobile) {
                        //     echo $htmlIcons;
                        // }
                        ?>
                    </div>
                </div>
                <div class="result-form-wrap">
                    <div class="result-form">

                        <div data-step="1" style="display:block">
                            <div class="looking-form">
                                <div class="looking-form__title">Get a Free Assessment</div>
                                <div class="looking-form__mob-text">Answer the questions below</div>
                                <div class="looking-form__text">What are you looking to do?</div>
                                <div class="looking-form__list">
                                    <label
                                        class="looking-form__list-item"

                                        data-type="homePurchaseProperty">
                                        Purchase a property
                                        <input value="Purchase A Property" name="calculator-step-0" type="radio" />
                                    </label>
                                    <label
                                        class="looking-form__list-item looking-form__list-item_fail">

                                        Build <input value="Build" name="calculator-step-0" type="radio" />
                                    </label>
                                    <label
                                        class="looking-form__list-item looking-form__list-item_fail"

                                        data-type="commercial">
                                        Commercial or business loan
                                        <input value="Commercial Or Business Loan" name="calculator-step-0" type="radio" />
                                    </label>
                                    <label
                                        class="looking-form__list-item"
                                        data-type=" refinance">
                                        Refinance a loan
                                        <input value="Refinance A Loan" name="calculator-step-0" type="radio" />
                                    </label>
                                </div>

                            </div>
                        </div>
                        <div data-step="2" style="display:none">
                            <div class="main-form">
                                <div class="main-form__header">
                                    <button class="main-form__back">Back</button>
                                    <div class="main-form__count">
                                        <span>2</span> / 2
                                    </div>
                                </div>
                                <div class="main-form__text">Leave your contact info below for a free assessment</div>
                                <?php echo do_shortcode('[contact-form-7 id="68942" title="Get a free expert advice in 4 hours"]'); ?>

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

                            </div>

                        </div>

                    </div>
                    <div class="result-typ result-typ_one">
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
                    <div class="result-typ result-typ_two">
                        <div class="main-form__header">
                            <button class="main-form__back">Back</button>
                            <div class="main-form__count">
                                <span>2</span> / 2
                            </div>
                        </div>
                        <h3>Thank you for your interest.</h3>
                        <p>Here at Hunter Galloway, we have a dedicated specialist team to look after our more
                            complicated loans.</p>
                        <p>Due to the complex nature of building loans, we are only able to take on a limited number of
                            these at one time.</p>
                        <p>Unfortunately, our team is currently at maximum capacity.</p>
                        <p>It would be irresponsible of us to take on your home loan at this time as we would not be
                            able to give you the quality of service that you deserve.</p>
                        <p>We would recommend contacting another mortgage broker to see if they have the capacity to
                            assist with your loan.</p>
                        <p>Sorry that we aren't able to help.</p>
                        <div class="items-center">
                            <a href="/" class="btn_yellow">To the Home page</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php

            echo $htmlIcons;

            ?>
            <div class="result_footer">
                <p>Calculations are estimates provided as a guide only, and are not a loan approval. Applications are
                    subject to credit approval, satisfactory security and minimum deposit requirements. Conditions apply
                    to all loan options.
                    <br><br>
                    Hunter Galloway Finance Pty Ltd T/A Mortgage Broker Brisbane - Hunter Galloway ABN&nbsp;20&nbsp;605&nbsp;252&nbsp;926.Credit Representative 476903 is authorised under Australian Credit Licence 389328. Your full
                    financial situation would need to be reviewed prior to acceptance of any offer or product.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    const resultForm = $el('.result-form');
    const stepOne = resultForm.querySelector('[data-step="1"]');
    const stepTwo = resultForm.querySelector('[data-step="2"]');
    const inputs = stepOne.querySelectorAll('input[type="radio"]');

    const backBtn = $el('.main-form__back');
    inputs.forEach(input => {

        input.addEventListener('change', (e) => {
            const target = e.target;


            if (!target) return;
            const value = target?.value;
            target.closest('label').dataset.checked = true;

            if (!value) return;

            const select = resultForm.querySelector('select[name="transaction_type"]');
            select.value = value;
            select.dispatchEvent(new Event('change'));

            stepOne.style.display = 'none';
            stepTwo.style.display = 'block';
            target.checked = false;
        })
    })

    backBtn.addEventListener('click', () => {
        stepOne.style.display = 'block';
        stepTwo.style.display = 'none';
    })
</script>

<script>
    const typBlockOne = $el('.result-typ_one');
    const typBlockTwo = $el('.result-typ_two');


    const footerResult = $el('.result_footer');
    const form = $el('.result-form');
    const result_get = $el('.result_get');
    const result_icons = $el('.result-wrapper_icons');

    $$el('.form-wrapper .form input, .form-wrapper .form select').forEach(item => {
        item.addEventListener('input', (e) => {
            if (item.closest('.input-wrapper.validation-failed')) {
                item.closest('.input-wrapper.validation-failed').classList.remove('validation-failed')
            }
        })
    })

    $el('.result-typ_two .main-form__back').addEventListener('click', () => {
        typBlockOne.style = '';
        typBlockTwo.style = '';
        footerResult.style = '';
        form.style = '';
        stepOne.style.display = 'block';
        stepTwo.style.display = 'none';
        if (isMobile) {
            result_get.style = '';
            result_icons.style = '';
        }

        $el('.wpcf7-form.not-error')?.classList.remove("not-error");

        jQuery(function($) {
            $('html, body').animate({
                scrollTop: $('.result-wrapper').offset().top - (isMobile ? 71 : 0)
            }, 250);
        })
    })

    function sentForm() {
        if (form.querySelector('select').value == 'Build') {
            typBlockTwo.style.display = 'block';

            footerResult.style.display = 'none';
        } else {
            typBlockOne.style.display = 'block';
        }
        form.style.display = 'none';

        if (isMobile) {
            result_get.style.display = 'none';
            result_icons.style.display = 'none';
        }

        jQuery(function($) {
            $('html, body').animate({
                scrollTop: $('.result-wrapper').offset().top - (isMobile ? 71 : 0)
            }, 250);
        })

        $el('.btn_recalculate').disabled = false;
    }

    document.addEventListener('wpcf7mailsent', function(event) {
        if (event.detail.contactFormId == 68942) {
            sentForm()
        }
    }, false);

    $el('.result-form select[name="transaction_type"]').addEventListener('change', (e) => {
        let target = e.target
        if (target.value == 'Build') {
            sentForm()
            target.value = '';
        }
    })

    document.addEventListener('wpcf7mailfailed', function(event) {
        $el('.btn_recalculate').disabled = false;
    })

    $el('.result-form form.wpcf7-form .wpcf7-submit').addEventListener('click', () => {
        $el('.btn_recalculate').disabled = true;
    })

    $el('.result-form form.wpcf7-form').addEventListener('submit', function(event) {

        var formTarget = event.target;
        var nameField = formTarget.querySelector('input[name="text-name"]');
        var emailField = formTarget.querySelector('input[name="text-email"]');
        var phoneField = formTarget.querySelector('input[name="text-phone"]');
        var selectField = formTarget.querySelector('select[name="transaction_type"]');

        var errorMessages = {};

        if (!nameField.value.trim()) {
            errorMessages['text-name'] = 'Please enter your name.';
        }
        if (!selectField.value.trim()) {
            errorMessages['transaction_type'] = 'Please choose an option.';
        }

        if (!emailField.value.trim()) {
            errorMessages['text-email'] = 'Please enter a valid email address.';
        } else {
            var emailRegex = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
            if (!emailRegex.test(emailField.value.trim())) {
                errorMessages['text-email'] = 'Please enter a valid email address. ';
            }
        }

        if (!phoneField.value.trim()) {
            errorMessages['text-phone'] = 'Please enter your phone number.';
        } else {
            var phoneRegex = /^(04\d{2}\s\d{3}\s\d{3}|\d{2}\s\d{4}\s\d{4})$/;
            if (!phoneRegex.test(phoneField.value.trim())) {
                errorMessages['text-phone'] = 'Please enter a valid phone number.';
            }
        }

        // Remove existing error messages
        var existingErrorTips = $$el('.not-valid-tip');

        existingErrorTips.forEach(function(errorTip) {
            errorTip.remove();
        });

        // Create new error messages
        Object.keys(errorMessages).forEach(function(fieldName) {
            var field = formTarget.querySelector('.wpcf7-form-control-wrap [name="' + fieldName + '"]');
            var errorTip = document.createElement('span');
            errorTip.classList.add('not-valid-tip');
            errorTip.textContent = errorMessages[fieldName];
            field.insertAdjacentElement('afterend', errorTip);
        });

        // If there are no error messages, proceed with form submission
        if (Object.keys(errorMessages).length === 0) {
            console.log('is typ')

            formTarget.classList.add("not-error")
        } else {
            event.preventDefault();
            event.stopImmediatePropagation(); // Prevent form submission

            formTarget.classList.remove("not-error")

            console.log('not typ')
            $el('.btn_recalculate').disabled = false;
            formTarget.querySelector('.wpcf7-submit').style = '';
        }

        // }
    }, false);

    var phoneInput = $el('.result-form input[name="text-phone"]');

    let value = '';
    phoneInput.addEventListener('input', function(event) {
        var input = event.target;
        if (input.value.length <= 12) {
            var formattedPhoneNumber = formatPhoneNumber(input.value);
            input.value = formattedPhoneNumber;
            value = formattedPhoneNumber;
        } else {
            input.value = value;
        }
    });

    phoneInput.addEventListener('keydown', function(event) {
        var key = event.key;
        var selectionStart = phoneInput.selectionStart;
        var selectionEnd = phoneInput.selectionEnd;
        var value = phoneInput.value;

        if (key === 'Backspace' || key === 'Delete') {
            // If Backspace or Delete is pressed, remove the previous or next character respectively
            if (key === 'Backspace' && selectionStart > 0) {
                phoneInput.value = value.slice(0, selectionStart - 1) + value.slice(selectionEnd);
                phoneInput.setSelectionRange(selectionStart - 1, selectionStart - 1);
            } else if (key === 'Delete' && selectionEnd < value.length) {
                phoneInput.value = value.slice(0, selectionStart) + value.slice(selectionEnd + 1);
                phoneInput.setSelectionRange(selectionStart, selectionStart);
            }
            event.preventDefault(); // Prevent default behavior (e.g., removing entire value)
        }
    });

    window.addEventListener('scroll', () => {
        const formWrapperRes = $el('.result-wrapper_block');
        const btnYellow = $el('.result-form .btn_yellow');

        const formWrapper = $el('.form-wrapper');
        const btnformWrapper = $el('.calculate-action')

        if (btnYellow && formWrapper && isMobile) {

            const formWrapperResRect = formWrapperRes.getBoundingClientRect();
            const btnYellowRect = btnYellow.getBoundingClientRect();

            const formWrapperRect = formWrapper.getBoundingClientRect();
            const btnformWrapperRect = btnformWrapper.getBoundingClientRect()

            const windowHeight = window.innerHeight || document.documentElement.clientHeight;

            if (
                (formWrapperResRect.top < windowHeight && btnYellowRect.bottom > 75) ||
                (formWrapperRect.top < windowHeight && btnformWrapperRect.bottom > 75)
            ) {
                $el('.footer_button').hidden = true;
            } else {
                $el('.footer_button').hidden = false;
            }
        }
    });
</script>

<script>
    $el('div[data-field-name="income"] input').addEventListener('input', (e) => {
        e.target.value = addCommas(e.target.value.split(',').join(''))
    })
    $el('div[data-field-name="deposit"] input').addEventListener('input', (e) => {
        e.target.value = addCommas(e.target.value.split(',').join(''))
    })
</script>


<script>
    let business_logic = {
        src_constants: {
            fhogs: {
                'NSW': {
                    fhog: 10000,
                    fhog_max_pp: 550000,
                },
                'VIC': {
                    fhog: 10000,
                    fhog_max_pp: 750000,
                },
                'QLD': {
                    fhog: 20000,
                    fhog_max_pp: 750000,
                },
                'ACT': {
                    fhog: 7000,
                    fhog_max_pp: 750000,
                },
                'WA': {
                    fhog: 10000,
                    fhog_max_pp: 750000,
                },
                'SA': {
                    fhog: 15000,
                    fhog_max_pp: 570000,
                },
                'TAS': {
                    fhog: 20000,
                    fhog_max_pp: 99999999,
                },
                'NT': {
                    fhog: 26000,
                    fhog_max_pp: 99999999,
                },
            },
            tax_rates: [{
                    from: 0,
                    to: 18200,
                    upfront: 0,
                    persent: 0.0,
                },
                {
                    from: 18201,
                    to: 37000,
                    upfront: 0,
                    persent: 0.19,
                },
                {
                    from: 37001,
                    to: 87000,
                    upfront: 3572,
                    persent: 0.325,
                },
                {
                    from: 87001,
                    to: 180000,
                    upfront: 19822,
                    persent: 0.37,
                },
                {
                    from: 180001,
                    to: 9999999999999,
                    upfront: 54232,
                    persent: 0.45,
                },
            ],
            hem_income_ranges: {
                3: {
                    from: 0,
                    to: 23603
                },
                4: {
                    from: 23603,
                    to: 29504
                },
                5: {
                    from: 29504,
                    to: 35405
                },
                6: {
                    from: 35405,
                    to: 41306
                },
                7: {
                    from: 41306,
                    to: 47207
                },
                8: {
                    from: 47207,
                    to: 53108
                },
                9: {
                    from: 53108,
                    to: 59009
                },
                10: {
                    from: 59009,
                    to: 70810
                },
                11: {
                    from: 70810,
                    to: 82612
                },
                12: {
                    from: 82612,
                    to: 94414
                },
                13: {
                    from: 94414,
                    to: 106215
                },
                14: {
                    from: 106215,
                    to: 118017
                },
                15: {
                    from: 118017,
                    to: 141620
                },
                16: {
                    from: 141620,
                    to: 165224
                },
                17: {
                    from: 165224,
                    to: 188827
                },
                18: {
                    from: 188827,
                    to: 236034
                },
                19: {
                    from: 236034,
                    to: 9999999999
                },
            },
            hem_values: {
                3: {
                    3: 1692,
                    4: 1692,
                    5: 1692,
                    6: 1692,
                    7: 1765,
                    8: 1941,
                    9: 1993,
                    10: 2045,
                    11: 2175,
                    12: 2304,
                    13: 2390,
                    14: 2475,
                    15: 2503,
                    16: 2531,
                    17: 2564,
                    18: 2656,
                    19: 2856,
                },
                6: {
                    3: 1908,
                    4: 1908,
                    5: 1908,
                    6: 1908,
                    7: 1981,
                    8: 2157,
                    9: 2209,
                    10: 2261,
                    11: 2391,
                    12: 2520,
                    13: 2606,
                    14: 2691,
                    15: 2719,
                    16: 2747,
                    17: 2780,
                    18: 2872,
                    19: 3072,
                },
                21: {
                    3: 2365,
                    4: 2365,
                    5: 2365,
                    6: 2365,
                    7: 2438,
                    8: 2614,
                    9: 2666,
                    10: 2718,
                    11: 2848,
                    12: 2977,
                    13: 3063,
                    14: 3148,
                    15: 3176,
                    16: 3204,
                    17: 3237,
                    18: 3329,
                    19: 3529,
                },
                33: {
                    3: 2642,
                    4: 2642,
                    5: 2642,
                    6: 2642,
                    7: 2715,
                    8: 2891,
                    9: 2943,
                    10: 2995,
                    11: 3125,
                    12: 3254,
                    13: 3340,
                    14: 3425,
                    15: 3453,
                    16: 3481,
                    17: 3514,
                    18: 3606,
                    19: 3806,
                },
                5: {
                    3: 1127,
                    4: 1193,
                    5: 1171,
                    6: 1202,
                    7: 1307,
                    8: 1381,
                    9: 1503,
                    10: 1486,
                    11: 1656,
                    12: 1814,
                    13: 1849,
                    14: 1918,
                    15: 2141,
                    16: 2233,
                    17: 2360,
                    18: 2482,
                    19: 3229,
                },
                10: {
                    3: 1398,
                    4: 1464,
                    5: 1442,
                    6: 1473,
                    7: 1578,
                    8: 1652,
                    9: 1779,
                    10: 1757,
                    11: 1932,
                    12: 2089,
                    13: 2124,
                    14: 2194,
                    15: 2417,
                    16: 2508,
                    17: 2635,
                    18: 2757,
                    19: 3509,
                },
                35: {
                    3: 1726,
                    4: 1792,
                    5: 1770,
                    6: 1800,
                    7: 1905,
                    8: 1975,
                    9: 2102,
                    10: 2080,
                    11: 2255,
                    12: 2412,
                    13: 2447,
                    14: 2513,
                    15: 2736,
                    16: 2827,
                    17: 2954,
                    18: 3076,
                    19: 3819,
                },
                55: {
                    3: 1875,
                    4: 1940,
                    5: 1918,
                    6: 1945,
                    7: 2050,
                    8: 2124,
                    9: 2251,
                    10: 2229,
                    11: 2399,
                    12: 2556,
                    13: 2591,
                    14: 2661,
                    15: 2884,
                    16: 2976,
                    17: 3103,
                    18: 3225,
                    19: 3968,
                },
            },
            stamps: {
                'NT': {
                    fhog: 26000,
                    duty_rates: [{
                            from: 0,
                            to: 100000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0183
                        },
                        {
                            from: 100001,
                            to: 200000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0216
                        },
                        {
                            from: 200001,
                            to: 300000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0281
                        },
                        {
                            from: 300001,
                            to: 400000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0347
                        },
                        {
                            from: 400001,
                            to: 525000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0413
                        },
                        {
                            from: 525001,
                            to: 2999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0495
                        },
                        {
                            from: 3000000,
                            to: 4999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0575
                        },
                        {
                            from: 5000000,
                            to: 999999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0425
                        },
                    ],
                    // fho_duty_rates not used
                },
                'TAS': {
                    fhog: 20000,
                    duty_rates: [{
                            from: 0,
                            to: 75000,
                            upfront: 435,
                            threshold: 25000,
                            percent: 0.0225
                        },
                        {
                            from: 75001,
                            to: 200000,
                            upfront: 1560,
                            threshold: 75000,
                            percent: 0.0350
                        },
                        {
                            from: 200001,
                            to: 375000,
                            upfront: 5935,
                            threshold: 200000,
                            percent: 0.0400
                        },
                        {
                            from: 375001,
                            to: 725000,
                            upfront: 12935,
                            threshold: 375000,
                            percent: 0.0425
                        },
                        {
                            from: 725001,
                            to: 999999999,
                            upfront: 27810,
                            threshold: 725000,
                            percent: 0.0450
                        },
                    ],
                    // fho_duty_rates not used
                },
                'NSW': {
                    fhog: 10000,
                    max_pp_fhog: 550000,
                    fhog_workings_enable: true,
                    fhog_workings_by_5_persent: true,
                    duty_rates: [{
                            from: 0,
                            to: 14000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0125
                        },
                        {
                            from: 14001,
                            to: 30000,
                            upfront: 175,
                            threshold: 14000,
                            percent: 0.015
                        },
                        {
                            from: 30001,
                            to: 80000,
                            upfront: 415,
                            threshold: 30000,
                            percent: 0.0175
                        },
                        {
                            from: 80001,
                            to: 300000,
                            upfront: 1290,
                            threshold: 80000,
                            percent: 0.035
                        },
                        {
                            from: 300001,
                            to: 1000000,
                            upfront: 8890,
                            threshold: 300000,
                            percent: 0.045
                        },
                        {
                            from: 1000001,
                            to: 3000000,
                            upfront: 40490,
                            threshold: 1000000,
                            percent: 0.055
                        },
                        {
                            from: 3000001,
                            to: 999999999,
                            upfront: 150490,
                            threshold: 3000000,
                            percent: 0.07
                        },
                    ],
                    fho_duty_rates: [{
                            from: 0,
                            to: 650000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0
                        },
                        {
                            from: 650000,
                            to: 1000000,
                            upfront: 8890,
                            threshold: 300000,
                            percent: 0.045
                        },
                        {
                            from: 1000001,
                            to: 3000000,
                            upfront: 40490,
                            threshold: 1000000,
                            percent: 0.055
                        },
                        {
                            from: 3000001,
                            to: 999999999,
                            upfront: 150490,
                            threshold: 3000000,
                            percent: 0.07
                        },
                    ],
                },
                'VIC': {
                    fhog: 10000,
                    max_pp_fhog: 750000,
                    fhog_workings_enable: true,
                    fhog_workings_by_5_persent: false,
                    use_total_for_costs_at_max: true,
                    duty_rates: [{
                            from: 0,
                            to: 25000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.014
                        },
                        {
                            from: 25001,
                            to: 130000,
                            upfront: 350,
                            threshold: 25000,
                            percent: 0.024
                        },
                        {
                            from: 130001,
                            to: 960000,
                            upfront: 2870,
                            threshold: 130000,
                            percent: 0.06
                        },
                        {
                            from: 960001,
                            to: 999999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.055
                        },
                    ],
                    fho_duty_rates: [{
                            from: 750000,
                            to: 960000,
                            upfront: 2870,
                            threshold: 130000,
                            percent: 0.06
                        },
                        {
                            from: 960001,
                            to: 999999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.055
                        },
                    ],
                    stamp_calc_fho_exceptions: {
                        600000: 0,
                        610000: 2111,
                        620000: 4302,
                        630000: 6574,
                        640000: 8925,
                        650000: 11356,
                        660000: 13868,
                        670000: 16500,
                        680000: 19200,
                        690000: 21800,
                        700000: 24700,
                        710000: 27700,
                        720000: 30600,
                        730000: 33700,
                        740000: 36800,
                        750000: 40100,
                    },
                },
                'QLD': {
                    fhog: 20000,
                    max_pp_fhog: 750000,
                    fhog_workings_enable: true,
                    fhog_workings_by_5_persent: false,
                    use_total_for_costs_at_max: true,
                    duty_rates: [{
                            from: 0,
                            to: 350000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.01
                        },
                        {
                            from: 350001,
                            to: 540000,
                            upfront: 3500,
                            threshold: 350000,
                            percent: 0.035
                        },
                        {
                            from: 540001,
                            to: 1000000,
                            upfront: 10150,
                            threshold: 540000,
                            percent: 0.045
                        },
                        {
                            from: 1000001,
                            to: 999999999,
                            upfront: 30850,
                            threshold: 1000000,
                            percent: 0.0575
                        },
                    ],
                    // fho_duty_rates not used
                    fhog_concession: [{
                            from: 0,
                            to: 504999.99,
                            concession: 8750
                        },
                        {
                            from: 505000,
                            to: 509999.99,
                            concession: 7875
                        },
                        {
                            from: 510000,
                            to: 514999.99,
                            concession: 7000
                        },
                        {
                            from: 515000,
                            to: 519999.99,
                            concession: 6125
                        },
                        {
                            from: 520000,
                            to: 524999.99,
                            concession: 5250
                        },
                        {
                            from: 525000,
                            to: 529999.99,
                            concession: 4375
                        },
                        {
                            from: 530000,
                            to: 534999.99,
                            concession: 3500
                        },
                        {
                            from: 535000,
                            to: 539999.99,
                            concession: 2625
                        },
                        {
                            from: 540000,
                            to: 544999.99,
                            concession: 1750
                        },
                        {
                            from: 545000,
                            to: 549999.99,
                            concession: 875
                        },
                    ],
                },
                'ACT': {
                    fhog: 7000,
                    max_pp_fhog: 750000,
                    fhog_workings_enable: true,
                    fhog_workings_by_5_persent: false,
                    duty_rates: [{
                            from: 0,
                            to: 200000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0148
                        },
                        {
                            from: 200001,
                            to: 300000,
                            upfront: 2960,
                            threshold: 200000,
                            percent: 0.025
                        },
                        {
                            from: 300001,
                            to: 500000,
                            upfront: 5460,
                            threshold: 300000,
                            percent: 0.04
                        },
                        {
                            from: 500001,
                            to: 750000,
                            upfront: 13460,
                            threshold: 500000,
                            percent: 0.05
                        },
                        {
                            from: 750001,
                            to: 1000000,
                            upfront: 25960,
                            threshold: 750000,
                            percent: 0.065
                        },
                        {
                            from: 1000001,
                            to: 1454999,
                            upfront: 42210,
                            threshold: 1000000,
                            percent: 0.07
                        },
                        {
                            from: 1455000,
                            to: 999999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0509
                        },
                    ],
                    fho_duty_rates: [{
                            from: 0,
                            to: 470000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0
                        },
                        {
                            from: 470001,
                            to: 607000,
                            upfront: 0,
                            threshold: 470000,
                            percent: 0.135
                        },
                        {
                            from: 607001,
                            to: 750000,
                            upfront: 13460,
                            threshold: 500000,
                            percent: 0.05
                        },
                        {
                            from: 750001,
                            to: 1000000,
                            upfront: 25960,
                            threshold: 750000,
                            percent: 0.065
                        },
                        {
                            from: 1000001,
                            to: 1454999,
                            upfront: 42210,
                            threshold: 1000000,
                            percent: 0.07
                        },
                        {
                            from: 1455000,
                            to: 999999999,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.0509
                        },
                    ],
                },
                'WA': {
                    fhog: 10000,
                    max_pp_fhog: 750000,
                    fhog_workings_enable: true,
                    fhog_workings_by_5_persent: false,
                    duty_rates: [{
                            from: 0,
                            to: 80000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0.019
                        },
                        {
                            from: 80001,
                            to: 100000,
                            upfront: 1520,
                            threshold: 80000,
                            percent: 0.0285
                        },
                        {
                            from: 100001,
                            to: 250000,
                            upfront: 2090,
                            threshold: 100000,
                            percent: 0.038
                        },
                        {
                            from: 250001,
                            to: 500000,
                            upfront: 7790,
                            threshold: 250000,
                            percent: 0.0475
                        },
                        {
                            from: 500001,
                            to: 999999999,
                            upfront: 19665,
                            threshold: 500000,
                            percent: 0.0515
                        },
                    ],
                    fho_duty_rates: [{
                            from: 0,
                            to: 430000,
                            upfront: 0,
                            threshold: 0,
                            percent: 0
                        },
                        {
                            from: 430001,
                            to: 530000,
                            upfront: 0,
                            threshold: 430000,
                            percent: 0.1919
                        },
                        {
                            from: 530001,
                            to: 999999999,
                            upfront: 19665,
                            threshold: 500000,
                            percent: 0.0515
                        },
                    ],
                },
                'SA': {
                    fhog: 15000,
                    max_pp_fhog: 570000,
                    fhog_workings_enable: true,
                    fhog_workings_by_5_persent: false,
                    duty_rates: [{
                            from: 0,
                            to: 50000,
                            upfront: 480,
                            threshold: 30000,
                            percent: 0.03
                        },
                        {
                            from: 50001,
                            to: 100000,
                            upfront: 1080,
                            threshold: 50000,
                            percent: 0.035
                        },
                        {
                            from: 100001,
                            to: 200000,
                            upfront: 2830,
                            threshold: 100000,
                            percent: 0.04
                        },
                        {
                            from: 200001,
                            to: 250000,
                            upfront: 6830,
                            threshold: 200000,
                            percent: 0.0425
                        },
                        {
                            from: 250001,
                            to: 300000,
                            upfront: 8955,
                            threshold: 250000,
                            percent: 0.0475
                        },
                        {
                            from: 300001,
                            to: 500000,
                            upfront: 11330,
                            threshold: 300000,
                            percent: 0.05
                        },
                        {
                            from: 500001,
                            to: 9999999999,
                            upfront: 21330,
                            threshold: 500000,
                            percent: 0.055
                        },
                    ],
                    // fho_duty_rates not used
                },
            }
        },
        inputs: {
            income: 700000, // integer
            place: 'NT', // string
            fho: false, // boolean
            deposit: 50000, // integer
            situation: 5, // couple - 3 | single - 5
            dependents: 1, // 0 - 1 | 1 - 2 | 2 - 7 | 3+ - 11
        },
        already_calculated: {
            stamps_calcs: {},
            current_stamp_id: null,
        },
        outputs: {
            max_borrowing_capacity: null,
            can_purchase: null,
        },
        get_fho_master_deposit: function(stamp_data, deposit) {
            if (!stamp_data.fhog_workings_enable) return deposit + stamp_data.fhog;

            let costs_at_max;
            if (stamp_data.fhog_workings_by_5_persent) costs_at_max = stamp_data.max_pp_fhog * 0.05;
            else {
                let stamp_calcs = this.get_stamp_calcs(stamp_data.max_pp_fhog, stamp_data, true);
                costs_at_max = stamp_data.use_total_for_costs_at_max ? stamp_calcs.total : stamp_calcs.stamp;
            }

            // console.log('costs_at_max: ', costs_at_max);

            let outcomes = [];
            outcomes.push(deposit);

            let outcome_by_fhog = deposit + stamp_data.fhog;
            let outcome_by_costs_at_max = costs_at_max;

            if (deposit >= 0 && deposit <= (costs_at_max - stamp_data.fhog))
                outcomes.push(outcome_by_fhog);
            if (deposit >= (costs_at_max - stamp_data.fhog + 1) && deposit <= costs_at_max)
                outcomes.push(outcome_by_costs_at_max);

            // console.log('outcomes: ', outcomes);

            return outcomes.sort((a, b) => b - a)[0];
        },
        get_stamps_purchase_prices: function() {
            if (this.already_calculated.stamps_purchase_prices) return this.already_calculated.stamps_purchase_prices;

            let purchase_prices = [];
            for (var i = 0; i <= 670; i++) purchase_prices.push(i * 10000);
            for (var i = 68; i <= 600; i++) purchase_prices.push(i * 100000);
            for (var i = 61; i <= 115; i++) purchase_prices.push(i * 1000000);
            for (var i = 120; i <= 405; i = i + 5) purchase_prices.push(i * 1000000);

            this.already_calculated.stamps_purchase_prices = purchase_prices;
            return purchase_prices;
        },
        get_current_stamp_calc_data: function() {
            return this.get_stamps()[this.get_current_stamp_id()];
        },
        get_current_stamp_id: function() {
            if (this.already_calculated.current_stamp_id) return this.already_calculated.current_stamp_id;
            let stamps_data = this.get_stamps();
            let current_stamp_id = null;
            let master_deposit = this.inputs.deposit;
            if (this.inputs.fho) {
                let stamp_data = this.src_constants.stamps[this.inputs.place];
                master_deposit = this.get_fho_master_deposit(stamp_data, this.inputs.deposit);
            }

            stamps_data.forEach(function(stamp_data, i) {
                if (!stamps_data[i + 1]) return;
                if (master_deposit >= stamp_data.total && master_deposit < stamps_data[i + 1].total)
                    current_stamp_id = i;
            });
            this.already_calculated.current_stamp_id = current_stamp_id;
            return current_stamp_id;
        },
        get_stamp_calcs: function(purchase_price, stamp_data, isFHO = false) {
            let duty_rate_key = null;
            let duty_rates = stamp_data.duty_rates;
            if (isFHO && stamp_data.fho_duty_rates) duty_rates = stamp_data.fho_duty_rates;

            duty_rates.forEach(function(duty_rate, i) {
                if (purchase_price >= duty_rate.from && purchase_price <= duty_rate.to) duty_rate_key = i;
            });

            let duty_rate = {
                from: 0,
                to: 0,
                upfront: 0,
                threshold: 0,
                percent: 0
            };
            if (duty_rate_key !== null) duty_rate = duty_rates[duty_rate_key];

            let stamp = (((purchase_price - duty_rate.threshold) * duty_rate.percent) + duty_rate.upfront);

            // console.log('duty_rate_key: ', duty_rate_key);
            // console.log('duty_rate: ', duty_rate);
            // console.log('purchase_price: ', purchase_price);
            // console.log('stamp: ', stamp);

            if (isFHO && stamp_data.fhog_concession && purchase_price <= stamp_data.fhog_concession[stamp_data.fhog_concession.length - 1].to) {

                let concession_id = 1;
                stamp_data.fhog_concession.forEach(function(concession_range, i) {
                    if (i == 0) return
                    if (purchase_price >= concession_range.from && purchase_price <= concession_range.to)
                        concession_id = i;
                });

                // console.log('concession: ', stamp_data.fhog_concession[concession_id]);
                // console.log('original stamp: ', stamp);
                stamp = Math.max(stamp - stamp_data.fhog_concession[concession_id].concession, 0);
                // console.log('stamp: ', stamp);
            }

            // hand exceptions for stamp calculation
            if (purchase_price >= 600000 && purchase_price <= 750000 && isFHO && stamp_data.stamp_calc_fho_exceptions) {
                stamp = stamp_data.stamp_calc_fho_exceptions[purchase_price];
            }

            return {
                stamp: stamp,
                total: stamp + (purchase_price * 0.1),
                purchase_price: purchase_price,
            };
        },
        get_stamps: function(place = this.inputs.place, fho = this.inputs.fho) {
            if (this.already_calculated.stamps_calcs[place]) return this.already_calculated.stamps_calcs[place];
            let stamp_data = this.src_constants.stamps[place];
            let stamps_calcs_data = [];
            this.get_stamps_purchase_prices().forEach(function(purchase_price) {
                stamps_calcs_data.push(this.get_stamp_calcs(purchase_price, stamp_data, fho));
            }, this);
            this.already_calculated.stamps_calcs[place] = stamps_calcs_data;
            return stamps_calcs_data;
        },
        get_hem: function() {
            return this.src_constants.hem_values[this.get_hem_index()][this.get_hem_income_index()];
        },
        get_hem_index: function() {
            return this.inputs.situation * this.inputs.dependents;
        },
        get_hem_income_index: function() {
            let income = this.inputs.income;
            let hem_income_index;
            for (const index in this.src_constants.hem_income_ranges) {
                let range = this.src_constants.hem_income_ranges[index];
                if (income >= range.from && income <= range.to) hem_income_index = index;
            }
            return hem_income_index;
        },
        get_total_tax: function() {
            let tax_rate_key;
            let income = this.inputs.income;
            this.src_constants.tax_rates.forEach(function(tax_rate_constants, i) {
                if (income >= tax_rate_constants.from && income <= tax_rate_constants.to) tax_rate_key = i;
            });

            if (tax_rate_key == 0) return 0;

            let tax_rate_constants = this.src_constants.tax_rates[tax_rate_key];
            let prev_tax_rate_constants = this.src_constants.tax_rates[tax_rate_key - 1];

            return ((income - prev_tax_rate_constants.to) * tax_rate_constants.persent) + tax_rate_constants.upfront;
        },
        get_net_income_pm_without_hem: function() {
            return ((this.get_net_income() / 12) - this.get_hem());
        },
        get_max_bc: function() {
            let income = this.get_net_income_pm_without_hem() + 0.01;
            let annual_interest_rate = 0.0850;
            let number_of_payments_per_year = 12;
            let total_number_of_payments = 360;
            let airpy = annual_interest_rate / number_of_payments_per_year;
            let x = Math.pow(1 + airpy, total_number_of_payments);
            let xx = (airpy * x) / (x - 1);
            let loan = Math.floor((income / xx) / 10000) * 10000;
            return Math.max(loan, 0);
        },
        get_max_bc_95_pp: function() {
            return this.get_max_bc() / 0.95;
        },
        get_net_income: function() {
            return this.inputs.income - this.get_total_tax();
        },
        get_fhog_output_bc: function(place = this.inputs.place) {
            if (!this.inputs.fho) return 0;

            let fhog_data = this.src_constants.fhogs[place];
            let max_bc_pp = this.inputs.income > 14000000 ? 0 : this.get_max_bc_95_pp();

            return (max_bc_pp + fhog_data.fhog <= fhog_data.fhog_max_pp) ? fhog_data.fhog : 0;
        },
        // get_fhog_output_sd: function() {
        // },
        get_result_property_worth: function() {
            let max_bc_pp = this.inputs.income > 14000000 ? 0 : this.get_max_bc_95_pp();
            let max_sd_pp = this.get_current_stamp_calc_data().purchase_price;

            let fhog_hernya = this.get_fhog_output_bc(this.inputs.place); // tmp

            let bc_vs_sd = Math.min(max_bc_pp, max_sd_pp);
            let bc_95 = (max_bc_pp == bc_vs_sd) ? bc_vs_sd * 0.95 : 0;
            let bc_95_result = (max_bc_pp == bc_vs_sd) ? (bc_95 + this.inputs.deposit + fhog_hernya) : 0;

            let bc_less_sd = (max_bc_pp < max_sd_pp) ? max_bc_pp : 0;
            let bc_more_sd = (max_bc_pp > max_sd_pp) ? max_sd_pp : 0;
            let bc_less_bc_95 = (max_bc_pp < bc_95_result) ? bc_95_result : 0;

            // let bc_95_result = (max_bc_pp == bc_vs_sd) ? bc_95 + deposit + fhog_hernya : 0;

            let property_worth = Math.max(bc_less_sd, bc_more_sd, bc_less_bc_95);
            let increased_worth = property_worth * 1.1; // 10% increase
            return {
                standard: new Intl.NumberFormat().format(Math.round(property_worth)),
                increased: new Intl.NumberFormat('en-US').format(Math.round(increased_worth)),
            };
        },
        get_result_maximum_borrowing_capacity: function() {
            let max_bc = this.get_max_bc_95_pp();
            max_bc = Math.min(max_bc, 5000000);
            return new Intl.NumberFormat().format(Math.round(max_bc));
        },
    };

    let validation_messages = {
        required: 'Please fill in the required field.',
        required_option: 'Please choose an option.',
        only_numbers: 'Only numbers are allowed.',
        min: 'Your %field_name% is too low to get a loan at this time.',
    };

    let validation_functions = {
        required: function(el) {
            if (!el) return false;
            if (!el.value) return false;
            return true;
        },
        required_option: function(el) {
            return this.required(el);
        },
        only_numbers: function(el) {
            return /^\d*[\.\,]?\d*$/.test(el.value.replaceAll(',', ''));
        },
        min: function(el) {
            return parseInt(el.value.replaceAll(',', '')) >= parseInt(el.dataset.minValue);
        },
    };

    let fields_data = {
        income: {
            query_selector: 'input',
            validation_rules: ['required', 'only_numbers', 'min'],
        },
        deposit: {
            query_selector: 'input',
            validation_rules: ['required', 'only_numbers', 'min'],
        },
        first_owner: {
            query_selector: `input[name=first_owner]:checked`,
            validation_rules: ['required_option'],
        },
        place: {
            query_selector: 'select',
            validation_rules: ['required_option'],
        },
        marital_status: {
            query_selector: `input[name=marital_status]:checked`,
            validation_rules: ['required_option'],
        },
        dependents: {
            query_selector: `input[name=dependents]:checked`,
            validation_rules: ['required_option'],
        },
    };

    function do_caculate_borrowing_capacity() {
        // console.log('do_caculate_borrowing_capacity run');

        // Validation here
        let validation_success = true;

        for (const field_name in fields_data) {
            let field = fields_data[field_name];
            field.wrapper_el = document.querySelector(`*[data-field-name="${field_name}"] .input-wrapper`);
            field.input_el = field.wrapper_el.querySelector(field.query_selector);

            for (let rule_name of field.validation_rules) {
                let is_field_valid = validation_functions[rule_name](field.input_el);
                // console.log(`field '${field_name}' validation with rule '${rule_name}': `, is_field_valid);

                field.wrapper_el.classList.toggle('validation-failed', !is_field_valid);
                let validation_message = validation_messages[rule_name].replace('%field_name%', field_name);
                field.wrapper_el.dataset.validationMsg = !is_field_valid ? validation_message : '';

                if (!is_field_valid) {
                    validation_success = false;
                    break;
                }
            }
        }

        // console.log('validation_success: ', validation_success);
        if (!validation_success) {
            dataLayer.push({
                'event': 'mortgage_calc_form_not_submit'
            })
            jQuery(function($) {
                $('html, body').animate({
                    scrollTop: $('.form-wrapper .validation-failed').parent().offset().top - (isMobile ? 71 : 0)
                }, 250);
            })
            return;
        }

        dataLayer.push({
            'event': 'mortgage_calc_form_submit'
        })
        // Change styles
        let action_button = document.querySelector('.result-wrapper .btn_recalculate');
        let calculator_wrapper = document.querySelector('.calculator-wrapper');
        calculator_wrapper.classList.add('show_result');

        let typBlocks = document.querySelectorAll('.result-typ');

        jQuery(function($) {
            $('html, body').animate({
                scrollTop: $('.result-wrapper').offset().top - (isMobile ? 71 : 0)
            }, 250);
        })

        typBlocks.forEach(element => {
            element.style = '';
        });


        const form = document.querySelector('.result-form');

        action_button.addEventListener('click', () => {
            const resultForm = $el('.result-form');
            const stepOne = resultForm.querySelector('[data-step="1"]');
            const stepTwo = resultForm.querySelector('[data-step="2"]');
            calculator_wrapper.classList.remove('show_result');
            form.style = '';
            stepOne.style.display = 'block';
            stepTwo.style.display = 'none';
            $el('.wpcf7-form.not-error')?.classList.remove("not-error")
        })
        // Here will be main formulas calculatings
        // console.log('calculate process started');

        // reset cache;
        business_logic.already_calculated = {
            stamps_calcs: {},
            current_stamp_id: null,
        };

        business_logic.inputs = {
            income: parseInt(document.querySelector(`*[data-field-name="income"] input`).value.replace(/[, ]/, '')),
            place: document.querySelector(`*[data-field-name="place"] select`).value,
            fho: document.querySelector(`*[data-field-name="first_owner"] input:checked`).value === '1',
            deposit: parseInt(document.querySelector(`*[data-field-name="deposit"] input`).value.replace(/[, ]/, '')),
            situation: parseInt(document.querySelector(`*[data-field-name="marital_status"] input:checked`).value),
            dependents: parseInt(document.querySelector(`*[data-field-name="dependents"] input:checked`).value),
        };

        // console.log('business_logic inputs: ', business_logic.inputs);

        const borrow = addCommas(business_logic.get_result_maximum_borrowing_capacity());
        const buy = addCommas(business_logic.get_result_property_worth().standard);
        const increased = business_logic.get_result_property_worth().increased;

        let results = {
            borrow: '$' + borrow,
            buy: '$' + buy,
            increased: '$' + increased,
        };

        // console.log('CALCULATIONS DONE!');
        // console.log('result maximum borrowing capacity: ', results.borrow);
        // console.log('result property worth: ', results.buy);

        // Here show results
        document.querySelectorAll('.calculator-wrapper *[data-result-field]').forEach(function(el) {
            el.innerHTML = results[el.dataset.resultField];

        });

        keradan_set_cookie('morgage_calculation_already_made', '1');
        setTimeout(() => main_form_update_after_mortgage_calculation(), 1);
    }

    function call_popup_after_calculation() {
        document.querySelector("#wpcf7-f11832-o12 .rc_background .rc_title").style.display = 'none';
        document.querySelector("#wpcf7-f11832-o12 .rc_background p").style.marginTop = '70px';
        document.querySelector("#wpcf7-f11832-o12 .rc_background p").style.marginBottom = '40px';
        let money = document.querySelector('.calculator-wrapper span[data-result-field="borrow"]').innerHTML;
        document.querySelector("#wpcf7-f11832-o12 .rc_padding div.h4").innerHTML = `Leave your details below and we’ll send you a plan for securing a loan of up to <span style="font-weight: 700;">${money}</span> and getting the best deal for your new home.`;
        document.querySelector("#wpcf7-f11832-o12 .rc_padding div.h4").style.fontSize = '14px';
        document.querySelector("#wpcf7-f11832-o12 .rc_padding div.h4").style.fontWeight = '400';
        document.querySelector("#wpcf7-f11832-o12 .rc_padding ul").style.display = 'none';

        setTimeout(function() {
            let selector = '.header_button .btn_yellow.rc_open, .mobilehead_button .btn_yellow.rc_open';
            document.querySelectorAll(selector)[0].click();
        }, 1);
    }

    let waitError = setInterval(() => {
																 
        if (document.querySelector('.result-form .wpcf7-response-output')?.innerText != '' &&
            document.querySelector('.result-form .wpcf7-response-output')?.innerText != 'Thank you') {

            console.log(document.querySelector('.result-form .wpcf7-response-output').innerText)

            document.querySelector('.result-form .wpcf7-response-output').style = 'opacity: 1';

            setTimeout(() => {
                if (document.querySelector('.result-form .wpcf7-response-output')?.innerText != '') {

                    document.querySelector('.result-form .wpcf7-response-output').style = 'opacity: 0';
                    document.querySelector('.result-form .wpcf7-response-output').innerText = '';
                }
            }, 5000);
        }
    }, 100)
</script>