<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RateQualifierType
 *
 * The RateQualifierType complex type describes fully rate information associated
 * with a specific rate quotation, including the description of any promotions that
 * may apply.
 * XSD Type: RateQualifierType
 */
class RateQualifierType
{

    /**
     * Used to indicate the purpose, whether for business, personal or other. Refer to
     * OpenTravel Code List Travel Purpose (TVP).
     *
     * @property string $travelPurpose
     */
    private $travelPurpose = null;

    /**
     * The RateCategory attribute defines a set of valid values for the category of a
     * rate. Typically rates are offered as either Leisure rates or Business
     * (Corporate) rates, with a business rate usually including additional costs such
     * as the cost of insurance, etc. This set of values defines the rate categories.
     * Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @property string $rateCategory
     */
    private $rateCategory = null;

    /**
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

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
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @property string $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * The RatePeriod attribute defines the type of rate that may be applied. For
     * example, typically car rental rates differ based upon the duration of the
     * rental, and the actual rate is then expressed in terms of the period of the
     * rental.
     *
     * @property string $ratePeriod
     */
    private $ratePeriod = null;

    /**
     * When true, only guaranteed rates should be returned. When false, all rates
     * should be returned.
     *
     * @property boolean $guaranteedInd
     */
    private $guaranteedInd = null;

    /**
     * Indicates if this rate is only available to those customers who are flying to
     * the vehicle rental location.
     *  false
     *
     * @property boolean $arriveByFlight
     */
    private $arriveByFlight = null;

    /**
     * The rate authorization code for this rate.
     *
     * @property string $rateAuthorizationCode
     */
    private $rateAuthorizationCode = null;

    /**
     * The identifier assigned to this rate by the vendor.
     *
     * @property string $vendorRateID
     */
    private $vendorRateID = null;

    /**
     * This may be used to provide additional information about the promotion code.
     *
     * @property string $promoDesc
     */
    private $promoDesc = null;

    /**
     * Collection of rate comments.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType[]
     * $rateComments
     */
    private $rateComments = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to
     * OpenTravel Code List Travel Purpose (TVP).
     *
     * @return string
     */
    public function getTravelPurpose()
    {
        return $this->travelPurpose;
    }

    /**
     * Sets a new travelPurpose
     *
     * Used to indicate the purpose, whether for business, personal or other. Refer to
     * OpenTravel Code List Travel Purpose (TVP).
     *
     * @param string $travelPurpose
     * @return self
     */
    public function setTravelPurpose($travelPurpose)
    {
        $this->travelPurpose = $travelPurpose;

        return $this;
    }

    /**
     * Gets as rateCategory
     *
     * The RateCategory attribute defines a set of valid values for the category of a
     * rate. Typically rates are offered as either Leisure rates or Business
     * (Corporate) rates, with a business rate usually including additional costs such
     * as the cost of insurance, etc. This set of values defines the rate categories.
     * Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @return string
     */
    public function getRateCategory()
    {
        return $this->rateCategory;
    }

    /**
     * Sets a new rateCategory
     *
     * The RateCategory attribute defines a set of valid values for the category of a
     * rate. Typically rates are offered as either Leisure rates or Business
     * (Corporate) rates, with a business rate usually including additional costs such
     * as the cost of insurance, etc. This set of values defines the rate categories.
     * Refer to OpenTravel Code List Rate Category (RTC).
     *
     * @param string $rateCategory
     * @return self
     */
    public function setRateCategory($rateCategory)
    {
        $this->rateCategory = $rateCategory;

        return $this;
    }

    /**
     * Gets as corpDiscountNmbr
     *
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization.
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
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization.
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
     * Gets as rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @return string
     */
    public function getRateQualifier()
    {
        return $this->rateQualifier;
    }

    /**
     * Sets a new rateQualifier
     *
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @param string $rateQualifier
     * @return self
     */
    public function setRateQualifier($rateQualifier)
    {
        $this->rateQualifier = $rateQualifier;

        return $this;
    }

