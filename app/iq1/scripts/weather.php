<?php

/**
 * Class weather
 *
 * @package: annalectAdCheck
 */

    class weather {

        public $name;
        public $id;

        public function refresh() {

            $url = "https://api.openweathermap.org/data/2.5/weather?id=".$this->id."&units=metric&appid=258d34f52790a3dd9de66b8dd36923eb";

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);

            curl_close($ch);
            return json_decode($response, true);
        }
    }

    $weather_hamburg = new weather;
    $weather_hamburg->name = "Hamburg";
    $weather_hamburg->id = "2911288";

    $weather_munich = new weather;
    $weather_munich->name = "München";
    $weather_munich->id = "3220838";

    $weather_berlin = new weather;
    $weather_berlin->name = "Berlin";
    $weather_berlin->id = "6545310";

?>