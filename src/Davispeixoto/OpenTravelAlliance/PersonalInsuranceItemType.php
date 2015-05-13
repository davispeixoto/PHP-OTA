<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing PersonalInsuranceItemType
 *
 * Indicates the number of customers taking specific type of personal insurance.
 * XSD Type: PersonalInsuranceItemType
 */
class PersonalInsuranceItemType
{

    /**
     * @property string $code
     */
    private $code = null;

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
     * Gets as code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

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

