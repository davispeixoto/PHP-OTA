<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing ContactInfoType
 *
 * Allows multiple pieces of information to be repeated for a single contact (e.g.
 * one employee has mutliple e-mail addresses) and also allows multiple contacts to
 * be associated to a single or multiple piece of information (e.g. all employees
 * working in a restaurant can be reached at the same phone number).
 * XSD Type: ContactInfoType
 */
class ContactInfoType
{

    /**
     * The location of the contact (e.g., at a hotel property, at a central office).
     * Refer to OpenTravel Code List Contact Location (CON).
     *
     * @property string $location
     */
    private $location = null;

    /**
     * A collection of Name elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactsType\NameAType[] $names
     */
    private $names = null;

    /**
     * A collection of Address elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType[]
     * $addresses
     */
    private $addresses = null;

    /**
     * A collection of Phone elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PhonesType\PhoneAType[] $phones
     */
    private $phones = null;

    /**
     * A collection of email elements.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType[] $emails
     */
    private $emails = null;

    /**
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @property \Davispeixoto\OpenTravelAlliance\URLsType\URLAType[] $uRLs
     */
    private $uRLs = null;

    /**
     * The name of the company with which this contact is associated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactInfoType\CompanyNameAType
     * $companyName
     */
    private $companyName = null;

    /**
     * Gets as location
     *
     * The location of the contact (e.g., at a hotel property, at a central office).
     * Refer to OpenTravel Code List Contact Location (CON).
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets a new location
     *
     * The location of the contact (e.g., at a hotel property, at a central office).
     * Refer to OpenTravel Code List Contact Location (CON).
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Adds as name
     *
     * A collection of Name elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\ContactsType\NameAType $name
     */
    public function addToNames(\Davispeixoto\OpenTravelAlliance\ContactsType\NameAType $name)
    {
        $this->names[] = $name;

        return $this;
    }

    /**
     * isset names
     *
     * A collection of Name elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNames($index)
    {
        return isset($this->names[$index]);
    }

    /**
     * unset names
     *
     * A collection of Name elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNames($index)
    {
        unset($this->names[$index]);
    }

    /**
     * Gets as names
     *
     * A collection of Name elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactsType\NameAType[]
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Sets a new names
     *
     * A collection of Name elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactsType\NameAType[] $names
     * @return self
     */
    public function setNames(array $names)
    {
        $this->names = $names;

        return $this;
    }

    /**
     * Adds as address
     *
     * A collection of Address elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType $address
     */
    public function addToAddresses(\Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType $address)
    {
        $this->addresses[] = $address;

        return $this;
    }

    /**
     * isset addresses
     *
     * A collection of Address elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddresses($index)
    {
        return isset($this->addresses[$index]);
    }

    /**
     * unset addresses
     *
     * A collection of Address elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddresses($index)
    {
        unset($this->addresses[$index]);
    }

    /**
     * Gets as addresses
     *
     * A collection of Address elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType[]
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Sets a new addresses
     *
     * A collection of Address elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType[] $addresses
     * @return self
     */
    public function setAddresses(array $addresses)
    {
        $this->addresses = $addresses;

        return $this;
    }

    /**
     * Adds as phone
     *
     * A collection of Phone elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\PhonesType\PhoneAType $phone
     */
    public function addToPhones(\Davispeixoto\OpenTravelAlliance\PhonesType\PhoneAType $phone)
    {
        $this->phones[] = $phone;

        return $this;
    }

    /**
     * isset phones
     *
     * A collection of Phone elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPhones($index)
    {
        return isset($this->phones[$index]);
    }

    /**
     * unset phones
     *
     * A collection of Phone elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPhones($index)
    {
        unset($this->phones[$index]);
    }

    /**
     * Gets as phones
     *
     * A collection of Phone elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PhonesType\PhoneAType[]
     */
    public function getPhones()
    {
        return $this->phones;
    }

    /**
     * Sets a new phones
     *
     * A collection of Phone elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PhonesType\PhoneAType[] $phones
     * @return self
     */
    public function setPhones(array $phones)
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * Adds as email
     *
     * A collection of email elements.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType $email
     */
    public function addToEmails(\Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType $email)
    {
        $this->emails[] = $email;

        return $this;
    }

    /**
     * isset emails
     *
     * A collection of email elements.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmails($index)
    {
        return isset($this->emails[$index]);
    }

    /**
     * unset emails
     *
     * A collection of email elements.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmails($index)
    {
        unset($this->emails[$index]);
    }

    /**
     * Gets as emails
     *
     * A collection of email elements.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType[]
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Sets a new emails
     *
     * A collection of email elements.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType[] $emails
     * @return self
     */
    public function setEmails(array $emails)
    {
        $this->emails = $emails;

        return $this;
    }

    /**
     * Adds as uRL
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\URLsType\URLAType $uRL
     */
    public function addToURLs(\Davispeixoto\OpenTravelAlliance\URLsType\URLAType $uRL)
    {
        $this->uRLs[] = $uRL;

        return $this;
    }

    /**
     * isset uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetURLs($index)
    {
        return isset($this->uRLs[$index]);
    }

    /**
     * unset uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @param scalar $index
     * @return void
     */
    public function unsetURLs($index)
    {
        unset($this->uRLs[$index]);
    }

    /**
     * Gets as uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @return \Davispeixoto\OpenTravelAlliance\URLsType\URLAType[]
     */
    public function getURLs()
    {
        return $this->uRLs;
    }

    /**
     * Sets a new uRLs
     *
     * A collection of URL elements. Used to pass detailed URL information
     *
     * @param \Davispeixoto\OpenTravelAlliance\URLsType\URLAType[] $uRLs
     * @return self
     */
    public function setURLs(array $uRLs)
    {
        $this->uRLs = $uRLs;

        return $this;
    }

    /**
     * Gets as companyName
     *
     * The name of the company with which this contact is associated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactInfoType\CompanyNameAType
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Sets a new companyName
     *
     * The name of the company with which this contact is associated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactInfoType\CompanyNameAType
     * $companyName
     * @return self
     */
    public function setCompanyName(\Davispeixoto\OpenTravelAlliance\ContactInfoType\CompanyNameAType $companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }


}

