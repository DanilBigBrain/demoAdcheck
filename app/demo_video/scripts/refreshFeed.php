<?php

/**
 * Refreshes Page after Click on Input at Admin-Page
 *
 * @package: annalectAdCheck
 */

include_once 'rss.php';

    if(isset($_GET['refreshRSS'])) {

        $rssNews->refreshImages();
        $rssNews->refreshFeed();

        $rssFinance->refreshImages();
        $rssFinance->refreshFeed();

        $rssSports->refreshFeed();
        $rssSports->refreshImages();

        $rssDigital->refreshFeed();
        $rssDigital->refreshImages();

        $rssKnowhow->refreshFeed();
        $rssKnowhow->refreshImages();

        $timestamp = [];
        array_push($timestamp, date("d.m.y h:i:s") );
        file_put_contents("data/last-build.json", $timestamp);

    }

?>