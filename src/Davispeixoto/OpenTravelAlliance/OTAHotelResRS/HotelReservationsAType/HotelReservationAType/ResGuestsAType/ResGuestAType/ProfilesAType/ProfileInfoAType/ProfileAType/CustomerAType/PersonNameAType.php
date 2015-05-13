<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelResRS\HotelReservationsAType\HotelReservationAType\ResGuestsAType\ResGuestAType\ProfilesAType\ProfileInfoAType\ProfileAType\CustomerAType;

/**
 * Class representing PersonNameAType
 */
class PersonNameAType
{

    /**
     * NamePrefix MAY specify the salutation of honorific. (e.g., Mr. Mrs., Ms., Miss,
     * Dr.)
     *
     * @property string $namePrefix
     */
    private $namePrefix = null;

    /**
     * GivenName MUST specify the first name of the guest.
     *
     * @property string $givenName
     */
    private $givenName = null;

    /**
     * MiddleName MAY specify the middle name of the guest.
     *
     * @property string $middleName
     */
    private $middleName = null;

    /**
     * Surname MUST specify the family name or last name of the guest .
     *
     * @property string $surname
     */
    private $surname = null;

    /**
     * NameSuffix MAY specify various name suffixes and letters (e.g. Jr., Sr., III,
     * Ret., Esq.).
     *
     * @property string $nameSuffix
     */
    private $nameSuffix = null;

    /**
     * Gets as namePrefix
     *
     * NamePrefix MAY specify the salutation of honorific. (e.g., Mr. Mrs., Ms., Miss,
     * Dr.)
     *
     * @return string
     */
    public function getNamePrefix()
    {
        return $this->namePrefix;
    }

    /**
     * Sets a new namePrefix
     *
     * NamePrefix MAY specify the salutation of honorific. (e.g., Mr. Mrs., Ms., Miss,
     * Dr.)
     *
     * @param string $namePrefix
     * @return self
     */
    public function setNamePrefix($namePrefix)
    {
        $this->namePrefix = $namePrefix;

        return $this;
    }

    /**
     * Gets as givenName
     *
     * GivenName MUST specify the first name of the guest.
     *
     * @return string
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Sets a new givenName
     *
     * GivenName MUST specify the first name of the guest.
     *
     * @param string $givenName
     * @return self
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Gets as middleName
     *
     * MiddleName MAY specify the middle name of the guest.
     *
     * @return string
     */
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * Sets a new middleName
     *
     * MiddleName MAY specify the middle name of the guest.
     *
     * @param string $middleName
     * @return self
     */
    public function setMiddleName($middleName)
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Gets as surname
     *
     * Surname MUST specify the family name or last name of the guest .
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Sets a new surname
     *
     * Surname MUST specify the family name or last name of the guest .
     *
     * @param string $surname
     * @return self
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Gets as nameSuffix
     *
     * NameSuffix MAY specify various name suffixes and letters (e.g. Jr., Sr., III,
     * Ret., Esq.).
     *
     * @return string
     */
    public function getNameSuffix()
    {
        return $this->nameSuffix;
    }

    /**
     * Sets a new nameSuffix
     *
     * NameSuffix MAY specify various name suffixes and letters (e.g. Jr., Sr., III,
     * Ret., Esq.).
     *
     * @param string $nameSuffix
     * @return self
     */
    public function setNameSuffix($nameSuffix)
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }


}

