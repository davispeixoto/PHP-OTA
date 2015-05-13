<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirDemandTicketRQ\DemandTicketDetailAType;

/**
 * Class representing FlightReferenceAType
 */
class FlightReferenceAType
{

    /**
     * The reference number for a flight segment in a passenger name record.
     *
     * @property integer $flightRefNumber
     */
    private $flightRefNumber = null;

    /**
     * Specifies whether the first or last flight segment reference number in a range.
     *
     * @property string $rangePosition
     */
    private $rangePosition = null;

    /**
     * Gets as flightRefNumber
     *
     * The reference number for a flight segment in a passenger name record.
     *
     * @return integer
     */
    public function getFlightRefNumber()
    {
        return $this->flightRefNumber;
    }

    /**
     * Sets a new flightRefNumber
     *
     * The reference number for a flight segment in a passenger name record.
     *
     * @param integer $flightRefNumber
     * @return self
     */
    public function setFlightRefNumber($flightRefNumber)
    {
        $this->flightRefNumber = $flightRefNumber;

        return $this;
    }

    /**
     * Gets as rangePosition
     *
     * Specifies whether the first or last flight segment reference number in a range.
     *
     * @return string
     */
    public function getRangePosition()
    {
        return $this->rangePosition;
    }

    /**
     * Sets a new rangePosition
     *
     * Specifies whether the first or last flight segment reference number in a range.
     *
     * @param string $rangePosition
     * @return self
     */
    public function setRangePosition($rangePosition)
    {
        $this->rangePosition = $rangePosition;

        return $this;
    }


}

