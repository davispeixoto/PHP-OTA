<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType;

/**
 * Class representing PaymentOptionsAType
 */
class PaymentOptionsAType
{

    /**
     * Information on the requirements and policies regarding the use of credit cards
     * to pay for the rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $creditCard
     */
    private $creditCard = null;

    /**
     * Information on the requirements and policies regarding the use of debit cards to
     * pay for the rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $debitCard
     */
    private $debitCard = null;

    /**
     * Information on the requirements regarding the use of cash to pay for the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\CashAType
     * $cash
     */
    private $cash = null;

    /**
     * Information on the requirements regarding the use of vouchers to pay for the
     * rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\VoucherAType
     * $voucher
     */
    private $voucher = null;

    /**
     * Information on the requirements regarding the use of direct-draft Bank Accounts
     * to pay for the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\BankAcctAType
     * $bankAcct
     */
    private $bankAcct = null;

    /**
     * Information on the requirements regarding the use of direct-billing arrangements
     * to pay for the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\DirectBillAType
     * $directBill
     */
    private $directBill = null;

    /**
     * Information on the requirements regarding the use of loyalty points to pay for
     * the rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\LoyaltyRedemptionAType
     * $loyaltyRedemption
     */
    private $loyaltyRedemption = null;

    /**
     * Information on the requirements regarding the use of Miscellaneous Charge
     * Orders.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\MiscChargeOrderAType
     * $miscChargeOrder
     */
    private $miscChargeOrder = null;

    /**
     * Information on the requirements and policies regarding deposits that may be
     * required for the rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $deposit
     */
    private $deposit = null;

    /**
     * Information on the requirements and policies regarding guarantees that may be
     * required for the rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $guarantee
     */
    private $guarantee = null;

    /**
     * Information on the requirements and policies regarding pre-payments that may be
     * required for the rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $prePayment
     */
    private $prePayment = null;

    /**
     * General information on other restrictions associated with the payment of a
     * rental.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $paymentOptionsInfo
     */
    private $paymentOptionsInfo = null;

    /**
     * Gets as creditCard
     *
     * Information on the requirements and policies regarding the use of credit cards
     * to pay for the rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     */
    public function getCreditCard()
    {
        return $this->creditCard;
    }

    /**
     * Sets a new creditCard
     *
     * Information on the requirements and policies regarding the use of credit cards
     * to pay for the rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $creditCard
     * @return self
     */
    public function setCreditCard(\Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType $creditCard)
    {
        $this->creditCard = $creditCard;

        return $this;
    }

    /**
     * Gets as debitCard
     *
     * Information on the requirements and policies regarding the use of debit cards to
     * pay for the rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     */
    public function getDebitCard()
    {
        return $this->debitCard;
    }

    /**
     * Sets a new debitCard
     *
     * Information on the requirements and policies regarding the use of debit cards to
     * pay for the rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $debitCard
     * @return self
     */
    public function setDebitCard(\Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType $debitCard)
    {
        $this->debitCard = $debitCard;

        return $this;
    }

