<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ReadRequestType
 *
 * Reservation confirmation number and the guest's last name to retrieve a
 * reservation.
 * XSD Type: ReadRequestType
 */
class ReadRequestType
{

    /**
     * UniqueID MUST specify the booking reference for the reservation to be retrieved.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Verification is used to verify that the record being returned is the specific
     * record requested. FastRez REQUIRES the guest's last name be provided in order to
     * retrieve the reservation. This is intended to provide a more secure mechanism to
     * ensure the correct reservation is being returned.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VerificationType $verification
     */
    private $verification = null;

    /**
     * Gets as uniqueID
     *
     * UniqueID MUST specify the booking reference for the reservation to be retrieved.
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
     * UniqueID MUST specify the booking reference for the reservation to be retrieved.
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
     * Verification is used to verify that the record being returned is the specific
     * record requested. FastRez REQUIRES the guest's last name be provided in order to
     * retrieve the reservation. This is intended to provide a more secure mechanism to
     * ensure the correct reservation is being returned.
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
     * Verification is used to verify that the record being returned is the specific
     * record requested. FastRez REQUIRES the guest's last name be provided in order to
     * retrieve the reservation. This is intended to provide a more secure mechanism to
     * ensure the correct reservation is being returned.
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

