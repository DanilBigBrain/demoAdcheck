<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = true; //970x250px
$billboard2 = false;

$footerSuperBanner = true; //970x250px
$footerSuperBanner2 = false;

$superBanner = true; //728x90px
$superBanner2 = false;

$skyScraper = true; //160x600px
$skyScraper2 = false;

$mediumRectangle = true; //300x250px
$mediumRectangle2 = false;

$halfPageAd = true; //300x600px
$halfPageAd2 = false;


$stickyBillboard = false;
$stickySuperBanner = false;

$stickyHPA = false;
$stickySkyScr = true;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/demo-billboard.png";
$billboardV2 = "https://via.placeholder.com/970x250?text=BillboardV2_970x250px";
$billboardV3 = "https://via.placeholder.com/970x250?text=BillboardV3_970x250px";
$billboardV4 = "ads/ADVISION_Mercedes-AMG_BB_AMG_Experience_25358994.mp4";


$superBannerV1 = "ads/demo-superbanner.png";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV2_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";
$superBannerV4 = "ads/ADVISION_Coca-Cola_Rang_BBgroß_26117644.mp4";
$superBannerV5 = "";


$footerSuperBannerV1 = "ads/demo-superbanner.png";
$footerSuperBannerV2 = "https://via.placeholder.com/728x90?text=FooterSuperBannerV2_728x90px";
$footerSuperBannerV3 = "https://via.placeholder.com/728x90?text=FooterSuperBannerV3_728x90px";
$footerSuperBannerV4 = "ads/KW6_3_FB_Consorsbank.mp4";
$footerSuperBannerV5 = "";
$footerSuperBannerV6 = "";

$skyScraperV1 = "ads/demo-skyscraper.png";
$skyScraperV2 = "https://via.placeholder.com/160x600?text=SkyscraperV2_160x600px";
$skyScraperV3 = "https://via.placeholder.com/160x600?text=SkyscraperV3_160x600px";
$skyScraperV4 = "ads/ADVISION_Active_O2_SS_Wasse_24457560.mp4";


$medRecV1 = "ads/demo-mediumrectangle.png";
$medRecV2 = "https://via.placeholder.com/300x250?text=MedRecV2_300x250px";
$medRecV3 = "https://via.placeholder.com/300x250?text=MedRecV3_300x250px";
$medRecV4 = "ads/ADVISION_Schwaebisch_Hall_Bausparkasse_25098623.mp4";
$medRecV5 = "";
$medRecV6 = "";

$hpaV1 = "ads/demo-hpa.jpg";
$hpaV2 = "https://via.placeholder.com/300x600?text=HPAV2_300x600px";
$hpaV3 = "https://via.placeholder.com/300x600?text=HPAV3_300x600px";
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
