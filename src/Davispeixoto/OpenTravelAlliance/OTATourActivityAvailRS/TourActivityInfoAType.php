<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS;

/**
 * Class representing TourActivityInfoAType
 */
class TourActivityInfoAType
{

    /**
     * If true, this is an alternate tour/activity that did not meet all specified
     * criteria.
     *
     * @property boolean $alternateInd
     */
    private $alternateInd = null;

    /**
     * Basic identifying information for the tour/ activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\BasicInfoAType
     * $basicInfo
     */
    private $basicInfo = null;

    /**
     * The tour departure or activity start date/time (and optional duration and
     * available inventory quantity). Note, detailed schedule information may also be
     * returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType
     * $schedule
     */
    private $schedule = null;

    /**
     * Physically challenged accessibility information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType
     * $accessibility
     */
    private $accessibility = null;

    /**
     * Category and type information that describes the tour/ activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityCategoryType
     * $categoryAndType
     */
    private $categoryAndType = null;

    /**
     * Commission information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissionInfo
     */
    private $commissionInfo = null;

    /**
     * Descriptive information about the tour/activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityDescriptionType
     * $description
     */
    private $description = null;

    /**
     * Supported promotion codes and discount programs information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType[]
     * $discount
     */
    private $discount = null;

    /**
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType[]
     * $extra
     */
    private $extra = null;

    /**
     * Insurance requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\InsuranceAType[]
     * $insurance
     */
    private $insurance = null;

    /**
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\LanguageSpokenAType[]
     * $languageSpoken
     */
    private $languageSpoken = null;

    /**
     * The location of the tour/ activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     */
    private $location = null;

    /**
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityTransType[]
     * $pickupDropoff
     */
    private $pickupDropoff = null;

    /**
     * Policies associated with the tour/ activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType $policies
     */
    private $policies = null;

    /**
     * Provides details of the tour supplier and/or operator.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\SupplierOperatorAType[]
     * $supplierOperator
     */
    private $supplierOperator = null;

    /**
     * Gets as alternateInd
     *
     * If true, this is an alternate tour/activity that did not meet all specified
     * criteria.
     *
     * @return boolean
     */
    public function getAlternateInd()
    {
        return $this->alternateInd;
    }

    /**
     * Sets a new alternateInd
     *
     * If true, this is an alternate tour/activity that did not meet all specified
     * criteria.
     *
     * @param boolean $alternateInd
     * @return self
     */
    public function setAlternateInd($alternateInd)
    {
        $this->alternateInd = $alternateInd;

        return $this;
    }

