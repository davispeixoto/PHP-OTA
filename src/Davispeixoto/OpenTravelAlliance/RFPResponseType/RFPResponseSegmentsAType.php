<?php

namespace Davispeixoto\OpenTravelAlliance\RFPResponseType;

/**
 * Class representing RFPResponseSegmentsAType
 */
class RFPResponseSegmentsAType
{

    /**
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[]
     * $rFPResponseSegment
     */
    private $rFPResponseSegment = null;

    /**
     * Adds as rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType
     * $rFPResponseSegment
     */
    public function addToRFPResponseSegment(
        \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType $rFPResponseSegment
    ) {
        $this->rFPResponseSegment[] = $rFPResponseSegment;

        return $this;
    }

    /**
     * isset rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRFPResponseSegment($index)
    {
        return isset($this->rFPResponseSegment[$index]);
    }

    /**
     * unset rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRFPResponseSegment($index)
    {
        unset($this->rFPResponseSegment[$index]);
    }

    /**
     * Gets as rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[]
     */
    public function getRFPResponseSegment()
    {
        return $this->rFPResponseSegment;
    }

    /**
     * Sets a new rFPResponseSegment
     *
     * This is the response data for a block of rooms and/or meeting space.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPResponseType\RFPResponseSegmentsAType\RFPResponseSegmentAType[]
     * $rFPResponseSegment
     * @return self
     */
    public function setRFPResponseSegment(array $rFPResponseSegment)
    {
        $this->rFPResponseSegment = $rFPResponseSegment;

        return $this;
    }


}

