<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS;

/**
 * Class representing ExchangeRatesAType
 */
class ExchangeRatesAType
{

    /**
     * Indicates a rate of exchange used in fare currency conversions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\ExchangeRatesAType\ExchangeRateAType[]
     * $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Adds as exchangeRate
     *
     * Indicates a rate of exchange used in fare currency conversions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\ExchangeRatesAType\ExchangeRateAType
     * $exchangeRate
     */
    public function addToExchangeRate(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\ExchangeRatesAType\ExchangeRateAType $exchangeRate
    ) {
        $this->exchangeRate[] = $exchangeRate;

        return $this;
    }

    /**
     * isset exchangeRate
     *
     * Indicates a rate of exchange used in fare currency conversions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExchangeRate($index)
    {
        return isset($this->exchangeRate[$index]);
    }

    /**
     * unset exchangeRate
     *
     * Indicates a rate of exchange used in fare currency conversions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExchangeRate($index)
    {
        unset($this->exchangeRate[$index]);
    }

    /**
     * Gets as exchangeRate
     *
     * Indicates a rate of exchange used in fare currency conversions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\ExchangeRatesAType\ExchangeRateAType[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * Indicates a rate of exchange used in fare currency conversions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\ExchangeRatesAType\ExchangeRateAType[]
     * $exchangeRate
     * @return self
     */
    public function setExchangeRate(array $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }


}

