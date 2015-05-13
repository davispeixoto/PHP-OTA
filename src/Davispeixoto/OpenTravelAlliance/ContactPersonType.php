<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ContactPersonType
 *
 * Name of an individual and appropriate contact information. May be contact
 * information for the customer or someone affiliated with the customer.
 * XSD Type: ContactPersonType
 */
class ContactPersonType
{

    /**
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @property string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @property string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * When true, indicates a default value should be used.
     *
     * @property boolean $defaultInd
     */
    private $defaultInd = null;

    /**
     * Type of contact in the context of use for the travel experience; such as
     * permanent, temporary, affiliation, travel arranger, etc.
     *
     * @property string $contactType
     */
    private $contactType = null;

    /**
     * Indicates the type of relationship with the person or company in the profile,
     * such as Spouse, Child, Family, Business Associate, Interest Group, Medical,
     * Security,Other, etc.
     *
     * @property string $relation
     */
    private $relation = null;

    /**
     * Indicates if this contact should be used in the case of an emergency.
     *  false
     *
     * @property boolean $emergencyFlag
     */
    private $emergencyFlag = null;

    /**
     * Provides a unique reference to this contact person.
     *
     * @property string $rPH
     */
    private $rPH = null;

    /**
     * Provides the preferred method of communication. Refer to OpenTravel Code list
     * Distribution Type (DTB).
     *
     * @property string $communicationMethodCode
     */
    private $communicationMethodCode = null;

    /**
     * Indicates the method of distribution for the booking documentation. Refer to
     * OpenTravel Code list Distribution Type (DTB).
     *
     * @property string $documentDistribMethodCode
     */
    private $documentDistribMethodCode = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * This provides name information for a person.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Information about a telephone number, including the actual number and its usage.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Information about an address that identifies a location for a specific purposes.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     */
    private $address = null;

    /**
     * Electronic email addresses, in IETF specified format.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailType[] $email
     */
    private $email = null;

    /**
     * Web site address, in IETF specified format.
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLType[] $uRL
     */
    private $uRL = null;

    /**
     * Identifies a company by name.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $companyName
     */
    private $companyName = null;

    /**
     * Employment identification; using an employee ID number, title, level within the
     * company, and an indication of their status, i.e.: active, retired, on leave, or
     * terminated from employment. Additional information about an employee can be
     * entered into the element, including the name of the employee, if it differs from
     * the person name identified as a customer or contact.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmployeeInfoType[] $employeeInfo
     */
    private $employeeInfo = null;

    /**
     * Specifies social media information used for communication with the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SocialMediaType[] $socialMediaInfo
     */
    private $socialMediaInfo = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other
     * travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * Gets as defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @return boolean
     */
    public function getDefaultInd()
    {
        return $this->defaultInd;
    }

    /**
     * Sets a new defaultInd
     *
     * When true, indicates a default value should be used.
     *
     * @param boolean $defaultInd
     * @return self
     */
    public function setDefaultInd($defaultInd)
    {
        $this->defaultInd = $defaultInd;

        return $this;
    }

    /**
     * Gets as contactType
     *
     * Type of contact in the context of use for the travel experience; such as
     * permanent, temporary, affiliation, travel arranger, etc.
     *
     * @return string
     */
    public function getContactType()
    {
        return $this->contactType;
    }

    /**
     * Sets a new contactType
     *
     * Type of contact in the context of use for the travel experience; such as
     * permanent, temporary, affiliation, travel arranger, etc.
     *
     * @param string $contactType
     * @return self
     */
    public function setContactType($contactType)
    {
        $this->contactType = $contactType;

        return $this;
    }

