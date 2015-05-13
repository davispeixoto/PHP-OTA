<?php

namespace Davispeixoto\OpenTravelAlliance\HotelSearchCriterionType;

/**
 * Class representing RateRangeAType
 */
class RateRangeAType
{

    /**
     * Used to associate a rate range with a room stay candidate.
     *
     * @property string $roomStayCandidateRPH
     */
    private $roomStayCandidateRPH = null;

    /**
     * A decimal value that indicates the minimum monetary value to be considered in a
     * request for an available product.
     *
     * @property float $minRate
     */
    private $minRate = null;

    /**
     * A decimal value that indicates the maximum monetary value to be considered in a
     * request for an available product.
     *
     * @property float $maxRate
     */
    private $maxRate = null;

    /**
     * The rate amount used in place of MinRate and MaxRate when a specific rate is
     * being requested.
     *
     * @property float $fixedRate
     */
    private $fixedRate = null;

    /**
     * Used to specify the period of time to which the rates apply.
     *
     * @property string $rateTimeUnit
     */
    private $rateTimeUnit = null;

    /**
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * This supports returning a type of rate (minimum, maximum, etc.) as an
     * alternative to returning a specific rate. Refer to OpenTravel Code List Rate
     * Mode (RMO).
     *
     * @property string $rateMode
     */
    private $rateMode = null;

    /**
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @property integer $maxResponses
     */
    private $maxResponses = null;

    /**
     * Gets as roomStayCandidateRPH
     *
     * Used to associate a rate range with a room stay candidate.
     *
     * @return string
     */
    public function getRoomStayCandidateRPH()
    {
        return $this->roomStayCandidateRPH;
    }

    /**
     * Sets a new roomStayCandidateRPH
     *
     * Used to associate a rate range with a room stay candidate.
     *
     * @param string $roomStayCandidateRPH
     * @return self
     */
    public function setRoomStayCandidateRPH($roomStayCandidateRPH)
    {
        $this->roomStayCandidateRPH = $roomStayCandidateRPH;

        return $this;
    }

    /**
     * Gets as minRate
     *
     * A decimal value that indicates the minimum monetary value to be considered in a
     * request for an available product.
     *
     * @return float
     */
    public function getMinRate()
    {
        return $this->minRate;
    }

    /**
     * Sets a new minRate
     *
     * A decimal value that indicates the minimum monetary value to be considered in a
     * request for an available product.
     *
     * @param float $minRate
     * @return self
     */
    public function setMinRate($minRate)
    {
        $this->minRate = $minRate;

        return $this;
    }

    /**
     * Gets as maxRate
     *
     * A decimal value that indicates the maximum monetary value to be considered in a
     * request for an available product.
     *
     * @return float
     */
    public function getMaxRate()
    {
        return $this->maxRate;
    }

    /**
     * Sets a new maxRate
     *
     * A decimal value that indicates the maximum monetary value to be considered in a
     * request for an available product.
     *
     * @param float $maxRate
     * @return self
     */
    public function setMaxRate($maxRate)
    {
        $this->maxRate = $maxRate;

        return $this;
    }

    /**
     * Gets as fixedRate
     *
     * The rate amount used in place of MinRate and MaxRate when a specific rate is
     * being requested.
     *
     * @return float
     */
    public function getFixedRate()
    {
        return $this->fixedRate;
    }

    /**
     * Sets a new fixedRate
     *
     * The rate amount used in place of MinRate and MaxRate when a specific rate is
     * being requested.
     *
     * @param float $fixedRate
     * @return self
     */
    public function setFixedRate($fixedRate)
    {
        $this->fixedRate = $fixedRate;

        return $this;
    }

    /**
     * Gets as rateTimeUnit
     *
     * Used to specify the period of time to which the rates apply.
     *
     * @return string
     */
    public function getRateTimeUnit()
    {
        return $this->rateTimeUnit;
    }

    /**
     * Sets a new rateTimeUnit
     *
     * Used to specify the period of time to which the rates apply.
     *
     * @param string $rateTimeUnit
     * @return self
     */
    public function setRateTimeUnit($rateTimeUnit)
    {
        $this->rateTimeUnit = $rateTimeUnit;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * An ISO 4217 (3) alpha character code that specifies a monetary unit.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @return integer
     */
    public function getDecimalPlaces()
    {
        return $this->decimalPlaces;
    }

    /**
     * Sets a new decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a
     * particular currency.Implementer: The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @param integer $decimalPlaces
     * @return self
     */
    public function setDecimalPlaces($decimalPlaces)
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Gets as rateMode
     *
     * This supports returning a type of rate (minimum, maximum, etc.) as an
     * alternative to returning a specific rate. Refer to OpenTravel Code List Rate
     * Mode (RMO).
     *
     * @return string
     */
    public function getRateMode()
    {
        return $this->rateMode;
    }

    /**
     * Sets a new rateMode
     *
     * This supports returning a type of rate (minimum, maximum, etc.) as an
     * alternative to returning a specific rate. Refer to OpenTravel Code List Rate
     * Mode (RMO).
     *
     * @param string $rateMode
     * @return self
     */
    public function setRateMode($rateMode)
    {
        $this->rateMode = $rateMode;

        return $this;
    }

    /**
     * Gets as maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @return integer
     */
    public function getMaxResponses()
    {
        return $this->maxResponses;
    }

    /**
     * Sets a new maxResponses
     *
     * A positive integer value that indicates the maximum number of responses desired
     * in the return.
     *
     * @param integer $maxResponses
     * @return self
     */
    public function setMaxResponses($maxResponses)
    {
        $this->maxResponses = $maxResponses;

        return $this;
    }


}

