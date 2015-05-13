<?php

namespace Davispeixoto\OpenTravelAlliance\OTAReadRQ\ReadRequestsAType\HotelReadRequestAType;

/**
 * Class representing SelectionCriteriaAType
 */
class SelectionCriteriaAType
{

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
     * Specifies the type of date provided in the date time span attributes.
     *
     * @property string $dateType
     */
    private $dateType = null;

    /**
     * Indicates which reservations should be selected based on delivery status.
     *
     * @property string $selectionType
     */
    private $selectionType = null;

    /**
     * Code identifying a group block.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * Specifies the status of the reservations to be delivered.
     *
     * @property string $resStatus
     */
    private $resStatus = null;

    /**
     * The method by which the original reservation was delivered. Refer to OpenTravel
     * Code list Distribution Type (DTB).
     *
     * @property string $originalDeliveryMethodCode
     */
    private $originalDeliveryMethodCode = null;

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
     * Gets as dateType
     *
     * Specifies the type of date provided in the date time span attributes.
     *
     * @return string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * Sets a new dateType
     *
     * Specifies the type of date provided in the date time span attributes.
     *
     * @param string $dateType
     * @return self
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;

        return $this;
    }

    /**
     * Gets as selectionType
     *
     * Indicates which reservations should be selected based on delivery status.
     *
     * @return string
     */
    public function getSelectionType()
    {
        return $this->selectionType;
    }

    /**
     * Sets a new selectionType
     *
     * Indicates which reservations should be selected based on delivery status.
     *
     * @param string $selectionType
     * @return self
     */
    public function setSelectionType($selectionType)
    {
        $this->selectionType = $selectionType;

        return $this;
    }

    /**
     * Gets as groupCode
     *
     * Code identifying a group block.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * Code identifying a group block.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Gets as resStatus
     *
     * Specifies the status of the reservations to be delivered.
     *
     * @return string
     */
    public function getResStatus()
    {
        return $this->resStatus;
    }

    /**
     * Sets a new resStatus
     *
     * Specifies the status of the reservations to be delivered.
     *
     * @param string $resStatus
     * @return self
     */
    public function setResStatus($resStatus)
    {
        $this->resStatus = $resStatus;

        return $this;
    }

    /**
     * Gets as originalDeliveryMethodCode
     *
     * The method by which the original reservation was delivered. Refer to OpenTravel
     * Code list Distribution Type (DTB).
     *
     * @return string
     */
    public function getOriginalDeliveryMethodCode()
    {
        return $this->originalDeliveryMethodCode;
    }

    /**
     * Sets a new originalDeliveryMethodCode
     *
     * The method by which the original reservation was delivered. Refer to OpenTravel
     * Code list Distribution Type (DTB).
     *
     * @param string $originalDeliveryMethodCode
     * @return self
     */
    public function setOriginalDeliveryMethodCode($originalDeliveryMethodCode)
    {
        $this->originalDeliveryMethodCode = $originalDeliveryMethodCode;

        return $this;
    }


}

