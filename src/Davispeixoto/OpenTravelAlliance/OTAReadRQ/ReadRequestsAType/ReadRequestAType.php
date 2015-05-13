<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType;

/**
 * Class representing ReadRequestAType
 */
class ReadRequestAType
{

    /**
     * When true, the history of the reservation should be returned.
     *
     * @property boolean $historyRequestedInd
     */
    private $historyRequestedInd = null;

    /**
     * The booking reference for the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * This is to be used for verification that the record being sent is the specific
     * record requested. This is optional and is intended to provide a more secure
     * mechanism to ensure the correct record is being sent.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType $verification
     */
    private $verification = null;

    /**
     * Gets as historyRequestedInd
     *
     * When true, the history of the reservation should be returned.
     *
     * @return boolean
     */
    public function getHistoryRequestedInd()
    {
        return $this->historyRequestedInd;
    }

    /**
     * Sets a new historyRequestedInd
     *
     * When true, the history of the reservation should be returned.
     *
     * @param boolean $historyRequestedInd
     * @return self
     */
    public function setHistoryRequestedInd($historyRequestedInd)
    {
        $this->historyRequestedInd = $historyRequestedInd;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * The booking reference for the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * The booking reference for the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as verification
     *
     * This is to be used for verification that the record being sent is the specific
     * record requested. This is optional and is intended to provide a more secure
     * mechanism to ensure the correct record is being sent.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VerificationType
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * This is to be used for verification that the record being sent is the specific
     * record requested. This is optional and is intended to provide a more secure
     * mechanism to ensure the correct record is being sent.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VerificationType $verification
     * @return self
     */
    public function setVerification(\Davispeixoto\OpenTravelAlliance\VerificationType $verification)
    {
        $this->verification = $verification;

        return $this;
    }


}

