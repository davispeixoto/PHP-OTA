<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType
{

    /**
     * A unique identifier for this baggage allowance information.
     *
     * @property string $allowanceRPH
     */
    private $allowanceRPH = null;

    /**
     * The arrival date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * The departure date.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * A unique reference to this O/D pair.
     *
     * @property string $origDestSequenceRPH
     */
    private $origDestSequenceRPH = null;

    /**
     * Travel Origin Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\OriginLocationAType
     * $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\DestinationLocationAType
     * $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\ConnectionType\ConnectionLocationAType[]
     * $connectionLocations
     */
    private $connectionLocations = null;

    /**
     * The marketing airline (or validating carrier.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\MarketingAirlineAType[]
     * $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * Baggage details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType[]
     * $baggageDetail
     */
    private $baggageDetail = null;

    /**
     * Gets as allowanceRPH
     *
     * A unique identifier for this baggage allowance information.
     *
     * @return string
     */
    public function getAllowanceRPH()
    {
        return $this->allowanceRPH;
    }

    /**
     * Sets a new allowanceRPH
     *
     * A unique identifier for this baggage allowance information.
     *
     * @param string $allowanceRPH
     * @return self
     */
    public function setAllowanceRPH($allowanceRPH)
    {
        $this->allowanceRPH = $allowanceRPH;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * The arrival date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * The arrival date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as departureDateTime
     *
     * The departure date.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * The departure date.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as origDestSequenceRPH
     *
     * A unique reference to this O/D pair.
     *
     * @return string
     */
    public function getOrigDestSequenceRPH()
    {
        return $this->origDestSequenceRPH;
    }

    /**
     * Sets a new origDestSequenceRPH
     *
     * A unique reference to this O/D pair.
     *
     * @param string $origDestSequenceRPH
     * @return self
     */
    public function setOrigDestSequenceRPH($origDestSequenceRPH)
    {
        $this->origDestSequenceRPH = $origDestSequenceRPH;

        return $this;
    }

    /**
     * Gets as originLocation
     *
     * Travel Origin Location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\OriginLocationAType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel Origin Location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\OriginLocationAType
     * $originLocation
     * @return self
     */
    public function setOriginLocation(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\OriginLocationAType $originLocation
    ) {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\DestinationLocationAType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel Destination Location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\DestinationLocationAType
     * $destinationLocation
     * @return self
     */
    public function setDestinationLocation(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\DestinationLocationAType $destinationLocation
    ) {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Adds as connectionLocation
     *
     * Travel Connection Location.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ConnectionType\ConnectionLocationAType
     * $connectionLocation
     */
    public function addToConnectionLocations(
        \Davispeixoto\OpenTravelAlliance\ConnectionType\ConnectionLocationAType $connectionLocation
    ) {
        $this->connectionLocations[] = $connectionLocation;

        return $this;
    }

    /**
     * isset connectionLocations
     *
     * Travel Connection Location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConnectionLocations($index)
    {
        return isset($this->connectionLocations[$index]);
    }

    /**
     * unset connectionLocations
     *
     * Travel Connection Location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConnectionLocations($index)
    {
        unset($this->connectionLocations[$index]);
    }

    /**
     * Gets as connectionLocations
     *
     * Travel Connection Location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\ConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocations()
    {
        return $this->connectionLocations;
    }

    /**
     * Sets a new connectionLocations
     *
     * Travel Connection Location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ConnectionType\ConnectionLocationAType[]
     * $connectionLocations
     * @return self
     */
    public function setConnectionLocations(array $connectionLocations)
    {
        $this->connectionLocations = $connectionLocations;

        return $this;
    }

    /**
     * Adds as marketingAirline
     *
     * The marketing airline (or validating carrier.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\MarketingAirlineAType
     * $marketingAirline
     */
    public function addToMarketingAirline(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\MarketingAirlineAType $marketingAirline
    ) {
        $this->marketingAirline[] = $marketingAirline;

        return $this;
    }

    /**
     * isset marketingAirline
     *
     * The marketing airline (or validating carrier.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketingAirline($index)
    {
        return isset($this->marketingAirline[$index]);
    }

    /**
     * unset marketingAirline
     *
     * The marketing airline (or validating carrier.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketingAirline($index)
    {
        unset($this->marketingAirline[$index]);
    }

    /**
     * Gets as marketingAirline
     *
     * The marketing airline (or validating carrier.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\MarketingAirlineAType[]
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * The marketing airline (or validating carrier.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\MarketingAirlineAType[]
     * $marketingAirline
     * @return self
     */
    public function setMarketingAirline(array $marketingAirline)
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Adds as baggageDetail
     *
     * Baggage details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType
     * $baggageDetail
     */
    public function addToBaggageDetail(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType $baggageDetail
    ) {
        $this->baggageDetail[] = $baggageDetail;

        return $this;
    }

    /**
     * isset baggageDetail
     *
     * Baggage details.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaggageDetail($index)
    {
        return isset($this->baggageDetail[$index]);
    }

    /**
     * unset baggageDetail
     *
     * Baggage details.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaggageDetail($index)
    {
        unset($this->baggageDetail[$index]);
    }

    /**
     * Gets as baggageDetail
     *
     * Baggage details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType[]
     */
    public function getBaggageDetail()
    {
        return $this->baggageDetail;
    }

    /**
     * Sets a new baggageDetail
     *
     * Baggage details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\BaggageListAType\OriginDestinationAType\BaggageDetailAType[]
     * $baggageDetail
     * @return self
     */
    public function setBaggageDetail(array $baggageDetail)
    {
        $this->baggageDetail = $baggageDetail;

        return $this;
    }


}

