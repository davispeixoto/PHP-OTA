<?php

namespace Davispeixoto\OpenTravelAlliance\EMDType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType
{

    /**
     * The origin airport city code.
     *
     * @property string $originCityCode
     */
    private $originCityCode = null;

    /**
     * Identifies the context of the origin city code such as IATA, ARC, or internal
     * code.
     *
     * @property string $originCodeContext
     */
    private $originCodeContext = null;

    /**
     * The destination airport city code.
     *
     * @property string $destinationCityCode
     */
    private $destinationCityCode = null;

    /**
     * Identifies the context of the destination city code such as IATA, ARC, or
     * internal code.
     *
     * @property string $destinationCodeContext
     */
    private $destinationCodeContext = null;

    /**
     * Gets as originCityCode
     *
     * The origin airport city code.
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
     * The origin airport city code.
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
     * Gets as originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal
     * code.
     *
     * @return string
     */
    public function getOriginCodeContext()
    {
        return $this->originCodeContext;
    }

    /**
     * Sets a new originCodeContext
     *
     * Identifies the context of the origin city code such as IATA, ARC, or internal
     * code.
     *
     * @param string $originCodeContext
     * @return self
     */
    public function setOriginCodeContext($originCodeContext)
    {
        $this->originCodeContext = $originCodeContext;

        return $this;
    }

    /**
     * Gets as destinationCityCode
     *
     * The destination airport city code.
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
     * The destination airport city code.
     *
     * @param string $destinationCityCode
     * @return self
     */
    public function setDestinationCityCode($destinationCityCode)
    {
        $this->destinationCityCode = $destinationCityCode;

        return $this;
    }

    /**
     * Gets as destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or
     * internal code.
     *
     * @return string
     */
    public function getDestinationCodeContext()
    {
        return $this->destinationCodeContext;
    }

    /**
     * Sets a new destinationCodeContext
     *
     * Identifies the context of the destination city code such as IATA, ARC, or
     * internal code.
     *
     * @param string $destinationCodeContext
     * @return self
     */
    public function setDestinationCodeContext($destinationCodeContext)
    {
        $this->destinationCodeContext = $destinationCodeContext;

        return $this;
    }


}

