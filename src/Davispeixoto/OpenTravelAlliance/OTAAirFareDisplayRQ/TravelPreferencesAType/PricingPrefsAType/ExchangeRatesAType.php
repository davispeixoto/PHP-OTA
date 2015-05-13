<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType;

/**
 * Class representing ExchangeRatesAType
 */
class ExchangeRatesAType
{

    /**
     * Specify a particular exchange rate to use in the response.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType[]
     * $exchangeRate
     */
    private $exchangeRate = null;

    /**
     * Adds as exchangeRate
     *
     * Specify a particular exchange rate to use in the response.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType
     * $exchangeRate
     */
    public function addToExchangeRate(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType $exchangeRate
    ) {
        $this->exchangeRate[] = $exchangeRate;

        return $this;
    }

    /**
     * isset exchangeRate
     *
     * Specify a particular exchange rate to use in the response.
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
     * Specify a particular exchange rate to use in the response.
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
     * Specify a particular exchange rate to use in the response.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType[]
     */
    public function getExchangeRate()
    {
        return $this->exchangeRate;
    }

    /**
     * Sets a new exchangeRate
     *
     * Specify a particular exchange rate to use in the response.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType[]
     * $exchangeRate
     * @return self
     */
    public function setExchangeRate(array $exchangeRate)
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }


}

