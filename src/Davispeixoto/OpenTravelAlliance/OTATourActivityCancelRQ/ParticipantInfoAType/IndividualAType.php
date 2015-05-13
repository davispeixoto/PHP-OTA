<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRQ\ParticipantInfoAType;

use Davispeixoto\OpenTravelAlliance\PersonNameType;

/**
 * Class representing IndividualAType
 */
class IndividualAType extends PersonNameType
{

    /**
     * The unique ID of this participant.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * Gets as participantID
     *
     * The unique ID of this participant.
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
     * The unique ID of this participant.
     *
     * @param string $participantID
     * @return self
     */
    public function setParticipantID($participantID)
    {
        $this->participantID = $participantID;

        return $this;
    }


}

