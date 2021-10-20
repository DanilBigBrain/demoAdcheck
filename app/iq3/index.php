<?php include_once('config.php'); ?>
<!DOCTYPE html>
<html lang="de">
<head>
    <?php include ('assets/head.php'); ?>
    <title>AdCheck – annalect</title>
</head>
<body>

    <!-- Header ---------------------------->
    <?php include ('assets/header.php'); ?>

    <?php if($stickyBillboard == true) { ?>  <?php } ?>

    <!-- Ad Billboard ---------------------------->
    <?php if($billboard == true && $bb) { ?>
        <div class="ad-wrapper" id="billboard">
            <?php include('assets/adinfo.php'); ?>
            <img src="<?php switch ($bb) {
                case 2:
                    echo $billboardV2;
                    break; case 3:
                    echo $billboardV3;
                    break; default:
                    echo $billboardV1;
            } ?>" alt="Banner Header">
        </div>
    <?php } ?>

    <!-- Ad Superbanner ---------------------------->
    <?php if($superBanner == true && $supBan) { ?>
        <div class="ad-wrapper sticky-ad" id="superbanner">
            <?php include('assets/adinfo.php'); ?>
            <img src="<?php switch ($supBan) {
                case 2:
                    echo $superBannerV2;
                    break; case 3:
                        echo $superBannerV3;
                    break; default:
                    echo $superBannerV1;
            } ?>" alt="Banner Header">
        </div>
    <?php } ?>

    <div class="grid-wrapper">
        <div class="grid-container">
            <div class="grid-x align-top">
                <div class="cell small-12 medium-auto">

                    <!-- Pre Content ---------------------------->
                    <div class="grid-wrapper" id="preHeader">
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
                        <div class="grid-container">

                            <!-- Intro Article ---------------------------->
                            <div class="grid-x">
                              <div class="cell introArticle">
                                <?php if($subpage){ ?> <a href="subpage.php"> <?php } ?>
                                  <?php $dataSource = $rssNews->loadFeed(); $imageSource = $rssNews->loadImages(); $i=0 ?>
                                  <?php include_once('assets/article-large.php'); ?>
                                  <?php $dataSource = false; $imageSource = false; ?>
                                  <?php if($subpage){ ?> </a> <?php } ?>
                              </div>
                            </div>

                            <div class="grid-x align-center show-for-small-only ads">
                              <div class="cell">
                                <!-- Ad Mobile Skyscraper ---------------------------->
                                <?php if($skyScraper == true && $skyScr) { ?>
                                    <div class="ad-wrapper mobile-ad" id="skyscraper">
                                        <?php include('assets/adinfo.php'); ?>
                                        <img src="<?php switch ($skyScr) {
                                            case 2:
                                                echo $skyScraperV2;
                                                break; case 3:
                                                echo $skyScraperV3;
                                                break; default:
                                                echo $skyScraperV1;
                                        } ?>" alt="Skyscraper Ads">
                                    </div>
                                <?php } ?>

                                <!-- Ad Mobile HPA ---------------------------->
                                <?php if($halfPageAd == true && $hpa) { ?>
                                    <div class="ad-wrapper mobile-ad" id="hpa">
                                        <?php include('assets/adinfo.php'); ?>
                                        <img src="<?php switch ($hpa) {
                                            case 2:
                                                echo $hpaV2;
                                                break; case 3:
                                                echo $hpaV3;
                                                break; default:
                                                echo $hpaV1;
                                        } ?>" alt="Halfpage Ad">
                                    </div>
                                <?php } ?>
                              </div>
                            </div>

                            <!-- Main Part 1 ---------------------------->
                            <div class="grid-x grid-margin-x">
                                <main class="cell small-12 medium-7">
                                    <?php $dataSource = $rssNews->loadFeed(); $imageSource = $rssNews->loadImages(); ?>
                                    <?php for ($i = 2; $i <= 3; $i++ ) { ?>
                                        <?php include('assets/article-large.php'); ?>
                                    <?php } ?>
                                </main>
                                <?php include ('assets/sidebar-upper.php'); ?>
                            </div>

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
                                    <?php for ($i = 4; $i <= 5; $i++ ) { ?>
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

                <!-- Ad Desktop Skyscraper ---------------------------->
                <?php if($skyScraper == true && $skyScr) { ?>
                    <div class="hide-for-small-only ad-wrapper sticky-ad" id="skyscraper">
                        <?php include('assets/adinfo.php'); ?>
                        <img src="<?php switch ($skyScr) {
                            case 2:
                                echo $skyScraperV2;
                                break; case 3:
                                echo $skyScraperV3;
                                break; default:
                                echo $skyScraperV1;
                        } ?>" alt="Skyscraper Ads">
                    </div>
                <?php } ?>

                <!-- Ad Desktop HPA ---------------------------->
                <?php if($halfPageAd == true && $hpa) { ?>
                    <div class="hide-for-small-only ad-wrapper sticky-ad" id="hpa">
                        <?php include('assets/adinfo.php'); ?>
                        <img src="<?php switch ($hpa) {
                            case 2:
                                echo $hpaV2;
                                break; case 3:
                                echo $hpaV3;
                                break; default:
                                echo $hpaV1;
                        } ?>" alt="Halfpage Ad">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Picture of the Day ---------------------------->
    <div class="grid-wrapper">
        <div class="grid-container">
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

    <!-- Ad Footer Superbanner ---------------------------->
    <?php if($footerSuperBanner == true && $fooSupBan) { ?>
        <div class="ad-wrapper" id="footer-superbanner">
            <?php include('assets/adinfo.php'); ?>
            <img src="<?php switch ($fooSupBan) {
                case 2:
                    echo $footerSuperBannerV2;
                    break; case 3:
                    echo $footerSuperBannerV3;
                    break; default:
                    echo $footerSuperBannerV1;
            } ?>" alt="Footer Superbanner">
        </div>
    <?php } ?>

    <!-- Footer ---------------------------->
    <?php include_once ('assets/footer.php'); ?>

    <!-- Scripts ---------------------------->
    <script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>

    <script>
      $(document).foundation();
    </script>


    <script src="assets/js/vastvideoplugin.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>

    <script type="text/javascript" src="https://kunde.trend-research.de/multimedia/plugin/2021_adcheck.js"></script>

</body>
</html>
