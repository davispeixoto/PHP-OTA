<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing TripFeaturesType
 *
 * Information about the traveler(s) journey that is necessary for quoting/booking
 * the insurance.
 * XSD Type: TripFeaturesType
 */
class TripFeaturesType
{

    /**
     * Identifies the country of origin for the trip.
     *
     * @property \Davispeixoto\OpenTravelAlliance\TripFeaturesType\OriginAType $origin
     */
    private $origin = null;

    /**
     * Container for any number of destinations that the traveler(s) will reach during
     * their journey.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType[]
     * $destinations
     */
    private $destinations = null;

    /**
     * Container for any number of activities that traveler(s) will engage in while on
     * their journey.
     *
     * @property string[] $activities
     */
    private $activities = null;

    /**
     * Container for any number of companies or organizations operating the trips,
     * tours or cruises included in the traveler(s) journey.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $operators
     */
    private $operators = null;

    /**
     * Gets as origin
     *
     * Identifies the country of origin for the trip.
     *
     * @return \Davispeixoto\OpenTravelAlliance\TripFeaturesType\OriginAType
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Sets a new origin
     *
     * Identifies the country of origin for the trip.
     *
     * @param \Davispeixoto\OpenTravelAlliance\TripFeaturesType\OriginAType $origin
     * @return self
     */
    public function setOrigin(\Davispeixoto\OpenTravelAlliance\TripFeaturesType\OriginAType $origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Adds as destination
     *
     * Container for any number of destinations that the traveler(s) will reach during
     * their journey.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType
     * $destination
     */
    public function addToDestinations(
        \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType $destination
    ) {
        $this->destinations[] = $destination;

        return $this;
    }

    /**
     * isset destinations
     *
     * Container for any number of destinations that the traveler(s) will reach during
     * their journey.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDestinations($index)
    {
        return isset($this->destinations[$index]);
    }

    /**
     * unset destinations
     *
     * Container for any number of destinations that the traveler(s) will reach during
     * their journey.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDestinations($index)
    {
        unset($this->destinations[$index]);
    }

    /**
     * Gets as destinations
     *
     * Container for any number of destinations that the traveler(s) will reach during
     * their journey.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType[]
     */
    public function getDestinations()
    {
        return $this->destinations;
    }

    /**
     * Sets a new destinations
     *
     * Container for any number of destinations that the traveler(s) will reach during
     * their journey.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\TripFeaturesType\DestinationsAType\DestinationAType[]
     * $destinations
     * @return self
     */
    public function setDestinations(array $destinations)
    {
        $this->destinations = $destinations;

        return $this;
    }

    /**
     * Adds as activity
     *
     * Container for any number of activities that traveler(s) will engage in while on
     * their journey.
     *
     * @return self
     * @param string $activity
     */
    public function addToActivities($activity)
    {
        $this->activities[] = $activity;

        return $this;
    }

    /**
     * isset activities
     *
     * Container for any number of activities that traveler(s) will engage in while on
     * their journey.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivities($index)
    {
        return isset($this->activities[$index]);
    }

    /**
     * unset activities
     *
     * Container for any number of activities that traveler(s) will engage in while on
     * their journey.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivities($index)
    {
        unset($this->activities[$index]);
    }

    /**
     * Gets as activities
     *
     * Container for any number of activities that traveler(s) will engage in while on
     * their journey.
     *
     * @return string[]
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Sets a new activities
     *
     * Container for any number of activities that traveler(s) will engage in while on
     * their journey.
     *
     * @param string $activities
     * @return self
     */
    public function setActivities(array $activities)
    {
        $this->activities = $activities;

        return $this;
    }

    /**
     * Adds as operator
     *
     * Container for any number of companies or organizations operating the trips,
     * tours or cruises included in the traveler(s) journey.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $operator
     */
    public function addToOperators(\Davispeixoto\OpenTravelAlliance\CompanyNameType $operator)
    {
        $this->operators[] = $operator;

        return $this;
    }

    /**
     * isset operators
     *
     * Container for any number of companies or organizations operating the trips,
     * tours or cruises included in the traveler(s) journey.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOperators($index)
    {
        return isset($this->operators[$index]);
    }

    /**
     * unset operators
     *
     * Container for any number of companies or organizations operating the trips,
     * tours or cruises included in the traveler(s) journey.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOperators($index)
    {
        unset($this->operators[$index]);
    }

    /**
     * Gets as operators
     *
     * Container for any number of companies or organizations operating the trips,
     * tours or cruises included in the traveler(s) journey.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType[]
     */
    public function getOperators()
    {
        return $this->operators;
    }

    /**
     * Sets a new operators
     *
     * Container for any number of companies or organizations operating the trips,
     * tours or cruises included in the traveler(s) journey.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType[] $operators
     * @return self
     */
    public function setOperators(array $operators)
    {
        $this->operators = $operators;

        return $this;
    }


}

