<?php

namespace Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType;

/**
 * Class representing RestrictionAType
 */
class RestrictionAType
{

    /**
     * Allows fare contract to include or exclude date ranges.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DateRestrictionAType[]
     * $dateRestriction
     */
    private $dateRestriction = null;

    /**
     * Allows Fare Contract to be restricted to certain days of the week for outbound,
     * return or all journey directions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DaysOfWeekRestrictionAType[]
     * $daysOfWeekRestriction
     */
    private $daysOfWeekRestriction = null;

    /**
     * Container for time of day restrictions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType[]
     * $timeRestrictions
     */
    private $timeRestrictions = null;

    /**
     * Container for flight number restrictions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType[]
     * $flights
     */
    private $flights = null;

    /**
     * Include or exclude a flight number range.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightNumberRangeAType[]
     * $flightNumberRange
     */
    private $flightNumberRange = null;

    /**
     * Container for routing restrictions.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType[]
     * $connectionLocations
     */
    private $connectionLocations = null;

    /**
     * Restrict by Global Direction or Maximum Permitted Mileage.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\GlobalDirectionAType[]
     * $globalDirection
     */
    private $globalDirection = null;

    /**
     * Restrict sale dates for this contract.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\SaleDateRestrictionAType
     * $saleDateRestriction
     */
    private $saleDateRestriction = null;

