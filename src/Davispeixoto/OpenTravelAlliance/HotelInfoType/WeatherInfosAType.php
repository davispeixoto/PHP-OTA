<?php

namespace Davispeixoto\OpenTravelAlliance\HotelInfoType;

/**
 * Class representing WeatherInfosAType
 */
class WeatherInfosAType
{

    /**
     * Provides detailed information regarding weather.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WeatherInfoType[] $weatherInfo
     */
    private $weatherInfo = null;

    /**
     * Adds as weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WeatherInfoType $weatherInfo
     */
    public function addToWeatherInfo(\Davispeixoto\OpenTravelAlliance\WeatherInfoType $weatherInfo)
    {
        $this->weatherInfo[] = $weatherInfo;

        return $this;
    }

    /**
     * isset weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWeatherInfo($index)
    {
        return isset($this->weatherInfo[$index]);
    }

    /**
     * unset weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWeatherInfo($index)
    {
        unset($this->weatherInfo[$index]);
    }

    /**
     * Gets as weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WeatherInfoType[]
     */
    public function getWeatherInfo()
    {
        return $this->weatherInfo;
    }

    /**
     * Sets a new weatherInfo
     *
     * Provides detailed information regarding weather.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WeatherInfoType[] $weatherInfo
     * @return self
     */
    public function setWeatherInfo(array $weatherInfo)
    {
        $this->weatherInfo = $weatherInfo;

        return $this;
    }


}

