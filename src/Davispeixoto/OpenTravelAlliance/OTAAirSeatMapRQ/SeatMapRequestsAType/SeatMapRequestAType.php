<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType;

/**
 * Class representing SeatMapRequestAType
 */
class SeatMapRequestAType
{

    /**
     * Reference to one or more travelers for whom seat map is requested for this
     * flight segment. RPH Value from TravelerRefNumber of AirTravelerType element will
     * be mapped here.
     *
     * @property string[] $travelerRefNumberRPHs
     */
    private $travelerRefNumberRPHs = null;

    /**
     * Flight segment information of the flight segment for which seat map information
     * is requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\FlightSegmentInfoAType
     * $flightSegmentInfo
     */
    private $flightSegmentInfo = null;

    /**
     * Object to hold the seat details that is to be requested.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\SeatDetailsAType
     * $seatDetails
     */
    private $seatDetails = null;

    /**
     * Adds as travelerRefNumberRPHs
     *
     * Reference to one or more travelers for whom seat map is requested for this
     * flight segment. RPH Value from TravelerRefNumber of AirTravelerType element will
     * be mapped here.
     *
     * @return self
     * @param string $travelerRefNumberRPHs
     */
    public function addToTravelerRefNumberRPHs($travelerRefNumberRPHs)
    {
        $this->travelerRefNumberRPHs[] = $travelerRefNumberRPHs;

        return $this;
    }

    /**
     * isset travelerRefNumberRPHs
     *
     * Reference to one or more travelers for whom seat map is requested for this
     * flight segment. RPH Value from TravelerRefNumber of AirTravelerType element will
     * be mapped here.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTravelerRefNumberRPHs($index)
    {
        return isset($this->travelerRefNumberRPHs[$index]);
    }

    /**
     * unset travelerRefNumberRPHs
     *
     * Reference to one or more travelers for whom seat map is requested for this
     * flight segment. RPH Value from TravelerRefNumber of AirTravelerType element will
     * be mapped here.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTravelerRefNumberRPHs($index)
    {
        unset($this->travelerRefNumberRPHs[$index]);
    }

    /**
     * Gets as travelerRefNumberRPHs
     *
     * Reference to one or more travelers for whom seat map is requested for this
     * flight segment. RPH Value from TravelerRefNumber of AirTravelerType element will
     * be mapped here.
     *
     * @return string[]
     */
    public function getTravelerRefNumberRPHs()
    {
        return $this->travelerRefNumberRPHs;
    }

    /**
     * Sets a new travelerRefNumberRPHs
     *
     * Reference to one or more travelers for whom seat map is requested for this
     * flight segment. RPH Value from TravelerRefNumber of AirTravelerType element will
     * be mapped here.
     *
     * @param string $travelerRefNumberRPHs
     * @return self
     */
    public function setTravelerRefNumberRPHs(array $travelerRefNumberRPHs)
    {
        $this->travelerRefNumberRPHs = $travelerRefNumberRPHs;

        return $this;
    }

    /**
     * Gets as flightSegmentInfo
     *
     * Flight segment information of the flight segment for which seat map information
     * is requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\FlightSegmentInfoAType
     */
    public function getFlightSegmentInfo()
    {
        return $this->flightSegmentInfo;
    }

    /**
     * Sets a new flightSegmentInfo
     *
     * Flight segment information of the flight segment for which seat map information
     * is requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\FlightSegmentInfoAType
     * $flightSegmentInfo
     * @return self
     */
    public function setFlightSegmentInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\FlightSegmentInfoAType $flightSegmentInfo
    ) {
        $this->flightSegmentInfo = $flightSegmentInfo;

        return $this;
    }

    /**
     * Gets as seatDetails
     *
     * Object to hold the seat details that is to be requested.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\SeatDetailsAType
     */
    public function getSeatDetails()
    {
        return $this->seatDetails;
    }

    /**
     * Sets a new seatDetails
     *
     * Object to hold the seat details that is to be requested.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\SeatDetailsAType
     * $seatDetails
     * @return self
     */
    public function setSeatDetails(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRQ\SeatMapRequestsAType\SeatMapRequestAType\SeatDetailsAType $seatDetails
    ) {
        $this->seatDetails = $seatDetails;

        return $this;
    }


}

