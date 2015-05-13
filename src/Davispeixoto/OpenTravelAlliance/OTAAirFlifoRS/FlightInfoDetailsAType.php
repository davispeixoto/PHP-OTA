<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS;

/**
 * Class representing FlightInfoDetailsAType
 */
class FlightInfoDetailsAType
{

    /**
     * Indicates various status information about the flight such as real-time,
     * scheduled or flight cancelled.
     *
     * @property string $messageStatus
     */
    private $messageStatus = null;

    /**
     * The total duration of time a flight is airborne.
     *
     * @property \DateInterval $totalFlightTime
     */
    private $totalFlightTime = null;

    /**
     * The total duration of time a flight is on the ground.
     *
     * @property \DateInterval $totalGroundTime
     */
    private $totalGroundTime = null;

    /**
     * The total duration of time required for a flight operation (ground and air).
     *
     * @property \DateInterval $totalTripTime
     */
    private $totalTripTime = null;

    /**
     * Total miles for a flight segment.
     *
     * @property integer $totalMiles
     */
    private $totalMiles = null;

    /**
     * The flight number of the flight.
     *
     * @property string $flightNumber
     */
    private $flightNumber = null;

    /**
     * Information regarding each leg of the flight. A flight leg is one departure and
     * one arrival (non-stop sector).
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType[]
     * $flightLegInfo
     */
    private $flightLegInfo = null;

    /**
     * Any special comments on the flight.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * Warning(s) specifying an application error for this flight (e.g., invalid flight
     * number).
     *
     * @property \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     */
    private $warnings = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as messageStatus
     *
     * Indicates various status information about the flight such as real-time,
     * scheduled or flight cancelled.
     *
     * @return string
     */
    public function getMessageStatus()
    {
        return $this->messageStatus;
    }

    /**
     * Sets a new messageStatus
     *
     * Indicates various status information about the flight such as real-time,
     * scheduled or flight cancelled.
     *
     * @param string $messageStatus
     * @return self
     */
    public function setMessageStatus($messageStatus)
    {
        $this->messageStatus = $messageStatus;

        return $this;
    }

    /**
     * Gets as totalFlightTime
     *
     * The total duration of time a flight is airborne.
     *
     * @return \DateInterval
     */
    public function getTotalFlightTime()
    {
        return $this->totalFlightTime;
    }

    /**
     * Sets a new totalFlightTime
     *
     * The total duration of time a flight is airborne.
     *
     * @param \DateInterval $totalFlightTime
     * @return self
     */
    public function setTotalFlightTime(\DateInterval $totalFlightTime)
    {
        $this->totalFlightTime = $totalFlightTime;

        return $this;
    }

    /**
     * Gets as totalGroundTime
     *
     * The total duration of time a flight is on the ground.
     *
     * @return \DateInterval
     */
    public function getTotalGroundTime()
    {
        return $this->totalGroundTime;
    }

    /**
     * Sets a new totalGroundTime
     *
     * The total duration of time a flight is on the ground.
     *
     * @param \DateInterval $totalGroundTime
     * @return self
     */
    public function setTotalGroundTime(\DateInterval $totalGroundTime)
    {
        $this->totalGroundTime = $totalGroundTime;

        return $this;
    }

    /**
     * Gets as totalTripTime
     *
     * The total duration of time required for a flight operation (ground and air).
     *
     * @return \DateInterval
     */
    public function getTotalTripTime()
    {
        return $this->totalTripTime;
    }

    /**
     * Sets a new totalTripTime
     *
     * The total duration of time required for a flight operation (ground and air).
     *
     * @param \DateInterval $totalTripTime
     * @return self
     */
    public function setTotalTripTime(\DateInterval $totalTripTime)
    {
        $this->totalTripTime = $totalTripTime;

        return $this;
    }

    /**
     * Gets as totalMiles
     *
     * Total miles for a flight segment.
     *
     * @return integer
     */
    public function getTotalMiles()
    {
        return $this->totalMiles;
    }

    /**
     * Sets a new totalMiles
     *
     * Total miles for a flight segment.
     *
     * @param integer $totalMiles
     * @return self
     */
    public function setTotalMiles($totalMiles)
    {
        $this->totalMiles = $totalMiles;

        return $this;
    }

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
     * Adds as flightLegInfo
     *
     * Information regarding each leg of the flight. A flight leg is one departure and
     * one arrival (non-stop sector).
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType
     * $flightLegInfo
     */
    public function addToFlightLegInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType $flightLegInfo
    ) {
        $this->flightLegInfo[] = $flightLegInfo;

        return $this;
    }

    /**
     * isset flightLegInfo
     *
     * Information regarding each leg of the flight. A flight leg is one departure and
     * one arrival (non-stop sector).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightLegInfo($index)
    {
        return isset($this->flightLegInfo[$index]);
    }

    /**
     * unset flightLegInfo
     *
     * Information regarding each leg of the flight. A flight leg is one departure and
     * one arrival (non-stop sector).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightLegInfo($index)
    {
        unset($this->flightLegInfo[$index]);
    }

    /**
     * Gets as flightLegInfo
     *
     * Information regarding each leg of the flight. A flight leg is one departure and
     * one arrival (non-stop sector).
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType[]
     */
    public function getFlightLegInfo()
    {
        return $this->flightLegInfo;
    }

    /**
     * Sets a new flightLegInfo
     *
     * Information regarding each leg of the flight. A flight leg is one departure and
     * one arrival (non-stop sector).
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFlifoRS\FlightInfoDetailsAType\FlightLegInfoAType[]
     * $flightLegInfo
     * @return self
     */
    public function setFlightLegInfo(array $flightLegInfo)
    {
        $this->flightLegInfo = $flightLegInfo;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Any special comments on the flight.
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
     * Any special comments on the flight.
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
     * Any special comments on the flight.
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
     * Any special comments on the flight.
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
     * Any special comments on the flight.
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
     * Adds as warning
     *
     * Warning(s) specifying an application error for this flight (e.g., invalid flight
     * number).
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
     * Warning(s) specifying an application error for this flight (e.g., invalid flight
     * number).
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
     * Warning(s) specifying an application error for this flight (e.g., invalid flight
     * number).
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
     * Warning(s) specifying an application error for this flight (e.g., invalid flight
     * number).
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
     * Warning(s) specifying an application error for this flight (e.g., invalid flight
     * number).
     *
     * @param \Davispeixoto\OpenTravelAlliance\WarningType[] $warnings
     * @return self
     */
    public function setWarnings(array $warnings)
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

