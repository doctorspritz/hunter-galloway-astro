<?php
$et_pb_calculate_value = get_post_meta(get_the_ID(), '_et_pb_calculate', true);

$et_pb_calculate_title = '<span class="c-yellow_2">Check to see</span> if you are eligible for a home loan </h4>';
$et_pb_calculate_label = 'Enter the amount of your deposit';
$et_pb_calculate_field = '
        <select class="select">
            <option value="" disabled="" selected="">Choose a Suburb</option>
            <option value="View All">View All</option>
            <option value="BELMONT">BELMONT</option>
            <option value="CHANDLER">CHANDLER</option>
            <option value="HAMILTON">HAMILTON</option>
            <option value="HOLLAND PARK">HOLLAND PARK</option>
            <option value="MORNINGSIDE">MORNINGSIDE</option>
            <option value="PULLENVALE">PULLENVALE</option>
            <option value="ST LUCIA">ST LUCIA</option>
            <option value="TENNYSON">TENNYSON</option>
            <option value="THE GABBA">THE GABBA</option>
            <option value="TOOWONG">TOOWONG</option>
        </select>';

$et_pb_calculate_link = '/mortgage-calculator';

if ($et_pb_calculate_value == 0) {
    $et_pb_calculate_title = '<span class="c-yellow_2">Calculate</span> how your deposit translates to your home price and monthly payment.</h4>';
    $et_pb_calculate_label = 'Enter the amount of your deposit';
    $et_pb_calculate_link = '/deposit-calculator';
} else if ($et_pb_calculate_value == 1) {
    $et_pb_calculate_title = '<span class="c-yellow_2">Compare suburbs</span> in Brisbane: housing price, green zones and more.';
    $et_pb_calculate_label = 'Which suburb are you interested in?';
    $et_pb_calculate_link = '/suburbs-map';
} else if ($et_pb_calculate_value == 2) {
    $et_pb_calculate_title = '<span class="c-yellow_2">Uncover</span> what discounts and stamp duty waivers are you eligible for</h4>';
    $et_pb_calculate_label = 'Enter the purchase price';
    $et_pb_calculate_link = '/stamp-duty-calculator-queensland';
} else if ($et_pb_calculate_value == 3) {
    $et_pb_calculate_title = '<span class="c-yellow_2">Calculate</span> Your Home Equity</h4>';
    $et_pb_calculate_label = 'Enter your current loan amount';
    $et_pb_calculate_link = '/equity-calculator';
} else if ($et_pb_calculate_value == 4) {
    $et_pb_calculate_title = '<span class="c-yellow_2">Calculate</span> your borrowing capacity</h4>';
    $et_pb_calculate_label = 'Enter the amount of your deposit';
} else if ($et_pb_calculate_value == 5) {
    $et_pb_calculate_title = '<span class="c-yellow_2">Compare</span> your current rent with your mortgage payment</h4>';
    $et_pb_calculate_label = 'Enter the weekly rent you currently pay for the property you live in.</b></label>';
    $et_pb_calculate_link = '/mortgage-vs-rent-calculator';
}

if ($et_pb_calculate_value != 1) {
    $et_pb_calculate_field = '
        <div class="relative">
            <p class="absolute_curr">$</p>
            <input type="text" placeholder="e.g. ';

    if ($et_pb_calculate_value == 2) {
        $et_pb_calculate_field .= '400,000';
    } else if ($et_pb_calculate_value == 3) {
        $et_pb_calculate_field .= '200,000';
    } else if ($et_pb_calculate_value == 4) {
        $et_pb_calculate_field .= '50,000';
    } else if ($et_pb_calculate_value == 5) {
        $et_pb_calculate_field .= '500';
    } else {
        $et_pb_calculate_field .= '50,000';
    }

    $et_pb_calculate_field .= '" oninput="addCommas(this)" class="input-banner">
        </div>';
}

if ($et_pb_calculate_value != 'none') {
    echo ' 
            <svg class="icon_dashed d-md-block d-none" width="755" height="1" viewBox="0 0 755 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="0.5" x2="755" y2="0.5" stroke="#262626" stroke-dasharray="6 6"/>
            </svg>
            <svg class="icon_dashed d-md-none" width="343" height="1" viewBox="0 0 343 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line y1="0.5" x2="343" y2="0.5" stroke="#262626" stroke-dasharray="6 6"/>
            </svg>
            <h4>' . $et_pb_calculate_title . '</h4>
            <label><b style="font-weight: 600;">' . $et_pb_calculate_label . ' </b></label>
            <div class="flex-md">' . $et_pb_calculate_field . '
                <a href="' . $et_pb_calculate_link . '" class="btn_yellow" target="_blank" ';
    if ($et_pb_calculate_link == '#') {
        echo " onclick='scrollToSection(event)'";
    }
    echo ">";
    if ($et_pb_calculate_value == 1) {
        echo 'Compare Suburbs';
    } else {
        echo 'Calculate';
    }
    echo '<img class="" src="' . $assets . '16_arrow_r_black.svg" alt="arrow image" style="margin: 0 0 0 8px!important;">
                </a>
            </div>';
}
?>
