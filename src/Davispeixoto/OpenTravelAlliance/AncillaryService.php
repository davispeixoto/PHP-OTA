<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AncillaryService
 */
class AncillaryService extends AncillaryServiceType
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

