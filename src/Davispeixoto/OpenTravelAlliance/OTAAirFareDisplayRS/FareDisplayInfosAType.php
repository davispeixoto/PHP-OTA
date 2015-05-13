<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS;

/**
 * Class representing FareDisplayInfosAType
 */
class FareDisplayInfosAType
{

    /**
     * The system date or datetime when the fare load was initiated.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     * $systemFaresLoadDate
     */
    private $systemFaresLoadDate = null;

    /**
     * The fares load date converted to GMT.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $gMTFaresLoadDate
     */
    private $gMTFaresLoadDate = null;

    /**
     * The IATA origination area for all fares in the response.
     *
     * @property string $originationArea
     */
    private $originationArea = null;

    /**
     * The IATA destination area for all fares in the response.
     *
     * @property string $destinationArea
     */
    private $destinationArea = null;

    /**
     * The code specifying the monetary unit in which all the fares are displayed. Use
     * ISO 4217, three alpha code.
     *
     * @property string $currencyCode
     */
    private $currencyCode = null;

    /**
     * If true, at least some of the fares being displayed are joint fares.
     *
     * @property boolean $jointFareDisplayInd
     */
    private $jointFareDisplayInd = null;

    /**
     * The type of fares that were requested.
     *
     * @property string $fareAccess
     */
    private $fareAccess = null;

    /**
     * If true, at least some of the fares being displayed are money saver fares.
     *
     * @property boolean $moneySaverDisplayInd
     */
    private $moneySaverDisplayInd = null;

    /**
     * Used to provide the company common name.
     *
     * @property string $companyShortName
     */
    private $companyShortName = null;

    /**
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @property string $travelSector
     */
    private $travelSector = null;

    /**
     * Identifies a company by the company code.
     *
     * @property string $code
     */
    private $code = null;

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
     *
     * @property string $codeContext
     */
    private $codeContext = null;

    /**
     * The country location of the company headquarters.Example: us
     *
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * Standard fare information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType[]
     * $fareDisplayInfo
     */
    private $fareDisplayInfo = null;

    /**
     * Specifies the routing for all the fares.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType[]
     * $routing
     */
    private $routing = null;

    /**
     * The global direction and maximum permitted miles for the fares.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\GlobalDirectionAType[]
     * $globalDirection
     */
    private $globalDirection = null;

