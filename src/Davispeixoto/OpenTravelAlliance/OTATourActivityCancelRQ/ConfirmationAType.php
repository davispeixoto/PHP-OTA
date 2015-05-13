<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ;

use Davispeixoto\OpenTravelAlliance\UniqueIDType;

/**
 * Class representing ConfirmationAType
 */
class ConfirmationAType extends UniqueIDType
{

    /**
     * A trading partner confirmation ID associated with the original booking ID.
     *
     * @property string $otherConfirmationID
     */
    private $otherConfirmationID = null;

    /**
     * Gets as otherConfirmationID
     *
     * A trading partner confirmation ID associated with the original booking ID.
     *
     * @return string
     */
    public function getOtherConfirmationID()
    {
        return $this->otherConfirmationID;
    }

    /**
     * Sets a new otherConfirmationID
     *
     * A trading partner confirmation ID associated with the original booking ID.
     *
     * @param string $otherConfirmationID
     * @return self
     */
    public function setOtherConfirmationID($otherConfirmationID)
    {
        $this->otherConfirmationID = $otherConfirmationID;

        return $this;
    }


}

