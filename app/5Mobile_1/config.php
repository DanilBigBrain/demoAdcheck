<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = false; //970x250px
$billboard2 = true;

$footerSuperBanner = false; //970x250px
$footerSuperBanner2 = true;

$superBanner = false; //728x90px
$superBanner2 = true;

$skyScraper = false; //160x600px
$skyScraper2 = true;

$mediumRectangle = false; //300x250px
$mediumRectangle2 = true;

$halfPageAd = false; //300x600px
$halfPageAd2 = true;


$stickyBillboard = false;
$stickySuperBanner = false;

$stickyHPA = false;
$stickySkyScr = false;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/1_Nike BB.gif";
$billboardV2 = "ads/2_Spotify BB.gif";
$billboardV3 = "ads/3_Obi BB.gif";
$billboardV4 = "ads/ADVISION_Mercedes-AMG_BB_AMG_Experience_25358994.mp4";


$superBannerV1 = "ads/demo-superbanner.png";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV2_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";
$superBannerV4 = "ads/ADVISION_Coca-Cola_Rang_BBgroß_26117644.mp4";
$superBannerV5 = "";


$footerSuperBannerV1 = "ads/1_Acer_FB.gif";
$footerSuperBannerV2 = "ads/2_DBahn_FB.gif";
$footerSuperBannerV3 = "ads/3_Kaspersky_FB.gif";
$footerSuperBannerV4 = "ads/KW6_3_FB_Consorsbank.mp4";
$footerSuperBannerV5 = "";
$footerSuperBannerV6 = "";

$skyScraperV1 = "";
$skyScraperV2 = "ads/2_Bosch_Cookit_SS.gif";
$skyScraperV3 = "";
$skyScraperV4 = "ads/ADVISION_Active_O2_SS_Wasse_24457560.mp4";


$medRecV1 = "ads/1_eToro_MR.gif";
$medRecV2 = "ads/2_Fielmann_MR.gif";
$medRecV3 = "ads/3_Apple_MR.gif";
$medRecV4 = "ads/ADVISION_Schwaebisch_Hall_Bausparkasse_25098623.mp4";
$medRecV5 = "";
$medRecV6 = "";

$hpaV1 = "ads/1_Mercedes-AMG_HPA.gif";
$hpaV2 = "https://via.placeholder.com/300x600?text=HPAV2_300x600px";
$hpaV3 = "ads/3-Milka-HPA.gif";
$hpaV4 = "ads/ADVISION_Ergo_Versicherungen_Investment_25858757.mp4";


/* SUBPAGE SETTINGS
===============================================================  */

$subpage = false;
$page = new article;
$page->url = "https://www.focus.de/finanzen/boerse/tausende-mitarbeiter-muessen-gehen-stellenabbau-bei-daimler-interne-dokumente-zeigen-wie-das-kuendigungsgespraech-laeuft_id_11932178.html";

/* AD PARAMETERS
===============================================================  */

$bb = (isset($_GET['bb']) && !empty($_GET['bb'])) ? $_GET['bb'] :  null;
$supBan = (isset($_GET['supban']) && !empty($_GET['supban'])) ? $_GET['supban'] :  null;
$fooSupBan = (isset($_GET['fooSupBan']) && !empty($_GET['fooSupBan'])) ? $_GET['fooSupBan'] :  null;
$skyScr = (isset($_GET['skyScr']) && !empty($_GET['skyScr'])) ? $_GET['skyScr'] :  null;
$medRec = (isset($_GET['medRec']) && !empty($_GET['medRec'])) ? $_GET['medRec'] :  null;
$hpa = (isset($_GET['hpa']) && !empty($_GET['hpa'])) ? $_GET['hpa'] :  null;

/* RSS FEEDS
===============================================================  */

$rssNews = new RSS;
$rssNews->url = "https://rss.focus.de/fol/XML/rss_folnews.xml";
$rssNews->name = "folnews";

$rssFinance = new RSS;
$rssFinance->url = "https://rss.focus.de/finanzen/";
$rssFinance->name = "finance";

$rssSports = new RSS;
$rssSports->url = "https://rss.focus.de/sport/";
$rssSports->name = "Sports";

$rssKnowhow = new RSS;
$rssKnowhow->url = 'https://rss.focus.de/wissen/';
$rssKnowhow->name = "Know How";

$rssDigital = new RSS;
$rssDigital->url = 'https://rss.focus.de/digital/';
$rssDigital->name = 'Digital';
