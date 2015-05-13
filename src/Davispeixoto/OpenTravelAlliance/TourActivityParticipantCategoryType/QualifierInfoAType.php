<?php

namespace Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType;

use Davispeixoto\OpenTravelAlliance\AgeQualifierType;

/**
 * Class representing QualifierInfoAType
 */
class QualifierInfoAType extends AgeQualifierType
{

    /**
     * A unique identifier for a participant category.
     *
     * @property string $participantCategoryID
     */
    private $participantCategoryID = null;

    /**
     * Gets as participantCategoryID
     *
     * A unique identifier for a participant category.
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
     * A unique identifier for a participant category.
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

