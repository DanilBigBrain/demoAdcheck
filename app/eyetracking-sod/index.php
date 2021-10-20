<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="de">
<head>


    <!-- REDIRECTING STARTS -->
    <link rel="canonical" href="http://google.de"/>
    <noscript>
        <meta http-equiv="refresh" content="180;URL=http://google.de">
    </noscript>
    <!--[if lt IE 9]><script type="text/javascript">var IE_fix=true;</script><![endif]-->
    <script type="text/javascript">
        var url = "http://google.de";
        var delay = "180000";
        window.onload = function ()
        {
            setTimeout(GoToURL, delay);
        }
        function GoToURL()
        {
            if(typeof IE_fix != "undefined") // IE8 and lower fix to pass the http referer
            {
                var referLink = document.createElement("a");
                referLink.href = url;
                document.body.appendChild(referLink);
                referLink.click();
            }
            else { window.location.replace(url); } // All other browsers
        }
    </script>

    <?php include ('assets/head.php'); ?>
    <title>AdCheck – annalect</title>
</head>
<body>

<div class="grid-wrapper show-for-small-only" id="interscroller">
    <div class="grid-container">
        <div class="grid-x">
            <div class="ad-note">ANZEIGE</div>
            <iframe src="https://test.screenondemand.de/preview/SOD20_0600/mobile-skin/scroller/index.html?interscroller=true"></iframe>
        </div>
    </div>

</div>

