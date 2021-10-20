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
$halfPageAd2 = false;


$stickyBillboard = false;
$stickySuperBanner = false;

$stickyHPA = false;
$stickySkyScr = true;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/2_Roller_BB_970x250.gif";                                                                     // hier nur .gif, jpg, png
$billboardV2 = "https://via.placeholder.com/970x250?text=BillboardV2_970x250px";       // hier nur .gif, jpg, png
$billboardV3 = "https://via.placeholder.com/970x250?text=BillboardV3_970x250px";       // hier nur .gif, jpg, png
$billboardV4 = "";                                           // hier nur .mp4

$superBannerV1 = "ads/1_Amazon_SB_728x90.gif";                                                                    // hier nur .gif, jpg, png
$superBannerV2 = "ads/3_Bauhaus_SB_728x90.gif";                                                                    // hier nur .gif, jpg, png
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";      // hier nur .gif, jpg, png
$superBannerV4 = "";                                          // hier nur .mp4
$superBannerV5 = "";                                         // hier nur .mp4

$footerSuperBannerV1 = "ads/1_HelloFresh_FB_728x90.gif";                                                              // hier nur .gif, jpg, png
$footerSuperBannerV2 = "ads/2_flaconi_FB_970x250.gif";                                                              // hier nur .gif, jpg, png
$footerSuperBannerV3 = "ads/3_mobile.de_FB_728x90.gif";                                                              // hier nur .gif, jpg, png
$footerSuperBannerV4 = "";                                // hier nur .mp4
$footerSuperBannerV5 ="";                                   // hier nur .mp4
$footerSuperBannerV6 = "";                                 // hier nur .mp4

$skyScraperV1 = "ads/1_MAN_TGM_skyscraper_160x600.gif";                                 // hier nur .gif, jpg, png
$skyScraperV2 = "ads/2_MAN_TGS_skyscraper_160x600.gif";                                 // hier nur .gif, jpg, png
$skyScraperV3 = "ads/3_MAN_TGX_skyscraper_160x600.gif";                                 // hier nur .gif, jpg, png
$skyScraperV4 = "";                                                                     // hier nur .mp4

$medRecV1 = "ads/1_mobile.de_MR_300x250.gif";                                                                         // hier nur .gif, jpg, png
$medRecV2 = "ads/2_ING_MR_300x250.gif";                                                                         // hier nur .gif, jpg, png
$medRecV3 = "ads/3_Zalando_MR_300x250.gif";                                                                         // hier nur .gif, jpg, png
$medRecV4 = "";                                           // hier nur .mp4
$medRecV5 = "";                                                 // hier nur .mp4
$medRecV6 = "";                                             // hier nur .mp4


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