    /**
     * Gets as relation
     *
     * Indicates the type of relationship with the person or company in the profile,
     * such as Spouse, Child, Family, Business Associate, Interest Group, Medical,
     * Security,Other, etc.
     *
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * Sets a new relation
     *
     * Indicates the type of relationship with the person or company in the profile,
     * such as Spouse, Child, Family, Business Associate, Interest Group, Medical,
     * Security,Other, etc.
     *
     * @param string $relation
     * @return self
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;

        return $this;
    }

    /**
     * Gets as emergencyFlag
     *
     * Indicates if this contact should be used in the case of an emergency.
     *  false
     *
     * @return boolean
     */
    public function getEmergencyFlag()
    {
        return $this->emergencyFlag;
    }

    /**
     * Sets a new emergencyFlag
     *
     * Indicates if this contact should be used in the case of an emergency.
     *  false
     *
     * @param boolean $emergencyFlag
     * @return self
     */
    public function setEmergencyFlag($emergencyFlag)
    {
        $this->emergencyFlag = $emergencyFlag;

        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a unique reference to this contact person.
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
     * Provides a unique reference to this contact person.
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
     * Gets as communicationMethodCode
     *
     * Provides the preferred method of communication. Refer to OpenTravel Code list
     * Distribution Type (DTB).
     *
     * @return string
     */
    public function getCommunicationMethodCode()
    {
        return $this->communicationMethodCode;
    }

    /**
     * Sets a new communicationMethodCode
     *
     * Provides the preferred method of communication. Refer to OpenTravel Code list
     * Distribution Type (DTB).
     *
     * @param string $communicationMethodCode
     * @return self
     */
    public function setCommunicationMethodCode($communicationMethodCode)
    {
        $this->communicationMethodCode = $communicationMethodCode;

        return $this;
    }

    /**
     * Gets as documentDistribMethodCode
     *
     * Indicates the method of distribution for the booking documentation. Refer to
     * OpenTravel Code list Distribution Type (DTB).
     *
     * @return string
     */
    public function getDocumentDistribMethodCode()
    {
        return $this->documentDistribMethodCode;
    }

    /**
     * Sets a new documentDistribMethodCode
     *
     * Indicates the method of distribution for the booking documentation. Refer to
     * OpenTravel Code list Distribution Type (DTB).
     *
     * @param string $documentDistribMethodCode
     * @return self
     */
    public function setDocumentDistribMethodCode($documentDistribMethodCode)
    {
        $this->documentDistribMethodCode = $documentDistribMethodCode;

        return $this;
    }

    /**
     * Gets as birthDate
     *
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
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
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
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
     * Gets as personName
     *
     * This provides name information for a person.
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
     * This provides name information for a person.
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
     * Information about a telephone number, including the actual number and its usage.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\ContactPersonType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;

        return $this;
    }

    /**
     * isset telephone
     *
     * Information about a telephone number, including the actual number and its usage.
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
     * Information about a telephone number, including the actual number and its usage.
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
     * Information about a telephone number, including the actual number and its usage.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * Information about a telephone number, including the actual number and its usage.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType\TelephoneAType[]
     * $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Adds as address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\AddressInfoType $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * isset address
     *
     * Information about an address that identifies a location for a specific purposes.
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
     * Information about an address that identifies a location for a specific purposes.
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
     * Information about an address that identifies a location for a specific purposes.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressInfoType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * Information about an address that identifies a location for a specific purposes.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressInfoType[] $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Adds as email
     *
     * Electronic email addresses, in IETF specified format.
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
     * Electronic email addresses, in IETF specified format.
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
     * Electronic email addresses, in IETF specified format.
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
     * Electronic email addresses, in IETF specified format.
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
     * Electronic email addresses, in IETF specified format.
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
     * Adds as uRL
     *
     * Web site address, in IETF specified format.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\URLType $uRL
     */
    public function addToURL(\Davispeixoto\OpenTravelAlliance\URLType $uRL)
    {
        $this->uRL[] = $uRL;

        return $this;
    }

    /**
     * isset uRL
     *
     * Web site address, in IETF specified format.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * Web site address, in IETF specified format.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * Web site address, in IETF specified format.
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Web site address, in IETF specified format.
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLType[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;

        return $this;
    }

    /**
     * Adds as companyName
     *
     * Identifies a company by name.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName
     */
    public function addToCompanyName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $companyName)
    {
        $this->companyName[] = $companyName;

        return $this;
    }

