<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType;

/**
 * Class representing AudioVisualReqsAType
 */
class AudioVisualReqsAType
{

    /**
     * Defines a specific audio visual need for the event.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType[]
     * $audioVisualReq
     */
    private $audioVisualReq = null;

    /**
     * Adds as audioVisualReq
     *
     * Defines a specific audio visual need for the event.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType
     * $audioVisualReq
     */
    public function addToAudioVisualReq(
        \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType $audioVisualReq
    ) {
        $this->audioVisualReq[] = $audioVisualReq;

        return $this;
    }

    /**
     * isset audioVisualReq
     *
     * Defines a specific audio visual need for the event.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAudioVisualReq($index)
    {
        return isset($this->audioVisualReq[$index]);
    }

    /**
     * unset audioVisualReq
     *
     * Defines a specific audio visual need for the event.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAudioVisualReq($index)
    {
        unset($this->audioVisualReq[$index]);
    }

    /**
     * Gets as audioVisualReq
     *
     * Defines a specific audio visual need for the event.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType[]
     */
    public function getAudioVisualReq()
    {
        return $this->audioVisualReq;
    }

    /**
     * Sets a new audioVisualReq
     *
     * Defines a specific audio visual need for the event.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType\AudioVisualReqAType[]
     * $audioVisualReq
     * @return self
     */
    public function setAudioVisualReq(array $audioVisualReq)
    {
        $this->audioVisualReq = $audioVisualReq;

        return $this;
    }


}

