<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType;

/**
 * Class representing CancelRuleAType
 */
class CancelRuleAType
{

    /**
     * CancelByDate MUST contain the date by which a cancellation must be made in order
     * to avoid the cancellation penalty.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $cancelByDate
     */
    private $cancelByDate = null;

    /**
     * The Amount MUST specify the charge associated with the cancellation penalty, if
     * one applies.
     *
     * @property float $amount
     */
    private $amount = null;

    /**
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed, if Amount is present. CurrencyCode MUST conform to ISO 4217, 3
     * character codes.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * PaymentCard MUST specify the details of the debit or credit card to which the
     * cancellation penalty will be applied. Either the CardNumber or MaskedCardNumber
     * MUST be returned to identify the card being charged.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType\PaymentCardAType
     * $paymentCard
     */
    private $paymentCard = null;

    /**
     * Gets as cancelByDate
     *
     * CancelByDate MUST contain the date by which a cancellation must be made in order
     * to avoid the cancellation penalty.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getCancelByDate()
    {
        return $this->cancelByDate;
    }

    /**
     * Sets a new cancelByDate
     *
     * CancelByDate MUST contain the date by which a cancellation must be made in order
     * to avoid the cancellation penalty.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $cancelByDate
     * @return self
     */
    public function setCancelByDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $cancelByDate)
    {
        $this->cancelByDate = $cancelByDate;

        return $this;
    }

    /**
     * Gets as amount
     *
     * The Amount MUST specify the charge associated with the cancellation penalty, if
     * one applies.
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
     * The Amount MUST specify the charge associated with the cancellation penalty, if
     * one applies.
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed, if Amount is present. CurrencyCode MUST conform to ISO 4217, 3
     * character codes.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The CurrencyCode MUST specify the code of the monetary unit in which the Amount
     * is expressed, if Amount is present. CurrencyCode MUST conform to ISO 4217, 3
     * character codes.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as paymentCard
     *
     * PaymentCard MUST specify the details of the debit or credit card to which the
     * cancellation penalty will be applied. Either the CardNumber or MaskedCardNumber
     * MUST be returned to identify the card being charged.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType\PaymentCardAType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * PaymentCard MUST specify the details of the debit or credit card to which the
     * cancellation penalty will be applied. Either the CardNumber or MaskedCardNumber
     * MUST be returned to identify the card being charged.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType\PaymentCardAType
     * $paymentCard
     * @return self
     */
    public function setPaymentCard(
        \Davispeixoto\OpenTravelAlliance\OTACancelRS\CancelInfoRSAType\CancelRulesAType\CancelRuleAType\PaymentCardAType $paymentCard
    ) {
        $this->paymentCard = $paymentCard;

        return $this;
    }


}

