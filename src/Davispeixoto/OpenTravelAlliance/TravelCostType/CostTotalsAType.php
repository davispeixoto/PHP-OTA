<?php

namespace Davispeixoto\OpenTravelAlliance\TravelCostType;

use Davispeixoto\OpenTravelAlliance\TotalType;

/**
 * Class representing CostTotalsAType
 */
class CostTotalsAType extends TotalType
{

    /**
     * Reference to a form of payment.
     *
     * @property string $formOfPaymentRPH
     */
    private $formOfPaymentRPH = null;

    /**
     * Gets as formOfPaymentRPH
     *
     * Reference to a form of payment.
     *
     * @return string
     */
    public function getFormOfPaymentRPH()
    {
        return $this->formOfPaymentRPH;
    }

    /**
     * Sets a new formOfPaymentRPH
     *
     * Reference to a form of payment.
     *
     * @param string $formOfPaymentRPH
     * @return self
     */
    public function setFormOfPaymentRPH($formOfPaymentRPH)
    {
        $this->formOfPaymentRPH = $formOfPaymentRPH;

        return $this;
    }


}

