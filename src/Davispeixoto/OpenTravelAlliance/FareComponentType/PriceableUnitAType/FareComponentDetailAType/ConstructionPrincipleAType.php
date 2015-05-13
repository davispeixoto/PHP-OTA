<?php

namespace Davispeixoto\OpenTravelAlliance\FareComponentType\PriceableUnitAType\FareComponentDetailAType;

/**
 * Class representing ConstructionPrincipleAType
 */
class ConstructionPrincipleAType
{

    /**
     * A code identifying a rule used to formulate the fare.
     *
     * @property string $code
     */
    private $code = null;

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
     * An amount applicable to the fare rule based on the fare component construction
     * principle indicator.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * A percentage applicable to the fare rule based on the fare component
     * construction principle indicator.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * Gets as code
     *
     * A code identifying a rule used to formulate the fare.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A code identifying a rule used to formulate the fare.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

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

    /**
     * Gets as amount
     *
     * An amount applicable to the fare rule based on the fare component construction
     * principle indicator.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * An amount applicable to the fare rule based on the fare component construction
     * principle indicator.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as percent
     *
     * A percentage applicable to the fare rule based on the fare component
     * construction principle indicator.
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * A percentage applicable to the fare rule based on the fare component
     * construction principle indicator.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }


}

