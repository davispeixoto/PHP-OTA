<?php

namespace Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType;

/**
 * Class representing GuestRPHsAType
 */
class GuestRPHsAType
{

    /**
     * References one of the guest(s) staying in this room.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[]
     * $guestRPH
     */
    private $guestRPH = null;

    /**
     * Adds as guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType
     * $guestRPH
     */
    public function addToGuestRPH(
        \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType $guestRPH
    ) {
        $this->guestRPH[] = $guestRPH;

        return $this;
    }

    /**
     * isset guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestRPH($index)
    {
        return isset($this->guestRPH[$index]);
    }

    /**
     * unset guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestRPH($index)
    {
        unset($this->guestRPH[$index]);
    }

    /**
     * Gets as guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[]
     */
    public function getGuestRPH()
    {
        return $this->guestRPH;
    }

    /**
     * Sets a new guestRPH
     *
     * References one of the guest(s) staying in this room.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RoomSharesType\RoomShareAType\GuestRPHsAType\GuestRPHAType[]
     * $guestRPH
     * @return self
     */
    public function setGuestRPH(array $guestRPH)
    {
        $this->guestRPH = $guestRPH;

        return $this;
    }


}

