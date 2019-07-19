<?php

require_once __DIR__ . '/vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;


$apiService = new DarkSkyApi('apiKeyGoesHere'); 

echo "Current Conditions at the Natcher Conference Center: <br/>";
$forecast = ($apiService)
    ->location(38.997, -77.101)
    ->units('us')
    ->language('en')
    ->forecast();
echo 'Time: ' . date("D M d, Y h:ia", $forecast->currently()->time()) . '<br/>';
echo 'Latitude: ' . $forecast->latitude() . '<br/>';
echo 'Longitude: ' . $forecast->longitude() . '<br/>';
echo 'Conditions: ' . $forecast->currently()->summary() . '<br/>';
echo 'Temperature: ' . $forecast->currently()->temperature() . '<br/>';
echo 'Wind speed: ' . $forecast->currently()->windSpeed() . '<br/>';
echo 'UV Index: ' . $forecast->currently()->uvIndex() . '<br/>';
echo '</p>';