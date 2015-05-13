<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing GlobalDirectionAType
 */
class GlobalDirectionAType
{

    /**
     * Indicates the global direction.
     *
     * @property string $globalIndicatorCode
     */
    private $globalIndicatorCode = null;

    /**
     * The maximum mileage (in miles) that can be travelled under this contract.
     *
     * @property integer $maximumPermittedMileage
     */
    private $maximumPermittedMileage = null;

    /**
     * When true, the global direction can be used for travel. When false, the global
     * direction cannot be used for travel.
     *
     * @property boolean $includeIndicator
     */
    private $includeIndicator = null;

    /**
     * Gets as globalIndicatorCode
     *
     * Indicates the global direction.
     *
     * @return string
     */
    public function getGlobalIndicatorCode()
    {
        return $this->globalIndicatorCode;
    }

    /**
     * Sets a new globalIndicatorCode
     *
     * Indicates the global direction.
     *
     * @param string $globalIndicatorCode
     * @return self
     */
    public function setGlobalIndicatorCode($globalIndicatorCode)
    {
        $this->globalIndicatorCode = $globalIndicatorCode;

        return $this;
    }

    /**
     * Gets as maximumPermittedMileage
     *
     * The maximum mileage (in miles) that can be travelled under this contract.
     *
     * @return integer
     */
    public function getMaximumPermittedMileage()
    {
        return $this->maximumPermittedMileage;
    }

    /**
     * Sets a new maximumPermittedMileage
     *
     * The maximum mileage (in miles) that can be travelled under this contract.
     *
     * @param integer $maximumPermittedMileage
     * @return self
     */
    public function setMaximumPermittedMileage($maximumPermittedMileage)
    {
        $this->maximumPermittedMileage = $maximumPermittedMileage;

        return $this;
    }

    /**
     * Gets as includeIndicator
     *
     * When true, the global direction can be used for travel. When false, the global
     * direction cannot be used for travel.
     *
     * @return boolean
     */
    public function getIncludeIndicator()
    {
        return $this->includeIndicator;
    }

    /**
     * Sets a new includeIndicator
     *
     * When true, the global direction can be used for travel. When false, the global
     * direction cannot be used for travel.
     *
     * @param boolean $includeIndicator
     * @return self
     */
    public function setIncludeIndicator($includeIndicator)
    {
        $this->includeIndicator = $includeIndicator;

        return $this;
    }


}

