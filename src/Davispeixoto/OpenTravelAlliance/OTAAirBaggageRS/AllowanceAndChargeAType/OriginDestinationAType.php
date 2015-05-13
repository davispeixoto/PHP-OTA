<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType;

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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OriginLocationAType
     * $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\DestinationLocationAType
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
     * Baggage details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType[]
     * $baggageDetail
     */
    private $baggageDetail = null;

    /**
     * Booking and upgrade instructions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType
     * $bookingInstruction
     */
    private $bookingInstruction = null;

    /**
     * An associated loyalty program that influenced the baggage allowance.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CustLoyaltyAType
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Service or bag specific fee calculation information or warnings.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CalculationInfoAType[]
     * $calculationInfo
     */
    private $calculationInfo = null;

    /**
     * The marketing airline (or validating carrier.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\MarketingAirlineAType[]
     * $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * Baggage service information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType[]
     * $service
     */
    private $service = null;

    /**
     * A baggage allowance descriptor.Example: PC = per piece, 2PC = 2 pieces, nn = per
     * weight (nn is the weight limit). A blank string is also allowed in this element.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\TicketBoxAType
     * $ticketBox
     */
    private $ticketBox = null;

    /**
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OfferAType[]
     * $offer
     */
    private $offer = null;

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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OriginLocationAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OriginLocationAType
     * $originLocation
     * @return self
     */
    public function setOriginLocation(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OriginLocationAType $originLocation
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\DestinationLocationAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\DestinationLocationAType
     * $destinationLocation
     * @return self
     */
    public function setDestinationLocation(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\DestinationLocationAType $destinationLocation
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
     * Adds as baggageDetail
     *
     * Baggage details.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType
     * $baggageDetail
     */
    public function addToBaggageDetail(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType $baggageDetail
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BaggageDetailAType[]
     * $baggageDetail
     * @return self
     */
    public function setBaggageDetail(array $baggageDetail)
    {
        $this->baggageDetail = $baggageDetail;

        return $this;
    }

    /**
     * Gets as bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType
     */
    public function getBookingInstruction()
    {
        return $this->bookingInstruction;
    }

    /**
     * Sets a new bookingInstruction
     *
     * Booking and upgrade instructions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType
     * $bookingInstruction
     * @return self
     */
    public function setBookingInstruction(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\BookingInstructionAType $bookingInstruction
    ) {
        $this->bookingInstruction = $bookingInstruction;

        return $this;
    }

    /**
     * Gets as custLoyalty
     *
     * An associated loyalty program that influenced the baggage allowance.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CustLoyaltyAType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * An associated loyalty program that influenced the baggage allowance.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CustLoyaltyAType
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Adds as calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CalculationInfoAType
     * $calculationInfo
     */
    public function addToCalculationInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CalculationInfoAType $calculationInfo
    ) {
        $this->calculationInfo[] = $calculationInfo;

        return $this;
    }

    /**
     * isset calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCalculationInfo($index)
    {
        return isset($this->calculationInfo[$index]);
    }

    /**
     * unset calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCalculationInfo($index)
    {
        unset($this->calculationInfo[$index]);
    }

    /**
     * Gets as calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CalculationInfoAType[]
     */
    public function getCalculationInfo()
    {
        return $this->calculationInfo;
    }

    /**
     * Sets a new calculationInfo
     *
     * Service or bag specific fee calculation information or warnings.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\CalculationInfoAType[]
     * $calculationInfo
     * @return self
     */
    public function setCalculationInfo(array $calculationInfo)
    {
        $this->calculationInfo = $calculationInfo;

        return $this;
    }

    /**
     * Adds as marketingAirline
     *
     * The marketing airline (or validating carrier.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\MarketingAirlineAType
     * $marketingAirline
     */
    public function addToMarketingAirline(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\MarketingAirlineAType $marketingAirline
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\MarketingAirlineAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\MarketingAirlineAType[]
     * $marketingAirline
     * @return self
     */
    public function setMarketingAirline(array $marketingAirline)
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Adds as service
     *
     * Baggage service information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType
     * $service
     */
    public function addToService(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType $service
    ) {
        $this->service[] = $service;

        return $this;
    }

    /**
     * isset service
     *
     * Baggage service information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetService($index)
    {
        return isset($this->service[$index]);
    }

    /**
     * unset service
     *
     * Baggage service information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetService($index)
    {
        unset($this->service[$index]);
    }

    /**
     * Gets as service
     *
     * Baggage service information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Baggage service information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\ServiceAType[]
     * $service
     * @return self
     */
    public function setService(array $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Gets as ticketBox
     *
     * A baggage allowance descriptor.Example: PC = per piece, 2PC = 2 pieces, nn = per
     * weight (nn is the weight limit). A blank string is also allowed in this element.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\TicketBoxAType
     */
    public function getTicketBox()
    {
        return $this->ticketBox;
    }

    /**
     * Sets a new ticketBox
     *
     * A baggage allowance descriptor.Example: PC = per piece, 2PC = 2 pieces, nn = per
     * weight (nn is the weight limit). A blank string is also allowed in this element.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\TicketBoxAType
     * $ticketBox
     * @return self
     */
    public function setTicketBox(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\TicketBoxAType $ticketBox
    ) {
        $this->ticketBox = $ticketBox;

        return $this;
    }

    /**
     * Adds as offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OfferAType
     * $offer
     */
    public function addToOffer(
        \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OfferAType $offer
    ) {
        $this->offer[] = $offer;

        return $this;
    }

    /**
     * isset offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffer($index)
    {
        return isset($this->offer[$index]);
    }

    /**
     * unset offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffer($index)
    {
        unset($this->offer[$index]);
    }

    /**
     * Gets as offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OfferAType[]
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Airline merchandising offers that apply to baggage allowance and/or charges.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirBaggageRS\AllowanceAndChargeAType\OriginDestinationAType\OfferAType[]
     * $offer
     * @return self
     */
    public function setOffer(array $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}

