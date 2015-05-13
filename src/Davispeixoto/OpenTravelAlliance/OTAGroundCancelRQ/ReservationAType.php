<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundCancelRQ;

/**
 * Class representing ReservationAType
 */
class ReservationAType
{

    /**
     * Used to specify if this is to initiate a cancellation or to commit the
     * cancellation.
     *
     * @property string $cancelType
     */
    private $cancelType = null;

    /**
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     */
    private $uniqueID = null;

    /**
     * Additional verification information for the reservation to be canceled.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType $verification
     */
    private $verification = null;

    /**
     * Gets as cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the
     * cancellation.
     *
     * @return string
     */
    public function getCancelType()
    {
        return $this->cancelType;
    }

    /**
     * Sets a new cancelType
     *
     * Used to specify if this is to initiate a cancellation or to commit the
     * cancellation.
     *
     * @param string $cancelType
     * @return self
     */
    public function setCancelType($cancelType)
    {
        $this->cancelType = $cancelType;

        return $this;
    }

    /**
     * Adds as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    public function addToUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID[] = $uniqueID;

        return $this;
    }

    /**
     * isset uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniqueID($index)
    {
        return isset($this->uniqueID[$index]);
    }

    /**
     * unset uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniqueID($index)
    {
        unset($this->uniqueID[$index]);
    }

    /**
     * Gets as uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Sending own UniqueID and partner UniqueID - the receiving system needs to know
     * which one - UniqueID acts as a reference for each system.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $uniqueID
     * @return self
     */
    public function setUniqueID(array $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }

    /**
     * Gets as verification
     *
     * Additional verification information for the reservation to be canceled.
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
     * Additional verification information for the reservation to be canceled.
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

