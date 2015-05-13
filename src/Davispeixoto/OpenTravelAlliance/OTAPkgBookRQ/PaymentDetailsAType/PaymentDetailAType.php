<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ\PaymentDetailsAType;

use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing PaymentDetailAType
 */
class PaymentDetailAType extends PaymentDetailType
{

    /**
     * (CCD code). For use with a Credit or Debit Card payment in a secure transaction.
     *
     * @property integer $securityCode
     */
    private $securityCode = null;

    /**
     * Gets as securityCode
     *
     * (CCD code). For use with a Credit or Debit Card payment in a secure transaction.
     *
     * @return integer
     */
    public function getSecurityCode()
    {
        return $this->securityCode;
    }

    /**
     * Sets a new securityCode
     *
     * (CCD code). For use with a Credit or Debit Card payment in a secure transaction.
     *
     * @param integer $securityCode
     * @return self
     */
    public function setSecurityCode($securityCode)
    {
        $this->securityCode = $securityCode;

        return $this;
    }


}

