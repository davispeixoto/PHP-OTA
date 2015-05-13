<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType;

/**
 * Class representing MethodInfoAType
 */
class MethodInfoAType
{

    /**
     * Indicates charges to be billed to the master account.
     *
     * @property string $billingType
     */
    private $billingType = null;

    /**
     * Food and beverage billed to master account. If false, guest pays own.
     *  false
     *
     * @property boolean $signFoodAndBev
     */
    private $signFoodAndBev = null;

    /**
     * This is used to indicate the method by which reservations are to be received.
     * Refer to OpenTravel Code List Reservation Method Code (RMC).
     *
     * @property string $reservationMethodCode
     */
    private $reservationMethodCode = null;

    /**
     * Gets as billingType
     *
     * Indicates charges to be billed to the master account.
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->billingType;
    }

    /**
     * Sets a new billingType
     *
     * Indicates charges to be billed to the master account.
     *
     * @param string $billingType
     * @return self
     */
    public function setBillingType($billingType)
    {
        $this->billingType = $billingType;

        return $this;
    }

    /**
     * Gets as signFoodAndBev
     *
     * Food and beverage billed to master account. If false, guest pays own.
     *  false
     *
     * @return boolean
     */
    public function getSignFoodAndBev()
    {
        return $this->signFoodAndBev;
    }

    /**
     * Sets a new signFoodAndBev
     *
     * Food and beverage billed to master account. If false, guest pays own.
     *  false
     *
     * @param boolean $signFoodAndBev
     * @return self
     */
    public function setSignFoodAndBev($signFoodAndBev)
    {
        $this->signFoodAndBev = $signFoodAndBev;

        return $this;
    }

    /**
     * Gets as reservationMethodCode
     *
     * This is used to indicate the method by which reservations are to be received.
     * Refer to OpenTravel Code List Reservation Method Code (RMC).
     *
     * @return string
     */
    public function getReservationMethodCode()
    {
        return $this->reservationMethodCode;
    }

    /**
     * Sets a new reservationMethodCode
     *
     * This is used to indicate the method by which reservations are to be received.
     * Refer to OpenTravel Code List Reservation Method Code (RMC).
     *
     * @param string $reservationMethodCode
     * @return self
     */
    public function setReservationMethodCode($reservationMethodCode)
    {
        $this->reservationMethodCode = $reservationMethodCode;

        return $this;
    }


}

