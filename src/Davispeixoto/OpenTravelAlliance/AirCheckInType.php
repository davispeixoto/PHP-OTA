<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirCheckInType
 *
 * Check-in information to be be used for self-service channels (kiosks, web and
 * mobile). This information will will allow a customer, multiple customers or
 * groups traveling together and employees to check-in for eligible flights.
 * XSD Type: AirCheckInType
 */
class AirCheckInType
{

    /**
     * Point of sale object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirCheckInType\MessageFunctionAType[]
     * $messageFunction
     */
    private $messageFunction = null;

    /**
     * Specifies print information that should be used by the receiver to print various
     * Check-in documents.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType
     * $documentAndPrintInfo
     */
    private $documentAndPrintInfo = null;

    /**
     * Identifies the flight segment(s) to be checked in. The carrier will determine
     * how many segments are eligible for continued flight check in. This information
     * applies to all passengers.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType[]
     * $flightInfo
     */
    private $flightInfo = null;

    /**
     * Specifies information related to the passenger checking in.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType[]
     * $passengerInfo
     */
    private $passengerInfo = null;

    /**
     * Captures information for a specific passenger travelling on a specific flight or
     * segment.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType[]
     * $passengerFlightInfo
     */
    private $passengerFlightInfo = null;

    /**
     * Specifies baggage information for each passenger checking in or the head of a
     * baggage pool.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType[]
     * $baggageInfo
     */
    private $baggageInfo = null;

    /**
     * Captures payment information for services or fees not covered in the fare.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType
     * $paymentInfo
     */
    private $paymentInfo = null;

    /**
     * Merchandising offers associated with the fare or traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     */
    private $offer = null;

    /**
     * Adds as source
     *
     * Point of sale object.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale object.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale object.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale object.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Adds as messageFunction
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\MessageFunctionAType
     * $messageFunction
     */
    public function addToMessageFunction(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\MessageFunctionAType $messageFunction
    ) {
        $this->messageFunction[] = $messageFunction;

        return $this;
    }

    /**
     * isset messageFunction
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMessageFunction($index)
    {
        return isset($this->messageFunction[$index]);
    }

    /**
     * unset messageFunction
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMessageFunction($index)
    {
        unset($this->messageFunction[$index]);
    }

    /**
     * Gets as messageFunction
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirCheckInType\MessageFunctionAType[]
     */
    public function getMessageFunction()
    {
        return $this->messageFunction;
    }

    /**
     * Sets a new messageFunction
     *
     * Specifies the primary function(s) of a particular Check-in message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\MessageFunctionAType[]
     * $messageFunction
     * @return self
     */
    public function setMessageFunction(array $messageFunction)
    {
        $this->messageFunction = $messageFunction;

        return $this;
    }

    /**
     * Gets as documentAndPrintInfo
     *
     * Specifies print information that should be used by the receiver to print various
     * Check-in documents.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType
     */
    public function getDocumentAndPrintInfo()
    {
        return $this->documentAndPrintInfo;
    }

