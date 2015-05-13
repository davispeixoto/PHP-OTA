<?php

namespace Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing PrimaryAType
 */
class PrimaryAType extends ContactPersonType
{

    /**
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $customerID
     */
    private $customerID = null;

    /**
     * Gets as customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getCustomerID()
    {
        return $this->customerID;
    }

    /**
     * Sets a new customerID
     *
     * The identification of the customer for whom a booking is being requested. This
     * is different from the customer's loyalty number.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $customerID
     * @return self
     */
    public function setCustomerID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $customerID)
    {
        $this->customerID = $customerID;

        return $this;
    }


}

