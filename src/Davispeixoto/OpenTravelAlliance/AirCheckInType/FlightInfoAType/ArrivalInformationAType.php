<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType;

/**
 * Class representing ArrivalInformationAType
 */
class ArrivalInformationAType
{

    /**
     * Date of arrival at this board point.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfArrival
     */
    private $dateOfArrival = null;

    /**
     * Identifies arrival day of the week.
     *
     * @property string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * Identifies local or UTC scheduled arrival time. Accomodates the 12 and the 24
     * hour clock.
     *
     * @property \DateTime $scheduledArrivalTime
     */
    private $scheduledArrivalTime = null;

    /**
     * Signifies crossing a dateline and or midnight during the course of the flight.
     *
     * @property string $dateChangeIdentifier
     */
    private $dateChangeIdentifier = null;

    /**
     * The full name of the arrival location. This can be the airport name (e.g.,
     * Chicago O'Hare), the railway station, or the city name.
     *
     * @property string $locationName
     */
    private $locationName = null;

    /**
     * Location code used to identify a specific airport.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @property string $terminal
     */
    private $terminal = null;

    /**
     * Arrival or departure gate (e.g., B12)
     *
     * @property string $gate
     */
    private $gate = null;

    /**
     * Gets as dateOfArrival
     *
     * Date of arrival at this board point.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateOfArrival()
    {
        return $this->dateOfArrival;
    }

    /**
     * Sets a new dateOfArrival
     *
     * Date of arrival at this board point.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfArrival
     * @return self
     */
    public function setDateOfArrival(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfArrival)
    {
        $this->dateOfArrival = $dateOfArrival;

        return $this;
    }

    /**
     * Gets as dayOfWeek
     *
     * Identifies arrival day of the week.
     *
     * @return string
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Sets a new dayOfWeek
     *
     * Identifies arrival day of the week.
     *
     * @param string $dayOfWeek
     * @return self
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Gets as scheduledArrivalTime
     *
     * Identifies local or UTC scheduled arrival time. Accomodates the 12 and the 24
     * hour clock.
     *
     * @return \DateTime
     */
    public function getScheduledArrivalTime()
    {
        return $this->scheduledArrivalTime;
    }

    /**
     * Sets a new scheduledArrivalTime
     *
     * Identifies local or UTC scheduled arrival time. Accomodates the 12 and the 24
     * hour clock.
     *
     * @param \DateTime $scheduledArrivalTime
     * @return self
     */
    public function setScheduledArrivalTime(\DateTime $scheduledArrivalTime)
    {
        $this->scheduledArrivalTime = $scheduledArrivalTime;

        return $this;
    }

    /**
     * Gets as dateChangeIdentifier
     *
     * Signifies crossing a dateline and or midnight during the course of the flight.
     *
     * @return string
     */
    public function getDateChangeIdentifier()
    {
        return $this->dateChangeIdentifier;
    }

    /**
     * Sets a new dateChangeIdentifier
     *
     * Signifies crossing a dateline and or midnight during the course of the flight.
     *
     * @param string $dateChangeIdentifier
     * @return self
     */
    public function setDateChangeIdentifier($dateChangeIdentifier)
    {
        $this->dateChangeIdentifier = $dateChangeIdentifier;

        return $this;
    }

    /**
     * Gets as locationName
     *
     * The full name of the arrival location. This can be the airport name (e.g.,
     * Chicago O'Hare), the railway station, or the city name.
     *
     * @return string
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets a new locationName
     *
     * The full name of the arrival location. This can be the airport name (e.g.,
     * Chicago O'Hare), the railway station, or the city name.
     *
     * @param string $locationName
     * @return self
     */
    public function setLocationName($locationName)
    {
        $this->locationName = $locationName;

        return $this;
    }

    /**
     * Gets as locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * Location code used to identify a specific airport.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code, such as IATA, ARC, or internal
     * code, etc.
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }

    /**
     * Sets a new terminal
     *
     * Arrival or departure terminal (e.g., Concourse A)
     *
     * @param string $terminal
     * @return self
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;

        return $this;
    }

    /**
     * Gets as gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @return string
     */
    public function getGate()
    {
        return $this->gate;
    }

    /**
     * Sets a new gate
     *
     * Arrival or departure gate (e.g., B12)
     *
     * @param string $gate
     * @return self
     */
    public function setGate($gate)
    {
        $this->gate = $gate;

        return $this;
    }


}

