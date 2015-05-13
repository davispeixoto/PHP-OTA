<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType;

/**
 * Class representing DaysOfWeekRestrictionAType
 */
class DaysOfWeekRestrictionAType
{

    /**
     * Identify whether the restriction applies to the outbound , return or both trip
     * directions.
     *
     * @property string $application
     */
    private $application = null;

    /**
     * Indicate the type of trip to which the restriction applies.
     *
     * @property string $tripType
     */
    private $tripType = null;

    /**
     * When true, indicates that a day of week restriction applies.
     *
     * @property boolean $restrictionExistsInd
     */
    private $restrictionExistsInd = null;

    /**
     * When true, the days of week should be included (i.e. travel allowed on those
     * days). When false, the days of week should be excluded (i.e. no travel allowed
     * on those days.)
     *
     * @property boolean $includeExcludeUseInd
     */
    private $includeExcludeUseInd = null;

    /**
     * When true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

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
     * Gets as tripType
     *
     * Indicate the type of trip to which the restriction applies.
     *
     * @return string
     */
    public function getTripType()
    {
        return $this->tripType;
    }

    /**
     * Sets a new tripType
     *
     * Indicate the type of trip to which the restriction applies.
     *
     * @param string $tripType
     * @return self
     */
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;

        return $this;
    }

    /**
     * Gets as restrictionExistsInd
     *
     * When true, indicates that a day of week restriction applies.
     *
     * @return boolean
     */
    public function getRestrictionExistsInd()
    {
        return $this->restrictionExistsInd;
    }

    /**
     * Sets a new restrictionExistsInd
     *
     * When true, indicates that a day of week restriction applies.
     *
     * @param boolean $restrictionExistsInd
     * @return self
     */
    public function setRestrictionExistsInd($restrictionExistsInd)
    {
        $this->restrictionExistsInd = $restrictionExistsInd;

        return $this;
    }

    /**
     * Gets as includeExcludeUseInd
     *
     * When true, the days of week should be included (i.e. travel allowed on those
     * days). When false, the days of week should be excluded (i.e. no travel allowed
     * on those days.)
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
     * When true, the days of week should be included (i.e. travel allowed on those
     * days). When false, the days of week should be excluded (i.e. no travel allowed
     * on those days.)
     *
     * @param boolean $includeExcludeUseInd
     * @return self
     */
    public function setIncludeExcludeUseInd($includeExcludeUseInd)
    {
        $this->includeExcludeUseInd = $includeExcludeUseInd;

        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

        return $this;
    }


}

