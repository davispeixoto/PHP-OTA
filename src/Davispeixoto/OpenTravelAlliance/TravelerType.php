<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TravelerType
 *
 * Information about the traveler.
 * XSD Type: TravelerType
 */
class TravelerType
{

    /**
     * Identifies the type of travel that the reviewer is describing (e.g. Leisure,
     * Business, etc.)
     *
     * @property string $travelType
     */
    private $travelType = null;

    /**
     * Identifies the type of traveler (e.g. Single, Group, Couple)
     *
     * @property string $travelerType
     */
    private $travelerType = null;

    /**
     * Gender of the reviewer.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * Age of the reviewer.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Defines the age range category or bucket to which the reviewer belongs.
     *
     * @property string $ageBucket
     */
    private $ageBucket = null;

    /**
     * When true, the reviewer prefers to remain anonymous when the review is
     * published.
     *
     * @property boolean $anonymousInd
     */
    private $anonymousInd = null;

    /**
     * Name of the reviewer.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $reviewerName
     */
    private $reviewerName = null;

    /**
     * Reviewer's email.
     *
     * @property \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType[]
     * $reviewerEmail
     */
    private $reviewerEmail = null;

    /**
     * Address of the reviewer. The standard AddressType is used to provide
     * flexibility, but typically just city name and country code are used.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType[]
     * $reviewerAddress
     */
    private $reviewerAddress = null;

    /**
     * Information regarding additional travelers in the party.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType $partyMix
     */
    private $partyMix = null;

    /**
     * Gets as travelType
     *
     * Identifies the type of travel that the reviewer is describing (e.g. Leisure,
     * Business, etc.)
     *
     * @return string
     */
    public function getTravelType()
    {
        return $this->travelType;
    }

    /**
     * Sets a new travelType
     *
     * Identifies the type of travel that the reviewer is describing (e.g. Leisure,
     * Business, etc.)
     *
     * @param string $travelType
     * @return self
     */
    public function setTravelType($travelType)
    {
        $this->travelType = $travelType;

        return $this;
    }

    /**
     * Gets as travelerType
     *
     * Identifies the type of traveler (e.g. Single, Group, Couple)
     *
     * @return string
     */
    public function getTravelerType()
    {
        return $this->travelerType;
    }

    /**
     * Sets a new travelerType
     *
     * Identifies the type of traveler (e.g. Single, Group, Couple)
     *
     * @param string $travelerType
     * @return self
     */
    public function setTravelerType($travelerType)
    {
        $this->travelerType = $travelerType;

        return $this;
    }

    /**
     * Gets as gender
     *
     * Gender of the reviewer.
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
     * Gender of the reviewer.
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
     * Gets as age
     *
     * Age of the reviewer.
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
     * Age of the reviewer.
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
     * Gets as ageBucket
     *
     * Defines the age range category or bucket to which the reviewer belongs.
     *
     * @return string
     */
    public function getAgeBucket()
    {
        return $this->ageBucket;
    }

    /**
     * Sets a new ageBucket
     *
     * Defines the age range category or bucket to which the reviewer belongs.
     *
     * @param string $ageBucket
     * @return self
     */
    public function setAgeBucket($ageBucket)
    {
        $this->ageBucket = $ageBucket;

        return $this;
    }

    /**
     * Gets as anonymousInd
     *
     * When true, the reviewer prefers to remain anonymous when the review is
     * published.
     *
     * @return boolean
     */
    public function getAnonymousInd()
    {
        return $this->anonymousInd;
    }

    /**
     * Sets a new anonymousInd
     *
     * When true, the reviewer prefers to remain anonymous when the review is
     * published.
     *
     * @param boolean $anonymousInd
     * @return self
     */
    public function setAnonymousInd($anonymousInd)
    {
        $this->anonymousInd = $anonymousInd;

        return $this;
    }

    /**
     * Gets as reviewerName
     *
     * Name of the reviewer.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getReviewerName()
    {
        return $this->reviewerName;
    }

    /**
     * Sets a new reviewerName
     *
     * Name of the reviewer.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $reviewerName
     * @return self
     */
    public function setReviewerName(\Davispeixoto\OpenTravelAlliance\PersonNameType $reviewerName)
    {
        $this->reviewerName = $reviewerName;

        return $this;
    }

    /**
     * Adds as email
     *
     * Reviewer's email.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType $email
     */
    public function addToReviewerEmail(\Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType $email)
    {
        $this->reviewerEmail[] = $email;

        return $this;
    }

    /**
     * isset reviewerEmail
     *
     * Reviewer's email.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReviewerEmail($index)
    {
        return isset($this->reviewerEmail[$index]);
    }

    /**
     * unset reviewerEmail
     *
     * Reviewer's email.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReviewerEmail($index)
    {
        unset($this->reviewerEmail[$index]);
    }

    /**
     * Gets as reviewerEmail
     *
     * Reviewer's email.
     *
     * @return \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType[]
     */
    public function getReviewerEmail()
    {
        return $this->reviewerEmail;
    }

    /**
     * Sets a new reviewerEmail
     *
     * Reviewer's email.
     *
     * @param \Davispeixoto\OpenTravelAlliance\EmailsType\EmailAType[] $reviewerEmail
     * @return self
     */
    public function setReviewerEmail(array $reviewerEmail)
    {
        $this->reviewerEmail = $reviewerEmail;

        return $this;
    }

    /**
     * Adds as address
     *
     * Address of the reviewer. The standard AddressType is used to provide
     * flexibility, but typically just city name and country code are used.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType $address
     */
    public function addToReviewerAddress(\Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType $address)
    {
        $this->reviewerAddress[] = $address;

        return $this;
    }

    /**
     * isset reviewerAddress
     *
     * Address of the reviewer. The standard AddressType is used to provide
     * flexibility, but typically just city name and country code are used.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReviewerAddress($index)
    {
        return isset($this->reviewerAddress[$index]);
    }

    /**
     * unset reviewerAddress
     *
     * Address of the reviewer. The standard AddressType is used to provide
     * flexibility, but typically just city name and country code are used.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReviewerAddress($index)
    {
        unset($this->reviewerAddress[$index]);
    }

    /**
     * Gets as reviewerAddress
     *
     * Address of the reviewer. The standard AddressType is used to provide
     * flexibility, but typically just city name and country code are used.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType[]
     */
    public function getReviewerAddress()
    {
        return $this->reviewerAddress;
    }

    /**
     * Sets a new reviewerAddress
     *
     * Address of the reviewer. The standard AddressType is used to provide
     * flexibility, but typically just city name and country code are used.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AddressesType\AddressAType[]
     * $reviewerAddress
     * @return self
     */
    public function setReviewerAddress(array $reviewerAddress)
    {
        $this->reviewerAddress = $reviewerAddress;

        return $this;
    }

    /**
     * Gets as partyMix
     *
     * Information regarding additional travelers in the party.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType
     */
    public function getPartyMix()
    {
        return $this->partyMix;
    }

    /**
     * Sets a new partyMix
     *
     * Information regarding additional travelers in the party.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType $partyMix
     * @return self
     */
    public function setPartyMix(\Davispeixoto\OpenTravelAlliance\TravelerType\PartyMixAType $partyMix)
    {
        $this->partyMix = $partyMix;

        return $this;
    }


}

