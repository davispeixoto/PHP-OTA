<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType
{

    /**
     * The direction of the trip, such as outbound and return.
     *
     * @property string $tripDirection
     */
    private $tripDirection = null;

    /**
     * Travel origin location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel destination location.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, related
     * travelers' request, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType[]
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Gets as tripDirection
     *
     * The direction of the trip, such as outbound and return.
     *
     * @return string
     */
    public function getTripDirection()
    {
        return $this->tripDirection;
    }

    /**
     * Sets a new tripDirection
     *
     * The direction of the trip, such as outbound and return.
     *
     * @param string $tripDirection
     * @return self
     */
    public function setTripDirection($tripDirection)
    {
        $this->tripDirection = $tripDirection;

        return $this;
    }

    /**
     * Gets as originLocation
     *
     * Travel origin location.
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
     * Travel origin location.
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
     * Travel destination location.
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
     * Travel destination location.
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
     * Adds as trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, related
     * travelers' request, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType
     * $trainSegment
     */
    public function addToTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, related
     * travelers' request, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTrainSegment($index)
    {
        return isset($this->trainSegment[$index]);
    }

    /**
     * unset trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, related
     * travelers' request, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTrainSegment($index)
    {
        unset($this->trainSegment[$index]);
    }

    /**
     * Gets as trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, related
     * travelers' request, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, related
     * travelers' request, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailPriceRQ\RailItineraryAType\OriginDestinationAType\TrainSegmentAType[]
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }


}

