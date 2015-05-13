<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PriceRequestInformationType
 *
 * Identify pricing source, if negotiated fares are requested and if it is a
 * reprice request.
 * XSD Type: PriceRequestInformationType
 */
class PriceRequestInformationType
{

    /**
     * Used to specify the type of fare required. Refer to OpenTravel Code List Fare
     * Qualifier (FAQ) or use airline industry standard fare codes.
     *
     * @property string $fareQualifier
     */
    private $fareQualifier = null;

    /**
     * Indicator to identify whether or not the price is applicable only to private
     * fares.
     *
     * @property boolean $negotiatedFaresOnly
     */
    private $negotiatedFaresOnly = null;

    /**
     * Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * It can be used to indicate whether the fare is public or private.
     *
     * @property string $pricingSource
     */
    private $pricingSource = null;

    /**
     * If true repricing is requested.
     *
     * @property boolean $reprice
     */
    private $reprice = null;

    /**
     * The code for the validating airline.
     *
     * @property string $validatingAirlineCode
     */
    private $validatingAirlineCode = null;

    /**
     * The date on which the customer requests the booking to be ticketed.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $requestedTicketingDate
     */
    private $requestedTicketingDate = null;

    /**
     * The country in which the booking will be made (sold).
     *
     * @property string $saleCountry
     */
    private $saleCountry = null;

    /**
     * Identifies the type of cabin (i.e., first, business, economy) requested.
     *
     * @property string $cabinType
     */
    private $cabinType = null;

    /**
     * The ISO country code where the ticket will be issued.
     *
     * @property string $ticketingCountry
     */
    private $ticketingCountry = null;

    /**
     * The airline which should be used to override the system selected pricing
     * airline.
     *
     * @property string $overrideAirlineCode
     */
    private $overrideAirlineCode = null;

    /**
     * Contains negotiated fare code information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\NegotiatedFareCodeAType[]
     * $negotiatedFareCode
     */
    private $negotiatedFareCode = null;

    /**
     * Provides information concerning a flight segment that can be rebooked for a
     * lower fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\RebookOptionAType[]
     * $rebookOption
     */
    private $rebookOption = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as fareQualifier
     *
     * Used to specify the type of fare required. Refer to OpenTravel Code List Fare
     * Qualifier (FAQ) or use airline industry standard fare codes.
     *
     * @return string
     */
    public function getFareQualifier()
    {
        return $this->fareQualifier;
    }

    /**
     * Sets a new fareQualifier
     *
     * Used to specify the type of fare required. Refer to OpenTravel Code List Fare
     * Qualifier (FAQ) or use airline industry standard fare codes.
     *
     * @param string $fareQualifier
     * @return self
     */
    public function setFareQualifier($fareQualifier)
    {
        $this->fareQualifier = $fareQualifier;

        return $this;
    }

    /**
     * Gets as negotiatedFaresOnly
     *
     * Indicator to identify whether or not the price is applicable only to private
     * fares.
     *
     * @return boolean
     */
    public function getNegotiatedFaresOnly()
    {
        return $this->negotiatedFaresOnly;
    }

