<?php

namespace Davispeixoto\OpenTravelAlliance\AggregateInfoType;

/**
 * Class representing AggregateInfoAType
 */
class AggregateInfoAType
{

    /**
     * Identifies the level of aggregration to be returned.
     *
     * @property string $level
     */
    private $level = null;

    /**
     * Allows a reference to be assigned by a requestor to be used when matching the
     * responses to the requests.
     *
     * @property string $aggregationRef
     */
    private $aggregationRef = null;

    /**
     * When true, the breakdown by TravelerType is required.
     *
     * @property boolean $travelerTypeInd
     */
    private $travelerTypeInd = null;

    /**
     * Identifies if the breakdown should be returned by month or quarter of travel.
     *
     * @property string $dateAggregation
     */
    private $dateAggregation = null;

    /**
     * Gets as level
     *
     * Identifies the level of aggregration to be returned.
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * Identifies the level of aggregration to be returned.
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Gets as aggregationRef
     *
     * Allows a reference to be assigned by a requestor to be used when matching the
     * responses to the requests.
     *
     * @return string
     */
    public function getAggregationRef()
    {
        return $this->aggregationRef;
    }

    /**
     * Sets a new aggregationRef
     *
     * Allows a reference to be assigned by a requestor to be used when matching the
     * responses to the requests.
     *
     * @param string $aggregationRef
     * @return self
     */
    public function setAggregationRef($aggregationRef)
    {
        $this->aggregationRef = $aggregationRef;

        return $this;
    }

    /**
     * Gets as travelerTypeInd
     *
     * When true, the breakdown by TravelerType is required.
     *
     * @return boolean
     */
    public function getTravelerTypeInd()
    {
        return $this->travelerTypeInd;
    }

    /**
     * Sets a new travelerTypeInd
     *
     * When true, the breakdown by TravelerType is required.
     *
     * @param boolean $travelerTypeInd
     * @return self
     */
    public function setTravelerTypeInd($travelerTypeInd)
    {
        $this->travelerTypeInd = $travelerTypeInd;

        return $this;
    }

    /**
     * Gets as dateAggregation
     *
     * Identifies if the breakdown should be returned by month or quarter of travel.
     *
     * @return string
     */
    public function getDateAggregation()
    {
        return $this->dateAggregation;
    }

    /**
     * Sets a new dateAggregation
     *
     * Identifies if the breakdown should be returned by month or quarter of travel.
     *
     * @param string $dateAggregation
     * @return self
     */
    public function setDateAggregation($dateAggregation)
    {
        $this->dateAggregation = $dateAggregation;

        return $this;
    }


}

