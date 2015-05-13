<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType\PaymentInfoAType;

use Davispeixoto\OpenTravelAlliance\PaymentCardType;

/**
 * Class representing CreditCardInfoAType
 */
class CreditCardInfoAType extends PaymentCardType
{

    /**
     * The credit card approval code.
     *
     * @property string $approvalCode
     */
    private $approvalCode = null;

    /**
     * When true, the credit card was present at the transaction.
     *
     * @property boolean $cardPresentInd
     */
    private $cardPresentInd = null;

    /**
     * Specifies the number of months that extended payment is allowed or an 'E' to
     * indicate there is extended payment but no set number of months.
     *
     * @property string $extendedPaymentCode
     */
    private $extendedPaymentCode = null;

    /**
     * Specifies the amount for this form of payment.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * Gets as approvalCode
     *
     * The credit card approval code.
     *
     * @return string
     */
    public function getApprovalCode()
    {
        return $this->approvalCode;
    }

    /**
     * Sets a new approvalCode
     *
     * The credit card approval code.
     *
     * @param string $approvalCode
     * @return self
     */
    public function setApprovalCode($approvalCode)
    {
        $this->approvalCode = $approvalCode;

        return $this;
    }

    /**
     * Gets as cardPresentInd
     *
     * When true, the credit card was present at the transaction.
     *
     * @return boolean
     */
    public function getCardPresentInd()
    {
        return $this->cardPresentInd;
    }

    /**
     * Sets a new cardPresentInd
     *
     * When true, the credit card was present at the transaction.
     *
     * @param boolean $cardPresentInd
     * @return self
     */
    public function setCardPresentInd($cardPresentInd)
    {
        $this->cardPresentInd = $cardPresentInd;

        return $this;
    }

    /**
     * Gets as extendedPaymentCode
     *
     * Specifies the number of months that extended payment is allowed or an 'E' to
     * indicate there is extended payment but no set number of months.
     *
     * @return string
     */
    public function getExtendedPaymentCode()
    {
        return $this->extendedPaymentCode;
    }

    /**
     * Sets a new extendedPaymentCode
     *
     * Specifies the number of months that extended payment is allowed or an 'E' to
     * indicate there is extended payment but no set number of months.
     *
     * @param string $extendedPaymentCode
     * @return self
     */
    public function setExtendedPaymentCode($extendedPaymentCode)
    {
        $this->extendedPaymentCode = $extendedPaymentCode;

        return $this;
    }

    /**
     * Gets as amount
     *
     * Specifies the amount for this form of payment.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets a new amount
     *
     * Specifies the amount for this form of payment.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }


}

