<?php

namespace Davispeixoto\OpenTravelAlliance\AreasType;

/**
 * Class representing AreaAType
 */
class AreaAType
{

    /**
     * An identifier of an area as defined by a reservation system.
     *
     * @property string $areaID
     */
    private $areaID = null;

    /**
     * The IATA city code; for example DCA, ORD.
     *
     * @property string $cityCode
     */
    private $cityCode = null;

    /**
     * The standard code or abbreviation for the state, province, or region.
     *
     * @property string $stateProvCode
     */
    private $stateProvCode = null;

    /**
     * The country in which the area is located.
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Area description.
     *
     * @property \Davispeixoto\OpenTravelAlliance\ParagraphType $areaDescription
     */
    private $areaDescription = null;

    /**
     * Gets as areaID
     *
     * An identifier of an area as defined by a reservation system.
     *
     * @return string
     */
    public function getAreaID()
    {
        return $this->areaID;
    }

    /**
     * Sets a new areaID
     *
     * An identifier of an area as defined by a reservation system.
     *
     * @param string $areaID
     * @return self
     */
    public function setAreaID($areaID)
    {
        $this->areaID = $areaID;

        return $this;
    }

    /**
     * Gets as cityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @return string
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * Sets a new cityCode
     *
     * The IATA city code; for example DCA, ORD.
     *
     * @param string $cityCode
     * @return self
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * Gets as stateProvCode
     *
     * The standard code or abbreviation for the state, province, or region.
     *
     * @return string
     */
    public function getStateProvCode()
    {
        return $this->stateProvCode;
    }

    /**
     * Sets a new stateProvCode
     *
     * The standard code or abbreviation for the state, province, or region.
     *
     * @param string $stateProvCode
     * @return self
     */
    public function setStateProvCode($stateProvCode)
    {
        $this->stateProvCode = $stateProvCode;

        return $this;
    }

    /**
     * Gets as countryCode
     *
     * The country in which the area is located.
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * The country in which the area is located.
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * Gets as areaDescription
     *
     * Area description.
     *
     * @return \Davispeixoto\OpenTravelAlliance\ParagraphType
     */
    public function getAreaDescription()
    {
        return $this->areaDescription;
    }

    /**
     * Sets a new areaDescription
     *
     * Area description.
     *
     * @param \Davispeixoto\OpenTravelAlliance\ParagraphType $areaDescription
     * @return self
     */
    public function setAreaDescription(\Davispeixoto\OpenTravelAlliance\ParagraphType $areaDescription)
    {
        $this->areaDescription = $areaDescription;

        return $this;
    }


}

