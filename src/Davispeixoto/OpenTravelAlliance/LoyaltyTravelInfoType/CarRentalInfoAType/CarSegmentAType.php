<?php

namespace Davispeixoto\OpenTravelAlliance\LoyaltyTravelInfoType\CarRentalInfoAType;

/**
 * Class representing CarSegmentAType
 */
class CarSegmentAType
{

    /**
     * Car rental supplier information.
     *
     * @property \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     */
    private $vendor = null;

    /**
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * Information on one specific vehicle along with detailed information on the
     * charges associated with this vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle
     */
    private $vehicle = null;

    /**
     * Gets as vendor
     *
     * Car rental supplier information.
     *
     * @return \Davispeixoto\OpenTravelAlliance\CompanyNameType
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * Sets a new vendor
     *
     * Car rental supplier information.
     *
     * @param \Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor
     * @return self
     */
    public function setVendor(\Davispeixoto\OpenTravelAlliance\CompanyNameType $vendor)
    {
        $this->vendor = $vendor;

        return $this;
    }

    /**
     * Gets as vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType
     */
    public function getVehRentalCore()
    {
        return $this->vehRentalCore;
    }

    /**
     * Sets a new vehRentalCore
     *
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     * @return self
     */
    public function setVehRentalCore(\Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore)
    {
        $this->vehRentalCore = $vehRentalCore;

        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Information on one specific vehicle along with detailed information on the
     * charges associated with this vehicle.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleCoreType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Information on one specific vehicle along with detailed information on the
     * charges associated with this vehicle.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle
     * @return self
     */
    public function setVehicle(\Davispeixoto\OpenTravelAlliance\VehicleCoreType $vehicle)
    {
        $this->vehicle = $vehicle;

        return $this;
    }


}

