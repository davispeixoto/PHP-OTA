<?php

namespace Davispeixoto\OpenTravelAlliance\FareType\ExchangeInfoAType;

/**
 * Class representing OriginalOriginDestinationAType
 */
class OriginalOriginDestinationAType
{

    /**
     * Origin city code.
     *
     * @property string $originCityCode
     */
    private $originCityCode = null;

    /**
     * Destination city code.
     *
     * @property string $destinationCityCode
     */
    private $destinationCityCode = null;

    /**
     * Gets as originCityCode
     *
     * Origin city code.
     *
     * @return string
     */
    public function getOriginCityCode()
    {
        return $this->originCityCode;
    }

    /**
     * Sets a new originCityCode
     *
     * Origin city code.
     *
     * @param string $originCityCode
     * @return self
     */
    public function setOriginCityCode($originCityCode)
    {
        $this->originCityCode = $originCityCode;

        return $this;
    }

    /**
     * Gets as destinationCityCode
     *
     * Destination city code.
     *
     * @return string
     */
    public function getDestinationCityCode()
    {
        return $this->destinationCityCode;
    }

    /**
     * Sets a new destinationCityCode
     *
     * Destination city code.
     *
     * @param string $destinationCityCode
     * @return self
     */
    public function setDestinationCityCode($destinationCityCode)
    {
        $this->destinationCityCode = $destinationCityCode;

        return $this;
    }


}

