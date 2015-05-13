<?php

namespace Davispeixoto\OpenTravelAlliance\InvBlockRoomType\RatePlansAType\RatePlanAType;

/**
 * Class representing DaysOfWeeksAType
 */
class DaysOfWeeksAType
{

    /**
     * Used to define rate plan by day of week rules for availability, required
     * arrival, or required stay.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DOWRulesType[] $daysOfWeek
     */
    private $daysOfWeek = null;

    /**
     * Adds as daysOfWeek
     *
     * Used to define rate plan by day of week rules for availability, required
     * arrival, or required stay.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DOWRulesType $daysOfWeek
     */
    public function addToDaysOfWeek(\Davispeixoto\OpenTravelAlliance\DOWRulesType $daysOfWeek)
    {
        $this->daysOfWeek[] = $daysOfWeek;

        return $this;
    }

    /**
     * isset daysOfWeek
     *
     * Used to define rate plan by day of week rules for availability, required
     * arrival, or required stay.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDaysOfWeek($index)
    {
        return isset($this->daysOfWeek[$index]);
    }

    /**
     * unset daysOfWeek
     *
     * Used to define rate plan by day of week rules for availability, required
     * arrival, or required stay.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDaysOfWeek($index)
    {
        unset($this->daysOfWeek[$index]);
    }

    /**
     * Gets as daysOfWeek
     *
     * Used to define rate plan by day of week rules for availability, required
     * arrival, or required stay.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DOWRulesType[]
     */
    public function getDaysOfWeek()
    {
        return $this->daysOfWeek;
    }

    /**
     * Sets a new daysOfWeek
     *
     * Used to define rate plan by day of week rules for availability, required
     * arrival, or required stay.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DOWRulesType[] $daysOfWeek
     * @return self
     */
    public function setDaysOfWeek(array $daysOfWeek)
    {
        $this->daysOfWeek = $daysOfWeek;

        return $this;
    }


}

