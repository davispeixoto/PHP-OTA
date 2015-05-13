<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing LoyaltyTravelInfoType
 *
 * A choice between the various types of travel information supported by the
 * loyalty program schema.
 * XSD Type: LoyaltyTravelInfoType
 */
class LoyaltyTravelInfoType
{

    /**
     * Information about the customers hotel stay.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\HotelStayInfoAType
     * $hotelStayInfo
     */
    private $hotelStayInfo = null;

    /**
     * Information about the customers air travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     * $airFlightInfo
     */
    private $airFlightInfo = null;

    /**
     * Information about the customers car rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType
     * $carRentalInfo
     */
    private $carRentalInfo = null;

    /**
     * Information about the customers tours and activities.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType
     * $tourActivityInfo
     */
    private $tourActivityInfo = null;

    /**
     * Information about the customers ground transportation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\GroundTransportationInfoAType
     * $groundTransportationInfo
     */
    private $groundTransportationInfo = null;

    /**
     * Information about the customers rail travel.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType
     * $railInfo
     */
    private $railInfo = null;

    /**
     * Gets as hotelStayInfo
     *
     * Information about the customers hotel stay.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\HotelStayInfoAType
     */
    public function getHotelStayInfo()
    {
        return $this->hotelStayInfo;
    }

    /**
     * Sets a new hotelStayInfo
     *
     * Information about the customers hotel stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\HotelStayInfoAType
     * $hotelStayInfo
     * @return self
     */
    public function setHotelStayInfo(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\HotelStayInfoAType $hotelStayInfo
    ) {
        $this->hotelStayInfo = $hotelStayInfo;

        return $this;
    }

    /**
     * Adds as flightSegment
     *
     * Information about the customers air travel.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $flightSegment
     */
    public function addToAirFlightInfo(\Davispeixoto\OpenTravelAlliance\BookFlightSegmentType $flightSegment)
    {
        $this->airFlightInfo[] = $flightSegment;

        return $this;
    }

    /**
     * isset airFlightInfo
     *
     * Information about the customers air travel.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirFlightInfo($index)
    {
        return isset($this->airFlightInfo[$index]);
    }

    /**
     * unset airFlightInfo
     *
     * Information about the customers air travel.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirFlightInfo($index)
    {
        unset($this->airFlightInfo[$index]);
    }

    /**
     * Gets as airFlightInfo
     *
     * Information about the customers air travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[]
     */
    public function getAirFlightInfo()
    {
        return $this->airFlightInfo;
    }

    /**
     * Sets a new airFlightInfo
     *
     * Information about the customers air travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookFlightSegmentType[] $airFlightInfo
     * @return self
     */
    public function setAirFlightInfo(array $airFlightInfo)
    {
        $this->airFlightInfo = $airFlightInfo;

        return $this;
    }

    /**
     * Gets as carRentalInfo
     *
     * Information about the customers car rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType
     */
    public function getCarRentalInfo()
    {
        return $this->carRentalInfo;
    }

    /**
     * Sets a new carRentalInfo
     *
     * Information about the customers car rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType
     * $carRentalInfo
     * @return self
     */
    public function setCarRentalInfo(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType $carRentalInfo
    ) {
        $this->carRentalInfo = $carRentalInfo;

        return $this;
    }

    /**
     * Gets as tourActivityInfo
     *
     * Information about the customers tours and activities.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType
     */
    public function getTourActivityInfo()
    {
        return $this->tourActivityInfo;
    }

    /**
     * Sets a new tourActivityInfo
     *
     * Information about the customers tours and activities.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType
     * $tourActivityInfo
     * @return self
     */
    public function setTourActivityInfo(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\TourActivityInfoAType $tourActivityInfo
    ) {
        $this->tourActivityInfo = $tourActivityInfo;

        return $this;
    }

    /**
     * Gets as groundTransportationInfo
     *
     * Information about the customers ground transportation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\GroundTransportationInfoAType
     */
    public function getGroundTransportationInfo()
    {
        return $this->groundTransportationInfo;
    }

    /**
     * Sets a new groundTransportationInfo
     *
     * Information about the customers ground transportation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\GroundTransportationInfoAType
     * $groundTransportationInfo
     * @return self
     */
    public function setGroundTransportationInfo(
        \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\GroundTransportationInfoAType $groundTransportationInfo
    ) {
        $this->groundTransportationInfo = $groundTransportationInfo;

        return $this;
    }

    /**
     * Gets as railInfo
     *
     * Information about the customers rail travel.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType
     */
    public function getRailInfo()
    {
        return $this->railInfo;
    }

    /**
     * Sets a new railInfo
     *
     * Information about the customers rail travel.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType
     * $railInfo
     * @return self
     */
    public function setRailInfo(\Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\RailInfoAType $railInfo)
    {
        $this->railInfo = $railInfo;

        return $this;
    }


}

