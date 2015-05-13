<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGroundCancelRS\ReservationAType;

/**
 * Class representing ReservationInfoAType
 */
class ReservationInfoAType
{

    /**
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $referenceID
     */
    private $referenceID = null;

    /**
     * Pickup, interim stops and drop-off details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     */
    private $locations = null;

    /**
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passengers
     */
    private $passengers = null;

    /**
     * Passenger preferences and information, requested and/or required, for this
     * ground transportation service, including service type, disability vehicle, fuel
     * efficient vehicle and other vehicle preferences and services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceInfo
     */
    private $serviceInfo = null;

    /**
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payments
     */
    private $payments = null;

    /**
     * Gets as referenceID
     *
     * A reference ID that was returned in the booking confirmation message and
     * uniquely identifies this reservation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
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
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $referenceID
     * @return self
     */
    public function setReferenceID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $referenceID)
    {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * Gets as locations
     *
     * Pickup, interim stops and drop-off details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundLocationsType
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Sets a new locations
     *
     * Pickup, interim stops and drop-off details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations
     * @return self
     */
    public function setLocations(\Davispeixoto\OpenTravelAlliance\GroundLocationsType $locations)
    {
        $this->locations = $locations;

        return $this;
    }

    /**
     * Gets as passengers
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     */
    public function getPassengers()
    {
        return $this->passengers;
    }

    /**
     * Sets a new passengers
     *
     * Information about a primary passenger (who is the contact for this reservation)
     * and additional passengers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType
     * $passengers
     * @return self
     */
    public function setPassengers(\Davispeixoto\OpenTravelAlliance\GroundPrimaryAdditionalPassengerType $passengers)
    {
        $this->passengers = $passengers;

        return $this;
    }

    /**
     * Gets as serviceInfo
     *
     * Passenger preferences and information, requested and/or required, for this
     * ground transportation service, including service type, disability vehicle, fuel
     * efficient vehicle and other vehicle preferences and services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType
     */
    public function getServiceInfo()
    {
        return $this->serviceInfo;
    }

    /**
     * Sets a new serviceInfo
     *
     * Passenger preferences and information, requested and/or required, for this
     * ground transportation service, including service type, disability vehicle, fuel
     * efficient vehicle and other vehicle preferences and services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceInfo
     * @return self
     */
    public function setServiceInfo(\Davispeixoto\OpenTravelAlliance\GroundServiceDetailType $serviceInfo)
    {
        $this->serviceInfo = $serviceInfo;

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
    public function addToPayments(\Davispeixoto\OpenTravelAlliance\PaymentFormType $payment)
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * isset payments
     *
     * A collection of payments associated with this ground transportation reservation
     * request.
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
     * A collection of payments associated with this ground transportation reservation
     * request.
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
     * A collection of payments associated with this ground transportation reservation
     * request.
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
     * A collection of payments associated with this ground transportation reservation
     * request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $payments
     * @return self
     */
    public function setPayments(array $payments)
    {
        $this->payments = $payments;

        return $this;
    }


}

