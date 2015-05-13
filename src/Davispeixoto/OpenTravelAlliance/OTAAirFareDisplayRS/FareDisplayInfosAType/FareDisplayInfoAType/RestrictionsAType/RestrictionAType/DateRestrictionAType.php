<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing DateRestrictionAType
 */
class DateRestrictionAType
{

    /**
     * Identify whether the restriction applies to the outbound , return or both trip
     * directions.
     *
     * @property string $application
     */
    private $application = null;

    /**
     * The start of the date restriction.
     *
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The end of the date restriction.
     *
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * When true, the date restriction period should be included (i.e., travel allowed
     * within those dates). When false, the date restriction period should be excluded
     * (ie., no travel allowed within those dates.)
     *
     * @property boolean $includeIndicator
     */
    private $includeIndicator = null;

    /**
     * Gets as application
     *
     * Identify whether the restriction applies to the outbound , return or both trip
     * directions.
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Sets a new application
     *
     * Identify whether the restriction applies to the outbound , return or both trip
     * directions.
     *
     * @param string $application
     * @return self
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Gets as startDate
     *
     * The start of the date restriction.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * The start of the date restriction.
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Gets as endDate
     *
     * The end of the date restriction.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * The end of the date restriction.
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Gets as includeIndicator
     *
     * When true, the date restriction period should be included (i.e., travel allowed
     * within those dates). When false, the date restriction period should be excluded
     * (ie., no travel allowed within those dates.)
     *
     * @return boolean
     */
    public function getIncludeIndicator()
    {
        return $this->includeIndicator;
    }

    /**
     * Sets a new includeIndicator
     *
     * When true, the date restriction period should be included (i.e., travel allowed
     * within those dates). When false, the date restriction period should be excluded
     * (ie., no travel allowed within those dates.)
     *
     * @param boolean $includeIndicator
     * @return self
     */
    public function setIncludeIndicator($includeIndicator)
    {
        $this->includeIndicator = $includeIndicator;

        return $this;
    }


}

