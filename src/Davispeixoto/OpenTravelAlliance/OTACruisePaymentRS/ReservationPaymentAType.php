<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS;

/**
 * Class representing ReservationPaymentAType
 */
class ReservationPaymentAType
{

    /**
     * Specifies the reservation control information or the guest's booking ID.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\ReservationIDAType
     * $reservationID
     */
    private $reservationID = null;

    /**
     * The details of the payment applied.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\PaymentDetailAType[]
     * $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Gets as reservationID
     *
     * Specifies the reservation control information or the guest's booking ID.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\ReservationIDAType
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Specifies the reservation control information or the guest's booking ID.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\ReservationIDAType
     * $reservationID
     * @return self
     */
    public function setReservationID(
        \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\ReservationIDAType $reservationID
    ) {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Adds as paymentDetail
     *
     * The details of the payment applied.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\PaymentDetailAType
     * $paymentDetail
     */
    public function addToPaymentDetail(
        \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\PaymentDetailAType $paymentDetail
    ) {
        $this->paymentDetail[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetail
     *
     * The details of the payment applied.
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
     * The details of the payment applied.
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
     * The details of the payment applied.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\PaymentDetailAType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * The details of the payment applied.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRS\ReservationPaymentAType\PaymentDetailAType[]
     * $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }


}

