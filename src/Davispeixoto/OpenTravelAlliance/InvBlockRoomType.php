<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing InvBlockRoomType
 *
 * Used to define the room types and all of their supporting data within a room
 * block.
 * XSD Type: InvBlockRoomType
 */
class InvBlockRoomType
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
     * Specfic system room type code (e.g. GENR, CONC, SUIT).
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RoomTypeAllocationsAType[]
     * $roomTypeAllocations
     */
    private $roomTypeAllocations = null;

    /**
     * This allows for multiple rate plans for a specific room type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     * $ratePlans
     */
    private $ratePlans = null;

    /**
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DOWRulesType[] $daysOfWeeks
     */
    private $daysOfWeeks = null;

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
     * Gets as roomTypeCode
     *
     * Specfic system room type code (e.g. GENR, CONC, SUIT).
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specfic system room type code (e.g. GENR, CONC, SUIT).
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }

    /**
     * Adds as roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RoomTypeAllocationsAType
     * $roomTypeAllocations
     */
    public function addToRoomTypeAllocations(
        \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RoomTypeAllocationsAType $roomTypeAllocations
    ) {
        $this->roomTypeAllocations[] = $roomTypeAllocations;

        return $this;
    }

    /**
     * isset roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRoomTypeAllocations($index)
    {
        return isset($this->roomTypeAllocations[$index]);
    }

    /**
     * unset roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRoomTypeAllocations($index)
    {
        unset($this->roomTypeAllocations[$index]);
    }

    /**
     * Gets as roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RoomTypeAllocationsAType[]
     */
    public function getRoomTypeAllocations()
    {
        return $this->roomTypeAllocations;
    }

    /**
     * Sets a new roomTypeAllocations
     *
     * This allows for multiple allocations to be blocked for a specific room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RoomTypeAllocationsAType[]
     * $roomTypeAllocations
     * @return self
     */
    public function setRoomTypeAllocations(array $roomTypeAllocations)
    {
        $this->roomTypeAllocations = $roomTypeAllocations;

        return $this;
    }

    /**
     * Adds as ratePlan
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType
     * $ratePlan
     */
    public function addToRatePlans(
        \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType $ratePlan
    ) {
        $this->ratePlans[] = $ratePlan;

        return $this;
    }

    /**
     * isset ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRatePlans($index)
    {
        return isset($this->ratePlans[$index]);
    }

    /**
     * unset ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRatePlans($index)
    {
        unset($this->ratePlans[$index]);
    }

    /**
     * Gets as ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     */
    public function getRatePlans()
    {
        return $this->ratePlans;
    }

    /**
     * Sets a new ratePlans
     *
     * This allows for multiple rate plans for a specific room type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType[]
     * $ratePlans
     * @return self
     */
    public function setRatePlans(array $ratePlans)
    {
        $this->ratePlans = $ratePlans;

        return $this;
    }

    /**
     * Adds as daysOfWeek
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DOWRulesType $daysOfWeek
     */
    public function addToDaysOfWeeks(\Davispeixoto\OpenTravelAlliance\DOWRulesType $daysOfWeek)
    {
        $this->daysOfWeeks[] = $daysOfWeek;

        return $this;
    }

    /**
     * isset daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDaysOfWeeks($index)
    {
        return isset($this->daysOfWeeks[$index]);
    }

    /**
     * unset daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDaysOfWeeks($index)
    {
        unset($this->daysOfWeeks[$index]);
    }

    /**
     * Gets as daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DOWRulesType[]
     */
    public function getDaysOfWeeks()
    {
        return $this->daysOfWeeks;
    }

    /**
     * Sets a new daysOfWeeks
     *
     * This is available so multiple rules or multiple date ranges may be applied.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DOWRulesType[] $daysOfWeeks
     * @return self
     */
    public function setDaysOfWeeks(array $daysOfWeeks)
    {
        $this->daysOfWeeks = $daysOfWeeks;

        return $this;
    }


}

