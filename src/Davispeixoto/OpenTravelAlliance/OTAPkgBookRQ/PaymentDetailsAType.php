<?php

namespace Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ;

/**
 * Class representing PaymentDetailsAType
 */
class PaymentDetailsAType
{

    /**
     * Details of a payment
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ\PaymentDetailsAType\PaymentDetailAType[]
     * $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Adds as paymentDetail
     *
     * Details of a payment
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ\PaymentDetailsAType\PaymentDetailAType
     * $paymentDetail
     */
    public function addToPaymentDetail(
        \Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ\PaymentDetailsAType\PaymentDetailAType $paymentDetail
    ) {
        $this->paymentDetail[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetail
     *
     * Details of a payment
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
     * Details of a payment
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
     * Details of a payment
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ\PaymentDetailsAType\PaymentDetailAType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Details of a payment
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAPkgBookRQ\PaymentDetailsAType\PaymentDetailAType[]
     * $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }


}

