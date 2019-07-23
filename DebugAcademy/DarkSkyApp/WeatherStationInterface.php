<?php
namespace DebugAcademy\DarkSkyApp;

interface WeatherStationInterface {
    public function getTemperature();
    public function getConditions();
    public function getWindSpeed();
    public function getDataTimestamp();

}
