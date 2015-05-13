<?php

namespace Davispeixoto\OpenTravelAlliance\WeatherInfoType;

/**
 * Class representing TemperatureAType
 */
class TemperatureAType
{

    /**
     * Defines the average high tempature for the time as designated in Period and is
     * qualified by the TempUnit.
     *
     * @property integer $averageHighTemp
     */
    private $averageHighTemp = null;

    /**
     * Defines the average low tempature for the time as designated in Period and is
     * qualified by the TempUnit.
     *
     * @property integer $averageLowTemp
     */
    private $averageLowTemp = null;

    /**
     * Provides the units in which the AverageHighTemp and AverageLowTemp are defined
     * (i.e. Celsius or Fahrenheit).
     *
     * @property string $tempUnit
     */
    private $tempUnit = null;

    /**
     * Gets as averageHighTemp
     *
     * Defines the average high tempature for the time as designated in Period and is
     * qualified by the TempUnit.
     *
     * @return integer
     */
    public function getAverageHighTemp()
    {
        return $this->averageHighTemp;
    }

    /**
     * Sets a new averageHighTemp
     *
     * Defines the average high tempature for the time as designated in Period and is
     * qualified by the TempUnit.
     *
     * @param integer $averageHighTemp
     * @return self
     */
    public function setAverageHighTemp($averageHighTemp)
    {
        $this->averageHighTemp = $averageHighTemp;

        return $this;
    }

    /**
     * Gets as averageLowTemp
     *
     * Defines the average low tempature for the time as designated in Period and is
     * qualified by the TempUnit.
     *
     * @return integer
     */
    public function getAverageLowTemp()
    {
        return $this->averageLowTemp;
    }

    /**
     * Sets a new averageLowTemp
     *
     * Defines the average low tempature for the time as designated in Period and is
     * qualified by the TempUnit.
     *
     * @param integer $averageLowTemp
     * @return self
     */
    public function setAverageLowTemp($averageLowTemp)
    {
        $this->averageLowTemp = $averageLowTemp;

        return $this;
    }

    /**
     * Gets as tempUnit
     *
     * Provides the units in which the AverageHighTemp and AverageLowTemp are defined
     * (i.e. Celsius or Fahrenheit).
     *
     * @return string
     */
    public function getTempUnit()
    {
        return $this->tempUnit;
    }

    /**
     * Sets a new tempUnit
     *
     * Provides the units in which the AverageHighTemp and AverageLowTemp are defined
     * (i.e. Celsius or Fahrenheit).
     *
     * @param string $tempUnit
     * @return self
     */
    public function setTempUnit($tempUnit)
    {
        $this->tempUnit = $tempUnit;

        return $this;
    }


}

