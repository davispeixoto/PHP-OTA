<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType;

/**
 * Class representing HotelReservationAType
 */
class HotelReservationAType
{

    /**
     * The RoomStays container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType
     * $roomStays
     */
    private $roomStays = null;

    /**
     * The ResGuests container allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType[]
     * $resGuests
     */
    private $resGuests = null;

    /**
     * ResGlobalInfo is a container for various information that applies to the
     * Reservation as a whole.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType
     * $resGlobalInfo
     */
    private $resGlobalInfo = null;

    /**
     * Gets as roomStays
     *
     * The RoomStays container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType
     */
    public function getRoomStays()
    {
        return $this->roomStays;
    }

    /**
     * Sets a new roomStays
     *
     * The RoomStays container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType
     * $roomStays
     * @return self
     */
    public function setRoomStays(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\RoomStaysAType $roomStays
    ) {
        $this->roomStays = $roomStays;

        return $this;
    }

    /**
     * Adds as resGuest
     *
     * The ResGuests container allows for future expansion of the message.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType
     * $resGuest
     */
    public function addToResGuests(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType $resGuest
    ) {
        $this->resGuests[] = $resGuest;

        return $this;
    }

    /**
     * isset resGuests
     *
     * The ResGuests container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResGuests($index)
    {
        return isset($this->resGuests[$index]);
    }

    /**
     * unset resGuests
     *
     * The ResGuests container allows for future expansion of the message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResGuests($index)
    {
        unset($this->resGuests[$index]);
    }

    /**
     * Gets as resGuests
     *
     * The ResGuests container allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType[]
     */
    public function getResGuests()
    {
        return $this->resGuests;
    }

    /**
     * Sets a new resGuests
     *
     * The ResGuests container allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType[]
     * $resGuests
     * @return self
     */
    public function setResGuests(array $resGuests)
    {
        $this->resGuests = $resGuests;

        return $this;
    }

    /**
     * Gets as resGlobalInfo
     *
     * ResGlobalInfo is a container for various information that applies to the
     * Reservation as a whole.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType
     */
    public function getResGlobalInfo()
    {
        return $this->resGlobalInfo;
    }

    /**
     * Sets a new resGlobalInfo
     *
     * ResGlobalInfo is a container for various information that applies to the
     * Reservation as a whole.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType
     * $resGlobalInfo
     * @return self
     */
    public function setResGlobalInfo(
        \Davispeixoto\OpenTravelAlliance\OTAHotelResRQ\HotelReservationsAType\HotelReservationAType\ResGlobalInfoAType $resGlobalInfo
    ) {
        $this->resGlobalInfo = $resGlobalInfo;

        return $this;
    }


}

