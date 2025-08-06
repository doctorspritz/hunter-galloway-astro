<?php /* get popups for page mortgage-broker */

    $is_prod = false;
    $v = 1;
    if(!$is_prod) $v = $v . '_' . time(); // for cache auto purging;

    $domain = get_site_url();
    $assets_path = '/wp-content/themes/hunter-galloway/assets/';    

    $assets = (object)[
        'js' => $domain . $assets_path . "js/page-mortgage-broker-brisbane-popups.js?v=$v",
        'css' => $domain . $assets_path . "css/page-mortgage-broker-brisbane-popups.css?v=$v",
    ];

    // All data here:
    $checklist_items = [
        (object)[ // 1 Do you know your borrowing power?
            'id' => 1,
            'title' => "Do you know your borrowing power?",
            'text' => "<p>Borrowing power, also known as borrowing capacity, is a term that lenders use to describe how much you might be able to borrow, based on your financial situation.</p><br /><p>It's important to have a clear idea of your borrowing capacity so that you can begin to research and understand what sort of properties you can afford. Knowing this will help you make sure that you don't overstretch yourself.</p><br /><p>You can check your borrowing power by using a <a href='https://www.huntergalloway.com.au/are-you-actually-ready-to-buy-your-first-home/'>calculator</a>. Alternatively, when you speak to one of our brokers at Hunter Galloway we will calculate your borrowing power for you.</p>",
            'video_id' => "KQ1aVH6Q0j4",
        ],
        (object)[ // 2 Make sure you have enough deposit
            'id' => 2,
            'title' => "Make sure you have enough deposit",
            'text' => "<p>You will need to have a deposit saved up before you can go to a bank and get a home loan. As a bare minimum, you should aim to have 8-10% of the purchase price saved as a deposit, and at least 5% of the purchase price should be held in your savings accounts for 3 months or longer.</p><br /><p>Having a larger deposit (up to 20%) will save you money as you will avoid lender's mortgage insurance and get access to better interest rates on your loan but it is not necessary.</p><br /><p>If you don't have at least 8% of the purchase price saved as a deposit, you will need to keep saving before you can get a loan. Alternative options for getting a home loan without an 8% deposit are guarantor home loans, or gifts of money from family or friends.</p><br /><p>You can try our <a href='https://www.huntergalloway.com.au/deposit-calculator/'>deposit calculator</a> to see if you have enough savings to buy your home.</p>",
            'video_id' => "uSAYd_Kyfk0",
        ],
        (object)[ // 3 Check your credit score
            'id' => 3,
            'title' => "Check your credit score",
            'text' => "<p>Your credit score, or credit rating, is one of the key factors a lender will look at when you apply for a home loan. The higher your credit rating, the more likely they are to approve your application.</p><br /><p>Your credit rating takes into account previous applications for credit and whether you have any defaults, judgements, or credit infringements recorded against you. It also includes information about whether you're meeting your credit card and other loan or debt repayments on time.</p><br /><p>You can check your credit score for free once a year by contacting one of Australia's credit reporting agencies. Here at Hunter Galloway, our credit team will review your credit report as part of our loan application process. So if you haven't had a chance to check your credit report, don't worry - we can do that for you.</p>",
            'video_id' => "NirlkdPuuOs",
        ],
        (object)[ // 4 Minimise your spending
            'id' => 4,
            'title' => "Minimise your spending",
            'text' => "<p>Getting approved isn't just about having a deposit and a good income. Lenders also want to look at your bank statements to see where your money goes. Sometimes they will examine your expenses in great detail.</p><br /><p>To improve your chances of being approved, aim to build a track record of sensible spending for at least three to six months before applying. Look to cut down on any excessive lifestyle costs, both big and small.</p>",
            'video_id' => "K7ZbRMzYJsM",
        ],
        (object)[ // 5 Get rid of unnecessary credit and pay off your debts
            'id' => 5,
            'title' => "Get rid of unnecessary credit and pay off your debts",
            'text' => "<p>Your access to credit and other debt such as personal loans and car loans are another major factor in your ability to get a loan.</p><br /><p>The more debt you're carrying, the more you'll have to commit to it each month, which means less money available to spend on your home loan repayments. This reduces your borrowing capacity and makes it less likely a lender will approve your loan application.</p><br /><p>Pay off whatever debts you can before applying for a loan. This includes even small debts, such as buy now, pay later services like Afterpay, and interest-free purchases on furniture and other items.</p><br /><p>And it's not just about debt - access to money is equally important. Lenders will assess your application based on your total credit card limit. For example, if you have a combined limit of $20,000 across several credit cards (or even just one), they will calculate your minimum repayments owed on the full $20,000, even if you only owe $1000.</p><br /><p>To increase your chances of getting your home loan approved, pay off and close down any credit cards you're not using, and request a decrease in your credit card limit for any cards that you can't close down.</p>",
            'video_id' => "T76Oct5voF0",
        ],
        (object)[ // 6 Hold off on career changes
            'id' => 6,
            'title' => "Hold off on career changes",
            'text' => "<p>When applying for a loan, lenders are looking at more than just your income. They also want to see that you've been in your job for a decent amount of time (or at least in the same career). This comes down to risk - if you're in a new career, they are less confident that you'll keep your job, which means you might risk defaulting on your home loan repayments.</p><br /><p>Changing jobs within the same career is usually okay, and there are some lenders for which this is less of a dealbreaker, but we recommend holding off on changing careers until after you've got your mortgage.</p>",
            'video_id' => "TgFbGsXk30g",
        ],
        (object)[ // 7 Clean up your bank accounts
            'id' => 7,
            'title' => "Clean up your bank accounts",
            'text' => "<p>Having a messy banking situation, such as having accounts with five-plus banks and getting paid into multiple bank accounts makes it hard to track where you are getting paid. And the harder it is to track your financial situation, the less likely a lender will approve your application.</p><br /><p>Before applying for a home loan, do what you can to simplify your banking situation. If you are paid into multiple bank accounts, request that you are paid into a single bank account. Where possible, look to consolidate your accounts and close down the ones that you are no longer using.</p><br /><p>This also goes for credit cards: if you have a bunch of different credit cards try to consolidate them using a balance transfer, or simply pay off the balance and close them down.</p>",
            'video_id' => "TbJZXY6aq1s",
        ],
        (object)[ // 8 Check your eligibility for the First Home Owners Grant
            'id' => 8,
            'title' => "Check your eligibility for the First Home Owners Grant",
            'text' => "<p>If you're planning on using the <a href='https://www.huntergalloway.com.au/first-home-owners-grant-qld/'>First Home Owners Grant</a>, it's a good idea to check your eligibility before applying for your loan. That way you're saving yourself from any nasty surprises.</p><br /><p>In Queensland, you can receive a grant worth $15,000 if you qualify. In order to qualify for the grant:</p><ul><li>You must be at least 18 years of age</li><li>You must be an Australian citizen or permanent resident (or applying with someone who is)</li><li>You or you spouse must not have previously owned property in Australia that you lived in</li><li>You must be building or buying a brand new home</li><li>The value of the home including the land must be less than $750,000</li><li>You must move into the new home as your principle place of residence within 1 year of the completed transaction and live there continuously for 6 months.</li></ul><p>If you are unsure if you qualify for the <a href='https://www.huntergalloway.com.au/first-home-owners-grant-qld/'>First Home Owners Grant</a>, give us a call here at Hunter Galloway. One of our brokers will be able to walk you through the grant requirements and help you understand if you qualify.</p>",
            'video_id' => "bk9LxMKTSPw",
        ],
        (object)[ // 9 Choose the right lender
            'id' => 9,
            'title' => "Choose the right lender",
            'text' => "<p>No two lenders are the same. While every lender will want to be confident that you can repay your loan, each has slightly different criteria for how they'll assess your application. Applying to the right lender will maximise your chances of success.</p><br /><p>Searching for the right lender can be a challenging task. There are more than 40 different lenders in Australia, and each of them offer multiple loan products with different requirements and assessment criteria. Choosing the wrong lender will cost you time and money, along with the inevitable disappointment if your home loan gets declined.</p><br /><p>Save yourself the stress and use a mortgage broker instead of doing it yourself. They'll take the time to understand your individual circumstances and find you a lender who has a high chance of approving your loan.</p><br /><p>They can also make sure that you have all the information needed to support your application, and be there to support you every step of the way in the process of applying for your home loan.</p>",
            'video_id' => "2qV9-PeTtxM",
        ],
        (object)[ // 10 Use a good mortgage broker
            'id' => 10,
            'title' => "Use a good mortgage broker",
            'text' => "<p>Going directly to a bank for your loan is fine if you know exactly what you're looking for. But if you have any concerns about getting your home loan approved, a good mortgage broker will make your search for a home loan much easier, and much less stressful.</p><br /><p>It hurts me to say this, but the <a href='https://www.huntergalloway.com.au/mortgage-broker-brisbane/'>mortgage broker</a> industry is a bit of a mixed bag. There are some really fantastic brokers out there, but there are also a few bad eggs in the bunch. Using a good broker will make your home loan application a breeze. Using a bad one will make your home loan application a nightmare.</p><br /><p>Before choosing your mortgage broker, take a look at their Google reviews and website to make sure that they have a good reputation, are highly experienced, and take care of their customers. If you're looking for the right broker, we'd love to have a chat with you and show you why Hunter Galloway is Brisbane's highest rated mortgage broker.</p>",
            'video_id' => "EQFSii8_2DQ",
        ],
    ];

    $roadmap_items = [
        (object)[ // 1 Speak to a mortgage broker
            'id' => 1,
            'title' => "Speak to a mortgage broker",
            'text_above_content' => "14 Reasons Your Home Loan May Be Declined [in 2021]",
            'text' => "<p>In your initial conversation with your Mortgage Broker, you will have a chat about your situation, what you are wanting to achieve and reasons for getting a home loan.</p><br /><p>During this discussion, we’ll work out your eligibility for a home loan, let you know how much deposit you will need to buy and how much you will be able to borrow across our 30+ banks.</p><br /><p>After our discussion, we will look to find you a selection of lenders who can offer the best loan packages at the lowest interest rate, and provide you with a list of options.</p>",
            'video_id' => "2qV9-PeTtxM",
        ],
        (object)[ // 2 Prepare your application
            'id' => 2,
            'title' => "Prepare your application",
            'text_above_content' => "WATCH THIS before making an offer on a house in 2021",
            'text' => "<p>Once we've discussed your home loan options and you've decided on a loan package, our team will put together your loan application & get everything ready to submit to the bank.</p><br /><p>We start with a preliminary assessment where we will take time to go through your payslips, bank statements and other information provided in detail to make sure everything will be acceptable to the bank. At Hunter Galloway, we believe ‘slow is fast’ so we take more up front to double check your paperwork to ensure your loan is approved first time.</p><br /><p>Once we've done our assessment, assuming everything is all good, we will provide you with the final set of documents (like the bank application form) and sign a privacy form. Once the broker collects all the documents, they are emailed to the lender.</p>",
            'video_id' => "WVFQpPvOEK4",
        ],
        (object)[ // 3 Approval in principle (Conditional approval)
            'id' => 3,
            'title' => "Approval in principle (Conditional approval)",
            'text_above_content' => "8 Types of Home Loans [Which is Best For You?]",
            'text' => "<p>Now it’s time to sit back and wait for the bank to assess your home loan application.</p><br /><p>It usually takes between 3 to 5 days for your home loan application to progress through the queue, be picked up by a credit officer and then receive conditional approval.</p><br /><p>It will take longer if the information is missing, so this is why we take a little bit more time in Step #2 to make sure we have all the information up front.</p><br /><p>The approval of an application depends on certain conditions; for example, the bank can approve your loan subject to you finding a suitable property, or even subject to a satisfactory property valuation (Step #4).</p><br /><p>At Hunter Galloway we have ‘Priority Status’ with a large number of banks on our panel, this provides our customers with faster approval times and access to specials that aren’t available to the public.</p>",
            'video_id' => "QH0K4lGT4mA",
        ],
        (object)[ // 4 Valuation
            'id' => 4,
            'title' => "Valuation",
            'text_above_content' => "Bank Valuation Too Low? [How to overcome a BAD bank value]",
            'text' => "<p>After you find the right property and sign a contract of sale your Mortgage Broker will arrange a property valuation by one of the bank’s panel valuers. While the valuers work on behalf of the bank, they are not employed directly by the bank meaning they can complete a valuation independent from the bank.</p><br /><p>In many cases we can arrange valuations up front before your loan is submitted to help speed up your loan application so we can skip this step completely and go straight to unconditional approval.</p>",
            'video_id' => "Koi0PqSIDrQ",
        ],
        (object)[ // 5 Formal approval (Unconditional approval)
            'id' => 5,
            'title' => "Formal approval (Unconditional approval)",
            'text_above_content' => "Home Loan Approval Process [What happens after home loan approval?]",
            'text' => "<p>Also known as formal approval, an unconditional approval means the lender is happy to approve your loan! They will also send you an unconditional loan approval letter to confirm everything in writing.</p><br /><p>Formal unconditional approval can only be done once the bank has verified all of your outstanding information, including the property valuation and can take between one day up to one week to complete.</p><br /><p>You want to make sure you have your unconditional approval before satisfying the finance clause on your contract.</p>",
            'video_id' => "V-qLGIXZALc",
        ],
        (object)[ // 6 Signing your loan documents
            'id' => 6,
            'title' => "Signing your loan documents",
            'text_above_content' => "Home Buying Process Australia [Step by step tips]",
            'text' => "<p>After your loan has been unconditionally approved the bank will send your loan documents to you to sign. These documents can be a little complicated and include Loan Contracts, Mortgage Documents, Direct Debit forms, and a bunch of other stuff.</p><br /><p>The good news is that your Mortgage Broker will arrange a time to catch up and help you sign them. This also makes sure no signatures are missed, and your settlement isn’t delayed.</p><br /><p>If you are buying a home, you also want to get in touch with your solicitor or conveyancer at this point to double check there aren’t any transfer or legal documents you need to sign before settlement.</p>",
            'video_id' => "TgFbGsXk30g",
        ],
        (object)[ // 7 Settlement
            'id' => 7,
            'title' => "Settlement",
            'text_above_content' => "HOW TO PAY OFF YOUR MORTGAGE FASTER AUSTRALIA [2021 Update]",
            'text' => "<p>After your loan documents have been received by the bank, they will complete their certification to confirm everything has been signed correctly and go ahead with booking settlement.</p><br /><p>When you are buying a home, the bank will then get in touch with your solicitor, or conveyancer to let them know everything is good to go. Your solicitor or conveyancer will then arrange the settlement date.</p><br /><p>On the other hand, if you are refinancing a home your new bank will get in touch with the old bank to arrange a date for settlement.</p>",
            'video_id' => "tT2oTn7tbE8",
        ],
    ];

    $images = (object)[
        'narrow_head' => 'https://i.ibb.co/yVrG7Zf/HG-mbb-popup-head-bg.png',
        'sidebar' => 'https://i.ibb.co/1vs04ft/HG-mbb-popup-sidebar-bg.png',
        'white_logo' => '<svg class="logo" fill="none" viewBox="0 0 166 59"><path fill="#fff" d="M22.5 11.6c-.7.2-.5 0-5.6 4.8L12 20.9 9.6 23l-2.7 2.5a11 11 0 00-2 2.1l-.3.5v18l.4.6c.3.5.5.6 1 .8.5.3.6.3 7 .3h6.4V34.2l3.1-1.9a401.9 401.9 0 006.3-3.7V48h6.6c7.5 0 7 0 7.9-1.1l.4-.6V29.9l-.4-.6a46.7 46.7 0 00-5.9-5.6l-3.2-3a754.4 754.4 0 01-7.1-6.6c-2.1-2-2.7-2.4-3.2-2.5a3 3 0 00-1.4 0zM52.2 19.7v8.2H56v-3.3l.1-3.3h7.5v6.6h3.9V11.5h-3.9V18H56v-6.5h-3.9v8.2zM102.6 14v1.5h-1l-1 .1v2.8h2v3.4c0 2.4 0 3.4.2 3.7.6 1.5 1.8 2.3 3.6 2.6 1.2.1 2.4 0 3.3-.4l.6-.4-.4-1-.5-1.5-.5.2c-.5.2-1.5.2-1.9 0-.2 0-.4-.2-.5-.4-.2-.4-.2-.6-.2-3.3v-3h3.1v-2.7h-3.1v-3.1h-3.7V14zM92.3 15.3c-.7.2-1.2.5-1.8 1l-.6.3-.1-.7v-.6h-3.5V28h3.6v-3.5l.3-4c.4-1.4 1.4-2 2.8-2 1.2 0 1.9.3 2.3 1.3.3.5.3.7.3 4.4v3.8h3.7v-4.3c0-4.2 0-4.4-.3-5.1a4.5 4.5 0 00-2.6-2.9c-.8-.4-.9-.4-2.2-.4l-1.9.1zM115.5 15.3a9 9 0 00-1.6.6c-1 .6-2.2 1.6-2.6 2.5-.9 1.7-1 3.5-.6 5a5 5 0 001.5 2.6 7 7 0 003.4 1.9c.9.3 3.3.3 4.3 0 .9-.2 2-.8 2.6-1.3l.5-.5-1-1-1-1.1-.2.2-.9.6c-.6.3-.7.3-2 .3-1.4 0-1.8-.1-2.6-.6-.4-.3-1-1.3-1-1.7h9.5V22c.2-1.1-.2-2.8-.8-4a6.6 6.6 0 00-4-2.7c-.7-.2-2.7-.2-3.5 0zm3.3 3c.5.2.8.4 1 .8.5.6.7 1.3.6 1.4h-6.2v-.2c0-.5.5-1.4 1-1.7.6-.4 1.2-.7 2.1-.7.7 0 .9 0 1.5.4zM131.6 15.4c-.7.3-2 1-2 1.3-.2.3-.3 0-.3-.7v-.7h-3.5v12.6h3.7v-3.4c0-3.8 0-4.1.8-5 .5-.6 1.2-1 2.4-1h1V15h-.7a5 5 0 00-1.4.3zM70.6 15.3a50.5 50.5 0 00.5 10.1 4.9 4.9 0 003.2 2.6 9 9 0 001.7 0c1.3 0 2-.1 3.1-.9l.8-.5V28h3.5V15.3h-3.6v3.6c-.1 4-.2 4.3-.8 5.1-.7 1-2.4 1.2-3.6.7-.4-.2-.6-.4-.8-.8-.4-.8-.4-1.5-.4-5.2v-3.4h-3.6zM83.4 39.1v8.7h2.3V30.5h-2.4V39zM88.8 39.1v8.7H91V30.5h-2.2V39zM60.1 31.2a9 9 0 00-5.9 3A8.5 8.5 0 0056 46.5a8.6 8.6 0 005.6 1.3c1.1 0 1.8 0 2.4-.3 1-.2 2.5-1 3-1.4l.3-.2v-6.5h-2.2V45l-.3.2a8 8 0 01-3.6.8c-1.2 0-1.4 0-2.3-.3-2-.8-3.4-2.2-4-4.3a6.3 6.3 0 014.5-7.9c.9-.2 2.8-.2 3.7 0a9.1 9.1 0 013 1.7s1.4-1.4 1.3-1.5l-.9-.8a9.2 9.2 0 00-6.4-1.6zM74 35.3c-1.5.1-3.1.7-4 1.3l-.2.2.3.6c.4.8.7 1.2.8 1a7.3 7.3 0 013.8-1.2c2 0 3.2.9 3.3 2.6l.1.8H76c-3.2 0-4.4.3-5.4 1.2-1 .9-1.3 2.4-.9 3.8.6 1.7 2.7 2.6 5.3 2.3 1.4-.1 2-.4 2.7-1.1l.6-.5v1.6h2.2v-4.4c0-4 0-4.3-.3-5a4 4 0 00-2.3-2.8 9 9 0 00-3.9-.4zm4 7.9c0 1 0 1.2-.5 1.7-.7 1-1.7 1.3-3 1.3-1.4 0-2.3-.4-2.6-1.2-.4-.8-.1-1.8.4-2.2.6-.4 1.3-.5 3.6-.5H78v.9zM98.8 35.3a6.1 6.1 0 00-5.7 6.3c0 1.3.2 1.9.8 3.2a6 6 0 003.6 2.9c1 .3 3.2.3 4.3 0a6.2 6.2 0 004-4c.4-1.2.5-2.9.2-3.9-1-3.1-3.7-4.9-7.3-4.5zm2 2c2.2.6 3.5 2.8 3 5.2a4 4 0 01-2.2 3c-.7.4-.8.4-2 .4-1 0-1.2 0-1.7-.3-1.7-.8-2.6-2.3-2.5-4.4a4 4 0 012-3.4c1.2-.6 2.2-.8 3.3-.5zM131.1 35.3c-1.5.1-3 .7-3.9 1.3l-.3.2.4.7.5.8 1-.3c1.2-.6 2.2-.9 3.3-.8 2 .1 3 1 3.1 2.7v.7h-2.1c-3.4 0-4.5.3-5.5 1.3a3 3 0 00-1 2.4c0 2.5 2.2 4 5.5 3.6 1.3-.2 2-.4 2.7-1.1l.5-.5v1.6h2.2v-4.3c0-4.5 0-5-.6-6-.8-1.8-3-2.6-5.8-2.3zm4.1 8c0 .7 0 .9-.3 1.3-.7 1-1.8 1.6-3.2 1.6-2 0-3-.8-2.8-2.3 0-.4.1-.6.4-.9.6-.6 1.3-.7 3.8-.7h2.1v1zM106 35.4c-.2 0 0 .7 2.7 7.8l1.2 3.2.5 1.5h2.2l.5-1.2 1.1-2.9 1.4-3.4.6-2a631 631 0 003.4 8.4l.3 1h2.3l1-2.7 1.5-4a211.7 211.7 0 012-5.7h-1.8l-.5 1.1-1.1 3a754 754 0 00-2.3 5.7l-.4-1-.9-2.5-1.2-3.1-.9-2.5-.3-.8h-1.9l-.6 1.5-1.1 3-1.2 3.2c-.8 2.2-.9 2.2-1 2.2l-.4-1.3-1.1-3-1.3-3.5-.8-2c-.1-.1-1.9-.2-2 0zM138.2 35.4l.2.7a56.2 56.2 0 012.5 5.6 168.4 168.4 0 012.7 6.1c0 .4-.8 1.9-1.2 2.2-.8.8-2.1.8-3.3.1l-.5-.3-.2.3-.5.9-.2.4.3.3c.9.7 2.8 1 4.2.7 1.3-.4 2.4-1.4 3.2-3.3l2.3-5.3c1-2 1.8-4 2.4-5.5l1-2 .3-1h-2.1l-.4.9-1 2.3a479.6 479.6 0 00-3 6.7l-.4-.7a2879.4 2879.4 0 00-4-9c-.2-.2-2.2-.3-2.3-.1z"/></svg>',
        'black_logo' => '<svg fill="none" viewBox="0 0 112 33"><path fill="#000" d="M14 .8c-.5.2-.3 0-4.2 3.7L6.1 7.9 4.3 9.7a97.3 97.3 0 01-3.6 3.5l-.2.3v13.7l.3.5c.2.4.4.5.7.6.4.2.5.2 5.3.2h4.9V18.1l2.4-1.4a305 305 0 004.8-2.9v14.7h5c5.7 0 5.3 0 6-.8l.3-.5V14.8l-.3-.4a35.5 35.5 0 00-4.5-4.3L23 7.8a570.1 570.1 0 01-7.8-7H14zM36.7 7v6.3h2.8v-5h5.8v5h2.9V.7h-2.9v5H39.6v-5h-2.9V7zM74.8 2.7v1.1h-.7l-.8.1V6h1.5v2.6c0 1.9.1 2.6.2 2.8.5 1.2 1.4 1.8 2.8 2 .9.1 1.8 0 2.5-.3l.4-.2-.2-.8L80 11s-.2 0-.3.2h-1.5a1 1 0 01-.4-.4l-.1-2.5V6H80V4h-2.3V1.5h-2.8v1.2zM67 3.7c-.5.1-.9.3-1.3.7l-.5.3v-1h-2.7v9.6h2.7v-2.7l.2-3.1c.3-1 1-1.5 2.2-1.5 1 0 1.4.3 1.8 1 .1.4.2.6.2 3.4v3h2.8V10c0-3.2 0-3.4-.2-4-.4-1-1-1.6-2-2.1-.6-.3-.7-.3-1.7-.3H67zM84.6 3.7l-1.1.4a5 5 0 00-2 2 5.2 5.2 0 00-.5 3.8c.3 1 .5 1.2 1.2 2 .6.6 1.5 1.1 2.5 1.4.7.2 2.5.2 3.3 0 .7-.2 1.5-.6 2-1l.4-.4-.8-.8-.7-.8-.2.2-.7.4c-.4.2-.5.2-1.5.2s-1.4 0-2-.4c-.3-.3-.8-1-.8-1.3H91v-.6c.1-.9-.2-2.2-.6-3a5 5 0 00-3-2.1 8 8 0 00-2.8 0zm2.6 2.2c.3.2.6.4.7.7.4.5.6 1 .5 1h-4.8v-.1c.1-.4.5-1 .8-1.3.5-.4 1-.5 1.6-.5.5 0 .7 0 1.2.2zM97 3.7c-.7.2-1.6.8-1.7 1 0 .3-.2 0-.2-.5v-.6h-2.6v9.7h2.8v-2.6c0-3 0-3.2.6-3.8.4-.5 1-.7 1.8-.8h.8V3.5H98l-1 .2zM50.5 3.7a38.7 38.7 0 00.4 7.7c.5.9 1.4 1.7 2.5 2h1.3c1 0 1.5-.1 2.3-.7l.6-.4v1h2.7V3.7h-2.7v2.7c-.1 3-.2 3.3-.6 4-.5.6-1.8.8-2.7.4-.4-.1-.5-.3-.7-.6-.3-.6-.3-1.1-.3-3.9V3.6h-2.8zM60.3 21.8v6.7H62V15.2H60.3v6.6zM64.4 21.8v6.7H66.2V15.2H64.4v6.6zM42.6 15.8c-1.6.1-3.4 1-4.4 2.2-2.5 3-1.8 7.6 1.3 9.5 1.4.9 2.4 1.1 4.2 1 .9 0 1.4 0 1.9-.2.7-.2 2-.7 2.3-1l.2-.3v-4.9H46.4v4.1l-.2.2a6 6 0 01-2.7.6c-1 0-1.1 0-1.8-.2a4.6 4.6 0 01-3-3.3 6 6 0 010-2.7 4.8 4.8 0 013.4-3.3c.6-.2 2.1-.2 2.8 0a7 7 0 012.2 1.2l1-1c0-.1-.2-.4-.6-.7a7 7 0 00-4.9-1.2zM53.1 19c-1 0-2.3.4-3 1H50l.2.5c.3.6.5.9.6.8 0-.2 1-.6 1.7-.8l1.2-.1c1.5 0 2.4.7 2.5 2v.6h-1.6c-2.5 0-3.3.2-4.1.9-.7.6-1 1.8-.6 2.9.4 1.2 2 2 4 1.7 1 0 1.4-.3 2-.8l.4-.4v1.2H58v-3.3c0-3.1 0-3.3-.2-3.9a3 3 0 00-1.8-2c-.6-.3-1.8-.5-2.9-.4zm3.2 6c0 .7 0 .8-.4 1.3-.6.6-1.3 1-2.4 1-1 0-1.7-.4-2-1-.2-.6 0-1.4.4-1.6.4-.4 1-.4 2.7-.4h1.7v.7zM72 19a4.7 4.7 0 00-4.3 4.7c0 1 0 1.5.6 2.4.5 1 1.5 1.9 2.7 2.3a7 7 0 003.3 0 4.7 4.7 0 003-3.1c.3-.9.4-2.2.1-3-.7-2.3-2.8-3.7-5.4-3.4zm1.5 1.5c1.7.4 2.6 2 2.3 3.9a3 3 0 01-1.7 2.3c-.5.3-.6.3-1.4.3-.8 0-1 0-1.4-.2-1.3-.6-2-1.8-1.9-3.3a3 3 0 011.6-2.7 3 3 0 012.5-.3zM96.5 19c-1 0-2.3.4-3 1h-.2l.4.6.3.6.8-.2c.9-.5 1.6-.7 2.5-.6 1.5 0 2.2.7 2.3 2v.6H98c-2.6 0-3.4.2-4.2 1-.5.5-.7 1-.7 1.8 0 2 1.7 3 4.2 2.7 1 0 1.5-.3 2-.8l.4-.4v1.2H101.4v-3.3c0-3.4 0-3.7-.5-4.6-.6-1.3-2.2-1.9-4.4-1.7zm3.2 6c0 .6 0 .7-.3 1-.5.8-1.4 1.2-2.5 1.2-1.5 0-2.2-.6-2-1.7 0-.3 0-.5.3-.7.4-.4.9-.5 2.8-.5h1.7v.7zM77.4 19s.1.6 2.1 6l1 2.4.3 1.1H82.5l.3-.9.9-2.2 1-2.6.5-1.4a445.2 445.2 0 002.6 6.4l.2.7H89.7l.8-2 1.1-3.1a161.7 161.7 0 011.5-4.4 4 4 0 00-1.3 0l-.4.8-.8 2.3a566.9 566.9 0 00-1.7 4.4l-.3-.8-.7-1.9-1-2.4a75 75 0 00-.6-1.8L86 19h-1.4l-.4 1-.9 2.4-1 2.4-.6 1.7-.4-1-.8-2.3-1-2.7L79 19h-1.5zM102 19v.5a43.6 43.6 0 012 4.3 130 130 0 012 4.7c0 .2-.6 1.4-1 1.7-.6.5-1.5.6-2.4 0l-.4-.2-.2.2-.3.7-.2.3.2.2c.7.6 2.2.8 3.2.6 1-.3 1.8-1.1 2.4-2.5l1.8-4 1.8-4.3.7-1.5.3-.7c0-.1-1.5 0-1.6 0l-.3.6-.8 1.7a374.7 374.7 0 00-2.2 5.2l-.3-.6a2556.4 2556.4 0 00-3-6.9h-1.8z"/></svg>',
    ];
