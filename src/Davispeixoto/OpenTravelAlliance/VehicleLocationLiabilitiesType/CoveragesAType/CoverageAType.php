<?php

namespace Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType;

/**
 * Class representing CoverageAType
 */
class CoverageAType
{

    /**
     * Used to describe the specific coverage type or waiver type. Refer to OpenTravel
     * Code List Vehicle Coverage Type (VCT).
     *
     * @property string $type
     */
    private $type = null;

    /**
     * If true, this type of coverage must be purchased. If false, it is optional.
     *
     * @property boolean $requiredInd
     */
    private $requiredInd = null;

    /**
     * General information about this specific coverage, insurance or fees.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType $coverageInfo
     */
    private $coverageInfo = null;

    /**
     * A collection of fees associated with this coverage, insurance or waiver. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     * $coverageFees
     */
    private $coverageFees = null;

    /**
     * Gets as type
     *
     * Used to describe the specific coverage type or waiver type. Refer to OpenTravel
     * Code List Vehicle Coverage Type (VCT).
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Used to describe the specific coverage type or waiver type. Refer to OpenTravel
     * Code List Vehicle Coverage Type (VCT).
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as requiredInd
     *
     * If true, this type of coverage must be purchased. If false, it is optional.
     *
     * @return boolean
     */
    public function getRequiredInd()
    {
        return $this->requiredInd;
    }

    /**
     * Sets a new requiredInd
     *
     * If true, this type of coverage must be purchased. If false, it is optional.
     *
     * @param boolean $requiredInd
     * @return self
     */
    public function setRequiredInd($requiredInd)
    {
        $this->requiredInd = $requiredInd;

        return $this;
    }

    /**
     * Gets as coverageInfo
     *
     * General information about this specific coverage, insurance or fees.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getCoverageInfo()
    {
        return $this->coverageInfo;
    }

    /**
     * Sets a new coverageInfo
     *
     * General information about this specific coverage, insurance or fees.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $coverageInfo
     * @return self
     */
    public function setCoverageInfo(\Davispeixoto\OpenTravelAlliance\FormattedTextType $coverageInfo)
    {
        $this->coverageInfo = $coverageInfo;

        return $this;
    }

    /**
     * Adds as coverageFee
     *
     * A collection of fees associated with this coverage, insurance or waiver. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType
     * $coverageFee
     */
    public function addToCoverageFees(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType $coverageFee
    ) {
        $this->coverageFees[] = $coverageFee;

        return $this;
    }

    /**
     * isset coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCoverageFees($index)
    {
        return isset($this->coverageFees[$index]);
    }

    /**
     * unset coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCoverageFees($index)
    {
        unset($this->coverageFees[$index]);
    }

    /**
     * Gets as coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     */
    public function getCoverageFees()
    {
        return $this->coverageFees;
    }

    /**
     * Sets a new coverageFees
     *
     * A collection of fees associated with this coverage, insurance or waiver. There
     * may be multiple charges if the charge varies by vehicle type.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationLiabilitiesType\CoveragesAType\CoverageAType\CoverageFeesAType\CoverageFeeAType[]
     * $coverageFees
     * @return self
     */
    public function setCoverageFees(array $coverageFees)
    {
        $this->coverageFees = $coverageFees;

        return $this;
    }


}

