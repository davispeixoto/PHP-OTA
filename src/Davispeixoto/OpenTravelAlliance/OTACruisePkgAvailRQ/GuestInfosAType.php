<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ;

/**
 * Class representing GuestInfosAType
 */
class GuestInfosAType
{

    /**
     * Specifies the guest information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType[]
     * $guestInfo
     */
    private $guestInfo = null;

    /**
     * Adds as guestInfo
     *
     * Specifies the guest information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType
     * $guestInfo
     */
    public function addToGuestInfo(
        \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType $guestInfo
    ) {
        $this->guestInfo[] = $guestInfo;

        return $this;
    }

    /**
     * isset guestInfo
     *
     * Specifies the guest information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestInfo($index)
    {
        return isset($this->guestInfo[$index]);
    }

    /**
     * unset guestInfo
     *
     * Specifies the guest information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestInfo($index)
    {
        unset($this->guestInfo[$index]);
    }

    /**
     * Gets as guestInfo
     *
     * Specifies the guest information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType[]
     */
    public function getGuestInfo()
    {
        return $this->guestInfo;
    }

    /**
     * Sets a new guestInfo
     *
     * Specifies the guest information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePkgAvailRQ\GuestInfosAType\GuestInfoAType[]
     * $guestInfo
     * @return self
     */
    public function setGuestInfo(array $guestInfo)
    {
        $this->guestInfo = $guestInfo;

        return $this;
    }


}

