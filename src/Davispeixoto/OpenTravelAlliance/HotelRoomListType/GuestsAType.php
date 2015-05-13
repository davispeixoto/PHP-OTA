<?php

namespace Davispeixoto\OpenTravelAlliance\HotelRoomListType;

/**
 * Class representing GuestsAType
 */
class GuestsAType
{

    /**
     * A person staying in a room.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType[]
     * $guest
     */
    private $guest = null;

    /**
     * Adds as guest
     *
     * A person staying in a room.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType
     * $guest
     */
    public function addToGuest(\Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType $guest)
    {
        $this->guest[] = $guest;

        return $this;
    }

    /**
     * isset guest
     *
     * A person staying in a room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuest($index)
    {
        return isset($this->guest[$index]);
    }

    /**
     * unset guest
     *
     * A person staying in a room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuest($index)
    {
        unset($this->guest[$index]);
    }

    /**
     * Gets as guest
     *
     * A person staying in a room.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * A person staying in a room.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelRoomListType\GuestsAType\GuestAType[]
     * $guest
     * @return self
     */
    public function setGuest(array $guest)
    {
        $this->guest = $guest;

        return $this;
    }


}

