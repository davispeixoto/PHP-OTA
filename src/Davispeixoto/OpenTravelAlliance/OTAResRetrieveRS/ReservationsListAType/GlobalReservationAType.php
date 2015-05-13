<?php

namespace Davispeixoto\OpenTravelAlliance\OTAResRetrieveRS\ReservationsListAType;

/**
 * Class representing GlobalReservationAType
 */
class GlobalReservationAType
{

    /**
     * A name given to this itinerary.
     *
     * @property string $itineraryName
     */
    private $itineraryName = null;

    /**
     * The first date of the reservation, i.e., check-in date, departure date, pickup
     * date, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $start
     */
    private $start = null;

    /**
     * The booking reference ID.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * The name of the first traveler in the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $travelerName
     */
    private $travelerName = null;

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
     * Gets as start
     *
     * The first date of the reservation, i.e., check-in date, departure date, pickup
     * date, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The first date of the reservation, i.e., check-in date, departure date, pickup
     * date, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The booking reference ID.
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
     * The booking reference ID.
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
     * Gets as travelerName
     *
     * The name of the first traveler in the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getTravelerName()
    {
        return $this->travelerName;
    }

    /**
     * Sets a new travelerName
     *
     * The name of the first traveler in the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $travelerName
     * @return self
     */
    public function setTravelerName(\Davispeixoto\OpenTravelAlliance\PersonNameType $travelerName)
    {
        $this->travelerName = $travelerName;

        return $this;
    }


}