?>



<?php /* Markup starts here */ ?>
    <div id="keradan-popup-checklist" data-keradan-popup-name="checklist">
        <div class="inner">
            <button class="close">
                <svg viewBox="0 0 20 22">
                    <path fill="#000" d="M18.7 20.7a2.4 2.4 0 01-3.4 0l-5.3-6-5.3 6a2.4 2.4 0 11-3.4-3.4L6.8 11 1.3 4.7a2.4 2.4 0 113.4-3.4l5.3 6 5.3-6a2.4 2.4 0 113.4 3.4L13.2 11l5.5 6.3a2.4 2.4 0 010 3.4z"/>
                </svg>
                <span>Close</span>
            </button>
            <div class="head" style="background-image: url(<?= $images->narrow_head ?>);">
                <span class="title">Our checklist</span>
            </div>
            <div class="dynamic-content-wrapper">
                <div class="full-checklist" data-keradan-popup-screen="items-list">
                    <div class="list">
                        <?php foreach (array_chunk($checklist_items, 5) as $checklist_items_chunk): ?>
                            <div class="col">
                                <?php foreach ($checklist_items_chunk as $checklist_item): ?>
                                    <div
                                        class="link-box"
                                        data-keradan-popup-set-screen="text-item"
                                        data-keradan-popup-set-list-item-id="<?= $checklist_item->id ?>"
                                        data-keradan-int-el>
                                        <div class="number">
                                            <span><?= $checklist_item->id ?></span>
                                        </div>
                                        <div class="content">
                                            <div class="title"><?= $checklist_item->title ?></div>
                                            <div class="link">Learn More</div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="bottom">
                        <?= $images->black_logo ?>
                    </div>
                </div>
                
                <?php foreach ($checklist_items as $checklist_item): ?>
                    <div
                        class="single-checklist-text-item"
                        data-keradan-popup-screen="text-item"
                        data-keradan-popup-item-id="<?= $checklist_item->id ?>">
                        <div class="head">
                            <div class="number">
                                <span><?= $checklist_item->id ?></span>
                            </div>
                            <div class="title"><?= $checklist_item->title ?></div>
                            <div class="buttons">
                                <button
                                    class="video"
                                    data-keradan-popup-set-screen="video-item"
                                    data-keradan-popup-set-list-item-id="<?= $checklist_item->id ?>"
                                    data-keradan-int-el>
                                    <svg fill="none" viewBox="0 0 22 22"><circle cx="11" cy="11" r="11" fill="#FFBA3A"></circle><path fill="#262626" d="M15 11.5l-6.8 3.9V7.6l6.8 3.9z"></path></svg>
                                    <span>Watch video</span>
                                </button>
                                <button
                                    class="back"
                                    data-keradan-popup-set-screen="items-list"
                                    data-keradan-int-el>
                                    <svg viewBox="0 0 8 15"><path fill="none" stroke-width="2" stroke="#FFBA3A" d="M7.4 1L1 7.4l6.4 6.3"></path></svg>
                                    <span>Back to the checklist</span>
                                </button>
                            </div>
                        </div>
                        <div class="content"><?= $checklist_item->text ?></div>
                        <div class="bottom">
                            <?php if ($checklist_item->id > 1): ?>
                                <button
                                    class="back"
                                    data-keradan-popup-set-screen="text-item"
                                    data-keradan-popup-set-list-item-id="<?= $checklist_item->id - 1 ?>"
                                    data-keradan-int-el>
                                    Back
                                </button>
                            <?php endif; ?>
                            <?php if ($checklist_item->id < count($checklist_items)): ?>
                                <button
                                    class="next"
                                    data-keradan-popup-set-screen="text-item"
                                    data-keradan-popup-set-list-item-id="<?= $checklist_item->id + 1 ?>"
                                    data-keradan-int-el>
                                    Next
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <?php foreach ($checklist_items as $checklist_item): ?>
                    <div
                        class="single-checklist-video-item"
                        data-keradan-popup-screen="video-item"
                        data-keradan-popup-item-id="<?= $checklist_item->id ?>">
                        <div class="head">
                            <div class="number">
                                <span><?= $checklist_item->id ?></span>
                            </div>
                            <div class="title"><?= $checklist_item->title ?></div>
                            <div class="buttons">
                                <button
                                    class="text"
                                    data-keradan-popup-set-screen="text-item"
                                    data-keradan-popup-set-list-item-id="<?= $checklist_item->id ?>"
                                    data-keradan-int-el>
                                    <span>Read text</span>
                                </button>
                                <button
                                    class="back"
                                    data-keradan-popup-set-screen="items-list"
                                    data-keradan-int-el>
                                    <svg viewBox="0 0 8 15"><path fill="none" stroke-width="2" stroke="#FFBA3A" d="M7.4 1L1 7.4l6.4 6.3"></path></svg>
                                    <span>Back to the checklist</span>
                                </button>
                            </div>
                        </div>
                        <div class="content">
                            <iframe src="https://www.youtube.com/embed/<?= $checklist_item->video_id ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="bottom">
                            <?php if ($checklist_item->id > 1): ?>
                                <button
                                    class="back"
                                    data-keradan-popup-set-screen="video-item"
                                    data-keradan-popup-set-list-item-id="<?= $checklist_item->id - 1 ?>"
                                    data-keradan-int-el>
                                    Back
                                </button>
                            <?php endif; ?>
                            <?php if ($checklist_item->id < count($checklist_items)): ?>
                                <button
                                    class="next"
                                    data-keradan-popup-set-screen="video-item"
                                    data-keradan-popup-set-list-item-id="<?= $checklist_item->id + 1 ?>"
                                    data-keradan-int-el>
                                    Next
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
                
                <div class="common-bottom-black-logo">
                    <?= $images->black_logo ?>
                </div>
            </div>
        </div>
    </div>

    <div id="keradan-popup-roadmap" data-keradan-popup-name="roadmap">
        <div class="inner">
            <button class="close">
                <svg viewBox="0 0 20 22">
                    <path fill="#000" d="M18.7 20.7a2.4 2.4 0 01-3.4 0l-5.3-6-5.3 6a2.4 2.4 0 11-3.4-3.4L6.8 11 1.3 4.7a2.4 2.4 0 113.4-3.4l5.3 6 5.3-6a2.4 2.4 0 113.4 3.4L13.2 11l5.5 6.3a2.4 2.4 0 010 3.4z"/>
                </svg>
                <span>Close</span>
            </button>
            <div class="head" style="background-image: url(<?= $images->narrow_head ?>);">
                <span class="title">Roadmap to applying for a loan</span>
            </div>
            <div class="middle-part">
                <div class="dynamic-content-wrapper">
                    <div class="full-roadmap" data-keradan-popup-screen="items-list">
                        <div class="title-for-wide">Roadmap to applying for a loan</div>
                        <div class="content">
                            <div class="list">
                                <?php foreach ($roadmap_items as $roadmap_item): ?>
                                    <div
                                        class="link-box"
                                        data-keradan-popup-set-screen="text-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id ?>"
                                        data-keradan-popup-item-id="<?= $roadmap_item->id ?>"
                                        data-keradan-int-el>
                                        <div class="circle"><span></span></div>
                                        <div class="title">
                                            <?= $roadmap_item->id ?>. <?= $roadmap_item->title ?>
                                        </div>
                                        <div class="link">
                                            <span>Learn More</span>
                                            <svg fill="none" class="wide" viewBox="0 0 10 15"><path stroke="#FFBA3A" d="M.7 14l8-6.5-8-6.3"/></svg>
                                            <svg fill="none" class="mob" viewBox="0 0 31 31"><circle cx="15.5" cy="15.5" r="15.5" fill="#FDAD2D"/><path fill="#000" d="M24.4 16.4c.1-.2.1-.6 0-.8l-3.2-3.1a.5.5 0 10-.7.7l2.8 2.8-2.8 2.8a.5.5 0 10.7.7l3.2-3.1zM8 16.5h16v-1H8v1z"/></svg>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <a href="<?= $domain ?>/contact/" class="contact-us">Contact Us</a>
                        </div>
                        <div class="bottom">
                            <?= $images->black_logo ?>
                        </div>
                    </div>
                
                    <?php foreach ($roadmap_items as $roadmap_item): ?>
                        <div
                            class="single-roadmap-text-item"
                            data-keradan-popup-screen="text-item"
                            data-keradan-popup-item-id="<?= $roadmap_item->id ?>">
                            <div class="title-for-wide">Roadmap to applying for a loan</div>
                            <div class="head">
                                <div class="circle"><span></span></div>
                                <div class="title">
                                    <?= $roadmap_item->id ?>. <?= $roadmap_item->title ?>
                                </div>
                                <div class="buttons">
                                    <button
                                        class="video"
                                        data-keradan-popup-set-screen="video-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id ?>"
                                        data-keradan-int-el>
                                        <svg fill="none" viewBox="0 0 22 22"><circle cx="11" cy="11" r="11" fill="#FFBA3A"></circle><path fill="#262626" d="M15 11.5l-6.8 3.9V7.6l6.8 3.9z"></path></svg>
                                        <span>Watch video</span>
                                    </button>
                                    <button
                                        class="back"
                                        data-keradan-popup-set-screen="items-list"
                                        data-keradan-int-el>
                                        <svg viewBox="0 0 8 15"><path fill="none" stroke-width="2" stroke="#FFBA3A" d="M7.4 1L1 7.4l6.4 6.3"></path></svg>
                                        <span>Back to the roadmap</span>
                                    </button>
                                </div>
                            </div>
                            <div class="content"><?= $roadmap_item->text ?></div>
                            <div class="bottom">
                                <?php if ($roadmap_item->id > 1): ?>
                                    <button
                                        class="back"
                                        data-keradan-popup-set-screen="text-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id - 1 ?>"
                                        data-keradan-int-el>
                                        Back
                                    </button>
                                <?php endif; ?>
                                <?php if ($roadmap_item->id < count($roadmap_items)): ?>
                                    <button
                                        class="next"
                                        data-keradan-popup-set-screen="text-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id + 1 ?>"
                                        data-keradan-int-el>
                                        Next
                                    </button>
                                <?php endif; ?>
                            </div>
                            <div class="bottom-button-back">
                                <button
                                    class="back"
                                    data-keradan-popup-set-screen="items-list"
                                    data-keradan-int-el>
                                    <svg viewBox="0 0 8 15"><path fill="none" stroke-width="2" stroke="#FFBA3A" d="M7.4 1L1 7.4l6.4 6.3"></path></svg>
                                    <span>Back to the roadmap</span>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>

                    <?php foreach ($roadmap_items as $roadmap_item): ?>
                        <div
                            class="single-roadmap-video-item"
                            data-keradan-popup-screen="video-item"
                            data-keradan-popup-item-id="<?= $roadmap_item->id ?>">
                            <div class="title-for-wide">Roadmap to applying for a loan</div>
                            <div class="head">
                                <div class="circle"><span></span></div>
                                <div class="title">
                                    <?= $roadmap_item->id ?>. <?= $roadmap_item->title ?>
                                </div>
                                <div class="buttons">
                                    <button
                                        class="text"
                                        data-keradan-popup-set-screen="text-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id ?>"
                                        data-keradan-int-el>
                                        <span>Read text</span>
                                    </button>
                                    <button
                                        class="back"
                                        data-keradan-popup-set-screen="items-list"
                                        data-keradan-int-el>
                                        <svg viewBox="0 0 8 15"><path fill="none" stroke-width="2" stroke="#FFBA3A" d="M7.4 1L1 7.4l6.4 6.3"></path></svg>
                                        <span>Back to the roadmap</span>
                                    </button>
                                </div>
                            </div>
                            <div class="above-video-text"><?= $roadmap_item->text_above_content ?></div>
                            <div class="content">
                                <iframe src="https://www.youtube.com/embed/<?= $roadmap_item->video_id ?>" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="bottom">
                                <?php if ($roadmap_item->id > 1): ?>
                                    <button
                                        class="back"
                                        data-keradan-popup-set-screen="video-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id - 1 ?>"
                                        data-keradan-int-el>
                                        Back
                                    </button>
                                <?php endif; ?>
                                <?php if ($roadmap_item->id < count($roadmap_items)): ?>
                                    <button
                                        class="next"
                                        data-keradan-popup-set-screen="video-item"
                                        data-keradan-popup-set-list-item-id="<?= $roadmap_item->id + 1 ?>"
                                        data-keradan-int-el>
                                        Next
                                    </button>
                                <?php endif; ?>
                            </div>
                            <div class="bottom-button-back">
                                <button
                                    class="back"
                                    data-keradan-popup-set-screen="items-list"
                                    data-keradan-int-el>
                                    <svg viewBox="0 0 8 15"><path fill="none" stroke-width="2" stroke="#FFBA3A" d="M7.4 1L1 7.4l6.4 6.3"></path></svg>
                                    <span>Back to the roadmap</span>
                                </button>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    
                    <div class="common-bottom-black-logo">
                        <?= $images->black_logo ?>
                    </div>
                </div>
                <div class="sidebar" style="background-image: url(<?= $images->sidebar ?>);">
                    <?= $images->white_logo ?>
                </div>
            </div>
        </div>
    </div>




