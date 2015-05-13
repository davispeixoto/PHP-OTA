<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CustomerInfoType
 *
 * Customer information, including name, contact information, citizenship,
 * profiles, free text remarks and agenecy reference information
 * XSD Type: CustomerInfoType
 */
class CustomerInfoType
{

    /**
     * Reference to this customer.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Detailed customer information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustomerType $customer
     */
    private $customer = null;

    /**
     * Reference to customer's profile.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef
     */
    private $profileRef = null;

    /**
     * Free text remarks associated with this customer.
     *
     * @property string[] $remarks
     */
    private $remarks = null;

    /**
     * Agency's reference to this customer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\UniqueIDType $agencyAcctNumber
     */
    private $agencyAcctNumber = null;

    /**
     * Gets as rPH
     *
     * Reference to this customer.
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
     * Reference to this customer.
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
     * Gets as customer
     *
     * Detailed customer information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustomerType
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Sets a new customer
     *
     * Detailed customer information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustomerType $customer
     * @return self
     */
    public function setCustomer(\Davispeixoto\OpenTravelAlliance\CustomerType $customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Gets as profileRef
     *
     * Reference to customer's profile.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * Reference to customer's profile.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef
     * @return self
     */
    public function setProfileRef(\Davispeixoto\OpenTravelAlliance\UniqueIDType $profileRef)
    {
        $this->profileRef = $profileRef;

        return $this;
    }

    /**
     * Adds as remarks
     *
     * Free text remarks associated with this customer.
     *
     * @return self
     * @param string $remarks
     */
    public function addToRemarks($remarks)
    {
        $this->remarks[] = $remarks;

        return $this;
    }

    /**
     * isset remarks
     *
     * Free text remarks associated with this customer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * Free text remarks associated with this customer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * Free text remarks associated with this customer.
     *
     * @return string[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * Free text remarks associated with this customer.
     *
     * @param string $remarks
     * @return self
     */
    public function setRemarks(array $remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Gets as agencyAcctNumber
     *
     * Agency's reference to this customer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\UniqueIDType
     */
    public function getAgencyAcctNumber()
    {
        return $this->agencyAcctNumber;
    }

    /**
     * Sets a new agencyAcctNumber
     *
     * Agency's reference to this customer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\UniqueIDType $agencyAcctNumber
     * @return self
     */
    public function setAgencyAcctNumber(\Davispeixoto\OpenTravelAlliance\UniqueIDType $agencyAcctNumber)
    {
        $this->agencyAcctNumber = $agencyAcctNumber;

        return $this;
    }


}

