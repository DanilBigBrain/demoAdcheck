<?php

/**
 * Class RSS
 *
 * @package: annalectAdCheck
 */

class RSS {

    public $url;
    public $name;

    public function loadFeed() {
        return simplexml_load_file("data/rss-".$this->name.".xml");
    }

    public function refreshFeed() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        file_put_contents("data/rss-".$this->name.".xml", $response);
    }

    public function refreshImages() {
        $rss = simplexml_load_file($this->url);

        foreach ($rss->channel->item as $item) {
            $url = $item->link;
            $dom = new DOMDocument('1.0', 'UTF-8');
            $internalErrors = libxml_use_internal_errors(true);
            $dom->loadHTMLFile($url);
            libxml_use_internal_errors($internalErrors);

            $xpath = new DOMXPath($dom);
            $images = $xpath->query("//div[contains(@class, 'headmedia') and contains(@class ,'headmedia')]//img[@src]");

            foreach ($images as $image) {
                if ($image->nodeType == XML_ELEMENT_NODE) {
                    $array[] = $image->getAttribute('src');
                }
            }
        }
        return file_put_contents("data/images-".$this->name.".json",json_encode($array));
    }

    public function loadImages() {
        return json_decode(file_get_contents("data/images-".$this->name.".json"), true);
    }

}