    /**
     * Sets a new negotiatedFaresOnly
     *
     * Indicator to identify whether or not the price is applicable only to private
     * fares.
     *
     * @param boolean $negotiatedFaresOnly
     * @return self
     */
    public function setNegotiatedFaresOnly($negotiatedFaresOnly)
    {
        $this->negotiatedFaresOnly = $negotiatedFaresOnly;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * Type of funds preferred for reviewing monetary values, in ISO 4217 codes.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as pricingSource
     *
     * It can be used to indicate whether the fare is public or private.
     *
     * @return string
     */
    public function getPricingSource()
    {
        return $this->pricingSource;
    }

    /**
     * Sets a new pricingSource
     *
     * It can be used to indicate whether the fare is public or private.
     *
     * @param string $pricingSource
     * @return self
     */
    public function setPricingSource($pricingSource)
    {
        $this->pricingSource = $pricingSource;

        return $this;
    }

    /**
     * Gets as reprice
     *
     * If true repricing is requested.
     *
     * @return boolean
     */
    public function getReprice()
    {
        return $this->reprice;
    }

    /**
     * Sets a new reprice
     *
     * If true repricing is requested.
     *
     * @param boolean $reprice
     * @return self
     */
    public function setReprice($reprice)
    {
        $this->reprice = $reprice;

        return $this;
    }

    /**
     * Gets as validatingAirlineCode
     *
     * The code for the validating airline.
     *
     * @return string
     */
    public function getValidatingAirlineCode()
    {
        return $this->validatingAirlineCode;
    }

    /**
     * Sets a new validatingAirlineCode
     *
     * The code for the validating airline.
     *
     * @param string $validatingAirlineCode
     * @return self
     */
    public function setValidatingAirlineCode($validatingAirlineCode)
    {
        $this->validatingAirlineCode = $validatingAirlineCode;

        return $this;
    }

    /**
     * Gets as requestedTicketingDate
     *
     * The date on which the customer requests the booking to be ticketed.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getRequestedTicketingDate()
    {
        return $this->requestedTicketingDate;
    }

    /**
     * Sets a new requestedTicketingDate
     *
     * The date on which the customer requests the booking to be ticketed.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $requestedTicketingDate
     * @return self
     */
    public function setRequestedTicketingDate(
        \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $requestedTicketingDate
    ) {
        $this->requestedTicketingDate = $requestedTicketingDate;

        return $this;
    }

    /**
     * Gets as saleCountry
     *
     * The country in which the booking will be made (sold).
     *
     * @return string
     */
    public function getSaleCountry()
    {
        return $this->saleCountry;
    }

    /**
     * Sets a new saleCountry
     *
     * The country in which the booking will be made (sold).
     *
     * @param string $saleCountry
     * @return self
     */
    public function setSaleCountry($saleCountry)
    {
        $this->saleCountry = $saleCountry;

        return $this;
    }

    /**
     * Gets as cabinType
     *
     * Identifies the type of cabin (i.e., first, business, economy) requested.
     *
     * @return string
     */
    public function getCabinType()
    {
        return $this->cabinType;
    }

    /**
     * Sets a new cabinType
     *
     * Identifies the type of cabin (i.e., first, business, economy) requested.
     *
     * @param string $cabinType
     * @return self
     */
    public function setCabinType($cabinType)
    {
        $this->cabinType = $cabinType;

        return $this;
    }

    /**
     * Gets as ticketingCountry
     *
     * The ISO country code where the ticket will be issued.
     *
     * @return string
     */
    public function getTicketingCountry()
    {
        return $this->ticketingCountry;
    }

    /**
     * Sets a new ticketingCountry
     *
     * The ISO country code where the ticket will be issued.
     *
     * @param string $ticketingCountry
     * @return self
     */
    public function setTicketingCountry($ticketingCountry)
    {
        $this->ticketingCountry = $ticketingCountry;

        return $this;
    }

    /**
     * Gets as overrideAirlineCode
     *
     * The airline which should be used to override the system selected pricing
     * airline.
     *
     * @return string
     */
    public function getOverrideAirlineCode()
    {
        return $this->overrideAirlineCode;
    }

    /**
     * Sets a new overrideAirlineCode
     *
     * The airline which should be used to override the system selected pricing
     * airline.
     *
     * @param string $overrideAirlineCode
     * @return self
     */
    public function setOverrideAirlineCode($overrideAirlineCode)
    {
        $this->overrideAirlineCode = $overrideAirlineCode;

        return $this;
    }

    /**
     * Adds as negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\NegotiatedFareCodeAType
     * $negotiatedFareCode
     */
    public function addToNegotiatedFareCode(
        \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\NegotiatedFareCodeAType $negotiatedFareCode
    ) {
        $this->negotiatedFareCode[] = $negotiatedFareCode;

        return $this;
    }

    /**
     * isset negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNegotiatedFareCode($index)
    {
        return isset($this->negotiatedFareCode[$index]);
    }

    /**
     * unset negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNegotiatedFareCode($index)
    {
        unset($this->negotiatedFareCode[$index]);
    }

    /**
     * Gets as negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\NegotiatedFareCodeAType[]
     */
    public function getNegotiatedFareCode()
    {
        return $this->negotiatedFareCode;
    }

    /**
     * Sets a new negotiatedFareCode
     *
     * Contains negotiated fare code information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\NegotiatedFareCodeAType[]
     * $negotiatedFareCode
     * @return self
     */
    public function setNegotiatedFareCode(array $negotiatedFareCode)
    {
        $this->negotiatedFareCode = $negotiatedFareCode;

        return $this;
    }

    /**
     * Adds as rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a
     * lower fare.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\RebookOptionAType
     * $rebookOption
     */
    public function addToRebookOption(
        \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\RebookOptionAType $rebookOption
    ) {
        $this->rebookOption[] = $rebookOption;

        return $this;
    }

    /**
     * isset rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a
     * lower fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRebookOption($index)
    {
        return isset($this->rebookOption[$index]);
    }

    /**
     * unset rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a
     * lower fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRebookOption($index)
    {
        unset($this->rebookOption[$index]);
    }

    /**
     * Gets as rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a
     * lower fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\RebookOptionAType[]
     */
    public function getRebookOption()
    {
        return $this->rebookOption;
    }

    /**
     * Sets a new rebookOption
     *
     * Provides information concerning a flight segment that can be rebooked for a
     * lower fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType\RebookOptionAType[]
     * $rebookOption
     * @return self
     */
    public function setRebookOption(array $rebookOption)
    {
        $this->rebookOption = $rebookOption;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

