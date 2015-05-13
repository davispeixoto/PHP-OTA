<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PaymentDetailType
 *
 * Details of payment.
 * XSD Type: PaymentDetailType
 */
class PaymentDetailType extends PaymentFormType
{

    /**
     * Used to specify the form of payment. Refer to OpenTravel Code List Payment Type
     * (PMT).
     *
     * @property string $paymentType
     */
    private $paymentType = null;

    /**
     * When true, indicates that more than one form of payment will be used.
     *
     * @property boolean $splitPaymentInd
     */
    private $splitPaymentInd = null;

    /**
     * Number of days being charged to this payment method.
     *
     * @property integer $authorizedDays
     */
    private $authorizedDays = null;

    /**
     * When true, indicates this is the primary method of payment.
     *
     * @property boolean $primaryPaymentInd
     */
    private $primaryPaymentInd = null;

    /**
     * Provides the monetary amount due for payment as quoted. A second instance could
     * show the actual paid amount in a different currency.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PaymentDetailType\PaymentAmountAType[]
     * $paymentAmount
     */
    private $paymentAmount = null;

    /**
     * Used to specify the commission details when paid to a third or internal party.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType $commission
     */
    private $commission = null;

    /**
     * Gets as paymentType
     *
     * Used to specify the form of payment. Refer to OpenTravel Code List Payment Type
     * (PMT).
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * Sets a new paymentType
     *
     * Used to specify the form of payment. Refer to OpenTravel Code List Payment Type
     * (PMT).
     *
     * @param string $paymentType
     * @return self
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;

        return $this;
    }

    /**
     * Gets as splitPaymentInd
     *
     * When true, indicates that more than one form of payment will be used.
     *
     * @return boolean
     */
    public function getSplitPaymentInd()
    {
        return $this->splitPaymentInd;
    }

    /**
     * Sets a new splitPaymentInd
     *
     * When true, indicates that more than one form of payment will be used.
     *
     * @param boolean $splitPaymentInd
     * @return self
     */
    public function setSplitPaymentInd($splitPaymentInd)
    {
        $this->splitPaymentInd = $splitPaymentInd;

        return $this;
    }

    /**
     * Gets as authorizedDays
     *
     * Number of days being charged to this payment method.
     *
     * @return integer
     */
    public function getAuthorizedDays()
    {
        return $this->authorizedDays;
    }

    /**
     * Sets a new authorizedDays
     *
     * Number of days being charged to this payment method.
     *
     * @param integer $authorizedDays
     * @return self
     */
    public function setAuthorizedDays($authorizedDays)
    {
        $this->authorizedDays = $authorizedDays;

        return $this;
    }

    /**
     * Gets as primaryPaymentInd
     *
     * When true, indicates this is the primary method of payment.
     *
     * @return boolean
     */
    public function getPrimaryPaymentInd()
    {
        return $this->primaryPaymentInd;
    }

    /**
     * Sets a new primaryPaymentInd
     *
     * When true, indicates this is the primary method of payment.
     *
     * @param boolean $primaryPaymentInd
     * @return self
     */
    public function setPrimaryPaymentInd($primaryPaymentInd)
    {
        $this->primaryPaymentInd = $primaryPaymentInd;

        return $this;
    }

    /**
     * Adds as paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could
     * show the actual paid amount in a different currency.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType\PaymentAmountAType
     * $paymentAmount
     */
    public function addToPaymentAmount(
        \Davispeixoto\OpenTravelAlliance\PaymentDetailType\PaymentAmountAType $paymentAmount
    ) {
        $this->paymentAmount[] = $paymentAmount;

        return $this;
    }

    /**
     * isset paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could
     * show the actual paid amount in a different currency.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentAmount($index)
    {
        return isset($this->paymentAmount[$index]);
    }

    /**
     * unset paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could
     * show the actual paid amount in a different currency.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentAmount($index)
    {
        unset($this->paymentAmount[$index]);
    }

    /**
     * Gets as paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could
     * show the actual paid amount in a different currency.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType\PaymentAmountAType[]
     */
    public function getPaymentAmount()
    {
        return $this->paymentAmount;
    }

    /**
     * Sets a new paymentAmount
     *
     * Provides the monetary amount due for payment as quoted. A second instance could
     * show the actual paid amount in a different currency.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType\PaymentAmountAType[]
     * $paymentAmount
     * @return self
     */
    public function setPaymentAmount(array $paymentAmount)
    {
        $this->paymentAmount = $paymentAmount;

        return $this;
    }

    /**
     * Gets as commission
     *
     * Used to specify the commission details when paid to a third or internal party.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType
     */
    public function getCommission()
    {
        return $this->commission;
    }

    /**
     * Sets a new commission
     *
     * Used to specify the commission details when paid to a third or internal party.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commission
     * @return self
     */
    public function setCommission(\Davispeixoto\OpenTravelAlliance\CommissionType $commission)
    {
        $this->commission = $commission;

        return $this;
    }


}

