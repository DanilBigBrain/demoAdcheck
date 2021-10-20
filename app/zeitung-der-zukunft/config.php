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

$billboardV1 = "ads/siemens.gif";
$billboardV2 = "https://via.placeholder.com/970x250?text=BillboardV2_970x250px";
$billboardV3 = "https://via.placeholder.com/970x250?text=BillboardV3_970x250px";

$superBannerV1 = "ads/siemens.gif";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV2_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";

$footerSuperBannerV1 = "ads/allbirds.png";
$footerSuperBannerV2 = "https://via.placeholder.com/728x90?text=FooterSuperBannerV2_728x90px";
$footerSuperBannerV3 = "https://via.placeholder.com/728x90?text=FooterSuperBannerV3_728x90px";

$skyScraperV1 = "ads/demo-skyscraper.png";
$skyScraperV2 = "https://via.placeholder.com/160x600?text=SkyscraperV2_160x600px";
$skyScraperV3 = "https://via.placeholder.com/160x600?text=SkyscraperV3_160x600px";

$medRecV1 = "ads/pfizer.gif";
$medRecV2 = "https://via.placeholder.com/300x250?text=MedRecV2_300x250px";
$medRecV3 = "https://via.placeholder.com/300x250?text=MedRecV3_300x250px";

$hpaV1 = "ads/lichtenauer.gif";
$hpaV2 = "https://via.placeholder.com/300x600?text=HPAV2_300x600px";
$hpaV3 = "https://via.placeholder.com/300x600?text=HPAV3_300x600px";

/* SUBPAGE SETTINGS
===============================================================  */

$page = new article;

/* AD PARAMETERS
===============================================================  */

/* $bb = (isset($_GET['bb']) && !empty($_GET['bb'])) ? $_GET['bb'] :  null;
$supBan = (isset($_GET['supban']) && !empty($_GET['supban'])) ? $_GET['supban'] :  null;
$fooSupBan = (isset($_GET['fooSupBan']) && !empty($_GET['fooSupBan'])) ? $_GET['fooSupBan'] :  null;
$skyScr = (isset($_GET['skyScr']) && !empty($_GET['skyScr'])) ? $_GET['skyScr'] :  null;
$medRec = (isset($_GET['medRec']) && !empty($_GET['medRec'])) ? $_GET['medRec'] :  null;
$hpa = (isset($_GET['hpa']) && !empty($_GET['hpa'])) ? $_GET['hpa'] :  null; */
$ads = (isset($_GET['ads']) && !empty($_GET['ads'])) ? $_GET['ads'] :  null;


if($ads) {
    $hpa = 1;
    $bb = 1;
    $medRec = 1;
}


$reveal = (isset($_GET['reveal']) && !empty($_GET['reveal'])) ? $_GET['reveal'] :  null;
$login = (isset($_GET['login']) && !empty($_GET['login'])) ? $_GET['login'] :  null;
$article_icon = (isset($_GET['article_icon']) && !empty($_GET['article_icon'])) ? $_GET['article_icon'] :  null;
$access = (isset($_GET['access']) && !empty($_GET['access'])) ? $_GET['access'] :  null;

// get current query to extend links
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$query = parse_url($url, PHP_URL_QUERY);
parse_str($query);
parse_str($query, $arr);

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