<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirPriceRS;

/**
 * Class representing PricingOverviewAType
 */
class PricingOverviewAType
{

    /**
     * Specifies how the pricing was done.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Used for domestic or international sales differentiation.
     *
     * @property string $statisticalCode
     */
    private $statisticalCode = null;

    /**
     * The code of the validating airline carrier.
     *
     * @property string $validatingAirlineCode
     */
    private $validatingAirlineCode = null;

    /**
     * The date that pricing was done.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $priceQuoteDate
     */
    private $priceQuoteDate = null;

    /**
     * The first date this itinerary can be ticketed at this price.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $firstTicketDate
     */
    private $firstTicketDate = null;

    /**
     * The first date of departure for this itinerary.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate
     */
    private $departureDate = null;

    /**
     * Fare information that applies to all of the priced itineraries.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareType $fareInfo
     */
    private $fareInfo = null;

    /**
     * Free text information that applies to all the priced itineraries.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $notes
     */
    private $notes = null;

    /**
     * An account code that applies to all the priced itineraries.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\AccountAType[]
     * $account
     */
    private $account = null;

    /**
     * A collection of fares by PTC code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     * $pTCFareBreakdowns
     */
    private $pTCFareBreakdowns = null;

    /**
     * Pricing information for all the priced itineraries.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\PricingIndicatorAType[]
     * $pricingIndicator
     */
    private $pricingIndicator = null;

    /**
     * Gets as type
     *
     * Specifies how the pricing was done.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies how the pricing was done.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as statisticalCode
     *
     * Used for domestic or international sales differentiation.
     *
     * @return string
     */
    public function getStatisticalCode()
    {
        return $this->statisticalCode;
    }

    /**
     * Sets a new statisticalCode
     *
     * Used for domestic or international sales differentiation.
     *
     * @param string $statisticalCode
     * @return self
     */
    public function setStatisticalCode($statisticalCode)
    {
        $this->statisticalCode = $statisticalCode;

        return $this;
    }

    /**
     * Gets as validatingAirlineCode
     *
     * The code of the validating airline carrier.
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
     * The code of the validating airline carrier.
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
     * Gets as priceQuoteDate
     *
     * The date that pricing was done.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getPriceQuoteDate()
    {
        return $this->priceQuoteDate;
    }

    /**
     * Sets a new priceQuoteDate
     *
     * The date that pricing was done.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $priceQuoteDate
     * @return self
     */
    public function setPriceQuoteDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $priceQuoteDate)
    {
        $this->priceQuoteDate = $priceQuoteDate;

        return $this;
    }

    /**
     * Gets as firstTicketDate
     *
     * The first date this itinerary can be ticketed at this price.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getFirstTicketDate()
    {
        return $this->firstTicketDate;
    }

    /**
     * Sets a new firstTicketDate
     *
     * The first date this itinerary can be ticketed at this price.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $firstTicketDate
     * @return self
     */
    public function setFirstTicketDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $firstTicketDate)
    {
        $this->firstTicketDate = $firstTicketDate;

        return $this;
    }

    /**
     * Gets as departureDate
     *
     * The first date of departure for this itinerary.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * Sets a new departureDate
     *
     * The first date of departure for this itinerary.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate
     * @return self
     */
    public function setDepartureDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDate)
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * Gets as fareInfo
     *
     * Fare information that applies to all of the priced itineraries.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareType
     */
    public function getFareInfo()
    {
        return $this->fareInfo;
    }

    /**
     * Sets a new fareInfo
     *
     * Fare information that applies to all of the priced itineraries.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareType $fareInfo
     * @return self
     */
    public function setFareInfo(\Davispeixoto\OpenTravelAlliance\FareType $fareInfo)
    {
        $this->fareInfo = $fareInfo;

        return $this;
    }

    /**
     * Adds as notes
     *
     * Free text information that applies to all the priced itineraries.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $notes
     */
    public function addToNotes(\Davispeixoto\OpenTravelAlliance\FreeTextType $notes)
    {
        $this->notes[] = $notes;

        return $this;
    }

    /**
     * isset notes
     *
     * Free text information that applies to all the priced itineraries.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNotes($index)
    {
        return isset($this->notes[$index]);
    }

    /**
     * unset notes
     *
     * Free text information that applies to all the priced itineraries.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNotes($index)
    {
        unset($this->notes[$index]);
    }

    /**
     * Gets as notes
     *
     * Free text information that applies to all the priced itineraries.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Sets a new notes
     *
     * Free text information that applies to all the priced itineraries.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $notes
     * @return self
     */
    public function setNotes(array $notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Adds as account
     *
     * An account code that applies to all the priced itineraries.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\AccountAType
     * $account
     */
    public function addToAccount(
        \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\AccountAType $account
    ) {
        $this->account[] = $account;

        return $this;
    }

    /**
     * isset account
     *
     * An account code that applies to all the priced itineraries.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * An account code that applies to all the priced itineraries.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * An account code that applies to all the priced itineraries.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\AccountAType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * An account code that applies to all the priced itineraries.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\AccountAType[]
     * $account
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Adds as pTCFareBreakdown
     *
     * A collection of fares by PTC code.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType $pTCFareBreakdown
     */
    public function addToPTCFareBreakdowns(\Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType $pTCFareBreakdown)
    {
        $this->pTCFareBreakdowns[] = $pTCFareBreakdown;

        return $this;
    }

    /**
     * isset pTCFareBreakdowns
     *
     * A collection of fares by PTC code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPTCFareBreakdowns($index)
    {
        return isset($this->pTCFareBreakdowns[$index]);
    }

    /**
     * unset pTCFareBreakdowns
     *
     * A collection of fares by PTC code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPTCFareBreakdowns($index)
    {
        unset($this->pTCFareBreakdowns[$index]);
    }

    /**
     * Gets as pTCFareBreakdowns
     *
     * A collection of fares by PTC code.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     */
    public function getPTCFareBreakdowns()
    {
        return $this->pTCFareBreakdowns;
    }

    /**
     * Sets a new pTCFareBreakdowns
     *
     * A collection of fares by PTC code.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     * $pTCFareBreakdowns
     * @return self
     */
    public function setPTCFareBreakdowns(array $pTCFareBreakdowns)
    {
        $this->pTCFareBreakdowns = $pTCFareBreakdowns;

        return $this;
    }

    /**
     * Adds as pricingIndicator
     *
     * Pricing information for all the priced itineraries.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\PricingIndicatorAType
     * $pricingIndicator
     */
    public function addToPricingIndicator(
        \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\PricingIndicatorAType $pricingIndicator
    ) {
        $this->pricingIndicator[] = $pricingIndicator;

        return $this;
    }

    /**
     * isset pricingIndicator
     *
     * Pricing information for all the priced itineraries.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPricingIndicator($index)
    {
        return isset($this->pricingIndicator[$index]);
    }

    /**
     * unset pricingIndicator
     *
     * Pricing information for all the priced itineraries.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPricingIndicator($index)
    {
        unset($this->pricingIndicator[$index]);
    }

    /**
     * Gets as pricingIndicator
     *
     * Pricing information for all the priced itineraries.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\PricingIndicatorAType[]
     */
    public function getPricingIndicator()
    {
        return $this->pricingIndicator;
    }

    /**
     * Sets a new pricingIndicator
     *
     * Pricing information for all the priced itineraries.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirPriceRS\PricingOverviewAType\PricingIndicatorAType[]
     * $pricingIndicator
     * @return self
     */
    public function setPricingIndicator(array $pricingIndicator)
    {
        $this->pricingIndicator = $pricingIndicator;

        return $this;
    }


}

