<?php

namespace Davispeixoto\OpenTravelAlliance\FulfillmentType;

/**
 * Class representing PaymentDetailsAType
 */
class PaymentDetailsAType
{

    /**
     * Form of payment details for the requested booking. It is possible to use
     * multiple forms of payment for one transaction, therefore this element may be
     * used more than once.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     * $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Adds as paymentDetail
     *
     * Form of payment details for the requested booking. It is possible to use
     * multiple forms of payment for one transaction, therefore this element may be
     * used more than once.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType
     * $paymentDetail
     */
    public function addToPaymentDetail(
        \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType $paymentDetail
    ) {
        $this->paymentDetail[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetail
     *
     * Form of payment details for the requested booking. It is possible to use
     * multiple forms of payment for one transaction, therefore this element may be
     * used more than once.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentDetail($index)
    {
        return isset($this->paymentDetail[$index]);
    }

    /**
     * unset paymentDetail
     *
     * Form of payment details for the requested booking. It is possible to use
     * multiple forms of payment for one transaction, therefore this element may be
     * used more than once.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentDetail($index)
    {
        unset($this->paymentDetail[$index]);
    }

    /**
     * Gets as paymentDetail
     *
     * Form of payment details for the requested booking. It is possible to use
     * multiple forms of payment for one transaction, therefore this element may be
     * used more than once.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Form of payment details for the requested booking. It is possible to use
     * multiple forms of payment for one transaction, therefore this element may be
     * used more than once.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\FulfillmentType\PaymentDetailsAType\PaymentDetailAType[]
     * $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }


}

