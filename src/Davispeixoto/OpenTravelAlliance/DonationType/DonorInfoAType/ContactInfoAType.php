<?php

namespace Davispeixoto\OpenTravelAlliance\DonationType\DonorInfoAType;

use Davispeixoto\OpenTravelAlliance\AddressType;

/**
 * Class representing ContactInfoAType
 */
class ContactInfoAType extends AddressType
{

    /**
     * The donor email address.
     *
     * @property string $emailAddress
     */
    private $emailAddress = null;

    /**
     * Gets as emailAddress
     *
     * The donor email address.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets a new emailAddress
     *
     * The donor email address.
     *
     * @param string $emailAddress
     * @return self
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }


}

