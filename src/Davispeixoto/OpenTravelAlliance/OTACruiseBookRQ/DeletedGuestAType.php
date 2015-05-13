<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseBookRQ;

/**
 * Class representing DeletedGuestAType
 */
class DeletedGuestAType
{

    /**
     * The guest's reference number in the booking being modified.
     *
     * @property integer $deletedGuestReference
     */
    private $deletedGuestReference = null;

    /**
     * Gets as deletedGuestReference
     *
     * The guest's reference number in the booking being modified.
     *
     * @return integer
     */
    public function getDeletedGuestReference()
    {
        return $this->deletedGuestReference;
    }

    /**
     * Sets a new deletedGuestReference
     *
     * The guest's reference number in the booking being modified.
     *
     * @param integer $deletedGuestReference
     * @return self
     */
    public function setDeletedGuestReference($deletedGuestReference)
    {
        $this->deletedGuestReference = $deletedGuestReference;

        return $this;
    }


}

