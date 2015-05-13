<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailBookRQ;

/**
 * Class representing RailBookInfoAType
 */
class RailBookInfoAType
{

    /**
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType[]
     * $originDestination
     */
    private $originDestination = null;

    /**
     * Information of passenger(s) for a reservation
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\PassengerInfoAType[]
     * $passengerInfo
     */
    private $passengerInfo = null;

    /**
     * Indicates the type of fares of interest to the customer, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * Information on the fulfillment of the ticket, e.g. the party that will be
     * issuing the ticket.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment
     */
    private $fulfillment = null;

    /**
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $paymentForm
     */
    private $paymentForm = null;

    /**
     * Adds as originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType
     * $originDestination
     */
    public function addToOriginDestination(
        \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType $originDestination
    ) {
        $this->originDestination[] = $originDestination;

        return $this;
    }

    /**
     * isset originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestination($index)
    {
        return isset($this->originDestination[$index]);
    }

    /**
     * unset originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestination($index)
    {
        unset($this->originDestination[$index]);
    }

    /**
     * Gets as originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType[]
     */
    public function getOriginDestination()
    {
        return $this->originDestination;
    }

    /**
     * Sets a new originDestination
     *
     * Details about one specific journey between this origin and destination location.
     * This element will be repeated for each journey. For example, for a round-trip
     * reservation, this element will occur two times.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType[]
     * $originDestination
     * @return self
     */
    public function setOriginDestination(array $originDestination)
    {
        $this->originDestination = $originDestination;

        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Information of passenger(s) for a reservation
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\PassengerInfoAType
     * $passengerInfo
     */
    public function addToPassengerInfo(
        \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\PassengerInfoAType $passengerInfo
    ) {
        $this->passengerInfo[] = $passengerInfo;

        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Information of passenger(s) for a reservation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerInfo($index)
    {
        return isset($this->passengerInfo[$index]);
    }

    /**
     * unset passengerInfo
     *
     * Information of passenger(s) for a reservation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerInfo($index)
    {
        unset($this->passengerInfo[$index]);
    }

    /**
     * Gets as passengerInfo
     *
     * Information of passenger(s) for a reservation
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\PassengerInfoAType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Information of passenger(s) for a reservation
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\PassengerInfoAType[]
     * $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;

        return $this;
    }

    /**
     * Gets as rateQualifier
     *
     * Indicates the type of fares of interest to the customer, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Indicates the type of fares of interest to the customer, along with any discount
     * number or promotional codes that may affect the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier
     * @return self
     */
    public function setRateQualifier(\Davispeixoto\OpenTravelAlliance\RailRateQualifyingType $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as fulfillment
     *
     * Information on the fulfillment of the ticket, e.g. the party that will be
     * issuing the ticket.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * Sets a new fulfillment
     *
     * Information on the fulfillment of the ticket, e.g. the party that will be
     * issuing the ticket.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment
     * @return self
     */
    public function setFulfillment(\Davispeixoto\OpenTravelAlliance\CompanyNameType $fulfillment)
    {
        $this->fulfillment = $fulfillment;

        return $this;
    }

    /**
     * Adds as paymentForm
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentForm
     */
    public function addToPaymentForm(\Davispeixoto\OpenTravelAlliance\PaymentFormType $paymentForm)
    {
        $this->paymentForm[] = $paymentForm;

        return $this;
    }

    /**
     * isset paymentForm
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPaymentForm($index)
    {
        return isset($this->paymentForm[$index]);
    }

    /**
     * unset paymentForm
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPaymentForm($index)
    {
        unset($this->paymentForm[$index]);
    }

    /**
     * Gets as paymentForm
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PaymentFormType[]
     */
    public function getPaymentForm()
    {
        return $this->paymentForm;
    }

    /**
     * Sets a new paymentForm
     *
     * Information of the form(s) of payment to be used to pay for this reservation.
     * The element repeats to allow for multiple forms of payment to be used, if so
     * required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PaymentFormType[] $paymentForm
     * @return self
     */
    public function setPaymentForm(array $paymentForm)
    {
        $this->paymentForm = $paymentForm;

        return $this;
    }


}

