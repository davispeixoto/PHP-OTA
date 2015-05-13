<?php

namespace Davispeixoto\OpenTravelAlliance\SailingInfoType;

use Davispeixoto\OpenTravelAlliance\SailingBaseType;

/**
 * Class representing SelectedSailingAType
 */
class SelectedSailingAType extends SailingBaseType
{

    /**
     * Specifies the cruise line unique identifier for a particular sailing.
     *
     * @property string $voyageID
     */
    private $voyageID = null;

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
     * Specifies the status of the voyage. Refer to OpenTravel Code table Status (STS).
     *
     * @property string $status
     */
    private $status = null;

    /**
     * Number of ports of call that the specific sailing has.
     *
     * @property integer $portsOfCallQuantity
     */
    private $portsOfCallQuantity = null;

    /**
     * Gets as voyageID
     *
     * Specifies the cruise line unique identifier for a particular sailing.
     *
     * @return string
     */
    public function getVoyageID()
    {
        return $this->voyageID;
    }

    /**
     * Sets a new voyageID
     *
     * Specifies the cruise line unique identifier for a particular sailing.
     *
     * @param string $voyageID
     * @return self
     */
    public function setVoyageID($voyageID)
    {
        $this->voyageID = $voyageID;

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
     * Gets as status
     *
     * Specifies the status of the voyage. Refer to OpenTravel Code table Status (STS).
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets a new status
     *
     * Specifies the status of the voyage. Refer to OpenTravel Code table Status (STS).
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets as portsOfCallQuantity
     *
     * Number of ports of call that the specific sailing has.
     *
     * @return integer
     */
    public function getPortsOfCallQuantity()
    {
        return $this->portsOfCallQuantity;
    }

    /**
     * Sets a new portsOfCallQuantity
     *
     * Number of ports of call that the specific sailing has.
     *
     * @param integer $portsOfCallQuantity
     * @return self
     */
    public function setPortsOfCallQuantity($portsOfCallQuantity)
    {
        $this->portsOfCallQuantity = $portsOfCallQuantity;

        return $this;
    }


}

