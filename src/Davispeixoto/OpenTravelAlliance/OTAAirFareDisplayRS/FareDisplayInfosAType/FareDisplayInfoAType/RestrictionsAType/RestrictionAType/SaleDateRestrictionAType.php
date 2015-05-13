<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing SaleDateRestrictionAType
 */
class SaleDateRestrictionAType
{

    /**
     * The start date (inclusive) of the date range within which this fare can be sold.
     *
     * @property \DateTime $startDate
     */
    private $startDate = null;

    /**
     * The end date (inclusive) of the date range within which this fare can be sold.
     *
     * @property \DateTime $endDate
     */
    private $endDate = null;

    /**
     * When true, this fare can be sold within the date range. When false, this fare
     * cannot be sold within the date range.
     *
     * @property boolean $includeIndicator
     */
    private $includeIndicator = null;

    /**
     * Gets as startDate
     *
     * The start date (inclusive) of the date range within which this fare can be sold.
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
     * The start date (inclusive) of the date range within which this fare can be sold.
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
     * The end date (inclusive) of the date range within which this fare can be sold.
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
     * The end date (inclusive) of the date range within which this fare can be sold.
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
     * When true, this fare can be sold within the date range. When false, this fare
     * cannot be sold within the date range.
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
     * When true, this fare can be sold within the date range. When false, this fare
     * cannot be sold within the date range.
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

