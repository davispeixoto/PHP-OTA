<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityBookRQ\BookingInfoAType;

/**
 * Class representing InsuranceAType
 */
class InsuranceAType
{

    /**
     * The third-party insurance plan ID.
     *
     * @property string $planID
     */
    private $planID = null;

    /**
     * The third-party insurance plan name.
     *
     * @property string $planName
     */
    private $planName = null;

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
     *
     * @property string $groupID
     */
    private $groupID = null;

    /**
     * The name of the insurer provider company.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName
     */
    private $providerName = null;

    /**
     * Coverage limitations, including deductible and policy limit.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit
     */
    private $coverageLimit = null;

    /**
     * Gets as planID
     *
     * The third-party insurance plan ID.
     *
     * @return string
     */
    public function getPlanID()
    {
        return $this->planID;
    }

    /**
     * Sets a new planID
     *
     * The third-party insurance plan ID.
     *
     * @param string $planID
     * @return self
     */
    public function setPlanID($planID)
    {
        $this->planID = $planID;

        return $this;
    }

    /**
     * Gets as planName
     *
     * The third-party insurance plan name.
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * Sets a new planName
     *
     * The third-party insurance plan name.
     *
     * @param string $planName
     * @return self
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * Gets as start
     *
     * The starting value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * The starting value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as participantID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
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
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant with other information.
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
     * Gets as participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @return string
     */
    public function getParticipantCategoryID()
    {
        return $this->participantCategoryID;
    }

    /**
     * Sets a new participantCategoryID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a
     * participant category with other information.
     *
     * @param string $participantCategoryID
     * @return self
     */
    public function setParticipantCategoryID($participantCategoryID)
    {
        $this->participantCategoryID = $participantCategoryID;

        return $this;
    }

    /**
     * Gets as groupID
     *
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
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
     * A unique ID (that is assigned elsewhere in the message) that associates a group
     * with other information.
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
     * Gets as providerName
     *
     * The name of the insurer provider company.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * Sets a new providerName
     *
     * The name of the insurer provider company.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName
     * @return self
     */
    public function setProviderName(\Davispeixoto\OpenTravelAlliance\CompanyNameType $providerName)
    {
        $this->providerName = $providerName;

        return $this;
    }

    /**
     * Gets as coverageLimit
     *
     * Coverage limitations, including deductible and policy limit.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CoverageLimitType
     */
    public function getCoverageLimit()
    {
        return $this->coverageLimit;
    }

    /**
     * Sets a new coverageLimit
     *
     * Coverage limitations, including deductible and policy limit.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit
     * @return self
     */
    public function setCoverageLimit(\Davispeixoto\OpenTravelAlliance\CoverageLimitType $coverageLimit)
    {
        $this->coverageLimit = $coverageLimit;

        return $this;
    }


}

