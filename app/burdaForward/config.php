<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/**
 *  ===============================================================
 *  START EDITING BELOW THIS LINE.
 *  ===============================================================
 */

/** 1. Step: Choose which ads to display. Possible values: "true" or "false". Choose Fixed or Static Banner */
$showBanner = true;
$fixedBanner = false;

$bannerV1 = "ads/ADVISION_Medigel_Medigeld_13450337.JPG";
$bannerV2 = "ads/ADVISION_Schwaebisch_Hall_Bausparkasse_24017440.jpg";
$bannerV3 = "ads/ADVISION_Sky_Pay-T_24065378.jpg";
$bannerV4 = "ads/ADVISION_Smart_Smartco_23534104.GIF";

$upperMedRectangle = "ads/tchibo-kaffee.jpg";

$medRectangleV1 = "ads/BigMac_gelb_CI-konform_300x250.gif";
$medRectangleV2 = "ads/BigMac_300x250.gif";


/**
 *  ===============================================================
 *  STOP EDITING HERE
 *  ===============================================================
 */


/**
 *  Global Variables.
 */

$banner = (isset($_GET['banner']) && !empty($_GET['banner'])) ? $_GET['banner'] :  null;
$article = (isset($_GET['article']) && !empty($_GET['article'])) ? $_GET['article'] :  null;
$medRectangle = (isset($_GET['medRectangle']) && !empty($_GET['medRectangle'])) ? $_GET['medRectangle'] :  null;


/**
 *  RSS Feeds
 */

$page = new article;
$page->url = "https://www.focus.de/finanzen/boerse/tausende-mitarbeiter-muessen-gehen-stellenabbau-bei-daimler-interne-dokumente-zeigen-wie-das-kuendigungsgespraech-laeuft_id_11932178.html";

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
?>
