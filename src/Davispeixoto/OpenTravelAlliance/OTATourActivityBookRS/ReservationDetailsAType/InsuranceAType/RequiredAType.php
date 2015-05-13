<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType;

/**
 * Class representing RequiredAType
 */
class RequiredAType
{

    /**
     * If TRUE, insurance is required for this tour and/or activity and may be provided
     * by the group or individual.
     *
     * @property boolean $ownInsuranceInd
     */
    private $ownInsuranceInd = null;

    /**
     * If TRUE, insurance for this tour and/or activity must be purchased from the tour
     * operator or supplier.
     *
     * @property boolean $supplierInd
     */
    private $supplierInd = null;

    /**
     * Pricing information for the tour/ activity insurance provided by the supplier or
     * operator.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * The name of the insurer provider company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName
     */
    private $providerName = null;

    /**
     * Coverage limitation information for the insurance policy.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit
     */
    private $coverageLimit = null;

    /**
     * Gets as ownInsuranceInd
     *
     * If TRUE, insurance is required for this tour and/or activity and may be provided
     * by the group or individual.
     *
     * @return boolean
     */
    public function getOwnInsuranceInd()
    {
        return $this->ownInsuranceInd;
    }

    /**
     * Sets a new ownInsuranceInd
     *
     * If TRUE, insurance is required for this tour and/or activity and may be provided
     * by the group or individual.
     *
     * @param boolean $ownInsuranceInd
     * @return self
     */
    public function setOwnInsuranceInd($ownInsuranceInd)
    {
        $this->ownInsuranceInd = $ownInsuranceInd;

        return $this;
    }

    /**
     * Gets as supplierInd
     *
     * If TRUE, insurance for this tour and/or activity must be purchased from the tour
     * operator or supplier.
     *
     * @return boolean
     */
    public function getSupplierInd()
    {
        return $this->supplierInd;
    }

    /**
     * Sets a new supplierInd
     *
     * If TRUE, insurance for this tour and/or activity must be purchased from the tour
     * operator or supplier.
     *
     * @param boolean $supplierInd
     * @return self
     */
    public function setSupplierInd($supplierInd)
    {
        $this->supplierInd = $supplierInd;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Pricing information for the tour/ activity insurance provided by the supplier or
     * operator.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Pricing information for the tour/ activity insurance provided by the supplier or
     * operator.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityBookRS\ReservationDetailsAType\InsuranceAType\RequiredAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Gets as providerName
     *
     * The name of the insurer provider company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * The name of the insurer provider company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName
     * @return self
     */
    public function setProviderName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Gets as coverageLimit
     *
     * Coverage limitation information for the insurance policy.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoverageLimitType
     */
    public function getCoverageLimit()
    {
        return $this->coverageLimit;
    }

    /**
     * Sets a new coverageLimit
     *
     * Coverage limitation information for the insurance policy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit
     * @return self
     */
    public function setCoverageLimit(\Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit)
    {
        $this->coverageLimit = $coverageLimit;

        return $this;
    }


}

