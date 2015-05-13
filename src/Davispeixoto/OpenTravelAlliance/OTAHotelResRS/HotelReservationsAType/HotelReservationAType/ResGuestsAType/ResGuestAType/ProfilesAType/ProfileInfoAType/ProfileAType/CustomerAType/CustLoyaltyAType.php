<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType;

/**
 * Class representing CustLoyaltyAType
 */
class CustLoyaltyAType
{

    /**
     * ProgramID MUST specify an identifier to indicate the company owner of the
     * loyalty program.
     *
     * @property string $programID
     */
    private $programID = null;

    /**
     * MembershipID MUST specify a unique identifier of the member in the program
     * (membership number, account number, etc.).
     *
     * @property string $membershipID
     */
    private $membershipID = null;

    /**
     * Gets as programID
     *
     * ProgramID MUST specify an identifier to indicate the company owner of the
     * loyalty program.
     *
     * @return string
     */
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * Sets a new programID
     *
     * ProgramID MUST specify an identifier to indicate the company owner of the
     * loyalty program.
     *
     * @param string $programID
     * @return self
     */
    public function setProgramID($programID)
    {
        $this->programID = $programID;

        return $this;
    }

    /**
     * Gets as membershipID
     *
     * MembershipID MUST specify a unique identifier of the member in the program
     * (membership number, account number, etc.).
     *
     * @return string
     */
    public function getMembershipID()
    {
        return $this->membershipID;
    }

    /**
     * Sets a new membershipID
     *
     * MembershipID MUST specify a unique identifier of the member in the program
     * (membership number, account number, etc.).
     *
     * @param string $membershipID
     * @return self
     */
    public function setMembershipID($membershipID)
    {
        $this->membershipID = $membershipID;

        return $this;
    }


}

