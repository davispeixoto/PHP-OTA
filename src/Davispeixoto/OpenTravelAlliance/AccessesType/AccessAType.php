<?php

namespace Davispeixoto\OpenTravelAlliance\AccessesType;

/**
 * Class representing AccessAType
 */
class AccessAType
{

    /**
     * Type of action taken on the profile.
     *
     * @property string $actionType
     */
    private $actionType = null;

    /**
     * Month, day, year and optionally in hour, minute, second of day in ISO 8601
     * format of the action taken on the profile.
     *
     * @property \DateTime $actionDateTime
     */
    private $actionDateTime = null;

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @property string $iD
     */
    private $iD = null;

    /**
     * Name of individual who originated or updated record.
     *
     * @property \Davispeixoto\OpenTravelAlliance\PersonNameType $accessPerson
     */
    private $accessPerson = null;

    /**
     * Free text comment added by the person accessing the profile record.
     *
     * @property \Davispeixoto\OpenTravelAlliance\FreeTextType $accessComment
     */
    private $accessComment = null;

    /**
     * Gets as actionType
     *
     * Type of action taken on the profile.
     *
     * @return string
     */
    public function getActionType()
    {
        return $this->actionType;
    }

    /**
     * Sets a new actionType
     *
     * Type of action taken on the profile.
     *
     * @param string $actionType
     * @return self
     */
    public function setActionType($actionType)
    {
        $this->actionType = $actionType;

        return $this;
    }

    /**
     * Gets as actionDateTime
     *
     * Month, day, year and optionally in hour, minute, second of day in ISO 8601
     * format of the action taken on the profile.
     *
     * @return \DateTime
     */
    public function getActionDateTime()
    {
        return $this->actionDateTime;
    }

    /**
     * Sets a new actionDateTime
     *
     * Month, day, year and optionally in hour, minute, second of day in ISO 8601
     * format of the action taken on the profile.
     *
     * @param \DateTime $actionDateTime
     * @return self
     */
    public function setActionDateTime(\DateTime $actionDateTime)
    {
        $this->actionDateTime = $actionDateTime;

        return $this;
    }

    /**
     * Gets as iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }

    /**
     * Sets a new iD
     *
     * A unique identifying value assigned by the creating system. The ID attribute may
     * be used to reference a primary-key value within a database or in a particular
     * implementation.
     *
     * @param string $iD
     * @return self
     */
    public function setID($iD)
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Gets as accessPerson
     *
     * Name of individual who originated or updated record.
     *
     * @return \Davispeixoto\OpenTravelAlliance\PersonNameType
     */
    public function getAccessPerson()
    {
        return $this->accessPerson;
    }

    /**
     * Sets a new accessPerson
     *
     * Name of individual who originated or updated record.
     *
     * @param \Davispeixoto\OpenTravelAlliance\PersonNameType $accessPerson
     * @return self
     */
    public function setAccessPerson(\Davispeixoto\OpenTravelAlliance\PersonNameType $accessPerson)
    {
        $this->accessPerson = $accessPerson;

        return $this;
    }

    /**
     * Gets as accessComment
     *
     * Free text comment added by the person accessing the profile record.
     *
     * @return \Davispeixoto\OpenTravelAlliance\FreeTextType
     */
    public function getAccessComment()
    {
        return $this->accessComment;
    }

    /**
     * Sets a new accessComment
     *
     * Free text comment added by the person accessing the profile record.
     *
     * @param \Davispeixoto\OpenTravelAlliance\FreeTextType $accessComment
     * @return self
     */
    public function setAccessComment(\Davispeixoto\OpenTravelAlliance\FreeTextType $accessComment)
    {
        $this->accessComment = $accessComment;

        return $this;
    }


}

