<?php

/* Template Name: COPY CALCULATOR */

?>


<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->

    <link rel="stylesheet" href="../wp-content/themes/hpdm/strategy/strategy.css">
    <link rel="shortcut icon" type="image/png" href="http://highperformancedm.com/wp-content/themes/hpdm/favicon.png">

    <?php wp_head(); ?>
</head>
<body>
<header class="mc-wrap">
    <nav>
        <h1 class="head-logo"><a href="http://highperformancedm.com/" target="_blank">High Performance Direct Marketing</a> </h1>
    </nav>
    <div class="calc-icon"></div>
</header>

<div class="mc-wrap copy-whitey">

    <div class="gray-bar-top"></div>

    <div class="mc-calc">
        <form name="copy-calculator">
        <div class="calc-list">
            <h3>Check words used in your campaigns then hit calculate</h3>
            <ul id="calc-ul-one">
                <li><input class="mc-checkbox pos" type="checkbox">Free</li>
                <li><input class="mc-checkbox pos" type="checkbox">Understand</li>
                <li><input class="mc-checkbox neg" type="checkbox">Death</li>
                <li><input class="mc-checkbox pos" type="checkbox">Proven</li>
                <li><input class="mc-checkbox neg" type="checkbox">Sell</li>
                <li><input class="mc-checkbox neg" type="checkbox">Pay</li>
                <li><input class="mc-checkbox pos" type="checkbox">Health</li>
                <li><input class="mc-checkbox neg" type="checkbox">Try</li>
                <li><input class="mc-checkbox pos" type="checkbox">Safety</li>
                <li><input class="mc-checkbox neg" type="checkbox">Must</li>
                <li><input class="mc-checkbox neg" type="checkbox">Obligation</li>
            </ul>
            <ul id="calc-ul-two">
                <li><input class="mc-checkbox pos" type="checkbox">Love</li>
                <li><input class="mc-checkbox pos" type="checkbox">Complimentary</li>
                <li><input class="mc-checkbox pos" type="checkbox">Discover</li>
                <li><input class="mc-checkbox neg" type="checkbox">Hurt</li>
                <li><input class="mc-checkbox pos" type="checkbox">Right</li>
                <li><input class="mc-checkbox pos" type="checkbox">Profit</li>
                <li><input class="mc-checkbox pos" type="checkbox">Happy</li>
                <li><input class="mc-checkbox neg" type="checkbox">Failure</li>
                <li><input class="mc-checkbox neg" type="checkbox">Difficult</li>
                <li><input class="mc-checkbox pos" type="checkbox">Save</li>
                <li><input class="mc-checkbox pos" type="checkbox">New</li>
            </ul>

            <ul id="calc-ul-three">
                <li><input class="mc-checkbox pos" type="checkbox">Value</li>
                <li><input class="mc-checkbox pos" type="checkbox">Fun</li>
                <li><input class="mc-checkbox pos" type="checkbox">Vital</li>
                <li><input class="mc-checkbox pos" type="checkbox">Approve</li>
                <li><input class="mc-checkbox neg" type="checkbox">Cost</li>
                <li><input class="mc-checkbox neg" type="checkbox">Contract</li>
                <li><input class="mc-checkbox neg" type="checkbox">Sign</li>
                <li><input class="mc-checkbox neg" type="checkbox">Worry</li>
                <li><input class="mc-checkbox neg" type="checkbox">Loss</li>
                <li><input class="mc-checkbox pos" type="checkbox">Money</li>
                <li><input class="mc-checkbox pos" type="checkbox">Truth</li>
            </ul>

            <ul id="calc-ul-four">
                <li><input class="mc-checkbox neg" type="checkbox">Lose</li>
                <li><input class="mc-checkbox neg" type="checkbox">Liability</li>
                <li><input class="mc-checkbox neg" type="checkbox">Buy</li>
                <li><input class="mc-checkbox pos" type="checkbox">Trust</li>
                <li><input class="mc-checkbox pos" type="checkbox">Easy</li>
                <li><input class="mc-checkbox neg" type="checkbox">Bad</li>
                <li><input class="mc-checkbox neg" type="checkbox">Sold</li>
                <li><input class="mc-checkbox neg" type="checkbox">Price</li>
                <li><input class="mc-checkbox pos" type="checkbox">Guarantee</li>
                <li><input class="mc-checkbox neg" type="checkbox">Decision</li>
                <li><input class="mc-checkbox neg" type="checkbox">Hard</li>
            </ul>

        </div>
        <div class="calc-wrap">
            <div class="mc-calc-back">
                <div class="mc-calc-window">
                    <span id="mc-display-pos">00.00%</span>
                    <span id="mc-display-neg">00.00%</span>
                </div>
            </div>
            <button id="calculate">CALCULATE</button>
            <button id="reset">RESET</button>
        </form>
        </div>


    </div>
    <div class="she-points">
        <h3 class="red-point">Here's What the HPDM Copy Calculator Says About Your Words</h3>
        <p>Of the <span id="display-total-words">__________</span> words you said were in your direct mail copy,<br>
        <span id="display-total-pos">__________</span> were effective words to use but <span id="display-total-neg">__________</span> were not so effective.</p>
        <p class="display-last-p">With <span id="display-total-percent">__________</span>% of your choices being effective,<span id="display-help"> HPDM can likely<br>
        help you improve response rates through enhanced copy choices.</span></p>
    </div>
    <div class="gray-bar"></div>

    <aside class="response-bottom-left">
        <img src="../wp-content/themes/hpdm/strategy/imgs/bob.png">
        <span class="aside-title">Bob Hacker</span><br>
        <span>HPDM Chief Strategist Legendary</span><br>
        <span>DM Marketer & Harvard MBA</span>
        <p>
            Since 1986, Bob Hacker has specialized in new customer acquisition and built one of the most successful direct marketing agencies on the planet.  Bob sold his agency and retired in 2002, but is now helping large mail marketers by acting as Chief Strategist for a direct marketing services organization (High Performance Direct Marketing). Bob served on the editorial board of Target Marketing magazine and was a frequent writer and speaker on direct marketing issues.  He is a graduate of The Harvard Business School and the University of Washington. What follows is an excerpt  from his book showing just one of his many formulas for rational planning of direct mail marketing campaigns.
        </p>

    </aside>

    <div class="copy-holder">
        <h2 class="top-red">How To Create & Manage<br>
        High-performance Copy</h2>
        <span>By Bob Hacker</span>
        <p>Once you make sure your list selection is as good as it can be, the key determinants of success in any direct marketing campaign are copy and offer.  For great copy that drives high response, use these tried and proven rules:
        </p>
        <p>Avoid mission impossible at all costs.   One of the major faults in direct marketing planning is asking direct marketing to do the impossible.  This is where many programs fail, so before the first word is written, make sure the strategy is correct. </p>
        <p>A good check question is, “Are you asking the program to do the difficult or impossible?”</p>
        <p>For example, if you are selling a $49.95 software upgrade, it might be difficult, but it is possible — even necessary — to ask for and get the money in the lead package.  There isn’t enough margin to invest a lot of backend resources for conversion, so you either get the money in the first pass, or you don’t get it at all.  And the price point is low enough that people can and will make an impulse decision.</p>
        <p>On the other hand, if you’re selling a $2 million software upgrade, to ask for the money in the lead package is a “mission impossible.”  No sane individual will write a check for $2,000,000 without going through a formal decision process.  The decision steps will be defined by the buyer, not the seller, and the buyer will take whatever time they need to reach a conclusion that they feel is 1) correct, and 2) they can justify to the powers that be.  So in this case, lead generation, with qualified leads going to a telesales or field sales organization, is almost always the most cost-effective strategy — even if you’re facing quarterly revenue shortfalls!</p>
        <p>Revenue panic drives mission impossible marketing more than any other single factor.  A sales manager is behind target, afraid of missing his or her bonus.  “What can you do to help us make sales quota this quarter”, they cry?</p>
        <p>If your typical selling cycle is 18 months, for example, the answer should be, “we did it 18 months ago.”  But politics and greed prevail and the “send me $2,000,000 by September 30th so I can make my bonus” letter goes out anyway.</p>
        <p>The dumbest letter I ever received.  I received a letter one day.  If was from a golf club about 20 miles away.  To get there, you would have to drive 20 miles each way on I-405, the longest parking lot in Washington State.  Problems already: who targeted the geography.  There’s a very nice golf resort only 1.5 miles from my house, so why would I fight the worst traffic in the state to play a round or two?</p>
        <p>Second big problem, I don’t play golf.  With the last name “Hacker”, you don’t.  There are lists you can rent that target by income and golf interest, obviously they didn’t use one of those lists.  Who’s doing this work, anyway?</p>
        <span>And then I read the letter. </span>
        <div class="yellow-block">
            <p>Dear Mr. Hacker,</p>
            <p>You’ll be pleased to know that there are a limited number of memberships available at (Name withheld to protect the guilty) Golf Resort & Club.</p>
            <p>Between now and the end of the month, one can be yours for only $35,000 instead of the regular fee or $45,000.
            </p>
            <p>Call, (name of failing sales manager) to accept this fabulous offer.Yada, yada, yada.</p>
        </div>
            <p>Even if the targeting had been right, what were they thinking?</p>
            <p>I’ve never seen the place.  I’ve never played there.  I haven’t had a drink in their bar or lunch in the clubhouse.  I don’t know anybody who plays there.  Don’t you think we should date a while before you ask me to marry you and bring along a $35,000 dowry?
            </p>
            <p>We did a campaign for another club.  It was a virtual club that didn’t even have a course of its own.  Instead, they had preferred tee times at 10 clubs around Seattle/Bellevue and a private “clubhouse” in downtown Bellevue for the members to hang out in.
            </p>
            <p>We sent a letter to dyed-in-the-wool golfers with money.  We told a compelling story about the benefits of membership — all the panache of an exclusive, private golf club, but you get preferred tee times a variety of great courses and tournaments instead of playing the same, boring course time after time.  To find out more, we invited them to come to the clubhouse in Bellevue.
            </p>
            <p>We tested two panels, one with a BRC or phone response, and the other with only a phone response option.  The BRC/phone package pulled 16%; the phone only pulled 12%.  We rolled out the phone only option because the selling process was faster and conversion to sales presentation was higher because of less phone-tag.
            </p>
            <p>The “send me $35,000 package” probably pulled about 0%.  When you get 0% response, the sales conversion, even at 100%, is 0%.  And it’s the direct marketer’s fault.
            </p>
            <p>With response rates of 12-16%, the direct marketer is off the hook.  The pressure is now all on the sales team, where it should be.  And life is great.
            </p>
            <p>Work backwards to maximize response and sell-through.</p>
            <p>How do you separate the difficult from the impossible?  It’s easy, you work backwards.  Start with the buyer, not your agendas, concerns and problems.  Even the “dumbest letter” disaster in the last chapter could have been avoided if they had started the project worrying about me, not their paychecks.
            </p>
            <p>If the purchase price is low, almost anybody has the emotional ability and wherewithal to make a decision.  Then the selling process can be simple with little backend support or infrastructure.
            </p>
            <p>But high price point drives very different decision processes.  Teams must be formed.  The team will set a rigid decision agenda.  You have to understand the information they need to say yes or no.  When do they need it?  How do they want it delivered?  What processes do they use to make their decisions?  How do they get budgets approved?  What are timing constraints for approval?  For example, if you are asking for a major capital investment that has to go to the board for approval, what information do they need to take to the board and when would the money be allocated and spent?
            </p>
            <p>Do you really think you can make it happen with a two-page letter and a brochure?</p>
            <p>Work backwards from them to you, and all will become clear.</p>
            <p>Avoid marketing plans in drag.  Too many packages read like re-written Marcom plans — if there are 13 communications objectives for the year, all 13 have to be communicated on the first page of every letter.  Focus on a single action objective.  The more communications objectives you pile on, the lower the response rates will be.
            </p>
            <p>Get under their skin.  Remember that for us there’s no such thing as mass communication.  You’re writing to thousands of individual readers, who will read your copy one at a time.  So, before you sit down at the keyboard to talk to them, make sure you know who they are.  What do they want, what are they afraid of?  What wakes them up at 2 a.m.?  What is driving them forward?  What is holding them back?
            </p>
            <p>Companies don’t buy anything, people do.  Just like the consumer world, understand the target individual, not just the company.  Business people are still people.  Where do you get this information?  We’re talking about people, so it’s easy.  Trade publications wear their industry’s emotional heartstrings on their sleeves.  Want to know what a CIO is interested in, read what they read.  Farmers, marketing people, government purchasing, you name it, it works.
            </p>
            <p>Focus on the mindset of the recipient.  Advertising talks about the company and its products.  Bad direct marketing is all about company stuff, too.  But high-performance direct copy focuses on the mindset of the recipient and engages them one-to-one, based on what they care about.  You want to sell your product — they want to save time or money or look smarter.  You want to close a sale now — they want to buy based on their buying cycle and their purchase agenda and comfort level.  You want them to care deeply about your company, your brand, products and services.
            </p>
            <p>Capture their hearts to get to their minds.  Their wallets will follow.  They don’t care about your company, your quarterly goals, your products and services or anything else you want to sell them.  Need proof?  Look at your own priorities.  Do you care or focus on other companies’ agendas, or are you wrapped up in your own stuff?  The battle for direct marketing engages at the point they open an email, read a direct mail package or turn to your direct response ad in a newspaper or magazine.  Right then, right now.  Let’s assume you have a new product, it’s 33% faster than the competition.  Let’s also assume that you know the target market is over-stressed, over-committed and burned out.  Let’s say your mail package arrives at the same time, in the same mailbox, with a competitor’s.  One of these packages promises, “The New Hypodrive 334i-556 is 33% faster in duodecaflop mode than any competitive unit currently available today.”  The other promises, “Now, you can get more done faster and easier.  You can now get ahead at work and spend more time with your family, too.”  Which one wins?  Which one do you want to be your package?  It’s the second package, the one that talks to the recipient like a real person who has real problems.  And years of testing proves it.
            </p>
            <p>Write like you talk.  Direct marketing is intimate communication.  The voice is one-to-one, not blasting from the rooftops.  Talk to them like they arefriends, in a conversational tone.  And write the way you talk.  Tell them, friend-to-friend, why they should consider your offer.  Ignore internally generated brand or design standards when they get in the way of your ability to engage one-to-one.  Remember, the “brand essence book” was written by a design firm or an advertising agency, neither ever having had direct responsibility to sell anything.  As direct marketing professionals, we don’t have that luxury.
            </p>
            <p>If you try to make them work, they won’t.  If the package is difficult to understand, they won’t work to “get it,” they just toss it.  If the layout is hard to read, they don’t work to “get it,” they just toss it.  If the jargon is too arcane, they don’t look it up in the jargon dictionary, they delete you with a click.  If you force them to work with difficult folds or upside down formats, they don’t.  If you bury the response device inside the brochure, they won’t look for it.  If they can’t figure out how to fill out the order form, they won’t.  So don’t.
            </p>
        <p>Don’t over-edit.  Let me let you in on a little known secret.  Direct marketing, particularly letter copy, does not survive editing well.  People try to smooth it — ragged copy usually works better.  People try to make it make more sense — rationality is often boring and boring reduces response, too.  The writer had an idea about how to manipulate the recipient to move now.  By the time it gets through committee, the big, exciting, bright red idea has been muted to dull gray.  Leave it alone, response rates will increase.
        </p>
        <p>Let them respond any way they want.  We see many clients try to push people to the web, not because it’s better for the prospect, but because it’s better for them.  We see others push to the phone, or fax, or to BRC, again because it fits into the systems they’ve created, not necessarily because it’s the way the prospect wants to respond.  Let them respond in any way they want — mail, phone, fax, web, email or any other source as long as you can trap it — response rates will improve dramatically.  (The techno-geek caveat:  If you are talking to techies who are people-, paper-, phone- and fax-phobic, sending all inquiries to the web works fine.)</p>


    </div>