<div class="grid-wrapper" id="super-wrapper">
    <div class="grid-container fluid">
        <div class="grid-x">
            <div class="cell hide-for-small-only medium-2">
               <iframe class="ad-iframe" src="ads/Left_banner.html"></iframe>
                <!-- <iframe class="ad-iframe" src="http://test.screenondemand.de/preview/SOD20_0600/desktop/left/index.html"></iframe> -->
            </div>
            <div class="cell small-12 medium-8">

                <!-- text ---------------------------->
                <div class="grid-wrapper hide-for-small-only" id="header-text">
                    <div class="grid-container">
                        <div class="grid-x grid-margin-x">
                            <div class="cell small-5">
                                <img src="ads/text.png">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="show-for-small-only">
                    <img src="ads/mobile-header.png">
                </div>

                <!-- header ---------------------------->
                <?php include ('assets/header.php'); ?>

                <!-- site ---------------------------->
                <div class="grid-wrapper">
                    <div class="grid-container remove-padding">
                        <div class="grid-x">
                            <div class="cell auto">

                                <!-- Pre Content ---------------------------->
                                <div class="grid-wrapper pre-header" id="adcheck-cell">
                                    <div class="grid-container">
                                        <div class="grid-x grid-padding-x align-middle">
                                            <div class="cell small-12 medium-8 newsticker">
                                                <div class="grid-x align-middle">
                                                    <div class="cell shrink newsticker-square-wrapper">
                                                        <div class="newsticker-square">
                                                            <span class="ic_24">24</span><span class="ic_news">Stunden<br/>News</span>
                                                        </div>
                                                    </div>
                                                    <div class="cell small-offset-1 auto newsticker-content">
                                                        <p>
                                                            <?php $i = 0; ?>
                                                            <?php foreach ($rssNews->loadFeed()->channel->item as $item) { ?>
                                                                <?php echo $item->title; ?><span class="sep"> | </span>
                                                                <?php if (++$i == 2) break; ?>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cell small-12 medium-4 text-center weather">
                                                <div class="grid-x">
                                                    <div class="cell small-4 city">
                                                        <?php $iconham = $weather_hamburg->refresh()['weather'][0]['icon']; ?>
                                                        <img class="weather-icon" width="60px" src="<?php echo("https://openweathermap.org/img/wn/".$iconham."@2x.png");?>">
                                                        <strong><?php echo round($weather_hamburg->refresh()['main']['temp']); ?>&deg;C</strong><br />
                                                        <small class="city">Hamburg</small>
                                                    </div>
                                                    <div class="cell small-4 city">
                                                        <?php $iconmun = $weather_munich->refresh()['weather'][0]['icon']; ?>
                                                        <img class="weather-icon" width="60px" src="<?php echo("https://openweathermap.org/img/wn/".$iconmun."@2x.png");?>">
                                                        <strong><?php echo round($weather_munich->refresh()['main']['temp']); ?>&deg;C</strong><br />
                                                        <small class="city">München</small>
                                                    </div>
                                                    <div class="cell small-4 city">
                                                        <?php $iconber= $weather_berlin->refresh()['weather'][0]['icon']; ?>
                                                        <img class="weather-icon" width="60px" src="<?php echo("https://openweathermap.org/img/wn/".$iconber."@2x.png");?>">
                                                        <strong><?php echo round($weather_berlin->refresh()['main']['temp']); ?>&deg;C</strong><br />
                                                        <small class="city">Berlin</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Main Content ---------------------------->
                                <div class="grid-wrapper">
                                    <div class="grid-container" id="adcheck-cell">

                                        <!-- Intro Article ---------------------------->
                                        <div class="grid-x">
                                            <div class="cell introArticle">
                                                    <?php $dataSource = $rssNews->loadFeed(); $imageSource = $rssNews->loadImages(); $i=0 ?>
                                                    <?php include_once('assets/article-large.php'); ?>
                                                    <?php $dataSource = false; $imageSource = false; ?>
                                            </div>
                                        </div>

                                        <!-- Main Part 1 ---------------------------->
                                        <div class="grid-x grid-margin-x">
                                            <main class="cell small-12 medium-7">
                                                <?php $dataSource = $rssNews->loadFeed(); $imageSource = $rssNews->loadImages(); ?>
                                                <?php for ($i = 2; $i <= 7; $i++ ) { ?>
                                                    <?php include('assets/article-large.php'); ?>
                                                <?php } ?>
                                            </main>
                                            <?php include ('assets/sidebar-upper.php'); ?>
                                        </div>

                                    </div>
                                </div>

                                <!-- Main Content ---------------------------->
                                <div class="grid-wrapper">
                                    <div class="grid-container interscroller-bound" id="adcheck-cell">

                                        <!-- Know How ---------------------------->
                                        <div class="grid-x">
                                            <div class="cell small-12">
                                                <h2>Wissen</h2>
                                                <hr />
                                            </div>
                                        </div>
                                        <div class="grid-x grid-margin-x align-stretch">
                                            <?php $dataSource = $rssKnowhow->loadFeed(); $imageSource = $rssKnowhow->loadImages(); ?>
                                            <?php for ($i = 1; $i <= 3; $i++ ) { ?>
                                                <div class="cell small-12 medium-4">
                                                    <?php include('assets/article-small.php'); ?>
                                                </div>
                                            <?php } ?>
                                        </div>

                                        <!-- Main Part 2 ---------------------------->
                                        <div class="grid-x">
                                            <!-- Main 2 ---------------------------->
                                            <main class="cell small-12 medium-7">
                                                <?php for ($i = 5; $i <= 10; $i++ ) { ?>
                                                    <?php include('assets/article-large.php'); ?>
                                                <?php } ?>
                                            </main>
                                            <!-- Sidebar 2 ---------------------------->
                                            <?php include ('assets/sidebar-lower.php'); ?>
                                        </div>

                                        <!-- Digital ---------------------------->
                                        <div class="grid-x">
                                            <div class="cell small-12">
                                                <h2>Digital</h2>
                                                <hr />
                                            </div>
                                        </div>
                                        <?php $dataSource = $rssDigital->loadFeed(); $imageSource = $rssDigital->loadImages(); ?>
                                        <div class="grid-x grid-margin-x align-stretch">
                                            <?php for ($i = 1; $i <= 3; $i++ ) { ?>
                                                <div class="cell small-12 medium-4">
                                                    <?php include('assets/article-small.php'); ?>
                                                </div>
                                            <?php } ?>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- picture of the Day ---------------------------->
                <div class="grid-wrapper">
                    <div class="grid-container" id="adcheck-cell">
                        <div class="grid-x">
                            <div class="cell">
                                <h2>Bild des Tages</h2>
                            </div>
                        </div>
                        <div class="grid-x align-center-middle" id="pictureOfTheDay">
                            <div class="cell small-24">
                                <h3>1971</h3>
                                <h2>Als Gladbach das gegnerische Tor zum Einsturz brachte</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <img class="footer-ad show-for-small-only" src="ads/mobile-footer.png">

                <div class="grid-wrapper">
                    <div class="grid-container">
                        <div class="grid-x">
                            <div class="cell small-8">
                                <img class="footer-ad hide-for-small-only" src="ads/text-footer.png">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="cell hide-for-small-only medium-2">
                <iframe class="ad-iframe" src="ads/Right_banner.html"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Scripts ---------------------------->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
<script src="assets/js/vastvideoplugin.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>


<?php if($fixedBillboard == true) { ?>

    <script>
        function sticky_relocate() {
            var window_top = $(window).scrollTop();
            var div_top = $('.sticky-anchor').offset().top;
            if (window_top > div_top) {
                $('#header-banner-sticky').addClass('sticky');
                $('#sticky-anchor').addClass('sticky');
            } else {
                $('#header-banner-sticky').removeClass('sticky');
                $('#sticky-anchor').removeClass('sticky');
            }
        }

        $(function() {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
        });
    </script>

<?php } ?>



</body>
</html>