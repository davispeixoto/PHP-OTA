<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CoverageDetailsType
 *
 * The CoverageDetailsType complex type provides information on a specfic aspect of
 * coverage, for example, supplemental coverage, description, etc.
 * XSD Type: CoverageDetailsType
 */
class CoverageDetailsType extends FormattedTextTextType
{

    /**
     * The CoverageTextType identifes the type of free text that is provided as part of
     * coverage (insurance) information.
     *
     * @property string $coverageTextType
     */
    private $coverageTextType = null;

    /**
     * Gets as coverageTextType
     *
     * The CoverageTextType identifes the type of free text that is provided as part of
     * coverage (insurance) information.
     *
     * @return string
     */
    public function getCoverageTextType()
    {
        return $this->coverageTextType;
    }

    /**
     * Sets a new coverageTextType
     *
     * The CoverageTextType identifes the type of free text that is provided as part of
     * coverage (insurance) information.
     *
     * @param string $coverageTextType
     * @return self
     */
    public function setCoverageTextType($coverageTextType)
    {
        $this->coverageTextType = $coverageTextType;

        return $this;
    }


}