    /**
     * Sets a new documentAndPrintInfo
     *
     * Specifies print information that should be used by the receiver to print various
     * Check-in documents.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType
     * $documentAndPrintInfo
     * @return self
     */
    public function setDocumentAndPrintInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\DocumentAndPrintInfoAType $documentAndPrintInfo
    ) {
        $this->documentAndPrintInfo = $documentAndPrintInfo;

        return $this;
    }

    /**
     * Adds as flightInfo
     *
     * Identifies the flight segment(s) to be checked in. The carrier will determine
     * how many segments are eligible for continued flight check in. This information
     * applies to all passengers.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType
     * $flightInfo
     */
    public function addToFlightInfo(\Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType $flightInfo)
    {
        $this->flightInfo[] = $flightInfo;

        return $this;
    }

    /**
     * isset flightInfo
     *
     * Identifies the flight segment(s) to be checked in. The carrier will determine
     * how many segments are eligible for continued flight check in. This information
     * applies to all passengers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightInfo($index)
    {
        return isset($this->flightInfo[$index]);
    }

    /**
     * unset flightInfo
     *
     * Identifies the flight segment(s) to be checked in. The carrier will determine
     * how many segments are eligible for continued flight check in. This information
     * applies to all passengers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightInfo($index)
    {
        unset($this->flightInfo[$index]);
    }

    /**
     * Gets as flightInfo
     *
     * Identifies the flight segment(s) to be checked in. The carrier will determine
     * how many segments are eligible for continued flight check in. This information
     * applies to all passengers.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType[]
     */
    public function getFlightInfo()
    {
        return $this->flightInfo;
    }

    /**
     * Sets a new flightInfo
     *
     * Identifies the flight segment(s) to be checked in. The carrier will determine
     * how many segments are eligible for continued flight check in. This information
     * applies to all passengers.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType[]
     * $flightInfo
     * @return self
     */
    public function setFlightInfo(array $flightInfo)
    {
        $this->flightInfo = $flightInfo;

        return $this;
    }

    /**
     * Adds as passengerInfo
     *
     * Specifies information related to the passenger checking in.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType
     * $passengerInfo
     */
    public function addToPassengerInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType $passengerInfo
    ) {
        $this->passengerInfo[] = $passengerInfo;

        return $this;
    }

    /**
     * isset passengerInfo
     *
     * Specifies information related to the passenger checking in.
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
     * Specifies information related to the passenger checking in.
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
     * Specifies information related to the passenger checking in.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType[]
     */
    public function getPassengerInfo()
    {
        return $this->passengerInfo;
    }

    /**
     * Sets a new passengerInfo
     *
     * Specifies information related to the passenger checking in.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerInfoAType[]
     * $passengerInfo
     * @return self
     */
    public function setPassengerInfo(array $passengerInfo)
    {
        $this->passengerInfo = $passengerInfo;

        return $this;
    }

    /**
     * Adds as passengerFlightInfo
     *
     * Captures information for a specific passenger travelling on a specific flight or
     * segment.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType
     * $passengerFlightInfo
     */
    public function addToPassengerFlightInfo(
        \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType $passengerFlightInfo
    ) {
        $this->passengerFlightInfo[] = $passengerFlightInfo;

        return $this;
    }

    /**
     * isset passengerFlightInfo
     *
     * Captures information for a specific passenger travelling on a specific flight or
     * segment.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerFlightInfo($index)
    {
        return isset($this->passengerFlightInfo[$index]);
    }

    /**
     * unset passengerFlightInfo
     *
     * Captures information for a specific passenger travelling on a specific flight or
     * segment.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerFlightInfo($index)
    {
        unset($this->passengerFlightInfo[$index]);
    }

    /**
     * Gets as passengerFlightInfo
     *
     * Captures information for a specific passenger travelling on a specific flight or
     * segment.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType[]
     */
    public function getPassengerFlightInfo()
    {
        return $this->passengerFlightInfo;
    }

    /**
     * Sets a new passengerFlightInfo
     *
     * Captures information for a specific passenger travelling on a specific flight or
     * segment.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\AirCheckInType\PassengerFlightInfoAType[]
     * $passengerFlightInfo
     * @return self
     */
    public function setPassengerFlightInfo(array $passengerFlightInfo)
    {
        $this->passengerFlightInfo = $passengerFlightInfo;

        return $this;
    }

    /**
     * Adds as baggageInfo
     *
     * Specifies baggage information for each passenger checking in or the head of a
     * baggage pool.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType
     * $baggageInfo
     */
    public function addToBaggageInfo(\Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType $baggageInfo)
    {
        $this->baggageInfo[] = $baggageInfo;

        return $this;
    }

    /**
     * isset baggageInfo
     *
     * Specifies baggage information for each passenger checking in or the head of a
     * baggage pool.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBaggageInfo($index)
    {
        return isset($this->baggageInfo[$index]);
    }

    /**
     * unset baggageInfo
     *
     * Specifies baggage information for each passenger checking in or the head of a
     * baggage pool.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBaggageInfo($index)
    {
        unset($this->baggageInfo[$index]);
    }

    /**
     * Gets as baggageInfo
     *
     * Specifies baggage information for each passenger checking in or the head of a
     * baggage pool.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType[]
     */
    public function getBaggageInfo()
    {
        return $this->baggageInfo;
    }

    /**
     * Sets a new baggageInfo
     *
     * Specifies baggage information for each passenger checking in or the head of a
     * baggage pool.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\BaggageInfoAType[]
     * $baggageInfo
     * @return self
     */
    public function setBaggageInfo(array $baggageInfo)
    {
        $this->baggageInfo = $baggageInfo;

        return $this;
    }

    /**
     * Gets as paymentInfo
     *
     * Captures payment information for services or fees not covered in the fare.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType
     */
    public function getPaymentInfo()
    {
        return $this->paymentInfo;
    }

    /**
     * Sets a new paymentInfo
     *
     * Captures payment information for services or fees not covered in the fare.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType
     * $paymentInfo
     * @return self
     */
    public function setPaymentInfo(\Davispeixoto\OpenTravelAlliance\AirCheckInType\PaymentInfoAType $paymentInfo)
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }

    /**
     * Gets as offer
     *
     * Merchandising offers associated with the fare or traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Sets a new offer
     *
     * Merchandising offers associated with the fare or traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer
     * @return self
     */
    public function setOffer(\Davispeixoto\OpenTravelAlliance\AirOfferChoiceType $offer)
    {
        $this->offer = $offer;

        return $this;
    }


}

