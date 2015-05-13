<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirLowFareSearchRQ;

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
     * @property boolean $flexWeekendIndicator
     */
    private $flexWeekendIndicator = null;

    /**
     * If true, eligible for widest flex searches.
     *
     * @property boolean $flexLevelIndicator
     */
    private $flexLevelIndicator = null;

    /**
     * If true, no fare breaks in the itinerary apart from the turn point should be
     * considered.
     *
     * @property boolean $noFareBreakIndicator
     */
    private $noFareBreakIndicator = null;

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
     * Gets as flexWeekendIndicator
     *
     * If true, days before or after the weekend day should be searched.
     *
     * @return boolean
     */
    public function getFlexWeekendIndicator()
    {
        return $this->flexWeekendIndicator;
    }

    /**
     * Sets a new flexWeekendIndicator
     *
     * If true, days before or after the weekend day should be searched.
     *
     * @param boolean $flexWeekendIndicator
     * @return self
     */
    public function setFlexWeekendIndicator($flexWeekendIndicator)
    {
        $this->flexWeekendIndicator = $flexWeekendIndicator;

        return $this;
    }

    /**
     * Gets as flexLevelIndicator
     *
     * If true, eligible for widest flex searches.
     *
     * @return boolean
     */
    public function getFlexLevelIndicator()
    {
        return $this->flexLevelIndicator;
    }

    /**
     * Sets a new flexLevelIndicator
     *
     * If true, eligible for widest flex searches.
     *
     * @param boolean $flexLevelIndicator
     * @return self
     */
    public function setFlexLevelIndicator($flexLevelIndicator)
    {
        $this->flexLevelIndicator = $flexLevelIndicator;

        return $this;
    }

    /**
     * Gets as noFareBreakIndicator
     *
     * If true, no fare breaks in the itinerary apart from the turn point should be
     * considered.
     *
     * @return boolean
     */
    public function getNoFareBreakIndicator()
    {
        return $this->noFareBreakIndicator;
    }

    /**
     * Sets a new noFareBreakIndicator
     *
     * If true, no fare breaks in the itinerary apart from the turn point should be
     * considered.
     *
     * @param boolean $noFareBreakIndicator
     * @return self
     */
    public function setNoFareBreakIndicator($noFareBreakIndicator)
    {
        $this->noFareBreakIndicator = $noFareBreakIndicator;

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

