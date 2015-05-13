<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType;

/**
 * Class representing GuestDetailsAType
 */
class GuestDetailsAType
{

    /**
     * Specifies the Guest information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType[] $guestDetail
     */
    private $guestDetail = null;

    /**
     * Adds as guestDetail
     *
     * Specifies the Guest information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType $guestDetail
     */
    public function addToGuestDetail(\Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType $guestDetail)
    {
        $this->guestDetail[] = $guestDetail;

        return $this;
    }

    /**
     * isset guestDetail
     *
     * Specifies the Guest information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestDetail($index)
    {
        return isset($this->guestDetail[$index]);
    }

    /**
     * unset guestDetail
     *
     * Specifies the Guest information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestDetail($index)
    {
        unset($this->guestDetail[$index]);
    }

    /**
     * Gets as guestDetail
     *
     * Specifies the Guest information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType[]
     */
    public function getGuestDetail()
    {
        return $this->guestDetail;
    }

    /**
     * Sets a new guestDetail
     *
     * Specifies the Guest information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType[] $guestDetail
     * @return self
     */
    public function setGuestDetail(array $guestDetail)
    {
        $this->guestDetail = $guestDetail;

        return $this;
    }


}

