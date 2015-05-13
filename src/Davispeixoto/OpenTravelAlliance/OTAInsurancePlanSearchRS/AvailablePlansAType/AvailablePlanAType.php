<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType;

/**
 * Class representing AvailablePlanAType
 */
class AvailablePlanAType
{

    /**
     * When true, indicates the plan has been marked as a featured product by the
     * insurance company or 3rd party vendor.
     *
     * @property boolean $featured
     */
    private $featured = null;

    /**
     * May be used to indicate how well the plan matches the original search request
     * parameters.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * The unique identfier for the plan.
     *
     * @property string $planID
     */
    private $planID = null;

    /**
     * The name of the plan.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @property string $typeID
     */
    private $typeID = null;

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
     * Container for detailed descriptions and URLs associated with the insurance
     * product.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\PlanDetailAType
     * $planDetail
     */
    private $planDetail = null;

    /**
     * Container for the name and detailed description of the insurance company
     * offering the product.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\ProviderDetailAType
     * $providerDetail
     */
    private $providerDetail = null;

    /**
     * Container for the name and detailed description of the company underwriting the
     * insurance product.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\UnderwriterDetailAType
     * $underwriterDetail
     */
    private $underwriterDetail = null;

    /**
     * Collection of restrictions associated with purchasing this insurance product.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     * $planRestrictions
     */
    private $planRestrictions = null;

    /**
     * Gets as featured
     *
     * When true, indicates the plan has been marked as a featured product by the
     * insurance company or 3rd party vendor.
     *
     * @return boolean
     */
    public function getFeatured()
    {
        return $this->featured;
    }

    /**
     * Sets a new featured
     *
     * When true, indicates the plan has been marked as a featured product by the
     * insurance company or 3rd party vendor.
     *
     * @param boolean $featured
     * @return self
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * May be used to indicate how well the plan matches the original search request
     * parameters.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * May be used to indicate how well the plan matches the original search request
     * parameters.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Gets as planID
     *
     * The unique identfier for the plan.
     *
     * @return string
     */
    public function getPlanID()
    {
        return $this->planID;
    }

    /**
     * Sets a new planID
     *
     * The unique identfier for the plan.
     *
     * @param string $planID
     * @return self
     */
    public function setPlanID($planID)
    {
        $this->planID = $planID;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the plan.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the plan.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the sub-plan or type of the insurance plan being purchased.
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
     * Specifies the sub-plan or type of the insurance plan being purchased.
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
     * Gets as typeID
     *
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @return string
     */
    public function getTypeID()
    {
        return $this->typeID;
    }

    /**
     * Sets a new typeID
     *
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @param string $typeID
     * @return self
     */
    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;

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
     * Gets as planDetail
     *
     * Container for detailed descriptions and URLs associated with the insurance
     * product.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\PlanDetailAType
     */
    public function getPlanDetail()
    {
        return $this->planDetail;
    }

    /**
     * Sets a new planDetail
     *
     * Container for detailed descriptions and URLs associated with the insurance
     * product.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\PlanDetailAType
     * $planDetail
     * @return self
     */
    public function setPlanDetail(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\PlanDetailAType $planDetail
    ) {
        $this->planDetail = $planDetail;

        return $this;
    }

    /**
     * Gets as providerDetail
     *
     * Container for the name and detailed description of the insurance company
     * offering the product.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\ProviderDetailAType
     */
    public function getProviderDetail()
    {
        return $this->providerDetail;
    }

    /**
     * Sets a new providerDetail
     *
     * Container for the name and detailed description of the insurance company
     * offering the product.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\ProviderDetailAType
     * $providerDetail
     * @return self
     */
    public function setProviderDetail(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\ProviderDetailAType $providerDetail
    ) {
        $this->providerDetail = $providerDetail;

        return $this;
    }

    /**
     * Gets as underwriterDetail
     *
     * Container for the name and detailed description of the company underwriting the
     * insurance product.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\UnderwriterDetailAType
     */
    public function getUnderwriterDetail()
    {
        return $this->underwriterDetail;
    }

    /**
     * Sets a new underwriterDetail
     *
     * Container for the name and detailed description of the company underwriting the
     * insurance product.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\UnderwriterDetailAType
     * $underwriterDetail
     * @return self
     */
    public function setUnderwriterDetail(
        \Davispeixoto\OpenTravelAlliance\OTAInsurancePlanSearchRS\AvailablePlansAType\AvailablePlanAType\UnderwriterDetailAType $underwriterDetail
    ) {
        $this->underwriterDetail = $underwriterDetail;

        return $this;
    }

    /**
     * Adds as planRestriction
     *
     * Collection of restrictions associated with purchasing this insurance product.
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
     * Collection of restrictions associated with purchasing this insurance product.
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
     * Collection of restrictions associated with purchasing this insurance product.
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
     * Collection of restrictions associated with purchasing this insurance product.
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
     * Collection of restrictions associated with purchasing this insurance product.
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


}