    /**
     * Gets as cash
     *
     * Information on the requirements regarding the use of cash to pay for the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\CashAType
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Sets a new cash
     *
     * Information on the requirements regarding the use of cash to pay for the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\CashAType
     * $cash
     * @return self
     */
    public function setCash(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\CashAType $cash
    ) {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Gets as voucher
     *
     * Information on the requirements regarding the use of vouchers to pay for the
     * rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\VoucherAType
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher
     *
     * Information on the requirements regarding the use of vouchers to pay for the
     * rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\VoucherAType
     * $voucher
     * @return self
     */
    public function setVoucher(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\VoucherAType $voucher
    ) {
        $this->voucher = $voucher;

        return $this;
    }

    /**
     * Gets as bankAcct
     *
     * Information on the requirements regarding the use of direct-draft Bank Accounts
     * to pay for the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\BankAcctAType
     */
    public function getBankAcct()
    {
        return $this->bankAcct;
    }

    /**
     * Sets a new bankAcct
     *
     * Information on the requirements regarding the use of direct-draft Bank Accounts
     * to pay for the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\BankAcctAType
     * $bankAcct
     * @return self
     */
    public function setBankAcct(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\BankAcctAType $bankAcct
    ) {
        $this->bankAcct = $bankAcct;

        return $this;
    }

    /**
     * Gets as directBill
     *
     * Information on the requirements regarding the use of direct-billing arrangements
     * to pay for the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\DirectBillAType
     */
    public function getDirectBill()
    {
        return $this->directBill;
    }

    /**
     * Sets a new directBill
     *
     * Information on the requirements regarding the use of direct-billing arrangements
     * to pay for the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\DirectBillAType
     * $directBill
     * @return self
     */
    public function setDirectBill(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\DirectBillAType $directBill
    ) {
        $this->directBill = $directBill;

        return $this;
    }

    /**
     * Gets as loyaltyRedemption
     *
     * Information on the requirements regarding the use of loyalty points to pay for
     * the rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\LoyaltyRedemptionAType
     */
    public function getLoyaltyRedemption()
    {
        return $this->loyaltyRedemption;
    }

    /**
     * Sets a new loyaltyRedemption
     *
     * Information on the requirements regarding the use of loyalty points to pay for
     * the rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\LoyaltyRedemptionAType
     * $loyaltyRedemption
     * @return self
     */
    public function setLoyaltyRedemption(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\LoyaltyRedemptionAType $loyaltyRedemption
    ) {
        $this->loyaltyRedemption = $loyaltyRedemption;

        return $this;
    }

    /**
     * Gets as miscChargeOrder
     *
     * Information on the requirements regarding the use of Miscellaneous Charge
     * Orders.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\MiscChargeOrderAType
     */
    public function getMiscChargeOrder()
    {
        return $this->miscChargeOrder;
    }

    /**
     * Sets a new miscChargeOrder
     *
     * Information on the requirements regarding the use of Miscellaneous Charge
     * Orders.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\MiscChargeOrderAType
     * $miscChargeOrder
     * @return self
     */
    public function setMiscChargeOrder(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationRequirementsType\PaymentOptionsAType\MiscChargeOrderAType $miscChargeOrder
    ) {
        $this->miscChargeOrder = $miscChargeOrder;

        return $this;
    }

    /**
     * Gets as deposit
     *
     * Information on the requirements and policies regarding deposits that may be
     * required for the rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     */
    public function getDeposit()
    {
        return $this->deposit;
    }

    /**
     * Sets a new deposit
     *
     * Information on the requirements and policies regarding deposits that may be
     * required for the rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType $deposit
     * @return self
     */
    public function setDeposit(\Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType $deposit)
    {
        $this->deposit = $deposit;

        return $this;
    }

    /**
     * Gets as guarantee
     *
     * Information on the requirements and policies regarding guarantees that may be
     * required for the rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * Information on the requirements and policies regarding guarantees that may be
     * required for the rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $guarantee
     * @return self
     */
    public function setGuarantee(\Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType $guarantee)
    {
        $this->guarantee = $guarantee;

        return $this;
    }

    /**
     * Gets as prePayment
     *
     * Information on the requirements and policies regarding pre-payments that may be
     * required for the rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     */
    public function getPrePayment()
    {
        return $this->prePayment;
    }

    /**
     * Sets a new prePayment
     *
     * Information on the requirements and policies regarding pre-payments that may be
     * required for the rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType
     * $prePayment
     * @return self
     */
    public function setPrePayment(\Davispeixoto\OpenTravelAlliance\AcceptablePaymentCardsInfoType $prePayment)
    {
        $this->prePayment = $prePayment;

        return $this;
    }

    /**
     * Gets as paymentOptionsInfo
     *
     * General information on other restrictions associated with the payment of a
     * rental.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getPaymentOptionsInfo()
    {
        return $this->paymentOptionsInfo;
    }

    /**
     * Sets a new paymentOptionsInfo
     *
     * General information on other restrictions associated with the payment of a
     * rental.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $paymentOptionsInfo
     * @return self
     */
    public function setPaymentOptionsInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $paymentOptionsInfo)
    {
        $this->paymentOptionsInfo = $paymentOptionsInfo;

        return $this;
    }


}

