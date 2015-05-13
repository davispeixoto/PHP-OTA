<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRS\TourActivityInfoAType\DiscountAType;

/**
 * Class representing PromotionAType
 */
class PromotionAType
{

    /**
     * @property string $__value
     */
    private $__value = null;

    /**
     * A promotion code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * The starting date for a promotion.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $startDate
     */
    private $startDate = null;

    /**
     * The ending date for a promotion.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $endDate
     */
    private $endDate = null;

    /**
     * Disclaimer related to a promotion.
     *
     * @property string $disclaimer
     */
    private $disclaimer = null;

    /**
     * A percentage off the tour/activity price associated with the promotion.
     *
     * @property float $discountPercentage
     */
    private $discountPercentage = null;

    /**
     * A monetary amount off the tour/activity price associated with the promotion.
     *
     * @property float $discountAmount
     */
    private $discountAmount = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }

        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as code
     *
     * A promotion code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * A promotion code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as startDate
     *
     * The starting date for a promotion.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The starting date for a promotion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $startDate
     * @return self
     */
    public function setStartDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Gets as endDate
     *
     * The ending date for a promotion.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The ending date for a promotion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $endDate
     * @return self
     */
    public function setEndDate(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Gets as disclaimer
     *
     * Disclaimer related to a promotion.
     *
     * @return string
     */
    public function getDisclaimer()
    {
        return $this->disclaimer;
    }

    /**
     * Sets a new disclaimer
     *
     * Disclaimer related to a promotion.
     *
     * @param string $disclaimer
     * @return self
     */
    public function setDisclaimer($disclaimer)
    {
        $this->disclaimer = $disclaimer;

        return $this;
    }

    /**
     * Gets as discountPercentage
     *
     * A percentage off the tour/activity price associated with the promotion.
     *
     * @return float
     */
    public function getDiscountPercentage()
    {
        return $this->discountPercentage;
    }

    /**
     * Sets a new discountPercentage
     *
     * A percentage off the tour/activity price associated with the promotion.
     *
     * @param float $discountPercentage
     * @return self
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->discountPercentage = $discountPercentage;

        return $this;
    }

    /**
     * Gets as discountAmount
     *
     * A monetary amount off the tour/activity price associated with the promotion.
     *
     * @return float
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Sets a new discountAmount
     *
     * A monetary amount off the tour/activity price associated with the promotion.
     *
     * @param float $discountAmount
     * @return self
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }


}

