<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType;

/**
 * Class representing SeatMapResponseAType
 */
class SeatMapResponseAType
{

    /**
     * Upgrades included indicator.If true, this response includes upgrades in the seat
     * map.
     *
     * @property boolean $seatUpgradeAppliedInd
     */
    private $seatUpgradeAppliedInd = null;

    /**
     * Seat map flight segment information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType\FlightSegmentInfoAType
     * $flightSegmentInfo
     */
    private $flightSegmentInfo = null;

    /**
     * Seat map details.Note: This identifies the seat map details for the flight
     * segment in the corresponding FlightSegmentInfo element. If the responding system
     * has different seat maps for different passengers for the same flight segment
     * then this element will recur accordingly. The availability of seats can differ
     * based upon various conditions, such as a passenger's status within a loyalty
     * program or by the amount paid or class of service booked for the ticket. For
     * example, if one passenger has a certain status in the Frequent Flyer program of
     * the airline, certain desirable seats may be available for selection. A passenger
     * without such status may not be able to select those seats. Thus the availability
     * of seats can differ by passenger.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SeatMapDetailsType[] $seatMapDetails
     */
    private $seatMapDetails = null;

    /**
     * Booking reference (PNR record locator.)Note: This is used for PNR record
     * locator. If there are more than one PNR numbers because of multiple airlines in
     * the itinerary then this element could be repeated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Fare basis code associated with the seat that may be associated with a flight
     * segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Gets as seatUpgradeAppliedInd
     *
     * Upgrades included indicator.If true, this response includes upgrades in the seat
     * map.
     *
     * @return boolean
     */
    public function getSeatUpgradeAppliedInd()
    {
        return $this->seatUpgradeAppliedInd;
    }

    /**
     * Sets a new seatUpgradeAppliedInd
     *
     * Upgrades included indicator.If true, this response includes upgrades in the seat
     * map.
     *
     * @param boolean $seatUpgradeAppliedInd
     * @return self
     */
    public function setSeatUpgradeAppliedInd($seatUpgradeAppliedInd)
    {
        $this->seatUpgradeAppliedInd = $seatUpgradeAppliedInd;

        return $this;
    }

    /**
     * Gets as flightSegmentInfo
     *
     * Seat map flight segment information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType\FlightSegmentInfoAType
     */
    public function getFlightSegmentInfo()
    {
        return $this->flightSegmentInfo;
    }

