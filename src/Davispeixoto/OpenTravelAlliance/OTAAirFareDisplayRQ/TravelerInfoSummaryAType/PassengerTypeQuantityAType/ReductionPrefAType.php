<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelerInfoSummaryAType\PassengerTypeQuantityAType;

/**
 * Class representing ReductionPrefAType
 */
class ReductionPrefAType
{

    /**
     * The desired reduction amount.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The desired reduction currency.
     *
     * @property string $currency
     */
    private $currency = null;

    /**
     * The desired reduction percentage.
     *
     * @property float $percent
     */
    private $percent = null;

    /**
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as amount
     *
     * The desired reduction amount.
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
     * The desired reduction amount.
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
     * Gets as currency
     *
     * The desired reduction currency.
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * The desired reduction currency.
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Gets as percent
     *
     * The desired reduction percentage.
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
     * The desired reduction percentage.
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

