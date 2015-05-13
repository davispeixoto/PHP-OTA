<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ;

/**
 * Class representing PriceStructureAType
 */
class PriceStructureAType
{

    /**
     * If true, redemption point quantities should NOT be included in the results.
     *
     * @property boolean $excludePointsInd
     */
    private $excludePointsInd = null;

    /**
     * The country code where the ticket will be/ has been issued in ISO 3166
     * encoding.ISO 3166 Alpha-3 Country Codes:
     * http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3If this code is entered, it
     * overrides the TicketingCityCode.
     *
     * @property string $ticketingCountryCode
     */
    private $ticketingCountryCode = null;

    /**
     * The city or airport code where the ticket will be/ has been issued in IATA
     * encoding.If using IATA airport codes: http://www.airport-technology.com/codes/
     *
     * @property string $ticketingCityCode
     */
    private $ticketingCityCode = null;

    /**
     * The requested display currency in ISO 4217 encoding.(Reference):
     * http://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php(More
     * Info):
     * http://www.opentraveldevelopersnetwork.com/2012A_SchemaDoc/DisplayCurrency
     *
     * @property string $displayCurrency
     */
    private $displayCurrency = null;

    /**
     * The requested pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar
     * | USD = United States Dollar | EUR =
     * Eurohttp://www.opentraveldevelopersnetwork.com/Supported_ISO_Standards.php
     *
     * @property string $pricingCurrency
     */
    private $pricingCurrency = null;

    /**
     * Gets as excludePointsInd
     *
     * If true, redemption point quantities should NOT be included in the results.
     *
     * @return boolean
     */
    public function getExcludePointsInd()
    {
        return $this->excludePointsInd;
    }

    /**
     * Sets a new excludePointsInd
     *
     * If true, redemption point quantities should NOT be included in the results.
     *
     * @param boolean $excludePointsInd
     * @return self
     */
    public function setExcludePointsInd($excludePointsInd)
    {
        $this->excludePointsInd = $excludePointsInd;

        return $this;
    }

    /**
     * Gets as ticketingCountryCode
     *
     * The country code where the ticket will be/ has been issued in ISO 3166
     * encoding.ISO 3166 Alpha-3 Country Codes:
     * http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3If this code is entered, it
     * overrides the TicketingCityCode.
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
     * encoding.ISO 3166 Alpha-3 Country Codes:
     * http://en.wikipedia.org/wiki/ISO_3166-1_alpha-3If this code is entered, it
     * overrides the TicketingCityCode.
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
     * encoding.If using IATA airport codes: http://www.airport-technology.com/codes/
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
     * encoding.If using IATA airport codes: http://www.airport-technology.com/codes/
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
     * The requested display currency in ISO 4217 encoding.(Reference):
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
     * The requested display currency in ISO 4217 encoding.(Reference):
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
     * The requested pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar
     * | USD = United States Dollar | EUR =
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
     * The requested pricing/filing currency in ISO 4217 encoding.CAD = Canadian Dollar
     * | USD = United States Dollar | EUR =
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


}

