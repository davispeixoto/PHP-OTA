<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailOriginDestinationInformationType
 *
 * Defines rail journey origin and destination location, and time information for
 * the request. Also includes the ability to specify a connection location for the
 * search.
 * XSD Type: RailOriginDestinationInformationType
 */
class RailOriginDestinationInformationType extends TravelDateTimeType
{

    /**
     * Travel Origin Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\OriginLocationAType
     * $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\DestinationLocationAType
     * $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection location and other information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailConnectionType\ConnectionLocationAType[]
     * $connectionLocations
     */
    private $connectionLocations = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\OriginLocationAType
     */
    public function getOriginLocation()
    {
        return $this->originLocation;
    }

    /**
     * Sets a new originLocation
     *
     * Travel Origin Location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\OriginLocationAType
     * $originLocation
     * @return self
     */
    public function setOriginLocation(
        \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\OriginLocationAType $originLocation
    ) {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Gets as destinationLocation
     *
     * Travel Destination Location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\DestinationLocationAType
     */
    public function getDestinationLocation()
    {
        return $this->destinationLocation;
    }

    /**
     * Sets a new destinationLocation
     *
     * Travel Destination Location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\DestinationLocationAType
     * $destinationLocation
     * @return self
     */
    public function setDestinationLocation(
        \Davispeixoto\OpenTravelAlliance\RailOriginDestinationInformationType\DestinationLocationAType $destinationLocation
    ) {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Adds as connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailConnectionType\ConnectionLocationAType
     * $connectionLocation
     */
    public function addToConnectionLocations(
        \Davispeixoto\OpenTravelAlliance\RailConnectionType\ConnectionLocationAType $connectionLocation
    ) {
        $this->connectionLocations[] = $connectionLocation;

        return $this;
    }

    /**
     * isset connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConnectionLocations($index)
    {
        return isset($this->connectionLocations[$index]);
    }

    /**
     * unset connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConnectionLocations($index)
    {
        unset($this->connectionLocations[$index]);
    }

    /**
     * Gets as connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailConnectionType\ConnectionLocationAType[]
     */
    public function getConnectionLocations()
    {
        return $this->connectionLocations;
    }

    /**
     * Sets a new connectionLocations
     *
     * Travel Connection location and other information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailConnectionType\ConnectionLocationAType[]
     * $connectionLocations
     * @return self
     */
    public function setConnectionLocations(array $connectionLocations)
    {
        $this->connectionLocations = $connectionLocations;

        return $this;
    }


}

