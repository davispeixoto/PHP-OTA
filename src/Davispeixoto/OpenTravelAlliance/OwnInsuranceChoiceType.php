<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OwnInsuranceChoiceType
 *
 * Details of the customer's own insurance policy.
 * XSD Type: OwnInsuranceChoiceType
 */
class OwnInsuranceChoiceType
{

    /**
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * The name of the customer's chosen insurance company.
     *
     * @property string $insuranceCompany
     */
    private $insuranceCompany = null;

    /**
     * A reference by which an issued policy is recognised.
     *
     * @property string $policyNmbr
     */
    private $policyNmbr = null;

    /**
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     * $customerCounts
     */
    private $customerCounts = null;

    /**
     * Gets as rPH
     *
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * (Reference Place Holder) - an index code to identify an instance in a collection
     * of like items. For example, used to assign individual passengers or clients to
     * particular itinerary items.
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
     * Gets as insuranceCompany
     *
     * The name of the customer's chosen insurance company.
     *
     * @return string
     */
    public function getInsuranceCompany()
    {
        return $this->insuranceCompany;
    }

    /**
     * Sets a new insuranceCompany
     *
     * The name of the customer's chosen insurance company.
     *
     * @param string $insuranceCompany
     * @return self
     */
    public function setInsuranceCompany($insuranceCompany)
    {
        $this->insuranceCompany = $insuranceCompany;

        return $this;
    }

    /**
     * Gets as policyNmbr
     *
     * A reference by which an issued policy is recognised.
     *
     * @return string
     */
    public function getPolicyNmbr()
    {
        return $this->policyNmbr;
    }

    /**
     * Sets a new policyNmbr
     *
     * A reference by which an issued policy is recognised.
     *
     * @param string $policyNmbr
     * @return self
     */
    public function setPolicyNmbr($policyNmbr)
    {
        $this->policyNmbr = $policyNmbr;

        return $this;
    }

    /**
     * Adds as customerCount
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType
     * $customerCount
     */
    public function addToCustomerCounts(
        \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType $customerCount
    ) {
        $this->customerCounts[] = $customerCount;

        return $this;
    }

    /**
     * isset customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustomerCounts($index)
    {
        return isset($this->customerCounts[$index]);
    }

    /**
     * unset customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustomerCounts($index)
    {
        unset($this->customerCounts[$index]);
    }

    /**
     * Gets as customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     */
    public function getCustomerCounts()
    {
        return $this->customerCounts;
    }

    /**
     * Sets a new customerCounts
     *
     * Counts of the number of passengers in age categories. Used when individual
     * passenger identification is not required.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerCountsType\CustomerCountAType[]
     * $customerCounts
     * @return self
     */
    public function setCustomerCounts(array $customerCounts)
    {
        $this->customerCounts = $customerCounts;

        return $this;
    }


}

