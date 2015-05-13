<?php

namespace Davispeixoto\OpenTravelAlliance\RailReservationType\ItineraryAType;

/**
 * Class representing OriginAndDestinationAType
 */
class OriginAndDestinationAType
{

    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Full details on one specific train segment, including the origin and destination
     * locations for this segment, equipment used, services offered, etc.
     *
     * @property \Davispeixoto\OpenTravelAlliance\BookedTrainSegmentType[]
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
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
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
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
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
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
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
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
     * Full details on one specific train segment, including the origin and destination
     * locations for this segment, equipment used, services offered, etc.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\BookedTrainSegmentType $trainSegment
     */
    public function addToTrainSegment(\Davispeixoto\OpenTravelAlliance\BookedTrainSegmentType $trainSegment)
    {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * Full details on one specific train segment, including the origin and destination
     * locations for this segment, equipment used, services offered, etc.
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
     * Full details on one specific train segment, including the origin and destination
     * locations for this segment, equipment used, services offered, etc.
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
     * Full details on one specific train segment, including the origin and destination
     * locations for this segment, equipment used, services offered, etc.
     *
     * @return \Davispeixoto\OpenTravelAlliance\BookedTrainSegmentType[]
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * Full details on one specific train segment, including the origin and destination
     * locations for this segment, equipment used, services offered, etc.
     *
     * @param \Davispeixoto\OpenTravelAlliance\BookedTrainSegmentType[] $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }


}

