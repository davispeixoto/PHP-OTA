<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType;

/**
 * Class representing AppliedDiscountAType
 */
class AppliedDiscountAType
{

    /**
     * A vendor specific code used to identify a special rate associated with a
     * specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * A promotion ID identifier assigned by the supplier.
     *
     * @property string $promotionID
     */
    private $promotionID = null;

    /**
     * A promotion code identifier assigned by the supplier.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

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
     * Gets as promotionID
     *
     * A promotion ID identifier assigned by the supplier.
     *
     * @return string
     */
    public function getPromotionID()
    {
        return $this->promotionID;
    }

    /**
     * Sets a new promotionID
     *
     * A promotion ID identifier assigned by the supplier.
     *
     * @param string $promotionID
     * @return self
     */
    public function setPromotionID($promotionID)
    {
        $this->promotionID = $promotionID;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * A promotion code identifier assigned by the supplier.
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
     * A promotion code identifier assigned by the supplier.
     *
     * @param string $promotionCode
     * @return self
     */
    public function setPromotionCode($promotionCode)
    {
        $this->promotionCode = $promotionCode;

        return $this;
    }


}