    /**
     * Gets as basicInfo
     *
     * Basic identifying information for the tour/ activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\BasicInfoAType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Basic identifying information for the tour/ activity.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\BasicInfoAType
     * $basicInfo
     * @return self
     */
    public function setBasicInfo(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\BasicInfoAType $basicInfo
    ) {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Gets as schedule
     *
     * The tour departure or activity start date/time (and optional duration and
     * available inventory quantity). Note, detailed schedule information may also be
     * returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The tour departure or activity start date/time (and optional duration and
     * available inventory quantity). Note, detailed schedule information may also be
     * returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType
     * $schedule
     * @return self
     */
    public function setSchedule(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ScheduleAType $schedule
    ) {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * Gets as accessibility
     *
     * Physically challenged accessibility information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType
     */
    public function getAccessibility()
    {
        return $this->accessibility;
    }

    /**
     * Sets a new accessibility
     *
     * Physically challenged accessibility information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType
     * $accessibility
     * @return self
     */
    public function setAccessibility(\Davispeixoto\OpenTravelAlliance\TourActivityAccessibilityType $accessibility)
    {
        $this->accessibility = $accessibility;

        return $this;
    }

    /**
     * Gets as categoryAndType
     *
     * Category and type information that describes the tour/ activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityCategoryType
     */
    public function getCategoryAndType()
    {
        return $this->categoryAndType;
    }

    /**
     * Sets a new categoryAndType
     *
     * Category and type information that describes the tour/ activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityCategoryType
     * $categoryAndType
     * @return self
     */
    public function setCategoryAndType(\Davispeixoto\OpenTravelAlliance\TourActivityCategoryType $categoryAndType)
    {
        $this->categoryAndType = $categoryAndType;

        return $this;
    }

    /**
     * Adds as commissionInfo
     *
     * Commission information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType $commissionInfo
     */
    public function addToCommissionInfo(\Davispeixoto\OpenTravelAlliance\CommissionType $commissionInfo)
    {
        $this->commissionInfo[] = $commissionInfo;

        return $this;
    }

    /**
     * isset commissionInfo
     *
     * Commission information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCommissionInfo($index)
    {
        return isset($this->commissionInfo[$index]);
    }

    /**
     * unset commissionInfo
     *
     * Commission information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCommissionInfo($index)
    {
        unset($this->commissionInfo[$index]);
    }

    /**
     * Gets as commissionInfo
     *
     * Commission information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CommissionType[]
     */
    public function getCommissionInfo()
    {
        return $this->commissionInfo;
    }

    /**
     * Sets a new commissionInfo
     *
     * Commission information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CommissionType[] $commissionInfo
     * @return self
     */
    public function setCommissionInfo(array $commissionInfo)
    {
        $this->commissionInfo = $commissionInfo;

        return $this;
    }

    /**
     * Gets as description
     *
     * Descriptive information about the tour/activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityDescriptionType
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * Descriptive information about the tour/activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityDescriptionType $description
     * @return self
     */
    public function setDescription(\Davispeixoto\OpenTravelAlliance\TourActivityDescriptionType $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Adds as discount
     *
     * Supported promotion codes and discount programs information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType
     * $discount
     */
    public function addToDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType $discount
    ) {
        $this->discount[] = $discount;

        return $this;
    }

    /**
     * isset discount
     *
     * Supported promotion codes and discount programs information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiscount($index)
    {
        return isset($this->discount[$index]);
    }

    /**
     * unset discount
     *
     * Supported promotion codes and discount programs information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiscount($index)
    {
        unset($this->discount[$index]);
    }

    /**
     * Gets as discount
     *
     * Supported promotion codes and discount programs information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType[]
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Supported promotion codes and discount programs information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType[]
     * $discount
     * @return self
     */
    public function setDiscount(array $discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Adds as extra
     *
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType
     * $extra
     */
    public function addToExtra(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType $extra
    ) {
        $this->extra[] = $extra;

        return $this;
    }

    /**
     * isset extra
     *
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtra($index)
    {
        return isset($this->extra[$index]);
    }

    /**
     * unset extra
     *
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtra($index)
    {
        unset($this->extra[$index]);
    }

    /**
     * Gets as extra
     *
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\ExtraAType[]
     * $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Adds as insurance
     *
     * Insurance requirements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\InsuranceAType
     * $insurance
     */
    public function addToInsurance(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\InsuranceAType $insurance
    ) {
        $this->insurance[] = $insurance;

        return $this;
    }

    /**
     * isset insurance
     *
     * Insurance requirements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInsurance($index)
    {
        return isset($this->insurance[$index]);
    }

    /**
     * unset insurance
     *
     * Insurance requirements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInsurance($index)
    {
        unset($this->insurance[$index]);
    }

    /**
     * Gets as insurance
     *
     * Insurance requirements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\InsuranceAType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Insurance requirements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\InsuranceAType[]
     * $insurance
     * @return self
     */
    public function setInsurance(array $insurance)
    {
        $this->insurance = $insurance;

        return $this;
    }

    /**
     * Adds as languageSpoken
     *
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\LanguageSpokenAType
     * $languageSpoken
     */
    public function addToLanguageSpoken(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\LanguageSpokenAType $languageSpoken
    ) {
        $this->languageSpoken[] = $languageSpoken;

        return $this;
    }

    /**
     * isset languageSpoken
     *
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLanguageSpoken($index)
    {
        return isset($this->languageSpoken[$index]);
    }

    /**
     * unset languageSpoken
     *
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLanguageSpoken($index)
    {
        unset($this->languageSpoken[$index]);
    }

    /**
     * Gets as languageSpoken
     *
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\LanguageSpokenAType[]
     */
    public function getLanguageSpoken()
    {
        return $this->languageSpoken;
    }

    /**
     * Sets a new languageSpoken
     *
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\LanguageSpokenAType[]
     * $languageSpoken
     * @return self
     */
    public function setLanguageSpoken(array $languageSpoken)
    {
        $this->languageSpoken = $languageSpoken;

        return $this;
    }

    /**
     * Gets as location
     *
     * The location of the tour/ activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLocationType
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the tour/ activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location
     * @return self
     */
    public function setLocation(\Davispeixoto\OpenTravelAlliance\TourActivityLocationType $location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Gets as pricing
     *
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Pricing information for the tour/ activity that may be broken down by
     * participant category and/or a group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as pickupDropoff
     *
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityTransType $pickupDropoff
     */
    public function addToPickupDropoff(\Davispeixoto\OpenTravelAlliance\TourActivityTransType $pickupDropoff)
    {
        $this->pickupDropoff[] = $pickupDropoff;

        return $this;
    }

    /**
     * isset pickupDropoff
     *
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPickupDropoff($index)
    {
        return isset($this->pickupDropoff[$index]);
    }

    /**
     * unset pickupDropoff
     *
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPickupDropoff($index)
    {
        unset($this->pickupDropoff[$index]);
    }

    /**
     * Gets as pickupDropoff
     *
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityTransType[]
     */
    public function getPickupDropoff()
    {
        return $this->pickupDropoff;
    }

    /**
     * Sets a new pickupDropoff
     *
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityTransType[] $pickupDropoff
     * @return self
     */
    public function setPickupDropoff(array $pickupDropoff)
    {
        $this->pickupDropoff = $pickupDropoff;

        return $this;
    }

    /**
     * Gets as policies
     *
     * Policies associated with the tour/ activity.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType
     */
    public function getPolicies()
    {
        return $this->policies;
    }

    /**
     * Sets a new policies
     *
     * Policies associated with the tour/ activity.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityPolicyType $policies
     * @return self
     */
    public function setPolicies(\Davispeixoto\OpenTravelAlliance\TourActivityPolicyType $policies)
    {
        $this->policies = $policies;

        return $this;
    }

    /**
     * Adds as supplierOperator
     *
     * Provides details of the tour supplier and/or operator.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\SupplierOperatorAType
     * $supplierOperator
     */
    public function addToSupplierOperator(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\SupplierOperatorAType $supplierOperator
    ) {
        $this->supplierOperator[] = $supplierOperator;

        return $this;
    }

    /**
     * isset supplierOperator
     *
     * Provides details of the tour supplier and/or operator.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSupplierOperator($index)
    {
        return isset($this->supplierOperator[$index]);
    }

    /**
     * unset supplierOperator
     *
     * Provides details of the tour supplier and/or operator.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSupplierOperator($index)
    {
        unset($this->supplierOperator[$index]);
    }

    /**
     * Gets as supplierOperator
     *
     * Provides details of the tour supplier and/or operator.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\SupplierOperatorAType[]
     */
    public function getSupplierOperator()
    {
        return $this->supplierOperator;
    }

    /**
     * Sets a new supplierOperator
     *
     * Provides details of the tour supplier and/or operator.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\SupplierOperatorAType[]
     * $supplierOperator
     * @return self
     */
    public function setSupplierOperator(array $supplierOperator)
    {
        $this->supplierOperator = $supplierOperator;

        return $this;
    }


}

