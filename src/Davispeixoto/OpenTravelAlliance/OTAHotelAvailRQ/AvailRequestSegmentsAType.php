<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ;

/**
 * Class representing AvailRequestSegmentsAType
 */
class AvailRequestSegmentsAType
{

    /**
     * The AvailRequestSegment allows for future expansion of the message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType
     * $availRequestSegment
     */
    private $availRequestSegment = null;

    /**
     * Gets as availRequestSegment
     *
     * The AvailRequestSegment allows for future expansion of the message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType
     */
    public function getAvailRequestSegment()
    {
        return $this->availRequestSegment;
    }

    /**
     * Sets a new availRequestSegment
     *
     * The AvailRequestSegment allows for future expansion of the message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType
     * $availRequestSegment
     * @return self
     */
    public function setAvailRequestSegment(
        \Davispeixoto\OpenTravelAlliance\OTAHotelAvailRQ\AvailRequestSegmentsAType\AvailRequestSegmentAType $availRequestSegment
    ) {
        $this->availRequestSegment = $availRequestSegment;

        return $this;
    }


}

