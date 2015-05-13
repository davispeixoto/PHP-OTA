<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeBookingType;

use Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing PaymentFormAType
 */
class PaymentFormAType extends PaymentFormType
{

    /**
     * A unique ID that identifies the golfer that this payment form is associated with
     * defined in Golfer/@RPH.
     *
     * @property string $golferRPH
     */
    private $golferRPH = null;

    /**
     * A unique ID that identifies the charge that this payment form is associated with
     * defined in Charge/@RPH.
     *
     * @property string $chargeRPH
     */
    private $chargeRPH = null;

    /**
     * Gets as golferRPH
     *
     * A unique ID that identifies the golfer that this payment form is associated with
     * defined in Golfer/@RPH.
     *
     * @return string
     */
    public function getGolferRPH()
    {
        return $this->golferRPH;
    }

    /**
     * Sets a new golferRPH
     *
     * A unique ID that identifies the golfer that this payment form is associated with
     * defined in Golfer/@RPH.
     *
     * @param string $golferRPH
     * @return self
     */
    public function setGolferRPH($golferRPH)
    {
        $this->golferRPH = $golferRPH;

        return $this;
    }

    /**
     * Gets as chargeRPH
     *
     * A unique ID that identifies the charge that this payment form is associated with
     * defined in Charge/@RPH.
     *
     * @return string
     */
    public function getChargeRPH()
    {
        return $this->chargeRPH;
    }

    /**
     * Sets a new chargeRPH
     *
     * A unique ID that identifies the charge that this payment form is associated with
     * defined in Charge/@RPH.
     *
     * @param string $chargeRPH
     * @return self
     */
    public function setChargeRPH($chargeRPH)
    {
        $this->chargeRPH = $chargeRPH;

        return $this;
    }


}

