<?php

/* Template Name: CONCEPT CALCULATOR */

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
    <div class="win-icon"></div>
</header>

<div class="mc-wrap con-cal-whitey">

    <div class="gray-bar-top"></div>
    <div class="concept-cal">

            <p class="calc-header">Follow the instructions to use this mail <span class="con-cal-red">Concept Calculator </span>to determine the response rate required to hit your allowable marketing costs.</p>
            <aside class="calc-directions">
                <span class="dir-heading">Response Calculator Instructions</span>
                <ol>
                    <li>Enter your allowable cost per response</li>
                    <li>Enter your mail quantity</li>
                    <li>You can now enter the costs of up to 5 packages (A through E) to include:</li>
                </ol>
                <ul>

                    <li>- Creative (flat fee)</li>
                    <li>- Print/Mail (per thousand)</li>
                    <li>- Postage (per piece)</li>
                    <li>- List (per thousand)</li>
                    <li>- Other (flat fee)</li>
                </ul>
            </aside>
          <div class="cal-js">

                <div class="top-cell">
                    <div class="allowable">
                        <span>Allowable Cost-per-Response</span>
                    </div>
                    <div class="allowable-range">
                        <div class="top-allowable-sub top-sub-cell">
                            <span class="allowable-range-total reset-this">0</span><span class="money-span">$</span>
                        </div>
                        <div class="top-allowable-range mc-range">
                            <a id="top-allowable-dwn" class="dwn-btn a-sum" href="#"></a>

                            <div class="top-allowable-marker mc-marker"></div>

                            <a id="top-allowable-up" class="up-btn a-sum" href="#"></a>
                        </div>
                    </div>
                    <div class="mail-quality">
                        <span>Mail Quality</span>
                    </div>
                    <div class="mail-quality-range">
                        <div class="top-mail-sub top-sub-cell">
                            <span class="mail-range-total reset-this">0</span>
                        </div>
                        <div class="top-mail-range mc-range">
                            <a id="top-mail-dwn" class="dwn-btn a-sum" href="#"></a>
                            <div class="top-mail-marker mc-marker"></div>
                            <a id="top-mail-up" class="up-btn a-sum b-sum c-sum d-sum e-sum" href="#"></a>
                        </div>
                    </div>
                    <a id="mc-reset" href="#">Reset</a>
                </div>
                <div class="cal-body">
                    <div class="prog-row">
                        <ul>
                            <li>Package</li><!--
                            --><li>Creative (flat)</li><!--
                            --><li>Print/Mail (per M)</li><!--
                            --><li>Postage (per piece)</li><!--
                            --><li>List (per M)</li><!--
                            --><li>Other (flat)</li><!--
                            --><li>Total Cost</li>
                        </ul>
                    </div>
                    <div class="concept-a">
                            <div class="a-first-cell first-cell">
                                <span>Concept A</span>
                            </div>

                            <div class="a-creative-cell mc-cell">
                                <div class="a-creative-total sub-cell">
                                    <span class="a-creative-range-total reset-this">0</span><span class="money-span">$</span>
                                </div>

                                <div class="a-creative-range mc-range">
                                    <a id="a-creative-dwn" class="dwn-btn a-sum" href="#"></a>
                                    <div class="a-creative-marker mc-marker"></div>
                                    <a id="a-creative-up" class="up-btn a-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="a-print-cell mc-cell">
                                <div class="a-print-total sub-cell">
                                    <span class="a-print-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="a-print-range mc-range">
                                    <a id="a-print-dwn" class="dwn-btn a-sum" href="#"></a>
                                    <div class="a-print-marker mc-marker"></div>
                                    <a id="a-print-up"  class="up-btn a-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="a-postage-cell mc-cell">
                                <div class="a-postage-total sub-cell">
                                    <span class="a-postage-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="a-postage-range mc-range">
                                    <a id="a-postage-dwn" class="dwn-btn a-sum" href="#"></a>
                                    <div class="a-postage-marker mc-marker"></div>
                                    <a id="a-postage-up" class="up-btn a-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="a-list-cell mc-cell">
                                <div class="a-list-total sub-cell">
                                    <span class="a-list-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="a-list-range mc-range">
                                    <a id="a-list-dwn" class="dwn-btn a-sum" href="#"></a>
                                    <div class="a-list-marker mc-marker"></div>
                                    <a id="a-list-up" class="up-btn a-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="a-other-cell mc-cell">
                                <div class="a-other-total sub-cell">
                                    <span class="a-other-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="a-other-range mc-range">
                                    <a id="a-other-dwn" class="dwn-btn a-sum" href="#"></a>
                                    <div class="a-other-marker mc-marker"></div>
                                    <a id="a-other-up" class="up-btn a-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="a-total-cell total-cell">
                                <span class="money-span">$&nbsp;</span><span class="a-total-sum reset-this">0</span>
                            </div>
                    </div>

                    <div class="concept-b">
                            <div class="b-first-cell first-cell">
                                <span>Concept B</span>
                            </div>

                            <div class="b-creative-cell mc-cell">
                                <div class="b-creative-total sub-cell">
                                    <span class="b-creative-range-total reset-this">0</span><span class="money-span">$</span>
                                </div>

                                <div class="b-creative-range mc-range">
                                    <a id="b-creative-dwn" class="dwn-btn b-sum" href="#"></a>
                                    <div class="b-creative-marker mc-marker"></div>
                                    <a id="b-creative-up" class="up-btn b-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="b-print-cell mc-cell">
                                <div class="b-print-total sub-cell">
                                    <span class="b-print-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="b-print-range mc-range">
                                    <a id="b-print-dwn" class="dwn-btn b-sum" href="#"></a>
                                    <div class="b-print-marker mc-marker"></div>
                                    <a id="b-print-up"  class="up-btn b-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="b-postage-cell mc-cell">
                                <div class="b-postage-total sub-cell">
                                    <span class="b-postage-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="b-postage-range mc-range">
                                    <a id="b-postage-dwn" class="dwn-btn b-sum" href="#"></a>
                                    <div class="b-postage-marker mc-marker"></div>
                                    <a id="b-postage-up" class="up-btn b-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="b-list-cell mc-cell">
                                <div class="b-list-total sub-cell">
                                    <span class="b-list-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="b-list-range mc-range">
                                    <a id="b-list-dwn" class="dwn-btn b-sum" href="#"></a>
                                    <div class="b-list-marker mc-marker"></div>
                                    <a id="b-list-up" class="up-btn b-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="b-other-cell mc-cell">
                                <div class="b-other-total sub-cell">
                                    <span class="b-other-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="b-other-range mc-range">
                                    <a id="b-other-dwn" class="dwn-btn b-sum" href="#"></a>
                                    <div class="b-other-marker mc-marker"></div>
                                    <a id="b-other-up" class="up-btn b-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="b-total-cell total-cell">
                                <span class="money-span">$&nbsp;</span><span class="b-total-sum reset-this">0</span>
                            </div>
                    </div>

                    <div class="concept-c">
                            <div class="c-first-cell first-cell">
                                <span>Concept C</span>
                            </div>

                            <div class="c-creative-cell mc-cell">
                                <div class="c-creative-total sub-cell">
                                    <span class="c-creative-range-total reset-this">0</span><span class="money-span">$</span>
                                </div>

                                <div class="c-creative-range mc-range">
                                    <a id="c-creative-dwn" class="dwn-btn c-sum" href="#"></a>
                                    <div class="c-creative-marker mc-marker"></div>
                                    <a id="c-creative-up" class="up-btn c-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="c-print-cell mc-cell">
                                <div class="c-print-total sub-cell">
                                    <span class="c-print-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="c-print-range mc-range">
                                    <a id="c-print-dwn" class="dwn-btn c-sum" href="#"></a>
                                    <div class="c-print-marker mc-marker"></div>
                                    <a id="c-print-up"  class="up-btn c-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="c-postage-cell mc-cell">
                                <div class="c-postage-total sub-cell">
                                    <span class="c-postage-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="c-postage-range mc-range">
                                    <a id="c-postage-dwn" class="dwn-btn c-sum" href="#"></a>
                                    <div class="c-postage-marker mc-marker"></div>
                                    <a id="c-postage-up" class="up-btn c-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="c-list-cell mc-cell">
                                <div class="c-list-total sub-cell">
                                    <span class="c-list-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="c-list-range mc-range">
                                    <a id="c-list-dwn" class="dwn-btn c-sum" href="#"></a>
                                    <div class="c-list-marker mc-marker"></div>
                                    <a id="c-list-up" class="up-btn c-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="c-other-cell mc-cell">
                                <div class="c-other-total sub-cell">
                                    <span class="c-other-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="c-other-range mc-range">
                                    <a id="c-other-dwn" class="dwn-btn c-sum" href="#"></a>
                                    <div class="c-other-marker mc-marker"></div>
                                    <a id="c-other-up" class="up-btn c-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="c-total-cell total-cell">
                                <span class="money-span">$&nbsp;</span><span class="c-total-sum reset-this">0</span>
                            </div>
                    </div>

                    <div class="concept-d">
                            <div class="d-first-cell first-cell">
                                <span>Concept D</span>
                            </div>

                            <div class="d-creative-cell mc-cell">
                                <div class="d-creative-total sub-cell">
                                    <span class="d-creative-range-total reset-this">0</span><span class="money-span">$</span>
                                </div>

                                <div class="d-creative-range mc-range">
                                    <a id="d-creative-dwn" class="dwn-btn d-sum" href="#"></a>
                                    <div class="d-creative-marker mc-marker"></div>
                                    <a id="d-creative-up" class="up-btn d-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="d-print-cell mc-cell">
                                <div class="d-print-total sub-cell">
                                    <span class="d-print-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="d-print-range mc-range">
                                    <a id="d-print-dwn" class="dwn-btn d-sum" href="#"></a>
                                    <div class="d-print-marker mc-marker"></div>
                                    <a id="d-print-up"  class="up-btn d-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="d-postage-cell mc-cell">
                                <div class="d-postage-total sub-cell">
                                    <span class="d-postage-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="d-postage-range mc-range">
                                    <a id="d-postage-dwn" class="dwn-btn d-sum" href="#"></a>
                                    <div class="d-postage-marker mc-marker"></div>
                                    <a id="d-postage-up" class="up-btn d-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="d-list-cell mc-cell">
                                <div class="d-list-total sub-cell">
                                    <span class="d-list-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="d-list-range mc-range">
                                    <a id="d-list-dwn" class="dwn-btn d-sum" href="#"></a>
                                    <div class="d-list-marker mc-marker"></div>
                                    <a id="d-list-up" class="up-btn d-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="d-other-cell mc-cell">
                                <div class="d-other-total sub-cell">
                                    <span class="d-other-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="d-other-range mc-range">
                                    <a id="d-other-dwn" class="dwn-btn d-sum" href="#"></a>
                                    <div class="d-other-marker mc-marker"></div>
                                    <a id="d-other-up" class="up-btn d-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="d-total-cell total-cell">
                                <span class="money-span">$&nbsp;</span><span class="d-total-sum reset-this">0</span>
                            </div>
                    </div>
                    <div class="concept-e">
                            <div class="e-first-cell first-cell">
                                <span>Concept E</span>
                            </div>

                            <div class="e-creative-cell mc-cell">
                                <div class="e-creative-total sub-cell">
                                    <span class="e-creative-range-total reset-this">0</span><span class="money-span">$</span>
                                </div>

                                <div class="e-creative-range mc-range">
                                    <a id="e-creative-dwn" class="dwn-btn e-sum" href="#"></a>
                                    <div class="e-creative-marker mc-marker"></div>
                                    <a id="e-creative-up" class="up-btn e-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="e-print-cell mc-cell">
                                <div class="e-print-total sub-cell">
                                    <span class="e-print-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="e-print-range mc-range">
                                    <a id="e-print-dwn" class="dwn-btn e-sum" href="#"></a>
                                    <div class="e-print-marker mc-marker"></div>
                                    <a id="e-print-up"  class="up-btn e-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="e-postage-cell mc-cell">
                                <div class="e-postage-total sub-cell">
                                    <span class="e-postage-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="e-postage-range mc-range">
                                    <a id="e-postage-dwn" class="dwn-btn e-sum" href="#"></a>
                                    <div class="e-postage-marker mc-marker"></div>
                                    <a id="e-postage-up" class="up-btn e-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="e-list-cell mc-cell">
                                <div class="e-list-total sub-cell">
                                    <span class="e-list-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="e-list-range mc-range">
                                    <a id="e-list-dwn" class="dwn-btn e-sum" href="#"></a>
                                    <div class="e-list-marker mc-marker"></div>
                                    <a id="e-list-up" class="up-btn e-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="e-other-cell mc-cell">
                                <div class="e-other-total sub-cell">
                                    <span class="e-other-range-total reset-this" >0</span><span class="money-span">$</span>
                                </div>
                                <div class="e-other-range mc-range">
                                    <a id="e-other-dwn" class="dwn-btn e-sum" href="#"></a>
                                    <div class="e-other-marker mc-marker"></div>
                                    <a id="e-other-up" class="up-btn e-sum" href="#"></a>
                                </div>
                            </div>

                            <div class="e-total-cell total-cell">
                                <span class="money-span">$&nbsp;</span><span class="e-total-sum reset-this">0</span>
                            </div>
                    </div>
                    <div class="chart-body">
                        <span class="head-main-span">Required Reponse Rate by Concept</span>
                        <span class="head-span">(to attain Allowable Cost-per-Response)</span>
                        <div class="chart-background">
                        </div>
                            <div class="col-con-a">
                            </div>
                            <div class="col-con-b">
                            </div>
                            <div class="col-con-c">
                            </div>
                            <div class="col-con-d">
                            </div>
                            <div class="col-con-e">
                            </div>
                            <div class="label-row">
                                <ul class="col-label">
                                    <li>Concept A <span class="col-a-percent percent">12</span>%</li>
                                    <li>Concept B <span class="col-b-percent percent">12</span>%</li>
                                    <li>Concept C <span class="col-c-percent percent">12</span>%</li>
                                    <li>Concept D <span class="col-d-percent percent">12</span>%</li>
                                    <li>Concept E <span class="col-e-percent percent">12</span>%</li>
                                </ul>
                            </div>
                    </div>



                  </div>
        </div>
    </div>
    <div class="gray-bar"></div>

    <aside class="response-bottom-left">
        <img src="../wp-content/themes/hpdm/strategy/imgs/bob.png">
        <span class="aside-title">Bob Hacker</span><br>
        <span>HPDM Chief Strategist Legendary</span><br>
        <span>DM Marketer & Harvard MBA</span>
        <p>
            Since 1986, Bob Hacker has specialized in new customer acquisition and built one of the most successful direct marketing agencies on the planet.  Bob sold his agency and retired in 2002, but is now helping large mail marketers by acting as Chief Strategist for a direct marketing services organization (High Performance Direct Marketing). Bob served on the editorial board of Target Marketing magazine and was a frequent writer and speaker on direct marketing issues.  He is a graduate of The Harvard Business School and the University of Washington.
        </p>
    </aside>

    <div class="concept-copy-holder">
        <h2 class="top-red">Great clients control programs with numbers </h2>
        <span>By Bob Hacker</span>
        <img class="concept-infographic" src="../wp-content/themes/hpdm/strategy/imgs/concept-infographic.png">
        <p>The most powerful number in direct marketing is the "allowable cost" number. If you only know one number, this is it.
        </p>
        <span>Examples are:</span>
        <ul>
            <li>Allowable cost per-inquiry</li>
            <li>Allowable cost per-lead</li>
            <li>Allowable cost per-qualified lead</li>
            <li>Allowable cost per-presentation</li>
            <li>Allowable cost per-sale</li>
        </ul>
        <p>The number changes, based on your unique business situation, but you get the idea.</p>
        <p>This is the number that forces rationality into program development and planning. Let me show you how. Let's assume, for example, that the business plan calls for an allowable raw cost-per-order of $25.00 for one-step direct mail campaign.  The agency or vendor is contemplating multiple concepts at various costs, from a low or 23 &cent; for printing and mail to a high of $1.28. All other costs remain the same.</p>
        <p>All solutions that beat the $25.00 target are marked in yellow.</p>
        <p>As you can see, to hit the $25.00 target, Package A would have to hit a response rate of a little over 2%, but Package E would have to hit almost 6.5%. Would you choose package A or E if you were being held accountable for hitting a $25.00 cost-per-order? Would your agency or vendor select the "pretty package" at $1.58 knowing that response rates would have to be more than 300% higher to hit target? Would they select that package if they knew that any response rate under 6.5.% would be considered a failure and could put their relationship with you in jeopardy?</p>
        <p>You can't win an argument with creative people, but you can control them with numbers. You'd be surprised at how fast creative departments can climb down off their high horses when faced with grim reality.</p>
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
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
<script>
jQuery(document).ready(function($){


        $('#mc-reset').on('click', function(e){
          e.preventDefault();
          $('.reset-this').text(0);
          $('.mc-marker').css({'margin-left': 0});
        });

       
        $('#top-allowable-up').on('click',function(e){
          e.preventDefault();
          
          var allowRangeTotal = $('.allowable-range-total');
          var allowTotal = parseInt($(allowRangeTotal).text());
          var topMarker = $('.top-allowable-marker');  
          var allowMarkerPos = parseInt(topMarker.css('margin-left').replace('px', ''));
          if (allowTotal < 500) {
          topMarker.css({'margin-left': allowMarkerPos + 1});
         
          allowRangeTotal.text(allowTotal + 20);
          }
        })
        $('#top-allowable-dwn').on('click',function(e){
          e.preventDefault();
          var allowRangeTotal = $('.allowable-range-total');
          var allowTotal = parseInt($(allowRangeTotal).text());
          var topMarker = $('.top-allowable-marker');  
          var allowMarkerPos = parseInt(topMarker.css('margin-left').replace('px', ''));
          if (allowTotal > 0){
          topMarker.css({'margin-left': allowMarkerPos - 1});
          allowRangeTotal.text(allowTotal - 20);
          } 
        });

        $('#top-mail-up').on('click',function(e){
          e.preventDefault();
          var mailRangeTotal = $('.mail-range-total');
          var mailTotal = parseInt($(mailRangeTotal).text());
          var topMailMarker = $('.top-mail-marker');  
          var mailMarkerPos = parseInt(topMailMarker.css('margin-left').replace('px', ''));
          if (mailTotal < 2000000) {
          topMailMarker.css({'margin-left': mailMarkerPos + 1});
         
          mailRangeTotal.text(mailTotal + 80000);
          } 
        });
        $('#top-mail-dwn').on('click',function(e){
          e.preventDefault();
          var mailRangeTotal = $('.mail-range-total');
          var mailTotal = parseInt($(mailRangeTotal).text());
          var topMailMarker = $('.top-mail-marker');  
          var mailMarkerPos = parseInt(topMailMarker.css('margin-left').replace('px', ''));
          if (mailTotal > 0) {
          topMailMarker.css({'margin-left': mailMarkerPos - 1});
         
          mailRangeTotal.text(mailTotal - 80000);
          } 
        });
        
        $('#a-creative-up').on('click',function(e){
          e.preventDefault();
          var aCreativeRangeTotal = $('.a-creative-range-total');
          var aCreativeTotal = parseInt($(aCreativeRangeTotal).text());
          var aCreativeMarker = $('.a-creative-marker');  
          var aCreativeMarkerPos = parseInt(aCreativeMarker.css('margin-left').replace('px', ''));
          if (aCreativeTotal < 100000) {
          aCreativeMarker.css({'margin-left': aCreativeMarkerPos + 1});
         
          aCreativeRangeTotal.text(aCreativeTotal + 4000);
          } 
        });
        $('#a-creative-dwn').on('click',function(e){
          e.preventDefault();
          var aCreativeRangeTotal = $('.a-creative-range-total');
          var aCreativeTotal = parseInt($(aCreativeRangeTotal).text());
          var aCreativeMarker = $('.a-creative-marker');  
          var aCreativeMarkerPos = parseInt(aCreativeMarker.css('margin-left').replace('px', ''));
          if (aCreativeTotal > 0) {
          aCreativeMarker.css({'margin-left': aCreativeMarkerPos - 1});
         
          aCreativeRangeTotal.text(aCreativeTotal - 4000);
          } 
        });

        $('#a-print-up').on('click',function(e){
          e.preventDefault();
          var aPrintRangeTotal = $('.a-print-range-total');
          var aPrintTotal = parseInt($(aPrintRangeTotal).text());
          var aPrintMarker = $('.a-print-marker');  
          var aPrintMarkerPos = parseInt(aPrintMarker.css('margin-left').replace('px', ''));
          if (aPrintTotal < 1500) {
          aPrintMarker.css({'margin-left': aPrintMarkerPos + 1});
         
          aPrintRangeTotal.text(aPrintTotal + 60);
          } 
        });
        $('#a-print-dwn').on('click',function(e){
          e.preventDefault();
          var aPrintRangeTotal = $('.a-print-range-total');
          var aPrintTotal = parseInt($(aPrintRangeTotal).text());
          var aPrintMarker = $('.a-print-marker');  
          var aPrintMarkerPos = parseInt(aPrintMarker.css('margin-left').replace('px', ''));
          if (aPrintTotal > 0) {
          aPrintMarker.css({'margin-left': aPrintMarkerPos - 1});
         
          aPrintRangeTotal.text(aPrintTotal - 60);
          } 
        });
        
        $('#a-postage-up').on('click',function(e){
          e.preventDefault();
          var aPostageRangeTotal = $('.a-postage-range-total');
          var aPostageTotal = parseFloat($(aPostageRangeTotal).text());
          var aPostageMarker = $('.a-postage-marker');  
          var aPostageMarkerPos = parseInt(aPostageMarker.css('margin-left').replace('px', ''));
          if (aPostageTotal < 1) {
          aPostageMarker.css({'margin-left': aPostageMarkerPos + 1});
                var aPostageCents = (aPostageTotal + .04).toFixed(2);
          aPostageRangeTotal.text(aPostageCents);
          } 
        });
        $('#a-postage-dwn').on('click',function(e){
          e.preventDefault();
          var aPostageRangeTotal = $('.a-postage-range-total');
          var aPostageTotal = parseFloat($(aPostageRangeTotal).text());
          var aPostageMarker = $('.a-postage-marker');  
          var aPostageMarkerPos = parseInt(aPostageMarker.css('margin-left').replace('px', ''));
          if (aPostageTotal > 0) {
          aPostageMarker.css({'margin-left': aPostageMarkerPos - 1});
                var aPostageCents = (aPostageTotal - .04).toFixed(2);
          aPostageRangeTotal.text(aPostageCents);
          } 
        });
        
        $('#a-list-up').on('click',function(e){
          e.preventDefault();
          var aListRangeTotal = $('.a-list-range-total');
          var aListTotal = parseInt($(aListRangeTotal).text());
          var aListMarker = $('.a-list-marker');  
          var aListMarkerPos = parseInt(aListMarker.css('margin-left').replace('px', ''));
          if (aListTotal < 1500) {
          aListMarker.css({'margin-left': aListMarkerPos + 1});
         
          aListRangeTotal.text(aListTotal + 60);
          } 
        });
        $('#a-list-dwn').on('click',function(e){
          e.preventDefault();
          var aListRangeTotal = $('.a-list-range-total');
          var aListTotal = parseInt($(aListRangeTotal).text());
          var aListMarker = $('.a-list-marker');  
          var aListMarkerPos = parseInt(aListMarker.css('margin-left').replace('px', ''));
          if (aListTotal > 0) {
          aListMarker.css({'margin-left': aListMarkerPos - 1});
         
          aListRangeTotal.text(aListTotal - 60);
          } 
        });
        
        $('#a-other-up').on('click',function(e){
          e.preventDefault();
          var aOtherRangeTotal = $('.a-other-range-total');
          var aOtherTotal = parseInt($(aOtherRangeTotal).text());
          var aOtherMarker = $('.a-other-marker');  
          var aOtherMarkerPos = parseInt(aOtherMarker.css('margin-left').replace('px', ''));
          if (aOtherTotal < 100000) {
          aOtherMarker.css({'margin-left': aOtherMarkerPos + 1});
         
          aOtherRangeTotal.text(aOtherTotal + 4000);
          } 
        });
        $('#a-other-dwn').on('click',function(e){
          e.preventDefault();
          var aOtherRangeTotal = $('.a-other-range-total');
          var aOtherTotal = parseInt($(aOtherRangeTotal).text());
          var aOtherMarker = $('.a-other-marker');  
          var aOtherMarkerPos = parseInt(aOtherMarker.css('margin-left').replace('px', ''));
          if (aOtherTotal > 0) {
          aOtherMarker.css({'margin-left': aOtherMarkerPos - 1});
         
          aOtherRangeTotal.text(aOtherTotal - 4000);
          } 
        });

        $('.a-sum').on('click',function(e){
          var mailQuantity = parseFloat($('.mail-range-total').text());
            console.log(mailQuantity);
          var aCreativeAmount = parseFloat($('.a-creative-range-total').text());
            console.log(aCreativeAmount);
          var aPrintAmount = parseFloat($('.a-print-range-total').text());
            console.log(aPrintAmount);
          var aPostageAmount = parseFloat($('.a-postage-range-total').text());
            console.log(aPostageAmount);
          var aListAmount = parseFloat($('.a-list-range-total').text());
          var aOtherAmount = parseFloat($('.a-other-range-total').text());
          var aPrintProccessed = aPrintAmount * (mailQuantity / 1000);
            console.log(aPrintProccessed);
          var aPostageProccessed = (aPostageAmount * mailQuantity);
            console.log(aPostageProccessed);
          var aListProccessed = aListAmount * (mailQuantity/ 1000);
          var aSumTotal = (aCreativeAmount + aPrintProccessed + aPostageProccessed + aListProccessed + aOtherAmount);
          $('.a-total-sum').text(aSumTotal);
        });

    $('#b-creative-up').on('click',function(e){
        e.preventDefault();
        var bCreativeRangeTotal = $('.b-creative-range-total');
        var bCreativeTotal = parseInt($(bCreativeRangeTotal).text());
        var bCreativeMarker = $('.b-creative-marker');
        var bCreativeMarkerPos = parseInt(bCreativeMarker.css('margin-left').replace('px', ''));
        if (bCreativeTotal < 100000) {
            bCreativeMarker.css({'margin-left': bCreativeMarkerPos + 1});

            bCreativeRangeTotal.text(bCreativeTotal + 4000);
        }
    });
    $('#b-creative-dwn').on('click',function(e){
        e.preventDefault();
        var bCreativeRangeTotal = $('.b-creative-range-total');
        var bCreativeTotal = parseInt($(bCreativeRangeTotal).text());
        var bCreativeMarker = $('.b-creative-marker');
        var bCreativeMarkerPos = parseInt(bCreativeMarker.css('margin-left').replace('px', ''));
        if (bCreativeTotal > 0) {
            bCreativeMarker.css({'margin-left': bCreativeMarkerPos - 1});

            bCreativeRangeTotal.text(bCreativeTotal - 4000);
        }
    });

    $('#b-print-up').on('click',function(e){
        e.preventDefault();
        var bPrintRangeTotal = $('.b-print-range-total');
        var bPrintTotal = parseInt($(bPrintRangeTotal).text());
        var bPrintMarker = $('.b-print-marker');
        var bPrintMarkerPos = parseInt(bPrintMarker.css('margin-left').replace('px', ''));
        if (bPrintTotal < 1500) {
            bPrintMarker.css({'margin-left': bPrintMarkerPos + 1});

            bPrintRangeTotal.text(bPrintTotal + 60);
        }
    });
    $('#b-print-dwn').on('click',function(e){
        e.preventDefault();
        var bPrintRangeTotal = $('.b-print-range-total');
        var bPrintTotal = parseInt($(bPrintRangeTotal).text());
        var bPrintMarker = $('.b-print-marker');
        var bPrintMarkerPos = parseInt(bPrintMarker.css('margin-left').replace('px', ''));
        if (bPrintTotal > 0) {
            bPrintMarker.css({'margin-left': bPrintMarkerPos - 1});

            bPrintRangeTotal.text(bPrintTotal - 60);
        }
    });

    $('#b-postage-up').on('click',function(e){
        e.preventDefault();
        var bPostageRangeTotal = $('.b-postage-range-total');
        var bPostageTotal = parseFloat($(bPostageRangeTotal).text());
        var bPostageMarker = $('.b-postage-marker');
        var bPostageMarkerPos = parseInt(bPostageMarker.css('margin-left').replace('px', ''));
        if (bPostageTotal < 1) {
            bPostageMarker.css({'margin-left': bPostageMarkerPos + 1});
                var bPostageCents = (bPostageTotal + .04).toFixed(2);
            bPostageRangeTotal.text(bPostageCents);
        }
    });
    $('#b-postage-dwn').on('click',function(e){
        e.preventDefault();
        var bPostageRangeTotal = $('.b-postage-range-total');
        var bPostageTotal = parseFloat($(bPostageRangeTotal).text());
        var bPostageMarker = $('.b-postage-marker');
        var bPostageMarkerPos = parseInt(bPostageMarker.css('margin-left').replace('px', ''));
        if (bPostageTotal > 0) {
            bPostageMarker.css({'margin-left': bPostageMarkerPos - 1});
              var bPostageCents = (bPostageTotal - .04).toFixed(2);
            bPostageRangeTotal.text(bPostageCents);
        }
    });

    $('#b-list-up').on('click',function(e){
        e.preventDefault();
        var bListRangeTotal = $('.b-list-range-total');
        var bListTotal = parseInt($(bListRangeTotal).text());
        var bListMarker = $('.b-list-marker');
        var bListMarkerPos = parseInt(bListMarker.css('margin-left').replace('px', ''));
        if (bListTotal < 1500) {
            bListMarker.css({'margin-left': bListMarkerPos + 1});

            bListRangeTotal.text(bListTotal + 60);
        }
    });
    $('#b-list-dwn').on('click',function(e){
        e.preventDefault();
        var bListRangeTotal = $('.b-list-range-total');
        var bListTotal = parseInt($(bListRangeTotal).text());
        var bListMarker = $('.b-list-marker');
        var bListMarkerPos = parseInt(bListMarker.css('margin-left').replace('px', ''));
        if (bListTotal > 0) {
            bListMarker.css({'margin-left': bListMarkerPos - 1});

            bListRangeTotal.text(bListTotal - 60);
        }
    });

    $('#b-other-up').on('click',function(e){
        e.preventDefault();
        var bOtherRangeTotal = $('.b-other-range-total');
        var bOtherTotal = parseInt($(bOtherRangeTotal).text());
        var bOtherMarker = $('.b-other-marker');
        var bOtherMarkerPos = parseInt(bOtherMarker.css('margin-left').replace('px', ''));
        if (bOtherTotal < 100000) {
            bOtherMarker.css({'margin-left': bOtherMarkerPos + 1});

            bOtherRangeTotal.text(bOtherTotal + 4000);
        }
    });
    $('#b-other-dwn').on('click',function(e){
        e.preventDefault();
        var bOtherRangeTotal = $('.b-other-range-total');
        var bOtherTotal = parseInt($(bOtherRangeTotal).text());
        var bOtherMarker = $('.b-other-marker');
        var bOtherMarkerPos = parseInt(bOtherMarker.css('margin-left').replace('px', ''));
        if (bOtherTotal > 0) {
            bOtherMarker.css({'margin-left': bOtherMarkerPos - 1});

            bOtherRangeTotal.text(bOtherTotal - 4000);
        }
    });

    $('.b-sum').on('click',function(e){
        var bmailQuantity = parseInt($('.mail-range-total').text());
        var bCreativeAmount = parseInt($('.b-creative-range-total').text());
        var bPrintAmount = parseInt($('.b-print-range-total').text());
        var bPostageAmount = parseInt($('.b-postage-range-total').text());
        var bListAmount = parseInt($('.b-list-range-total').text());
        var bOtherAmount = parseInt($('.b-other-range-total').text());
        var bPrintProccessed = bPrintAmount * (bmailQuantity / 1000);
        var bPostageProccessed = bPostageAmount * bmailQuantity;
        var bListProccessed = bListAmount * (bmailQuantity/ 1000);
        var bSumTotal = bCreativeAmount + bPrintProccessed + bPostageProccessed + bListProccessed + bOtherAmount;
        $('.b-total-sum').text(bSumTotal);
    });

    $('#c-creative-up').on('click',function(e){
        e.preventDefault();
        var cCreativeRangeTotal = $('.c-creative-range-total');
        var cCreativeTotal = parseInt($(cCreativeRangeTotal).text());
        var cCreativeMarker = $('.c-creative-marker');
        var cCreativeMarkerPos = parseInt(cCreativeMarker.css('margin-left').replace('px', ''));
        if (cCreativeTotal < 100000) {
            cCreativeMarker.css({'margin-left': cCreativeMarkerPos + 1});

            cCreativeRangeTotal.text(cCreativeTotal + 4000);
        }
    });
    $('#c-creative-dwn').on('click',function(e){
        e.preventDefault();
        var cCreativeRangeTotal = $('.c-creative-range-total');
        var cCreativeTotal = parseInt($(cCreativeRangeTotal).text());
        var cCreativeMarker = $('.c-creative-marker');
        var cCreativeMarkerPos = parseInt(cCreativeMarker.css('margin-left').replace('px', ''));
        if (cCreativeTotal > 0) {
            cCreativeMarker.css({'margin-left': cCreativeMarkerPos - 1});

            cCreativeRangeTotal.text(cCreativeTotal - 4000);
        }
    });

    $('#c-print-up').on('click',function(e){
        e.preventDefault();
        var cPrintRangeTotal = $('.c-print-range-total');
        var cPrintTotal = parseInt($(cPrintRangeTotal).text());
        var cPrintMarker = $('.c-print-marker');
        var cPrintMarkerPos = parseInt(cPrintMarker.css('margin-left').replace('px', ''));
        if (cPrintTotal < 1500) {
            cPrintMarker.css({'margin-left': cPrintMarkerPos + 1});

            cPrintRangeTotal.text(cPrintTotal + 60);
        }
    });
    $('#c-print-dwn').on('click',function(e){
        e.preventDefault();
        var cPrintRangeTotal = $('.c-print-range-total');
        var cPrintTotal = parseInt($(cPrintRangeTotal).text());
        var cPrintMarker = $('.c-print-marker');
        var cPrintMarkerPos = parseInt(cPrintMarker.css('margin-left').replace('px', ''));
        if (cPrintTotal > 0) {
            cPrintMarker.css({'margin-left': cPrintMarkerPos - 1});

            cPrintRangeTotal.text(cPrintTotal - 60);
        }
    });

    $('#c-postage-up').on('click',function(e){
        e.preventDefault();
        var cPostageRangeTotal = $('.c-postage-range-total');
        var cPostageTotal = parseFloat($(cPostageRangeTotal).text());
        var cPostageMarker = $('.c-postage-marker');
        var cPostageMarkerPos = parseInt(cPostageMarker.css('margin-left').replace('px', ''));
        if (cPostageTotal < 1) {
            cPostageMarker.css({'margin-left': cPostageMarkerPos + 1});
            var cPostageCents = (cPostageTotal + .04).toFixed(2);

            cPostageRangeTotal.text(cPostageCents);
        }
    });
    $('#c-postage-dwn').on('click',function(e){
        e.preventDefault();
        var cPostageRangeTotal = $('.c-postage-range-total');
        var cPostageTotal = parseFloat($(cPostageRangeTotal).text());
        var cPostageMarker = $('.c-postage-marker');
        var cPostageMarkerPos = parseInt(cPostageMarker.css('margin-left').replace('px', ''));
        if (cPostageTotal > 0) {
            cPostageMarker.css({'margin-left': cPostageMarkerPos - 1});
            var cPostageCents = (cPostageTotal - .04).toFixed(2);

            cPostageRangeTotal.text(cPostageCents);
        }
    });

    $('#c-list-up').on('click',function(e){
        e.preventDefault();
        var cListRangeTotal = $('.c-list-range-total');
        var cListTotal = parseInt($(cListRangeTotal).text());
        var cListMarker = $('.c-list-marker');
        var cListMarkerPos = parseInt(cListMarker.css('margin-left').replace('px', ''));
        if (cListTotal < 1500) {
            cListMarker.css({'margin-left': cListMarkerPos + 1});

            cListRangeTotal.text(cListTotal + 60);
        }
    });
    $('#c-list-dwn').on('click',function(e){
        e.preventDefault();
        var cListRangeTotal = $('.c-list-range-total');
        var cListTotal = parseInt($(cListRangeTotal).text());
        var cListMarker = $('.c-list-marker');
        var cListMarkerPos = parseInt(cListMarker.css('margin-left').replace('px', ''));
        if (cListTotal > 0) {
            cListMarker.css({'margin-left': cListMarkerPos - 1});

            cListRangeTotal.text(cListTotal - 60);
        }
    });

    $('#c-other-up').on('click',function(e){
        e.preventDefault();
        var cOtherRangeTotal = $('.c-other-range-total');
        var cOtherTotal = parseInt($(cOtherRangeTotal).text());
        var cOtherMarker = $('.c-other-marker');
        var cOtherMarkerPos = parseInt(cOtherMarker.css('margin-left').replace('px', ''));
        if (cOtherTotal < 100000) {
            cOtherMarker.css({'margin-left': cOtherMarkerPos + 1});

            cOtherRangeTotal.text(cOtherTotal + 4000);
        }
    });
    $('#c-other-dwn').on('click',function(e){
        e.preventDefault();
        var cOtherRangeTotal = $('.c-other-range-total');
        var cOtherTotal = parseInt($(cOtherRangeTotal).text());
        var cOtherMarker = $('.c-other-marker');
        var cOtherMarkerPos = parseInt(cOtherMarker.css('margin-left').replace('px', ''));
        if (cOtherTotal > 0) {
            cOtherMarker.css({'margin-left': cOtherMarkerPos - 1});

            cOtherRangeTotal.text(cOtherTotal - 4000);
        }
    });

    $('.c-sum').on('click',function(e){
        var cmailQuantity = parseInt($('.mail-range-total').text());
        var cCreativeAmount = parseInt($('.c-creative-range-total').text());
        var cPrintAmount = parseInt($('.c-print-range-total').text());
        var cPostageAmount = parseInt($('.c-postage-range-total').text());
        var cListAmount = parseInt($('.c-list-range-total').text());
        var cOtherAmount = parseInt($('.c-other-range-total').text());
        var cPrintProccessed = cPrintAmount * (cmailQuantity / 1000);
        var cPostageProccessed = cPostageAmount * cmailQuantity;
        var cListProccessed = cListAmount * (cmailQuantity/ 1000);
        var cSumTotal = cCreativeAmount + cPrintProccessed + cPostageProccessed + cListProccessed + cOtherAmount;
        $('.c-total-sum').text(cSumTotal);
    });
    $('#d-creative-up').on('click',function(e){
        e.preventDefault();
        var dCreativeRangeTotal = $('.d-creative-range-total');
        var dCreativeTotal = parseInt($(dCreativeRangeTotal).text());
        var dCreativeMarker = $('.d-creative-marker');
        var dCreativeMarkerPos = parseInt(dCreativeMarker.css('margin-left').replace('px', ''));
        if (dCreativeTotal < 100000) {
            dCreativeMarker.css({'margin-left': dCreativeMarkerPos + 1});

            dCreativeRangeTotal.text(dCreativeTotal + 4000);
        }
    });
    $('#d-creative-dwn').on('click',function(e){
        e.preventDefault();
        var dCreativeRangeTotal = $('.d-creative-range-total');
        var dCreativeTotal = parseInt($(dCreativeRangeTotal).text());
        var dCreativeMarker = $('.d-creative-marker');
        var dCreativeMarkerPos = parseInt(dCreativeMarker.css('margin-left').replace('px', ''));
        if (dCreativeTotal > 0) {
            dCreativeMarker.css({'margin-left': dCreativeMarkerPos - 1});

            dCreativeRangeTotal.text(dCreativeTotal - 4000);
        }
    });

    $('#d-print-up').on('click',function(e){
        e.preventDefault();
        var dPrintRangeTotal = $('.d-print-range-total');
        var dPrintTotal = parseInt($(dPrintRangeTotal).text());
        var dPrintMarker = $('.d-print-marker');
        var dPrintMarkerPos = parseInt(dPrintMarker.css('margin-left').replace('px', ''));
        if (dPrintTotal < 1500) {
            dPrintMarker.css({'margin-left': dPrintMarkerPos + 1});

            dPrintRangeTotal.text(dPrintTotal + 60);
        }
    });
    $('#d-print-dwn').on('click',function(e){
        e.preventDefault();
        var dPrintRangeTotal = $('.d-print-range-total');
        var dPrintTotal = parseInt($(dPrintRangeTotal).text());
        var dPrintMarker = $('.d-print-marker');
        var dPrintMarkerPos = parseInt(dPrintMarker.css('margin-left').replace('px', ''));
        if (dPrintTotal > 0) {
            dPrintMarker.css({'margin-left': dPrintMarkerPos - 1});

            dPrintRangeTotal.text(dPrintTotal - 60);
        }
    });

    $('#d-postage-up').on('click',function(e){
        e.preventDefault();
        var dPostageRangeTotal = $('.d-postage-range-total');
        var dPostageTotal = parseFloat($(dPostageRangeTotal).text());
        var dPostageMarker = $('.d-postage-marker');
        var dPostageMarkerPos = parseInt(dPostageMarker.css('margin-left').replace('px', ''));
        if (dPostageTotal < 1) {
            dPostageMarker.css({'margin-left': dPostageMarkerPos + 1});
            var dPostageCents = (dPostageTotal + .04).toFixed(2);

            dPostageRangeTotal.text(dPostageCents);
        }
    });
    $('#d-postage-dwn').on('click',function(e){
        e.preventDefault();
        var dPostageRangeTotal = $('.d-postage-range-total');
        var dPostageTotal = parseFloat($(dPostageRangeTotal).text());
        var dPostageMarker = $('.d-postage-marker');
        var dPostageMarkerPos = parseInt(dPostageMarker.css('margin-left').replace('px', ''));
        if (dPostageTotal > 0) {
            dPostageMarker.css({'margin-left': dPostageMarkerPos - 1});
            var dPostageCents = (dPostageTotal - .04).toFixed(2);

            dPostageRangeTotal.text(dPostageCents);
        }
    });

    $('#d-list-up').on('click',function(e){
        e.preventDefault();
        var dListRangeTotal = $('.d-list-range-total');
        var dListTotal = parseInt($(dListRangeTotal).text());
        var dListMarker = $('.d-list-marker');
        var dListMarkerPos = parseInt(dListMarker.css('margin-left').replace('px', ''));
        if (dListTotal < 1500) {
            dListMarker.css({'margin-left': dListMarkerPos + 1});

            dListRangeTotal.text(dListTotal + 60);
        }
    });
    $('#d-list-dwn').on('click',function(e){
        e.preventDefault();
        var dListRangeTotal = $('.d-list-range-total');
        var dListTotal = parseInt($(dListRangeTotal).text());
        var dListMarker = $('.d-list-marker');
        var dListMarkerPos = parseInt(dListMarker.css('margin-left').replace('px', ''));
        if (dListTotal > 0) {
            dListMarker.css({'margin-left': dListMarkerPos - 1});

            dListRangeTotal.text(dListTotal - 60);
        }
    });

    $('#d-other-up').on('click',function(e){
        e.preventDefault();
        var dOtherRangeTotal = $('.d-other-range-total');
        var dOtherTotal = parseInt($(dOtherRangeTotal).text());
        var dOtherMarker = $('.d-other-marker');
        var dOtherMarkerPos = parseInt(dOtherMarker.css('margin-left').replace('px', ''));
        if (dOtherTotal < 100000) {
            dOtherMarker.css({'margin-left': dOtherMarkerPos + 1});

            dOtherRangeTotal.text(dOtherTotal + 4000);
        }
    });
    $('#d-other-dwn').on('click',function(e){
        e.preventDefault();
        var dOtherRangeTotal = $('.d-other-range-total');
        var dOtherTotal = parseInt($(dOtherRangeTotal).text());
        var dOtherMarker = $('.d-other-marker');
        var dOtherMarkerPos = parseInt(dOtherMarker.css('margin-left').replace('px', ''));
        if (dOtherTotal > 0) {
            dOtherMarker.css({'margin-left': dOtherMarkerPos - 1});

            dOtherRangeTotal.text(dOtherTotal - 4000);
        }
    });

    $('.d-sum').on('click',function(e){
        var dmailQuantity = parseInt($('.mail-range-total').text());
        var dCreativeAmount = parseInt($('.d-creative-range-total').text());
        var dPrintAmount = parseInt($('.d-print-range-total').text());
        var dPostageAmount = parseInt($('.d-postage-range-total').text());
        var dListAmount = parseInt($('.d-list-range-total').text());
        var dOtherAmount = parseInt($('.d-other-range-total').text());
        var dPrintProccessed = dPrintAmount * (dmailQuantity / 1000);
        var dPostageProccessed = dPostageAmount * dmailQuantity;
        var dListProccessed = dListAmount * (dmailQuantity/ 1000);
        var dSumTotal = dCreativeAmount + dPrintProccessed + dPostageProccessed + dListProccessed + dOtherAmount;
        $('.d-total-sum').text(dSumTotal);
    });

    $('#e-creative-up').on('click',function(e){
        e.preventDefault();
        var eCreativeRangeTotal = $('.e-creative-range-total');
        var eCreativeTotal = parseInt($(eCreativeRangeTotal).text());
        var eCreativeMarker = $('.e-creative-marker');
        var eCreativeMarkerPos = parseInt(eCreativeMarker.css('margin-left').replace('px', ''));
        if (eCreativeTotal < 100000) {
            eCreativeMarker.css({'margin-left': eCreativeMarkerPos + 1});

            eCreativeRangeTotal.text(eCreativeTotal + 4000);
        }
    });
    $('#e-creative-dwn').on('click',function(e){
        e.preventDefault();
        var eCreativeRangeTotal = $('.e-creative-range-total');
        var eCreativeTotal = parseInt($(eCreativeRangeTotal).text());
        var eCreativeMarker = $('.e-creative-marker');
        var eCreativeMarkerPos = parseInt(eCreativeMarker.css('margin-left').replace('px', ''));
        if (eCreativeTotal > 0) {
            eCreativeMarker.css({'margin-left': eCreativeMarkerPos - 1});

            eCreativeRangeTotal.text(eCreativeTotal - 4000);
        }
    });

    $('#e-print-up').on('click',function(e){
        e.preventDefault();
        var ePrintRangeTotal = $('.e-print-range-total');
        var ePrintTotal = parseInt($(ePrintRangeTotal).text());
        var ePrintMarker = $('.e-print-marker');
        var ePrintMarkerPos = parseInt(ePrintMarker.css('margin-left').replace('px', ''));
        if (ePrintTotal < 1500) {
            ePrintMarker.css({'margin-left': ePrintMarkerPos + 1});

            ePrintRangeTotal.text(ePrintTotal + 60);
        }
    });
    $('#e-print-dwn').on('click',function(e){
        e.preventDefault();
        var ePrintRangeTotal = $('.e-print-range-total');
        var ePrintTotal = parseInt($(ePrintRangeTotal).text());
        var ePrintMarker = $('.e-print-marker');
        var ePrintMarkerPos = parseInt(ePrintMarker.css('margin-left').replace('px', ''));
        if (ePrintTotal > 0) {
            ePrintMarker.css({'margin-left': ePrintMarkerPos - 1});

            ePrintRangeTotal.text(ePrintTotal - 60);
        }
    });

    $('#e-postage-up').on('click',function(e){
        e.preventDefault();
        var ePostageRangeTotal = $('.e-postage-range-total');
        var ePostageTotal = parseFloat($(ePostageRangeTotal).text());
        var ePostageMarker = $('.e-postage-marker');
        var ePostageMarkerPos = parseInt(ePostageMarker.css('margin-left').replace('px', ''));
        if (ePostageTotal < 1) {
            ePostageMarker.css({'margin-left': ePostageMarkerPos + 1});
            var ePostageCents = (ePostageTotal + .04).toFixed(2);
            ePostageRangeTotal.text(ePostageCents);
        }
    });
    $('#e-postage-dwn').on('click',function(e){
        e.preventDefault();
        var ePostageRangeTotal = $('.e-postage-range-total');
        var ePostageTotal = parseFloat($(ePostageRangeTotal).text());
        var ePostageMarker = $('.e-postage-marker');
        var ePostageMarkerPos = parseInt(ePostageMarker.css('margin-left').replace('px', ''));
        if (ePostageTotal > 0) {
            ePostageMarker.css({'margin-left': ePostageMarkerPos - 1});
            var ePostageCents = (ePostageTotal - .04).toFixed(2);
            ePostageRangeTotal.text(ePostageCents);
        }
    });

    $('#e-list-up').on('click',function(e){
        e.preventDefault();
        var eListRangeTotal = $('.e-list-range-total');
        var eListTotal = parseInt($(eListRangeTotal).text());
        var eListMarker = $('.e-list-marker');
        var eListMarkerPos = parseInt(eListMarker.css('margin-left').replace('px', ''));
        if (eListTotal < 1500) {
            eListMarker.css({'margin-left': eListMarkerPos + 1});

            eListRangeTotal.text(eListTotal + 60);
        }
    });
    $('#e-list-dwn').on('click',function(e){
        e.preventDefault();
        var eListRangeTotal = $('.e-list-range-total');
        var eListTotal = parseInt($(eListRangeTotal).text());
        var eListMarker = $('.e-list-marker');
        var eListMarkerPos = parseInt(eListMarker.css('margin-left').replace('px', ''));
        if (eListTotal > 0) {
            eListMarker.css({'margin-left': eListMarkerPos - 1});

            eListRangeTotal.text(eListTotal - 60);
        }
    });

    $('#e-other-up').on('click',function(e){
        e.preventDefault();
        var eOtherRangeTotal = $('.e-other-range-total');
        var eOtherTotal = parseInt($(eOtherRangeTotal).text());
        var eOtherMarker = $('.e-other-marker');
        var eOtherMarkerPos = parseInt(eOtherMarker.css('margin-left').replace('px', ''));
        if (eOtherTotal < 100000) {
            eOtherMarker.css({'margin-left': eOtherMarkerPos + 1});

            eOtherRangeTotal.text(eOtherTotal + 4000);
        }
    });
    $('#e-other-dwn').on('click',function(e){
        e.preventDefault();
        var eOtherRangeTotal = $('.e-other-range-total');
        var eOtherTotal = parseInt($(eOtherRangeTotal).text());
        var eOtherMarker = $('.e-other-marker');
        var eOtherMarkerPos = parseInt(eOtherMarker.css('margin-left').replace('px', ''));
        if (eOtherTotal > 0) {
            eOtherMarker.css({'margin-left': eOtherMarkerPos - 1});

            eOtherRangeTotal.text(eOtherTotal - 4000);
        }
    });

    $('.e-sum').on('click',function(e){
        var emailQuantity = parseInt($('.mail-range-total').text());
        var eCreativeAmount = parseInt($('.e-creative-range-total').text());
        var ePrintAmount = parseInt($('.e-print-range-total').text());
        var ePostageAmount = parseInt($('.e-postage-range-total').text());
        var eListAmount = parseInt($('.e-list-range-total').text());
        var eOtherAmount = parseInt($('.e-other-range-total').text());
        var ePrintProccessed = ePrintAmount * (emailQuantity / 1000);
        var ePostageProccessed = ePostageAmount * emailQuantity;
        var eListProccessed = eListAmount * (emailQuantity/ 1000);
        var eSumTotal = eCreativeAmount + ePrintProccessed + ePostageProccessed + eListProccessed + eOtherAmount;
        $('.e-total-sum').text(eSumTotal);
    });


});
</script>
<?php wp_footer(); ?>
</body>
</html>
