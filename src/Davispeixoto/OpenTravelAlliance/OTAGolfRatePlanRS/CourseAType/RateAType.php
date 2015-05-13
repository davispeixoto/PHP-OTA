<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType;

/**
 * Class representing RateAType
 */
class RateAType
{

    /**
     * An ID or code for a golf course.
     *
     * @property mixed $code
     */
    private $code = null;

    /**
     * The rate ID or code.
     *
     * @property string $rateCode
     */
    private $rateCode = null;

    /**
     * The name of the rate.
     *
     * @property string $rateName
     */
    private $rateName = null;

    /**
     * The valid duration of the rate.
     *
     * @property string $ratePeriod
     */
    private $ratePeriod = null;

    /**
     * A vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * A promotion ID or code identifier assigned by the supplier.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * An ID or code for a frequent player, member, etc.
     *
     * @property string $customerCode
     */
    private $customerCode = null;

    /**
     * A date or range of dates, including days of the week, used to filter rate
     * results.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\DateRangeAType
     * $dateRange
     */
    private $dateRange = null;

    /**
     * Amenities included with a rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AmenityAType[]
     * $amenity
     */
    private $amenity = null;

    /**
     * Constraints for the rate plan, including golfer types and facility(s) that the
     * rate applies to.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType
     * $appliesTo
     */
    private $appliesTo = null;

    /**
     * Charge information associated with the cart rental.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\CartFeeAType[]
     * $cartFee
     */
    private $cartFee = null;

    /**
     * Charge information associated with greens fee.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\GreensFeeAType[]
     * $greensFee
     */
    private $greensFee = null;

    /**
     * Policies associated with the rate.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\PolicyAType[]
     * $policy
     */
    private $policy = null;

    /**
     * An extensible list of associated rate categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListRateCategoryType $rateCategory
     */
    private $rateCategory = null;

    /**
     * Rules that apply to the rate.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType[] $rules
     */
    private $rules = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as code
     *
     * An ID or code for a golf course.
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * An ID or code for a golf course.
     *
     * @param mixed $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as rateCode
     *
     * The rate ID or code.
     *
     * @return string
     */
    public function getRateCode()
    {
        return $this->rateCode;
    }

    /**
     * Sets a new rateCode
     *
     * The rate ID or code.
     *
     * @param string $rateCode
     * @return self
     */
    public function setRateCode($rateCode)
    {
        $this->rateCode = $rateCode;

        return $this;
    }

    /**
     * Gets as rateName
     *
     * The name of the rate.
     *
     * @return string
     */
    public function getRateName()
    {
        return $this->rateName;
    }

    /**
     * Sets a new rateName
     *
     * The name of the rate.
     *
     * @param string $rateName
     * @return self
     */
    public function setRateName($rateName)
    {
        $this->rateName = $rateName;

        return $this;
    }

    /**
     * Gets as ratePeriod
     *
     * The valid duration of the rate.
     *
     * @return string
     */
    public function getRatePeriod()
    {
        return $this->ratePeriod;
    }

    /**
     * Sets a new ratePeriod
     *
     * The valid duration of the rate.
     *
     * @param string $ratePeriod
     * @return self
     */
    public function setRatePeriod($ratePeriod)
    {
        $this->ratePeriod = $ratePeriod;

        return $this;
    }

    /**
     * Gets as corpDiscountNmbr
     *
     * A vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @return string
     */
    public function getCorpDiscountNmbr()
    {
        return $this->corpDiscountNmbr;
    }

