<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing DynamicPkgAirSearchType
 *
 * A collection of air search criteria.
 * XSD Type: DynamicPkgAirSearchType
 */
class DynamicPkgAirSearchType extends DynamicPkgSearchType
{

    /**
     * The type of search.
     *
     * @property string $requestType
     */
    private $requestType = null;

    /**
     * The air itineraries to be priced.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     */
    private $airItinerary = null;

    /**
     * Information on the locations between which availability is to be checked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType[]
     * $originDestinationInformation
     */
    private $originDestinationInformation = null;

    /**
     * Information used to specify a flight for which availablity is to be checked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     * $specificFlightInfo
     */
    private $specificFlightInfo = null;

    /**
     * Air Availability Request preference information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences
     */
    private $travelPreferences = null;

    /**
     * Used to specify passenger and fare information for which availablity is to be
     * checked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType
     * $travelRefSummary
     */
    private $travelRefSummary = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as requestType
     *
     * The type of search.
     *
     * @return string
     */
    public function getRequestType()
    {
        return $this->requestType;
    }

    /**
     * Sets a new requestType
     *
     * The type of search.
     *
     * @param string $requestType
     * @return self
     */
    public function setRequestType($requestType)
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Gets as airItinerary
     *
     * The air itineraries to be priced.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirItineraryType
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Sets a new airItinerary
     *
     * The air itineraries to be priced.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary
     * @return self
     */
    public function setAirItinerary(\Davispeixoto\OpenTravelAlliance\AirItineraryType $airItinerary)
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Adds as originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType
     * $originDestinationInformation
     */
    public function addToOriginDestinationInformation(
        \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType $originDestinationInformation
    ) {
        $this->originDestinationInformation[] = $originDestinationInformation;

        return $this;
    }

    /**
     * isset originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOriginDestinationInformation($index)
    {
        return isset($this->originDestinationInformation[$index]);
    }

    /**
     * unset originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOriginDestinationInformation($index)
    {
        unset($this->originDestinationInformation[$index]);
    }

    /**
     * Gets as originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType[]
     */
    public function getOriginDestinationInformation()
    {
        return $this->originDestinationInformation;
    }

    /**
     * Sets a new originDestinationInformation
     *
     * Information on the locations between which availability is to be checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OriginDestinationInformationType[]
     * $originDestinationInformation
     * @return self
     */
    public function setOriginDestinationInformation(array $originDestinationInformation)
    {
        $this->originDestinationInformation = $originDestinationInformation;

        return $this;
    }

    /**
     * Gets as specificFlightInfo
     *
     * Information used to specify a flight for which availablity is to be checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     */
    public function getSpecificFlightInfo()
    {
        return $this->specificFlightInfo;
    }

    /**
     * Sets a new specificFlightInfo
     *
     * Information used to specify a flight for which availablity is to be checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType
     * $specificFlightInfo
     * @return self
     */
    public function setSpecificFlightInfo(\Davispeixoto\OpenTravelAlliance\SpecificFlightInfoType $specificFlightInfo)
    {
        $this->specificFlightInfo = $specificFlightInfo;

        return $this;
    }

    /**
     * Gets as travelPreferences
     *
     * Air Availability Request preference information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType
     */
    public function getTravelPreferences()
    {
        return $this->travelPreferences;
    }

    /**
     * Sets a new travelPreferences
     *
     * Air Availability Request preference information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences
     * @return self
     */
    public function setTravelPreferences(\Davispeixoto\OpenTravelAlliance\AirSearchPrefsType $travelPreferences)
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }

    /**
     * Gets as travelRefSummary
     *
     * Used to specify passenger and fare information for which availablity is to be
     * checked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType
     */
    public function getTravelRefSummary()
    {
        return $this->travelRefSummary;
    }

    /**
     * Sets a new travelRefSummary
     *
     * Used to specify passenger and fare information for which availablity is to be
     * checked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TravelRefSummaryType $travelRefSummary
     * @return self
     */
    public function setTravelRefSummary(\Davispeixoto\OpenTravelAlliance\TravelRefSummaryType $travelRefSummary)
    {
        $this->travelRefSummary = $travelRefSummary;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}

