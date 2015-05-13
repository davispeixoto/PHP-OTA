<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType;

/**
 * Class representing HotelReservationIDsAType
 */
class HotelReservationIDsAType
{

    /**
     * The HotelReservationID MAY contain the reservation or cancellation number of the
     * reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType[]
     * $hotelReservationID
     */
    private $hotelReservationID = null;

    /**
     * Adds as hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation or cancellation number of the
     * reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType
     * $hotelReservationID
     */
    public function addToHotelReservationID(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType $hotelReservationID
    ) {
        $this->hotelReservationID[] = $hotelReservationID;

        return $this;
    }

    /**
     * isset hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation or cancellation number of the
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelReservationID($index)
    {
        return isset($this->hotelReservationID[$index]);
    }

    /**
     * unset hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation or cancellation number of the
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelReservationID($index)
    {
        unset($this->hotelReservationID[$index]);
    }

    /**
     * Gets as hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation or cancellation number of the
     * reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType[]
     */
    public function getHotelReservationID()
    {
        return $this->hotelReservationID;
    }

    /**
     * Sets a new hotelReservationID
     *
     * The HotelReservationID MAY contain the reservation or cancellation number of the
     * reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType\HotelReservationIDsAType\HotelReservationIDAType[]
     * $hotelReservationID
     * @return self
     */
    public function setHotelReservationID(array $hotelReservationID)
    {
        $this->hotelReservationID = $hotelReservationID;

        return $this;
    }


}

