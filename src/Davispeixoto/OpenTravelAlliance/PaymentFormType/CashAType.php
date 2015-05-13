<?php

namespace Davispeixoto\OpenTravelAlliance\PaymentFormType;

/**
 * Class representing CashAType
 */
class CashAType
{

    /**
     * If true, this indicates cash is being used.
     *  true
     *
     * @property boolean $cashIndicator
     */
    private $cashIndicator = null;

    /**
     * Gets as cashIndicator
     *
     * If true, this indicates cash is being used.
     *  true
     *
     * @return boolean
     */
    public function getCashIndicator()
    {
        return $this->cashIndicator;
    }

    /**
     * Sets a new cashIndicator
     *
     * If true, this indicates cash is being used.
     *  true
     *
     * @param boolean $cashIndicator
     * @return self
     */
    public function setCashIndicator($cashIndicator)
    {
        $this->cashIndicator = $cashIndicator;

        return $this;
    }


}

