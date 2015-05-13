<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS;

/**
 * Class representing ProcessingInfoAType
 */
class ProcessingInfoAType
{

    /**
     * If true, the baggage charges may be subject to air supplier merchandising
     * offers.
     *
     * @property boolean $offerInd
     */
    private $offerInd = null;

    /**
     * If true, the baggage fees may be paid for with miles.
     *
     * @property boolean $payWithMilesInd
     */
    private $payWithMilesInd = null;

    /**
     * The baggage information contained in the response.
     *
     * @property string $responseType
     */
    private $responseType = null;

    /**
     * The pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD =
     * United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * The number of decimal places for the display and pricing currency(s).USD 8500
     * with "2" Decimal Places represents
     * $85.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htmThis
     * is equivalent to the ISO 4217 standard "minor unit" and is typically used when
     * the amount provided includes the minor unit of currency without a decimal point.
     *
     * @property integer $decimalPlaces
     */
    private $decimalPlaces = null;

    /**
     * If true, information contained in this response was subject to US Department of
     * Transportation regulations.
     *
     * @property boolean $uSDOTInd
     */
    private $uSDOTInd = null;

    /**
     * Gets as offerInd
     *
     * If true, the baggage charges may be subject to air supplier merchandising
     * offers.
     *
     * @return boolean
     */
    public function getOfferInd()
    {
        return $this->offerInd;
    }

    /**
     * Sets a new offerInd
     *
     * If true, the baggage charges may be subject to air supplier merchandising
     * offers.
     *
     * @param boolean $offerInd
     * @return self
     */
    public function setOfferInd($offerInd)
    {
        $this->offerInd = $offerInd;

        return $this;
    }

    /**
     * Gets as payWithMilesInd
     *
     * If true, the baggage fees may be paid for with miles.
     *
     * @return boolean
     */
    public function getPayWithMilesInd()
    {
        return $this->payWithMilesInd;
    }

    /**
     * Sets a new payWithMilesInd
     *
     * If true, the baggage fees may be paid for with miles.
     *
     * @param boolean $payWithMilesInd
     * @return self
     */
    public function setPayWithMilesInd($payWithMilesInd)
    {
        $this->payWithMilesInd = $payWithMilesInd;

        return $this;
    }

    /**
     * Gets as responseType
     *
     * The baggage information contained in the response.
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Sets a new responseType
     *
     * The baggage information contained in the response.
     *
     * @param string $responseType
     * @return self
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Gets as pricingCurrency
     *
     * The pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD =
     * United States Dollar | EUR =
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
     * The pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar | USD =
     * United States Dollar | EUR =
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
     * The number of decimal places for the display and pricing currency(s).USD 8500
     * with "2" Decimal Places represents
     * $85.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htmThis
     * is equivalent to the ISO 4217 standard "minor unit" and is typically used when
     * the amount provided includes the minor unit of currency without a decimal point.
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
     * The number of decimal places for the display and pricing currency(s).USD 8500
     * with "2" Decimal Places represents
     * $85.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/currency_codes/currency_codes_list-1.htmThis
     * is equivalent to the ISO 4217 standard "minor unit" and is typically used when
     * the amount provided includes the minor unit of currency without a decimal point.
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
     * Gets as uSDOTInd
     *
     * If true, information contained in this response was subject to US Department of
     * Transportation regulations.
     *
     * @return boolean
     */
    public function getUSDOTInd()
    {
        return $this->uSDOTInd;
    }

    /**
     * Sets a new uSDOTInd
     *
     * If true, information contained in this response was subject to US Department of
     * Transportation regulations.
     *
     * @param boolean $uSDOTInd
     * @return self
     */
    public function setUSDOTInd($uSDOTInd)
    {
        $this->uSDOTInd = $uSDOTInd;

        return $this;
    }


}

