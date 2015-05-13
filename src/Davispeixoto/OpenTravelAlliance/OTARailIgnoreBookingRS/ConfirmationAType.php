<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailIgnoreBookingRS;

/**
 * Class representing ConfirmationAType
 */
class ConfirmationAType
{

    /**
     * The reservation confirmation number that uniquely identifies a reservation. Note
     * that the @Type attribute will typically contain a value of 40 which is a
     * "Confirmation number" - See OpenTravel Code List Unique ID Type (UIT).
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The unique ID of the reservation with reservation details including itinerary,
     * traveler or traveler count, payment rules and ticket fulfillment information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailReservationType $reservationInfo
     */
    private $reservationInfo = null;

    /**
     * Gets as uniqueID
     *
     * The reservation confirmation number that uniquely identifies a reservation. Note
     * that the @Type attribute will typically contain a value of 40 which is a
     * "Confirmation number" - See OpenTravel Code List Unique ID Type (UIT).
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The reservation confirmation number that uniquely identifies a reservation. Note
     * that the @Type attribute will typically contain a value of 40 which is a
     * "Confirmation number" - See OpenTravel Code List Unique ID Type (UIT).
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as reservationInfo
     *
     * The unique ID of the reservation with reservation details including itinerary,
     * traveler or traveler count, payment rules and ticket fulfillment information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailReservationType
     */
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }

    /**
     * Sets a new reservationInfo
     *
     * The unique ID of the reservation with reservation details including itinerary,
     * traveler or traveler count, payment rules and ticket fulfillment information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailReservationType $reservationInfo
     * @return self
     */
    public function setReservationInfo(\Davispeixoto\OpenTravelAlliance\RailReservationType $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;

        return $this;
    }


}

