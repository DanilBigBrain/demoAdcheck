<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>AdCheck – annalect </title>
</head>
<body>

    <!-- ------ Header ------ -->
    <?php include ('assets/header.php'); ?>

    <!-- ------ Ad – Header Banner ------ -->
    <?php if($showBanner == true && $banner) { ?>
        <?php if($fixedBanner == true) { ?><div id="sticky-anchor"></div><?php } ?>
        <div class="row-wrapper ads"  <?php if($fixedBanner == true) { ?>id="header-banner-sticky"<?php } ?>>
            <div class="row">
                <div class="columns" id="ad-wrapper">
                    <?php include('assets/adinfo.php'); ?>
                    <img id="headerBanner" src="<?php switch ($banner) {
                        case 1:
                            echo $bannerV1;
                            break;
                        case 2:
                            echo $bannerV2;
                            break;
                    } ?>" alt="Banner">
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- ------ Ad – Bottom Banner ------ -->
    <?php if($showBottomBanner == true && $banner) { ?>
        <div class="row-wrapper ads" id="bottomBanner">
            <div class="row">
                <div class="columns" id="ad-wrapper">
                    <?php include('assets/adinfo.php'); ?>
                    <img id="headerBanner" src="<?php switch ($banner) {
                        case 1:
                            echo $bannerV1;
                            break;
                        case 2:
                            echo $bannerV2;
                            break;
                    } ?>" alt="Banner">
                </div>
            </div>
        </div>
    <?php } ?>

    <!-- ------ Pre Content ------ -->
    <div class="row-wrapper">
        <div class="row">
            <div class="columns small-24 medium-16 newsticker">
                <div class="row align-middle">
                    <div class="columns small-24 medium-5 newsticker-square-wrapper">
                        <div class="newsticker-square">
                            <span class="ic_24">24</span><span class="ic_news">Stunden<br/>News</span>
                        </div>
                    </div>
                    <div class="columns small-24 medium-19 newsticker-content">
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
            <div class="columns small-24 medium-expand weather">
                <div class="row">
                    <div class="columns small-8 city">
                        <?php $iconham = $weather_hamburg->refresh()['weather'][0]['icon']; ?>
                        <img class="weather-icon" width="60px" src="<?php echo("http://openweathermap.org/img/wn/".$iconham."@2x.png");?>">
                        <strong><?php echo round($weather_hamburg->refresh()['main']['temp']); ?>&deg;C</strong><br />
                        <small class="city">Hamburg</small>
                    </div>
                    <div class="columns small-8 city">
                        <?php $iconmun = $weather_munich->refresh()['weather'][0]['icon']; ?>
                        <img class="weather-icon" width="60px" src="<?php echo("http://openweathermap.org/img/wn/".$iconmun."@2x.png");?>">
                        <strong><?php echo round($weather_munich->refresh()['main']['temp']); ?>&deg;C</strong><br />
                        <small class="city">München</small>
                    </div>
                    <div class="columns small-8 city">
                        <?php $iconber= $weather_berlin->refresh()['weather'][0]['icon']; ?>
                        <img class="weather-icon" width="60px" src="<?php echo("http://openweathermap.org/img/wn/".$iconber."@2x.png");?>">
                        <strong><?php echo round($weather_berlin->refresh()['main']['temp']); ?>&deg;C</strong><br />
                        <small class="city">Berlin</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ------ Main Content ------ -->
    <div class="row-wrapper">

        <!-- ------ Intro Article ------ -->
        <div class="row">
            <div class="columns small-24 introArticle">
                <?php $dataSource = $rssNews->loadFeed(); $imageSource = $rssNews->loadImages(); $i=0 ?>
                    <?php include_once('assets/article-large.php'); ?>
                <?php $dataSource = false; $imageSource = false; ?>
            </div>
        </div>

        <!-- ------ Main - Part 1 ------ -->
        <div class="row">
            <main class="column small-24 medium-16">
                <?php $dataSource = $rssNews->loadFeed(); $imageSource = $rssNews->loadImages(); ?>
                <?php for ($i = 2; $i <= 3; $i++ ) { ?>
                    <?php include('assets/article-large.php'); ?>
                <?php } ?>
            </main>
            <?php include ('assets/sidebar-upper.php'); ?>
        </div>

        <!-- ------ Know How ------ -->
        <div class="row">
            <div class="columns small-24">
                <h2>Wissen</h2>
                <hr />
            </div>
            <?php $dataSource = $rssKnowhow->loadFeed(); $imageSource = $rssKnowhow->loadImages(); ?>
            <?php for ($i = 1; $i <= 3; $i++ ) { ?>
                <div class="columns small-24 medium-8">
                    <?php include('assets/article-small.php'); ?>
                </div>
            <?php } ?>
        </div>

        <!-- ------ Main - Part 2 ------ -->
        <div class="row">
            <!-- ------ Main 2 ------ -->
            <main class="column small-24 medium-16">
                <?php for ($i = 4; $i <= 5; $i++ ) { ?>
                    <?php include('assets/article-large.php'); ?>
                <?php } ?>
            </main>
            <!-- ------ Sidebar 2 ------ -->
            <?php include ('assets/sidebar-lower.php'); ?>
        </div>
        <!-- ------ Digital ------ -->
        <div class="row">
            <div class="columns small-24">
                <h2>Digital</h2>
                <hr />
            </div>
        </div>
        <?php $dataSource = $rssDigital->loadFeed(); $imageSource = $rssDigital->loadImages(); ?>
        <div class="row align-stretch">
            <?php for ($i = 1; $i <= 3; $i++ ) { ?>
                <div class="columns small-24 medium-8">
                    <?php include('assets/article-small.php'); ?>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- ------ Ad – Header Banner ------ -->
    <?php if($showBanner == true) { ?>
        <?php if($fixedBanner == true) { ?><div id="sticky-anchor"></div><?php } ?>
        <div class="row-wrapper ads"  <?php if($fixedBanner == true) { ?>id="header-banner-sticky"<?php } ?>>
            <div class="row">
                <div class="columns" id="ad-wrapper">
                    <?php include('assets/adinfo.php'); ?>
                    <img src="<?php switch ($adId) {
                        case 2:
                            echo $bannerV2;
                            break; case 3:
                            echo $bannerV3;
                            break; default:
                            echo $bannerDefault;
                    } ?>" alt="Banner Header">
                </div>
            </div>
        </div>
    <?php } ?>

    <div class="row-wrapper">
        <div class="row">
            <div class="columns">
                <h2>Bild des Tages</h2>
            </div>
        </div>
        <div class="row align-center-middle" id="pictureOfTheDay">
            <div class="columns small-24">
                <h3>1971</h3>
                <h2>Als Gladbach das gegnerische Tor zum Einsturz brachte</h2>
            </div>
        </div>
    </div>

    <!-- #end wrapper -->
    </div>

    <!-- ------ Footer ------ -->
    <?php include_once ('assets/footer.php'); ?>

    <!-- ------ Script ------ -->
    <script src="https://kunde.trend-research.de/multimedia/plugin/trendresearch_iframe_interaction.js" type="text/javascript"></script>

</body>
</html>