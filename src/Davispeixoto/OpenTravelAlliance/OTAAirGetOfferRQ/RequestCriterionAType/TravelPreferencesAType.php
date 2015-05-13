<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirGetOfferRQ\RequestCriterionAType;

use Davispeixoto\OpenTravelAlliance\AirSearchPrefsType;

/**
 * Class representing TravelPreferencesAType
 */
class TravelPreferencesAType extends AirSearchPrefsType
{

    /**
     * To specify which portions of the journey the date is flexible.
     *
     * @property string $flexDatePref
     */
    private $flexDatePref = null;

    /**
     * If true, days before or after the weekend day should be searched.
     *
     * @property boolean $flexWeekendInd
     */
    private $flexWeekendInd = null;

    /**
     * If true, eligible for widest flex searches.
     *
     * @property boolean $flexLevelInd
     */
    private $flexLevelInd = null;

    /**
     * If true, no fare breaks in the itinerary apart from the turn point should be
     * considered.
     *
     * @property boolean $noFareBreakInd
     */
    private $noFareBreakInd = null;

    /**
     * Refers to specific origin destination information within this request message.
     *
     * @property string[] $originDestinationRPHs
     */
    private $originDestinationRPHs = null;

    /**
     * Gets as flexDatePref
     *
     * To specify which portions of the journey the date is flexible.
     *
     * @return string
     */
    public function getFlexDatePref()
    {
        return $this->flexDatePref;
    }

    /**
     * Sets a new flexDatePref
     *
     * To specify which portions of the journey the date is flexible.
     *
     * @param string $flexDatePref
     * @return self
     */
    public function setFlexDatePref($flexDatePref)
    {
        $this->flexDatePref = $flexDatePref;

        return $this;
    }

    /**
     * Gets as flexWeekendInd
     *
     * If true, days before or after the weekend day should be searched.
     *
     * @return boolean
     */
    public function getFlexWeekendInd()
    {
        return $this->flexWeekendInd;
    }

    /**
     * Sets a new flexWeekendInd
     *
     * If true, days before or after the weekend day should be searched.
     *
     * @param boolean $flexWeekendInd
     * @return self
     */
    public function setFlexWeekendInd($flexWeekendInd)
    {
        $this->flexWeekendInd = $flexWeekendInd;

        return $this;
    }

    /**
     * Gets as flexLevelInd
     *
     * If true, eligible for widest flex searches.
     *
     * @return boolean
     */
    public function getFlexLevelInd()
    {
        return $this->flexLevelInd;
    }

    /**
     * Sets a new flexLevelInd
     *
     * If true, eligible for widest flex searches.
     *
     * @param boolean $flexLevelInd
     * @return self
     */
    public function setFlexLevelInd($flexLevelInd)
    {
        $this->flexLevelInd = $flexLevelInd;

        return $this;
    }

    /**
     * Gets as noFareBreakInd
     *
     * If true, no fare breaks in the itinerary apart from the turn point should be
     * considered.
     *
     * @return boolean
     */
    public function getNoFareBreakInd()
    {
        return $this->noFareBreakInd;
    }

    /**
     * Sets a new noFareBreakInd
     *
     * If true, no fare breaks in the itinerary apart from the turn point should be
     * considered.
     *
     * @param boolean $noFareBreakInd
     * @return self
     */
    public function setNoFareBreakInd($noFareBreakInd)
    {
        $this->noFareBreakInd = $noFareBreakInd;

        return $this;
    }

    /**
     * Adds as originDestinationRPHs
     *
     * Refers to specific origin destination information within this request message.
     *
     * @return self
     * @param string $originDestinationRPHs
     */
    public function addToOriginDestinationRPHs($originDestinationRPHs)
    {
        $this->originDestinationRPHs[] = $originDestinationRPHs;

        return $this;
    }

    /**
     * isset originDestinationRPHs
     *
     * Refers to specific origin destination information within this request message.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationRPHs($index)
    {
        return isset($this->originDestinationRPHs[$index]);
    }

    /**
     * unset originDestinationRPHs
     *
     * Refers to specific origin destination information within this request message.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationRPHs($index)
    {
        unset($this->originDestinationRPHs[$index]);
    }

    /**
     * Gets as originDestinationRPHs
     *
     * Refers to specific origin destination information within this request message.
     *
     * @return string[]
     */
    public function getOriginDestinationRPHs()
    {
        return $this->originDestinationRPHs;
    }

    /**
     * Sets a new originDestinationRPHs
     *
     * Refers to specific origin destination information within this request message.
     *
     * @param string $originDestinationRPHs
     * @return self
     */
    public function setOriginDestinationRPHs(array $originDestinationRPHs)
    {
        $this->originDestinationRPHs = $originDestinationRPHs;

        return $this;
    }


}

