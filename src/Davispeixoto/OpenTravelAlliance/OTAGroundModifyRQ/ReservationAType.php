<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ;

/**
 * Class representing ReservationAType
 */
class ReservationAType
{

    /**
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ReferenceIDAType
     * $referenceID
     */
    private $referenceID = null;

    /**
     * Private service information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType
     * $service
     */
    private $service = null;

    /**
     * Shuttle service information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ShuttleAType
     * $shuttle
     */
    private $shuttle = null;

    /**
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType
     * $passenger
     */
    private $passenger = null;

    /**
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\RateQualifierAType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     */
    private $payment = null;

    /**
     * Gets as referenceID
     *
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ReferenceIDAType
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Sets a new referenceID
     *
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ReferenceIDAType
     * $referenceID
     * @return self
     */
    public function setReferenceID(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ReferenceIDAType $referenceID
    ) {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * Gets as service
     *
     * Private service information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Private service information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType
     * $service
     * @return self
     */
    public function setService(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ServiceAType $service
    ) {
        $this->service = $service;

        return $this;
    }

    /**
     * Gets as shuttle
     *
     * Shuttle service information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ShuttleAType
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Shuttle service information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ShuttleAType
     * $shuttle
     * @return self
     */
    public function setShuttle(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\ShuttleAType $shuttle
    ) {
        $this->shuttle = $shuttle;

        return $this;
    }

    /**
     * Gets as passenger
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType
     */
    public function getPassenger()
    {
        return $this->passenger;
    }

    /**
     * Sets a new passenger
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType
     * $passenger
     * @return self
     */
    public function setPassenger(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\PassengerAType $passenger
    ) {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\RateQualifierAType
     * $rateQualifier
     */
    public function addToRateQualifier(
        \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\RateQualifierAType $rateQualifier
    ) {
        $this->rateQualifier[] = $rateQualifier;

        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\RateQualifierAType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundModifyRQ\ReservationAType\RateQualifierAType[]
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Adds as payment
     *
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $payment
     */
    public function addToPayment(\Davispeixoto\OpenTravelAlliance\PaymentFormType $payment)
    {
        $this->payment[] = $payment;

        return $this;
    }

    /**
     * isset payment
     *
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPayment($index)
    {
        return isset($this->payment[$index]);
    }

    /**
     * unset payment
     *
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPayment($index)
    {
        unset($this->payment[$index]);
    }

    /**
     * Gets as payment
     *
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Sets a new payment
     *
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payment
     * @return self
     */
    public function setPayment(array $payment)
    {
        $this->payment = $payment;

        return $this;
    }


}

