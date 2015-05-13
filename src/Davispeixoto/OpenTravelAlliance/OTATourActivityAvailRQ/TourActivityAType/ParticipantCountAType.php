<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivityAvailRQ\TourActivityAType;

use Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType;

/**
 * Class representing ParticipantCountAType
 */
class ParticipantCountAType extends TourActivityParticipantCategoryType
{

    /**
     * The number of free child places being requested.
     *
     * @property integer $freeChildrenQty
     */
    private $freeChildrenQty = null;

    /**
     * Gets as freeChildrenQty
     *
     * The number of free child places being requested.
     *
     * @return integer
     */
    public function getFreeChildrenQty()
    {
        return $this->freeChildrenQty;
    }

    /**
     * Sets a new freeChildrenQty
     *
     * The number of free child places being requested.
     *
     * @param integer $freeChildrenQty
     * @return self
     */
    public function setFreeChildrenQty($freeChildrenQty)
    {
        $this->freeChildrenQty = $freeChildrenQty;

        return $this;
    }


}

