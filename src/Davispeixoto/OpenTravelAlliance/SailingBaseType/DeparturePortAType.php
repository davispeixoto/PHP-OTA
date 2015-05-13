<?php

namespace Davispeixoto\OpenTravelAlliance\SailingBaseType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing DeparturePortAType
 */
class DeparturePortAType extends LocationType
{

    /**
     * @property \DateTime $embarkationTime
     */
    private $embarkationTime = null;

    /**
     * Gets as embarkationTime
     *
     * @return \DateTime
     */
    public function getEmbarkationTime()
    {
        return $this->embarkationTime;
    }

    /**
     * Sets a new embarkationTime
     *
     * @param \DateTime $embarkationTime
     * @return self
     */
    public function setEmbarkationTime(\DateTime $embarkationTime)
    {
        $this->embarkationTime = $embarkationTime;

        return $this;
    }


}

