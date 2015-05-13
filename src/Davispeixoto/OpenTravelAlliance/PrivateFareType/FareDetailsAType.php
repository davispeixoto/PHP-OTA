<?php

namespace Davispeixoto\OpenTravelAlliance\PrivateFareType;

/**
 * Class representing FareDetailsAType
 */
class FareDetailsAType
{

    /**
     * Fare basis code.Example: HL7LNR
     *
     * @property string $fareBasisCode
     */
    private $fareBasisCode = null;

    /**
     * Fare description.Example: ORLLAS-AA
     *
     * @property string $fareDescription
     */
    private $fareDescription = null;

    /**
     * Fare type.Example: NLX
     *
     * @property string $fareType
     */
    private $fareType = null;

    /**
     * Description: Maximum miles.Example: 2317Note: This is the maximum mileage (in
     * miles) that can be travelled under this fare.
     *
     * @property integer $maxPermittedMileage
     */
    private $maxPermittedMileage = null;

    /**
     * Fare reference.Example: 1Note: This is a reference to a specific FareInfo item
     * between an air modification request and the existing air reservation.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Fare rule global direction.Example: AP
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListGlobalIndicatorType
     * $globalIndicatorCode
     */
    private $globalIndicatorCode = null;

    /**
     * Required modification type.Example: Create/Add
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListDataActionType $operation
     */
    private $operation = null;

    /**
     * Fare status.Example: Published
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListFareStatusType $fareStatus
     */
    private $fareStatus = null;

    /**
     * Trip type.Example: OneWay
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListAirTripType $tripType
     */
    private $tripType = null;

    /**
     * Date information applicable to the fare.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\DateAType[]
     * $date
     */
    private $date = null;

    /**
     * Fare amounts.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\FareAType
     * $fare
     */
    private $fare = null;

    /**
     * Passenger type codes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\PassengerTypeAType[]
     * $passengerType
     */
    private $passengerType = null;

    /**
     * Gets as fareBasisCode
     *
     * Fare basis code.Example: HL7LNR
     *
     * @return string
     */
    public function getFareBasisCode()
    {
        return $this->fareBasisCode;
    }

    /**
     * Sets a new fareBasisCode
     *
     * Fare basis code.Example: HL7LNR
     *
     * @param string $fareBasisCode
     * @return self
     */
    public function setFareBasisCode($fareBasisCode)
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Gets as fareDescription
     *
     * Fare description.Example: ORLLAS-AA
     *
     * @return string
     */
    public function getFareDescription()
    {
        return $this->fareDescription;
    }

    /**
     * Sets a new fareDescription
     *
     * Fare description.Example: ORLLAS-AA
     *
     * @param string $fareDescription
     * @return self
     */
    public function setFareDescription($fareDescription)
    {
        $this->fareDescription = $fareDescription;

        return $this;
    }

    /**
     * Gets as fareType
     *
     * Fare type.Example: NLX
     *
     * @return string
     */
    public function getFareType()
    {
        return $this->fareType;
    }

    /**
     * Sets a new fareType
     *
     * Fare type.Example: NLX
     *
     * @param string $fareType
     * @return self
     */
    public function setFareType($fareType)
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * Gets as maxPermittedMileage
     *
     * Description: Maximum miles.Example: 2317Note: This is the maximum mileage (in
     * miles) that can be travelled under this fare.
     *
     * @return integer
     */
    public function getMaxPermittedMileage()
    {
        return $this->maxPermittedMileage;
    }

