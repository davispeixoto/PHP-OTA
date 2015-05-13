<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType;

/**
 * Class representing OriginDestinationOptionAType
 */
class OriginDestinationOptionAType
{

    /**
     * A collection of one or more legs that are defined as a single flight number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     * $flightSegment
     */
    private $flightSegment = null;

    /**
     * Used to specify comment information for a group of flight segments.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     */
    private $comment = null;

    /**
     * Adds as flightSegment
     *
     * A collection of one or more legs that are defined as a single flight number.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType
     * $flightSegment
     */
    public function addToFlightSegment(
        \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType $flightSegment
    ) {
        $this->flightSegment[] = $flightSegment;

        return $this;
    }

    /**
     * isset flightSegment
     *
     * A collection of one or more legs that are defined as a single flight number.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightSegment($index)
    {
        return isset($this->flightSegment[$index]);
    }

    /**
     * unset flightSegment
     *
     * A collection of one or more legs that are defined as a single flight number.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightSegment($index)
    {
        unset($this->flightSegment[$index]);
    }

    /**
     * Gets as flightSegment
     *
     * A collection of one or more legs that are defined as a single flight number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * A collection of one or more legs that are defined as a single flight number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirScheduleRS\OriginDestinationOptionsAType\OriginDestinationOptionAType\FlightSegmentAType[]
     * $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }

    /**
     * Adds as comment
     *
     * Used to specify comment information for a group of flight segments.
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
     * Used to specify comment information for a group of flight segments.
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
     * Used to specify comment information for a group of flight segments.
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
     * Used to specify comment information for a group of flight segments.
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
     * Used to specify comment information for a group of flight segments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType[] $comment
     * @return self
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;

        return $this;
    }


}

