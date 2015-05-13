<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\KeywordsAType;

use Davispeixoto\OpenTravelAlliance\ParagraphType;

/**
 * Class representing KeywordAType
 */
class KeywordAType extends ParagraphType
{

    /**
     * The code used to identify a keyword.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The policy number for this keyword.
     *
     * @property string $policyNumber
     */
    private $policyNumber = null;

    /**
     * Another keyword to which this keyword is attached.
     *
     * @property string $attachToKeyword
     */
    private $attachToKeyword = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @property string $action
     */
    private $action = null;

    /**
     * Gets as code
     *
     * The code used to identify a keyword.
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
     * The code used to identify a keyword.
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
     * Gets as policyNumber
     *
     * The policy number for this keyword.
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets a new policyNumber
     *
     * The policy number for this keyword.
     *
     * @param string $policyNumber
     * @return self
     */
    public function setPolicyNumber($policyNumber)
    {
        $this->policyNumber = $policyNumber;

        return $this;
    }

    /**
     * Gets as attachToKeyword
     *
     * Another keyword to which this keyword is attached.
     *
     * @return string
     */
    public function getAttachToKeyword()
    {
        return $this->attachToKeyword;
    }

    /**
     * Sets a new attachToKeyword
     *
     * Another keyword to which this keyword is attached.
     *
     * @param string $attachToKeyword
     * @return self
     */
    public function setAttachToKeyword($attachToKeyword)
    {
        $this->attachToKeyword = $attachToKeyword;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as action
     *
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * To specify if the action to be taken is a replacement, addition, deletion, or
     * update.
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }


}

