<?php

namespace Davispeixoto\OpenTravelAlliance\NotifCacheType;

/**
 * Class representing ProductInfoAType
 */
class ProductInfoAType
{

    /**
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @property string $roomTypeCode
     */
    private $roomTypeCode = null;

    /**
     * A code or identification number that identifies the room stay as part of a
     * group, package tour, or block of rooms designated in the inventory.
     *
     * @property string $invBlockCode
     */
    private $invBlockCode = null;

    /**
     * An enumerated type that allows the query to specify a rate category type, and
     * provides major categories for comparison across brands. Refer to OpenTravel Code
     * List Rate Plan Type (RPT).
     *
     * @property string $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * A string value may be used to request a particular code or an ID if the guest
     * qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to
     * specify a negotiated code as a result of a negotiated rate.
     *
     * @property string $ratePlanCode
     */
    private $ratePlanCode = null;

    /**
     * A text field used to indicate a special ID code that is associated with the rate
     * and is essential in the reservation request in order to obtain the rate.
     * Examples are Corporate ID.
     *
     * @property string $ratePlanID
     */
    private $ratePlanID = null;

    /**
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those
     * Rate Plans that are not qualified will appear first, those that are qualified
     * will appear last.
     *
     * @property boolean $ratePlanQualifier
     */
    private $ratePlanQualifier = null;

    /**
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
     *
     * @property string $promotionCode
     */
    private $promotionCode = null;

    /**
     * List of the vendor codes associated with a promotion.
     *
     * @property string[] $promotionVendorCode
     */
    private $promotionVendorCode = null;

    /**
     * Hotel systems often group multiple rate plans into a single category. This
     * refers to that category that is specific to the hotel CRS/ PMS and should not be
     * confused with a GDS rate category.
     *
     * @property string $ratePlanCategory
     */
    private $ratePlanCategory = null;

    /**
     * Gets as roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @return string
     */
    public function getRoomTypeCode()
    {
        return $this->roomTypeCode;
    }

    /**
     * Sets a new roomTypeCode
     *
     * Specific system room type code, ex: A1K, A1Q etc.
     *
     * @param string $roomTypeCode
     * @return self
     */
    public function setRoomTypeCode($roomTypeCode)
    {
        $this->roomTypeCode = $roomTypeCode;

        return $this;
    }

    /**
     * Gets as invBlockCode
     *
     * A code or identification number that identifies the room stay as part of a
     * group, package tour, or block of rooms designated in the inventory.
     *
     * @return string
     */
    public function getInvBlockCode()
    {
        return $this->invBlockCode;
    }

    /**
     * Sets a new invBlockCode
     *
     * A code or identification number that identifies the room stay as part of a
     * group, package tour, or block of rooms designated in the inventory.
     *
     * @param string $invBlockCode
     * @return self
     */
    public function setInvBlockCode($invBlockCode)
    {
        $this->invBlockCode = $invBlockCode;

        return $this;
    }

    /**
     * Gets as ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and
     * provides major categories for comparison across brands. Refer to OpenTravel Code
     * List Rate Plan Type (RPT).
     *
     * @return string
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * An enumerated type that allows the query to specify a rate category type, and
     * provides major categories for comparison across brands. Refer to OpenTravel Code
     * List Rate Plan Type (RPT).
     *
     * @param string $ratePlanType
     * @return self
     */
    public function setRatePlanType($ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;

        return $this;
    }

    /**
     * Gets as ratePlanCode
     *
     * A string value may be used to request a particular code or an ID if the guest
     * qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to
     * specify a negotiated code as a result of a negotiated rate.
     *
     * @return string
     */
    public function getRatePlanCode()
    {
        return $this->ratePlanCode;
    }

    /**
     * Sets a new ratePlanCode
     *
     * A string value may be used to request a particular code or an ID if the guest
     * qualifies for a specific rate, such as AARP, AAA, a corporate rate, etc., or to
     * specify a negotiated code as a result of a negotiated rate.
     *
     * @param string $ratePlanCode
     * @return self
     */
    public function setRatePlanCode($ratePlanCode)
    {
        $this->ratePlanCode = $ratePlanCode;

        return $this;
    }

    /**
     * Gets as ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate
     * and is essential in the reservation request in order to obtain the rate.
     * Examples are Corporate ID.
     *
     * @return string
     */
    public function getRatePlanID()
    {
        return $this->ratePlanID;
    }

    /**
     * Sets a new ratePlanID
     *
     * A text field used to indicate a special ID code that is associated with the rate
     * and is essential in the reservation request in order to obtain the rate.
     * Examples are Corporate ID.
     *
     * @param string $ratePlanID
     * @return self
     */
    public function setRatePlanID($ratePlanID)
    {
        $this->ratePlanID = $ratePlanID;

        return $this;
    }

    /**
     * Gets as ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those
     * Rate Plans that are not qualified will appear first, those that are qualified
     * will appear last.
     *
     * @return boolean
     */
    public function getRatePlanQualifier()
    {
        return $this->ratePlanQualifier;
    }

    /**
     * Sets a new ratePlanQualifier
     *
     * The Rate Plan Qualifier is used to control the sort order of RatePlans. Those
     * Rate Plans that are not qualified will appear first, those that are qualified
     * will appear last.
     *
     * @param boolean $ratePlanQualifier
     * @return self
     */
    public function setRatePlanQualifier($ratePlanQualifier)
    {
        $this->ratePlanQualifier = $ratePlanQualifier;

        return $this;
    }

    /**
     * Gets as promotionCode
     *
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
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
     * Promotion code is the identifier used by the host to link directly with a
     * specific named advertising campaign. By including the required code, the client
     * is able to gain access to special offers which may have been created for a
     * specifically targeted group via a CRM system or for a wider advertising campaign
     * using Television or press adverts.
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
     * Adds as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return self
     * @param string $promotionVendorCode
     */
    public function addToPromotionVendorCode($promotionVendorCode)
    {
        $this->promotionVendorCode[] = $promotionVendorCode;

        return $this;
    }

    /**
     * isset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPromotionVendorCode($index)
    {
        return isset($this->promotionVendorCode[$index]);
    }

    /**
     * unset promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPromotionVendorCode($index)
    {
        unset($this->promotionVendorCode[$index]);
    }

    /**
     * Gets as promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @return string[]
     */
    public function getPromotionVendorCode()
    {
        return $this->promotionVendorCode;
    }

    /**
     * Sets a new promotionVendorCode
     *
     * List of the vendor codes associated with a promotion.
     *
     * @param string $promotionVendorCode
     * @return self
     */
    public function setPromotionVendorCode(array $promotionVendorCode)
    {
        $this->promotionVendorCode = $promotionVendorCode;

        return $this;
    }

    /**
     * Gets as ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This
     * refers to that category that is specific to the hotel CRS/ PMS and should not be
     * confused with a GDS rate category.
     *
     * @return string
     */
    public function getRatePlanCategory()
    {
        return $this->ratePlanCategory;
    }

    /**
     * Sets a new ratePlanCategory
     *
     * Hotel systems often group multiple rate plans into a single category. This
     * refers to that category that is specific to the hotel CRS/ PMS and should not be
     * confused with a GDS rate category.
     *
     * @param string $ratePlanCategory
     * @return self
     */
    public function setRatePlanCategory($ratePlanCategory)
    {
        $this->ratePlanCategory = $ratePlanCategory;

        return $this;
    }


}

