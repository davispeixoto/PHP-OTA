<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType;

/**
 * Class representing FlightLegInfoAType
 */
class FlightLegInfoAType
{

    /**
     * The flight number of the flight.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * The duration of the flight from departure location to destination location.
     *
     * @property \DateInterval $journeyDuration
     */
    private $journeyDuration = null;

    /**
     * The duration of a ground stop.
     *
     * @property \DateInterval $groundDuration
     */
    private $groundDuration = null;

    /**
     * The total duration time of the flight. This is the combination of both
     * JourneyDuration and GroundDuration.
     *
     * @property \DateInterval $accumulatedDuration
     */
    private $accumulatedDuration = null;

    /**
     * Miles aquired per flight segments, usually used for earning of frequent flyer
     * miles.
     *
     * @property integer $legDistance
     */
    private $legDistance = null;

    /**
     * Status of the current flight operation.
     *
     * @property string $flightStatus
     */
    private $flightStatus = null;

    /**
     * Specifies the Department of Transportation on time rate for the flight leg.
     *
     * @property float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * Departure airport for flight leg.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureAirportAType
     * $departureAirport
     */
    private $departureAirport = null;

    /**
     * Arrival point of flight segment. Additional occurrences indicates diversion
     * airports and flag stops.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalAirportAType[]
     * $arrivalAirport
     */
    private $arrivalAirport = null;

    /**
     * The marketing airline.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline
     */
    private $marketingAirline = null;

    /**
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperatingAirlineType
     * $operatingAirline
     */
    private $operatingAirline = null;

    /**
     * The type of equipment used for the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EquipmentType $equipment
     */
    private $equipment = null;

    /**
     * Any special comments on the leg such as travel advisory messages, passenger
     * advisory messages, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\CommentAType[]
     * $comment
     */
    private $comment = null;

    /**
     * Specifies scheduled and other date time information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureDateTimeAType
     * $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Specifies scheduled and other date time information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalDateTimeAType
     * $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * A collection of OperationTimes.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType[]
     * $operationTimes
     */
    private $operationTimes = null;

    /**
     * Gets as flightNumber
     *
     * The flight number of the flight.
     *
     * @return string
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * Sets a new flightNumber
     *
     * The flight number of the flight.
     *
     * @param string $flightNumber
     * @return self
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Gets as journeyDuration
     *
     * The duration of the flight from departure location to destination location.
     *
     * @return \DateInterval
     */
    public function getJourneyDuration()
    {
        return $this->journeyDuration;
    }

    /**
     * Sets a new journeyDuration
     *
     * The duration of the flight from departure location to destination location.
     *
     * @param \DateInterval $journeyDuration
     * @return self
     */
    public function setJourneyDuration(\DateInterval $journeyDuration)
    {
        $this->journeyDuration = $journeyDuration;

        return $this;
    }

    /**
     * Gets as groundDuration
     *
     * The duration of a ground stop.
     *
     * @return \DateInterval
     */
    public function getGroundDuration()
    {
        return $this->groundDuration;
    }

    /**
     * Sets a new groundDuration
     *
     * The duration of a ground stop.
     *
     * @param \DateInterval $groundDuration
     * @return self
     */
    public function setGroundDuration(\DateInterval $groundDuration)
    {
        $this->groundDuration = $groundDuration;

        return $this;
    }

    /**
     * Gets as accumulatedDuration
     *
     * The total duration time of the flight. This is the combination of both
     * JourneyDuration and GroundDuration.
     *
     * @return \DateInterval
     */
    public function getAccumulatedDuration()
    {
        return $this->accumulatedDuration;
    }

    /**
     * Sets a new accumulatedDuration
     *
     * The total duration time of the flight. This is the combination of both
     * JourneyDuration and GroundDuration.
     *
     * @param \DateInterval $accumulatedDuration
     * @return self
     */
    public function setAccumulatedDuration(\DateInterval $accumulatedDuration)
    {
        $this->accumulatedDuration = $accumulatedDuration;

        return $this;
    }

    /**
     * Gets as legDistance
     *
     * Miles aquired per flight segments, usually used for earning of frequent flyer
     * miles.
     *
     * @return integer
     */
    public function getLegDistance()
    {
        return $this->legDistance;
    }

    /**
     * Sets a new legDistance
     *
     * Miles aquired per flight segments, usually used for earning of frequent flyer
     * miles.
     *
     * @param integer $legDistance
     * @return self
     */
    public function setLegDistance($legDistance)
    {
        $this->legDistance = $legDistance;

        return $this;
    }

    /**
     * Gets as flightStatus
     *
     * Status of the current flight operation.
     *
     * @return string
     */
    public function getFlightStatus()
    {
        return $this->flightStatus;
    }

    /**
     * Sets a new flightStatus
     *
     * Status of the current flight operation.
     *
     * @param string $flightStatus
     * @return self
     */
    public function setFlightStatus($flightStatus)
    {
        $this->flightStatus = $flightStatus;

        return $this;
    }

    /**
     * Gets as onTimeRate
     *
     * Specifies the Department of Transportation on time rate for the flight leg.
     *
     * @return float
     */
    public function getOnTimeRate()
    {
        return $this->onTimeRate;
    }

