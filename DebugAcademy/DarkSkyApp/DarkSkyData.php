<?php 
namespace DebugAcademy\DarkSkyApp;

require_once('WeatherStationInterface.php');

use DmitryIvanov\DarkSkyApi\DarkSkyApi;

class DarkSkyData implements WeatherStationInterface {

    // private $temperature;
    // private $conditions;
    // private $windSpeed;
    // private $dataTimestamp;
    private $apiService;
    // private $forecast;
    private $language;
    private $units;

    public function __construct() {
        $this->apiService= new DarkSkyApi('0665145667ce6a234287f1399a71e627'); 
        $this->setLanguage();
        $this->setUnits();
    }


    public function setLanguage($preferredLanguage = 'en') {
        $this->language = $preferredLanguage;
    }

    public function setUnits($preferredMeasurementUnits = 'us') {
        $this->units = $preferredMeasurementUnits;
    }

    private function getWeatherData() {
        return ($this->apiService)
        ->location(38.997, -77.101)
        ->units($this->units)
        ->language($this->language)
        ->forecast();
    }

    public function getTemperature() {
        return $this->getWeatherData()->currently()->temperature();
    }

    public function getConditions() {
        return $this->getWeatherData()->currently()->summary();
    }

    public function getWindSpeed() {
        return $this->getWeatherData()->currently()->windSpeed();
    }

    public function getDataTimestamp() {
        return $this->getWeatherData()->currently()->time();
    }

}
