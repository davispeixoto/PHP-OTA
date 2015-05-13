<?php

namespace Davispeixoto\OpenTravelAlliance\SailingBaseType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing ArrivalPortAType
 */
class ArrivalPortAType extends LocationType
{

    /**
     * @property \DateTime $debarkationDateTime
     */
    private $debarkationDateTime = null;

    /**
     * Gets as debarkationDateTime
     *
     * @return \DateTime
     */
    public function getDebarkationDateTime()
    {
        return $this->debarkationDateTime;
    }

    /**
     * Sets a new debarkationDateTime
     *
     * @param \DateTime $debarkationDateTime
     * @return self
     */
    public function setDebarkationDateTime(\DateTime $debarkationDateTime)
    {
        $this->debarkationDateTime = $debarkationDateTime;

        return $this;
    }


}