<?php /* styles and scripts here */ ?>
    <style id="keradan-popup-preload-styles">#keradan-popup-checklist, #keradan-popup-roadmap {display: none;}</style>
    <link rel="preload" href="<?= $assets->css ?>" as="style" onload="this.onload=null;this.rel='stylesheet'; document.querySelector('#keradan-popup-preload-styles').remove();">
    <noscript><link rel="stylesheet" href="<?= $assets->css ?>"></noscript>
    <script>
        window.keradan = window.keradan ?? {};
        window.keradan.mbb = {
            is_prod: <?= $is_prod ? 'true' : 'false' ?>,
            v: <?= $v ?>,
        };
        keradan.mbb.log = function() {
            if(!keradan.mbb.is_prod) console.log.apply(this, arguments);
        };

        keradan.mbb.log(`%c Keradan's popups for mbb (v - ${keradan.mbb.v}) is here:`, 'background: #222; color: #bada55', keradan.mbb);
    </script>
    <script>
        keradan.mbb.model = {
            checklist: {
                current_screen: 'items-list',
                current_item: null,
                already_seen: [],
                items_count: <?= count($checklist_items) ?>,
                <?php /*
                items:  <?= json_encode($checklist_items) ?>,
                */ ?>
            },
            roadmap: {
                current_screen: 'items-list',
                current_item: null,
                already_seen: [],
                items_count: <?= count($roadmap_items) ?>,
                <?php /*
                items:  <?= json_encode($roadmap_items) ?>,
                */ ?>
            },
        };
    </script>
    <script defer src="<?= $assets->js ?>"></script>
    <script> // polyfil for "closest"
        (function(ELEMENT) {
            ELEMENT.matches = ELEMENT.matches || ELEMENT.mozMatchesSelector || ELEMENT.msMatchesSelector || ELEMENT.oMatchesSelector || ELEMENT.webkitMatchesSelector;
            ELEMENT.closest = ELEMENT.closest || function closest(selector) {
                if (!this) return null;
                if (this.matches(selector)) return this;
                if (!this.parentElement) {return null}
                else return this.parentElement.closest(selector)
              };
        }(Element.prototype));
    </script>




