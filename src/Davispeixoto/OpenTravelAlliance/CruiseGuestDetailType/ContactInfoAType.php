<?php

namespace Davispeixoto\OpenTravelAlliance\CruiseGuestDetailType;

use Davispeixoto\OpenTravelAlliance\ContactPersonType;

/**
 * Class representing ContactInfoAType
 */
class ContactInfoAType extends ContactPersonType
{

    /**
     * Provides a reference number for the guest.
     *
     * @property string $guestRefNumber
     */
    private $guestRefNumber = null;

    /**
     * Specifies the Guest's Age.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Specifies the Nationality.
     *
     * @property string $nationality
     */
    private $nationality = null;

    /**
     * Specifies occupation of the guest.
     *
     * @property string $guestOccupation
     */
    private $guestOccupation = null;

    /**
     * Specifies the Guest Birth Date.
     *
     * @property \DateTime $personBirthDate
     */
    private $personBirthDate = null;

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @property string $loyaltyMembershipID
     */
    private $loyaltyMembershipID = null;

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @property string $loyalLevel
     */
    private $loyalLevel = null;

    /**
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @property integer $loyalLevelCode
     */
    private $loyalLevelCode = null;

    /**
     * Gets as guestRefNumber
     *
     * Provides a reference number for the guest.
     *
     * @return string
     */
    public function getGuestRefNumber()
    {
        return $this->guestRefNumber;
    }

    /**
     * Sets a new guestRefNumber
     *
     * Provides a reference number for the guest.
     *
     * @param string $guestRefNumber
     * @return self
     */
    public function setGuestRefNumber($guestRefNumber)
    {
        $this->guestRefNumber = $guestRefNumber;

        return $this;
    }

    /**
     * Gets as age
     *
     * Specifies the Guest's Age.
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Sets a new age
     *
     * Specifies the Guest's Age.
     *
     * @param integer $age
     * @return self
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Gets as nationality
     *
     * Specifies the Nationality.
     *
     * @return string
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Sets a new nationality
     *
     * Specifies the Nationality.
     *
     * @param string $nationality
     * @return self
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Gets as guestOccupation
     *
     * Specifies occupation of the guest.
     *
     * @return string
     */
    public function getGuestOccupation()
    {
        return $this->guestOccupation;
    }

    /**
     * Sets a new guestOccupation
     *
     * Specifies occupation of the guest.
     *
     * @param string $guestOccupation
     * @return self
     */
    public function setGuestOccupation($guestOccupation)
    {
        $this->guestOccupation = $guestOccupation;

        return $this;
    }

    /**
     * Gets as personBirthDate
     *
     * Specifies the Guest Birth Date.
     *
     * @return \DateTime
     */
    public function getPersonBirthDate()
    {
        return $this->personBirthDate;
    }

    /**
     * Sets a new personBirthDate
     *
     * Specifies the Guest Birth Date.
     *
     * @param \DateTime $personBirthDate
     * @return self
     */
    public function setPersonBirthDate(\DateTime $personBirthDate)
    {
        $this->personBirthDate = $personBirthDate;

        return $this;
    }

    /**
     * Gets as gender
     *
     * Identifies the gender.
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Sets a new gender
     *
     * Identifies the gender.
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Gets as loyaltyMembershipID
     *
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @return string
     */
    public function getLoyaltyMembershipID()
    {
        return $this->loyaltyMembershipID;
    }

    /**
     * Sets a new loyaltyMembershipID
     *
     * Unique identifier of the member in the program (membership number, account
     * number, etc.).
     *
     * @param string $loyaltyMembershipID
     * @return self
     */
    public function setLoyaltyMembershipID($loyaltyMembershipID)
    {
        $this->loyaltyMembershipID = $loyaltyMembershipID;

        return $this;
    }

    /**
     * Gets as loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @return string
     */
    public function getLoyalLevel()
    {
        return $this->loyalLevel;
    }

    /**
     * Sets a new loyalLevel
     *
     * Indicates special privileges in program assigned to individual.
     *
     * @param string $loyalLevel
     * @return self
     */
    public function setLoyalLevel($loyalLevel)
    {
        $this->loyalLevel = $loyalLevel;

        return $this;
    }

    /**
     * Gets as loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @return integer
     */
    public function getLoyalLevelCode()
    {
        return $this->loyalLevelCode;
    }

    /**
     * Sets a new loyalLevelCode
     *
     * Provides a numeric code assigned to a particular loyalty level.
     *
     * @param integer $loyalLevelCode
     * @return self
     */
    public function setLoyalLevelCode($loyalLevelCode)
    {
        $this->loyalLevelCode = $loyalLevelCode;

        return $this;
    }


}

