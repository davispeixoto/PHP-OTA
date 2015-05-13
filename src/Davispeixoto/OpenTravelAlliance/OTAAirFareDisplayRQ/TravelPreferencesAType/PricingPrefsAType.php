<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType;

/**
 * Class representing PricingPrefsAType
 */
class PricingPrefsAType
{

    /**
     * When true, response should include taxes.
     *
     * @property boolean $includeTaxInd
     */
    private $includeTaxInd = null;

    /**
     * When true, response should include service fee information.
     *
     * @property boolean $includeServiceFeesInd
     */
    private $includeServiceFeesInd = null;

    /**
     * Specifies the currency for pricing that overrides that in point of sale. Use ISO
     * 4217, 3 alpha code.
     *
     * @property string $overrideCurrency
     */
    private $overrideCurrency = null;

    /**
     * Specifies the alternate currency for pricing other than that in point of sale or
     * the override currency. Use ISO 4217, 3 alpha code.
     *
     * @property string $alternateCurrency
     */
    private $alternateCurrency = null;

    /**
     * If true, the base amount should be returned in the response. If false, it does
     * not need to be returned.
     *
     * @property boolean $includeBaseAmtInd
     */
    private $includeBaseAmtInd = null;

    /**
     * The maximum rate that a traveler is willing to pay.
     *
     * @property float $maxRateAmount
     */
    private $maxRateAmount = null;

    /**
     * The maximum calculated rate that a traveler is willing to pay.
     *
     * @property float $maxCalculatedRateAmount
     */
    private $maxCalculatedRateAmount = null;

    /**
     * May be used to specify why an override currency is being included.
     *
     * @property string $currencyOption
     */
    private $currencyOption = null;

    /**
     * Container for exchange rate elements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType[]
     * $exchangeRates
     */
    private $exchangeRates = null;

    /**
     * Gets as includeTaxInd
     *
     * When true, response should include taxes.
     *
     * @return boolean
     */
    public function getIncludeTaxInd()
    {
        return $this->includeTaxInd;
    }

    /**
     * Sets a new includeTaxInd
     *
     * When true, response should include taxes.
     *
     * @param boolean $includeTaxInd
     * @return self
     */
    public function setIncludeTaxInd($includeTaxInd)
    {
        $this->includeTaxInd = $includeTaxInd;

        return $this;
    }

    /**
     * Gets as includeServiceFeesInd
     *
     * When true, response should include service fee information.
     *
     * @return boolean
     */
    public function getIncludeServiceFeesInd()
    {
        return $this->includeServiceFeesInd;
    }

    /**
     * Sets a new includeServiceFeesInd
     *
     * When true, response should include service fee information.
     *
     * @param boolean $includeServiceFeesInd
     * @return self
     */
    public function setIncludeServiceFeesInd($includeServiceFeesInd)
    {
        $this->includeServiceFeesInd = $includeServiceFeesInd;

        return $this;
    }

    /**
     * Gets as overrideCurrency
     *
     * Specifies the currency for pricing that overrides that in point of sale. Use ISO
     * 4217, 3 alpha code.
     *
     * @return string
     */
    public function getOverrideCurrency()
    {
        return $this->overrideCurrency;
    }

    /**
     * Sets a new overrideCurrency
     *
     * Specifies the currency for pricing that overrides that in point of sale. Use ISO
     * 4217, 3 alpha code.
     *
     * @param string $overrideCurrency
     * @return self
     */
    public function setOverrideCurrency($overrideCurrency)
    {
        $this->overrideCurrency = $overrideCurrency;

        return $this;
    }

    /**
     * Gets as alternateCurrency
     *
     * Specifies the alternate currency for pricing other than that in point of sale or
     * the override currency. Use ISO 4217, 3 alpha code.
     *
     * @return string
     */
    public function getAlternateCurrency()
    {
        return $this->alternateCurrency;
    }

