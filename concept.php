<?php

/* Template Name: CONCEPT */

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
    <div class="concept-icon"></div>
</header>
<div class="mc-wrap mc-whitey">
    <section class="form-tout">
        <div class="form-left concept-form">
            <h2>Try The <span class="form-bold">Concept </span> Calcualtor Now!</h2>

            <?php echo do_shortcode('[contact-form-7 id="228" title="Concept Form"]'); ?>

            <div class="no-ob"><span>NO OBLIGATION</span></div>

        </div>
        <div class="concept-form-right">
        </div>
    </section>
    <section class="call-out">
        <blockquote class="big-red">Great mailers control programs with<br> numbers. Use HPDM's Concept Calculator<br> to find out which package has the best<br> chance of winning.</blockquote>
        <p>The most powerful number in direct marketing is your<br> "allowable cost" number. If you only know one number, this is it.</p>
    </section>
    <div class="white-wrap">
        <section class="call-out bob">
            <blockquote>"When HPDM analyzed my program they showed me where<br> I was spending too much and where I was spending too little.<br> Then they backed it up with incredible performance results."</blockquote>
            <span class="quote-name">- It's true... numbers don't lie, thanks HPDM!</span>
        </section>
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
<?php wp_footer(); ?>
</body>
</html>
