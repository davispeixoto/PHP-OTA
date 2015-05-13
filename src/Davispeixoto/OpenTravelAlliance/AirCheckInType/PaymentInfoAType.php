<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType;

use Davispeixoto\OpenTravelAlliance\PaymentDetailType;

/**
 * Class representing PaymentInfoAType
 */
class PaymentInfoAType extends PaymentDetailType
{

    /**
     * Specifies payment information that may apply to upgrade data, baggage data,
     * passenger data (e.g., meals, headsets, excess baggage).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentDetailAType[]
     * $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * The total amount paid at time of check in for services or fees not covered in
     * the fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentTotalAType
     * $paymentTotal
     */
    private $paymentTotal = null;

    /**
     * Adds as paymentDetail
     *
     * Specifies payment information that may apply to upgrade data, baggage data,
     * passenger data (e.g., meals, headsets, excess baggage).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentDetailAType
     * $paymentDetail
     */
    public function addToPaymentDetail(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentDetailAType $paymentDetail
    ) {
        $this->paymentDetail[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetail
     *
     * Specifies payment information that may apply to upgrade data, baggage data,
     * passenger data (e.g., meals, headsets, excess baggage).
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
     * Specifies payment information that may apply to upgrade data, baggage data,
     * passenger data (e.g., meals, headsets, excess baggage).
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
     * Specifies payment information that may apply to upgrade data, baggage data,
     * passenger data (e.g., meals, headsets, excess baggage).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentDetailAType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Specifies payment information that may apply to upgrade data, baggage data,
     * passenger data (e.g., meals, headsets, excess baggage).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentDetailAType[]
     * $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }

    /**
     * Gets as paymentTotal
     *
     * The total amount paid at time of check in for services or fees not covered in
     * the fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentTotalAType
     */
    public function getPaymentTotal()
    {
        return $this->paymentTotal;
    }

    /**
     * Sets a new paymentTotal
     *
     * The total amount paid at time of check in for services or fees not covered in
     * the fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentTotalAType
     * $paymentTotal
     * @return self
     */
    public function setPaymentTotal(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType\PaymentTotalAType $paymentTotal
    ) {
        $this->paymentTotal = $paymentTotal;

        return $this;
    }


}

