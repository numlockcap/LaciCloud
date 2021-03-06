<?php 
require("../functions.php");

$lacicloud_api = new LaciCloud();

$dbc = $lacicloud_api -> getMysqlConn();

$lacicloud_api -> increasePageVisitCounter($dbc);
$lacicloud_api -> isPageCached();

?>
<!DOCTYPE html>
<html>
<head>
    <title>LaciCloud - The open-source FTP(s)-based cloud storage and webhost</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

  
    <meta name="description" content="The open-source FTP(s)-based cloud storage and webhost that is very customizable and privacy-centric. Get 5GB free now!" />
    <meta name="keywords" content="bitcoin, FTP, FTPS, cloud, cloud-storage, webhost, webhosting, backup, privacy, private, encryption, security, customizable, secure, LaciCloud" />
    <meta name="author" content="Laci, Tristan, Fabio">
    <meta name="language" content="english"> 

    <meta name="norton-safeweb-site-verification" content="vm75mf5npwcd4k9ku90jt29d3df2ag5utrqzvll-2o5ytj7qvolcwdlx6ixgfwyq-jm7ce3yx0be6nx74f0soh0ozt18q10h085019weeko7m260ge-np1v-4-n6l4ox" />

    <link rel="author" href="https://plus.google.com/115512170582216368374"/>
    <link rel="help" href="/resources/lacicloud_help.pdf">

    <meta property="og:title" content="LaciCloud - Secure FTP(s) Cloud Storage, Webhost"/>
    <meta property="og:url" content="https://lacicloud.net"/>
    <meta property="og:image" content="https://lacicloud.net/resources/logo.png"/>
    <meta property="og:image:type" content="image/png">
    <meta property="og:description" content="The open-source FTP(s)-based cloud storage and webhost that is very customizable and privacy-centric. Get 5GB free now!"/>
    <meta property="og:locale" content="en_US" />

    <meta property="twitter:title" content="LaciCloud - Secure FTP(s) Cloud Storage, Webhost"/>
    <meta property="twitter:url" content="https://lacicloud.net"/>
    <meta property="twitter:image" content="https://lacicloud.net/resources/logo.png"/>
    <meta property="twitter:description" content="The open-source FTP(s)-based cloud storage and webhost that is very customizable and privacy-centric. Get 5GB free now!"/>

    <link rel="image_src" href="/resources/logo.png"/>
    
    <link rel="icon" type="image/png" href="/resources/favicon-32x32.png">
    <!--styles-->
    <link href="css/style.css" rel="stylesheet" />
