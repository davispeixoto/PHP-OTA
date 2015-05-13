<?php

namespace Davispeixoto\OpenTravelAlliance\OTACancelRQ\OriginAndDestinationSegmentAType;

/**
 * Class representing SegmentAType
 */
class SegmentAType
{

    /**
     * The departure point of a segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $departureStation
     */
    private $departureStation = null;

    /**
     * Arrival point of a train segment.
     *
     * @property \Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation
     */
    private $arrivalStation = null;

    /**
     * Gets as departureStation
     *
     * The departure point of a segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getDepartureStation()
    {
        return $this->departureStation;
    }

    /**
     * Sets a new departureStation
     *
     * The departure point of a segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $departureStation
     * @return self
     */
    public function setDepartureStation(\Davispeixoto\OpenTravelAlliance\LocationType $departureStation)
    {
        $this->departureStation = $departureStation;

        return $this;
    }

    /**
     * Gets as arrivalStation
     *
     * Arrival point of a train segment.
     *
     * @return \Davispeixoto\OpenTravelAlliance\LocationType
     */
    public function getArrivalStation()
    {
        return $this->arrivalStation;
    }

    /**
     * Sets a new arrivalStation
     *
     * Arrival point of a train segment.
     *
     * @param \Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation
     * @return self
     */
    public function setArrivalStation(\Davispeixoto\OpenTravelAlliance\LocationType $arrivalStation)
    {
        $this->arrivalStation = $arrivalStation;

        return $this;
    }


}

