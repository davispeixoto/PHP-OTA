<?php

namespace Davispeixoto\OpenTravelAlliance\CommissionEventType;

/**
 * Class representing GuestNamesAType
 */
class GuestNamesAType
{

    /**
     * Provides details of a guest name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType[] $guestName
     */
    private $guestName = null;

    /**
     * Adds as guestName
     *
     * Provides details of a guest name.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $guestName
     */
    public function addToGuestName(\Davispeixoto\OpenTravelAlliance\PersonNameType $guestName)
    {
        $this->guestName[] = $guestName;

        return $this;
    }

    /**
     * isset guestName
     *
     * Provides details of a guest name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestName($index)
    {
        return isset($this->guestName[$index]);
    }

    /**
     * unset guestName
     *
     * Provides details of a guest name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestName($index)
    {
        unset($this->guestName[$index]);
    }

    /**
     * Gets as guestName
     *
     * Provides details of a guest name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType[]
     */
    public function getGuestName()
    {
        return $this->guestName;
    }

    /**
     * Sets a new guestName
     *
     * Provides details of a guest name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType[] $guestName
     * @return self
     */
    public function setGuestName(array $guestName)
    {
        $this->guestName = $guestName;

        return $this;
    }


}

