<?php
namespace DebugAcademy\DarkSkyApp;

interface WeatherStation {
    public function getTemperature();
    public function getConditions();
    public function getWindSpeed();
    public function getDataTimestamp();

}