</div>





<div class="mc-wrap">
    <footer>
        <div class="footer-left">
            <div class="logo-wrap">
                <a class="footer-logo" href="http://highperformancedm.com/" target="_blank"><img src="../wp-content/themes/hpdm/strategy/imgs/footer-logo.png"></a>
            </div>
            <span class="footer-address">High Performance Direct Marketing</span><br>
            <address class="footer-address">11232 120th Ave. NE, Suite 200, Kirkland, Wa 98033</address>
        </div>
        <div class="footer-right">
            <span class="footer-name">Jim Miller</span>
            <a href="mailto:jim@highperformance.com?subject=Strategy">Jim@HighPerformanceDM.com</a>
            <a href="tel:630-751-6208">(630) 751-6208</a>
        </div>
    </footer>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    jQuery(function($){

        $('#calculate').on('click', function(){
            $('#display-help').html(" HPDM can likely help you improve response rates through enhanced copy choices.");
            if ($('.mc-checkbox:checked').length > 0){
                var totalChecked = $('.mc-checkbox:checked').length;
                var totalPos = $('.pos:checked').length;
                var totalNeg = $('.neg:checked').length;
                var posPercent = ((totalPos / totalChecked) * 100).toFixed(2);
                var negPercent = (100 - posPercent).toFixed(2);
                console.log(totalChecked, totalPos, totalNeg, posPercent, negPercent);
            $('.copy-whitey').css('height','3191px');
            $('#display-total-words').html(totalChecked);
            $('#display-total-pos').html(totalPos);
            $('#display-total-neg').html(totalNeg);
            $('#display-total-percent').html(posPercent);
                if (posPercent < 69.99){
                    $('.mc-calc-window').removeClass('override-caution');
                    $('.mc-calc-window').addClass('override-negative');
                }
                if (posPercent < 79.99 && posPercent > 69.99){
                    $('.mc-calc-window').removeClass('override-negative');
                    $('.mc-calc-window').addClass('override-caution');

                }if (posPercent >79.99){
                     $('#display-help').html(" it appears that you're likely making good copy  choices.");
                    $('.mc-calc-window').removeClass('override-caution','override-negative');
                }
            $('#mc-display-pos').html(posPercent + '%');
            $('#mc-display-neg').html(negPercent + '%');



                $('.she-points').show('slow')
                    return false;
            }

            })
        $('#reset').on('click', function(){

            $('.copy-whitey').css('height','2974px');
            $('#mc-display-pos').html('00.00%');
            $('#mc-display-neg').html('00.00%');
            $('.mc-calc-window').removeClass('override-caution override-negative');
            $('#display-help').html(" HPDM can likely help you improve response rates through enhanced copy choices.");
            $('.mc-checkbox').prop('checked', false);
            $('.she-points').hide('slow');
            return false;
        });






    });
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
<?php wp_footer(); ?>
</body>
</html>
