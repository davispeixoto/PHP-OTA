<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType;

/**
 * Class representing CoveragePrefsAType
 */
class CoveragePrefsAType
{

    /**
     * Specific preference for a type of coverage.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     * $coveragePref
     */
    private $coveragePref = null;

    /**
     * Adds as coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType
     * $coveragePref
     */
    public function addToCoveragePref(
        \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType $coveragePref
    ) {
        $this->coveragePref[] = $coveragePref;

        return $this;
    }

    /**
     * isset coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoveragePref($index)
    {
        return isset($this->coveragePref[$index]);
    }

    /**
     * unset coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoveragePref($index)
    {
        unset($this->coveragePref[$index]);
    }

    /**
     * Gets as coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     */
    public function getCoveragePref()
    {
        return $this->coveragePref;
    }

    /**
     * Sets a new coveragePref
     *
     * Specific preference for a type of coverage.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleAvailRQAdditionalInfoType\CoveragePrefsAType\CoveragePrefAType[]
     * $coveragePref
     * @return self
     */
    public function setCoveragePref(array $coveragePref)
    {
        $this->coveragePref = $coveragePref;

        return $this;
    }


}

