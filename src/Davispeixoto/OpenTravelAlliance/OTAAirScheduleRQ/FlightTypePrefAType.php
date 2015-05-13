<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirScheduleRQ;

/**
 * Class representing FlightTypePrefAType
 */
class FlightTypePrefAType
{

    /**
     * Used to indicate a level of preference for an associated item.
     *
     * @property string $preferLevel
     */
    private $preferLevel = null;

    /**
     * Indicates type of stops preferred (Nonstop, Direct, Connection).
     *
     * @property string $flightType
     */
    private $flightType = null;

    /**
     * Indicates that if connection is chosen, then this attribute defines the maximum
     * number of connections preferred.
     *
     * @property integer $maxConnections
     */
    private $maxConnections = null;

    /**
     * To specify which types of non-scheduled air service should be included.
     *
     * @property string $nonScheduledFltInfo
     */
    private $nonScheduledFltInfo = null;

    /**
     * If true, include connections where one of the enroute stops is the same as the
     * initial board point or the final off point of the flight.
     *
     * @property boolean $backhaulIndicator
     */
    private $backhaulIndicator = null;

    /**
     * If true, include flights that include at least one leg that is ground
     * transportation.
     *
     * @property boolean $groundTransportIndicator
     */
    private $groundTransportIndicator = null;

    /**
     * If true, direct and non-stop flights are requested.
     *
     * @property boolean $directAndNonStopOnlyInd
     */
    private $directAndNonStopOnlyInd = null;

    /**
     * If true, only non-stop flights are requested.
     *
     * @property boolean $nonStopsOnlyInd
     */
    private $nonStopsOnlyInd = null;

    /**
     * If true, only online connection flights are requested (i.e., same marketing
     * airline).
     *
     * @property boolean $onlineConnectionsOnlyInd
     */
    private $onlineConnectionsOnlyInd = null;

    /**
     * Specifies the travel routing preference.
     *
     * @property string $routingType
     */
    private $routingType = null;

    /**
     * When true, exclude connections that include travel by train for one of the legs.
     *
     * @property boolean $excludeTrainInd
     */
    private $excludeTrainInd = null;

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
     * Gets as flightType
     *
     * Indicates type of stops preferred (Nonstop, Direct, Connection).
     *
     * @return string
     */
    public function getFlightType()
    {
        return $this->flightType;
    }

    /**
     * Sets a new flightType
     *
     * Indicates type of stops preferred (Nonstop, Direct, Connection).
     *
     * @param string $flightType
     * @return self
     */
    public function setFlightType($flightType)
    {
        $this->flightType = $flightType;

        return $this;
    }

    /**
     * Gets as maxConnections
     *
     * Indicates that if connection is chosen, then this attribute defines the maximum
     * number of connections preferred.
     *
     * @return integer
     */
    public function getMaxConnections()
    {
        return $this->maxConnections;
    }

    /**
     * Sets a new maxConnections
     *
     * Indicates that if connection is chosen, then this attribute defines the maximum
     * number of connections preferred.
     *
     * @param integer $maxConnections
     * @return self
     */
    public function setMaxConnections($maxConnections)
    {
        $this->maxConnections = $maxConnections;

        return $this;
    }

    /**
     * Gets as nonScheduledFltInfo
     *
     * To specify which types of non-scheduled air service should be included.
     *
     * @return string
     */
    public function getNonScheduledFltInfo()
    {
        return $this->nonScheduledFltInfo;
    }

    /**
     * Sets a new nonScheduledFltInfo
     *
     * To specify which types of non-scheduled air service should be included.
     *
     * @param string $nonScheduledFltInfo
     * @return self
     */
    public function setNonScheduledFltInfo($nonScheduledFltInfo)
    {
        $this->nonScheduledFltInfo = $nonScheduledFltInfo;

        return $this;
    }

    /**
     * Gets as backhaulIndicator
     *
     * If true, include connections where one of the enroute stops is the same as the
     * initial board point or the final off point of the flight.
     *
     * @return boolean
     */
    public function getBackhaulIndicator()
    {
        return $this->backhaulIndicator;
    }