    /**
     * Sets a new corpDiscountNmbr
     *
     * A vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @param string $corpDiscountNmbr
     * @return self
     */
    public function setCorpDiscountNmbr($corpDiscountNmbr)
    {
        $this->corpDiscountNmbr = $corpDiscountNmbr;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * A promotion ID or code identifier assigned by the supplier.
     *
     * @return string
     */
    public function getPromotionCode()
    {
        return $this->promotionCode;
    }

    /**
     * Sets a new promotionCode
     *
     * A promotion ID or code identifier assigned by the supplier.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }

    /**
     * Gets as customerCode
     *
     * An ID or code for a frequent player, member, etc.
     *
     * @return string
     */
    public function getCustomerCode()
    {
        return $this->customerCode;
    }

    /**
     * Sets a new customerCode
     *
     * An ID or code for a frequent player, member, etc.
     *
     * @param string $customerCode
     * @return self
     */
    public function setCustomerCode($customerCode)
    {
        $this->customerCode = $customerCode;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * A date or range of dates, including days of the week, used to filter rate
     * results.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\DateRangeAType
     */
    public function getDateRange()
    {
        return $this->dateRange;
    }

    /**
     * Sets a new dateRange
     *
     * A date or range of dates, including days of the week, used to filter rate
     * results.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\DateRangeAType
     * $dateRange
     * @return self
     */
    public function setDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\DateRangeAType $dateRange
    ) {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as amenity
     *
     * Amenities included with a rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AmenityAType
     * $amenity
     */
    public function addToAmenity(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AmenityAType $amenity
    ) {
        $this->amenity[] = $amenity;

        return $this;
    }

    /**
     * isset amenity
     *
     * Amenities included with a rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAmenity($index)
    {
        return isset($this->amenity[$index]);
    }

    /**
     * unset amenity
     *
     * Amenities included with a rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAmenity($index)
    {
        unset($this->amenity[$index]);
    }

    /**
     * Gets as amenity
     *
     * Amenities included with a rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AmenityAType[]
     */
    public function getAmenity()
    {
        return $this->amenity;
    }

    /**
     * Sets a new amenity
     *
     * Amenities included with a rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AmenityAType[]
     * $amenity
     * @return self
     */
    public function setAmenity(array $amenity)
    {
        $this->amenity = $amenity;

        return $this;
    }

    /**
     * Gets as appliesTo
     *
     * Constraints for the rate plan, including golfer types and facility(s) that the
     * rate applies to.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType
     */
    public function getAppliesTo()
    {
        return $this->appliesTo;
    }

    /**
     * Sets a new appliesTo
     *
     * Constraints for the rate plan, including golfer types and facility(s) that the
     * rate applies to.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType
     * $appliesTo
     * @return self
     */
    public function setAppliesTo(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType $appliesTo
    ) {
        $this->appliesTo = $appliesTo;

        return $this;
    }

    /**
     * Adds as cartFee
     *
     * Charge information associated with the cart rental.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\CartFeeAType
     * $cartFee
     */
    public function addToCartFee(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\CartFeeAType $cartFee
    ) {
        $this->cartFee[] = $cartFee;

        return $this;
    }

    /**
     * isset cartFee
     *
     * Charge information associated with the cart rental.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCartFee($index)
    {
        return isset($this->cartFee[$index]);
    }

    /**
     * unset cartFee
     *
     * Charge information associated with the cart rental.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCartFee($index)
    {
        unset($this->cartFee[$index]);
    }

    /**
     * Gets as cartFee
     *
     * Charge information associated with the cart rental.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\CartFeeAType[]
     */
    public function getCartFee()
    {
        return $this->cartFee;
    }

    /**
     * Sets a new cartFee
     *
     * Charge information associated with the cart rental.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\CartFeeAType[]
     * $cartFee
     * @return self
     */
    public function setCartFee(array $cartFee)
    {
        $this->cartFee = $cartFee;

        return $this;
    }

    /**
     * Adds as greensFee
     *
     * Charge information associated with greens fee.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\GreensFeeAType
     * $greensFee
     */
    public function addToGreensFee(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\GreensFeeAType $greensFee
    ) {
        $this->greensFee[] = $greensFee;

        return $this;
    }

    /**
     * isset greensFee
     *
     * Charge information associated with greens fee.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGreensFee($index)
    {
        return isset($this->greensFee[$index]);
    }

    /**
     * unset greensFee
     *
     * Charge information associated with greens fee.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGreensFee($index)
    {
        unset($this->greensFee[$index]);
    }

    /**
     * Gets as greensFee
     *
     * Charge information associated with greens fee.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\GreensFeeAType[]
     */
    public function getGreensFee()
    {
        return $this->greensFee;
    }

    /**
     * Sets a new greensFee
     *
     * Charge information associated with greens fee.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\GreensFeeAType[]
     * $greensFee
     * @return self
     */
    public function setGreensFee(array $greensFee)
    {
        $this->greensFee = $greensFee;

        return $this;
    }

    /**
     * Adds as policy
     *
     * Policies associated with the rate.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\PolicyAType
     * $policy
     */
    public function addToPolicy(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\PolicyAType $policy
    ) {
        $this->policy[] = $policy;

        return $this;
    }

    /**
     * isset policy
     *
     * Policies associated with the rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPolicy($index)
    {
        return isset($this->policy[$index]);
    }

    /**
     * unset policy
     *
     * Policies associated with the rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPolicy($index)
    {
        unset($this->policy[$index]);
    }

    /**
     * Gets as policy
     *
     * Policies associated with the rate.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\PolicyAType[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Sets a new policy
     *
     * Policies associated with the rate.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\PolicyAType[]
     * $policy
     * @return self
     */
    public function setPolicy(array $policy)
    {
        $this->policy = $policy;

        return $this;
    }

    /**
     * Gets as rateCategory
     *
     * An extensible list of associated rate categories.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListRateCategoryType
     */
    public function getRateCategory()
    {
        return $this->rateCategory;
    }

    /**
     * Sets a new rateCategory
     *
     * An extensible list of associated rate categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListRateCategoryType $rateCategory
     * @return self
     */
    public function setRateCategory(\Davispeixoto\OpenTravelAlliance\ListRateCategoryType $rateCategory)
    {
        $this->rateCategory = $rateCategory;

        return $this;
    }

    /**
     * Adds as rules
     *
     * Rules that apply to the rate.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType $rules
     */
    public function addToRules(\Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType $rules)
    {
        $this->rules[] = $rules;

        return $this;
    }

    /**
     * isset rules
     *
     * Rules that apply to the rate.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRules($index)
    {
        return isset($this->rules[$index]);
    }

    /**
     * unset rules
     *
     * Rules that apply to the rate.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRules($index)
    {
        unset($this->rules[$index]);
    }

    /**
     * Gets as rules
     *
     * Rules that apply to the rate.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType[]
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * Sets a new rules
     *
     * Rules that apply to the rate.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GolfAppliedRuleType[] $rules
     * @return self
     */
    public function setRules(array $rules)
    {
        $this->rules = $rules;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

