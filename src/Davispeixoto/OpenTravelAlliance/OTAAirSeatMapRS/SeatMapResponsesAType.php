<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS;

/**
 * Class representing SeatMapResponsesAType
 */
class SeatMapResponsesAType
{

    /**
     * Seat map details for each flight segment in the input request.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType[]
     * $seatMapResponse
     */
    private $seatMapResponse = null;

    /**
     * Air traveler information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType[]
     * $airTravelers
     */
    private $airTravelers = null;

    /**
     * Adds as seatMapResponse
     *
     * Seat map details for each flight segment in the input request.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType
     * $seatMapResponse
     */
    public function addToSeatMapResponse(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType $seatMapResponse
    ) {
        $this->seatMapResponse[] = $seatMapResponse;

        return $this;
    }

    /**
     * isset seatMapResponse
     *
     * Seat map details for each flight segment in the input request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSeatMapResponse($index)
    {
        return isset($this->seatMapResponse[$index]);
    }

    /**
     * unset seatMapResponse
     *
     * Seat map details for each flight segment in the input request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSeatMapResponse($index)
    {
        unset($this->seatMapResponse[$index]);
    }

    /**
     * Gets as seatMapResponse
     *
     * Seat map details for each flight segment in the input request.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType[]
     */
    public function getSeatMapResponse()
    {
        return $this->seatMapResponse;
    }

    /**
     * Sets a new seatMapResponse
     *
     * Seat map details for each flight segment in the input request.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\SeatMapResponseAType[]
     * $seatMapResponse
     * @return self
     */
    public function setSeatMapResponse(array $seatMapResponse)
    {
        $this->seatMapResponse = $seatMapResponse;

        return $this;
    }

    /**
     * Adds as airTraveler
     *
     * Air traveler information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType
     * $airTraveler
     */
    public function addToAirTravelers(
        \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType $airTraveler
    ) {
        $this->airTravelers[] = $airTraveler;

        return $this;
    }

    /**
     * isset airTravelers
     *
     * Air traveler information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAirTravelers($index)
    {
        return isset($this->airTravelers[$index]);
    }

    /**
     * unset airTravelers
     *
     * Air traveler information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAirTravelers($index)
    {
        unset($this->airTravelers[$index]);
    }

    /**
     * Gets as airTravelers
     *
     * Air traveler information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType[]
     */
    public function getAirTravelers()
    {
        return $this->airTravelers;
    }

    /**
     * Sets a new airTravelers
     *
     * Air traveler information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirSeatMapRS\SeatMapResponsesAType\AirTravelersAType\AirTravelerAType[]
     * $airTravelers
     * @return self
     */
    public function setAirTravelers(array $airTravelers)
    {
        $this->airTravelers = $airTravelers;

        return $this;
    }


}

