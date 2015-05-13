<?php

namespace Davispeixoto\OpenTravelAlliance\TravelSegmentType;

/**
 * Class representing HotelAType
 */
class HotelAType
{

    /**
     * Hotel reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RoomStayLiteType $reservation
     */
    private $reservation = null;

    /**
     * Detailed hotel reservation information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\HotelReservationType
     * $detailedReservation
     */
    private $detailedReservation = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as reservation
     *
     * Hotel reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RoomStayLiteType
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Sets a new reservation
     *
     * Hotel reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RoomStayLiteType $reservation
     * @return self
     */
    public function setReservation(\Davispeixoto\OpenTravelAlliance\RoomStayLiteType $reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Gets as detailedReservation
     *
     * Detailed hotel reservation information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\HotelReservationType
     */
    public function getDetailedReservation()
    {
        return $this->detailedReservation;
    }

    /**
     * Sets a new detailedReservation
     *
     * Detailed hotel reservation information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\HotelReservationType
     * $detailedReservation
     * @return self
     */
    public function setDetailedReservation(\Davispeixoto\OpenTravelAlliance\HotelReservationType $detailedReservation)
    {
        $this->detailedReservation = $detailedReservation;

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

