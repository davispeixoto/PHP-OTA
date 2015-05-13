<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\PaymentInfoAType;

use Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing DetailsAType
 */
class DetailsAType extends PaymentFormType
{

    /**
     * The approval code returned as part of an authorization process.
     *
     * @property string $approvalCode
     */
    private $approvalCode = null;

    /**
     * Gets as approvalCode
     *
     * The approval code returned as part of an authorization process.
     *
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->approvalCode;
    }

    /**
     * Sets a new approvalCode
     *
     * The approval code returned as part of an authorization process.
     *
     * @param string $approvalCode
     * @return self
     */
    public function setApprovalCode($approvalCode)
    {
        $this->approvalCode = $approvalCode;

        return $this;
    }


}

