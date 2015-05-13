<?php

namespace Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType;

use Davispeixoto\OpenTravelAlliance\PriceRequestInformationType;

/**
 * Class representing PriceRequestInformationAType
 */
class PriceRequestInformationAType extends PriceRequestInformationType
{

    /**
     * Constrains the pricing to those fares with restrictions that satisfy
     * user-imposed limitations.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType[]
     * $fareRestrictionPref
     */
    private $fareRestrictionPref = null;

    /**
     * Used to specify tax information which may be used to override the taxes in the
     * pricing system.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     */
    private $tax = null;

    /**
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage of the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType
     * $discountPricing
     */
    private $discountPricing = null;

    /**
     * Used to specify a segment that should be overridden.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType[]
     * $segmentOverride
     */
    private $segmentOverride = null;

    /**
     * Specifies an account code to be used in pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType[]
     * $account
     */
    private $account = null;

    /**
     * Location requirement information for pricing.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType
     * $locationRequirement
     */
    private $locationRequirement = null;

    /**
     * Adds as fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy
     * user-imposed limitations.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType
     * $fareRestrictionPref
     */
    public function addToFareRestrictionPref(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType $fareRestrictionPref
    ) {
        $this->fareRestrictionPref[] = $fareRestrictionPref;

        return $this;
    }

    /**
     * isset fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy
     * user-imposed limitations.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareRestrictionPref($index)
    {
        return isset($this->fareRestrictionPref[$index]);
    }

    /**
     * unset fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy
     * user-imposed limitations.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareRestrictionPref($index)
    {
        unset($this->fareRestrictionPref[$index]);
    }

    /**
     * Gets as fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy
     * user-imposed limitations.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType[]
     */
    public function getFareRestrictionPref()
    {
        return $this->fareRestrictionPref;
    }

    /**
     * Sets a new fareRestrictionPref
     *
     * Constrains the pricing to those fares with restrictions that satisfy
     * user-imposed limitations.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\FareRestrictionPrefAType[]
     * $fareRestrictionPref
     * @return self
     */
    public function setFareRestrictionPref(array $fareRestrictionPref)
    {
        $this->fareRestrictionPref = $fareRestrictionPref;

        return $this;
    }

    /**
     * Adds as tax
     *
     * Used to specify tax information which may be used to override the taxes in the
     * pricing system.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType $tax
     */
    public function addToTax(\Davispeixoto\OpenTravelAlliance\AirTaxType $tax)
    {
        $this->tax[] = $tax;

        return $this;
    }

    /**
     * isset tax
     *
     * Used to specify tax information which may be used to override the taxes in the
     * pricing system.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTax($index)
    {
        return isset($this->tax[$index]);
    }

    /**
     * unset tax
     *
     * Used to specify tax information which may be used to override the taxes in the
     * pricing system.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTax($index)
    {
        unset($this->tax[$index]);
    }

    /**
     * Gets as tax
     *
     * Used to specify tax information which may be used to override the taxes in the
     * pricing system.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTaxType[]
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Sets a new tax
     *
     * Used to specify tax information which may be used to override the taxes in the
     * pricing system.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirTaxType[] $tax
     * @return self
     */
    public function setTax(array $tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Gets as discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage of the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType
     */
    public function getDiscountPricing()
    {
        return $this->discountPricing;
    }

    /**
     * Sets a new discountPricing
     *
     * The information needed when a passenger presents a discount/promotional coupon
     * for a dollar/percentage of the fare or when a passenger qualifies for a
     * percentage discount such as a senior discount.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType
     * $discountPricing
     * @return self
     */
    public function setDiscountPricing(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\DiscountPricingAType $discountPricing
    ) {
        $this->discountPricing = $discountPricing;

        return $this;
    }

    /**
     * Adds as segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType
     * $segmentOverride
     */
    public function addToSegmentOverride(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType $segmentOverride
    ) {
        $this->segmentOverride[] = $segmentOverride;

        return $this;
    }

    /**
     * isset segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSegmentOverride($index)
    {
        return isset($this->segmentOverride[$index]);
    }

    /**
     * unset segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSegmentOverride($index)
    {
        unset($this->segmentOverride[$index]);
    }

    /**
     * Gets as segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType[]
     */
    public function getSegmentOverride()
    {
        return $this->segmentOverride;
    }

    /**
     * Sets a new segmentOverride
     *
     * Used to specify a segment that should be overridden.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\SegmentOverrideAType[]
     * $segmentOverride
     * @return self
     */
    public function setSegmentOverride(array $segmentOverride)
    {
        $this->segmentOverride = $segmentOverride;

        return $this;
    }

    /**
     * Adds as account
     *
     * Specifies an account code to be used in pricing.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType
     * $account
     */
    public function addToAccount(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType $account
    ) {
        $this->account[] = $account;

        return $this;
    }

    /**
     * isset account
     *
     * Specifies an account code to be used in pricing.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAccount($index)
    {
        return isset($this->account[$index]);
    }

    /**
     * unset account
     *
     * Specifies an account code to be used in pricing.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAccount($index)
    {
        unset($this->account[$index]);
    }

    /**
     * Gets as account
     *
     * Specifies an account code to be used in pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType[]
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Sets a new account
     *
     * Specifies an account code to be used in pricing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\AccountAType[]
     * $account
     * @return self
     */
    public function setAccount(array $account)
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Gets as locationRequirement
     *
     * Location requirement information for pricing.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType
     */
    public function getLocationRequirement()
    {
        return $this->locationRequirement;
    }

    /**
     * Sets a new locationRequirement
     *
     * Location requirement information for pricing.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType
     * $locationRequirement
     * @return self
     */
    public function setLocationRequirement(
        \Davispeixoto\OpenTravelAlliance\TravelerInfoSummaryType\PriceRequestInformationAType\LocationRequirementAType $locationRequirement
    ) {
        $this->locationRequirement = $locationRequirement;

        return $this;
    }


}