    /**
     * Adds as dateRestriction
     *
     * Allows fare contract to include or exclude date ranges.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DateRestrictionAType
     * $dateRestriction
     */
    public function addToDateRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DateRestrictionAType $dateRestriction
    ) {
        $this->dateRestriction[] = $dateRestriction;

        return $this;
    }

    /**
     * isset dateRestriction
     *
     * Allows fare contract to include or exclude date ranges.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDateRestriction($index)
    {
        return isset($this->dateRestriction[$index]);
    }

    /**
     * unset dateRestriction
     *
     * Allows fare contract to include or exclude date ranges.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDateRestriction($index)
    {
        unset($this->dateRestriction[$index]);
    }

    /**
     * Gets as dateRestriction
     *
     * Allows fare contract to include or exclude date ranges.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DateRestrictionAType[]
     */
    public function getDateRestriction()
    {
        return $this->dateRestriction;
    }

    /**
     * Sets a new dateRestriction
     *
     * Allows fare contract to include or exclude date ranges.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DateRestrictionAType[]
     * $dateRestriction
     * @return self
     */
    public function setDateRestriction(array $dateRestriction)
    {
        $this->dateRestriction = $dateRestriction;

        return $this;
    }

    /**
     * Adds as daysOfWeekRestriction
     *
     * Allows Fare Contract to be restricted to certain days of the week for outbound,
     * return or all journey directions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DaysOfWeekRestrictionAType
     * $daysOfWeekRestriction
     */
    public function addToDaysOfWeekRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DaysOfWeekRestrictionAType $daysOfWeekRestriction
    ) {
        $this->daysOfWeekRestriction[] = $daysOfWeekRestriction;

        return $this;
    }

    /**
     * isset daysOfWeekRestriction
     *
     * Allows Fare Contract to be restricted to certain days of the week for outbound,
     * return or all journey directions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDaysOfWeekRestriction($index)
    {
        return isset($this->daysOfWeekRestriction[$index]);
    }

    /**
     * unset daysOfWeekRestriction
     *
     * Allows Fare Contract to be restricted to certain days of the week for outbound,
     * return or all journey directions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDaysOfWeekRestriction($index)
    {
        unset($this->daysOfWeekRestriction[$index]);
    }

    /**
     * Gets as daysOfWeekRestriction
     *
     * Allows Fare Contract to be restricted to certain days of the week for outbound,
     * return or all journey directions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DaysOfWeekRestrictionAType[]
     */
    public function getDaysOfWeekRestriction()
    {
        return $this->daysOfWeekRestriction;
    }

    /**
     * Sets a new daysOfWeekRestriction
     *
     * Allows Fare Contract to be restricted to certain days of the week for outbound,
     * return or all journey directions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\DaysOfWeekRestrictionAType[]
     * $daysOfWeekRestriction
     * @return self
     */
    public function setDaysOfWeekRestriction(array $daysOfWeekRestriction)
    {
        $this->daysOfWeekRestriction = $daysOfWeekRestriction;

        return $this;
    }

    /**
     * Adds as timeRestriction
     *
     * Container for time of day restrictions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType
     * $timeRestriction
     */
    public function addToTimeRestrictions(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType $timeRestriction
    ) {
        $this->timeRestrictions[] = $timeRestriction;

        return $this;
    }

    /**
     * isset timeRestrictions
     *
     * Container for time of day restrictions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTimeRestrictions($index)
    {
        return isset($this->timeRestrictions[$index]);
    }

    /**
     * unset timeRestrictions
     *
     * Container for time of day restrictions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTimeRestrictions($index)
    {
        unset($this->timeRestrictions[$index]);
    }

    /**
     * Gets as timeRestrictions
     *
     * Container for time of day restrictions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType[]
     */
    public function getTimeRestrictions()
    {
        return $this->timeRestrictions;
    }

    /**
     * Sets a new timeRestrictions
     *
     * Container for time of day restrictions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\TimeRestrictionsAType\TimeRestrictionAType[]
     * $timeRestrictions
     * @return self
     */
    public function setTimeRestrictions(array $timeRestrictions)
    {
        $this->timeRestrictions = $timeRestrictions;

        return $this;
    }

    /**
     * Adds as flight
     *
     * Container for flight number restrictions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType
     * $flight
     */
    public function addToFlights(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType $flight
    ) {
        $this->flights[] = $flight;

        return $this;
    }

    /**
     * isset flights
     *
     * Container for flight number restrictions.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlights($index)
    {
        return isset($this->flights[$index]);
    }

    /**
     * unset flights
     *
     * Container for flight number restrictions.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlights($index)
    {
        unset($this->flights[$index]);
    }

    /**
     * Gets as flights
     *
     * Container for flight number restrictions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType[]
     */
    public function getFlights()
    {
        return $this->flights;
    }

    /**
     * Sets a new flights
     *
     * Container for flight number restrictions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightsAType\FlightAType[]
     * $flights
     * @return self
     */
    public function setFlights(array $flights)
    {
        $this->flights = $flights;

        return $this;
    }

    /**
     * Adds as flightNumberRange
     *
     * Include or exclude a flight number range.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightNumberRangeAType
     * $flightNumberRange
     */
    public function addToFlightNumberRange(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightNumberRangeAType $flightNumberRange
    ) {
        $this->flightNumberRange[] = $flightNumberRange;

        return $this;
    }

    /**
     * isset flightNumberRange
     *
     * Include or exclude a flight number range.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFlightNumberRange($index)
    {
        return isset($this->flightNumberRange[$index]);
    }

    /**
     * unset flightNumberRange
     *
     * Include or exclude a flight number range.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFlightNumberRange($index)
    {
        unset($this->flightNumberRange[$index]);
    }

    /**
     * Gets as flightNumberRange
     *
     * Include or exclude a flight number range.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightNumberRangeAType[]
     */
    public function getFlightNumberRange()
    {
        return $this->flightNumberRange;
    }

    /**
     * Sets a new flightNumberRange
     *
     * Include or exclude a flight number range.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\FlightNumberRangeAType[]
     * $flightNumberRange
     * @return self
     */
    public function setFlightNumberRange(array $flightNumberRange)
    {
        $this->flightNumberRange = $flightNumberRange;

        return $this;
    }

    /**
     * Adds as connectionLocation
     *
     * Container for routing restrictions.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType
     * $connectionLocation
     */
    public function addToConnectionLocations(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType $connectionLocation
    ) {
        $this->connectionLocations[] = $connectionLocation;

        return $this;
    }

    /**
     * isset connectionLocations
     *
     * Container for routing restrictions.
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
     * Container for routing restrictions.
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
     * Container for routing restrictions.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType[]
     */
    public function getConnectionLocations()
    {
        return $this->connectionLocations;
    }

    /**
     * Sets a new connectionLocations
     *
     * Container for routing restrictions.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\ConnectionLocationsAType\ConnectionLocationAType[]
     * $connectionLocations
     * @return self
     */
    public function setConnectionLocations(array $connectionLocations)
    {
        $this->connectionLocations = $connectionLocations;

        return $this;
    }

    /**
     * Adds as globalDirection
     *
     * Restrict by Global Direction or Maximum Permitted Mileage.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\GlobalDirectionAType
     * $globalDirection
     */
    public function addToGlobalDirection(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\GlobalDirectionAType $globalDirection
    ) {
        $this->globalDirection[] = $globalDirection;

        return $this;
    }

    /**
     * isset globalDirection
     *
     * Restrict by Global Direction or Maximum Permitted Mileage.
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
     * Restrict by Global Direction or Maximum Permitted Mileage.
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
     * Restrict by Global Direction or Maximum Permitted Mileage.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\GlobalDirectionAType[]
     */
    public function getGlobalDirection()
    {
        return $this->globalDirection;
    }

    /**
     * Sets a new globalDirection
     *
     * Restrict by Global Direction or Maximum Permitted Mileage.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\GlobalDirectionAType[]
     * $globalDirection
     * @return self
     */
    public function setGlobalDirection(array $globalDirection)
    {
        $this->globalDirection = $globalDirection;

        return $this;
    }

    /**
     * Gets as saleDateRestriction
     *
     * Restrict sale dates for this contract.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\SaleDateRestrictionAType
     */
    public function getSaleDateRestriction()
    {
        return $this->saleDateRestriction;
    }

    /**
     * Sets a new saleDateRestriction
     *
     * Restrict sale dates for this contract.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\SaleDateRestrictionAType
     * $saleDateRestriction
     * @return self
     */
    public function setSaleDateRestriction(
        \Davispeixoto\OpenTravelAlliance\OTAAirFareDisplayRS\FareDisplayInfosAType\FareDisplayInfoAType\RestrictionsAType\RestrictionAType\SaleDateRestrictionAType $saleDateRestriction
    ) {
        $this->saleDateRestriction = $saleDateRestriction;

        return $this;
    }


}

