<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ;

/**
 * Class representing RatesAType
 */
class RatesAType
{

    /**
     * The count of items being sent in this message.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * When true, only the rate qualifiers are being sent.
     *
     * @property boolean $rateQualifierOnlyInd
     */
    private $rateQualifierOnlyInd = null;

    /**
     * Provides either a rate qualifier or all information for a specific car rental
     * rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType[] $rate
     */
    private $rate = null;

    /**
     * Gets as quantity
     *
     * The count of items being sent in this message.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * The count of items being sent in this message.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as rateQualifierOnlyInd
     *
     * When true, only the rate qualifiers are being sent.
     *
     * @return boolean
     */
    public function getRateQualifierOnlyInd()
    {
        return $this->rateQualifierOnlyInd;
    }

    /**
     * Sets a new rateQualifierOnlyInd
     *
     * When true, only the rate qualifiers are being sent.
     *
     * @param boolean $rateQualifierOnlyInd
     * @return self
     */
    public function setRateQualifierOnlyInd($rateQualifierOnlyInd)
    {
        $this->rateQualifierOnlyInd = $rateQualifierOnlyInd;

        return $this;
    }

    /**
     * Adds as rate
     *
     * Provides either a rate qualifier or all information for a specific car rental
     * rate.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType
     * $rate
     */
    public function addToRate(\Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType $rate)
    {
        $this->rate[] = $rate;

        return $this;
    }

    /**
     * isset rate
     *
     * Provides either a rate qualifier or all information for a specific car rental
     * rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRate($index)
    {
        return isset($this->rate[$index]);
    }

    /**
     * unset rate
     *
     * Provides either a rate qualifier or all information for a specific car rental
     * rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRate($index)
    {
        unset($this->rate[$index]);
    }

    /**
     * Gets as rate
     *
     * Provides either a rate qualifier or all information for a specific car rental
     * rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType[]
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * Provides either a rate qualifier or all information for a specific car rental
     * rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OTAVehRateNotifRQ\RatesAType\RateAType[]
     * $rate
     * @return self
     */
    public function setRate(array $rate)
    {
        $this->rate = $rate;

        return $this;
    }


}

