<?php

namespace Davispeixoto\OpenTravelAlliance\RailReservationSummaryType;

/**
 * Class representing ODInfoAType
 */
class ODInfoAType
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
     * including the origin and destination locations for this segment, the requested
     * class of service, and the operating company, if appropriate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType\TrainSegmentAType[]
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
     * including the origin and destination locations for this segment, the requested
     * class of service, and the operating company, if appropriate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType\TrainSegmentAType
     * $trainSegment
     */
    public function addToTrainSegment(
        \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment[] = $trainSegment;

        return $this;
    }

    /**
     * isset trainSegment
     *
     * A collection of train segments that provide journey information from origin to
     * destination. Each segment has full details on one specific train segment,
     * including the origin and destination locations for this segment, the requested
     * class of service, and the operating company, if appropriate.
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
     * including the origin and destination locations for this segment, the requested
     * class of service, and the operating company, if appropriate.
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
     * including the origin and destination locations for this segment, the requested
     * class of service, and the operating company, if appropriate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType\TrainSegmentAType[]
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
     * including the origin and destination locations for this segment, the requested
     * class of service, and the operating company, if appropriate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailReservationSummaryType\ODInfoAType\TrainSegmentAType[]
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(array $trainSegment)
    {
        $this->trainSegment = $trainSegment;

        return $this;
    }


}

