<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = true; //970x250px
$footerSuperBanner = true; //970x250px
$superBanner = false; //728x90px
$skyScraper = false; //160x600px
$mediumRectangle = true; //300x250px
$halfPageAd = true; //300x600px

$stickyBillboard = false;
$stickySuperBanner = true;
$stickyHPA = false;
$stickySkyScr = false;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/VWN_KW19_7_Garden_Gourmet_SB_23185401.gif";
$billboardV2 = "ads/VWN_KW19_5_O2_BB_26113037.gif";
$billboardV3 = "ads/VWN_KW19_6_Yogi Tea_BB_26013257.gif";

$superBannerV1 = "ads/demo-superbanner.png";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";

$footerSuperBannerV1 = "ads/VWN_KW19_7_MAC_FB_26077672.jpg";
$footerSuperBannerV2 = "ads/VWN_KW19_5_Maggi_FB_25201123.gif";
$footerSuperBannerV3 = "ads/VWN_KW19_6_enviaM_FB_25121920.gif";

$skyScraperV1 = "ads/demo-skyscraper.png";
$skyScraperV2 = "https://via.placeholder.com/160x600?text=SkyscraperV2_160x600px";
$skyScraperV3 = "https://via.placeholder.com/160x600?text=SkyscraperV3_160x600px";

$medRecV1 = "ads/VWN_KW19_7_C&A_MR_25436275.gif";
$medRecV2 = "ads/VWN_KW19_5_Hermes_MR_25997456.gif";
$medRecV3 = "ads/VWN_KW19_6_Radeberger_MR_26041782.gif";

$hpaV1 = "ads/VWN_KW19_7_VWN_HPA_300x600_EcoProfi_2021_TR.gif";
$hpaV2 = "ads/VWN_KW19_5_VWN_HPA_300x600_EcoProfi_2021_CDC.gif";
$hpaV3 = "ads/VWN_KW19_6_VWN_HPA_300x600_EcoProfi_2021_CR.gif";

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
