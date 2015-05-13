<?php

namespace Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRS;

/**
 * Class representing PlanForQuoteRSAType
 */
class PlanForQuoteRSAType
{

    /**
     * The unique identfier for the plan.
     *
     * @property string $planID
     */
    private $planID = null;

    /**
     * The name of the plan.
     *
     * @property string $name
     */
    private $name = null;

    /**
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @property string $type
     */
    private $type = null;

    /**
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @property string $typeID
     */
    private $typeID = null;

    /**
     * A reference place holder to be used elsewhere within the message.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Contains the information about the plan, such as the name of the insurance
     * company and restrictions, specific to the quote.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRS\PlanForQuoteRSAType\QuoteDetailAType
     * $quoteDetail
     */
    private $quoteDetail = null;

    /**
     * Allows vendor to echo back information about the traveler(s)' requirements for
     * insurance coverage.
     *
     * @property \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType
     * $insCoverageDetail
     */
    private $insCoverageDetail = null;

    /**
     * Contains information about the total price of the insurance plan.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PlanCostType $planCost
     */
    private $planCost = null;

    /**
     * Defines contact information for an individual or company (for example, the
     * provider's call center number or claims hotline).
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     */
    private $contact = null;

    /**
     * Gets as planID
     *
     * The unique identfier for the plan.
     *
     * @return string
     */
    public function getPlanID()
    {
        return $this->planID;
    }

    /**
     * Sets a new planID
     *
     * The unique identfier for the plan.
     *
     * @param string $planID
     * @return self
     */
    public function setPlanID($planID)
    {
        $this->planID = $planID;

        return $this;
    }

    /**
     * Gets as name
     *
     * The name of the plan.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * The name of the plan.
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets as type
     *
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * Specifies the sub-plan or type of the insurance plan being purchased.
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets as typeID
     *
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @return string
     */
    public function getTypeID()
    {
        return $this->typeID;
    }

    /**
     * Sets a new typeID
     *
     * Unique ID for the sub-plan or type of the insurance plan being purchased (if
     * known).
     *
     * @param string $typeID
     * @return self
     */
    public function setTypeID($typeID)
    {
        $this->typeID = $typeID;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * A reference place holder to be used elsewhere within the message.
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
     * A reference place holder to be used elsewhere within the message.
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
     * Gets as quoteDetail
     *
     * Contains the information about the plan, such as the name of the insurance
     * company and restrictions, specific to the quote.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRS\PlanForQuoteRSAType\QuoteDetailAType
     */
    public function getQuoteDetail()
    {
        return $this->quoteDetail;
    }

    /**
     * Sets a new quoteDetail
     *
     * Contains the information about the plan, such as the name of the insurance
     * company and restrictions, specific to the quote.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRS\PlanForQuoteRSAType\QuoteDetailAType
     * $quoteDetail
     * @return self
     */
    public function setQuoteDetail(
        \Davispeixoto\OpenTravelAlliance\OTAInsuranceQuoteRS\PlanForQuoteRSAType\QuoteDetailAType $quoteDetail
    ) {
        $this->quoteDetail = $quoteDetail;

        return $this;
    }

    /**
     * Gets as insCoverageDetail
     *
     * Allows vendor to echo back information about the traveler(s)' requirements for
     * insurance coverage.
     *
     * @return \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType
     */
    public function getInsCoverageDetail()
    {
        return $this->insCoverageDetail;
    }

    /**
     * Sets a new insCoverageDetail
     *
     * Allows vendor to echo back information about the traveler(s)' requirements for
     * insurance coverage.
     *
     * @param \Davispeixoto\OpenTravelAlliance\InsCoverageDetailType $insCoverageDetail
     * @return self
     */
    public function setInsCoverageDetail(\Davispeixoto\OpenTravelAlliance\InsCoverageDetailType $insCoverageDetail)
    {
        $this->insCoverageDetail = $insCoverageDetail;

        return $this;
    }

    /**
     * Gets as planCost
     *
     * Contains information about the total price of the insurance plan.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PlanCostType
     */
    public function getPlanCost()
    {
        return $this->planCost;
    }

    /**
     * Sets a new planCost
     *
     * Contains information about the total price of the insurance plan.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PlanCostType $planCost
     * @return self
     */
    public function setPlanCost(\Davispeixoto\OpenTravelAlliance\PlanCostType $planCost)
    {
        $this->planCost = $planCost;

        return $this;
    }

    /**
     * Adds as contact
     *
     * Defines contact information for an individual or company (for example, the
     * provider's call center number or claims hotline).
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    public function addToContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact[] = $contact;

        return $this;
    }

    /**
     * isset contact
     *
     * Defines contact information for an individual or company (for example, the
     * provider's call center number or claims hotline).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContact($index)
    {
        return isset($this->contact[$index]);
    }

    /**
     * unset contact
     *
     * Defines contact information for an individual or company (for example, the
     * provider's call center number or claims hotline).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContact($index)
    {
        unset($this->contact[$index]);
    }

    /**
     * Gets as contact
     *
     * Defines contact information for an individual or company (for example, the
     * provider's call center number or claims hotline).
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Defines contact information for an individual or company (for example, the
     * provider's call center number or claims hotline).
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType[] $contact
     * @return self
     */
    public function setContact(array $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

