<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType;

/**
 * Class representing NegotiatedRateAType
 */
class NegotiatedRateAType
{

    /**
     * This is the vendor specific code used to identify a special rate associated with
     * a specific organization.
     *
     * @property string $corpDiscountNmbr
     */
    private $corpDiscountNmbr = null;

    /**
     * The identifier assigned to this rate by the vendor.
     *
     * @property string $vendorRateID
     */
    private $vendorRateID = null;

    /**
     * This is the vendor specific code for rate codes (e.g. WES, 2A, DLY00).
     *
     * @property string $rateQualifier
     */
    private $rateQualifier = null;

    /**
     * This may be used to provide any additional information about rates (e.g., must
     * tee off by 9AM.)
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType\RateCommentAType[]
     * $rateComment
     */
    private $rateComment = null;

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
     * Adds as rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * tee off by 9AM.)
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType\RateCommentAType
     * $rateComment
     */
    public function addToRateComment(
        \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType\RateCommentAType $rateComment
    ) {
        $this->rateComment[] = $rateComment;

        return $this;
    }

    /**
     * isset rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * tee off by 9AM.)
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRateComment($index)
    {
        return isset($this->rateComment[$index]);
    }

    /**
     * unset rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * tee off by 9AM.)
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRateComment($index)
    {
        unset($this->rateComment[$index]);
    }

    /**
     * Gets as rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * tee off by 9AM.)
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType\RateCommentAType[]
     */
    public function getRateComment()
    {
        return $this->rateComment;
    }

    /**
     * Sets a new rateComment
     *
     * This may be used to provide any additional information about rates (e.g., must
     * tee off by 9AM.)
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAGolfRatePlanRS\CourseAType\RateAType\AppliesToAType\NegotiatedRateAType\RateCommentAType[]
     * $rateComment
     * @return self
     */
    public function setRateComment(array $rateComment)
    {
        $this->rateComment = $rateComment;

        return $this;
    }


}

