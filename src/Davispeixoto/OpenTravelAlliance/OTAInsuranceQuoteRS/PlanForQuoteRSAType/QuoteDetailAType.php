<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRS\PlanForQuoteRSAType;

/**
 * Class representing QuoteDetailAType
 */
class QuoteDetailAType
{

    /**
     * Indicates the starting date.
     *
     * @property \DateTime $effectiveDate
     */
    private $effectiveDate = null;

    /**
     * Indicates the ending date.
     *
     * @property \DateTime $expireDate
     */
    private $expireDate = null;

    /**
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @property boolean $expireDateExclusiveInd
     */
    private $expireDateExclusiveInd = null;

    /**
     * Identifies the company providing the insurance product quoted in this response
     * message.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany
     */
    private $providerCompany = null;

    /**
     * Specifies the location of a file containing specific details regarding this
     * quote.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $quoteDetailURL
     */
    private $quoteDetailURL = null;

    /**
     * Container for any restrictions to coverage of the quoted plan.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     * $planRestrictions
     */
    private $planRestrictions = null;

    /**
     * Specifies the location of a file containing booking details
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType $bookingDetailURL
     */
    private $bookingDetailURL = null;

    /**
     * Gets as effectiveDate
     *
     * Indicates the starting date.
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * Sets a new effectiveDate
     *
     * Indicates the starting date.
     *
     * @param \DateTime $effectiveDate
     * @return self
     */
    public function setEffectiveDate(\DateTime $effectiveDate)
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Gets as expireDate
     *
     * Indicates the ending date.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Sets a new expireDate
     *
     * Indicates the ending date.
     *
     * @param \DateTime $expireDate
     * @return self
     */
    public function setExpireDate(\DateTime $expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Gets as expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @return boolean
     */
    public function getExpireDateExclusiveInd()
    {
        return $this->expireDateExclusiveInd;
    }

    /**
     * Sets a new expireDateExclusiveInd
     *
     * When true, indicates that the ExpireDate is the first day after the applicable
     * period (e.g. when expire date is Oct 15 the last date of the period is Oct 14).
     *
     * @param boolean $expireDateExclusiveInd
     * @return self
     */
    public function setExpireDateExclusiveInd($expireDateExclusiveInd)
    {
        $this->expireDateExclusiveInd = $expireDateExclusiveInd;

        return $this;
    }

    /**
     * Gets as providerCompany
     *
     * Identifies the company providing the insurance product quoted in this response
     * message.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProviderCompany()
    {
        return $this->providerCompany;
    }

    /**
     * Sets a new providerCompany
     *
     * Identifies the company providing the insurance product quoted in this response
     * message.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany
     * @return self
     */
    public function setProviderCompany(\Davispeixoto\OpenTravelAlliance\CompanyNameType $providerCompany)
    {
        $this->providerCompany = $providerCompany;

        return $this;
    }

    /**
     * Gets as quoteDetailURL
     *
     * Specifies the location of a file containing specific details regarding this
     * quote.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getQuoteDetailURL()
    {
        return $this->quoteDetailURL;
    }

    /**
     * Sets a new quoteDetailURL
     *
     * Specifies the location of a file containing specific details regarding this
     * quote.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $quoteDetailURL
     * @return self
     */
    public function setQuoteDetailURL(\Davispeixoto\OpenTravelAlliance\URLType $quoteDetailURL)
    {
        $this->quoteDetailURL = $quoteDetailURL;

        return $this;
    }

    /**
     * Adds as planRestriction
     *
     * Container for any restrictions to coverage of the quoted plan.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType
     * $planRestriction
     */
    public function addToPlanRestrictions(
        \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType $planRestriction
    ) {
        $this->planRestrictions[] = $planRestriction;

        return $this;
    }

    /**
     * isset planRestrictions
     *
     * Container for any restrictions to coverage of the quoted plan.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPlanRestrictions($index)
    {
        return isset($this->planRestrictions[$index]);
    }

    /**
     * unset planRestrictions
     *
     * Container for any restrictions to coverage of the quoted plan.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPlanRestrictions($index)
    {
        unset($this->planRestrictions[$index]);
    }

    /**
     * Gets as planRestrictions
     *
     * Container for any restrictions to coverage of the quoted plan.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     */
    public function getPlanRestrictions()
    {
        return $this->planRestrictions;
    }

    /**
     * Sets a new planRestrictions
     *
     * Container for any restrictions to coverage of the quoted plan.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\PlanRestrictionType\PlanRestrictionAType[]
     * $planRestrictions
     * @return self
     */
    public function setPlanRestrictions(array $planRestrictions)
    {
        $this->planRestrictions = $planRestrictions;

        return $this;
    }

    /**
     * Gets as bookingDetailURL
     *
     * Specifies the location of a file containing booking details
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType
     */
    public function getBookingDetailURL()
    {
        return $this->bookingDetailURL;
    }

    /**
     * Sets a new bookingDetailURL
     *
     * Specifies the location of a file containing booking details
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType $bookingDetailURL
     * @return self
     */
    public function setBookingDetailURL(\Davispeixoto\OpenTravelAlliance\URLType $bookingDetailURL)
    {
        $this->bookingDetailURL = $bookingDetailURL;

        return $this;
    }


}

