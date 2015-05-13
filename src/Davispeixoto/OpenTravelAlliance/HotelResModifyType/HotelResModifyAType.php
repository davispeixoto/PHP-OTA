<?php

namespace Davispeixoto\OpenTravelAlliance\HotelResModifyType;

use Davispeixoto\OpenTravelAlliance\HotelReservationType;

/**
 * Class representing HotelResModifyAType
 */
class HotelResModifyAType extends HotelReservationType
{

    /**
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/
     * MembershipID would be verified as part of the reservation that you plan to
     * modify to ensure the correct reservation is being modified).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType\VerificationAType[]
     * $verification
     */
    private $verification = null;

    /**
     * Adds as verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/
     * MembershipID would be verified as part of the reservation that you plan to
     * modify to ensure the correct reservation is being modified).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType\VerificationAType
     * $verification
     */
    public function addToVerification(
        \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType\VerificationAType $verification
    ) {
        $this->verification[] = $verification;

        return $this;
    }

    /**
     * isset verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/
     * MembershipID would be verified as part of the reservation that you plan to
     * modify to ensure the correct reservation is being modified).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVerification($index)
    {
        return isset($this->verification[$index]);
    }

    /**
     * unset verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/
     * MembershipID would be verified as part of the reservation that you plan to
     * modify to ensure the correct reservation is being modified).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVerification($index)
    {
        unset($this->verification[$index]);
    }

    /**
     * Gets as verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/
     * MembershipID would be verified as part of the reservation that you plan to
     * modify to ensure the correct reservation is being modified).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType\VerificationAType[]
     */
    public function getVerification()
    {
        return $this->verification;
    }

    /**
     * Sets a new verification
     *
     * The data used to ensure the correct reservation is modified (e.g. a CustLoyalty/
     * MembershipID would be verified as part of the reservation that you plan to
     * modify to ensure the correct reservation is being modified).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\HotelResModifyType\HotelResModifyAType\VerificationAType[]
     * $verification
     * @return self
     */
    public function setVerification(array $verification)
    {
        $this->verification = $verification;

        return $this;
    }


}

