<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType;

/**
 * Class representing FlightLegDetailsAType
 */
class FlightLegDetailsAType
{

    /**
     * The sequence number of the flight leg.
     *
     * @property integer $sequenceNumber
     */
    private $sequenceNumber = null;

    /**
     * The flight number of the flight.
     *
     * @property integer $flightNumber
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
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @property boolean $smokingAllowed
     */
    private $smokingAllowed = null;

    /**
     * Specifies the Dept. of Transport on time rate of the flight.
     *
     * @property float $onTimeRate
     */
    private $onTimeRate = null;

    /**
     * Specifies if the flight is e-ticketable or not.
     *  Paper
     *
     * @property string $ticket
     */
    private $ticket = null;

    /**
     * Scheduled flight departure date/time for flight leg.
     *
     * @property \DateTime $departureDateTime
     */
    private $departureDateTime = null;

    /**
     * Scheduled flight arrival date/time for flight leg.
     *
     * @property \DateTime $arrivalDateTime
     */
    private $arrivalDateTime = null;

    /**
     * A three letter abbreviation for the day of the week as specified in the
     * departure date.
     *
     * @property string $departureDayOfWeek
     */
    private $departureDayOfWeek = null;

    /**
     * The number of miles for this flight leg.
     *
     * @property integer $legDistance
     */
    private $legDistance = null;

    /**
     * When present contains the number of days by which the flight's arrival date
     * differs from its departure date.
     *
     * @property string $dateChangeNbr
     */
    private $dateChangeNbr = null;

    /**
     * The departure airport of the flight leg.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\DepartureAirportAType
     * $departureAirport
     */
    private $departureAirport = null;

    /**
     * The arrival airport of the flight leg.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\ArrivalAirportAType
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
     * The air carrier engaged directly in the operation of the flight.
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
     * Any special comments on the leg, (eg. operated by XX.)
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * Identifies the cabins available for the flight.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\MarketingCabinAvailabilityAType[]
     * $marketingCabinAvailability
     */
    private $marketingCabinAvailability = null;