    /**
     * Gets as systemFaresLoadDate
     *
     * The system date or datetime when the fare load was initiated.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getSystemFaresLoadDate()
    {
        return $this->systemFaresLoadDate;
    }

    /**
     * Sets a new systemFaresLoadDate
     *
     * The system date or datetime when the fare load was initiated.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $systemFaresLoadDate
     * @return self
     */
    public function setSystemFaresLoadDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $systemFaresLoadDate)
    {
        $this->systemFaresLoadDate = $systemFaresLoadDate;

        return $this;
    }

    /**
     * Gets as gMTFaresLoadDate
     *
     * The fares load date converted to GMT.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType
     */
    public function getGMTFaresLoadDate()
    {
        return $this->gMTFaresLoadDate;
    }

    /**
     * Sets a new gMTFaresLoadDate
     *
     * The fares load date converted to GMT.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $gMTFaresLoadDate
     * @return self
     */
    public function setGMTFaresLoadDate(\Davispeixoto\OpenTravelAlliance\DateOrDateTimeType $gMTFaresLoadDate)
    {
        $this->gMTFaresLoadDate = $gMTFaresLoadDate;

        return $this;
    }

    /**
     * Gets as originationArea
     *
     * The IATA origination area for all fares in the response.
     *
     * @return string
     */
    public function getOriginationArea()
    {
        return $this->originationArea;
    }

    /**
     * Sets a new originationArea
     *
     * The IATA origination area for all fares in the response.
     *
     * @param string $originationArea
     * @return self
     */
    public function setOriginationArea($originationArea)
    {
        $this->originationArea = $originationArea;

        return $this;
    }

    /**
     * Gets as destinationArea
     *
     * The IATA destination area for all fares in the response.
     *
     * @return string
     */
    public function getDestinationArea()
    {
        return $this->destinationArea;
    }

    /**
     * Sets a new destinationArea
     *
     * The IATA destination area for all fares in the response.
     *
     * @param string $destinationArea
     * @return self
     */
    public function setDestinationArea($destinationArea)
    {
        $this->destinationArea = $destinationArea;

        return $this;
    }

    /**
     * Gets as currencyCode
     *
     * The code specifying the monetary unit in which all the fares are displayed. Use
     * ISO 4217, three alpha code.
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * The code specifying the monetary unit in which all the fares are displayed. Use
     * ISO 4217, three alpha code.
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Gets as jointFareDisplayInd
     *
     * If true, at least some of the fares being displayed are joint fares.
     *
     * @return boolean
     */
    public function getJointFareDisplayInd()
    {
        return $this->jointFareDisplayInd;
    }

    /**
     * Sets a new jointFareDisplayInd
     *
     * If true, at least some of the fares being displayed are joint fares.
     *
     * @param boolean $jointFareDisplayInd
     * @return self
     */
    public function setJointFareDisplayInd($jointFareDisplayInd)
    {
        $this->jointFareDisplayInd = $jointFareDisplayInd;

        return $this;
    }

    /**
     * Gets as fareAccess
     *
     * The type of fares that were requested.
     *
     * @return string
     */
    public function getFareAccess()
    {
        return $this->fareAccess;
    }

    /**
     * Sets a new fareAccess
     *
     * The type of fares that were requested.
     *
     * @param string $fareAccess
     * @return self
     */
    public function setFareAccess($fareAccess)
    {
        $this->fareAccess = $fareAccess;

        return $this;
    }

    /**
     * Gets as moneySaverDisplayInd
     *
     * If true, at least some of the fares being displayed are money saver fares.
     *
     * @return boolean
     */
    public function getMoneySaverDisplayInd()
    {
        return $this->moneySaverDisplayInd;
    }

    /**
     * Sets a new moneySaverDisplayInd
     *
     * If true, at least some of the fares being displayed are money saver fares.
     *
     * @param boolean $moneySaverDisplayInd
     * @return self
     */
    public function setMoneySaverDisplayInd($moneySaverDisplayInd)
    {
        $this->moneySaverDisplayInd = $moneySaverDisplayInd;

        return $this;
    }

    /**
     * Gets as companyShortName
     *
     * Used to provide the company common name.
     *
     * @return string
     */
    public function getCompanyShortName()
    {
        return $this->companyShortName;
    }

    /**
     * Sets a new companyShortName
     *
     * Used to provide the company common name.
     *
     * @param string $companyShortName
     * @return self
     */
    public function setCompanyShortName($companyShortName)
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Gets as travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector()
    {
        return $this->travelSector;
    }

    /**
     * Sets a new travelSector
     *
     * The travel sector the company is associated with, such as air, car and hotel.
     * Refer to OpenTravel Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     * @return self
     */
    public function setTravelSector($travelSector)
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * Gets as code
     *
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Sets a new code
     *
     * Identifies a company by the company code.
     *
     * @param string $code
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Gets as codeContext
     *
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
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
     * Identifies the context of the identifying code, such as DUNS, IATA or internal
     * code, etc.
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
     * Gets as countryCode
     *
     * The country location of the company headquarters.Example: us
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
     * The country location of the company headquarters.Example: us
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
     * Adds as fareDisplayInfo
     *
     * Standard fare information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType
     * $fareDisplayInfo
     */
    public function addToFareDisplayInfo(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType $fareDisplayInfo
    ) {
        $this->fareDisplayInfo[] = $fareDisplayInfo;

        return $this;
    }

    /**
     * isset fareDisplayInfo
     *
     * Standard fare information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFareDisplayInfo($index)
    {
        return isset($this->fareDisplayInfo[$index]);
    }

    /**
     * unset fareDisplayInfo
     *
     * Standard fare information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFareDisplayInfo($index)
    {
        unset($this->fareDisplayInfo[$index]);
    }

    /**
     * Gets as fareDisplayInfo
     *
     * Standard fare information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType[]
     */
    public function getFareDisplayInfo()
    {
        return $this->fareDisplayInfo;
    }

    /**
     * Sets a new fareDisplayInfo
     *
     * Standard fare information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType[]
     * $fareDisplayInfo
     * @return self
     */
    public function setFareDisplayInfo(array $fareDisplayInfo)
    {
        $this->fareDisplayInfo = $fareDisplayInfo;

        return $this;
    }

    /**
     * Adds as routing
     *
     * Specifies the routing for all the fares.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType
     * $routing
     */
    public function addToRouting(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType $routing
    ) {
        $this->routing[] = $routing;

        return $this;
    }

    /**
     * isset routing
     *
     * Specifies the routing for all the fares.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRouting($index)
    {
        return isset($this->routing[$index]);
    }

    /**
     * unset routing
     *
     * Specifies the routing for all the fares.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRouting($index)
    {
        unset($this->routing[$index]);
    }

    /**
     * Gets as routing
     *
     * Specifies the routing for all the fares.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType[]
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * Sets a new routing
     *
     * Specifies the routing for all the fares.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\RoutingAType[]
     * $routing
     * @return self
     */
    public function setRouting(array $routing)
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Adds as globalDirection
     *
     * The global direction and maximum permitted miles for the fares.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\GlobalDirectionAType
     * $globalDirection
     */
    public function addToGlobalDirection(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\GlobalDirectionAType $globalDirection
    ) {
        $this->globalDirection[] = $globalDirection;

        return $this;
    }

    /**
     * isset globalDirection
     *
     * The global direction and maximum permitted miles for the fares.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlobalDirection($index)
    {
        return isset($this->globalDirection[$index]);
    }

    /**
     * unset globalDirection
     *
     * The global direction and maximum permitted miles for the fares.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlobalDirection($index)
    {
        unset($this->globalDirection[$index]);
    }

    /**
     * Gets as globalDirection
     *
     * The global direction and maximum permitted miles for the fares.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\GlobalDirectionAType[]
     */
    public function getGlobalDirection()
    {
        return $this->globalDirection;
    }

    /**
     * Sets a new globalDirection
     *
     * The global direction and maximum permitted miles for the fares.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\GlobalDirectionAType[]
     * $globalDirection
     * @return self
     */
    public function setGlobalDirection(array $globalDirection)
    {
        $this->globalDirection = $globalDirection;

        return $this;
    }


}

