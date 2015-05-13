<?php

namespace Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType;

/**
 * Class representing AirReservationAType
 */
class AirReservationAType
{

    /**
     * The reservation id number, PNR locator.
     *
     * @property string $bookingReferenceID
     */
    private $bookingReferenceID = null;

    /**
     * Date of the creation of this reservation.
     *
     * @property \DateTime $dateBooked
     */
    private $dateBooked = null;

    /**
     * A name given to this itinerary.
     *
     * @property string $itineraryName
     */
    private $itineraryName = null;

    /**
     * When true, this booking is cancelled.
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Provides additional booking information for the reservation. Refer to OpenTravel
     * Codes List Booking Information List (BIL).
     *
     * @property string[] $supplierBookingInfoList
     */
    private $supplierBookingInfoList = null;

    /**
     * The airline code, flight number, departure and arrival dates, and the origin and
     * destination.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FlightSegmentType $flightSegment
     */
    private $flightSegment = null;

    /**
     * The names of travelers (up to five) in the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType[] $travelerName
     */
    private $travelerName = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as bookingReferenceID
     *
     * The reservation id number, PNR locator.
     *
     * @return string
     */
    public function getBookingReferenceID()
    {
        return $this->bookingReferenceID;
    }

    /**
     * Sets a new bookingReferenceID
     *
     * The reservation id number, PNR locator.
     *
     * @param string $bookingReferenceID
     * @return self
     */
    public function setBookingReferenceID($bookingReferenceID)
    {
        $this->bookingReferenceID = $bookingReferenceID;

        return $this;
    }

    /**
     * Gets as dateBooked
     *
     * Date of the creation of this reservation.
     *
     * @return \DateTime
     */
    public function getDateBooked()
    {
        return $this->dateBooked;
    }

    /**
     * Sets a new dateBooked
     *
     * Date of the creation of this reservation.
     *
     * @param \DateTime $dateBooked
     * @return self
     */
    public function setDateBooked(\DateTime $dateBooked)
    {
        $this->dateBooked = $dateBooked;

        return $this;
    }

    /**
     * Gets as itineraryName
     *
     * A name given to this itinerary.
     *
     * @return string
     */
    public function getItineraryName()
    {
        return $this->itineraryName;
    }

    /**
     * Sets a new itineraryName
     *
     * A name given to this itinerary.
     *
     * @param string $itineraryName
     * @return self
     */
    public function setItineraryName($itineraryName)
    {
        $this->itineraryName = $itineraryName;

        return $this;
    }

    /**
     * Gets as status
     *
     * When true, this booking is cancelled.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * When true, this booking is cancelled.
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Adds as supplierBookingInfoList
     *
     * Provides additional booking information for the reservation. Refer to OpenTravel
     * Codes List Booking Information List (BIL).
     *
     * @return self
     * @param string $supplierBookingInfoList
     */
    public function addToSupplierBookingInfoList($supplierBookingInfoList)
    {
        $this->supplierBookingInfoList[] = $supplierBookingInfoList;

        return $this;
    }

    /**
     * isset supplierBookingInfoList
     *
     * Provides additional booking information for the reservation. Refer to OpenTravel
     * Codes List Booking Information List (BIL).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplierBookingInfoList($index)
    {
        return isset($this->supplierBookingInfoList[$index]);
    }

    /**
     * unset supplierBookingInfoList
     *
     * Provides additional booking information for the reservation. Refer to OpenTravel
     * Codes List Booking Information List (BIL).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplierBookingInfoList($index)
    {
        unset($this->supplierBookingInfoList[$index]);
    }

    /**
     * Gets as supplierBookingInfoList
     *
     * Provides additional booking information for the reservation. Refer to OpenTravel
     * Codes List Booking Information List (BIL).
     *
     * @return string[]
     */
    public function getSupplierBookingInfoList()
    {
        return $this->supplierBookingInfoList;
    }

    /**
     * Sets a new supplierBookingInfoList
     *
     * Provides additional booking information for the reservation. Refer to OpenTravel
     * Codes List Booking Information List (BIL).
     *
     * @param string $supplierBookingInfoList
     * @return self
     */
    public function setSupplierBookingInfoList(array $supplierBookingInfoList)
    {
        $this->supplierBookingInfoList = $supplierBookingInfoList;

        return $this;
    }

    /**
     * Gets as flightSegment
     *
     * The airline code, flight number, departure and arrival dates, and the origin and
     * destination.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FlightSegmentType
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * The airline code, flight number, departure and arrival dates, and the origin and
     * destination.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FlightSegmentType $flightSegment
     * @return self
     */
    public function setFlightSegment(\Davispeixoto\OpenTravelAlliance\FlightSegmentType $flightSegment)
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }

    /**
     * Adds as travelerName
     *
     * The names of travelers (up to five) in the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $travelerName
     */
    public function addToTravelerName(\Davispeixoto\OpenTravelAlliance\PersonNameType $travelerName)
    {
        $this->travelerName[] = $travelerName;

        return $this;
    }

    /**
     * isset travelerName
     *
     * The names of travelers (up to five) in the reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerName($index)
    {
        return isset($this->travelerName[$index]);
    }

    /**
     * unset travelerName
     *
     * The names of travelers (up to five) in the reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerName($index)
    {
        unset($this->travelerName[$index]);
    }

    /**
     * Gets as travelerName
     *
     * The names of travelers (up to five) in the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType[]
     */
    public function getTravelerName()
    {
        return $this->travelerName;
    }

    /**
     * Sets a new travelerName
     *
     * The names of travelers (up to five) in the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType[] $travelerName
     * @return self
     */
    public function setTravelerName(array $travelerName)
    {
        $this->travelerName = $travelerName;

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