    /**
     * isset companyName
     *
     * Identifies a company by name.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompanyName($index)
    {
        return isset($this->companyName[$index]);
    }

    /**
     * unset companyName
     *
     * Identifies a company by name.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompanyName($index)
    {
        unset($this->companyName[$index]);
    }

    /**
     * Gets as companyName
     *
     * Identifies a company by name.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * Identifies a company by name.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $companyName
     * @return self
     */
    public function setCompanyName(array $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Adds as employeeInfo
     *
     * Employment identification; using an employee ID number, title, level within the
     * company, and an indication of their status, i.e.: active, retired, on leave, or
     * terminated from employment. Additional information about an employee can be
     * entered into the element, including the name of the employee, if it differs from
     * the person name identified as a customer or contact.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeInfo
     */
    public function addToEmployeeInfo(\Davispeixoto\OpenTravelAlliance\EmployeeInfoType $employeeInfo)
    {
        $this->employeeInfo[] = $employeeInfo;

        return $this;
    }

    /**
     * isset employeeInfo
     *
     * Employment identification; using an employee ID number, title, level within the
     * company, and an indication of their status, i.e.: active, retired, on leave, or
     * terminated from employment. Additional information about an employee can be
     * entered into the element, including the name of the employee, if it differs from
     * the person name identified as a customer or contact.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmployeeInfo($index)
    {
        return isset($this->employeeInfo[$index]);
    }

    /**
     * unset employeeInfo
     *
     * Employment identification; using an employee ID number, title, level within the
     * company, and an indication of their status, i.e.: active, retired, on leave, or
     * terminated from employment. Additional information about an employee can be
     * entered into the element, including the name of the employee, if it differs from
     * the person name identified as a customer or contact.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmployeeInfo($index)
    {
        unset($this->employeeInfo[$index]);
    }

    /**
     * Gets as employeeInfo
     *
     * Employment identification; using an employee ID number, title, level within the
     * company, and an indication of their status, i.e.: active, retired, on leave, or
     * terminated from employment. Additional information about an employee can be
     * entered into the element, including the name of the employee, if it differs from
     * the person name identified as a customer or contact.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmployeeInfoType[]
     */
    public function getEmployeeInfo()
    {
        return $this->employeeInfo;
    }

    /**
     * Sets a new employeeInfo
     *
     * Employment identification; using an employee ID number, title, level within the
     * company, and an indication of their status, i.e.: active, retired, on leave, or
     * terminated from employment. Additional information about an employee can be
     * entered into the element, including the name of the employee, if it differs from
     * the person name identified as a customer or contact.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmployeeInfoType[] $employeeInfo
     * @return self
     */
    public function setEmployeeInfo(array $employeeInfo)
    {
        $this->employeeInfo = $employeeInfo;

        return $this;
    }

    /**
     * Adds as socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SocialMediaType $socialMediaInfo
     */
    public function addToSocialMediaInfo(\Davispeixoto\OpenTravelAlliance\SocialMediaType $socialMediaInfo)
    {
        $this->socialMediaInfo[] = $socialMediaInfo;

        return $this;
    }

    /**
     * isset socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSocialMediaInfo($index)
    {
        return isset($this->socialMediaInfo[$index]);
    }

    /**
     * unset socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSocialMediaInfo($index)
    {
        unset($this->socialMediaInfo[$index]);
    }

    /**
     * Gets as socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SocialMediaType[]
     */
    public function getSocialMediaInfo()
    {
        return $this->socialMediaInfo;
    }

    /**
     * Sets a new socialMediaInfo
     *
     * Specifies social media information used for communication with the traveler.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SocialMediaType[] $socialMediaInfo
     * @return self
     */
    public function setSocialMediaInfo(array $socialMediaInfo)
    {
        $this->socialMediaInfo = $socialMediaInfo;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

