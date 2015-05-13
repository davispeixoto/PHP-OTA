<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing HotelReservationsType
 *
 * A collection of hotel reservations.
 * XSD Type: HotelReservationsType
 */
class HotelReservationsType
{

    /**
     * Contains a hotel reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelReservationsType\HotelReservationAType[]
     * $hotelReservation
     */
    private $hotelReservation = null;

    /**
     * A collection of routing hops.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     * $routingHops
     */
    private $routingHops = null;

    /**
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     */
    private $writtenConfInst = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationsType\HotelReservationAType
     * $hotelReservation
     */
    public function addToHotelReservation(
        \Davispeixoto\OpenTravelAlliance\HotelReservationsType\HotelReservationAType $hotelReservation
    ) {
        $this->hotelReservation[] = $hotelReservation;

        return $this;
    }

    /**
     * isset hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservation($index)
    {
        return isset($this->hotelReservation[$index]);
    }

    /**
     * unset hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservation($index)
    {
        unset($this->hotelReservation[$index]);
    }

    /**
     * Gets as hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelReservationsType\HotelReservationAType[]
     */
    public function getHotelReservation()
    {
        return $this->hotelReservation;
    }

    /**
     * Sets a new hotelReservation
     *
     * Contains a hotel reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelReservationsType\HotelReservationAType[]
     * $hotelReservation
     * @return self
     */
    public function setHotelReservation(array $hotelReservation)
    {
        $this->hotelReservation = $hotelReservation;

        return $this;
    }

    /**
     * Adds as routingHop
     *
     * A collection of routing hops.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType
     * $routingHop
     */
    public function addToRoutingHops(\Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHops[] = $routingHop;

        return $this;
    }

    /**
     * isset routingHops
     *
     * A collection of routing hops.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoutingHops($index)
    {
        return isset($this->routingHops[$index]);
    }

    /**
     * unset routingHops
     *
     * A collection of routing hops.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoutingHops($index)
    {
        unset($this->routingHops[$index]);
    }

    /**
     * Gets as routingHops
     *
     * A collection of routing hops.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHops()
    {
        return $this->routingHops;
    }

    /**
     * Sets a new routingHops
     *
     * A collection of routing hops.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoutingHopType\RoutingHopAType[]
     * $routingHops
     * @return self
     */
    public function setRoutingHops(array $routingHops)
    {
        $this->routingHops = $routingHops;

        return $this;
    }

    /**
     * Gets as writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WrittenConfInstType
     */
    public function getWrittenConfInst()
    {
        return $this->writtenConfInst;
    }

    /**
     * Sets a new writtenConfInst
     *
     * To indicate a confirmation is to be sent for this batch of reservations.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst
     * @return self
     */
    public function setWrittenConfInst(\Davispeixoto\OpenTravelAlliance\WrittenConfInstType $writtenConfInst)
    {
        $this->writtenConfInst = $writtenConfInst;

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

