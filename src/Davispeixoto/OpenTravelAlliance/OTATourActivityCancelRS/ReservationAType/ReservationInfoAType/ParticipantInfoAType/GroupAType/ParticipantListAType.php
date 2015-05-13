<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityCancelRS\ReservationAType\ReservationInfoAType\ParticipantInfoAType\GroupAType;

/**
 * Class representing ParticipantListAType
 */
class ParticipantListAType
{

    /**
     * The unique ID for a participant defined elsewhere in this message.
     *
     * @property string $participantID
     */
    private $participantID = null;

    /**
     * The unique ID for a participant category defined elsewhere in this message.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * Gets as participantID
     *
     * The unique ID for a participant defined elsewhere in this message.
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
     * The unique ID for a participant defined elsewhere in this message.
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
     * The unique ID for a participant category defined elsewhere in this message.
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
     * The unique ID for a participant category defined elsewhere in this message.
     *
     * @param string $participantCategoryID
     * @return self
     */
    public function setParticipantCategoryID($participantCategoryID)
    {
        $this->participantCategoryID = $participantCategoryID;

        return $this;
    }


}

