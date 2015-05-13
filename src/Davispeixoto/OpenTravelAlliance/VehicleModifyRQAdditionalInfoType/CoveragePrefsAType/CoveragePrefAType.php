<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleModifyRQAdditionalInfoType\CoveragePrefsAType;

/**
 * Class representing CoveragePrefAType
 */
class CoveragePrefAType
{

    /**
     * Identifies the type of coverage, for example, collision damage waiver. Refer to
     * OpenTravel Code List Vehicle Coverage Type (VCT).
     *
     * @property string $coverageType
     */
    private $coverageType = null;

    /**
     * Allows for an industry-specific code that describes this coverage to be
     * specified, for example, CDW may be indicated when the coverage type is Collision
     * Damage Waiver.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Gets as coverageType
     *
     * Identifies the type of coverage, for example, collision damage waiver. Refer to
     * OpenTravel Code List Vehicle Coverage Type (VCT).
     *
     * @return string
     */
    public function getCoverageType()
    {
        return $this->coverageType;
    }

    /**
     * Sets a new coverageType
     *
     * Identifies the type of coverage, for example, collision damage waiver. Refer to
     * OpenTravel Code List Vehicle Coverage Type (VCT).
     *
     * @param string $coverageType
     * @return self
     */
    public function setCoverageType($coverageType)
    {
        $this->coverageType = $coverageType;

        return $this;
    }

    /**
     * Gets as code
     *
     * Allows for an industry-specific code that describes this coverage to be
     * specified, for example, CDW may be indicated when the coverage type is Collision
     * Damage Waiver.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Allows for an industry-specific code that describes this coverage to be
     * specified, for example, CDW may be indicated when the coverage type is Collision
     * Damage Waiver.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

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

