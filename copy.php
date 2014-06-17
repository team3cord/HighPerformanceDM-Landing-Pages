<?php

/* Template Name: COPY */

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
        <h1 class="head-logo"><a href="http://highperformancedm.com/">High Performance Direct Marketing</a> </h1>
    </nav>
    <div class="calc-icon"></div>
</header>
<div class="mc-wrap copy-whitey">
    <section class="form-tout">
        <div class="form-left copy-form">
            <h2>Try The <span class="form-bold">Copy </span> Calcualtor Now <br>
             Find Words That Sell!! </h2>

            <?php echo do_shortcode('[contact-form-7 id="222" title="Copy Form"]'); ?>

            <div class="no-ob"><span>NO OBLIGATION</span></div>

        </div>
        <div class="copy-form-right">
        </div>
    </section>
    <section class="call-out">
        <blockquote class="big-red">Instantly find out if the words you're using in<br>
        your packages could be improved upon.<br>
        Try our copy calculator now!</blockquote>
        <p>If you answer honestly, it will tell you if your<br>
        direct mail could use a little more oomph!</p>
    </section>
    <div class="white-wrap">
        <section class="call-out bob">
            <blockquote>"Consumers still buy products whose advertising<br>
                promises them value for money, beauty, nutrition, relief<br>
                from suffering, social status and so on."</blockquote>
            <span class="quote-name">- David Ogilvy,</span><br>
            <span class="quote-title">Ogilvy on Advertising</span>
        </section>
    </div>

</div>
<div class="mc-wrap">
    <footer>
        <div class="footer-left">
            <div class="logo-wrap">
                <a class="footer-logo" href="http://highperformancedm.com/"><img src="../wp-content/themes/hpdm/strategy/imgs/footer-logo.png"></a>
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
<?php wp_footer(); ?>
</body>
</html>
