<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CurrencyConversionsAType;

/**
 * Class representing CurrencyConversionAType
 */
class CurrencyConversionAType
{

    /**
     * The conversion factor to apply against the source currency to obtain the
     * requested currency.
     *
     * @property float $rateConversion
     */
    private $rateConversion = null;

    /**
     * The code specifying the source currency (use ISO 4217, three alpha code).
     *
     * @property string $sourceCurrencyCode
     */
    private $sourceCurrencyCode = null;

    /**
     * The code specifying the requested currency (use ISO 4217, three alpha code).
     *
     * @property string $requestedCurrencyCode
     */
    private $requestedCurrencyCode = null;

    /**
     * Indicates the number of decimal places for the requested currency. This is
     * equivalent to the ISO 4217 standard "minor unit".
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * The source of the rate conversion information.
     *
     * @property string $source
     */
    private $source = null;

    /**
     * Gets as rateConversion
     *
     * The conversion factor to apply against the source currency to obtain the
     * requested currency.
     *
     * @return float
     */
    public function getRateConversion()
    {
        return $this->rateConversion;
    }

    /**
     * Sets a new rateConversion
     *
     * The conversion factor to apply against the source currency to obtain the
     * requested currency.
     *
     * @param float $rateConversion
     * @return self
     */
    public function setRateConversion($rateConversion)
    {
        $this->rateConversion = $rateConversion;

        return $this;
    }

    /**
     * Gets as sourceCurrencyCode
     *
     * The code specifying the source currency (use ISO 4217, three alpha code).
     *
     * @return string
     */
    public function getSourceCurrencyCode()
    {
        return $this->sourceCurrencyCode;
    }

    /**
     * Sets a new sourceCurrencyCode
     *
     * The code specifying the source currency (use ISO 4217, three alpha code).
     *
     * @param string $sourceCurrencyCode
     * @return self
     */
    public function setSourceCurrencyCode($sourceCurrencyCode)
    {
        $this->sourceCurrencyCode = $sourceCurrencyCode;

        return $this;
    }

    /**
     * Gets as requestedCurrencyCode
     *
     * The code specifying the requested currency (use ISO 4217, three alpha code).
     *
     * @return string
     */
    public function getRequestedCurrencyCode()
    {
        return $this->requestedCurrencyCode;
    }

    /**
     * Sets a new requestedCurrencyCode
     *
     * The code specifying the requested currency (use ISO 4217, three alpha code).
     *
     * @param string $requestedCurrencyCode
     * @return self
     */
    public function setRequestedCurrencyCode($requestedCurrencyCode)
    {
        $this->requestedCurrencyCode = $requestedCurrencyCode;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * Indicates the number of decimal places for the requested currency. This is
     * equivalent to the ISO 4217 standard "minor unit".
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
     * Indicates the number of decimal places for the requested currency. This is
     * equivalent to the ISO 4217 standard "minor unit".
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
     * Gets as source
     *
     * The source of the rate conversion information.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * The source of the rate conversion information.
     *
     * @param string $source
     * @return self
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }


}

