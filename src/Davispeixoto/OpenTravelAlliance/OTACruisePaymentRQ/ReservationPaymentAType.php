<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ;

/**
 * Class representing ReservationPaymentAType
 */
class ReservationPaymentAType
{

    /**
     * Specifies the reservation control information or the guest's booking ID.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ\ReservationPaymentAType\ReservationIDAType
     * $reservationID
     */
    private $reservationID = null;

    /**
     * Payment details for the reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $paymentDetail
     */
    private $paymentDetail = null;

    /**
     * Gets as reservationID
     *
     * Specifies the reservation control information or the guest's booking ID.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ\ReservationPaymentAType\ReservationIDAType
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
     * \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ\ReservationPaymentAType\ReservationIDAType
     * $reservationID
     * @return self
     */
    public function setReservationID(
        \Davispeixoto\OpenTravelAlliance\OTACruisePaymentRQ\ReservationPaymentAType\ReservationIDAType $reservationID
    ) {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Adds as paymentDetail
     *
     * Payment details for the reservation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail
     */
    public function addToPaymentDetail(\Davispeixoto\OpenTravelAlliance\PaymentDetailType $paymentDetail)
    {
        $this->paymentDetail[] = $paymentDetail;

        return $this;
    }

    /**
     * isset paymentDetail
     *
     * Payment details for the reservation.
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
     * Payment details for the reservation.
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
     * Payment details for the reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentDetailType[]
     */
    public function getPaymentDetail()
    {
        return $this->paymentDetail;
    }

    /**
     * Sets a new paymentDetail
     *
     * Payment details for the reservation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentDetailType[] $paymentDetail
     * @return self
     */
    public function setPaymentDetail(array $paymentDetail)
    {
        $this->paymentDetail = $paymentDetail;

        return $this;
    }


}

