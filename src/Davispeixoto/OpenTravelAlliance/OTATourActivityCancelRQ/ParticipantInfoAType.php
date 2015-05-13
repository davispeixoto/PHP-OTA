<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ;

/**
 * Class representing ParticipantInfoAType
 */
class ParticipantInfoAType
{

    /**
     * Group details.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\GroupAType
     * $group
     */
    private $group = null;

    /**
     * Name and other information for known participants.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\IndividualAType
     * $individual
     */
    private $individual = null;

    /**
     * Gets as group
     *
     * Group details.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\GroupAType
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Sets a new group
     *
     * Group details.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\GroupAType
     * $group
     * @return self
     */
    public function setGroup(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\GroupAType $group
    ) {
        $this->group = $group;

        return $this;
    }

    /**
     * Gets as individual
     *
     * Name and other information for known participants.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\IndividualAType
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * Sets a new individual
     *
     * Name and other information for known participants.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\IndividualAType
     * $individual
     * @return self
     */
    public function setIndividual(
        \Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType\IndividualAType $individual
    ) {
        $this->individual = $individual;

        return $this;
    }


}

