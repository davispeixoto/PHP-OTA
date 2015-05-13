<?php

namespace Davispeixoto\OpenTravelAlliance\RFPRequestSegmentsType\RFPRequestSegmentAType\EventBlockAType\EventDaysAType\EventDayAType\EventDayFunctionsAType\EventDayFunctionAType\AudioVisualReqsAType;

/**
 * Class representing AudioVisualReqAType
 */
class AudioVisualReqAType
{

    /**
     * Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Describes whether the audio visual request is preferred or required.
     *
     * @property string $audioVisualPref
     */
    private $audioVisualPref = null;

    /**
     * Describes the number of audio visual units as described by the code.
     *
     * @property integer $quantity
     */
    private $quantity = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     */
    private $comments = null;

    /**
     * Gets as code
     *
     * Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Refer to OpenTravel Code Table Meeting Room code (MRC).
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as audioVisualPref
     *
     * Describes whether the audio visual request is preferred or required.
     *
     * @return string
     */
    public function getAudioVisualPref()
    {
        return $this->audioVisualPref;
    }

    /**
     * Sets a new audioVisualPref
     *
     * Describes whether the audio visual request is preferred or required.
     *
     * @param string $audioVisualPref
     * @return self
     */
    public function setAudioVisualPref($audioVisualPref)
    {
        $this->audioVisualPref = $audioVisualPref;

        return $this;
    }

    /**
     * Gets as quantity
     *
     * Describes the number of audio visual units as described by the code.
     *
     * @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets a new quantity
     *
     * Describes the number of audio visual units as described by the code.
     *
     * @param integer $quantity
     * @return self
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets as comments
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $comments
     * @return self
     */
    public function setComments(\Davispeixoto\OpenTravelAlliance\ParagraphType $comments)
    {
        $this->comments = $comments;

        return $this;
    }


}