    /**
     * Sets a new flightSegmentInfo
     *
     * Seat map flight segment information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType\FlightSegmentInfoAType
     * $flightSegmentInfo
     * @return self
     */
    public function setFlightSegmentInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType\FlightSegmentInfoAType $flightSegmentInfo
    ) {
        $this->flightSegmentInfo = $flightSegmentInfo;

        return $this;
    }

    /**
     * Adds as seatMapDetails
     *
     * Seat map details.Note: This identifies the seat map details for the flight
     * segment in the corresponding FlightSegmentInfo element. If the responding system
     * has different seat maps for different passengers for the same flight segment
     * then this element will recur accordingly. The availability of seats can differ
     * based upon various conditions, such as a passenger's status within a loyalty
     * program or by the amount paid or class of service booked for the ticket. For
     * example, if one passenger has a certain status in the Frequent Flyer program of
     * the airline, certain desirable seats may be available for selection. A passenger
     * without such status may not be able to select those seats. Thus the availability
     * of seats can differ by passenger.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapDetailsType $seatMapDetails
     */
    public function addToSeatMapDetails(\Davispeixoto\OpenTravelAlliance\SeatMapDetailsType $seatMapDetails)
    {
        $this->seatMapDetails[] = $seatMapDetails;

        return $this;
    }

    /**
     * isset seatMapDetails
     *
     * Seat map details.Note: This identifies the seat map details for the flight
     * segment in the corresponding FlightSegmentInfo element. If the responding system
     * has different seat maps for different passengers for the same flight segment
     * then this element will recur accordingly. The availability of seats can differ
     * based upon various conditions, such as a passenger's status within a loyalty
     * program or by the amount paid or class of service booked for the ticket. For
     * example, if one passenger has a certain status in the Frequent Flyer program of
     * the airline, certain desirable seats may be available for selection. A passenger
     * without such status may not be able to select those seats. Thus the availability
     * of seats can differ by passenger.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatMapDetails($index)
    {
        return isset($this->seatMapDetails[$index]);
    }

    /**
     * unset seatMapDetails
     *
     * Seat map details.Note: This identifies the seat map details for the flight
     * segment in the corresponding FlightSegmentInfo element. If the responding system
     * has different seat maps for different passengers for the same flight segment
     * then this element will recur accordingly. The availability of seats can differ
     * based upon various conditions, such as a passenger's status within a loyalty
     * program or by the amount paid or class of service booked for the ticket. For
     * example, if one passenger has a certain status in the Frequent Flyer program of
     * the airline, certain desirable seats may be available for selection. A passenger
     * without such status may not be able to select those seats. Thus the availability
     * of seats can differ by passenger.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatMapDetails($index)
    {
        unset($this->seatMapDetails[$index]);
    }

    /**
     * Gets as seatMapDetails
     *
     * Seat map details.Note: This identifies the seat map details for the flight
     * segment in the corresponding FlightSegmentInfo element. If the responding system
     * has different seat maps for different passengers for the same flight segment
     * then this element will recur accordingly. The availability of seats can differ
     * based upon various conditions, such as a passenger's status within a loyalty
     * program or by the amount paid or class of service booked for the ticket. For
     * example, if one passenger has a certain status in the Frequent Flyer program of
     * the airline, certain desirable seats may be available for selection. A passenger
     * without such status may not be able to select those seats. Thus the availability
     * of seats can differ by passenger.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SeatMapDetailsType[]
     */
    public function getSeatMapDetails()
    {
        return $this->seatMapDetails;
    }

    /**
     * Sets a new seatMapDetails
     *
     * Seat map details.Note: This identifies the seat map details for the flight
     * segment in the corresponding FlightSegmentInfo element. If the responding system
     * has different seat maps for different passengers for the same flight segment
     * then this element will recur accordingly. The availability of seats can differ
     * based upon various conditions, such as a passenger's status within a loyalty
     * program or by the amount paid or class of service booked for the ticket. For
     * example, if one passenger has a certain status in the Frequent Flyer program of
     * the airline, certain desirable seats may be available for selection. A passenger
     * without such status may not be able to select those seats. Thus the availability
     * of seats can differ by passenger.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SeatMapDetailsType[] $seatMapDetails
     * @return self
     */
    public function setSeatMapDetails(array $seatMapDetails)
    {
        $this->seatMapDetails = $seatMapDetails;

        return $this;
    }

    /**
     * Adds as bookingReferenceID
     *
     * Booking reference (PNR record locator.)Note: This is used for PNR record
     * locator. If there are more than one PNR numbers because of multiple airlines in
     * the itinerary then this element could be repeated.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID
     */
    public function addToBookingReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $bookingReferenceID)
    {
        $this->bookingReferenceID[] = $bookingReferenceID;

        return $this;
    }

    /**
     * isset bookingReferenceID
     *
     * Booking reference (PNR record locator.)Note: This is used for PNR record
     * locator. If there are more than one PNR numbers because of multiple airlines in
     * the itinerary then this element could be repeated.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingReferenceID($index)
    {
        return isset($this->bookingReferenceID[$index]);
    }

    /**
     * unset bookingReferenceID
     *
     * Booking reference (PNR record locator.)Note: This is used for PNR record
     * locator. If there are more than one PNR numbers because of multiple airlines in
     * the itinerary then this element could be repeated.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingReferenceID($index)
    {
        unset($this->bookingReferenceID[$index]);
    }

    /**
     * Gets as bookingReferenceID
     *
     * Booking reference (PNR record locator.)Note: This is used for PNR record
     * locator. If there are more than one PNR numbers because of multiple airlines in
     * the itinerary then this element could be repeated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * Booking reference (PNR record locator.)Note: This is used for PNR record
     * locator. If there are more than one PNR numbers because of multiple airlines in
     * the itinerary then this element could be repeated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID(array $bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code associated with the seat that may be associated with a flight
     * segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FareBasisCodeType
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code associated with the seat that may be associated with a flight
     * segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode
     * @return self
     */
    public function setFareBasisCode(\Davispeixoto\OpenTravelAlliance\FareBasisCodeType $fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }


}

