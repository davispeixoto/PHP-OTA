<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleReservationRQAdditionalInfoType;

use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing RentalPaymentPrefAType
 */
class RentalPaymentPrefAType extends PaymentDetailType
{

    /**
     * Used to specify whether the payment information is for guaranteeing the rental
     * or is the actual form of payment.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Gets as type
     *
     * Used to specify whether the payment information is for guaranteeing the rental
     * or is the actual form of payment.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to specify whether the payment information is for guaranteeing the rental
     * or is the actual form of payment.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }


}

