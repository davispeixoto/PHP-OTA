<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityParticipantType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing ParticipantNameInfoAType
 */
class ParticipantNameInfoAType extends PersonNameType
{

    /**
     * A unique identifier for a known participant that may be referenced elsewhere in
     * this message.
     *
     * @property string $participantID
     */
    private $participantID = null;

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
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType\SpecialNeedAType[]
     * $specialNeed
     */
    private $specialNeed = null;

    /**
     * Lodging information for the participant.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TourActivityLodgingType $lodgingInfo
     */
    private $lodgingInfo = null;

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
     * Adds as specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType\SpecialNeedAType
     * $specialNeed
     */
    public function addToSpecialNeed(
        \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType\SpecialNeedAType $specialNeed
    ) {
        $this->specialNeed[] = $specialNeed;

        return $this;
    }

    /**
     * isset specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialNeed($index)
    {
        return isset($this->specialNeed[$index]);
    }

    /**
     * unset specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialNeed($index)
    {
        unset($this->specialNeed[$index]);
    }

    /**
     * Gets as specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType\SpecialNeedAType[]
     */
    public function getSpecialNeed()
    {
        return $this->specialNeed;
    }

    /**
     * Sets a new specialNeed
     *
     * The name and/or code for a special need requirement, such as a wheelchair or
     * vegetarian meal.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TourActivityParticipantType\ParticipantNameInfoAType\SpecialNeedAType[]
     * $specialNeed
     * @return self
     */
    public function setSpecialNeed(array $specialNeed)
    {
        $this->specialNeed = $specialNeed;

        return $this;
    }

    /**
     * Gets as lodgingInfo
     *
     * Lodging information for the participant.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TourActivityLodgingType
     */
    public function getLodgingInfo()
    {
        return $this->lodgingInfo;
    }

    /**
     * Sets a new lodgingInfo
     *
     * Lodging information for the participant.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TourActivityLodgingType $lodgingInfo
     * @return self
     */
    public function setLodgingInfo(\Davispeixoto\OpenTravelAlliance\TourActivityLodgingType $lodgingInfo)
    {
        $this->lodgingInfo = $lodgingInfo;

        return $this;
    }


}

