<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OriginDestinationOptionType
 *
 * A container for flight segments.
 * XSD Type: OriginDestinationOptionType
 */
class OriginDestinationOptionType
{

    /**
     * A container for necessary data to describe one or more legs of a single flight
     * number.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OriginDestinationOptionType\FlightSegmentAType[]
     * $flightSegment
     */
    private $flightSegment = null;

    /**
     * Adds as flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight
     * number.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OriginDestinationOptionType\FlightSegmentAType
     * $flightSegment
     */
    public function addToFlightSegment(
        \Davispeixoto\OpenTravelAlliance\OriginDestinationOptionType\FlightSegmentAType $flightSegment
    ) {
        $this->flightSegment[] = $flightSegment;

        return $this;
    }

    /**
     * isset flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight
     * number.
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
     * A container for necessary data to describe one or more legs of a single flight
     * number.
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
     * A container for necessary data to describe one or more legs of a single flight
     * number.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OriginDestinationOptionType\FlightSegmentAType[]
     */
    public function getFlightSegment()
    {
        return $this->flightSegment;
    }

    /**
     * Sets a new flightSegment
     *
     * A container for necessary data to describe one or more legs of a single flight
     * number.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OriginDestinationOptionType\FlightSegmentAType[]
     * $flightSegment
     * @return self
     */
    public function setFlightSegment(array $flightSegment)
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }


}

