<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ;

/**
 * Class representing OriginAndDestinationSegmentAType
 */
class OriginAndDestinationSegmentAType
{

    /**
     * The travel origin location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * The travel destination location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * The specific traveler(s) whose reservation for the specified Origin and
     * Destination pair are to be canceled. If none are specified, the request will
     * cancel all travelers.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\TravelerAType[]
     * $traveler
     */
    private $traveler = null;

    /**
     * The specific segment(s) to be canceled. If none are specified, the request will
     * cancel all segments in the journey.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\SegmentAType[]
     * $segment
     */
    private $segment = null;

    /**
     * Gets as originLocation
     *
     * The travel origin location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * The travel origin location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     * @return self
     */
    public function setOriginLocation(\Davispeixoto\OpenTravelAlliance\LocationType $originLocation)
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * The travel destination location.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * The travel destination location.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     * @return self
     */
    public function setDestinationLocation(\Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation)
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Adds as traveler
     *
     * The specific traveler(s) whose reservation for the specified Origin and
     * Destination pair are to be canceled. If none are specified, the request will
     * cancel all travelers.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\TravelerAType
     * $traveler
     */
    public function addToTraveler(
        \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\TravelerAType $traveler
    ) {
        $this->traveler[] = $traveler;

        return $this;
    }

    /**
     * isset traveler
     *
     * The specific traveler(s) whose reservation for the specified Origin and
     * Destination pair are to be canceled. If none are specified, the request will
     * cancel all travelers.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTraveler($index)
    {
        return isset($this->traveler[$index]);
    }

    /**
     * unset traveler
     *
     * The specific traveler(s) whose reservation for the specified Origin and
     * Destination pair are to be canceled. If none are specified, the request will
     * cancel all travelers.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTraveler($index)
    {
        unset($this->traveler[$index]);
    }

    /**
     * Gets as traveler
     *
     * The specific traveler(s) whose reservation for the specified Origin and
     * Destination pair are to be canceled. If none are specified, the request will
     * cancel all travelers.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\TravelerAType[]
     */
    public function getTraveler()
    {
        return $this->traveler;
    }

    /**
     * Sets a new traveler
     *
     * The specific traveler(s) whose reservation for the specified Origin and
     * Destination pair are to be canceled. If none are specified, the request will
     * cancel all travelers.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\TravelerAType[]
     * $traveler
     * @return self
     */
    public function setTraveler(array $traveler)
    {
        $this->traveler = $traveler;

        return $this;
    }

    /**
     * Adds as segment
     *
     * The specific segment(s) to be canceled. If none are specified, the request will
     * cancel all segments in the journey.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\SegmentAType
     * $segment
     */
    public function addToSegment(
        \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\SegmentAType $segment
    ) {
        $this->segment[] = $segment;

        return $this;
    }

    /**
     * isset segment
     *
     * The specific segment(s) to be canceled. If none are specified, the request will
     * cancel all segments in the journey.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegment($index)
    {
        return isset($this->segment[$index]);
    }

    /**
     * unset segment
     *
     * The specific segment(s) to be canceled. If none are specified, the request will
     * cancel all segments in the journey.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegment($index)
    {
        unset($this->segment[$index]);
    }

    /**
     * Gets as segment
     *
     * The specific segment(s) to be canceled. If none are specified, the request will
     * cancel all segments in the journey.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\SegmentAType[]
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Sets a new segment
     *
     * The specific segment(s) to be canceled. If none are specified, the request will
     * cancel all segments in the journey.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType\SegmentAType[]
     * $segment
     * @return self
     */
    public function setSegment(array $segment)
    {
        $this->segment = $segment;

        return $this;
    }


}

