<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationAdditionalDetailsType
 *
 * The VehicleLocationAdditionalDetailsType complex type defines the supplemental
 * information that describes a vehicle rental facility. Such information may
 * include the operation schedules and services offered.
 * XSD Type: VehicleLocationAdditionalDetailsType
 */
class VehicleLocationAdditionalDetailsType
{

    /**
     * Descriptive information allowing the vendor to present informational messages
     * about the rental location. These may include after-hour return of vehicle
     * messages, messages providing directions to the location, or other similar
     * messages.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType[]
     * $vehRentLocInfos
     */
    private $vehRentLocInfos = null;

    /**
     * Descriptive information about where the vehicles are parked.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType
     * $parkLocation
     */
    private $parkLocation = null;

    /**
     * Descriptive information about where the rental counter is located.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType
     * $counterLocation
     */
    private $counterLocation = null;

    /**
     * A collection of operation schedules, used to define the hours of operation for
     * this rental facility.
     *
     * @property \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     */
    private $operationSchedules = null;

    /**
     * Information on the shuttle services associated with this location. Some
     * locations use a shuttle bus to transfer the customers from an airport terminal
     * to the rental facility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType
     * $shuttle
     */
    private $shuttle = null;

    /**
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     * $oneWayDropLocations
     */
    private $oneWayDropLocations = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as vehRentLocInfo
     *
     * Descriptive information allowing the vendor to present informational messages
     * about the rental location. These may include after-hour return of vehicle
     * messages, messages providing directions to the location, or other similar
     * messages.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType
     * $vehRentLocInfo
     */
    public function addToVehRentLocInfos(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType $vehRentLocInfo
    ) {
        $this->vehRentLocInfos[] = $vehRentLocInfo;

        return $this;
    }

    /**
     * isset vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages
     * about the rental location. These may include after-hour return of vehicle
     * messages, messages providing directions to the location, or other similar
     * messages.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehRentLocInfos($index)
    {
        return isset($this->vehRentLocInfos[$index]);
    }

    /**
     * unset vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages
     * about the rental location. These may include after-hour return of vehicle
     * messages, messages providing directions to the location, or other similar
     * messages.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehRentLocInfos($index)
    {
        unset($this->vehRentLocInfos[$index]);
    }

    /**
     * Gets as vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages
     * about the rental location. These may include after-hour return of vehicle
     * messages, messages providing directions to the location, or other similar
     * messages.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType[]
     */
    public function getVehRentLocInfos()
    {
        return $this->vehRentLocInfos;
    }

    /**
     * Sets a new vehRentLocInfos
     *
     * Descriptive information allowing the vendor to present informational messages
     * about the rental location. These may include after-hour return of vehicle
     * messages, messages providing directions to the location, or other similar
     * messages.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleLocationInformationType[]
     * $vehRentLocInfos
     * @return self
     */
    public function setVehRentLocInfos(array $vehRentLocInfos)
    {
        $this->vehRentLocInfos = $vehRentLocInfos;

        return $this;
    }

    /**
     * Gets as parkLocation
     *
     * Descriptive information about where the vehicles are parked.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType
     */
    public function getParkLocation()
    {
        return $this->parkLocation;
    }

    /**
     * Sets a new parkLocation
     *
     * Descriptive information about where the vehicles are parked.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType $parkLocation
     * @return self
     */
    public function setParkLocation(\Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType $parkLocation)
    {
        $this->parkLocation = $parkLocation;

        return $this;
    }

    /**
     * Gets as counterLocation
     *
     * Descriptive information about where the rental counter is located.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType
     */
    public function getCounterLocation()
    {
        return $this->counterLocation;
    }

    /**
     * Sets a new counterLocation
     *
     * Descriptive information about where the rental counter is located.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType
     * $counterLocation
     * @return self
     */
    public function setCounterLocation(\Davispeixoto\OpenTravelAlliance\VehicleWhereAtFacilityType $counterLocation)
    {
        $this->counterLocation = $counterLocation;

        return $this;
    }

    /**
     * Gets as operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for
     * this rental facility.
     *
     * @return \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     */
    public function getOperationSchedules()
    {
        return $this->operationSchedules;
    }

    /**
     * Sets a new operationSchedules
     *
     * A collection of operation schedules, used to define the hours of operation for
     * this rental facility.
     *
     * @param \Davispeixoto\OpenTravelAlliance\OperationSchedulesType
     * $operationSchedules
     * @return self
     */
    public function setOperationSchedules(\Davispeixoto\OpenTravelAlliance\OperationSchedulesType $operationSchedules)
    {
        $this->operationSchedules = $operationSchedules;

        return $this;
    }

    /**
     * Gets as shuttle
     *
     * Information on the shuttle services associated with this location. Some
     * locations use a shuttle bus to transfer the customers from an airport terminal
     * to the rental facility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType
     */
    public function getShuttle()
    {
        return $this->shuttle;
    }

    /**
     * Sets a new shuttle
     *
     * Information on the shuttle services associated with this location. Some
     * locations use a shuttle bus to transfer the customers from an airport terminal
     * to the rental facility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType
     * $shuttle
     * @return self
     */
    public function setShuttle(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\ShuttleAType $shuttle
    ) {
        $this->shuttle = $shuttle;

        return $this;
    }

    /**
     * Adds as oneWayDropLocation
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType
     * $oneWayDropLocation
     */
    public function addToOneWayDropLocations(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType $oneWayDropLocation
    ) {
        $this->oneWayDropLocations[] = $oneWayDropLocation;

        return $this;
    }

    /**
     * isset oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOneWayDropLocations($index)
    {
        return isset($this->oneWayDropLocations[$index]);
    }

    /**
     * unset oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOneWayDropLocations($index)
    {
        unset($this->oneWayDropLocations[$index]);
    }

    /**
     * Gets as oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     */
    public function getOneWayDropLocations()
    {
        return $this->oneWayDropLocations;
    }

    /**
     * Sets a new oneWayDropLocations
     *
     * List of locations where one way drops are allowed based on pick-up location.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationAdditionalDetailsType\OneWayDropLocationsAType\OneWayDropLocationAType[]
     * $oneWayDropLocations
     * @return self
     */
    public function setOneWayDropLocations(array $oneWayDropLocations)
    {
        $this->oneWayDropLocations = $oneWayDropLocations;

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

