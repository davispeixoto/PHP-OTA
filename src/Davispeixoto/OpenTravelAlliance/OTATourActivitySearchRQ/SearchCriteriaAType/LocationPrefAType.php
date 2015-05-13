<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType;

use Davispeixoto\OpenTravelAlliance\TourActivityLocationType;

/**
 * Class representing LocationPrefAType
 */
class LocationPrefAType extends TourActivityLocationType
{

    /**
     * One or more postal service standard codes or abbreviations for the state or
     * province. An ISO 3166-2 Sub-division/State Code may be used.
     *
     * @property string[] $stateCodeList
     */
    private $stateCodeList = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Adds as stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state or
     * province. An ISO 3166-2 Sub-division/State Code may be used.
     *
     * @return self
     * @param string $stateCodeList
     */
    public function addToStateCodeList($stateCodeList)
    {
        $this->stateCodeList[] = $stateCodeList;

        return $this;
    }

    /**
     * isset stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state or
     * province. An ISO 3166-2 Sub-division/State Code may be used.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStateCodeList($index)
    {
        return isset($this->stateCodeList[$index]);
    }

    /**
     * unset stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state or
     * province. An ISO 3166-2 Sub-division/State Code may be used.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStateCodeList($index)
    {
        unset($this->stateCodeList[$index]);
    }

    /**
     * Gets as stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state or
     * province. An ISO 3166-2 Sub-division/State Code may be used.
     *
     * @return string[]
     */
    public function getStateCodeList()
    {
        return $this->stateCodeList;
    }

    /**
     * Sets a new stateCodeList
     *
     * One or more postal service standard codes or abbreviations for the state or
     * province. An ISO 3166-2 Sub-division/State Code may be used.
     *
     * @param string $stateCodeList
     * @return self
     */
    public function setStateCodeList(array $stateCodeList)
    {
        $this->stateCodeList = $stateCodeList;

        return $this;
    }

    /**
     * Gets as preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @return string
     */
    public function getPreferLevel()
    {
        return $this->preferLevel;
    }

    /**
     * Sets a new preferLevel
     *
     * Used to indicate a level of preference for an associated item.
     *
     * @param string $preferLevel
     * @return self
     */
    public function setPreferLevel($preferLevel)
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }


}

