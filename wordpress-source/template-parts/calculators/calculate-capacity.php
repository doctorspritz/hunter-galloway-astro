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
                    <div class="result-typ result-typ_two" data-result-type="build">
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
                    <div class="result-typ result-typ_two" data-result-type="commercial">
                        <div class="main-form__header">
                            <button class="main-form__back">Back</button>
                            <div class="main-form__count">
                                <span>2</span> / 2
                            </div>
                        </div>
                        <h3>Thank you for your interest.</h3>
                        <p>At Hunter Galloway, we specialise in residential and investment home loans, which allows us to focus on delivering the best possible outcomes for our clients in these areas.</p>
                        <p>Unfortunately, we are not able to assist with commercial or business loans at this time.</p>
                        <p>We believe it’s important that you work with a broker who specialises in commercial or business lending to ensure you receive the quality of service and expertise you deserve. We recommend reaching out to a mortgage broker experienced in this field who can better assist with your needs.</p>
                        <p>We appreciate your understanding and are sorry we’re unable to help on this occasion.</p>
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