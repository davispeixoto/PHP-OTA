<?php

namespace Davispeixoto\OpenTravelAlliance\OfferType;

/**
 * Class representing GuestsAType
 */
class GuestsAType
{

    /**
     * Defines the guest(s) to which the offer applies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType[]
     * $guest
     */
    private $guest = null;

    /**
     * Adds as guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType $guest
     */
    public function addToGuest(\Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType $guest)
    {
        $this->guest[] = $guest;

        return $this;
    }

    /**
     * isset guest
     *
     * Defines the guest(s) to which the offer applies.
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
     * Defines the guest(s) to which the offer applies.
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
     * Defines the guest(s) to which the offer applies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * Defines the guest(s) to which the offer applies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OfferType\GuestsAType\GuestAType[]
     * $guest
     * @return self
     */
    public function setGuest(array $guest)
    {
        $this->guest = $guest;

        return $this;
    }


}

