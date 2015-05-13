<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType;

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


}

