<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType;

/**
 * Class representing ProviderDetailAType
 */
class ProviderDetailAType
{

    /**
     * Name of the insurance company offering the product.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany
     */
    private $providerCompany = null;

    /**
     * Detailed description of the insurance company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FormattedTextType
     * $providerDescription
     */
    private $providerDescription = null;

    /**
     * Gets as providerCompany
     *
     * Name of the insurance company offering the product.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProviderCompany()
    {
        return $this->providerCompany;
    }

    /**
     * Sets a new providerCompany
     *
     * Name of the insurance company offering the product.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany
     * @return self
     */
    public function setProviderCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany)
    {
        $this->providerCompany = $providerCompany;

        return $this;
    }

    /**
     * Gets as providerDescription
     *
     * Detailed description of the insurance company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FormattedTextType
     */
    public function getProviderDescription()
    {
        return $this->providerDescription;
    }

    /**
     * Sets a new providerDescription
     *
     * Detailed description of the insurance company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FormattedTextType $providerDescription
     * @return self
     */
    public function setProviderDescription(\Davispeixoto\OpenTravelAlliance\FormattedTextType $providerDescription)
    {
        $this->providerDescription = $providerDescription;

        return $this;
    }


}

