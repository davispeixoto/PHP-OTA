<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleLocationServicesOfferedType
 *
 * The Vehicle Location Services Offered Type is used to define information on the
 * services offered at the rental location. Services can be either on-location or
 * off-location, and may include the rental of special equipment.
 * XSD Type: VehicleLocationServicesOfferedType
 */
class VehicleLocationServicesOfferedType
{

    /**
     * A collection of services offered at the rental facility, such as special member
     * services, fast-rental options, etc.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType[]
     * $onLocationServices
     */
    private $onLocationServices = null;

    /**
     * A collection of services offered away from the rental facility, such as vehicle
     * delivery and pickup, customer collecton and return.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType[]
     * $offLocationServices
     */
    private $offLocationServices = null;

    /**
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     * $specialEquipments
     */
    private $specialEquipments = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Adds as onLocationService
     *
     * A collection of services offered at the rental facility, such as special member
     * services, fast-rental options, etc.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType
     * $onLocationService
     */
    public function addToOnLocationServices(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType $onLocationService
    ) {
        $this->onLocationServices[] = $onLocationService;

        return $this;
    }

    /**
     * isset onLocationServices
     *
     * A collection of services offered at the rental facility, such as special member
     * services, fast-rental options, etc.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOnLocationServices($index)
    {
        return isset($this->onLocationServices[$index]);
    }

    /**
     * unset onLocationServices
     *
     * A collection of services offered at the rental facility, such as special member
     * services, fast-rental options, etc.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOnLocationServices($index)
    {
        unset($this->onLocationServices[$index]);
    }

    /**
     * Gets as onLocationServices
     *
     * A collection of services offered at the rental facility, such as special member
     * services, fast-rental options, etc.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType[]
     */
    public function getOnLocationServices()
    {
        return $this->onLocationServices;
    }

    /**
     * Sets a new onLocationServices
     *
     * A collection of services offered at the rental facility, such as special member
     * services, fast-rental options, etc.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OnLocationServicesAType\OnLocationServiceAType[]
     * $onLocationServices
     * @return self
     */
    public function setOnLocationServices(array $onLocationServices)
    {
        $this->onLocationServices = $onLocationServices;

        return $this;
    }

    /**
     * Adds as offLocationService
     *
     * A collection of services offered away from the rental facility, such as vehicle
     * delivery and pickup, customer collecton and return.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType
     * $offLocationService
     */
    public function addToOffLocationServices(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType $offLocationService
    ) {
        $this->offLocationServices[] = $offLocationService;

        return $this;
    }

    /**
     * isset offLocationServices
     *
     * A collection of services offered away from the rental facility, such as vehicle
     * delivery and pickup, customer collecton and return.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOffLocationServices($index)
    {
        return isset($this->offLocationServices[$index]);
    }

    /**
     * unset offLocationServices
     *
     * A collection of services offered away from the rental facility, such as vehicle
     * delivery and pickup, customer collecton and return.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOffLocationServices($index)
    {
        unset($this->offLocationServices[$index]);
    }

    /**
     * Gets as offLocationServices
     *
     * A collection of services offered away from the rental facility, such as vehicle
     * delivery and pickup, customer collecton and return.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType[]
     */
    public function getOffLocationServices()
    {
        return $this->offLocationServices;
    }

    /**
     * Sets a new offLocationServices
     *
     * A collection of services offered away from the rental facility, such as vehicle
     * delivery and pickup, customer collecton and return.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\OffLocationServicesAType\OffLocationServiceAType[]
     * $offLocationServices
     * @return self
     */
    public function setOffLocationServices(array $offLocationServices)
    {
        $this->offLocationServices = $offLocationServices;

        return $this;
    }

    /**
     * Adds as specialEquipment
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType
     * $specialEquipment
     */
    public function addToSpecialEquipments(
        \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType $specialEquipment
    ) {
        $this->specialEquipments[] = $specialEquipment;

        return $this;
    }

    /**
     * isset specialEquipments
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialEquipments($index)
    {
        return isset($this->specialEquipments[$index]);
    }

    /**
     * unset specialEquipments
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialEquipments($index)
    {
        unset($this->specialEquipments[$index]);
    }

    /**
     * Gets as specialEquipments
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     */
    public function getSpecialEquipments()
    {
        return $this->specialEquipments;
    }

    /**
     * Sets a new specialEquipments
     *
     * A collection of descriptions about the special pieces of equipment that can be
     * included in a rental from this facility.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\VehicleLocationServicesOfferedType\SpecialEquipmentsAType\SpecialEquipmentAType[]
     * $specialEquipments
     * @return self
     */
    public function setSpecialEquipments(array $specialEquipments)
    {
        $this->specialEquipments = $specialEquipments;

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

