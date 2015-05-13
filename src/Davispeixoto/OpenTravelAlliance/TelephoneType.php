<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TelephoneType
 *
 * Telephone information and details on the type of the phone number and how the
 * information may be used internally by a company or exchanged with trading
 * partners.
 * XSD Type: TelephoneType
 */
class TelephoneType
{

    /**
     * PhoneTechType MUST indicate the type of technology associated with this
     * telephone number, such as Voice, Data, Fax, Pager, Mobile, TTY, etc.
     * PhoneTechType MUST refer to OpenTravel Code List Phone Technology Type (PTT).
     *
     * @property string $phoneTechType
     */
    private $phoneTechType = null;

    /**
     * PhoneUseType MAY specify the type of telephone number, in the context of its
     * general use (e.g. Home, Business, Emergency Contact, Travel Arranger, Day,
     * Evening). PhoneUseType MUST refer to OpenTravel Code List Phone Use Type (PUT).
     *
     * @property string $phoneUseType
     */
    private $phoneUseType = null;

    /**
     * CountryAccessCode MAY specify the international country access identifier as
     * assigned by telecommunications authorities.
     *
     * @property string $countryAccessCode
     */
    private $countryAccessCode = null;

    /**
     * AreaCityCode MUST specify the code assigned for telephones in a specific region,
     * city, or area.
     *
     * @property string $areaCityCode
     */
    private $areaCityCode = null;

    /**
     * PhoneNumber MUST specify the telephone number assigned to a single location.
     *
     * @property string $phoneNumber
     */
    private $phoneNumber = null;

    /**
     * Extension MAY specify an extension to reach a specific party at the phone
     * number.
     *
     * @property string $extension
     */
    private $extension = null;

    /**
     * Gets as phoneTechType
     *
     * PhoneTechType MUST indicate the type of technology associated with this
     * telephone number, such as Voice, Data, Fax, Pager, Mobile, TTY, etc.
     * PhoneTechType MUST refer to OpenTravel Code List Phone Technology Type (PTT).
     *
     * @return string
     */
    public function getPhoneTechType()
    {
        return $this->phoneTechType;
    }

    /**
     * Sets a new phoneTechType
     *
     * PhoneTechType MUST indicate the type of technology associated with this
     * telephone number, such as Voice, Data, Fax, Pager, Mobile, TTY, etc.
     * PhoneTechType MUST refer to OpenTravel Code List Phone Technology Type (PTT).
     *
     * @param string $phoneTechType
     * @return self
     */
    public function setPhoneTechType($phoneTechType)
    {
        $this->phoneTechType = $phoneTechType;

        return $this;
    }

    /**
     * Gets as phoneUseType
     *
     * PhoneUseType MAY specify the type of telephone number, in the context of its
     * general use (e.g. Home, Business, Emergency Contact, Travel Arranger, Day,
     * Evening). PhoneUseType MUST refer to OpenTravel Code List Phone Use Type (PUT).
     *
     * @return string
     */
    public function getPhoneUseType()
    {
        return $this->phoneUseType;
    }

    /**
     * Sets a new phoneUseType
     *
     * PhoneUseType MAY specify the type of telephone number, in the context of its
     * general use (e.g. Home, Business, Emergency Contact, Travel Arranger, Day,
     * Evening). PhoneUseType MUST refer to OpenTravel Code List Phone Use Type (PUT).
     *
     * @param string $phoneUseType
     * @return self
     */
    public function setPhoneUseType($phoneUseType)
    {
        $this->phoneUseType = $phoneUseType;

        return $this;
    }

    /**
     * Gets as countryAccessCode
     *
     * CountryAccessCode MAY specify the international country access identifier as
     * assigned by telecommunications authorities.
     *
     * @return string
     */
    public function getCountryAccessCode()
    {
        return $this->countryAccessCode;
    }

    /**
     * Sets a new countryAccessCode
     *
     * CountryAccessCode MAY specify the international country access identifier as
     * assigned by telecommunications authorities.
     *
     * @param string $countryAccessCode
     * @return self
     */
    public function setCountryAccessCode($countryAccessCode)
    {
        $this->countryAccessCode = $countryAccessCode;

        return $this;
    }

    /**
     * Gets as areaCityCode
     *
     * AreaCityCode MUST specify the code assigned for telephones in a specific region,
     * city, or area.
     *
     * @return string
     */
    public function getAreaCityCode()
    {
        return $this->areaCityCode;
    }

    /**
     * Sets a new areaCityCode
     *
     * AreaCityCode MUST specify the code assigned for telephones in a specific region,
     * city, or area.
     *
     * @param string $areaCityCode
     * @return self
     */
    public function setAreaCityCode($areaCityCode)
    {
        $this->areaCityCode = $areaCityCode;

        return $this;
    }

    /**
     * Gets as phoneNumber
     *
     * PhoneNumber MUST specify the telephone number assigned to a single location.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Sets a new phoneNumber
     *
     * PhoneNumber MUST specify the telephone number assigned to a single location.
     *
     * @param string $phoneNumber
     * @return self
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Gets as extension
     *
     * Extension MAY specify an extension to reach a specific party at the phone
     * number.
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * Extension MAY specify an extension to reach a specific party at the phone
     * number.
     *
     * @param string $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }


}

