<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType;

/**
 * Class representing LoyaltyRedemptionAType
 */
class LoyaltyRedemptionAType
{

    /**
     * General information regarding the use of loyalty points as a form of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     */
    private $info = null;

    /**
     * Gets as info
     *
     * General information regarding the use of loyalty points as a form of payment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * General information regarding the use of loyalty points as a form of payment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $info
     * @return self
     */
    public function setInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $info)
    {
        $this->info = $info;

        return $this;
    }


}

