<?php

namespace Davispeixoto\OpenTravelAlliance\DynamicPkgType;

/**
 * Class representing ResGuestsAType
 */
class ResGuestsAType
{

    /**
     * The ResGuest object contains the information about a guest associated with a
     * reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType[] $resGuest
     */
    private $resGuest = null;

    /**
     * Adds as resGuest
     *
     * The ResGuest object contains the information about a guest associated with a
     * reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType $resGuest
     */
    public function addToResGuest(\Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType $resGuest)
    {
        $this->resGuest[] = $resGuest;

        return $this;
    }

    /**
     * isset resGuest
     *
     * The ResGuest object contains the information about a guest associated with a
     * reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResGuest($index)
    {
        return isset($this->resGuest[$index]);
    }

    /**
     * unset resGuest
     *
     * The ResGuest object contains the information about a guest associated with a
     * reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResGuest($index)
    {
        unset($this->resGuest[$index]);
    }

    /**
     * Gets as resGuest
     *
     * The ResGuest object contains the information about a guest associated with a
     * reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType[]
     */
    public function getResGuest()
    {
        return $this->resGuest;
    }

    /**
     * Sets a new resGuest
     *
     * The ResGuest object contains the information about a guest associated with a
     * reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DynamicPkgGuestType[] $resGuest
     * @return self
     */
    public function setResGuest(array $resGuest)
    {
        $this->resGuest = $resGuest;

        return $this;
    }


}

