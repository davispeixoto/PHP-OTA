<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS;

/**
 * Class representing TourActivityInfoAType
 */
class TourActivityInfoAType
{

    /**
     * If true, this is an alternate tour/activity that did not meet all specified
     * search criteria.
     *
     * @property boolean $alternateInd
     */
    private $alternateInd = null;

    /**
     * Core information for the tour/ activity, including ID(s) and names.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityIDType $basicInfo
     */
    private $basicInfo = null;

    /**
     * The tour departure or activity start date/time (and optional duration). Note,
     * detailed schedule information may also be returned.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType
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
     * Descriptive information about the tour/activity.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityDescriptionType
     * $description
     */
    private $description = null;

    /**
     * Supported promotion and discount program information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType
     * $discount
     */
    private $discount = null;

    /**
     * Extras (amenities) available and/or required for the tour/ activity.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType[]
     * $extra
     */
    private $extra = null;

    /**
     * Insurance options and requirements.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\InsuranceAType[]
     * $insurance
     */
    private $insurance = null;

    /**
     * The name of languages (and an optional ISO language code) spoken by the
     * supplier/ operator staff.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType[]
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
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PickupDropoffAType[]
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
     * Guideline price range. Note, no detailed pricing is returned in this message.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType
     * $pricing
     */
    private $pricing = null;

    /**
     * Provides details of the tour supplier and/or operator.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType[]
     * $supplierOperator
     */
    private $supplierOperator = null;

    /**
     * Gets as alternateInd
     *
     * If true, this is an alternate tour/activity that did not meet all specified
     * search criteria.
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
     * search criteria.
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
     * Core information for the tour/ activity, including ID(s) and names.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityIDType
     */
    public function getBasicInfo()
    {
        return $this->basicInfo;
    }

    /**
     * Sets a new basicInfo
     *
     * Core information for the tour/ activity, including ID(s) and names.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityIDType $basicInfo
     * @return self
     */
    public function setBasicInfo(\Davispeixoto\OpenTravelAlliance\TourActivityIDType $basicInfo)
    {
        $this->basicInfo = $basicInfo;

        return $this;
    }

    /**
     * Gets as schedule
     *
     * The tour departure or activity start date/time (and optional duration). Note,
     * detailed schedule information may also be returned.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * Sets a new schedule
     *
     * The tour departure or activity start date/time (and optional duration). Note,
     * detailed schedule information may also be returned.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType
     * $schedule
     * @return self
     */
    public function setSchedule(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ScheduleAType $schedule
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
     * Gets as discount
     *
     * Supported promotion and discount program information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * Supported promotion and discount program information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType
     * $discount
     * @return self
     */
    public function setDiscount(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\DiscountAType $discount
    ) {
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType
     * $extra
     */
    public function addToExtra(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType $extra
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType[]
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
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\ExtraAType[]
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
     * Insurance options and requirements.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\InsuranceAType
     * $insurance
     */
    public function addToInsurance(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\InsuranceAType $insurance
    ) {
        $this->insurance[] = $insurance;

        return $this;
    }

    /**
     * isset insurance
     *
     * Insurance options and requirements.
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
     * Insurance options and requirements.
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
     * Insurance options and requirements.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\InsuranceAType[]
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     * Sets a new insurance
     *
     * Insurance options and requirements.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\InsuranceAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType $languageSpoken
     */
    public function addToLanguageSpoken(\Davispeixoto\OpenTravelAlliance\TourActivityLanguageType $languageSpoken)
    {
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
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLanguageType[]
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
     * Adds as pickupDropoff
     *
     * Pickup and/or dropoff information if transportation is provided to the tour/
     * activity location, including pricing if it applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PickupDropoffAType
     * $pickupDropoff
     */
    public function addToPickupDropoff(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PickupDropoffAType $pickupDropoff
    ) {
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PickupDropoffAType[]
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
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PickupDropoffAType[]
     * $pickupDropoff
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
     * Gets as pricing
     *
     * Guideline price range. Note, no detailed pricing is returned in this message.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType
     */
    public function getPricing()
    {
        return $this->pricing;
    }

    /**
     * Sets a new pricing
     *
     * Guideline price range. Note, no detailed pricing is returned in this message.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType
     * $pricing
     * @return self
     */
    public function setPricing(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRS\TourActivityInfoAType\PricingAType $pricing
    ) {
        $this->pricing = $pricing;

        return $this;
    }

    /**
     * Adds as supplierOperator
     *
     * Provides details of the tour supplier and/or operator.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType
     * $supplierOperator
     */
    public function addToSupplierOperator(\Davispeixoto\OpenTravelAlliance\TourActivitySupplierType $supplierOperator)
    {
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
     * @return \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\TourActivitySupplierType[]
     * $supplierOperator
     * @return self
     */
    public function setSupplierOperator(array $supplierOperator)
    {
        $this->supplierOperator = $supplierOperator;

        return $this;
    }


}

