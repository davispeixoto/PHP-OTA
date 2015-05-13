<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirBookModifyRQ;

use Davispeixoto\OpenTravelAlliance\AirReservationType;

/**
 * Class representing AirBookModifyRQAType
 */
class AirBookModifyRQAType extends AirReservationType
{

    /**
     * Specifies the type of booking modification being requested. Refer to OpenTravel
     * Code List Modification Type (MOD).
     *
     * @property string $modificationType
     */
    private $modificationType = null;

    /**
     * The number of passengers that should remain in the passenger booking record
     * following a modification to reduce the number in party.
     *
     * @property integer $reduceToNbr
     */
    private $reduceToNbr = null;

    /**
     * When true, indicates a request to claim the booking by the sending party.
     *
     * @property boolean $claimPNRInd
     */
    private $claimPNRInd = null;

    /**
     * Gets as modificationType
     *
     * Specifies the type of booking modification being requested. Refer to OpenTravel
     * Code List Modification Type (MOD).
     *
     * @return string
     */
    public function getModificationType()
    {
        return $this->modificationType;
    }

    /**
     * Sets a new modificationType
     *
     * Specifies the type of booking modification being requested. Refer to OpenTravel
     * Code List Modification Type (MOD).
     *
     * @param string $modificationType
     * @return self
     */
    public function setModificationType($modificationType)
    {
        $this->modificationType = $modificationType;

        return $this;
    }

    /**
     * Gets as reduceToNbr
     *
     * The number of passengers that should remain in the passenger booking record
     * following a modification to reduce the number in party.
     *
     * @return integer
     */
    public function getReduceToNbr()
    {
        return $this->reduceToNbr;
    }

    /**
     * Sets a new reduceToNbr
     *
     * The number of passengers that should remain in the passenger booking record
     * following a modification to reduce the number in party.
     *
     * @param integer $reduceToNbr
     * @return self
     */
    public function setReduceToNbr($reduceToNbr)
    {
        $this->reduceToNbr = $reduceToNbr;

        return $this;
    }

    /**
     * Gets as claimPNRInd
     *
     * When true, indicates a request to claim the booking by the sending party.
     *
     * @return boolean
     */
    public function getClaimPNRInd()
    {
        return $this->claimPNRInd;
    }

    /**
     * Sets a new claimPNRInd
     *
     * When true, indicates a request to claim the booking by the sending party.
     *
     * @param boolean $claimPNRInd
     * @return self
     */
    public function setClaimPNRInd($claimPNRInd)
    {
        $this->claimPNRInd = $claimPNRInd;

        return $this;
    }


}