    /**
     * Sets a new alternateCurrency
     *
     * Specifies the alternate currency for pricing other than that in point of sale or
     * the override currency. Use ISO 4217, 3 alpha code.
     *
     * @param string $alternateCurrency
     * @return self
     */
    public function setAlternateCurrency($alternateCurrency)
    {
        $this->alternateCurrency = $alternateCurrency;

        return $this;
    }

    /**
     * Gets as includeBaseAmtInd
     *
     * If true, the base amount should be returned in the response. If false, it does
     * not need to be returned.
     *
     * @return boolean
     */
    public function getIncludeBaseAmtInd()
    {
        return $this->includeBaseAmtInd;
    }

    /**
     * Sets a new includeBaseAmtInd
     *
     * If true, the base amount should be returned in the response. If false, it does
     * not need to be returned.
     *
     * @param boolean $includeBaseAmtInd
     * @return self
     */
    public function setIncludeBaseAmtInd($includeBaseAmtInd)
    {
        $this->includeBaseAmtInd = $includeBaseAmtInd;

        return $this;
    }

    /**
     * Gets as maxRateAmount
     *
     * The maximum rate that a traveler is willing to pay.
     *
     * @return float
     */
    public function getMaxRateAmount()
    {
        return $this->maxRateAmount;
    }

    /**
     * Sets a new maxRateAmount
     *
     * The maximum rate that a traveler is willing to pay.
     *
     * @param float $maxRateAmount
     * @return self
     */
    public function setMaxRateAmount($maxRateAmount)
    {
        $this->maxRateAmount = $maxRateAmount;

        return $this;
    }

    /**
     * Gets as maxCalculatedRateAmount
     *
     * The maximum calculated rate that a traveler is willing to pay.
     *
     * @return float
     */
    public function getMaxCalculatedRateAmount()
    {
        return $this->maxCalculatedRateAmount;
    }

    /**
     * Sets a new maxCalculatedRateAmount
     *
     * The maximum calculated rate that a traveler is willing to pay.
     *
     * @param float $maxCalculatedRateAmount
     * @return self
     */
    public function setMaxCalculatedRateAmount($maxCalculatedRateAmount)
    {
        $this->maxCalculatedRateAmount = $maxCalculatedRateAmount;

        return $this;
    }

    /**
     * Gets as currencyOption
     *
     * May be used to specify why an override currency is being included.
     *
     * @return string
     */
    public function getCurrencyOption()
    {
        return $this->currencyOption;
    }

    /**
     * Sets a new currencyOption
     *
     * May be used to specify why an override currency is being included.
     *
     * @param string $currencyOption
     * @return self
     */
    public function setCurrencyOption($currencyOption)
    {
        $this->currencyOption = $currencyOption;

        return $this;
    }

    /**
     * Adds as exchangeRate
     *
     * Container for exchange rate elements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType
     * $exchangeRate
     */
    public function addToExchangeRates(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType $exchangeRate
    ) {
        $this->exchangeRates[] = $exchangeRate;

        return $this;
    }

    /**
     * isset exchangeRates
     *
     * Container for exchange rate elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExchangeRates($index)
    {
        return isset($this->exchangeRates[$index]);
    }

    /**
     * unset exchangeRates
     *
     * Container for exchange rate elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExchangeRates($index)
    {
        unset($this->exchangeRates[$index]);
    }

    /**
     * Gets as exchangeRates
     *
     * Container for exchange rate elements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType[]
     */
    public function getExchangeRates()
    {
        return $this->exchangeRates;
    }

    /**
     * Sets a new exchangeRates
     *
     * Container for exchange rate elements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRQ\TravelPreferencesAType\PricingPrefsAType\ExchangeRatesAType\ExchangeRateAType[]
     * $exchangeRates
     * @return self
     */
    public function setExchangeRates(array $exchangeRates)
    {
        $this->exchangeRates = $exchangeRates;

        return $this;
    }


}

