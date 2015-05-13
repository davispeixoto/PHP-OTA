<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRQ;

use Davispeixoto\OpenTravelAlliance\InsCoverageType;

/**
 * Class representing PlanForQuoteRQAType
 */
class PlanForQuoteRQAType extends InsCoverageType
{

    /**
     * Information about the traveler(s) to be insured.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InsuranceCustomerType
     * $insuranceCustomer
     */
    private $insuranceCustomer = null;

    /**
     * Gets as insuranceCustomer
     *
     * Information about the traveler(s) to be insured.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InsuranceCustomerType
     */
    public function getInsuranceCustomer()
    {
        return $this->insuranceCustomer;
    }

    /**
     * Sets a new insuranceCustomer
     *
     * Information about the traveler(s) to be insured.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InsuranceCustomerType $insuranceCustomer
     * @return self
     */
    public function setInsuranceCustomer(\Davispeixoto\OpenTravelAlliance\InsuranceCustomerType $insuranceCustomer)
    {
        $this->insuranceCustomer = $insuranceCustomer;

        return $this;
    }


}

