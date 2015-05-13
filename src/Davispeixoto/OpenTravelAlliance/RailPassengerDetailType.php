<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailPassengerDetailType
 *
 * Detailed information about a rail passenger, such as the person's name, contact
 * information, travel profile, etc.
 * XSD Type: RailPassengerDetailType
 */
class RailPassengerDetailType
{

    /**
     * Date of birth.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Name and document identification for a passenger.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $identification
     */
    private $identification = null;

    /**
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\ProfileRefAType
     * $profileRef
     */
    private $profileRef = null;

    /**
     * Telephone number for the person traveling.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Email address of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\EmailAType[]
     * $email
     */
    private $email = null;

    /**
     * Address information of the person traveling.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\AddressAType[] $address
     */
    private $address = null;

    /**
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\CustLoyaltyAType[]
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Gets as birthDate
     *
     * Date of birth.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * Date of birth.
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Gets as identification
     *
     * Name and document identification for a passenger.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * Sets a new identification
     *
     * Name and document identification for a passenger.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $identification
     * @return self
     */
    public function setIdentification(\Davispeixoto\OpenTravelAlliance\PersonNameType $identification)
    {
        $this->identification = $identification;

        return $this;
    }

    /**
     * Gets as profileRef
     *
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\ProfileRefAType
     */
    public function getProfileRef()
    {
        return $this->profileRef;
    }

    /**
     * Sets a new profileRef
     *
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\ProfileRefAType
     * $profileRef
     * @return self
     */
    public function setProfileRef(\Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\ProfileRefAType $profileRef)
    {
        $this->profileRef = $profileRef;

        return $this;
    }

    /**
     * Adds as telephone
     *
     * Telephone number for the person traveling.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\TelephoneAType $telephone)
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
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\TelephoneAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\TelephoneAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\EmailAType
     * $email
     */
    public function addToEmail(\Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\EmailAType $email)
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
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\EmailAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\EmailAType[]
     * $email
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\AddressAType
     * $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\AddressAType $address)
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
     * @return \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\AddressAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\AddressAType[]
     * $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\CustLoyaltyAType
     * $custLoyalty
     */
    public function addToCustLoyalty(
        \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\CustLoyaltyAType $custLoyalty
    ) {
        $this->custLoyalty[] = $custLoyalty;

        return $this;
    }

    /**
     * isset custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCustLoyalty($index)
    {
        return isset($this->custLoyalty[$index]);
    }

    /**
     * unset custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCustLoyalty($index)
    {
        unset($this->custLoyalty[$index]);
    }

    /**
     * Gets as custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\CustLoyaltyAType[]
     */
    public function getCustLoyalty()
    {
        return $this->custLoyalty;
    }

    /**
     * Sets a new custLoyalty
     *
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailPassengerDetailType\CustLoyaltyAType[]
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }


}

