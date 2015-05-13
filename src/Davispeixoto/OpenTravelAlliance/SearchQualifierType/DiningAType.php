<?php

namespace Davispeixoto\OpenTravelAlliance\SearchQualifierType;

/**
 * Class representing DiningAType
 */
class DiningAType
{

    /**
     * The dining seating (e.g., main dining, second dining).
     *
     * @property string $sitting
     */
    private $sitting = null;

    /**
     * Gets as sitting
     *
     * The dining seating (e.g., main dining, second dining).
     *
     * @return string
     */
    public function getSitting()
    {
        return $this->sitting;
    }

    /**
     * Sets a new sitting
     *
     * The dining seating (e.g., main dining, second dining).
     *
     * @param string $sitting
     * @return self
     */
    public function setSitting($sitting)
    {
        $this->sitting = $sitting;

        return $this;
    }


}

