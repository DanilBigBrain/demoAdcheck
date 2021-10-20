<?php

class subPage {

    public $url;

    public function loadSubPage() {

        $doc = new DOMDocument();
        $ch = curl_init();
        $timeout = 500;
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);

        @$doc->loadHTML($data);

        $xpath = new DOMXPath($doc);

        $queries[] = $xpath->query("//div[@class='leadIn']/p");
        $queries[] = $xpath->query("//div[@class='textBlock']/p");

        $array  = [];

        foreach ($queries as $queries) {
            foreach ($queries as $query) {
                array_push($array, $query->nodeValue);
            }
        }

        return $array;

    }
}

?>