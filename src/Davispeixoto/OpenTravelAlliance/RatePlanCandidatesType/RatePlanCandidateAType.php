<?php

namespace Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType;

/**
 * Class representing RatePlanCandidateAType
 */
class RatePlanCandidateAType
{

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
     * A unique identifier for this rate plan candidate.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Qualifies whether the response should include prepaid rates, exclude prepaid
     * rates, or include prepaid rates only.
     *
     * @property string $prepaidQualifier
     */
    private $prepaidQualifier = null;

    /**
     * If TRUE, the response should include ONLY those rates that are available in the
     * date range specified. If FALSE, all rates are to be returned.
     *
     * @property boolean $availRatesOnlyInd
     */
    private $availRatesOnlyInd = null;

    /**
     * Description: A string value that specifies the rate plan filter. A rate plan
     * filter allows similar rate plans to be grouped together.
     *
     * @property string $ratePlanFilterCode
     */
    private $ratePlanFilterCode = null;

    /**
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     * $hotelRefs
     */
    private $hotelRefs = null;

    /**
     * Defines which meals are included with this rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType
     * $mealsIncluded
     */
    private $mealsIncluded = null;

    /**
     * Defines policy types for this rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType
     * $arrivalPolicy
     */
    private $arrivalPolicy = null;

    /**
     * Defines commission attributes for this rate plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType
     * $ratePlanCommission
     */
    private $ratePlanCommission = null;

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

    /**
     * Gets as rPH
     *
     * A unique identifier for this rate plan candidate.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * A unique identifier for this rate plan candidate.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Gets as prepaidQualifier
     *
     * Qualifies whether the response should include prepaid rates, exclude prepaid
     * rates, or include prepaid rates only.
     *
     * @return string
     */
    public function getPrepaidQualifier()
    {
        return $this->prepaidQualifier;
    }

    /**
     * Sets a new prepaidQualifier
     *
     * Qualifies whether the response should include prepaid rates, exclude prepaid
     * rates, or include prepaid rates only.
     *
     * @param string $prepaidQualifier
     * @return self
     */
    public function setPrepaidQualifier($prepaidQualifier)
    {
        $this->prepaidQualifier = $prepaidQualifier;

        return $this;
    }

    /**
     * Gets as availRatesOnlyInd
     *
     * If TRUE, the response should include ONLY those rates that are available in the
     * date range specified. If FALSE, all rates are to be returned.
     *
     * @return boolean
     */
    public function getAvailRatesOnlyInd()
    {
        return $this->availRatesOnlyInd;
    }

    /**
     * Sets a new availRatesOnlyInd
     *
     * If TRUE, the response should include ONLY those rates that are available in the
     * date range specified. If FALSE, all rates are to be returned.
     *
     * @param boolean $availRatesOnlyInd
     * @return self
     */
    public function setAvailRatesOnlyInd($availRatesOnlyInd)
    {
        $this->availRatesOnlyInd = $availRatesOnlyInd;

        return $this;
    }

    /**
     * Gets as ratePlanFilterCode
     *
     * Description: A string value that specifies the rate plan filter. A rate plan
     * filter allows similar rate plans to be grouped together.
     *
     * @return string
     */
    public function getRatePlanFilterCode()
    {
        return $this->ratePlanFilterCode;
    }

    /**
     * Sets a new ratePlanFilterCode
     *
     * Description: A string value that specifies the rate plan filter. A rate plan
     * filter allows similar rate plans to be grouped together.
     *
     * @param string $ratePlanFilterCode
     * @return self
     */
    public function setRatePlanFilterCode($ratePlanFilterCode)
    {
        $this->ratePlanFilterCode = $ratePlanFilterCode;

        return $this;
    }

    /**
     * Adds as hotelRef
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType
     * $hotelRef
     */
    public function addToHotelRefs(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType $hotelRef
    ) {
        $this->hotelRefs[] = $hotelRef;

        return $this;
    }

    /**
     * isset hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHotelRefs($index)
    {
        return isset($this->hotelRefs[$index]);
    }

    /**
     * unset hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHotelRefs($index)
    {
        unset($this->hotelRefs[$index]);
    }

    /**
     * Gets as hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     */
    public function getHotelRefs()
    {
        return $this->hotelRefs;
    }

    /**
     * Sets a new hotelRefs
     *
     * A collection of hotel identifiers to which the rate plan applies.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\HotelRefsAType\HotelRefAType[]
     * $hotelRefs
     * @return self
     */
    public function setHotelRefs(array $hotelRefs)
    {
        $this->hotelRefs = $hotelRefs;

        return $this;
    }

    /**
     * Gets as mealsIncluded
     *
     * Defines which meals are included with this rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType
     */
    public function getMealsIncluded()
    {
        return $this->mealsIncluded;
    }

    /**
     * Sets a new mealsIncluded
     *
     * Defines which meals are included with this rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType
     * $mealsIncluded
     * @return self
     */
    public function setMealsIncluded(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\MealsIncludedAType $mealsIncluded
    ) {
        $this->mealsIncluded = $mealsIncluded;

        return $this;
    }

    /**
     * Gets as arrivalPolicy
     *
     * Defines policy types for this rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType
     */
    public function getArrivalPolicy()
    {
        return $this->arrivalPolicy;
    }

    /**
     * Sets a new arrivalPolicy
     *
     * Defines policy types for this rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType
     * $arrivalPolicy
     * @return self
     */
    public function setArrivalPolicy(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\ArrivalPolicyAType $arrivalPolicy
    ) {
        $this->arrivalPolicy = $arrivalPolicy;

        return $this;
    }

    /**
     * Gets as ratePlanCommission
     *
     * Defines commission attributes for this rate plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType
     */
    public function getRatePlanCommission()
    {
        return $this->ratePlanCommission;
    }

    /**
     * Sets a new ratePlanCommission
     *
     * Defines commission attributes for this rate plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType
     * $ratePlanCommission
     * @return self
     */
    public function setRatePlanCommission(
        \Davispeixoto\OpenTravelAlliance\RatePlanCandidatesType\RatePlanCandidateAType\RatePlanCommissionAType $ratePlanCommission
    ) {
        $this->ratePlanCommission = $ratePlanCommission;

        return $this;
    }


}

