<?php

namespace Davispeixoto\OpenTravelAlliance\OTACruiseSailAvailRQ;

use Davispeixoto\OpenTravelAlliance\DateTimeSpanType;

/**
 * Class representing SailingDateRangeAType
 */
class SailingDateRangeAType extends DateTimeSpanType
{

    /**
     * The shortest duration for the search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $minDuration
     */
    private $minDuration = null;

    /**
     * The longest duration for the search.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $maxDuration
     */
    private $maxDuration = null;

    /**
     * A list of individual durations to be included in the response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType[] $listOfDurations
     */
    private $listOfDurations = null;

    /**
     * Gets as minDuration
     *
     * The shortest duration for the search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getMinDuration()
    {
        return $this->minDuration;
    }

    /**
     * Sets a new minDuration
     *
     * The shortest duration for the search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $minDuration
     * @return self
     */
    public function setMinDuration(\Davispeixoto\OpenTravelAlliance\DurationType $minDuration)
    {
        $this->minDuration = $minDuration;

        return $this;
    }

    /**
     * Gets as maxDuration
     *
     * The longest duration for the search.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getMaxDuration()
    {
        return $this->maxDuration;
    }

    /**
     * Sets a new maxDuration
     *
     * The longest duration for the search.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $maxDuration
     * @return self
     */
    public function setMaxDuration(\Davispeixoto\OpenTravelAlliance\DurationType $maxDuration)
    {
        $this->maxDuration = $maxDuration;

        return $this;
    }

    /**
     * Adds as listOfDurations
     *
     * A list of individual durations to be included in the response.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $listOfDurations
     */
    public function addToListOfDurations(\Davispeixoto\OpenTravelAlliance\DurationType $listOfDurations)
    {
        $this->listOfDurations[] = $listOfDurations;

        return $this;
    }

    /**
     * isset listOfDurations
     *
     * A list of individual durations to be included in the response.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfDurations($index)
    {
        return isset($this->listOfDurations[$index]);
    }

    /**
     * unset listOfDurations
     *
     * A list of individual durations to be included in the response.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfDurations($index)
    {
        unset($this->listOfDurations[$index]);
    }

    /**
     * Gets as listOfDurations
     *
     * A list of individual durations to be included in the response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType[]
     */
    public function getListOfDurations()
    {
        return $this->listOfDurations;
    }

    /**
     * Sets a new listOfDurations
     *
     * A list of individual durations to be included in the response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType[] $listOfDurations
     * @return self
     */
    public function setListOfDurations(array $listOfDurations)
    {
        $this->listOfDurations = $listOfDurations;

        return $this;
    }


}

