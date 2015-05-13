<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CoverageType
 *
 * The CoverageType complex type describes the data that is needed to fully
 * describe a vehicle coverage, including the core details along with optional
 * descriptions.
 * XSD Type: CoverageType
 */
class CoverageType
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
     * Textual information about coverage, such as coverage limit or descriptions.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoverageDetailsType[] $details
     */
    private $details = null;

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
     * Adds as details
     *
     * Textual information about coverage, such as coverage limit or descriptions.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CoverageDetailsType $details
     */
    public function addToDetails(\Davispeixoto\OpenTravelAlliance\CoverageDetailsType $details)
    {
        $this->details[] = $details;

        return $this;
    }

    /**
     * isset details
     *
     * Textual information about coverage, such as coverage limit or descriptions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDetails($index)
    {
        return isset($this->details[$index]);
    }

    /**
     * unset details
     *
     * Textual information about coverage, such as coverage limit or descriptions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDetails($index)
    {
        unset($this->details[$index]);
    }

    /**
     * Gets as details
     *
     * Textual information about coverage, such as coverage limit or descriptions.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoverageDetailsType[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Sets a new details
     *
     * Textual information about coverage, such as coverage limit or descriptions.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoverageDetailsType[] $details
     * @return self
     */
    public function setDetails(array $details)
    {
        $this->details = $details;

        return $this;
    }


}

