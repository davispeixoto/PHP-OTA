<?php

namespace Davispeixoto\OpenTravelAlliance\WeatherInfoType;

/**
 * Class representing PrecipitationAType
 */
class PrecipitationAType
{

    /**
     * Defines the average precipitation for the time as designated in Period and is
     * qualified by the UnitOfMeasure.
     *
     * @property float $averagePrecipitation
     */
    private $averagePrecipitation = null;

    /**
     * This is the unit of measure as it applies to AveragePercipitation (e.g.inches or
     * centimeters).
     *
     * @property string $unitOfMeasure
     */
    private $unitOfMeasure = null;

    /**
     * Gets as averagePrecipitation
     *
     * Defines the average precipitation for the time as designated in Period and is
     * qualified by the UnitOfMeasure.
     *
     * @return float
     */
    public function getAveragePrecipitation()
    {
        return $this->averagePrecipitation;
    }

    /**
     * Sets a new averagePrecipitation
     *
     * Defines the average precipitation for the time as designated in Period and is
     * qualified by the UnitOfMeasure.
     *
     * @param float $averagePrecipitation
     * @return self
     */
    public function setAveragePrecipitation($averagePrecipitation)
    {
        $this->averagePrecipitation = $averagePrecipitation;

        return $this;
    }

    /**
     * Gets as unitOfMeasure
     *
     * This is the unit of measure as it applies to AveragePercipitation (e.g.inches or
     * centimeters).
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * Sets a new unitOfMeasure
     *
     * This is the unit of measure as it applies to AveragePercipitation (e.g.inches or
     * centimeters).
     *
     * @param string $unitOfMeasure
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;

        return $this;
    }


}

