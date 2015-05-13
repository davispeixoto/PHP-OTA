<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ;

use Davispeixoto\OpenTravelAlliance\RailAvailScheduleQueryType;

/**
 * Class representing RailScheduleQueryAType
 */
class RailScheduleQueryAType extends RailAvailScheduleQueryType
{

    /**
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType[]
     * $railPrefs
     */
    private $railPrefs = null;

    /**
     * Adds as railPrefs
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType
     * $railPrefs
     */
    public function addToRailPrefs(
        \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType $railPrefs
    ) {
        $this->railPrefs[] = $railPrefs;

        return $this;
    }

    /**
     * isset railPrefs
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRailPrefs($index)
    {
        return isset($this->railPrefs[$index]);
    }

    /**
     * unset railPrefs
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRailPrefs($index)
    {
        unset($this->railPrefs[$index]);
    }

    /**
     * Gets as railPrefs
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType[]
     */
    public function getRailPrefs()
    {
        return $this->railPrefs;
    }

    /**
     * Sets a new railPrefs
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType[]
     * $railPrefs
     * @return self
     */
    public function setRailPrefs(array $railPrefs)
    {
        $this->railPrefs = $railPrefs;

        return $this;
    }


}

