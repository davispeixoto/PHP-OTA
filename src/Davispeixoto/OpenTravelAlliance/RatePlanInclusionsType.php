<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RatePlanInclusionsType
 *
 * Defines charges that are included in this rate plan.
 * XSD Type: RatePlanInclusionsType
 */
class RatePlanInclusionsType
{

    /**
     * Indicates that tax is included in the rate.
     *
     * @property boolean $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * Indicates that service fees are included in the rate.
     *
     * @property boolean $serviceFeeInclusive
     */
    private $serviceFeeInclusive = null;

    /**
     * Description of what is included in the rate plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType
     * $ratePlanInclusionDesciption
     */
    private $ratePlanInclusionDesciption = null;

    /**
     * Gets as taxInclusive
     *
     * Indicates that tax is included in the rate.
     *
     * @return boolean
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * Indicates that tax is included in the rate.
     *
     * @param boolean $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;

        return $this;
    }

    /**
     * Gets as serviceFeeInclusive
     *
     * Indicates that service fees are included in the rate.
     *
     * @return boolean
     */
    public function getServiceFeeInclusive()
    {
        return $this->serviceFeeInclusive;
    }

    /**
     * Sets a new serviceFeeInclusive
     *
     * Indicates that service fees are included in the rate.
     *
     * @param boolean $serviceFeeInclusive
     * @return self
     */
    public function setServiceFeeInclusive($serviceFeeInclusive)
    {
        $this->serviceFeeInclusive = $serviceFeeInclusive;

        return $this;
    }

    /**
     * Gets as ratePlanInclusionDesciption
     *
     * Description of what is included in the rate plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getRatePlanInclusionDesciption()
    {
        return $this->ratePlanInclusionDesciption;
    }

    /**
     * Sets a new ratePlanInclusionDesciption
     *
     * Description of what is included in the rate plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType
     * $ratePlanInclusionDesciption
     * @return self
     */
    public function setRatePlanInclusionDesciption(
        \Davispeixoto\OpenTravelAlliance\ParagraphType $ratePlanInclusionDesciption
    ) {
        $this->ratePlanInclusionDesciption = $ratePlanInclusionDesciption;

        return $this;
    }


}

