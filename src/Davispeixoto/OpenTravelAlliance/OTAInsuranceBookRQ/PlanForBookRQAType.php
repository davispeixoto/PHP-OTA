<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsuranceBookRQ;

use Davispeixoto\OpenTravelAlliance\InsCoverageType;

/**
 * Class representing PlanForBookRQAType
 */
class PlanForBookRQAType extends InsCoverageType
{

    /**
     * @property \Davispeixoto\OpenTravelAlliance\InsuranceCustomerType
     * $insuranceCustomer
     */
    private $insuranceCustomer = null;

    /**
     * Cost of insurance plan from initial quote (allows for price validation).
     *
     * @property \Davispeixoto\OpenTravelAlliance\PlanCostType $planCost
     */
    private $planCost = null;

    /**
     * Unique identifier associated with booking request message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     */
    private $uniqueID = null;

    /**
     * Gets as insuranceCustomer
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
     * @param \Davispeixoto\OpenTravelAlliance\InsuranceCustomerType $insuranceCustomer
     * @return self
     */
    public function setInsuranceCustomer(\Davispeixoto\OpenTravelAlliance\InsuranceCustomerType $insuranceCustomer)
    {
        $this->insuranceCustomer = $insuranceCustomer;

        return $this;
    }

    /**
     * Gets as planCost
     *
     * Cost of insurance plan from initial quote (allows for price validation).
     *
     * @return \Davispeixoto\OpenTravelAlliance\PlanCostType
     */
    public function getPlanCost()
    {
        return $this->planCost;
    }

    /**
     * Sets a new planCost
     *
     * Cost of insurance plan from initial quote (allows for price validation).
     *
     * @param \Davispeixoto\OpenTravelAlliance\PlanCostType $planCost
     * @return self
     */
    public function setPlanCost(\Davispeixoto\OpenTravelAlliance\PlanCostType $planCost)
    {
        $this->planCost = $planCost;

        return $this;
    }

    /**
     * Gets as uniqueID
     *
     * Unique identifier associated with booking request message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getUniqueID()
    {
        return $this->uniqueID;
    }

    /**
     * Sets a new uniqueID
     *
     * Unique identifier associated with booking request message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID
     * @return self
     */
    public function setUniqueID(\Davispeixoto\OpenTravelAlliance\UniqueIDType $uniqueID)
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }


}

