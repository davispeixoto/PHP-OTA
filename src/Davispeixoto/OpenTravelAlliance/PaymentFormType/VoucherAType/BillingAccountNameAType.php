<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentFormType\VoucherAType;

use Davispeixoto\OpenTravelAlliance\CompanyNameType;

/**
 * Class representing BillingAccountNameAType
 */
class BillingAccountNameAType extends CompanyNameType
{

    /**
     * This may be used to pass the name of the contact at the company for which the
     * voucher has been issued.
     *
     * @property string $contactName
     */
    private $contactName = null;

    /**
     * Gets as contactName
     *
     * This may be used to pass the name of the contact at the company for which the
     * voucher has been issued.
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * This may be used to pass the name of the contact at the company for which the
     * voucher has been issued.
     *
     * @param string $contactName
     * @return self
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }


}

