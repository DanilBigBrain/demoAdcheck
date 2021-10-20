<?php
/**
 * Config file. Set Ad Visibility, Dynamic Links and enter Ad file paths.
 */
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/**
 *  ===============================================================
 *  START EDITING BELOW THIS LINE.
 *  ===============================================================
 */

/** 1. Step: Choose which ads to display. Possible values: "true" or "false". Choose Fixed or Static Banner */
$showUpperMediumRectangle = true;
$showLowerMediumRectangle = true;
$showBanner = false;
$showBottomBanner = true;
$fixedBanner = true;

/** Insert Ad Image file paths. Can be skipped for non-visible ads. In case Dynamic Links are disabled, links can be skipped for V2 and V3. */
$bannerV1 = "ads/BigMac_gelb_CI-konform_320x50.gif";
$bannerV2 = "ads/BigMac_320x50.gif";

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
