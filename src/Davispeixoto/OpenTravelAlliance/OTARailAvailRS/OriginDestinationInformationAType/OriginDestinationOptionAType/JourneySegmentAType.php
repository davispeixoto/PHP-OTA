<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType;

/**
 * Class representing JourneySegmentAType
 */
class JourneySegmentAType
{

    /**
     * Train segment information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType
     * $trainSegment
     */
    private $trainSegment = null;

    /**
     * Bus segment information which may be hosted in the rail provider system or a
     * code share.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType
     * $busSegment
     */
    private $busSegment = null;

    /**
     * Gets as trainSegment
     *
     * Train segment information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType
     */
    public function getTrainSegment()
    {
        return $this->trainSegment;
    }

    /**
     * Sets a new trainSegment
     *
     * Train segment information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType
     * $trainSegment
     * @return self
     */
    public function setTrainSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\TrainSegmentAType $trainSegment
    ) {
        $this->trainSegment = $trainSegment;

        return $this;
    }

    /**
     * Gets as busSegment
     *
     * Bus segment information which may be hosted in the rail provider system or a
     * code share.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType
     */
    public function getBusSegment()
    {
        return $this->busSegment;
    }

    /**
     * Sets a new busSegment
     *
     * Bus segment information which may be hosted in the rail provider system or a
     * code share.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType
     * $busSegment
     * @return self
     */
    public function setBusSegment(
        \Davispeixoto\OpenTravelAlliance\OTARailAvailRS\OriginDestinationInformationAType\OriginDestinationOptionAType\JourneySegmentAType\BusSegmentAType $busSegment
    ) {
        $this->busSegment = $busSegment;

        return $this;
    }


}

