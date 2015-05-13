<?php

namespace Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType;

/**
 * Class representing ConnectionLocationAType
 */
class ConnectionLocationAType
{

    /**
     * A code used to identify a location.
     *
     * @property string $locationCode
     */
    private $locationCode = null;

    /**
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * If true, multiple train stations within a specified city or location code may be
     * considered.
     *
     * @property boolean $multiCityStationInd
     */
    private $multiCityStationInd = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $operatorPref
     */
    private $operatorPref = null;

    /**
     * Gets as locationCode
     *
     * A code used to identify a location.
     *
     * @return string
     */
    public function getLocationCode()
    {
        return $this->locationCode;
    }

    /**
     * Sets a new locationCode
     *
     * A code used to identify a location.
     *
     * @param string $locationCode
     * @return self
     */
    public function setLocationCode($locationCode)
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @return string
     */
    public function getCodeContext()
    {
        return $this->codeContext;
    }

    /**
     * Sets a new codeContext
     *
     * Identifies the context of the identifying code (e.g., IATA, ARC, or internal
     * code).
     *  IATA
     *
     * @param string $codeContext
     * @return self
     */
    public function setCodeContext($codeContext)
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Gets as multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be
     * considered.
     *
     * @return boolean
     */
    public function getMultiCityStationInd()
    {
        return $this->multiCityStationInd;
    }

    /**
     * Sets a new multiCityStationInd
     *
     * If true, multiple train stations within a specified city or location code may be
     * considered.
     *
     * @param boolean $multiCityStationInd
     * @return self
     */
    public function setMultiCityStationInd($multiCityStationInd)
    {
        $this->multiCityStationInd = $multiCityStationInd;

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

    /**
     * Adds as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $operatorPref
     */
    public function addToOperatorPref(\Davispeixoto\OpenTravelAlliance\CompanyNamePrefType $operatorPref)
    {
        $this->operatorPref[] = $operatorPref;

        return $this;
    }

    /**
     * isset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperatorPref($index)
    {
        return isset($this->operatorPref[$index]);
    }

    /**
     * unset operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperatorPref($index)
    {
        unset($this->operatorPref[$index]);
    }

    /**
     * Gets as operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[]
     */
    public function getOperatorPref()
    {
        return $this->operatorPref;
    }

    /**
     * Sets a new operatorPref
     *
     * Describes any preferences in terms of the company operating the train service.
     * Preference may reflect inclusion or exclusion.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNamePrefType[] $operatorPref
     * @return self
     */
    public function setOperatorPref(array $operatorPref)
    {
        $this->operatorPref = $operatorPref;

        return $this;
    }


}

