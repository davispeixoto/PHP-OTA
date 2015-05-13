<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing IndividualAType
 */
class IndividualAType extends PersonNameType
{

    /**
     * A unique identifier for a known participant that may be referenced elsewhere in
     * this message.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * This is used to specify a participant age in years.
     *
     * @property integer $age
     */
    private $age = null;

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed
     * format.
     *
     * @property \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * Identifies the gender.
     *
     * @property string $gender
     */
    private $gender = null;

    /**
     * The nationality of a participant, if known. Uses ISO 3166 Country Codes.
     *
     * @property string $nationality
     */
    private $nationality = null;

    /**
     * When 'true', indicates that this is the 'lead' participantr (i.e., the primary
     * contact making the booking).
     *
     * @property boolean $leadCustomerInd
     */
    private $leadCustomerInd = null;

    /**
     * If true, this participant will have an infant.
     *
     * @property boolean $infantInd
     */
    private $infantInd = null;

    /**
     * Contact information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    private $contact = null;

    /**
     * Gets as participantID
     *
     * A unique identifier for a known participant that may be referenced elsewhere in
     * this message.
     *
     * @return string
     */
    public function getParticipantID()
    {
        return $this->participantID;
    }

    /**
     * Sets a new participantID
     *
     * A unique identifier for a known participant that may be referenced elsewhere in
     * this message.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }

    /**
     * Gets as age
     *
     * This is used to specify a participant age in years.
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
     * This is used to specify a participant age in years.
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
     * Gets as nationality
     *
     * The nationality of a participant, if known. Uses ISO 3166 Country Codes.
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
     * The nationality of a participant, if known. Uses ISO 3166 Country Codes.
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
     * Gets as leadCustomerInd
     *
     * When 'true', indicates that this is the 'lead' participantr (i.e., the primary
     * contact making the booking).
     *
     * @return boolean
     */
    public function getLeadCustomerInd()
    {
        return $this->leadCustomerInd;
    }

    /**
     * Sets a new leadCustomerInd
     *
     * When 'true', indicates that this is the 'lead' participantr (i.e., the primary
     * contact making the booking).
     *
     * @param boolean $leadCustomerInd
     * @return self
     */
    public function setLeadCustomerInd($leadCustomerInd)
    {
        $this->leadCustomerInd = $leadCustomerInd;

        return $this;
    }

    /**
     * Gets as infantInd
     *
     * If true, this participant will have an infant.
     *
     * @return boolean
     */
    public function getInfantInd()
    {
        return $this->infantInd;
    }

    /**
     * Sets a new infantInd
     *
     * If true, this participant will have an infant.
     *
     * @param boolean $infantInd
     * @return self
     */
    public function setInfantInd($infantInd)
    {
        $this->infantInd = $infantInd;

        return $this;
    }

    /**
     * Gets as contact
     *
     * Contact information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ContactPersonType
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Sets a new contact
     *
     * Contact information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact = $contact;

        return $this;
    }


}

