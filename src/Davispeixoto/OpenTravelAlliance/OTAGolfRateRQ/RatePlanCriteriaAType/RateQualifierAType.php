<?php

namespace Davispeixoto\OpenTravelAlliance\OTAGolfRateRQ\RatePlanCriteriaAType;

/**
 * Class representing RateQualifierAType
 */
class RateQualifierAType
{

    /**
     * Used to indicate a special ID code that is associated with a rate and is
     * essential in the reservation request in order to obtain the rate. Examples are
     * Corporate ID.
     *
     * @property string $rateID
     */
    private $rateID = null;

    /**
     * A string value may be used to request a particular code or an ID if the golfer
     * qualifies for a specific rate, such as AARP, AAA or a corporate or negotiated
     * rate.
     *
     * @property string $rateCode
     */
    private $rateCode = null;

    /**
     * An extensible list of rate types.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListRatePlanType $ratePlanType
     */
    private $ratePlanType = null;

    /**
     * An extensible list of rate categories.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ListRateCategoryType $rateCategory
     */
    private $rateCategory = null;

    /**
     * Gets as rateID
     *
     * Used to indicate a special ID code that is associated with a rate and is
     * essential in the reservation request in order to obtain the rate. Examples are
     * Corporate ID.
     *
     * @return string
     */
    public function getRateID()
    {
        return $this->rateID;
    }

    /**
     * Sets a new rateID
     *
     * Used to indicate a special ID code that is associated with a rate and is
     * essential in the reservation request in order to obtain the rate. Examples are
     * Corporate ID.
     *
     * @param string $rateID
     * @return self
     */
    public function setRateID($rateID)
    {
        $this->rateID = $rateID;

        return $this;
    }

    /**
     * Gets as rateCode
     *
     * A string value may be used to request a particular code or an ID if the golfer
     * qualifies for a specific rate, such as AARP, AAA or a corporate or negotiated
     * rate.
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
     * A string value may be used to request a particular code or an ID if the golfer
     * qualifies for a specific rate, such as AARP, AAA or a corporate or negotiated
     * rate.
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
     * Gets as ratePlanType
     *
     * An extensible list of rate types.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ListRatePlanType
     */
    public function getRatePlanType()
    {
        return $this->ratePlanType;
    }

    /**
     * Sets a new ratePlanType
     *
     * An extensible list of rate types.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListRatePlanType $ratePlanType
     * @return self
     */
    public function setRatePlanType(\Davispeixoto\OpenTravelAlliance\ListRatePlanType $ratePlanType)
    {
        $this->ratePlanType = $ratePlanType;

        return $this;
    }

    /**
     * Gets as rateCategory
     *
     * An extensible list of rate categories.
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
     * An extensible list of rate categories.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ListRateCategoryType $rateCategory
     * @return self
     */
    public function setRateCategory(\Davispeixoto\OpenTravelAlliance\ListRateCategoryType $rateCategory)
    {
        $this->rateCategory = $rateCategory;

        return $this;
    }


}

