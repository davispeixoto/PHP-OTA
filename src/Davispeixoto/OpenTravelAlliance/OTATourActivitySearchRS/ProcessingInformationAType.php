<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS;

/**
 * Class representing ProcessingInformationAType
 */
class ProcessingInformationAType
{

    /**
     * The Tour/Activity search response message may return a value in this element if
     * there is additional data available that is not contained in the response
     * message. The text value should be echoed in this request to indicate where to
     * begin the next block of data.
     *
     * @property string $moreDataEchoToken
     */
    private $moreDataEchoToken = null;

    /**
     * Identification of the language used for any descriptive information.
     *
     * @property string $languageCode
     */
    private $languageCode = null;

    /**
     * The display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @property string $displayCurrency
     */
    private $displayCurrency = null;

    /**
     * The pricing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD = United
     * States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * The ISO 4217 standard "minor unit" for the number of decimal places for a the
     * display and pricing currency.The ISO 4217 standard "minor unit" is typically
     * used when the amount provided includes the minor unit of currency without a
     * decimal point (e.g., USD 8500 needs DecimalPlaces="2" to represent $85).
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Gets as moreDataEchoToken
     *
     * The Tour/Activity search response message may return a value in this element if
     * there is additional data available that is not contained in the response
     * message. The text value should be echoed in this request to indicate where to
     * begin the next block of data.
     *
     * @return string
     */
    public function getMoreDataEchoToken()
    {
        return $this->moreDataEchoToken;
    }

    /**
     * Sets a new moreDataEchoToken
     *
     * The Tour/Activity search response message may return a value in this element if
     * there is additional data available that is not contained in the response
     * message. The text value should be echoed in this request to indicate where to
     * begin the next block of data.
     *
     * @param string $moreDataEchoToken
     * @return self
     */
    public function setMoreDataEchoToken($moreDataEchoToken)
    {
        $this->moreDataEchoToken = $moreDataEchoToken;

        return $this;
    }

    /**
     * Gets as languageCode
     *
     * Identification of the language used for any descriptive information.
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Sets a new languageCode
     *
     * Identification of the language used for any descriptive information.
     *
     * @param string $languageCode
     * @return self
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;

        return $this;
    }

    /**
     * Gets as displayCurrency
     *
     * The display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @return string
     */
    public function getDisplayCurrency()
    {
        return $this->displayCurrency;
    }

    /**
     * Sets a new displayCurrency
     *
     * The display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @param string $displayCurrency
     * @return self
     */
    public function setDisplayCurrency($displayCurrency)
    {
        $this->displayCurrency = $displayCurrency;

        return $this;
    }

    /**
     * Gets as pricingCurrency
     *
     * The pricing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD = United
     * States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getPricingCurrency()
    {
        return $this->pricingCurrency;
    }

    /**
     * Sets a new pricingCurrency
     *
     * The pricing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD = United
     * States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $pricingCurrency
     * @return self
     */
    public function setPricingCurrency($pricingCurrency)
    {
        $this->pricingCurrency = $pricingCurrency;

        return $this;
    }

    /**
     * Gets as decimalPlaces
     *
     * The ISO 4217 standard "minor unit" for the number of decimal places for a the
     * display and pricing currency.The ISO 4217 standard "minor unit" is typically
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
     * The ISO 4217 standard "minor unit" for the number of decimal places for a the
     * display and pricing currency.The ISO 4217 standard "minor unit" is typically
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


}
