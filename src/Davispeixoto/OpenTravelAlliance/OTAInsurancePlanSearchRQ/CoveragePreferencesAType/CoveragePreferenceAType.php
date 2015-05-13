<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRQ\CoveragePreferencesAType;

use Davispeixoto\OpenTravelAlliance\CoverageLimitType;

/**
 * Class representing CoveragePreferenceAType
 */
class CoveragePreferenceAType extends CoverageLimitType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
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
     * Used to indicate a level of preference for an associated item.
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