    /**
     * Gets as ratePeriod
     *
     * The RatePeriod attribute defines the type of rate that may be applied. For
     * example, typically car rental rates differ based upon the duration of the
     * rental, and the actual rate is then expressed in terms of the period of the
     * rental.
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
     * The RatePeriod attribute defines the type of rate that may be applied. For
     * example, typically car rental rates differ based upon the duration of the
     * rental, and the actual rate is then expressed in terms of the period of the
     * rental.
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
     * Gets as guaranteedInd
     *
     * When true, only guaranteed rates should be returned. When false, all rates
     * should be returned.
     *
     * @return boolean
     */
    public function getGuaranteedInd()
    {
        return $this->guaranteedInd;
    }

    /**
     * Sets a new guaranteedInd
     *
     * When true, only guaranteed rates should be returned. When false, all rates
     * should be returned.
     *
     * @param boolean $guaranteedInd
     * @return self
     */
    public function setGuaranteedInd($guaranteedInd)
    {
        $this->guaranteedInd = $guaranteedInd;

        return $this;
    }

    /**
     * Gets as arriveByFlight
     *
     * Indicates if this rate is only available to those customers who are flying to
     * the vehicle rental location.
     *  false
     *
     * @return boolean
     */
    public function getArriveByFlight()
    {
        return $this->arriveByFlight;
    }

    /**
     * Sets a new arriveByFlight
     *
     * Indicates if this rate is only available to those customers who are flying to
     * the vehicle rental location.
     *  false
     *
     * @param boolean $arriveByFlight
     * @return self
     */
    public function setArriveByFlight($arriveByFlight)
    {
        $this->arriveByFlight = $arriveByFlight;

        return $this;
    }

    /**
     * Gets as rateAuthorizationCode
     *
     * The rate authorization code for this rate.
     *
     * @return string
     */
    public function getRateAuthorizationCode()
    {
        return $this->rateAuthorizationCode;
    }

    /**
     * Sets a new rateAuthorizationCode
     *
     * The rate authorization code for this rate.
     *
     * @param string $rateAuthorizationCode
     * @return self
     */
    public function setRateAuthorizationCode($rateAuthorizationCode)
    {
        $this->rateAuthorizationCode = $rateAuthorizationCode;

        return $this;
    }

    /**
     * Gets as vendorRateID
     *
     * The identifier assigned to this rate by the vendor.
     *
     * @return string
     */
    public function getVendorRateID()
    {
        return $this->vendorRateID;
    }

    /**
     * Sets a new vendorRateID
     *
     * The identifier assigned to this rate by the vendor.
     *
     * @param string $vendorRateID
     * @return self
     */
    public function setVendorRateID($vendorRateID)
    {
        $this->vendorRateID = $vendorRateID;

        return $this;
    }

    /**
     * Gets as promoDesc
     *
     * This may be used to provide additional information about the promotion code.
     *
     * @return string
     */
    public function getPromoDesc()
    {
        return $this->promoDesc;
    }

    /**
     * Sets a new promoDesc
     *
     * This may be used to provide additional information about the promotion code.
     *
     * @param string $promoDesc
     * @return self
     */
    public function setPromoDesc($promoDesc)
    {
        $this->promoDesc = $promoDesc;

        return $this;
    }

    /**
     * Adds as rateComment
     *
     * Collection of rate comments.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType
     * $rateComment
     */
    public function addToRateComments(
        \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType $rateComment
    ) {
        $this->rateComments[] = $rateComment;

        return $this;
    }

    /**
     * isset rateComments
     *
     * Collection of rate comments.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateComments($index)
    {
        return isset($this->rateComments[$index]);
    }

    /**
     * unset rateComments
     *
     * Collection of rate comments.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateComments($index)
    {
        unset($this->rateComments[$index]);
    }

    /**
     * Gets as rateComments
     *
     * Collection of rate comments.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType[]
     */
    public function getRateComments()
    {
        return $this->rateComments;
    }

    /**
     * Sets a new rateComments
     *
     * Collection of rate comments.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RateQualifierType\RateCommentsAType\RateCommentAType[]
     * $rateComments
     * @return self
     */
    public function setRateComments(array $rateComments)
    {
        $this->rateComments = $rateComments;

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

