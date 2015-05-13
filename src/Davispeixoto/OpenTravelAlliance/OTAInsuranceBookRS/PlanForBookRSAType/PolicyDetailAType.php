<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsuranceBookRS\PlanForBookRSAType;

/**
 * Class representing PolicyDetailAType
 */
class PolicyDetailAType
{

    /**
     * The date the insurance booking occured on.
     *
     * @property \DateTime $orderDate
     */
    private $orderDate = null;

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Unique policy number assigned by the insurance company upon issuing the policy.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $policyNumber
     */
    private $policyNumber = null;

    /**
     * Internal vendor reference number for policy.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $refNumber
     */
    private $refNumber = null;

    /**
     * Container for any restrictions to coverage of the insurance plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     * $planRestrictions
     */
    private $planRestrictions = null;

    /**
     * Specifies the location of a file containing policy coverage details.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $policyDetailURL
     */
    private $policyDetailURL = null;

    /**
     * Gets as orderDate
     *
     * The date the insurance booking occured on.
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Sets a new orderDate
     *
     * The date the insurance booking occured on.
     *
     * @param \DateTime $orderDate
     * @return self
     */
    public function setOrderDate(\DateTime $orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as policyNumber
     *
     * Unique policy number assigned by the insurance company upon issuing the policy.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getPolicyNumber()
    {
        return $this->policyNumber;
    }

    /**
     * Sets a new policyNumber
     *
     * Unique policy number assigned by the insurance company upon issuing the policy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $policyNumber
     * @return self
     */
    public function setPolicyNumber(\Davispeixoto\OpenTravelAlliance\UniqueIDType $policyNumber)
    {
        $this->policyNumber = $policyNumber;

        return $this;
    }

    /**
     * Adds as refNumber
     *
     * Internal vendor reference number for policy.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $refNumber
     */
    public function addToRefNumber(\Davispeixoto\OpenTravelAlliance\UniqueIDType $refNumber)
    {
        $this->refNumber[] = $refNumber;

        return $this;
    }

    /**
     * isset refNumber
     *
     * Internal vendor reference number for policy.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefNumber($index)
    {
        return isset($this->refNumber[$index]);
    }

    /**
     * unset refNumber
     *
     * Internal vendor reference number for policy.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefNumber($index)
    {
        unset($this->refNumber[$index]);
    }

    /**
     * Gets as refNumber
     *
     * Internal vendor reference number for policy.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType[]
     */
    public function getRefNumber()
    {
        return $this->refNumber;
    }

    /**
     * Sets a new refNumber
     *
     * Internal vendor reference number for policy.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType[] $refNumber
     * @return self
     */
    public function setRefNumber(array $refNumber)
    {
        $this->refNumber = $refNumber;

        return $this;
    }

    /**
     * Adds as planRestriction
     *
     * Container for any restrictions to coverage of the insurance plan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType
     * $planRestriction
     */
    public function addToPlanRestrictions(
        \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType $planRestriction
    ) {
        $this->planRestrictions[] = $planRestriction;

        return $this;
    }

    /**
     * isset planRestrictions
     *
     * Container for any restrictions to coverage of the insurance plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlanRestrictions($index)
    {
        return isset($this->planRestrictions[$index]);
    }

    /**
     * unset planRestrictions
     *
     * Container for any restrictions to coverage of the insurance plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlanRestrictions($index)
    {
        unset($this->planRestrictions[$index]);
    }

    /**
     * Gets as planRestrictions
     *
     * Container for any restrictions to coverage of the insurance plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     */
    public function getPlanRestrictions()
    {
        return $this->planRestrictions;
    }

    /**
     * Sets a new planRestrictions
     *
     * Container for any restrictions to coverage of the insurance plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     * $planRestrictions
     * @return self
     */
    public function setPlanRestrictions(array $planRestrictions)
    {
        $this->planRestrictions = $planRestrictions;

        return $this;
    }

    /**
     * Gets as policyDetailURL
     *
     * Specifies the location of a file containing policy coverage details.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getPolicyDetailURL()
    {
        return $this->policyDetailURL;
    }

    /**
     * Sets a new policyDetailURL
     *
     * Specifies the location of a file containing policy coverage details.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $policyDetailURL
     * @return self
     */
    public function setPolicyDetailURL(\Davispeixoto\OpenTravelAlliance\URLType $policyDetailURL)
    {
        $this->policyDetailURL = $policyDetailURL;

        return $this;
    }


}

