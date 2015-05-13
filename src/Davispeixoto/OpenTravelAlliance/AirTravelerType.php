<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing AirTravelerType
 *
 * Information about the person traveling. Gender - the gender of the customer, if
 * needed. BirthDate - Date of Birth. Currency - the preferred currency in which
 * monetary amounts should be returned.
 * XSD Type: AirTravelerType
 */
class AirTravelerType
{

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

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
     * Traveler's date of birth.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Specifies the code for the currency units.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * Code used to indicate the type of traveler that will be traveling (e.g., ADT,
     * CHD, INF, GRP).
     *
     * @property string $passengerTypeCode
     */
    private $passengerTypeCode = null;

    /**
     * If true, a traveler has an infant that will be sharing their seat, e.g. the
     * infant will not require their own seat.
     *
     * @property boolean $accompaniedByInfantInd
     */
    private $accompaniedByInfantInd = null;

    /**
     * Electronic ticket indicator.
     *
     * @property boolean $eticketInd
     */
    private $eticketInd = null;

    /**
     * Traveler group indicator.
     *
     * @property boolean $groupInd
     */
    private $groupInd = null;

    /**
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType\ProfileRefAType
     * $profileRef
     */
    private $profileRef = null;

    /**
     * Name information of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $personName
     */
    private $personName = null;

    /**
     * Telephone number for the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType\TelephoneAType[]
     * $telephone
     */
    private $telephone = null;

    /**
     * Email address of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType\EmailAType[] $email
     */
    private $email = null;

    /**
     * Address information of the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType\AddressAType[]
     * $address
     */
    private $address = null;

    /**
     * Identifies the loyalty program(s) that the customer belongs to and associated
     * information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType\CustLoyaltyAType[]
     * $custLoyalty
     */
    private $custLoyalty = null;

    /**
     * Official travel document information associated with the person traveling.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirTravelerType\DocumentAType[]
     * $document
     */
    private $document = null;

    /**
     * Specifies the number of travelers of a given passenger type (e.g., Adult, Child)
     *
     * @property \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     * $passengerTypeQuantity
     */
    private $passengerTypeQuantity = null;

    /**
     * Direct reference of traveler assigned by requesting system. Used as a cross
     * reference between data segments.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\AirTravelerType\TravelerRefNumberAType
     * $travelerRefNumber
     */
    private $travelerRefNumber = null;

    /**
     * Reference pointers to flight segments
     *
     * @property string[] $flightSegmentRPHs
     */
    private $flightSegmentRPHs = null;

    /**
     * Specifies social media information used for communication with the traveler.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SocialMediaType[] $socialMediaInfo
     */
    private $socialMediaInfo = null;

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
     * Gets as birthDate
     *
     * Traveler's date of birth.
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
     * Traveler's date of birth.
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
     * Gets as currencyCode
     *
     * Specifies the code for the currency units.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * Specifies the code for the currency units.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as passengerTypeCode
     *
     * Code used to indicate the type of traveler that will be traveling (e.g., ADT,
     * CHD, INF, GRP).
     *
     * @return string
     */
    public function getPassengerTypeCode()
    {
        return $this->passengerTypeCode;
    }

    /**
     * Sets a new passengerTypeCode
     *
     * Code used to indicate the type of traveler that will be traveling (e.g., ADT,
     * CHD, INF, GRP).
     *
     * @param string $passengerTypeCode
     * @return self
     */
    public function setPassengerTypeCode($passengerTypeCode)
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }

    /**
     * Gets as accompaniedByInfantInd
     *
     * If true, a traveler has an infant that will be sharing their seat, e.g. the
     * infant will not require their own seat.
     *
     * @return boolean
     */
    public function getAccompaniedByInfantInd()
    {
        return $this->accompaniedByInfantInd;
    }

    /**
     * Sets a new accompaniedByInfantInd
     *
     * If true, a traveler has an infant that will be sharing their seat, e.g. the
     * infant will not require their own seat.
     *
     * @param boolean $accompaniedByInfantInd
     * @return self
     */
    public function setAccompaniedByInfantInd($accompaniedByInfantInd)
    {
        $this->accompaniedByInfantInd = $accompaniedByInfantInd;

        return $this;
    }

    /**
     * Gets as eticketInd
     *
     * Electronic ticket indicator.
     *
     * @return boolean
     */
    public function getEticketInd()
    {
        return $this->eticketInd;
    }

    /**
     * Sets a new eticketInd
     *
     * Electronic ticket indicator.
     *
     * @param boolean $eticketInd
     * @return self
     */
    public function setEticketInd($eticketInd)
    {
        $this->eticketInd = $eticketInd;

        return $this;
    }

    /**
     * Gets as groupInd
     *
     * Traveler group indicator.
     *
     * @return boolean
     */
    public function getGroupInd()
    {
        return $this->groupInd;
    }

    /**
     * Sets a new groupInd
     *
     * Traveler group indicator.
     *
     * @param boolean $groupInd
     * @return self
     */
    public function setGroupInd($groupInd)
    {
        $this->groupInd = $groupInd;

        return $this;
    }

    /**
     * Gets as profileRef
     *
     * Stored information about a customer. May contain readily available information
     * relevant to the booking.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\ProfileRefAType
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\ProfileRefAType
     * $profileRef
     * @return self
     */
    public function setProfileRef(\Davispeixoto\OpenTravelAlliance\AirTravelerType\ProfileRefAType $profileRef)
    {
        $this->profileRef = $profileRef;

        return $this;
    }

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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\TelephoneAType
     * $telephone
     */
    public function addToTelephone(\Davispeixoto\OpenTravelAlliance\AirTravelerType\TelephoneAType $telephone)
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
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\TelephoneAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\TelephoneAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\EmailAType $email
     */
    public function addToEmail(\Davispeixoto\OpenTravelAlliance\AirTravelerType\EmailAType $email)
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
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\EmailAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\EmailAType[] $email
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\AddressAType $address
     */
    public function addToAddress(\Davispeixoto\OpenTravelAlliance\AirTravelerType\AddressAType $address)
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
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\AddressAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\AddressAType[] $address
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\CustLoyaltyAType
     * $custLoyalty
     */
    public function addToCustLoyalty(\Davispeixoto\OpenTravelAlliance\AirTravelerType\CustLoyaltyAType $custLoyalty)
    {
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
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\CustLoyaltyAType[]
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
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\CustLoyaltyAType[]
     * $custLoyalty
     * @return self
     */
    public function setCustLoyalty(array $custLoyalty)
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * Adds as document
     *
     * Official travel document information associated with the person traveling.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\DocumentAType $document
     */
    public function addToDocument(\Davispeixoto\OpenTravelAlliance\AirTravelerType\DocumentAType $document)
    {
        $this->document[] = $document;

        return $this;
    }

    /**
     * isset document
     *
     * Official travel document information associated with the person traveling.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDocument($index)
    {
        return isset($this->document[$index]);
    }

    /**
     * unset document
     *
     * Official travel document information associated with the person traveling.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDocument($index)
    {
        unset($this->document[$index]);
    }

    /**
     * Gets as document
     *
     * Official travel document information associated with the person traveling.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\DocumentAType[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Sets a new document
     *
     * Official travel document information associated with the person traveling.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\DocumentAType[]
     * $document
     * @return self
     */
    public function setDocument(array $document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Gets as passengerTypeQuantity
     *
     * Specifies the number of travelers of a given passenger type (e.g., Adult, Child)
     *
     * @return \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     */
    public function getPassengerTypeQuantity()
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Sets a new passengerTypeQuantity
     *
     * Specifies the number of travelers of a given passenger type (e.g., Adult, Child)
     *
     * @param \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType
     * $passengerTypeQuantity
     * @return self
     */
    public function setPassengerTypeQuantity(
        \Davispeixoto\OpenTravelAlliance\PassengerTypeQuantityType $passengerTypeQuantity
    ) {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * Gets as travelerRefNumber
     *
     * Direct reference of traveler assigned by requesting system. Used as a cross
     * reference between data segments.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirTravelerType\TravelerRefNumberAType
     */
    public function getTravelerRefNumber()
    {
        return $this->travelerRefNumber;
    }

    /**
     * Sets a new travelerRefNumber
     *
     * Direct reference of traveler assigned by requesting system. Used as a cross
     * reference between data segments.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirTravelerType\TravelerRefNumberAType
     * $travelerRefNumber
     * @return self
     */
    public function setTravelerRefNumber(
        \Davispeixoto\OpenTravelAlliance\AirTravelerType\TravelerRefNumberAType $travelerRefNumber
    ) {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }

    /**
     * Adds as flightSegmentRPH
     *
     * Reference pointers to flight segments
     *
     * @return self
     * @param string $flightSegmentRPH
     */
    public function addToFlightSegmentRPHs($flightSegmentRPH)
    {
        $this->flightSegmentRPHs[] = $flightSegmentRPH;

        return $this;
    }

    /**
     * isset flightSegmentRPHs
     *
     * Reference pointers to flight segments
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightSegmentRPHs($index)
    {
        return isset($this->flightSegmentRPHs[$index]);
    }

    /**
     * unset flightSegmentRPHs
     *
     * Reference pointers to flight segments
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightSegmentRPHs($index)
    {
        unset($this->flightSegmentRPHs[$index]);
    }

    /**
     * Gets as flightSegmentRPHs
     *
     * Reference pointers to flight segments
     *
     * @return string[]
     */
    public function getFlightSegmentRPHs()
    {
        return $this->flightSegmentRPHs;
    }

    /**
     * Sets a new flightSegmentRPHs
     *
     * Reference pointers to flight segments
     *
     * @param string $flightSegmentRPHs
     * @return self
     */
    public function setFlightSegmentRPHs(array $flightSegmentRPHs)
    {
        $this->flightSegmentRPHs = $flightSegmentRPHs;

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


}