    /**
     * Sets a new maxPermittedMileage
     *
     * Description: Maximum miles.Example: 2317Note: This is the maximum mileage (in
     * miles) that can be travelled under this fare.
     *
     * @param integer $maxPermittedMileage
     * @return self
     */
    public function setMaxPermittedMileage($maxPermittedMileage)
    {
        $this->maxPermittedMileage = $maxPermittedMileage;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Fare reference.Example: 1Note: This is a reference to a specific FareInfo item
     * between an air modification request and the existing air reservation.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Fare reference.Example: 1Note: This is a reference to a specific FareInfo item
     * between an air modification request and the existing air reservation.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as globalIndicatorCode
     *
     * Fare rule global direction.Example: AP
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListGlobalIndicatorType
     */
    public function getGlobalIndicatorCode()
    {
        return $this->globalIndicatorCode;
    }

    /**
     * Sets a new globalIndicatorCode
     *
     * Fare rule global direction.Example: AP
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListGlobalIndicatorType
     * $globalIndicatorCode
     * @return self
     */
    public function setGlobalIndicatorCode(
        \Davispeixoto\OpenTravelAlliance\ListGlobalIndicatorType $globalIndicatorCode
    ) {
        $this->globalIndicatorCode = $globalIndicatorCode;

        return $this;
    }

    /**
     * Gets as operation
     *
     * Required modification type.Example: Create/Add
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListDataActionType
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Sets a new operation
     *
     * Required modification type.Example: Create/Add
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListDataActionType $operation
     * @return self
     */
    public function setOperation(\Davispeixoto\OpenTravelAlliance\ListDataActionType $operation)
    {
        $this->operation = $operation;

        return $this;
    }

    /**
     * Gets as fareStatus
     *
     * Fare status.Example: Published
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListFareStatusType
     */
    public function getFareStatus()
    {
        return $this->fareStatus;
    }

    /**
     * Sets a new fareStatus
     *
     * Fare status.Example: Published
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListFareStatusType $fareStatus
     * @return self
     */
    public function setFareStatus(\Davispeixoto\OpenTravelAlliance\ListFareStatusType $fareStatus)
    {
        $this->fareStatus = $fareStatus;

        return $this;
    }

    /**
     * Gets as tripType
     *
     * Trip type.Example: OneWay
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListAirTripType
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * Trip type.Example: OneWay
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListAirTripType $tripType
     * @return self
     */
    public function setTripType(\Davispeixoto\OpenTravelAlliance\ListAirTripType $tripType)
    {
        $this->tripType = $tripType;

        return $this;
    }

    /**
     * Adds as date
     *
     * Date information applicable to the fare.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\DateAType
     * $date
     */
    public function addToDate(\Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\DateAType $date)
    {
        $this->date[] = $date;

        return $this;
    }

    /**
     * isset date
     *
     * Date information applicable to the fare.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDate($index)
    {
        return isset($this->date[$index]);
    }

    /**
     * unset date
     *
     * Date information applicable to the fare.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDate($index)
    {
        unset($this->date[$index]);
    }

    /**
     * Gets as date
     *
     * Date information applicable to the fare.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\DateAType[]
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * Date information applicable to the fare.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\DateAType[]
     * $date
     * @return self
     */
    public function setDate(array $date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets as fare
     *
     * Fare amounts.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\FareAType
     */
    public function getFare()
    {
        return $this->fare;
    }

    /**
     * Sets a new fare
     *
     * Fare amounts.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\FareAType
     * $fare
     * @return self
     */
    public function setFare(\Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\FareAType $fare)
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Adds as passengerType
     *
     * Passenger type codes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\PassengerTypeAType
     * $passengerType
     */
    public function addToPassengerType(
        \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\PassengerTypeAType $passengerType
    ) {
        $this->passengerType[] = $passengerType;

        return $this;
    }

    /**
     * isset passengerType
     *
     * Passenger type codes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPassengerType($index)
    {
        return isset($this->passengerType[$index]);
    }

    /**
     * unset passengerType
     *
     * Passenger type codes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPassengerType($index)
    {
        unset($this->passengerType[$index]);
    }

    /**
     * Gets as passengerType
     *
     * Passenger type codes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\PassengerTypeAType[]
     */
    public function getPassengerType()
    {
        return $this->passengerType;
    }

    /**
     * Sets a new passengerType
     *
     * Passenger type codes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PrivateFareType\FareDetailsAType\PassengerTypeAType[]
     * $passengerType
     * @return self
     */
    public function setPassengerType(array $passengerType)
    {
        $this->passengerType = $passengerType;

        return $this;
    }


}

