<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirItineraryPricingInfoType
 *
 * Pricing Information for an Air Itinerary.
 * XSD Type: AirItineraryPricingInfoType
 */
class AirItineraryPricingInfoType
{

    /**
     * Used to indicate whether the pricing is public or private
     *
     * @property string $pricingSource
     */
    private $pricingSource = null;

    /**
     * The code of the validating airline.
     *
     * @property string $validatingAirlineCode
     */
    private $validatingAirlineCode = null;

    /**
     * A text field used to provide a special ID code that is associated with the
     * priced itinerary that may be used in the reservation request in order to obtain
     * the quoted rate.
     *
     * @property string $quoteID
     */
    private $quoteID = null;

    /**
     * Total price of the itinerary.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\ItinTotalFareAType[]
     * $itinTotalFare
     */
    private $itinTotalFare = null;

    /**
     * This is a collection of PTC Fare Breakdowns.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PTCFareBreakdownType[]
     * $pTCFareBreakdowns
     */
    private $pTCFareBreakdowns = null;

    /**
     * This is a collection of FareInfo.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     * $fareInfos
     */
    private $fareInfos = null;

    /**
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType
     * $priceRequestInformation
     */
    private $priceRequestInformation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as pricingSource
     *
     * Used to indicate whether the pricing is public or private
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
     * Used to indicate whether the pricing is public or private
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
     * Gets as validatingAirlineCode
     *
     * The code of the validating airline.
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
     * The code of the validating airline.
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
     * Gets as quoteID
     *
     * A text field used to provide a special ID code that is associated with the
     * priced itinerary that may be used in the reservation request in order to obtain
     * the quoted rate.
     *
     * @return string
     */
    public function getQuoteID()
    {
        return $this->quoteID;
    }

    /**
     * Sets a new quoteID
     *
     * A text field used to provide a special ID code that is associated with the
     * priced itinerary that may be used in the reservation request in order to obtain
     * the quoted rate.
     *
     * @param string $quoteID
     * @return self
     */
    public function setQuoteID($quoteID)
    {
        $this->quoteID = $quoteID;

        return $this;
    }

    /**
     * Adds as itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\ItinTotalFareAType
     * $itinTotalFare
     */
    public function addToItinTotalFare(
        \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\ItinTotalFareAType $itinTotalFare
    ) {
        $this->itinTotalFare[] = $itinTotalFare;

        return $this;
    }

    /**
     * isset itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItinTotalFare($index)
    {
        return isset($this->itinTotalFare[$index]);
    }

    /**
     * unset itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItinTotalFare($index)
    {
        unset($this->itinTotalFare[$index]);
    }

    /**
     * Gets as itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\ItinTotalFareAType[]
     */
    public function getItinTotalFare()
    {
        return $this->itinTotalFare;
    }

    /**
     * Sets a new itinTotalFare
     *
     * Total price of the itinerary.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\ItinTotalFareAType[]
     * $itinTotalFare
     * @return self
     */
    public function setItinTotalFare(array $itinTotalFare)
    {
        $this->itinTotalFare = $itinTotalFare;

        return $this;
    }

    /**
     * Adds as pTCFareBreakdown
     *
     * This is a collection of PTC Fare Breakdowns.
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
     * This is a collection of PTC Fare Breakdowns.
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
     * This is a collection of PTC Fare Breakdowns.
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
     * This is a collection of PTC Fare Breakdowns.
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
     * This is a collection of PTC Fare Breakdowns.
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
     * Adds as fareInfo
     *
     * This is a collection of FareInfo.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType
     * $fareInfo
     */
    public function addToFareInfos(
        \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType $fareInfo
    ) {
        $this->fareInfos[] = $fareInfo;

        return $this;
    }

    /**
     * isset fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareInfos($index)
    {
        return isset($this->fareInfos[$index]);
    }

    /**
     * unset fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareInfos($index)
    {
        unset($this->fareInfos[$index]);
    }

    /**
     * Gets as fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     */
    public function getFareInfos()
    {
        return $this->fareInfos;
    }

    /**
     * Sets a new fareInfos
     *
     * This is a collection of FareInfo.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirItineraryPricingInfoType\FareInfosAType\FareInfoAType[]
     * $fareInfos
     * @return self
     */
    public function setFareInfos(array $fareInfos)
    {
        $this->fareInfos = $fareInfos;

        return $this;
    }

    /**
     * Gets as priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType
     */
    public function getPriceRequestInformation()
    {
        return $this->priceRequestInformation;
    }

    /**
     * Sets a new priceRequestInformation
     *
     * Identifies pricing source, if negotiated fares are requested and if it is a
     * reprice request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType
     * $priceRequestInformation
     * @return self
     */
    public function setPriceRequestInformation(
        \Davispeixoto\OpenTravelAlliance\PriceRequestInformationType $priceRequestInformation
    ) {
        $this->priceRequestInformation = $priceRequestInformation;

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