    /**
     * Sets a new backhaulIndicator
     *
     * If true, include connections where one of the enroute stops is the same as the
     * initial board point or the final off point of the flight.
     *
     * @param boolean $backhaulIndicator
     * @return self
     */
    public function setBackhaulIndicator($backhaulIndicator)
    {
        $this->backhaulIndicator = $backhaulIndicator;

        return $this;
    }

    /**
     * Gets as groundTransportIndicator
     *
     * If true, include flights that include at least one leg that is ground
     * transportation.
     *
     * @return boolean
     */
    public function getGroundTransportIndicator()
    {
        return $this->groundTransportIndicator;
    }

    /**
     * Sets a new groundTransportIndicator
     *
     * If true, include flights that include at least one leg that is ground
     * transportation.
     *
     * @param boolean $groundTransportIndicator
     * @return self
     */
    public function setGroundTransportIndicator($groundTransportIndicator)
    {
        $this->groundTransportIndicator = $groundTransportIndicator;

        return $this;
    }

    /**
     * Gets as directAndNonStopOnlyInd
     *
     * If true, direct and non-stop flights are requested.
     *
     * @return boolean
     */
    public function getDirectAndNonStopOnlyInd()
    {
        return $this->directAndNonStopOnlyInd;
    }

    /**
     * Sets a new directAndNonStopOnlyInd
     *
     * If true, direct and non-stop flights are requested.
     *
     * @param boolean $directAndNonStopOnlyInd
     * @return self
     */
    public function setDirectAndNonStopOnlyInd($directAndNonStopOnlyInd)
    {
        $this->directAndNonStopOnlyInd = $directAndNonStopOnlyInd;

        return $this;
    }

    /**
     * Gets as nonStopsOnlyInd
     *
     * If true, only non-stop flights are requested.
     *
     * @return boolean
     */
    public function getNonStopsOnlyInd()
    {
        return $this->nonStopsOnlyInd;
    }

    /**
     * Sets a new nonStopsOnlyInd
     *
     * If true, only non-stop flights are requested.
     *
     * @param boolean $nonStopsOnlyInd
     * @return self
     */
    public function setNonStopsOnlyInd($nonStopsOnlyInd)
    {
        $this->nonStopsOnlyInd = $nonStopsOnlyInd;

        return $this;
    }

    /**
     * Gets as onlineConnectionsOnlyInd
     *
     * If true, only online connection flights are requested (i.e., same marketing
     * airline).
     *
     * @return boolean
     */
    public function getOnlineConnectionsOnlyInd()
    {
        return $this->onlineConnectionsOnlyInd;
    }

    /**
     * Sets a new onlineConnectionsOnlyInd
     *
     * If true, only online connection flights are requested (i.e., same marketing
     * airline).
     *
     * @param boolean $onlineConnectionsOnlyInd
     * @return self
     */
    public function setOnlineConnectionsOnlyInd($onlineConnectionsOnlyInd)
    {
        $this->onlineConnectionsOnlyInd = $onlineConnectionsOnlyInd;

        return $this;
    }

    /**
     * Gets as routingType
     *
     * Specifies the travel routing preference.
     *
     * @return string
     */
    public function getRoutingType()
    {
        return $this->routingType;
    }

    /**
     * Sets a new routingType
     *
     * Specifies the travel routing preference.
     *
     * @param string $routingType
     * @return self
     */
    public function setRoutingType($routingType)
    {
        $this->routingType = $routingType;

        return $this;
    }

    /**
     * Gets as excludeTrainInd
     *
     * When true, exclude connections that include travel by train for one of the legs.
     *
     * @return boolean
     */
    public function getExcludeTrainInd()
    {
        return $this->excludeTrainInd;
    }

    /**
     * Sets a new excludeTrainInd
     *
     * When true, exclude connections that include travel by train for one of the legs.
     *
     * @param boolean $excludeTrainInd
     * @return self
     */
    public function setExcludeTrainInd($excludeTrainInd)
    {
        $this->excludeTrainInd = $excludeTrainInd;

        return $this;
    }


}

