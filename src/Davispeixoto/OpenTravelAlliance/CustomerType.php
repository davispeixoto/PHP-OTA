<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing CustomerType
 *
 * Customer information that includes name, telephone, email, address and loyalty
 * program information.
 * XSD Type: CustomerType
 */
class CustomerType
{

    /**
     * PersonName MUST provide detailed name information for the guest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TelephoneType[] $telephone
     */
    private $telephone = null;

    /**
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType[] $email
     */
    private $email = null;

    /**
     * Address MUST provide detailed information on an address for the guest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressType[] $address
     */
    private $address = null;

    /**
     * CustLoyalty MAY specify loyalty program information for the guest.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CustLoyaltyType $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Gets as personName
     *
     * PersonName MUST provide detailed name information for the guest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getPersonName()
    {
        return $this->personName;
    }

    /**
     * Sets a new personName
     *
     * PersonName MUST provide detailed name information for the guest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     * @return self
     */
    public function setPersonName(\Davispeixoto\OpenTravelAlliance\PersonNameType $personName)
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\TelephoneType $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\TelephoneType $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TelephoneType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone MAY specify information on a telephone number for the guest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TelephoneType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Adds as email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmailType $email
     */
    public function addToEmail(\Davispeixoto\OpenTravelAlliance\EmailType $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * isset email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email MAY specify information on an email address for the guest. When the
     * reservation is being booked through the internet, the email address SHOULD be
     * REQUIRED.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailType[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Adds as address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\AddressType $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address MUST provide detailed information on an address for the guest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Gets as custLoyalty
     *
     * CustLoyalty MAY specify loyalty program information for the guest.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CustLoyaltyType
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * CustLoyalty MAY specify loyalty program information for the guest.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CustLoyaltyType $custLoyalty
     * @return self
     */
    public function setCustLoyalty(\Davispeixoto\OpenTravelAlliance\CustLoyaltyType $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }


}

