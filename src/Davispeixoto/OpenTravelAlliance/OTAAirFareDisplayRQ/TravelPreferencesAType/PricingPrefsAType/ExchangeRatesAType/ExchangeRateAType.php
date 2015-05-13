<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType;

/**
 * Class representing ExchangeRateAType
 */
class ExchangeRateAType
{

    /**
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $fromCurrency
     */
    private $fromCurrency = null;

    /**
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $toCurrency
     */
    private $toCurrency = null;

    /**
     * The rate used for conversion from the source currency to the target currency.
     *
     * @property float $rate
     */
    private $rate = null;

    /**
     * The date of the conversion rate.
     *
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * Gets as fromCurrency
     *
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getFromCurrency()
    {
        return $this->fromCurrency;
    }

    /**
     * Sets a new fromCurrency
     *
     * The source currency code for a conversion in ISO 4217
     * endoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $fromCurrency
     * @return self
     */
    public function setFromCurrency($fromCurrency)
    {
        $this->fromCurrency = $fromCurrency;

        return $this;
    }

    /**
     * Gets as toCurrency
     *
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getToCurrency()
    {
        return $this->toCurrency;
    }

    /**
     * Sets a new toCurrency
     *
     * The target currency for the conversion in ISO 4217
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $toCurrency
     * @return self
     */
    public function setToCurrency($toCurrency)
    {
        $this->toCurrency = $toCurrency;

        return $this;
    }

    /**
     * Gets as rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Sets a new rate
     *
     * The rate used for conversion from the source currency to the target currency.
     *
     * @param float $rate
     * @return self
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Gets as date
     *
     * The date of the conversion rate.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * The date of the conversion rate.
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;

        return $this;
    }


}

