<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PkgFlightSegmentType
 *
 * Provides details for an air segment in a response message.
 * XSD Type: PkgFlightSegmentType
 */
class PkgFlightSegmentType extends PkgFlightSegmentBaseType
{

    /**
     * Indicates whether the flight is a scheduled or charter service.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Specifies the day on which the flight departs.
     *
     * @property string $departureDay
     */
    private $departureDay = null;

    /**
     * The supplier's code to identify the travel arrangement for the package
     *
     * @property string $travelCode
     */
    private $travelCode = null;

    /**
     * A length of time.
     *
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other
     *
     * @property string $directionInd
     */
    private $directionInd = null;

    /**
     * Provides the recommended date and time of passenger check-in.
     *
     * @property \DateTime $checkInDate
     */
    private $checkInDate = null;

    /**
     * Identifies the desk or desks at which the customer will check-in and optionally
     * the handling company operating the check-in service.
     *
     * @property string $checkInDesk
     */
    private $checkInDesk = null;

    /**
     * When 'true', the ticket(s) must be picked up at the airport, usually on the date
     * of departure. When 'false', the tickets will be delivered according to the
     * normal fulfilment arrangements e.g. by post or as an e-ticket.
     *
     * @property boolean $tODIndicator
     */
    private $tODIndicator = null;

    /**
     * The type of the ticket, e.g. paper or e-ticket.
     *
     * @property string $ticketType
     */
    private $ticketType = null;

    /**
     * Identifies a section of an aircraft, possibly providing extra services.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CabinAvailType[] $cabinAvailability
     */
    private $cabinAvailability = null;

    /**
     * Gets as type
     *
     * Indicates whether the flight is a scheduled or charter service.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Indicates whether the flight is a scheduled or charter service.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as departureDay
     *
     * Specifies the day on which the flight departs.
     *
     * @return string
     */
    public function getDepartureDay()
    {
        return $this->departureDay;
    }

    /**
     * Sets a new departureDay
     *
     * Specifies the day on which the flight departs.
     *
     * @param string $departureDay
     * @return self
     */
    public function setDepartureDay($departureDay)
    {
        $this->departureDay = $departureDay;

        return $this;
    }

    /**
     * Gets as travelCode
     *
     * The supplier's code to identify the travel arrangement for the package
     *
     * @return string
     */
    public function getTravelCode()
    {
        return $this->travelCode;
    }

    /**
     * Sets a new travelCode
     *
     * The supplier's code to identify the travel arrangement for the package
     *
     * @param string $travelCode
     * @return self
     */
    public function setTravelCode($travelCode)
    {
        $this->travelCode = $travelCode;

        return $this;
    }

    /**
     * Gets as duration
     *
     * A length of time.
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * A length of time.
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other
     *
     * @return string
     */
    public function getDirectionInd()
    {
        return $this->directionInd;
    }

    /**
     * Sets a new directionInd
     *
     * Identifies whether travel is: one way, return trip, circle trip, open jaw, other
     *
     * @param string $directionInd
     * @return self
     */
    public function setDirectionInd($directionInd)
    {
        $this->directionInd = $directionInd;

        return $this;
    }

    /**
     * Gets as checkInDate
     *
     * Provides the recommended date and time of passenger check-in.
     *
     * @return \DateTime
     */
    public function getCheckInDate()
    {
        return $this->checkInDate;
    }

    /**
     * Sets a new checkInDate
     *
     * Provides the recommended date and time of passenger check-in.
     *
     * @param \DateTime $checkInDate
     * @return self
     */
    public function setCheckInDate(\DateTime $checkInDate)
    {
        $this->checkInDate = $checkInDate;

        return $this;
    }

    /**
     * Gets as checkInDesk
     *
     * Identifies the desk or desks at which the customer will check-in and optionally
     * the handling company operating the check-in service.
     *
     * @return string
     */
    public function getCheckInDesk()
    {
        return $this->checkInDesk;
    }

    /**
     * Sets a new checkInDesk
     *
     * Identifies the desk or desks at which the customer will check-in and optionally
     * the handling company operating the check-in service.
     *
     * @param string $checkInDesk
     * @return self
     */
    public function setCheckInDesk($checkInDesk)
    {
        $this->checkInDesk = $checkInDesk;

        return $this;
    }

    /**
     * Gets as tODIndicator
     *
     * When 'true', the ticket(s) must be picked up at the airport, usually on the date
     * of departure. When 'false', the tickets will be delivered according to the
     * normal fulfilment arrangements e.g. by post or as an e-ticket.
     *
     * @return boolean
     */
    public function getTODIndicator()
    {
        return $this->tODIndicator;
    }

    /**
     * Sets a new tODIndicator
     *
     * When 'true', the ticket(s) must be picked up at the airport, usually on the date
     * of departure. When 'false', the tickets will be delivered according to the
     * normal fulfilment arrangements e.g. by post or as an e-ticket.
     *
     * @param boolean $tODIndicator
     * @return self
     */
    public function setTODIndicator($tODIndicator)
    {
        $this->tODIndicator = $tODIndicator;

        return $this;
    }

    /**
     * Gets as ticketType
     *
     * The type of the ticket, e.g. paper or e-ticket.
     *
     * @return string
     */
    public function getTicketType()
    {
        return $this->ticketType;
    }

    /**
     * Sets a new ticketType
     *
     * The type of the ticket, e.g. paper or e-ticket.
     *
     * @param string $ticketType
     * @return self
     */
    public function setTicketType($ticketType)
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * Adds as cabinAvailability
     *
     * Identifies a section of an aircraft, possibly providing extra services.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CabinAvailType $cabinAvailability
     */
    public function addToCabinAvailability(\Davispeixoto\OpenTravelAlliance\CabinAvailType $cabinAvailability)
    {
        $this->cabinAvailability[] = $cabinAvailability;

        return $this;
    }

    /**
     * isset cabinAvailability
     *
     * Identifies a section of an aircraft, possibly providing extra services.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCabinAvailability($index)
    {
        return isset($this->cabinAvailability[$index]);
    }

    /**
     * unset cabinAvailability
     *
     * Identifies a section of an aircraft, possibly providing extra services.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCabinAvailability($index)
    {
        unset($this->cabinAvailability[$index]);
    }

    /**
     * Gets as cabinAvailability
     *
     * Identifies a section of an aircraft, possibly providing extra services.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CabinAvailType[]
     */
    public function getCabinAvailability()
    {
        return $this->cabinAvailability;
    }

    /**
     * Sets a new cabinAvailability
     *
     * Identifies a section of an aircraft, possibly providing extra services.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CabinAvailType[] $cabinAvailability
     * @return self
     */
    public function setCabinAvailability(array $cabinAvailability)
    {
        $this->cabinAvailability = $cabinAvailability;

        return $this;
    }


}

