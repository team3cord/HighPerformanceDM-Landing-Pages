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

<div class="mc-wrap whitey">

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
                            <span class="allowable-range-total reset-this">0</span>
                        </div>
                        <div class="top-allowable-range mc-range">
                            <a id="top-allowable-dwn" class="dwn-btn" href="#"></a>

                            <div class="top-allowable-marker mc-marker"></div>

                            <a id="top-allowable-up" class="up-btn" href="#"></a>
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
                            <a id="top-mail-dwn" class="dwn-btn" href="#"></a>
                            <div class="top-mail-marker mc-marker"></div>
                            <a id="top-mail-up" class="up-btn" href="#"></a>
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
                                    <span class="a-creative-range-total reset-this">0</span>
                                </div>

                                <div class="a-creative-range mc-range">
                                    <a id="a-creative-dwn" class="dwn-btn" href="#"></a>
                                    <div class="a-creative-marker mc-marker"></div>
                                    <a id="a-creative-up" class="up-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-print-cell mc-cell">
                                <div class="a-print-total sub-cell">
                                    <span class="a-print-range-total reset-this" >0</span>
                                </div>
                                <div class="a-print-range mc-range">
                                    <a id="a-print-dwn" class="dwn-btn" href="#"></a>
                                    <div class="a-print-marker mc-marker"></div>
                                    <a id="a-print-up"  class="up-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-postage-cell mc-cell">
                                <div class="a-postage-total sub-cell">
                                    <span class="a-postage-range-total reset-this" >0</span>
                                </div>
                                <div class="a-postage-range mc-range">
                                    <a id="a-postage-dwn" class="dwn-btn" href="#"></a>
                                    <div class="a-postage-marker mc-marker"></div>
                                    <a id="a-postage-up" class="up-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-list-cell mc-cell">
                                <div class="a-list-total sub-cell">
                                    <span class="a-list-range-total reset-this" >0</span>
                                </div>
                                <div class="a-list-range mc-range">
                                    <a id="a-list-dwn" class="dwn-btn" href="#"></a>
                                    <div class="a-list-marker mc-marker"></div>
                                    <a id="a-list-up" class="up-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-other-cell mc-cell">
                                <div class="a-other-total sub-cell">
                                    <span class="a-other-range-total reset-this" >0</span>
                                </div>
                                <div class="a-other-range mc-range">
                                    <a id="a-other-dwn" class="dwn-btn" href="#"></a>
                                    <div class="a-other-marker mc-marker"></div>
                                    <a id="a-other-up" class="up-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-total-cell total-cell">
                                <span class="a-total-sum reset-this">0</span>
                            </div>
                        </div>


                    <!--- BEGIN DELETE ME--->


                    <div style="background: #31869b; margin-top: 5px;" class="concept-a">
                            <div class="a-first-cell first-cell">
                                <span>Concept B</span>
                            </div>

                            <div class="a-creative-cell mc-cell">
                                <div class="a-creative-total sub-cell">
                                    <span>$1200</span>
                                </div>

                                <div class="a-creative-range mc-range">
                                    <a id="a-creative-up" class="up-btn" href="#"></a>
                                    <div class="a-creative-marker mc-marker"></div>
                                    <a id="a-creative-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-print-cell mc-cell">
                                <div class="a-print-total sub-cell">
                                    <span class="a-print-total" >$1200</span>
                                </div>
                                <div class="a-print-range mc-range">
                                    <a id="a-print-up"  class="up-btn" href="#"></a>
                                    <div class="a-print-marker mc-marker"></div>
                                    <a id="a-print-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-postage-cell mc-cell">
                                <div class="a-postage-total sub-cell">
                                    <span class="a-postage-total" >$1200</span>
                                </div>
                                <div class="a-postage-range mc-range">
                                    <a id="a-postage-up" class="up-btn" href="#"></a>
                                    <div class="a-postage-marker mc-marker"></div>
                                    <a id="a-postage-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-list-cell mc-cell">
                                <div class="a-list-total sub-cell">
                                    <span class="a-list-total" >$1200</span>
                                </div>
                                <div class="a-list-range mc-range">
                                    <a id="a-list-up" class="up-btn" href="#"></a>
                                    <div class="a-list-marker mc-marker"></div>
                                    <a id="a-list-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-other-cell mc-cell">
                                <div class="a-other-total sub-cell">
                                    <span class="a-other-total" >$1200</span>
                                </div>
                                <div class="a-other-range mc-range">
                                    <a id="a-other-up" class="up-btn" href="#"></a>
                                    <div class="a-other-marker mc-marker"></div>
                                    <a id="a-other-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-total-cell total-cell">
                                <span>$33,000.50</span>
                            </div>
                        </div>
                    <div style="background: #60497a; margin-top: 5px;" class="concept-a">
                            <div class="a-first-cell first-cell">
                                <span>Concept C</span>
                            </div>

                            <div class="a-creative-cell mc-cell">
                                <div class="a-creative-total sub-cell">
                                    <span>$1200</span>
                                </div>

                                <div class="a-creative-range mc-range">
                                    <a id="a-creative-up" class="up-btn" href="#"></a>
                                    <div class="a-creative-marker mc-marker"></div>
                                    <a id="a-creative-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-print-cell mc-cell">
                                <div class="a-print-total sub-cell">
                                    <span class="a-print-total" >$1200</span>
                                </div>
                                <div class="a-print-range mc-range">
                                    <a id="a-print-up"  class="up-btn" href="#"></a>
                                    <div class="a-print-marker mc-marker"></div>
                                    <a id="a-print-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-postage-cell mc-cell">
                                <div class="a-postage-total sub-cell">
                                    <span class="a-postage-total" >$1200</span>
                                </div>
                                <div class="a-postage-range mc-range">
                                    <a id="a-postage-up" class="up-btn" href="#"></a>
                                    <div class="a-postage-marker mc-marker"></div>
                                    <a id="a-postage-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-list-cell mc-cell">
                                <div class="a-list-total sub-cell">
                                    <span class="a-list-total" >$1200</span>
                                </div>
                                <div class="a-list-range mc-range">
                                    <a id="a-list-up" class="up-btn" href="#"></a>
                                    <div class="a-list-marker mc-marker"></div>
                                    <a id="a-list-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-other-cell mc-cell">
                                <div class="a-other-total sub-cell">
                                    <span class="a-other-total" >$1200</span>
                                </div>
                                <div class="a-other-range mc-range">
                                    <a id="a-other-up" class="up-btn" href="#"></a>
                                    <div class="a-other-marker mc-marker"></div>
                                    <a id="a-other-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-total-cell total-cell">
                                <span>$33,000.50</span>
                            </div>
                        </div>
                    <div style="background: #76933b; margin-top: 5px;" class="concept-a">
                            <div class="a-first-cell first-cell">
                                <span>Concept D</span>
                            </div>

                            <div class="a-creative-cell mc-cell">
                                <div class="a-creative-total sub-cell">
                                    <span>$1200</span>
                                </div>

                                <div class="a-creative-range mc-range">
                                    <a id="a-creative-up" class="up-btn" href="#"></a>
                                    <div class="a-creative-marker mc-marker"></div>
                                    <a id="a-creative-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-print-cell mc-cell">
                                <div class="a-print-total sub-cell">
                                    <span class="a-print-total" >$1200</span>
                                </div>
                                <div class="a-print-range mc-range">
                                    <a id="a-print-up"  class="up-btn" href="#"></a>
                                    <div class="a-print-marker mc-marker"></div>
                                    <a id="a-print-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-postage-cell mc-cell">
                                <div class="a-postage-total sub-cell">
                                    <span class="a-postage-total" >$1200</span>
                                </div>
                                <div class="a-postage-range mc-range">
                                    <a id="a-postage-up" class="up-btn" href="#"></a>
                                    <div class="a-postage-marker mc-marker"></div>
                                    <a id="a-postage-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-list-cell mc-cell">
                                <div class="a-list-total sub-cell">
                                    <span class="a-list-total" >$1200</span>
                                </div>
                                <div class="a-list-range mc-range">
                                    <a id="a-list-up" class="up-btn" href="#"></a>
                                    <div class="a-list-marker mc-marker"></div>
                                    <a id="a-list-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-other-cell mc-cell">
                                <div class="a-other-total sub-cell">
                                    <span class="a-other-total" >$1200</span>
                                </div>
                                <div class="a-other-range mc-range">
                                    <a id="a-other-up" class="up-btn" href="#"></a>
                                    <div class="a-other-marker mc-marker"></div>
                                    <a id="a-other-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-total-cell total-cell">
                                <span>$33,000.50</span>
                            </div>
                        </div>
                    <div style="background: #963633; margin-top: 5px;" class="concept-a">
                            <div class="a-first-cell first-cell">
                                <span>Concept E</span>
                            </div>

                            <div class="a-creative-cell mc-cell">
                                <div class="a-creative-total sub-cell">
                                    <span>$1200</span>
                                </div>

                                <div class="a-creative-range mc-range">
                                    <a id="a-creative-up" class="up-btn" href="#"></a>
                                    <div class="a-creative-marker mc-marker"></div>
                                    <a id="a-creative-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-print-cell mc-cell">
                                <div class="a-print-total sub-cell">
                                    <span class="a-print-total" >$1200</span>
                                </div>
                                <div class="a-print-range mc-range">
                                    <a id="a-print-up"  class="up-btn" href="#"></a>
                                    <div class="a-print-marker mc-marker"></div>
                                    <a id="a-print-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-postage-cell mc-cell">
                                <div class="a-postage-total sub-cell">
                                    <span class="a-postage-total" >$1200</span>
                                </div>
                                <div class="a-postage-range mc-range">
                                    <a id="a-postage-up" class="up-btn" href="#"></a>
                                    <div class="a-postage-marker mc-marker"></div>
                                    <a id="a-postage-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-list-cell mc-cell">
                                <div class="a-list-total sub-cell">
                                    <span class="a-list-total" >$1200</span>
                                </div>
                                <div class="a-list-range mc-range">
                                    <a id="a-list-up" class="up-btn" href="#"></a>
                                    <div class="a-list-marker mc-marker"></div>
                                    <a id="a-list-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-other-cell mc-cell">
                                <div class="a-other-total sub-cell">
                                    <span class="a-other-total" >$1200</span>
                                </div>
                                <div class="a-other-range mc-range">
                                    <a id="a-other-up" class="up-btn" href="#"></a>
                                    <div class="a-other-marker mc-marker"></div>
                                    <a id="a-other-dwn" class="dwn-btn" href="#"></a>
                                </div>
                            </div>

                            <div class="a-total-cell total-cell">
                                <span>$33,000.50</span>
                            </div>
                        </div>
                <!--- END DELETE ME--->

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
        });
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
          var aPostageTotal = parseInt($(aPostageRangeTotal).text());
          var aPostageMarker = $('.a-postage-marker');  
          var aPostageMarkerPos = parseInt(aPostageMarker.css('margin-left').replace('px', ''));
          if (aPostageTotal < 100) {
          aPostageMarker.css({'margin-left': aPostageMarkerPos + 1});
         
          aPostageRangeTotal.text(aPostageTotal + 4);
          } 
        });
        $('#a-postage-dwn').on('click',function(e){
          e.preventDefault();
          var aPostageRangeTotal = $('.a-postage-range-total');
          var aPostageTotal = parseInt($(aPostageRangeTotal).text());
          var aPostageMarker = $('.a-postage-marker');  
          var aPostageMarkerPos = parseInt(aPostageMarker.css('margin-left').replace('px', ''));
          if (aPostageTotal > 0) {
          aPostageMarker.css({'margin-left': aPostageMarkerPos - 1});
         
          aPostageRangeTotal.text(aPostageTotal - 4);
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


    });
</script>
<?php wp_footer(); ?>
</body>
</html>
