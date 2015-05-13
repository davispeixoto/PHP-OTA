<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType;

/**
 * Class representing UnderwriterDetailAType
 */
class UnderwriterDetailAType
{

    /**
     * Name of the company underwriting the insurance product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $underwriterCompany
     */
    private $underwriterCompany = null;

    /**
     * Detailed description of the underwriter.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType
     * $underwriterDescription
     */
    private $underwriterDescription = null;

    /**
     * Gets as underwriterCompany
     *
     * Name of the company underwriting the insurance product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getUnderwriterCompany()
    {
        return $this->underwriterCompany;
    }

    /**
     * Sets a new underwriterCompany
     *
     * Name of the company underwriting the insurance product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $underwriterCompany
     * @return self
     */
    public function setUnderwriterCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $underwriterCompany)
    {
        $this->underwriterCompany = $underwriterCompany;

        return $this;
    }

    /**
     * Gets as underwriterDescription
     *
     * Detailed description of the underwriter.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getUnderwriterDescription()
    {
        return $this->underwriterDescription;
    }

    /**
     * Sets a new underwriterDescription
     *
     * Detailed description of the underwriter.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType
     * $underwriterDescription
     * @return self
     */
    public function setUnderwriterDescription(
        \Davispeixoto\OpenTravelAlliance\FormattedTextType $underwriterDescription
    ) {
        $this->underwriterDescription = $underwriterDescription;

        return $this;
    }


}

