<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = true; //970x250px
$footerBillboard = true; //970x250px
$superBanner = false; //728x90px
$skyScraper = true; //160x600px
$mediumRectangle = true; //300x250px
$halfPageAd = false; //300x600px

$stickyBillboard = false;
$stickySuperBanner = true;
$stickyHPA = false;
$stickySkyScr = true;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/KW8_4_BB_Congstar.gif";
$billboardV2 = "ads/KW8_5_BB_Ergo.gif";
$billboardV3 = "https://via.placeholder.com/970x250?text=BillboardV3_970x250px";

$superBannerV1 = "ads/demo-superbanner.png";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";

$footerSuperBannerV1 = "ads/KW8_4_SB_HP.gif";
$footerSuperBannerV2 = "ads/KW8_5_SB_Ford.gif";
$footerSuperBannerV3 = "https://via.placeholder.com/728x90?text=FooterSuperBannerV3_728x90px";

$skyScraperV1 = "ads/KW8_4_SS_Peugeot.gif";
$skyScraperV2 = "ads/KW8_5_SS_Milram.gif";
$skyScraperV3 = "https://via.placeholder.com/160x600?text=SkyscraperV3_160x600px";

$medRecV1 = "ads/KW8_4_MR_Otto.gif";
$medRecV2 = "ads/KW8_5_MR_Nivea.gif";
$medRecV3 = "https://via.placeholder.com/300x250?text=MedRecV3_300x250px";

$hpaV1 = "ads/demo-hpa.jpg";
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
