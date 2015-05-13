<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS;

/**
 * Class representing CurrencyConversionsAType
 */
class CurrencyConversionsAType
{

    /**
     * Provides a rate conversion from one currency to another.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CurrencyConversionsAType\CurrencyConversionAType[]
     * $currencyConversion
     */
    private $currencyConversion = null;

    /**
     * Adds as currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CurrencyConversionsAType\CurrencyConversionAType
     * $currencyConversion
     */
    public function addToCurrencyConversion(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CurrencyConversionsAType\CurrencyConversionAType $currencyConversion
    ) {
        $this->currencyConversion[] = $currencyConversion;

        return $this;
    }

    /**
     * isset currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCurrencyConversion($index)
    {
        return isset($this->currencyConversion[$index]);
    }

    /**
     * unset currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCurrencyConversion($index)
    {
        unset($this->currencyConversion[$index]);
    }

    /**
     * Gets as currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CurrencyConversionsAType\CurrencyConversionAType[]
     */
    public function getCurrencyConversion()
    {
        return $this->currencyConversion;
    }

    /**
     * Sets a new currencyConversion
     *
     * Provides a rate conversion from one currency to another.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CurrencyConversionsAType\CurrencyConversionAType[]
     * $currencyConversion
     * @return self
     */
    public function setCurrencyConversion(array $currencyConversion)
    {
        $this->currencyConversion = $currencyConversion;

        return $this;
    }


}

