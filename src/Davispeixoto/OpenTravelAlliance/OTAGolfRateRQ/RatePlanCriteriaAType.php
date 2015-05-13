<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ;

/**
 * Class representing RatePlanCriteriaAType
 */
class RatePlanCriteriaAType
{

    /**
     * The name of a golf course.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\CourseNameAType[]
     * $courseName
     */
    private $courseName = null;

    /**
     * A date or range of dates, including days of the week, used to filter rate
     * results.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\DateRangeAType
     * $dateRange
     */
    private $dateRange = null;

    /**
     * Applied discounts that may include promotions and corporate ID's for negotiated
     * rates.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\AppliedDiscountAType[]
     * $appliedDiscount
     */
    private $appliedDiscount = null;

    /**
     * Summary golfer type qualifying information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\GolferTypeAType
     * $golferType
     */
    private $golferType = null;

    /**
     * Additional rate qualifiers to filter the rate results.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\RateQualifierAType[]
     * $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as courseName
     *
     * The name of a golf course.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\CourseNameAType
     * $courseName
     */
    public function addToCourseName(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\CourseNameAType $courseName
    ) {
        $this->courseName[] = $courseName;

        return $this;
    }

    /**
     * isset courseName
     *
     * The name of a golf course.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseName($index)
    {
        return isset($this->courseName[$index]);
    }

    /**
     * unset courseName
     *
     * The name of a golf course.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseName($index)
    {
        unset($this->courseName[$index]);
    }

    /**
     * Gets as courseName
     *
     * The name of a golf course.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\CourseNameAType[]
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Sets a new courseName
     *
     * The name of a golf course.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\CourseNameAType[]
     * $courseName
     * @return self
     */
    public function setCourseName(array $courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * Gets as dateRange
     *
     * A date or range of dates, including days of the week, used to filter rate
     * results.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\DateRangeAType
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
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\DateRangeAType
     * $dateRange
     * @return self
     */
    public function setDateRange(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\DateRangeAType $dateRange
    ) {
        $this->dateRange = $dateRange;

        return $this;
    }

    /**
     * Adds as appliedDiscount
     *
     * Applied discounts that may include promotions and corporate ID's for negotiated
     * rates.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\AppliedDiscountAType
     * $appliedDiscount
     */
    public function addToAppliedDiscount(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\AppliedDiscountAType $appliedDiscount
    ) {
        $this->appliedDiscount[] = $appliedDiscount;

        return $this;
    }

    /**
     * isset appliedDiscount
     *
     * Applied discounts that may include promotions and corporate ID's for negotiated
     * rates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAppliedDiscount($index)
    {
        return isset($this->appliedDiscount[$index]);
    }

    /**
     * unset appliedDiscount
     *
     * Applied discounts that may include promotions and corporate ID's for negotiated
     * rates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAppliedDiscount($index)
    {
        unset($this->appliedDiscount[$index]);
    }

    /**
     * Gets as appliedDiscount
     *
     * Applied discounts that may include promotions and corporate ID's for negotiated
     * rates.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\AppliedDiscountAType[]
     */
    public function getAppliedDiscount()
    {
        return $this->appliedDiscount;
    }

    /**
     * Sets a new appliedDiscount
     *
     * Applied discounts that may include promotions and corporate ID's for negotiated
     * rates.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\AppliedDiscountAType[]
     * $appliedDiscount
     * @return self
     */
    public function setAppliedDiscount(array $appliedDiscount)
    {
        $this->appliedDiscount = $appliedDiscount;

        return $this;
    }

    /**
     * Gets as golferType
     *
     * Summary golfer type qualifying information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\GolferTypeAType
     */
    public function getGolferType()
    {
        return $this->golferType;
    }

    /**
     * Sets a new golferType
     *
     * Summary golfer type qualifying information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\GolferTypeAType
     * $golferType
     * @return self
     */
    public function setGolferType(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\GolferTypeAType $golferType
    ) {
        $this->golferType = $golferType;

        return $this;
    }

    /**
     * Adds as rateQualifier
     *
     * Additional rate qualifiers to filter the rate results.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\RateQualifierAType
     * $rateQualifier
     */
    public function addToRateQualifier(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\RateQualifierAType $rateQualifier
    ) {
        $this->rateQualifier[] = $rateQualifier;

        return $this;
    }

    /**
     * isset rateQualifier
     *
     * Additional rate qualifiers to filter the rate results.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateQualifier($index)
    {
        return isset($this->rateQualifier[$index]);
    }

    /**
     * unset rateQualifier
     *
     * Additional rate qualifiers to filter the rate results.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateQualifier($index)
    {
        unset($this->rateQualifier[$index]);
    }

    /**
     * Gets as rateQualifier
     *
     * Additional rate qualifiers to filter the rate results.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\RateQualifierAType[]
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * Additional rate qualifiers to filter the rate results.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType\RateQualifierAType[]
     * $rateQualifier
     * @return self
     */
    public function setRateQualifier(array $rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

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

