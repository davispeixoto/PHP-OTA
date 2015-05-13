<?php

namespace Davispeixoto\OpenTravelAlliance\AirCheckInType\FlightInfoAType;

/**
 * Class representing DepartureInformationAType
 */
class DepartureInformationAType
{

    /**
     * Date of departure from this board point.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfDeparture
     */
    private $dateOfDeparture = null;

    /**
     * Date of departure from this board point.
     *
     * @property string $julianDateOfDeparture
     */
    private $julianDateOfDeparture = null;

    /**
     * Identifies departure day of the week.
     *
     * @property string $dayOfWeek
     */
    private $dayOfWeek = null;

    /**
     * Identifies local or UTC scheduled departure time. Accomodates the 12 and the 24
     * hour clock.
     *
     * @property \DateTime $scheduledDepartureTime
     */
    private $scheduledDepartureTime = null;

    /**
     * Informs the customer of the latest possible local or UTC time of flight
     * check-in. Accomodates the 12 and the 24 hour clock.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $latestCheckInDateTime
     */
    private $latestCheckInDateTime = null;

    /**
     * Informs the customer of the local or UTC flight boarding time. Accomodates the
     * 12 and the 24 hour clock.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $boardingDateTime
     */
    private $boardingDateTime = null;

    /**
     * Provides generic check-in information, instructions, etc. (for example, used for
     * SIMM DEI-299 - i.e. Check in at United Airlines for Ted flights).
     *
     * @property string $otherCheckInInformation
     */
    private $otherCheckInInformation = null;

    /**
     * The full name of the boarding point. This can be the airport name (e.g., Chicago
     * O'Hare), the railway station, or the city name.
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
     * Gets as dateOfDeparture
     *
     * Date of departure from this board point.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getDateOfDeparture()
    {
        return $this->dateOfDeparture;
    }

    /**
     * Sets a new dateOfDeparture
     *
     * Date of departure from this board point.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfDeparture
     * @return self
     */
    public function setDateOfDeparture(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $dateOfDeparture)
    {
        $this->dateOfDeparture = $dateOfDeparture;

        return $this;
    }

    /**
     * Gets as julianDateOfDeparture
     *
     * Date of departure from this board point.
     *
     * @return string
     */
    public function getJulianDateOfDeparture()
    {
        return $this->julianDateOfDeparture;
    }

    /**
     * Sets a new julianDateOfDeparture
     *
     * Date of departure from this board point.
     *
     * @param string $julianDateOfDeparture
     * @return self
     */
    public function setJulianDateOfDeparture($julianDateOfDeparture)
    {
        $this->julianDateOfDeparture = $julianDateOfDeparture;

        return $this;
    }

    /**
     * Gets as dayOfWeek
     *
     * Identifies departure day of the week.
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
     * Identifies departure day of the week.
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
     * Gets as scheduledDepartureTime
     *
     * Identifies local or UTC scheduled departure time. Accomodates the 12 and the 24
     * hour clock.
     *
     * @return \DateTime
     */
    public function getScheduledDepartureTime()
    {
        return $this->scheduledDepartureTime;
    }

    /**
     * Sets a new scheduledDepartureTime
     *
     * Identifies local or UTC scheduled departure time. Accomodates the 12 and the 24
     * hour clock.
     *
     * @param \DateTime $scheduledDepartureTime
     * @return self
     */
    public function setScheduledDepartureTime(\DateTime $scheduledDepartureTime)
    {
        $this->scheduledDepartureTime = $scheduledDepartureTime;

        return $this;
    }

    /**
     * Gets as latestCheckInDateTime
     *
     * Informs the customer of the latest possible local or UTC time of flight
     * check-in. Accomodates the 12 and the 24 hour clock.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getLatestCheckInDateTime()
    {
        return $this->latestCheckInDateTime;
    }

    /**
     * Sets a new latestCheckInDateTime
     *
     * Informs the customer of the latest possible local or UTC time of flight
     * check-in. Accomodates the 12 and the 24 hour clock.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $latestCheckInDateTime
     * @return self
     */
    public function setLatestCheckInDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $latestCheckInDateTime)
    {
        $this->latestCheckInDateTime = $latestCheckInDateTime;

        return $this;
    }

    /**
     * Gets as boardingDateTime
     *
     * Informs the customer of the local or UTC flight boarding time. Accomodates the
     * 12 and the 24 hour clock.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getBoardingDateTime()
    {
        return $this->boardingDateTime;
    }

    /**
     * Sets a new boardingDateTime
     *
     * Informs the customer of the local or UTC flight boarding time. Accomodates the
     * 12 and the 24 hour clock.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $boardingDateTime
     * @return self
     */
    public function setBoardingDateTime(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $boardingDateTime)
    {
        $this->boardingDateTime = $boardingDateTime;

        return $this;
    }

    /**
     * Gets as otherCheckInInformation
     *
     * Provides generic check-in information, instructions, etc. (for example, used for
     * SIMM DEI-299 - i.e. Check in at United Airlines for Ted flights).
     *
     * @return string
     */
    public function getOtherCheckInInformation()
    {
        return $this->otherCheckInInformation;
    }

    /**
     * Sets a new otherCheckInInformation
     *
     * Provides generic check-in information, instructions, etc. (for example, used for
     * SIMM DEI-299 - i.e. Check in at United Airlines for Ted flights).
     *
     * @param string $otherCheckInInformation
     * @return self
     */
    public function setOtherCheckInInformation($otherCheckInInformation)
    {
        $this->otherCheckInInformation = $otherCheckInInformation;

        return $this;
    }

    /**
     * Gets as locationName
     *
     * The full name of the boarding point. This can be the airport name (e.g., Chicago
     * O'Hare), the railway station, or the city name.
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
     * The full name of the boarding point. This can be the airport name (e.g., Chicago
     * O'Hare), the railway station, or the city name.
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

