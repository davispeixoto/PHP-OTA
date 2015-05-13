<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType;

/**
 * Class representing GroupAType
 */
class GroupAType
{

    /**
     * A group code that participant(s) are associated with.
     *
     * @property string $groupCode
     */
    private $groupCode = null;

    /**
     * A group name that participant(s) are associated with.
     *
     * @property string $groupName
     */
    private $groupName = null;

    /**
     * A unique identifier for a group that may be used elsewhere in this message.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * The minimum quantity of participants in a group.
     *
     * @property integer $minGroupSize
     */
    private $minGroupSize = null;

    /**
     * The maximum quantity of participants in a group.
     *
     * @property integer $maxGroupSize
     */
    private $maxGroupSize = null;

    /**
     * The actual quantity of participants in a group.
     *
     * @property integer $knownGroupSize
     */
    private $knownGroupSize = null;

    /**
     * The primary contact for the group.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     */
    private $contact = null;

    /**
     * A list of individual participants or participant category(s) associated with the
     * group.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType\ParticipantListAType[]
     * $participantList
     */
    private $participantList = null;

    /**
     * Gets as groupCode
     *
     * A group code that participant(s) are associated with.
     *
     * @return string
     */
    public function getGroupCode()
    {
        return $this->groupCode;
    }

    /**
     * Sets a new groupCode
     *
     * A group code that participant(s) are associated with.
     *
     * @param string $groupCode
     * @return self
     */
    public function setGroupCode($groupCode)
    {
        $this->groupCode = $groupCode;

        return $this;
    }

    /**
     * Gets as groupName
     *
     * A group name that participant(s) are associated with.
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Sets a new groupName
     *
     * A group name that participant(s) are associated with.
     *
     * @param string $groupName
     * @return self
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique identifier for a group that may be used elsewhere in this message.
     *
     * @return string
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * Sets a new groupID
     *
     * A unique identifier for a group that may be used elsewhere in this message.
     *
     * @param string $groupID
     * @return self
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;

        return $this;
    }

    /**
     * Gets as minGroupSize
     *
     * The minimum quantity of participants in a group.
     *
     * @return integer
     */
    public function getMinGroupSize()
    {
        return $this->minGroupSize;
    }

    /**
     * Sets a new minGroupSize
     *
     * The minimum quantity of participants in a group.
     *
     * @param integer $minGroupSize
     * @return self
     */
    public function setMinGroupSize($minGroupSize)
    {
        $this->minGroupSize = $minGroupSize;

        return $this;
    }

    /**
     * Gets as maxGroupSize
     *
     * The maximum quantity of participants in a group.
     *
     * @return integer
     */
    public function getMaxGroupSize()
    {
        return $this->maxGroupSize;
    }

    /**
     * Sets a new maxGroupSize
     *
     * The maximum quantity of participants in a group.
     *
     * @param integer $maxGroupSize
     * @return self
     */
    public function setMaxGroupSize($maxGroupSize)
    {
        $this->maxGroupSize = $maxGroupSize;

        return $this;
    }

    /**
     * Gets as knownGroupSize
     *
     * The actual quantity of participants in a group.
     *
     * @return integer
     */
    public function getKnownGroupSize()
    {
        return $this->knownGroupSize;
    }

    /**
     * Sets a new knownGroupSize
     *
     * The actual quantity of participants in a group.
     *
     * @param integer $knownGroupSize
     * @return self
     */
    public function setKnownGroupSize($knownGroupSize)
    {
        $this->knownGroupSize = $knownGroupSize;

        return $this;
    }

    /**
     * Gets as contact
     *
     * The primary contact for the group.
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
     * The primary contact for the group.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ContactPersonType $contact
     * @return self
     */
    public function setContact(\Davispeixoto\OpenTravelAlliance\ContactPersonType $contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Adds as participantList
     *
     * A list of individual participants or participant category(s) associated with the
     * group.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType\ParticipantListAType
     * $participantList
     */
    public function addToParticipantList(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType\ParticipantListAType $participantList
    ) {
        $this->participantList[] = $participantList;

        return $this;
    }

    /**
     * isset participantList
     *
     * A list of individual participants or participant category(s) associated with the
     * group.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetParticipantList($index)
    {
        return isset($this->participantList[$index]);
    }

    /**
     * unset participantList
     *
     * A list of individual participants or participant category(s) associated with the
     * group.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetParticipantList($index)
    {
        unset($this->participantList[$index]);
    }

    /**
     * Gets as participantList
     *
     * A list of individual participants or participant category(s) associated with the
     * group.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType\ParticipantListAType[]
     */
    public function getParticipantList()
    {
        return $this->participantList;
    }

    /**
     * Sets a new participantList
     *
     * A list of individual participants or participant category(s) associated with the
     * group.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityModifyRQ\BookingInfoAType\ParticipantInfoAType\GroupAType\ParticipantListAType[]
     * $participantList
     * @return self
     */
    public function setParticipantList(array $participantList)
    {
        $this->participantList = $participantList;

        return $this;
    }


}

