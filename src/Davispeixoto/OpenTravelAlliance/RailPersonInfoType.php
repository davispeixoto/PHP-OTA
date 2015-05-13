<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailPersonInfoType
 *
 * Defines information about a person taking a rail journey, including name and
 * contact information.
 * XSD Type: RailPersonInfoType
 */
class RailPersonInfoType
{

    /**
     * Name information of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Telephone number for the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Email address of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\EmailAType[]
     * $email
     */
    private $email = null;

    /**
     * Address information of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\AddressAType[]
     * $address
     */
    private $address = null;

    /**
     * Gets as personName
     *
     * Name information of the person traveling.
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
     * Name information of the person traveling.
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
     * Telephone number for the person traveling.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\RailPersonInfoType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Telephone number for the person traveling.
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
     * Telephone number for the person traveling.
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
     * Telephone number for the person traveling.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Telephone number for the person traveling.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\TelephoneAType[]
     * $telephone
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
     * Email address of the person traveling.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\EmailAType $email
     */
    public function addToEmail(\Davispeixoto\OpenTravelAlliance\RailPersonInfoType\EmailAType $email)
    {
        $this->email[] = $email;

        return $this;
    }

    /**
     * isset email
     *
     * Email address of the person traveling.
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
     * Email address of the person traveling.
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
     * Email address of the person traveling.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\EmailAType[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * Email address of the person traveling.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\EmailAType[] $email
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
     * Address information of the person traveling.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\AddressAType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\RailPersonInfoType\AddressAType $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Address information of the person traveling.
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
     * Address information of the person traveling.
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
     * Address information of the person traveling.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Address information of the person traveling.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPersonInfoType\AddressAType[]
     * $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }


}

