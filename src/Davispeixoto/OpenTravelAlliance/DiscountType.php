<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DiscountType
 *
 * Identifies and provides details about the discount.
 * XSD Type: DiscountType
 */
class DiscountType extends TotalType
{

    /**
     * @property boolean $taxInclusive
     */
    private $taxInclusive = null;

    /**
     * @property float $percent
     */
    private $percent = null;

    /**
     * Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount
     * spent).
     *
     * @property string $discountCode
     */
    private $discountCode = null;

    /**
     * When true, used to indicate the discount should not be displayed. When false,
     * indicates the discount may be displayed.
     *
     * @property boolean $restrictedDisplayIndicator
     */
    private $restrictedDisplayIndicator = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $discountReason
     */
    private $discountReason = null;

    /**
     * Gets as taxInclusive
     *
     * @return boolean
     */
    public function getTaxInclusive()
    {
        return $this->taxInclusive;
    }

    /**
     * Sets a new taxInclusive
     *
     * @param boolean $taxInclusive
     * @return self
     */
    public function setTaxInclusive($taxInclusive)
    {
        $this->taxInclusive = $taxInclusive;

        return $this;
    }

    /**
     * Gets as percent
     *
     * @return float
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Sets a new percent
     *
     * @param float $percent
     * @return self
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Gets as discountCode
     *
     * Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount
     * spent).
     *
     * @return string
     */
    public function getDiscountCode()
    {
        return $this->discountCode;
    }

    /**
     * Sets a new discountCode
     *
     * Specifies the type of discount (e.g., No condition, LOS, Deposit or Total amount
     * spent).
     *
     * @param string $discountCode
     * @return self
     */
    public function setDiscountCode($discountCode)
    {
        $this->discountCode = $discountCode;

        return $this;
    }

    /**
     * Gets as restrictedDisplayIndicator
     *
     * When true, used to indicate the discount should not be displayed. When false,
     * indicates the discount may be displayed.
     *
     * @return boolean
     */
    public function getRestrictedDisplayIndicator()
    {
        return $this->restrictedDisplayIndicator;
    }

    /**
     * Sets a new restrictedDisplayIndicator
     *
     * When true, used to indicate the discount should not be displayed. When false,
     * indicates the discount may be displayed.
     *
     * @param boolean $restrictedDisplayIndicator
     * @return self
     */
    public function setRestrictedDisplayIndicator($restrictedDisplayIndicator)
    {
        $this->restrictedDisplayIndicator = $restrictedDisplayIndicator;

        return $this;
    }

    /**
     * Gets as discountReason
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getDiscountReason()
    {
        return $this->discountReason;
    }

    /**
     * Sets a new discountReason
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $discountReason
     * @return self
     */
    public function setDiscountReason(\Davispeixoto\OpenTravelAlliance\ParagraphType $discountReason)
    {
        $this->discountReason = $discountReason;

        return $this;
    }


}

