<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing VehicleAvailRSCoreType
 *
 * The VehicleAvailRSType complex type identifies the data that is considered
 * common when describing the availability and rates of rental vehicles.
 * XSD Type: VehicleAvailRSCoreType
 */
class VehicleAvailRSCoreType
{

    /**
     * Information that is common, or core, to all requests and responses associated
     * with the reservation of a vehicle.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleRentalCoreType $vehRentalCore
     */
    private $vehRentalCore = null;

    /**
     * A collection of vendors for which vehicle availability is available.
     *
     * @property \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType[]
     * $vehVendorAvails
     */
    private $vehVendorAvails = null;

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
     * Adds as vehVendorAvail
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType
     * $vehVendorAvail
     */
    public function addToVehVendorAvails(\Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType $vehVendorAvail)
    {
        $this->vehVendorAvails[] = $vehVendorAvail;

        return $this;
    }

    /**
     * isset vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetVehVendorAvails($index)
    {
        return isset($this->vehVendorAvails[$index]);
    }

    /**
     * unset vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetVehVendorAvails($index)
    {
        unset($this->vehVendorAvails[$index]);
    }

    /**
     * Gets as vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @return \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType[]
     */
    public function getVehVendorAvails()
    {
        return $this->vehVendorAvails;
    }

    /**
     * Sets a new vehVendorAvails
     *
     * A collection of vendors for which vehicle availability is available.
     *
     * @param \Davispeixoto\OpenTravelAlliance\VehicleVendorAvailabilityType[]
     * $vehVendorAvails
     * @return self
     */
    public function setVehVendorAvails(array $vehVendorAvails)
    {
        $this->vehVendorAvails = $vehVendorAvails;

        return $this;
    }


}

