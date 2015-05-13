<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType;

use Davispeixoto\OpenTravelAlliance\TourActivityParticipantCategoryType;

/**
 * Class representing CustomerCountsAType
 */
class CustomerCountsAType extends TourActivityParticipantCategoryType
{

    /**
     * The minimum quantity of participants in a group.
     *
     * @property integer $minGroupSize
     */
    private $minGroupSize = null;

    /**
     * The maximum quantity of participants in a group.
     *
     * @property integer $maxGroupSize
     */
    private $maxGroupSize = null;

    /**
     * The actual quantity of participants in a group.
     *
     * @property integer $knownGroupSize
     */
    private $knownGroupSize = null;

    /**
     * Gets as minGroupSize
     *
     * The minimum quantity of participants in a group.
     *
     * @return integer
     */
    public function getMinGroupSize()
    {
        return $this->minGroupSize;
    }

    /**
     * Sets a new minGroupSize
     *
     * The minimum quantity of participants in a group.
     *
     * @param integer $minGroupSize
     * @return self
     */
    public function setMinGroupSize($minGroupSize)
    {
        $this->minGroupSize = $minGroupSize;

        return $this;
    }

    /**
     * Gets as maxGroupSize
     *
     * The maximum quantity of participants in a group.
     *
     * @return integer
     */
    public function getMaxGroupSize()
    {
        return $this->maxGroupSize;
    }

    /**
     * Sets a new maxGroupSize
     *
     * The maximum quantity of participants in a group.
     *
     * @param integer $maxGroupSize
     * @return self
     */
    public function setMaxGroupSize($maxGroupSize)
    {
        $this->maxGroupSize = $maxGroupSize;

        return $this;
    }

    /**
     * Gets as knownGroupSize
     *
     * The actual quantity of participants in a group.
     *
     * @return integer
     */
    public function getKnownGroupSize()
    {
        return $this->knownGroupSize;
    }

    /**
     * Sets a new knownGroupSize
     *
     * The actual quantity of participants in a group.
     *
     * @param integer $knownGroupSize
     * @return self
     */
    public function setKnownGroupSize($knownGroupSize)
    {
        $this->knownGroupSize = $knownGroupSize;

        return $this;
    }


}

