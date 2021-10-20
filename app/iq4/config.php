<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = false; //970x250px
$footerSuperBanner = true; //970x250px
$superBanner = true; //728x90px
$skyScraper = true; //160x600px
$mediumRectangle = true; //300x250px
$halfPageAd = true; //300x600px

$stickyBillboard = false;
$stickySuperBanner = true;
$stickyHPA = false;
$stickySkyScr = false;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/KW9_6_BB_Epson.GIF";
$billboardV2 = "ads/KW9_7_BB_AOK.gif";
$billboardV3 = "https://via.placeholder.com/970x250?text=BillboardV3_970x250px";

$superBannerV1 = "ads/KW10_8_SBH_Allianz.gif";
$superBannerV2 = "ads/KW10_9_SBH_DrOetker.gif";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";

$footerSuperBannerV1 = "ads/KW10_8_SB_Lotto.GIF";
$footerSuperBannerV2 = "ads/KW10_9_SB_Beefeater.GIF";
$footerSuperBannerV3 = "https://via.placeholder.com/728x90?text=FooterSuperBannerV3_728x90px";

$skyScraperV1 = "ads/KW10_8_SS_Ikea.jpg";
$skyScraperV2 = "ads/KW10_9_SS_EDEKA.gif";
$skyScraperV3 = "ads/KW10_8_SS_Ikea.jpg";

$medRecV1 = "ads/KW10_8_MR_Weihenstephan.gif";
$medRecV2 = "ads/KW10_9_MR_McDonalds.GIF";
$medRecV3 = "https://via.placeholder.com/300x250?text=MedRecV3_300x250px";

$hpaV1 = "ads/KW10_8_HPA_Rewe.gif";
$hpaV2 = "https://via.placeholder.com/300x600?text=HPAV2_300x600px";
$hpaV3 = "https://via.placeholder.com/300x600?text=HPAV3_300x600px";

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
