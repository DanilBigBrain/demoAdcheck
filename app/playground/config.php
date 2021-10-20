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
$showBanner = true;
$showSkyscraper = false;
$showUpperMediumRectangle = true;
$showLowerMediumRectangle = true;

$fixedBanner = true;

/** Insert Ad Image file paths. Can be skipped for non-visible ads. In case Dynamic Links are disabled, links can be skipped for V2 and V3. */
$bannerDefault = "ads/billboard-seatmii.png";
$bannerV2 = "ads/billboard-pepsimax.png";
$bannerV3 = "ads/billboard-pepsimax.png";

$skyscraperDefault = "ads/skyscraper-amazonmusic.png";
$skyscraperV2 = "ads/skyscaper-evian.jpg";
$skyscraperV3 = "ads/skyscaper-evian.jpg";

$upperMediumRectangleDefault = "ads/medium-rectangle-valensina.gif";
$upperMediumRectangleV2 = "ads/medium-rectangle-disney.jpg";
$upperMediumRectangleV3 = "ads/mediumRectangle-Tbone.jpg";

$lowerMediumRectangleDefault = "ads/mediumRectangle-Tbone.jpg";
$lowerMediumRectangleV2 = "ads/medium-rectangle-disney.jpg";
$lowerMediumRectangleV3 = "ads/mediumRectangle-Tbone.jpg";

/**
 *  ===============================================================
 *  STOP EDITING HERE
 *  ===============================================================
 */


/**
 *  Global Variables.
 */

$adId = (isset($_GET['ad_id']) && !empty($_GET['ad_id'])) ? $_GET['ad_id'] :  null;


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
