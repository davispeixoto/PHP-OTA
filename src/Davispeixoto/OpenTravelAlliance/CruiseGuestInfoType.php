<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CruiseGuestInfoType
 *
 * Contains guest information for the specified sailing.
 * XSD Type: CruiseGuestInfoType
 */
class CruiseGuestInfoType
{

    /**
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ReservationIDType[] $reservationID
     */
    private $reservationID = null;

    /**
     * Specifies the guests' information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType[] $guestDetails
     */
    private $guestDetails = null;

    /**
     * Collection of linked bookings.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType[]
     * $linkedBookings
     */
    private $linkedBookings = null;

    /**
     * Collection of payment choices.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType[]
     * $paymentOptions
     */
    private $paymentOptions = null;

    /**
     * Penalty information for cancelling a reservation.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\CancellationPenaltyAType
     * $cancellationPenalty
     */
    private $cancellationPenalty = null;

    /**
     * Adds as reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID
     */
    public function addToReservationID(\Davispeixoto\OpenTravelAlliance\ReservationIDType $reservationID)
    {
        $this->reservationID[] = $reservationID;

        return $this;
    }

    /**
     * isset reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReservationID($index)
    {
        return isset($this->reservationID[$index]);
    }

    /**
     * unset reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReservationID($index)
    {
        unset($this->reservationID[$index]);
    }

    /**
     * Gets as reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ReservationIDType[]
     */
    public function getReservationID()
    {
        return $this->reservationID;
    }

    /**
     * Sets a new reservationID
     *
     * Specifies the reservation control information or the guest's booking ID in
     * modification mode (e.g. PNR Record Locator and/or Vendor Confirmation Number).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ReservationIDType[] $reservationID
     * @return self
     */
    public function setReservationID(array $reservationID)
    {
        $this->reservationID = $reservationID;

        return $this;
    }

    /**
     * Adds as guestDetail
     *
     * Specifies the guests' information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType $guestDetail
     */
    public function addToGuestDetails(\Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType $guestDetail)
    {
        $this->guestDetails[] = $guestDetail;

        return $this;
    }

    /**
     * isset guestDetails
     *
     * Specifies the guests' information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestDetails($index)
    {
        return isset($this->guestDetails[$index]);
    }

    /**
     * unset guestDetails
     *
     * Specifies the guests' information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestDetails($index)
    {
        unset($this->guestDetails[$index]);
    }

    /**
     * Gets as guestDetails
     *
     * Specifies the guests' information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType[]
     */
    public function getGuestDetails()
    {
        return $this->guestDetails;
    }

    /**
     * Sets a new guestDetails
     *
     * Specifies the guests' information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType[] $guestDetails
     * @return self
     */
    public function setGuestDetails(array $guestDetails)
    {
        $this->guestDetails = $guestDetails;

        return $this;
    }

    /**
     * Adds as linkedBooking
     *
     * Collection of linked bookings.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType
     * $linkedBooking
     */
    public function addToLinkedBookings(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType $linkedBooking
    ) {
        $this->linkedBookings[] = $linkedBooking;

        return $this;
    }

    /**
     * isset linkedBookings
     *
     * Collection of linked bookings.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLinkedBookings($index)
    {
        return isset($this->linkedBookings[$index]);
    }

    /**
     * unset linkedBookings
     *
     * Collection of linked bookings.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLinkedBookings($index)
    {
        unset($this->linkedBookings[$index]);
    }

    /**
     * Gets as linkedBookings
     *
     * Collection of linked bookings.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType[]
     */
    public function getLinkedBookings()
    {
        return $this->linkedBookings;
    }

    /**
     * Sets a new linkedBookings
     *
     * Collection of linked bookings.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\LinkedBookingsAType\LinkedBookingAType[]
     * $linkedBookings
     * @return self
     */
    public function setLinkedBookings(array $linkedBookings)
    {
        $this->linkedBookings = $linkedBookings;

        return $this;
    }

    /**
     * Adds as paymentOption
     *
     * Collection of payment choices.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType
     * $paymentOption
     */
    public function addToPaymentOptions(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType $paymentOption
    ) {
        $this->paymentOptions[] = $paymentOption;

        return $this;
    }

    /**
     * isset paymentOptions
     *
     * Collection of payment choices.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentOptions($index)
    {
        return isset($this->paymentOptions[$index]);
    }

    /**
     * unset paymentOptions
     *
     * Collection of payment choices.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentOptions($index)
    {
        unset($this->paymentOptions[$index]);
    }

    /**
     * Gets as paymentOptions
     *
     * Collection of payment choices.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType[]
     */
    public function getPaymentOptions()
    {
        return $this->paymentOptions;
    }

    /**
     * Sets a new paymentOptions
     *
     * Collection of payment choices.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\PaymentOptionsAType\PaymentOptionAType[]
     * $paymentOptions
     * @return self
     */
    public function setPaymentOptions(array $paymentOptions)
    {
        $this->paymentOptions = $paymentOptions;

        return $this;
    }

    /**
     * Gets as cancellationPenalty
     *
     * Penalty information for cancelling a reservation.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\CancellationPenaltyAType
     */
    public function getCancellationPenalty()
    {
        return $this->cancellationPenalty;
    }

    /**
     * Sets a new cancellationPenalty
     *
     * Penalty information for cancelling a reservation.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\CancellationPenaltyAType
     * $cancellationPenalty
     * @return self
     */
    public function setCancellationPenalty(
        \Davispeixoto\OpenTravelAlliance\CruiseGuestInfoType\CancellationPenaltyAType $cancellationPenalty
    ) {
        $this->cancellationPenalty = $cancellationPenalty;

        return $this;
    }


}

