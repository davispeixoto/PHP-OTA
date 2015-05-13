<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundBookRQ;

/**
 * Class representing GroundReservationAType
 */
class GroundReservationAType
{

    /**
     * Pickup, interim stops and drop-off details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $location
     */
    private $location = null;

    /**
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passenger
     */
    private $passenger = null;

    /**
     * Private service information. Exclusive use of vehicle (e.g. Limo or Black Car).
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $service
     */
    private $service = null;

    /**
     * Shuttle reservation information. Shared use of a vehicle where you are
     * purchasing an individual fare or a seat (e.g. Bus, super shuttle)
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundShuttleResType $shuttle
     */
    private $shuttle = null;

    /**
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGroundBookRQ\GroundReservationAType\RateQualifierAType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Payment(s) associated with this ground transportation reservation request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payments
     */
    private $payments = null;

    /**
     * A reference ID that was returned in a prior availability response message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $reference
     */
    private $reference = null;

    /**
     * Gets as location
     *
     * Pickup, interim stops and drop-off details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationsType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * Pickup, interim stops and drop-off details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\GroundLocationsType $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as passenger
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
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
     * @param \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passenger
     * @return self
     */
    public function setPassenger(\Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType $passenger)
    {
        $this->passenger = $passenger;

        return $this;
    }

    /**
     * Gets as service
     *
     * Private service information. Exclusive use of vehicle (e.g. Limo or Black Car).
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Sets a new service
     *
     * Private service information. Exclusive use of vehicle (e.g. Limo or Black Car).
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $service
     * @return self
     */
    public function setService(\Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Gets as shuttle
     *
     * Shuttle reservation information. Shared use of a vehicle where you are
     * purchasing an individual fare or a seat (e.g. Bus, super shuttle)
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundShuttleResType
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Shuttle reservation information. Shared use of a vehicle where you are
     * purchasing an individual fare or a seat (e.g. Bus, super shuttle)
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundShuttleResType $shuttle
     * @return self
     */
    public function setShuttle(\Davispeixoto\OpenTravelAlliance\GroundShuttleResType $shuttle)
    {
        $this->shuttle = $shuttle;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Rate qualifier and promotions that apply to this reservation.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGroundBookRQ\GroundReservationAType\RateQualifierAType
     * $rateQualifier
     */
    public function addToRateQualifier(
        \Davispeixoto\OpenTravelAlliance\OTAGroundBookRQ\GroundReservationAType\RateQualifierAType $rateQualifier
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
     * \Davispeixoto\OpenTravelAlliance\OTAGroundBookRQ\GroundReservationAType\RateQualifierAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTAGroundBookRQ\GroundReservationAType\RateQualifierAType[]
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
     * Payment(s) associated with this ground transportation reservation request.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $payment
     */
    public function addToPayments(\Davispeixoto\OpenTravelAlliance\PaymentFormType $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * isset payments
     *
     * Payment(s) associated with this ground transportation reservation request.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPayments($index)
    {
        return isset($this->payments[$index]);
    }

    /**
     * unset payments
     *
     * Payment(s) associated with this ground transportation reservation request.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPayments($index)
    {
        unset($this->payments[$index]);
    }

    /**
     * Gets as payments
     *
     * Payment(s) associated with this ground transportation reservation request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * Sets a new payments
     *
     * Payment(s) associated with this ground transportation reservation request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payments
     * @return self
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;

        return $this;
    }

    /**
     * Gets as reference
     *
     * A reference ID that was returned in a prior availability response message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * A reference ID that was returned in a prior availability response message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $reference
     * @return self
     */
    public function setReference(\Davispeixoto\OpenTravelAlliance\UniqueIDType $reference)
    {
        $this->reference = $reference;

        return $this;
    }


}

