<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ReferenceIDAType
 */
class ReferenceIDAType extends UniqueIDType
{

    /**
     * If true, this reservation segment should be canceled.
     *
     * @property boolean $cancelInd
     */
    private $cancelInd = null;

    /**
     * Gets as cancelInd
     *
     * If true, this reservation segment should be canceled.
     *
     * @return boolean
     */
    public function getCancelInd()
    {
        return $this->cancelInd;
    }

    /**
     * Sets a new cancelInd
     *
     * If true, this reservation segment should be canceled.
     *
     * @param boolean $cancelInd
     * @return self
     */
    public function setCancelInd($cancelInd)
    {
        $this->cancelInd = $cancelInd;

        return $this;
    }


}

