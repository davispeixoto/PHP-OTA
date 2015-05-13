<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRS;

/**
 * Class representing PriceStructureAType
 */
class PriceStructureAType
{

    /**
     * The country code where the ticket will be/ has been issued in ISO 3166
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $ticketingCountryCode
     */
    private $ticketingCountryCode = null;

    /**
     * The city or airport code where the ticket will be/ has been issued in IATA
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @property string $ticketingCityCode
     */
    private $ticketingCityCode = null;

    /**
     * The display currency in ISO 4217 encoding.CAD = Canadian Dollar | USD = United
     * States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $displayCurrency
     */
    private $displayCurrency = null;

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
     * The base neutral unit of construction amount.
     *
     * @property float $baseNUCAmount
     */
    private $baseNUCAmount = null;

    /**
     * Gets as ticketingCountryCode
     *
     * The country code where the ticket will be/ has been issued in ISO 3166
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @return string
     */
    public function getTicketingCountryCode()
    {
        return $this->ticketingCountryCode;
    }

    /**
     * Sets a new ticketingCountryCode
     *
     * The country code where the ticket will be/ has been issued in ISO 3166
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @param string $ticketingCountryCode
     * @return self
     */
    public function setTicketingCountryCode($ticketingCountryCode)
    {
        $this->ticketingCountryCode = $ticketingCountryCode;

        return $this;
    }

    /**
     * Gets as ticketingCityCode
     *
     * The city or airport code where the ticket will be/ has been issued in IATA
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @return string
     */
    public function getTicketingCityCode()
    {
        return $this->ticketingCityCode;
    }

    /**
     * Sets a new ticketingCityCode
     *
     * The city or airport code where the ticket will be/ has been issued in IATA
     * encoding.http://www.opentraveldevelopersnetwork.com/Supported_IATA_Standards.php
     *
     * @param string $ticketingCityCode
     * @return self
     */
    public function setTicketingCityCode($ticketingCityCode)
    {
        $this->ticketingCityCode = $ticketingCityCode;

        return $this;
    }

    /**
     * Gets as displayCurrency
     *
     * The display currency in ISO 4217 encoding.CAD = Canadian Dollar | USD = United
     * States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
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
     * The display currency in ISO 4217 encoding.CAD = Canadian Dollar | USD = United
     * States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
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

    /**
     * Gets as baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @return float
     */
    public function getBaseNUCAmount()
    {
        return $this->baseNUCAmount;
    }

    /**
     * Sets a new baseNUCAmount
     *
     * The base neutral unit of construction amount.
     *
     * @param float $baseNUCAmount
     * @return self
     */
    public function setBaseNUCAmount($baseNUCAmount)
    {
        $this->baseNUCAmount = $baseNUCAmount;

        return $this;
    }


}

