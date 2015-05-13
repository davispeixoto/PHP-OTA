<?php

namespace Davispeixoto\OpenTravelAlliance\ItinPricingType;

use Davispeixoto\OpenTravelAlliance\TotalType;

/**
 * Class representing CostAType
 */
class CostAType extends TotalType
{

    /**
     * Reference to the Form of Payment used in association to this cost.
     *
     * @property string $formOfPaymentRPH
     */
    private $formOfPaymentRPH = null;

    /**
     * Gets as formOfPaymentRPH
     *
     * Reference to the Form of Payment used in association to this cost.
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
     * Reference to the Form of Payment used in association to this cost.
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

