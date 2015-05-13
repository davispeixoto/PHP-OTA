<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CruiseBookingInfoType
 *
 * Contains pricing and payment information for the booking.
 * XSD Type: CruiseBookingInfoType
 */
class CruiseBookingInfoType
{

    /**
     * Specifies the booking prices for the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType[]
     * $bookingPrices
     */
    private $bookingPrices = null;

    /**
     * Specifies the payment schedule information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType[]
     * $paymentSchedule
     */
    private $paymentSchedule = null;

    /**
     * Specifies the guest level price information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType[]
     * $guestPrices
     */
    private $guestPrices = null;

    /**
     * May be used to provide price policy information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType[] $policyInfo
     */
    private $policyInfo = null;

    /**
     * Adds as bookingPrice
     *
     * Specifies the booking prices for the booking.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType
     * $bookingPrice
     */
    public function addToBookingPrices(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType $bookingPrice
    ) {
        $this->bookingPrices[] = $bookingPrice;

        return $this;
    }

    /**
     * isset bookingPrices
     *
     * Specifies the booking prices for the booking.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBookingPrices($index)
    {
        return isset($this->bookingPrices[$index]);
    }

    /**
     * unset bookingPrices
     *
     * Specifies the booking prices for the booking.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBookingPrices($index)
    {
        unset($this->bookingPrices[$index]);
    }

    /**
     * Gets as bookingPrices
     *
     * Specifies the booking prices for the booking.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType[]
     */
    public function getBookingPrices()
    {
        return $this->bookingPrices;
    }

    /**
     * Sets a new bookingPrices
     *
     * Specifies the booking prices for the booking.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\BookingPricesAType\BookingPriceAType[]
     * $bookingPrices
     * @return self
     */
    public function setBookingPrices(array $bookingPrices)
    {
        $this->bookingPrices = $bookingPrices;

        return $this;
    }

    /**
     * Adds as payment
     *
     * Specifies the payment schedule information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType
     * $payment
     */
    public function addToPaymentSchedule(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType $payment
    ) {
        $this->paymentSchedule[] = $payment;

        return $this;
    }

    /**
     * isset paymentSchedule
     *
     * Specifies the payment schedule information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentSchedule($index)
    {
        return isset($this->paymentSchedule[$index]);
    }

    /**
     * unset paymentSchedule
     *
     * Specifies the payment schedule information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentSchedule($index)
    {
        unset($this->paymentSchedule[$index]);
    }

    /**
     * Gets as paymentSchedule
     *
     * Specifies the payment schedule information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType[]
     */
    public function getPaymentSchedule()
    {
        return $this->paymentSchedule;
    }

    /**
     * Sets a new paymentSchedule
     *
     * Specifies the payment schedule information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\PaymentScheduleAType\PaymentAType[]
     * $paymentSchedule
     * @return self
     */
    public function setPaymentSchedule(array $paymentSchedule)
    {
        $this->paymentSchedule = $paymentSchedule;

        return $this;
    }

    /**
     * Adds as guestPrice
     *
     * Specifies the guest level price information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType
     * $guestPrice
     */
    public function addToGuestPrices(
        \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType $guestPrice
    ) {
        $this->guestPrices[] = $guestPrice;

        return $this;
    }

    /**
     * isset guestPrices
     *
     * Specifies the guest level price information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestPrices($index)
    {
        return isset($this->guestPrices[$index]);
    }

    /**
     * unset guestPrices
     *
     * Specifies the guest level price information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestPrices($index)
    {
        unset($this->guestPrices[$index]);
    }

    /**
     * Gets as guestPrices
     *
     * Specifies the guest level price information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType[]
     */
    public function getGuestPrices()
    {
        return $this->guestPrices;
    }

    /**
     * Sets a new guestPrices
     *
     * Specifies the guest level price information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\CruiseBookingInfoType\GuestPricesAType\GuestPriceAType[]
     * $guestPrices
     * @return self
     */
    public function setGuestPrices(array $guestPrices)
    {
        $this->guestPrices = $guestPrices;

        return $this;
    }

    /**
     * Adds as policyInfo
     *
     * May be used to provide price policy information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $policyInfo
     */
    public function addToPolicyInfo(\Davispeixoto\OpenTravelAlliance\ParagraphType $policyInfo)
    {
        $this->policyInfo[] = $policyInfo;

        return $this;
    }

    /**
     * isset policyInfo
     *
     * May be used to provide price policy information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicyInfo($index)
    {
        return isset($this->policyInfo[$index]);
    }

    /**
     * unset policyInfo
     *
     * May be used to provide price policy information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicyInfo($index)
    {
        unset($this->policyInfo[$index]);
    }

    /**
     * Gets as policyInfo
     *
     * May be used to provide price policy information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType[]
     */
    public function getPolicyInfo()
    {
        return $this->policyInfo;
    }

    /**
     * Sets a new policyInfo
     *
     * May be used to provide price policy information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType[] $policyInfo
     * @return self
     */
    public function setPolicyInfo(array $policyInfo)
    {
        $this->policyInfo = $policyInfo;

        return $this;
    }


}

