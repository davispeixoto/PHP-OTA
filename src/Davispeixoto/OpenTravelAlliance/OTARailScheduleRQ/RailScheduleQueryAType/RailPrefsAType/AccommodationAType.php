<?php

namespace Davispeixoto\OpenTravelAlliance\OTARailScheduleRQ\RailScheduleQueryAType\RailPrefsAType;

use Davispeixoto\OpenTravelAlliance\AccommodationType;

/**
 * Class representing AccommodationAType
 */
class AccommodationAType extends AccommodationType
{

    /**
     * The preference level for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as preferLevel
     *
     * The preference level for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * The preference level for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

