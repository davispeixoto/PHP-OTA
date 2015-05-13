<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing SailingBaseType
 *
 * Defines base sailing information.
 * XSD Type: SailingBaseType
 */
class SailingBaseType
{

    /**
     * Different qualifiers of the sailing (e.g., groups exist on this sailing;
     * inclusive packages available; or no itinerary description available). Refer to
     * OpenTravel Code Table Sailing Description Code (SAI).
     *
     * @property string[] $listOfSailingDescriptionCode
     */
    private $listOfSailingDescriptionCode = null;

    /**
     * Contains cruise line specific information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingBaseType\CruiseLineAType
     * $cruiseLine
     */
    private $cruiseLine = null;

    /**
     * Contains region specific information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingBaseType\RegionAType $region
     */
    private $region = null;

    /**
     * Contains cruise departure port information. Departure port defines the start
     * place of the cruise sailing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingBaseType\DeparturePortAType
     * $departurePort
     */
    private $departurePort = null;

    /**
     * Contains cruise arrival port information. Arrival port defines the end place of
     * the cruise sailing.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingBaseType\ArrivalPortAType
     * $arrivalPort
     */
    private $arrivalPort = null;

    /**
     * Adds as listOfSailingDescriptionCode
     *
     * Different qualifiers of the sailing (e.g., groups exist on this sailing;
     * inclusive packages available; or no itinerary description available). Refer to
     * OpenTravel Code Table Sailing Description Code (SAI).
     *
     * @return self
     * @param string $listOfSailingDescriptionCode
     */
    public function addToListOfSailingDescriptionCode($listOfSailingDescriptionCode)
    {
        $this->listOfSailingDescriptionCode[] = $listOfSailingDescriptionCode;

        return $this;
    }

    /**
     * isset listOfSailingDescriptionCode
     *
     * Different qualifiers of the sailing (e.g., groups exist on this sailing;
     * inclusive packages available; or no itinerary description available). Refer to
     * OpenTravel Code Table Sailing Description Code (SAI).
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListOfSailingDescriptionCode($index)
    {
        return isset($this->listOfSailingDescriptionCode[$index]);
    }

    /**
     * unset listOfSailingDescriptionCode
     *
     * Different qualifiers of the sailing (e.g., groups exist on this sailing;
     * inclusive packages available; or no itinerary description available). Refer to
     * OpenTravel Code Table Sailing Description Code (SAI).
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListOfSailingDescriptionCode($index)
    {
        unset($this->listOfSailingDescriptionCode[$index]);
    }

    /**
     * Gets as listOfSailingDescriptionCode
     *
     * Different qualifiers of the sailing (e.g., groups exist on this sailing;
     * inclusive packages available; or no itinerary description available). Refer to
     * OpenTravel Code Table Sailing Description Code (SAI).
     *
     * @return string[]
     */
    public function getListOfSailingDescriptionCode()
    {
        return $this->listOfSailingDescriptionCode;
    }

    /**
     * Sets a new listOfSailingDescriptionCode
     *
     * Different qualifiers of the sailing (e.g., groups exist on this sailing;
     * inclusive packages available; or no itinerary description available). Refer to
     * OpenTravel Code Table Sailing Description Code (SAI).
     *
     * @param string $listOfSailingDescriptionCode
     * @return self
     */
    public function setListOfSailingDescriptionCode(array $listOfSailingDescriptionCode)
    {
        $this->listOfSailingDescriptionCode = $listOfSailingDescriptionCode;

        return $this;
    }

    /**
     * Gets as cruiseLine
     *
     * Contains cruise line specific information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingBaseType\CruiseLineAType
     */
    public function getCruiseLine()
    {
        return $this->cruiseLine;
    }

    /**
     * Sets a new cruiseLine
     *
     * Contains cruise line specific information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingBaseType\CruiseLineAType
     * $cruiseLine
     * @return self
     */
    public function setCruiseLine(\Davispeixoto\OpenTravelAlliance\SailingBaseType\CruiseLineAType $cruiseLine)
    {
        $this->cruiseLine = $cruiseLine;

        return $this;
    }

    /**
     * Gets as region
     *
     * Contains region specific information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingBaseType\RegionAType
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * Contains region specific information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingBaseType\RegionAType $region
     * @return self
     */
    public function setRegion(\Davispeixoto\OpenTravelAlliance\SailingBaseType\RegionAType $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Gets as departurePort
     *
     * Contains cruise departure port information. Departure port defines the start
     * place of the cruise sailing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingBaseType\DeparturePortAType
     */
    public function getDeparturePort()
    {
        return $this->departurePort;
    }

    /**
     * Sets a new departurePort
     *
     * Contains cruise departure port information. Departure port defines the start
     * place of the cruise sailing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingBaseType\DeparturePortAType
     * $departurePort
     * @return self
     */
    public function setDeparturePort(\Davispeixoto\OpenTravelAlliance\SailingBaseType\DeparturePortAType $departurePort)
    {
        $this->departurePort = $departurePort;

        return $this;
    }

    /**
     * Gets as arrivalPort
     *
     * Contains cruise arrival port information. Arrival port defines the end place of
     * the cruise sailing.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingBaseType\ArrivalPortAType
     */
    public function getArrivalPort()
    {
        return $this->arrivalPort;
    }

    /**
     * Sets a new arrivalPort
     *
     * Contains cruise arrival port information. Arrival port defines the end place of
     * the cruise sailing.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingBaseType\ArrivalPortAType
     * $arrivalPort
     * @return self
     */
    public function setArrivalPort(\Davispeixoto\OpenTravelAlliance\SailingBaseType\ArrivalPortAType $arrivalPort)
    {
        $this->arrivalPort = $arrivalPort;

        return $this;
    }


}

