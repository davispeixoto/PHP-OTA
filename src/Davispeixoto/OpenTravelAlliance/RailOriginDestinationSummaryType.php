<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing RailOriginDestinationSummaryType
 *
 * Defines rail journey origin and destination location, and time information for
 * the request. Also includes the ability to specify a connection location for the
 * search.
 * XSD Type: RailOriginDestinationSummaryType
 */
class RailOriginDestinationSummaryType extends TravelDateTimeType
{

    /**
     * Travel Origin Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\OriginLocationAType
     * $originLocation
     */
    private $originLocation = null;

    /**
     * Travel Destination Location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\DestinationLocationAType
     * $destinationLocation
     */
    private $destinationLocation = null;

    /**
     * Travel Connection location and other information.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\ConnectionLocationAType[]
     * $connectionLocation
     */
    private $connectionLocation = null;

    /**
     * Operator, transport, amenity and accommodation preferences.
     *
     * @property \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType $preferences
     */
    private $preferences = null;

    /**
     * Gets as originLocation
     *
     * Travel Origin Location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\OriginLocationAType
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
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\OriginLocationAType
     * $originLocation
     * @return self
     */
    public function setOriginLocation(
        \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\OriginLocationAType $originLocation
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
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\DestinationLocationAType
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
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\DestinationLocationAType
     * $destinationLocation
     * @return self
     */
    public function setDestinationLocation(
        \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\DestinationLocationAType $destinationLocation
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
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\ConnectionLocationAType
     * $connectionLocation
     */
    public function addToConnectionLocation(
        \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\ConnectionLocationAType $connectionLocation
    ) {
        $this->connectionLocation[] = $connectionLocation;

        return $this;
    }

    /**
     * isset connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetConnectionLocation($index)
    {
        return isset($this->connectionLocation[$index]);
    }

    /**
     * unset connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetConnectionLocation($index)
    {
        unset($this->connectionLocation[$index]);
    }

    /**
     * Gets as connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\ConnectionLocationAType[]
     */
    public function getConnectionLocation()
    {
        return $this->connectionLocation;
    }

    /**
     * Sets a new connectionLocation
     *
     * Travel Connection location and other information.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\RailOriginDestinationSummaryType\ConnectionLocationAType[]
     * $connectionLocation
     * @return self
     */
    public function setConnectionLocation(array $connectionLocation)
    {
        $this->connectionLocation = $connectionLocation;

        return $this;
    }

    /**
     * Gets as preferences
     *
     * Operator, transport, amenity and accommodation preferences.
     *
     * @return \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType
     */
    public function getPreferences()
    {
        return $this->preferences;
    }

    /**
     * Sets a new preferences
     *
     * Operator, transport, amenity and accommodation preferences.
     *
     * @param \Davispeixoto\OpenTravelAlliance\RailAvailPrefsType $preferences
     * @return self
     */
    public function setPreferences(\Davispeixoto\OpenTravelAlliance\RailAvailPrefsType $preferences)
    {
        $this->preferences = $preferences;

        return $this;
    }


}

