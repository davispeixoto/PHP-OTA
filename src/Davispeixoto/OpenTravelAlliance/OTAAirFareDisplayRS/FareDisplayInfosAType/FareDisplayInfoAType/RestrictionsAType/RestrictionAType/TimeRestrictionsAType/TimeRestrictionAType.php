<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType;

/**
 * Class representing TimeRestrictionAType
 */
class TimeRestrictionAType
{

    /**
     * The start time for the time restriction.
     *
     * @property \DateTime $startTime
     */
    private $startTime = null;

    /**
     * The end time for the time restriction.
     *
     * @property \DateTime $endTime
     */
    private $endTime = null;

    /**
     * When true, the time restriction period should be included (i.e. travel allowed
     * between the start and end times). When false, the time restriction period should
     * be excluded (i.e. no travel allowed between the start and end times.)
     *
     * @property boolean $includeExcludeUseInd
     */
    private $includeExcludeUseInd = null;

    /**
     * Gets as startTime
     *
     * The start time for the time restriction.
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets a new startTime
     *
     * The start time for the time restriction.
     *
     * @param \DateTime $startTime
     * @return self
     */
    public function setStartTime(\DateTime $startTime)
    {
        $this->startTime = $startTime;

        return $this;
    }

    /**
     * Gets as endTime
     *
     * The end time for the time restriction.
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets a new endTime
     *
     * The end time for the time restriction.
     *
     * @param \DateTime $endTime
     * @return self
     */
    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;

        return $this;
    }

    /**
     * Gets as includeExcludeUseInd
     *
     * When true, the time restriction period should be included (i.e. travel allowed
     * between the start and end times). When false, the time restriction period should
     * be excluded (i.e. no travel allowed between the start and end times.)
     *
     * @return boolean
     */
    public function getIncludeExcludeUseInd()
    {
        return $this->includeExcludeUseInd;
    }

    /**
     * Sets a new includeExcludeUseInd
     *
     * When true, the time restriction period should be included (i.e. travel allowed
     * between the start and end times). When false, the time restriction period should
     * be excluded (i.e. no travel allowed between the start and end times.)
     *
     * @param boolean $includeExcludeUseInd
     * @return self
     */
    public function setIncludeExcludeUseInd($includeExcludeUseInd)
    {
        $this->includeExcludeUseInd = $includeExcludeUseInd;

        return $this;
    }


}