</head>
<body class="body-index">
    <!--start - main menu-->
    <nav>
        <ul class="topnav" id="mainNav">
            <li><a class="menu-link active" href="/">Home</a><span class="menu-dot">.</span></li>
            <li><a class="menu-link" href="/about_us">About Us</a><span class="menu-dot">.</span></li>
            <li><a class="menu-link" href="/docs">Help & Others</a></li>
            <li class="logo-li">
                <img class="logo-img" src="resources/laci-logo.png" alt="LaciCloud rocket logo"/>
            </li>
            <li><a class="menu-link" href="/shop">Shop</a><span class="menu-dot">.</span></li>
            <li><a class="menu-link" href="/contact">Contact</a><span class="menu-dot">.</span></li>
            <li><a class="menu-link" href="/account">Log in/Sign up</a></li>
            <li class="icon">
                <a href="javascript:void(0);" onclick="navFunction()">&#9776;</a>
            </li>
        </ul>
    </nav>
    <!--end - main menu-->
    <!--start - header-->
    <section class="h-header">
        <div class="col-3 topheader">
        </div>
    </section>

    <!--start - about-->
    <section class="row h-about about" id="about">
        <div class="col-3 text-center">
            <div class="section-icon"><img src="resources/about-icon.png" alt="An icon of a cloud with a lock on it"/></div>
            <div class="section-heading"><h1>A first-of-a-kind ftp(s)-based privacy-centric cloud storage, webhosting solution</h1></div>
            <div class="section-text about-text">
                LaciCloud is your open-source private FTP(s)-cloud storage and PHP webhost with many features, including a flexible Bitcoin payment method, 
                user-data encryption, first-class security, compatibility with virtually all computing devices around the world 
                and extreme versatility with an API and user subdomains. Read below.
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <!--start - privacy-->
    <section class="row h-body privacy" id="privacy">
        <div class="col-2 f-left left-img-box"><img class="h-600" src="resources/about-1.jpg" alt="An image of a datacenter"/></div>
        <div class="col-1 text-center content-h-400 content-box">
            <div class="section-icon"><img src="resources/privacy-icon.png" alt="An icon of a lock"/></div>
            <div class="section-heading"><h1>Privacy</h1></div>
            <div class="section-text privacy-text">
                Privacy and security is one of LaciCloud's most important feature. We do not, in any way or form,
                collect PII, or sell your data to adverisers. Payments can be done via Bitcoins/Altcoins <span class="tooltip" title="Paypal, Stripe, and European IBAN">(<strong>and 3 other payment methods!</strong>)</span>,
                and user data can be possibly encrypted. Of course, you can also get <strong><a style="color:inherit;text-decoration:none;" href="/qftp">quick temporary FTP accounts</a></strong> without registering,
                much like temporary email addresses.
                Additionally, the code behind LaciCloud has been tested for security issues and privilige seperation is used between
                the webserver and the FTP(s) server.
                <span class="section-end">.</span>
            </div>
        </div>
        <div class="section-footer-image"><img class="h-200" src="resources/about-1a.jpg" alt="An image of the Bitcoin logo"/></div>
    </section>
    <div class="clear"></div>
    <!--start - versatility-->
    <section class="row h-body compatibility" id="compatibility">
        <div class="col-1 text-center content-h-400 content-box">
            <div class="section-icon"><img src="resources/compatibility-icon.png" alt="An icon of two people shaking hands"/></div>
            <div class="section-heading"><h1>Versatility</h1></div>
            <div class="section-text compatibility-text">
                Versitality is one of of LaciCloud's other most important feature. Our service offers you ways to 
                display messages to your users, have hierchical user structures, and a way to host your files your own user subdomain. Our API allows you to write your own applications on top of LaciCloud's, whatever 
                it may be. Do not forget the many syncronization, backup and encryption programs that exist for FTP(s).
                <span class="section-end">.</span>
            </div>
        </div>
        <div class="col-2 f-right right-img-box"><img class="h-600" src="resources/about-2.jpg" alt="An image of a server rack with ethernet cables hanging outt of it"/></div>
        <div class="section-footer-image"><img class="h-200" src="resources/about-2a.jpg" alt="An image of a woman browsing through vinly records in a store"/></div>
    </section>
    <div class="clear"></div>
    <!--start - open-source-->
    <section class="row h-bodylast versatility" id="versatility">
        <div class="col-1 f-left left-img-box">
            <img class="img-100 h-600" src="resources/about-3.jpg" alt="An assortement of cameras, lenses, tripods"/>
        </div>
        <div class="bodylast-content-wrapper content-box">
            <div class="col-1 text-center content-h-400">
                <div class="section-icon"><img src="resources/open_source-icon.png" alt="The open-source logo" /></div>
                <div class="section-heading"><h1>Open-Source</h1></div>
                <div class="section-text pad-lr versatility-text">
                    Open-sourcing LaciCloud allows anyone access to view and enhance the source code. What this means is bug's gets fixed faster, 
                    and anyone can verify the codebase to make sure there are no back-doors and that nothing strange is going on.
                    <br>
                    LaciCloud's Github page can be found <strong><a id="github_link" href="https://github.com/lacicloud/LaciCloud">here.</a></strong>
                    <span class="section-end">.</span>
                </div>

            </div>
            <div class="section-footer-image"><img class="h-200" src="resources/about-3b.jpg" alt="An assortement of a camera, a smartphone, a headset, and a digital art-board with a monitor"/></div>
        </div>
        <div class="col-1 f-right right-img-box">
            <img class="img-100 h-600" src="resources/about-3a.jpg" alt="A laptop running a code editor, editing PHP"/>
        </div>
    </section>
    <div class="clear"></div>
    <!--start - personal cloud-->
    <section class="row mailing-wrapper" id="mailing">
        <div class="col-3">
            <div class="margin-center mailing-logo">
                <img src="resources/laci-logo.png" alt="LaciCloud rocket logo"/>
            </div>
            <div class="section-text margin-center">
                Get started with LaciCloud for free!
            </div>
            <div class="mailing-button margin-center"><a href="/account">Get 5GB free now!</a></div>
        </div>
    </section>

    <!--start - footer-->
    <footer class="footer-wrapper">
        <div class="footer-leftbox">
            <span class="text-uppercase bold-font">LaciCloud</span><br />
            <span class="text-italic">Made with love</span><br />
            <span class="text-italic">Brussels, Belgium  - <a href="mailto:laci@lacicloud.net">laci@lacicloud.net</a></span>
            <br><br><br>
            <span class="text-italic">Users: 66</span>
            <br>
            <span class="text-italic">Space used: 67GB out of 4096GB</span>
            <br>
            <span class="text-italic">Service status: <strong><a href="https://stats.uptimerobot.com/r8N9QIrq1">OK</a></strong></span>
        </div>
        <div class="footer-social">
            <a href="https://twitter.com/lacicloud" target="_blank" class="icon tw"><img src="resources/social-twitter.png" alt="Twitter icon"/></a>
            <a href="https://www.facebook.com/lacicloudhosting/" target="_blank" class="icon fb"><img src="resources/social-facebook.png" alt="FaceBook icon"/></a>
            <a href="https://www.youtube.com/channel/UC6cwh-kIj7aq4XoiRkzVSug" target="_blank" class="icon yt"><img src="resources/social-youtube.png" alt="YouTube icon" /></a>
        </div>
    </footer>
    <!--scripts-->
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('.tooltip').tooltipster();
        });
    </script>

</body>

</html>
