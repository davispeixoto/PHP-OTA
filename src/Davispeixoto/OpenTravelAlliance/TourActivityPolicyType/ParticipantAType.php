<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityPolicyType;

/**
 * Class representing ParticipantAType
 */
class ParticipantAType
{

    /**
     * The minimum number of participants for the tour/activity.
     *
     * @property integer $minParticipants
     */
    private $minParticipants = null;

    /**
     * The maximum number of participants for the tour/activity.
     *
     * @property integer $maxParticipants
     */
    private $maxParticipants = null;

    /**
     * The minimum permitted age for participants for the tour/activity.
     *
     * @property integer $minAge
     */
    private $minAge = null;

    /**
     * The maximum permitted age for participants on the tour/activity.
     *
     * @property integer $maxAge
     */
    private $maxAge = null;

    /**
     * Gets as minParticipants
     *
     * The minimum number of participants for the tour/activity.
     *
     * @return integer
     */
    public function getMinParticipants()
    {
        return $this->minParticipants;
    }

    /**
     * Sets a new minParticipants
     *
     * The minimum number of participants for the tour/activity.
     *
     * @param integer $minParticipants
     * @return self
     */
    public function setMinParticipants($minParticipants)
    {
        $this->minParticipants = $minParticipants;

        return $this;
    }

    /**
     * Gets as maxParticipants
     *
     * The maximum number of participants for the tour/activity.
     *
     * @return integer
     */
    public function getMaxParticipants()
    {
        return $this->maxParticipants;
    }

    /**
     * Sets a new maxParticipants
     *
     * The maximum number of participants for the tour/activity.
     *
     * @param integer $maxParticipants
     * @return self
     */
    public function setMaxParticipants($maxParticipants)
    {
        $this->maxParticipants = $maxParticipants;

        return $this;
    }

    /**
     * Gets as minAge
     *
     * The minimum permitted age for participants for the tour/activity.
     *
     * @return integer
     */
    public function getMinAge()
    {
        return $this->minAge;
    }

    /**
     * Sets a new minAge
     *
     * The minimum permitted age for participants for the tour/activity.
     *
     * @param integer $minAge
     * @return self
     */
    public function setMinAge($minAge)
    {
        $this->minAge = $minAge;

        return $this;
    }

    /**
     * Gets as maxAge
     *
     * The maximum permitted age for participants on the tour/activity.
     *
     * @return integer
     */
    public function getMaxAge()
    {
        return $this->maxAge;
    }

    /**
     * Sets a new maxAge
     *
     * The maximum permitted age for participants on the tour/activity.
     *
     * @param integer $maxAge
     * @return self
     */
    public function setMaxAge($maxAge)
    {
        $this->maxAge = $maxAge;

        return $this;
    }


}