    /**
     * Sets a new onTimeRate
     *
     * Specifies the Department of Transportation on time rate for the flight leg.
     *
     * @param float $onTimeRate
     * @return self
     */
    public function setOnTimeRate($onTimeRate)
    {
        $this->onTimeRate = $onTimeRate;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * Departure airport for flight leg.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureAirportAType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * Departure airport for flight leg.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureAirportAType
     * $departureAirport
     * @return self
     */
    public function setDepartureAirport(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureAirportAType $departureAirport
    ) {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Adds as arrivalAirport
     *
     * Arrival point of flight segment. Additional occurrences indicates diversion
     * airports and flag stops.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalAirportAType
     * $arrivalAirport
     */
    public function addToArrivalAirport(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalAirportAType $arrivalAirport
    ) {
        $this->arrivalAirport[] = $arrivalAirport;

        return $this;
    }

    /**
     * isset arrivalAirport
     *
     * Arrival point of flight segment. Additional occurrences indicates diversion
     * airports and flag stops.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetArrivalAirport($index)
    {
        return isset($this->arrivalAirport[$index]);
    }

    /**
     * unset arrivalAirport
     *
     * Arrival point of flight segment. Additional occurrences indicates diversion
     * airports and flag stops.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetArrivalAirport($index)
    {
        unset($this->arrivalAirport[$index]);
    }

    /**
     * Gets as arrivalAirport
     *
     * Arrival point of flight segment. Additional occurrences indicates diversion
     * airports and flag stops.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalAirportAType[]
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * Arrival point of flight segment. Additional occurrences indicates diversion
     * airports and flag stops.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalAirportAType[]
     * $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(array $arrivalAirport)
    {
        $this->arrivalAirport = $arrivalAirport;

        return $this;
    }

    /**
     * Gets as marketingAirline
     *
     * The marketing airline.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getMarketingAirline()
    {
        return $this->marketingAirline;
    }

    /**
     * Sets a new marketingAirline
     *
     * The marketing airline.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline
     * @return self
     */
    public function setMarketingAirline(\Davispeixoto\OpenTravelAlliance\CompanyNameType $marketingAirline)
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Gets as operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperatingAirlineType
     */
    public function getOperatingAirline()
    {
        return $this->operatingAirline;
    }

    /**
     * Sets a new operatingAirline
     *
     * The operating airline of the flight if it is a codeshare flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperatingAirlineType $operatingAirline
     * @return self
     */
    public function setOperatingAirline(\Davispeixoto\OpenTravelAlliance\OperatingAirlineType $operatingAirline)
    {
        $this->operatingAirline = $operatingAirline;

        return $this;
    }

    /**
     * Gets as equipment
     *
     * The type of equipment used for the flight.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EquipmentType
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Sets a new equipment
     *
     * The type of equipment used for the flight.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EquipmentType $equipment
     * @return self
     */
    public function setEquipment(\Davispeixoto\OpenTravelAlliance\EquipmentType $equipment)
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Any special comments on the leg such as travel advisory messages, passenger
     * advisory messages, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\CommentAType
     * $comment
     */
    public function addToComment(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\CommentAType $comment
    ) {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Any special comments on the leg such as travel advisory messages, passenger
     * advisory messages, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComment($index)
    {
        return isset($this->comment[$index]);
    }

    /**
     * unset comment
     *
     * Any special comments on the leg such as travel advisory messages, passenger
     * advisory messages, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComment($index)
    {
        unset($this->comment[$index]);
    }

    /**
     * Gets as comment
     *
     * Any special comments on the leg such as travel advisory messages, passenger
     * advisory messages, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\CommentAType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any special comments on the leg such as travel advisory messages, passenger
     * advisory messages, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\CommentAType[]
     * $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Gets as departureDateTime
     *
     * Specifies scheduled and other date time information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureDateTimeAType
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * Specifies scheduled and other date time information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureDateTimeAType
     * $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\DepartureDateTimeAType $departureDateTime
    ) {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * Specifies scheduled and other date time information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalDateTimeAType
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * Specifies scheduled and other date time information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalDateTimeAType
     * $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\ArrivalDateTimeAType $arrivalDateTime
    ) {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Adds as operationTime
     *
     * A collection of OperationTimes.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType
     * $operationTime
     */
    public function addToOperationTimes(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType $operationTime
    ) {
        $this->operationTimes[] = $operationTime;

        return $this;
    }

    /**
     * isset operationTimes
     *
     * A collection of OperationTimes.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperationTimes($index)
    {
        return isset($this->operationTimes[$index]);
    }

    /**
     * unset operationTimes
     *
     * A collection of OperationTimes.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperationTimes($index)
    {
        unset($this->operationTimes[$index]);
    }

    /**
     * Gets as operationTimes
     *
     * A collection of OperationTimes.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType[]
     */
    public function getOperationTimes()
    {
        return $this->operationTimes;
    }

    /**
     * Sets a new operationTimes
     *
     * A collection of OperationTimes.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType\OperationTimesAType\OperationTimeAType[]
     * $operationTimes
     * @return self
     */
    public function setOperationTimes(array $operationTimes)
    {
        $this->operationTimes = $operationTimes;

        return $this;
    }


}

