<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType;

use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing PaymentOptionAType
 */
class PaymentOptionAType extends PaymentDetailType
{

    /**
     * When true, indicates payment will be made over an extended time. When false, the
     * payment isn't extended.
     *
     * @property boolean $extendedIndicator
     */
    private $extendedIndicator = null;

    /**
     * Specifies payment for a gift order or reservation.
     *
     * @property string $paymentPurpose
     */
    private $paymentPurpose = null;

    /**
     * Specifies the Extended Deposit Date for the check form of payment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $extendedDepositDate
     */
    private $extendedDepositDate = null;

    /**
     * Specifies the Gift Order Reference/Form of Payment Number.
     *
     * @property string $referenceNumber
     */
    private $referenceNumber = null;

    /**
     * Gets as extendedIndicator
     *
     * When true, indicates payment will be made over an extended time. When false, the
     * payment isn't extended.
     *
     * @return boolean
     */
    public function getExtendedIndicator()
    {
        return $this->extendedIndicator;
    }

    /**
     * Sets a new extendedIndicator
     *
     * When true, indicates payment will be made over an extended time. When false, the
     * payment isn't extended.
     *
     * @param boolean $extendedIndicator
     * @return self
     */
    public function setExtendedIndicator($extendedIndicator)
    {
        $this->extendedIndicator = $extendedIndicator;

        return $this;
    }

    /**
     * Gets as paymentPurpose
     *
     * Specifies payment for a gift order or reservation.
     *
     * @return string
     */
    public function getPaymentPurpose()
    {
        return $this->paymentPurpose;
    }

    /**
     * Sets a new paymentPurpose
     *
     * Specifies payment for a gift order or reservation.
     *
     * @param string $paymentPurpose
     * @return self
     */
    public function setPaymentPurpose($paymentPurpose)
    {
        $this->paymentPurpose = $paymentPurpose;

        return $this;
    }

    /**
     * Gets as extendedDepositDate
     *
     * Specifies the Extended Deposit Date for the check form of payment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getExtendedDepositDate()
    {
        return $this->extendedDepositDate;
    }

    /**
     * Sets a new extendedDepositDate
     *
     * Specifies the Extended Deposit Date for the check form of payment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $extendedDepositDate
     * @return self
     */
    public function setExtendedDepositDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $extendedDepositDate)
    {
        $this->extendedDepositDate = $extendedDepositDate;

        return $this;
    }

    /**
     * Gets as referenceNumber
     *
     * Specifies the Gift Order Reference/Form of Payment Number.
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->referenceNumber;
    }

    /**
     * Sets a new referenceNumber
     *
     * Specifies the Gift Order Reference/Form of Payment Number.
     *
     * @param string $referenceNumber
     * @return self
     */
    public function setReferenceNumber($referenceNumber)
    {
        $this->referenceNumber = $referenceNumber;

        return $this;
    }


}

