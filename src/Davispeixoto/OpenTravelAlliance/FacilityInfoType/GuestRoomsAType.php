<?php

namespace Davispeixoto\OpenTravelAlliance\FacilityInfoType;

/**
 * Class representing GuestRoomsAType
 */
class GuestRoomsAType
{

    /**
     * Maximum number of guests the hotel can accommodate at one time.
     *
     * @property integer $maxOccupancy
     */
    private $maxOccupancy = null;

    /**
     * The accommodation occupied by a guest.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType[]
     * $guestRoom
     */
    private $guestRoom = null;

    /**
     * Gets as maxOccupancy
     *
     * Maximum number of guests the hotel can accommodate at one time.
     *
     * @return integer
     */
    public function getMaxOccupancy()
    {
        return $this->maxOccupancy;
    }

    /**
     * Sets a new maxOccupancy
     *
     * Maximum number of guests the hotel can accommodate at one time.
     *
     * @param integer $maxOccupancy
     * @return self
     */
    public function setMaxOccupancy($maxOccupancy)
    {
        $this->maxOccupancy = $maxOccupancy;

        return $this;
    }

    /**
     * Adds as guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType
     * $guestRoom
     */
    public function addToGuestRoom(
        \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType $guestRoom
    ) {
        $this->guestRoom[] = $guestRoom;

        return $this;
    }

    /**
     * isset guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestRoom($index)
    {
        return isset($this->guestRoom[$index]);
    }

    /**
     * unset guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestRoom($index)
    {
        unset($this->guestRoom[$index]);
    }

    /**
     * Gets as guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType[]
     */
    public function getGuestRoom()
    {
        return $this->guestRoom;
    }

    /**
     * Sets a new guestRoom
     *
     * The accommodation occupied by a guest.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FacilityInfoType\GuestRoomsAType\GuestRoomAType[]
     * $guestRoom
     * @return self
     */
    public function setGuestRoom(array $guestRoom)
    {
        $this->guestRoom = $guestRoom;

        return $this;
    }


}

