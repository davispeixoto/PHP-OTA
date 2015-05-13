<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType;

use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing PaymentDetailAType
 */
class PaymentDetailAType extends PaymentDetailType
{

    /**
     * Reference to the payment posting.
     *
     * @property string $referenceID
     */
    private $referenceID = null;

    /**
     * Used to specify warnings for this payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Gets as referenceID
     *
     * Reference to the payment posting.
     *
     * @return string
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * Reference to the payment posting.
     *
     * @param string $referenceID
     * @return self
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Used to specify warnings for this payment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Used to specify warnings for this payment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Used to specify warnings for this payment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Used to specify warnings for this payment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Used to specify warnings for this payment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }


}

