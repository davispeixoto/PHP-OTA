<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRQ;

/**
 * Class representing ProcessingInfoAType
 */
class ProcessingInfoAType
{

    /**
     * Query type.Example: BaggageChargeNote: This is the requested baggage query type
     * that the receiving will fulfill.
     *
     * @property string $queryType
     */
    private $queryType = null;

    /**
     * Pricing/ filing currency.Example: USDOpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @property string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * Currency decimal places.Example: 2OpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * Gets as queryType
     *
     * Query type.Example: BaggageChargeNote: This is the requested baggage query type
     * that the receiving will fulfill.
     *
     * @return string
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * Sets a new queryType
     *
     * Query type.Example: BaggageChargeNote: This is the requested baggage query type
     * that the receiving will fulfill.
     *
     * @param string $queryType
     * @return self
     */
    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;

        return $this;
    }

    /**
     * Gets as pricingCurrency
     *
     * Pricing/ filing currency.Example: USDOpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
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
     * Pricing/ filing currency.Example: USDOpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
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
     * Currency decimal places.Example: 2OpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
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
     * Currency decimal places.Example: 2OpenTravel Best Practice: Currency Type
     * Designation: Unless otherwise noted, all currency code designations are three
     * alpha characters and WILL follow ISO 4217 prescribed format. Additionally, all
     * currency amounts SHOULD have decimal places (minor units) specified.
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