    /**
     * Warning information for this flight leg.
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * Gets as sequenceNumber
     *
     * The sequence number of the flight leg.
     *
     * @return integer
     */
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }

    /**
     * Sets a new sequenceNumber
     *
     * The sequence number of the flight leg.
     *
     * @param integer $sequenceNumber
     * @return self
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Gets as flightNumber
     *
     * The flight number of the flight.
     *
     * @return integer
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
     * @param integer $flightNumber
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
     * Gets as smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @return boolean
     */
    public function getSmokingAllowed()
    {
        return $this->smokingAllowed;
    }

    /**
     * Sets a new smokingAllowed
     *
     * Indicates smoking is allowed when true and is not allowed when false.
     *  false
     *
     * @param boolean $smokingAllowed
     * @return self
     */
    public function setSmokingAllowed($smokingAllowed)
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * Gets as onTimeRate
     *
     * Specifies the Dept. of Transport on time rate of the flight.
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
     * Specifies the Dept. of Transport on time rate of the flight.
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
     * Gets as ticket
     *
     * Specifies if the flight is e-ticketable or not.
     *  Paper
     *
     * @return string
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Sets a new ticket
     *
     * Specifies if the flight is e-ticketable or not.
     *  Paper
     *
     * @param string $ticket
     * @return self
     */
    public function setTicket($ticket)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Gets as departureDateTime
     *
     * Scheduled flight departure date/time for flight leg.
     *
     * @return \DateTime
     */
    public function getDepartureDateTime()
    {
        return $this->departureDateTime;
    }

    /**
     * Sets a new departureDateTime
     *
     * Scheduled flight departure date/time for flight leg.
     *
     * @param \DateTime $departureDateTime
     * @return self
     */
    public function setDepartureDateTime(\DateTime $departureDateTime)
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Gets as arrivalDateTime
     *
     * Scheduled flight arrival date/time for flight leg.
     *
     * @return \DateTime
     */
    public function getArrivalDateTime()
    {
        return $this->arrivalDateTime;
    }

    /**
     * Sets a new arrivalDateTime
     *
     * Scheduled flight arrival date/time for flight leg.
     *
     * @param \DateTime $arrivalDateTime
     * @return self
     */
    public function setArrivalDateTime(\DateTime $arrivalDateTime)
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Gets as departureDayOfWeek
     *
     * A three letter abbreviation for the day of the week as specified in the
     * departure date.
     *
     * @return string
     */
    public function getDepartureDayOfWeek()
    {
        return $this->departureDayOfWeek;
    }

    /**
     * Sets a new departureDayOfWeek
     *
     * A three letter abbreviation for the day of the week as specified in the
     * departure date.
     *
     * @param string $departureDayOfWeek
     * @return self
     */
    public function setDepartureDayOfWeek($departureDayOfWeek)
    {
        $this->departureDayOfWeek = $departureDayOfWeek;

        return $this;
    }

    /**
     * Gets as legDistance
     *
     * The number of miles for this flight leg.
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
     * The number of miles for this flight leg.
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
     * Gets as dateChangeNbr
     *
     * When present contains the number of days by which the flight's arrival date
     * differs from its departure date.
     *
     * @return string
     */
    public function getDateChangeNbr()
    {
        return $this->dateChangeNbr;
    }

    /**
     * Sets a new dateChangeNbr
     *
     * When present contains the number of days by which the flight's arrival date
     * differs from its departure date.
     *
     * @param string $dateChangeNbr
     * @return self
     */
    public function setDateChangeNbr($dateChangeNbr)
    {
        $this->dateChangeNbr = $dateChangeNbr;

        return $this;
    }

    /**
     * Gets as departureAirport
     *
     * The departure airport of the flight leg.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\DepartureAirportAType
     */
    public function getDepartureAirport()
    {
        return $this->departureAirport;
    }

    /**
     * Sets a new departureAirport
     *
     * The departure airport of the flight leg.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\DepartureAirportAType
     * $departureAirport
     * @return self
     */
    public function setDepartureAirport(
        \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\DepartureAirportAType $departureAirport
    ) {
        $this->departureAirport = $departureAirport;

        return $this;
    }

    /**
     * Gets as arrivalAirport
     *
     * The arrival airport of the flight leg.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\ArrivalAirportAType
     */
    public function getArrivalAirport()
    {
        return $this->arrivalAirport;
    }

    /**
     * Sets a new arrivalAirport
     *
     * The arrival airport of the flight leg.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\ArrivalAirportAType
     * $arrivalAirport
     * @return self
     */
    public function setArrivalAirport(
        \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\ArrivalAirportAType $arrivalAirport
    ) {
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
     * The air carrier engaged directly in the operation of the flight.
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
     * The air carrier engaged directly in the operation of the flight.
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
     * Any special comments on the leg, (eg. operated by XX.)
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $comment
     */
    public function addToComment(\Davispeixoto\OpenTravelAlliance\FreeTextType $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * isset comment
     *
     * Any special comments on the leg, (eg. operated by XX.)
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
     * Any special comments on the leg, (eg. operated by XX.)
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
     * Any special comments on the leg, (eg. operated by XX.)
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Sets a new comment
     *
     * Any special comments on the leg, (eg. operated by XX.)
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Adds as marketingCabinAvailability
     *
     * Identifies the cabins available for the flight.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\MarketingCabinAvailabilityAType
     * $marketingCabinAvailability
     */
    public function addToMarketingCabinAvailability(
        \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\MarketingCabinAvailabilityAType $marketingCabinAvailability
    ) {
        $this->marketingCabinAvailability[] = $marketingCabinAvailability;

        return $this;
    }

    /**
     * isset marketingCabinAvailability
     *
     * Identifies the cabins available for the flight.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetMarketingCabinAvailability($index)
    {
        return isset($this->marketingCabinAvailability[$index]);
    }

    /**
     * unset marketingCabinAvailability
     *
     * Identifies the cabins available for the flight.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetMarketingCabinAvailability($index)
    {
        unset($this->marketingCabinAvailability[$index]);
    }

    /**
     * Gets as marketingCabinAvailability
     *
     * Identifies the cabins available for the flight.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\MarketingCabinAvailabilityAType[]
     */
    public function getMarketingCabinAvailability()
    {
        return $this->marketingCabinAvailability;
    }

    /**
     * Sets a new marketingCabinAvailability
     *
     * Identifies the cabins available for the flight.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirDetailsRS\FlightDetailsAType\FlightLegDetailsAType\MarketingCabinAvailabilityAType[]
     * $marketingCabinAvailability
     * @return self
     */
    public function setMarketingCabinAvailability(array $marketingCabinAvailability)
    {
        $this->marketingCabinAvailability = $marketingCabinAvailability;

        return $this;
    }

    /**
     * Adds as warning
     *
     * Warning information for this flight leg.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\WarningType $warning
     */
    public function addToWarnings(\Davispeixoto\OpenTravelAlliance\WarningType $warning)
    {
        $this->warnings[] = $warning;

        return $this;
    }

    /**
     * isset warnings
     *
     * Warning information for this flight leg.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWarnings($index)
    {
        return isset($this->warnings[$index]);
    }

    /**
     * unset warnings
     *
     * Warning information for this flight leg.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWarnings($index)
    {
        unset($this->warnings[$index]);
    }

    /**
     * Gets as warnings
     *
     * Warning information for this flight leg.
     *
     * @return \Davispeixoto\OpenTravelAlliance\WarningType[]
     */
    public function getWarnings()
    {
        return $this->warnings;
    }

    /**
     * Sets a new warnings
     *
     * Warning information for this flight leg.
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }


}

