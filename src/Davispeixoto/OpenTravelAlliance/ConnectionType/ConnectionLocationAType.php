<?php

namespace Davispeixoto\OpenTravelAlliance\ConnectionType;

use Davispeixoto\OpenTravelAlliance\LocationType;

/**
 * Class representing ConnectionLocationAType
 */
class ConnectionLocationAType extends LocationType
{

    /**
     * When true, indicates the location is acceptable for a connection. When false the
     * location should not be included for a connection.
     *  true
     *
     * @property boolean $inclusive
     */
    private $inclusive = null;

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Number of minutes between connections.
     *
     * @property integer $minChangeTime
     */
    private $minChangeTime = null;

    /**
     * Specifies whether a connection is for a stopover or a change of flights.
     *
     * @property string $connectionInfo
     */
    private $connectionInfo = null;

    /**
     * If true, other airports within this city may be considered (e.g., EWR, JFK when
     * origin location is LGA.)
     *
     * @property boolean $multiAirportCityInd
     */
    private $multiAirportCityInd = null;

    /**
     * The type of connection desired, Online, Offline, Interline. Online refers to
     * host airline connections. Offline refers to non-host airline connections.
     * Interline refers to a combination of host airline and non-host airline
     * connections.
     *
     * @property string $connectType
     */
    private $connectType = null;

    /**
     * Gets as inclusive
     *
     * When true, indicates the location is acceptable for a connection. When false the
     * location should not be included for a connection.
     *  true
     *
     * @return boolean
     */
    public function getInclusive()
    {
        return $this->inclusive;
    }

    /**
     * Sets a new inclusive
     *
     * When true, indicates the location is acceptable for a connection. When false the
     * location should not be included for a connection.
     *  true
     *
     * @param boolean $inclusive
     * @return self
     */
    public function setInclusive($inclusive)
    {
        $this->inclusive = $inclusive;

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
     * Gets as minChangeTime
     *
     * Number of minutes between connections.
     *
     * @return integer
     */
    public function getMinChangeTime()
    {
        return $this->minChangeTime;
    }

    /**
     * Sets a new minChangeTime
     *
     * Number of minutes between connections.
     *
     * @param integer $minChangeTime
     * @return self
     */
    public function setMinChangeTime($minChangeTime)
    {
        $this->minChangeTime = $minChangeTime;

        return $this;
    }

    /**
     * Gets as connectionInfo
     *
     * Specifies whether a connection is for a stopover or a change of flights.
     *
     * @return string
     */
    public function getConnectionInfo()
    {
        return $this->connectionInfo;
    }

    /**
     * Sets a new connectionInfo
     *
     * Specifies whether a connection is for a stopover or a change of flights.
     *
     * @param string $connectionInfo
     * @return self
     */
    public function setConnectionInfo($connectionInfo)
    {
        $this->connectionInfo = $connectionInfo;

        return $this;
    }

    /**
     * Gets as multiAirportCityInd
     *
     * If true, other airports within this city may be considered (e.g., EWR, JFK when
     * origin location is LGA.)
     *
     * @return boolean
     */
    public function getMultiAirportCityInd()
    {
        return $this->multiAirportCityInd;
    }

    /**
     * Sets a new multiAirportCityInd
     *
     * If true, other airports within this city may be considered (e.g., EWR, JFK when
     * origin location is LGA.)
     *
     * @param boolean $multiAirportCityInd
     * @return self
     */
    public function setMultiAirportCityInd($multiAirportCityInd)
    {
        $this->multiAirportCityInd = $multiAirportCityInd;

        return $this;
    }

    /**
     * Gets as connectType
     *
     * The type of connection desired, Online, Offline, Interline. Online refers to
     * host airline connections. Offline refers to non-host airline connections.
     * Interline refers to a combination of host airline and non-host airline
     * connections.
     *
     * @return string
     */
    public function getConnectType()
    {
        return $this->connectType;
    }

    /**
     * Sets a new connectType
     *
     * The type of connection desired, Online, Offline, Interline. Online refers to
     * host airline connections. Offline refers to non-host airline connections.
     * Interline refers to a combination of host airline and non-host airline
     * connections.
     *
     * @param string $connectType
     * @return self
     */
    public function setConnectType($connectType)
    {
        $this->connectType = $connectType;

        return $this;
    }


}

