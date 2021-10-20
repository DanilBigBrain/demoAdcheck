<?php
require_once('scripts/article.php');
require_once('scripts/rss.php');
require_once('scripts/weather.php');

/* VISIBILTY
===============================================================  */

$billboard = true; //970x250px
$footerSuperBanner = true; //970x250px
$superBanner = false; //728x90px
$skyScraper = true; //160x600px
$mediumRectangle = true; //300x250px
$halfPageAd = false; //300x600px

$stickyBillboard = true;
$stickySuperBanner = true;
$stickyHPA = false;
$stickySkyScr = false;

/* IMAGE PATH
===============================================================  */

$billboardV1 = "ads/demo-billboard.png";
$billboardV2 = "ads/Audi_KW18_2_Audi_BB_920x250_hl_modern_statement4.jpg";
$billboardV3 = "ads/Audi_KW18_3_Audi_BB_920x250_hl_faszinationswochen4.jpg";

$superBannerV1 = "ads/demo-superbanner.png";
$superBannerV2 = "https://via.placeholder.com/728x90?text=SuperBannerV2_728x90px";
$superBannerV3 = "https://via.placeholder.com/728x90?text=SuperBannerV3_728x90px";

$footerSuperBannerV1 = "ads/demo-superbanner.png";
$footerSuperBannerV2 = "ads/Audi_KW18_2_Kinder_FB_24687283.gif";
$footerSuperBannerV3 = "ads/Audi_KW18_3_Deutsche Telekom_FB_26151150.gif";

$skyScraperV1 = "ads/demo-skyscraper.png";
$skyScraperV2 = "ads/Audi_KW18_2_Nespresso_SS_26050159.gif";
$skyScraperV3 = "ads/Audi_KW18_3_Gazi_SS_26042213.gif";

$medRecV1 = "ads/demo-mediumrectangle.png";
$medRecV2 = "ads/Audi_KW18_2_Comdirect_MR_25851401.gif";
$medRecV3 = "ads/Audi_KW18_3_Frosta_Rang_MR_25093449.gif";

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
