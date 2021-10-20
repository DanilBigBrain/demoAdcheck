<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = true; //970x250px
$footerBillboard = true; //970x250px
$superBanner = true; //728x90px
$skyScraper = true; //160x600px
$mediumRectangle = true; //300x250px
$halfPageAd = true; //300x600px

$fixedBillboard = false;
$fixedSuperBanner = true;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/KW5_1_BB_Burger_King.GIF";
$billboardV2 = "ads/KW5_2_BB_Hyundai.gif";
$billboardV3 = "https://via.placeholder.com/970x250?text=BillboardV3_970x250px";

$superBannerV1 = "ads/KW6_3_SB_Vorwerk.gif";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV2_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";

$footerSuperBannerV1 = "ads/KW5_1_SB_SportScheck.gif";
$footerSuperBannerV2 = "ads/KW5_2_SB_Tchibo.gif";
$footerSuperBannerV3 = "ads/KW6_3_FB_Consors-Bank.gif";

$skyScraperV1 = "ads/KW5_1_SC_Bose.gif";
$skyScraperV2 = "https://via.placeholder.com/160x600?text=SkyscraperV2_160x600px";
$skyScraperV3 = "https://via.placeholder.com/160x600?text=SkyscraperV3_160x600px";

$medRecV1 = "ads/KW5_1_MR_Google.gif";
$medRecV2 = "ads/KW5_2_MR_Schwäbisch-Hall.gif";
$medRecV3 = "ads/KW6_3_MR_Philips.gif";

$hpaV1 = "ads/KW5_2_HPA_Sky.gif";
$hpaV2 = "ads/KW6_3_HPA_Penny.gif";
$hpaV3 = "https://via.placeholder.com/300x600?text=HPAV3_300x600px";

/* SUBPAGE SETTINGS
===============================================================  */

$subpage = true;
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
