<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType;

/**
 * Class representing OriginDestinationAType
 */
class OriginDestinationAType
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
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment,related
     * travelers' request, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType[]
     * $trainSegment
     */
    private $trainSegment = null;

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
     * Adds as trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment,related
     * travelers' request, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType
     * $trainSegment
     */
    public function addToTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment,related
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
     * including the origin and destination locations for this segment,related
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
     * including the origin and destination locations for this segment,related
     * travelers' request, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType[]
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
     * including the origin and destination locations for this segment,related
     * travelers' request, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailBookRQ\RailBookInfoAType\OriginDestinationAType\TrainSegmentAType[]
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }


}

