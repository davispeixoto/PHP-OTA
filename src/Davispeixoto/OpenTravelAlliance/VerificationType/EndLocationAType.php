<?php

namespace Davispeixoto\OpenTravelAlliance\VerificationType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing EndLocationAType
 */
class EndLocationAType extends LocationType
{

    /**
     * A date and time associated with this end location.
     *
     * @property \DateTime $associatedDateTime
     */
    private $associatedDateTime = null;

    /**
     * Gets as associatedDateTime
     *
     * A date and time associated with this end location.
     *
     * @return \DateTime
     */
    public function getAssociatedDateTime()
    {
        return $this->associatedDateTime;
    }

    /**
     * Sets a new associatedDateTime
     *
     * A date and time associated with this end location.
     *
     * @param \DateTime $associatedDateTime
     * @return self
     */
    public function setAssociatedDateTime(\DateTime $associatedDateTime)
    {
        $this->associatedDateTime = $associatedDateTime;

        return $this;
    }


}

