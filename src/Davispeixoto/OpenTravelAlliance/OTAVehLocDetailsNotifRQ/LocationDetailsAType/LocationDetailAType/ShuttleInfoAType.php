<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType;

/**
 * Class representing ShuttleInfoAType
 */
class ShuttleInfoAType
{

    /**
     * Identifies the type of shuttle information.
     *
     * @property string $type
     */
    private $type = null;

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
     * The type of shuttle information and a description.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType\ShuttleDescAType[]
     * $shuttleDesc
     */
    private $shuttleDesc = null;

    /**
     * Gets as type
     *
     * Identifies the type of shuttle information.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Identifies the type of shuttle information.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

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

    /**
     * Adds as shuttleDesc
     *
     * The type of shuttle information and a description.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType\ShuttleDescAType
     * $shuttleDesc
     */
    public function addToShuttleDesc(
        \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType\ShuttleDescAType $shuttleDesc
    ) {
        $this->shuttleDesc[] = $shuttleDesc;

        return $this;
    }

    /**
     * isset shuttleDesc
     *
     * The type of shuttle information and a description.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetShuttleDesc($index)
    {
        return isset($this->shuttleDesc[$index]);
    }

    /**
     * unset shuttleDesc
     *
     * The type of shuttle information and a description.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetShuttleDesc($index)
    {
        unset($this->shuttleDesc[$index]);
    }

    /**
     * Gets as shuttleDesc
     *
     * The type of shuttle information and a description.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType\ShuttleDescAType[]
     */
    public function getShuttleDesc()
    {
        return $this->shuttleDesc;
    }

    /**
     * Sets a new shuttleDesc
     *
     * The type of shuttle information and a description.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAVehLocDetailsNotifRQ\LocationDetailsAType\LocationDetailAType\ShuttleInfoAType\ShuttleDescAType[]
     * $shuttleDesc
     * @return self
     */
    public function setShuttleDesc(array $shuttleDesc)
    {
        $this->shuttleDesc = $shuttleDesc;

        return $this;
    }


}
